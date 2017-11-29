<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
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
        $__internal_01a5d705105517baba88d6475769ef30ebdc7cbcd4c9f9d715a157a61e112ef9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01a5d705105517baba88d6475769ef30ebdc7cbcd4c9f9d715a157a61e112ef9->enter($__internal_01a5d705105517baba88d6475769ef30ebdc7cbcd4c9f9d715a157a61e112ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2f4ae01fe5cf3c33277e10f1623c2df3630cfcd4a395108b536c45a15d368c9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f4ae01fe5cf3c33277e10f1623c2df3630cfcd4a395108b536c45a15d368c9b->enter($__internal_2f4ae01fe5cf3c33277e10f1623c2df3630cfcd4a395108b536c45a15d368c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01a5d705105517baba88d6475769ef30ebdc7cbcd4c9f9d715a157a61e112ef9->leave($__internal_01a5d705105517baba88d6475769ef30ebdc7cbcd4c9f9d715a157a61e112ef9_prof);

        
        $__internal_2f4ae01fe5cf3c33277e10f1623c2df3630cfcd4a395108b536c45a15d368c9b->leave($__internal_2f4ae01fe5cf3c33277e10f1623c2df3630cfcd4a395108b536c45a15d368c9b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_90d03eacfa35db4dcb5d760757723d14727291958a77122e5be064f81e96a702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90d03eacfa35db4dcb5d760757723d14727291958a77122e5be064f81e96a702->enter($__internal_90d03eacfa35db4dcb5d760757723d14727291958a77122e5be064f81e96a702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_83d86c299ac362080c6eb808caa89ab1bf54163d6928467033d3a260447e23cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83d86c299ac362080c6eb808caa89ab1bf54163d6928467033d3a260447e23cf->enter($__internal_83d86c299ac362080c6eb808caa89ab1bf54163d6928467033d3a260447e23cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_83d86c299ac362080c6eb808caa89ab1bf54163d6928467033d3a260447e23cf->leave($__internal_83d86c299ac362080c6eb808caa89ab1bf54163d6928467033d3a260447e23cf_prof);

        
        $__internal_90d03eacfa35db4dcb5d760757723d14727291958a77122e5be064f81e96a702->leave($__internal_90d03eacfa35db4dcb5d760757723d14727291958a77122e5be064f81e96a702_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b16190da3d81f0b49b464d20d5935776a74083071aebae028ec513368fbaa28a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b16190da3d81f0b49b464d20d5935776a74083071aebae028ec513368fbaa28a->enter($__internal_b16190da3d81f0b49b464d20d5935776a74083071aebae028ec513368fbaa28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1e7fc161245618739b9aeba879fee209bdf55d345899bdb84cd621344e4da82f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e7fc161245618739b9aeba879fee209bdf55d345899bdb84cd621344e4da82f->enter($__internal_1e7fc161245618739b9aeba879fee209bdf55d345899bdb84cd621344e4da82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1e7fc161245618739b9aeba879fee209bdf55d345899bdb84cd621344e4da82f->leave($__internal_1e7fc161245618739b9aeba879fee209bdf55d345899bdb84cd621344e4da82f_prof);

        
        $__internal_b16190da3d81f0b49b464d20d5935776a74083071aebae028ec513368fbaa28a->leave($__internal_b16190da3d81f0b49b464d20d5935776a74083071aebae028ec513368fbaa28a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_835741d80d28fe8851164d667166d1eda3aad1ec8be5823a1f7a3ed95c4f69d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_835741d80d28fe8851164d667166d1eda3aad1ec8be5823a1f7a3ed95c4f69d3->enter($__internal_835741d80d28fe8851164d667166d1eda3aad1ec8be5823a1f7a3ed95c4f69d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d85c0dd76acdfd9ad72d67e4c536dea32a26413ecf89306f8cb0f6f26d01bd4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d85c0dd76acdfd9ad72d67e4c536dea32a26413ecf89306f8cb0f6f26d01bd4b->enter($__internal_d85c0dd76acdfd9ad72d67e4c536dea32a26413ecf89306f8cb0f6f26d01bd4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d85c0dd76acdfd9ad72d67e4c536dea32a26413ecf89306f8cb0f6f26d01bd4b->leave($__internal_d85c0dd76acdfd9ad72d67e4c536dea32a26413ecf89306f8cb0f6f26d01bd4b_prof);

        
        $__internal_835741d80d28fe8851164d667166d1eda3aad1ec8be5823a1f7a3ed95c4f69d3->leave($__internal_835741d80d28fe8851164d667166d1eda3aad1ec8be5823a1f7a3ed95c4f69d3_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/www/ProjetCoiffeur/ProjetPtsCoiffeur/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
