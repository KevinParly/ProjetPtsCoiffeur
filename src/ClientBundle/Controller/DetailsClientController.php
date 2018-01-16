<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 26/12/17
 * Time: 11:34
 */

namespace ClientBundle\Controller;

use ClientBundle\Entity\Rendezvous;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Time;


class DetailsClientController extends Controller
{

    /**
     * @Route("/detailsclient/{id}",name="details_client")
     */
    public function detailsClientAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        //Form Information Client
        $client = $em->getRepository('ClientBundle:Client')->find($id);
        $form = $this->createFormBuilder($client)
            ->add('civilite', ChoiceType::class, array(
                'label' => 'Civilité : ',
                'choices' => array(
                    'M' => 'M',
                    'Mme' => 'Mme',
                    'Enfant' => 'Enfant')))
            ->add('nom', TextType::class, array(
                'label' => 'Nom : '))
            ->add('prenom', TextType::class, array(
                'label' => 'Prénom : '))
            ->add('dateNaissance', BirthdayType::class, array(
                'label' => 'Date de naissance : ',
                'placeholder' => array(
                    'year' => 'Année',
                    'month' => 'Mois',
                    'day' => 'Jour'),
                'format' => 'dd/MM/yyyy',
                'years' => range(date('Y'), date('Y') - 100),
                'required' => false))
            ->add('telephone',TextType::class,array('label'=> 'Téléphone '))
            ->add('adresse', TextType::class, array(
                'label' => 'Adresse : ',
                'required' => false))
            ->add('ville', TextType::class, array(
                'label' => 'Ville : ',
                'required' => false))
            ->add('codePostal', TextType::class, array(
                'label' => 'Code Postal : ',
                'required' => false))
            ->add('remise', TextType::class, array(
                'label' => 'Remise : '))
            ->add('couleur', ChoiceType::class, array(
                'label' => 'Couleur/Permanante',
                'choices' => array(
                    'Oui' => 1,
                    'Non' => 0)))
            ->add('save', SubmitType::class, array(
                'label' => 'Modifier le client'))
            ->getForm()
            ->handleRequest($request);
        $message = null;
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $message = "Modification du client réussite !";
        } else {
            $message = "Echec lors de la modification du client !";
        }

        //Form Historique RDV
        $rdvsClient = $em->getRepository('ClientBundle:Rendezvous')->findBy(array('client' => $client));
        $rdv = new Rendezvous();
        $formRDV = $this->createFormBuilder($rdv)
            ->add('date', DateType::class, array('label' => 'Date du rendez-vous', 'placeholder' => array('day' => 'Jour', 'month' => 'Mois', 'year' => 'Année'), 'format' => 'dd/MM/yyyy', 'required' => false, 'years' => range(2018, date('Y') + 1)))
            ->add('heure', TimeType::class,
                array('label' => 'Heure du rendez-vous',
                    'placeholder' => array('hour' => 'Heure', 'minute' => 'Minute', 'second' => 'Second'),
                    'required' => false, 'hours' => range(8, 18)))
            ->add('Valider', SubmitType::class)
            ->getForm()
            ->handleRequest($request);

        if ($formRDV->isSubmitted() && $formRDV->isValid() && !($form->isSubmitted() && $form->isValid())) {
            if ($formRDV->get('date')->getData() != null) {
                if ($formRDV->get('heure')->getData() != null) {
                    $rdvsClient = $em->getRepository('ClientBundle:Rendezvous')
                        ->findBy(array('client' => $client, 'date' => $formRDV->get('date')->getData(), 'heure' => $formRDV->get('heure')->getData()));
                } else {
                    $rdvsClient = $em->getRepository('ClientBundle:Rendezvous')
                        ->findBy(array('client' => $client, 'date' => $formRDV->get('date')->getData()));
                }
            } else {
                if ($formRDV->get('heure')->getData() != null) {
                    $rdvsClient = $em->getRepository('ClientBundle:Rendezvous')
                        ->findBy(array('client' => $client, 'heure' => $formRDV->get('heure')->getData()));
                } else {
                    $rdvsClient = $em->getRepository('ClientBundle:Rendezvous')->findBy(array('client' => $client));
                }
            }
        }
        $client = $em->getRepository('ClientBundle:client')->find($id);
        $RDVSoin = $em->getRepository('ClientBundle:Rendezvous')->findBy(array('client' => $client));
        $typeSoins = $em->getRepository('ClientBundle:TypeSoin')->findAll();

        return $this->render('ClientBundle:Default:detailsClient.html.twig',
            array("client" => $client, "rdvs" => $rdvsClient, "typeSoins" => $typeSoins, "message" => $message, 'form' => $form->createView(), 'formRDV' => $formRDV->createView(), "rdvsoin" => $RDVSoin,"id" => $id));
    }

}