<?php

namespace ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use ClientBundle\Entity\Client;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
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
        $client = new Client();
        $form = $this->createFormBuilder($client)
            ->add('civilite', ChoiceType::class, array(
                'label' => 'Civilité : ','choices'=>array(
                    'Monsieur'=>'M',
                    'Madame'=>'Mme',
                    'Enfant'=>'Enfant'),
                'expanded' => true,
                'required' => false
            ))
            ->add('dateNaissance', BirthdayType::class, array(
                'placeholder' => array(
                    'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour'),
                'required' => false,
                'format' => 'dd/MM/yyyy',
                'years' => range(date('Y'), date('Y')-100),
            ))
            ->add('nom',TextType::class, array(
                'label' => 'Nom client : ',
                'required' => false))
            ->add('rechercher',SubmitType::class)
            ->getForm()
            ->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            if($form->get('civilite')->getData() != null){
                if($form->get('dateNaissance')->getData() != null){
                    if($form->get('nom')->getData() != null){
                        $clients = $em->getRepository('ClientBundle:Client')->findBy(['civilite'=>$form->get('civilite')->getData(),
                            'dateNaissance'=>$form->get('dateNaissance')->getData(),'nom'=>$form->get('nom')->getData()]);
                        return $this->render('ClientBundle:Default:listeClient.html.twig', array(
                            'clients'=>$clients,
                            'form' => $form->createView()));
                    }
                    $clients = $em->getRepository('ClientBundle:Client')->findBy(['civilite'=>$form->get('civilite')->getData(),
                        'dateNaissance'=>$form->get('dateNaissance')->getData()]);
                    return $this->render('ClientBundle:Default:listeClient.html.twig', array(
                        'clients'=>$clients,
                        'form' => $form->createView()));
                }
                $clients = $em->getRepository('ClientBundle:Client')->findBy(['civilite'=>$form->get('civilite')->getData()]);
                return $this->render('ClientBundle:Default:listeClient.html.twig', array(
                    'clients'=>$clients,
                    'form' => $form->createView()));
            }elseif ($form->get('dateNaissance')->getData() != null){
                if($form->get('nom')->getData() != null){
                    $clients = $em->getRepository('ClientBundle:Client')->findBy(['dateNaissance'=>$form->get('dateNaissance')->getData(),
                        'nom'=>$form->get('nom')->getData()]);
                    return $this->render('ClientBundle:Default:listeClient.html.twig', array(
                        'clients'=>$clients,
                        'form' => $form->createView()));
                }
                $clients = $em->getRepository('ClientBundle:Client')->findBy(['dateNaissance'=>$form->get('dateNaissance')->getData()]);
                return $this->render('ClientBundle:Default:listeClient.html.twig', array(
                    'clients'=>$clients,
                    'form' => $form->createView()));
            }elseif ($form->get('nom')->getData() != null) {
                $clients = $em->getRepository('ClientBundle:Client')->findBy(['nom' => $form->get('nom')->getData()]);
                return $this->render('ClientBundle:Default:listeClient.html.twig', array(
                    'clients' => $clients,
                    'form' => $form->createView()));
            }else{
                $clients = $em->getRepository('ClientBundle:Client')->findAll();
                return $this->render('ClientBundle:Default:listeClient.html.twig', array(
                    'clients'=>$clients,
                    'form'=>$form->createView()));
            }
        }

        $clients = $em->getRepository('ClientBundle:Client')->findAll();
        return $this->render('ClientBundle:Default:listeClient.html.twig', array(
            'clients'=>$clients,
            'form'=>$form->createView()));

        $em = $this->getDoctrine()->getManager();
        $clients = $em->getRepository('ClientBundle:Client')->findAll();
        $form= $this->createFormBuilder(null)
            ->add('nom',TextType::class,array('label'=>'Nom du client : '))
            ->add('recherche',SubmitType::class,array('label'=>"Rechercher"))
            ->getForm();

        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if($form->isValid()){
                $clients = $em->getRepository('ClientBundle:Client')->rechercherClients($form->get('nom')->getData());
            }
        }
        return $this->render('ClientBundle:Default:listeClient.html.twig',array('clients'=>$clients,'form'=>$form->createView()));
    }
}


