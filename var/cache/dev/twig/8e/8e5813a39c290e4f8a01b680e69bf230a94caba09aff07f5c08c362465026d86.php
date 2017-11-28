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
        $__internal_662f3cca1b28cb85e30e6af60410b450b92cde72390251841af46ef908ca41ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_662f3cca1b28cb85e30e6af60410b450b92cde72390251841af46ef908ca41ee->enter($__internal_662f3cca1b28cb85e30e6af60410b450b92cde72390251841af46ef908ca41ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:acceuilstock.html.twig"));

        $__internal_4cdaa91e2e4a4df1ad11ce0788f396e1702035ad9078111086adda9ccb4a7eee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cdaa91e2e4a4df1ad11ce0788f396e1702035ad9078111086adda9ccb4a7eee->enter($__internal_4cdaa91e2e4a4df1ad11ce0788f396e1702035ad9078111086adda9ccb4a7eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:acceuilstock.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_662f3cca1b28cb85e30e6af60410b450b92cde72390251841af46ef908ca41ee->leave($__internal_662f3cca1b28cb85e30e6af60410b450b92cde72390251841af46ef908ca41ee_prof);

        
        $__internal_4cdaa91e2e4a4df1ad11ce0788f396e1702035ad9078111086adda9ccb4a7eee->leave($__internal_4cdaa91e2e4a4df1ad11ce0788f396e1702035ad9078111086adda9ccb4a7eee_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_42ada3f988e4a286a0e83fed906981265647ff5cb50b49e0c667003ff81117cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42ada3f988e4a286a0e83fed906981265647ff5cb50b49e0c667003ff81117cf->enter($__internal_42ada3f988e4a286a0e83fed906981265647ff5cb50b49e0c667003ff81117cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_07dab92691321184b8e7d3a6249bb751dad5c225aca580c14ad4044fd1a02f85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07dab92691321184b8e7d3a6249bb751dad5c225aca580c14ad4044fd1a02f85->enter($__internal_07dab92691321184b8e7d3a6249bb751dad5c225aca580c14ad4044fd1a02f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil de la gestion des stocks";
        
        $__internal_07dab92691321184b8e7d3a6249bb751dad5c225aca580c14ad4044fd1a02f85->leave($__internal_07dab92691321184b8e7d3a6249bb751dad5c225aca580c14ad4044fd1a02f85_prof);

        
        $__internal_42ada3f988e4a286a0e83fed906981265647ff5cb50b49e0c667003ff81117cf->leave($__internal_42ada3f988e4a286a0e83fed906981265647ff5cb50b49e0c667003ff81117cf_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_06314ab003e12c9c7ffadeae502ccf50de6be72e62d9f4ceca35b7dbb779ac25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06314ab003e12c9c7ffadeae502ccf50de6be72e62d9f4ceca35b7dbb779ac25->enter($__internal_06314ab003e12c9c7ffadeae502ccf50de6be72e62d9f4ceca35b7dbb779ac25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e5eea18c5acc9300d992b457708f5be1c86d8ea3140da125e26bf585bca91060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5eea18c5acc9300d992b457708f5be1c86d8ea3140da125e26bf585bca91060->enter($__internal_e5eea18c5acc9300d992b457708f5be1c86d8ea3140da125e26bf585bca91060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
";
        
        $__internal_e5eea18c5acc9300d992b457708f5be1c86d8ea3140da125e26bf585bca91060->leave($__internal_e5eea18c5acc9300d992b457708f5be1c86d8ea3140da125e26bf585bca91060_prof);

        
        $__internal_06314ab003e12c9c7ffadeae502ccf50de6be72e62d9f4ceca35b7dbb779ac25->leave($__internal_06314ab003e12c9c7ffadeae502ccf50de6be72e62d9f4ceca35b7dbb779ac25_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_29e46a085053eb89890af05d136e4b89481530e4b36fcde44038bc293781d6c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29e46a085053eb89890af05d136e4b89481530e4b36fcde44038bc293781d6c0->enter($__internal_29e46a085053eb89890af05d136e4b89481530e4b36fcde44038bc293781d6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_534d11a0d0bdef0c6752b93e64f7743ec9d404fa183061cbf1a29636b870bae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_534d11a0d0bdef0c6752b93e64f7743ec9d404fa183061cbf1a29636b870bae3->enter($__internal_534d11a0d0bdef0c6752b93e64f7743ec9d404fa183061cbf1a29636b870bae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_534d11a0d0bdef0c6752b93e64f7743ec9d404fa183061cbf1a29636b870bae3->leave($__internal_534d11a0d0bdef0c6752b93e64f7743ec9d404fa183061cbf1a29636b870bae3_prof);

        
        $__internal_29e46a085053eb89890af05d136e4b89481530e4b36fcde44038bc293781d6c0->leave($__internal_29e46a085053eb89890af05d136e4b89481530e4b36fcde44038bc293781d6c0_prof);

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
", "StockBundle:Default:acceuilstock.html.twig", "/home/kevin/Dropbox/ProjetPtsCoiffeur/src/StockBundle/Resources/views/Default/acceuilstock.html.twig");
    }
}
