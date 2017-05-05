<?php

namespace Best365Bundle\Manager;

use Doctrine\ORM\EntityManager;
use Elcodi\Store\ProductBundle\Services\StoreCategoryTree;
use Elcodi\Component\Product\Entity\Purchasable;

class Best365CategoryManager
{
	private $em;

	private $sct;

	public function __construct(
		EntityManager $em,
		StoreCategoryTree $sct
	)
	{
		$this->em = $em;
		$this->sct = $sct;
	}

	public function getHomepageCategory()
	{
		$categories = $this
			->em
			->getRepository('Best365Bundle\Entity\CategoryExt')
			->findBy(array('showInHome' => 1));
		return $categories;
	}

	/**
	 * get category tree
	 * @param Purchasable $purchasable
	 * @return Object $tree
	 */
	public function getCategoryTree(Purchasable $purchasable)
	{
		// store category tree
		$categories = $this
			->sct
			->load();

		// product category
		$principal_category = $purchasable->getPrincipalCategory();
		$parent_category = $principal_category->getParent();

		if (empty($parent_category)) {
			$parent_category = $principal_category;
		}

		foreach ($categories as $category) {
			if ($category['entity']['id'] == $parent_category->getId()) {
				return $category;
			}
		}
	}
}