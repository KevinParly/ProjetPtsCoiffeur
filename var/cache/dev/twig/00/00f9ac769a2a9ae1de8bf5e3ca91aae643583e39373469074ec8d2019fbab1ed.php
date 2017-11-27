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
        $__internal_6d25fc34873c334d82fd7200eca64ab39e0efea07f6680a330253ca99f59ba36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d25fc34873c334d82fd7200eca64ab39e0efea07f6680a330253ca99f59ba36->enter($__internal_6d25fc34873c334d82fd7200eca64ab39e0efea07f6680a330253ca99f59ba36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_293cffeee2cfdde2f8bbd447d4e10c2728b7d65f0240f89beac3632262947217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_293cffeee2cfdde2f8bbd447d4e10c2728b7d65f0240f89beac3632262947217->enter($__internal_293cffeee2cfdde2f8bbd447d4e10c2728b7d65f0240f89beac3632262947217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_6d25fc34873c334d82fd7200eca64ab39e0efea07f6680a330253ca99f59ba36->leave($__internal_6d25fc34873c334d82fd7200eca64ab39e0efea07f6680a330253ca99f59ba36_prof);

        
        $__internal_293cffeee2cfdde2f8bbd447d4e10c2728b7d65f0240f89beac3632262947217->leave($__internal_293cffeee2cfdde2f8bbd447d4e10c2728b7d65f0240f89beac3632262947217_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6787b55f7ae7dd3baa63bf16694e62d087086a2388cfd8d3d51f9d9c0381109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6787b55f7ae7dd3baa63bf16694e62d087086a2388cfd8d3d51f9d9c0381109->enter($__internal_e6787b55f7ae7dd3baa63bf16694e62d087086a2388cfd8d3d51f9d9c0381109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0b228629cec5c9115533eb2f1bbeb86484af63118547f01ac446694772e2f2f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b228629cec5c9115533eb2f1bbeb86484af63118547f01ac446694772e2f2f4->enter($__internal_0b228629cec5c9115533eb2f1bbeb86484af63118547f01ac446694772e2f2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0b228629cec5c9115533eb2f1bbeb86484af63118547f01ac446694772e2f2f4->leave($__internal_0b228629cec5c9115533eb2f1bbeb86484af63118547f01ac446694772e2f2f4_prof);

        
        $__internal_e6787b55f7ae7dd3baa63bf16694e62d087086a2388cfd8d3d51f9d9c0381109->leave($__internal_e6787b55f7ae7dd3baa63bf16694e62d087086a2388cfd8d3d51f9d9c0381109_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_c4f73362ba8ef74138c348d6b68e8f1808669ce1cfe56706bfac44f8bb227f3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4f73362ba8ef74138c348d6b68e8f1808669ce1cfe56706bfac44f8bb227f3f->enter($__internal_c4f73362ba8ef74138c348d6b68e8f1808669ce1cfe56706bfac44f8bb227f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1d1ee80ed4903177ac09b9d170ae71693981a9139c1f700e159cbcd14aba4698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d1ee80ed4903177ac09b9d170ae71693981a9139c1f700e159cbcd14aba4698->enter($__internal_1d1ee80ed4903177ac09b9d170ae71693981a9139c1f700e159cbcd14aba4698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_1d1ee80ed4903177ac09b9d170ae71693981a9139c1f700e159cbcd14aba4698->leave($__internal_1d1ee80ed4903177ac09b9d170ae71693981a9139c1f700e159cbcd14aba4698_prof);

        
        $__internal_c4f73362ba8ef74138c348d6b68e8f1808669ce1cfe56706bfac44f8bb227f3f->leave($__internal_c4f73362ba8ef74138c348d6b68e8f1808669ce1cfe56706bfac44f8bb227f3f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1095eca1ff0009345c67bfafa735acb01f1135b8ae648eee67bce2068bfb7882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1095eca1ff0009345c67bfafa735acb01f1135b8ae648eee67bce2068bfb7882->enter($__internal_1095eca1ff0009345c67bfafa735acb01f1135b8ae648eee67bce2068bfb7882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_13b6d875602a527473dc7f2d5623edac5f30db0d7d6c5820547fdef3c22e1f2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b6d875602a527473dc7f2d5623edac5f30db0d7d6c5820547fdef3c22e1f2f->enter($__internal_13b6d875602a527473dc7f2d5623edac5f30db0d7d6c5820547fdef3c22e1f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_13b6d875602a527473dc7f2d5623edac5f30db0d7d6c5820547fdef3c22e1f2f->leave($__internal_13b6d875602a527473dc7f2d5623edac5f30db0d7d6c5820547fdef3c22e1f2f_prof);

        
        $__internal_1095eca1ff0009345c67bfafa735acb01f1135b8ae648eee67bce2068bfb7882->leave($__internal_1095eca1ff0009345c67bfafa735acb01f1135b8ae648eee67bce2068bfb7882_prof);

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
