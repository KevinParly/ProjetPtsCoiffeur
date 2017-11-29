<?php

/* FrontBundle::layout.html.twig */
class __TwigTemplate_c93514fcf48ed1cbd5b249b4b256b32c6580f9b5f961a96c2739ae2ddf0832a9 extends Twig_Template
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
        $__internal_2814e020558b0e861ae445d8ea71762914195d6257e340827c59da75d3bb31ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2814e020558b0e861ae445d8ea71762914195d6257e340827c59da75d3bb31ca->enter($__internal_2814e020558b0e861ae445d8ea71762914195d6257e340827c59da75d3bb31ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        $__internal_382c13ce459941c2ca0600057b5bee8fdf1cb81e332ae075962bd066477b3c8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_382c13ce459941c2ca0600057b5bee8fdf1cb81e332ae075962bd066477b3c8d->enter($__internal_382c13ce459941c2ca0600057b5bee8fdf1cb81e332ae075962bd066477b3c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

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
        
        $__internal_2814e020558b0e861ae445d8ea71762914195d6257e340827c59da75d3bb31ca->leave($__internal_2814e020558b0e861ae445d8ea71762914195d6257e340827c59da75d3bb31ca_prof);

        
        $__internal_382c13ce459941c2ca0600057b5bee8fdf1cb81e332ae075962bd066477b3c8d->leave($__internal_382c13ce459941c2ca0600057b5bee8fdf1cb81e332ae075962bd066477b3c8d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2206777bca060f60d8f983ecd22fc4be09ab5fc029d01b1340dfb82d3cf36f54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2206777bca060f60d8f983ecd22fc4be09ab5fc029d01b1340dfb82d3cf36f54->enter($__internal_2206777bca060f60d8f983ecd22fc4be09ab5fc029d01b1340dfb82d3cf36f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1d5c849f0ae9f41638c77ea74526831320b2427f1d27e071c726030eadfd5da6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d5c849f0ae9f41638c77ea74526831320b2427f1d27e071c726030eadfd5da6->enter($__internal_1d5c849f0ae9f41638c77ea74526831320b2427f1d27e071c726030eadfd5da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1d5c849f0ae9f41638c77ea74526831320b2427f1d27e071c726030eadfd5da6->leave($__internal_1d5c849f0ae9f41638c77ea74526831320b2427f1d27e071c726030eadfd5da6_prof);

        
        $__internal_2206777bca060f60d8f983ecd22fc4be09ab5fc029d01b1340dfb82d3cf36f54->leave($__internal_2206777bca060f60d8f983ecd22fc4be09ab5fc029d01b1340dfb82d3cf36f54_prof);

    }

    // line 87
    public function block_body($context, array $blocks = array())
    {
        $__internal_2522f7d8b62b8058ed45bf9bcc982a4817ac27fe83d9af6e0222c0bc485bd5b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2522f7d8b62b8058ed45bf9bcc982a4817ac27fe83d9af6e0222c0bc485bd5b0->enter($__internal_2522f7d8b62b8058ed45bf9bcc982a4817ac27fe83d9af6e0222c0bc485bd5b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d0444c69e30ccee599db125202cb32afffb85da6c684ee8a61082419b044a2c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0444c69e30ccee599db125202cb32afffb85da6c684ee8a61082419b044a2c2->enter($__internal_d0444c69e30ccee599db125202cb32afffb85da6c684ee8a61082419b044a2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d0444c69e30ccee599db125202cb32afffb85da6c684ee8a61082419b044a2c2->leave($__internal_d0444c69e30ccee599db125202cb32afffb85da6c684ee8a61082419b044a2c2_prof);

        
        $__internal_2522f7d8b62b8058ed45bf9bcc982a4817ac27fe83d9af6e0222c0bc485bd5b0->leave($__internal_2522f7d8b62b8058ed45bf9bcc982a4817ac27fe83d9af6e0222c0bc485bd5b0_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9a9ec71bcb3eb96bab9e15a274c73a0ab295df0d190cbda28b4ccbf9ee067d24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a9ec71bcb3eb96bab9e15a274c73a0ab295df0d190cbda28b4ccbf9ee067d24->enter($__internal_9a9ec71bcb3eb96bab9e15a274c73a0ab295df0d190cbda28b4ccbf9ee067d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6d26ea4df8dd75690793c8d3ca4c144b775d5f9813edfd726c2d943b41460c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d26ea4df8dd75690793c8d3ca4c144b775d5f9813edfd726c2d943b41460c75->enter($__internal_6d26ea4df8dd75690793c8d3ca4c144b775d5f9813edfd726c2d943b41460c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6d26ea4df8dd75690793c8d3ca4c144b775d5f9813edfd726c2d943b41460c75->leave($__internal_6d26ea4df8dd75690793c8d3ca4c144b775d5f9813edfd726c2d943b41460c75_prof);

        
        $__internal_9a9ec71bcb3eb96bab9e15a274c73a0ab295df0d190cbda28b4ccbf9ee067d24->leave($__internal_9a9ec71bcb3eb96bab9e15a274c73a0ab295df0d190cbda28b4ccbf9ee067d24_prof);

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
", "FrontBundle::layout.html.twig", "/var/www/html/www/ProjetCoiffeur/ProjetPtsCoiffeur/src/FrontBundle/Resources/views/layout.html.twig");
    }
}
