<?php

namespace Best365Bundle\Manager;

use Best365Bundle\Entity\PurchasableExt;
use Elcodi\Component\Product\Entity\Interfaces\ProductInterface;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;

class PurchasableManager
{
	private $em;

	public function __construct(EntityManager $em)
	{
		$this->em = $em;
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
			$ids[] = $tag->getPurchasableId();
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
		$this->em->persist($purchasable_ext);
		$this->em->flush();
	}
}