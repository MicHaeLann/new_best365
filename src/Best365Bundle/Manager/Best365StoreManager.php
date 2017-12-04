<?php

namespace Best365Bundle\Manager;

use Doctrine\ORM\EntityManager;
use Elcodi\Component\Geo\Repository\AddressRepository;
use Elcodi\Component\Store\Repository\StoreRepository;

class Best365StoreManager
{
	private $em;

	private $ar;

	private $sr;

	public function __construct(EntityManager $em, StoreRepository $sr, AddressRepository $ar)
	{
		$this->em = $em;
		$this->sr = $sr;
		$this->ar = $ar;
	}

	public function getStoreInfo()
	{
		$store = $this->sr->find(1);
		return $store;
	}

	public function getStoreAddressInfo()
	{
		$address = $this->ar->find(1);
		return $address;
	}
}
