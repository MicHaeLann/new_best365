<?php

namespace Best365Bundle\Manager;

use Doctrine\Common\Persistence\ObjectManager;
use Elcodi\Component\Cart\Wrapper\CartWrapper;
use Elcodi\Component\Geo\Entity\Interfaces\AddressInterface;
use Elcodi\Component\Geo\Repository\AddressRepository;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;

class Best365AddressManager
{

	/**
	 * @var AddressRepository
	 */
	private $addressRepository;

	/**
	 * @var TokenStorage
	 */
	private $tokenStorage;

	/**
	 * @var CartWrapper
	 */
	private $cartWrapper;

	/**
	 * @var ObjectManager
	 */
	private $cartObjectManager;

	/**
	 * Best365AddressManager constructor.
	 * @param AddressRepository $addressRepository
	 * @param TokenStorage $tokenStorage
	 * @param CartWrapper $cartWrapper
	 * @param ObjectManager $cartObjectManager
	 */
	public function __construct(
		AddressRepository $addressRepository,
		TokenStorage $tokenStorage,
		CartWrapper $cartWrapper,
		ObjectManager $cartObjectManager
	)
	{
		$this->addressRepository = $addressRepository;
		$this->tokenStorage = $tokenStorage;
		$this->cartWrapper = $cartWrapper;
		$this->cartObjectManager = $cartObjectManager;
	}

	/**
	 * generate address
	 * @param AddressInterface $address
	 * @return AddressInterface $address
	 */
	public function generateAddress(AddressInterface $address)
	{
		$address->setName('DEFAULT NAME')
			->setMobile('000000000');
		if (empty($address->getPostalcode())) {
			$address->setPostalcode('000000');
		}

		return $address;
	}

	/**
	 * save checkout address
	 * @param $addressId
	 * @param $setMethodName
	 * @return bool
	 */
	public function saveCheckoutAddress($addressId, $setMethodName)
	{
		$result = false;
		if ($addressId) {
			$address = $this
				->addressRepository
				->findOneBy(['id' => $addressId]);

			$customerAddresses = $this
				->tokenStorage
				->getToken()
				->getUser()
				->getAddresses();

			if ($customerAddresses->contains($address)) {
				$cart = $this
					->cartWrapper
					->get();

				$cart->$setMethodName($address);

				$this->cartObjectManager->persist($cart);
				$this->cartObjectManager->flush();
			}

			$result = true;
		}

		return $result;
	}
}