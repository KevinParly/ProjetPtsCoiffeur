<?php

namespace ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ListeClientController extends Controller
{
    /**
     * @Route("/listeclient",name="listeclient")
     */
    public function listeClientAction()
    {
        return $this->render('ClientBundle:Default:listeClient.html.twig');
    }
}
