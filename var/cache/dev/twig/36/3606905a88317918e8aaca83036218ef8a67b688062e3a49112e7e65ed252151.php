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
        $__internal_b50a89ffe3fb9d35b56ccaf705c72e8c2d4a5993271395fb6ced5b538138adb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b50a89ffe3fb9d35b56ccaf705c72e8c2d4a5993271395fb6ced5b538138adb9->enter($__internal_b50a89ffe3fb9d35b56ccaf705c72e8c2d4a5993271395fb6ced5b538138adb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_51337f100104bc3d2578b81e159d78e49c29b333d605fc94fcbff1a175769d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51337f100104bc3d2578b81e159d78e49c29b333d605fc94fcbff1a175769d36->enter($__internal_51337f100104bc3d2578b81e159d78e49c29b333d605fc94fcbff1a175769d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b50a89ffe3fb9d35b56ccaf705c72e8c2d4a5993271395fb6ced5b538138adb9->leave($__internal_b50a89ffe3fb9d35b56ccaf705c72e8c2d4a5993271395fb6ced5b538138adb9_prof);

        
        $__internal_51337f100104bc3d2578b81e159d78e49c29b333d605fc94fcbff1a175769d36->leave($__internal_51337f100104bc3d2578b81e159d78e49c29b333d605fc94fcbff1a175769d36_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d90b6b45d8b4deb8beb799c2c71976b71528f9be4e94d5969ab6f2c80943bb11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d90b6b45d8b4deb8beb799c2c71976b71528f9be4e94d5969ab6f2c80943bb11->enter($__internal_d90b6b45d8b4deb8beb799c2c71976b71528f9be4e94d5969ab6f2c80943bb11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4cd62702ce1a932c8242c36976f59af3bcc2e9d5f18ad8295c5c88ea7b409932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cd62702ce1a932c8242c36976f59af3bcc2e9d5f18ad8295c5c88ea7b409932->enter($__internal_4cd62702ce1a932c8242c36976f59af3bcc2e9d5f18ad8295c5c88ea7b409932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4cd62702ce1a932c8242c36976f59af3bcc2e9d5f18ad8295c5c88ea7b409932->leave($__internal_4cd62702ce1a932c8242c36976f59af3bcc2e9d5f18ad8295c5c88ea7b409932_prof);

        
        $__internal_d90b6b45d8b4deb8beb799c2c71976b71528f9be4e94d5969ab6f2c80943bb11->leave($__internal_d90b6b45d8b4deb8beb799c2c71976b71528f9be4e94d5969ab6f2c80943bb11_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7c7adecd9e0f8aed764350024d5efc991ccdf173e5b90186615ef3d1deaf454b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c7adecd9e0f8aed764350024d5efc991ccdf173e5b90186615ef3d1deaf454b->enter($__internal_7c7adecd9e0f8aed764350024d5efc991ccdf173e5b90186615ef3d1deaf454b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b6d0efe4561e50b162409505c2237ee0f7bfb69d31cfad2a14b8038d8040deaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d0efe4561e50b162409505c2237ee0f7bfb69d31cfad2a14b8038d8040deaf->enter($__internal_b6d0efe4561e50b162409505c2237ee0f7bfb69d31cfad2a14b8038d8040deaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b6d0efe4561e50b162409505c2237ee0f7bfb69d31cfad2a14b8038d8040deaf->leave($__internal_b6d0efe4561e50b162409505c2237ee0f7bfb69d31cfad2a14b8038d8040deaf_prof);

        
        $__internal_7c7adecd9e0f8aed764350024d5efc991ccdf173e5b90186615ef3d1deaf454b->leave($__internal_7c7adecd9e0f8aed764350024d5efc991ccdf173e5b90186615ef3d1deaf454b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_afbab1b0fe37d94e30da95e68f22c018f7d5eca274010c663a9fd2e8ba91e29a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afbab1b0fe37d94e30da95e68f22c018f7d5eca274010c663a9fd2e8ba91e29a->enter($__internal_afbab1b0fe37d94e30da95e68f22c018f7d5eca274010c663a9fd2e8ba91e29a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ddaf843478a0fa7634407667c3d2d0d6b719cf8c80af318dcbc31fa0902b141a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddaf843478a0fa7634407667c3d2d0d6b719cf8c80af318dcbc31fa0902b141a->enter($__internal_ddaf843478a0fa7634407667c3d2d0d6b719cf8c80af318dcbc31fa0902b141a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ddaf843478a0fa7634407667c3d2d0d6b719cf8c80af318dcbc31fa0902b141a->leave($__internal_ddaf843478a0fa7634407667c3d2d0d6b719cf8c80af318dcbc31fa0902b141a_prof);

        
        $__internal_afbab1b0fe37d94e30da95e68f22c018f7d5eca274010c663a9fd2e8ba91e29a->leave($__internal_afbab1b0fe37d94e30da95e68f22c018f7d5eca274010c663a9fd2e8ba91e29a_prof);

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
