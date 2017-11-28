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
        $__internal_e5c5a9a7e79e6d7a16b2d5f10d9c4aea76a64a13e2d006844e6e5d67a21d4896 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5c5a9a7e79e6d7a16b2d5f10d9c4aea76a64a13e2d006844e6e5d67a21d4896->enter($__internal_e5c5a9a7e79e6d7a16b2d5f10d9c4aea76a64a13e2d006844e6e5d67a21d4896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:acceuilstock.html.twig"));

        $__internal_fb12d603e6fa7239a99f834dfbd5d64110f8ad9074d34ce622688b41ea6405de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb12d603e6fa7239a99f834dfbd5d64110f8ad9074d34ce622688b41ea6405de->enter($__internal_fb12d603e6fa7239a99f834dfbd5d64110f8ad9074d34ce622688b41ea6405de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:acceuilstock.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5c5a9a7e79e6d7a16b2d5f10d9c4aea76a64a13e2d006844e6e5d67a21d4896->leave($__internal_e5c5a9a7e79e6d7a16b2d5f10d9c4aea76a64a13e2d006844e6e5d67a21d4896_prof);

        
        $__internal_fb12d603e6fa7239a99f834dfbd5d64110f8ad9074d34ce622688b41ea6405de->leave($__internal_fb12d603e6fa7239a99f834dfbd5d64110f8ad9074d34ce622688b41ea6405de_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_22b90f3d6b3d8d2c9defb8a657eeed2db8d1d913af25c55879ce5f9b9e4cf626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22b90f3d6b3d8d2c9defb8a657eeed2db8d1d913af25c55879ce5f9b9e4cf626->enter($__internal_22b90f3d6b3d8d2c9defb8a657eeed2db8d1d913af25c55879ce5f9b9e4cf626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ac33e6fe5cbecfb91a22dfd6f1ebef501fb873fe04d09ebd0400dc272eaeb817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac33e6fe5cbecfb91a22dfd6f1ebef501fb873fe04d09ebd0400dc272eaeb817->enter($__internal_ac33e6fe5cbecfb91a22dfd6f1ebef501fb873fe04d09ebd0400dc272eaeb817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil de la gestion des stocks";
        
        $__internal_ac33e6fe5cbecfb91a22dfd6f1ebef501fb873fe04d09ebd0400dc272eaeb817->leave($__internal_ac33e6fe5cbecfb91a22dfd6f1ebef501fb873fe04d09ebd0400dc272eaeb817_prof);

        
        $__internal_22b90f3d6b3d8d2c9defb8a657eeed2db8d1d913af25c55879ce5f9b9e4cf626->leave($__internal_22b90f3d6b3d8d2c9defb8a657eeed2db8d1d913af25c55879ce5f9b9e4cf626_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8aa8ec40a0a84b524dabb386de5b1209187d687e0a17c73d2db68fefbd15768f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aa8ec40a0a84b524dabb386de5b1209187d687e0a17c73d2db68fefbd15768f->enter($__internal_8aa8ec40a0a84b524dabb386de5b1209187d687e0a17c73d2db68fefbd15768f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8c489b8f899ea773e9d7b9240ce1bb61bee9fa5fe2a0d4163569a1496204ba18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c489b8f899ea773e9d7b9240ce1bb61bee9fa5fe2a0d4163569a1496204ba18->enter($__internal_8c489b8f899ea773e9d7b9240ce1bb61bee9fa5fe2a0d4163569a1496204ba18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
";
        
        $__internal_8c489b8f899ea773e9d7b9240ce1bb61bee9fa5fe2a0d4163569a1496204ba18->leave($__internal_8c489b8f899ea773e9d7b9240ce1bb61bee9fa5fe2a0d4163569a1496204ba18_prof);

        
        $__internal_8aa8ec40a0a84b524dabb386de5b1209187d687e0a17c73d2db68fefbd15768f->leave($__internal_8aa8ec40a0a84b524dabb386de5b1209187d687e0a17c73d2db68fefbd15768f_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_de1ddcefc63e1d147e8571b0473d89f77bc97745c3f4cb0c579f81ae94a4586d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de1ddcefc63e1d147e8571b0473d89f77bc97745c3f4cb0c579f81ae94a4586d->enter($__internal_de1ddcefc63e1d147e8571b0473d89f77bc97745c3f4cb0c579f81ae94a4586d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b40a6403baaf306d74e1208b295db33deba19840e6bd822048b9a7f37636c074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40a6403baaf306d74e1208b295db33deba19840e6bd822048b9a7f37636c074->enter($__internal_b40a6403baaf306d74e1208b295db33deba19840e6bd822048b9a7f37636c074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
      <button type=\"button\">Ajouter une livraison</button>
      <button type=\"button\">Afficher les couleurs</button>
";
        
        $__internal_b40a6403baaf306d74e1208b295db33deba19840e6bd822048b9a7f37636c074->leave($__internal_b40a6403baaf306d74e1208b295db33deba19840e6bd822048b9a7f37636c074_prof);

        
        $__internal_de1ddcefc63e1d147e8571b0473d89f77bc97745c3f4cb0c579f81ae94a4586d->leave($__internal_de1ddcefc63e1d147e8571b0473d89f77bc97745c3f4cb0c579f81ae94a4586d_prof);

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
        return array (  104 => 16,  98 => 13,  92 => 10,  89 => 9,  80 => 8,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
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
      <button type=\"button\">Ajouter une livraison</button>
      <button type=\"button\">Afficher les couleurs</button>
{% endblock %}
", "StockBundle:Default:acceuilstock.html.twig", "/home/kevin/Dropbox/ProjetPtsCoiffeur/src/StockBundle/Resources/views/Default/acceuilstock.html.twig");
    }
}
