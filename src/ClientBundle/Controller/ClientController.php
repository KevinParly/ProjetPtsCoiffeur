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
        $client->setCouleur(false);
        $form = $this->createFormBuilder($client)
            ->add('civilite',ChoiceType::class,array(
                'label' => 'Civilité * ',
                'choices'=>array(
                    'M'=>'M',
                    'Mme'=>'Mme',
                    'Enfant'=>'Enfant'),
                'expanded'=>true))
            ->add('nom',TextType::class, array(
                'attr' => array(
                  'placeholder' => 'Nom'),
                'label' => 'Nom * '
              ))
            ->add('prenom',TextType::class, array(
                'attr' => array(
                  'placeholder' => 'Prenom'),
                'label' => 'Prénom * '))
            ->add('dateNaissance',BirthdayType::class, array(
                'label' => 'Date de naissance ',
                'placeholder' => array(
                    'year' => 'Année',
                    'month' => 'Mois',
                    'day' => 'Jour'),
                'years' => range(date('Y'), date('Y')-100),
                'format' => 'dd/MM/yyyy',
                'required'=>false))
            ->add('telephone',TextType::class, array(
                'attr' => array(
                  'placeholder' => 'n° Téléphone'),
                'label' => 'Téléphone ',
                'required'=>false))
            ->add('adresse',TextType::class, array(
                'attr' => array(
                  'placeholder' => 'Adresse'),
                'label' => 'Adresse ',
                'required'=>false))
            ->add('ville',TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Ville'),
                'label' => 'Ville ',
                'required'=>false))
            ->add('codePostal',TextType::class, array(
                'attr' => array(
                  'placeholder' => 'Code postal'),
                'label' => 'Code postal ',
                'required'=>false))
            ->add('remise',NumberType::class, array(
                'label' => 'Remise ',
                'data'  => '0',
                'required'=>false))
            ->add('couleur',ChoiceType::class,array(
                'label' => 'Couleur ',
                'choices'=>array(
                    'Non'=>'0',
                    'Oui'=>'1'),
                'expanded'=>true))
            ->add('Enregistrer', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $clientInsert = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $clientInsert->setNom(strtoupper($form->get('nom')->getData()));
            $clientInsert->setVille(strtoupper($form->get('ville')->getData()));
            $em->persist($clientInsert);
            $em->flush();
            $this->addFlash("success", "Vous avez bien inséré le client " . $clientInsert->getNom().' '. $clientInsert->getPrenom());
            return $this->redirect($request->getUri());
        }
        else{
            $this->addFlash("echec", "Erreur lors de l'insertion du client !");
        }
        return $this->render('ClientBundle:Default:ajoutClient.html.twig', array('form'=>$form->createView()));
    }
}
