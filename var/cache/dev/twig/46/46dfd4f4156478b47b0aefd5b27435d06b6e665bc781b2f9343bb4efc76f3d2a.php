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
        $__internal_f4994a3d84c44f599e2dd211bd4211b77201d2b3cf1e78d70dc2b638b3e66d59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4994a3d84c44f599e2dd211bd4211b77201d2b3cf1e78d70dc2b638b3e66d59->enter($__internal_f4994a3d84c44f599e2dd211bd4211b77201d2b3cf1e78d70dc2b638b3e66d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_90ecfce51ffa62249c5be1e43751621a95cf58e3db2d774781da52495e0da98b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90ecfce51ffa62249c5be1e43751621a95cf58e3db2d774781da52495e0da98b->enter($__internal_90ecfce51ffa62249c5be1e43751621a95cf58e3db2d774781da52495e0da98b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_f4994a3d84c44f599e2dd211bd4211b77201d2b3cf1e78d70dc2b638b3e66d59->leave($__internal_f4994a3d84c44f599e2dd211bd4211b77201d2b3cf1e78d70dc2b638b3e66d59_prof);

        
        $__internal_90ecfce51ffa62249c5be1e43751621a95cf58e3db2d774781da52495e0da98b->leave($__internal_90ecfce51ffa62249c5be1e43751621a95cf58e3db2d774781da52495e0da98b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4bfbabd04191d56a641c3b9439ef095ce4a8747f73c6fcad2ff7df4275767ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4bfbabd04191d56a641c3b9439ef095ce4a8747f73c6fcad2ff7df4275767ea->enter($__internal_e4bfbabd04191d56a641c3b9439ef095ce4a8747f73c6fcad2ff7df4275767ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4dd6bcd5b77055d551f2f6e33100fc36294d1a78028d73cb027b6177e307648f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dd6bcd5b77055d551f2f6e33100fc36294d1a78028d73cb027b6177e307648f->enter($__internal_4dd6bcd5b77055d551f2f6e33100fc36294d1a78028d73cb027b6177e307648f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4dd6bcd5b77055d551f2f6e33100fc36294d1a78028d73cb027b6177e307648f->leave($__internal_4dd6bcd5b77055d551f2f6e33100fc36294d1a78028d73cb027b6177e307648f_prof);

        
        $__internal_e4bfbabd04191d56a641c3b9439ef095ce4a8747f73c6fcad2ff7df4275767ea->leave($__internal_e4bfbabd04191d56a641c3b9439ef095ce4a8747f73c6fcad2ff7df4275767ea_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e91365f6db0f0beafb89a8f9add5603f5a55c15c8cf4a428e91fee9bbaa367b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e91365f6db0f0beafb89a8f9add5603f5a55c15c8cf4a428e91fee9bbaa367b2->enter($__internal_e91365f6db0f0beafb89a8f9add5603f5a55c15c8cf4a428e91fee9bbaa367b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c5d6aa992cf18f182aaba3a48435cb7f259ec2d8967de8becef3af7c21125fec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5d6aa992cf18f182aaba3a48435cb7f259ec2d8967de8becef3af7c21125fec->enter($__internal_c5d6aa992cf18f182aaba3a48435cb7f259ec2d8967de8becef3af7c21125fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c5d6aa992cf18f182aaba3a48435cb7f259ec2d8967de8becef3af7c21125fec->leave($__internal_c5d6aa992cf18f182aaba3a48435cb7f259ec2d8967de8becef3af7c21125fec_prof);

        
        $__internal_e91365f6db0f0beafb89a8f9add5603f5a55c15c8cf4a428e91fee9bbaa367b2->leave($__internal_e91365f6db0f0beafb89a8f9add5603f5a55c15c8cf4a428e91fee9bbaa367b2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bf9330b867110f76afcc82822286085913ed9e748811711dd5301ac4984a527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bf9330b867110f76afcc82822286085913ed9e748811711dd5301ac4984a527->enter($__internal_1bf9330b867110f76afcc82822286085913ed9e748811711dd5301ac4984a527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0e297bce6f45e0c8fb581aae306b691153c8499a7c4913481412e7513ff65382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e297bce6f45e0c8fb581aae306b691153c8499a7c4913481412e7513ff65382->enter($__internal_0e297bce6f45e0c8fb581aae306b691153c8499a7c4913481412e7513ff65382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0e297bce6f45e0c8fb581aae306b691153c8499a7c4913481412e7513ff65382->leave($__internal_0e297bce6f45e0c8fb581aae306b691153c8499a7c4913481412e7513ff65382_prof);

        
        $__internal_1bf9330b867110f76afcc82822286085913ed9e748811711dd5301ac4984a527->leave($__internal_1bf9330b867110f76afcc82822286085913ed9e748811711dd5301ac4984a527_prof);

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
