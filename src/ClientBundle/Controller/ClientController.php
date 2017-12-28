<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 28/12/17
 * Time: 11:38
 */

namespace ClientBundle\Controller;
use ClientBundle\Entity\Client;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class ClientController extends Controller
{
    /**
     * @Route("/ajoutclient",name="ajoutclient")
     */
    public function AjoutClientAction(Request $request){
        $client = new Client();
        $form = $this->createFormBuilder($client)
            ->add('civilite',ChoiceType::class,array(
                    'choices'=>array('M'=>'M','Mme'=>'Mme','Enfant'=>'Enfant'),
                'expanded'=>true
            ))
            ->add('nom',TextType::class)
            ->add('prenom',TextType::class)
            ->add('adresse',TextType::class)
            ->add('codePostal',TextType::class)
            ->add('ville',TextType::class)
            ->add('dateNaissance',BirthdayType::class)
            ->add('telephone',TextType::class)
            ->add('remise',NumberType::class)
            ->add('couleur',ChoiceType::class,array(
                'choices'=>array('Oui'=>'1','Non'=>'0'),
                'expanded'=>true
            ))
            ->add('Enregistrer', SubmitType::class)
            ->getForm()
        ;
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $clientInsert = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($clientInsert);
            $em->flush();
            $this->addFlash("success", "Vous avez bien inséré le client " . $clientInsert->getNom().' '. $clientInsert->getPrenom());
        }
        else{
            $this->addFlash("kyusoledozo", "Erreur : client non inserer");
        }
        return $this->render('ClientBundle:Default:ajoutClient.html.twig', array('form'=>$form->createView()));
    }
}