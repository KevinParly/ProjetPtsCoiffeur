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
        $__internal_469385832329adb0185c08aebff574b209b02c1e059babe8925f2c12941546aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_469385832329adb0185c08aebff574b209b02c1e059babe8925f2c12941546aa->enter($__internal_469385832329adb0185c08aebff574b209b02c1e059babe8925f2c12941546aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:accueil.html.twig"));

        $__internal_daa5b04cdd634db4a472aefa78e8ae49240812e78cd862c1d5c26a1fbe22c60e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa5b04cdd634db4a472aefa78e8ae49240812e78cd862c1d5c26a1fbe22c60e->enter($__internal_daa5b04cdd634db4a472aefa78e8ae49240812e78cd862c1d5c26a1fbe22c60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_469385832329adb0185c08aebff574b209b02c1e059babe8925f2c12941546aa->leave($__internal_469385832329adb0185c08aebff574b209b02c1e059babe8925f2c12941546aa_prof);

        
        $__internal_daa5b04cdd634db4a472aefa78e8ae49240812e78cd862c1d5c26a1fbe22c60e->leave($__internal_daa5b04cdd634db4a472aefa78e8ae49240812e78cd862c1d5c26a1fbe22c60e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fdb78a1b3c5a15238fe2eacc80dd3044021e760bb97b8ea8ed1519e06317c12e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdb78a1b3c5a15238fe2eacc80dd3044021e760bb97b8ea8ed1519e06317c12e->enter($__internal_fdb78a1b3c5a15238fe2eacc80dd3044021e760bb97b8ea8ed1519e06317c12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_07f4163c143b7d86f863ab0a7121f1da2c969f72d8688045991130a76a6d70c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f4163c143b7d86f863ab0a7121f1da2c969f72d8688045991130a76a6d70c5->enter($__internal_07f4163c143b7d86f863ab0a7121f1da2c969f72d8688045991130a76a6d70c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "<title>Accueil</title>";
        
        $__internal_07f4163c143b7d86f863ab0a7121f1da2c969f72d8688045991130a76a6d70c5->leave($__internal_07f4163c143b7d86f863ab0a7121f1da2c969f72d8688045991130a76a6d70c5_prof);

        
        $__internal_fdb78a1b3c5a15238fe2eacc80dd3044021e760bb97b8ea8ed1519e06317c12e->leave($__internal_fdb78a1b3c5a15238fe2eacc80dd3044021e760bb97b8ea8ed1519e06317c12e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_88439e484596470d70e6abf186e303b8aed8130401c0311787717220674ac6f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88439e484596470d70e6abf186e303b8aed8130401c0311787717220674ac6f2->enter($__internal_88439e484596470d70e6abf186e303b8aed8130401c0311787717220674ac6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8ca40c1b04c0eab24dc2512f83148e0058828b1a0f873b6c3066626f000072ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca40c1b04c0eab24dc2512f83148e0058828b1a0f873b6c3066626f000072ce->enter($__internal_8ca40c1b04c0eab24dc2512f83148e0058828b1a0f873b6c3066626f000072ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/stylesheets/accueil.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_8ca40c1b04c0eab24dc2512f83148e0058828b1a0f873b6c3066626f000072ce->leave($__internal_8ca40c1b04c0eab24dc2512f83148e0058828b1a0f873b6c3066626f000072ce_prof);

        
        $__internal_88439e484596470d70e6abf186e303b8aed8130401c0311787717220674ac6f2->leave($__internal_88439e484596470d70e6abf186e303b8aed8130401c0311787717220674ac6f2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc7bc1e2a3d8537935caaab916ca99ee1b9cc37b5ad71361014ae82b02d57d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc7bc1e2a3d8537935caaab916ca99ee1b9cc37b5ad71361014ae82b02d57d4a->enter($__internal_fc7bc1e2a3d8537935caaab916ca99ee1b9cc37b5ad71361014ae82b02d57d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7990a358f267b24a751f57ff5bc5faaeff62d5a7d81752fb1179fbf5745256f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7990a358f267b24a751f57ff5bc5faaeff62d5a7d81752fb1179fbf5745256f5->enter($__internal_7990a358f267b24a751f57ff5bc5faaeff62d5a7d81752fb1179fbf5745256f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/logo1.png"), "html", null, true);
        echo "\"/>
  <h1>Bienvenue sur l'accueil de l'application</h1>
  <div id=\"menu\">
    <a href=";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueilclient");
        echo ">
        <button type=\"button\">Clients</button>
    </a>
    <button type=\"button\">Factures</button>
    <a>
        <button type=\"button\">Stocks</button>
    </a>
  </div>
";
        
        $__internal_7990a358f267b24a751f57ff5bc5faaeff62d5a7d81752fb1179fbf5745256f5->leave($__internal_7990a358f267b24a751f57ff5bc5faaeff62d5a7d81752fb1179fbf5745256f5_prof);

        
        $__internal_fc7bc1e2a3d8537935caaab916ca99ee1b9cc37b5ad71361014ae82b02d57d4a->leave($__internal_fc7bc1e2a3d8537935caaab916ca99ee1b9cc37b5ad71361014ae82b02d57d4a_prof);

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
        return array (  98 => 11,  91 => 8,  82 => 7,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
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

{% block title %}<title>Accueil</title>{% endblock %}
{% block stylesheets %}
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset(\"bundles/front/stylesheets/accueil.css\") }}\"/>
{% endblock %}
{% block body %}
  <img src=\"{{ asset(\"bundles/front/images/logo1.png\") }}\"/>
  <h1>Bienvenue sur l'accueil de l'application</h1>
  <div id=\"menu\">
    <a href={{ path('accueilclient') }}>
        <button type=\"button\">Clients</button>
    </a>
    <button type=\"button\">Factures</button>
    <a>
        <button type=\"button\">Stocks</button>
    </a>
  </div>
{% endblock %}
", "FrontBundle:Default:accueil.html.twig", "/home/kevin/Dropbox/PTS3/ProjetPtsCoiffeur/src/FrontBundle/Resources/views/Default/accueil.html.twig");
    }
}
