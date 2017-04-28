<?php

namespace Best365Bundle\Manager;

use Elcodi\Component\Geo\Entity\Interfaces\AddressInterface;
use Elcodi\Component\Geo\Repository\LocationRepository;

class Best365AddressManager
{

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
}