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
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\HttpFoundation\Request;

class detailsRDVController extends Controller
{
    /**
     * @Route("/rendezvous",name="rendezvous")
     */
    public function RDVAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $rdv = new Rendezvous();
        $annee = date("Y");
        $anneeSuivantes = $annee + 10;
        $form = $this->createFormBuilder($rdv)
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
            ->add('soins',EntityType::class,array('class'=>'ClientBundle:Soin','choice_label'=>'nom'))
            ->add('save',SubmitType ::class,array('label'=>'Prendre le rendez-vous'))
            ->getForm()
            ->handleRequest($request)
            ;
        if($form->isSubmitted() && $form->isValid()){
            $rdv->addSoin($form->getData()['soins']);
            $em->persist($rdv);
            $em->flush();
        }
        return $this->render('RendezvousBundle:Default:index.html.twig',array('form'=>$form->createView()));
    }
}