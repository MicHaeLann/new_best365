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
 * @Route(
 *      path = "/best365/product",
 * )
 */
class Best365ProductController extends PurchasableController
{
	/**
	 * get result by search field
	 *
	 * @return Response Response
	 *
	 * @Route(
	 *      path = "/search",
	 *      name = "best365_store_product_search",
	 *      methods = {"GET", "POST"}
	 * )
	 *
	 */
	public function searchAction()
	{
		// get strategy
		$customer = $this
			->get('elcodi.wrapper.customer')
			->get();

		if (!empty($customer->getId())) {
			$membership = $this->get('best365.manager.customer')
				->getCustomerMembership($customer);
			$strategy = $membership->getStrategy();
		} else {
			$strategy = 100;
		}

		// find by key word
		$tag_ids = $this->get('best365.manager.purchasable')->getResult($this->get('request'));


		// find by name
		$name = $this->get('request')->get('field');
		$name_ids = $this->getPurchasableByName($name);

		// find by manufacturer
		$manufacturer_ids = $this->getPurchasableByManufacturerName($name);

		// merge ids
		$ids = array_unique(array_merge($name_ids, $tag_ids));
		$ids = array_unique(array_merge($manufacturer_ids, $ids));

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
				'searching' => $name,
				'purchasables' => $collection,
				'strategy' => $strategy
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
	 *      path = "/{id}",
	 *      name = "best365_store_product_view",
	 *      requirements = {
	 *          "id": "\d+",
	 *      },
	 *      methods = {"GET"}
	 * )
	 */
	public function detailAction($id)
	{
		// get strategy
		$customer = $this
			->get('elcodi.wrapper.customer')
			->get();

		if (!empty($customer->getId())) {
			$membership = $this->get('best365.manager.customer')
				->getCustomerMembership($customer);
			$strategy = $membership->getStrategy();
		} else {
			$strategy = 100;
		}

		// get product
		$purchasable = $this->get('elcodi.repository.purchasable')
			->find($id);

		// get product ext
		$purchasable_ext = $this
			->get('best365.manager.purchasable')
			->getProductExt($purchasable);

		// redefine tag by current locale
		if (!empty($purchasable_ext)) {
			$tags = explode(',', $purchasable_ext->getTag());
		} else {
			$tags = array();
		}

		$locale = $this
			->get('request_stack')
			->getMasterRequest()
			->getLocale();
		$new_tags = array();
		foreach ($tags as $tag) {
			if ($locale == 'zh-CN' && mb_strlen($tag, 'utf8') != strlen($tag) ||
				$locale == 'en' && mb_strlen($tag, 'utf8') == strlen($tag)) {
				$new_tags[] = $tag;
			}
		}
		if (!empty($purchasable_ext)) {
			$purchasable_ext->setTag($new_tags);
		}

		$useStock = $this
			->get('elcodi.store')
			->getUseStock();

		// build category tree
		$categories = $this->getCategoryTree($purchasable);

		return $this->render(
			'Best365Bundle:Product:product.detail.html.twig',
			[
			'purchasable' => $purchasable,
			'purchasable_ext' => $purchasable_ext,
			'categories' => $categories,
			'useStock'    => $useStock,
			'strategy' => $strategy
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
		$ids = array();

		$purchasable = $this
			->get('elcodi.repository.purchasable')
			->findAll();
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
			->get('elcodi.repository.manufacturer')
			->findAll();
		foreach ($manufacturers as $manufacturer) {
			if (strpos(strtolower($manufacturer->getName()), strtolower($name)) !== false) {
				$mids[] = $manufacturer->getId();
			}
		}

		// get product
		$purchasables = $this
			->get('elcodi.repository.purchasable')
			->findAll();
		foreach ($purchasables as $product) {
			$manufacturer = $product->getManufacturer();
			if (!empty($manufacturer) && in_array($manufacturer->getId(), $mids)) {
				$ids[] = $product->getId();
			}
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
		// store category tree
		$categories = $this
			->get('elcodi_store.store_category_tree')
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