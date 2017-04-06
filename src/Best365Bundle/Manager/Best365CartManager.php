<?php

namespace Best365Bundle\Manager;


use Elcodi\Component\Cart\EventDispatcher\CartEventDispatcher;
use Elcodi\Component\Cart\Factory\CartFactory;
use Elcodi\Component\Cart\Services\CartManager;
use Elcodi\Component\Cart\Wrapper\CartWrapper;
use Elcodi\Component\User\Entity\Customer;

class Best365CartManager
{
	/**
	 * @var CartManager
	 */
	private $cartManager;

	/**
	 * @var CartWrapper
	 */
	private $cartWrapper;

	/**
	 * @var CartFactory
	 */
	private $cartFactory;

	/**
	 * @var CartEventDispatcher
	 */
	private $cartEventDispatcher;

	/**
	 * Best365CartManager constructor.
	 * @param CartManager $cartManager
	 * @param CartWrapper $cartWrapper
	 * @param CartFactory $cartFactory
	 * @param CartEventDispatcher $cartEventDispatcher
	 */
	public function __construct(
		CartManager $cartManager,
		CartWrapper $cartWrapper,
		CartFactory $cartFactory,
		CartEventDispatcher $cartEventDispatcher
	)
	{
		$this->cartManager = $cartManager;
		$this->cartWrapper = $cartWrapper;
		$this->cartFactory = $cartFactory;
		$this->cartEventDispatcher = $cartEventDispatcher;
	}

	/**
	 * Cart recovery function
	 * @param $order
	 */
	public function recoverCartByOrder($order)
	{
		// load cart
		$cart = $this->cartFactory->create();
		$this->cartEventDispatcher
			->dispatchCartLoadEvents($cart);

		// initialise cart
		$customer = $order->getCustomer();
		$cart->setCustomer($customer);
		$customer->addCart($cart);

		// cart item recovery
		foreach($order->getOrderLines() as $line) {
			$this->cartManager->addPurchasable($cart, $line->getPurchasable(), $line->getQuantity());
		}
	}
}