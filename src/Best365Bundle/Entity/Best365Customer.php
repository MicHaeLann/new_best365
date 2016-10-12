<?php

namespace Best365Bundle\Entity;

use Elcodi\Component\User\Entity\Customer;

/**
 * Best365Customer
 */
class Best365Customer extends Customer
{

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
     * Set currentPoint
     *
     * @param integer $currentPoint
     *
     * @return Best365Customer
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
     * @return Best365Customer
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
     * @return Best365Customer
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

//    public function __construct(Customer $customer, $memberhip)
//	{
//		$this->setAddresses($customer->getAddresses())
//			->setLanguage($customer->getLanguage())
//			->setPhone($customer->getPhone())
//			->setIdentityDocument($customer->getIdentityDocument())
//			->setGuest($customer->getGuest());
//	}
}

