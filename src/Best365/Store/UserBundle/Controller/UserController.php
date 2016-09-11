<?php

namespace Best365\Store\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use FOS\RestBundle\Controller\FOSRestController;

class UserController extends FOSRestController
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('UserBundle:Default:index.html.twig');
    }

    public function getNavAction()
    {
    	
    }
}
