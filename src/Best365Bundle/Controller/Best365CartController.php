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
		// get strategy
		$customer = $this
			->get('elcodi.wrapper.customer')
			->get();

		$membership = $this->get('best365.manager.customer')
			->getCustomerMembership($customer);


		// subtract shipping amount
		$shipping_price = $this->get('elcodi.converter.currency')
			->convertMoney($cart->getShippingAmount(), $cart->getAmount()->getCurrency());
		$cart->setAmount($cart->getAmount()->subtract($shipping_price));

		return $this->render(
			'Best365Bundle:Cart:cart.view.html.twig',
			[
				'cart'		=> $cart,
				'form'		=> $formView,
				'strategy'	=> $membership->getStrategy()
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
	public function removeCartLineAction(CartInterface $cart, CartLineInterface $cartLine)
	{
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
	public function updateCartAction(FormInterface $form, CartInterface $cart, $isValid)
	{
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
			$this->generateUrl('best365_store_homepage')
		);
	}

	/**
	 * Adds product into cart
	 *
	 * @param CartInterface $cart    	Cart
	 * @param integer       $id      	Purchasable Id
	 * @param integer		$quantity	Purchasable Quantity
	 *
	 * @return Response Redirect response
	 *
	 * @throws EntityNotFoundException Purchasable not found
	 *
	 * @Route(
	 *      path = "/purchasable/{id}/add/{quantity}",
	 *      name = "best365_store_cart_add_purchasable",
	 *      requirements = {
	 *          "id": "\d+",
	 *     		"quantity": "\d+"
	 *      },
	 *      methods = {"GET", "POST"}
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
	public function addAction(CartInterface $cart, $id, $quantity)
	{
		$purchasable = $this
			->get('elcodi.repository.purchasable')
			->find($id);

		if (!$purchasable instanceof PurchasableInterface) {
			throw new EntityNotFoundException('Purchasable not found');
		}

		$this
			->get('elcodi.manager.cart')
			->addPurchasable(
				$cart,
				$purchasable,
				(int) $quantity
			);

		return $this->redirect(
			$this->generateUrl('best365_store_cart_view')
		);
	}
}