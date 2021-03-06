<?php

namespace Best365Bundle\Manager;

use Behat\Mink\Exception\Exception;
use Elcodi\Component\Cart\Entity\Interfaces\CartInterface;
use Elcodi\Component\Cart\Entity\Interfaces\OrderInterface;
use Elcodi\Component\Cart\EventDispatcher\CartEventDispatcher;
use Elcodi\Component\Cart\Factory\CartFactory;
use Elcodi\Component\Cart\Services\CartManager;
use Elcodi\Component\Currency\Services\CurrencyConverter;
use Best365Bundle\Manager\PurchasableManager;
use Elcodi\Component\Product\Entity\Purchasable;
use Proxies\__CG__\Elcodi\Component\Product\Entity\Category;

class Best365CartManager
{
	/**
	 * @var CartManager
	 */
	private $cartManager;

	/**
	 * @var CartFactory
	 */
	private $cartFactory;

	/**
	 * @var CartEventDispatcher
	 */
	private $cartEventDispatcher;

	/**
	 * @var PurchasableManager
	 */
	private $purchasableManager;

	/**
	 * @var CurrencyConverter
	 */
	private $currencyConverter;

	/**
	 * Best365CartManager constructor.
	 * @param CartManager $cartManager
	 * @param CartFactory $cartFactory
	 * @param CartEventDispatcher $cartEventDispatcher
	 * @param \Best365Bundle\Manager\PurchasableManager $purchasableManager
	 * @param CurrencyConverter $currencyConverter
	 */
	public function __construct(
		CartManager $cartManager,
		CartFactory $cartFactory,
		CartEventDispatcher $cartEventDispatcher,
		PurchasableManager $purchasableManager,
		CurrencyConverter $currencyConverter
	)
	{
		$this->cartManager = $cartManager;
		$this->cartFactory = $cartFactory;
		$this->cartEventDispatcher = $cartEventDispatcher;
		$this->purchasableManager = $purchasableManager;
		$this->currencyConverter = $currencyConverter;
	}

	/**
	 * Cart recovery function
	 * @param $order
	 */
	public function recoverCartByOrder(OrderInterface $order)
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

	public function regenerate(CartInterface $cart, &$check = false)
	{
		$milk = 47;
		if ($cart->getTotalItemNumber() > 0) {
			$total = '';
			foreach ($cart->getCartLines() as &$line) {
				// get purchasable
				$purchasable = $this->purchasableManager
					->getProduct($line->getPurchasable()->getId());

				if (!$check &&
					((!$purchasable->getPrincipalCategory()->isRoot() &&
							$purchasable->getPrincipalCategory()->getParent()->getId() == $milk) ||
					($purchasable->getPrincipalCategory()->isRoot() &&
						$purchasable->getPrincipalCategory()->getId() == $milk))) {
					$check = true;
				}

				// update purchasable price
				$line->setPurchasableAmount($purchasable->getReducedPrice());

				// set line amount
				$line->setAmount($purchasable->getReducedPrice()->multiply($line->getQuantity()));
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
			$cart->setPurchasableAmount($total);
		}
		return $cart;
	}
}
