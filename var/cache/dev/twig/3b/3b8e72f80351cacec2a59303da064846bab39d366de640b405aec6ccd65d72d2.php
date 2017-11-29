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
        $__internal_4055beff57ce6ece74b0ca4d6df99952eb2a27df9f863458c3cc3caea5772c6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4055beff57ce6ece74b0ca4d6df99952eb2a27df9f863458c3cc3caea5772c6d->enter($__internal_4055beff57ce6ece74b0ca4d6df99952eb2a27df9f863458c3cc3caea5772c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        $__internal_199aff8d5ec492300378ded107fe9f947a44937e2ab831b5a146d35499577d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_199aff8d5ec492300378ded107fe9f947a44937e2ab831b5a146d35499577d65->enter($__internal_199aff8d5ec492300378ded107fe9f947a44937e2ab831b5a146d35499577d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

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
          </li>
          <li>
            <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listproduitmodif");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/changeProductQuickButton.png"), "html", null, true);
        echo "\"/></a>
            <p class=\"quickButtonTitle\">Modifier un produit</p>
          </li>
          <li>
            <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeproduit");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/displayProductListQuickButton.png"), "html", null, true);
        echo "\"/></a>
            <p class=\"quickButtonTitle\">Lister les stocks</p>
          </li>
          <li>
            <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutlivraison");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/addDeliveryQuickButton.png"), "html", null, true);
        echo "\"/></a>
            <p class=\"quickButtonTitle\">Ajouter une livraison</p>
          </li>
          <li>
            <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listecouleur");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/displayColorListQuickButton.png"), "html", null, true);
        echo "\"/></a>
            <p class=\"quickButtonTitle\">Lister les couleurs / permanentes</p>
          </li>
        </div>
      </ol>

      <ol class=\"quickMenu\">
        <h3>CLIENTS</h3>
        <div>
          <li>
            <a href=\"\"><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/addClientQuickButton.png"), "html", null, true);
        echo "\"/></a>
            <p class=\"quickButtonTitle\">Ajouter un client</p>
          </li>
          <li>
            <a href=\"\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/changeClientQuickButton.png"), "html", null, true);
        echo "\"/></a>
            <p class=\"quickButtonTitle\">Modifier un client</p>
          </li>
          <li>
            <a href=\"\"><img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/displayClientListQuickButton.png"), "html", null, true);
        echo "\"/></a>
            <p class=\"quickButtonTitle\">Lister les clients</p>
          </li>
        </div>
      </ol>

      <ol class=\"quickMenu lastQuickMenu\">
        <h3>FACTURES</h3>
        <div>
          <li>
            <a href=\"\"><img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/addBillQuickButton.png"), "html", null, true);
        echo "\"/></a>
            <p class=\"quickButtonTitle\">Créer une facture</p>
          </li>
          <li>
            <a href=\"\"><img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/displayBillListQuickButton.png"), "html", null, true);
        echo "\"/></a>
            <p class=\"quickButtonTitle\">Lister les factures</p>
          </li>
          <li>
            <a href=\"\"><img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/printBillQuickButton.png"), "html", null, true);
        echo "\"/></a>
            <p class=\"quickButtonTitle\">Imprimer une facture</p>
          </li>
        </div>
      </ol>
    </nav>
    ";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 78
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/scripts/secondaryMenu.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>
";
        
        $__internal_4055beff57ce6ece74b0ca4d6df99952eb2a27df9f863458c3cc3caea5772c6d->leave($__internal_4055beff57ce6ece74b0ca4d6df99952eb2a27df9f863458c3cc3caea5772c6d_prof);

        
        $__internal_199aff8d5ec492300378ded107fe9f947a44937e2ab831b5a146d35499577d65->leave($__internal_199aff8d5ec492300378ded107fe9f947a44937e2ab831b5a146d35499577d65_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_552c631ae34dfcd1971de508e608b218ce198103edd1eff5d23519a5a34bcbcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_552c631ae34dfcd1971de508e608b218ce198103edd1eff5d23519a5a34bcbcf->enter($__internal_552c631ae34dfcd1971de508e608b218ce198103edd1eff5d23519a5a34bcbcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_274ce3299aa96144a412fa3c3b53f52aa34b15d850f30dd63c4e9f14cdc8911e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_274ce3299aa96144a412fa3c3b53f52aa34b15d850f30dd63c4e9f14cdc8911e->enter($__internal_274ce3299aa96144a412fa3c3b53f52aa34b15d850f30dd63c4e9f14cdc8911e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_274ce3299aa96144a412fa3c3b53f52aa34b15d850f30dd63c4e9f14cdc8911e->leave($__internal_274ce3299aa96144a412fa3c3b53f52aa34b15d850f30dd63c4e9f14cdc8911e_prof);

        
        $__internal_552c631ae34dfcd1971de508e608b218ce198103edd1eff5d23519a5a34bcbcf->leave($__internal_552c631ae34dfcd1971de508e608b218ce198103edd1eff5d23519a5a34bcbcf_prof);

    }

    // line 76
    public function block_body($context, array $blocks = array())
    {
        $__internal_b34a00ac8b9cf1ea13c2c9e07f47e11282560e872ca4f09537d7ef8de36f1514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b34a00ac8b9cf1ea13c2c9e07f47e11282560e872ca4f09537d7ef8de36f1514->enter($__internal_b34a00ac8b9cf1ea13c2c9e07f47e11282560e872ca4f09537d7ef8de36f1514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9682dbcb0a8a5167c8a7cf8e0f219d163f5e6478d10829dcf53cc045cf2c6f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9682dbcb0a8a5167c8a7cf8e0f219d163f5e6478d10829dcf53cc045cf2c6f7f->enter($__internal_9682dbcb0a8a5167c8a7cf8e0f219d163f5e6478d10829dcf53cc045cf2c6f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9682dbcb0a8a5167c8a7cf8e0f219d163f5e6478d10829dcf53cc045cf2c6f7f->leave($__internal_9682dbcb0a8a5167c8a7cf8e0f219d163f5e6478d10829dcf53cc045cf2c6f7f_prof);

        
        $__internal_b34a00ac8b9cf1ea13c2c9e07f47e11282560e872ca4f09537d7ef8de36f1514->leave($__internal_b34a00ac8b9cf1ea13c2c9e07f47e11282560e872ca4f09537d7ef8de36f1514_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_799230de87ea26b214d8328cce1d624a350830840707126dec07fc9bf51f5c0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_799230de87ea26b214d8328cce1d624a350830840707126dec07fc9bf51f5c0f->enter($__internal_799230de87ea26b214d8328cce1d624a350830840707126dec07fc9bf51f5c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f0d5aa40503562a449f8eb93a1ca26f22cd969921f843edbd91e1b04a777e4a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d5aa40503562a449f8eb93a1ca26f22cd969921f843edbd91e1b04a777e4a2->enter($__internal_f0d5aa40503562a449f8eb93a1ca26f22cd969921f843edbd91e1b04a777e4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f0d5aa40503562a449f8eb93a1ca26f22cd969921f843edbd91e1b04a777e4a2->leave($__internal_f0d5aa40503562a449f8eb93a1ca26f22cd969921f843edbd91e1b04a777e4a2_prof);

        
        $__internal_799230de87ea26b214d8328cce1d624a350830840707126dec07fc9bf51f5c0f->leave($__internal_799230de87ea26b214d8328cce1d624a350830840707126dec07fc9bf51f5c0f_prof);

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
        return array (  216 => 77,  199 => 76,  182 => 6,  167 => 78,  164 => 77,  162 => 76,  153 => 70,  146 => 66,  139 => 62,  126 => 52,  119 => 48,  112 => 44,  97 => 34,  88 => 30,  79 => 26,  70 => 22,  61 => 18,  52 => 12,  48 => 11,  42 => 8,  37 => 7,  35 => 6,  28 => 1,);
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
          </li>
          <li>
            <a href=\"{{ path('listproduitmodif') }}\"><img src=\"{{ asset(\"bundles/front/images/changeProductQuickButton.png\") }}\"/></a>
            <p class=\"quickButtonTitle\">Modifier un produit</p>
          </li>
          <li>
            <a href=\"{{ path('listeproduit') }}\"><img src=\"{{ asset(\"bundles/front/images/displayProductListQuickButton.png\") }}\"/></a>
            <p class=\"quickButtonTitle\">Lister les stocks</p>
          </li>
          <li>
            <a href=\"{{ path('ajoutlivraison') }}\"><img src=\"{{ asset(\"bundles/front/images/addDeliveryQuickButton.png\") }}\"/></a>
            <p class=\"quickButtonTitle\">Ajouter une livraison</p>
          </li>
          <li>
            <a href=\"{{ path('listecouleur') }}\"><img src=\"{{ asset(\"bundles/front/images/displayColorListQuickButton.png\") }}\"/></a>
            <p class=\"quickButtonTitle\">Lister les couleurs / permanentes</p>
          </li>
        </div>
      </ol>

      <ol class=\"quickMenu\">
        <h3>CLIENTS</h3>
        <div>
          <li>
            <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/addClientQuickButton.png\") }}\"/></a>
            <p class=\"quickButtonTitle\">Ajouter un client</p>
          </li>
          <li>
            <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/changeClientQuickButton.png\") }}\"/></a>
            <p class=\"quickButtonTitle\">Modifier un client</p>
          </li>
          <li>
            <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/displayClientListQuickButton.png\") }}\"/></a>
            <p class=\"quickButtonTitle\">Lister les clients</p>
          </li>
        </div>
      </ol>

      <ol class=\"quickMenu lastQuickMenu\">
        <h3>FACTURES</h3>
        <div>
          <li>
            <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/addBillQuickButton.png\") }}\"/></a>
            <p class=\"quickButtonTitle\">Créer une facture</p>
          </li>
          <li>
            <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/displayBillListQuickButton.png\") }}\"/></a>
            <p class=\"quickButtonTitle\">Lister les factures</p>
          </li>
          <li>
            <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/printBillQuickButton.png\") }}\"/></a>
            <p class=\"quickButtonTitle\">Imprimer une facture</p>
          </li>
        </div>
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
