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
     * @var string
     */
    private $params;


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
     * Set params
     *
     * @param string $params
     *
     * @return EpaymentOrder
     */
    public function setParams($params)
    {
        $this->params = $params;

        return $this;
    }

    /**
     * Get params
     *
     * @return string
     */
    public function getParams()
    {
        return $this->params;
    }
}

