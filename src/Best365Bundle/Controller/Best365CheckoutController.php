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
