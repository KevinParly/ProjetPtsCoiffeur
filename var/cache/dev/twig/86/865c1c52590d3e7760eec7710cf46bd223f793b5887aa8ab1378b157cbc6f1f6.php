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
        $__internal_6c81c19790e1fc7a978a89c2339839c84e5229e4ea46c195cfde43b6800f8f67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c81c19790e1fc7a978a89c2339839c84e5229e4ea46c195cfde43b6800f8f67->enter($__internal_6c81c19790e1fc7a978a89c2339839c84e5229e4ea46c195cfde43b6800f8f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b3ff21b32744a2484de3d741e0b573805ecd935704e917c6e31d39bc1b6c3f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3ff21b32744a2484de3d741e0b573805ecd935704e917c6e31d39bc1b6c3f9d->enter($__internal_b3ff21b32744a2484de3d741e0b573805ecd935704e917c6e31d39bc1b6c3f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c81c19790e1fc7a978a89c2339839c84e5229e4ea46c195cfde43b6800f8f67->leave($__internal_6c81c19790e1fc7a978a89c2339839c84e5229e4ea46c195cfde43b6800f8f67_prof);

        
        $__internal_b3ff21b32744a2484de3d741e0b573805ecd935704e917c6e31d39bc1b6c3f9d->leave($__internal_b3ff21b32744a2484de3d741e0b573805ecd935704e917c6e31d39bc1b6c3f9d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4a96b8549146c53eb1ed79701574a5397298ca2f0ff9a549ca04ec73d207572e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a96b8549146c53eb1ed79701574a5397298ca2f0ff9a549ca04ec73d207572e->enter($__internal_4a96b8549146c53eb1ed79701574a5397298ca2f0ff9a549ca04ec73d207572e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7eea9655dd3ce8cef83055c0450db1e5a9ecc5fb68e854771683ed5584ed7590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eea9655dd3ce8cef83055c0450db1e5a9ecc5fb68e854771683ed5584ed7590->enter($__internal_7eea9655dd3ce8cef83055c0450db1e5a9ecc5fb68e854771683ed5584ed7590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7eea9655dd3ce8cef83055c0450db1e5a9ecc5fb68e854771683ed5584ed7590->leave($__internal_7eea9655dd3ce8cef83055c0450db1e5a9ecc5fb68e854771683ed5584ed7590_prof);

        
        $__internal_4a96b8549146c53eb1ed79701574a5397298ca2f0ff9a549ca04ec73d207572e->leave($__internal_4a96b8549146c53eb1ed79701574a5397298ca2f0ff9a549ca04ec73d207572e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3f599fa33c3334677819e4f9607637272b53e5d7ff0a0a8043de04c095981567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f599fa33c3334677819e4f9607637272b53e5d7ff0a0a8043de04c095981567->enter($__internal_3f599fa33c3334677819e4f9607637272b53e5d7ff0a0a8043de04c095981567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8b8fade96b05efcdc1aa7de4ce207a6e7b5b52c29e5e7b862f1e60ad77892d23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b8fade96b05efcdc1aa7de4ce207a6e7b5b52c29e5e7b862f1e60ad77892d23->enter($__internal_8b8fade96b05efcdc1aa7de4ce207a6e7b5b52c29e5e7b862f1e60ad77892d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8b8fade96b05efcdc1aa7de4ce207a6e7b5b52c29e5e7b862f1e60ad77892d23->leave($__internal_8b8fade96b05efcdc1aa7de4ce207a6e7b5b52c29e5e7b862f1e60ad77892d23_prof);

        
        $__internal_3f599fa33c3334677819e4f9607637272b53e5d7ff0a0a8043de04c095981567->leave($__internal_3f599fa33c3334677819e4f9607637272b53e5d7ff0a0a8043de04c095981567_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2e3db9b67eb18bc679b5a39a982b6cf9e3933d788dcf2d0d32bfe5f10e58acd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e3db9b67eb18bc679b5a39a982b6cf9e3933d788dcf2d0d32bfe5f10e58acd0->enter($__internal_2e3db9b67eb18bc679b5a39a982b6cf9e3933d788dcf2d0d32bfe5f10e58acd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_08ff12e752149392e0d8630c417442a5bf39437d418fdec2604b5858183b1016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ff12e752149392e0d8630c417442a5bf39437d418fdec2604b5858183b1016->enter($__internal_08ff12e752149392e0d8630c417442a5bf39437d418fdec2604b5858183b1016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_08ff12e752149392e0d8630c417442a5bf39437d418fdec2604b5858183b1016->leave($__internal_08ff12e752149392e0d8630c417442a5bf39437d418fdec2604b5858183b1016_prof);

        
        $__internal_2e3db9b67eb18bc679b5a39a982b6cf9e3933d788dcf2d0d32bfe5f10e58acd0->leave($__internal_2e3db9b67eb18bc679b5a39a982b6cf9e3933d788dcf2d0d32bfe5f10e58acd0_prof);

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
