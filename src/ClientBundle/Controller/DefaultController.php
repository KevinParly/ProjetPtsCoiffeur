<?php

namespace ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->redirectToRoute("accueil");
    }

    /**
    * @Route("/accueilclient",name="accueilclient")
    */
    public function accueilClient(){
        return $this->render('ClientBundle:Default:index.html.twig');
    }
}
