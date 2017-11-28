<?php

/* StockBundle:Default:ajouterPorduit.html.twig */
class __TwigTemplate_3706be2e7dfe9b809ee48382827e880c2a5085b5f30921820d3e59f6eaac6fe9 extends Twig_Template
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
        $__internal_912bf837122de85e04241f9605c8ae72d04f1df7cd6f1c8d268c8143ea491e16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_912bf837122de85e04241f9605c8ae72d04f1df7cd6f1c8d268c8143ea491e16->enter($__internal_912bf837122de85e04241f9605c8ae72d04f1df7cd6f1c8d268c8143ea491e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:ajouterPorduit.html.twig"));

        $__internal_e23b65b1f48eb7b0250188f712e59eff8eba2aa307b0d0996c19b7570bd77385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e23b65b1f48eb7b0250188f712e59eff8eba2aa307b0d0996c19b7570bd77385->enter($__internal_e23b65b1f48eb7b0250188f712e59eff8eba2aa307b0d0996c19b7570bd77385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:ajouterPorduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_912bf837122de85e04241f9605c8ae72d04f1df7cd6f1c8d268c8143ea491e16->leave($__internal_912bf837122de85e04241f9605c8ae72d04f1df7cd6f1c8d268c8143ea491e16_prof);

        
        $__internal_e23b65b1f48eb7b0250188f712e59eff8eba2aa307b0d0996c19b7570bd77385->leave($__internal_e23b65b1f48eb7b0250188f712e59eff8eba2aa307b0d0996c19b7570bd77385_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_395e922a3feed555663cee0654971a773b78a3af305a8caaf33a01b6735008e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_395e922a3feed555663cee0654971a773b78a3af305a8caaf33a01b6735008e7->enter($__internal_395e922a3feed555663cee0654971a773b78a3af305a8caaf33a01b6735008e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_540ed57ece2bd0e99156772166407462656b03820476ed7fa409aabb2dde08d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_540ed57ece2bd0e99156772166407462656b03820476ed7fa409aabb2dde08d0->enter($__internal_540ed57ece2bd0e99156772166407462656b03820476ed7fa409aabb2dde08d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajouter un produit";
        
        $__internal_540ed57ece2bd0e99156772166407462656b03820476ed7fa409aabb2dde08d0->leave($__internal_540ed57ece2bd0e99156772166407462656b03820476ed7fa409aabb2dde08d0_prof);

        
        $__internal_395e922a3feed555663cee0654971a773b78a3af305a8caaf33a01b6735008e7->leave($__internal_395e922a3feed555663cee0654971a773b78a3af305a8caaf33a01b6735008e7_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3a36bab330fa9caf058f4d6120f4928aa6a4879df07f4ac38cacd393ba454f9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a36bab330fa9caf058f4d6120f4928aa6a4879df07f4ac38cacd393ba454f9b->enter($__internal_3a36bab330fa9caf058f4d6120f4928aa6a4879df07f4ac38cacd393ba454f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7c0e5e58dc223c18bf2bfaf7bded6331e766a617b5e60e2d78efac56c93f9f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c0e5e58dc223c18bf2bfaf7bded6331e766a617b5e60e2d78efac56c93f9f32->enter($__internal_7c0e5e58dc223c18bf2bfaf7bded6331e766a617b5e60e2d78efac56c93f9f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
";
        
        $__internal_7c0e5e58dc223c18bf2bfaf7bded6331e766a617b5e60e2d78efac56c93f9f32->leave($__internal_7c0e5e58dc223c18bf2bfaf7bded6331e766a617b5e60e2d78efac56c93f9f32_prof);

        
        $__internal_3a36bab330fa9caf058f4d6120f4928aa6a4879df07f4ac38cacd393ba454f9b->leave($__internal_3a36bab330fa9caf058f4d6120f4928aa6a4879df07f4ac38cacd393ba454f9b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_6441572e722e69afabc2d2903e69a0d630680302a7bb878778984673685a27c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6441572e722e69afabc2d2903e69a0d630680302a7bb878778984673685a27c2->enter($__internal_6441572e722e69afabc2d2903e69a0d630680302a7bb878778984673685a27c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef04ef7c6645927e5ccf5040cc14edb557f84cb40a1c3cc93755e471bdda4598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef04ef7c6645927e5ccf5040cc14edb557f84cb40a1c3cc93755e471bdda4598->enter($__internal_ef04ef7c6645927e5ccf5040cc14edb557f84cb40a1c3cc93755e471bdda4598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ef04ef7c6645927e5ccf5040cc14edb557f84cb40a1c3cc93755e471bdda4598->leave($__internal_ef04ef7c6645927e5ccf5040cc14edb557f84cb40a1c3cc93755e471bdda4598_prof);

        
        $__internal_6441572e722e69afabc2d2903e69a0d630680302a7bb878778984673685a27c2->leave($__internal_6441572e722e69afabc2d2903e69a0d630680302a7bb878778984673685a27c2_prof);

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
", "StockBundle:Default:ajouterPorduit.html.twig", "D:\\wamp\\www\\ProjetPtsCoiffeur\\src\\StockBundle/Resources/views/Default/ajouterPorduit.html.twig");
    }
}
