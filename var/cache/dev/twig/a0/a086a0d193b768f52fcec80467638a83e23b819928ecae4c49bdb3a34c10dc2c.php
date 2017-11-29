<?php

/* StockBundle:Default:ajouterPorduit.html.twig */
class __TwigTemplate_92ce5078c7cfc23d775de185e03c68a48553277106e2eb98f11088b834c5215b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "StockBundle:Default:ajouterPorduit.html.twig", 1);
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
        $__internal_3aa1559437a1a6c6618f7aecf6b7beac9d035aa50119ef48c57fa1145679156b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aa1559437a1a6c6618f7aecf6b7beac9d035aa50119ef48c57fa1145679156b->enter($__internal_3aa1559437a1a6c6618f7aecf6b7beac9d035aa50119ef48c57fa1145679156b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:ajouterPorduit.html.twig"));

        $__internal_f353fbab549925628501cb16810d1c3fc1ce6b022d36355b4770fec444e104a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f353fbab549925628501cb16810d1c3fc1ce6b022d36355b4770fec444e104a7->enter($__internal_f353fbab549925628501cb16810d1c3fc1ce6b022d36355b4770fec444e104a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:ajouterPorduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3aa1559437a1a6c6618f7aecf6b7beac9d035aa50119ef48c57fa1145679156b->leave($__internal_3aa1559437a1a6c6618f7aecf6b7beac9d035aa50119ef48c57fa1145679156b_prof);

        
        $__internal_f353fbab549925628501cb16810d1c3fc1ce6b022d36355b4770fec444e104a7->leave($__internal_f353fbab549925628501cb16810d1c3fc1ce6b022d36355b4770fec444e104a7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e5c0450a3354a2ff0eb9c445679f5911669afc13f1336b73788c0ef964c1e51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e5c0450a3354a2ff0eb9c445679f5911669afc13f1336b73788c0ef964c1e51->enter($__internal_9e5c0450a3354a2ff0eb9c445679f5911669afc13f1336b73788c0ef964c1e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_627af6e92e39e68837ea78d542e522b1bd8004dff5e064a224db582d1f091b51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_627af6e92e39e68837ea78d542e522b1bd8004dff5e064a224db582d1f091b51->enter($__internal_627af6e92e39e68837ea78d542e522b1bd8004dff5e064a224db582d1f091b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajouter un produit";
        
        $__internal_627af6e92e39e68837ea78d542e522b1bd8004dff5e064a224db582d1f091b51->leave($__internal_627af6e92e39e68837ea78d542e522b1bd8004dff5e064a224db582d1f091b51_prof);

        
        $__internal_9e5c0450a3354a2ff0eb9c445679f5911669afc13f1336b73788c0ef964c1e51->leave($__internal_9e5c0450a3354a2ff0eb9c445679f5911669afc13f1336b73788c0ef964c1e51_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6048450dad155a3d76cc34a14843bcb54dd3cbf44407c1c2f169e929b1bbd0ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6048450dad155a3d76cc34a14843bcb54dd3cbf44407c1c2f169e929b1bbd0ad->enter($__internal_6048450dad155a3d76cc34a14843bcb54dd3cbf44407c1c2f169e929b1bbd0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_39919b292c8b30b753eb7573fde458fb05778879c46db31a6fa72cd28e63b580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39919b292c8b30b753eb7573fde458fb05778879c46db31a6fa72cd28e63b580->enter($__internal_39919b292c8b30b753eb7573fde458fb05778879c46db31a6fa72cd28e63b580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
";
        
        $__internal_39919b292c8b30b753eb7573fde458fb05778879c46db31a6fa72cd28e63b580->leave($__internal_39919b292c8b30b753eb7573fde458fb05778879c46db31a6fa72cd28e63b580_prof);

        
        $__internal_6048450dad155a3d76cc34a14843bcb54dd3cbf44407c1c2f169e929b1bbd0ad->leave($__internal_6048450dad155a3d76cc34a14843bcb54dd3cbf44407c1c2f169e929b1bbd0ad_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c65c2280e916eb5d0ef0a2e2c734fe22d10ed73c0f2e3d9bb40954383792685f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c65c2280e916eb5d0ef0a2e2c734fe22d10ed73c0f2e3d9bb40954383792685f->enter($__internal_c65c2280e916eb5d0ef0a2e2c734fe22d10ed73c0f2e3d9bb40954383792685f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ceae211a5733a4d5ace465ba5b1f278fd2b19d76f8b0f51643db3145756665ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceae211a5733a4d5ace465ba5b1f278fd2b19d76f8b0f51643db3145756665ba->enter($__internal_ceae211a5733a4d5ace465ba5b1f278fd2b19d76f8b0f51643db3145756665ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Remplir les champs pour ajouter un produit</h1>
      <form>
        <label>Libelé du produit</label>
        <input type=\"text\" name=\"nomProduit\"><br>
        <label>Type de produit</label>
        <label><input type=\"radio\" name=\"Type\" >Prestation</label>
        <label><input type=\"radio\" name=\"Type\" >Vente</label><br>
        <label>Catégorie</label>
        <select name=\"boiteCategorie\">
          <option>soin cheveux</option>
          <option>coupe homme</option>
          <option>couleur</option>
          <option>permanante</option>
        </select><br>
        <label>Prix unitaire</label>
        <input type=\"text\" name=\"PrixUnitaire\">
        <button class=\"btn btn-success\" type=\"button\">Valider</button>
      </form>
      <h1>La liste des produits déjà disponibles</h1>
      <table>
        <tr>
          <td>Libelé</td>
          <td>Type</td>
          <td>Catégorie</td>
          <td>Prix unitaire</td>
        </tr>
        <tr>
          <td>Shampoing</td>
          <td>Vente</td>
          <td>Soin cheveux</td>
          <td>5.00€</td>
        </tr>
        <tr>
          <td>Coupe Mulet</td>
          <td>Prestation</td>
          <td>Coupe homme</td>
          <td>12.99€</td>
        </tr>
      </table>
      <a href=";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueilstock");
        echo "><button type=\"button\">Retour</button></a>
";
        
        $__internal_ceae211a5733a4d5ace465ba5b1f278fd2b19d76f8b0f51643db3145756665ba->leave($__internal_ceae211a5733a4d5ace465ba5b1f278fd2b19d76f8b0f51643db3145756665ba_prof);

        
        $__internal_c65c2280e916eb5d0ef0a2e2c734fe22d10ed73c0f2e3d9bb40954383792685f->leave($__internal_c65c2280e916eb5d0ef0a2e2c734fe22d10ed73c0f2e3d9bb40954383792685f_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle:Default:ajouterPorduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 47,  89 => 8,  80 => 7,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
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

{% block title %}Ajouter un produit{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
{% endblock %}
{% block body %}
    <h1>Remplir les champs pour ajouter un produit</h1>
      <form>
        <label>Libelé du produit</label>
        <input type=\"text\" name=\"nomProduit\"><br>
        <label>Type de produit</label>
        <label><input type=\"radio\" name=\"Type\" >Prestation</label>
        <label><input type=\"radio\" name=\"Type\" >Vente</label><br>
        <label>Catégorie</label>
        <select name=\"boiteCategorie\">
          <option>soin cheveux</option>
          <option>coupe homme</option>
          <option>couleur</option>
          <option>permanante</option>
        </select><br>
        <label>Prix unitaire</label>
        <input type=\"text\" name=\"PrixUnitaire\">
        <button class=\"btn btn-success\" type=\"button\">Valider</button>
      </form>
      <h1>La liste des produits déjà disponibles</h1>
      <table>
        <tr>
          <td>Libelé</td>
          <td>Type</td>
          <td>Catégorie</td>
          <td>Prix unitaire</td>
        </tr>
        <tr>
          <td>Shampoing</td>
          <td>Vente</td>
          <td>Soin cheveux</td>
          <td>5.00€</td>
        </tr>
        <tr>
          <td>Coupe Mulet</td>
          <td>Prestation</td>
          <td>Coupe homme</td>
          <td>12.99€</td>
        </tr>
      </table>
      <a href={{ path('accueilstock') }}><button type=\"button\">Retour</button></a>
{% endblock %}
", "StockBundle:Default:ajouterPorduit.html.twig", "/home/kevin/Dropbox/ProjetPtsCoiffeur/src/StockBundle/Resources/views/Default/ajouterPorduit.html.twig");
    }
}
