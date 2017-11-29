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
        $__internal_883ac4df521a029e802ab5d81100b05ff981a0257b5379fe70272bdbe7b8e61e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_883ac4df521a029e802ab5d81100b05ff981a0257b5379fe70272bdbe7b8e61e->enter($__internal_883ac4df521a029e802ab5d81100b05ff981a0257b5379fe70272bdbe7b8e61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_08251ef43b8eb360e98746638610726655d40fbadbb1e384b767dbe5bc830dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08251ef43b8eb360e98746638610726655d40fbadbb1e384b767dbe5bc830dac->enter($__internal_08251ef43b8eb360e98746638610726655d40fbadbb1e384b767dbe5bc830dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_883ac4df521a029e802ab5d81100b05ff981a0257b5379fe70272bdbe7b8e61e->leave($__internal_883ac4df521a029e802ab5d81100b05ff981a0257b5379fe70272bdbe7b8e61e_prof);

        
        $__internal_08251ef43b8eb360e98746638610726655d40fbadbb1e384b767dbe5bc830dac->leave($__internal_08251ef43b8eb360e98746638610726655d40fbadbb1e384b767dbe5bc830dac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ec3cf6cd657fec1d1bdbd77ce4cde3c72a2375cac13aa93716b65ff0f7e8fe56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec3cf6cd657fec1d1bdbd77ce4cde3c72a2375cac13aa93716b65ff0f7e8fe56->enter($__internal_ec3cf6cd657fec1d1bdbd77ce4cde3c72a2375cac13aa93716b65ff0f7e8fe56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9e1256ca99012f16c9f7937ad3bd2b8ab1b9864564fb2da45d23ff6ece585b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e1256ca99012f16c9f7937ad3bd2b8ab1b9864564fb2da45d23ff6ece585b65->enter($__internal_9e1256ca99012f16c9f7937ad3bd2b8ab1b9864564fb2da45d23ff6ece585b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9e1256ca99012f16c9f7937ad3bd2b8ab1b9864564fb2da45d23ff6ece585b65->leave($__internal_9e1256ca99012f16c9f7937ad3bd2b8ab1b9864564fb2da45d23ff6ece585b65_prof);

        
        $__internal_ec3cf6cd657fec1d1bdbd77ce4cde3c72a2375cac13aa93716b65ff0f7e8fe56->leave($__internal_ec3cf6cd657fec1d1bdbd77ce4cde3c72a2375cac13aa93716b65ff0f7e8fe56_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_22f455a5593eab2a051403de291e837c193f2e9a2988da27457664c9d991a843 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22f455a5593eab2a051403de291e837c193f2e9a2988da27457664c9d991a843->enter($__internal_22f455a5593eab2a051403de291e837c193f2e9a2988da27457664c9d991a843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7a02c6ec6155edd4355423ea0c2335fcda99d87864f4ddbd7ca70bb79787d86e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a02c6ec6155edd4355423ea0c2335fcda99d87864f4ddbd7ca70bb79787d86e->enter($__internal_7a02c6ec6155edd4355423ea0c2335fcda99d87864f4ddbd7ca70bb79787d86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_7a02c6ec6155edd4355423ea0c2335fcda99d87864f4ddbd7ca70bb79787d86e->leave($__internal_7a02c6ec6155edd4355423ea0c2335fcda99d87864f4ddbd7ca70bb79787d86e_prof);

        
        $__internal_22f455a5593eab2a051403de291e837c193f2e9a2988da27457664c9d991a843->leave($__internal_22f455a5593eab2a051403de291e837c193f2e9a2988da27457664c9d991a843_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_41494d26fff32e685b84a1153e120366503681109b7f4a1ab930c71b6e9d6c17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41494d26fff32e685b84a1153e120366503681109b7f4a1ab930c71b6e9d6c17->enter($__internal_41494d26fff32e685b84a1153e120366503681109b7f4a1ab930c71b6e9d6c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_41e0c16a4c8a7d95ca0e351048ba7bf60bdb6ab0ea7a956da417918510851b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e0c16a4c8a7d95ca0e351048ba7bf60bdb6ab0ea7a956da417918510851b19->enter($__internal_41e0c16a4c8a7d95ca0e351048ba7bf60bdb6ab0ea7a956da417918510851b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_41e0c16a4c8a7d95ca0e351048ba7bf60bdb6ab0ea7a956da417918510851b19->leave($__internal_41e0c16a4c8a7d95ca0e351048ba7bf60bdb6ab0ea7a956da417918510851b19_prof);

        
        $__internal_41494d26fff32e685b84a1153e120366503681109b7f4a1ab930c71b6e9d6c17->leave($__internal_41494d26fff32e685b84a1153e120366503681109b7f4a1ab930c71b6e9d6c17_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/kevin/Dropbox/ProjetPtsCoiffeur/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
