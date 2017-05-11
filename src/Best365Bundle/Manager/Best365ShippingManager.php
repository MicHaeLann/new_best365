<?php

namespace Best365Bundle\Manager;

use Elcodi\Component\Shipping\Entity\ShippingMethod;

class Best365ShippingManager
{
	public function getShippingMethodArray(ShippingMethod $sm)
	{
		return array(
			'id' => $sm->getId(),
			'name' => $sm->getName(),
			'carrierName' => $sm->getCarrierName(),
			'description' => $sm->getDescription()
		);
	}
}