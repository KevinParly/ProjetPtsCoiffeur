<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
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
        $__internal_634d2e61be64d9c925a49dd31051b38d4c5a53c1f457543dd5cc459987c553a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_634d2e61be64d9c925a49dd31051b38d4c5a53c1f457543dd5cc459987c553a0->enter($__internal_634d2e61be64d9c925a49dd31051b38d4c5a53c1f457543dd5cc459987c553a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2e705eb69707e00e4a338aef2f00916d1437c465ef72f41e09e0ea802073091f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e705eb69707e00e4a338aef2f00916d1437c465ef72f41e09e0ea802073091f->enter($__internal_2e705eb69707e00e4a338aef2f00916d1437c465ef72f41e09e0ea802073091f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_634d2e61be64d9c925a49dd31051b38d4c5a53c1f457543dd5cc459987c553a0->leave($__internal_634d2e61be64d9c925a49dd31051b38d4c5a53c1f457543dd5cc459987c553a0_prof);

        
        $__internal_2e705eb69707e00e4a338aef2f00916d1437c465ef72f41e09e0ea802073091f->leave($__internal_2e705eb69707e00e4a338aef2f00916d1437c465ef72f41e09e0ea802073091f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_698d437b6e5447ed09bab150bf58e11e529193005ed7595fb82ad4678256a699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_698d437b6e5447ed09bab150bf58e11e529193005ed7595fb82ad4678256a699->enter($__internal_698d437b6e5447ed09bab150bf58e11e529193005ed7595fb82ad4678256a699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d70b3eadb1af5787c3f5022e2c234851fadc9157609fea7334205af145451483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d70b3eadb1af5787c3f5022e2c234851fadc9157609fea7334205af145451483->enter($__internal_d70b3eadb1af5787c3f5022e2c234851fadc9157609fea7334205af145451483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d70b3eadb1af5787c3f5022e2c234851fadc9157609fea7334205af145451483->leave($__internal_d70b3eadb1af5787c3f5022e2c234851fadc9157609fea7334205af145451483_prof);

        
        $__internal_698d437b6e5447ed09bab150bf58e11e529193005ed7595fb82ad4678256a699->leave($__internal_698d437b6e5447ed09bab150bf58e11e529193005ed7595fb82ad4678256a699_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e4ea15af630081dd55179181e7de7e9f73193168cea4fc9c3c67364fab59d6c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4ea15af630081dd55179181e7de7e9f73193168cea4fc9c3c67364fab59d6c7->enter($__internal_e4ea15af630081dd55179181e7de7e9f73193168cea4fc9c3c67364fab59d6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_52294024c46773bf85dd872d27f73bca07a090b80454e305b323b1dc5d5fbd8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52294024c46773bf85dd872d27f73bca07a090b80454e305b323b1dc5d5fbd8f->enter($__internal_52294024c46773bf85dd872d27f73bca07a090b80454e305b323b1dc5d5fbd8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_52294024c46773bf85dd872d27f73bca07a090b80454e305b323b1dc5d5fbd8f->leave($__internal_52294024c46773bf85dd872d27f73bca07a090b80454e305b323b1dc5d5fbd8f_prof);

        
        $__internal_e4ea15af630081dd55179181e7de7e9f73193168cea4fc9c3c67364fab59d6c7->leave($__internal_e4ea15af630081dd55179181e7de7e9f73193168cea4fc9c3c67364fab59d6c7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3046cd7228bca05c8e78ef20e264932f1209f9e5eefb8dae02be8f29dfafac73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3046cd7228bca05c8e78ef20e264932f1209f9e5eefb8dae02be8f29dfafac73->enter($__internal_3046cd7228bca05c8e78ef20e264932f1209f9e5eefb8dae02be8f29dfafac73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f8f94f3a7a741456dc2b838a4ad040883a6a9a4647fada2ac939bf3199cc1641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8f94f3a7a741456dc2b838a4ad040883a6a9a4647fada2ac939bf3199cc1641->enter($__internal_f8f94f3a7a741456dc2b838a4ad040883a6a9a4647fada2ac939bf3199cc1641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f8f94f3a7a741456dc2b838a4ad040883a6a9a4647fada2ac939bf3199cc1641->leave($__internal_f8f94f3a7a741456dc2b838a4ad040883a6a9a4647fada2ac939bf3199cc1641_prof);

        
        $__internal_3046cd7228bca05c8e78ef20e264932f1209f9e5eefb8dae02be8f29dfafac73->leave($__internal_3046cd7228bca05c8e78ef20e264932f1209f9e5eefb8dae02be8f29dfafac73_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/kevin/Dropbox/PTS3/ProjetPtsCoiffeur/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
