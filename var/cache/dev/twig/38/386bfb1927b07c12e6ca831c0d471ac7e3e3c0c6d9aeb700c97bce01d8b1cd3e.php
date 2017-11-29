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
        $__internal_fc9e81d9f8a7f0e677f89fe2b83f4fa8cfc3b0fee016590d9689580e56b54bca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc9e81d9f8a7f0e677f89fe2b83f4fa8cfc3b0fee016590d9689580e56b54bca->enter($__internal_fc9e81d9f8a7f0e677f89fe2b83f4fa8cfc3b0fee016590d9689580e56b54bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:acceuilstock.html.twig"));

        $__internal_1eef29f79f6c2c06b9eb43a981d02e1b7f19cf8c5dc01eea0713f383f232e9c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eef29f79f6c2c06b9eb43a981d02e1b7f19cf8c5dc01eea0713f383f232e9c0->enter($__internal_1eef29f79f6c2c06b9eb43a981d02e1b7f19cf8c5dc01eea0713f383f232e9c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:acceuilstock.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc9e81d9f8a7f0e677f89fe2b83f4fa8cfc3b0fee016590d9689580e56b54bca->leave($__internal_fc9e81d9f8a7f0e677f89fe2b83f4fa8cfc3b0fee016590d9689580e56b54bca_prof);

        
        $__internal_1eef29f79f6c2c06b9eb43a981d02e1b7f19cf8c5dc01eea0713f383f232e9c0->leave($__internal_1eef29f79f6c2c06b9eb43a981d02e1b7f19cf8c5dc01eea0713f383f232e9c0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_70b8db01629728a7fd9812b7feef02e8dd042abae4863510469e95c8bafed097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70b8db01629728a7fd9812b7feef02e8dd042abae4863510469e95c8bafed097->enter($__internal_70b8db01629728a7fd9812b7feef02e8dd042abae4863510469e95c8bafed097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f7972b37d066fe4bef139c4da7ed32548a5c9afdcbc2d4ac354ae87f1c09f079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7972b37d066fe4bef139c4da7ed32548a5c9afdcbc2d4ac354ae87f1c09f079->enter($__internal_f7972b37d066fe4bef139c4da7ed32548a5c9afdcbc2d4ac354ae87f1c09f079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil de la gestion des stocks";
        
        $__internal_f7972b37d066fe4bef139c4da7ed32548a5c9afdcbc2d4ac354ae87f1c09f079->leave($__internal_f7972b37d066fe4bef139c4da7ed32548a5c9afdcbc2d4ac354ae87f1c09f079_prof);

        
        $__internal_70b8db01629728a7fd9812b7feef02e8dd042abae4863510469e95c8bafed097->leave($__internal_70b8db01629728a7fd9812b7feef02e8dd042abae4863510469e95c8bafed097_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_acad36cc36f5679af19f13d5e4e169d8e0f5022cf45bd3ed7e127eabe919152d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acad36cc36f5679af19f13d5e4e169d8e0f5022cf45bd3ed7e127eabe919152d->enter($__internal_acad36cc36f5679af19f13d5e4e169d8e0f5022cf45bd3ed7e127eabe919152d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_68920e866c970ecde4d1ffcf95270a0a8e20258aff70add640f340dfc50136c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68920e866c970ecde4d1ffcf95270a0a8e20258aff70add640f340dfc50136c7->enter($__internal_68920e866c970ecde4d1ffcf95270a0a8e20258aff70add640f340dfc50136c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
";
        
        $__internal_68920e866c970ecde4d1ffcf95270a0a8e20258aff70add640f340dfc50136c7->leave($__internal_68920e866c970ecde4d1ffcf95270a0a8e20258aff70add640f340dfc50136c7_prof);

        
        $__internal_acad36cc36f5679af19f13d5e4e169d8e0f5022cf45bd3ed7e127eabe919152d->leave($__internal_acad36cc36f5679af19f13d5e4e169d8e0f5022cf45bd3ed7e127eabe919152d_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_237255a9d5d63ff2e0a066ec8919e4c082eaa3e8d5cb74dfcfc50984d6e5307d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_237255a9d5d63ff2e0a066ec8919e4c082eaa3e8d5cb74dfcfc50984d6e5307d->enter($__internal_237255a9d5d63ff2e0a066ec8919e4c082eaa3e8d5cb74dfcfc50984d6e5307d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2acc8a5c599090420e9b22019518ed417bf55e893e085d6c5e71fa4f5296005e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2acc8a5c599090420e9b22019518ed417bf55e893e085d6c5e71fa4f5296005e->enter($__internal_2acc8a5c599090420e9b22019518ed417bf55e893e085d6c5e71fa4f5296005e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2acc8a5c599090420e9b22019518ed417bf55e893e085d6c5e71fa4f5296005e->leave($__internal_2acc8a5c599090420e9b22019518ed417bf55e893e085d6c5e71fa4f5296005e_prof);

        
        $__internal_237255a9d5d63ff2e0a066ec8919e4c082eaa3e8d5cb74dfcfc50984d6e5307d->leave($__internal_237255a9d5d63ff2e0a066ec8919e4c082eaa3e8d5cb74dfcfc50984d6e5307d_prof);

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
", "StockBundle:Default:acceuilstock.html.twig", "D:\\wamp\\www\\ProjetPtsCoiffeur\\src\\StockBundle/Resources/views/Default/acceuilstock.html.twig");
    }
}
