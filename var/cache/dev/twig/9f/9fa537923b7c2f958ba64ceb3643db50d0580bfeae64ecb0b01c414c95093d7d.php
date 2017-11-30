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
        $__internal_c5840a7a654a08f5aa85f3adac3954e4ee96de6e38dea9ff0d1217b8f481be8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5840a7a654a08f5aa85f3adac3954e4ee96de6e38dea9ff0d1217b8f481be8b->enter($__internal_c5840a7a654a08f5aa85f3adac3954e4ee96de6e38dea9ff0d1217b8f481be8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:accueil.html.twig"));

        $__internal_388311967fd7a90b81b72186ba0978afb1db998438b8d9f4a040ca7e7e3fb9a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_388311967fd7a90b81b72186ba0978afb1db998438b8d9f4a040ca7e7e3fb9a9->enter($__internal_388311967fd7a90b81b72186ba0978afb1db998438b8d9f4a040ca7e7e3fb9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5840a7a654a08f5aa85f3adac3954e4ee96de6e38dea9ff0d1217b8f481be8b->leave($__internal_c5840a7a654a08f5aa85f3adac3954e4ee96de6e38dea9ff0d1217b8f481be8b_prof);

        
        $__internal_388311967fd7a90b81b72186ba0978afb1db998438b8d9f4a040ca7e7e3fb9a9->leave($__internal_388311967fd7a90b81b72186ba0978afb1db998438b8d9f4a040ca7e7e3fb9a9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e5e43cf58d52752073c087db3a941163210ad39b8457ff9be7c412dfe10e79a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e5e43cf58d52752073c087db3a941163210ad39b8457ff9be7c412dfe10e79a->enter($__internal_2e5e43cf58d52752073c087db3a941163210ad39b8457ff9be7c412dfe10e79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cb486bc475b34b00f4343a052908515d8f18b77c7027d4c9e442e6921ec3d839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb486bc475b34b00f4343a052908515d8f18b77c7027d4c9e442e6921ec3d839->enter($__internal_cb486bc475b34b00f4343a052908515d8f18b77c7027d4c9e442e6921ec3d839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "<title>Accueil</title>";
        
        $__internal_cb486bc475b34b00f4343a052908515d8f18b77c7027d4c9e442e6921ec3d839->leave($__internal_cb486bc475b34b00f4343a052908515d8f18b77c7027d4c9e442e6921ec3d839_prof);

        
        $__internal_2e5e43cf58d52752073c087db3a941163210ad39b8457ff9be7c412dfe10e79a->leave($__internal_2e5e43cf58d52752073c087db3a941163210ad39b8457ff9be7c412dfe10e79a_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b9a0daef6092563886426d2d39af4b5a12109450960faf7a007dda3b3569fc2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9a0daef6092563886426d2d39af4b5a12109450960faf7a007dda3b3569fc2f->enter($__internal_b9a0daef6092563886426d2d39af4b5a12109450960faf7a007dda3b3569fc2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_873e0cf59c3b91331fd74708c1bb88025367b50de26bfdbeb540fa4921a38631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_873e0cf59c3b91331fd74708c1bb88025367b50de26bfdbeb540fa4921a38631->enter($__internal_873e0cf59c3b91331fd74708c1bb88025367b50de26bfdbeb540fa4921a38631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/stylesheets/accueil.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_873e0cf59c3b91331fd74708c1bb88025367b50de26bfdbeb540fa4921a38631->leave($__internal_873e0cf59c3b91331fd74708c1bb88025367b50de26bfdbeb540fa4921a38631_prof);

        
        $__internal_b9a0daef6092563886426d2d39af4b5a12109450960faf7a007dda3b3569fc2f->leave($__internal_b9a0daef6092563886426d2d39af4b5a12109450960faf7a007dda3b3569fc2f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d901d263deb926800462729ba4adad93d3666c55381b4018059733ff04fb027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d901d263deb926800462729ba4adad93d3666c55381b4018059733ff04fb027->enter($__internal_5d901d263deb926800462729ba4adad93d3666c55381b4018059733ff04fb027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_636d8ff0b4571aa66227987757716c9a3ab2fb8d1f34fcaec8a39a19c1121621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_636d8ff0b4571aa66227987757716c9a3ab2fb8d1f34fcaec8a39a19c1121621->enter($__internal_636d8ff0b4571aa66227987757716c9a3ab2fb8d1f34fcaec8a39a19c1121621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/logo1.png"), "html", null, true);
        echo "\"/>
  <h1>Bienvenue sur l'accueil de l'application</h1>
  <div id=\"menu\">
    <a href=";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueilstock");
        echo ">
        <button type=\"button\">Stocks</button>
    </a>
    <button type=\"button\">Clients</button>
    <button type=\"button\">Factures</button>
  </div>
";
        
        $__internal_636d8ff0b4571aa66227987757716c9a3ab2fb8d1f34fcaec8a39a19c1121621->leave($__internal_636d8ff0b4571aa66227987757716c9a3ab2fb8d1f34fcaec8a39a19c1121621_prof);

        
        $__internal_5d901d263deb926800462729ba4adad93d3666c55381b4018059733ff04fb027->leave($__internal_5d901d263deb926800462729ba4adad93d3666c55381b4018059733ff04fb027_prof);

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
    <a href={{ path('accueilstock') }}>
        <button type=\"button\">Stocks</button>
    </a>
    <button type=\"button\">Clients</button>
    <button type=\"button\">Factures</button>
  </div>
{% endblock %}
", "FrontBundle:Default:accueil.html.twig", "D:\\wamp\\www\\ProjetPtsCoiffeur\\src\\FrontBundle/Resources/views/Default/accueil.html.twig");
    }
}
