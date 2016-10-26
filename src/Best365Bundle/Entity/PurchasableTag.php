<?php

namespace Best365Bundle\Entity;

/**
 * PurchasableTag
 */
class PurchasableTag
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
     * @return PurchasableTag
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
     * @return PurchasableTag
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
}

