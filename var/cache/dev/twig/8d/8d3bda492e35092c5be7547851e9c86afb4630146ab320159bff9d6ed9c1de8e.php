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
        $__internal_1adf3200015437008e63238a188853fd8da833ad5b7abdce4508fed5ee227649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1adf3200015437008e63238a188853fd8da833ad5b7abdce4508fed5ee227649->enter($__internal_1adf3200015437008e63238a188853fd8da833ad5b7abdce4508fed5ee227649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4197880e3c7fb1b202d60ffa61006680f3eb65789e4c50ecd78615c316481111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4197880e3c7fb1b202d60ffa61006680f3eb65789e4c50ecd78615c316481111->enter($__internal_4197880e3c7fb1b202d60ffa61006680f3eb65789e4c50ecd78615c316481111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1adf3200015437008e63238a188853fd8da833ad5b7abdce4508fed5ee227649->leave($__internal_1adf3200015437008e63238a188853fd8da833ad5b7abdce4508fed5ee227649_prof);

        
        $__internal_4197880e3c7fb1b202d60ffa61006680f3eb65789e4c50ecd78615c316481111->leave($__internal_4197880e3c7fb1b202d60ffa61006680f3eb65789e4c50ecd78615c316481111_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_83229a73b5bb9160697d159af9f29016f725b2ed25867db49021bb21e5eabf1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83229a73b5bb9160697d159af9f29016f725b2ed25867db49021bb21e5eabf1d->enter($__internal_83229a73b5bb9160697d159af9f29016f725b2ed25867db49021bb21e5eabf1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fa09c2843b6c6199e70a7e66f34dbefbda1fe0c0d37b9f9b09f1a8ae873c2420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa09c2843b6c6199e70a7e66f34dbefbda1fe0c0d37b9f9b09f1a8ae873c2420->enter($__internal_fa09c2843b6c6199e70a7e66f34dbefbda1fe0c0d37b9f9b09f1a8ae873c2420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fa09c2843b6c6199e70a7e66f34dbefbda1fe0c0d37b9f9b09f1a8ae873c2420->leave($__internal_fa09c2843b6c6199e70a7e66f34dbefbda1fe0c0d37b9f9b09f1a8ae873c2420_prof);

        
        $__internal_83229a73b5bb9160697d159af9f29016f725b2ed25867db49021bb21e5eabf1d->leave($__internal_83229a73b5bb9160697d159af9f29016f725b2ed25867db49021bb21e5eabf1d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_399c07ba7aa999a2018d654a3bd27162c6e9a815b3ae735986b363623eb88548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_399c07ba7aa999a2018d654a3bd27162c6e9a815b3ae735986b363623eb88548->enter($__internal_399c07ba7aa999a2018d654a3bd27162c6e9a815b3ae735986b363623eb88548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1471bd08c06cbdf0e5c0bf1a4c06afc095a90829cee9ab2a7415a8094360c634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1471bd08c06cbdf0e5c0bf1a4c06afc095a90829cee9ab2a7415a8094360c634->enter($__internal_1471bd08c06cbdf0e5c0bf1a4c06afc095a90829cee9ab2a7415a8094360c634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1471bd08c06cbdf0e5c0bf1a4c06afc095a90829cee9ab2a7415a8094360c634->leave($__internal_1471bd08c06cbdf0e5c0bf1a4c06afc095a90829cee9ab2a7415a8094360c634_prof);

        
        $__internal_399c07ba7aa999a2018d654a3bd27162c6e9a815b3ae735986b363623eb88548->leave($__internal_399c07ba7aa999a2018d654a3bd27162c6e9a815b3ae735986b363623eb88548_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_503dad879301b28b3da2d0491e104273bbe98e2d5c880e432b923961d10cc904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_503dad879301b28b3da2d0491e104273bbe98e2d5c880e432b923961d10cc904->enter($__internal_503dad879301b28b3da2d0491e104273bbe98e2d5c880e432b923961d10cc904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5dc07c3fe9db48df43239aa9b43b1f6ca17cf5b230efc5a71c41ba6c1a1f01f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dc07c3fe9db48df43239aa9b43b1f6ca17cf5b230efc5a71c41ba6c1a1f01f2->enter($__internal_5dc07c3fe9db48df43239aa9b43b1f6ca17cf5b230efc5a71c41ba6c1a1f01f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_5dc07c3fe9db48df43239aa9b43b1f6ca17cf5b230efc5a71c41ba6c1a1f01f2->leave($__internal_5dc07c3fe9db48df43239aa9b43b1f6ca17cf5b230efc5a71c41ba6c1a1f01f2_prof);

        
        $__internal_503dad879301b28b3da2d0491e104273bbe98e2d5c880e432b923961d10cc904->leave($__internal_503dad879301b28b3da2d0491e104273bbe98e2d5c880e432b923961d10cc904_prof);

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
