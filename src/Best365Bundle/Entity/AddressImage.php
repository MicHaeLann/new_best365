<?php

namespace Best365Bundle\Entity;

/**
 * AddressImage
 */
class AddressImage
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $aid;

    /**
     * @var int
     */
    private $iid;


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
     * Set aid
     *
     * @param integer $aid
     *
     * @return AddressImage
     */
    public function setAid($aid)
    {
        $this->aid = $aid;

        return $this;
    }

    /**
     * Get aid
     *
     * @return int
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * Set iid
     *
     * @param integer $iid
     *
     * @return AddressImage
     */
    public function setIid($iid)
    {
        $this->iid = $iid;

        return $this;
    }

    /**
     * Get iid
     *
     * @return int
     */
    public function getIid()
    {
        return $this->iid;
    }
}

