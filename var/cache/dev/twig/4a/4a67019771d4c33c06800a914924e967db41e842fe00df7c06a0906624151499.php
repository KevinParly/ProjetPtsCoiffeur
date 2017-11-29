<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1878275fdbc32b660cfbee6afea5d6e15c55adb100b0dbddcb4be415750c22a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e163d834d19a728e36af7de4af0245e12125fbde9b21e3aae5b6ec6fc7ba772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e163d834d19a728e36af7de4af0245e12125fbde9b21e3aae5b6ec6fc7ba772->enter($__internal_2e163d834d19a728e36af7de4af0245e12125fbde9b21e3aae5b6ec6fc7ba772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_0836b3d1ffb5ef6884df5162320c1ca2826c3b0f4af20a08d673c593e55af07f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0836b3d1ffb5ef6884df5162320c1ca2826c3b0f4af20a08d673c593e55af07f->enter($__internal_0836b3d1ffb5ef6884df5162320c1ca2826c3b0f4af20a08d673c593e55af07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e163d834d19a728e36af7de4af0245e12125fbde9b21e3aae5b6ec6fc7ba772->leave($__internal_2e163d834d19a728e36af7de4af0245e12125fbde9b21e3aae5b6ec6fc7ba772_prof);

        
        $__internal_0836b3d1ffb5ef6884df5162320c1ca2826c3b0f4af20a08d673c593e55af07f->leave($__internal_0836b3d1ffb5ef6884df5162320c1ca2826c3b0f4af20a08d673c593e55af07f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4efd07937bf38c28e441bc5c2789f98afade1b342f1ffd70464afbe1a072602e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4efd07937bf38c28e441bc5c2789f98afade1b342f1ffd70464afbe1a072602e->enter($__internal_4efd07937bf38c28e441bc5c2789f98afade1b342f1ffd70464afbe1a072602e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0ea7848b61ca8482c1305a368476a32dcfb87185599c2aac2d0c4b99477776e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ea7848b61ca8482c1305a368476a32dcfb87185599c2aac2d0c4b99477776e7->enter($__internal_0ea7848b61ca8482c1305a368476a32dcfb87185599c2aac2d0c4b99477776e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_0ea7848b61ca8482c1305a368476a32dcfb87185599c2aac2d0c4b99477776e7->leave($__internal_0ea7848b61ca8482c1305a368476a32dcfb87185599c2aac2d0c4b99477776e7_prof);

        
        $__internal_4efd07937bf38c28e441bc5c2789f98afade1b342f1ffd70464afbe1a072602e->leave($__internal_4efd07937bf38c28e441bc5c2789f98afade1b342f1ffd70464afbe1a072602e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8643bf16051e7113efffe96909692f8dc14b300da53bd3d42075139bf1b5cfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8643bf16051e7113efffe96909692f8dc14b300da53bd3d42075139bf1b5cfb->enter($__internal_b8643bf16051e7113efffe96909692f8dc14b300da53bd3d42075139bf1b5cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2ca4a8ca2c591b33a49ff6d3e7d2a7b71eda8979bec410b6839b906f8660d977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ca4a8ca2c591b33a49ff6d3e7d2a7b71eda8979bec410b6839b906f8660d977->enter($__internal_2ca4a8ca2c591b33a49ff6d3e7d2a7b71eda8979bec410b6839b906f8660d977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2ca4a8ca2c591b33a49ff6d3e7d2a7b71eda8979bec410b6839b906f8660d977->leave($__internal_2ca4a8ca2c591b33a49ff6d3e7d2a7b71eda8979bec410b6839b906f8660d977_prof);

        
        $__internal_b8643bf16051e7113efffe96909692f8dc14b300da53bd3d42075139bf1b5cfb->leave($__internal_b8643bf16051e7113efffe96909692f8dc14b300da53bd3d42075139bf1b5cfb_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_202021882350774e84eca7c50eff78a27bc7fced8cd0a3bf4c89524ff7b96734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_202021882350774e84eca7c50eff78a27bc7fced8cd0a3bf4c89524ff7b96734->enter($__internal_202021882350774e84eca7c50eff78a27bc7fced8cd0a3bf4c89524ff7b96734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7746611f69745e7cdad1dae33d598a029fffa3b61f486ab9bc5966a63a9549dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7746611f69745e7cdad1dae33d598a029fffa3b61f486ab9bc5966a63a9549dc->enter($__internal_7746611f69745e7cdad1dae33d598a029fffa3b61f486ab9bc5966a63a9549dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_7746611f69745e7cdad1dae33d598a029fffa3b61f486ab9bc5966a63a9549dc->leave($__internal_7746611f69745e7cdad1dae33d598a029fffa3b61f486ab9bc5966a63a9549dc_prof);

        
        $__internal_202021882350774e84eca7c50eff78a27bc7fced8cd0a3bf4c89524ff7b96734->leave($__internal_202021882350774e84eca7c50eff78a27bc7fced8cd0a3bf4c89524ff7b96734_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/kevin/Dropbox/ProjetPtsCoiffeur/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
