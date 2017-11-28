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
        $__internal_7b64813d72ed6e815c0a9a8134bf566873248be2aa31e45c810dfd645de5d568 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b64813d72ed6e815c0a9a8134bf566873248be2aa31e45c810dfd645de5d568->enter($__internal_7b64813d72ed6e815c0a9a8134bf566873248be2aa31e45c810dfd645de5d568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_29ed683587a9dd5b2fb8fc6fda028671cedff564667911b665f9f453887efe59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29ed683587a9dd5b2fb8fc6fda028671cedff564667911b665f9f453887efe59->enter($__internal_29ed683587a9dd5b2fb8fc6fda028671cedff564667911b665f9f453887efe59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_7b64813d72ed6e815c0a9a8134bf566873248be2aa31e45c810dfd645de5d568->leave($__internal_7b64813d72ed6e815c0a9a8134bf566873248be2aa31e45c810dfd645de5d568_prof);

        
        $__internal_29ed683587a9dd5b2fb8fc6fda028671cedff564667911b665f9f453887efe59->leave($__internal_29ed683587a9dd5b2fb8fc6fda028671cedff564667911b665f9f453887efe59_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b822572c848d3acfc62b034cf15144b9fe61d2c3f51ac726d827af925f5fdad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b822572c848d3acfc62b034cf15144b9fe61d2c3f51ac726d827af925f5fdad->enter($__internal_0b822572c848d3acfc62b034cf15144b9fe61d2c3f51ac726d827af925f5fdad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_67bb30c2b1018f9120d67426b6208152fb19e4eb03f4bb7c2896672151e979f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67bb30c2b1018f9120d67426b6208152fb19e4eb03f4bb7c2896672151e979f5->enter($__internal_67bb30c2b1018f9120d67426b6208152fb19e4eb03f4bb7c2896672151e979f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_67bb30c2b1018f9120d67426b6208152fb19e4eb03f4bb7c2896672151e979f5->leave($__internal_67bb30c2b1018f9120d67426b6208152fb19e4eb03f4bb7c2896672151e979f5_prof);

        
        $__internal_0b822572c848d3acfc62b034cf15144b9fe61d2c3f51ac726d827af925f5fdad->leave($__internal_0b822572c848d3acfc62b034cf15144b9fe61d2c3f51ac726d827af925f5fdad_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9b1e83f85fdc10f6b10d537ba3b6222af6322b1c44485549075f2d18ea8fd203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b1e83f85fdc10f6b10d537ba3b6222af6322b1c44485549075f2d18ea8fd203->enter($__internal_9b1e83f85fdc10f6b10d537ba3b6222af6322b1c44485549075f2d18ea8fd203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_193812452bf4abb119d7dc9702b58eb68af068181e573076aca9f876676f023e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_193812452bf4abb119d7dc9702b58eb68af068181e573076aca9f876676f023e->enter($__internal_193812452bf4abb119d7dc9702b58eb68af068181e573076aca9f876676f023e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_193812452bf4abb119d7dc9702b58eb68af068181e573076aca9f876676f023e->leave($__internal_193812452bf4abb119d7dc9702b58eb68af068181e573076aca9f876676f023e_prof);

        
        $__internal_9b1e83f85fdc10f6b10d537ba3b6222af6322b1c44485549075f2d18ea8fd203->leave($__internal_9b1e83f85fdc10f6b10d537ba3b6222af6322b1c44485549075f2d18ea8fd203_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e6918a6e743d90a2cbe2ba7b043987677fcb71d333f7c6266eb7936a4308e23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e6918a6e743d90a2cbe2ba7b043987677fcb71d333f7c6266eb7936a4308e23->enter($__internal_9e6918a6e743d90a2cbe2ba7b043987677fcb71d333f7c6266eb7936a4308e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ccc1c31466c10950d709771c8979e0bb959734f3f7984d1834b2b95c293df349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccc1c31466c10950d709771c8979e0bb959734f3f7984d1834b2b95c293df349->enter($__internal_ccc1c31466c10950d709771c8979e0bb959734f3f7984d1834b2b95c293df349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ccc1c31466c10950d709771c8979e0bb959734f3f7984d1834b2b95c293df349->leave($__internal_ccc1c31466c10950d709771c8979e0bb959734f3f7984d1834b2b95c293df349_prof);

        
        $__internal_9e6918a6e743d90a2cbe2ba7b043987677fcb71d333f7c6266eb7936a4308e23->leave($__internal_9e6918a6e743d90a2cbe2ba7b043987677fcb71d333f7c6266eb7936a4308e23_prof);

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
", "@Twig/layout.html.twig", "/home/kevin/Dropbox/ProjetPtsCoiffeur/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
