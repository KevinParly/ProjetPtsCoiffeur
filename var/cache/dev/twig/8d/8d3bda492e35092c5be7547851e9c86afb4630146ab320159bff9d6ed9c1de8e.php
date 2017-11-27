<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d1016fd08ddf20257e0d706e70ef21793052c0e71d719a1e4b2afd56a5320f97 extends Twig_Template
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
        $__internal_f610dfa83404c30e53496de5e18124af52658916fe4501c4349fe5c21e1aa132 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f610dfa83404c30e53496de5e18124af52658916fe4501c4349fe5c21e1aa132->enter($__internal_f610dfa83404c30e53496de5e18124af52658916fe4501c4349fe5c21e1aa132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_cb6376dead398738ffdadf95b1463dcb1f77ea9def947cc8206bdd2d46c4cbcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb6376dead398738ffdadf95b1463dcb1f77ea9def947cc8206bdd2d46c4cbcb->enter($__internal_cb6376dead398738ffdadf95b1463dcb1f77ea9def947cc8206bdd2d46c4cbcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f610dfa83404c30e53496de5e18124af52658916fe4501c4349fe5c21e1aa132->leave($__internal_f610dfa83404c30e53496de5e18124af52658916fe4501c4349fe5c21e1aa132_prof);

        
        $__internal_cb6376dead398738ffdadf95b1463dcb1f77ea9def947cc8206bdd2d46c4cbcb->leave($__internal_cb6376dead398738ffdadf95b1463dcb1f77ea9def947cc8206bdd2d46c4cbcb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fd3892bfd737b78f12850aaf648fd17f574e56fa28bc95cca36670f4fff6cf08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd3892bfd737b78f12850aaf648fd17f574e56fa28bc95cca36670f4fff6cf08->enter($__internal_fd3892bfd737b78f12850aaf648fd17f574e56fa28bc95cca36670f4fff6cf08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_784c4ccf4191ca9eab7f62fe01430bb7f08f81ed061fd23f1b6e805fce2fb6bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_784c4ccf4191ca9eab7f62fe01430bb7f08f81ed061fd23f1b6e805fce2fb6bd->enter($__internal_784c4ccf4191ca9eab7f62fe01430bb7f08f81ed061fd23f1b6e805fce2fb6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_784c4ccf4191ca9eab7f62fe01430bb7f08f81ed061fd23f1b6e805fce2fb6bd->leave($__internal_784c4ccf4191ca9eab7f62fe01430bb7f08f81ed061fd23f1b6e805fce2fb6bd_prof);

        
        $__internal_fd3892bfd737b78f12850aaf648fd17f574e56fa28bc95cca36670f4fff6cf08->leave($__internal_fd3892bfd737b78f12850aaf648fd17f574e56fa28bc95cca36670f4fff6cf08_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_58ba8a9282acc5134b75cd640db09072cae3601799e55f2ddfd0aa7cd7db59c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58ba8a9282acc5134b75cd640db09072cae3601799e55f2ddfd0aa7cd7db59c1->enter($__internal_58ba8a9282acc5134b75cd640db09072cae3601799e55f2ddfd0aa7cd7db59c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9e8a06189827a55bd94aa4b33e0e35859d43745ec05ea5d7556170bf735cb190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e8a06189827a55bd94aa4b33e0e35859d43745ec05ea5d7556170bf735cb190->enter($__internal_9e8a06189827a55bd94aa4b33e0e35859d43745ec05ea5d7556170bf735cb190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9e8a06189827a55bd94aa4b33e0e35859d43745ec05ea5d7556170bf735cb190->leave($__internal_9e8a06189827a55bd94aa4b33e0e35859d43745ec05ea5d7556170bf735cb190_prof);

        
        $__internal_58ba8a9282acc5134b75cd640db09072cae3601799e55f2ddfd0aa7cd7db59c1->leave($__internal_58ba8a9282acc5134b75cd640db09072cae3601799e55f2ddfd0aa7cd7db59c1_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fae6036a102e9a276bbf5cb795a352c14e9a0f2365edf88720e65f42cb6a253 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fae6036a102e9a276bbf5cb795a352c14e9a0f2365edf88720e65f42cb6a253->enter($__internal_7fae6036a102e9a276bbf5cb795a352c14e9a0f2365edf88720e65f42cb6a253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_00a66b25a3245ba549382a51dcf55e8b0c76500c5a9f2500c009f43db8427367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00a66b25a3245ba549382a51dcf55e8b0c76500c5a9f2500c009f43db8427367->enter($__internal_00a66b25a3245ba549382a51dcf55e8b0c76500c5a9f2500c009f43db8427367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_00a66b25a3245ba549382a51dcf55e8b0c76500c5a9f2500c009f43db8427367->leave($__internal_00a66b25a3245ba549382a51dcf55e8b0c76500c5a9f2500c009f43db8427367_prof);

        
        $__internal_7fae6036a102e9a276bbf5cb795a352c14e9a0f2365edf88720e65f42cb6a253->leave($__internal_7fae6036a102e9a276bbf5cb795a352c14e9a0f2365edf88720e65f42cb6a253_prof);

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
", "@Twig/Exception/exception_full.html.twig", "D:\\wamp\\www\\ProjetPtsCoiffeur\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
