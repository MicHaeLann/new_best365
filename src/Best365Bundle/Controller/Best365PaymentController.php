<?php

namespace Best365Bundle\Controller;

use Mmoreram\ControllerExtraBundle\Annotation\Entity as AnnotationEntity;
use Mmoreram\ControllerExtraBundle\Annotation\Form as AnnotationForm;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Elcodi\Component\Product\Entity\Interfaces\PurchasableInterface;

/**
 * Payment controllers
 *
 * @Route(
 *      path = "/best365/payment",
 * )
 */
class Best365PaymentController extends Controller
{
	/**
	 * Epayment
	 *
	 * @param Request $request The current request
	 * @return Response Response
	 *
	 * @Route(
	 *      path = "/epayment",
	 *      name = "best365_store_epayment",
	 *      methods = {"GET", "POST"}
	 * )
	 *
	 */
	public function epaymentAction(Request $request)
	{
		// initialize response
		$response = new Response('fail');

		// generate signature
		$arr = $this->get('best365.manager.payment')
			->getEpaymentRequestArray($request);
		$sig = $this->get('best365.manager.payment')
			->generateEpaymentSignature($arr, $this->container->getParameter('epayment_merchant_key'));

		// store request data
		$epayment_order = $this->get('best365.manager.payment')
			->getPaymentGateway($arr['increment_id'], 1);
		$signature = $request->request->get('signature');
		$sign_type = $request->request->get('sign_type');
		if (empty($epayment_order)) {
			$arr['signature'] = $signature;
			$arr['sign_type'] = $sign_type;
			$this->get('best365.manager.payment')
				->addPaymentGateway($arr['increment_id'], 1, $arr);
		}

		// check if signature match
		if ($sig == $signature) {
			$order_id = $arr['increment_id'];

			// check if order exists
			$order = $this
				->get('elcodi.repository.order')
				->find($order_id);

			if (!empty($order)) {
				$response = new Response('success');

				if ($order->getPaymentStateLineStack()->getLastStateLine()->getName() == "unpaid" && $arr['trade_status'] == 'TRADE_SUCCESS') {
					// update payment status
					$stateLineStack = $this
						->get('elcodi.order_payment_states_machine_manager')
						->transition(
							$order,
							$order->getPaymentStateLineStack(),
							"pay",
							''
						);
					$order->setPaymentStateLineStack($stateLineStack);

					$order_manager = $this->get('elcodi.object_manager.order');
					$order_manager->persist($order);
					$order_manager->flush();

					// set order valid
					$this->get('best365.manager.order')
						->updateExtRecord($order, '', 1);

					// add points
					$currency = $this->get('elcodi.wrapper.currency')
						->get();
					$nzd = $this->get('elcodi.converter.currency')
						->convertMoney(
							$order->getPurchasableAmount(),
							$currency
						);
					$points = floor($nzd->getAmount() / 100 * 10);

					// add points to customer
					$this->get('best365.manager.customer')
						->updatePoints($order->getCustomer(), $points);
				}
			}
		}

		return $response;
	}


	/**
	 * Paymark
	 *
	 * @param Request $request The current request
	 * @return Response Response
	 *
	 * @Route(
	 *      path = "/paymark",
	 *      name = "best365_store_paymark",
	 *      methods = {"GET", "POST"}
	 * )
	 *
	 */
	public function paymarkAction(Request $request)
	{
		$success = false;
		$params = $request->request->all();

		// add request record
		$order_id = $request->request->get('Particular');
		$paymark_order = $this->get('best365.manager.payment')
			->getPaymentGateway($order_id, 2);
		if (empty($paymark_order)) {
			$this->get('best365.manager.payment')
				->addPaymentGateway($order_id, 2, $params);
		}

		// set order valid
		foreach ($params as $k => $v) {
			if (strtolower($k) == 'status' && strtolower($v) == 'successful') {
				$success = true;
				break;
			}
		}

		$order = $this
			->get('elcodi.repository.order')
			->find($order_id);

		$url = $this->generateUrl('best365_store_order_list_error');

		if (!empty($order)) {
			if ($order->getPaymentStateLineStack()->getLastStateLine()->getName() == "unpaid" && $success) {
				// update payment status
				$stateLineStack = $this
					->get('elcodi.order_payment_states_machine_manager')
					->transition(
						$order,
						$order->getPaymentStateLineStack(),
						"pay",
						''
					);
				$order->setPaymentStateLineStack($stateLineStack);

				$order_manager = $this->get('elcodi.object_manager.order');
				$order_manager->persist($order);
				$order_manager->flush();

				// set order valid
				$this->get('best365.manager.order')
					->updateExtRecord($order, '', 1);

				// add points
				$currency = $this->get('elcodi.wrapper.currency')
					->get();
				$nzd = $this->get('elcodi.converter.currency')
					->convertMoney(
						$order->getPurchasableAmount(),
						$currency
					);
				$points = floor($nzd->getAmount() / 100 * 10);

				// add points to customer
				$this->get('best365.manager.customer')
					->updatePoints($order->getCustomer(), $points);

				$url = $this->generateUrl('best365_store_order_thanks', array('id' => $order_id));

			}
		}

		return $this->redirect($url);
	}

	/**
	 * POLi
	 *
	 * @param Request $request The current request
	 * @return Response Response
	 *
	 * @Route(
	 *      path = "/poli",
	 *      name = "best365_store_poli",
	 *      methods = {"GET", "POST"}
	 * )
	 *
	 */
	public function poliAction(Request $request)
	{
		$success = false;
		$token = $request->request->get('Token') ? $request->request->get('Token') : $request->query->get('token');
		$transaction = $this->get('best365.manager.payment')
			->getPoliTransaction($token);

		// add request record
		$order_id = $transaction['MerchantReference'];
		$paymark_order = $this->get('best365.manager.payment')
			->getPaymentGateway($order_id, 3);
		if (empty($paymark_order)) {
			$this->get('best365.manager.payment')
				->addPaymentGateway($order_id, 3, $transaction);
		}


		// set order valid
		if ($transaction['TransactionStatusCode'] == 'Completed') {
			$success = true;
		}

		$order = $this
			->get('elcodi.repository.order')
			->find($order_id);

		$url = $this->generateUrl('best365_store_order_list_error');
		if (!empty($order)) {
			if ($order->getPaymentStateLineStack()->getLastStateLine()->getName() == "unpaid" && $success) {
				// update payment status
				$stateLineStack = $this
					->get('elcodi.order_payment_states_machine_manager')
					->transition(
						$order,
						$order->getPaymentStateLineStack(),
						"pay",
						''
					);
				$order->setPaymentStateLineStack($stateLineStack);

				$order_manager = $this->get('elcodi.object_manager.order');
				$order_manager->persist($order);
				$order_manager->flush();

				// set order valid
				$this->get('best365.manager.order')
					->updateExtRecord($order, '', 1);

				// add points
				$currency = $this->get('elcodi.wrapper.currency')
					->get();
				$nzd = $this->get('elcodi.converter.currency')
					->convertMoney(
						$order->getPurchasableAmount(),
						$currency
					);
				$points = floor($nzd->getAmount() / 100 * 10);

				// add points to customer
				$this->get('best365.manager.customer')
					->updatePoints($order->getCustomer(), $points);

				$url = $this->generateUrl('best365_store_order_thanks', array('id' => $order_id));

			}
		}

		return $this->redirect($url);
	}
}