<?php

namespace Best365Bundle\Manager;

use Doctrine\ORM\EntityManager;

class PromotionManager
{
	private $em;

	public function __construct(EntityManager $em)
	{
		$this->em = $em;
	}

	public function getPromotion()
	{
		$promotions = $this
			->em
			->getRepository('Best365Bundle\Entity\Promotion')
			->findAll();

		return $promotions;
	}
}
