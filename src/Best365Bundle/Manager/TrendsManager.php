<?php
namespace Best365Bundle\Manager;

use Doctrine\ORM\EntityManager;

class TrendsManager
{
	private $em;

	public function __construct(EntityManager $em)
	{
		$this->em = $em;
	}

	public function getTrends($cid)
	{
		$trends = $this
			->em
			->getRepository('Best365Bundle\Entity\Trends')
			->findBy(array('categoryId' => $cid));

		return $trends;
	}
}