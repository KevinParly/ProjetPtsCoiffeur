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
        $__internal_b9dcb0a72af169d8ea3ecee2955c7d7596da712d88be488b3e539d78e0d8aaea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9dcb0a72af169d8ea3ecee2955c7d7596da712d88be488b3e539d78e0d8aaea->enter($__internal_b9dcb0a72af169d8ea3ecee2955c7d7596da712d88be488b3e539d78e0d8aaea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:accueil.html.twig"));

        $__internal_650e029587eb439e7f22e804f40b6eff35e8c9471bccff22b82978620f93c014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_650e029587eb439e7f22e804f40b6eff35e8c9471bccff22b82978620f93c014->enter($__internal_650e029587eb439e7f22e804f40b6eff35e8c9471bccff22b82978620f93c014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9dcb0a72af169d8ea3ecee2955c7d7596da712d88be488b3e539d78e0d8aaea->leave($__internal_b9dcb0a72af169d8ea3ecee2955c7d7596da712d88be488b3e539d78e0d8aaea_prof);

        
        $__internal_650e029587eb439e7f22e804f40b6eff35e8c9471bccff22b82978620f93c014->leave($__internal_650e029587eb439e7f22e804f40b6eff35e8c9471bccff22b82978620f93c014_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d36b81ffbb6caf7f00813b3aafc593dedd3c38237cf39894419118134272f7c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d36b81ffbb6caf7f00813b3aafc593dedd3c38237cf39894419118134272f7c9->enter($__internal_d36b81ffbb6caf7f00813b3aafc593dedd3c38237cf39894419118134272f7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d99c1df858afb5ba63ca5473791709cf581877b4ce72b3cd13dbb9f1452aacf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99c1df858afb5ba63ca5473791709cf581877b4ce72b3cd13dbb9f1452aacf9->enter($__internal_d99c1df858afb5ba63ca5473791709cf581877b4ce72b3cd13dbb9f1452aacf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_d99c1df858afb5ba63ca5473791709cf581877b4ce72b3cd13dbb9f1452aacf9->leave($__internal_d99c1df858afb5ba63ca5473791709cf581877b4ce72b3cd13dbb9f1452aacf9_prof);

        
        $__internal_d36b81ffbb6caf7f00813b3aafc593dedd3c38237cf39894419118134272f7c9->leave($__internal_d36b81ffbb6caf7f00813b3aafc593dedd3c38237cf39894419118134272f7c9_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cd5a30caea011d7752b2c11d1e0e9bd93a69bde55fd20dbc68d7c5db5c9e0925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd5a30caea011d7752b2c11d1e0e9bd93a69bde55fd20dbc68d7c5db5c9e0925->enter($__internal_cd5a30caea011d7752b2c11d1e0e9bd93a69bde55fd20dbc68d7c5db5c9e0925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_eef738a82ef3824174f49aa2a9822b2bc15c96eee7f72e4ee9766eaa82f0d58a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eef738a82ef3824174f49aa2a9822b2bc15c96eee7f72e4ee9766eaa82f0d58a->enter($__internal_eef738a82ef3824174f49aa2a9822b2bc15c96eee7f72e4ee9766eaa82f0d58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "<link rel=\"stylesheet\" href=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/style.css"), "html", null, true);
        echo ">
";
        
        $__internal_eef738a82ef3824174f49aa2a9822b2bc15c96eee7f72e4ee9766eaa82f0d58a->leave($__internal_eef738a82ef3824174f49aa2a9822b2bc15c96eee7f72e4ee9766eaa82f0d58a_prof);

        
        $__internal_cd5a30caea011d7752b2c11d1e0e9bd93a69bde55fd20dbc68d7c5db5c9e0925->leave($__internal_cd5a30caea011d7752b2c11d1e0e9bd93a69bde55fd20dbc68d7c5db5c9e0925_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b1412d0afad3797566086afdba5dd68944754e0e61ecf2312bfb5eadeb00e70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b1412d0afad3797566086afdba5dd68944754e0e61ecf2312bfb5eadeb00e70->enter($__internal_0b1412d0afad3797566086afdba5dd68944754e0e61ecf2312bfb5eadeb00e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_713c3d3888769d2eef23687996e5778f682e65a73ac8e8285840e63adbfae779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_713c3d3888769d2eef23687996e5778f682e65a73ac8e8285840e63adbfae779->enter($__internal_713c3d3888769d2eef23687996e5778f682e65a73ac8e8285840e63adbfae779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_713c3d3888769d2eef23687996e5778f682e65a73ac8e8285840e63adbfae779->leave($__internal_713c3d3888769d2eef23687996e5778f682e65a73ac8e8285840e63adbfae779_prof);

        
        $__internal_0b1412d0afad3797566086afdba5dd68944754e0e61ecf2312bfb5eadeb00e70->leave($__internal_0b1412d0afad3797566086afdba5dd68944754e0e61ecf2312bfb5eadeb00e70_prof);

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
", "FrontBundle:Default:accueil.html.twig", "/home/kevin/Dropbox/ProjetPtsCoiffeur/src/FrontBundle/Resources/views/Default/accueil.html.twig");
    }
}
