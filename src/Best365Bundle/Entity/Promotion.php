<?php

namespace Best365Bundle\Entity;

/**
 * Promotion
 */
class Promotion
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $categoryId;

    /**
     * @var int
     */
    private $purchasableId;


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
     * Set categoryId
     *
     * @param integer $categoryId
     *
     * @return Promotion
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return int
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set purchasableId
     *
     * @param integer $purchasableId
     *
     * @return Promotion
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
}

