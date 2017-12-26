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
      $em = $this->getDoctrine()->getManager();
      $clients = $em->getRepository('ClientBundle:Client')->findAll();
        return $this->render('ClientBundle:Default:listeClient.html.twig',array('clients'=>$clients));
    }
}
