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
        $rdvs = $em->getRepository('ClientBundle:Rendezvous')->rechercheRdvNonEffectuer($date,$heurePrecedante);

        $formRecherche = $this->createFormBuilder(null)
            ->add('date',DateType::class,array('format'=>'ddMMyyyy'))
            ->add('heure')
        ;

        return $this->render('RendezvousBundle:Default:index.html.twig',array(
            'form'=>$form->createView(),
            'date'=>$date,
            'heure'=>$heurePrecedante,
            'rdvs'=>$rdvs));
    }
}