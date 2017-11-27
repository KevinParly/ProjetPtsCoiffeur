<?php

/* FrontBundle:Default:accueil.html.twig */
class __TwigTemplate_ceb071917c479c48ad688714dbc0c872c501aaec27736dcc431d439fac6a71f3 extends Twig_Template
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
        $__internal_08540cdcd5a664f5b96553f2c1fc4d3367c51152356a167bf7d495053ae730d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08540cdcd5a664f5b96553f2c1fc4d3367c51152356a167bf7d495053ae730d8->enter($__internal_08540cdcd5a664f5b96553f2c1fc4d3367c51152356a167bf7d495053ae730d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:accueil.html.twig"));

        $__internal_15d30a49838a0f012141a0af7861694a00fab2b6c92f0a6f62eec829dda618a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d30a49838a0f012141a0af7861694a00fab2b6c92f0a6f62eec829dda618a2->enter($__internal_15d30a49838a0f012141a0af7861694a00fab2b6c92f0a6f62eec829dda618a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08540cdcd5a664f5b96553f2c1fc4d3367c51152356a167bf7d495053ae730d8->leave($__internal_08540cdcd5a664f5b96553f2c1fc4d3367c51152356a167bf7d495053ae730d8_prof);

        
        $__internal_15d30a49838a0f012141a0af7861694a00fab2b6c92f0a6f62eec829dda618a2->leave($__internal_15d30a49838a0f012141a0af7861694a00fab2b6c92f0a6f62eec829dda618a2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe9ec1e09d77abe4a8ed36ed049baf24bd113b17d6ee46907f2d19d310378ff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe9ec1e09d77abe4a8ed36ed049baf24bd113b17d6ee46907f2d19d310378ff2->enter($__internal_fe9ec1e09d77abe4a8ed36ed049baf24bd113b17d6ee46907f2d19d310378ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6a47b1acdaf7e80eb07bb06c4a5c4a339d9186b0f33634653b496e69bd5b0ab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a47b1acdaf7e80eb07bb06c4a5c4a339d9186b0f33634653b496e69bd5b0ab2->enter($__internal_6a47b1acdaf7e80eb07bb06c4a5c4a339d9186b0f33634653b496e69bd5b0ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_6a47b1acdaf7e80eb07bb06c4a5c4a339d9186b0f33634653b496e69bd5b0ab2->leave($__internal_6a47b1acdaf7e80eb07bb06c4a5c4a339d9186b0f33634653b496e69bd5b0ab2_prof);

        
        $__internal_fe9ec1e09d77abe4a8ed36ed049baf24bd113b17d6ee46907f2d19d310378ff2->leave($__internal_fe9ec1e09d77abe4a8ed36ed049baf24bd113b17d6ee46907f2d19d310378ff2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0114567b504f7a336c7ab3c99b6f4301fb82ab39b40f07f4e47354b798b037a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0114567b504f7a336c7ab3c99b6f4301fb82ab39b40f07f4e47354b798b037a2->enter($__internal_0114567b504f7a336c7ab3c99b6f4301fb82ab39b40f07f4e47354b798b037a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_254691e9b1d6219f3d501ffd3e3bede4a428b16af53ba08bc9c72fe1afb012b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_254691e9b1d6219f3d501ffd3e3bede4a428b16af53ba08bc9c72fe1afb012b8->enter($__internal_254691e9b1d6219f3d501ffd3e3bede4a428b16af53ba08bc9c72fe1afb012b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "<link rel=\"stylesheet\" href=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/style.css"), "html", null, true);
        echo ">
";
        
        $__internal_254691e9b1d6219f3d501ffd3e3bede4a428b16af53ba08bc9c72fe1afb012b8->leave($__internal_254691e9b1d6219f3d501ffd3e3bede4a428b16af53ba08bc9c72fe1afb012b8_prof);

        
        $__internal_0114567b504f7a336c7ab3c99b6f4301fb82ab39b40f07f4e47354b798b037a2->leave($__internal_0114567b504f7a336c7ab3c99b6f4301fb82ab39b40f07f4e47354b798b037a2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_5153f758b9a778f6925e6bd5c303fd41deb78e2a7b2d10f630e12d42d5ec6c9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5153f758b9a778f6925e6bd5c303fd41deb78e2a7b2d10f630e12d42d5ec6c9f->enter($__internal_5153f758b9a778f6925e6bd5c303fd41deb78e2a7b2d10f630e12d42d5ec6c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_30df3e22d349f75c8e56ea0753d59a91a23f2ffa4d9b45ccbf50305ea003a59d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30df3e22d349f75c8e56ea0753d59a91a23f2ffa4d9b45ccbf50305ea003a59d->enter($__internal_30df3e22d349f75c8e56ea0753d59a91a23f2ffa4d9b45ccbf50305ea003a59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Bienvenue sur l'accueil de l'application</h1>
  <a href=";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("acceuilstock");
        echo ">
      <button type=\"button\">Stock</button>
  </a>
  <button type=\"button\"><img  class=\"img-responsive\" src=\"https://www.iconexperience.com/_img/g_collection_png/standard/512x512/delivery_man.png\">Client</button>
  <button type=\"button\">Facture</button>
";
        
        $__internal_30df3e22d349f75c8e56ea0753d59a91a23f2ffa4d9b45ccbf50305ea003a59d->leave($__internal_30df3e22d349f75c8e56ea0753d59a91a23f2ffa4d9b45ccbf50305ea003a59d_prof);

        
        $__internal_5153f758b9a778f6925e6bd5c303fd41deb78e2a7b2d10f630e12d42d5ec6c9f->leave($__internal_5153f758b9a778f6925e6bd5c303fd41deb78e2a7b2d10f630e12d42d5ec6c9f_prof);

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
  <a href={{ path('acceuilstock') }}>
      <button type=\"button\">Stock</button>
  </a>
  <button type=\"button\"><img  class=\"img-responsive\" src=\"https://www.iconexperience.com/_img/g_collection_png/standard/512x512/delivery_man.png\">Client</button>
  <button type=\"button\">Facture</button>
{% endblock %}
", "FrontBundle:Default:accueil.html.twig", "D:\\wamp\\www\\ProjetPtsCoiffeur\\src\\FrontBundle/Resources/views/Default/accueil.html.twig");
    }
}
