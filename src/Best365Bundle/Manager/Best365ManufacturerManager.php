<?php

namespace Best365Bundle\Manager;

use Doctrine\ORM\EntityManager;
use Elcodi\Component\Product\Repository\ManufacturerRepository;

class Best365ManufacturerManager
{
	/**
	 * @var EntityManager
	 */
	private $em;

	/**
	 * @var ManufacturerRepository
	 */
	private $mr;

	/**
	 * Best365ManufacturerManager constructor.
	 * @param EntityManager $em
	 * @param ManufacturerRepository $mr
	 */
	public function __construct(
		EntityManager $em,
		ManufacturerRepository $mr
	)
	{
		$this->em = $em;
		$this->mr = $mr;
	}

	/**
	 * get all manufacturer
	 * @return array
	 */
	public function all()
	{
		return $this->mr->findAll();
	}

	/**
	 * get manufacturer array(id => name)
	 * @return array
	 */
	public function getManufacturerArray()
	{
		$arr = array();
		$manufacturer = $this->all();
		foreach ($manufacturer as $v) {
			$arr[$v->getId()] = $v->getName();
		}

		return $arr;
	}
}
