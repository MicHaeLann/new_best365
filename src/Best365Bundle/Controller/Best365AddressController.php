<?php

namespace Best365Bundle\Controller;

use Mmoreram\ControllerExtraBundle\Annotation\Entity as EntityAnnotation;
use Mmoreram\ControllerExtraBundle\Annotation\Form as FormAnnotation;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormView;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Elcodi\Store\GeoBundle\Controller\AddressController;
use Elcodi\Component\Geo\Entity\Interfaces\AddressInterface;
use Elcodi\Component\User\Entity\Interfaces\CustomerInterface;
use Elcodi\Store\CoreBundle\Controller\Traits\TemplateRenderTrait;

/**
 * Address controllers
 *
 * @Security("has_role('ROLE_CUSTOMER')")
 * @Route(
 *      path = "/best365/user/address",
 * )
 */
class Best365AddressController extends AddressController
{
    use TemplateRenderTrait;

    /**
     * @var string
     *
     * Checkout source, used for redirection.
     */
    const CHECKOUT_SOURCE = 'checkout';

    /**
     * List addresses page
     *
     * @return Response Response
     *
     * @Route(
     *      path = "/",
     *      name = "best365_store_address_list",
     *      methods = {"GET"}
     * )
     */
    public function listAction()
    {
        $addressFormatter = $this->get('elcodi.formatter.address');

        $addresses = $this
            ->get('elcodi.wrapper.customer')
            ->get()
            ->getAddresses();

        $addressesFormatted = [];
        foreach ($addresses as $address) {
            $addressesFormatted[] =
                $addressFormatter
                    ->toArray($address);
        }

		$active_locale = $this
			->get('request_stack')
			->getMasterRequest()
			->getLocale();

        return $this->render(
            'Best365Bundle:User:address.list.html.twig',
            [
                'addresses' => $addressesFormatted,
				'activeLocale' => $active_locale
            ]
        );
    }

    /**
     * Edit an address
     *
     * @param integer $id      The address id
     * @param Request $request The current request
     * @param string  $source  The form source to redirect back
     *
     * @return Response Response
     *
     * @Route(
     *      path = "/{id}/edit/{source}",
     *      name = "best365_store_address_edit",
     *      methods = {"GET","POST"},
     *      defaults = {
     *          "source" = null,
     *      },
     * )
     */
    public function editAction($id, Request $request, $source)
    {
        $address = $this
            ->get('elcodi.repository.customer')
            ->findAddress(
                $this->getUser()->getId(),
                $id
            );

        if (!($address instanceof AddressInterface)) {
            throw new NotFoundHttpException('Address not found');
        }

        $form = $this
            ->createForm(
                'store_geo_form_type_address',
                $address
            );

        $form->handleRequest($request);

        if ($form->isValid()) {
			$best365_address = $this
				->get('best365.manager.address')
				->generateAddress($address);

            $addressToSave = $this
                ->get('elcodi.manager.address')
                ->saveAddress($best365_address);

            $customer = $this->getUser();
            $customer->removeAddress($address);
            $customer->addAddress($addressToSave);
            $this
                ->get('elcodi.object_manager.customer')
                ->flush($customer);

            $message = $this
                ->get('translator')
                ->trans('store.address.save.response_ok');

            $this->addFlash('success', $message);

            $redirectUrl = self::CHECKOUT_SOURCE == $source
                ? 'store_checkout_address'
                : 'best365_store_address_list';

            return $this->redirect(
                $this->generateUrl($redirectUrl)
            );
        } elseif ($request->isMethod('POST')) {
            $this
                ->get('elcodi.object_manager.address')
                ->clear($address);
        }

		$active_locale = $this
			->get('request_stack')
			->getMasterRequest()
			->getLocale();

        return $this->render(
            'Best365Bundle:User:address.edit.html.twig',
            [
                'address' => $address,
                'form'    => $form->createView(),
				'activeLocale' => $active_locale
            ]
        );
    }

    /**
     * New address
     *
     * @param AddressInterface $address  $address A new address entity
     * @param FormView         $formView The form view
     * @param boolean          $isValid  If the form is valid
     * @param string|null      $source   The form source to redirect back
     *
     * @return Response Response
     *
     * @Route(
     *      path = "/new/{source}",
     *      name = "best365_store_address_new",
     *      methods = {"GET","POST"},
     *      defaults = {
     *          "source" = null,
     *      },
     * )
     *
     * @EntityAnnotation(
     *      class = {
     *          "factory" = "elcodi.factory.address",
     *          "method" = "create",
     *          "static" = false
     *      },
     *      name = "address",
     *      persist = false
     * )
     * @FormAnnotation(
     *      class         = "store_geo_form_type_address",
     *      name          = "formView",
     *      entity        = "address",
     *      handleRequest = true,
     *      validate      = "isValid"
     * )
     */
    public function newAction(AddressInterface $address,FormView $formView, $isValid, $source = null)
    {
        if ($isValid) {
            $translator = $this->get('translator');
			$best365_address = $this->get('best365.manager.address')
				->generateAddress($address);

            $addressManager = $this->get('elcodi.object_manager.address');
            $addressManager->persist($best365_address);
            $addressManager->flush();


            $this
                ->get('elcodi.wrapper.customer')
                ->get()
                ->addAddress($best365_address);

            $this
                ->get('elcodi.object_manager.customer')
                ->flush();

            $message = $translator->trans('store.address.save.response_ok');
            $this->addFlash('success', $message);

            $redirectUrl = self::CHECKOUT_SOURCE == $source
                ? 'store_checkout_address'
                : 'best365_store_address_list';

            return $this->redirect(
                $this->generateUrl($redirectUrl)
            );
        }

		$active_locale = $this
			->get('request_stack')
			->getMasterRequest()
			->getLocale();

        return $this->render(
            'Best365Bundle:User:address.edit.html.twig',
            [
                'address' => $address,
                'form'    => $formView,
				'activeLocale' => $active_locale
            ]
        );
    }

    /**
     * Delete address
     *
     * @param integer     $id     The address id
     * @param string|null $source The form source to redirect back
     *
     * @return Response Response
     *
     * @Route(
     *      path = "/{id}/delete",
     *      name = "best365_store_address_delete",
     *      methods = {"GET"},
     *      defaults = {
     *          "source" = null,
     *      },
     * )
     */
    public function deleteAction($id, $source = null)
    {
        $translator = $this->get('translator');

        /**
         * @var CustomerInterface $customer
         */
        $customer = $this->getUser();
        $address = $this
            ->get('elcodi.repository.customer')
            ->findAddress(
                $customer->getId(),
                $id
            );

        if (!($address instanceof AddressInterface)) {
            throw new NotFoundHttpException('Address not found');
        }

        $customerManager = $this->get('elcodi.object_manager.customer');
        $customer->removeAddress($address);
        $customerManager->flush($customer);

        $message = $translator->trans('store.address.delete.response_ok');
        $this->addFlash('success', $message);

        $redirectUrl = self::CHECKOUT_SOURCE == $source
            ? 'store_checkout_address'
            : 'best365_store_address_list';

        return $this->redirect(
            $this->generateUrl($redirectUrl)
        );
    }
}
