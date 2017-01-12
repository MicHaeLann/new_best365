<?php

namespace Best365Bundle\Controller;

use Mmoreram\ControllerExtraBundle\Annotation\Entity as EntityAnnotation;
use Mmoreram\ControllerExtraBundle\Annotation\Form as FormAnnotation;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormView;
use Symfony\Component\HttpFoundation\Response;

use Elcodi\Store\UserBundle\Controller\UserController;
use Elcodi\Component\User\Entity\Interfaces\CustomerInterface;
use Elcodi\Store\CoreBundle\Controller\Traits\TemplateRenderTrait;

/**
 * Class Best365UserController
 * @Route(
 *      path = "/best365/user",
 * )
 */

class Best365UserController extends UserController
{
    use TemplateRenderTrait;

    /**
     * Customer bar in top position
     *
     * @return array
     *
     * @Route(
     *      path = "/nav",
     *      name = "best365_store_user_nav",
     *      methods = {"GET"}
     * )
     */
    public function navBarAction()
    {
        $customer = $this
            ->get('elcodi.wrapper.customer')
            ->get();

		$cart = $this
			->get('elcodi.wrapper.cart')
			->get();

        return $this->render(
            'Best365Bundle:Layout:_user.nav.html.twig',
            [
                'customer' => $customer,
				'cart' => $cart
            ]
        );
    }

    /**
     * User page
     *
     * @return Response
     *
     * @Security("has_role('ROLE_CUSTOMER')")
     * @Route(
     *      path = "",
     *      name = "best365_store_user",
     *      methods = {"GET"}
     * )
     *
     * @EntityAnnotation(
     *      class = {
     *          "factory" = "elcodi.wrapper.customer",
     *          "method" = "get",
     *          "static" = false
     *      },
     *      name = "customer",
     * )
     */
    public function homeAction()
    {
    	$customer = $this->getUser();
		$display_customer = $this->get('best365.manager.customer')
			->buildDisplayCustomer($customer);

		// append customer info to twig
        return $this->render('Best365Bundle:User:user.home.html.twig', [
        	'customer' => $display_customer
		]);
    }

    /**
     * User profile page
     *
     * @param CustomerInterface $customer Customer
     * @param FormView          $formView Form view
     * @param string            $isValid  Is valid
     *
     * @return Response Response
     *
     * @Security("has_role('ROLE_CUSTOMER')")
     * @Route(
     *      path = "/edit",
     *      name = "best365_store_user_edit",
     *      methods = {"GET", "POST"}
     * )
     *
     * @EntityAnnotation(
     *      class = {
     *          "factory" = "elcodi.wrapper.customer",
     *          "method" = "get",
     *          "static" = false
     *      },
     *      name = "customer",
     * )
     * @FormAnnotation(
     *      class         = "store_user_form_type_profile",
     *      name          = "formView",
     *      entity        = "customer",
     *      handleRequest = true,
     *      validate      = "isValid"
     * )
     */
    public function editAction(CustomerInterface $customer, FormView $formView, $isValid)
    {
        if ($isValid) {
            $this
                ->get('elcodi.object_manager.customer')
                ->flush($customer);

            $message = $this->get('translator')
                ->trans('store.user.profile.save.message_ok');
            $this->addFlash('success', $message);

            return $this->redirect(
                $this->generateUrl('best365_store_user')
            );
        }

        return $this->render(
            'Best365Bundle:User:user.edit.html.twig',
            [
                'form' => $formView,
            ]
        );
    }
}
