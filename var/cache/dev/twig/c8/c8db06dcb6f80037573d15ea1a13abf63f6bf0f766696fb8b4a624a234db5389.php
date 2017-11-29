<?php

/* StockBundle:Default:ajoutLivraison.html.twig */
class __TwigTemplate_addd2c0893c175414285bd309814ee981110a6c5e077390bc4b5b00a16037e50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "StockBundle:Default:ajoutLivraison.html.twig", 1);
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
        $__internal_ca93768e8c27e36ca0cfd2556ada90c80e9c08d9f08090c3780c10ec1ee164ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca93768e8c27e36ca0cfd2556ada90c80e9c08d9f08090c3780c10ec1ee164ad->enter($__internal_ca93768e8c27e36ca0cfd2556ada90c80e9c08d9f08090c3780c10ec1ee164ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:ajoutLivraison.html.twig"));

        $__internal_f1191940c3b6c317857bd11e7ca02ab58d07a99891c120af41ef578129a77d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1191940c3b6c317857bd11e7ca02ab58d07a99891c120af41ef578129a77d20->enter($__internal_f1191940c3b6c317857bd11e7ca02ab58d07a99891c120af41ef578129a77d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:ajoutLivraison.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca93768e8c27e36ca0cfd2556ada90c80e9c08d9f08090c3780c10ec1ee164ad->leave($__internal_ca93768e8c27e36ca0cfd2556ada90c80e9c08d9f08090c3780c10ec1ee164ad_prof);

        
        $__internal_f1191940c3b6c317857bd11e7ca02ab58d07a99891c120af41ef578129a77d20->leave($__internal_f1191940c3b6c317857bd11e7ca02ab58d07a99891c120af41ef578129a77d20_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a98e5c6871bd8ac0ec8aeab1dd3e5ea7c39cb618680d57349f3f76649875ad6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a98e5c6871bd8ac0ec8aeab1dd3e5ea7c39cb618680d57349f3f76649875ad6->enter($__internal_9a98e5c6871bd8ac0ec8aeab1dd3e5ea7c39cb618680d57349f3f76649875ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_135ead1edaa018379675a1b7a388a2f97c095d2c1652a8d492b1af1d9d002271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_135ead1edaa018379675a1b7a388a2f97c095d2c1652a8d492b1af1d9d002271->enter($__internal_135ead1edaa018379675a1b7a388a2f97c095d2c1652a8d492b1af1d9d002271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajouter une livraison";
        
        $__internal_135ead1edaa018379675a1b7a388a2f97c095d2c1652a8d492b1af1d9d002271->leave($__internal_135ead1edaa018379675a1b7a388a2f97c095d2c1652a8d492b1af1d9d002271_prof);

        
        $__internal_9a98e5c6871bd8ac0ec8aeab1dd3e5ea7c39cb618680d57349f3f76649875ad6->leave($__internal_9a98e5c6871bd8ac0ec8aeab1dd3e5ea7c39cb618680d57349f3f76649875ad6_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5315159016c2812999db65fce91380f00c3b271941ebcf642a22731fe51f5dab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5315159016c2812999db65fce91380f00c3b271941ebcf642a22731fe51f5dab->enter($__internal_5315159016c2812999db65fce91380f00c3b271941ebcf642a22731fe51f5dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fa3c58fe8ce23ba1e2d335459877c0dec6dbc0792bc18ad8d55e5a8f015dc854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa3c58fe8ce23ba1e2d335459877c0dec6dbc0792bc18ad8d55e5a8f015dc854->enter($__internal_fa3c58fe8ce23ba1e2d335459877c0dec6dbc0792bc18ad8d55e5a8f015dc854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
";
        
        $__internal_fa3c58fe8ce23ba1e2d335459877c0dec6dbc0792bc18ad8d55e5a8f015dc854->leave($__internal_fa3c58fe8ce23ba1e2d335459877c0dec6dbc0792bc18ad8d55e5a8f015dc854_prof);

        
        $__internal_5315159016c2812999db65fce91380f00c3b271941ebcf642a22731fe51f5dab->leave($__internal_5315159016c2812999db65fce91380f00c3b271941ebcf642a22731fe51f5dab_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_2cf404257a744861d812b8c9a3fa2366c60e1822381e7b2331b64fca291d01e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cf404257a744861d812b8c9a3fa2366c60e1822381e7b2331b64fca291d01e3->enter($__internal_2cf404257a744861d812b8c9a3fa2366c60e1822381e7b2331b64fca291d01e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_285e33e59e4cf4056e064087f7bd27c9ecc8431ddf78033e88496f7d81927129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_285e33e59e4cf4056e064087f7bd27c9ecc8431ddf78033e88496f7d81927129->enter($__internal_285e33e59e4cf4056e064087f7bd27c9ecc8431ddf78033e88496f7d81927129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "  <h1>Remplir les champs textuels pour ajouter une livraison</h1>
  <form>
    <label>Entreprise</label> <input type=\"text\"><br>
    <label>Date de reçu de la livraison</label> <input type=\"date\"><br>
    <label>Produit livré</label>
    <select>
      <option>Shampoing</option>
      <option>Ciseaux</option>
    </select>
    <input type=\"submit\">
  </form>
  <a href=";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueilstock");
        echo "><button type=\"button\">Retour</button></a>
";
        
        $__internal_285e33e59e4cf4056e064087f7bd27c9ecc8431ddf78033e88496f7d81927129->leave($__internal_285e33e59e4cf4056e064087f7bd27c9ecc8431ddf78033e88496f7d81927129_prof);

        
        $__internal_2cf404257a744861d812b8c9a3fa2366c60e1822381e7b2331b64fca291d01e3->leave($__internal_2cf404257a744861d812b8c9a3fa2366c60e1822381e7b2331b64fca291d01e3_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle:Default:ajoutLivraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 20,  89 => 9,  80 => 8,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
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

{% block title %}Ajouter une livraison{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
{% endblock %}

{% block body %}
  <h1>Remplir les champs textuels pour ajouter une livraison</h1>
  <form>
    <label>Entreprise</label> <input type=\"text\"><br>
    <label>Date de reçu de la livraison</label> <input type=\"date\"><br>
    <label>Produit livré</label>
    <select>
      <option>Shampoing</option>
      <option>Ciseaux</option>
    </select>
    <input type=\"submit\">
  </form>
  <a href={{ path('accueilstock') }}><button type=\"button\">Retour</button></a>
{% endblock %}
", "StockBundle:Default:ajoutLivraison.html.twig", "/home/kevin/Dropbox/ProjetPtsCoiffeur/src/StockBundle/Resources/views/Default/ajoutLivraison.html.twig");
    }
}
