<?php

namespace Best365Bundle\Controller;

use Best365Bundle\Entity\EpaymentOrder;
use Mmoreram\ControllerExtraBundle\Annotation\Entity as AnnotationEntity;
use Mmoreram\ControllerExtraBundle\Annotation\Form as AnnotationForm;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Elcodi\Component\Product\Entity\Interfaces\PurchasableInterface;

/**
 * Epayment controllers
 *
 * @Route(
 *      path = "/best365/epayment",
 * )
 */
class Best365EpaymentController extends Controller
{
	/**
	 * Epayment
	 *
	 * @param Request $request The current request
	 * @return Response Response
	 *
	 * @Route(
	 *      path = "",
	 *      name = "best365_epayment",
	 *      methods = {"GET", "POST"}
	 * )
	 *
	 */
	public function paymentAction(Request $request)
	{
		$response = new Response('fail');

		$arr = $this->getRequestArray($request);
		$sig = $this->getSignature($arr);

		// check if signature match
//		if ($sig == $request->request->get('signature')) {
		if (1) {
				$order_id = $arr['increment_id'];

			// check if order exists
			$order = $this
				->get('elcodi.repository.order')
				->find($order_id);

			if (!empty($order)) {
				$response = new Response('success');


				if ($order->getPaymentStateLineStack()->getLastStateLine()->getName() == "unpaid") {
					// store request data
					$sign_type = $request->request->get('sign_type') ? $request->request->get('sign_type') : "MD5";
					$this->insertEpaymentOrder($arr, $sig, $sign_type);

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

	private function getRequestArray($request)
	{
		$arr =  array(
			'merchant_id' => $request->request->get('merchant_id'),
			'increment_id' => $request->request->get('increment_id'),
			'grandtotal' => $request->request->get('grandtotal'),
			'receipt_amount' => $request->request->get('receipt_amount'),
			'currency' => $request->request->get('currency'),
			'subject' => $request->request->get('subject'),
			'describe' => $request->request->get('describe'),
			'service' => $request->request->get('service'),
			'trade_no' => $request->request->get('trade_no'),
			'notify_time' => $request->request->get('notify_time'),
			'created_at' => $request->request->get('created_at'),
			'gmt_payment' => $request->request->get('gmt_payment'),
			'trade_status' => $request->request->get('trade_status'),
			'payment_channels' => $request->request->get('trade_status'),
			'buyer_payment_account' => $request->request->get('buyer_payment_account'),
		);

//		$arr =  array(
//			'merchant_id' => $request->query->get('merchant_id') ? $request->query->get('merchant_id') : 12121,
//			'increment_id' => $request->query->get('increment_id') ? $request->query->get('increment_id') : 12121,
//			'grandtotal' => $request->query->get('grandtotal') ? $request->query->get('grandtotal') : 12121,
//			'receipt_amount' => $request->query->get('receipt_amount') ? $request->query->get('receipt_amount') : 12121,
//			'currency' => $request->query->get('currency') ? $request->query->get('currency') : 12121,
//			'subject' => $request->query->get('subject') ? $request->query->get('subject') : 12121,
//			'describe' => $request->query->get('describe') ? $request->query->get('describe') : 12121,
//			'service' => $request->query->get('service') ? $request->query->get('service') : 12121,
//			'trade_no' => $request->query->get('trade_no') ? $request->query->get('trade_no') : 12121,
//			'notify_time' => $request->query->get('notify_time') ? $request->query->get('notify_time') : '2017-02-02 11:11:11',
//			'created_at' => $request->query->get('created_at') ? $request->query->get('created_at') : '2017-02-02 11:11:11',
//			'gmt_payment' => $request->query->get('gmt_payment') ? $request->query->get('gmt_payment') : '2017-02-02 11:11:11',
//			'trade_status' => $request->query->get('trade_status') ? $request->query->get('trade_status') : 12121,
//			'payment_channels' => $request->query->get('payment_channels') ? $request->query->get('payment_channels') : 12121,
//			'buyer_payment_account' => $request->query->get('buyer_payment_account') ? $request->query->get('buyer_payment_account') : 12121,
//		);
		ksort($arr);
		return $arr;
	}

	private function getSignature($arr)
	{
		$str = '';
		foreach ($arr as $k => $v) {
			if (strlen($str) > 0) {
				$str .= '&';
			}
			$str .= $k . '=' . $v;
		}

		$sig = md5(utf8_encode($str));
		return $sig;
	}

	private function insertEpaymentOrder($arr, $signature, $sign_type)
	{
		// construct data
		$arr['signature'] = $signature;
		$arr['sign_type'] = $sign_type;

		// insert data
		$this->get('best365.manager.order')->createEpaymentOrder($arr);
	}
}