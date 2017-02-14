<?php

namespace Best365Bundle\Manager;

use Doctrine\ORM\EntityManager;

class EventManager
{
	private $em;

	public function __construct(EntityManager $em)
	{
		$this->em = $em;
	}

	public function getEvent()
	{
		$list = $this->em->getRepository('Best365Bundle\Entity\Event')->findBy(array('enabled' => 1));
		return $list;
	}
}