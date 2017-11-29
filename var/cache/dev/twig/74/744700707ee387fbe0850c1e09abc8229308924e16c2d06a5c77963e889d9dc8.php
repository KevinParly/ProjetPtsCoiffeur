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
        $__internal_9d3a20306f9142b5bd118f0453609098b238c2e1ed34a8d7494eb1c971994bb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d3a20306f9142b5bd118f0453609098b238c2e1ed34a8d7494eb1c971994bb4->enter($__internal_9d3a20306f9142b5bd118f0453609098b238c2e1ed34a8d7494eb1c971994bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:ajouterPorduit.html.twig"));

        $__internal_b7867f9dd13048f30f01c0ed587e13d8e52fcc74afd88d3ad9c298ed9fc42c13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7867f9dd13048f30f01c0ed587e13d8e52fcc74afd88d3ad9c298ed9fc42c13->enter($__internal_b7867f9dd13048f30f01c0ed587e13d8e52fcc74afd88d3ad9c298ed9fc42c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:ajouterPorduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d3a20306f9142b5bd118f0453609098b238c2e1ed34a8d7494eb1c971994bb4->leave($__internal_9d3a20306f9142b5bd118f0453609098b238c2e1ed34a8d7494eb1c971994bb4_prof);

        
        $__internal_b7867f9dd13048f30f01c0ed587e13d8e52fcc74afd88d3ad9c298ed9fc42c13->leave($__internal_b7867f9dd13048f30f01c0ed587e13d8e52fcc74afd88d3ad9c298ed9fc42c13_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e980102fe0ce675d235132c95ef328677356dd7a28f6b37cff860d8d746725b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e980102fe0ce675d235132c95ef328677356dd7a28f6b37cff860d8d746725b->enter($__internal_3e980102fe0ce675d235132c95ef328677356dd7a28f6b37cff860d8d746725b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2d77a1dfbc18d2374c1dddf3a3f54b58e112d7b817c091665094e7097f1fb5e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d77a1dfbc18d2374c1dddf3a3f54b58e112d7b817c091665094e7097f1fb5e3->enter($__internal_2d77a1dfbc18d2374c1dddf3a3f54b58e112d7b817c091665094e7097f1fb5e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajouter un produit";
        
        $__internal_2d77a1dfbc18d2374c1dddf3a3f54b58e112d7b817c091665094e7097f1fb5e3->leave($__internal_2d77a1dfbc18d2374c1dddf3a3f54b58e112d7b817c091665094e7097f1fb5e3_prof);

        
        $__internal_3e980102fe0ce675d235132c95ef328677356dd7a28f6b37cff860d8d746725b->leave($__internal_3e980102fe0ce675d235132c95ef328677356dd7a28f6b37cff860d8d746725b_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9d7f5aec8a5591c591abcd40964d4f168406e84dead95ea9207a350a98aadaa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d7f5aec8a5591c591abcd40964d4f168406e84dead95ea9207a350a98aadaa9->enter($__internal_9d7f5aec8a5591c591abcd40964d4f168406e84dead95ea9207a350a98aadaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b1767270aa409fa89602c2826e64b7f2154b8fa4e97cd752aa7b1c1ec36651c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1767270aa409fa89602c2826e64b7f2154b8fa4e97cd752aa7b1c1ec36651c1->enter($__internal_b1767270aa409fa89602c2826e64b7f2154b8fa4e97cd752aa7b1c1ec36651c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
";
        
        $__internal_b1767270aa409fa89602c2826e64b7f2154b8fa4e97cd752aa7b1c1ec36651c1->leave($__internal_b1767270aa409fa89602c2826e64b7f2154b8fa4e97cd752aa7b1c1ec36651c1_prof);

        
        $__internal_9d7f5aec8a5591c591abcd40964d4f168406e84dead95ea9207a350a98aadaa9->leave($__internal_9d7f5aec8a5591c591abcd40964d4f168406e84dead95ea9207a350a98aadaa9_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_270bd94b55ba5db41f16f916fb09402408c314c261c632787907d6aba63baf31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_270bd94b55ba5db41f16f916fb09402408c314c261c632787907d6aba63baf31->enter($__internal_270bd94b55ba5db41f16f916fb09402408c314c261c632787907d6aba63baf31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1858af74630b06c41dcabfc0b400c09a50d0195587116e49a851a3f574fc04ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1858af74630b06c41dcabfc0b400c09a50d0195587116e49a851a3f574fc04ae->enter($__internal_1858af74630b06c41dcabfc0b400c09a50d0195587116e49a851a3f574fc04ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1858af74630b06c41dcabfc0b400c09a50d0195587116e49a851a3f574fc04ae->leave($__internal_1858af74630b06c41dcabfc0b400c09a50d0195587116e49a851a3f574fc04ae_prof);

        
        $__internal_270bd94b55ba5db41f16f916fb09402408c314c261c632787907d6aba63baf31->leave($__internal_270bd94b55ba5db41f16f916fb09402408c314c261c632787907d6aba63baf31_prof);

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
