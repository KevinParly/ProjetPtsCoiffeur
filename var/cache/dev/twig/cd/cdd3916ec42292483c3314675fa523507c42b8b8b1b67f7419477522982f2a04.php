<?php

/* StockBundle:Default:listProduitModif.html.twig */
class __TwigTemplate_ff9234c14f9993c78f5901107b1a898cf2609360e648566261d7ade9121e50f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "StockBundle:Default:listProduitModif.html.twig", 1);
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
        $__internal_8ac8d8c67a2a99e02fbe90cee11b8d5ad850b93757b8f4697466d22fa8589cd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ac8d8c67a2a99e02fbe90cee11b8d5ad850b93757b8f4697466d22fa8589cd3->enter($__internal_8ac8d8c67a2a99e02fbe90cee11b8d5ad850b93757b8f4697466d22fa8589cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:listProduitModif.html.twig"));

        $__internal_af96623d8dc39ea9e752408b4696483c59ecaba1aa4ecac871af4e30b19ee5cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af96623d8dc39ea9e752408b4696483c59ecaba1aa4ecac871af4e30b19ee5cd->enter($__internal_af96623d8dc39ea9e752408b4696483c59ecaba1aa4ecac871af4e30b19ee5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:listProduitModif.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ac8d8c67a2a99e02fbe90cee11b8d5ad850b93757b8f4697466d22fa8589cd3->leave($__internal_8ac8d8c67a2a99e02fbe90cee11b8d5ad850b93757b8f4697466d22fa8589cd3_prof);

        
        $__internal_af96623d8dc39ea9e752408b4696483c59ecaba1aa4ecac871af4e30b19ee5cd->leave($__internal_af96623d8dc39ea9e752408b4696483c59ecaba1aa4ecac871af4e30b19ee5cd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb8f619ed909590c63da9c25c45fb898bcfd55b5338df7edd352096301f7f441 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb8f619ed909590c63da9c25c45fb898bcfd55b5338df7edd352096301f7f441->enter($__internal_cb8f619ed909590c63da9c25c45fb898bcfd55b5338df7edd352096301f7f441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6bdf737e5b1f9f1489f7901e12f137bd14dda00161b71c23561ba243c8950c90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bdf737e5b1f9f1489f7901e12f137bd14dda00161b71c23561ba243c8950c90->enter($__internal_6bdf737e5b1f9f1489f7901e12f137bd14dda00161b71c23561ba243c8950c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des produits";
        
        $__internal_6bdf737e5b1f9f1489f7901e12f137bd14dda00161b71c23561ba243c8950c90->leave($__internal_6bdf737e5b1f9f1489f7901e12f137bd14dda00161b71c23561ba243c8950c90_prof);

        
        $__internal_cb8f619ed909590c63da9c25c45fb898bcfd55b5338df7edd352096301f7f441->leave($__internal_cb8f619ed909590c63da9c25c45fb898bcfd55b5338df7edd352096301f7f441_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_df02c28ec7528bd8c984bf6c14a56538df0f64dfe85970d6ab9ca0816c2526ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df02c28ec7528bd8c984bf6c14a56538df0f64dfe85970d6ab9ca0816c2526ac->enter($__internal_df02c28ec7528bd8c984bf6c14a56538df0f64dfe85970d6ab9ca0816c2526ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_97fa70fb3b54be009f36cd6a0b27f00c860722bdfb42bbb6ad62b4a30da44166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97fa70fb3b54be009f36cd6a0b27f00c860722bdfb42bbb6ad62b4a30da44166->enter($__internal_97fa70fb3b54be009f36cd6a0b27f00c860722bdfb42bbb6ad62b4a30da44166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
";
        
        $__internal_97fa70fb3b54be009f36cd6a0b27f00c860722bdfb42bbb6ad62b4a30da44166->leave($__internal_97fa70fb3b54be009f36cd6a0b27f00c860722bdfb42bbb6ad62b4a30da44166_prof);

        
        $__internal_df02c28ec7528bd8c984bf6c14a56538df0f64dfe85970d6ab9ca0816c2526ac->leave($__internal_df02c28ec7528bd8c984bf6c14a56538df0f64dfe85970d6ab9ca0816c2526ac_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c34107131726976a5064b33a6603b1a460c10ecc6541f2d41449f9968de83ecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c34107131726976a5064b33a6603b1a460c10ecc6541f2d41449f9968de83ecf->enter($__internal_c34107131726976a5064b33a6603b1a460c10ecc6541f2d41449f9968de83ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_216cf9bff686d629f48124654028bb22d209c34200d79b0ef9c657bd87b6c002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_216cf9bff686d629f48124654028bb22d209c34200d79b0ef9c657bd87b6c002->enter($__internal_216cf9bff686d629f48124654028bb22d209c34200d79b0ef9c657bd87b6c002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<h1>La liste des produits</h1>
<form>
  <table>
    <tr>
      <td>Libelé</td>
      <td>Type</td>
      <td>Catégorie</td>
      <td>Prix unitaire</td>
      <td>Quantité Disponible</td>
    </tr>
    <tr>
      <td><input type=\"text\" value=\"Shampoing\"></td>
      <td><select name=\"boiteType\">
            <option>Prestation</option>
            <option selected=\"\" >Vente</option>
          </select>
      </td>
      <td>
        <select name=\"boiteCategorie\">
          <option selected=\"\" >soin cheveux</option>
          <option>coupe homme</option>
          <option>couleur</option>
          <option>permanante</option>
        </select>
      </td>
      <td><input type=\"text\" value=\"5,00\"></td>
      <td><input type=\"text\" value=\"10\"></td>
      <td><button>Modifier</button></td>
    </tr>
    <tr>
      <td><input type=\"text\" value=\"Coupe Mulet\"></td>
      <td>
          <select name=\"boiteType\">
            <option  selected=\"\"  >Prestation</option>
            <option>Vente</option>
          </select>
      </td>
      <td>
        <select name=\"boiteCategorie\">
          <option  selected=\"\">coupe homme</option>
          <option>couleur</option>
          <option>soin cheveux</option>
          <option>permanante</option>
        </select>
      </td>
      <td><input type=\"texte\" value=\"12.99\"></td>
      <td><input type=\"text\" value=\"10\"></td>
      <td><button>Modifier</button></td>
    </tr>
  </table>
</form>
<a href=";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueilstock");
        echo "><button type=\"button\">Retour</button></a>
";
        
        $__internal_216cf9bff686d629f48124654028bb22d209c34200d79b0ef9c657bd87b6c002->leave($__internal_216cf9bff686d629f48124654028bb22d209c34200d79b0ef9c657bd87b6c002_prof);

        
        $__internal_c34107131726976a5064b33a6603b1a460c10ecc6541f2d41449f9968de83ecf->leave($__internal_c34107131726976a5064b33a6603b1a460c10ecc6541f2d41449f9968de83ecf_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle:Default:listProduitModif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 59,  89 => 8,  80 => 7,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
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

{% block title %}Liste des produits{% endblock %}
{% block stylesheets %}
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
{% endblock %}
{% block body %}
<h1>La liste des produits</h1>
<form>
  <table>
    <tr>
      <td>Libelé</td>
      <td>Type</td>
      <td>Catégorie</td>
      <td>Prix unitaire</td>
      <td>Quantité Disponible</td>
    </tr>
    <tr>
      <td><input type=\"text\" value=\"Shampoing\"></td>
      <td><select name=\"boiteType\">
            <option>Prestation</option>
            <option selected=\"\" >Vente</option>
          </select>
      </td>
      <td>
        <select name=\"boiteCategorie\">
          <option selected=\"\" >soin cheveux</option>
          <option>coupe homme</option>
          <option>couleur</option>
          <option>permanante</option>
        </select>
      </td>
      <td><input type=\"text\" value=\"5,00\"></td>
      <td><input type=\"text\" value=\"10\"></td>
      <td><button>Modifier</button></td>
    </tr>
    <tr>
      <td><input type=\"text\" value=\"Coupe Mulet\"></td>
      <td>
          <select name=\"boiteType\">
            <option  selected=\"\"  >Prestation</option>
            <option>Vente</option>
          </select>
      </td>
      <td>
        <select name=\"boiteCategorie\">
          <option  selected=\"\">coupe homme</option>
          <option>couleur</option>
          <option>soin cheveux</option>
          <option>permanante</option>
        </select>
      </td>
      <td><input type=\"texte\" value=\"12.99\"></td>
      <td><input type=\"text\" value=\"10\"></td>
      <td><button>Modifier</button></td>
    </tr>
  </table>
</form>
<a href={{ path('accueilstock') }}><button type=\"button\">Retour</button></a>
{% endblock %}
", "StockBundle:Default:listProduitModif.html.twig", "/home/kevin/Dropbox/ProjetPtsCoiffeur/src/StockBundle/Resources/views/Default/listProduitModif.html.twig");
    }
}
