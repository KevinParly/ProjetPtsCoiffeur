<?php

/* ClientBundle:Default:index.html.twig */
class __TwigTemplate_e861dc76c416ece704dac204081f87cad77c110b8eb3714861ea44e3a2090279 extends Twig_Template
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
        $__internal_318ddc8a5ca048f12d43281d23602205bd285468abbe5400433fcc869fa87987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_318ddc8a5ca048f12d43281d23602205bd285468abbe5400433fcc869fa87987->enter($__internal_318ddc8a5ca048f12d43281d23602205bd285468abbe5400433fcc869fa87987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClientBundle:Default:index.html.twig"));

        $__internal_4bd709cdcb659389d6037272f5f1550c37d4a50fccfd32b928aa84202c920225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd709cdcb659389d6037272f5f1550c37d4a50fccfd32b928aa84202c920225->enter($__internal_4bd709cdcb659389d6037272f5f1550c37d4a50fccfd32b928aa84202c920225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClientBundle:Default:index.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_318ddc8a5ca048f12d43281d23602205bd285468abbe5400433fcc869fa87987->leave($__internal_318ddc8a5ca048f12d43281d23602205bd285468abbe5400433fcc869fa87987_prof);

        
        $__internal_4bd709cdcb659389d6037272f5f1550c37d4a50fccfd32b928aa84202c920225->leave($__internal_4bd709cdcb659389d6037272f5f1550c37d4a50fccfd32b928aa84202c920225_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_fdc9899dcf2ec18d5a88cf454665b7ceb220bdf6ef4396cbe0b14d21605781e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdc9899dcf2ec18d5a88cf454665b7ceb220bdf6ef4396cbe0b14d21605781e7->enter($__internal_fdc9899dcf2ec18d5a88cf454665b7ceb220bdf6ef4396cbe0b14d21605781e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5184893ac7ceefc55d84af8eb0fb828855d09f9aad3ac9772ad42a8a24660234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5184893ac7ceefc55d84af8eb0fb828855d09f9aad3ac9772ad42a8a24660234->enter($__internal_5184893ac7ceefc55d84af8eb0fb828855d09f9aad3ac9772ad42a8a24660234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "<title>Accueil gestion clients</title>";
        
        $__internal_5184893ac7ceefc55d84af8eb0fb828855d09f9aad3ac9772ad42a8a24660234->leave($__internal_5184893ac7ceefc55d84af8eb0fb828855d09f9aad3ac9772ad42a8a24660234_prof);

        
        $__internal_fdc9899dcf2ec18d5a88cf454665b7ceb220bdf6ef4396cbe0b14d21605781e7->leave($__internal_fdc9899dcf2ec18d5a88cf454665b7ceb220bdf6ef4396cbe0b14d21605781e7_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d7ba7512f22fac78d3cf24d5aca3e41d12a7cf5e19bcf75c7bb4d1dc2e8a5373 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7ba7512f22fac78d3cf24d5aca3e41d12a7cf5e19bcf75c7bb4d1dc2e8a5373->enter($__internal_d7ba7512f22fac78d3cf24d5aca3e41d12a7cf5e19bcf75c7bb4d1dc2e8a5373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7dbc7743cd24812015991844a76b2ac6e40515367ee96034b6321cf056597912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dbc7743cd24812015991844a76b2ac6e40515367ee96034b6321cf056597912->enter($__internal_7dbc7743cd24812015991844a76b2ac6e40515367ee96034b6321cf056597912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/stylesheets/accueil.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_7dbc7743cd24812015991844a76b2ac6e40515367ee96034b6321cf056597912->leave($__internal_7dbc7743cd24812015991844a76b2ac6e40515367ee96034b6321cf056597912_prof);

        
        $__internal_d7ba7512f22fac78d3cf24d5aca3e41d12a7cf5e19bcf75c7bb4d1dc2e8a5373->leave($__internal_d7ba7512f22fac78d3cf24d5aca3e41d12a7cf5e19bcf75c7bb4d1dc2e8a5373_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_65bd89a9f88671d3e4d76b658f57a4ae8fc9c86991bcd9418cb87b1aadf72818 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65bd89a9f88671d3e4d76b658f57a4ae8fc9c86991bcd9418cb87b1aadf72818->enter($__internal_65bd89a9f88671d3e4d76b658f57a4ae8fc9c86991bcd9418cb87b1aadf72818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_84258225cada32ef205b17a1125ba011f169070e6b3d9c9f8e0aada72a946fc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84258225cada32ef205b17a1125ba011f169070e6b3d9c9f8e0aada72a946fc7->enter($__internal_84258225cada32ef205b17a1125ba011f169070e6b3d9c9f8e0aada72a946fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <h1>Accueil de la gestion des clients</h1>
  <div id=\"menu\">
    <a href=";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeclient");
        echo "> 
        <button type=\"button\">Lister les clients</button>
    </a>
    <button type=\"button\">Prendre un rendez-vous</button>
  </div>
";
        
        $__internal_84258225cada32ef205b17a1125ba011f169070e6b3d9c9f8e0aada72a946fc7->leave($__internal_84258225cada32ef205b17a1125ba011f169070e6b3d9c9f8e0aada72a946fc7_prof);

        
        $__internal_65bd89a9f88671d3e4d76b658f57a4ae8fc9c86991bcd9418cb87b1aadf72818->leave($__internal_65bd89a9f88671d3e4d76b658f57a4ae8fc9c86991bcd9418cb87b1aadf72818_prof);

    }

    public function getTemplateName()
    {
        return "ClientBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  95 => 8,  91 => 6,  82 => 5,  69 => 3,  60 => 2,  42 => 1,  32 => 5,  30 => 2,  28 => 1,);
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
  <h1>Accueil de la gestion des clients</h1>
  <div id=\"menu\">
    <a href={{ path('listeclient') }}> 
        <button type=\"button\">Lister les clients</button>
    </a>
    <button type=\"button\">Prendre un rendez-vous</button>
  </div>
{% endblock %}
", "ClientBundle:Default:index.html.twig", "/home/kevin/Dropbox/PTS3/ProjetPtsCoiffeur/src/ClientBundle/Resources/views/Default/index.html.twig");
    }
}
