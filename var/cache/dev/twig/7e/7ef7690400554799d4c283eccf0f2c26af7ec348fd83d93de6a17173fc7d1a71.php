<?php

/* StockBundle:Default:listProduit.html.twig */
class __TwigTemplate_f273dd49b0205dad0534b4f7505f7cedeac0a1ddb281ad601a87b1b65c0064de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "StockBundle:Default:listProduit.html.twig", 1);
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
        $__internal_bdfa45128cf4b7c0ec42c60df33b6d4df9a45e3c5308bbfe7e1a3e1f2264a931 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdfa45128cf4b7c0ec42c60df33b6d4df9a45e3c5308bbfe7e1a3e1f2264a931->enter($__internal_bdfa45128cf4b7c0ec42c60df33b6d4df9a45e3c5308bbfe7e1a3e1f2264a931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:listProduit.html.twig"));

        $__internal_5a01770af2f476155d269c83b9cd336f26903423a6a742aee93453d0a327021c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a01770af2f476155d269c83b9cd336f26903423a6a742aee93453d0a327021c->enter($__internal_5a01770af2f476155d269c83b9cd336f26903423a6a742aee93453d0a327021c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:listProduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdfa45128cf4b7c0ec42c60df33b6d4df9a45e3c5308bbfe7e1a3e1f2264a931->leave($__internal_bdfa45128cf4b7c0ec42c60df33b6d4df9a45e3c5308bbfe7e1a3e1f2264a931_prof);

        
        $__internal_5a01770af2f476155d269c83b9cd336f26903423a6a742aee93453d0a327021c->leave($__internal_5a01770af2f476155d269c83b9cd336f26903423a6a742aee93453d0a327021c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca22b40ea388f1d83e05b43e82198ebef41954816fd210a485fcf17a72fbf327 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca22b40ea388f1d83e05b43e82198ebef41954816fd210a485fcf17a72fbf327->enter($__internal_ca22b40ea388f1d83e05b43e82198ebef41954816fd210a485fcf17a72fbf327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1c1b5c856d54e9795979accd910c9eb0b1ef2da1182c47c8ad5dadb83032bf2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c1b5c856d54e9795979accd910c9eb0b1ef2da1182c47c8ad5dadb83032bf2a->enter($__internal_1c1b5c856d54e9795979accd910c9eb0b1ef2da1182c47c8ad5dadb83032bf2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil de la gestion des stocks";
        
        $__internal_1c1b5c856d54e9795979accd910c9eb0b1ef2da1182c47c8ad5dadb83032bf2a->leave($__internal_1c1b5c856d54e9795979accd910c9eb0b1ef2da1182c47c8ad5dadb83032bf2a_prof);

        
        $__internal_ca22b40ea388f1d83e05b43e82198ebef41954816fd210a485fcf17a72fbf327->leave($__internal_ca22b40ea388f1d83e05b43e82198ebef41954816fd210a485fcf17a72fbf327_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_44181fbd4e62a694dc433f5fb1c426f0b8d165b7913904a228fb85acad44b7f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44181fbd4e62a694dc433f5fb1c426f0b8d165b7913904a228fb85acad44b7f2->enter($__internal_44181fbd4e62a694dc433f5fb1c426f0b8d165b7913904a228fb85acad44b7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b4d54343e46bd80ee8e3d5782c41a4ee90a6bfbe5717e8ef50ae0c5e794a85e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4d54343e46bd80ee8e3d5782c41a4ee90a6bfbe5717e8ef50ae0c5e794a85e2->enter($__internal_b4d54343e46bd80ee8e3d5782c41a4ee90a6bfbe5717e8ef50ae0c5e794a85e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
";
        
        $__internal_b4d54343e46bd80ee8e3d5782c41a4ee90a6bfbe5717e8ef50ae0c5e794a85e2->leave($__internal_b4d54343e46bd80ee8e3d5782c41a4ee90a6bfbe5717e8ef50ae0c5e794a85e2_prof);

        
        $__internal_44181fbd4e62a694dc433f5fb1c426f0b8d165b7913904a228fb85acad44b7f2->leave($__internal_44181fbd4e62a694dc433f5fb1c426f0b8d165b7913904a228fb85acad44b7f2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e5db209da58d12e75f146efd552150907ffd91fa5954d45e9ff0c5aa7d2d1c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e5db209da58d12e75f146efd552150907ffd91fa5954d45e9ff0c5aa7d2d1c7->enter($__internal_9e5db209da58d12e75f146efd552150907ffd91fa5954d45e9ff0c5aa7d2d1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d8f4f35eeb89aaf037a3ce4d23a0e63b1df13e07185250d75a1bc6c9f5c55f51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8f4f35eeb89aaf037a3ce4d23a0e63b1df13e07185250d75a1bc6c9f5c55f51->enter($__internal_d8f4f35eeb89aaf037a3ce4d23a0e63b1df13e07185250d75a1bc6c9f5c55f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <h1>Option de recherche</h1>
    <p>Type de produit</p>
      <select>
        <option selected=\"\">Choisir un type</option>
        <option>Vente</option>
        <option>Prestation</option>
      </select>
    <p>Catégorie de produit</p>
    <select>
      <option selected=\"\">Choisir une catégorie</option>
      <option>Coupe femme</option>
      <option>Coupe homme</option>
      <option>Couleur</option>
    </select>
    <h1>Liste des produits</h1>
    <table>
      <tr>
        <td>Libelé</td>
        <td>Type</td>
        <td>Catégorie</td>
        <td>Prix unitaire</td>
        <td>Stock disponible</td>
        <td>Nombre vendu</td>
      </tr>
      <tr>
        <td>Shampoing</td>
        <td>Vente</td>
        <td>Soin cheveux</td>
        <td>5.00€</td>
        <td>10</td>
        <td>5</td>
      </tr>
      <tr>
        <td>Coupe Mulet</td>
        <td>Prestation</td>
        <td>Coupe homme</td>
        <td>12.99€</td>
        <td>10</td>
        <td>5</td>
      </tr>
    </table>
    <a href=";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueilstock");
        echo "><button type=\"button\">Retour</button></a>
";
        
        $__internal_d8f4f35eeb89aaf037a3ce4d23a0e63b1df13e07185250d75a1bc6c9f5c55f51->leave($__internal_d8f4f35eeb89aaf037a3ce4d23a0e63b1df13e07185250d75a1bc6c9f5c55f51_prof);

        
        $__internal_9e5db209da58d12e75f146efd552150907ffd91fa5954d45e9ff0c5aa7d2d1c7->leave($__internal_9e5db209da58d12e75f146efd552150907ffd91fa5954d45e9ff0c5aa7d2d1c7_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle:Default:listProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 50,  89 => 9,  80 => 8,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
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

{% block title %}Accueil de la gestion des stocks{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
{% endblock %}

{% block body %}
    <h1>Option de recherche</h1>
    <p>Type de produit</p>
      <select>
        <option selected=\"\">Choisir un type</option>
        <option>Vente</option>
        <option>Prestation</option>
      </select>
    <p>Catégorie de produit</p>
    <select>
      <option selected=\"\">Choisir une catégorie</option>
      <option>Coupe femme</option>
      <option>Coupe homme</option>
      <option>Couleur</option>
    </select>
    <h1>Liste des produits</h1>
    <table>
      <tr>
        <td>Libelé</td>
        <td>Type</td>
        <td>Catégorie</td>
        <td>Prix unitaire</td>
        <td>Stock disponible</td>
        <td>Nombre vendu</td>
      </tr>
      <tr>
        <td>Shampoing</td>
        <td>Vente</td>
        <td>Soin cheveux</td>
        <td>5.00€</td>
        <td>10</td>
        <td>5</td>
      </tr>
      <tr>
        <td>Coupe Mulet</td>
        <td>Prestation</td>
        <td>Coupe homme</td>
        <td>12.99€</td>
        <td>10</td>
        <td>5</td>
      </tr>
    </table>
    <a href={{ path('accueilstock') }}><button type=\"button\">Retour</button></a>
{% endblock %}
", "StockBundle:Default:listProduit.html.twig", "/home/kevin/Dropbox/ProjetPtsCoiffeur/src/StockBundle/Resources/views/Default/listProduit.html.twig");
    }
}
