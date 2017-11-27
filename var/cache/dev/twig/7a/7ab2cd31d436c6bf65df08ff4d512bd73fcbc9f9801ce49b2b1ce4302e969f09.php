<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5d54ece49f3eaea3b8641a621aa5ea65eab7f2456c91cd9fb7e51d715f7116e9 extends Twig_Template
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
        $__internal_1b8ce8263adb280face4d19e774044a3ffbf557616d594cc776cb18c67bebefc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b8ce8263adb280face4d19e774044a3ffbf557616d594cc776cb18c67bebefc->enter($__internal_1b8ce8263adb280face4d19e774044a3ffbf557616d594cc776cb18c67bebefc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_517192eb095c8ed4faac5ef8943ed46ab6da6e037007f83d79cc73dac14a93ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_517192eb095c8ed4faac5ef8943ed46ab6da6e037007f83d79cc73dac14a93ae->enter($__internal_517192eb095c8ed4faac5ef8943ed46ab6da6e037007f83d79cc73dac14a93ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b8ce8263adb280face4d19e774044a3ffbf557616d594cc776cb18c67bebefc->leave($__internal_1b8ce8263adb280face4d19e774044a3ffbf557616d594cc776cb18c67bebefc_prof);

        
        $__internal_517192eb095c8ed4faac5ef8943ed46ab6da6e037007f83d79cc73dac14a93ae->leave($__internal_517192eb095c8ed4faac5ef8943ed46ab6da6e037007f83d79cc73dac14a93ae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_749739f51b1839fe2d8a603427fafbb72d901dd72cb7720679eb987bf1fa8375 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_749739f51b1839fe2d8a603427fafbb72d901dd72cb7720679eb987bf1fa8375->enter($__internal_749739f51b1839fe2d8a603427fafbb72d901dd72cb7720679eb987bf1fa8375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d66c9892b17bfd94f9ab4895868d0628734aaa68515ef016abb7748ac820ed6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d66c9892b17bfd94f9ab4895868d0628734aaa68515ef016abb7748ac820ed6d->enter($__internal_d66c9892b17bfd94f9ab4895868d0628734aaa68515ef016abb7748ac820ed6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d66c9892b17bfd94f9ab4895868d0628734aaa68515ef016abb7748ac820ed6d->leave($__internal_d66c9892b17bfd94f9ab4895868d0628734aaa68515ef016abb7748ac820ed6d_prof);

        
        $__internal_749739f51b1839fe2d8a603427fafbb72d901dd72cb7720679eb987bf1fa8375->leave($__internal_749739f51b1839fe2d8a603427fafbb72d901dd72cb7720679eb987bf1fa8375_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3ba6c0a8ddc008b572458b265bef18bb8c253a26980072b5bff05541687cf325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ba6c0a8ddc008b572458b265bef18bb8c253a26980072b5bff05541687cf325->enter($__internal_3ba6c0a8ddc008b572458b265bef18bb8c253a26980072b5bff05541687cf325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f9c48b11d1ba6e097d040eeeef822fea9e6dc63a794f6b8af5b2e6edd25da3a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9c48b11d1ba6e097d040eeeef822fea9e6dc63a794f6b8af5b2e6edd25da3a1->enter($__internal_f9c48b11d1ba6e097d040eeeef822fea9e6dc63a794f6b8af5b2e6edd25da3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f9c48b11d1ba6e097d040eeeef822fea9e6dc63a794f6b8af5b2e6edd25da3a1->leave($__internal_f9c48b11d1ba6e097d040eeeef822fea9e6dc63a794f6b8af5b2e6edd25da3a1_prof);

        
        $__internal_3ba6c0a8ddc008b572458b265bef18bb8c253a26980072b5bff05541687cf325->leave($__internal_3ba6c0a8ddc008b572458b265bef18bb8c253a26980072b5bff05541687cf325_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9cb67e426a143019260b0018c96020b72fa33534e9c3e01fb6da1b4bb9bb93e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cb67e426a143019260b0018c96020b72fa33534e9c3e01fb6da1b4bb9bb93e7->enter($__internal_9cb67e426a143019260b0018c96020b72fa33534e9c3e01fb6da1b4bb9bb93e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e1b93258aa71ea42ab9f05f031b51395504049abdf9d8e702e35a9edf4601475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1b93258aa71ea42ab9f05f031b51395504049abdf9d8e702e35a9edf4601475->enter($__internal_e1b93258aa71ea42ab9f05f031b51395504049abdf9d8e702e35a9edf4601475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e1b93258aa71ea42ab9f05f031b51395504049abdf9d8e702e35a9edf4601475->leave($__internal_e1b93258aa71ea42ab9f05f031b51395504049abdf9d8e702e35a9edf4601475_prof);

        
        $__internal_9cb67e426a143019260b0018c96020b72fa33534e9c3e01fb6da1b4bb9bb93e7->leave($__internal_9cb67e426a143019260b0018c96020b72fa33534e9c3e01fb6da1b4bb9bb93e7_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "D:\\wamp\\www\\ProjetPtsCoiffeur\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
