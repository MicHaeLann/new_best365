<?php

namespace Best365Bundle\Manager;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManager;
use Elcodi\Component\Cart\Entity\Interfaces\CartInterface;
use Elcodi\Component\Cart\Repository\OrderRepository;
use Elcodi\Component\Currency\Wrapper\CurrencyWrapper;
use Elcodi\Component\StateTransitionMachine\Machine\MachineManager;
use PaymentSuite\FreePaymentBundle\Services\FreePaymentMethodFactory;
use PaymentSuite\PaymentCoreBundle\Services\Interfaces\PaymentBridgeInterface;
use PaymentSuite\PaymentCoreBundle\Services\PaymentEventDispatcher;
use Elcodi\Component\Currency\Services\CurrencyConverter;
use Elcodi\Component\Cart\Entity\Interfaces\OrderInterface;
use Elcodi\Component\Shipping\Wrapper\ShippingWrapper;
use Best365Bundle\Entity\OrderExt;
use Best365Bundle\Manager\PurchasableManager;
use Symfony\Component\Routing\Router;

class Best365OrderManager
{
	/**
	 * @var EntityManager
	 */
	private $em;

	/**
	 * @var Router
	 */
	private $router;

	/**
	 * @var ObjectManager
	 */
	private $orderObjectManager;

	/**
	 * @var OrderRepository
	 */
	private $orderRepository;

	/**
	 * @var ShippingWrapper
	 */
	private $shippingWrapper;

	/**
	 * @var CurrencyConverter
	 */
	private $currencyConverter;

	/**
	 * @var CurrencyWrapper
	 */
	private $currencyWrapper;

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

	private $best365CustomerManager;

	/**
	 * @var MachineManager
	 */
	private $machineManager;

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


	public function __construct
	(
		FreePaymentMethodFactory $methodFactory,
		PaymentBridgeInterface $paymentBridge,
		PaymentEventDispatcher $paymentEventDispatcher,
		ObjectManager $orderObjectManager,
		OrderRepository $orderRepository,
		ShippingWrapper	$shipping_wrapper,
		CurrencyConverter $currencyConverter,
		CurrencyWrapper $currencyWrapper,
		PurchasableManager $purchasableManager,
		Best365PaymentManager $best365PaymentManager,
		Best365CartManager $best365CartManager,
		Best365CustomerManager $best365CustomerManager,
		MachineManager $machineManager,
		EntityManager $em,
		Router $router
	)
	{
		$this->methodFactory = $methodFactory;
		$this->paymentBridge = $paymentBridge;
		$this->paymentEventDispatcher = $paymentEventDispatcher;

		$this->orderObjectManager = $orderObjectManager;
		$this->orderRepository = $orderRepository;

		$this->shippingWrapper = $shipping_wrapper;
		$this->currencyConverter = $currencyConverter;
		$this->currencyWrapper = $currencyWrapper;
		$this->purchasableManager = $purchasableManager;
		$this->best365PaymentManager = $best365PaymentManager;
		$this->best365CartManager = $best365CartManager;
		$this->best365CustomerManager = $best365CustomerManager;
		$this->machineManager = $machineManager;

		$this->em = $em;
		$this->router = $router;
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
	public function saveOrder(CartInterface $cart, $payment_method)
	{
		// generate order
		$this->generateOrder();

		// update order shipping amount(not persisted in cart)
		$cart_weight = $cart->getWeight() < 1000 && $cart->getWeight() > 0 ? 1000 : $cart->getWeight();

		$shipping_method = $this->shippingWrapper->getOneById($cart, $cart->getShippingMethod());

		// reset shipping amount
		$order = $cart->getOrder();
		$cart_weight = ceil($cart_weight / 100) / 10;
		if ($shipping_method->getId() == "custom-shipping-method-8") {
			$cart_weight = ceil($cart_weight / 5);
		}
		$shipping_amount = $shipping_method->getPrice()->multiply($cart_weight);
		$shipping_amount = $this->currencyConverter->convertMoney($shipping_amount, $order->getPurchasableAmount()->getCurrency());
		$order->setShippingAmount($shipping_amount);

		// reset order info
		$this->regenerateOrder($order);

		// reset order total price
		$order->setAmount($order->getPurchasableAmount()->add($shipping_amount));

		$this->orderObjectManager->persist($order);
		$this->orderObjectManager->flush();

		// generate reference and bend reference to order
		$success = false;
		$order_id = $order->getId();
		$reference = '';
		if ($payment_method == 'transfer') {
			$reference = $order_id;
			$success = true;
		} elseif ($payment_method == 'poli') {
			$response = $this->best365PaymentManager->getPoliInitiateUrl($order);
			if ($response['Success']) {
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
		if (!$success) {
			$this->removeOrder($order);
		}

		$result = new \stdClass();
		$result->success = $success;
		$result->order = $order;
		$result->payment = isset($response) ? $response : '';
		return $result;
	}

	/**
	 * Reset order info
	 * @param $order
	 */
	private function regenerateOrder(OrderInterface &$order)
	{
		$total = '';
		foreach ($order->getOrderLines() as &$line) {
			// get product info
			$purchasable = $this
				->purchasableManager
				->getProduct($line->getPurchasable()->getId());

			// update purchasable price
			$line->setPurchasableAmount($purchasable->getPrice());
			$line->getPurchasable()->setPrice($purchasable->getPrice());


			// set line amount
			$line->setAmount($purchasable->getPrice()->multiply($line->getQuantity()));

			if ($total == '') {
				$total = $line->getAmount();
			} else {
				$line_amount = $line->getAmount();

				// convert money if not match
				if ($line_amount->getCurrency() != $total->getCurrency()) {
					$line_amount = $this->currencyConverter
						->convertMoney($line_amount, $total->getCurrency());
				}
				$total = $total->add($line_amount);
			}
		}

		$order->setPurchasableAmount($total);
	}

	/**
	 * Remove order when error
	 * @param $order
	 */
	public function removeOrder(OrderInterface $order)
	{
		// restore stock and move item back to cart
		foreach ($order->getOrderLines() as $line) {
			$product = $line->getPurchasable();
			$stock = $product->getStock();
			$this->purchasableManager->updateProductStock($product->getId(), $stock + $line->getQuantity());
		}

		// set order invalid
		$this->updateExtRecord($order, '', 0);

		// return item to cart
		$this->best365CartManager->recoverCartByOrder($order);
	}

	/**
	 * Do payment to order
	 * @param $order_id
	 * @param $success
	 * @return string
	 */
	public function payOrder($order_id, $success)
	{
		$order = $this
			->orderRepository
			->find($order_id);

		$url = $this->router->generate('best365_store_order_list_error');
		$valid = 0;

		if (!empty($order)) {
			if ($order->getPaymentStateLineStack()->getLastStateLine()->getName() == "unpaid" && $success) {
				// update payment status
				$stateLineStack = $this
					->machineManager
					->transition(
						$order,
						$order->getPaymentStateLineStack(),
						"pay",
						''
					);
				$order->setPaymentStateLineStack($stateLineStack);

				$this->orderObjectManager->persist($order);
				$this->orderObjectManager->flush();

				// set order valid
				$valid = 1;

				// add points
				$currency = $this
					->currencyWrapper
					->get();
				$nzd = $this
					->currencyConverter
					->convertMoney(
						$order->getPurchasableAmount(),
						$currency
					);
				$points = floor($nzd->getAmount() / 100 * 10);

				// add points to customer
				$this->best365CustomerManager->updatePoints($order->getCustomer(), $points);
				$url = $this->router->generate('best365_store_order_thanks', array('id' => $order_id));
			} elseif ($order->getPaymentStateLineStack()->getLastStateLine()->getName() == "paid") {
				$url = $this->router->generate('best365_store_order_thanks', array('id' => $order_id));
			}
		}
		$this->updateExtRecord($order, '', $valid);

		return $url;
	}
}