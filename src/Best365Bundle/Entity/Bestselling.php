<?php

namespace Best365Bundle\Entity;

/**
 * Bestselling
 */
class Bestselling
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
     * @return Bestselling
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
}

