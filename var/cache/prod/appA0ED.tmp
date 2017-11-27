<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/a')) {
            // acceuilstock
            if ('/acceuilstock' === $pathinfo) {
                return array (  '_controller' => 'StockBundle\\Controller\\DefaultController::acceuilStockAction',  '_route' => 'acceuilstock',);
            }

            // accueil
            if ('/accueil' === $pathinfo) {
                return array (  '_controller' => 'FrontBundle\\Controller\\DefaultController::acceuilAction',  '_route' => 'accueil',);
            }

            // ajoutproduit
            if ('/ajoutproduit' === $pathinfo) {
                return array (  '_controller' => 'StockBundle\\Controller\\DefaultController::ajoutProduitAction',  '_route' => 'ajoutproduit',);
            }

        }

        // stock_default_index
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'stock_default_index');
            }

            return array (  '_controller' => 'StockBundle\\Controller\\DefaultController::indexAction',  '_route' => 'stock_default_index',);
        }

        // listproduitmodif
        if ('/listproduitmodif' === $pathinfo) {
            return array (  '_controller' => 'StockBundle\\Controller\\DefaultController::listProduitModif',  '_route' => 'listproduitmodif',);
        }

        // front_default_index
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'front_default_index');
            }

            return array (  '_controller' => 'FrontBundle\\Controller\\DefaultController::indexAction',  '_route' => 'front_default_index',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
