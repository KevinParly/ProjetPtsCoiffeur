<?php

/* FrontBundle:Default:accueil.html.twig */
class __TwigTemplate_b66513cd2609fbb2e8cd0f012ca9791a5927fe179dbdf278e1bbe70077410306 extends Twig_Template
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
        $__internal_25e527135eb6dafd2f455e75f865d2eb51de520bf8cce073d9b45d1c0e549acf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25e527135eb6dafd2f455e75f865d2eb51de520bf8cce073d9b45d1c0e549acf->enter($__internal_25e527135eb6dafd2f455e75f865d2eb51de520bf8cce073d9b45d1c0e549acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:accueil.html.twig"));

        $__internal_1bf9efacdbe2719070e18f22f6e749b56319f60cd731aacbecfabce35dac36a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bf9efacdbe2719070e18f22f6e749b56319f60cd731aacbecfabce35dac36a4->enter($__internal_1bf9efacdbe2719070e18f22f6e749b56319f60cd731aacbecfabce35dac36a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25e527135eb6dafd2f455e75f865d2eb51de520bf8cce073d9b45d1c0e549acf->leave($__internal_25e527135eb6dafd2f455e75f865d2eb51de520bf8cce073d9b45d1c0e549acf_prof);

        
        $__internal_1bf9efacdbe2719070e18f22f6e749b56319f60cd731aacbecfabce35dac36a4->leave($__internal_1bf9efacdbe2719070e18f22f6e749b56319f60cd731aacbecfabce35dac36a4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_93187f223771580ea5161f75f6c4423b9ab461bd6b1cc38a64fb1da3512f78d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93187f223771580ea5161f75f6c4423b9ab461bd6b1cc38a64fb1da3512f78d6->enter($__internal_93187f223771580ea5161f75f6c4423b9ab461bd6b1cc38a64fb1da3512f78d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_575884d46585a24595115dca2b98e53b6c702495b479cdfad7b35948d272d1d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_575884d46585a24595115dca2b98e53b6c702495b479cdfad7b35948d272d1d4->enter($__internal_575884d46585a24595115dca2b98e53b6c702495b479cdfad7b35948d272d1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_575884d46585a24595115dca2b98e53b6c702495b479cdfad7b35948d272d1d4->leave($__internal_575884d46585a24595115dca2b98e53b6c702495b479cdfad7b35948d272d1d4_prof);

        
        $__internal_93187f223771580ea5161f75f6c4423b9ab461bd6b1cc38a64fb1da3512f78d6->leave($__internal_93187f223771580ea5161f75f6c4423b9ab461bd6b1cc38a64fb1da3512f78d6_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a7382edc32f5b4bffd329f253a01cf3d2b8cff2a1ffbba6ff324c314821eb444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7382edc32f5b4bffd329f253a01cf3d2b8cff2a1ffbba6ff324c314821eb444->enter($__internal_a7382edc32f5b4bffd329f253a01cf3d2b8cff2a1ffbba6ff324c314821eb444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6d534dbfd6c60c3b362d01920301d7c0e7fbbe78233a176dfd983813db3f480c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d534dbfd6c60c3b362d01920301d7c0e7fbbe78233a176dfd983813db3f480c->enter($__internal_6d534dbfd6c60c3b362d01920301d7c0e7fbbe78233a176dfd983813db3f480c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "<link rel=\"stylesheet\" href=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/style.css"), "html", null, true);
        echo ">
";
        
        $__internal_6d534dbfd6c60c3b362d01920301d7c0e7fbbe78233a176dfd983813db3f480c->leave($__internal_6d534dbfd6c60c3b362d01920301d7c0e7fbbe78233a176dfd983813db3f480c_prof);

        
        $__internal_a7382edc32f5b4bffd329f253a01cf3d2b8cff2a1ffbba6ff324c314821eb444->leave($__internal_a7382edc32f5b4bffd329f253a01cf3d2b8cff2a1ffbba6ff324c314821eb444_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd2ed58dd0cfabde343002780b10f74ab830eb323be0a3622103e2495b2958de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd2ed58dd0cfabde343002780b10f74ab830eb323be0a3622103e2495b2958de->enter($__internal_dd2ed58dd0cfabde343002780b10f74ab830eb323be0a3622103e2495b2958de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_714a8c37520d91b524ac8e48c85224e7aa9f370de49c08fade7127049715fc7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_714a8c37520d91b524ac8e48c85224e7aa9f370de49c08fade7127049715fc7f->enter($__internal_714a8c37520d91b524ac8e48c85224e7aa9f370de49c08fade7127049715fc7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_714a8c37520d91b524ac8e48c85224e7aa9f370de49c08fade7127049715fc7f->leave($__internal_714a8c37520d91b524ac8e48c85224e7aa9f370de49c08fade7127049715fc7f_prof);

        
        $__internal_dd2ed58dd0cfabde343002780b10f74ab830eb323be0a3622103e2495b2958de->leave($__internal_dd2ed58dd0cfabde343002780b10f74ab830eb323be0a3622103e2495b2958de_prof);

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
", "FrontBundle:Default:accueil.html.twig", "/var/www/html/www/ProjetCoiffeur/ProjetPtsCoiffeur/src/FrontBundle/Resources/views/Default/accueil.html.twig");
    }
}
