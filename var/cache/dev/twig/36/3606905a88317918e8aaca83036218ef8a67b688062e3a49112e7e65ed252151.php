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
        $__internal_b8808a6a80a6db51b373c559c65be3f026277d8b77818c3b2e07e7edd734cee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8808a6a80a6db51b373c559c65be3f026277d8b77818c3b2e07e7edd734cee5->enter($__internal_b8808a6a80a6db51b373c559c65be3f026277d8b77818c3b2e07e7edd734cee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8bc1e79254e8b8636d2d5042c6e430e0b0c3893896f60c84351810c2038fd60f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bc1e79254e8b8636d2d5042c6e430e0b0c3893896f60c84351810c2038fd60f->enter($__internal_8bc1e79254e8b8636d2d5042c6e430e0b0c3893896f60c84351810c2038fd60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8808a6a80a6db51b373c559c65be3f026277d8b77818c3b2e07e7edd734cee5->leave($__internal_b8808a6a80a6db51b373c559c65be3f026277d8b77818c3b2e07e7edd734cee5_prof);

        
        $__internal_8bc1e79254e8b8636d2d5042c6e430e0b0c3893896f60c84351810c2038fd60f->leave($__internal_8bc1e79254e8b8636d2d5042c6e430e0b0c3893896f60c84351810c2038fd60f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6a38bf93f114458d376255d0febc6b9df77569f1d3d7496d1a9503bc1a4ec675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a38bf93f114458d376255d0febc6b9df77569f1d3d7496d1a9503bc1a4ec675->enter($__internal_6a38bf93f114458d376255d0febc6b9df77569f1d3d7496d1a9503bc1a4ec675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_da4f8387ee164bebe629d4ecc6c439d24fc4bdd0a038ec317ee532a0361072a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da4f8387ee164bebe629d4ecc6c439d24fc4bdd0a038ec317ee532a0361072a9->enter($__internal_da4f8387ee164bebe629d4ecc6c439d24fc4bdd0a038ec317ee532a0361072a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_da4f8387ee164bebe629d4ecc6c439d24fc4bdd0a038ec317ee532a0361072a9->leave($__internal_da4f8387ee164bebe629d4ecc6c439d24fc4bdd0a038ec317ee532a0361072a9_prof);

        
        $__internal_6a38bf93f114458d376255d0febc6b9df77569f1d3d7496d1a9503bc1a4ec675->leave($__internal_6a38bf93f114458d376255d0febc6b9df77569f1d3d7496d1a9503bc1a4ec675_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_870795085d149592a7433dec2c8df15c73baa0285f7566982e9112676beea2e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_870795085d149592a7433dec2c8df15c73baa0285f7566982e9112676beea2e1->enter($__internal_870795085d149592a7433dec2c8df15c73baa0285f7566982e9112676beea2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7f26f78f7284da83c0a1f442a250fa06ce31021ba7238137656b7bdac4ddb492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f26f78f7284da83c0a1f442a250fa06ce31021ba7238137656b7bdac4ddb492->enter($__internal_7f26f78f7284da83c0a1f442a250fa06ce31021ba7238137656b7bdac4ddb492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_7f26f78f7284da83c0a1f442a250fa06ce31021ba7238137656b7bdac4ddb492->leave($__internal_7f26f78f7284da83c0a1f442a250fa06ce31021ba7238137656b7bdac4ddb492_prof);

        
        $__internal_870795085d149592a7433dec2c8df15c73baa0285f7566982e9112676beea2e1->leave($__internal_870795085d149592a7433dec2c8df15c73baa0285f7566982e9112676beea2e1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1c73b7ed878233ba3069d1f08121aa672aed5fa659bb88ea677fcdce349d1a15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c73b7ed878233ba3069d1f08121aa672aed5fa659bb88ea677fcdce349d1a15->enter($__internal_1c73b7ed878233ba3069d1f08121aa672aed5fa659bb88ea677fcdce349d1a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4cdb1c4d6ca7cb0768d00c672c11dde36a06c9efad8a500cec0c15363016781d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cdb1c4d6ca7cb0768d00c672c11dde36a06c9efad8a500cec0c15363016781d->enter($__internal_4cdb1c4d6ca7cb0768d00c672c11dde36a06c9efad8a500cec0c15363016781d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4cdb1c4d6ca7cb0768d00c672c11dde36a06c9efad8a500cec0c15363016781d->leave($__internal_4cdb1c4d6ca7cb0768d00c672c11dde36a06c9efad8a500cec0c15363016781d_prof);

        
        $__internal_1c73b7ed878233ba3069d1f08121aa672aed5fa659bb88ea677fcdce349d1a15->leave($__internal_1c73b7ed878233ba3069d1f08121aa672aed5fa659bb88ea677fcdce349d1a15_prof);

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
