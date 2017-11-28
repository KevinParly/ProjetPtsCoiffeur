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
        $__internal_54baf507eff30be107ece3e9c628364fb8cc6771bc6116eae43d51f124a635d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54baf507eff30be107ece3e9c628364fb8cc6771bc6116eae43d51f124a635d4->enter($__internal_54baf507eff30be107ece3e9c628364fb8cc6771bc6116eae43d51f124a635d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:acceuilstock.html.twig"));

        $__internal_0b08aa1ff34c51975a4f93ad9862eb4675423031387139045fdf6c69dd0fd462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b08aa1ff34c51975a4f93ad9862eb4675423031387139045fdf6c69dd0fd462->enter($__internal_0b08aa1ff34c51975a4f93ad9862eb4675423031387139045fdf6c69dd0fd462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:acceuilstock.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54baf507eff30be107ece3e9c628364fb8cc6771bc6116eae43d51f124a635d4->leave($__internal_54baf507eff30be107ece3e9c628364fb8cc6771bc6116eae43d51f124a635d4_prof);

        
        $__internal_0b08aa1ff34c51975a4f93ad9862eb4675423031387139045fdf6c69dd0fd462->leave($__internal_0b08aa1ff34c51975a4f93ad9862eb4675423031387139045fdf6c69dd0fd462_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9197537e98c2f1ad2cb624cb4aea8787ee402de91caf063a7ee71e8aeaacaf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9197537e98c2f1ad2cb624cb4aea8787ee402de91caf063a7ee71e8aeaacaf0->enter($__internal_a9197537e98c2f1ad2cb624cb4aea8787ee402de91caf063a7ee71e8aeaacaf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e0e6618e376d32724e830318362553ff6407cf2498e36784940ff4a1f69d836d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e6618e376d32724e830318362553ff6407cf2498e36784940ff4a1f69d836d->enter($__internal_e0e6618e376d32724e830318362553ff6407cf2498e36784940ff4a1f69d836d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil de la gestion des stocks";
        
        $__internal_e0e6618e376d32724e830318362553ff6407cf2498e36784940ff4a1f69d836d->leave($__internal_e0e6618e376d32724e830318362553ff6407cf2498e36784940ff4a1f69d836d_prof);

        
        $__internal_a9197537e98c2f1ad2cb624cb4aea8787ee402de91caf063a7ee71e8aeaacaf0->leave($__internal_a9197537e98c2f1ad2cb624cb4aea8787ee402de91caf063a7ee71e8aeaacaf0_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e42503a292f39922edd8ece44e1bc4f5114ed402fc23246c1bd156c5e0f09260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e42503a292f39922edd8ece44e1bc4f5114ed402fc23246c1bd156c5e0f09260->enter($__internal_e42503a292f39922edd8ece44e1bc4f5114ed402fc23246c1bd156c5e0f09260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e021e26e0bea5a55f7fd3dd21981e1b9fb61060ae01820060e53a7115b9745d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e021e26e0bea5a55f7fd3dd21981e1b9fb61060ae01820060e53a7115b9745d8->enter($__internal_e021e26e0bea5a55f7fd3dd21981e1b9fb61060ae01820060e53a7115b9745d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
";
        
        $__internal_e021e26e0bea5a55f7fd3dd21981e1b9fb61060ae01820060e53a7115b9745d8->leave($__internal_e021e26e0bea5a55f7fd3dd21981e1b9fb61060ae01820060e53a7115b9745d8_prof);

        
        $__internal_e42503a292f39922edd8ece44e1bc4f5114ed402fc23246c1bd156c5e0f09260->leave($__internal_e42503a292f39922edd8ece44e1bc4f5114ed402fc23246c1bd156c5e0f09260_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1bdeb479a24bc54cea6c38b268b30b41c6ed4fbaa10fe98fb84343eaaf9b8a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1bdeb479a24bc54cea6c38b268b30b41c6ed4fbaa10fe98fb84343eaaf9b8a4->enter($__internal_b1bdeb479a24bc54cea6c38b268b30b41c6ed4fbaa10fe98fb84343eaaf9b8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cbb9725ab590203ffe04781699c262a04bf843a6f5278c8514f4a734911885f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb9725ab590203ffe04781699c262a04bf843a6f5278c8514f4a734911885f0->enter($__internal_cbb9725ab590203ffe04781699c262a04bf843a6f5278c8514f4a734911885f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
      <button type=\"button\">Afficher les couleurs</button>
";
        
        $__internal_cbb9725ab590203ffe04781699c262a04bf843a6f5278c8514f4a734911885f0->leave($__internal_cbb9725ab590203ffe04781699c262a04bf843a6f5278c8514f4a734911885f0_prof);

        
        $__internal_b1bdeb479a24bc54cea6c38b268b30b41c6ed4fbaa10fe98fb84343eaaf9b8a4->leave($__internal_b1bdeb479a24bc54cea6c38b268b30b41c6ed4fbaa10fe98fb84343eaaf9b8a4_prof);

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
        return array (  110 => 19,  104 => 16,  98 => 13,  92 => 10,  89 => 9,  80 => 8,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
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
      <button type=\"button\">Afficher les couleurs</button>
{% endblock %}
", "StockBundle:Default:acceuilstock.html.twig", "/home/kevin/Dropbox/ProjetPtsCoiffeur/src/StockBundle/Resources/views/Default/acceuilstock.html.twig");
    }
}
