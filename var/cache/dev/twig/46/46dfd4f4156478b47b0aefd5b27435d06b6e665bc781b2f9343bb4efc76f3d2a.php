<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_40d17f889cda0e9198fdd0de6a45002f4e95d20d7f1dda71b6e52967dec960e9 extends Twig_Template
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
        $__internal_004c24a5cf8f5e92f10f7712eb55d91994dd905648d35e95bbf91b5d6b32181a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_004c24a5cf8f5e92f10f7712eb55d91994dd905648d35e95bbf91b5d6b32181a->enter($__internal_004c24a5cf8f5e92f10f7712eb55d91994dd905648d35e95bbf91b5d6b32181a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_69014dafe607432556e64bc544ccc0aaa3764e8bb0166af19fdd5c9b884da562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69014dafe607432556e64bc544ccc0aaa3764e8bb0166af19fdd5c9b884da562->enter($__internal_69014dafe607432556e64bc544ccc0aaa3764e8bb0166af19fdd5c9b884da562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_004c24a5cf8f5e92f10f7712eb55d91994dd905648d35e95bbf91b5d6b32181a->leave($__internal_004c24a5cf8f5e92f10f7712eb55d91994dd905648d35e95bbf91b5d6b32181a_prof);

        
        $__internal_69014dafe607432556e64bc544ccc0aaa3764e8bb0166af19fdd5c9b884da562->leave($__internal_69014dafe607432556e64bc544ccc0aaa3764e8bb0166af19fdd5c9b884da562_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_67f7343573ea4d656a1c2e3a23f89a730a1f10238c5a4778f59d9d62bb31e913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67f7343573ea4d656a1c2e3a23f89a730a1f10238c5a4778f59d9d62bb31e913->enter($__internal_67f7343573ea4d656a1c2e3a23f89a730a1f10238c5a4778f59d9d62bb31e913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3910b252a85acad026aa62c74fd58741f79f0db9a73c5f3287edce784cac3777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3910b252a85acad026aa62c74fd58741f79f0db9a73c5f3287edce784cac3777->enter($__internal_3910b252a85acad026aa62c74fd58741f79f0db9a73c5f3287edce784cac3777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3910b252a85acad026aa62c74fd58741f79f0db9a73c5f3287edce784cac3777->leave($__internal_3910b252a85acad026aa62c74fd58741f79f0db9a73c5f3287edce784cac3777_prof);

        
        $__internal_67f7343573ea4d656a1c2e3a23f89a730a1f10238c5a4778f59d9d62bb31e913->leave($__internal_67f7343573ea4d656a1c2e3a23f89a730a1f10238c5a4778f59d9d62bb31e913_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_eb50372c61a495e18a8a93bae71ade65beb26224f07a02a7d2106eb6d8b78cac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb50372c61a495e18a8a93bae71ade65beb26224f07a02a7d2106eb6d8b78cac->enter($__internal_eb50372c61a495e18a8a93bae71ade65beb26224f07a02a7d2106eb6d8b78cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c001a8ba1b0c899daf511b4efdcfed4cd3480ccb07c08ae8f3da8721037416ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c001a8ba1b0c899daf511b4efdcfed4cd3480ccb07c08ae8f3da8721037416ae->enter($__internal_c001a8ba1b0c899daf511b4efdcfed4cd3480ccb07c08ae8f3da8721037416ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c001a8ba1b0c899daf511b4efdcfed4cd3480ccb07c08ae8f3da8721037416ae->leave($__internal_c001a8ba1b0c899daf511b4efdcfed4cd3480ccb07c08ae8f3da8721037416ae_prof);

        
        $__internal_eb50372c61a495e18a8a93bae71ade65beb26224f07a02a7d2106eb6d8b78cac->leave($__internal_eb50372c61a495e18a8a93bae71ade65beb26224f07a02a7d2106eb6d8b78cac_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b680406fc0f7fab859ee810c50c637ed4b77036b7d641da7f87ea743ad509a3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b680406fc0f7fab859ee810c50c637ed4b77036b7d641da7f87ea743ad509a3b->enter($__internal_b680406fc0f7fab859ee810c50c637ed4b77036b7d641da7f87ea743ad509a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_773ee0575ab5540ac32fee027e300d1a21cab0f45b2541e3a6d4bbdee4157e99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_773ee0575ab5540ac32fee027e300d1a21cab0f45b2541e3a6d4bbdee4157e99->enter($__internal_773ee0575ab5540ac32fee027e300d1a21cab0f45b2541e3a6d4bbdee4157e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_773ee0575ab5540ac32fee027e300d1a21cab0f45b2541e3a6d4bbdee4157e99->leave($__internal_773ee0575ab5540ac32fee027e300d1a21cab0f45b2541e3a6d4bbdee4157e99_prof);

        
        $__internal_b680406fc0f7fab859ee810c50c637ed4b77036b7d641da7f87ea743ad509a3b->leave($__internal_b680406fc0f7fab859ee810c50c637ed4b77036b7d641da7f87ea743ad509a3b_prof);

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
", "@Twig/layout.html.twig", "/home/kevin/Dropbox/PTS3/ProjetPtsCoiffeur/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
