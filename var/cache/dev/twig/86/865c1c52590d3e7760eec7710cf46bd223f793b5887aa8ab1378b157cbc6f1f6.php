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
        $__internal_645a24855216dcd2dcdca003ce4e14f084ad77d049f64b8a39fcbd0a80fe44ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_645a24855216dcd2dcdca003ce4e14f084ad77d049f64b8a39fcbd0a80fe44ac->enter($__internal_645a24855216dcd2dcdca003ce4e14f084ad77d049f64b8a39fcbd0a80fe44ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_fac1114917148685b40cc8ba66ae64ea92213440563ff0bfab9acc13c0e08a21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fac1114917148685b40cc8ba66ae64ea92213440563ff0bfab9acc13c0e08a21->enter($__internal_fac1114917148685b40cc8ba66ae64ea92213440563ff0bfab9acc13c0e08a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_645a24855216dcd2dcdca003ce4e14f084ad77d049f64b8a39fcbd0a80fe44ac->leave($__internal_645a24855216dcd2dcdca003ce4e14f084ad77d049f64b8a39fcbd0a80fe44ac_prof);

        
        $__internal_fac1114917148685b40cc8ba66ae64ea92213440563ff0bfab9acc13c0e08a21->leave($__internal_fac1114917148685b40cc8ba66ae64ea92213440563ff0bfab9acc13c0e08a21_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2104df4349b63972fa15b57a50b011063ed4364d460d89c627276e7be61c3c2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2104df4349b63972fa15b57a50b011063ed4364d460d89c627276e7be61c3c2a->enter($__internal_2104df4349b63972fa15b57a50b011063ed4364d460d89c627276e7be61c3c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_35daa98875de9a9a57e4cf96cc2875732a0738dd9fbcc3d3d8969a673207724b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35daa98875de9a9a57e4cf96cc2875732a0738dd9fbcc3d3d8969a673207724b->enter($__internal_35daa98875de9a9a57e4cf96cc2875732a0738dd9fbcc3d3d8969a673207724b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_35daa98875de9a9a57e4cf96cc2875732a0738dd9fbcc3d3d8969a673207724b->leave($__internal_35daa98875de9a9a57e4cf96cc2875732a0738dd9fbcc3d3d8969a673207724b_prof);

        
        $__internal_2104df4349b63972fa15b57a50b011063ed4364d460d89c627276e7be61c3c2a->leave($__internal_2104df4349b63972fa15b57a50b011063ed4364d460d89c627276e7be61c3c2a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5698bd8cf05724967d12edcdc75d9f706747b04bdbaaf210e412842b890c30e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5698bd8cf05724967d12edcdc75d9f706747b04bdbaaf210e412842b890c30e2->enter($__internal_5698bd8cf05724967d12edcdc75d9f706747b04bdbaaf210e412842b890c30e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4b019d1679119c59b4f00fc1b2e1d1e07b52f27632a9b42a2591a402b4f34d6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b019d1679119c59b4f00fc1b2e1d1e07b52f27632a9b42a2591a402b4f34d6f->enter($__internal_4b019d1679119c59b4f00fc1b2e1d1e07b52f27632a9b42a2591a402b4f34d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4b019d1679119c59b4f00fc1b2e1d1e07b52f27632a9b42a2591a402b4f34d6f->leave($__internal_4b019d1679119c59b4f00fc1b2e1d1e07b52f27632a9b42a2591a402b4f34d6f_prof);

        
        $__internal_5698bd8cf05724967d12edcdc75d9f706747b04bdbaaf210e412842b890c30e2->leave($__internal_5698bd8cf05724967d12edcdc75d9f706747b04bdbaaf210e412842b890c30e2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7919b0a7540c8edfc7f68c613980d1ba0a3c3f4a56cae7e394509699af09f6dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7919b0a7540c8edfc7f68c613980d1ba0a3c3f4a56cae7e394509699af09f6dc->enter($__internal_7919b0a7540c8edfc7f68c613980d1ba0a3c3f4a56cae7e394509699af09f6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_74d86aec4252cb2a02e42fdff6a65c82e81c8a5974a97921761af8c32bd8c149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d86aec4252cb2a02e42fdff6a65c82e81c8a5974a97921761af8c32bd8c149->enter($__internal_74d86aec4252cb2a02e42fdff6a65c82e81c8a5974a97921761af8c32bd8c149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_74d86aec4252cb2a02e42fdff6a65c82e81c8a5974a97921761af8c32bd8c149->leave($__internal_74d86aec4252cb2a02e42fdff6a65c82e81c8a5974a97921761af8c32bd8c149_prof);

        
        $__internal_7919b0a7540c8edfc7f68c613980d1ba0a3c3f4a56cae7e394509699af09f6dc->leave($__internal_7919b0a7540c8edfc7f68c613980d1ba0a3c3f4a56cae7e394509699af09f6dc_prof);

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
