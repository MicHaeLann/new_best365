<?php

namespace Best365Bundle\Controller;

use Elcodi\Component\Geo\Entity\Interfaces\AddressInterface;
use Mmoreram\ControllerExtraBundle\Annotation\Entity as AnnotationEntity;
use Mmoreram\ControllerExtraBundle\Annotation\Form as AnnotationForm;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\HttpFoundation\RedirectResponse;
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
 *      options={"expose"=true}
 * )
 */
class Best365CartController extends CartController
{
	/**
	 * Cart view
	 *
	 * @param AddressInterface  $address 	Address
	 * @param CartInterface 	$cart     	Cart
	 * @param FormView      	$formView 	Form view
	 * @param boolean       	$isValid  	If the processed form is valid
	 *
	 * @return Response Response
	 *
	 * @Route(
	 *      path = "",
	 *      name = "best365_store_cart_view",
	 *      methods = {"GET", "POST"},
	 *
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
	 *
	 * @AnnotationEntity(
	 *      class = {
	 *          "factory" = "elcodi.factory.address",
	 *          "method" = "create",
	 *          "static" = false
	 *      },
	 *      name = "address",
	 *      persist = false
	 * )
	 *
	 * @AnnotationForm(
	 *      class         = "store_geo_form_type_address",
	 *      name          = "formView",
	 *      entity        = "address",
	 *      handleRequest = true,
	 *      validate      = "isValid"
	 * )
	 */
	public function viewCartAction(AddressInterface $address, CartInterface $cart, FormView $formView, $isValid)
	{
		$active_locale = $this
			->get('request_stack')
			->getMasterRequest()
			->getLocale();

		if ($isValid) {
			// User is adding a new address
			$best365_address = $this->get('best365.manager.address')
				->generateAddress($address);

			$addressManager = $this->get('elcodi.object_manager.address');
			$addressManager->persist($best365_address);
			$addressManager->flush();

			$this
				->get('elcodi.wrapper.customer')
				->get()
				->addAddress($best365_address);

			$this->get('elcodi.object_manager.customer')
				->flush();

			$translator = $this->get('translator');
			$this->addFlash(
				'success', $translator
				->trans('store.address.save.response_ok')
			);

			return $this->redirect(
				$this->generateUrl('best365_store_cart_view')
			);
		}

		// get shipping methods
		$cart = $this->get('best365.manager.cart')
			->regenerate($cart);

		// get sample address
		$addresses = $this
			->get('elcodi.wrapper.customer')
			->get()
			->getAddresses();
		$sample_address = array();
		foreach ($addresses as $address) {
			if (!isset($default_address)) {
				$default_address = $address;
			}
			if (strpos($address->getCity(), 'CN') !== false && !array_key_exists('cn', $sample_address)) {
				$sample_address['cn'] = $address;
			} elseif (strpos($address->getCity(), 'NZ') !== false && !array_key_exists('nz', $sample_address)) {
				$sample_address['nz'] = $address;
			}
		}

		// carriers
		$cn_carriers = array();
		if (array_key_exists('cn', $sample_address)) {
			$cart->setDeliveryAddress($sample_address['cn']);
			$cn_carriers = $this
				->get('elcodi.wrapper.shipping_methods')
				->get($cart);
		}
		$nz_carriers = array();
		if (array_key_exists('nz', $sample_address)) {
			$cart->setDeliveryAddress($sample_address['nz']);
			$nz_carriers = $this
				->get('elcodi.wrapper.shipping_methods')
				->get($cart);
		}
		$carriers = array_merge($cn_carriers, $nz_carriers);

		// shipping methods
		$cart->setDeliveryAddress($default_address);
		$shippingMethods = $this
			->get('elcodi.wrapper.shipping_methods')
			->get($cart);


		// set amount
		$cart->setAmount($cart->getPurchasableAmount());

		// get delivery info
		$addresses = $this
			->get('elcodi.wrapper.customer')
			->get()
			->getAddresses();

		$addressesFormatted = [];
		foreach ($addresses as $address) {
			$address = $this
				->get('elcodi.formatter.address')
				->toArray($address);
			$address['locale'] = mb_strlen($address['address'], 'utf8') != strlen($address['address']) ? 'cn' : 'en';
			$addressesFormatted[] = $address;
		}

		return $this->render(
			'Best365Bundle:Cart:cart.view.html.twig',
			[
				'cart'					=> $cart,
				'addresses' 			=> $addressesFormatted,
				'carriers'				=> $carriers,
				'shipping_methods'      => $shippingMethods,
				'form'					=> $formView,
				'activeLocale'			=> $active_locale
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
	 *      methods = {"GET", "POST"},
	 *      options={"expose"=true}
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
	/**
	 * Adds product into cart
	 *
	 * @param CartInterface $cart    	Cart
	 * @param integer       $id      	Purchasable Id
	 * @param integer		$quantity	Purchasable Quantity
	 *
	 * @return Response res
	 *
	 * @Route(
	 *      path = "/add/{id}/{quantity}",
	 *      name = "best365_store_cart_add_product",
	 *      requirements = {
	 *          "id": "\d+",
	 *     		"quantity": "\d+"
	 *      },
	 *      methods = {"GET"},
	 *      options={"expose"=true}
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
	public function addProductAction(CartInterface $cart, $id, $quantity)
	{
		$res = new Response('failed');
		$purchasable = $this
			->get('elcodi.repository.purchasable')
			->find($id);
		if ($purchasable instanceof PurchasableInterface) {
			$this
				->get('elcodi.manager.cart')
				->addPurchasable(
					$cart,
					$purchasable,
					(int) $quantity
				);

			$res = new Response('success');
		}

		return $res;
	}

	/**
	 * Update cart line data
	 *
	 * @param CartInterface $cart    	Cart
	 * @param integer       $lid      	Cart line Id
	 * @param integer		$quantity	Purchasable Quantity
	 *
	 * @return Response res
	 *
	 * @Route(
	 *      path = "/update/{lid}/{quantity}",
	 *      name = "best365_store_cart_update_line",
	 *      requirements = {
	 *          "lid": "\d+",
	 *     		"quantity": "\d+"
	 *      },
	 *      methods = {"GET"},
	 *      options={"expose"=true}
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
	public function updateLineAction(CartInterface $cart, $lid, $quantity)
	{
		$res = new Response('failed');
		foreach ($cart->getCartLines() as $v) {
			if ($v->getId() == $lid) {
				$cartLine = $v;
				break;
			}
		}

		$this->get('elcodi.manager.cart')
			->setCartLineQuantity($cartLine, (int) $quantity);
		$res = new Response('success');

		return $res;
	}

	/**
	 * Get Delivery Option
	 *
	 * @param CartInterface 	$cart     	Cart
	 * @param integer       	$aid  		Address id
	 *
	 * @return Response Response
	 *
	 * @Route(
	 *      path = "/delivery/{aid}",
	 *      name = "best365_store_cart_delivery",
	 *      methods = {"GET"},
	 *
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
	 *
	 */
	public function getDeliveryOptionAction(CartInterface $cart, $aid)
	{
		$customer = $this->getUser();
		$address = $this
			->get('elcodi.repository.customer')
			->findAddress(
				$customer->getId(),
				$aid
			);
		$cart->setDeliveryAddress($address);
		$shippingMethods = $this
			->get('elcodi.wrapper.shipping_methods')
			->get($cart);

		$methods = array();
		foreach ($shippingMethods as $shippingMethod) {
			$methods[] = $this
				->get('best365.manager.shipping')
				->getShippingMethodArray($shippingMethod);
		}

		return new Response(json_encode($methods));
	}
}
