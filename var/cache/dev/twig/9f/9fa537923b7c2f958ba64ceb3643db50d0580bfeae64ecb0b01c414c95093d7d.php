<?php

/* FrontBundle:Default:accueil.html.twig */
class __TwigTemplate_ceb071917c479c48ad688714dbc0c872c501aaec27736dcc431d439fac6a71f3 extends Twig_Template
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
        $__internal_24fd4deeadc251a9174813140c510b4016b9de236e049c6682cdb3bfa2bc0bcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24fd4deeadc251a9174813140c510b4016b9de236e049c6682cdb3bfa2bc0bcd->enter($__internal_24fd4deeadc251a9174813140c510b4016b9de236e049c6682cdb3bfa2bc0bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:accueil.html.twig"));

        $__internal_a74692fb2432c22089a3b3d3d4ad56c7e783d754673efc4b5bfe39daf19c19e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74692fb2432c22089a3b3d3d4ad56c7e783d754673efc4b5bfe39daf19c19e3->enter($__internal_a74692fb2432c22089a3b3d3d4ad56c7e783d754673efc4b5bfe39daf19c19e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24fd4deeadc251a9174813140c510b4016b9de236e049c6682cdb3bfa2bc0bcd->leave($__internal_24fd4deeadc251a9174813140c510b4016b9de236e049c6682cdb3bfa2bc0bcd_prof);

        
        $__internal_a74692fb2432c22089a3b3d3d4ad56c7e783d754673efc4b5bfe39daf19c19e3->leave($__internal_a74692fb2432c22089a3b3d3d4ad56c7e783d754673efc4b5bfe39daf19c19e3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_91b2b1b3596272b2998182fde416870128c8f7fdd9e9c09b2ec86020eb0c36f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91b2b1b3596272b2998182fde416870128c8f7fdd9e9c09b2ec86020eb0c36f2->enter($__internal_91b2b1b3596272b2998182fde416870128c8f7fdd9e9c09b2ec86020eb0c36f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fd61d599c1b51ca7c91146d037adca35ce9a66f3d8fdcde47c62e7f8641f7958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd61d599c1b51ca7c91146d037adca35ce9a66f3d8fdcde47c62e7f8641f7958->enter($__internal_fd61d599c1b51ca7c91146d037adca35ce9a66f3d8fdcde47c62e7f8641f7958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_fd61d599c1b51ca7c91146d037adca35ce9a66f3d8fdcde47c62e7f8641f7958->leave($__internal_fd61d599c1b51ca7c91146d037adca35ce9a66f3d8fdcde47c62e7f8641f7958_prof);

        
        $__internal_91b2b1b3596272b2998182fde416870128c8f7fdd9e9c09b2ec86020eb0c36f2->leave($__internal_91b2b1b3596272b2998182fde416870128c8f7fdd9e9c09b2ec86020eb0c36f2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2ca705791e18cec2bbf44cc07cd63cfd610fd8aea783bc7db30293da5dc82957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ca705791e18cec2bbf44cc07cd63cfd610fd8aea783bc7db30293da5dc82957->enter($__internal_2ca705791e18cec2bbf44cc07cd63cfd610fd8aea783bc7db30293da5dc82957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_13963d74470f798ddc68e61832a79f47b46f0796756b7a54d516cf09b9004cdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13963d74470f798ddc68e61832a79f47b46f0796756b7a54d516cf09b9004cdb->enter($__internal_13963d74470f798ddc68e61832a79f47b46f0796756b7a54d516cf09b9004cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/stylesheets/accueil.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_13963d74470f798ddc68e61832a79f47b46f0796756b7a54d516cf09b9004cdb->leave($__internal_13963d74470f798ddc68e61832a79f47b46f0796756b7a54d516cf09b9004cdb_prof);

        
        $__internal_2ca705791e18cec2bbf44cc07cd63cfd610fd8aea783bc7db30293da5dc82957->leave($__internal_2ca705791e18cec2bbf44cc07cd63cfd610fd8aea783bc7db30293da5dc82957_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_fee560e7114d9a9fb0ce70f202d918c52ef0d388229a49fa4042523f1b78e677 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fee560e7114d9a9fb0ce70f202d918c52ef0d388229a49fa4042523f1b78e677->enter($__internal_fee560e7114d9a9fb0ce70f202d918c52ef0d388229a49fa4042523f1b78e677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d2bdc0c68c121be3aa86b24cecbcab558b9a1e89eb2e6ceae95905374e9726c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2bdc0c68c121be3aa86b24cecbcab558b9a1e89eb2e6ceae95905374e9726c5->enter($__internal_d2bdc0c68c121be3aa86b24cecbcab558b9a1e89eb2e6ceae95905374e9726c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/logo1.png"), "html", null, true);
        echo "\"/>
  <h1>Bienvenue sur l'accueil de l'application</h1>
  <div id=\"menu\">
    <a href=";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueilstock");
        echo ">
        <button type=\"button\">Stocks</button>
    </a>
    <button type=\"button\">Clients</button>
    <button type=\"button\">Factures</button>
  </div>
";
        
        $__internal_d2bdc0c68c121be3aa86b24cecbcab558b9a1e89eb2e6ceae95905374e9726c5->leave($__internal_d2bdc0c68c121be3aa86b24cecbcab558b9a1e89eb2e6ceae95905374e9726c5_prof);

        
        $__internal_fee560e7114d9a9fb0ce70f202d918c52ef0d388229a49fa4042523f1b78e677->leave($__internal_fee560e7114d9a9fb0ce70f202d918c52ef0d388229a49fa4042523f1b78e677_prof);

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
        return array (  98 => 11,  91 => 8,  82 => 7,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
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

{% block title %}Accueil{% endblock %}
{% block stylesheets %}
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset(\"bundles/front/stylesheets/accueil.css\") }}\"/>
{% endblock %}
{% block body %}
  <img src=\"{{ asset(\"bundles/front/images/logo1.png\") }}\"/>
  <h1>Bienvenue sur l'accueil de l'application</h1>
  <div id=\"menu\">
    <a href={{ path('accueilstock') }}>
        <button type=\"button\">Stocks</button>
    </a>
    <button type=\"button\">Clients</button>
    <button type=\"button\">Factures</button>
  </div>
{% endblock %}
", "FrontBundle:Default:accueil.html.twig", "D:\\wamp\\www\\ProjetPtsCoiffeur\\src\\FrontBundle/Resources/views/Default/accueil.html.twig");
    }
}
