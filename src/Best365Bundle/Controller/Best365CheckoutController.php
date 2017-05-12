<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 31/10/16
 * Time: 1:26 PM
 */

namespace Best365Bundle\Controller;

use Symfony\Component\Form\FormView;
use Mmoreram\ControllerExtraBundle\Annotation\Entity as EntityAnnotation;
use Mmoreram\ControllerExtraBundle\Annotation\Form as FormAnnotation;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Elcodi\Store\CartBundle\Controller\CheckoutController;
use Elcodi\Component\Geo\Entity\Interfaces\AddressInterface;

/**
 * Class CheckoutController
 *
 * @Security("has_role('ROLE_CUSTOMER')")
 * @Route(
 *      path = "/best365/checkout",
 *      options={"expose"=true}
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
		// get currency
		$currency = $this
			->get('elcodi.wrapper.currency')
			->get();

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
			->get('best365.manager.cart')
			->regenerate($this
				->get('elcodi.wrapper.cart')
				->get()
			);

		// subtract shipping amount
		$shipping_price = $this->get('elcodi.converter.currency')
			->convertMoney($cart->getShippingAmount(), $cart->getAmount()->getCurrency());
		$cart->setAmount($cart->getAmount()->subtract($shipping_price));

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
				'activeCurrency' => $currency,
				'activeLocale' => $active_locale
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
			->get('shipping-method', false);

		$payment_method = $request
			->request
			->get('payment-method', false);

		$address = $request
			->request
			->get('address', false);

		// set delivery address
		$delivery = $this
			->get('best365.manager.address')
			->saveCheckoutAddress($address, 'setDeliveryAddress');
		if (!$delivery) {
			$translator = $this->get('translator');
			$type = $translator->trans('store.address.delivery');
			$this->addFlash(
				'success',
				$translator->trans(
					'store.address.select_address_type',
					['%1' => $type]
				)
			);
		}

		// set billing address
		$billing = $this
			->get('best365.manager.address')
			->saveCheckoutAddress($address, 'setBillingAddress');

		if (!$billing) {
			$translator = $this->get('translator');
			$type = $translator->trans('store.address.billing');
			$this->addFlash(
				'success',
				$translator->trans(
					'store.address.select_address_type',
					['%1' => $type]
				)
			);
		}

		// set shipping method
		$cart = $this
			->get('elcodi.wrapper.cart')
			->get();
		$cart->setShippingMethod($shipping_method);
		$cart = $this
			->get('best365.manager.cart')
			->regenerate($cart);

		$cartObjectManager = $this
			->get('elcodi.object_manager.cart');
		$cartObjectManager->persist($cart);
		$cartObjectManager->flush();
		
		if ($cart->getTotalItemNumber() > 0) {
			$result = $this->get('best365.manager.order')
				->saveOrder($cart, $payment_method);
			if ($result->success && $payment_method == 'poli') {
				$url = $result->payment['NavigateURL'];
			} elseif ($result->success && $payment_method == 'transfer') {
				$url = $this->generateUrl('best365_store_order_thanks_transfer', array('id' => $result->order->getId()));
			} elseif ($result->success && $payment_method == 'wechat') {
				$url = $this->generateUrl('best365_store_order_thanks', array('id' => $result->order->getId()));
			} else {
				$url = $this->generateUrl('best365_store_order_list_error');
			}
		} else {
			$url = $this->generateUrl('best365_store_cart_view');
		}

		return $this->redirect($url);
	}
}