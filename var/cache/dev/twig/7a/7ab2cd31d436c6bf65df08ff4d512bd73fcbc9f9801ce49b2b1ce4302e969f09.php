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
        $__internal_03baf248132e2e79c1598998524409d207b1415916f6178b81a04b4111cc404d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03baf248132e2e79c1598998524409d207b1415916f6178b81a04b4111cc404d->enter($__internal_03baf248132e2e79c1598998524409d207b1415916f6178b81a04b4111cc404d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3da694a0b49193b98981d75bd48759f8a72fe8a08b2992c866c9f5c264b3fad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da694a0b49193b98981d75bd48759f8a72fe8a08b2992c866c9f5c264b3fad1->enter($__internal_3da694a0b49193b98981d75bd48759f8a72fe8a08b2992c866c9f5c264b3fad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03baf248132e2e79c1598998524409d207b1415916f6178b81a04b4111cc404d->leave($__internal_03baf248132e2e79c1598998524409d207b1415916f6178b81a04b4111cc404d_prof);

        
        $__internal_3da694a0b49193b98981d75bd48759f8a72fe8a08b2992c866c9f5c264b3fad1->leave($__internal_3da694a0b49193b98981d75bd48759f8a72fe8a08b2992c866c9f5c264b3fad1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a323f5a0fc9b28d124107fca3144b6166e1f5fbd1c4190ed2fcdb9cda8663ad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a323f5a0fc9b28d124107fca3144b6166e1f5fbd1c4190ed2fcdb9cda8663ad9->enter($__internal_a323f5a0fc9b28d124107fca3144b6166e1f5fbd1c4190ed2fcdb9cda8663ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6788baab5fff60023829eb320887f167b3bacd0f73edc921c63ec396cdce4a3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6788baab5fff60023829eb320887f167b3bacd0f73edc921c63ec396cdce4a3f->enter($__internal_6788baab5fff60023829eb320887f167b3bacd0f73edc921c63ec396cdce4a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6788baab5fff60023829eb320887f167b3bacd0f73edc921c63ec396cdce4a3f->leave($__internal_6788baab5fff60023829eb320887f167b3bacd0f73edc921c63ec396cdce4a3f_prof);

        
        $__internal_a323f5a0fc9b28d124107fca3144b6166e1f5fbd1c4190ed2fcdb9cda8663ad9->leave($__internal_a323f5a0fc9b28d124107fca3144b6166e1f5fbd1c4190ed2fcdb9cda8663ad9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d71e6681812fe6ef6e5550ebce30de7d9be5f86e4f9b3e82abaa936add2df8ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d71e6681812fe6ef6e5550ebce30de7d9be5f86e4f9b3e82abaa936add2df8ee->enter($__internal_d71e6681812fe6ef6e5550ebce30de7d9be5f86e4f9b3e82abaa936add2df8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e9ae786b93a25a4ce8afdbb08c8222837819a53e06f2c4ca677abfae0175e0f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ae786b93a25a4ce8afdbb08c8222837819a53e06f2c4ca677abfae0175e0f4->enter($__internal_e9ae786b93a25a4ce8afdbb08c8222837819a53e06f2c4ca677abfae0175e0f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e9ae786b93a25a4ce8afdbb08c8222837819a53e06f2c4ca677abfae0175e0f4->leave($__internal_e9ae786b93a25a4ce8afdbb08c8222837819a53e06f2c4ca677abfae0175e0f4_prof);

        
        $__internal_d71e6681812fe6ef6e5550ebce30de7d9be5f86e4f9b3e82abaa936add2df8ee->leave($__internal_d71e6681812fe6ef6e5550ebce30de7d9be5f86e4f9b3e82abaa936add2df8ee_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e5f8569cd99dddc6c3319120c930a73b20912a292d902d56e9802b8371f9c3eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5f8569cd99dddc6c3319120c930a73b20912a292d902d56e9802b8371f9c3eb->enter($__internal_e5f8569cd99dddc6c3319120c930a73b20912a292d902d56e9802b8371f9c3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a05f9ac6cd53379b6b77e033e6c6bfbb54c7265ce17d3c3c68903e028346bab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05f9ac6cd53379b6b77e033e6c6bfbb54c7265ce17d3c3c68903e028346bab2->enter($__internal_a05f9ac6cd53379b6b77e033e6c6bfbb54c7265ce17d3c3c68903e028346bab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a05f9ac6cd53379b6b77e033e6c6bfbb54c7265ce17d3c3c68903e028346bab2->leave($__internal_a05f9ac6cd53379b6b77e033e6c6bfbb54c7265ce17d3c3c68903e028346bab2_prof);

        
        $__internal_e5f8569cd99dddc6c3319120c930a73b20912a292d902d56e9802b8371f9c3eb->leave($__internal_e5f8569cd99dddc6c3319120c930a73b20912a292d902d56e9802b8371f9c3eb_prof);

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
