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
        $__internal_a644f23dddcb9de081c7c3729b2b2120d150bc93f8b852d3e7783390e3d1db15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a644f23dddcb9de081c7c3729b2b2120d150bc93f8b852d3e7783390e3d1db15->enter($__internal_a644f23dddcb9de081c7c3729b2b2120d150bc93f8b852d3e7783390e3d1db15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:listProduitModif.html.twig"));

        $__internal_c6704d9b164b5b1cc1a903c6192aaa546d2b1c3e35aa493d587dc8b213de8f28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6704d9b164b5b1cc1a903c6192aaa546d2b1c3e35aa493d587dc8b213de8f28->enter($__internal_c6704d9b164b5b1cc1a903c6192aaa546d2b1c3e35aa493d587dc8b213de8f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:listProduitModif.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a644f23dddcb9de081c7c3729b2b2120d150bc93f8b852d3e7783390e3d1db15->leave($__internal_a644f23dddcb9de081c7c3729b2b2120d150bc93f8b852d3e7783390e3d1db15_prof);

        
        $__internal_c6704d9b164b5b1cc1a903c6192aaa546d2b1c3e35aa493d587dc8b213de8f28->leave($__internal_c6704d9b164b5b1cc1a903c6192aaa546d2b1c3e35aa493d587dc8b213de8f28_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_62bcb3dde10b0faade259fda6d03f5be9de408d4d77917b61167618cef1c6a28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62bcb3dde10b0faade259fda6d03f5be9de408d4d77917b61167618cef1c6a28->enter($__internal_62bcb3dde10b0faade259fda6d03f5be9de408d4d77917b61167618cef1c6a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3609fe753ce9623ba49e31ea161eb947d04a640492cf7953741d230fea21b2f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3609fe753ce9623ba49e31ea161eb947d04a640492cf7953741d230fea21b2f2->enter($__internal_3609fe753ce9623ba49e31ea161eb947d04a640492cf7953741d230fea21b2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des produits";
        
        $__internal_3609fe753ce9623ba49e31ea161eb947d04a640492cf7953741d230fea21b2f2->leave($__internal_3609fe753ce9623ba49e31ea161eb947d04a640492cf7953741d230fea21b2f2_prof);

        
        $__internal_62bcb3dde10b0faade259fda6d03f5be9de408d4d77917b61167618cef1c6a28->leave($__internal_62bcb3dde10b0faade259fda6d03f5be9de408d4d77917b61167618cef1c6a28_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e3039490fff9a2e151567e94d2dd22891f93783640fe41411f98cad7bf81ad3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3039490fff9a2e151567e94d2dd22891f93783640fe41411f98cad7bf81ad3a->enter($__internal_e3039490fff9a2e151567e94d2dd22891f93783640fe41411f98cad7bf81ad3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6e641c556ecd42b9a4d35ca65b1075691a1cfd3927dc179d7cec67dbc82a5500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e641c556ecd42b9a4d35ca65b1075691a1cfd3927dc179d7cec67dbc82a5500->enter($__internal_6e641c556ecd42b9a4d35ca65b1075691a1cfd3927dc179d7cec67dbc82a5500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
";
        
        $__internal_6e641c556ecd42b9a4d35ca65b1075691a1cfd3927dc179d7cec67dbc82a5500->leave($__internal_6e641c556ecd42b9a4d35ca65b1075691a1cfd3927dc179d7cec67dbc82a5500_prof);

        
        $__internal_e3039490fff9a2e151567e94d2dd22891f93783640fe41411f98cad7bf81ad3a->leave($__internal_e3039490fff9a2e151567e94d2dd22891f93783640fe41411f98cad7bf81ad3a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a6de46a98947ffd7c2d06455fdeb5698cc09362ad567d4a971eecaec5b958ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a6de46a98947ffd7c2d06455fdeb5698cc09362ad567d4a971eecaec5b958ba->enter($__internal_7a6de46a98947ffd7c2d06455fdeb5698cc09362ad567d4a971eecaec5b958ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_852a5e1e2734daae3f9b8fd067874aa8f6ac3725189e9e9625c8850f0567b2d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_852a5e1e2734daae3f9b8fd067874aa8f6ac3725189e9e9625c8850f0567b2d5->enter($__internal_852a5e1e2734daae3f9b8fd067874aa8f6ac3725189e9e9625c8850f0567b2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_852a5e1e2734daae3f9b8fd067874aa8f6ac3725189e9e9625c8850f0567b2d5->leave($__internal_852a5e1e2734daae3f9b8fd067874aa8f6ac3725189e9e9625c8850f0567b2d5_prof);

        
        $__internal_7a6de46a98947ffd7c2d06455fdeb5698cc09362ad567d4a971eecaec5b958ba->leave($__internal_7a6de46a98947ffd7c2d06455fdeb5698cc09362ad567d4a971eecaec5b958ba_prof);

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
