<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 26/12/17
 * Time: 11:34
 */

namespace ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;


class DetailsClientController extends Controller
{

    /**
     * @Route("/detailsclient/{id}",name="details_client")
     */
    public function detailsClientAction($id, Request $request){
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('ClientBundle:Client')->find($id);
        $form = $this->createFormBuilder($client)
            ->add('civilite',ChoiceType::class,array('label'=>'Civilité : ','choices'=>array('M'=>'M','Mme'=>'Mme','Enfant'=>'Enfant')))
            ->add('nom',TextType::class,array('label'=>'Nom : '))
            ->add('prenom',TextType::class,array('label'=>'Prénom : '))
            ->add('dateNaissance',DateType::class,array('label'=>'Date de naissance : ','format'=>'dd/MM/yyyy'))
            ->add('adresse',TextType::class,array('label'=>'Adresse : '))
            ->add('ville',TextType::class,array('label'=>'Ville : '))
            ->add('codePostal',TextType::class,array('label'=>'Code Postal : '))
            ->add('remise',TextType::class,array('label'=>'Remise : '))
            ->add('couleur',ChoiceType::class,array('label'=>'Couleur/Permanante','choices'=>array('Oui'=>1,'Non'=>0)))
            ->add('save',SubmitType::class,array('label'=>'Modifier le client'))
            ->getForm()
            ->handleRequest($request)
        ;
        $message = null;
        if($form->isSubmitted() && $form->isValid()){
            $em->flush();
            $message = "Modification du client réussite !";
        }
        else{
            $message = "Echec lors de la modification du client";
        }
        $rdvsClient = $em->getRepository('ClientBundle:Rendezvous')->findBy(array('client'=>$client));
        $typeSoins = $em->getRepository('ClientBundle:TypeSoin')->findAll();
        return $this->render('ClientBundle:Default:detailsClient.html.twig',
            array("client"=>$client,"rdvs"=>$rdvsClient,"typeSoins"=>$typeSoins,"message"=>$message,'form'=>$form->createView()));
    }

}