<?php

namespace Best365Bundle\Entity;

/**
 * PurchasablePrice
 */
class PurchasablePrice
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $pid;

    /**
     * @var int
     */
    private $mid;

    /**
     * @var int
     */
    private $price;

    /**
     * @var string
     */
    private $priceCurrencyIso;


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
     * Set pid
     *
     * @param integer $pid
     *
     * @return PurchasablePrice
     */
    public function setPid($pid)
    {
        $this->pid = $pid;

        return $this;
    }

    /**
     * Get pid
     *
     * @return int
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Set mid
     *
     * @param integer $mid
     *
     * @return PurchasablePrice
     */
    public function setMid($mid)
    {
        $this->mid = $mid;

        return $this;
    }

    /**
     * Get mid
     *
     * @return int
     */
    public function getMid()
    {
        return $this->mid;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return PurchasablePrice
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set priceCurrencyIso
     *
     * @param string $priceCurrencyIso
     *
     * @return PurchasablePrice
     */
    public function setPriceCurrencyIso($priceCurrencyIso)
    {
        $this->priceCurrencyIso = $priceCurrencyIso;

        return $this;
    }

    /**
     * Get priceCurrencyIso
     *
     * @return string
     */
    public function getPriceCurrencyIso()
    {
        return $this->priceCurrencyIso;
    }
}

