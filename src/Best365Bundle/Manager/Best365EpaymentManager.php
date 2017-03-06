<?php

namespace Best365Bundle\Manager;

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
			->getRepository('Best365Bundle\Repository\EpaymentOrder')
			->findOneBy(array('trade_no' => $trade_no));
		return $epayment;
	}
}