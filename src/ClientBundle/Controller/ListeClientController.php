<?php

namespace ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use ClientBundle\Entity\Client;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class ListeClientController extends Controller
{
    /**
     * @Route("/listeclient",name="listeclient")
     */
    public function listeClientAction(Request $request)
    {
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
    }
}


