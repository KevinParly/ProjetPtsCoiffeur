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
        $__internal_9ba65a4961325fa486bba701814c2ca67559a46d084c0813c2087ccbdd4b60ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ba65a4961325fa486bba701814c2ca67559a46d084c0813c2087ccbdd4b60ea->enter($__internal_9ba65a4961325fa486bba701814c2ca67559a46d084c0813c2087ccbdd4b60ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5d6c79090e3b176e47c7aa95d0472d8c73d013cdd544241107178b1d03a1724e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d6c79090e3b176e47c7aa95d0472d8c73d013cdd544241107178b1d03a1724e->enter($__internal_5d6c79090e3b176e47c7aa95d0472d8c73d013cdd544241107178b1d03a1724e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ba65a4961325fa486bba701814c2ca67559a46d084c0813c2087ccbdd4b60ea->leave($__internal_9ba65a4961325fa486bba701814c2ca67559a46d084c0813c2087ccbdd4b60ea_prof);

        
        $__internal_5d6c79090e3b176e47c7aa95d0472d8c73d013cdd544241107178b1d03a1724e->leave($__internal_5d6c79090e3b176e47c7aa95d0472d8c73d013cdd544241107178b1d03a1724e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_052c670585fde2ca0599b790adb392fd94b00c7231b3b6bb05422df46b4fbc65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_052c670585fde2ca0599b790adb392fd94b00c7231b3b6bb05422df46b4fbc65->enter($__internal_052c670585fde2ca0599b790adb392fd94b00c7231b3b6bb05422df46b4fbc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_efe56a524c0b01ad6031023a1fa0d6aab7b7e10f0eafcfd100ceeb312b2d7dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efe56a524c0b01ad6031023a1fa0d6aab7b7e10f0eafcfd100ceeb312b2d7dc8->enter($__internal_efe56a524c0b01ad6031023a1fa0d6aab7b7e10f0eafcfd100ceeb312b2d7dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_efe56a524c0b01ad6031023a1fa0d6aab7b7e10f0eafcfd100ceeb312b2d7dc8->leave($__internal_efe56a524c0b01ad6031023a1fa0d6aab7b7e10f0eafcfd100ceeb312b2d7dc8_prof);

        
        $__internal_052c670585fde2ca0599b790adb392fd94b00c7231b3b6bb05422df46b4fbc65->leave($__internal_052c670585fde2ca0599b790adb392fd94b00c7231b3b6bb05422df46b4fbc65_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_108ff6ae80185884e25c0bfaad037f520ce73bb17d356f771a8a524c3a79f5bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_108ff6ae80185884e25c0bfaad037f520ce73bb17d356f771a8a524c3a79f5bd->enter($__internal_108ff6ae80185884e25c0bfaad037f520ce73bb17d356f771a8a524c3a79f5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f405dd3951827718460ae4de96abb88e75e11bd01c02e0edc43ec6c8e10bf414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f405dd3951827718460ae4de96abb88e75e11bd01c02e0edc43ec6c8e10bf414->enter($__internal_f405dd3951827718460ae4de96abb88e75e11bd01c02e0edc43ec6c8e10bf414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f405dd3951827718460ae4de96abb88e75e11bd01c02e0edc43ec6c8e10bf414->leave($__internal_f405dd3951827718460ae4de96abb88e75e11bd01c02e0edc43ec6c8e10bf414_prof);

        
        $__internal_108ff6ae80185884e25c0bfaad037f520ce73bb17d356f771a8a524c3a79f5bd->leave($__internal_108ff6ae80185884e25c0bfaad037f520ce73bb17d356f771a8a524c3a79f5bd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3d6b291d71a91a62e2362bfbbc3e4a459c77b404dd51ee423a8b32cba6108b6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d6b291d71a91a62e2362bfbbc3e4a459c77b404dd51ee423a8b32cba6108b6e->enter($__internal_3d6b291d71a91a62e2362bfbbc3e4a459c77b404dd51ee423a8b32cba6108b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d7d085d1b783e255c8da66a1d3678f338b38c924cdd464fae5e0c59da213bff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7d085d1b783e255c8da66a1d3678f338b38c924cdd464fae5e0c59da213bff0->enter($__internal_d7d085d1b783e255c8da66a1d3678f338b38c924cdd464fae5e0c59da213bff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d7d085d1b783e255c8da66a1d3678f338b38c924cdd464fae5e0c59da213bff0->leave($__internal_d7d085d1b783e255c8da66a1d3678f338b38c924cdd464fae5e0c59da213bff0_prof);

        
        $__internal_3d6b291d71a91a62e2362bfbbc3e4a459c77b404dd51ee423a8b32cba6108b6e->leave($__internal_3d6b291d71a91a62e2362bfbbc3e4a459c77b404dd51ee423a8b32cba6108b6e_prof);

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
