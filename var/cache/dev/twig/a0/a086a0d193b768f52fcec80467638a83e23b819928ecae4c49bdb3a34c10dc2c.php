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
        $__internal_312811547ad915f77787fcb4297fbb81d56c7cc9f18d7d4433e69bedb3f4a182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_312811547ad915f77787fcb4297fbb81d56c7cc9f18d7d4433e69bedb3f4a182->enter($__internal_312811547ad915f77787fcb4297fbb81d56c7cc9f18d7d4433e69bedb3f4a182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:ajouterPorduit.html.twig"));

        $__internal_c490e635110d8ae0641974da9449c0295862e3ce669bc58d425dbcd14b1d7380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c490e635110d8ae0641974da9449c0295862e3ce669bc58d425dbcd14b1d7380->enter($__internal_c490e635110d8ae0641974da9449c0295862e3ce669bc58d425dbcd14b1d7380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:ajouterPorduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_312811547ad915f77787fcb4297fbb81d56c7cc9f18d7d4433e69bedb3f4a182->leave($__internal_312811547ad915f77787fcb4297fbb81d56c7cc9f18d7d4433e69bedb3f4a182_prof);

        
        $__internal_c490e635110d8ae0641974da9449c0295862e3ce669bc58d425dbcd14b1d7380->leave($__internal_c490e635110d8ae0641974da9449c0295862e3ce669bc58d425dbcd14b1d7380_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e9c5c16a3a63a5f0629ef44d9b6bb8151a6f7b251fa9bcd2b9d8e73b3c3dc8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e9c5c16a3a63a5f0629ef44d9b6bb8151a6f7b251fa9bcd2b9d8e73b3c3dc8c->enter($__internal_7e9c5c16a3a63a5f0629ef44d9b6bb8151a6f7b251fa9bcd2b9d8e73b3c3dc8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_89b20a80866fdea31216502da4fe2ddc271d6b7ad3b6d185701999abeb6d8dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89b20a80866fdea31216502da4fe2ddc271d6b7ad3b6d185701999abeb6d8dce->enter($__internal_89b20a80866fdea31216502da4fe2ddc271d6b7ad3b6d185701999abeb6d8dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajouter un produit";
        
        $__internal_89b20a80866fdea31216502da4fe2ddc271d6b7ad3b6d185701999abeb6d8dce->leave($__internal_89b20a80866fdea31216502da4fe2ddc271d6b7ad3b6d185701999abeb6d8dce_prof);

        
        $__internal_7e9c5c16a3a63a5f0629ef44d9b6bb8151a6f7b251fa9bcd2b9d8e73b3c3dc8c->leave($__internal_7e9c5c16a3a63a5f0629ef44d9b6bb8151a6f7b251fa9bcd2b9d8e73b3c3dc8c_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_90d106bbe70dda9b212dc8ee136b5b01e212c3dddb2f669d49c0f640c183e043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90d106bbe70dda9b212dc8ee136b5b01e212c3dddb2f669d49c0f640c183e043->enter($__internal_90d106bbe70dda9b212dc8ee136b5b01e212c3dddb2f669d49c0f640c183e043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6a5a6b32de714f18c7a7da0332da1384fc97aa1a4111e69a232f9e0cebff2316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a5a6b32de714f18c7a7da0332da1384fc97aa1a4111e69a232f9e0cebff2316->enter($__internal_6a5a6b32de714f18c7a7da0332da1384fc97aa1a4111e69a232f9e0cebff2316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
";
        
        $__internal_6a5a6b32de714f18c7a7da0332da1384fc97aa1a4111e69a232f9e0cebff2316->leave($__internal_6a5a6b32de714f18c7a7da0332da1384fc97aa1a4111e69a232f9e0cebff2316_prof);

        
        $__internal_90d106bbe70dda9b212dc8ee136b5b01e212c3dddb2f669d49c0f640c183e043->leave($__internal_90d106bbe70dda9b212dc8ee136b5b01e212c3dddb2f669d49c0f640c183e043_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1465ce726e5e405fdcee285ac632f63f37a192fbb547746149653f17a9febda1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1465ce726e5e405fdcee285ac632f63f37a192fbb547746149653f17a9febda1->enter($__internal_1465ce726e5e405fdcee285ac632f63f37a192fbb547746149653f17a9febda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a7aa6030161a0df7a5ac4e4b44c41e0ec54e0ec00aaeecd99b1d1b296c53050d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7aa6030161a0df7a5ac4e4b44c41e0ec54e0ec00aaeecd99b1d1b296c53050d->enter($__internal_a7aa6030161a0df7a5ac4e4b44c41e0ec54e0ec00aaeecd99b1d1b296c53050d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a7aa6030161a0df7a5ac4e4b44c41e0ec54e0ec00aaeecd99b1d1b296c53050d->leave($__internal_a7aa6030161a0df7a5ac4e4b44c41e0ec54e0ec00aaeecd99b1d1b296c53050d_prof);

        
        $__internal_1465ce726e5e405fdcee285ac632f63f37a192fbb547746149653f17a9febda1->leave($__internal_1465ce726e5e405fdcee285ac632f63f37a192fbb547746149653f17a9febda1_prof);

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
", "StockBundle:Default:ajouterPorduit.html.twig", "/home/kevin/Dropbox/ProjetPtsCoiffeur/src/StockBundle/Resources/views/Default/ajouterPorduit.html.twig");
    }
}
