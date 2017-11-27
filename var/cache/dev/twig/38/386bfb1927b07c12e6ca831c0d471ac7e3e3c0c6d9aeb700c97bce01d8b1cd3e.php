<?php

/* StockBundle:Default:acceuilstock.html.twig */
class __TwigTemplate_a5b87b82f363fe8e903e9fcbf3f1df62f36906f6a021e8d4f4ed499f684ea2f3 extends Twig_Template
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
        $__internal_a5f8b3c5642737c92788618d5d849bcdfbc3dee284fd391d9d758b8ec2a14ab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5f8b3c5642737c92788618d5d849bcdfbc3dee284fd391d9d758b8ec2a14ab6->enter($__internal_a5f8b3c5642737c92788618d5d849bcdfbc3dee284fd391d9d758b8ec2a14ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:acceuilstock.html.twig"));

        $__internal_fc0fdf857efba1f7340beed3ae56ff19ae983eb10c90e59410148f10ccd767f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc0fdf857efba1f7340beed3ae56ff19ae983eb10c90e59410148f10ccd767f9->enter($__internal_fc0fdf857efba1f7340beed3ae56ff19ae983eb10c90e59410148f10ccd767f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:acceuilstock.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5f8b3c5642737c92788618d5d849bcdfbc3dee284fd391d9d758b8ec2a14ab6->leave($__internal_a5f8b3c5642737c92788618d5d849bcdfbc3dee284fd391d9d758b8ec2a14ab6_prof);

        
        $__internal_fc0fdf857efba1f7340beed3ae56ff19ae983eb10c90e59410148f10ccd767f9->leave($__internal_fc0fdf857efba1f7340beed3ae56ff19ae983eb10c90e59410148f10ccd767f9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8f4c10e5f7cb217b983823e482f81d62b572e380b251389ac2f9d739a9c9152 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8f4c10e5f7cb217b983823e482f81d62b572e380b251389ac2f9d739a9c9152->enter($__internal_a8f4c10e5f7cb217b983823e482f81d62b572e380b251389ac2f9d739a9c9152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f125f91d9e5f458d4012448c27fb51319ad9baeec4f99949f0b81d1f28df0c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f125f91d9e5f458d4012448c27fb51319ad9baeec4f99949f0b81d1f28df0c8a->enter($__internal_f125f91d9e5f458d4012448c27fb51319ad9baeec4f99949f0b81d1f28df0c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil de la gestion des stocks";
        
        $__internal_f125f91d9e5f458d4012448c27fb51319ad9baeec4f99949f0b81d1f28df0c8a->leave($__internal_f125f91d9e5f458d4012448c27fb51319ad9baeec4f99949f0b81d1f28df0c8a_prof);

        
        $__internal_a8f4c10e5f7cb217b983823e482f81d62b572e380b251389ac2f9d739a9c9152->leave($__internal_a8f4c10e5f7cb217b983823e482f81d62b572e380b251389ac2f9d739a9c9152_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f03e527a9eeb080ae732f5676f8b7f9ea73d8e5db4decaa87f21680bbaa7c05a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f03e527a9eeb080ae732f5676f8b7f9ea73d8e5db4decaa87f21680bbaa7c05a->enter($__internal_f03e527a9eeb080ae732f5676f8b7f9ea73d8e5db4decaa87f21680bbaa7c05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8daf08b22249ff4ece62aa00af13319b6f2a5521677728afbeedc3a6bfe9d46d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8daf08b22249ff4ece62aa00af13319b6f2a5521677728afbeedc3a6bfe9d46d->enter($__internal_8daf08b22249ff4ece62aa00af13319b6f2a5521677728afbeedc3a6bfe9d46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
";
        
        $__internal_8daf08b22249ff4ece62aa00af13319b6f2a5521677728afbeedc3a6bfe9d46d->leave($__internal_8daf08b22249ff4ece62aa00af13319b6f2a5521677728afbeedc3a6bfe9d46d_prof);

        
        $__internal_f03e527a9eeb080ae732f5676f8b7f9ea73d8e5db4decaa87f21680bbaa7c05a->leave($__internal_f03e527a9eeb080ae732f5676f8b7f9ea73d8e5db4decaa87f21680bbaa7c05a_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_80d3000914ced47bd32b311b03b563ebdc3cd29c41b5061282ee8a91e2b8b739 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80d3000914ced47bd32b311b03b563ebdc3cd29c41b5061282ee8a91e2b8b739->enter($__internal_80d3000914ced47bd32b311b03b563ebdc3cd29c41b5061282ee8a91e2b8b739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ffa93d8edec735ecf7043f7d0a70d2277209baf310e25206e4fba3ecdefbfb31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffa93d8edec735ecf7043f7d0a70d2277209baf310e25206e4fba3ecdefbfb31->enter($__internal_ffa93d8edec735ecf7043f7d0a70d2277209baf310e25206e4fba3ecdefbfb31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ffa93d8edec735ecf7043f7d0a70d2277209baf310e25206e4fba3ecdefbfb31->leave($__internal_ffa93d8edec735ecf7043f7d0a70d2277209baf310e25206e4fba3ecdefbfb31_prof);

        
        $__internal_80d3000914ced47bd32b311b03b563ebdc3cd29c41b5061282ee8a91e2b8b739->leave($__internal_80d3000914ced47bd32b311b03b563ebdc3cd29c41b5061282ee8a91e2b8b739_prof);

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
", "StockBundle:Default:acceuilstock.html.twig", "D:\\wamp\\www\\ProjetPtsCoiffeur\\src\\StockBundle/Resources/views/Default/acceuilstock.html.twig");
    }
}
