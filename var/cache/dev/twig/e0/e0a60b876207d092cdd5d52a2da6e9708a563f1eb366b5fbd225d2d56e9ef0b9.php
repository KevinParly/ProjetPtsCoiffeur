<?php

/* StockBundle:Default:listProduit.html.twig */
class __TwigTemplate_e3d9b5a16554a83644078b0ca1f6a05f4f0852c7fa48a7613d81222a8c5756c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "StockBundle:Default:listProduit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e630f71ca4ff6bf88f81409d98d5a15521667162af5b62d0ade7dc05345d4136 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e630f71ca4ff6bf88f81409d98d5a15521667162af5b62d0ade7dc05345d4136->enter($__internal_e630f71ca4ff6bf88f81409d98d5a15521667162af5b62d0ade7dc05345d4136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:listProduit.html.twig"));

        $__internal_8e81d11a8835a58f0c7f8d6ea3b5589f1622dfd249ff5cc911adc555791bb916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e81d11a8835a58f0c7f8d6ea3b5589f1622dfd249ff5cc911adc555791bb916->enter($__internal_8e81d11a8835a58f0c7f8d6ea3b5589f1622dfd249ff5cc911adc555791bb916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:listProduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e630f71ca4ff6bf88f81409d98d5a15521667162af5b62d0ade7dc05345d4136->leave($__internal_e630f71ca4ff6bf88f81409d98d5a15521667162af5b62d0ade7dc05345d4136_prof);

        
        $__internal_8e81d11a8835a58f0c7f8d6ea3b5589f1622dfd249ff5cc911adc555791bb916->leave($__internal_8e81d11a8835a58f0c7f8d6ea3b5589f1622dfd249ff5cc911adc555791bb916_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0aed00b0ce8dcc98882311ec1034054d00b61d80b683cc3393999493473622a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0aed00b0ce8dcc98882311ec1034054d00b61d80b683cc3393999493473622a->enter($__internal_d0aed00b0ce8dcc98882311ec1034054d00b61d80b683cc3393999493473622a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bec8393a4c32bb26822050aa5c756beecb9f8ddacc41f277eeb36d950c00835f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bec8393a4c32bb26822050aa5c756beecb9f8ddacc41f277eeb36d950c00835f->enter($__internal_bec8393a4c32bb26822050aa5c756beecb9f8ddacc41f277eeb36d950c00835f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil de la gestion des stocks";
        
        $__internal_bec8393a4c32bb26822050aa5c756beecb9f8ddacc41f277eeb36d950c00835f->leave($__internal_bec8393a4c32bb26822050aa5c756beecb9f8ddacc41f277eeb36d950c00835f_prof);

        
        $__internal_d0aed00b0ce8dcc98882311ec1034054d00b61d80b683cc3393999493473622a->leave($__internal_d0aed00b0ce8dcc98882311ec1034054d00b61d80b683cc3393999493473622a_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bc3b19ae57e99897b2c5f9fcd8d57a95abb5747845c3fc311a86f3898fcb8562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc3b19ae57e99897b2c5f9fcd8d57a95abb5747845c3fc311a86f3898fcb8562->enter($__internal_bc3b19ae57e99897b2c5f9fcd8d57a95abb5747845c3fc311a86f3898fcb8562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_421caaffb355b6657ceadd0206750c9e8706724057dc6666a7319404d34410bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_421caaffb355b6657ceadd0206750c9e8706724057dc6666a7319404d34410bc->enter($__internal_421caaffb355b6657ceadd0206750c9e8706724057dc6666a7319404d34410bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
";
        
        $__internal_421caaffb355b6657ceadd0206750c9e8706724057dc6666a7319404d34410bc->leave($__internal_421caaffb355b6657ceadd0206750c9e8706724057dc6666a7319404d34410bc_prof);

        
        $__internal_bc3b19ae57e99897b2c5f9fcd8d57a95abb5747845c3fc311a86f3898fcb8562->leave($__internal_bc3b19ae57e99897b2c5f9fcd8d57a95abb5747845c3fc311a86f3898fcb8562_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_9447574e4c064f646330ce280d2e77ed09d06d80b5f026817b8f294c96f7ffee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9447574e4c064f646330ce280d2e77ed09d06d80b5f026817b8f294c96f7ffee->enter($__internal_9447574e4c064f646330ce280d2e77ed09d06d80b5f026817b8f294c96f7ffee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cbd471dda24729a97475d858f16eaa1f7ac25a39382e5108e6357539e71d0bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbd471dda24729a97475d858f16eaa1f7ac25a39382e5108e6357539e71d0bf5->enter($__internal_cbd471dda24729a97475d858f16eaa1f7ac25a39382e5108e6357539e71d0bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <h1>Option de recherche</h1>
    <p>Type de produit</p>
      <select>
        <option selected=\"\">Choisir un type</option>
        <option>Vente</option>
        <option>Prestation</option>
      </select>
    <p>Catégorie de produit</p>
    <select>
      <option selected=\"\">Choisir une catégorie</option>
      <option>Coupe femme</option>
      <option>Coupe homme</option>
      <option>Couleur</option>
    </select>
    <p>Entrer le nom du produit rechercher</p>
    <input type=\"text\">
    <h1>Liste des produits</h1>
    <table>
      <tr>
        <td>Libelé</td>
        <td>Type</td>
        <td>Catégorie</td>
        <td>Prix unitaire</td>
        <td>Stock disponible</td>
        <td>Nombre vendu</td>
      </tr>
      <tr>
        <td>Shampoing</td>
        <td>Vente</td>
        <td>Soin cheveux</td>
        <td>5.00€</td>
        <td>10</td>
        <td>5</td>
      </tr>
      <tr>
        <td>Coupe Mulet</td>
        <td>Prestation</td>
        <td>Coupe homme</td>
        <td>12.99€</td>
        <td>10</td>
        <td>5</td>
      </tr>
    </table>
    <a href=";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueilstock");
        echo "><button type=\"button\">Retour</button></a>
";
        
        $__internal_cbd471dda24729a97475d858f16eaa1f7ac25a39382e5108e6357539e71d0bf5->leave($__internal_cbd471dda24729a97475d858f16eaa1f7ac25a39382e5108e6357539e71d0bf5_prof);

        
        $__internal_9447574e4c064f646330ce280d2e77ed09d06d80b5f026817b8f294c96f7ffee->leave($__internal_9447574e4c064f646330ce280d2e77ed09d06d80b5f026817b8f294c96f7ffee_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle:Default:listProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 52,  89 => 9,  80 => 8,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FrontBundle::layout.html.twig\" %}

{% block title %}Accueil de la gestion des stocks{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
{% endblock %}

{% block body %}
    <h1>Option de recherche</h1>
    <p>Type de produit</p>
      <select>
        <option selected=\"\">Choisir un type</option>
        <option>Vente</option>
        <option>Prestation</option>
      </select>
    <p>Catégorie de produit</p>
    <select>
      <option selected=\"\">Choisir une catégorie</option>
      <option>Coupe femme</option>
      <option>Coupe homme</option>
      <option>Couleur</option>
    </select>
    <p>Entrer le nom du produit rechercher</p>
    <input type=\"text\">
    <h1>Liste des produits</h1>
    <table>
      <tr>
        <td>Libelé</td>
        <td>Type</td>
        <td>Catégorie</td>
        <td>Prix unitaire</td>
        <td>Stock disponible</td>
        <td>Nombre vendu</td>
      </tr>
      <tr>
        <td>Shampoing</td>
        <td>Vente</td>
        <td>Soin cheveux</td>
        <td>5.00€</td>
        <td>10</td>
        <td>5</td>
      </tr>
      <tr>
        <td>Coupe Mulet</td>
        <td>Prestation</td>
        <td>Coupe homme</td>
        <td>12.99€</td>
        <td>10</td>
        <td>5</td>
      </tr>
    </table>
    <a href={{ path('accueilstock') }}><button type=\"button\">Retour</button></a>
{% endblock %}
", "StockBundle:Default:listProduit.html.twig", "/var/www/html/www/ProjetCoiffeur/ProjetPtsCoiffeur/src/StockBundle/Resources/views/Default/listProduit.html.twig");
    }
}
