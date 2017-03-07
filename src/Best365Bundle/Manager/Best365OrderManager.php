<?php

namespace Best365Bundle\Manager;

use Best365Bundle\Entity\OrderExt;
use Best365Bundle\Entity\EpaymentOrder;
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

	public function createEpaymentOrder($arr)
	{
		$order = new EpaymentOrder();
		$order->setIncrementId($arr['increment_id']);
		$order->setGrandtotal($arr['grandtotal']);
		$order->setReceiptAmount($arr['receipt_amount']);
		$order->setCurrency($arr['currency']);
		$order->setSubject($arr['subject']);
		$order->setDescription($arr['describe']);
		$order->setService($arr['service']);
		$order->setTradeNo($arr['trade_no']);
		$order->setNotifyTime(new \DateTime($arr['notify_time']));
		$order->setCreatedAt(new \DateTime($arr['created_at']));
		$order->setGmtPayment(new \DateTime($arr['gmt_payment']));
		$order->setTradeStatus($arr['trade_status']);
		$order->setPaymentChannels($arr['payment_channels']);
		$order->setBuyerPaymentAccount($arr['buyer_payment_account']);
		$order->setSignature($arr['signature']);
		$order->setSignType($arr['sign_type']);

		$this->em->persist($order);
		$this->em->flush();
	}

}