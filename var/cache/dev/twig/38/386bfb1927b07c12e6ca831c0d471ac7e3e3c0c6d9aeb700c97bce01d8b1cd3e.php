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
        $__internal_e9bde89af2f7312eeed2518c0ef8123233ae2195bed1a29b053edd79ac558015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9bde89af2f7312eeed2518c0ef8123233ae2195bed1a29b053edd79ac558015->enter($__internal_e9bde89af2f7312eeed2518c0ef8123233ae2195bed1a29b053edd79ac558015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:acceuilstock.html.twig"));

        $__internal_2f5de07f7481c2fdda4ab22515c54781875fcbe03489b0117a27189ccb6cb0a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5de07f7481c2fdda4ab22515c54781875fcbe03489b0117a27189ccb6cb0a7->enter($__internal_2f5de07f7481c2fdda4ab22515c54781875fcbe03489b0117a27189ccb6cb0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:acceuilstock.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9bde89af2f7312eeed2518c0ef8123233ae2195bed1a29b053edd79ac558015->leave($__internal_e9bde89af2f7312eeed2518c0ef8123233ae2195bed1a29b053edd79ac558015_prof);

        
        $__internal_2f5de07f7481c2fdda4ab22515c54781875fcbe03489b0117a27189ccb6cb0a7->leave($__internal_2f5de07f7481c2fdda4ab22515c54781875fcbe03489b0117a27189ccb6cb0a7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f78c9d602441f393dfb73dba2945a59a328d07546bbe6a54cbbf2a7b7ebe9b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f78c9d602441f393dfb73dba2945a59a328d07546bbe6a54cbbf2a7b7ebe9b9->enter($__internal_8f78c9d602441f393dfb73dba2945a59a328d07546bbe6a54cbbf2a7b7ebe9b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0af1aa5edd790a5d600fcbc29bcbf5055765b788d95db45c21cf55b9a8055a05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0af1aa5edd790a5d600fcbc29bcbf5055765b788d95db45c21cf55b9a8055a05->enter($__internal_0af1aa5edd790a5d600fcbc29bcbf5055765b788d95db45c21cf55b9a8055a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil de la gestion des stocks";
        
        $__internal_0af1aa5edd790a5d600fcbc29bcbf5055765b788d95db45c21cf55b9a8055a05->leave($__internal_0af1aa5edd790a5d600fcbc29bcbf5055765b788d95db45c21cf55b9a8055a05_prof);

        
        $__internal_8f78c9d602441f393dfb73dba2945a59a328d07546bbe6a54cbbf2a7b7ebe9b9->leave($__internal_8f78c9d602441f393dfb73dba2945a59a328d07546bbe6a54cbbf2a7b7ebe9b9_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9e88b3edf0e2b3fbb37c6969cdc57189edbfc9abeb7b80b0f011a6faf962317d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e88b3edf0e2b3fbb37c6969cdc57189edbfc9abeb7b80b0f011a6faf962317d->enter($__internal_9e88b3edf0e2b3fbb37c6969cdc57189edbfc9abeb7b80b0f011a6faf962317d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4452c6edbe4f3d611a909b8838fef4fb1fa32041a3f7ea05314867bdaa064508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4452c6edbe4f3d611a909b8838fef4fb1fa32041a3f7ea05314867bdaa064508->enter($__internal_4452c6edbe4f3d611a909b8838fef4fb1fa32041a3f7ea05314867bdaa064508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
";
        
        $__internal_4452c6edbe4f3d611a909b8838fef4fb1fa32041a3f7ea05314867bdaa064508->leave($__internal_4452c6edbe4f3d611a909b8838fef4fb1fa32041a3f7ea05314867bdaa064508_prof);

        
        $__internal_9e88b3edf0e2b3fbb37c6969cdc57189edbfc9abeb7b80b0f011a6faf962317d->leave($__internal_9e88b3edf0e2b3fbb37c6969cdc57189edbfc9abeb7b80b0f011a6faf962317d_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_c135105f64085e0e4e5e314ae2cf165250cfb3f23ed715f6a85b7c283062fe4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c135105f64085e0e4e5e314ae2cf165250cfb3f23ed715f6a85b7c283062fe4b->enter($__internal_c135105f64085e0e4e5e314ae2cf165250cfb3f23ed715f6a85b7c283062fe4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de1f76157af51caccf73ff119d9a1bb9231c4236092cf60eaf1e63889e69ec41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de1f76157af51caccf73ff119d9a1bb9231c4236092cf60eaf1e63889e69ec41->enter($__internal_de1f76157af51caccf73ff119d9a1bb9231c4236092cf60eaf1e63889e69ec41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_de1f76157af51caccf73ff119d9a1bb9231c4236092cf60eaf1e63889e69ec41->leave($__internal_de1f76157af51caccf73ff119d9a1bb9231c4236092cf60eaf1e63889e69ec41_prof);

        
        $__internal_c135105f64085e0e4e5e314ae2cf165250cfb3f23ed715f6a85b7c283062fe4b->leave($__internal_c135105f64085e0e4e5e314ae2cf165250cfb3f23ed715f6a85b7c283062fe4b_prof);

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
