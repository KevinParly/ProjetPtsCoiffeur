<?php

namespace ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
<<<<<<< HEAD
use ClientBundle\Entity\Client;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
=======
>>>>>>> 62863304acc553f50c367f4d5340ad889f1ea3ef
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
<<<<<<< HEAD
        $em = $this->getDoctrine()->getManager();
        $client = new Client();
        $form = $this->createFormBuilder($client)
            ->add('civilite', ChoiceType::class, array(
                'label' => 'Civilité : ','choices'=>array(
                    'Monsieur'=>'monsieur',
                    'Madame'=>'madame',
                    'Enfant'=>'enfant'),
                    'expanded' => true,
                ))
            ->add('dateNaissance', DateType::class, array(
                'label' => 'Mois de naissance : ','placeholder' => array(
                    'year' => 'Year', 'month' => 'Month', 'day' => 'Day')
                ))
            ->add('Nom',TextType::class, array(
                'label' => 'Nom client : '))
            ->add('rechercher',SubmitType::class)
            ->getForm()
            ->handleRequest($request)
        ;

        if($form->isSubmitted() && $form->isValid()){
            $clients = $em->getRepository('ClientBundle:Client')->findBy(['civilite'=>$form->get('civilite')->getData()]);
            return $this->render('ClientBundle:Default:listeClient.html.twig', array(
                'clients'=>$clients,
                'form' => $form->createView()
            ));
        }

        $clients = $em->getRepository('ClientBundle:Client')->findAll();
        return $this->render('ClientBundle:Default:listeClient.html.twig', array(
            'clients'=>$clients,
            'form'=>$form->createView()
        ));
=======
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
>>>>>>> 62863304acc553f50c367f4d5340ad889f1ea3ef
    }
}


