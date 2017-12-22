<?php

namespace Best365Bundle\Manager;

use Best365Bundle\Entity\PurchasableExt;
use Best365Bundle\Entity\PurchasablePrice;
use Elcodi\Component\Currency\Repository\CurrencyRepository;
use Elcodi\Component\Currency\Services\CurrencyConverter;
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
	 * PurchasableManager constructor.
	 * @param EntityManager $em
	 * @param PurchasableRepository $pr
	 * @param CustomerWrapper $cw
	 * @param CurrencyConverter $cc
	 * @param CurrencyRepository $cr
	 * @param ManufacturerRepository $mr
	 */
	public function __construct(
		EntityManager $em,
		PurchasableRepository $pr,
		CustomerWrapper $cw,
		CurrencyConverter $cc,
		CurrencyRepository $cr,
		ManufacturerRepository $mr
	)
	{
		$this->em = $em;
		$this->pr = $pr;
		$this->cw = $cw;
		$this->cc = $cc;
		$this->cr = $cr;
		$this->mr = $mr;
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
		$purchasable_ext = $this->getProductExt($purchasable);
		$customer = $this->cw->get();

		if ($purchasable->getReducedPrice()->getAmount() == 0) {
			$purchasable->setReducedPrice($purchasable->getPrice());
		}

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
				if ($product_price->getPriceCurrencyIso() != $purchasable->getPrice()->getCurrency()->getIso()) {
					$price = \Elcodi\Component\Currency\Entity\Money::create(
						$product_price->getPrice(),
						$currency
					);
					$membership_price = $this->cc->convertMoney($price, $purchasable->getPrice()->getCurrency());
				}
				$purchasable->setPrice($membership_price);
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
}
