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
        $__internal_539a3871b12be3ce96c104ee2ff25fd6d401c84f5687dd6ab18f8d8a6155a38e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_539a3871b12be3ce96c104ee2ff25fd6d401c84f5687dd6ab18f8d8a6155a38e->enter($__internal_539a3871b12be3ce96c104ee2ff25fd6d401c84f5687dd6ab18f8d8a6155a38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:accueil.html.twig"));

        $__internal_b4dd78687125ac7f28be56b8d3a55eb42d19b2f88aae1565ae3cd6955a1538fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4dd78687125ac7f28be56b8d3a55eb42d19b2f88aae1565ae3cd6955a1538fa->enter($__internal_b4dd78687125ac7f28be56b8d3a55eb42d19b2f88aae1565ae3cd6955a1538fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_539a3871b12be3ce96c104ee2ff25fd6d401c84f5687dd6ab18f8d8a6155a38e->leave($__internal_539a3871b12be3ce96c104ee2ff25fd6d401c84f5687dd6ab18f8d8a6155a38e_prof);

        
        $__internal_b4dd78687125ac7f28be56b8d3a55eb42d19b2f88aae1565ae3cd6955a1538fa->leave($__internal_b4dd78687125ac7f28be56b8d3a55eb42d19b2f88aae1565ae3cd6955a1538fa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_61913b9e31723fd7ba0248ad058fce87d03cc5790943ef35d6bb257088e3c9d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61913b9e31723fd7ba0248ad058fce87d03cc5790943ef35d6bb257088e3c9d2->enter($__internal_61913b9e31723fd7ba0248ad058fce87d03cc5790943ef35d6bb257088e3c9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0b8c2d6dd5b3334f243ecfbde6a90f7c867657dad9863d9e343dc60311f45d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b8c2d6dd5b3334f243ecfbde6a90f7c867657dad9863d9e343dc60311f45d10->enter($__internal_0b8c2d6dd5b3334f243ecfbde6a90f7c867657dad9863d9e343dc60311f45d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_0b8c2d6dd5b3334f243ecfbde6a90f7c867657dad9863d9e343dc60311f45d10->leave($__internal_0b8c2d6dd5b3334f243ecfbde6a90f7c867657dad9863d9e343dc60311f45d10_prof);

        
        $__internal_61913b9e31723fd7ba0248ad058fce87d03cc5790943ef35d6bb257088e3c9d2->leave($__internal_61913b9e31723fd7ba0248ad058fce87d03cc5790943ef35d6bb257088e3c9d2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0a4ed8a0714c1e3c0af903b981377de430d56ef8ade7fc46261b129f6ac2cbe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a4ed8a0714c1e3c0af903b981377de430d56ef8ade7fc46261b129f6ac2cbe5->enter($__internal_0a4ed8a0714c1e3c0af903b981377de430d56ef8ade7fc46261b129f6ac2cbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9e7bf9af1238ce7db17e25026c4b9606b9bf44b3301bf260e9068c54bbe185d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e7bf9af1238ce7db17e25026c4b9606b9bf44b3301bf260e9068c54bbe185d6->enter($__internal_9e7bf9af1238ce7db17e25026c4b9606b9bf44b3301bf260e9068c54bbe185d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "<link rel=\"stylesheet\" href=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/style.css"), "html", null, true);
        echo ">
";
        
        $__internal_9e7bf9af1238ce7db17e25026c4b9606b9bf44b3301bf260e9068c54bbe185d6->leave($__internal_9e7bf9af1238ce7db17e25026c4b9606b9bf44b3301bf260e9068c54bbe185d6_prof);

        
        $__internal_0a4ed8a0714c1e3c0af903b981377de430d56ef8ade7fc46261b129f6ac2cbe5->leave($__internal_0a4ed8a0714c1e3c0af903b981377de430d56ef8ade7fc46261b129f6ac2cbe5_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf743c4a02e62e2a0885b443aa7c7afdc40d8f35bca6cc386768f03197f29fc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf743c4a02e62e2a0885b443aa7c7afdc40d8f35bca6cc386768f03197f29fc6->enter($__internal_bf743c4a02e62e2a0885b443aa7c7afdc40d8f35bca6cc386768f03197f29fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_84a1409ec9a022b924424102acc7281d3799bbd08dc0416921b0ed4e76c72afb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a1409ec9a022b924424102acc7281d3799bbd08dc0416921b0ed4e76c72afb->enter($__internal_84a1409ec9a022b924424102acc7281d3799bbd08dc0416921b0ed4e76c72afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Bienvenue sur l'accueil de l'application</h1>
  <a href=";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("acceuilstock");
        echo ">
      <button type=\"button\">Stock</button>
  </a>
  <button type=\"button\">Clients</button>
  <button type=\"button\">Facture</button>
";
        
        $__internal_84a1409ec9a022b924424102acc7281d3799bbd08dc0416921b0ed4e76c72afb->leave($__internal_84a1409ec9a022b924424102acc7281d3799bbd08dc0416921b0ed4e76c72afb_prof);

        
        $__internal_bf743c4a02e62e2a0885b443aa7c7afdc40d8f35bca6cc386768f03197f29fc6->leave($__internal_bf743c4a02e62e2a0885b443aa7c7afdc40d8f35bca6cc386768f03197f29fc6_prof);

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
  <button type=\"button\">Clients</button>
  <button type=\"button\">Facture</button>
{% endblock %}
", "FrontBundle:Default:accueil.html.twig", "/home/kevin/Dropbox/ProjetPtsCoiffeur/src/FrontBundle/Resources/views/Default/accueil.html.twig");
    }
}
