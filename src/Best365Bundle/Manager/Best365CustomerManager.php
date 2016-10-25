<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 11/10/16
 * Time: 3:43 PM
 */

namespace Best365Bundle\Manager;

use Doctrine\ORM\EntityManager;
use Best365Bundle\Entity\CustomerMembership;
use Elcodi\Component\User\Entity\Customer;
use Symfony\Component\HttpFoundation\Request;

class Best365CustomerManager
{
	private $em;

	private $membership;

	public function __construct(EntityManager $em)
	{
		$this->em = $em;

		$this->membership = $this->em
			->getRepository('Best365Bundle\Entity\Membership')
			->findby(array(), array('point' => 'ASC'));
	}

	/**
	 * build user profile display object
	 * @param Customer $customer
	 * @return Object $display_customer
	 */
	public function buildDisplayCustomer(Customer $customer)
	{
		// get customer membership
		$customer_membership = $this->em
									->getRepository('Best365Bundle\Entity\CustomerMembership')
									->findOneByCustomerId($customer->getId());

		// create display property
		$display_customer = new \stdClass();
		$display_customer->firstName = $customer->getFirstName();
		$display_customer->lastName = $customer->getLastName();
		$display_customer->email = $customer->getEmail();
		$display_customer->currentPoint = $customer_membership->getCurrentPoint();

		// membership name
		$membership = $this->em
							->getRepository('Best365Bundle\Entity\Membership')
							->find($customer_membership->getMembership());
		$display_customer->membership = $membership->getName();

		return $display_customer;
	}

	/**
	 * create customer membership
	 * @param Customer $customer
	 */
	public function initializeMembership(Customer $customer)
	{
		$customer_id = $customer->getId();

		// get initialize info
		$initialize_membership = $this->membership[0];
		$initialize_current_point = $initialize_total_point = $initialize_membership->getPoint();

		// construct customer membership
		$customer_membership = new CustomerMembership();
		$customer_membership->setCustomerId($customer_id)
							->setCurrentPoint($initialize_current_point)
							->setTotalPoint($initialize_total_point)
							->setMembership($initialize_membership->getId());

		// add customer membership
		$this->em->persist($customer_membership);
		$this->em->flush();
	}

	/**
	 * get membership selector for admin customer page
	 * @param Customer $customer
	 * @return array
	 */
	public function buildAdminSelector(Customer $customer)
	{
		// get customer membership
		$customer_membership = $this->em
			->getRepository('Best365Bundle\Entity\CustomerMembership')
			->findOneByCustomerId($customer->getId());

		return array(
			'membership' => $this->membership,
			'customer_membership' => $customer_membership->getMembership()
		);
	}

	/**
	 * update customer membership
	 * @param Customer $customer
	 * @param Request $request
	 */
	public function updateMembership(Customer $customer, Request $request)
	{
		$customer_membership = $this->em
			->getRepository('Best365Bundle\Entity\CustomerMembership')
			->findOneByCustomerId($customer->getId());
		$customer_membership->setMembership($request->get('membership'));

		$this->em->persist($customer_membership);
		$this->em->flush();
	}
}