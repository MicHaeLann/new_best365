<?php

namespace Best365Bundle\Entity;

/**
 * PaymentGateway
 */
class PaymentGateway
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $oid;

    /**
     * @var int
     */
    private $gateway;

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
     * Set oid
     *
     * @param integer $oid
     *
     * @return PaymentGateway
     */
    public function setOid($oid)
    {
        $this->oid = $oid;

        return $this;
    }

    /**
     * Get oid
     *
     * @return int
     */
    public function getOid()
    {
        return $this->oid;
    }

    /**
     * Set gateway
     *
     * @param integer $gateway
     *
     * @return PaymentGateway
     */
    public function setGateway($gateway)
    {
        $this->gateway = $gateway;

        return $this;
    }

    /**
     * Get gateway
     *
     * @return int
     */
    public function getGateway()
    {
        return $this->gateway;
    }

    /**
     * Set params
     *
     * @param string $params
     *
     * @return PaymentGateway
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

