<?php

/* StockBundle:Default:acceuilstock.html.twig */
class __TwigTemplate_bb97ddf33b83450fc8df6e7ca83a6eb05c43c2b6903f47ebb0b40caa83b191d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "StockBundle:Default:acceuilstock.html.twig", 1);
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
        $__internal_631cd2c6db4d5cb7b7f3fcc80ad2ebd66cf825b7e4b740ef578c96fd07bcc3bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_631cd2c6db4d5cb7b7f3fcc80ad2ebd66cf825b7e4b740ef578c96fd07bcc3bf->enter($__internal_631cd2c6db4d5cb7b7f3fcc80ad2ebd66cf825b7e4b740ef578c96fd07bcc3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:acceuilstock.html.twig"));

        $__internal_3c64c8537419ccde9e67e9b678d3bc58af53e79b1a970d93213bd48ae7f11157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c64c8537419ccde9e67e9b678d3bc58af53e79b1a970d93213bd48ae7f11157->enter($__internal_3c64c8537419ccde9e67e9b678d3bc58af53e79b1a970d93213bd48ae7f11157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:acceuilstock.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_631cd2c6db4d5cb7b7f3fcc80ad2ebd66cf825b7e4b740ef578c96fd07bcc3bf->leave($__internal_631cd2c6db4d5cb7b7f3fcc80ad2ebd66cf825b7e4b740ef578c96fd07bcc3bf_prof);

        
        $__internal_3c64c8537419ccde9e67e9b678d3bc58af53e79b1a970d93213bd48ae7f11157->leave($__internal_3c64c8537419ccde9e67e9b678d3bc58af53e79b1a970d93213bd48ae7f11157_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_595ad797295f3a226c48860f19b77e4fd856fe733c14949987ee9f64ebca5847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_595ad797295f3a226c48860f19b77e4fd856fe733c14949987ee9f64ebca5847->enter($__internal_595ad797295f3a226c48860f19b77e4fd856fe733c14949987ee9f64ebca5847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dae69b5dd52ac349603228057b3415d5ea09b52f8060330328dfbbb1102ce454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dae69b5dd52ac349603228057b3415d5ea09b52f8060330328dfbbb1102ce454->enter($__internal_dae69b5dd52ac349603228057b3415d5ea09b52f8060330328dfbbb1102ce454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil de la gestion des stocks";
        
        $__internal_dae69b5dd52ac349603228057b3415d5ea09b52f8060330328dfbbb1102ce454->leave($__internal_dae69b5dd52ac349603228057b3415d5ea09b52f8060330328dfbbb1102ce454_prof);

        
        $__internal_595ad797295f3a226c48860f19b77e4fd856fe733c14949987ee9f64ebca5847->leave($__internal_595ad797295f3a226c48860f19b77e4fd856fe733c14949987ee9f64ebca5847_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7777db7c3aa236ba6c3489ae387fbe5b92cad95cb48adc3026c46ccc0f566e2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7777db7c3aa236ba6c3489ae387fbe5b92cad95cb48adc3026c46ccc0f566e2f->enter($__internal_7777db7c3aa236ba6c3489ae387fbe5b92cad95cb48adc3026c46ccc0f566e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_603389b63e60cf7b01b7c47c6b6832562b51f17a038c98b52a6fd2574816dcb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_603389b63e60cf7b01b7c47c6b6832562b51f17a038c98b52a6fd2574816dcb3->enter($__internal_603389b63e60cf7b01b7c47c6b6832562b51f17a038c98b52a6fd2574816dcb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
";
        
        $__internal_603389b63e60cf7b01b7c47c6b6832562b51f17a038c98b52a6fd2574816dcb3->leave($__internal_603389b63e60cf7b01b7c47c6b6832562b51f17a038c98b52a6fd2574816dcb3_prof);

        
        $__internal_7777db7c3aa236ba6c3489ae387fbe5b92cad95cb48adc3026c46ccc0f566e2f->leave($__internal_7777db7c3aa236ba6c3489ae387fbe5b92cad95cb48adc3026c46ccc0f566e2f_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_1368a9ae7991dfb1bac248cf89921ef6ab965f9bf6ff9bb742156504aba67f31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1368a9ae7991dfb1bac248cf89921ef6ab965f9bf6ff9bb742156504aba67f31->enter($__internal_1368a9ae7991dfb1bac248cf89921ef6ab965f9bf6ff9bb742156504aba67f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ba3c9d483f7652fb76e1e7d39eea28343bec5fdf2632eace48e03f8903383f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba3c9d483f7652fb76e1e7d39eea28343bec5fdf2632eace48e03f8903383f6->enter($__internal_3ba3c9d483f7652fb76e1e7d39eea28343bec5fdf2632eace48e03f8903383f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <h1>Bienvenue sur l'accueil de la gestion des stocks</h1>
      <a href=";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutproduit");
        echo ">
        <button type=\"button\">Ajouter un produit</button>
      </a>
      <a href=";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listproduitmodif");
        echo ">
        <button type=\"button\">Modifier un produit</button>
      </a>
      <a href=";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeproduit");
        echo ">
        <button type=\"button\">Afficher la liste des produits</button>
      </a>
      <a href=";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutlivraison");
        echo ">
        <button type=\"button\">Ajouter une livraison</button>
      </a>
      <a href=";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listecouleur");
        echo ">
        <button>Afficher les couleurs</button>
      </a>
      <a href=";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "><button type=\"button\">Retour</button></a>
";
        
        $__internal_3ba3c9d483f7652fb76e1e7d39eea28343bec5fdf2632eace48e03f8903383f6->leave($__internal_3ba3c9d483f7652fb76e1e7d39eea28343bec5fdf2632eace48e03f8903383f6_prof);

        
        $__internal_1368a9ae7991dfb1bac248cf89921ef6ab965f9bf6ff9bb742156504aba67f31->leave($__internal_1368a9ae7991dfb1bac248cf89921ef6ab965f9bf6ff9bb742156504aba67f31_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle:Default:acceuilstock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 25,  116 => 22,  110 => 19,  104 => 16,  98 => 13,  92 => 10,  89 => 9,  80 => 8,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
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
    <h1>Bienvenue sur l'accueil de la gestion des stocks</h1>
      <a href={{ path('ajoutproduit') }}>
        <button type=\"button\">Ajouter un produit</button>
      </a>
      <a href={{ path('listproduitmodif') }}>
        <button type=\"button\">Modifier un produit</button>
      </a>
      <a href={{ path('listeproduit') }}>
        <button type=\"button\">Afficher la liste des produits</button>
      </a>
      <a href={{ path('ajoutlivraison') }}>
        <button type=\"button\">Ajouter une livraison</button>
      </a>
      <a href={{ path('listecouleur') }}>
        <button>Afficher les couleurs</button>
      </a>
      <a href={{ path('accueil') }}><button type=\"button\">Retour</button></a>
{% endblock %}
", "StockBundle:Default:acceuilstock.html.twig", "/var/www/html/www/ProjetCoiffeur/ProjetPtsCoiffeur/src/StockBundle/Resources/views/Default/acceuilstock.html.twig");
    }
}
