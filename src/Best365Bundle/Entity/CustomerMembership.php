<?php

namespace Best365Bundle\Entity;

/**
 * CustomerMembership
 */
class CustomerMembership
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $customerId;

    /**
     * @var int
     */
    private $currentPoint;

    /**
     * @var int
     */
    private $totalPoint;

    /**
     * @var int
     */
    private $membership;


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
     * Set customerId
     *
     * @param integer $customerId
     *
     * @return CustomerMembership
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get customerId
     *
     * @return int
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set currentPoint
     *
     * @param integer $currentPoint
     *
     * @return CustomerMembership
     */
    public function setCurrentPoint($currentPoint)
    {
        $this->currentPoint = $currentPoint;

        return $this;
    }

    /**
     * Get currentPoint
     *
     * @return int
     */
    public function getCurrentPoint()
    {
        return $this->currentPoint;
    }

    /**
     * Set totalPoint
     *
     * @param integer $totalPoint
     *
     * @return CustomerMembership
     */
    public function setTotalPoint($totalPoint)
    {
        $this->totalPoint = $totalPoint;

        return $this;
    }

    /**
     * Get totalPoint
     *
     * @return int
     */
    public function getTotalPoint()
    {
        return $this->totalPoint;
    }

    /**
     * Set membership
     *
     * @param integer $membership
     *
     * @return CustomerMembership
     */
    public function setMembership($membership)
    {
        $this->membership = $membership;

        return $this;
    }

    /**
     * Get membership
     *
     * @return int
     */
    public function getMembership()
    {
        return $this->membership;
    }
}

