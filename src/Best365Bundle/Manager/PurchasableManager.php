<?php

namespace Best365Bundle\Manager;

use Best365Bundle\Entity\PurchasableTag;
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
			->getRepository('Best365Bundle\Entity\PurchasableTag')
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
			->getRepository('Best365Bundle\Entity\PurchasableTag')
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
			->getRepository('Best365Bundle\Entity\PurchasableTag')
			->findOneByPurchasableId($product->getId());

		// init tag data if empty
		if (empty($purchasable_tag)) {
			$purchasable_tag = new PurchasableTag();
			$purchasable_tag->setPurchasableId($product->getId());
		}

		// update tag data
		$purchasable_tag->setTag($request->get('tag'));
		$this->em->persist($purchasable_tag);
		$this->em->flush();
	}
}