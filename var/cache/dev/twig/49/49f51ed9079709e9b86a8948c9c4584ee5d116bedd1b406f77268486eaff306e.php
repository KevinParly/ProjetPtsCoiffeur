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
        $__internal_036b54849b1c8eb81e2ef332c7a184269d014b83786aea92c671f2c9ebd28f80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_036b54849b1c8eb81e2ef332c7a184269d014b83786aea92c671f2c9ebd28f80->enter($__internal_036b54849b1c8eb81e2ef332c7a184269d014b83786aea92c671f2c9ebd28f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:accueil.html.twig"));

        $__internal_7f1d6ba69ee367f9c07f0c7b0972a9d27168da64a974c413a8395443d6ea9996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f1d6ba69ee367f9c07f0c7b0972a9d27168da64a974c413a8395443d6ea9996->enter($__internal_7f1d6ba69ee367f9c07f0c7b0972a9d27168da64a974c413a8395443d6ea9996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_036b54849b1c8eb81e2ef332c7a184269d014b83786aea92c671f2c9ebd28f80->leave($__internal_036b54849b1c8eb81e2ef332c7a184269d014b83786aea92c671f2c9ebd28f80_prof);

        
        $__internal_7f1d6ba69ee367f9c07f0c7b0972a9d27168da64a974c413a8395443d6ea9996->leave($__internal_7f1d6ba69ee367f9c07f0c7b0972a9d27168da64a974c413a8395443d6ea9996_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_45c2300a5ab32f40a3e56c2ac74ead54b5ecb48020d5322ab27af56b4f491e19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45c2300a5ab32f40a3e56c2ac74ead54b5ecb48020d5322ab27af56b4f491e19->enter($__internal_45c2300a5ab32f40a3e56c2ac74ead54b5ecb48020d5322ab27af56b4f491e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b65a8460d1ea24a64a4d991095d1603d91117d9020d726382fc25bea53b45b85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b65a8460d1ea24a64a4d991095d1603d91117d9020d726382fc25bea53b45b85->enter($__internal_b65a8460d1ea24a64a4d991095d1603d91117d9020d726382fc25bea53b45b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_b65a8460d1ea24a64a4d991095d1603d91117d9020d726382fc25bea53b45b85->leave($__internal_b65a8460d1ea24a64a4d991095d1603d91117d9020d726382fc25bea53b45b85_prof);

        
        $__internal_45c2300a5ab32f40a3e56c2ac74ead54b5ecb48020d5322ab27af56b4f491e19->leave($__internal_45c2300a5ab32f40a3e56c2ac74ead54b5ecb48020d5322ab27af56b4f491e19_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3183dc03a10d39f8daa84465fba8604d1d72f67bd884f5b94ebadb3470b1b2c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3183dc03a10d39f8daa84465fba8604d1d72f67bd884f5b94ebadb3470b1b2c1->enter($__internal_3183dc03a10d39f8daa84465fba8604d1d72f67bd884f5b94ebadb3470b1b2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_86c72a4b2c54fd72beaf1852e1dfa92c4f720bcd478801932ead23e1a90f2736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86c72a4b2c54fd72beaf1852e1dfa92c4f720bcd478801932ead23e1a90f2736->enter($__internal_86c72a4b2c54fd72beaf1852e1dfa92c4f720bcd478801932ead23e1a90f2736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "<link rel=\"stylesheet\" href=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/style.css"), "html", null, true);
        echo ">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
";
        
        $__internal_86c72a4b2c54fd72beaf1852e1dfa92c4f720bcd478801932ead23e1a90f2736->leave($__internal_86c72a4b2c54fd72beaf1852e1dfa92c4f720bcd478801932ead23e1a90f2736_prof);

        
        $__internal_3183dc03a10d39f8daa84465fba8604d1d72f67bd884f5b94ebadb3470b1b2c1->leave($__internal_3183dc03a10d39f8daa84465fba8604d1d72f67bd884f5b94ebadb3470b1b2c1_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_63bc73f1a7278e46de67e293c50dc639db798a2a3c05a0ac9695ff7b203975da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63bc73f1a7278e46de67e293c50dc639db798a2a3c05a0ac9695ff7b203975da->enter($__internal_63bc73f1a7278e46de67e293c50dc639db798a2a3c05a0ac9695ff7b203975da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e9d0cd38ac70645783a7ff18d3a13f830c0cdc45281e202226a2cf1fd69be8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e9d0cd38ac70645783a7ff18d3a13f830c0cdc45281e202226a2cf1fd69be8a->enter($__internal_5e9d0cd38ac70645783a7ff18d3a13f830c0cdc45281e202226a2cf1fd69be8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "  <h1>Bienvenue sur l'accueil de l'application</h1>
  <a href=";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("acceuilstock");
        echo ">
      <button type=\"button\">Stock</button>
  </a>
  <button type=\"button\"><img  class=\"img-responsive\" src=\"https://www.iconexperience.com/_img/g_collection_png/standard/512x512/delivery_man.png\">Client</button>
  <button type=\"button\">Facture</button>
";
        
        $__internal_5e9d0cd38ac70645783a7ff18d3a13f830c0cdc45281e202226a2cf1fd69be8a->leave($__internal_5e9d0cd38ac70645783a7ff18d3a13f830c0cdc45281e202226a2cf1fd69be8a_prof);

        
        $__internal_63bc73f1a7278e46de67e293c50dc639db798a2a3c05a0ac9695ff7b203975da->leave($__internal_63bc73f1a7278e46de67e293c50dc639db798a2a3c05a0ac9695ff7b203975da_prof);

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
        return array (  95 => 10,  92 => 9,  83 => 8,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
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
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
{% endblock %}
{% block body %}
  <h1>Bienvenue sur l'accueil de l'application</h1>
  <a href={{ path('acceuilstock') }}>
      <button type=\"button\">Stock</button>
  </a>
  <button type=\"button\"><img  class=\"img-responsive\" src=\"https://www.iconexperience.com/_img/g_collection_png/standard/512x512/delivery_man.png\">Client</button>
  <button type=\"button\">Facture</button>
{% endblock %}
", "FrontBundle:Default:accueil.html.twig", "/home/kevin/Dropbox/PTS3/ProjetPtsCoiffeur/src/FrontBundle/Resources/views/Default/accueil.html.twig");
    }
}
