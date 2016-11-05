<?php

namespace Best365Bundle\Entity;

/**
 * OrderExt
 */
class OrderExt
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $orderId;

    /**
     * @var string
     */
    private $ref;

    /**
     * @var string
     */
    private $trackingNum;


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
     * Set orderId
     *
     * @param integer $orderId
     *
     * @return OrderExt
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderId
     *
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set ref
     *
     * @param string $ref
     *
     * @return OrderExt
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get ref
     *
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set trackingNum
     *
     * @param string $trackingNum
     *
     * @return OrderExt
     */
    public function setTrackingNum($trackingNum)
    {
        $this->trackingNum = $trackingNum;

        return $this;
    }

    /**
     * Get trackingNum
     *
     * @return string
     */
    public function getTrackingNum()
    {
        return $this->trackingNum;
    }
}

