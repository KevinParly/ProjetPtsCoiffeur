<?php

/* StockBundle:Default:listProduitModif.html.twig */
class __TwigTemplate_ff9234c14f9993c78f5901107b1a898cf2609360e648566261d7ade9121e50f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "StockBundle:Default:listProduitModif.html.twig", 1);
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
        $__internal_f40dc6e0ae2659ef4bc0a56476a3bd62eaf77aae11e88760cc7f830840d7fba8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f40dc6e0ae2659ef4bc0a56476a3bd62eaf77aae11e88760cc7f830840d7fba8->enter($__internal_f40dc6e0ae2659ef4bc0a56476a3bd62eaf77aae11e88760cc7f830840d7fba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:listProduitModif.html.twig"));

        $__internal_46dfa0535c3a4de9da9b84819ad2b7d639c9a4f52bc9cb3d59470ad2ccde287e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46dfa0535c3a4de9da9b84819ad2b7d639c9a4f52bc9cb3d59470ad2ccde287e->enter($__internal_46dfa0535c3a4de9da9b84819ad2b7d639c9a4f52bc9cb3d59470ad2ccde287e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:listProduitModif.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f40dc6e0ae2659ef4bc0a56476a3bd62eaf77aae11e88760cc7f830840d7fba8->leave($__internal_f40dc6e0ae2659ef4bc0a56476a3bd62eaf77aae11e88760cc7f830840d7fba8_prof);

        
        $__internal_46dfa0535c3a4de9da9b84819ad2b7d639c9a4f52bc9cb3d59470ad2ccde287e->leave($__internal_46dfa0535c3a4de9da9b84819ad2b7d639c9a4f52bc9cb3d59470ad2ccde287e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_63007eb704e4b2ca1cd782c3767c4b0aff852f1aed7cbcbb4db289b50089b232 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63007eb704e4b2ca1cd782c3767c4b0aff852f1aed7cbcbb4db289b50089b232->enter($__internal_63007eb704e4b2ca1cd782c3767c4b0aff852f1aed7cbcbb4db289b50089b232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_22dd6938ebc8d887be9a4f2822eb2beff43530e24e426b6b67c77aea646aa5b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22dd6938ebc8d887be9a4f2822eb2beff43530e24e426b6b67c77aea646aa5b6->enter($__internal_22dd6938ebc8d887be9a4f2822eb2beff43530e24e426b6b67c77aea646aa5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des produits";
        
        $__internal_22dd6938ebc8d887be9a4f2822eb2beff43530e24e426b6b67c77aea646aa5b6->leave($__internal_22dd6938ebc8d887be9a4f2822eb2beff43530e24e426b6b67c77aea646aa5b6_prof);

        
        $__internal_63007eb704e4b2ca1cd782c3767c4b0aff852f1aed7cbcbb4db289b50089b232->leave($__internal_63007eb704e4b2ca1cd782c3767c4b0aff852f1aed7cbcbb4db289b50089b232_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a580142b62fa4b0aa88f2373e295df12d950fd8bafd5c06810636dfb7f0b8108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a580142b62fa4b0aa88f2373e295df12d950fd8bafd5c06810636dfb7f0b8108->enter($__internal_a580142b62fa4b0aa88f2373e295df12d950fd8bafd5c06810636dfb7f0b8108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_584076f11ec18cd5f767a4e7bd7e51d69393f0861b00ee6aba452a2d76d551d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_584076f11ec18cd5f767a4e7bd7e51d69393f0861b00ee6aba452a2d76d551d7->enter($__internal_584076f11ec18cd5f767a4e7bd7e51d69393f0861b00ee6aba452a2d76d551d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
";
        
        $__internal_584076f11ec18cd5f767a4e7bd7e51d69393f0861b00ee6aba452a2d76d551d7->leave($__internal_584076f11ec18cd5f767a4e7bd7e51d69393f0861b00ee6aba452a2d76d551d7_prof);

        
        $__internal_a580142b62fa4b0aa88f2373e295df12d950fd8bafd5c06810636dfb7f0b8108->leave($__internal_a580142b62fa4b0aa88f2373e295df12d950fd8bafd5c06810636dfb7f0b8108_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4048b2f37b8ebf9746463980dc85617e029b43a06a8a8462ecb8c6e226123f84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4048b2f37b8ebf9746463980dc85617e029b43a06a8a8462ecb8c6e226123f84->enter($__internal_4048b2f37b8ebf9746463980dc85617e029b43a06a8a8462ecb8c6e226123f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c07387aa72b0544c64565d66f203a4f51978d11e2dfb65f9c5725536a376bd4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c07387aa72b0544c64565d66f203a4f51978d11e2dfb65f9c5725536a376bd4b->enter($__internal_c07387aa72b0544c64565d66f203a4f51978d11e2dfb65f9c5725536a376bd4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<h1>La liste des produits</h1>
<table>
  <tr>
    <td>Libelé</td>
    <td>Type</td>
    <td>Catégorie</td>
    <td>Prix unitaire</td>
    <td><button>Modifier</button></td>
  </tr>
  <tr>
    <td>Shampoing</td>
    <td>Vente</td>
    <td>Soins cheveux</td>
    <td>5.00€</td>
    <td><button>Modifier</button></td>
  </tr>
  <tr>
    <td>Coupe Mulet</td>
    <td>Prestation</td>
    <td>Coupe homme</td>
    <td>12.99€</td>
    <td><button>Modifier</button></td>
  </tr>
</table>
<a href=";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("acceuilstock");
        echo "><button type=\"button\">Retour</button></a>
";
        
        $__internal_c07387aa72b0544c64565d66f203a4f51978d11e2dfb65f9c5725536a376bd4b->leave($__internal_c07387aa72b0544c64565d66f203a4f51978d11e2dfb65f9c5725536a376bd4b_prof);

        
        $__internal_4048b2f37b8ebf9746463980dc85617e029b43a06a8a8462ecb8c6e226123f84->leave($__internal_4048b2f37b8ebf9746463980dc85617e029b43a06a8a8462ecb8c6e226123f84_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle:Default:listProduitModif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 32,  89 => 8,  80 => 7,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
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

{% block title %}Liste des produits{% endblock %}
{% block stylesheets %}
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
{% endblock %}
{% block body %}
<h1>La liste des produits</h1>
<table>
  <tr>
    <td>Libelé</td>
    <td>Type</td>
    <td>Catégorie</td>
    <td>Prix unitaire</td>
    <td><button>Modifier</button></td>
  </tr>
  <tr>
    <td>Shampoing</td>
    <td>Vente</td>
    <td>Soins cheveux</td>
    <td>5.00€</td>
    <td><button>Modifier</button></td>
  </tr>
  <tr>
    <td>Coupe Mulet</td>
    <td>Prestation</td>
    <td>Coupe homme</td>
    <td>12.99€</td>
    <td><button>Modifier</button></td>
  </tr>
</table>
<a href={{ path('acceuilstock') }}><button type=\"button\">Retour</button></a>
{% endblock %}
", "StockBundle:Default:listProduitModif.html.twig", "/home/kevin/Dropbox/ProjetPtsCoiffeur/src/StockBundle/Resources/views/Default/listProduitModif.html.twig");
    }
}
