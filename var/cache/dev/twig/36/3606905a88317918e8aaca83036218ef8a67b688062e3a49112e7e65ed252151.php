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
        $__internal_0ed687a961124ec4c3c63d0dc06cab7d4f85553c0e3513c37729ca7b4edccf45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ed687a961124ec4c3c63d0dc06cab7d4f85553c0e3513c37729ca7b4edccf45->enter($__internal_0ed687a961124ec4c3c63d0dc06cab7d4f85553c0e3513c37729ca7b4edccf45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f1070d0530bb02397b56ebd508dd499d7db07e6975430da84138b18ed9564450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1070d0530bb02397b56ebd508dd499d7db07e6975430da84138b18ed9564450->enter($__internal_f1070d0530bb02397b56ebd508dd499d7db07e6975430da84138b18ed9564450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ed687a961124ec4c3c63d0dc06cab7d4f85553c0e3513c37729ca7b4edccf45->leave($__internal_0ed687a961124ec4c3c63d0dc06cab7d4f85553c0e3513c37729ca7b4edccf45_prof);

        
        $__internal_f1070d0530bb02397b56ebd508dd499d7db07e6975430da84138b18ed9564450->leave($__internal_f1070d0530bb02397b56ebd508dd499d7db07e6975430da84138b18ed9564450_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5fecd2a0acff070082807fafd9398d8fde8161a4d416b1c4df25b3ea26a4e377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fecd2a0acff070082807fafd9398d8fde8161a4d416b1c4df25b3ea26a4e377->enter($__internal_5fecd2a0acff070082807fafd9398d8fde8161a4d416b1c4df25b3ea26a4e377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7c725e4cc80d33be121609c65e50c5f5e35bf5c218792573e26b8109536e183a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c725e4cc80d33be121609c65e50c5f5e35bf5c218792573e26b8109536e183a->enter($__internal_7c725e4cc80d33be121609c65e50c5f5e35bf5c218792573e26b8109536e183a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7c725e4cc80d33be121609c65e50c5f5e35bf5c218792573e26b8109536e183a->leave($__internal_7c725e4cc80d33be121609c65e50c5f5e35bf5c218792573e26b8109536e183a_prof);

        
        $__internal_5fecd2a0acff070082807fafd9398d8fde8161a4d416b1c4df25b3ea26a4e377->leave($__internal_5fecd2a0acff070082807fafd9398d8fde8161a4d416b1c4df25b3ea26a4e377_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_79c94faf70fb5e8bd12d3ec794d9952f7e9710914f32eeafda2b7c4c0def538c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79c94faf70fb5e8bd12d3ec794d9952f7e9710914f32eeafda2b7c4c0def538c->enter($__internal_79c94faf70fb5e8bd12d3ec794d9952f7e9710914f32eeafda2b7c4c0def538c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_20d265077a1a5b119ab2ec72dc50bbdadf2638f9af48c993948f622fe09ef67b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20d265077a1a5b119ab2ec72dc50bbdadf2638f9af48c993948f622fe09ef67b->enter($__internal_20d265077a1a5b119ab2ec72dc50bbdadf2638f9af48c993948f622fe09ef67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_20d265077a1a5b119ab2ec72dc50bbdadf2638f9af48c993948f622fe09ef67b->leave($__internal_20d265077a1a5b119ab2ec72dc50bbdadf2638f9af48c993948f622fe09ef67b_prof);

        
        $__internal_79c94faf70fb5e8bd12d3ec794d9952f7e9710914f32eeafda2b7c4c0def538c->leave($__internal_79c94faf70fb5e8bd12d3ec794d9952f7e9710914f32eeafda2b7c4c0def538c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a45dc1f5cc10eef07b821f6f260135d2fcc5dc06e41da80a108f7205a63d465d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a45dc1f5cc10eef07b821f6f260135d2fcc5dc06e41da80a108f7205a63d465d->enter($__internal_a45dc1f5cc10eef07b821f6f260135d2fcc5dc06e41da80a108f7205a63d465d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_513e2add4b99ee786d1de97a34845797b0d075d78f80b1cf94114afc0a71524a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_513e2add4b99ee786d1de97a34845797b0d075d78f80b1cf94114afc0a71524a->enter($__internal_513e2add4b99ee786d1de97a34845797b0d075d78f80b1cf94114afc0a71524a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_513e2add4b99ee786d1de97a34845797b0d075d78f80b1cf94114afc0a71524a->leave($__internal_513e2add4b99ee786d1de97a34845797b0d075d78f80b1cf94114afc0a71524a_prof);

        
        $__internal_a45dc1f5cc10eef07b821f6f260135d2fcc5dc06e41da80a108f7205a63d465d->leave($__internal_a45dc1f5cc10eef07b821f6f260135d2fcc5dc06e41da80a108f7205a63d465d_prof);

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
