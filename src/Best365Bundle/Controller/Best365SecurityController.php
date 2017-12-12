<?php

namespace Best365Bundle\Controller;

use Mmoreram\ControllerExtraBundle\Annotation\Entity;
use Mmoreram\ControllerExtraBundle\Annotation\Form as AnnotationForm;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormView;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Security;

use Elcodi\Store\UserBundle\Controller\SecurityController;
use Elcodi\Component\User\Entity\Interfaces\CustomerInterface;
use Elcodi\Store\CoreBundle\Controller\Traits\TemplateRenderTrait;
/**
 * @Route(
 *     path = "/best365",
 *	   options={"expose"=true}
 *)
 */
class Best365SecurityController extends SecurityController
{
	use TemplateRenderTrait;

    /**
     * Login page
     *
     * @param FormView $loginFormView Login form view
     *
     * @return Response Response
     *
     * @Route(
     *      path = "/login",
     *      name = "best365_store_login",
     *      methods = {"GET"}
     * )
     *
     * @AnnotationForm(
     *      class = "store_user_form_type_login",
     *      name  = "loginFormView"
     * )
     */
    public function loginAction(FormView $loginFormView)
	{
        $translator = $this->get('translator');

        // If user is already logged, go to redirect url
        $authorizationChecker = $this->get('security.authorization_checker');
        if ($authorizationChecker->isGranted('ROLE_CUSTOMER')) {
            return $this->redirectToRoute('best365_store_homepage');
        }

        // Checking for authentication errors in session
        $session = $this->get('session');
        if ($session->has(Security::AUTHENTICATION_ERROR)) {
            $message = $translator
                ->trans('store.login.wrong_combination');

            $this
                ->addFlash('error', $message);
        }

        return $this->render(
            'Best365Bundle:User:user.login.html.twig',
            [
                'form' => $loginFormView,
            ]
        );
    }

    /**
     * Register page
     *
     * @param CustomerInterface $customer         empty customer
     * @param FormView          $registerFormView Register form type
     * @param boolean           $isValid          Form submition is valid
     *
     * @return Response Response
     *
     * @Route(
     *      path = "/register",
     *      name = "best365_store_register",
     *      methods = {"GET", "POST"}
     * )
     *
     * @Entity(
     *      name     = "customer",
     *      class    = {
     *          "factory"  = "elcodi.factory.customer"
     *      },
     *      persist  = false
     * )
     * @AnnotationForm(
     *      class         = "store_user_form_type_register",
     *      entity        = "customer",
     *      handleRequest = true,
     *      name          = "registerFormView",
     *      validate      = "isValid"
     * )
     */
    public function regAction(CustomerInterface $customer, FormView $registerFormView, $isValid, Request $request)
    {
        // If user is already logged, go to redirect url
        $authorizationChecker = $this->get('security.authorization_checker');
        if ($authorizationChecker->isGranted('ROLE_CUSTOMER')) {
            return $this->redirectToRoute('best365_store_homepage');
        }

        // register user if form validation match
        if ($isValid) {
			$customerManager = $this->get('elcodi.object_manager.customer');
			$customerManager->persist($customer);
			$customerManager->flush($customer);

			$this
				->get('elcodi.manager.customer')
				->register($customer);

			// initialize customer ext info
			$this->get('best365.manager.customer')->initialize($customer, $request);

			return $this->redirectToRoute('best365_store_homepage');
        }

		$active_locale = $this
			->get('request_stack')
			->getMasterRequest()
			->getLocale();

        return $this->render(
            'Best365Bundle:User:user.register.html.twig',
            [
                'form' => $registerFormView,
				'activeLocale' => $active_locale,
            ]
        );
    }
}
