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
        $__internal_cea23843e5dce06bd5ffaf0feec31fd0528bd5954f78907f80a686c377088496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cea23843e5dce06bd5ffaf0feec31fd0528bd5954f78907f80a686c377088496->enter($__internal_cea23843e5dce06bd5ffaf0feec31fd0528bd5954f78907f80a686c377088496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:ajouterPorduit.html.twig"));

        $__internal_da0f66916570c5ad3c4939ec0324169edc7c151ad1725b4e81af2df12ce2899f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da0f66916570c5ad3c4939ec0324169edc7c151ad1725b4e81af2df12ce2899f->enter($__internal_da0f66916570c5ad3c4939ec0324169edc7c151ad1725b4e81af2df12ce2899f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:ajouterPorduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cea23843e5dce06bd5ffaf0feec31fd0528bd5954f78907f80a686c377088496->leave($__internal_cea23843e5dce06bd5ffaf0feec31fd0528bd5954f78907f80a686c377088496_prof);

        
        $__internal_da0f66916570c5ad3c4939ec0324169edc7c151ad1725b4e81af2df12ce2899f->leave($__internal_da0f66916570c5ad3c4939ec0324169edc7c151ad1725b4e81af2df12ce2899f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c93ea68ec5ec0d1e80c8a58e375f16488c526b569b2121a96202385e47e93462 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c93ea68ec5ec0d1e80c8a58e375f16488c526b569b2121a96202385e47e93462->enter($__internal_c93ea68ec5ec0d1e80c8a58e375f16488c526b569b2121a96202385e47e93462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_33f530fc12e5cd54da0d1f6f23d064b35eae052dacb1ed1e8df8a291100b8def = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f530fc12e5cd54da0d1f6f23d064b35eae052dacb1ed1e8df8a291100b8def->enter($__internal_33f530fc12e5cd54da0d1f6f23d064b35eae052dacb1ed1e8df8a291100b8def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajouter un produit";
        
        $__internal_33f530fc12e5cd54da0d1f6f23d064b35eae052dacb1ed1e8df8a291100b8def->leave($__internal_33f530fc12e5cd54da0d1f6f23d064b35eae052dacb1ed1e8df8a291100b8def_prof);

        
        $__internal_c93ea68ec5ec0d1e80c8a58e375f16488c526b569b2121a96202385e47e93462->leave($__internal_c93ea68ec5ec0d1e80c8a58e375f16488c526b569b2121a96202385e47e93462_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0b0c3eb5e08fdf8b50eebd7e8839aedb64e6d6f8d2c37bd5aafcec62f519e91a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b0c3eb5e08fdf8b50eebd7e8839aedb64e6d6f8d2c37bd5aafcec62f519e91a->enter($__internal_0b0c3eb5e08fdf8b50eebd7e8839aedb64e6d6f8d2c37bd5aafcec62f519e91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6ad9a117acc3cf31eb71e333b300c5b88ddc6a0ba1bf7647f0b2ede966fabf21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad9a117acc3cf31eb71e333b300c5b88ddc6a0ba1bf7647f0b2ede966fabf21->enter($__internal_6ad9a117acc3cf31eb71e333b300c5b88ddc6a0ba1bf7647f0b2ede966fabf21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
";
        
        $__internal_6ad9a117acc3cf31eb71e333b300c5b88ddc6a0ba1bf7647f0b2ede966fabf21->leave($__internal_6ad9a117acc3cf31eb71e333b300c5b88ddc6a0ba1bf7647f0b2ede966fabf21_prof);

        
        $__internal_0b0c3eb5e08fdf8b50eebd7e8839aedb64e6d6f8d2c37bd5aafcec62f519e91a->leave($__internal_0b0c3eb5e08fdf8b50eebd7e8839aedb64e6d6f8d2c37bd5aafcec62f519e91a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_2491618e95e7792babb19a616ff8754cbcb0f48bc7d8510674ed0fbaa445cdf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2491618e95e7792babb19a616ff8754cbcb0f48bc7d8510674ed0fbaa445cdf6->enter($__internal_2491618e95e7792babb19a616ff8754cbcb0f48bc7d8510674ed0fbaa445cdf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c2d04f7effefe00e44dee3bf1529db8c200457cb29336694e1691aed33c36f6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2d04f7effefe00e44dee3bf1529db8c200457cb29336694e1691aed33c36f6c->enter($__internal_c2d04f7effefe00e44dee3bf1529db8c200457cb29336694e1691aed33c36f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Remplir les champs pour ajouter un produits</h1>
      <form>
        <label>Libelé du produit</label>
        <input type=\"text\" name=\"nomProduit\"><br>
        <label>Type de produit</label>
        <label><input type=\"radio\" name=\"Type\" >Prestation</label>
        <label><input type=\"radio\" name=\"Type\" >Vente</label><br>
        <label>Catégorie</label>
        <select name=\"boiteCategorie\">
          <option>soins cheveux</option>
          <option>coupe homme</option>
          <option>couleur</option>
          <option>permanante</option>
        </select><br>
        <label>Prix unitaire</label>
        <input type=\"text\" name=\"PrixUnitaire\">
        <button class=\"btn btn-success\" type=\"button\">Valider</button>
      </form>
      <h1>La liste des produits deja disponiblent</h1>
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
          <td>Soins cheveux</td>
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("acceuilstock");
        echo "><button type=\"button\">Retour</button></a>
";
        
        $__internal_c2d04f7effefe00e44dee3bf1529db8c200457cb29336694e1691aed33c36f6c->leave($__internal_c2d04f7effefe00e44dee3bf1529db8c200457cb29336694e1691aed33c36f6c_prof);

        
        $__internal_2491618e95e7792babb19a616ff8754cbcb0f48bc7d8510674ed0fbaa445cdf6->leave($__internal_2491618e95e7792babb19a616ff8754cbcb0f48bc7d8510674ed0fbaa445cdf6_prof);

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
    <h1>Remplir les champs pour ajouter un produits</h1>
      <form>
        <label>Libelé du produit</label>
        <input type=\"text\" name=\"nomProduit\"><br>
        <label>Type de produit</label>
        <label><input type=\"radio\" name=\"Type\" >Prestation</label>
        <label><input type=\"radio\" name=\"Type\" >Vente</label><br>
        <label>Catégorie</label>
        <select name=\"boiteCategorie\">
          <option>soins cheveux</option>
          <option>coupe homme</option>
          <option>couleur</option>
          <option>permanante</option>
        </select><br>
        <label>Prix unitaire</label>
        <input type=\"text\" name=\"PrixUnitaire\">
        <button class=\"btn btn-success\" type=\"button\">Valider</button>
      </form>
      <h1>La liste des produits deja disponiblent</h1>
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
          <td>Soins cheveux</td>
          <td>5.00€</td>
        </tr>
        <tr>
          <td>Coupe Mulet</td>
          <td>Prestation</td>
          <td>Coupe homme</td>
          <td>12.99€</td>
        </tr>
      </table>
      <a href={{ path('acceuilstock') }}><button type=\"button\">Retour</button></a>
{% endblock %}
", "StockBundle:Default:ajouterPorduit.html.twig", "/home/kevin/Dropbox/PTS3/ProjetPtsCoiffeur/src/StockBundle/Resources/views/Default/ajouterPorduit.html.twig");
    }
}
