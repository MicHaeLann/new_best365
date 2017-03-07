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

	public function generateSignature($arr, $key)
	{
		ksort($arr);
		$str = '';
		foreach ($arr as $k => $v) {
			if (strlen($str) > 0) {
				$str .= '&';
			}
			$str .= $k . '=' . $v;
		}
		$str .= $key;
		$signature = md5(utf8_encode($str));

		return $signature;
	}
}