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
        $__internal_49d53eda57bed0c3f731e62c86b864d826a23042d5ed19d7afd494c03e8fa44c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49d53eda57bed0c3f731e62c86b864d826a23042d5ed19d7afd494c03e8fa44c->enter($__internal_49d53eda57bed0c3f731e62c86b864d826a23042d5ed19d7afd494c03e8fa44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:listProduit.html.twig"));

        $__internal_a7265d79a49e9b9fc34f0410aa1b23fb8638ba6cee37bf5433cf0ed60f833ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7265d79a49e9b9fc34f0410aa1b23fb8638ba6cee37bf5433cf0ed60f833ed7->enter($__internal_a7265d79a49e9b9fc34f0410aa1b23fb8638ba6cee37bf5433cf0ed60f833ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:listProduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49d53eda57bed0c3f731e62c86b864d826a23042d5ed19d7afd494c03e8fa44c->leave($__internal_49d53eda57bed0c3f731e62c86b864d826a23042d5ed19d7afd494c03e8fa44c_prof);

        
        $__internal_a7265d79a49e9b9fc34f0410aa1b23fb8638ba6cee37bf5433cf0ed60f833ed7->leave($__internal_a7265d79a49e9b9fc34f0410aa1b23fb8638ba6cee37bf5433cf0ed60f833ed7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_59ea0e6b172fd87a63bff1d60687b7a17741c33d677aa20fa03147e3be88614b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59ea0e6b172fd87a63bff1d60687b7a17741c33d677aa20fa03147e3be88614b->enter($__internal_59ea0e6b172fd87a63bff1d60687b7a17741c33d677aa20fa03147e3be88614b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6461f7f45457b4a6d7d06da578d8c628f45c729fb67e1637990a803e6d27b82d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6461f7f45457b4a6d7d06da578d8c628f45c729fb67e1637990a803e6d27b82d->enter($__internal_6461f7f45457b4a6d7d06da578d8c628f45c729fb67e1637990a803e6d27b82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil de la gestion des stocks";
        
        $__internal_6461f7f45457b4a6d7d06da578d8c628f45c729fb67e1637990a803e6d27b82d->leave($__internal_6461f7f45457b4a6d7d06da578d8c628f45c729fb67e1637990a803e6d27b82d_prof);

        
        $__internal_59ea0e6b172fd87a63bff1d60687b7a17741c33d677aa20fa03147e3be88614b->leave($__internal_59ea0e6b172fd87a63bff1d60687b7a17741c33d677aa20fa03147e3be88614b_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6886bb5281de7a4aff8c3e5e2d1ad23e7f0ff67b2c87558c70f91709cfbb5d24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6886bb5281de7a4aff8c3e5e2d1ad23e7f0ff67b2c87558c70f91709cfbb5d24->enter($__internal_6886bb5281de7a4aff8c3e5e2d1ad23e7f0ff67b2c87558c70f91709cfbb5d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_61f7c13117708521fe61f556350556107ef9b05d0dc4014139ee3973f0bae0a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61f7c13117708521fe61f556350556107ef9b05d0dc4014139ee3973f0bae0a6->enter($__internal_61f7c13117708521fe61f556350556107ef9b05d0dc4014139ee3973f0bae0a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
";
        
        $__internal_61f7c13117708521fe61f556350556107ef9b05d0dc4014139ee3973f0bae0a6->leave($__internal_61f7c13117708521fe61f556350556107ef9b05d0dc4014139ee3973f0bae0a6_prof);

        
        $__internal_6886bb5281de7a4aff8c3e5e2d1ad23e7f0ff67b2c87558c70f91709cfbb5d24->leave($__internal_6886bb5281de7a4aff8c3e5e2d1ad23e7f0ff67b2c87558c70f91709cfbb5d24_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbef57e6ea5033de2dbeac1c1cf5779ca9a7a4fce8770628fd1c2c0fbb0e58a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbef57e6ea5033de2dbeac1c1cf5779ca9a7a4fce8770628fd1c2c0fbb0e58a6->enter($__internal_fbef57e6ea5033de2dbeac1c1cf5779ca9a7a4fce8770628fd1c2c0fbb0e58a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c345dc834a24809908a4d631f57b15a0acb689a9e5829352ccde4401c8cf5595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c345dc834a24809908a4d631f57b15a0acb689a9e5829352ccde4401c8cf5595->enter($__internal_c345dc834a24809908a4d631f57b15a0acb689a9e5829352ccde4401c8cf5595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <p>Entrer le nom du produit rechercher</p>
    <input type=\"text\">
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
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueilstock");
        echo "><button type=\"button\">Retour</button></a>
";
        
        $__internal_c345dc834a24809908a4d631f57b15a0acb689a9e5829352ccde4401c8cf5595->leave($__internal_c345dc834a24809908a4d631f57b15a0acb689a9e5829352ccde4401c8cf5595_prof);

        
        $__internal_fbef57e6ea5033de2dbeac1c1cf5779ca9a7a4fce8770628fd1c2c0fbb0e58a6->leave($__internal_fbef57e6ea5033de2dbeac1c1cf5779ca9a7a4fce8770628fd1c2c0fbb0e58a6_prof);

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
        return array (  134 => 52,  89 => 9,  80 => 8,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
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
    <p>Entrer le nom du produit rechercher</p>
    <input type=\"text\">
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
