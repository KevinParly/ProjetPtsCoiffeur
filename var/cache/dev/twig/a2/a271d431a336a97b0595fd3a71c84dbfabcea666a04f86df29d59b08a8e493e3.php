<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_01ab22293a64081a3cd4646e9e1cde5b6020ba0a40251d5aae407d0a6c967466 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51f4771ad24653736c50a53fb8163aae195f2ee0168898b877d2ad9fa61b53fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51f4771ad24653736c50a53fb8163aae195f2ee0168898b877d2ad9fa61b53fd->enter($__internal_51f4771ad24653736c50a53fb8163aae195f2ee0168898b877d2ad9fa61b53fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_3d3a79dcda32e4df5d6859d953c686570cbd1abceb9a8ff704cc06b5c94cfe05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d3a79dcda32e4df5d6859d953c686570cbd1abceb9a8ff704cc06b5c94cfe05->enter($__internal_3d3a79dcda32e4df5d6859d953c686570cbd1abceb9a8ff704cc06b5c94cfe05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51f4771ad24653736c50a53fb8163aae195f2ee0168898b877d2ad9fa61b53fd->leave($__internal_51f4771ad24653736c50a53fb8163aae195f2ee0168898b877d2ad9fa61b53fd_prof);

        
        $__internal_3d3a79dcda32e4df5d6859d953c686570cbd1abceb9a8ff704cc06b5c94cfe05->leave($__internal_3d3a79dcda32e4df5d6859d953c686570cbd1abceb9a8ff704cc06b5c94cfe05_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cfff120a52ecc3b67c8a87a3f33d5b03af47dc90aa917b7b31a88663ee11ee5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfff120a52ecc3b67c8a87a3f33d5b03af47dc90aa917b7b31a88663ee11ee5c->enter($__internal_cfff120a52ecc3b67c8a87a3f33d5b03af47dc90aa917b7b31a88663ee11ee5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8146845dafe8c4b6ca8f70c8ca820a9671918625680fb782f9d20904a6b5bf12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8146845dafe8c4b6ca8f70c8ca820a9671918625680fb782f9d20904a6b5bf12->enter($__internal_8146845dafe8c4b6ca8f70c8ca820a9671918625680fb782f9d20904a6b5bf12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_8146845dafe8c4b6ca8f70c8ca820a9671918625680fb782f9d20904a6b5bf12->leave($__internal_8146845dafe8c4b6ca8f70c8ca820a9671918625680fb782f9d20904a6b5bf12_prof);

        
        $__internal_cfff120a52ecc3b67c8a87a3f33d5b03af47dc90aa917b7b31a88663ee11ee5c->leave($__internal_cfff120a52ecc3b67c8a87a3f33d5b03af47dc90aa917b7b31a88663ee11ee5c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "D:\\wamp\\www\\ProjetPtsCoiffeur\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
