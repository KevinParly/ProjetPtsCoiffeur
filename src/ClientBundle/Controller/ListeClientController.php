<?php

namespace ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class ListeClientController extends Controller
{
    /**
     * @Route("/listeclients",name="listeclient")
     */
    public function listeClientAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();
      $clients = $em->getRepository('ClientBundle:Client')->findAll();
      $form= $this->createFormBuilder(null)
            ->add('nom',TextType::class,array('label'=>'Nom du client : '))
          ->add('recherche',SubmitType::class,array('label'=>"Rechercher"))
          ->getForm()
      ;
      if($request->isMethod('POST')){
          $form->handleRequest($request);
          if($form->isValid()){
              $clients = $em->getRepository('ClientBundle:Client')->rechercherClients($form->get('nom')->getData());
          }
      }
      return $this->render('ClientBundle:Default:listeClient.html.twig',array('clients'=>$clients,'form'=>$form->createView()));
    }
}
