<?php

namespace Best365Bundle\Manager;

use Doctrine\ORM\EntityManager;

class Best365EpaymentManager
{
	private $em;

	public function __construct(EntityManager $em)
	{
		$this->em = $em;
	}
	public function getEpaymentOrder($trade_no)
	{
		$epayment = $this->em
			->getRepository('Best365Bundle\Entity\EpaymentOrder')
			->findOneBy(array('tradeNo' => $trade_no));
		return $epayment;
	}
}