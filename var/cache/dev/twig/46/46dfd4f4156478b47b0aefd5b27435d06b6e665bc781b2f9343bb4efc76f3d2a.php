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
        $__internal_8c30540307774e65af0aa1a1e9dbb1a6f062cef73f5d4a9000d3e02f56133e83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c30540307774e65af0aa1a1e9dbb1a6f062cef73f5d4a9000d3e02f56133e83->enter($__internal_8c30540307774e65af0aa1a1e9dbb1a6f062cef73f5d4a9000d3e02f56133e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_674b6dbcc69e68df6b462f96667c51c081ad0d320af9f2bfa5b01bc467117da5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_674b6dbcc69e68df6b462f96667c51c081ad0d320af9f2bfa5b01bc467117da5->enter($__internal_674b6dbcc69e68df6b462f96667c51c081ad0d320af9f2bfa5b01bc467117da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_8c30540307774e65af0aa1a1e9dbb1a6f062cef73f5d4a9000d3e02f56133e83->leave($__internal_8c30540307774e65af0aa1a1e9dbb1a6f062cef73f5d4a9000d3e02f56133e83_prof);

        
        $__internal_674b6dbcc69e68df6b462f96667c51c081ad0d320af9f2bfa5b01bc467117da5->leave($__internal_674b6dbcc69e68df6b462f96667c51c081ad0d320af9f2bfa5b01bc467117da5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c77d4a25d09fcd4315521a13973b41808064080d9b7946f345b071ff8dc8464 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c77d4a25d09fcd4315521a13973b41808064080d9b7946f345b071ff8dc8464->enter($__internal_3c77d4a25d09fcd4315521a13973b41808064080d9b7946f345b071ff8dc8464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_69c6edf4c705a2d406e39ade5c806c160646af21f88e878bb2257a4b44987d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69c6edf4c705a2d406e39ade5c806c160646af21f88e878bb2257a4b44987d71->enter($__internal_69c6edf4c705a2d406e39ade5c806c160646af21f88e878bb2257a4b44987d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_69c6edf4c705a2d406e39ade5c806c160646af21f88e878bb2257a4b44987d71->leave($__internal_69c6edf4c705a2d406e39ade5c806c160646af21f88e878bb2257a4b44987d71_prof);

        
        $__internal_3c77d4a25d09fcd4315521a13973b41808064080d9b7946f345b071ff8dc8464->leave($__internal_3c77d4a25d09fcd4315521a13973b41808064080d9b7946f345b071ff8dc8464_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_83e201f09314ac38ae63b7a4895074de0ff96c1101758d4661caecc65307c2f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83e201f09314ac38ae63b7a4895074de0ff96c1101758d4661caecc65307c2f2->enter($__internal_83e201f09314ac38ae63b7a4895074de0ff96c1101758d4661caecc65307c2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_88ea4eea45be25422d930e806b449540d319b6ad63f529d0641a931f90eb7ad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ea4eea45be25422d930e806b449540d319b6ad63f529d0641a931f90eb7ad3->enter($__internal_88ea4eea45be25422d930e806b449540d319b6ad63f529d0641a931f90eb7ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_88ea4eea45be25422d930e806b449540d319b6ad63f529d0641a931f90eb7ad3->leave($__internal_88ea4eea45be25422d930e806b449540d319b6ad63f529d0641a931f90eb7ad3_prof);

        
        $__internal_83e201f09314ac38ae63b7a4895074de0ff96c1101758d4661caecc65307c2f2->leave($__internal_83e201f09314ac38ae63b7a4895074de0ff96c1101758d4661caecc65307c2f2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b13e0cdeb520f20447dced96b661143466115468cbe5a471d570f4fefd8e858d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b13e0cdeb520f20447dced96b661143466115468cbe5a471d570f4fefd8e858d->enter($__internal_b13e0cdeb520f20447dced96b661143466115468cbe5a471d570f4fefd8e858d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c1a1ffc0d38713e679786a00de059f242a39a37049a1e5bf3cdc90146e368066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1a1ffc0d38713e679786a00de059f242a39a37049a1e5bf3cdc90146e368066->enter($__internal_c1a1ffc0d38713e679786a00de059f242a39a37049a1e5bf3cdc90146e368066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c1a1ffc0d38713e679786a00de059f242a39a37049a1e5bf3cdc90146e368066->leave($__internal_c1a1ffc0d38713e679786a00de059f242a39a37049a1e5bf3cdc90146e368066_prof);

        
        $__internal_b13e0cdeb520f20447dced96b661143466115468cbe5a471d570f4fefd8e858d->leave($__internal_b13e0cdeb520f20447dced96b661143466115468cbe5a471d570f4fefd8e858d_prof);

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
