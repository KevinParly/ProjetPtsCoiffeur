<?php

namespace StockBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/accueilstock",name="accueilstock")
     */
    public function acceuilStockAction(){
        return $this->render('StockBundle:Default:acceuilstock.html.twig');
    }

    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->redirectToRoute("accueil");
    }

    /**
     * @Route("/ajoutproduit",name="ajoutproduit")
     */
    public function ajoutProduitAction(){
        return $this->render('StockBundle:Default:ajouterPorduit.html.twig');
    }

    /**
     * @Route("/listproduitmodif",name="listproduitmodif")
     */
    public function listProduitModif(){
        return $this->render('StockBundle:Default:listProduitModif.html.twig');
    }

    /**
    * @Route("/listeproduit",name="listeproduit")
    */
    public function listeProduit(){
       return $this->render('StockBundle:Default:listProduit.html.twig');
    }

    /**
    * @Route("/ajoutlivraison",name="ajoutlivraison")
    */
    public function ajoutLivraison(){
      return $this->render('StockBundle:Default:ajoutLivraison.html.twig');
    }
}
