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
        $__internal_e559d6f4090db94e33e89a08c0663e4e75e1b4b82dc4355b6e16e5a291072f31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e559d6f4090db94e33e89a08c0663e4e75e1b4b82dc4355b6e16e5a291072f31->enter($__internal_e559d6f4090db94e33e89a08c0663e4e75e1b4b82dc4355b6e16e5a291072f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8f681b87ec842d5b7658d70dc2f73de9e631309c740c561d98df2dc5527072a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f681b87ec842d5b7658d70dc2f73de9e631309c740c561d98df2dc5527072a2->enter($__internal_8f681b87ec842d5b7658d70dc2f73de9e631309c740c561d98df2dc5527072a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e559d6f4090db94e33e89a08c0663e4e75e1b4b82dc4355b6e16e5a291072f31->leave($__internal_e559d6f4090db94e33e89a08c0663e4e75e1b4b82dc4355b6e16e5a291072f31_prof);

        
        $__internal_8f681b87ec842d5b7658d70dc2f73de9e631309c740c561d98df2dc5527072a2->leave($__internal_8f681b87ec842d5b7658d70dc2f73de9e631309c740c561d98df2dc5527072a2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bc4aed1966a211d74618f18e66e83c3c6c3faa528ec4f947841c539cc3269461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc4aed1966a211d74618f18e66e83c3c6c3faa528ec4f947841c539cc3269461->enter($__internal_bc4aed1966a211d74618f18e66e83c3c6c3faa528ec4f947841c539cc3269461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c2791be79ff279135242ea93275d2d17899077e5a813fd0c224f3341cf36e237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2791be79ff279135242ea93275d2d17899077e5a813fd0c224f3341cf36e237->enter($__internal_c2791be79ff279135242ea93275d2d17899077e5a813fd0c224f3341cf36e237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c2791be79ff279135242ea93275d2d17899077e5a813fd0c224f3341cf36e237->leave($__internal_c2791be79ff279135242ea93275d2d17899077e5a813fd0c224f3341cf36e237_prof);

        
        $__internal_bc4aed1966a211d74618f18e66e83c3c6c3faa528ec4f947841c539cc3269461->leave($__internal_bc4aed1966a211d74618f18e66e83c3c6c3faa528ec4f947841c539cc3269461_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_283da051c25e4dcbd746108e6abc31e4241799acb0384a16572ef1b24842cfb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_283da051c25e4dcbd746108e6abc31e4241799acb0384a16572ef1b24842cfb3->enter($__internal_283da051c25e4dcbd746108e6abc31e4241799acb0384a16572ef1b24842cfb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4fa32ee45ffb4a4986aeef82e9dfd418d6940b38ed61e32a9f4cf4c896b7f0aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa32ee45ffb4a4986aeef82e9dfd418d6940b38ed61e32a9f4cf4c896b7f0aa->enter($__internal_4fa32ee45ffb4a4986aeef82e9dfd418d6940b38ed61e32a9f4cf4c896b7f0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4fa32ee45ffb4a4986aeef82e9dfd418d6940b38ed61e32a9f4cf4c896b7f0aa->leave($__internal_4fa32ee45ffb4a4986aeef82e9dfd418d6940b38ed61e32a9f4cf4c896b7f0aa_prof);

        
        $__internal_283da051c25e4dcbd746108e6abc31e4241799acb0384a16572ef1b24842cfb3->leave($__internal_283da051c25e4dcbd746108e6abc31e4241799acb0384a16572ef1b24842cfb3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0e12d7af4b49096dacf9de985b4d54b3ddb71c2186303a4424000a3fea927a4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e12d7af4b49096dacf9de985b4d54b3ddb71c2186303a4424000a3fea927a4d->enter($__internal_0e12d7af4b49096dacf9de985b4d54b3ddb71c2186303a4424000a3fea927a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b40c36d90491a7a2d0f2667009431f84a0723bc8edfaa5caab2de07a01140e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40c36d90491a7a2d0f2667009431f84a0723bc8edfaa5caab2de07a01140e5b->enter($__internal_b40c36d90491a7a2d0f2667009431f84a0723bc8edfaa5caab2de07a01140e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b40c36d90491a7a2d0f2667009431f84a0723bc8edfaa5caab2de07a01140e5b->leave($__internal_b40c36d90491a7a2d0f2667009431f84a0723bc8edfaa5caab2de07a01140e5b_prof);

        
        $__internal_0e12d7af4b49096dacf9de985b4d54b3ddb71c2186303a4424000a3fea927a4d->leave($__internal_0e12d7af4b49096dacf9de985b4d54b3ddb71c2186303a4424000a3fea927a4d_prof);

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
