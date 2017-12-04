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
        $__internal_5c9f1b840e1d4b3b2aee5b8207e99ff459f08636f0b59fb0e63a6775d6929476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c9f1b840e1d4b3b2aee5b8207e99ff459f08636f0b59fb0e63a6775d6929476->enter($__internal_5c9f1b840e1d4b3b2aee5b8207e99ff459f08636f0b59fb0e63a6775d6929476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_60a92aa86e5618b8116018a6156a2bb474a2b8d6470f338197f057ea97afeb07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60a92aa86e5618b8116018a6156a2bb474a2b8d6470f338197f057ea97afeb07->enter($__internal_60a92aa86e5618b8116018a6156a2bb474a2b8d6470f338197f057ea97afeb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c9f1b840e1d4b3b2aee5b8207e99ff459f08636f0b59fb0e63a6775d6929476->leave($__internal_5c9f1b840e1d4b3b2aee5b8207e99ff459f08636f0b59fb0e63a6775d6929476_prof);

        
        $__internal_60a92aa86e5618b8116018a6156a2bb474a2b8d6470f338197f057ea97afeb07->leave($__internal_60a92aa86e5618b8116018a6156a2bb474a2b8d6470f338197f057ea97afeb07_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f9a35a0dba463bd3b590b69f813e94dc0ec3cbe5a170c91a1e1fb0479816470c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9a35a0dba463bd3b590b69f813e94dc0ec3cbe5a170c91a1e1fb0479816470c->enter($__internal_f9a35a0dba463bd3b590b69f813e94dc0ec3cbe5a170c91a1e1fb0479816470c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1f4991c9ffd9838a8287df877c2375322472f7c3127d8b76ff390bee8f85161c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f4991c9ffd9838a8287df877c2375322472f7c3127d8b76ff390bee8f85161c->enter($__internal_1f4991c9ffd9838a8287df877c2375322472f7c3127d8b76ff390bee8f85161c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1f4991c9ffd9838a8287df877c2375322472f7c3127d8b76ff390bee8f85161c->leave($__internal_1f4991c9ffd9838a8287df877c2375322472f7c3127d8b76ff390bee8f85161c_prof);

        
        $__internal_f9a35a0dba463bd3b590b69f813e94dc0ec3cbe5a170c91a1e1fb0479816470c->leave($__internal_f9a35a0dba463bd3b590b69f813e94dc0ec3cbe5a170c91a1e1fb0479816470c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_63a10afd3bcc7bab56c361c736a4427606482271bfacc7786a64079b8468cbb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63a10afd3bcc7bab56c361c736a4427606482271bfacc7786a64079b8468cbb3->enter($__internal_63a10afd3bcc7bab56c361c736a4427606482271bfacc7786a64079b8468cbb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_932a33c923a9b38db12d39c5befc47ab5b62418864f32ffeb5f6b6405ad8fa3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_932a33c923a9b38db12d39c5befc47ab5b62418864f32ffeb5f6b6405ad8fa3c->enter($__internal_932a33c923a9b38db12d39c5befc47ab5b62418864f32ffeb5f6b6405ad8fa3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_932a33c923a9b38db12d39c5befc47ab5b62418864f32ffeb5f6b6405ad8fa3c->leave($__internal_932a33c923a9b38db12d39c5befc47ab5b62418864f32ffeb5f6b6405ad8fa3c_prof);

        
        $__internal_63a10afd3bcc7bab56c361c736a4427606482271bfacc7786a64079b8468cbb3->leave($__internal_63a10afd3bcc7bab56c361c736a4427606482271bfacc7786a64079b8468cbb3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f5a40c8a84f1c9b93e6a42861e5fcb3295d9536859547a55205fa26d01a9f0e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5a40c8a84f1c9b93e6a42861e5fcb3295d9536859547a55205fa26d01a9f0e3->enter($__internal_f5a40c8a84f1c9b93e6a42861e5fcb3295d9536859547a55205fa26d01a9f0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5169b94308205a37d9acec71236b779a1bf0043e91d7c80ac01d673cfcddf454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5169b94308205a37d9acec71236b779a1bf0043e91d7c80ac01d673cfcddf454->enter($__internal_5169b94308205a37d9acec71236b779a1bf0043e91d7c80ac01d673cfcddf454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5169b94308205a37d9acec71236b779a1bf0043e91d7c80ac01d673cfcddf454->leave($__internal_5169b94308205a37d9acec71236b779a1bf0043e91d7c80ac01d673cfcddf454_prof);

        
        $__internal_f5a40c8a84f1c9b93e6a42861e5fcb3295d9536859547a55205fa26d01a9f0e3->leave($__internal_f5a40c8a84f1c9b93e6a42861e5fcb3295d9536859547a55205fa26d01a9f0e3_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/kevin/Dropbox/PTS3/ProjetPtsCoiffeur/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
