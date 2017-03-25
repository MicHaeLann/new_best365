<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 29/11/16
 * Time: 4:38 PM
 */

namespace Best365Bundle\Controller;

use Mmoreram\ControllerExtraBundle\Annotation\Entity as AnnotationEntity;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Elcodi\Component\Product\Entity\Interfaces\CategoryInterface;
use Elcodi\Component\Product\Entity\Interfaces\PurchasableInterface;
use Elcodi\Component\Product\Repository\CategoryRepository;
use Elcodi\Component\Product\Repository\PurchasableRepository;
use Elcodi\Store\CoreBundle\Controller\Traits\TemplateRenderTrait;
use Elcodi\Store\ProductBundle\Controller\CategoryController;
/**
 * Category controllers
 *
 * @Route(
 *      path = "/best365/category",
 *      options={"expose"=true}
 * )
 */

class Best365CategoryController extends CategoryController
{
	use TemplateRenderTrait;

	/**
	 * Render all category purchasables
	 *
	 * @param CategoryInterface $category Category
	 *
	 * @return Response Response
	 *
	 * @Route(
	 *      path = "/{id}",
	 *      name = "best365_store_category_purchasables_list",
	 *      requirements = {
	 *          "slug" = "[a-zA-Z0-9-]+",
	 *          "id" = "\d+"
	 *      },
	 *      methods = {"GET"}
	 * )
	 *
	 * @AnnotationEntity(
	 *      class = "elcodi.entity.category.class",
	 *      name = "category",
	 *      mapping = {
	 *          "id" = "~id~",
	 *          "enabled" = true,
	 *      }
	 * )
	 */
	public function listAction(CategoryInterface $category)
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

		// get purchasables
		$categoryRepository = $this->get('elcodi.repository.category');
		$purchasableRepository = $this->get('elcodi.repository.purchasable');

		$categories = array_merge(
			[$category],
			$categoryRepository->getChildrenCategories($category)
		);
		$purchasables = $purchasableRepository->getAllEnabledFromCategories($categories);

		// get fixed price
		foreach ($purchasables as &$purchasable) {
			$purchasable_ext = $this->get('best365.manager.purchasable')
				->getProductExt($purchasable);
			$fixed_price = 0;
			if (!empty($purchasable_ext)) {
				$fixed_price = $purchasable_ext->getFixedPrice();
			}
			$purchasable->fixedPrice = $fixed_price;
		}

		// store category tree
		$categories = $this
			->get('elcodi_store.store_category_tree')
			->load();

		// product category
		$parent_category = $category->getParent();

		if (empty($parent_category)) {
			$parent_category = $category;
		}

		foreach ($categories as $category_node) {
			if ($category_node['entity']['id'] == $parent_category->getId()) {
				$category_tree = $category_node;
				break;
			}
		}

		return $this->render(
			'Best365Bundle:Product:product.list.html.twig',
			[
				'categories' => $category_tree,
				'purchasables' => $purchasables,
				'strategy' => $strategy
			]
		);
	}
}