<?php

namespace Best365Bundle\Manager;

use PaymentSuite\FreePaymentBundle\Services\FreePaymentMethodFactory;
use PaymentSuite\PaymentCoreBundle\Services\Interfaces\PaymentBridgeInterface;
use PaymentSuite\PaymentCoreBundle\Services\PaymentEventDispatcher;

class Best365PaymentManager
{
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
	 * @param PaymentEventDispatcher   $paymentEventDispatcher Event dispatcher
	 */
	public function __construct(
		FreePaymentMethodFactory $methodFactory,
		PaymentBridgeInterface $paymentBridge,
		PaymentEventDispatcher $paymentEventDispatcher
	) {
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
}