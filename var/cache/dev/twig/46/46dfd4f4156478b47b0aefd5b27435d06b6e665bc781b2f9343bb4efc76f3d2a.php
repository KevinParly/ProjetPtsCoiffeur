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
        $__internal_ddd919f53b9e53a643d189a6484b737f6db98d7be295a70fcd04d3a84e9f3ddd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddd919f53b9e53a643d189a6484b737f6db98d7be295a70fcd04d3a84e9f3ddd->enter($__internal_ddd919f53b9e53a643d189a6484b737f6db98d7be295a70fcd04d3a84e9f3ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ea91775885c86c24920e9dc9d95045e938b5dabe1f0476eecd7bc67a1ef07e22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea91775885c86c24920e9dc9d95045e938b5dabe1f0476eecd7bc67a1ef07e22->enter($__internal_ea91775885c86c24920e9dc9d95045e938b5dabe1f0476eecd7bc67a1ef07e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_ddd919f53b9e53a643d189a6484b737f6db98d7be295a70fcd04d3a84e9f3ddd->leave($__internal_ddd919f53b9e53a643d189a6484b737f6db98d7be295a70fcd04d3a84e9f3ddd_prof);

        
        $__internal_ea91775885c86c24920e9dc9d95045e938b5dabe1f0476eecd7bc67a1ef07e22->leave($__internal_ea91775885c86c24920e9dc9d95045e938b5dabe1f0476eecd7bc67a1ef07e22_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0221c1b23afde4d202bb6a206552f3b188deb937d2961a246c27b1883221528b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0221c1b23afde4d202bb6a206552f3b188deb937d2961a246c27b1883221528b->enter($__internal_0221c1b23afde4d202bb6a206552f3b188deb937d2961a246c27b1883221528b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a6d93f5e4f26aa86b363623d5de394f66a38712341298da3b392698fa7a6527b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6d93f5e4f26aa86b363623d5de394f66a38712341298da3b392698fa7a6527b->enter($__internal_a6d93f5e4f26aa86b363623d5de394f66a38712341298da3b392698fa7a6527b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a6d93f5e4f26aa86b363623d5de394f66a38712341298da3b392698fa7a6527b->leave($__internal_a6d93f5e4f26aa86b363623d5de394f66a38712341298da3b392698fa7a6527b_prof);

        
        $__internal_0221c1b23afde4d202bb6a206552f3b188deb937d2961a246c27b1883221528b->leave($__internal_0221c1b23afde4d202bb6a206552f3b188deb937d2961a246c27b1883221528b_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_13b47389e4059b0fbaf0aafa28606f48d23d8fd1be2b97a051e643c7da5d8c0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13b47389e4059b0fbaf0aafa28606f48d23d8fd1be2b97a051e643c7da5d8c0c->enter($__internal_13b47389e4059b0fbaf0aafa28606f48d23d8fd1be2b97a051e643c7da5d8c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_94100e57412c54e2c78a3587d4440621215cceb0fe1e88d2fcc207e3eb8f138c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94100e57412c54e2c78a3587d4440621215cceb0fe1e88d2fcc207e3eb8f138c->enter($__internal_94100e57412c54e2c78a3587d4440621215cceb0fe1e88d2fcc207e3eb8f138c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_94100e57412c54e2c78a3587d4440621215cceb0fe1e88d2fcc207e3eb8f138c->leave($__internal_94100e57412c54e2c78a3587d4440621215cceb0fe1e88d2fcc207e3eb8f138c_prof);

        
        $__internal_13b47389e4059b0fbaf0aafa28606f48d23d8fd1be2b97a051e643c7da5d8c0c->leave($__internal_13b47389e4059b0fbaf0aafa28606f48d23d8fd1be2b97a051e643c7da5d8c0c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d9a5c18340c9ccc2eb9c37dcccbff0ab3bb36676e74b87c9aa142f397fe2e15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d9a5c18340c9ccc2eb9c37dcccbff0ab3bb36676e74b87c9aa142f397fe2e15->enter($__internal_8d9a5c18340c9ccc2eb9c37dcccbff0ab3bb36676e74b87c9aa142f397fe2e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c6602f4a4f4d063bdc079a7b61132dc869e662218a3e1783d41ad1bdb3e134bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6602f4a4f4d063bdc079a7b61132dc869e662218a3e1783d41ad1bdb3e134bc->enter($__internal_c6602f4a4f4d063bdc079a7b61132dc869e662218a3e1783d41ad1bdb3e134bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c6602f4a4f4d063bdc079a7b61132dc869e662218a3e1783d41ad1bdb3e134bc->leave($__internal_c6602f4a4f4d063bdc079a7b61132dc869e662218a3e1783d41ad1bdb3e134bc_prof);

        
        $__internal_8d9a5c18340c9ccc2eb9c37dcccbff0ab3bb36676e74b87c9aa142f397fe2e15->leave($__internal_8d9a5c18340c9ccc2eb9c37dcccbff0ab3bb36676e74b87c9aa142f397fe2e15_prof);

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
