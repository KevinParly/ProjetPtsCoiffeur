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
        $__internal_fb8f39b88dfdaeeb58bbf448850773490a28dffe1f814eac33c879a431f2c91b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb8f39b88dfdaeeb58bbf448850773490a28dffe1f814eac33c879a431f2c91b->enter($__internal_fb8f39b88dfdaeeb58bbf448850773490a28dffe1f814eac33c879a431f2c91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:accueil.html.twig"));

        $__internal_c2cf6e73b4b1f7ff4d3c0b5edc09c78c61dee36cbcb92734160a0e6328443f86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2cf6e73b4b1f7ff4d3c0b5edc09c78c61dee36cbcb92734160a0e6328443f86->enter($__internal_c2cf6e73b4b1f7ff4d3c0b5edc09c78c61dee36cbcb92734160a0e6328443f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb8f39b88dfdaeeb58bbf448850773490a28dffe1f814eac33c879a431f2c91b->leave($__internal_fb8f39b88dfdaeeb58bbf448850773490a28dffe1f814eac33c879a431f2c91b_prof);

        
        $__internal_c2cf6e73b4b1f7ff4d3c0b5edc09c78c61dee36cbcb92734160a0e6328443f86->leave($__internal_c2cf6e73b4b1f7ff4d3c0b5edc09c78c61dee36cbcb92734160a0e6328443f86_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fec9c82be7be0ea35a1249613f397900af28b95c7dc86055bca024f9f0af36fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fec9c82be7be0ea35a1249613f397900af28b95c7dc86055bca024f9f0af36fc->enter($__internal_fec9c82be7be0ea35a1249613f397900af28b95c7dc86055bca024f9f0af36fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c15b3a2d6f82beb18697bea1ee82fedab5a32dd6cfc7d09fd121f64f3c9a042e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c15b3a2d6f82beb18697bea1ee82fedab5a32dd6cfc7d09fd121f64f3c9a042e->enter($__internal_c15b3a2d6f82beb18697bea1ee82fedab5a32dd6cfc7d09fd121f64f3c9a042e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_c15b3a2d6f82beb18697bea1ee82fedab5a32dd6cfc7d09fd121f64f3c9a042e->leave($__internal_c15b3a2d6f82beb18697bea1ee82fedab5a32dd6cfc7d09fd121f64f3c9a042e_prof);

        
        $__internal_fec9c82be7be0ea35a1249613f397900af28b95c7dc86055bca024f9f0af36fc->leave($__internal_fec9c82be7be0ea35a1249613f397900af28b95c7dc86055bca024f9f0af36fc_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c49a7a3f75a7ceddca3e6ebf7607d54834d3d7f8157073f1e66a98d7530a4cdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c49a7a3f75a7ceddca3e6ebf7607d54834d3d7f8157073f1e66a98d7530a4cdd->enter($__internal_c49a7a3f75a7ceddca3e6ebf7607d54834d3d7f8157073f1e66a98d7530a4cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_43faf4abd26e65ed32ca106ed3979f599d123022ea51c88e08f082d8aa78cff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43faf4abd26e65ed32ca106ed3979f599d123022ea51c88e08f082d8aa78cff2->enter($__internal_43faf4abd26e65ed32ca106ed3979f599d123022ea51c88e08f082d8aa78cff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "<link rel=\"stylesheet\" href=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/style.css"), "html", null, true);
        echo ">
";
        
        $__internal_43faf4abd26e65ed32ca106ed3979f599d123022ea51c88e08f082d8aa78cff2->leave($__internal_43faf4abd26e65ed32ca106ed3979f599d123022ea51c88e08f082d8aa78cff2_prof);

        
        $__internal_c49a7a3f75a7ceddca3e6ebf7607d54834d3d7f8157073f1e66a98d7530a4cdd->leave($__internal_c49a7a3f75a7ceddca3e6ebf7607d54834d3d7f8157073f1e66a98d7530a4cdd_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c27a80b2578c45d7261a3a6f23530156209a702b8857139bd886c5a7fbcbf4f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c27a80b2578c45d7261a3a6f23530156209a702b8857139bd886c5a7fbcbf4f2->enter($__internal_c27a80b2578c45d7261a3a6f23530156209a702b8857139bd886c5a7fbcbf4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c9788bea3fb08071b8a8efc2be1849b99a2770ef2c630a6ec2534970cf7e509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9788bea3fb08071b8a8efc2be1849b99a2770ef2c630a6ec2534970cf7e509->enter($__internal_1c9788bea3fb08071b8a8efc2be1849b99a2770ef2c630a6ec2534970cf7e509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1c9788bea3fb08071b8a8efc2be1849b99a2770ef2c630a6ec2534970cf7e509->leave($__internal_1c9788bea3fb08071b8a8efc2be1849b99a2770ef2c630a6ec2534970cf7e509_prof);

        
        $__internal_c27a80b2578c45d7261a3a6f23530156209a702b8857139bd886c5a7fbcbf4f2->leave($__internal_c27a80b2578c45d7261a3a6f23530156209a702b8857139bd886c5a7fbcbf4f2_prof);

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
