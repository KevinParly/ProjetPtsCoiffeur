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
        $__internal_b140768682f6f09fbe0b3aebcae4bc4fd4d5a4ef5cec59ed83f000ef02abba28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b140768682f6f09fbe0b3aebcae4bc4fd4d5a4ef5cec59ed83f000ef02abba28->enter($__internal_b140768682f6f09fbe0b3aebcae4bc4fd4d5a4ef5cec59ed83f000ef02abba28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:acceuilstock.html.twig"));

        $__internal_e331342f5e904018702972cbcfda2f0722c436a38efc95adeac3abbb36bd2a28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e331342f5e904018702972cbcfda2f0722c436a38efc95adeac3abbb36bd2a28->enter($__internal_e331342f5e904018702972cbcfda2f0722c436a38efc95adeac3abbb36bd2a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:acceuilstock.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b140768682f6f09fbe0b3aebcae4bc4fd4d5a4ef5cec59ed83f000ef02abba28->leave($__internal_b140768682f6f09fbe0b3aebcae4bc4fd4d5a4ef5cec59ed83f000ef02abba28_prof);

        
        $__internal_e331342f5e904018702972cbcfda2f0722c436a38efc95adeac3abbb36bd2a28->leave($__internal_e331342f5e904018702972cbcfda2f0722c436a38efc95adeac3abbb36bd2a28_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5dcfb80485bd662fdde2f5299f8a444154c975d1f2547e7ccc06b175cacad45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5dcfb80485bd662fdde2f5299f8a444154c975d1f2547e7ccc06b175cacad45->enter($__internal_a5dcfb80485bd662fdde2f5299f8a444154c975d1f2547e7ccc06b175cacad45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4474fce77b7d08d7864f221a7b4bf3d36b04995d3a697e194c8e91124bcfe939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4474fce77b7d08d7864f221a7b4bf3d36b04995d3a697e194c8e91124bcfe939->enter($__internal_4474fce77b7d08d7864f221a7b4bf3d36b04995d3a697e194c8e91124bcfe939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil de la gestion des stocks";
        
        $__internal_4474fce77b7d08d7864f221a7b4bf3d36b04995d3a697e194c8e91124bcfe939->leave($__internal_4474fce77b7d08d7864f221a7b4bf3d36b04995d3a697e194c8e91124bcfe939_prof);

        
        $__internal_a5dcfb80485bd662fdde2f5299f8a444154c975d1f2547e7ccc06b175cacad45->leave($__internal_a5dcfb80485bd662fdde2f5299f8a444154c975d1f2547e7ccc06b175cacad45_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9308c2ba87797bcc586c56b8e9c8da2e22d805e43e2b7a9a5dbd93798d1c77b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9308c2ba87797bcc586c56b8e9c8da2e22d805e43e2b7a9a5dbd93798d1c77b8->enter($__internal_9308c2ba87797bcc586c56b8e9c8da2e22d805e43e2b7a9a5dbd93798d1c77b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e03a7230769a01c9e0b5b84da58db25f100a4a9d96e6bd5381611f7a47a6cefe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e03a7230769a01c9e0b5b84da58db25f100a4a9d96e6bd5381611f7a47a6cefe->enter($__internal_e03a7230769a01c9e0b5b84da58db25f100a4a9d96e6bd5381611f7a47a6cefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
";
        
        $__internal_e03a7230769a01c9e0b5b84da58db25f100a4a9d96e6bd5381611f7a47a6cefe->leave($__internal_e03a7230769a01c9e0b5b84da58db25f100a4a9d96e6bd5381611f7a47a6cefe_prof);

        
        $__internal_9308c2ba87797bcc586c56b8e9c8da2e22d805e43e2b7a9a5dbd93798d1c77b8->leave($__internal_9308c2ba87797bcc586c56b8e9c8da2e22d805e43e2b7a9a5dbd93798d1c77b8_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_38d069242f84529498333f2443c01bdf6e9b03264e4659af03d29c0b294256c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38d069242f84529498333f2443c01bdf6e9b03264e4659af03d29c0b294256c4->enter($__internal_38d069242f84529498333f2443c01bdf6e9b03264e4659af03d29c0b294256c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_863b81ca369e3682bce019b1e8f1e034b999d05e8ef20a8aac245211b35cadc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_863b81ca369e3682bce019b1e8f1e034b999d05e8ef20a8aac245211b35cadc0->enter($__internal_863b81ca369e3682bce019b1e8f1e034b999d05e8ef20a8aac245211b35cadc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <h1>Bienvenue sur l'acceuil de gestion des stocks</h1>
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
      <button type=\"button\">Ajouter une livraisons</button>
      <button type=\"button\">Afficher les couleurs</button>
";
        
        $__internal_863b81ca369e3682bce019b1e8f1e034b999d05e8ef20a8aac245211b35cadc0->leave($__internal_863b81ca369e3682bce019b1e8f1e034b999d05e8ef20a8aac245211b35cadc0_prof);

        
        $__internal_38d069242f84529498333f2443c01bdf6e9b03264e4659af03d29c0b294256c4->leave($__internal_38d069242f84529498333f2443c01bdf6e9b03264e4659af03d29c0b294256c4_prof);

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
    <h1>Bienvenue sur l'acceuil de gestion des stocks</h1>
      <a href={{ path('ajoutproduit') }}>
        <button type=\"button\">Ajouter un produit</button>
      </a>
      <a href={{ path('listproduitmodif') }}>
        <button type=\"button\">Modifier un produit</button>
      </a>
      <button type=\"button\">Afficher la liste des produits</button>
      <button type=\"button\">Ajouter une livraisons</button>
      <button type=\"button\">Afficher les couleurs</button>
{% endblock %}
", "StockBundle:Default:acceuilstock.html.twig", "/home/kevin/Dropbox/PTS3/ProjetPtsCoiffeur/src/StockBundle/Resources/views/Default/acceuilstock.html.twig");
    }
}
