<?php

namespace Best365Bundle\Manager;

use Best365Bundle\Entity\PurchasableExt;
use Best365Bundle\Entity\PurchasablePrice;
use Elcodi\Component\Currency\Repository\CurrencyRepository;
use Elcodi\Component\Currency\Services\CurrencyConverter;
use Elcodi\Component\EntityTranslator\Repository\EntityTranslationRepository;
use Elcodi\Component\Product\Entity\Interfaces\CategoryInterface;
use Elcodi\Component\Product\Entity\Interfaces\ProductInterface;
use Elcodi\Component\Product\Repository\ManufacturerRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;
use Elcodi\Component\Product\Repository\PurchasableRepository;
use Elcodi\Component\User\Wrapper\CustomerWrapper;

class PurchasableManager
{
	/**
	 * @var EntityManager
	 */
	private $em;

	/**
	 * @var PurchasableRepository
	 */
	private $pr;

	/**
	 * @var CustomerWrapper
	 */
	private $cw;

	/**
	 * @var CurrencyConverter
	 */
	private $cc;

	/**
	 * @var CurrencyRepository
	 */
	private $cr;

	/**
	 * @var ManufacturerRepository
	 */
	private $mr;

	/**
	 * @var EntityTranslationRepository
	 */
	private $etr;

	private $bm;


	/**
	 * PurchasableManager constructor.
	 * @param EntityManager $em
	 * @param PurchasableRepository $pr
	 * @param CustomerWrapper $cw
	 * @param CurrencyConverter $cc
	 * @param CurrencyRepository $cr
	 * @param ManufacturerRepository $mr
	 * @param EntityTranslationRepository $etr
	 * @param Best365BestsellingManager $bm
	 */
	public function __construct(
		EntityManager $em,
		PurchasableRepository $pr,
		CustomerWrapper $cw,
		CurrencyConverter $cc,
		CurrencyRepository $cr,
		ManufacturerRepository $mr,
		EntityTranslationRepository $etr,
		Best365BestsellingManager $bm
	)
	{
		$this->em = $em;
		$this->pr = $pr;
		$this->cw = $cw;
		$this->cc = $cc;
		$this->cr = $cr;
		$this->mr = $mr;
		$this->etr = $etr;
		$this->bm = $bm;
	}

	/**
	 * get purchasable collection by search field
	 * @param Request $request
	 * @return array
	 */
	public function getResult(Request $request)
	{
		$ids = array();
		$field = $request->get('field');
		$collection = $this->em
			->getRepository('Best365Bundle\Entity\PurchasableExt')
			->createQueryBuilder('p')
			->where('p.tag LIKE :tag')
			->setParameter('tag', '%' . $field . '%')
			->getQuery()
			->getResult();

		foreach ($collection as $tag) {
			$product = $this->pr->find($tag->getPurchasableId());
			if (!empty($product) && $product->isEnabled()) {
				$ids[] = $tag->getPurchasableId();
			}
		}

		return $ids;
	}

	/**
	 * get tag by product
	 * @param ProductInterface $product
	 * @return string
	 */
	public function getTag(ProductInterface $product)
	{
		$purchasable_tag = $this->em
			->getRepository('Best365Bundle\Entity\PurchasableExt')
			->findOneByPurchasableId($product->getId());
		$tag = '';
		if (!empty($purchasable_tag)) {
			$tag = $purchasable_tag->getTag();
		}
		return $tag;
	}

	/**
	 * update purchasable tag
	 * @param ProductInterface $product
	 * @param Request $request
	 */
	public function updateTag(ProductInterface $product, Request $request)
	{
		$purchasable_tag = $this->em
			->getRepository('Best365Bundle\Entity\PurchasableExt')
			->findOneByPurchasableId($product->getId());

		// init tag data if empty
		if (empty($purchasable_tag)) {
			$purchasable_tag = new PurchasableExt();
			$purchasable_tag->setPurchasableId($product->getId());
		}

		// update tag data
		$purchasable_tag->setTag($request->get('tag'));
		$this->em->persist($purchasable_tag);
		$this->em->flush();
	}

	/**
	 * get ext info of product
	 * @param ProductInterface $product
	 * @return array
	 */
	public function getProductExt(ProductInterface $product)
	{
		$purchasable_ext = $this->em
			->getRepository('Best365Bundle\Entity\PurchasableExt')
			->findOneByPurchasableId($product->getId());

		return $purchasable_ext;
	}

	/**
	 * update product ext info
	 * @param ProductInterface $product
	 * @param Request $request
	 */
	public function updateProductExt(ProductInterface $product, Request $request)
	{
		$purchasable_ext = $this->em
			->getRepository('Best365Bundle\Entity\PurchasableExt')
			->findOneByPurchasableId($product->getId());

		// init ext data if empty
		if (empty($purchasable_ext)) {
			$purchasable_ext = new PurchasableExt();
			$purchasable_ext->setPurchasableId($product->getId());
		}

		// update tag data
		$purchasable_ext->setTag($request->get('tag'));
		$purchasable_ext->setBarcode($request->get('barcode'));
		if ($request->get('fixedPrice')) {
			$purchasable_ext->setFixedPrice(1);
		} else {
			$purchasable_ext->setFixedPrice(0);
		}
		$this->em->persist($purchasable_ext);
		$this->em->flush();
	}

	public function updateProductPrice(ProductInterface $product, Request $request)
	{
		foreach ($request->get('price') as $mid => $price) {
			$purchasable_price = $this->em
				->getRepository('Best365Bundle\Entity\PurchasablePrice')
				->findOneBy(array('pid' => $product->getId(), 'mid' => $mid));

			// init price data if empty
			if (empty($purchasable_price)) {
				$purchasable_price = new PurchasablePrice();
				$purchasable_price->setPid($product->getId());
				$purchasable_price->setMid($mid);
			}

			// update price
			$purchasable_price->setPrice($price['price'] * 100);
			$purchasable_price->setPriceCurrencyIso($price['iso']);

			$this->em->persist($purchasable_price);
		}
		$this->em->flush();
	}

	/**
	 * get product info
	 * @param $id
	 * @return object
	 */
	public function getProduct($id)
	{
		$purchasable = $this->pr->find($id);
		if (!empty($purchasables) && $purchasable->getReducedPrice()->getAmount() == 0) {
			$purchasable->setReducedPrice($purchasable->getPrice());
		}

		if (!empty($purchasable)) {
			$purchasable_ext = $this->getProductExt($purchasable);
			$customer = $this->cw->get();

			// if not fixed, set membership price to product price
			if (!empty($customer->getId()) && !empty($purchasable_ext) && !$purchasable_ext->getFixedPrice()) {
				$membership = $this->em
					->getRepository('Best365Bundle\Entity\CustomerMembership')
					->findOneByCustomerId($customer->getId())
					->getMembership();

				$product_price = $this->getProductMembershipPrice($id, $membership);
				if (!empty($product_price)) {
					$currency = $this->cr->findOneBy(array('enabled' => true, 'iso' => $product_price->getPriceCurrencyIso()));
					$membership_price = \Elcodi\Component\Currency\Entity\Money::create(
						$product_price->getPrice(),
						$currency
					);

					// if price currency not match, convert to purchasable price currency
					if ($product_price->getPriceCurrencyIso() != $purchasable->getReducedPrice()->getCurrency()->getIso()) {
						$price = \Elcodi\Component\Currency\Entity\Money::create(
							$product_price->getPrice(),
							$currency
						);
						$membership_price = $this->cc->convertMoney($price, $purchasable->getReducedPrice()->getCurrency());
					}
					$purchasable->setReducedPrice($membership_price);
				}
			}
		}

		return $purchasable;
	}

	/**
	 * Update product stock
	 * @param $id
	 * @param $stock
	 */
	public function updateProductStock($id, $stock)
	{
		$purchasable = $this->pr->find($id);
		$purchasable->setStock($stock);
		$this->em->persist($purchasable);
		$this->em->flush();
	}

	private function getProductMembershipPrice($pid, $mid)
	{
		$record = $this->em
			->getRepository('Best365Bundle\Entity\PurchasablePrice')
			->findOneBy(array('pid' => $pid, 'mid' =>$mid));

		return $record;
	}

	public function getProductPrice($pid)
	{
		$record = $this->em
			->getRepository('Best365Bundle\Entity\PurchasablePrice')
			->findBy(array('pid' => $pid));

		return $record;
	}


	public function getHomepageFormula(CategoryInterface $category)
	{
		$formula = $this->pr->getAllEnabledFromCategories(array($category));
		return $formula;
	}

	/**
	 * get product by name
	 * @param $name
	 * @return array
	 */
	public function getPurchasableByName($name)
	{
		$ids = array();

		$purchasable = $this
			->pr
			->findBy(array('enabled' => 1));
		foreach($purchasable as $product) {
			if (strpos(strtolower($product->getName()), strtolower($name)) !== false) {
				$ids[] = $product->getId();
			}
		}

		return $ids;
	}

	/**
	 * get product by manufacturer
	 * @param $name
	 * @return array
	 */
	public function getPurchasableByManufacturerName($name)
	{
		$ids = $mids = array();

		// get manufacturer
		$manufacturers = $this
			->mr
			->findBy(array('enabled' => 1));
		foreach ($manufacturers as $manufacturer) {
			if (strpos(strtolower($manufacturer->getName()), strtolower($name)) !== false) {
				$mids[] = $manufacturer->getId();
			}
		}

		// get product
		$purchasables = $this
			->pr
			->findby(array('enabled' => 1));

		foreach ($purchasables as $product) {
			$manufacturer = $product->getManufacturer();
			if (!empty($manufacturer) && in_array($manufacturer->getId(), $mids)) {
				$ids[] = $product->getId();
			}
		}

		return $ids;
	}

	public function updateFormula($arr)
	{
		foreach ($arr as $v) {
			$id = $v[0];
			$name = $v[1];
			$expire = $v[2];
			$price = $v[3];

			if (!empty($id)) {
				$purchasable = $this->pr->find($id);

				if (!empty($purchasable)) {
					$currency = $this->cr->findOneBy(array('enabled' => true, 'iso' => 'nzd'));
					$reduced_price = \Elcodi\Component\Currency\Entity\Money::create(
						$price * 100,
						$currency
					);
					$price = \Elcodi\Component\Currency\Entity\Money::create(
						$price * 100 + 500,
						$currency
					);
					$purchasable->setReducedPrice($reduced_price);
					$purchasable->setPrice($price);
					$this->em->persist($purchasable);
				}

				$translation = $this->etr->findOneBy(array(
					'entityType' => 'purchasable',
					'entityId' => $id,
					'entityField' => 'name',
					'locale' => 'zh-CN'
				));

				if (!empty($translation)) {
					$entity = $translation->getTranslation();

					$pattern = '/(\d+)[.\/](\d+)/';
					if (strpos($entity, '保质期') == false) {
						$entity .= ' 保质期' . $expire;
					} elseif (count(preg_match($pattern, $entity)) > 0) {
						$entity = preg_replace($pattern, $expire, $entity);
					}
					$translation->setTranslation($entity);
					$this->em->persist($translation);
				}
			}
		}
		$this->em->flush();
	}

	public function updateProduct($arr)
	{
		$this->bm->clear();
		foreach ($arr as $v) {
			$id = $v[0];
			if (empty($id)) {
				continue;
			}
			$cname = empty($v[1]) ? '空' : $v[1];
			$cdes = empty($v[2]) ? '' : $v[2];
			$ename = empty($v[3]) ? 'empty' : $v[3];
			$edes = empty($v[4]) ? '' : $v[4];
			$category = $v[5];
			$manufacturer = $v[6];
			$expire = $v[7];
			$sku = empty($v[8]) ? '' : $v[8];
			$fixed = empty($v[9]) ? 0 : $v[9];
			$reduced = empty($v[10]) ? 0 : $v[10];
			$price = empty($v[11]) ? 0 : $v[11];
			$weight = empty($v[16]) ? 0 : $v[16];
			$barcode = empty($v[17]) ? '' : $v[17];
			$stock = empty($v[18]) ? 0 : $v[18];
			$tag = empty($v[19]) ? '' : $v[19];
			$enabled = empty($v[20]) ? 0 : $v[20];
			$hot = empty($v[21]) ? 0 : $v[21];

			$purchasable = $this->pr->find($id);

			// update purchasable
			if (!empty($purchasable)) {
				$purchasable->setName($ename);
				$purchasable->setDescription($edes);
				$purchasable->setSku($sku);

				$currency = $this->cr->findOneBy(array('enabled' => true, 'iso' => 'nzd'));
				$purchasable->setReducedPrice(\Elcodi\Component\Currency\Entity\Money::create($reduced, $currency));
				$purchasable->setPrice(\Elcodi\Component\Currency\Entity\Money::create($price, $currency));
				$purchasable->setWeight($weight);
				$purchasable->setStock($stock);
				$purchasable->setEnabled($enabled);
				$this->em->persist($purchasable);
			}

			// update purchasable ext
			$ext = $this->em
				->getRepository('Best365Bundle\Entity\PurchasableExt')
				->findOneByPurchasableId($id);
			if (!empty($ext)) {
				$ext->setTag($tag);
				$ext->setBarcode($barcode);
				$ext->setFixedPrice($fixed);
				$this->em->persist($ext);
			}


			// update translation
			$translation = $this->etr->findOneBy(array(
				'entityType' => 'purchasable',
				'entityId' => $id,
				'entityField' => 'description',
				'locale' => 'zh-CN'
			));
			if (!empty($translation)) {
				$translation->setTranslation($cdes);
				$this->em->persist($translation);
			}

			$pattern = '/(\d+)[.\/](\d+)/';
			if (strpos($cname, '保质期') == false) {
				$cname .= ' 保质期' . $expire;
			} elseif (count(preg_match($pattern, $cname)) > 0) {
				$cname = preg_replace($pattern, $expire, $cname);
			}

			$translation = $this->etr->findOneBy(array(
				'entityType' => 'purchasable',
				'entityId' => $id,
				'entityField' => 'name',
				'locale' => 'zh-CN'
			));

			if (!empty($translation)) {
				$translation->setTranslation($cname);
				$this->em->persist($translation);
			}

			// add hot
			if ($hot) {
				$this->bm->add($id);
			}
		}

		$this->em->flush();
	}

	public function exportProduct()
	{
		$arr = array();
		$arr[] = array(
			'ID',
			'CNames/商品名称',
			'CDescriptions/商品描述',
			'ENames/商品英文名称',
			'EDescriptions/商品英文描述',
			'Category/商品分类',
			'Manufacturer/商品生产商',
			'Expires/有效期',
			'SKU/货号',
			'Fixed/固定价格',
			'ReducedPrice/显示价格',
			'Price/原价',
			'Membership Price/会员价格',
			'Membership Price/会员价格',
			'Membership Price/会员价格',
			'Membership Price/会员价格',
			'Weight/商品重量',
			'Barcode/条形码',
			'Stock/库存',
			'Tags/标签',
			'Enabled/有效',
			'Hot/热销'
		);

		$product = $this->all();

		foreach ($product as $v) {
			$id = $v->getId();
			if ($id > 23) {
				$trans = $this->etr->findOneBy(array(
					'entityType' => 'purchasable',
					'entityId' => $id,
					'entityField' => 'name',
					'locale' => 'zh-CN'
				));
				$cname = !empty($trans) ? $trans->getTranslation() : '';

				$trans = $this->etr->findOneBy(array(
					'entityType' => 'purchasable',
					'entityId' => $id,
					'entityField' => 'description',
					'locale' => 'zh-CN'
				));
				$cdescription = !empty($trans) ? $trans->getTranslation() : '';

				$category = !empty($v->getPrincipalCategory()) ? $v->getPrincipalCategory()->getName() : '';
				$manufacturer = !empty($v->getManufacturer()) ? $v->getManufacturer()->getName() : '';

				$ext = $this->em
					->getRepository('Best365Bundle\Entity\PurchasableExt')
					->findOneBy(array(
						'purchasableId' => $id
					));
				$fixed = !empty($ext) ? $ext->getFixedPrice() :0;
				$barcode = !empty($ext) ? $ext->getBarcode() : '';
				$tag = !empty($ext) ? $ext->getTag() : '';

				$hot = $this->bm->isHot($id) ? 1 : 0;

				$enabled = $v->isEnabled() ? 1 : 0;

				$arr[] = array(
					$id,
					$cname,
					$cdescription,
					$v->getName(),
					$v->getDescription(),
					$category,
					$manufacturer,
					'',
					$v->getSku(),
					$fixed,
					$v->getReducedPrice()->getAmount(),
					$v->getPrice()->getAmount(),
					'',
					'',
					'',
					'',
					$v->getWeight(),
					$barcode,
					$v->getStock(),
					$tag,
					$enabled,
					$hot
				);
			}
		}

		return $arr;
	}

	public function all()
	{
		return $this->pr->findAll();
	}
}
