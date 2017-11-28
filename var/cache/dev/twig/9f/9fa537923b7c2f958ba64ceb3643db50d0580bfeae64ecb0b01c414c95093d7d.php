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
        $__internal_c8150f73f2a7b0a632f04da5160fefd196cf3bf2124130334731c013b18f26b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8150f73f2a7b0a632f04da5160fefd196cf3bf2124130334731c013b18f26b1->enter($__internal_c8150f73f2a7b0a632f04da5160fefd196cf3bf2124130334731c013b18f26b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:accueil.html.twig"));

        $__internal_81b985ebaabd8b75f07180d49d91747616a60c2080265fb59c99ab1b08a8a8af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81b985ebaabd8b75f07180d49d91747616a60c2080265fb59c99ab1b08a8a8af->enter($__internal_81b985ebaabd8b75f07180d49d91747616a60c2080265fb59c99ab1b08a8a8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8150f73f2a7b0a632f04da5160fefd196cf3bf2124130334731c013b18f26b1->leave($__internal_c8150f73f2a7b0a632f04da5160fefd196cf3bf2124130334731c013b18f26b1_prof);

        
        $__internal_81b985ebaabd8b75f07180d49d91747616a60c2080265fb59c99ab1b08a8a8af->leave($__internal_81b985ebaabd8b75f07180d49d91747616a60c2080265fb59c99ab1b08a8a8af_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b98add9a98542deab64e972bce369b275ec5db7875743e8e7705ad761f23521f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b98add9a98542deab64e972bce369b275ec5db7875743e8e7705ad761f23521f->enter($__internal_b98add9a98542deab64e972bce369b275ec5db7875743e8e7705ad761f23521f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a93b44596ad72972581fcef43c517e178af14c259c48735692a2ab99131fc07b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a93b44596ad72972581fcef43c517e178af14c259c48735692a2ab99131fc07b->enter($__internal_a93b44596ad72972581fcef43c517e178af14c259c48735692a2ab99131fc07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_a93b44596ad72972581fcef43c517e178af14c259c48735692a2ab99131fc07b->leave($__internal_a93b44596ad72972581fcef43c517e178af14c259c48735692a2ab99131fc07b_prof);

        
        $__internal_b98add9a98542deab64e972bce369b275ec5db7875743e8e7705ad761f23521f->leave($__internal_b98add9a98542deab64e972bce369b275ec5db7875743e8e7705ad761f23521f_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_540ffb6840934142c41e9411bfd55c5248b8ec8ded39483e5b00a5b477b6016a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_540ffb6840934142c41e9411bfd55c5248b8ec8ded39483e5b00a5b477b6016a->enter($__internal_540ffb6840934142c41e9411bfd55c5248b8ec8ded39483e5b00a5b477b6016a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_aef7193eb0b6150ee492dc754af8ceb0abf16e32218492559baeeacf75f9a0a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aef7193eb0b6150ee492dc754af8ceb0abf16e32218492559baeeacf75f9a0a1->enter($__internal_aef7193eb0b6150ee492dc754af8ceb0abf16e32218492559baeeacf75f9a0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "<link rel=\"stylesheet\" href=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/style.css"), "html", null, true);
        echo ">
";
        
        $__internal_aef7193eb0b6150ee492dc754af8ceb0abf16e32218492559baeeacf75f9a0a1->leave($__internal_aef7193eb0b6150ee492dc754af8ceb0abf16e32218492559baeeacf75f9a0a1_prof);

        
        $__internal_540ffb6840934142c41e9411bfd55c5248b8ec8ded39483e5b00a5b477b6016a->leave($__internal_540ffb6840934142c41e9411bfd55c5248b8ec8ded39483e5b00a5b477b6016a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_2565c14b9dfa68ad01b1b7031b41f2c9a3057de71cbdb5a9ecc353d7e9b2c7a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2565c14b9dfa68ad01b1b7031b41f2c9a3057de71cbdb5a9ecc353d7e9b2c7a5->enter($__internal_2565c14b9dfa68ad01b1b7031b41f2c9a3057de71cbdb5a9ecc353d7e9b2c7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6134de513c2d24892fec3d10087de714a190cfd566f1f22b80875007f35524c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6134de513c2d24892fec3d10087de714a190cfd566f1f22b80875007f35524c6->enter($__internal_6134de513c2d24892fec3d10087de714a190cfd566f1f22b80875007f35524c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Bienvenue sur l'accueil de l'application</h1>
  <a href=";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("acceuilstock");
        echo ">
      <button type=\"button\">Stock</button>
  </a>
  <button type=\"button\"><img  class=\"img-responsive\" src=\"https://www.iconexperience.com/_img/g_collection_png/standard/512x512/delivery_man.png\">Client</button>
  <button type=\"button\">Facture</button>
";
        
        $__internal_6134de513c2d24892fec3d10087de714a190cfd566f1f22b80875007f35524c6->leave($__internal_6134de513c2d24892fec3d10087de714a190cfd566f1f22b80875007f35524c6_prof);

        
        $__internal_2565c14b9dfa68ad01b1b7031b41f2c9a3057de71cbdb5a9ecc353d7e9b2c7a5->leave($__internal_2565c14b9dfa68ad01b1b7031b41f2c9a3057de71cbdb5a9ecc353d7e9b2c7a5_prof);

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
  <a href={{ path('acceuilstock') }}>
      <button type=\"button\">Stock</button>
  </a>
  <button type=\"button\"><img  class=\"img-responsive\" src=\"https://www.iconexperience.com/_img/g_collection_png/standard/512x512/delivery_man.png\">Client</button>
  <button type=\"button\">Facture</button>
{% endblock %}
", "FrontBundle:Default:accueil.html.twig", "D:\\wamp\\www\\ProjetPtsCoiffeur\\src\\FrontBundle/Resources/views/Default/accueil.html.twig");
    }
}
