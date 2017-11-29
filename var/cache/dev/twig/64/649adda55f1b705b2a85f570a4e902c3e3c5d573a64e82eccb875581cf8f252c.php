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
        $__internal_4284390d9125ddf3e4115013ad2a506ff2a9a3c21ff66a2d4113f053c5f53986 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4284390d9125ddf3e4115013ad2a506ff2a9a3c21ff66a2d4113f053c5f53986->enter($__internal_4284390d9125ddf3e4115013ad2a506ff2a9a3c21ff66a2d4113f053c5f53986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3fb1dfb0ce3d502c5cfc878597facda13ee2de78af11e04eef6705fdbe7b7b01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fb1dfb0ce3d502c5cfc878597facda13ee2de78af11e04eef6705fdbe7b7b01->enter($__internal_3fb1dfb0ce3d502c5cfc878597facda13ee2de78af11e04eef6705fdbe7b7b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4284390d9125ddf3e4115013ad2a506ff2a9a3c21ff66a2d4113f053c5f53986->leave($__internal_4284390d9125ddf3e4115013ad2a506ff2a9a3c21ff66a2d4113f053c5f53986_prof);

        
        $__internal_3fb1dfb0ce3d502c5cfc878597facda13ee2de78af11e04eef6705fdbe7b7b01->leave($__internal_3fb1dfb0ce3d502c5cfc878597facda13ee2de78af11e04eef6705fdbe7b7b01_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a00445c299aad6093c74ea1e85bdb1c090c2938f5827f5264d56bf0bbc5291ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a00445c299aad6093c74ea1e85bdb1c090c2938f5827f5264d56bf0bbc5291ea->enter($__internal_a00445c299aad6093c74ea1e85bdb1c090c2938f5827f5264d56bf0bbc5291ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fa7315e22ed757ef615b0f9cf62e16e3b4e44c28785d52b04820a79c70de2f0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa7315e22ed757ef615b0f9cf62e16e3b4e44c28785d52b04820a79c70de2f0d->enter($__internal_fa7315e22ed757ef615b0f9cf62e16e3b4e44c28785d52b04820a79c70de2f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fa7315e22ed757ef615b0f9cf62e16e3b4e44c28785d52b04820a79c70de2f0d->leave($__internal_fa7315e22ed757ef615b0f9cf62e16e3b4e44c28785d52b04820a79c70de2f0d_prof);

        
        $__internal_a00445c299aad6093c74ea1e85bdb1c090c2938f5827f5264d56bf0bbc5291ea->leave($__internal_a00445c299aad6093c74ea1e85bdb1c090c2938f5827f5264d56bf0bbc5291ea_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dc39bf81b2e3bd45d687a141ea033fe9e8e88be7c1bab111339861ef68e76f7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc39bf81b2e3bd45d687a141ea033fe9e8e88be7c1bab111339861ef68e76f7d->enter($__internal_dc39bf81b2e3bd45d687a141ea033fe9e8e88be7c1bab111339861ef68e76f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b54b16a2f844c5949e509147aa37e4c1ae12aa3dd949c4fb0e26181851168fdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b54b16a2f844c5949e509147aa37e4c1ae12aa3dd949c4fb0e26181851168fdb->enter($__internal_b54b16a2f844c5949e509147aa37e4c1ae12aa3dd949c4fb0e26181851168fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b54b16a2f844c5949e509147aa37e4c1ae12aa3dd949c4fb0e26181851168fdb->leave($__internal_b54b16a2f844c5949e509147aa37e4c1ae12aa3dd949c4fb0e26181851168fdb_prof);

        
        $__internal_dc39bf81b2e3bd45d687a141ea033fe9e8e88be7c1bab111339861ef68e76f7d->leave($__internal_dc39bf81b2e3bd45d687a141ea033fe9e8e88be7c1bab111339861ef68e76f7d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_150b737cc41927ad281b5e4ce4dddff096f3bd23abc44ea9525a542f6a32c3cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_150b737cc41927ad281b5e4ce4dddff096f3bd23abc44ea9525a542f6a32c3cb->enter($__internal_150b737cc41927ad281b5e4ce4dddff096f3bd23abc44ea9525a542f6a32c3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4eabad91b4c76c0f7590b5d4435d23b2acd5d557bb5c7e84ef63dbff9a06ea63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eabad91b4c76c0f7590b5d4435d23b2acd5d557bb5c7e84ef63dbff9a06ea63->enter($__internal_4eabad91b4c76c0f7590b5d4435d23b2acd5d557bb5c7e84ef63dbff9a06ea63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4eabad91b4c76c0f7590b5d4435d23b2acd5d557bb5c7e84ef63dbff9a06ea63->leave($__internal_4eabad91b4c76c0f7590b5d4435d23b2acd5d557bb5c7e84ef63dbff9a06ea63_prof);

        
        $__internal_150b737cc41927ad281b5e4ce4dddff096f3bd23abc44ea9525a542f6a32c3cb->leave($__internal_150b737cc41927ad281b5e4ce4dddff096f3bd23abc44ea9525a542f6a32c3cb_prof);

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
