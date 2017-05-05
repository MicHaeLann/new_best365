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
 *      options={"expose"=true}
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
		// find by key word
		$tag_ids = $this->get('best365.manager.purchasable')->getResult($this->get('request'));


		// find by name
		$name = $this->get('request')->get('field');
		$name_ids = $this
			->get('best365.manager.purchasable')
			->getPurchasableByName($name);

		// find by manufacturer
		$manufacturer_ids = $this
			->get('best365.manager.purchasable')
			->getPurchasableByManufacturerName($name);

		// merge ids
		$ids = array_unique(array_merge($name_ids, $tag_ids));
		$ids = array_unique(array_merge($manufacturer_ids, $ids));

		// get collection by ids
		$collection = array();
		foreach ($ids as $id) {
			$product =  $this
			->get('best365.manager.purchasable')
			->getProduct($id);

			$collection[] = $product;
		}

		return $this->render(
			'Best365Bundle:Product:product.list.html.twig',
			[
				'searching' => $name,
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
		// get product
		$purchasable = $this->get('best365.manager.purchasable')
			->getProduct($id);

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
		$categories = $this
			->get('best365.manager.category')
			->getCategoryTree($purchasable);

		return $this->render(
			'Best365Bundle:Product:product.detail.html.twig',
			[
			'purchasable' => $purchasable,
			'purchasable_ext' => $purchasable_ext,
			'categories' => $categories,
			'useStock'    => $useStock
			]
		);
	}
}