<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 25/10/16
 * Time: 3:27 PM
 */

namespace Best365Bundle\Controller;

use Elcodi\Component\Product\Entity\Purchasable;
use Elcodi\Store\ProductBundle\Controller\PurchasableController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Product controllers
 *
 * @Security("has_role('ROLE_CUSTOMER')")
 * @Route(
 *      path = "/best365",
 * )
 */
class Best365ProductController extends PurchasableController
{
	/**
	 * get result by search field
	 *
	 * @return Response Response
	 *
	 * @Security("has_role('ROLE_CUSTOMER')")
	 * @Route(
	 *      path = "/product/search",
	 *      name = "best365_store_product_search",
	 *      methods = {"GET", "POST"}
	 * )
	 *
	 */
	public function searchAction()
	{
		// find by key word
		$tag_ids = $this->get('best365.manager.purchasable')->getResult($this->get('request'));


		// find by name(if Chinese, split by word;if English, split by space)
		$name = $this->get('request')->get('field');
		$name_ids = $this->getPurchasableByName($name);

		// merge ids
		$ids = array_unique(array_merge($name_ids, $tag_ids));

		// get collection by ids
		$collection = array();
		foreach ($ids as $id) {
			$collection[] = $this
			->get('elcodi.repository.purchasable')
			->find($id);
		}

		return $this->render(
			'Best365Bundle:Product:product.list.html.twig',
			[
				'purchasables' => $collection,
			]
		);
	}

	/**
	 * Purchasable view
	 *
	 * @param integer $id   Purchasable id
	 * @return array
	 *
	 * @Route(
	 *      path = "/product/{id}",
	 *      name = "best365_store_product_view",
	 *      requirements = {
	 *          "id": "\d+",
	 *      },
	 *      methods = {"GET"}
	 * )
	 */
	public function detailAction($id)
	{
		// get product
		$purchasable = $this
			->get('elcodi.repository.purchasable')
			->find($id);

		$useStock = $this
			->get('elcodi.store')
			->getUseStock();

		// build category tree
		$categories = $this->getCategoryTree($purchasable);

		return $this->render(
			'Best365Bundle:Product:product.detail.html.twig',
			[
			'purchasable' => $purchasable,
			'categories' => $categories,
			'useStock'    => $useStock
			]
		);
	}

	/**
	 * get product by name
	 * @param $name
	 * @return array
	 */
	public function getPurchasableByName($name)
	{
		// check lan
		if (strlen($name) != mb_strlen($name, 'utf-8')) {
			// Chinese
			$field_chars = str_split($name);
		} else {
			// English
			$field_chars = explode(' ', $name);
		}
		$chars = array();
		foreach ($field_chars as $char) {
			if ($char !== ' ' && !in_array($char, $chars)) {
				$chars[] = $char;
			}
		}

		$length = count($chars);

		$query = $this->get('elcodi.repository.purchasable')
			->createQueryBuilder('p');
		$where = 'p.name LIKE ';
		for ($i = 0; $i < $length; $i++) {
			if ($i > 0) {
				$where .= ' AND p.name LIKE ';
			}
			$where .= ':letter'.$i;
		}
		$query->where($where);

		for($i = 0; $i < $length; $i++) {
			$letter = 'letter' . $i;
			$query->setParameter($letter, '%' . $chars[$i] . '%');
		}
		$result = $query->getQuery()
			->getResult();

		$ids = array();
		foreach ($result as $purchasable) {
			$ids[] = $purchasable->getId();
		}

		return $ids;
	}

	/**
	 * get category tree
	 * @param Purchasable $purchasable
	 * @return Object $tree
	 */
	public function getCategoryTree(Purchasable $purchasable)
	{
		// product category
		$category = $purchasable->getPrincipalCategory();
		$parent_category = $category->getParent();

		if (empty($parent_category)) {
			$parent_category = $category;
			$children_categories = $this
				->get('elcodi.repository.category')
				->getChildrenCategories($category);
		} else {
			$children_categories = $this
				->get('elcodi.repository.category')
				->getChildrenCategories($parent_category);
		}

		$tree = new \StdClass();
		$tree->parent = $parent_category;
		$tree->child = $children_categories;

		return $tree;
	}
}