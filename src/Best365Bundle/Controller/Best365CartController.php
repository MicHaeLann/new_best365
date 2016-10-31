<?php

namespace Best365Bundle\Controller;

use Mmoreram\ControllerExtraBundle\Annotation\Entity as AnnotationEntity;
use Mmoreram\ControllerExtraBundle\Annotation\Form as AnnotationForm;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Elcodi\Store\CartBundle\Controller\CartController;
use Elcodi\Component\Cart\Entity\Interfaces\CartInterface;
use Elcodi\Component\Cart\Entity\Interfaces\CartLineInterface;
use Elcodi\Component\Product\Entity\Interfaces\PurchasableInterface;

/**
 * Cart controllers
 *
 * @Security("has_role('ROLE_CUSTOMER')")
 * @Route(
 *      path = "/best365/cart",
 * )
 */
class Best365CartController extends CartController
{
	/**
	 * Cart view
	 *
	 * @param FormView      $formView Form view
	 * @param CartInterface $cart     Cart
	 *
	 * @return Response Response
	 *
	 * @Route(
	 *      path = "",
	 *      name = "best365_store_cart_view",
	 *      methods = {"GET"}
	 * )
	 *
	 * @AnnotationEntity(
	 *      class = {
	 *          "factory" = "elcodi.wrapper.cart",
	 *          "method" = "get",
	 *          "static" = false,
	 *      },
	 *      name = "cart"
	 * )
	 * @AnnotationForm(
	 *      class = "store_cart_form_type_cart",
	 *      name  = "formView",
	 *      entity = "cart",
	 * )
	 */
	public function viewAction(FormView $formView, CartInterface $cart)
	{
		$cartCoupons = $this
			->get('elcodi.manager.cart_coupon')
			->getCartCoupons($cart);

		return $this->render(
			'Best365Bundle:Cart:cart.view.html.twig',
			[
				'cart'        => $cart,
				'cartCoupons' => $cartCoupons,
				'form'        => $formView,
			]
		);
	}

	/**
	 * Deletes CartLine
	 *
	 * @param CartInterface     $cart     Cart
	 * @param CartLineInterface $cartLine Cart Line
	 *
	 * @return RedirectResponse
	 *
	 * @Route(
	 *      path = "/line/{id}/delete",
	 *      name="best365_store_cartline_remove",
	 *      methods = {"GET"}
	 * )
	 *
	 * @AnnotationEntity(
	 *      class = {
	 *          "factory" = "elcodi.wrapper.cart",
	 *          "method" = "get",
	 *          "static" = false,
	 *      },
	 *      name = "cart"
	 * )
	 * @AnnotationEntity(
	 *      class = "elcodi.entity.cart_line.class",
	 *      name = "cartLine",
	 *      mapping = {
	 *          "id" = "~id~",
	 *      }
	 * )
	 */
	public function removeCartLineAction(
		CartInterface $cart,
		CartLineInterface $cartLine
	) {
		$this
			->get('elcodi.manager.cart')
			->removeLine(
				$cart,
				$cartLine
			);

		return $this->redirect(
			$this->generateUrl('best365_store_cart_view')
		);
	}

	/**
	 * Update Cart
	 *
	 * @param FormInterface $form    Form
	 * @param CartInterface $cart    Cart
	 * @param boolean       $isValid Form is valid
	 *
	 * @return RedirectResponse
	 *
	 * @Route(
	 *      path = "/update",
	 *      name="best365_store_cart_update",
	 *      methods = {"POST"}
	 * )
	 *
	 * @AnnotationEntity(
	 *      class = {
	 *          "factory" = "elcodi.wrapper.cart",
	 *          "method" = "get",
	 *          "static" = false,
	 *      },
	 *      name = "cart"
	 * )
	 * @AnnotationForm(
	 *      class = "store_cart_form_type_cart",
	 *      entity = "cart",
	 *      handleRequest = true,
	 *      validate = "isValid",
	 * )
	 */
	public function updateCartAction(FormInterface $form, CartInterface $cart, $isValid) {
		if ($isValid) {
			$this
				->get('elcodi.object_manager.cart')
				->flush();
		}

		return $this->redirect(
			$this->generateUrl('best365_store_cart_view')
		);
	}

	/**
	 * Empty Cart
	 *
	 * @param CartInterface $cart Cart
	 *
	 * @return RedirectResponse
	 *
	 * @Route(
	 *      path = "/empty",
	 *      name="best365_store_cart_empty",
	 *      methods = {"GET"}
	 * )
	 *
	 * @AnnotationEntity(
	 *      class = {
	 *          "factory" = "elcodi.wrapper.cart",
	 *          "method" = "get",
	 *          "static" = false,
	 *      },
	 *      name = "cart"
	 * )
	 */
	public function emptyCartAction(CartInterface $cart)
	{
		$this
			->get('elcodi.manager.cart')
			->emptyLines($cart);

		return $this->redirect(
			$this->generateUrl('store_homepage')
		);
	}
}