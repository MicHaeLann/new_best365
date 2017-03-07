<?php

namespace Best365Bundle\Entity;

/**
 * EpaymentOrder
 */
class EpaymentOrder
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $tradeNo;

    /**
     * @var int
     */
    private $incrementId;

    /**
     * @var float
     */
    private $grandtotal;

    /**
     * @var float
     */
    private $receiptAmount;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var string
     */
    private $subject;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $signType;

    /**
     * @var string
     */
    private $signature;

    /**
     * @var string
     */
    private $service;

    /**
     * @var \DateTime
     */
    private $notifyTime;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $gmtPayment;

    /**
     * @var string
     */
    private $tradeStatus;

    /**
     * @var string
     */
    private $paymentChannels;

    /**
     * @var string
     */
    private $buyerPaymentAccount;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tradeNo
     *
     * @param string $tradeNo
     *
     * @return EpaymentOrder
     */
    public function setTradeNo($tradeNo)
    {
        $this->tradeNo = $tradeNo;

        return $this;
    }

    /**
     * Get tradeNo
     *
     * @return string
     */
    public function getTradeNo()
    {
        return $this->tradeNo;
    }

    /**
     * Set incrementId
     *
     * @param integer $incrementId
     *
     * @return EpaymentOrder
     */
    public function setIncrementId($incrementId)
    {
        $this->incrementId = $incrementId;

        return $this;
    }

    /**
     * Get incrementId
     *
     * @return int
     */
    public function getIncrementId()
    {
        return $this->incrementId;
    }

    /**
     * Set grandtotal
     *
     * @param float $grandtotal
     *
     * @return EpaymentOrder
     */
    public function setGrandtotal($grandtotal)
    {
        $this->grandtotal = $grandtotal;

        return $this;
    }

    /**
     * Get grandtotal
     *
     * @return float
     */
    public function getGrandtotal()
    {
        return $this->grandtotal;
    }

    /**
     * Set receiptAmount
     *
     * @param float $receiptAmount
     *
     * @return EpaymentOrder
     */
    public function setReceiptAmount($receiptAmount)
    {
        $this->receiptAmount = $receiptAmount;

        return $this;
    }

    /**
     * Get receiptAmount
     *
     * @return float
     */
    public function getReceiptAmount()
    {
        return $this->receiptAmount;
    }

    /**
     * Set currency
     *
     * @param string $currency
     *
     * @return EpaymentOrder
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return EpaymentOrder
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return EpaymentOrder
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set signType
     *
     * @param string $signType
     *
     * @return EpaymentOrder
     */
    public function setSignType($signType)
    {
        $this->signType = $signType;

        return $this;
    }

    /**
     * Get signType
     *
     * @return string
     */
    public function getSignType()
    {
        return $this->signType;
    }

    /**
     * Set signature
     *
     * @param string $signature
     *
     * @return EpaymentOrder
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;

        return $this;
    }

    /**
     * Get signature
     *
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Set service
     *
     * @param string $service
     *
     * @return EpaymentOrder
     */
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set notifyTime
     *
     * @param \DateTime $notifyTime
     *
     * @return EpaymentOrder
     */
    public function setNotifyTime($notifyTime)
    {
        $this->notifyTime = $notifyTime;

        return $this;
    }

    /**
     * Get notifyTime
     *
     * @return \DateTime
     */
    public function getNotifyTime()
    {
        return $this->notifyTime;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return EpaymentOrder
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set gmtPayment
     *
     * @param \DateTime $gmtPayment
     *
     * @return EpaymentOrder
     */
    public function setGmtPayment($gmtPayment)
    {
        $this->gmtPayment = $gmtPayment;

        return $this;
    }

    /**
     * Get gmtPayment
     *
     * @return \DateTime
     */
    public function getGmtPayment()
    {
        return $this->gmtPayment;
    }

    /**
     * Set tradeStatus
     *
     * @param string $tradeStatus
     *
     * @return EpaymentOrder
     */
    public function setTradeStatus($tradeStatus)
    {
        $this->tradeStatus = $tradeStatus;

        return $this;
    }

    /**
     * Get tradeStatus
     *
     * @return string
     */
    public function getTradeStatus()
    {
        return $this->tradeStatus;
    }

    /**
     * Set paymentChannels
     *
     * @param string $paymentChannels
     *
     * @return EpaymentOrder
     */
    public function setPaymentChannels($paymentChannels)
    {
        $this->paymentChannels = $paymentChannels;

        return $this;
    }

    /**
     * Get paymentChannels
     *
     * @return string
     */
    public function getPaymentChannels()
    {
        return $this->paymentChannels;
    }

    /**
     * Set buyerPaymentAccount
     *
     * @param string $buyerPaymentAccount
     *
     * @return EpaymentOrder
     */
    public function setBuyerPaymentAccount($buyerPaymentAccount)
    {
        $this->buyerPaymentAccount = $buyerPaymentAccount;

        return $this;
    }

    /**
     * Get buyerPaymentAccount
     *
     * @return string
     */
    public function getBuyerPaymentAccount()
    {
        return $this->buyerPaymentAccount;
    }
}

