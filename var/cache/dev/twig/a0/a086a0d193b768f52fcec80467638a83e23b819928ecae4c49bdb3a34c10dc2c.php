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
        $__internal_58273550fade2faf3dd985c140d8233135d3b9beea183f1049f23407f7c454fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58273550fade2faf3dd985c140d8233135d3b9beea183f1049f23407f7c454fe->enter($__internal_58273550fade2faf3dd985c140d8233135d3b9beea183f1049f23407f7c454fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:ajouterPorduit.html.twig"));

        $__internal_671979f7288deabfa77c561e653b5c57d1b73dcd2af02194559b451cc924d835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_671979f7288deabfa77c561e653b5c57d1b73dcd2af02194559b451cc924d835->enter($__internal_671979f7288deabfa77c561e653b5c57d1b73dcd2af02194559b451cc924d835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:ajouterPorduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58273550fade2faf3dd985c140d8233135d3b9beea183f1049f23407f7c454fe->leave($__internal_58273550fade2faf3dd985c140d8233135d3b9beea183f1049f23407f7c454fe_prof);

        
        $__internal_671979f7288deabfa77c561e653b5c57d1b73dcd2af02194559b451cc924d835->leave($__internal_671979f7288deabfa77c561e653b5c57d1b73dcd2af02194559b451cc924d835_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7772711e830a4f3b04ec01069202675367971568ddd5e332128dcfb833558ea9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7772711e830a4f3b04ec01069202675367971568ddd5e332128dcfb833558ea9->enter($__internal_7772711e830a4f3b04ec01069202675367971568ddd5e332128dcfb833558ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_08deab2e79e93d857f9f8658e7923f6ae533f125c975b08aa81f0e20dde8cc27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08deab2e79e93d857f9f8658e7923f6ae533f125c975b08aa81f0e20dde8cc27->enter($__internal_08deab2e79e93d857f9f8658e7923f6ae533f125c975b08aa81f0e20dde8cc27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajouter un produit";
        
        $__internal_08deab2e79e93d857f9f8658e7923f6ae533f125c975b08aa81f0e20dde8cc27->leave($__internal_08deab2e79e93d857f9f8658e7923f6ae533f125c975b08aa81f0e20dde8cc27_prof);

        
        $__internal_7772711e830a4f3b04ec01069202675367971568ddd5e332128dcfb833558ea9->leave($__internal_7772711e830a4f3b04ec01069202675367971568ddd5e332128dcfb833558ea9_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c7bddcc9d08d4a902264e86089008dcf2279873b996e75aaf378a093e3ff8468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7bddcc9d08d4a902264e86089008dcf2279873b996e75aaf378a093e3ff8468->enter($__internal_c7bddcc9d08d4a902264e86089008dcf2279873b996e75aaf378a093e3ff8468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5d80e1995607f23a8783dc4d1dfae41533cdff0d3f32ae46320141f717845ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d80e1995607f23a8783dc4d1dfae41533cdff0d3f32ae46320141f717845ea2->enter($__internal_5d80e1995607f23a8783dc4d1dfae41533cdff0d3f32ae46320141f717845ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
";
        
        $__internal_5d80e1995607f23a8783dc4d1dfae41533cdff0d3f32ae46320141f717845ea2->leave($__internal_5d80e1995607f23a8783dc4d1dfae41533cdff0d3f32ae46320141f717845ea2_prof);

        
        $__internal_c7bddcc9d08d4a902264e86089008dcf2279873b996e75aaf378a093e3ff8468->leave($__internal_c7bddcc9d08d4a902264e86089008dcf2279873b996e75aaf378a093e3ff8468_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b02e1d152a0cb0d9b92e350c7fa16183f86778f86b7d43d9baf7420346067b81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b02e1d152a0cb0d9b92e350c7fa16183f86778f86b7d43d9baf7420346067b81->enter($__internal_b02e1d152a0cb0d9b92e350c7fa16183f86778f86b7d43d9baf7420346067b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0098b63076d1e60078b4c964afad86b6aa80780e1066d7526d1cb91fefe18b84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0098b63076d1e60078b4c964afad86b6aa80780e1066d7526d1cb91fefe18b84->enter($__internal_0098b63076d1e60078b4c964afad86b6aa80780e1066d7526d1cb91fefe18b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0098b63076d1e60078b4c964afad86b6aa80780e1066d7526d1cb91fefe18b84->leave($__internal_0098b63076d1e60078b4c964afad86b6aa80780e1066d7526d1cb91fefe18b84_prof);

        
        $__internal_b02e1d152a0cb0d9b92e350c7fa16183f86778f86b7d43d9baf7420346067b81->leave($__internal_b02e1d152a0cb0d9b92e350c7fa16183f86778f86b7d43d9baf7420346067b81_prof);

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
