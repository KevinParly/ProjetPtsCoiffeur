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
        $__internal_02ecef9306ee43a7c567824c9174cb32ee233ce76dd053eccae22d8543d820ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02ecef9306ee43a7c567824c9174cb32ee233ce76dd053eccae22d8543d820ff->enter($__internal_02ecef9306ee43a7c567824c9174cb32ee233ce76dd053eccae22d8543d820ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        $__internal_257d3de612a84273bac00b7fd139ff1cb9e0f8161353152bd106c75adb7ef84d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_257d3de612a84273bac00b7fd139ff1cb9e0f8161353152bd106c75adb7ef84d->enter($__internal_257d3de612a84273bac00b7fd139ff1cb9e0f8161353152bd106c75adb7ef84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

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
        
        $__internal_02ecef9306ee43a7c567824c9174cb32ee233ce76dd053eccae22d8543d820ff->leave($__internal_02ecef9306ee43a7c567824c9174cb32ee233ce76dd053eccae22d8543d820ff_prof);

        
        $__internal_257d3de612a84273bac00b7fd139ff1cb9e0f8161353152bd106c75adb7ef84d->leave($__internal_257d3de612a84273bac00b7fd139ff1cb9e0f8161353152bd106c75adb7ef84d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8712793851b2ee93e8cb9ad75df985533040b3bf4178e0f262f6dfc3b8a2f3ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8712793851b2ee93e8cb9ad75df985533040b3bf4178e0f262f6dfc3b8a2f3ab->enter($__internal_8712793851b2ee93e8cb9ad75df985533040b3bf4178e0f262f6dfc3b8a2f3ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d95007ae7ad3192ca9bbdb6f7f57fc710fb8c1664061afda369d3290caa8f94b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d95007ae7ad3192ca9bbdb6f7f57fc710fb8c1664061afda369d3290caa8f94b->enter($__internal_d95007ae7ad3192ca9bbdb6f7f57fc710fb8c1664061afda369d3290caa8f94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d95007ae7ad3192ca9bbdb6f7f57fc710fb8c1664061afda369d3290caa8f94b->leave($__internal_d95007ae7ad3192ca9bbdb6f7f57fc710fb8c1664061afda369d3290caa8f94b_prof);

        
        $__internal_8712793851b2ee93e8cb9ad75df985533040b3bf4178e0f262f6dfc3b8a2f3ab->leave($__internal_8712793851b2ee93e8cb9ad75df985533040b3bf4178e0f262f6dfc3b8a2f3ab_prof);

    }

    // line 87
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa65a6d2928b0e95618f74eec2e0e42556425531c5cd599e305c1d9dccb9d182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa65a6d2928b0e95618f74eec2e0e42556425531c5cd599e305c1d9dccb9d182->enter($__internal_aa65a6d2928b0e95618f74eec2e0e42556425531c5cd599e305c1d9dccb9d182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e849cea3f37507900b75c0e71a0eb4720107133af9c8e7c863ff8ba813a40b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e849cea3f37507900b75c0e71a0eb4720107133af9c8e7c863ff8ba813a40b44->enter($__internal_e849cea3f37507900b75c0e71a0eb4720107133af9c8e7c863ff8ba813a40b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e849cea3f37507900b75c0e71a0eb4720107133af9c8e7c863ff8ba813a40b44->leave($__internal_e849cea3f37507900b75c0e71a0eb4720107133af9c8e7c863ff8ba813a40b44_prof);

        
        $__internal_aa65a6d2928b0e95618f74eec2e0e42556425531c5cd599e305c1d9dccb9d182->leave($__internal_aa65a6d2928b0e95618f74eec2e0e42556425531c5cd599e305c1d9dccb9d182_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f4292dc06ec969d6b54909390b8b682578b4dccb3bad5c32f92913f87d775ee1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4292dc06ec969d6b54909390b8b682578b4dccb3bad5c32f92913f87d775ee1->enter($__internal_f4292dc06ec969d6b54909390b8b682578b4dccb3bad5c32f92913f87d775ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_60963bf1d497dfb7077039011d4420dcd242a5a1d3c45947f3e36ee3692d6e4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60963bf1d497dfb7077039011d4420dcd242a5a1d3c45947f3e36ee3692d6e4d->enter($__internal_60963bf1d497dfb7077039011d4420dcd242a5a1d3c45947f3e36ee3692d6e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_60963bf1d497dfb7077039011d4420dcd242a5a1d3c45947f3e36ee3692d6e4d->leave($__internal_60963bf1d497dfb7077039011d4420dcd242a5a1d3c45947f3e36ee3692d6e4d_prof);

        
        $__internal_f4292dc06ec969d6b54909390b8b682578b4dccb3bad5c32f92913f87d775ee1->leave($__internal_f4292dc06ec969d6b54909390b8b682578b4dccb3bad5c32f92913f87d775ee1_prof);

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
