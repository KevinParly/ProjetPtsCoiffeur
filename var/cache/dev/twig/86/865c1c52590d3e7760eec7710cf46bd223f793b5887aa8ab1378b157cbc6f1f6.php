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
        $__internal_5aac7ad4a4b777edd1831335886449b888ffd446812d73850630daf8bb67fd74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aac7ad4a4b777edd1831335886449b888ffd446812d73850630daf8bb67fd74->enter($__internal_5aac7ad4a4b777edd1831335886449b888ffd446812d73850630daf8bb67fd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f248d274095377a7b9c6a278a5dab3c1f0b677101e0f2593430fb00b5539404a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f248d274095377a7b9c6a278a5dab3c1f0b677101e0f2593430fb00b5539404a->enter($__internal_f248d274095377a7b9c6a278a5dab3c1f0b677101e0f2593430fb00b5539404a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5aac7ad4a4b777edd1831335886449b888ffd446812d73850630daf8bb67fd74->leave($__internal_5aac7ad4a4b777edd1831335886449b888ffd446812d73850630daf8bb67fd74_prof);

        
        $__internal_f248d274095377a7b9c6a278a5dab3c1f0b677101e0f2593430fb00b5539404a->leave($__internal_f248d274095377a7b9c6a278a5dab3c1f0b677101e0f2593430fb00b5539404a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_718fbc3bc91a63446223bfef4c49bb2db3b6669130da2ac4d02f5e31344b1785 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_718fbc3bc91a63446223bfef4c49bb2db3b6669130da2ac4d02f5e31344b1785->enter($__internal_718fbc3bc91a63446223bfef4c49bb2db3b6669130da2ac4d02f5e31344b1785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4403c4da706d4208f59213240f08ddbcef1095c9084024166522a61a668bd76a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4403c4da706d4208f59213240f08ddbcef1095c9084024166522a61a668bd76a->enter($__internal_4403c4da706d4208f59213240f08ddbcef1095c9084024166522a61a668bd76a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4403c4da706d4208f59213240f08ddbcef1095c9084024166522a61a668bd76a->leave($__internal_4403c4da706d4208f59213240f08ddbcef1095c9084024166522a61a668bd76a_prof);

        
        $__internal_718fbc3bc91a63446223bfef4c49bb2db3b6669130da2ac4d02f5e31344b1785->leave($__internal_718fbc3bc91a63446223bfef4c49bb2db3b6669130da2ac4d02f5e31344b1785_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_71feb001a2e72cf1980c4ebf480db27d2505de3e627ae17dfc1c367e7eef8fe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71feb001a2e72cf1980c4ebf480db27d2505de3e627ae17dfc1c367e7eef8fe9->enter($__internal_71feb001a2e72cf1980c4ebf480db27d2505de3e627ae17dfc1c367e7eef8fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b05d721d516a68192663fa7e7ca486102db2e87b321195a1e1184d474cbdac17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b05d721d516a68192663fa7e7ca486102db2e87b321195a1e1184d474cbdac17->enter($__internal_b05d721d516a68192663fa7e7ca486102db2e87b321195a1e1184d474cbdac17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b05d721d516a68192663fa7e7ca486102db2e87b321195a1e1184d474cbdac17->leave($__internal_b05d721d516a68192663fa7e7ca486102db2e87b321195a1e1184d474cbdac17_prof);

        
        $__internal_71feb001a2e72cf1980c4ebf480db27d2505de3e627ae17dfc1c367e7eef8fe9->leave($__internal_71feb001a2e72cf1980c4ebf480db27d2505de3e627ae17dfc1c367e7eef8fe9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_880e37f3b6e4c5e05f7e9179e2c1efdabdfc90a4d1877d931c884cc512eaf4f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_880e37f3b6e4c5e05f7e9179e2c1efdabdfc90a4d1877d931c884cc512eaf4f3->enter($__internal_880e37f3b6e4c5e05f7e9179e2c1efdabdfc90a4d1877d931c884cc512eaf4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_90d07d6b4a3a7f7821ae3defe36539b56bed3640b3da2708cf95e5fb9d84de88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d07d6b4a3a7f7821ae3defe36539b56bed3640b3da2708cf95e5fb9d84de88->enter($__internal_90d07d6b4a3a7f7821ae3defe36539b56bed3640b3da2708cf95e5fb9d84de88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_90d07d6b4a3a7f7821ae3defe36539b56bed3640b3da2708cf95e5fb9d84de88->leave($__internal_90d07d6b4a3a7f7821ae3defe36539b56bed3640b3da2708cf95e5fb9d84de88_prof);

        
        $__internal_880e37f3b6e4c5e05f7e9179e2c1efdabdfc90a4d1877d931c884cc512eaf4f3->leave($__internal_880e37f3b6e4c5e05f7e9179e2c1efdabdfc90a4d1877d931c884cc512eaf4f3_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/kevin/Dropbox/ProjetPtsCoiffeur/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
