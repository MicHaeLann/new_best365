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
use Best365\Store\CommonBundle\Entity\Membership;

/**
 * @Route("/best365")
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
     *      path = "/user/nav",
     *      name = "best365_store_user_nav",
     *      methods = {"GET"}
     * )
     */
    public function navAction()
    {
        $customer = $this
            ->get('elcodi.wrapper.customer')
            ->get();

        return $this->render(
            'Best365Bundle:Layout:_user.nav.html.twig',
            [
                'customer' => $customer,
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
     *      path = "/user",
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
     *      path = "/user/edit",
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
                $this->generateUrl('best365_store_user_edit')
            );
        }

        return $this->render(
            'Best365Bundle:User:user.edit.html.twig',
            [
                'form' => $formView,
            ]
        );
    }

    /**
     * User profile page
     *
     *
     * @return Response Response
     *
     * @Route(
     *      path = "/user/test",
     *      name = "best365_store_user_test",
     *      methods = {"GET", "POST"}
     * )
     *
     */
    public function testAction()
    {
        $membership = $this->get('best365.manager.customer')->initializeMembership($this->getUser());
        var_dump($membership);exit;
        return $this->render(
            'Best365LayoutStoreTemplateBundle:User:user.edit.html.twig'
        );
    }
}
