<?php

namespace Best365Bundle\Manager;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManager;
use Elcodi\Component\Product\Entity\Interfaces\ProductInterface;
use PaymentSuite\FreePaymentBundle\Services\FreePaymentMethodFactory;
use PaymentSuite\PaymentCoreBundle\Services\Interfaces\PaymentBridgeInterface;
use PaymentSuite\PaymentCoreBundle\Services\PaymentEventDispatcher;
use Elcodi\Component\Currency\Services\CurrencyConverter;
use Elcodi\Component\Cart\Entity\Interfaces\OrderInterface;
use Elcodi\Component\Shipping\Wrapper\ShippingWrapper;
use Elcodi\Component\User\Wrapper\CustomerWrapper;
use Best365Bundle\Entity\OrderExt;
use Best365Bundle\Manager\PurchasableManager;


class Best365OrderManager
{
	/**
	 * @var EntityManager
	 */
	private $em;

	/**
	 * @var ObjectManager
	 */
	private $orderObjectManager;

	/**
	 * @var CustomerWrapper
	 */
	private $customerWrapper;

	/**
	 * @var ShippingWrapper
	 */
	private $shippingWrapper;

	/**
	 * @var CurrencyConverter
	 */
	private $currencyConverter;

	/**
	 * @var Best365CustomerManager
	 */
	private $best365CustomerManager;

	/**
	 * @var \Best365Bundle\Manager\PurchasableManager
	 */
	private $purchasableManager;

	/**
	 * @var Best365PaymentManager
	 */
	private $best365PaymentManager;

	/**
	 * @var Best365CartManager
	 */
	private $best365CartManager;

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
	 * Best365OrderManager constructor.
	 * @param FreePaymentMethodFactory $methodFactory
	 * @param PaymentBridgeInterface $paymentBridge
	 * @param PaymentEventDispatcher $paymentEventDispatcher
	 * @param ObjectManager $orderObjectManager
	 * @param CustomerWrapper $customerWrapper
	 * @param ShippingWrapper $shipping_wrapper
	 * @param CurrencyConverter $currencyConverter
	 * @param Best365CustomerManager $best365CustomerManager
	 * @param PurchasableManager $purchasableManager
	 * @param Best365PaymentManager $best365PaymentManager
	 * @param Best365CartManager $best365CartManager
	 * @param EntityManager $em
	 */
	public function __construct
	(
		FreePaymentMethodFactory $methodFactory,
		PaymentBridgeInterface $paymentBridge,
		PaymentEventDispatcher $paymentEventDispatcher,
		ObjectManager $orderObjectManager,
		CustomerWrapper $customerWrapper,
		ShippingWrapper	$shipping_wrapper,
		CurrencyConverter $currencyConverter,
		Best365CustomerManager $best365CustomerManager,
		PurchasableManager $purchasableManager,
		Best365PaymentManager $best365PaymentManager,
		Best365CartManager $best365CartManager,
		EntityManager $em
	)
	{
		$this->methodFactory = $methodFactory;
		$this->paymentBridge = $paymentBridge;
		$this->paymentEventDispatcher = $paymentEventDispatcher;

		$this->orderObjectManager = $orderObjectManager;

		$this->customerWrapper = $customerWrapper;
		$this->shippingWrapper = $shipping_wrapper;
		$this->currencyConverter = $currencyConverter;
		$this->best365CustomerManager = $best365CustomerManager;
		$this->purchasableManager = $purchasableManager;
		$this->best365PaymentManager = $best365PaymentManager;
		$this->best365CartManager = $best365CartManager;

		$this->em = $em;
	}

	/**
	 * Generate order
	 */
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
	 * Create OrderExt Record
	 * @param $oid
	 * @param $ref
	 */
	public function createExtRecord($oid, $ref)
	{
		$order_ext = new OrderExt();
		$order_ext->setOrderId($oid);
		$order_ext->setRef($ref);
		$order_ext->setTrackingNum('');
		$order_ext->setValid(1);

		$this->em->persist($order_ext);
		$this->em->flush();
	}

	/**
	 * Add OrderExt to Order
	 * @param OrderInterface $order
	 */
	public function getRecord(OrderInterface &$order)
	{
		// get order ext
		$order_ext = $this->em
			->getRepository('Best365Bundle\Entity\OrderExt')
			->findOneBy(array('orderId' => $order->getId()));

		$ref = '';
		$tracking_num = '';
		$valid = '';

		if ($order_ext) {
			$ref = $order_ext->getRef();
			$tracking_num = $order_ext->getTrackingNum();
			$valid = $order_ext->getValid();
		}

		$order->ref = $ref;
		$order->trackingNum = $tracking_num;
		$order->valid = $valid;
	}

	/**
	 * Update OrderExt Record
	 * @param OrderInterface $order
	 * @param $tracking_num
	 * @param $valid
	 */
	public function updateExtRecord(OrderInterface $order, $tracking_num = '', $valid = null)
	{
		$order_ext = $this->em
			->getRepository('Best365Bundle\Entity\OrderExt')
			->findOneBy(array('orderId' => $order->getId()));

		$order_ext->setTrackingNum($tracking_num);

		if ($valid !== null) {
			$order_ext->setValid($valid);
		}

		$this->em->persist($order_ext);
		$this->em->flush();
	}


	/**
	 * Saves order
	 *
	 * @param CartInterface $cart
	 * @param $payment_method
	 *
	 * @return Object $result
	 *
	 */
	public function saveOrder($cart, $payment_method)
	{
		// get strategy
		$customer = $this->customerWrapper->get();
		$membership = $this->best365CustomerManager->getCustomerMembership($customer);

		// generate order
		$this->generateOrder();

		// update order shipping amount(not persisted in cart)
		$cart_weight = $cart->getWeight() < 1000 && $cart->getWeight() > 0 ? 1000 : $cart->getWeight();

		$shipping_method = $this->shippingWrapper->getOneById($cart, $cart->getShippingMethod());

		// reset shipping amount
		$shipping_amount = $shipping_method->getPrice()->multiply($cart_weight/1000);
		$shipping_amount = $this->currencyConverter->convertMoney($shipping_amount, $cart->getAmount()->getCurrency());
		$order = $cart->getOrder();
		$order->setShippingAmount($shipping_amount);

		// reset item info
		$total = $this->resetOrderLine($order, $membership);

		// reset item total
		$order->setPurchasableAmount($total);

		// reset order total price
		$order->setAmount($order->getPurchasableAmount()->add($shipping_amount));

		$this->orderObjectManager->persist($order);
		$this->orderObjectManager->flush();

		// generate reference and bend reference to order
		$success = false;
		$order_id = $order->getId();
		$reference = '';
		if ($payment_method == 'transfer') {
			$reference = uniqid();
			//$success = true;
		} elseif ($payment_method == 'online_banking') {
			$response = $this->best365PaymentManager->getOnlineBankingUrl($order);
			if (strtoupper($response['tag']) != 'ERROR') {
				$success = true;
			}
		} else {
			$epayment = $this->best365PaymentManager->getEpaymentQrcode($order);
			$content = json_decode($epayment, true);
			if (!empty($content) && $content['response']['message'] == 'success') {
				$success = true;
				$reference = $content['response']['qrcode_url'];
			}
		}

		// create ext record
		$this->createExtRecord($order_id, $reference);

		// remove order
		$this->removeOrder($order);

		$result = new \stdClass();
		$result->success = $success;
		$result->order = $order;
		$result->paymark = isset($response) ? $response : '';
		return $result;
	}

	/**
	 * Reset order item info
	 * @param $order
	 * @param $membership
	 * @return string
	 */
	private function resetOrderLine(&$order, $membership)
	{
		// reset order item info
		$total = '';
		foreach ($order->getOrderLines() as &$line) {
			// get product info
			$purchasable = $line->getPurchasable();
			$ext = $this->purchasableManager->getProductExt($purchasable);
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
					$line_amount = $this->currencyConverter->convertMoney($line_amount, $total->getCurrency());
				}
				$total = $total->add($line_amount);
			}
		}
		return $total;
	}

	public function removeOrder($order)
	{
		// restore stock and move item back to cart
		foreach ($order->getOrderLines() as $line) {
			$product = $line->getPurchasable();
			$stock = $product->getStock();
			$this->purchasableManager->updateProductStock($product->getId(), $stock + $line->getQuantity());
		}

		// set order invalid
		$this->updateExtRecord($order, '', 0);

		// add order item to cart
//		$this->best365CartManager->recoverCartByOrder($order);
	}
}