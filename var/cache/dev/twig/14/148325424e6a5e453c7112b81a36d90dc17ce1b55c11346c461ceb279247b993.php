<?php

/* FrontBundle::layout.html.twig */
class __TwigTemplate_a96fb1c48616a2f41cc7ca57b33655e38936e011e6c55623797a023cc313c45d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9684178df605f3a3ce4b8cfaf77e9e960285aa57ddd15ef6484b9001b2f6f12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9684178df605f3a3ce4b8cfaf77e9e960285aa57ddd15ef6484b9001b2f6f12->enter($__internal_f9684178df605f3a3ce4b8cfaf77e9e960285aa57ddd15ef6484b9001b2f6f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        $__internal_5b968172d65b14783be90a934dca77b9cb9fe92db65b93ecd5e4df4f0639f64d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b968172d65b14783be90a934dca77b9cb9fe92db65b93ecd5e4df4f0639f64d->enter($__internal_5b968172d65b14783be90a934dca77b9cb9fe92db65b93ecd5e4df4f0639f64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
      <meta charset=\"UTF-8\" />
      <title>TITRE</title>
      ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/stylesheets/layout.css"), "html", null, true);
        echo "\"/>
      <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
  </head>
  <body>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/scripts/jquery.js"), "html", null, true);
        echo "\"></script>
    <div id=\"side_nav_displayer\"><button><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/menu.png"), "html", null, true);
        echo "\" title=\"Menu latéral\"/></button></div>
    <nav id=\"side_nav\">
      <ol class=\"quickMenu firstQuickMenu\">
        <h3>STOCKS</h3>
        <div>
          <li>
            <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutproduit");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/addProductQuickButton.png"), "html", null, true);
        echo "\"/></a>
            <p class=\"quickButtonTitle\">Ajouter un produit</p>
            <p class=\"buttonSummary\">Ajoutez un produit aux stocks</p>
          </li>
          <li>
            <a href=\"\"><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/changeProductQuickButton.png"), "html", null, true);
        echo "\"/></a>
            <p class=\"quickButtonTitle\">Modifier un produit</p>
            <p class=\"buttonSummary\">Modifiez un produit parmis ceux présents dans liste</p>
          </li>
          <li>
            <a href=\"\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/displayProductListQuickButton.png"), "html", null, true);
        echo "\"/></a>
            <p class=\"quickButtonTitle\">Lister les stocks</p>
            <p class=\"buttonSummary\">Affichez la liste des produits dans les stocks</p>
          </li>
          <li>
            <a href=\"\"><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/addDeliveryQuickButton.png"), "html", null, true);
        echo "\"/></a>
            <p class=\"quickButtonTitle\">Ajouter une livraison</p>
            <p class=\"buttonSummary\">Ajoutez une nouvelle livraison</p>
          </li>
          <li>
            <a href=\"\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/displayColorListQuickButton.png"), "html", null, true);
        echo "\"/></a>
            <p class=\"quickButtonTitle\">Lister les couleurs / permanentes</p>
            <p class=\"buttonSummary\">Affichez la liste des couleurs / permanentes dans les stocks</p>
          </li>
        </div>
      </ol>

      <ol class=\"quickMenu\">
        <h3>CLIENTS</h3>
        <div>
          <li>
            <a href=\"\"><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/addClientQuickButton.png"), "html", null, true);
        echo "\"/></a>
            <p class=\"quickButtonTitle\">Ajouter un client</p>
            <p class=\"buttonSummary\">Ajoutez un nouveau client à la base de données</p>
          </li>
          <li>
            <a href=\"\"><img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/changeClientQuickButton.png"), "html", null, true);
        echo "\"/></a>
            <p class=\"quickButtonTitle\">Modifier un client</p>
            <p class=\"buttonSummary\">Modifiez un client parmis ceux présents dans la base de données</p>
          </li>
          <li>
            <a href=\"\"><img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/displayClientListQuickButton.png"), "html", null, true);
        echo "\"/></a>
            <p class=\"quickButtonTitle\">Lister les clients</p>
            <p class=\"buttonSummary\">Affichez la liste des clients</p>
          </li>
        </div>
      </ol>

      <ol class=\"quickMenu lastQuickMenu\">
        <h3>FACTURES</h3>
        <div>
          <li>
            <a href=\"\"><img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/addBillQuickButton.png"), "html", null, true);
        echo "\"/></a>
            <p class=\"quickButtonTitle\">Créer une facture</p>
            <p class=\"buttonSummary\">Créez une nouvelle facture</p>
          </li>
          <li>
            <a href=\"\"><img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/displayBillListQuickButton.png"), "html", null, true);
        echo "\"/></a>
            <p class=\"quickButtonTitle\">Lister les factures</p>
            <p class=\"buttonSummary\">Affichez les factures créées</p>
          </li>
          <li>
            <a href=\"\"><img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/printBillQuickButton.png"), "html", null, true);
        echo "\"/></a>
            <p class=\"quickButtonTitle\">Imprimer une facture</p>
            <p class=\"buttonSummary\">Imprimez une nouvelle facture ou une parmis la liste</p>
          </li>
        </div>
      </ol>
    </nav>
    ";
        // line 87
        $this->displayBlock('body', $context, $blocks);
        // line 88
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/scripts/secondaryMenu.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>
";
        
        $__internal_f9684178df605f3a3ce4b8cfaf77e9e960285aa57ddd15ef6484b9001b2f6f12->leave($__internal_f9684178df605f3a3ce4b8cfaf77e9e960285aa57ddd15ef6484b9001b2f6f12_prof);

        
        $__internal_5b968172d65b14783be90a934dca77b9cb9fe92db65b93ecd5e4df4f0639f64d->leave($__internal_5b968172d65b14783be90a934dca77b9cb9fe92db65b93ecd5e4df4f0639f64d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7ee531923c9d7f4b2030e12f966d7365c4890d1f7ebd9b2c0595dfad86946d15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ee531923c9d7f4b2030e12f966d7365c4890d1f7ebd9b2c0595dfad86946d15->enter($__internal_7ee531923c9d7f4b2030e12f966d7365c4890d1f7ebd9b2c0595dfad86946d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d8931ea804fb14cf3d1c16c0bb85123ffb2ec8ede8f77b892a6267f003020ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8931ea804fb14cf3d1c16c0bb85123ffb2ec8ede8f77b892a6267f003020ed2->enter($__internal_d8931ea804fb14cf3d1c16c0bb85123ffb2ec8ede8f77b892a6267f003020ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d8931ea804fb14cf3d1c16c0bb85123ffb2ec8ede8f77b892a6267f003020ed2->leave($__internal_d8931ea804fb14cf3d1c16c0bb85123ffb2ec8ede8f77b892a6267f003020ed2_prof);

        
        $__internal_7ee531923c9d7f4b2030e12f966d7365c4890d1f7ebd9b2c0595dfad86946d15->leave($__internal_7ee531923c9d7f4b2030e12f966d7365c4890d1f7ebd9b2c0595dfad86946d15_prof);

    }

    // line 87
    public function block_body($context, array $blocks = array())
    {
        $__internal_64c7b47da4b3e522482b55eacab7720664fc025de4538981af91ae51a69a4d85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64c7b47da4b3e522482b55eacab7720664fc025de4538981af91ae51a69a4d85->enter($__internal_64c7b47da4b3e522482b55eacab7720664fc025de4538981af91ae51a69a4d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a447da054222a5548b799fe5c1016a812647c084cee162286809b0fcbf6575b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a447da054222a5548b799fe5c1016a812647c084cee162286809b0fcbf6575b->enter($__internal_1a447da054222a5548b799fe5c1016a812647c084cee162286809b0fcbf6575b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1a447da054222a5548b799fe5c1016a812647c084cee162286809b0fcbf6575b->leave($__internal_1a447da054222a5548b799fe5c1016a812647c084cee162286809b0fcbf6575b_prof);

        
        $__internal_64c7b47da4b3e522482b55eacab7720664fc025de4538981af91ae51a69a4d85->leave($__internal_64c7b47da4b3e522482b55eacab7720664fc025de4538981af91ae51a69a4d85_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_beea6db47e331442f15a0ac47f90fb0b727c3d1bf064d859e85cb0321a49ea8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beea6db47e331442f15a0ac47f90fb0b727c3d1bf064d859e85cb0321a49ea8d->enter($__internal_beea6db47e331442f15a0ac47f90fb0b727c3d1bf064d859e85cb0321a49ea8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_17fba893056d198883470f9d23ea1644392d7619acdcdd8e8b5eb5cb965693c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17fba893056d198883470f9d23ea1644392d7619acdcdd8e8b5eb5cb965693c7->enter($__internal_17fba893056d198883470f9d23ea1644392d7619acdcdd8e8b5eb5cb965693c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_17fba893056d198883470f9d23ea1644392d7619acdcdd8e8b5eb5cb965693c7->leave($__internal_17fba893056d198883470f9d23ea1644392d7619acdcdd8e8b5eb5cb965693c7_prof);

        
        $__internal_beea6db47e331442f15a0ac47f90fb0b727c3d1bf064d859e85cb0321a49ea8d->leave($__internal_beea6db47e331442f15a0ac47f90fb0b727c3d1bf064d859e85cb0321a49ea8d_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 88,  202 => 87,  185 => 6,  170 => 89,  167 => 88,  165 => 87,  155 => 80,  147 => 75,  139 => 70,  125 => 59,  117 => 54,  109 => 49,  95 => 38,  87 => 33,  79 => 28,  71 => 23,  61 => 18,  52 => 12,  48 => 11,  42 => 8,  37 => 7,  35 => 6,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
  <head>
      <meta charset=\"UTF-8\" />
      <title>TITRE</title>
      {% block stylesheets %}{% endblock %}
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset(\"bundles/front/stylesheets/layout.css\") }}\"/>
      <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
  </head>
  <body>
    <script src=\"{{ asset(\"bundles/front/scripts/jquery.js\") }}\"></script>
    <div id=\"side_nav_displayer\"><button><img src=\"{{ asset(\"bundles/front/images/menu.png\") }}\" title=\"Menu latéral\"/></button></div>
    <nav id=\"side_nav\">
      <ol class=\"quickMenu firstQuickMenu\">
        <h3>STOCKS</h3>
        <div>
          <li>
            <a href=\"{{ path('ajoutproduit') }}\"><img src=\"{{ asset(\"bundles/front/images/addProductQuickButton.png\") }}\"/></a>
            <p class=\"quickButtonTitle\">Ajouter un produit</p>
            <p class=\"buttonSummary\">Ajoutez un produit aux stocks</p>
          </li>
          <li>
            <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/changeProductQuickButton.png\") }}\"/></a>
            <p class=\"quickButtonTitle\">Modifier un produit</p>
            <p class=\"buttonSummary\">Modifiez un produit parmis ceux présents dans liste</p>
          </li>
          <li>
            <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/displayProductListQuickButton.png\") }}\"/></a>
            <p class=\"quickButtonTitle\">Lister les stocks</p>
            <p class=\"buttonSummary\">Affichez la liste des produits dans les stocks</p>
          </li>
          <li>
            <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/addDeliveryQuickButton.png\") }}\"/></a>
            <p class=\"quickButtonTitle\">Ajouter une livraison</p>
            <p class=\"buttonSummary\">Ajoutez une nouvelle livraison</p>
          </li>
          <li>
            <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/displayColorListQuickButton.png\") }}\"/></a>
            <p class=\"quickButtonTitle\">Lister les couleurs / permanentes</p>
            <p class=\"buttonSummary\">Affichez la liste des couleurs / permanentes dans les stocks</p>
          </li>
        </div>
      </ol>

      <ol class=\"quickMenu\">
        <h3>CLIENTS</h3>
        <div>
          <li>
            <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/addClientQuickButton.png\") }}\"/></a>
            <p class=\"quickButtonTitle\">Ajouter un client</p>
            <p class=\"buttonSummary\">Ajoutez un nouveau client à la base de données</p>
          </li>
          <li>
            <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/changeClientQuickButton.png\") }}\"/></a>
            <p class=\"quickButtonTitle\">Modifier un client</p>
            <p class=\"buttonSummary\">Modifiez un client parmis ceux présents dans la base de données</p>
          </li>
          <li>
            <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/displayClientListQuickButton.png\") }}\"/></a>
            <p class=\"quickButtonTitle\">Lister les clients</p>
            <p class=\"buttonSummary\">Affichez la liste des clients</p>
          </li>
        </div>
      </ol>

      <ol class=\"quickMenu lastQuickMenu\">
        <h3>FACTURES</h3>
        <div>
          <li>
            <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/addBillQuickButton.png\") }}\"/></a>
            <p class=\"quickButtonTitle\">Créer une facture</p>
            <p class=\"buttonSummary\">Créez une nouvelle facture</p>
          </li>
          <li>
            <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/displayBillListQuickButton.png\") }}\"/></a>
            <p class=\"quickButtonTitle\">Lister les factures</p>
            <p class=\"buttonSummary\">Affichez les factures créées</p>
          </li>
          <li>
            <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/printBillQuickButton.png\") }}\"/></a>
            <p class=\"quickButtonTitle\">Imprimer une facture</p>
            <p class=\"buttonSummary\">Imprimez une nouvelle facture ou une parmis la liste</p>
          </li>
        </div>
      </ol>
    </nav>
    {% block body %}{% endblock %}
    {% block javascripts %}{% endblock %}
    <script src=\"{{ asset(\"bundles/front/scripts/secondaryMenu.js\") }}\"></script>
  </body>
</html>
", "FrontBundle::layout.html.twig", "/home/kevin/Dropbox/ProjetPtsCoiffeur/src/FrontBundle/Resources/views/layout.html.twig");
    }
}
