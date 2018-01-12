<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 28/12/17
 * Time: 19:34
 */

namespace RendezvousBundle\Controller;


use ClientBundle\Entity\Rendezvous;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\HttpFoundation\Request;

class RDVController extends Controller
{
    /**
     * @Route("/rendezvous",name="rendezvous")
     */
    public function RDVAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        //Pane Creation de rendez-vous
        $rdv = new Rendezvous();
        $annee = date("Y");
        $anneeSuivantes = $annee + 10;
        $form = $this->createFormBuilder(null)
            ->add('client', EntityType::class, array(
                'class' => 'ClientBundle:Client',
                'required'=>true,
                'label'=> 'Le client : '
            ))
            ->add('date',DateType::class,array('format'=>'ddMMyyyy','label'=>'Date du rendez-vous : ',
                'years'=>range($annee,$anneeSuivantes),))
            ->add('heure',TimeType::class,
                array('label'=>'Heure du rendez-vous :','with_seconds'=>false,
                    'widget'=>'single_text'))
            ->add('soins',EntityType::class,array('class'=>'ClientBundle:Soin','choice_label'=>'nom','multiple'=>true,'expanded'=>true) )
            ->add('save',SubmitType ::class,array('label'=>'Prendre le rendez-vous'))
            ->getForm()
            ->handleRequest($request)
            ;
        if($form->isSubmitted() && $form->isValid()){
            $rdv->setClient($form->get('client')->getData());
            $rdv->setDate($form->get('date')->getData());
            $rdv->setHeure($form->get('heure')->getData());
            $rdv->setPrix(1);
            $soins = $form->get('soins')->getData();
            foreach ($soins as $soin){
                $rdv->addSoin($soin);
            }
            $em->persist($rdv);
            $em->flush();
        }

        //Pane Liste RDV non effectuer
        $date = date('Y-m-d');
        $heure = date('H:i:s');
        $heurePrecedante = date('H:i:s',strtotime($heure." - 1 hours"));
        $rdvsDuJours = $em->getRepository('ClientBundle:Rendezvous')->rechercherRdvNonEffectuerDateJour($date,$heurePrecedante);
        $rdvsNonJour = $em->getRepository('ClientBundle:Rendezvous')->rechercheRdvNonEffectuerPasDateJour($date);
        $formRecherche = $this->createFormBuilder(null)
            ->add('datejour',CheckboxType::class,array('label'=>'Date du jour ', 'value'=>$date, 'required'=>false))
            ->add('date',DateType::class,array('format'=>'ddMMyyyy','label'=>'Date recherché','required'=>false,
                'placeholder' => array(
                    'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour')))
            ->add('heure',TimeType::class,array('label'=>'Heure recherché','required'=>false,'with_seconds'=>false,
                'widget'=>'text'))
            ->add('submit',SubmitType::class,array('label'=>'Rechercher'))
            ->getForm()
            ->handleRequest($request)
        ;
        if($formRecherche->isSubmitted() && $formRecherche->isValid() ){
            if($formRecherche->get('datejour')->getData() != null){
                $rdvsDuJours = $em->getRepository('ClientBundle:Rendezvous')->findBy(['date'=>$formRecherche->get('datejour')->getData()]);
                $rdvsNonJour = null;
            }
            else{
                if($formRecherche->get('date')->getData() != null){
                    if($formRecherche->get('heure')->getData() != null){
                        $rdvsDuJours = null;
                        $rdvsNonJour = $em->getRepository('ClientBundle:Rendezvous')->findBy(['date'=>$formRecherche->get('date')->getData(),
                                                                                                      'heure'=>$formRecherche->get('heure')->getData() ]);
                    }
                    else{
                        $rdvsDuJours = null;
                        $rdvsNonJour = $em->getRepository('ClientBundle:Rendezvous')->findBy(['date'=>$formRecherche->get('date')->getData()]);
                    }
                }
                else{
                    if($formRecherche->get('heure')->getData() != null){
                        $rdvsDuJours = null;
                        $rdvsNonJour = $em->getRepository('ClientBundle:Rendezvous')->findBy(['heure'=>$formRecherche->get('heure')->getData()]);
                    }
                }
            }
        }


        return $this->render('RendezvousBundle:Default:index.html.twig',array(
            'form'=>$form->createView(),
            'formRecherche'=>$formRecherche->createView(),
            'heure'=>$heurePrecedante,
            'rdvsDuJours'=>$rdvsDuJours,
            'rdvsNonJour'=>$rdvsNonJour,
            'date'=>$date));
    }

    /**
     * @Route("/detailsrendezvous/{id}",name="rendez_vous_details")
     */
    public function detailsRDVController($id){
        $em = $this->getDoctrine()->getManager();
        $rdv = $em->getRepository('ClientBundle:Rendezvous')->find($id);
        $soins = $rdv->getSoins();
        return $this->render('RendezvousBundle:Default:details.html.twig',array(
            'rdv'=>$rdv, 'soins'=>$soins
        ));
    }
}