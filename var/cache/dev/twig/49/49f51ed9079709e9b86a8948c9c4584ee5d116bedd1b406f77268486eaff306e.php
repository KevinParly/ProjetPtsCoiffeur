<?php

/* FrontBundle:Default:accueil.html.twig */
class __TwigTemplate_6a58fe3bd2cefec4e0981659a23f8933b118591bcebbf56778393b396ad31396 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:Default:accueil.html.twig", 1);
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
        $__internal_7199869931d15d5ea49c13d83747cb3c0e20f97a8c930da014cb3f45803ee919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7199869931d15d5ea49c13d83747cb3c0e20f97a8c930da014cb3f45803ee919->enter($__internal_7199869931d15d5ea49c13d83747cb3c0e20f97a8c930da014cb3f45803ee919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:accueil.html.twig"));

        $__internal_af32ce64aacb0426ef4f97db160b9ace0608b4868b79a7475bbb71215bfe867f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af32ce64aacb0426ef4f97db160b9ace0608b4868b79a7475bbb71215bfe867f->enter($__internal_af32ce64aacb0426ef4f97db160b9ace0608b4868b79a7475bbb71215bfe867f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7199869931d15d5ea49c13d83747cb3c0e20f97a8c930da014cb3f45803ee919->leave($__internal_7199869931d15d5ea49c13d83747cb3c0e20f97a8c930da014cb3f45803ee919_prof);

        
        $__internal_af32ce64aacb0426ef4f97db160b9ace0608b4868b79a7475bbb71215bfe867f->leave($__internal_af32ce64aacb0426ef4f97db160b9ace0608b4868b79a7475bbb71215bfe867f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9aecd66cd5230a87add89eb00ae5679271f1c28e4cb7308cd373f3bbd94f143 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9aecd66cd5230a87add89eb00ae5679271f1c28e4cb7308cd373f3bbd94f143->enter($__internal_a9aecd66cd5230a87add89eb00ae5679271f1c28e4cb7308cd373f3bbd94f143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_17a5772816f10ac7f508eccc019b52dd50691621bf010e85208b05d7ab7b6894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17a5772816f10ac7f508eccc019b52dd50691621bf010e85208b05d7ab7b6894->enter($__internal_17a5772816f10ac7f508eccc019b52dd50691621bf010e85208b05d7ab7b6894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_17a5772816f10ac7f508eccc019b52dd50691621bf010e85208b05d7ab7b6894->leave($__internal_17a5772816f10ac7f508eccc019b52dd50691621bf010e85208b05d7ab7b6894_prof);

        
        $__internal_a9aecd66cd5230a87add89eb00ae5679271f1c28e4cb7308cd373f3bbd94f143->leave($__internal_a9aecd66cd5230a87add89eb00ae5679271f1c28e4cb7308cd373f3bbd94f143_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d7c165826a84d77d2f9c1c8539d0cb25ef60531a245b38ab26f23f79fadccc52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7c165826a84d77d2f9c1c8539d0cb25ef60531a245b38ab26f23f79fadccc52->enter($__internal_d7c165826a84d77d2f9c1c8539d0cb25ef60531a245b38ab26f23f79fadccc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1e48c7fa7c86b2b3db276a924c687d493538f18d7f5e8af25077edfa27577654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e48c7fa7c86b2b3db276a924c687d493538f18d7f5e8af25077edfa27577654->enter($__internal_1e48c7fa7c86b2b3db276a924c687d493538f18d7f5e8af25077edfa27577654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "<link rel=\"stylesheet\" href=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/style.css"), "html", null, true);
        echo ">
";
        
        $__internal_1e48c7fa7c86b2b3db276a924c687d493538f18d7f5e8af25077edfa27577654->leave($__internal_1e48c7fa7c86b2b3db276a924c687d493538f18d7f5e8af25077edfa27577654_prof);

        
        $__internal_d7c165826a84d77d2f9c1c8539d0cb25ef60531a245b38ab26f23f79fadccc52->leave($__internal_d7c165826a84d77d2f9c1c8539d0cb25ef60531a245b38ab26f23f79fadccc52_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_a283f86dc5982e7c8bcf4407b40c511d223a5c0c2773f1994c57f82e7f01160b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a283f86dc5982e7c8bcf4407b40c511d223a5c0c2773f1994c57f82e7f01160b->enter($__internal_a283f86dc5982e7c8bcf4407b40c511d223a5c0c2773f1994c57f82e7f01160b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_25733f29f9bf881f721087a06a9f995babb751c42dff6d3c5fe3380643b1316e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25733f29f9bf881f721087a06a9f995babb751c42dff6d3c5fe3380643b1316e->enter($__internal_25733f29f9bf881f721087a06a9f995babb751c42dff6d3c5fe3380643b1316e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Bienvenue sur l'accueil de l'application</h1>
  <a href=";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueilstock");
        echo ">
      <button type=\"button\">Stocks</button>
  </a>
  <button type=\"button\">Clients</button>
  <button type=\"button\">Factures</button>
";
        
        $__internal_25733f29f9bf881f721087a06a9f995babb751c42dff6d3c5fe3380643b1316e->leave($__internal_25733f29f9bf881f721087a06a9f995babb751c42dff6d3c5fe3380643b1316e_prof);

        
        $__internal_a283f86dc5982e7c8bcf4407b40c511d223a5c0c2773f1994c57f82e7f01160b->leave($__internal_a283f86dc5982e7c8bcf4407b40c511d223a5c0c2773f1994c57f82e7f01160b_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 9,  91 => 8,  82 => 7,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
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

{% block title %}Accueil{% endblock %}
{% block stylesheets %}
<link rel=\"stylesheet\" href={{ asset('/css/style.css') }}>
{% endblock %}
{% block body %}
  <h1>Bienvenue sur l'accueil de l'application</h1>
  <a href={{ path('accueilstock') }}>
      <button type=\"button\">Stocks</button>
  </a>
  <button type=\"button\">Clients</button>
  <button type=\"button\">Factures</button>
{% endblock %}
", "FrontBundle:Default:accueil.html.twig", "/home/kevin/Dropbox/ProjetPtsCoiffeur/src/FrontBundle/Resources/views/Default/accueil.html.twig");
    }
}
