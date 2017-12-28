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


class DetailsClientController extends Controller
{

    /**
     * @Route("/detailsclient/{id}",name="detailsclient/{id}")
     */
    public function detailsClientAction($id){
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('ClientBundle:Client')->find($id);
        $rdvsClient = $em->getRepository('ClientBundle:Rendezvous')->findBy(array('client'=>$client));
        $typeSoins = $em->getRepository('ClientBundle:TypeSoin')->findAll();
        return $this->render('ClientBundle:Default:detailsClient.html.twig', array("client"=>$client,"rdvs"=>$rdvsClient,"typeSoins"=>$typeSoins));
    }

}