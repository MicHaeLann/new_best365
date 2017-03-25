<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 31/10/16
 * Time: 1:26 PM
 */

namespace Best365Bundle\Controller;

use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
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
		// get strategy
		$customer = $this
			->get('elcodi.wrapper.customer')
			->get();

		$membership = $this->get('best365.manager.customer')
			->getCustomerMembership($customer);

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

		// calculate cart amount in terms of fixed price, and membership strategy
		$cart = $this
			->get('elcodi.wrapper.cart')
			->get();
		if ($cart->getTotalItemNumber() > 0) {
			$total = '';
			foreach ($cart->getCartLines() as &$line) {
				// calculate purchasable amount
				$line->getPurchasable();
				$ext = $this->get('best365.manager.purchasable')
					->getProductExt($line->getPurchasable());
				$fixed_price = 0;
				if (!empty($ext)) {
					$fixed_price = $ext->getFixedPrice();
				}
				$line->getPurchasable()->fixedPrice = $fixed_price;
				if (!$fixed_price) {
					$line_amount = $line->getAmount()->multiply($membership->getStrategy() / 100);
				} else {
					$line_amount = $line->getAmount();
				}

				if ($total == '') {
					$total = $line_amount;
				} else {
					// convert money if not match
					if ($line_amount->getCurrency() != $total->getCurrency()) {
						$line_amount = $this->get('elcodi.converter.currency')
							->convertMoney($line_amount, $total->getCurrency());
					}
					$total = $total->add($line_amount);
				}
			}
			$cart->setAmount($total);
		}

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
				'strategy' => $membership->getStrategy()
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

		$payment_method = $request
			->request
			->get('payment_method', false);

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
		$shipping_price = $this->get('elcodi.converter.currency')
			->convertMoney($cart->getShippingAmount(), $cart->getAmount()->getCurrency());
		$cart->setAmount($cart->getAmount()->subtract($shipping_price));

		$cartObjectManager = $this
			->get('elcodi.object_manager.cart');
		$cartObjectManager->persist($cart);
		$cartObjectManager->flush();

		return $this->saveOrder($cart, $payment_method);

		// temporarily transfer payment only, may change later
//		$redirection_url = ($address)
//			? 'best365_store_checkout_finish'
//			: 'best365_store_checkout_shipping';
//
//		return $this->redirect(
//			$this->generateUrl($redirection_url)
//		);
	}

	/**
	 * Saves order
	 *
	 * @param CartInterface $cart
	 * @param $payment_method
	 *
	 * @return Response
	 *
	 */
	private function saveOrder($cart, $payment_method)
	{
		// get strategy
		$customer = $this
			->get('elcodi.wrapper.customer')
			->get();

		$membership = $this->get('best365.manager.customer')
			->getCustomerMembership($customer);


		// generate order
		$this->get('best365.manager.payment')
			->generateOrder();

		// update order shipping amount(not persisted in cart)
		$cart_weight = $cart->getWeight() < 1000 ? 1000 : $cart->getWeight();

		$shipping_method = $this
			->get('elcodi.wrapper.shipping_methods')
			->getOneById($cart, $cart->getShippingMethod());

		// reset shipping amount
		$shipping_amount = $shipping_method->getPrice()->multiply($cart_weight/1000);
		$shipping_amount = $this->get('elcodi.converter.currency')
			->convertMoney($shipping_amount, $cart->getAmount()->getCurrency());
		$order = $cart->getOrder();
		$order->setShippingAmount($shipping_amount);

		// reset order item info
		$total = '';
		foreach ($order->getOrderLines() as &$line) {
			// get product info
			$purchasable = $line->getPurchasable();
			$ext = $this->get('best365.manager.purchasable')
				->getProductExt($purchasable);
			$fixed_price = 0;
			if (!empty($ext)) {
				$fixed_price = $ext->getFixedPrice();
			}

			// reset unit price and line amount
			$unit_price = $line->getPurchasableAmount();
			$line_amount = $line->getAmount();
			if (!$fixed_price) {
				// reset unit price
				$unit_price = $unit_price->multiply($membership->getStrategy() / 100);

				// reset line amount
				$line_amount = $line_amount->multiply($membership->getStrategy() / 100);
			}
			$line->setPurchasableAmount($unit_price);
			$line->setAmount($line_amount);

			if ($total == '') {
				$total = $line_amount;
			} else {
				// convert money if not match
				if ($line_amount->getCurrency() != $total->getCurrency()) {
					$line_amount = $this->get('elcodi.converter.currency')
						->convertMoney($line_amount, $total->getCurrency());
				}
				$total = $total->add($line_amount);
			}
		}

		// reset item total
		$order->setPurchasableAmount($total);

		// reset order total price
		$order->setAmount($order->getPurchasableAmount()->add($shipping_amount));

		$orderObjectManager = $this
			->get('elcodi.object_manager.order');
		$orderObjectManager->persist($order);
		$orderObjectManager->flush();

		// generate reference and bend reference to order
		$order_id = $order->getId();
		if ($payment_method == 'transfer') {
			$reference = uniqid();
			$url = $this->generateUrl('best365_store_order_thanks_transfer', array('id' => $order_id));
		} else {
			$content = json_decode($this->getQrcode($order), true);
			$reference = '';
			if (!empty($content) && $content['response']['message'] == 'success') {
				$reference = $content['response']['qrcode_url'];
			}

			$url = $this->generateUrl('best365_store_order_thanks', array('id' => $order_id));
		}

		$this->get('best365.manager.order')
			->createExtRecord($order_id, $reference);

		return $this->redirect($url);
	}

	private function getQrcode($order)
	{
		// get CNY
		$currencies = $this
			->get('elcodi.repository.currency')
			->findBy([
				'enabled' => true,
			]);

		foreach ($currencies as $currency) {
			if ($currency->getIso() == 'CNY') {
				$target_currency = $currency;
				break;
			}
		}
		$currency = 'CNY';

		// convert to cny
		$grandtotal = $this->get('elcodi.converter.currency')
			->convertMoney($order->getAmount(), $target_currency);
		$amount = $grandtotal->getAmount() / 100;
		$amount = 0.05;
		$return_url = $this->generateUrl('best365_store_order_thanks', array('id' => $order->getId()));
		$notify_url = $this->generateUrl('best365_store_epayment',  array(), UrlGeneratorInterface::ABSOLUTE_URL);

		$arr = array(
			'merchant_id' => $this->container->getParameter('merchant_id'),
			'increment_id' => $order->getId(),
			'grandtotal' => $amount,
			'currency' => $currency,
			'return_url' => $return_url,
			'notify_url' => $notify_url,
			'subject' => 'Best365',
			'describe' => 'Best365',
			'service' => 'create_scan_code'
		);

		$signature = $this->get('best365.manager.epayment')
			->generateSignature($arr, $this->container->getParameter('merchant_key'));

		$arr['signature'] = $signature;
		$arr['sign_type'] = 'MD5';
		$str = $this->encodeURIComponent($arr);
		$url = $this->container->getParameter('qrcode_url') . '?' . $str;

		// send request to get qrcode
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$content  = curl_exec($ch);
		curl_close($ch);
		return $content;
	}

	private function encodeURIComponent($arr) {
		$str = '';
		foreach ($arr as $k => $v) {
			if (strlen($str) > 0) {
				$str .= '&';
			}
			$str .= $k . '=' . $v;
		}
		return $str;
	}
}