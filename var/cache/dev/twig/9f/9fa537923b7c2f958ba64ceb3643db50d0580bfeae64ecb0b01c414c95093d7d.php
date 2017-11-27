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
        $__internal_cdf8d9b018dbc8c8cec44489ba8f51e14409fd4355466a1aa20e325f4a457b29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdf8d9b018dbc8c8cec44489ba8f51e14409fd4355466a1aa20e325f4a457b29->enter($__internal_cdf8d9b018dbc8c8cec44489ba8f51e14409fd4355466a1aa20e325f4a457b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:accueil.html.twig"));

        $__internal_13a01c67e7248bc96a6e0c13ad8d8b09d39e1d7b47f78598a9cdceaf7163bf7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13a01c67e7248bc96a6e0c13ad8d8b09d39e1d7b47f78598a9cdceaf7163bf7b->enter($__internal_13a01c67e7248bc96a6e0c13ad8d8b09d39e1d7b47f78598a9cdceaf7163bf7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdf8d9b018dbc8c8cec44489ba8f51e14409fd4355466a1aa20e325f4a457b29->leave($__internal_cdf8d9b018dbc8c8cec44489ba8f51e14409fd4355466a1aa20e325f4a457b29_prof);

        
        $__internal_13a01c67e7248bc96a6e0c13ad8d8b09d39e1d7b47f78598a9cdceaf7163bf7b->leave($__internal_13a01c67e7248bc96a6e0c13ad8d8b09d39e1d7b47f78598a9cdceaf7163bf7b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7656254cf0b53b9eb192aedb222d178cd3a448e2686409d5e65edc116eb24b3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7656254cf0b53b9eb192aedb222d178cd3a448e2686409d5e65edc116eb24b3c->enter($__internal_7656254cf0b53b9eb192aedb222d178cd3a448e2686409d5e65edc116eb24b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4e30a6b5b8978af46094e338bfea3a43057889386fd6fe0494fcf066ba8782b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e30a6b5b8978af46094e338bfea3a43057889386fd6fe0494fcf066ba8782b2->enter($__internal_4e30a6b5b8978af46094e338bfea3a43057889386fd6fe0494fcf066ba8782b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_4e30a6b5b8978af46094e338bfea3a43057889386fd6fe0494fcf066ba8782b2->leave($__internal_4e30a6b5b8978af46094e338bfea3a43057889386fd6fe0494fcf066ba8782b2_prof);

        
        $__internal_7656254cf0b53b9eb192aedb222d178cd3a448e2686409d5e65edc116eb24b3c->leave($__internal_7656254cf0b53b9eb192aedb222d178cd3a448e2686409d5e65edc116eb24b3c_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bc89c1fb43507838ef3de70326ba6ad5d232b6b529e74072afbd227abd29ead0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc89c1fb43507838ef3de70326ba6ad5d232b6b529e74072afbd227abd29ead0->enter($__internal_bc89c1fb43507838ef3de70326ba6ad5d232b6b529e74072afbd227abd29ead0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5115fbd3207b7b6615731f5a70aeca04a80fe96d2927e8383e50e2615d168152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5115fbd3207b7b6615731f5a70aeca04a80fe96d2927e8383e50e2615d168152->enter($__internal_5115fbd3207b7b6615731f5a70aeca04a80fe96d2927e8383e50e2615d168152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "<link rel=\"stylesheet\" href=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/style.css"), "html", null, true);
        echo ">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
";
        
        $__internal_5115fbd3207b7b6615731f5a70aeca04a80fe96d2927e8383e50e2615d168152->leave($__internal_5115fbd3207b7b6615731f5a70aeca04a80fe96d2927e8383e50e2615d168152_prof);

        
        $__internal_bc89c1fb43507838ef3de70326ba6ad5d232b6b529e74072afbd227abd29ead0->leave($__internal_bc89c1fb43507838ef3de70326ba6ad5d232b6b529e74072afbd227abd29ead0_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_934b2dcd210376178b864e98cae2e3b82adb80ccac83d5b545523322283d344f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_934b2dcd210376178b864e98cae2e3b82adb80ccac83d5b545523322283d344f->enter($__internal_934b2dcd210376178b864e98cae2e3b82adb80ccac83d5b545523322283d344f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93fb14050a3790e145538de1bdb540ae4dfd4abe7e689f306e393f2b28c2d44f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93fb14050a3790e145538de1bdb540ae4dfd4abe7e689f306e393f2b28c2d44f->enter($__internal_93fb14050a3790e145538de1bdb540ae4dfd4abe7e689f306e393f2b28c2d44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "  <h1>Bienvenue sur l'accueil de l'application</h1>
  <a href=";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("acceuilstock");
        echo ">
      <button type=\"button\">Stock</button>
  </a>
  <button type=\"button\"><img  class=\"img-responsive\" src=\"https://www.iconexperience.com/_img/g_collection_png/standard/512x512/delivery_man.png\">Client</button>
  <button type=\"button\">Facture</button>
";
        
        $__internal_93fb14050a3790e145538de1bdb540ae4dfd4abe7e689f306e393f2b28c2d44f->leave($__internal_93fb14050a3790e145538de1bdb540ae4dfd4abe7e689f306e393f2b28c2d44f_prof);

        
        $__internal_934b2dcd210376178b864e98cae2e3b82adb80ccac83d5b545523322283d344f->leave($__internal_934b2dcd210376178b864e98cae2e3b82adb80ccac83d5b545523322283d344f_prof);

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
        return array (  95 => 10,  92 => 9,  83 => 8,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
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
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
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
