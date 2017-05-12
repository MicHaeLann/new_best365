<?php

namespace Best365Bundle\Manager;

use Doctrine\ORM\EntityManager;

class MembershipManager
{
	private $em;

	public function __construct(EntityManager $em)
	{
		$this->em = $em;
	}

	/**
	 * get membership configuration list
	 * @return array
	 */
	public function getList()
	{
		$list = $this->em->getRepository('Best365Bundle\Entity\Membership')->findBy(array(), array('point' => 'ASC'));
		return $list;
	}

	/**
	 * get membership configuration by id
	 * @param $id
	 * @return null|object
	 */
	public function get($id)
	{
		return $this->em->getRepository('Best365Bundle\Entity\Membership')->find($id);
	}
}
