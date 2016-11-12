<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 31/10/16
 * Time: 1:26 PM
 */

namespace Best365Bundle\Controller;

use Elcodi\Component\Cart\Entity\Interfaces\CartInterface;
use Symfony\Component\Form\FormView;
use Mmoreram\ControllerExtraBundle\Annotation\Entity as EntityAnnotation;
use Mmoreram\ControllerExtraBundle\Annotation\Form as FormAnnotation;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Elcodi\Store\CartBundle\Controller\CheckoutController;
use Elcodi\Component\Geo\Entity\Interfaces\AddressInterface;
use Elcodi\Component\Cart\Transformer\CartOrderTransformer;

/**
 * Class CheckoutController
 *
 * @Security("has_role('ROLE_CUSTOMER')")
 * @Route(
 *      path = "/best365/checkout",
 * )
 */
class Best365CheckoutController extends CheckoutController
{
	/**
	 * Checkout address step
	 *
	 * @param AddressInterface $address  The address being added
	 * @param FormView         $formView The form
	 * @param boolean          $isValid  If the processed form si valid
	 *
	 * @return Response
	 *
	 * @Route(
	 *      path = "",
	 *      name = "best365_store_checkout_shipping",
	 *      methods = {"GET","POST"}
	 * )
	 *
	 * @EntityAnnotation(
	 *      class = {
	 *          "factory" = "elcodi.factory.address",
	 *          "method" = "create",
	 *          "static" = false
	 *      },
	 *      name = "address",
	 *      persist = false
	 * )
	 * @FormAnnotation(
	 *      class         = "store_geo_form_type_address",
	 *      name          = "formView",
	 *      entity        = "address",
	 *      handleRequest = true,
	 *      validate      = "isValid"
	 * )
	 */
	public function shippingAction(AddressInterface $address, FormView $formView, $isValid)
	{
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
				$this->generateUrl('best365_store_checkout_shipping')
			);
		}

		$addressFormatter = $this->get('elcodi.formatter.address');

		$addresses = $this
			->get('elcodi.wrapper.customer')
			->get()
			->getAddresses();

		$addressesFormatted = [];
		foreach ($addresses as $address) {
			$addressesFormatted[] =
				$addressFormatter
					->toArray($address);
		}

		$cart = $this
			->get('elcodi.wrapper.cart')
			->get();

		$shippingMethods = $this
			->get('elcodi.wrapper.shipping_methods')
			->get($cart);

		return $this->render(
			'Best365Bundle:Checkout:checkout.shipping.html.twig',
			[
				'cart' => $cart,
				'shipping_methods'      => $shippingMethods,
				'addresses' => $addressesFormatted,
				'form'      => $formView,
			]
		);
	}

	/**
 * Saves the billing and delivery address and redirects to the next page
 *
 * @param Request $request The current request
 *
 * @return Response
 *
 * @Route(
 *      path = "/shipping/save",
 *      name = "best365_store_save_shipping",
 *      methods = {"POST"}
 * )
 *
 */
	public function saveShippingAction(Request $request)
	{
		$shipping_method = $request
			->request
			->get('shipping_method', false);

		$address = $request
			->request
			->get('address', false);

		$saveCheckoutAddress = function ($addressId, $addressType, $setMethodName) {
			if ($addressId) {
				$address = $this
					->get('elcodi.repository.address')
					->findOneBy(['id' => $addressId]);

				$customerAddresses = $this
					->getUser()
					->getAddresses();

				if ($customerAddresses->contains($address)) {
					$cart = $this
						->get('elcodi.wrapper.cart')
						->get();

					$cart->$setMethodName($address);

					$cartObjectManager = $this
						->get('elcodi.object_manager.cart');

					$cartObjectManager->persist($cart);
					$cartObjectManager->flush();
				}
			} else {
				$translator = $this->get('translator');
				$type = $translator->trans($addressType);
				$this->addFlash(
					'success',
					$translator->trans(
						'store.address.select_address_type',
						['%1' => $type]
					)
				);
			}
		};

		$saveCheckoutAddress(
			$address,
			'store.address.delivery',
			'setDeliveryAddress'
		);

		$saveCheckoutAddress(
			$address,
			'store.address.billing',
			'setBillingAddress'
		);

		// set shipping method
		$cart = $this
			->get('elcodi.wrapper.cart')
			->get();
		$cart->setShippingMethod($shipping_method);

		$cartObjectManager = $this
			->get('elcodi.object_manager.cart');
		$cartObjectManager->persist($cart);
		$cartObjectManager->flush();

		// temporarily transfer payment only, may change later
		$redirection_url = ($address)
			? 'best365_store_checkout_finish'
			: 'best365_store_checkout_shipping';

		return $this->redirect(
			$this->generateUrl($redirection_url)
		);
	}

	/**
	 * Saves order redirects to the next page
	 *
	 * @return Response
	 *
	 * @Route(
	 *      path = "/finish",
	 *      name = "best365_store_checkout_finish",
	 *      methods = {"GET", "POST"}
	 * )
	 *
	 */
	public function saveOrderAction()
	{
		// generate order
		$this->get('best365.manager.payment')
			->generateOrder();

		// update order shipping amount(not persisted in cart)
		$cart = $this
			->get('elcodi.wrapper.cart')
			->get();

		$cart_weight = $cart->getWeight() < 1000 ? 1000 : $cart->getWeight();

		$shipping_method = $this
			->get('elcodi.wrapper.shipping_methods')
			->getOneById($cart, $cart->getShippingMethod());

		$shipping_amount = $shipping_method->getPrice()->multiply($cart_weight/1000);

		$order = $cart->getOrder();
		$order->setShippingAmount($shipping_amount);

		$orderObjectManager = $this
			->get('elcodi.object_manager.order');
		$orderObjectManager->persist($order);
		$orderObjectManager->flush();

		// generate reference and bend reference to order
		$order_id = $order->getId();
		$reference = uniqid();

		$this->get('best365.manager.order')
			->createExtRecord($order_id, $reference);

		return $this->redirect(
			$this->generateUrl('best365_store_order_thanks_transfer', array('id' => $order_id))
		);
	}
}