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
        $__internal_7487fcb29ec0edbfd092c591f1f5f3daaabc2d435d699d86c39a1960294438a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7487fcb29ec0edbfd092c591f1f5f3daaabc2d435d699d86c39a1960294438a3->enter($__internal_7487fcb29ec0edbfd092c591f1f5f3daaabc2d435d699d86c39a1960294438a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:listProduit.html.twig"));

        $__internal_49004ca7481ce381db6ca3a43ac291e293719cd377a1bf4ed43239be397749c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49004ca7481ce381db6ca3a43ac291e293719cd377a1bf4ed43239be397749c2->enter($__internal_49004ca7481ce381db6ca3a43ac291e293719cd377a1bf4ed43239be397749c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:listProduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7487fcb29ec0edbfd092c591f1f5f3daaabc2d435d699d86c39a1960294438a3->leave($__internal_7487fcb29ec0edbfd092c591f1f5f3daaabc2d435d699d86c39a1960294438a3_prof);

        
        $__internal_49004ca7481ce381db6ca3a43ac291e293719cd377a1bf4ed43239be397749c2->leave($__internal_49004ca7481ce381db6ca3a43ac291e293719cd377a1bf4ed43239be397749c2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_87905487e790e66d0182e74d41b3e2b143c34a56964503795e74795d535e8031 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87905487e790e66d0182e74d41b3e2b143c34a56964503795e74795d535e8031->enter($__internal_87905487e790e66d0182e74d41b3e2b143c34a56964503795e74795d535e8031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1229ab32960efe7df05ed5637e752afed45fe41591aec9b682e7bcb9287bc190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1229ab32960efe7df05ed5637e752afed45fe41591aec9b682e7bcb9287bc190->enter($__internal_1229ab32960efe7df05ed5637e752afed45fe41591aec9b682e7bcb9287bc190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil de la gestion des stocks";
        
        $__internal_1229ab32960efe7df05ed5637e752afed45fe41591aec9b682e7bcb9287bc190->leave($__internal_1229ab32960efe7df05ed5637e752afed45fe41591aec9b682e7bcb9287bc190_prof);

        
        $__internal_87905487e790e66d0182e74d41b3e2b143c34a56964503795e74795d535e8031->leave($__internal_87905487e790e66d0182e74d41b3e2b143c34a56964503795e74795d535e8031_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2498dc402757fdcb5b910d99c000efb0ff123a41df165a4c390d9e9a59f5ff43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2498dc402757fdcb5b910d99c000efb0ff123a41df165a4c390d9e9a59f5ff43->enter($__internal_2498dc402757fdcb5b910d99c000efb0ff123a41df165a4c390d9e9a59f5ff43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0063eafd46796da558e2ef4bb2da36e0c3bac2179f2035a33d2c72a6520a58ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0063eafd46796da558e2ef4bb2da36e0c3bac2179f2035a33d2c72a6520a58ce->enter($__internal_0063eafd46796da558e2ef4bb2da36e0c3bac2179f2035a33d2c72a6520a58ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
";
        
        $__internal_0063eafd46796da558e2ef4bb2da36e0c3bac2179f2035a33d2c72a6520a58ce->leave($__internal_0063eafd46796da558e2ef4bb2da36e0c3bac2179f2035a33d2c72a6520a58ce_prof);

        
        $__internal_2498dc402757fdcb5b910d99c000efb0ff123a41df165a4c390d9e9a59f5ff43->leave($__internal_2498dc402757fdcb5b910d99c000efb0ff123a41df165a4c390d9e9a59f5ff43_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_3970f861e4125ccc6a3cfc5016eb7c9d240c713f9aced204c9af4deae0df98c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3970f861e4125ccc6a3cfc5016eb7c9d240c713f9aced204c9af4deae0df98c0->enter($__internal_3970f861e4125ccc6a3cfc5016eb7c9d240c713f9aced204c9af4deae0df98c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5201d4966ec4803ca1d44d3b0bb7b6eea00da0e577376da0e370737b30838d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5201d4966ec4803ca1d44d3b0bb7b6eea00da0e577376da0e370737b30838d91->enter($__internal_5201d4966ec4803ca1d44d3b0bb7b6eea00da0e577376da0e370737b30838d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5201d4966ec4803ca1d44d3b0bb7b6eea00da0e577376da0e370737b30838d91->leave($__internal_5201d4966ec4803ca1d44d3b0bb7b6eea00da0e577376da0e370737b30838d91_prof);

        
        $__internal_3970f861e4125ccc6a3cfc5016eb7c9d240c713f9aced204c9af4deae0df98c0->leave($__internal_3970f861e4125ccc6a3cfc5016eb7c9d240c713f9aced204c9af4deae0df98c0_prof);

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
