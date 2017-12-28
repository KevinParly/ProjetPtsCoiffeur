<?php

namespace RendezvousBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/rendezvou",name="rendezvou")
     */
    public function indexAction()
    {
        return $this->render('RendezvousBundle:Default:index.html.twig');
    }
}
