<?php

namespace Best365Bundle\Entity;

/**
 * CustomerExt
 */
class CustomerExt
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
     * @var string
     */
    private $wechat;


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
     * @return CustomerExt
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
     * Set wechat
     *
     * @param string $wechat
     *
     * @return CustomerExt
     */
    public function setWechat($wechat)
    {
        $this->wechat = $wechat;

        return $this;
    }

    /**
     * Get wechat
     *
     * @return string
     */
    public function getWechat()
    {
        return $this->wechat;
    }
}

