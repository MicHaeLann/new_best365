<?php

namespace Best365Bundle\Entity;

/**
 * PurchasableExt
 */
class PurchasableExt
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $purchasableId;

    /**
     * @var string
     */
    private $tag;

    /**
     * @var string
     */
    private $barcode;

	/**
	 * @var int
	 */
	private $fixedPrice;


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
     * Set purchasableId
     *
     * @param integer $purchasableId
     *
     * @return PurchasableExt
     */
    public function setPurchasableId($purchasableId)
    {
        $this->purchasableId = $purchasableId;

        return $this;
    }

    /**
     * Get purchasableId
     *
     * @return int
     */
    public function getPurchasableId()
    {
        return $this->purchasableId;
    }

    /**
     * Set tag
     *
     * @param string $tag
     *
     * @return PurchasableExt
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set barcode
     *
     * @param string $barcode
     *
     * @return PurchasableExt
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;

        return $this;
    }

    /**
     * Get barcode
     *
     * @return string
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

	/**
	 * Set fixedPrice
	 *
	 * @param string $fixedPrice
	 *
	 * @return PurchasableExt
	 */
	public function setFixedPrice($fixedPrice)
	{
		$this->fixedPrice = $fixedPrice;

		return $this;
	}

	/**
	 * Get fixedPrice
	 *
	 * @return int
	 */
	public function getFixedPrice()
	{
		return $this->fixedPrice;
	}
}

