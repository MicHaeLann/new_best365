<?php

namespace Best365Bundle\Entity;

/**
 * Trends
 */
class Trends
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
     * @var string
     */
    private $trends;

    /**
     * @var string
     */
    private $iso;


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
     * @return Trends
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
     * Set trends
     *
     * @param string $trends
     *
     * @return Trends
     */
    public function setTrends($trends)
    {
        $this->trends = $trends;

        return $this;
    }

    /**
     * Get trends
     *
     * @return string
     */
    public function getTrends()
    {
        return $this->trends;
    }

    /**
     * Set iso
     *
     * @param string $iso
     *
     * @return Trends
     */
    public function setIso($iso)
    {
        $this->iso = $iso;

        return $this;
    }

    /**
     * Get iso
     *
     * @return string
     */
    public function getIso()
    {
        return $this->iso;
    }
}

