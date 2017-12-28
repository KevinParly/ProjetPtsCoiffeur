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
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ClientController extends Controller
{
    /**
     * @Route("/ajoutclient",name="ajoutclient")
     */
    public function AjoutClientAction(){
        $client = new Client();
        $form = $this->createFormBuilder($client)
            ->add('civilite',RadioType::class)
            ->add('nom',TextType::class)
            ->add('prenom',TextType::class)
            ->add('adresse',TextType::class)
            ->add('codePostal',TextType::class)
            ->add('ville',TextType::class)
            ->add('dateNaissance',DateType::class)
            ->add('telephone',TextType::class)
            ->add('remise',TextType::class)
            ->add('couleur',CheckboxType::class)
            ->getForm()
        ;
        return $this->render('ClientBundle:Default:ajoutClient.html.twig', array('form'=>$form->createView()));
    }
}