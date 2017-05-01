<?php
namespace Best365Bundle\Manager;

use Doctrine\ORM\EntityManager;

class Best365BestsellingManager
{
	private $em;

	public function __construct(EntityManager $em)
	{
		$this->em = $em;
	}

	public function getBestselling($amount)
	{
		$bestselling = $this
			->em
			->getRepository('Best365Bundle\Entity\Bestselling')
			->findBy(array(), array(), $amount);
		return $bestselling;
	}
}