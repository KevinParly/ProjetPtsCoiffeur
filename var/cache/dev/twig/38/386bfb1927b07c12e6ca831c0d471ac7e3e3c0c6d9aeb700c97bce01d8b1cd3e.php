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
        $__internal_6fafe9e21e7021c0d4c97142e15dffd790bbb1c458426ef64ec1b98577ea5e54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fafe9e21e7021c0d4c97142e15dffd790bbb1c458426ef64ec1b98577ea5e54->enter($__internal_6fafe9e21e7021c0d4c97142e15dffd790bbb1c458426ef64ec1b98577ea5e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:acceuilstock.html.twig"));

        $__internal_773972f4b340597cf32291f60383583d1fe862d3093c439bc861d33947d3ccc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_773972f4b340597cf32291f60383583d1fe862d3093c439bc861d33947d3ccc7->enter($__internal_773972f4b340597cf32291f60383583d1fe862d3093c439bc861d33947d3ccc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:acceuilstock.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fafe9e21e7021c0d4c97142e15dffd790bbb1c458426ef64ec1b98577ea5e54->leave($__internal_6fafe9e21e7021c0d4c97142e15dffd790bbb1c458426ef64ec1b98577ea5e54_prof);

        
        $__internal_773972f4b340597cf32291f60383583d1fe862d3093c439bc861d33947d3ccc7->leave($__internal_773972f4b340597cf32291f60383583d1fe862d3093c439bc861d33947d3ccc7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9575a7725b8fc9cf8e382a0e74e4feb12f13d77a4f1736cd2975922fcab1e981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9575a7725b8fc9cf8e382a0e74e4feb12f13d77a4f1736cd2975922fcab1e981->enter($__internal_9575a7725b8fc9cf8e382a0e74e4feb12f13d77a4f1736cd2975922fcab1e981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_17449b8d4a2fe79c823b9eccc1140b842fcd7dcd2c4573492908825d311f6223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17449b8d4a2fe79c823b9eccc1140b842fcd7dcd2c4573492908825d311f6223->enter($__internal_17449b8d4a2fe79c823b9eccc1140b842fcd7dcd2c4573492908825d311f6223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil de la gestion des stocks";
        
        $__internal_17449b8d4a2fe79c823b9eccc1140b842fcd7dcd2c4573492908825d311f6223->leave($__internal_17449b8d4a2fe79c823b9eccc1140b842fcd7dcd2c4573492908825d311f6223_prof);

        
        $__internal_9575a7725b8fc9cf8e382a0e74e4feb12f13d77a4f1736cd2975922fcab1e981->leave($__internal_9575a7725b8fc9cf8e382a0e74e4feb12f13d77a4f1736cd2975922fcab1e981_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_38e2ae95f87c455c0e3296314e1c6aae58c2bdf4256c6acce7c1e71c5d164592 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38e2ae95f87c455c0e3296314e1c6aae58c2bdf4256c6acce7c1e71c5d164592->enter($__internal_38e2ae95f87c455c0e3296314e1c6aae58c2bdf4256c6acce7c1e71c5d164592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_879e1734de1608d4f815b23b8a7319460cadd4f7eb4c2730505c9d18a083a438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_879e1734de1608d4f815b23b8a7319460cadd4f7eb4c2730505c9d18a083a438->enter($__internal_879e1734de1608d4f815b23b8a7319460cadd4f7eb4c2730505c9d18a083a438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
";
        
        $__internal_879e1734de1608d4f815b23b8a7319460cadd4f7eb4c2730505c9d18a083a438->leave($__internal_879e1734de1608d4f815b23b8a7319460cadd4f7eb4c2730505c9d18a083a438_prof);

        
        $__internal_38e2ae95f87c455c0e3296314e1c6aae58c2bdf4256c6acce7c1e71c5d164592->leave($__internal_38e2ae95f87c455c0e3296314e1c6aae58c2bdf4256c6acce7c1e71c5d164592_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c095a677fae38f4f4c36dc03a4a6dc91ea33c69bb2f2ec4f0d378979fd9afc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c095a677fae38f4f4c36dc03a4a6dc91ea33c69bb2f2ec4f0d378979fd9afc8->enter($__internal_0c095a677fae38f4f4c36dc03a4a6dc91ea33c69bb2f2ec4f0d378979fd9afc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_26b168320ae49ba217ffa50f25f9c4f33f0d7b0997f2bba90f5132eb4cdfbcb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b168320ae49ba217ffa50f25f9c4f33f0d7b0997f2bba90f5132eb4cdfbcb7->enter($__internal_26b168320ae49ba217ffa50f25f9c4f33f0d7b0997f2bba90f5132eb4cdfbcb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_26b168320ae49ba217ffa50f25f9c4f33f0d7b0997f2bba90f5132eb4cdfbcb7->leave($__internal_26b168320ae49ba217ffa50f25f9c4f33f0d7b0997f2bba90f5132eb4cdfbcb7_prof);

        
        $__internal_0c095a677fae38f4f4c36dc03a4a6dc91ea33c69bb2f2ec4f0d378979fd9afc8->leave($__internal_0c095a677fae38f4f4c36dc03a4a6dc91ea33c69bb2f2ec4f0d378979fd9afc8_prof);

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
", "StockBundle:Default:acceuilstock.html.twig", "D:\\wamp\\www\\ProjetPtsCoiffeur\\src\\StockBundle/Resources/views/Default/acceuilstock.html.twig");
    }
}
