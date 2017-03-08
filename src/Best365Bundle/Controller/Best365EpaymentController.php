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
	 *      name = "best365_store_epayment",
	 *      methods = {"GET", "POST"}
	 * )
	 *
	 */
	public function paymentAction(Request $request)
	{
		$logger = $this->get('logger');
		$response = new Response('fail');
		$arr = $this->getRequestArray($request);
		$sig = $this->get('best365.manager.epayment')
			->generateSignature($arr, $this->container->getParameter('merchant_key'));

		// store request data
		$epayment_order = $this->get('best365.manager.epayment')->getEpaymentOrder($arr['trade_no']);
		$signature = $request->request->get('signature') ? $request->request->get('signature') : '861d94a96b122ea55ebc081af05e5af6';
		$sign_type = $request->request->get('sign_type') ? $request->request->get('sign_type') : 'MD5';
		if (empty($epayment_order)) {
			$this->insertEpaymentOrder($arr, $signature, $sign_type);
		} else {
			$logger->critical('trade_no: '. $arr['trade_no']);
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

				if ($order->getPaymentStateLineStack()->getLastStateLine()->getName() == "unpaid") {
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
		// get all parameters in request
		$logger = $this->get('logger');
		$params = $request->request->all();

		foreach ($params as $k => $v) {
			$logger->critical('-----------' . $k . ' : '.$v);
		}

		// construct signature array
		unset($params['signature']);
		unset($params['sign_type']);

		return $params;
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