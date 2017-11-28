<?php

/* StockBundle:Default:acceuilstock.html.twig */
class __TwigTemplate_84066608e66a95b3a9a9d61cc01c9a6a8c26f47864b16064c96ba7f2c0a64c0b extends Twig_Template
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
        $__internal_654463e2b4fd3faa65f5a0381610b04f1cf3c749ac66d48051c43ab638429867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_654463e2b4fd3faa65f5a0381610b04f1cf3c749ac66d48051c43ab638429867->enter($__internal_654463e2b4fd3faa65f5a0381610b04f1cf3c749ac66d48051c43ab638429867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:acceuilstock.html.twig"));

        $__internal_2e3b8792e65fb3985d36c327d551290a8db73befac604e3bca05b060e0082202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e3b8792e65fb3985d36c327d551290a8db73befac604e3bca05b060e0082202->enter($__internal_2e3b8792e65fb3985d36c327d551290a8db73befac604e3bca05b060e0082202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:acceuilstock.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_654463e2b4fd3faa65f5a0381610b04f1cf3c749ac66d48051c43ab638429867->leave($__internal_654463e2b4fd3faa65f5a0381610b04f1cf3c749ac66d48051c43ab638429867_prof);

        
        $__internal_2e3b8792e65fb3985d36c327d551290a8db73befac604e3bca05b060e0082202->leave($__internal_2e3b8792e65fb3985d36c327d551290a8db73befac604e3bca05b060e0082202_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef4651cf7ebf95287557c266b6bea52042ab80aa9ae43982e478bba9701e48c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef4651cf7ebf95287557c266b6bea52042ab80aa9ae43982e478bba9701e48c6->enter($__internal_ef4651cf7ebf95287557c266b6bea52042ab80aa9ae43982e478bba9701e48c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8a172b3d5f9f5f4ed2f9d356f4c4b2f1679736b14b08fd849c5674ba988b23c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a172b3d5f9f5f4ed2f9d356f4c4b2f1679736b14b08fd849c5674ba988b23c0->enter($__internal_8a172b3d5f9f5f4ed2f9d356f4c4b2f1679736b14b08fd849c5674ba988b23c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil de la gestion des stocks";
        
        $__internal_8a172b3d5f9f5f4ed2f9d356f4c4b2f1679736b14b08fd849c5674ba988b23c0->leave($__internal_8a172b3d5f9f5f4ed2f9d356f4c4b2f1679736b14b08fd849c5674ba988b23c0_prof);

        
        $__internal_ef4651cf7ebf95287557c266b6bea52042ab80aa9ae43982e478bba9701e48c6->leave($__internal_ef4651cf7ebf95287557c266b6bea52042ab80aa9ae43982e478bba9701e48c6_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_70183733c5356ac6d0d58d724fd8115f8533938848719e978592d4846dd68963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70183733c5356ac6d0d58d724fd8115f8533938848719e978592d4846dd68963->enter($__internal_70183733c5356ac6d0d58d724fd8115f8533938848719e978592d4846dd68963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fc15673219f98d217c27990dd00e9b405b64f2f13e961ad609d0840ef6f64950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc15673219f98d217c27990dd00e9b405b64f2f13e961ad609d0840ef6f64950->enter($__internal_fc15673219f98d217c27990dd00e9b405b64f2f13e961ad609d0840ef6f64950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
";
        
        $__internal_fc15673219f98d217c27990dd00e9b405b64f2f13e961ad609d0840ef6f64950->leave($__internal_fc15673219f98d217c27990dd00e9b405b64f2f13e961ad609d0840ef6f64950_prof);

        
        $__internal_70183733c5356ac6d0d58d724fd8115f8533938848719e978592d4846dd68963->leave($__internal_70183733c5356ac6d0d58d724fd8115f8533938848719e978592d4846dd68963_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_83d7c60cf9bcb709531e79589629309c7b11c61f0486c9fa63b3e54a3368b453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83d7c60cf9bcb709531e79589629309c7b11c61f0486c9fa63b3e54a3368b453->enter($__internal_83d7c60cf9bcb709531e79589629309c7b11c61f0486c9fa63b3e54a3368b453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa56e2ba569a0bbf064f18a50013260b3ce318bcece016c08d14296521413555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa56e2ba569a0bbf064f18a50013260b3ce318bcece016c08d14296521413555->enter($__internal_aa56e2ba569a0bbf064f18a50013260b3ce318bcece016c08d14296521413555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
      <button type=\"button\">Afficher la liste des produits</button>
      <button type=\"button\">Ajouter une livraison</button>
      <button type=\"button\">Afficher les couleurs</button>
";
        
        $__internal_aa56e2ba569a0bbf064f18a50013260b3ce318bcece016c08d14296521413555->leave($__internal_aa56e2ba569a0bbf064f18a50013260b3ce318bcece016c08d14296521413555_prof);

        
        $__internal_83d7c60cf9bcb709531e79589629309c7b11c61f0486c9fa63b3e54a3368b453->leave($__internal_83d7c60cf9bcb709531e79589629309c7b11c61f0486c9fa63b3e54a3368b453_prof);

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
        return array (  98 => 13,  92 => 10,  89 => 9,  80 => 8,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
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
      <button type=\"button\">Afficher la liste des produits</button>
      <button type=\"button\">Ajouter une livraison</button>
      <button type=\"button\">Afficher les couleurs</button>
{% endblock %}
", "StockBundle:Default:acceuilstock.html.twig", "/home/kevin/Dropbox/ProjetPtsCoiffeur/src/StockBundle/Resources/views/Default/acceuilstock.html.twig");
    }
}
