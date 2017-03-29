<?php

namespace Best365Bundle\Manager;

use Best365Bundle\Entity\PaymentGateway;
use Doctrine\ORM\EntityManager;
use PaymentSuite\FreePaymentBundle\Services\FreePaymentMethodFactory;
use PaymentSuite\PaymentCoreBundle\Services\Interfaces\PaymentBridgeInterface;
use PaymentSuite\PaymentCoreBundle\Services\PaymentEventDispatcher;


class Best365PaymentManager
{

	private $em;
	/**
	 * @var FreePaymentMethodFactory
	 *
	 * PaymentMethodInterface factory
	 */
	private $methodFactory;

	/**
	 * @var PaymentBridgeInterface
	 *
	 * Payment bridge interface
	 */
	private $paymentBridge;

	/**
	 * @var PaymentEventDispatcher
	 *
	 * Payment event dispatcher
	 */
	private $paymentEventDispatcher;

	/**
	 * Construct method for free payment manager.
	 *
	 * @param FreePaymentMethodFactory $methodFactory          PaymentMethodInterface factory
	 * @param PaymentBridgeInterface   $paymentBridge          Payment Bridge
	 * @param PaymentEventDispatcher   $paymentEventDispatcher Event Dispatcher
	 * @param EntityManager			   $em					   Entity Manager
	 */
	public function __construct(
		FreePaymentMethodFactory $methodFactory,
		PaymentBridgeInterface $paymentBridge,
		PaymentEventDispatcher $paymentEventDispatcher,
		EntityManager $em
	)
	{
		$this->em = $em;
		$this->methodFactory = $methodFactory;
		$this->paymentBridge = $paymentBridge;
		$this->paymentEventDispatcher = $paymentEventDispatcher;
	}

	public function generateOrder()
	{
		$paymentMethod = $this
			->methodFactory
			->create();

		/**
		 * At this point, order must be created given a card, and placed in
		 * PaymentBridge.
		 *
		 * So, $this->paymentBridge->getOrder() must return an object
		 */
		$this
			->paymentEventDispatcher
			->notifyPaymentOrderLoad(
				$this->paymentBridge,
				$paymentMethod
			);

		/**
		 * Order exists right here.
		 */
		$this
			->paymentEventDispatcher
			->notifyPaymentOrderCreated(
				$this->paymentBridge,
				$paymentMethod
			);
	}

	/**
	 * Generate Epayment array
	 * @param $request
	 * @return array
	 */
	public function getEpaymentRequestArray($request)
	{
		// get all parameters in request
		$params = $request->request->all();
		$arr = '{"merchant_id":"af54f0607d474924898465b256b1ff7f","increment_id":"96","grandtotal":"0.05","receipt_amount":"0.05","currency":"CNY","trade_no":"4008722001201703274804554623","service":"create_scan_code","rate":"4.8601","notify_time":"2017-03-27 10:49:43","created_at":"2017-03-27 10:49:02","gmt_payment":"2017-03-27 10:49:03","payment_channels":"WECHAT","subject":"Best365","openid":"o4FhqwHgCi1ttWmsVFlKZuPGoMzw","describe":"Best365","trade_status":"TRADE_SUCCESS","signature":"8d5803a6ad65ec3e7dd2b87836d22ee2","sign_type":"MD5"}';
		$params = json_decode($arr, true);
		// construct signature array
		unset($params['signature']);
		unset($params['sign_type']);

		return $params;
	}

	/**
	 * Generate Epayment signature for validation
	 * @param $arr
	 * @param $key
	 * @return string
	 */
	public function generateEpaymentSignature($arr, $key)
	{
		ksort($arr);
		$str = '';
		foreach ($arr as $k => $v) {
			if (strlen($str) > 0) {
				$str .= '&';
			}
			$str .= $k . '=' . $v;
		}
		$str .= $key;
		$signature = md5(utf8_encode($str));

		return $signature;
	}

	/**
	 * Fetch data from payment gateway
	 *
	 * @param $oid
	 * @param $gateway
	 * @return mixed
	 */
	public function getPaymentGateway($oid, $gateway = 1)
	{
		$data = $this->em
			->getRepository('Best365Bundle\Entity\PaymentGateway')
			->findOneBy(array('oid' => $oid, 'gateway' => $gateway));
		return $data;
	}

	/**
	 * Insert payment gateway request data to database
	 * @param $oid
	 * @param $gateway
	 * @param $params
	 */
	public function addPaymentGateway($oid, $gateway = 1, $params)
	{
		$json = json_encode($params);
		$gateway_data = new PaymentGateway();
		$gateway_data->setOid($oid);
		$gateway_data->setGateway($gateway);
		$gateway_data->setParams($json);
		$this->em->persist($gateway_data);
		$this->em->flush();
	}
}