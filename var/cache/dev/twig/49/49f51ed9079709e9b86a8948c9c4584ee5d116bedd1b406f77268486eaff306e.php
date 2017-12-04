<?php

/* FrontBundle:Default:accueil.html.twig */
class __TwigTemplate_6a58fe3bd2cefec4e0981659a23f8933b118591bcebbf56778393b396ad31396 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:Default:accueil.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cecc7b730d59e368964fd155968c8c48be0ce4b0388598f6e79771cb0f2c9a9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cecc7b730d59e368964fd155968c8c48be0ce4b0388598f6e79771cb0f2c9a9f->enter($__internal_cecc7b730d59e368964fd155968c8c48be0ce4b0388598f6e79771cb0f2c9a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:accueil.html.twig"));

        $__internal_7872306e4f787dbff53a385ad6dee94abd9318e388a921d5acae35b6beb50abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7872306e4f787dbff53a385ad6dee94abd9318e388a921d5acae35b6beb50abd->enter($__internal_7872306e4f787dbff53a385ad6dee94abd9318e388a921d5acae35b6beb50abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cecc7b730d59e368964fd155968c8c48be0ce4b0388598f6e79771cb0f2c9a9f->leave($__internal_cecc7b730d59e368964fd155968c8c48be0ce4b0388598f6e79771cb0f2c9a9f_prof);

        
        $__internal_7872306e4f787dbff53a385ad6dee94abd9318e388a921d5acae35b6beb50abd->leave($__internal_7872306e4f787dbff53a385ad6dee94abd9318e388a921d5acae35b6beb50abd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f94ee7d95d02cd6f1c7fd781b56e0832af393ae883d0b6a6bd1fc330cf602b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f94ee7d95d02cd6f1c7fd781b56e0832af393ae883d0b6a6bd1fc330cf602b2->enter($__internal_9f94ee7d95d02cd6f1c7fd781b56e0832af393ae883d0b6a6bd1fc330cf602b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5c3aefb787244991ea21ce7ed8ab1f4a8a0667d950228a02dd3d4b02e2330844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c3aefb787244991ea21ce7ed8ab1f4a8a0667d950228a02dd3d4b02e2330844->enter($__internal_5c3aefb787244991ea21ce7ed8ab1f4a8a0667d950228a02dd3d4b02e2330844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "<title>Accueil</title>";
        
        $__internal_5c3aefb787244991ea21ce7ed8ab1f4a8a0667d950228a02dd3d4b02e2330844->leave($__internal_5c3aefb787244991ea21ce7ed8ab1f4a8a0667d950228a02dd3d4b02e2330844_prof);

        
        $__internal_9f94ee7d95d02cd6f1c7fd781b56e0832af393ae883d0b6a6bd1fc330cf602b2->leave($__internal_9f94ee7d95d02cd6f1c7fd781b56e0832af393ae883d0b6a6bd1fc330cf602b2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_146a9c3440dae73ea1e28a82cd0c1e47c3dc68cb598b1c81fff229c38a7b7e96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_146a9c3440dae73ea1e28a82cd0c1e47c3dc68cb598b1c81fff229c38a7b7e96->enter($__internal_146a9c3440dae73ea1e28a82cd0c1e47c3dc68cb598b1c81fff229c38a7b7e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8eef3aae0a694baa2b8f22f640a6a7156aca39acb6840e22cb529da341cd899b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eef3aae0a694baa2b8f22f640a6a7156aca39acb6840e22cb529da341cd899b->enter($__internal_8eef3aae0a694baa2b8f22f640a6a7156aca39acb6840e22cb529da341cd899b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/stylesheets/accueil.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_8eef3aae0a694baa2b8f22f640a6a7156aca39acb6840e22cb529da341cd899b->leave($__internal_8eef3aae0a694baa2b8f22f640a6a7156aca39acb6840e22cb529da341cd899b_prof);

        
        $__internal_146a9c3440dae73ea1e28a82cd0c1e47c3dc68cb598b1c81fff229c38a7b7e96->leave($__internal_146a9c3440dae73ea1e28a82cd0c1e47c3dc68cb598b1c81fff229c38a7b7e96_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_56ba8504d42550a22a734e369f8ce4da580c0cb7bcfc8692dfc7801aaf2dc322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56ba8504d42550a22a734e369f8ce4da580c0cb7bcfc8692dfc7801aaf2dc322->enter($__internal_56ba8504d42550a22a734e369f8ce4da580c0cb7bcfc8692dfc7801aaf2dc322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_00d47147b5a7d0b067b57a41bfa02dbce7fd82049a23c1dbf79579937dbd6d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00d47147b5a7d0b067b57a41bfa02dbce7fd82049a23c1dbf79579937dbd6d0d->enter($__internal_00d47147b5a7d0b067b57a41bfa02dbce7fd82049a23c1dbf79579937dbd6d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/logo1.png"), "html", null, true);
        echo "\"/>
  <h1>Bienvenue sur l'accueil de l'application</h1>
  <div id=\"menu\">
    <a href=";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueilclient");
        echo ">
        <button type=\"button\">Clients</button>
    </a>
    <button type=\"button\">Factures</button>
    <a href=";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueilstock");
        echo ">
        <button type=\"button\">Stocks</button>
    </a>
  </div>
";
        
        $__internal_00d47147b5a7d0b067b57a41bfa02dbce7fd82049a23c1dbf79579937dbd6d0d->leave($__internal_00d47147b5a7d0b067b57a41bfa02dbce7fd82049a23c1dbf79579937dbd6d0d_prof);

        
        $__internal_56ba8504d42550a22a734e369f8ce4da580c0cb7bcfc8692dfc7801aaf2dc322->leave($__internal_56ba8504d42550a22a734e369f8ce4da580c0cb7bcfc8692dfc7801aaf2dc322_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 15,  98 => 11,  91 => 8,  82 => 7,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FrontBundle::layout.html.twig\" %}

{% block title %}<title>Accueil</title>{% endblock %}
{% block stylesheets %}
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset(\"bundles/front/stylesheets/accueil.css\") }}\"/>
{% endblock %}
{% block body %}
  <img src=\"{{ asset(\"bundles/front/images/logo1.png\") }}\"/>
  <h1>Bienvenue sur l'accueil de l'application</h1>
  <div id=\"menu\">
    <a href={{ path('accueilclient') }}>
        <button type=\"button\">Clients</button>
    </a>
    <button type=\"button\">Factures</button>
    <a href={{ path('accueilstock') }}>
        <button type=\"button\">Stocks</button>
    </a>
  </div>
{% endblock %}
", "FrontBundle:Default:accueil.html.twig", "/home/kevin/Dropbox/PTS3/ProjetPtsCoiffeur/src/FrontBundle/Resources/views/Default/accueil.html.twig");
    }
}
