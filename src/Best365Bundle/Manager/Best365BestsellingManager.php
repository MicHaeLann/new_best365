<?php

namespace Best365Bundle\Manager;

use Best365Bundle\Entity\Bestselling;
use Doctrine\ORM\EntityManager;

class Best365BestsellingManager
{
	private $em;

	public function __construct(EntityManager $em)
	{
		$this->em = $em;
	}

	public function getBestselling($amount = 0)
	{
		if ($amount == 0) {
			$bestselling = $this
				->em
				->getRepository('Best365Bundle\Entity\Bestselling')
				->findAll();
		} else {
			$bestselling = $this
				->em
				->getRepository('Best365Bundle\Entity\Bestselling')
				->findBy(array(), array(), $amount);
		}

		return $bestselling;
	}

	public function clear()
	{
		$connection = $this->em->getConnection();
		$query = $connection->getDatabasePlatform()->getTruncateTableSQL($this->em->getClassMetadata('Best365Bundle\Entity\Bestselling')->getTableName());
		$connection->executeUpdate($query);
	}

	public function add($pid)
	{
		$hot = new Bestselling();
		$hot->setPid($pid);
		$this->em->persist($hot);
	}

	public function isHot($pid)
	{
		$hot = $this->em
			->getRepository('Best365Bundle\Entity\Bestselling')
			->findBy(array(
				'pid' => $pid
			));

		$res = count($hot) == 0 ? false : true;

		return $res;
	}
}
