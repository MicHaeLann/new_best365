<?php

namespace Best365Bundle\Manager;

use Best365Bundle\Entity\PaymentGateway;
use Doctrine\ORM\EntityManager;
use Elcodi\Component\Cart\Entity\Interfaces\OrderInterface;
use Elcodi\Component\Cart\Entity\Order;
use Elcodi\Component\Currency\Repository\CurrencyRepository;
use Elcodi\Component\Currency\Services\CurrencyConverter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Router;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class Best365PaymentManager
{
	/**
	 * @var Epayment
	 */
	private $epayment;

	/**
	 * @var Paymark
	 */
	private $paymark;

	/**
	 * @var POLi
	 */
	private $poli;

	/**
	 * @var Router
	 */
	private $router;

	/**
	 * @var CurrencyConverter
	 */
	private $currencyConverter;

	/**
	 * @var CurrencyRepository
	 */
	private $currencyRepository;

	/**
	 * @var EntityManager
	 */
	private $em;


	/**
	 * Construct method for free payment manager.
	 *
	 * @param Parameter 			   $epayment_merchant_id   Epayment Merchant ID
	 * @param Parameter				   $epayment_merchant_key  Epayment Merchant Key
	 * @param Parameter				   $epayment_qrcode_url	   Epayment QRCode Request Url
	 * @param Parameter				   $paymark_username	   Paymark User Name
	 * @param Parameter				   $paymark_password	   Paymark User Password
	 * @param Parameter				   $paymark_account_id	   Paymark Account ID
	 * @param Parameter				   $paymark_request_url	   Paymark Gateway Request Url
	 * @param Parameter				   $poli_crt	   		   POLi Certificates Direction
	 * @param Parameter				   $poli_merchant_code	   POLi Merchant Code
	 * @param Parameter				   $poli_auth_code	   	   POLi Authentication Code
	 * @param Parameter				   $poli_initiate_api	   POLi Initiate Transaction API Url
	 * @param Parameter				   $poli_transaction_api    POLi Get Transaction API Url
	 * @param Router				   $router				   Router
	 * @param CurrencyConverter		   $currencyConverter	   Currency Converter
	 * @param CurrencyRepository	   $currencyRepository	   Currency Repository
	 * @param EntityManager			   $em					   Entity Manager
	 */
	public function __construct(
		$epayment_merchant_id,
		$epayment_merchant_key,
		$epayment_qrcode_url,
		$paymark_username,
		$paymark_password,
		$paymark_account_id,
		$paymark_request_url,
		$poli_crt,
        $poli_merchant_code,
		$poli_auth_code,
        $poli_initiate_api,
		$poli_tranaction_api,
		Router $router,
		CurrencyConverter $currencyConverter,
		CurrencyRepository $currencyRepository,
		EntityManager $em
	)
	{
		// initialise epayment
		$this->epayment = new \stdClass();
		$this->epayment->merchant_id = $epayment_merchant_id;
		$this->epayment->merchant_key = $epayment_merchant_key;
		$this->epayment->request_url = $epayment_qrcode_url;

		// initialise paymark
		$this->paymark = new \stdClass();
		$this->paymark->username = $paymark_username;
		$this->paymark->password = $paymark_password;
		$this->paymark->account_id = $paymark_account_id;
		$this->paymark->request_url = $paymark_request_url;

		// initialise poli
		$this->poli = new \stdClass();
		$this->poli->crt = $poli_crt;
		$this->poli->merchant_code = $poli_merchant_code;
		$this->poli->auth_code = $poli_auth_code;
		$this->poli->initiate_api = $poli_initiate_api;
		$this->poli->transaction_api = $poli_tranaction_api;

		$this->router = $router;
		$this->currencyConverter = $currencyConverter;
		$this->currencyRepository = $currencyRepository;
		$this->em = $em;
	}

	/**
	 * Generate Epayment array
	 * @param $request
	 * @return array
	 */
	public function getEpaymentRequestArray(Request $request)
	{
		// get all parameters in request
		$params = $request->request->all();
		
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

	/**
	 * Get Epayment QRCode
	 * @param $order
	 * @return mixed
	 */
	public function getEpaymentQrcode(OrderInterface $order)
	{
		// get CNY
		$cny = $this->currencyRepository->findOneBy(['enabled' => true, 'iso' => 'CNY']);

		// convert to cny
		$grandtotal = $this->currencyConverter
			->convertMoney($order->getAmount(), $cny);
		$amount = $grandtotal->getAmount() / 100;
		$return_url = '';
		$notify_url = $this->router->generate('best365_store_epayment',  array(), UrlGeneratorInterface::ABSOLUTE_URL);

		$arr = array(
			'merchant_id' => $this->epayment->merchant_id,
			'increment_id' => $order->getId(),
			'grandtotal' => $amount,
			'currency' => 'CNY',
			'return_url' => $return_url,
			'notify_url' => $notify_url,
			'subject' => 'Best365',
			'describe' => 'Best365',
			'service' => 'create_scan_code'
		);

		$signature = $this->generateEpaymentSignature($arr, $this->epayment->merchant_key);

		$arr['signature'] = $signature;
		$arr['sign_type'] = 'MD5';
		$str = '';
		foreach ($arr as $k => $v) {
			$str .= '&' . $k . '=' . $v;
		}
		$str = ltrim($str, '&');

		$url = $this->epayment->request_url . '?' . $str;

		// send request to get qrcode
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$content  = curl_exec($ch);
		curl_close($ch);
		return $content;
	}

	/**
	 * Get paymark online banking request url
	 * @param $order
	 * @return mixed
	 */
	public function getOnlineBankingUrl(OrderInterface $order)
	{
		// convert money to nzd
		$nzd = $this->currencyRepository->findOneBy(array('enabled' => true, 'iso' => 'NZD'));
		$amount = $this->currencyConverter->convertMoney($order->getAmount(), $nzd);

		// initialise post parameter
		$fields = array(
			'username' => $this->paymark->username,
			'password' => $this->paymark->password,
			'cmd' => '_xclick',
			'account_id' => $this->paymark->account_id,
			'amount' => $amount->getAmount() / 100,
			'return_url' => $this->router->generate('best365_store_paymark', array(), UrlGeneratorInterface::ABSOLUTE_URL), //post request
			'particular' => $order->getId()
		);
		$str = '';
		foreach ($fields as $k => $v) {
			$str .= '&' . $k . '=' . $v;
		}
		ltrim($str, '&');

		$url = $this->paymark->request_url;
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $str);
		$content  = curl_exec($ch);
		curl_close($ch);
		$p = xml_parser_create();
		xml_parse_into_struct($p, $content, $vals, $index);
		xml_parser_free($p);
		return $vals[0];
	}

	public function getPoliInitiateUrl(OrderInterface $order)
	{
		// convert money to nzd
		$nzd = $this->currencyRepository->findOneBy(array('enabled' => true, 'iso' => 'NZD'));
		$amount = $this->currencyConverter->convertMoney($order->getAmount(), $nzd);

		$json_builder = '{
		  "Amount": "' . $amount->getAmount() / 100 . '",
		  "CurrencyCode": "NZD",
		  "MerchantReference": "' . $order->getId() . '",
		  "MerchantHomepageURL": "https://www.best365.co.nz",
		  "SuccessURL": "' . $this->router->generate('best365_store_poli', array(), UrlGeneratorInterface::ABSOLUTE_URL) . '",
		  "FailureURL": "' . $this->router->generate('best365_store_order_list_error', array(), UrlGeneratorInterface::ABSOLUTE_URL) . '",
		  "CancellationURL": "' . $this->router->generate('best365_store_order_list_error', array(), UrlGeneratorInterface::ABSOLUTE_URL) . '",
		  "NotificationURL":  "' . $this->router->generate('best365_store_poli', array(), UrlGeneratorInterface::ABSOLUTE_URL) . '"
		}';	

		$auth = base64_encode($this->poli->merchant_code . ':' . $this->poli->auth_code);
		$header = array();
		$header[] = 'Content-Type: application/json';
		$header[] = 'Authorization: Basic '.$auth;
		$ch = curl_init($this->poli->initiate_api);
		curl_setopt($ch, CURLOPT_CAINFO, $this->poli->crt);
		curl_setopt($ch, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $json_builder);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($ch);
		curl_close($ch);
		$json = json_decode($response, true);

		return $json;
	}

	public function getPoliTransaction($token)
	{
		$auth = base64_encode($this->poli->merchant_code . ':' . $this->poli->auth_code);
		$header = array();
		$header[] = 'Authorization: Basic '.$auth;

		$ch = curl_init($this->poli->transaction_api . urlencode($token));
		curl_setopt($ch, CURLOPT_CAINFO, $this->poli->crt);
		curl_setopt($ch, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_POST, 0);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($ch);
		curl_close ($ch);
		$json = json_decode($response, true);

		return $json;
	}
}