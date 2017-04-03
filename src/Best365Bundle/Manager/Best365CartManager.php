<?php

namespace Best365Bundle\Manager;


use Elcodi\Component\Cart\Factory\CartFactory;
use Elcodi\Component\Cart\Services\CartManager;
use Elcodi\Component\Cart\Wrapper\CartWrapper;

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
	 * Best365CartManager constructor.
	 * @param CartManager $cartManager
	 * @param CartWrapper $cartWrapper
	 */
	public function __construct(CartManager $cartManager, CartWrapper $cartWrapper)
	{
		$this->cartManager = $cartManager;
		$this->cartWrapper = $cartWrapper;
	}

	/**
	 * Cart recovery function
	 * @param $order
	 */
	public function recoverCartByOrder($order)
	{
//		foreach($order->getOrderLines() as $line) {
//			$this->cartManager->addPurchasable($cart, $line->getPurchasable(), $line->getQuantity());
//		}
	}
}