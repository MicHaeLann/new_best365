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

use Elcodi\Store\UserBundle\Controller\UserController;
use Elcodi\Component\User\Entity\Interfaces\CustomerInterface;
use Elcodi\Store\CoreBundle\Controller\Traits\TemplateRenderTrait;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;

/**
 * Class Best365UserController
 * @Route(
 *      path = "/best365/user",
 *      options={"expose"=true}
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
        	$em = $this->getDoctrine()->getEntityManager();
        	$em->detach($customer);
        	$original = $this
				->get('elcodi.repository.customer')
				->find($customer->getId());
			$previous_pwd = $this->get('request')->get('previous-password');
        	if ($original->getPassword() != $customer->getPassword()) {
				$valid = $this
					->get('security.encoder_factory')
					->getEncoder($original)
					->isPasswordValid($original->getPassword(), $previous_pwd, $original->getSalt());
				if (empty($previous_pwd) || !$valid) {
					$message = $this->get('translator')
						->trans('store.user.profile.save.message_error');
					$this->addFlash('error', $message);
				} else {
					$original->setPassword($customer->getPassword());
					$this
						->get('elcodi.object_manager.customer')
						->flush($original);

					$message = $this->get('translator')
						->trans('store.user.profile.save.message_ok');
					$this->addFlash('success', $message);
				}
			} elseif(!empty($previous_pwd)) {
				$message = $this->get('translator')
					->trans('store.user.profile.save.message_error');
				$this->addFlash('error', $message);
			} else {
				$original->setPassword($customer->getPassword());
        		$this
					->get('elcodi.object_manager.customer')
					->flush($original);

        		$this
					->get('best365.manager.customer')
					->updateWechat($customer, $this->get('request')->get('wechat', false));

				$message = $this->get('translator')
					->trans('store.user.profile.save.message_ok');
				$this->addFlash('success', $message);
			}
        }
		$membership = $this
			->get('best365.manager.customer')
			->customerMembership($customer);

		$ext = $this
			->get('best365.manager.customer')
			->customerExt($customer);

		$active_locale = $this
			->get('request_stack')
			->getMasterRequest()
			->getLocale();

        return $this->render(
            'Best365Bundle:User:user.edit.html.twig',
            [
                'form' => $formView,
				'activeLocale' => $active_locale,
				'membership' => $membership,
				'ext' => $ext
            ]
        );
    }
}
