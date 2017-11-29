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
        $__internal_4e3d0b597360b8ade4504649f0c018cabd286d58afb3cd905fdc53db5e9f2e68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e3d0b597360b8ade4504649f0c018cabd286d58afb3cd905fdc53db5e9f2e68->enter($__internal_4e3d0b597360b8ade4504649f0c018cabd286d58afb3cd905fdc53db5e9f2e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:acceuilstock.html.twig"));

        $__internal_a94a19a228ff62d66fa35615309697c099f50fe0591bd6dcbe66fd98e50245b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a94a19a228ff62d66fa35615309697c099f50fe0591bd6dcbe66fd98e50245b2->enter($__internal_a94a19a228ff62d66fa35615309697c099f50fe0591bd6dcbe66fd98e50245b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:acceuilstock.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e3d0b597360b8ade4504649f0c018cabd286d58afb3cd905fdc53db5e9f2e68->leave($__internal_4e3d0b597360b8ade4504649f0c018cabd286d58afb3cd905fdc53db5e9f2e68_prof);

        
        $__internal_a94a19a228ff62d66fa35615309697c099f50fe0591bd6dcbe66fd98e50245b2->leave($__internal_a94a19a228ff62d66fa35615309697c099f50fe0591bd6dcbe66fd98e50245b2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b35649c75968c87973009342cb3f68b93a499a88d1f68903ddc917e6855222b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b35649c75968c87973009342cb3f68b93a499a88d1f68903ddc917e6855222b3->enter($__internal_b35649c75968c87973009342cb3f68b93a499a88d1f68903ddc917e6855222b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_049c932f44a14d0b6e5613ca8ca1eee94499f4120e2e4eb6166b766fbac067e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_049c932f44a14d0b6e5613ca8ca1eee94499f4120e2e4eb6166b766fbac067e7->enter($__internal_049c932f44a14d0b6e5613ca8ca1eee94499f4120e2e4eb6166b766fbac067e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil de la gestion des stocks";
        
        $__internal_049c932f44a14d0b6e5613ca8ca1eee94499f4120e2e4eb6166b766fbac067e7->leave($__internal_049c932f44a14d0b6e5613ca8ca1eee94499f4120e2e4eb6166b766fbac067e7_prof);

        
        $__internal_b35649c75968c87973009342cb3f68b93a499a88d1f68903ddc917e6855222b3->leave($__internal_b35649c75968c87973009342cb3f68b93a499a88d1f68903ddc917e6855222b3_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ea6a40e5266dfaee45e36474ae6e0119a1be70c37ead68753e933f991906034a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea6a40e5266dfaee45e36474ae6e0119a1be70c37ead68753e933f991906034a->enter($__internal_ea6a40e5266dfaee45e36474ae6e0119a1be70c37ead68753e933f991906034a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0e01a3d1dc7bf47e6a8aa6ea5979d660210e75e218cf33b2f6a9ead6eb32368e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e01a3d1dc7bf47e6a8aa6ea5979d660210e75e218cf33b2f6a9ead6eb32368e->enter($__internal_0e01a3d1dc7bf47e6a8aa6ea5979d660210e75e218cf33b2f6a9ead6eb32368e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
";
        
        $__internal_0e01a3d1dc7bf47e6a8aa6ea5979d660210e75e218cf33b2f6a9ead6eb32368e->leave($__internal_0e01a3d1dc7bf47e6a8aa6ea5979d660210e75e218cf33b2f6a9ead6eb32368e_prof);

        
        $__internal_ea6a40e5266dfaee45e36474ae6e0119a1be70c37ead68753e933f991906034a->leave($__internal_ea6a40e5266dfaee45e36474ae6e0119a1be70c37ead68753e933f991906034a_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_f82ee3595a86ec651136ca8a0e18367a4fcce3c57cadf35e328881a90809a7de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f82ee3595a86ec651136ca8a0e18367a4fcce3c57cadf35e328881a90809a7de->enter($__internal_f82ee3595a86ec651136ca8a0e18367a4fcce3c57cadf35e328881a90809a7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f5bd5be0acf3ad38b9e4f9d59d43be71c342f508bf73139207646f49279e0cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5bd5be0acf3ad38b9e4f9d59d43be71c342f508bf73139207646f49279e0cc6->enter($__internal_f5bd5be0acf3ad38b9e4f9d59d43be71c342f508bf73139207646f49279e0cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f5bd5be0acf3ad38b9e4f9d59d43be71c342f508bf73139207646f49279e0cc6->leave($__internal_f5bd5be0acf3ad38b9e4f9d59d43be71c342f508bf73139207646f49279e0cc6_prof);

        
        $__internal_f82ee3595a86ec651136ca8a0e18367a4fcce3c57cadf35e328881a90809a7de->leave($__internal_f82ee3595a86ec651136ca8a0e18367a4fcce3c57cadf35e328881a90809a7de_prof);

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
", "StockBundle:Default:acceuilstock.html.twig", "/home/kevin/Dropbox/ProjetPtsCoiffeur/src/StockBundle/Resources/views/Default/acceuilstock.html.twig");
    }
}
