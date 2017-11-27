<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_298b9d532c6f95ae216b7e059274db33509b27f2aacdee327036a4a77528d802 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d45e532bdd03f095345ea1f783c73de63c8eabdbde13ef71c6e06bc1ca9a8fb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d45e532bdd03f095345ea1f783c73de63c8eabdbde13ef71c6e06bc1ca9a8fb7->enter($__internal_d45e532bdd03f095345ea1f783c73de63c8eabdbde13ef71c6e06bc1ca9a8fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a0546c866750b6e3e348a228f23bdc5c23ad8357166c84268a4e55863ebd33bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0546c866750b6e3e348a228f23bdc5c23ad8357166c84268a4e55863ebd33bc->enter($__internal_a0546c866750b6e3e348a228f23bdc5c23ad8357166c84268a4e55863ebd33bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d45e532bdd03f095345ea1f783c73de63c8eabdbde13ef71c6e06bc1ca9a8fb7->leave($__internal_d45e532bdd03f095345ea1f783c73de63c8eabdbde13ef71c6e06bc1ca9a8fb7_prof);

        
        $__internal_a0546c866750b6e3e348a228f23bdc5c23ad8357166c84268a4e55863ebd33bc->leave($__internal_a0546c866750b6e3e348a228f23bdc5c23ad8357166c84268a4e55863ebd33bc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_85f78ee0a16f4b84d9ba82866ba7d09dc1a7db8d8e331d908d9cb4c0d13ae631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85f78ee0a16f4b84d9ba82866ba7d09dc1a7db8d8e331d908d9cb4c0d13ae631->enter($__internal_85f78ee0a16f4b84d9ba82866ba7d09dc1a7db8d8e331d908d9cb4c0d13ae631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c40c256b67357492bb0daec42f8d66721b1c05b94d69327d5d3ee8e8fec646eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c40c256b67357492bb0daec42f8d66721b1c05b94d69327d5d3ee8e8fec646eb->enter($__internal_c40c256b67357492bb0daec42f8d66721b1c05b94d69327d5d3ee8e8fec646eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c40c256b67357492bb0daec42f8d66721b1c05b94d69327d5d3ee8e8fec646eb->leave($__internal_c40c256b67357492bb0daec42f8d66721b1c05b94d69327d5d3ee8e8fec646eb_prof);

        
        $__internal_85f78ee0a16f4b84d9ba82866ba7d09dc1a7db8d8e331d908d9cb4c0d13ae631->leave($__internal_85f78ee0a16f4b84d9ba82866ba7d09dc1a7db8d8e331d908d9cb4c0d13ae631_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5dcef91cfdc8e6e104faa54c6f3c92c39673831bad3e119dde278be01e36676b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dcef91cfdc8e6e104faa54c6f3c92c39673831bad3e119dde278be01e36676b->enter($__internal_5dcef91cfdc8e6e104faa54c6f3c92c39673831bad3e119dde278be01e36676b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ce0b3c0dcc98ad6a1cd1ce23c2d44407cc9e2be95f1f2a85bf56fd3a8517715e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce0b3c0dcc98ad6a1cd1ce23c2d44407cc9e2be95f1f2a85bf56fd3a8517715e->enter($__internal_ce0b3c0dcc98ad6a1cd1ce23c2d44407cc9e2be95f1f2a85bf56fd3a8517715e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ce0b3c0dcc98ad6a1cd1ce23c2d44407cc9e2be95f1f2a85bf56fd3a8517715e->leave($__internal_ce0b3c0dcc98ad6a1cd1ce23c2d44407cc9e2be95f1f2a85bf56fd3a8517715e_prof);

        
        $__internal_5dcef91cfdc8e6e104faa54c6f3c92c39673831bad3e119dde278be01e36676b->leave($__internal_5dcef91cfdc8e6e104faa54c6f3c92c39673831bad3e119dde278be01e36676b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5cb73785aeb07e725b5fb58e265f28e726932a409ed75fa35bc29c3b893e1fdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cb73785aeb07e725b5fb58e265f28e726932a409ed75fa35bc29c3b893e1fdc->enter($__internal_5cb73785aeb07e725b5fb58e265f28e726932a409ed75fa35bc29c3b893e1fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4aa61462c898d9fdb7599a80d1adbdd05774ee2593496b7757f5678d263d2854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aa61462c898d9fdb7599a80d1adbdd05774ee2593496b7757f5678d263d2854->enter($__internal_4aa61462c898d9fdb7599a80d1adbdd05774ee2593496b7757f5678d263d2854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4aa61462c898d9fdb7599a80d1adbdd05774ee2593496b7757f5678d263d2854->leave($__internal_4aa61462c898d9fdb7599a80d1adbdd05774ee2593496b7757f5678d263d2854_prof);

        
        $__internal_5cb73785aeb07e725b5fb58e265f28e726932a409ed75fa35bc29c3b893e1fdc->leave($__internal_5cb73785aeb07e725b5fb58e265f28e726932a409ed75fa35bc29c3b893e1fdc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\wamp\\www\\ProjetPtsCoiffeur\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
