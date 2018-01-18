<?php

namespace Best365Bundle\Manager;

use Best365Bundle\Entity\AddressImage;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManager;
use Elcodi\Component\Cart\Wrapper\CartWrapper;
use Elcodi\Component\Geo\Entity\Interfaces\AddressInterface;
use Elcodi\Component\Geo\Repository\AddressRepository;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;

class Best365AddressManager
{
	/**
	 * @var EntityManager
	 */
	private $em;

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
	 * @param EntityManager $em
	 * @param AddressRepository $addressRepository
	 * @param TokenStorage $tokenStorage
	 * @param CartWrapper $cartWrapper
	 * @param ObjectManager $cartObjectManager
	 */
	public function __construct(
		EntityManager $em,
		AddressRepository $addressRepository,
		TokenStorage $tokenStorage,
		CartWrapper $cartWrapper,
		ObjectManager $cartObjectManager
	)
	{
		$this->em = $em;
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
		if (empty($address->getMobile())) {
			$address->setMobile('000000000');
		}

		if (empty($address->getName())) {
			$address->setName('DEFAULT NAME');
		}

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

	/**
	 * update address image
	 * @param $aid
	 * @param $iids
	 */
//	public function saveImage($aid, $iids) {
//		// unlink images
//		$images = $this
//			->em
//			->getRepository('Best365Bundle\Entity\AddressImage')
//			->findBy(array('aid' => $aid));
//		if (count($iids) == 2 || count($images) == 2) {
//			foreach ($images as $image) {
//				$this->em->remove($image);
//			}
//		}
//
//		// link new image and address
//		foreach ($iids as $iid) {
//			$address_image = new AddressImage();
//			$address_image->setAid($aid);
//			$address_image->setIid($iid);
//			$this->em->persist($address_image);
//		}
//
//		$this->em->flush();
//	}
}
