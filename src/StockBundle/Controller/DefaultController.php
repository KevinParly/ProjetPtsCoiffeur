<?php

namespace StockBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/acceuilstock",name="acceuilstock")
     */
    public function acceuilStockAction(){
        return $this->render('StockBundle:Default:acceuilstock.html.twig');
    }

    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('StockBundle:Default:index.html.twig');
    }
}
