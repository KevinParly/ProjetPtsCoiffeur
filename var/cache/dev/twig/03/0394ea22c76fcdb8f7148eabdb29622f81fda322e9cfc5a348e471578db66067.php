<?php

/* StockBundle:Default:listProduitModif.html.twig */
class __TwigTemplate_8423d7e9fce4250dec0bad6bb5f5425fe30f44775c5528333be3022fe9596a31 extends Twig_Template
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
        $__internal_de4247a36fd09a1264539a9f8edc2316760a89cfc5d2e03d4259feb3415f4dfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de4247a36fd09a1264539a9f8edc2316760a89cfc5d2e03d4259feb3415f4dfc->enter($__internal_de4247a36fd09a1264539a9f8edc2316760a89cfc5d2e03d4259feb3415f4dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:listProduitModif.html.twig"));

        $__internal_bf937b9bc524ae496717aaea54ff2dd63dcc983265f52d18acb5a2620f4dcd3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf937b9bc524ae496717aaea54ff2dd63dcc983265f52d18acb5a2620f4dcd3d->enter($__internal_bf937b9bc524ae496717aaea54ff2dd63dcc983265f52d18acb5a2620f4dcd3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:listProduitModif.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de4247a36fd09a1264539a9f8edc2316760a89cfc5d2e03d4259feb3415f4dfc->leave($__internal_de4247a36fd09a1264539a9f8edc2316760a89cfc5d2e03d4259feb3415f4dfc_prof);

        
        $__internal_bf937b9bc524ae496717aaea54ff2dd63dcc983265f52d18acb5a2620f4dcd3d->leave($__internal_bf937b9bc524ae496717aaea54ff2dd63dcc983265f52d18acb5a2620f4dcd3d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_89c1002e55c401ad1eb524ae4227706a35a45c2a30a9539384c7a8e9271a39ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89c1002e55c401ad1eb524ae4227706a35a45c2a30a9539384c7a8e9271a39ed->enter($__internal_89c1002e55c401ad1eb524ae4227706a35a45c2a30a9539384c7a8e9271a39ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ab2be485020ff60505d392fff974acec742dc763ea3607f36034adb30ecba4b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab2be485020ff60505d392fff974acec742dc763ea3607f36034adb30ecba4b0->enter($__internal_ab2be485020ff60505d392fff974acec742dc763ea3607f36034adb30ecba4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des produits";
        
        $__internal_ab2be485020ff60505d392fff974acec742dc763ea3607f36034adb30ecba4b0->leave($__internal_ab2be485020ff60505d392fff974acec742dc763ea3607f36034adb30ecba4b0_prof);

        
        $__internal_89c1002e55c401ad1eb524ae4227706a35a45c2a30a9539384c7a8e9271a39ed->leave($__internal_89c1002e55c401ad1eb524ae4227706a35a45c2a30a9539384c7a8e9271a39ed_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dfd723e08f2a857a4b8d50754f63986199a9edd7d71fc907d45b2309a27a47d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfd723e08f2a857a4b8d50754f63986199a9edd7d71fc907d45b2309a27a47d8->enter($__internal_dfd723e08f2a857a4b8d50754f63986199a9edd7d71fc907d45b2309a27a47d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_dce5319244c3d1fd292fd0dde35830d9346031ad6e2524240d169b2462b941b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce5319244c3d1fd292fd0dde35830d9346031ad6e2524240d169b2462b941b4->enter($__internal_dce5319244c3d1fd292fd0dde35830d9346031ad6e2524240d169b2462b941b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
";
        
        $__internal_dce5319244c3d1fd292fd0dde35830d9346031ad6e2524240d169b2462b941b4->leave($__internal_dce5319244c3d1fd292fd0dde35830d9346031ad6e2524240d169b2462b941b4_prof);

        
        $__internal_dfd723e08f2a857a4b8d50754f63986199a9edd7d71fc907d45b2309a27a47d8->leave($__internal_dfd723e08f2a857a4b8d50754f63986199a9edd7d71fc907d45b2309a27a47d8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_365cec3df5c5cf77f669c9d54fa50d28e06d040926c14e835db46a65eea871fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_365cec3df5c5cf77f669c9d54fa50d28e06d040926c14e835db46a65eea871fb->enter($__internal_365cec3df5c5cf77f669c9d54fa50d28e06d040926c14e835db46a65eea871fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6c65a609e14a079331572cd4d9ced7604c2d8428d510d7e09b83490305ce5cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6c65a609e14a079331572cd4d9ced7604c2d8428d510d7e09b83490305ce5cd->enter($__internal_f6c65a609e14a079331572cd4d9ced7604c2d8428d510d7e09b83490305ce5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f6c65a609e14a079331572cd4d9ced7604c2d8428d510d7e09b83490305ce5cd->leave($__internal_f6c65a609e14a079331572cd4d9ced7604c2d8428d510d7e09b83490305ce5cd_prof);

        
        $__internal_365cec3df5c5cf77f669c9d54fa50d28e06d040926c14e835db46a65eea871fb->leave($__internal_365cec3df5c5cf77f669c9d54fa50d28e06d040926c14e835db46a65eea871fb_prof);

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
", "StockBundle:Default:listProduitModif.html.twig", "D:\\wamp\\www\\ProjetPtsCoiffeur\\src\\StockBundle/Resources/views/Default/listProduitModif.html.twig");
    }
}
