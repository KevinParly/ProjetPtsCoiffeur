<?php

namespace ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use ClientBundle\Entity\Client;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class ListeClientController extends Controller
{
    /**
     * @author Thomas Neuville
     * @Route("/listeclients",name="listeclient")
     */
    public function listeClientAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $client = new Client();
        $form = $this->createFormBuilder($client)
            ->add('civilite', ChoiceType::class, array(
                'attr' => array('class' => 'formElement civiliteForm'),
                'label' => 'Civilité : ',
                'choices'=>array(
                    'Monsieur'=>'M',
                    'Madame'=>'Mme',
                    'Enfant'=>'Enfant'),
                'placeholder' => 'Aucun',
                'expanded' => true,
                'required' => false
            ))
            ->add('moisNaissance', ChoiceType::class, array(
                'attr' => array('class' => 'formElement moisNaissanceForm'),
                'label' => 'Mois de Naissance : ',
                'choices'=>array(
                    'Janvier'=>'01',
                    'Février'=>'02',
                    'Mars'=>'03',
                    'Avril'=>'04',
                    'Mai'=>'05',
                    'Juin'=>'06',
                    'Juillet'=>'07',
                    'Août'=>'08',
                    'Septembre'=>'09',
                    'Octobre'=>'10',
                    'Novembre'=>'11',
                    'Décembre'=>'12'),
                'placeholder' => 'Aucun',
                'required' => false,
            ))
            ->add('nom',TextType::class, array(
                'attr' => array('class' => 'formElement nomForm'),
                'label' => 'Nom client : ',
                'required' => false
            ))
            ->add('rechercher',SubmitType::class, array(
                'attr' => array('class' => 'formElement rechercherForm')
            ))
            ->getForm()
            ->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            if($form->get('civilite')->getData() != null){
                if($form->get('moisNaissance')->getData() != null){
                    if($form->get('nom')->getData() != null){
                        $clients = $em->getRepository('ClientBundle:Client')->findBy(['civilite'=>$form->get('civilite')->getData(),
                            'moisNaissance'=>$form->get('moisNaissance')->getData(),'nom'=>$form->get('nom')->getData()]);
                        return $this->render('ClientBundle:Default:listeClient.html.twig', array(
                            'clients'=>$clients,
                            'form' => $form->createView()));
                    }
                    $clients = $em->getRepository('ClientBundle:Client')->findBy(['civilite'=>$form->get('civilite')->getData(),
                        'moisNaissance'=>$form->get('moisNaissance')->getData()]);
                    return $this->render('ClientBundle:Default:listeClient.html.twig', array(
                        'clients'=>$clients,
                        'form' => $form->createView()));
                }
                if($form->get('nom')->getData() != null){
                    $clients = $em->getRepository('ClientBundle:Client')->findBy(['civilite'=>$form->get('civilite')->getData(),
                        'nom'=>$form->get('nom')->getData()]);
                    return $this->render('ClientBundle:Default:listeClient.html.twig', array(
                        'clients'=>$clients,
                        'form' => $form->createView()));
                }
                $clients = $em->getRepository('ClientBundle:Client')->findBy(['civilite'=>$form->get('civilite')->getData()]);
                return $this->render('ClientBundle:Default:listeClient.html.twig', array(
                    'clients'=>$clients,
                    'form' => $form->createView()));
            }elseif ($form->get('moisNaissance')->getData() != null){
                if($form->get('nom')->getData() != null){
                    $clients = $em->getRepository('ClientBundle:Client')->findBy(['moisNaissance'=>$form->get('moisNaissance')->getData(),
                        'nom'=>$form->get('nom')->getData()]);
                    return $this->render('ClientBundle:Default:listeClient.html.twig', array(
                        'clients'=>$clients,
                        'form' => $form->createView()));
                }
                $clients = $em->getRepository('ClientBundle:Client')->findBy(['moisNaissance'=>$form->get('moisNaissance')->getData()]);
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

        return $this->render('ClientBundle:Default:listeClient.html.twig',array('clients'=>$clients,'form'=>$form->createView()));
    }
}
