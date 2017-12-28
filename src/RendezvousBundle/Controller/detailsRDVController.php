<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 28/12/17
 * Time: 19:34
 */

namespace RendezvousBundle\Controller;


use ClientBundle\Entity\Rendezvous;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class detailsRDVController extends Controller
{
    /**
     * @Route("/rendezvous",name="rendezvous")
     */
    public function RDVAction()
    {
        $em = $this->getDoctrine()->getManager();
        $clients = $em->getRepository('ClientBundle:Client');
        $rdv = new Rendezvous();
        $form = $this->createFormBuilder($rdv)
            ;
        return $this->render('RendezvousBundle:Default:index.html.twig');
    }
}