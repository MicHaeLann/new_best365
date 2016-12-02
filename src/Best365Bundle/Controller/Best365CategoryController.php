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
 * Category controller
 *
 * @Route(
 *      path = "/best365"
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
	 *      path = "/category/{id}",
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
		$categoryRepository = $this->get('elcodi.repository.category');
		$purchasableRepository = $this->get('elcodi.repository.purchasable');

		$categories = array_merge(
			[$category],
			$categoryRepository->getChildrenCategories($category)
		);
		$purchasables = $purchasableRepository->getAllFromCategories($categories);

		return $this->render(
			'Best365Bundle:Product:product.list.html.twig',
			[
				'purchasables' => $purchasables
			]
		);
	}
}