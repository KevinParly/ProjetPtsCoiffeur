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
        $__internal_3acb423e806264679b18f0ca28bc49da59519379c0b0871a740f22ef64142387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3acb423e806264679b18f0ca28bc49da59519379c0b0871a740f22ef64142387->enter($__internal_3acb423e806264679b18f0ca28bc49da59519379c0b0871a740f22ef64142387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1857c00e868ccc56b29d15ec538921b7d355cb197389c7398d65079222c84f3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1857c00e868ccc56b29d15ec538921b7d355cb197389c7398d65079222c84f3a->enter($__internal_1857c00e868ccc56b29d15ec538921b7d355cb197389c7398d65079222c84f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3acb423e806264679b18f0ca28bc49da59519379c0b0871a740f22ef64142387->leave($__internal_3acb423e806264679b18f0ca28bc49da59519379c0b0871a740f22ef64142387_prof);

        
        $__internal_1857c00e868ccc56b29d15ec538921b7d355cb197389c7398d65079222c84f3a->leave($__internal_1857c00e868ccc56b29d15ec538921b7d355cb197389c7398d65079222c84f3a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b602abab2f3f569dd9470d76d4f73bd2a70a2895f82fa2172bde4fcf481eb8d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b602abab2f3f569dd9470d76d4f73bd2a70a2895f82fa2172bde4fcf481eb8d1->enter($__internal_b602abab2f3f569dd9470d76d4f73bd2a70a2895f82fa2172bde4fcf481eb8d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_49260d44149752d570bcafed7f4f08d6ae32390362b5ba16fd9fe22e5f2a6fc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49260d44149752d570bcafed7f4f08d6ae32390362b5ba16fd9fe22e5f2a6fc8->enter($__internal_49260d44149752d570bcafed7f4f08d6ae32390362b5ba16fd9fe22e5f2a6fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_49260d44149752d570bcafed7f4f08d6ae32390362b5ba16fd9fe22e5f2a6fc8->leave($__internal_49260d44149752d570bcafed7f4f08d6ae32390362b5ba16fd9fe22e5f2a6fc8_prof);

        
        $__internal_b602abab2f3f569dd9470d76d4f73bd2a70a2895f82fa2172bde4fcf481eb8d1->leave($__internal_b602abab2f3f569dd9470d76d4f73bd2a70a2895f82fa2172bde4fcf481eb8d1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_532e4f244e308a3360478a470022ea16cc94814c41ba0c6e9345df4cc89ab5f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_532e4f244e308a3360478a470022ea16cc94814c41ba0c6e9345df4cc89ab5f9->enter($__internal_532e4f244e308a3360478a470022ea16cc94814c41ba0c6e9345df4cc89ab5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_acac21fa24c24a416388f4d72715a3e5bb4b02bcf84bdf0259301e658369fe41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acac21fa24c24a416388f4d72715a3e5bb4b02bcf84bdf0259301e658369fe41->enter($__internal_acac21fa24c24a416388f4d72715a3e5bb4b02bcf84bdf0259301e658369fe41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_acac21fa24c24a416388f4d72715a3e5bb4b02bcf84bdf0259301e658369fe41->leave($__internal_acac21fa24c24a416388f4d72715a3e5bb4b02bcf84bdf0259301e658369fe41_prof);

        
        $__internal_532e4f244e308a3360478a470022ea16cc94814c41ba0c6e9345df4cc89ab5f9->leave($__internal_532e4f244e308a3360478a470022ea16cc94814c41ba0c6e9345df4cc89ab5f9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_928d4b640669df426a3fc42c7f66bc5f49e40f435e94cf84b95beccc3b8e65fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_928d4b640669df426a3fc42c7f66bc5f49e40f435e94cf84b95beccc3b8e65fd->enter($__internal_928d4b640669df426a3fc42c7f66bc5f49e40f435e94cf84b95beccc3b8e65fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f4e2e3bcdc1c6c4c9f2f0e452a331442af36afa383b39042c6fc5e6c5cb2ba55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4e2e3bcdc1c6c4c9f2f0e452a331442af36afa383b39042c6fc5e6c5cb2ba55->enter($__internal_f4e2e3bcdc1c6c4c9f2f0e452a331442af36afa383b39042c6fc5e6c5cb2ba55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f4e2e3bcdc1c6c4c9f2f0e452a331442af36afa383b39042c6fc5e6c5cb2ba55->leave($__internal_f4e2e3bcdc1c6c4c9f2f0e452a331442af36afa383b39042c6fc5e6c5cb2ba55_prof);

        
        $__internal_928d4b640669df426a3fc42c7f66bc5f49e40f435e94cf84b95beccc3b8e65fd->leave($__internal_928d4b640669df426a3fc42c7f66bc5f49e40f435e94cf84b95beccc3b8e65fd_prof);

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
