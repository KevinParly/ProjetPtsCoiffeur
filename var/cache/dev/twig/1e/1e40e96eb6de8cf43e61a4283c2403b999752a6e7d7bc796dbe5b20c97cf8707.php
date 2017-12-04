<?php

/* ClientBundle:Default:listeClient.html.twig */
class __TwigTemplate_d6f12c8fe559f05937ddc7f1d81fabf6031ac3bdb5749f62e85acebd4b003a71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce2c94c5fe004e6f638e98554a6bb1928f4b0cd5b1259fe171935316ac1e9872 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce2c94c5fe004e6f638e98554a6bb1928f4b0cd5b1259fe171935316ac1e9872->enter($__internal_ce2c94c5fe004e6f638e98554a6bb1928f4b0cd5b1259fe171935316ac1e9872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClientBundle:Default:listeClient.html.twig"));

        $__internal_651317fc5e24886d312a7e8051ebb18d14cc576625b1474a64662c6a3bfcef9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651317fc5e24886d312a7e8051ebb18d14cc576625b1474a64662c6a3bfcef9f->enter($__internal_651317fc5e24886d312a7e8051ebb18d14cc576625b1474a64662c6a3bfcef9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClientBundle:Default:listeClient.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_ce2c94c5fe004e6f638e98554a6bb1928f4b0cd5b1259fe171935316ac1e9872->leave($__internal_ce2c94c5fe004e6f638e98554a6bb1928f4b0cd5b1259fe171935316ac1e9872_prof);

        
        $__internal_651317fc5e24886d312a7e8051ebb18d14cc576625b1474a64662c6a3bfcef9f->leave($__internal_651317fc5e24886d312a7e8051ebb18d14cc576625b1474a64662c6a3bfcef9f_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0bb053d37e08a9f7011ed2d1fedb030afd5e653f25c5bb0f58791a13224dd12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0bb053d37e08a9f7011ed2d1fedb030afd5e653f25c5bb0f58791a13224dd12->enter($__internal_a0bb053d37e08a9f7011ed2d1fedb030afd5e653f25c5bb0f58791a13224dd12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0d27b030f312c8d6115837607a25cb7693c3da100a77b2f6cc55cb8b8f9f8c1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d27b030f312c8d6115837607a25cb7693c3da100a77b2f6cc55cb8b8f9f8c1f->enter($__internal_0d27b030f312c8d6115837607a25cb7693c3da100a77b2f6cc55cb8b8f9f8c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "<title>Accueil gestion clients</title>";
        
        $__internal_0d27b030f312c8d6115837607a25cb7693c3da100a77b2f6cc55cb8b8f9f8c1f->leave($__internal_0d27b030f312c8d6115837607a25cb7693c3da100a77b2f6cc55cb8b8f9f8c1f_prof);

        
        $__internal_a0bb053d37e08a9f7011ed2d1fedb030afd5e653f25c5bb0f58791a13224dd12->leave($__internal_a0bb053d37e08a9f7011ed2d1fedb030afd5e653f25c5bb0f58791a13224dd12_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_84f15fa7f3e714754de5144f3e4c1e07c24b955798fe307ab1ee9b786a16cef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84f15fa7f3e714754de5144f3e4c1e07c24b955798fe307ab1ee9b786a16cef4->enter($__internal_84f15fa7f3e714754de5144f3e4c1e07c24b955798fe307ab1ee9b786a16cef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_568d2a0ed7a5b6089aec1040c8273e3901077d6981e14f7d087411ee3d7531be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_568d2a0ed7a5b6089aec1040c8273e3901077d6981e14f7d087411ee3d7531be->enter($__internal_568d2a0ed7a5b6089aec1040c8273e3901077d6981e14f7d087411ee3d7531be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/stylesheets/accueil.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_568d2a0ed7a5b6089aec1040c8273e3901077d6981e14f7d087411ee3d7531be->leave($__internal_568d2a0ed7a5b6089aec1040c8273e3901077d6981e14f7d087411ee3d7531be_prof);

        
        $__internal_84f15fa7f3e714754de5144f3e4c1e07c24b955798fe307ab1ee9b786a16cef4->leave($__internal_84f15fa7f3e714754de5144f3e4c1e07c24b955798fe307ab1ee9b786a16cef4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_337ad28d28c5b4bf374e94ef743dcf931099f2f4e2734563056393f8c659c06a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_337ad28d28c5b4bf374e94ef743dcf931099f2f4e2734563056393f8c659c06a->enter($__internal_337ad28d28c5b4bf374e94ef743dcf931099f2f4e2734563056393f8c659c06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e1f0851c128637b868f242a12dc000b74cd1eb510786b94a9fcb136752ae688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e1f0851c128637b868f242a12dc000b74cd1eb510786b94a9fcb136752ae688->enter($__internal_4e1f0851c128637b868f242a12dc000b74cd1eb510786b94a9fcb136752ae688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <h1>Rechercher un client</h1>
  <form>
      <input type=\"text\" placeholder=\"Nom ou prenom du client recherché\">
      <input type=\"checkbox\" name=\"genre\"><label>Homme</label>
      <input type=\"checkbox\" name=\"genre\"><label>Femme</label>
      <input type=\"checkbox\" name=\"genre\"><label>Enfant</label>
  </form>
";
        
        $__internal_4e1f0851c128637b868f242a12dc000b74cd1eb510786b94a9fcb136752ae688->leave($__internal_4e1f0851c128637b868f242a12dc000b74cd1eb510786b94a9fcb136752ae688_prof);

        
        $__internal_337ad28d28c5b4bf374e94ef743dcf931099f2f4e2734563056393f8c659c06a->leave($__internal_337ad28d28c5b4bf374e94ef743dcf931099f2f4e2734563056393f8c659c06a_prof);

    }

    public function getTemplateName()
    {
        return "ClientBundle:Default:listeClient.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 6,  82 => 5,  69 => 3,  60 => 2,  42 => 1,  32 => 5,  30 => 2,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block title %}<title>Accueil gestion clients</title>{% endblock %}
{% block stylesheets %}
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset(\"bundles/front/stylesheets/accueil.css\") }}\"/>
{% endblock %}
{% block body %}
  <h1>Rechercher un client</h1>
  <form>
      <input type=\"text\" placeholder=\"Nom ou prenom du client recherché\">
      <input type=\"checkbox\" name=\"genre\"><label>Homme</label>
      <input type=\"checkbox\" name=\"genre\"><label>Femme</label>
      <input type=\"checkbox\" name=\"genre\"><label>Enfant</label>
  </form>
{% endblock %}
", "ClientBundle:Default:listeClient.html.twig", "/home/kevin/Dropbox/PTS3/ProjetPtsCoiffeur/src/ClientBundle/Resources/views/Default/listeClient.html.twig");
    }
}
