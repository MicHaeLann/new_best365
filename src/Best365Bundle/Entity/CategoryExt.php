<?php

namespace Best365Bundle\Entity;

/**
 * CategoryExt
 */
class CategoryExt
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $cid;

    /**
     * @var int
     */
    private $showInHome;


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
     * Set cid
     *
     * @param integer $cid
     *
     * @return CategoryExt
     */
    public function setCid($cid)
    {
        $this->cid = $cid;

        return $this;
    }

    /**
     * Get cid
     *
     * @return int
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * Set showInHome
     *
     * @param integer $showInHome
     *
     * @return CategoryExt
     */
    public function setShowInHome($showInHome)
    {
        $this->showInHome = $showInHome;

        return $this;
    }

    /**
     * Get showInHome
     *
     * @return int
     */
    public function getShowInHome()
    {
        return $this->showInHome;
    }
}

