<?php

namespace Best365Bundle\Manager;

use Doctrine\ORM\EntityManager;
use Elcodi\Component\Product\Repository\CategoryRepository;
use Elcodi\Store\ProductBundle\Services\StoreCategoryTree;
use Elcodi\Component\Product\Entity\Purchasable;

class Best365CategoryManager
{
	/**
	 * @var EntityManager
	 */
	private $em;

	/**
	 * @var StoreCategoryTree
	 */
	private $sct;

	/**
	 * @var CategoryRepository
	 */
	private $cr;

	/**
	 * Best365CategoryManager constructor.
	 * @param EntityManager $em
	 * @param StoreCategoryTree $sct
	 * @param CategoryRepository $cr
	 */
	public function __construct(
		EntityManager $em,
		StoreCategoryTree $sct,
		CategoryRepository $cr
	)
	{
		$this->em = $em;
		$this->sct = $sct;
		$this->cr = $cr;
	}

	/**
	 * get all categories listed on home page
	 * @return array
	 */
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

	/**
	 * get all categories
	 * @return array
	 */
	public function all()
	{
		return $this->cr->findAll();
	}

	/**
	 * get category array(id => name)
	 * @return array
	 */
	public function getCategoryArray()
	{
		$arr = array();
		$categories = $this->all();
		foreach ($categories as $v) {
			$arr[$v->getId()] = $v->getName();
		}

		return $arr;
	}
}
