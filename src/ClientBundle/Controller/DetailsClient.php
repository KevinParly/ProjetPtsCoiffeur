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


class DetailsClient extends Controller
{
    /**
     * @Route("/detailsclient/{id}",name="detailsclient/{id}")
     */
    public function detailsClientAction($id){

        return $this->render('ClientBundle:Default:detailsClient.html.twig');
    }
}