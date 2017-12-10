<?php

namespace Best365Bundle\Controller;

use Doctrine\ORM\EntityManager;
use Mmoreram\ControllerExtraBundle\Annotation\Entity as EntityAnnotation;
use Mmoreram\ControllerExtraBundle\Annotation\Form as FormAnnotation;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormView;
use Symfony\Component\HttpFoundation\Response;

use Elcodi\Store\CoreBundle\Controller\Traits\TemplateRenderTrait;

/**
 * Class Best365StoreController
 * @Route(
 *      path = "/best365/store",
 *      options={"expose"=true}
 * )
 */

class Best365StoreController extends Controller
{
	use TemplateRenderTrait;

	/**
	 * Store bar in top position
	 *
	 * @return array
	 *
	 * @Route(
	 *      path = "/nav",
	 *      name = "best365_store_nav",
	 *      methods = {"GET"}
	 * )
	 */
	public function navAction()
	{
		$store = $this
			->get('best365.manager.store')
			->getStoreInfo();

		$address = $this
			->get('best365.manager.store')
			->getStoreAddressInfo();

		return $this->render(
			'Best365Bundle:Layout:_store.nav.html.twig',
			[
				'address' => $address,
				'store' => $store
			]
		);
	}

	/**
	 * Store contact bar in footer position
	 *
	 * @return array
	 *
	 * @Route(
	 *      path = "/footer/contact",
	 *      name = "best365_store_footer_contact",
	 *      methods = {"GET"}
	 * )
	 */
	public function contactAction()
	{
		$store = $this
			->get('best365.manager.store')
			->getStoreInfo();

		$address = $this
			->get('best365.manager.store')
			->getStoreAddressInfo();

		return $this->render(
			'Best365Bundle:Layout:_store.footer.contact.html.twig',
			[
				'address' => $address,
				'store' => $store
			]
		);
	}
	/**
	 * Store address bar in footer position
	 *
	 * @return array
	 *
	 * @Route(
	 *      path = "/footer/address",
	 *      name = "best365_store_footer_address",
	 *      methods = {"GET"}
	 * )
	 */
	public function addressAction()
	{
		$address = $this
			->get('best365.manager.store')
			->getStoreAddressInfo();

		return $this->render(
			'Best365Bundle:Layout:_store.footer.address.html.twig',
			[
				'address' => $address
			]
		);
	}
}
