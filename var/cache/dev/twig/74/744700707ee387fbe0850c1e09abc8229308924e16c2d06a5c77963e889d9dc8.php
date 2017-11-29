<?php

/* StockBundle:Default:ajouterPorduit.html.twig */
class __TwigTemplate_9bbab9e6d726e7c913a3c75a3801613a112b5df2bf2eecbc51496c986970b2ea extends Twig_Template
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
        $__internal_3c31964ff93d1a2b81c0e8722bad545602e2b90ca7e3f4ce0a95d211beec6e13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c31964ff93d1a2b81c0e8722bad545602e2b90ca7e3f4ce0a95d211beec6e13->enter($__internal_3c31964ff93d1a2b81c0e8722bad545602e2b90ca7e3f4ce0a95d211beec6e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:ajouterPorduit.html.twig"));

        $__internal_ad6acfbe1ae45ee8813749aa9c843a4788db50bf55478b0211c01221b320c432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad6acfbe1ae45ee8813749aa9c843a4788db50bf55478b0211c01221b320c432->enter($__internal_ad6acfbe1ae45ee8813749aa9c843a4788db50bf55478b0211c01221b320c432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:ajouterPorduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c31964ff93d1a2b81c0e8722bad545602e2b90ca7e3f4ce0a95d211beec6e13->leave($__internal_3c31964ff93d1a2b81c0e8722bad545602e2b90ca7e3f4ce0a95d211beec6e13_prof);

        
        $__internal_ad6acfbe1ae45ee8813749aa9c843a4788db50bf55478b0211c01221b320c432->leave($__internal_ad6acfbe1ae45ee8813749aa9c843a4788db50bf55478b0211c01221b320c432_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2115396508b29da02f8a611e1a4ba542f6dd6c03454b280cfd4122198673467c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2115396508b29da02f8a611e1a4ba542f6dd6c03454b280cfd4122198673467c->enter($__internal_2115396508b29da02f8a611e1a4ba542f6dd6c03454b280cfd4122198673467c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_35113ef77fd1726f62bfbe5cc5793fca7621596bb21ee1d9fc1da56a84214761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35113ef77fd1726f62bfbe5cc5793fca7621596bb21ee1d9fc1da56a84214761->enter($__internal_35113ef77fd1726f62bfbe5cc5793fca7621596bb21ee1d9fc1da56a84214761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajouter un produit";
        
        $__internal_35113ef77fd1726f62bfbe5cc5793fca7621596bb21ee1d9fc1da56a84214761->leave($__internal_35113ef77fd1726f62bfbe5cc5793fca7621596bb21ee1d9fc1da56a84214761_prof);

        
        $__internal_2115396508b29da02f8a611e1a4ba542f6dd6c03454b280cfd4122198673467c->leave($__internal_2115396508b29da02f8a611e1a4ba542f6dd6c03454b280cfd4122198673467c_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_27808c9c7009e9138065e54dfc90fd4d3f0bffabe62e4f82f2a0d2ccf2315186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27808c9c7009e9138065e54dfc90fd4d3f0bffabe62e4f82f2a0d2ccf2315186->enter($__internal_27808c9c7009e9138065e54dfc90fd4d3f0bffabe62e4f82f2a0d2ccf2315186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cc800f9d42ee266ec3985f3e2c0f67ffd7cba66e99ea178b1bc6c6dfad987240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc800f9d42ee266ec3985f3e2c0f67ffd7cba66e99ea178b1bc6c6dfad987240->enter($__internal_cc800f9d42ee266ec3985f3e2c0f67ffd7cba66e99ea178b1bc6c6dfad987240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
";
        
        $__internal_cc800f9d42ee266ec3985f3e2c0f67ffd7cba66e99ea178b1bc6c6dfad987240->leave($__internal_cc800f9d42ee266ec3985f3e2c0f67ffd7cba66e99ea178b1bc6c6dfad987240_prof);

        
        $__internal_27808c9c7009e9138065e54dfc90fd4d3f0bffabe62e4f82f2a0d2ccf2315186->leave($__internal_27808c9c7009e9138065e54dfc90fd4d3f0bffabe62e4f82f2a0d2ccf2315186_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bcecf283f8880f5661f0f8a2bc9fbf06723f06d3b508362e69b1a4fbf9cb5a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bcecf283f8880f5661f0f8a2bc9fbf06723f06d3b508362e69b1a4fbf9cb5a7->enter($__internal_9bcecf283f8880f5661f0f8a2bc9fbf06723f06d3b508362e69b1a4fbf9cb5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c8c1741c86d59e5e4feaef03d23227d77b5f9d48125f40d72bdead0bf2c903a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8c1741c86d59e5e4feaef03d23227d77b5f9d48125f40d72bdead0bf2c903a1->enter($__internal_c8c1741c86d59e5e4feaef03d23227d77b5f9d48125f40d72bdead0bf2c903a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c8c1741c86d59e5e4feaef03d23227d77b5f9d48125f40d72bdead0bf2c903a1->leave($__internal_c8c1741c86d59e5e4feaef03d23227d77b5f9d48125f40d72bdead0bf2c903a1_prof);

        
        $__internal_9bcecf283f8880f5661f0f8a2bc9fbf06723f06d3b508362e69b1a4fbf9cb5a7->leave($__internal_9bcecf283f8880f5661f0f8a2bc9fbf06723f06d3b508362e69b1a4fbf9cb5a7_prof);

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
", "StockBundle:Default:ajouterPorduit.html.twig", "/var/www/html/www/ProjetCoiffeur/ProjetPtsCoiffeur/src/StockBundle/Resources/views/Default/ajouterPorduit.html.twig");
    }
}
