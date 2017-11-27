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
        $__internal_b711467cab031b6485aa921c97393edb95eb7d325a79717723e878c3f4277595 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b711467cab031b6485aa921c97393edb95eb7d325a79717723e878c3f4277595->enter($__internal_b711467cab031b6485aa921c97393edb95eb7d325a79717723e878c3f4277595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7b9593f5b087f1faab3974eb4c6513f3dac710df249ea933793f1cd9d0c32072 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b9593f5b087f1faab3974eb4c6513f3dac710df249ea933793f1cd9d0c32072->enter($__internal_7b9593f5b087f1faab3974eb4c6513f3dac710df249ea933793f1cd9d0c32072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b711467cab031b6485aa921c97393edb95eb7d325a79717723e878c3f4277595->leave($__internal_b711467cab031b6485aa921c97393edb95eb7d325a79717723e878c3f4277595_prof);

        
        $__internal_7b9593f5b087f1faab3974eb4c6513f3dac710df249ea933793f1cd9d0c32072->leave($__internal_7b9593f5b087f1faab3974eb4c6513f3dac710df249ea933793f1cd9d0c32072_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_990ed45ad1d730cdf2793255cbee6d479eed6d075c843bfef036fdb65084b79c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_990ed45ad1d730cdf2793255cbee6d479eed6d075c843bfef036fdb65084b79c->enter($__internal_990ed45ad1d730cdf2793255cbee6d479eed6d075c843bfef036fdb65084b79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_005e8492c6646a44fb649b7ec1f21b1d84985645249b0ef3f82bce79f42d7ec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_005e8492c6646a44fb649b7ec1f21b1d84985645249b0ef3f82bce79f42d7ec2->enter($__internal_005e8492c6646a44fb649b7ec1f21b1d84985645249b0ef3f82bce79f42d7ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_005e8492c6646a44fb649b7ec1f21b1d84985645249b0ef3f82bce79f42d7ec2->leave($__internal_005e8492c6646a44fb649b7ec1f21b1d84985645249b0ef3f82bce79f42d7ec2_prof);

        
        $__internal_990ed45ad1d730cdf2793255cbee6d479eed6d075c843bfef036fdb65084b79c->leave($__internal_990ed45ad1d730cdf2793255cbee6d479eed6d075c843bfef036fdb65084b79c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_00ac52d5250a9ac03175b380123fa6d383d7753d3f2f9b33e8cc0d2097cd5440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00ac52d5250a9ac03175b380123fa6d383d7753d3f2f9b33e8cc0d2097cd5440->enter($__internal_00ac52d5250a9ac03175b380123fa6d383d7753d3f2f9b33e8cc0d2097cd5440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a62cf7b9f8022be2c8a171b5e1efa439ae9dc56323350031c8e7900059afed87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a62cf7b9f8022be2c8a171b5e1efa439ae9dc56323350031c8e7900059afed87->enter($__internal_a62cf7b9f8022be2c8a171b5e1efa439ae9dc56323350031c8e7900059afed87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a62cf7b9f8022be2c8a171b5e1efa439ae9dc56323350031c8e7900059afed87->leave($__internal_a62cf7b9f8022be2c8a171b5e1efa439ae9dc56323350031c8e7900059afed87_prof);

        
        $__internal_00ac52d5250a9ac03175b380123fa6d383d7753d3f2f9b33e8cc0d2097cd5440->leave($__internal_00ac52d5250a9ac03175b380123fa6d383d7753d3f2f9b33e8cc0d2097cd5440_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7dc903f19dd38bb8931e034e6551c1a6a2adb63fd70a6f7072858c7b0f6a8644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dc903f19dd38bb8931e034e6551c1a6a2adb63fd70a6f7072858c7b0f6a8644->enter($__internal_7dc903f19dd38bb8931e034e6551c1a6a2adb63fd70a6f7072858c7b0f6a8644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f483e9d9555eb4e7b6c9e199fcf95ca09cf6e7eb715801e0a92de41e994e2f46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f483e9d9555eb4e7b6c9e199fcf95ca09cf6e7eb715801e0a92de41e994e2f46->enter($__internal_f483e9d9555eb4e7b6c9e199fcf95ca09cf6e7eb715801e0a92de41e994e2f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f483e9d9555eb4e7b6c9e199fcf95ca09cf6e7eb715801e0a92de41e994e2f46->leave($__internal_f483e9d9555eb4e7b6c9e199fcf95ca09cf6e7eb715801e0a92de41e994e2f46_prof);

        
        $__internal_7dc903f19dd38bb8931e034e6551c1a6a2adb63fd70a6f7072858c7b0f6a8644->leave($__internal_7dc903f19dd38bb8931e034e6551c1a6a2adb63fd70a6f7072858c7b0f6a8644_prof);

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
