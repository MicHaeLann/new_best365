<?php

namespace Best365Bundle\Manager;

use Best365Bundle\Entity\OrderExt;
use Doctrine\ORM\EntityManager;
use Elcodi\Component\Cart\Entity\Interfaces\OrderInterface;

class Best365OrderManager
{
	private $em;

	public function __construct(EntityManager $em)
	{
		$this->em = $em;
	}

	public function createExtRecord($oid, $ref)
	{
		$order_ext = new OrderExt();
		$order_ext->setOrderId($oid);
		$order_ext->setRef($ref);
		$order_ext->setTrackingNum('');

		$this->em->persist($order_ext);
		$this->em->flush();
	}

	public function getRecord(OrderInterface &$order)
	{
		// get order ext
		$order_ext = $this->em
			->getRepository('Best365Bundle\Entity\OrderExt')
			->findOneBy(array('orderId' => $order->getId()));

		$ref = '';
		$tracking_num = '';

		if ($order_ext) {
			$ref = $order_ext->getRef();
			$tracking_num = $order_ext->getTrackingNum();
		}

		if (!empty($tracking_num)) {
			$tracking_num = explode(',', $tracking_num);
		}

		$order->ref = $ref;
		$order->trackingNum = $tracking_num;
	}

	public function updateExtRecord(OrderInterface $order, $tracking_num)
	{
		$order_ext = $this->em
			->getRepository('Best365Bundle\Entity\OrderExt')
			->findOneBy(array('orderId' => $order->getId()));

		$order_ext->setTrackingNum($tracking_num);

		$this->em->persist($order_ext);
		$this->em->flush();
	}

}