<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_45210378ad38c86f804adad8123ee2e01207f245b419baad86a07fba02c444de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78c029835f1208230715e00217369aca1d2a7a6bf377b048ef8cbf79ad70d2c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78c029835f1208230715e00217369aca1d2a7a6bf377b048ef8cbf79ad70d2c2->enter($__internal_78c029835f1208230715e00217369aca1d2a7a6bf377b048ef8cbf79ad70d2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_cdf05b78daf57cd9528e5aa054d10dc8e611281627cfdc5096071908534e7a50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf05b78daf57cd9528e5aa054d10dc8e611281627cfdc5096071908534e7a50->enter($__internal_cdf05b78daf57cd9528e5aa054d10dc8e611281627cfdc5096071908534e7a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_78c029835f1208230715e00217369aca1d2a7a6bf377b048ef8cbf79ad70d2c2->leave($__internal_78c029835f1208230715e00217369aca1d2a7a6bf377b048ef8cbf79ad70d2c2_prof);

        
        $__internal_cdf05b78daf57cd9528e5aa054d10dc8e611281627cfdc5096071908534e7a50->leave($__internal_cdf05b78daf57cd9528e5aa054d10dc8e611281627cfdc5096071908534e7a50_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d5682f7ec2fa28d81fbfee4434152520578c7615ce7d40f35de0dda50d93d7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d5682f7ec2fa28d81fbfee4434152520578c7615ce7d40f35de0dda50d93d7e->enter($__internal_8d5682f7ec2fa28d81fbfee4434152520578c7615ce7d40f35de0dda50d93d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bd28d912943bd433409eac740f332d4f39bb6eb0eee45b720bd8646cc04e112e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd28d912943bd433409eac740f332d4f39bb6eb0eee45b720bd8646cc04e112e->enter($__internal_bd28d912943bd433409eac740f332d4f39bb6eb0eee45b720bd8646cc04e112e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_bd28d912943bd433409eac740f332d4f39bb6eb0eee45b720bd8646cc04e112e->leave($__internal_bd28d912943bd433409eac740f332d4f39bb6eb0eee45b720bd8646cc04e112e_prof);

        
        $__internal_8d5682f7ec2fa28d81fbfee4434152520578c7615ce7d40f35de0dda50d93d7e->leave($__internal_8d5682f7ec2fa28d81fbfee4434152520578c7615ce7d40f35de0dda50d93d7e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_10bde4ca631509d5f1e96adb96e8dade6877c3252206d269dcb6a24bd90fece5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10bde4ca631509d5f1e96adb96e8dade6877c3252206d269dcb6a24bd90fece5->enter($__internal_10bde4ca631509d5f1e96adb96e8dade6877c3252206d269dcb6a24bd90fece5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_819c8d97a3a2a57d6ff0f6c9bcafa38c659e705555d9355d8c9934b66034548a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_819c8d97a3a2a57d6ff0f6c9bcafa38c659e705555d9355d8c9934b66034548a->enter($__internal_819c8d97a3a2a57d6ff0f6c9bcafa38c659e705555d9355d8c9934b66034548a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_819c8d97a3a2a57d6ff0f6c9bcafa38c659e705555d9355d8c9934b66034548a->leave($__internal_819c8d97a3a2a57d6ff0f6c9bcafa38c659e705555d9355d8c9934b66034548a_prof);

        
        $__internal_10bde4ca631509d5f1e96adb96e8dade6877c3252206d269dcb6a24bd90fece5->leave($__internal_10bde4ca631509d5f1e96adb96e8dade6877c3252206d269dcb6a24bd90fece5_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc1bd3893e6cbdce0b609fb12abe26d29f7f73428da1cdcd0622501e9cfacfd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc1bd3893e6cbdce0b609fb12abe26d29f7f73428da1cdcd0622501e9cfacfd4->enter($__internal_fc1bd3893e6cbdce0b609fb12abe26d29f7f73428da1cdcd0622501e9cfacfd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ea4bc453d7543d10738d144a7eebf0567451a4a03e65f86c18b28b85060ee320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea4bc453d7543d10738d144a7eebf0567451a4a03e65f86c18b28b85060ee320->enter($__internal_ea4bc453d7543d10738d144a7eebf0567451a4a03e65f86c18b28b85060ee320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ea4bc453d7543d10738d144a7eebf0567451a4a03e65f86c18b28b85060ee320->leave($__internal_ea4bc453d7543d10738d144a7eebf0567451a4a03e65f86c18b28b85060ee320_prof);

        
        $__internal_fc1bd3893e6cbdce0b609fb12abe26d29f7f73428da1cdcd0622501e9cfacfd4->leave($__internal_fc1bd3893e6cbdce0b609fb12abe26d29f7f73428da1cdcd0622501e9cfacfd4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "D:\\wamp\\www\\ProjetPtsCoiffeur\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
