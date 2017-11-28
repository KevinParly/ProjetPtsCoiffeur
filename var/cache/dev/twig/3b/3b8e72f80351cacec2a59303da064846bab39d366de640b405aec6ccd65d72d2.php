<?php

/* FrontBundle::layout.html.twig */
class __TwigTemplate_5c5174aa9b340b611946e4d94963af72527860762369d9e19bbbc20ce03889ab extends Twig_Template
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
        $__internal_5bb347daf4d687ad072e44f2c264ee1c0b0e27b2683ffece91ff4d097be4a802 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bb347daf4d687ad072e44f2c264ee1c0b0e27b2683ffece91ff4d097be4a802->enter($__internal_5bb347daf4d687ad072e44f2c264ee1c0b0e27b2683ffece91ff4d097be4a802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        $__internal_c933bff7e272de195e1d49969ee900176623e27221cd52d3f8b6390bf3a587dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c933bff7e272de195e1d49969ee900176623e27221cd52d3f8b6390bf3a587dd->enter($__internal_c933bff7e272de195e1d49969ee900176623e27221cd52d3f8b6390bf3a587dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

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
        <li>
          <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutproduit");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/addProductQuickButton.png"), "html", null, true);
        echo "\"/></a>
          <p class=\"quickButtonTitle\">Ajouter un produit</p>
          <p class=\"buttonSummary\">Ajoutez un produit aux stocks</p>
        </li>
        <li>
          <a href=\"\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/changeProductQuickButton.png"), "html", null, true);
        echo "\"/></a>
          <p class=\"quickButtonTitle\">Modifier un produit</p>
          <p class=\"buttonSummary\">Modifiez un produit parmis ceux présents dans liste</p>
        </li>
        <li>
          <a href=\"\"><img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/displayProductListQuickButton.png"), "html", null, true);
        echo "\"/></a>
          <p class=\"quickButtonTitle\">Lister les stocks</p>
          <p class=\"buttonSummary\">Affichez la liste des produits dans les stocks</p>
        </li>
        <li>
          <a href=\"\"><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/addDeliveryQuickButton.png"), "html", null, true);
        echo "\"/></a>
          <p class=\"quickButtonTitle\">Ajouter une livraison</p>
          <p class=\"buttonSummary\">Ajoutez une nouvelle livraison</p>
        </li>
        <li>
          <a href=\"\"><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/displayColorListQuickButton.png"), "html", null, true);
        echo "\"/></a>
          <p class=\"quickButtonTitle\">Lister les couleurs / permanentes</p>
          <p class=\"buttonSummary\">Affichez la liste des couleurs / permanentes dans les stocks</p>
        </li>
      </ol>

      <ol class=\"quickMenu\">
        <li>
          <a href=\"\"><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/addClientQuickButton.png"), "html", null, true);
        echo "\"/></a>
          <p class=\"quickButtonTitle\">Ajouter un client</p>
          <p class=\"buttonSummary\">Ajoutez un nouveau client à la base de données</p>
        </li>
        <li>
          <a href=\"\"><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/changeClientQuickButton.png"), "html", null, true);
        echo "\"/></a>
          <p class=\"quickButtonTitle\">Modifier un client</p>
          <p class=\"buttonSummary\">Modifiez un client parmis ceux présents dans la base de données</p>
        </li>
        <li>
          <a href=\"\"><img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/displayClientListQuickButton.png"), "html", null, true);
        echo "\"/></a>
          <p class=\"quickButtonTitle\">Lister les clients</p>
          <p class=\"buttonSummary\">Affichez la liste des clients</p>
        </li>
      </ol>

      <ol class=\"quickMenu lastQuickMenu\">
        <li>
          <a href=\"\"><img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/addBillQuickButton.png"), "html", null, true);
        echo "\"/></a>
          <p class=\"quickButtonTitle\">Créer une facture</p>
          <p class=\"buttonSummary\">Créez une nouvelle facture</p>
        </li>
        <li>
          <a href=\"\"><img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/displayBillListQuickButton.png"), "html", null, true);
        echo "\"/></a>
          <p class=\"quickButtonTitle\">Lister les factures</p>
          <p class=\"buttonSummary\">Affichez les factures créées</p>
        </li>
        <li>
          <a href=\"\"><img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/printBillQuickButton.png"), "html", null, true);
        echo "\"/></a>
          <p class=\"quickButtonTitle\">Imprimer une facture</p>
          <p class=\"buttonSummary\">Imprimez une nouvelle facture ou une parmis la liste</p>
        </li>
      </ol>
    </nav>
    ";
        // line 78
        $this->displayBlock('body', $context, $blocks);
        // line 79
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 80
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/scripts/secondaryMenu.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>
";
        
        $__internal_5bb347daf4d687ad072e44f2c264ee1c0b0e27b2683ffece91ff4d097be4a802->leave($__internal_5bb347daf4d687ad072e44f2c264ee1c0b0e27b2683ffece91ff4d097be4a802_prof);

        
        $__internal_c933bff7e272de195e1d49969ee900176623e27221cd52d3f8b6390bf3a587dd->leave($__internal_c933bff7e272de195e1d49969ee900176623e27221cd52d3f8b6390bf3a587dd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2ccabe197de5a061ec580194ad7edc78dc60f044155a08a1076aea8172f4a7ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ccabe197de5a061ec580194ad7edc78dc60f044155a08a1076aea8172f4a7ea->enter($__internal_2ccabe197de5a061ec580194ad7edc78dc60f044155a08a1076aea8172f4a7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a278de5dc1b35df393382ee5a3a04e8704390b79a30df78b28c6ee097f5d09d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a278de5dc1b35df393382ee5a3a04e8704390b79a30df78b28c6ee097f5d09d7->enter($__internal_a278de5dc1b35df393382ee5a3a04e8704390b79a30df78b28c6ee097f5d09d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a278de5dc1b35df393382ee5a3a04e8704390b79a30df78b28c6ee097f5d09d7->leave($__internal_a278de5dc1b35df393382ee5a3a04e8704390b79a30df78b28c6ee097f5d09d7_prof);

        
        $__internal_2ccabe197de5a061ec580194ad7edc78dc60f044155a08a1076aea8172f4a7ea->leave($__internal_2ccabe197de5a061ec580194ad7edc78dc60f044155a08a1076aea8172f4a7ea_prof);

    }

    // line 78
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7c46324e94f7ffdc7b8cf7cf798ccb8f928450ce9b751388cc5a465e9857eab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7c46324e94f7ffdc7b8cf7cf798ccb8f928450ce9b751388cc5a465e9857eab->enter($__internal_c7c46324e94f7ffdc7b8cf7cf798ccb8f928450ce9b751388cc5a465e9857eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3b6742562ef4af2452d49fb57a0f24822ff67a497a35d7d07dfc41eafbc9d60d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6742562ef4af2452d49fb57a0f24822ff67a497a35d7d07dfc41eafbc9d60d->enter($__internal_3b6742562ef4af2452d49fb57a0f24822ff67a497a35d7d07dfc41eafbc9d60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3b6742562ef4af2452d49fb57a0f24822ff67a497a35d7d07dfc41eafbc9d60d->leave($__internal_3b6742562ef4af2452d49fb57a0f24822ff67a497a35d7d07dfc41eafbc9d60d_prof);

        
        $__internal_c7c46324e94f7ffdc7b8cf7cf798ccb8f928450ce9b751388cc5a465e9857eab->leave($__internal_c7c46324e94f7ffdc7b8cf7cf798ccb8f928450ce9b751388cc5a465e9857eab_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e0e6dd91072ac89e645e9e69ced71e3bafef43e1064bbb3733391732716f0765 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0e6dd91072ac89e645e9e69ced71e3bafef43e1064bbb3733391732716f0765->enter($__internal_e0e6dd91072ac89e645e9e69ced71e3bafef43e1064bbb3733391732716f0765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7ef4d3d2ec5eafc95913c37f9656b672877e2e68b38034cae8ec58ef5d383423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ef4d3d2ec5eafc95913c37f9656b672877e2e68b38034cae8ec58ef5d383423->enter($__internal_7ef4d3d2ec5eafc95913c37f9656b672877e2e68b38034cae8ec58ef5d383423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7ef4d3d2ec5eafc95913c37f9656b672877e2e68b38034cae8ec58ef5d383423->leave($__internal_7ef4d3d2ec5eafc95913c37f9656b672877e2e68b38034cae8ec58ef5d383423_prof);

        
        $__internal_e0e6dd91072ac89e645e9e69ced71e3bafef43e1064bbb3733391732716f0765->leave($__internal_e0e6dd91072ac89e645e9e69ced71e3bafef43e1064bbb3733391732716f0765_prof);

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
        return array (  210 => 79,  193 => 78,  176 => 6,  161 => 80,  158 => 79,  156 => 78,  147 => 72,  139 => 67,  131 => 62,  120 => 54,  112 => 49,  104 => 44,  93 => 36,  85 => 31,  77 => 26,  69 => 21,  59 => 16,  52 => 12,  48 => 11,  42 => 8,  37 => 7,  35 => 6,  28 => 1,);
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
      </ol>

      <ol class=\"quickMenu\">
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
      </ol>

      <ol class=\"quickMenu lastQuickMenu\">
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
      </ol>
    </nav>
    {% block body %}{% endblock %}
    {% block javascripts %}{% endblock %}
    <script src=\"{{ asset(\"bundles/front/scripts/secondaryMenu.js\") }}\"></script>
  </body>
</html>
", "FrontBundle::layout.html.twig", "D:\\wamp\\www\\ProjetPtsCoiffeur\\src\\FrontBundle/Resources/views/layout.html.twig");
    }
}
