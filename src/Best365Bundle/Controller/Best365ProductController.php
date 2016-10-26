<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 25/10/16
 * Time: 3:27 PM
 */

namespace Best365Bundle\Controller;

use Elcodi\Store\ProductBundle\Controller\PurchasableController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Address controllers
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
		$tags = $this->get('best365.manager.purchasable')->getResult($this->get('request'));

		// call function to find purchasable collection
		$collection = array();
		foreach ($tags as $tag) {
			$collection[] = $this
			->get('elcodi.repository.purchasable')
			->find($tag->getId());
		}

		var_dump($collection);exit;

		return $this->render(
			'Best365Bundle:User:user.edit.html.twig',
			[
				'form' => $formView,
			]
		);
	}
}