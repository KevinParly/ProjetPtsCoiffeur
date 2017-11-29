<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_19e85e2e029cd134d96da716895ff2f6006578afa8e3666df5c65f371d3ea021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19e85e2e029cd134d96da716895ff2f6006578afa8e3666df5c65f371d3ea021->enter($__internal_19e85e2e029cd134d96da716895ff2f6006578afa8e3666df5c65f371d3ea021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_bc1431d7a4e42c1f1edc3f4a7fd943587171c0fd1e9c7c381a6dfdb169f2d02e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc1431d7a4e42c1f1edc3f4a7fd943587171c0fd1e9c7c381a6dfdb169f2d02e->enter($__internal_bc1431d7a4e42c1f1edc3f4a7fd943587171c0fd1e9c7c381a6dfdb169f2d02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19e85e2e029cd134d96da716895ff2f6006578afa8e3666df5c65f371d3ea021->leave($__internal_19e85e2e029cd134d96da716895ff2f6006578afa8e3666df5c65f371d3ea021_prof);

        
        $__internal_bc1431d7a4e42c1f1edc3f4a7fd943587171c0fd1e9c7c381a6dfdb169f2d02e->leave($__internal_bc1431d7a4e42c1f1edc3f4a7fd943587171c0fd1e9c7c381a6dfdb169f2d02e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_78995d2c03d41ed0cf9c780cbb68868596a6d5085d984177d79e1a54660cb45c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78995d2c03d41ed0cf9c780cbb68868596a6d5085d984177d79e1a54660cb45c->enter($__internal_78995d2c03d41ed0cf9c780cbb68868596a6d5085d984177d79e1a54660cb45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9dce97c98cf32079cd61a5eb37aca6febf89fe985555fc26b697c168388a87d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dce97c98cf32079cd61a5eb37aca6febf89fe985555fc26b697c168388a87d6->enter($__internal_9dce97c98cf32079cd61a5eb37aca6febf89fe985555fc26b697c168388a87d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9dce97c98cf32079cd61a5eb37aca6febf89fe985555fc26b697c168388a87d6->leave($__internal_9dce97c98cf32079cd61a5eb37aca6febf89fe985555fc26b697c168388a87d6_prof);

        
        $__internal_78995d2c03d41ed0cf9c780cbb68868596a6d5085d984177d79e1a54660cb45c->leave($__internal_78995d2c03d41ed0cf9c780cbb68868596a6d5085d984177d79e1a54660cb45c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_acac4395f15ded84ca268bc5b1303ccc6175e772da7081278a936702bea6364f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acac4395f15ded84ca268bc5b1303ccc6175e772da7081278a936702bea6364f->enter($__internal_acac4395f15ded84ca268bc5b1303ccc6175e772da7081278a936702bea6364f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d97c12f463536a8a7a9a4e275de256233dd8b2614f252db5e78b67c08f5f6945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d97c12f463536a8a7a9a4e275de256233dd8b2614f252db5e78b67c08f5f6945->enter($__internal_d97c12f463536a8a7a9a4e275de256233dd8b2614f252db5e78b67c08f5f6945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d97c12f463536a8a7a9a4e275de256233dd8b2614f252db5e78b67c08f5f6945->leave($__internal_d97c12f463536a8a7a9a4e275de256233dd8b2614f252db5e78b67c08f5f6945_prof);

        
        $__internal_acac4395f15ded84ca268bc5b1303ccc6175e772da7081278a936702bea6364f->leave($__internal_acac4395f15ded84ca268bc5b1303ccc6175e772da7081278a936702bea6364f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_31b2f545e8864d8cb67ff4bd5df64d0f3156b9955280749bb8696983161ce6f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31b2f545e8864d8cb67ff4bd5df64d0f3156b9955280749bb8696983161ce6f0->enter($__internal_31b2f545e8864d8cb67ff4bd5df64d0f3156b9955280749bb8696983161ce6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ff67bb43e7131a0ffe59f520e395a6c87b38294d45aa04415e373037251775cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff67bb43e7131a0ffe59f520e395a6c87b38294d45aa04415e373037251775cf->enter($__internal_ff67bb43e7131a0ffe59f520e395a6c87b38294d45aa04415e373037251775cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ff67bb43e7131a0ffe59f520e395a6c87b38294d45aa04415e373037251775cf->leave($__internal_ff67bb43e7131a0ffe59f520e395a6c87b38294d45aa04415e373037251775cf_prof);

        
        $__internal_31b2f545e8864d8cb67ff4bd5df64d0f3156b9955280749bb8696983161ce6f0->leave($__internal_31b2f545e8864d8cb67ff4bd5df64d0f3156b9955280749bb8696983161ce6f0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/www/ProjetCoiffeur/ProjetPtsCoiffeur/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
