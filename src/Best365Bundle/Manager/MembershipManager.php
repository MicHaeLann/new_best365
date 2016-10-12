<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 11/10/16
 * Time: 11:45 AM
 */

namespace Best365Bundle\Manager;


use Doctrine\ORM\EntityManager;
use Symfony\Component\Validator\Tests\Fixtures\Entity;

class MembershipManager
{
	private $em;

	public function __construct(EntityManager $em)
	{
		$this->em = $em;
	}

	public function getList()
	{
		$list = $this->em->getRepository('Best365Bundle\Entity\Membership')->findAll();
		return $list;
	}
}