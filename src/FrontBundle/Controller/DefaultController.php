<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("accueil",name="accueil")
     */
    public function acceuilAction(){
        return $this->render('FrontBundle:Default:acceuil.html.twig');
    }

    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->redirectToRoute("accueil");
    }
}
