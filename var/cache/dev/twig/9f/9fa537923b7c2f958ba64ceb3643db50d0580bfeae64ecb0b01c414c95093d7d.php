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
        $__internal_1a57a91b0c3e054498c1c863cd23cf881a09dca24c7c817743a5c773823b789c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a57a91b0c3e054498c1c863cd23cf881a09dca24c7c817743a5c773823b789c->enter($__internal_1a57a91b0c3e054498c1c863cd23cf881a09dca24c7c817743a5c773823b789c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:accueil.html.twig"));

        $__internal_ec6821c6ae876b74f7dd75d0542a5ec60b8f14009ea1071fa43a3398430d6c9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec6821c6ae876b74f7dd75d0542a5ec60b8f14009ea1071fa43a3398430d6c9d->enter($__internal_ec6821c6ae876b74f7dd75d0542a5ec60b8f14009ea1071fa43a3398430d6c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a57a91b0c3e054498c1c863cd23cf881a09dca24c7c817743a5c773823b789c->leave($__internal_1a57a91b0c3e054498c1c863cd23cf881a09dca24c7c817743a5c773823b789c_prof);

        
        $__internal_ec6821c6ae876b74f7dd75d0542a5ec60b8f14009ea1071fa43a3398430d6c9d->leave($__internal_ec6821c6ae876b74f7dd75d0542a5ec60b8f14009ea1071fa43a3398430d6c9d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d533666211a5fe5690d0b205abb045b94a50b10dbf019444f05981f2312495c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d533666211a5fe5690d0b205abb045b94a50b10dbf019444f05981f2312495c9->enter($__internal_d533666211a5fe5690d0b205abb045b94a50b10dbf019444f05981f2312495c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e801d38a758926f6aa91677ae40e3fd3c1d63df6108ad5960fd86f7f840336e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e801d38a758926f6aa91677ae40e3fd3c1d63df6108ad5960fd86f7f840336e1->enter($__internal_e801d38a758926f6aa91677ae40e3fd3c1d63df6108ad5960fd86f7f840336e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_e801d38a758926f6aa91677ae40e3fd3c1d63df6108ad5960fd86f7f840336e1->leave($__internal_e801d38a758926f6aa91677ae40e3fd3c1d63df6108ad5960fd86f7f840336e1_prof);

        
        $__internal_d533666211a5fe5690d0b205abb045b94a50b10dbf019444f05981f2312495c9->leave($__internal_d533666211a5fe5690d0b205abb045b94a50b10dbf019444f05981f2312495c9_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bc3ac9d3161a381421709dcaca76364b780e300a4a9d24cedf21bc5da54da993 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc3ac9d3161a381421709dcaca76364b780e300a4a9d24cedf21bc5da54da993->enter($__internal_bc3ac9d3161a381421709dcaca76364b780e300a4a9d24cedf21bc5da54da993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ff08a4cf367bee726c98ece18c240ae691c3cc5294439066eddf4da67ca2e0e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff08a4cf367bee726c98ece18c240ae691c3cc5294439066eddf4da67ca2e0e9->enter($__internal_ff08a4cf367bee726c98ece18c240ae691c3cc5294439066eddf4da67ca2e0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "<link rel=\"stylesheet\" href=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/style.css"), "html", null, true);
        echo ">
";
        
        $__internal_ff08a4cf367bee726c98ece18c240ae691c3cc5294439066eddf4da67ca2e0e9->leave($__internal_ff08a4cf367bee726c98ece18c240ae691c3cc5294439066eddf4da67ca2e0e9_prof);

        
        $__internal_bc3ac9d3161a381421709dcaca76364b780e300a4a9d24cedf21bc5da54da993->leave($__internal_bc3ac9d3161a381421709dcaca76364b780e300a4a9d24cedf21bc5da54da993_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c315cdddcccbc5650846c6e6ff30a055d7171dfc64917db016331f0e535543b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c315cdddcccbc5650846c6e6ff30a055d7171dfc64917db016331f0e535543b7->enter($__internal_c315cdddcccbc5650846c6e6ff30a055d7171dfc64917db016331f0e535543b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0200142d888ff08d59896bd2e0c77185c43c69d39436a9beef842b024b507943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0200142d888ff08d59896bd2e0c77185c43c69d39436a9beef842b024b507943->enter($__internal_0200142d888ff08d59896bd2e0c77185c43c69d39436a9beef842b024b507943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Bienvenue sur l'accueil de l'application</h1>
  <a href=";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueilstock");
        echo ">
      <button type=\"button\">Stocks</button>
  </a>
  <button type=\"button\">Clients</button>
  <button type=\"button\">Factures</button>
";
        
        $__internal_0200142d888ff08d59896bd2e0c77185c43c69d39436a9beef842b024b507943->leave($__internal_0200142d888ff08d59896bd2e0c77185c43c69d39436a9beef842b024b507943_prof);

        
        $__internal_c315cdddcccbc5650846c6e6ff30a055d7171dfc64917db016331f0e535543b7->leave($__internal_c315cdddcccbc5650846c6e6ff30a055d7171dfc64917db016331f0e535543b7_prof);

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
        return array (  94 => 9,  91 => 8,  82 => 7,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
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
<link rel=\"stylesheet\" href={{ asset('/css/style.css') }}>
{% endblock %}
{% block body %}
  <h1>Bienvenue sur l'accueil de l'application</h1>
  <a href={{ path('accueilstock') }}>
      <button type=\"button\">Stocks</button>
  </a>
  <button type=\"button\">Clients</button>
  <button type=\"button\">Factures</button>
{% endblock %}
", "FrontBundle:Default:accueil.html.twig", "D:\\wamp\\www\\ProjetPtsCoiffeur\\src\\FrontBundle/Resources/views/Default/accueil.html.twig");
    }
}
