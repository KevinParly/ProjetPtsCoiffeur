<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
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
        $__internal_e94e2e28d7cbc4601c7af5a45030855c80aced7978d9e732b0dabca698c0b26e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e94e2e28d7cbc4601c7af5a45030855c80aced7978d9e732b0dabca698c0b26e->enter($__internal_e94e2e28d7cbc4601c7af5a45030855c80aced7978d9e732b0dabca698c0b26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c2d99ecc0dd3b96c28b05e2334458522a4392688fcd578fb5799430885024595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2d99ecc0dd3b96c28b05e2334458522a4392688fcd578fb5799430885024595->enter($__internal_c2d99ecc0dd3b96c28b05e2334458522a4392688fcd578fb5799430885024595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e94e2e28d7cbc4601c7af5a45030855c80aced7978d9e732b0dabca698c0b26e->leave($__internal_e94e2e28d7cbc4601c7af5a45030855c80aced7978d9e732b0dabca698c0b26e_prof);

        
        $__internal_c2d99ecc0dd3b96c28b05e2334458522a4392688fcd578fb5799430885024595->leave($__internal_c2d99ecc0dd3b96c28b05e2334458522a4392688fcd578fb5799430885024595_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a32225cb68e3700a6d6bee01141dca95d6a7fd35d3ad4260dd657e929abaf311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a32225cb68e3700a6d6bee01141dca95d6a7fd35d3ad4260dd657e929abaf311->enter($__internal_a32225cb68e3700a6d6bee01141dca95d6a7fd35d3ad4260dd657e929abaf311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_94b1c8affd751b5c2e03a696d8561495cb0125f001469f53b310a22e9c811ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b1c8affd751b5c2e03a696d8561495cb0125f001469f53b310a22e9c811ce6->enter($__internal_94b1c8affd751b5c2e03a696d8561495cb0125f001469f53b310a22e9c811ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_94b1c8affd751b5c2e03a696d8561495cb0125f001469f53b310a22e9c811ce6->leave($__internal_94b1c8affd751b5c2e03a696d8561495cb0125f001469f53b310a22e9c811ce6_prof);

        
        $__internal_a32225cb68e3700a6d6bee01141dca95d6a7fd35d3ad4260dd657e929abaf311->leave($__internal_a32225cb68e3700a6d6bee01141dca95d6a7fd35d3ad4260dd657e929abaf311_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9faf66ddacc31e133819ab1ca52f738469b424f5bb8a54880489526bbe2ba10d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9faf66ddacc31e133819ab1ca52f738469b424f5bb8a54880489526bbe2ba10d->enter($__internal_9faf66ddacc31e133819ab1ca52f738469b424f5bb8a54880489526bbe2ba10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c05c9eff31dd2698039276c48d4d0f79060057d132f8a4ae7f9915fba0d8d63b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c05c9eff31dd2698039276c48d4d0f79060057d132f8a4ae7f9915fba0d8d63b->enter($__internal_c05c9eff31dd2698039276c48d4d0f79060057d132f8a4ae7f9915fba0d8d63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c05c9eff31dd2698039276c48d4d0f79060057d132f8a4ae7f9915fba0d8d63b->leave($__internal_c05c9eff31dd2698039276c48d4d0f79060057d132f8a4ae7f9915fba0d8d63b_prof);

        
        $__internal_9faf66ddacc31e133819ab1ca52f738469b424f5bb8a54880489526bbe2ba10d->leave($__internal_9faf66ddacc31e133819ab1ca52f738469b424f5bb8a54880489526bbe2ba10d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b82aff50e092ed3464d96a96bf1a32206be46aaf2f40d45a6608c4d376fa08b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b82aff50e092ed3464d96a96bf1a32206be46aaf2f40d45a6608c4d376fa08b1->enter($__internal_b82aff50e092ed3464d96a96bf1a32206be46aaf2f40d45a6608c4d376fa08b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_77c37c2beecf3cbab8170620b572b024456179ca45028c639edb9598a7ea8398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77c37c2beecf3cbab8170620b572b024456179ca45028c639edb9598a7ea8398->enter($__internal_77c37c2beecf3cbab8170620b572b024456179ca45028c639edb9598a7ea8398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_77c37c2beecf3cbab8170620b572b024456179ca45028c639edb9598a7ea8398->leave($__internal_77c37c2beecf3cbab8170620b572b024456179ca45028c639edb9598a7ea8398_prof);

        
        $__internal_b82aff50e092ed3464d96a96bf1a32206be46aaf2f40d45a6608c4d376fa08b1->leave($__internal_b82aff50e092ed3464d96a96bf1a32206be46aaf2f40d45a6608c4d376fa08b1_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/kevin/Dropbox/ProjetPtsCoiffeur/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
