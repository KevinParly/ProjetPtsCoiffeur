<?php

/* FrontBundle::layout.html.twig */
class __TwigTemplate_a96fb1c48616a2f41cc7ca57b33655e38936e011e6c55623797a023cc313c45d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f0f48d014a59b3c44845a1e5376c08eafaa2d369af69057fbfa3af9c6d46318 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f0f48d014a59b3c44845a1e5376c08eafaa2d369af69057fbfa3af9c6d46318->enter($__internal_2f0f48d014a59b3c44845a1e5376c08eafaa2d369af69057fbfa3af9c6d46318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        $__internal_9343c64dd73ae5eb9fee43c8f2c296342ebe0ce3a274992b25f874af2fbfc4a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9343c64dd73ae5eb9fee43c8f2c296342ebe0ce3a274992b25f874af2fbfc4a2->enter($__internal_9343c64dd73ae5eb9fee43c8f2c296342ebe0ce3a274992b25f874af2fbfc4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
      <meta charset=\"UTF-8\" />
      ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/stylesheets/layout.css"), "html", null, true);
        echo "\"/>
      ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "      <link rel=\"icon\" type=\"image/x-icon\" href=\"";
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
        
        $__internal_2f0f48d014a59b3c44845a1e5376c08eafaa2d369af69057fbfa3af9c6d46318->leave($__internal_2f0f48d014a59b3c44845a1e5376c08eafaa2d369af69057fbfa3af9c6d46318_prof);

        
        $__internal_9343c64dd73ae5eb9fee43c8f2c296342ebe0ce3a274992b25f874af2fbfc4a2->leave($__internal_9343c64dd73ae5eb9fee43c8f2c296342ebe0ce3a274992b25f874af2fbfc4a2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_741c087704babc6738e42346021a85cb915c26b83fd51701d178d7d3932033b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_741c087704babc6738e42346021a85cb915c26b83fd51701d178d7d3932033b1->enter($__internal_741c087704babc6738e42346021a85cb915c26b83fd51701d178d7d3932033b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_68a557f5b942dbc4300eed3b778bb623a1adc0416ee2e2ae6669991d95334039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a557f5b942dbc4300eed3b778bb623a1adc0416ee2e2ae6669991d95334039->enter($__internal_68a557f5b942dbc4300eed3b778bb623a1adc0416ee2e2ae6669991d95334039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_68a557f5b942dbc4300eed3b778bb623a1adc0416ee2e2ae6669991d95334039->leave($__internal_68a557f5b942dbc4300eed3b778bb623a1adc0416ee2e2ae6669991d95334039_prof);

        
        $__internal_741c087704babc6738e42346021a85cb915c26b83fd51701d178d7d3932033b1->leave($__internal_741c087704babc6738e42346021a85cb915c26b83fd51701d178d7d3932033b1_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cc006f24399abdfe65b80880a40031c4c2730bdedbf9a8acc2ac368a3cdc1011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc006f24399abdfe65b80880a40031c4c2730bdedbf9a8acc2ac368a3cdc1011->enter($__internal_cc006f24399abdfe65b80880a40031c4c2730bdedbf9a8acc2ac368a3cdc1011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_faea4324b47386dcd932d0a7d7a5de6a21f8fdacd07869f7d00a4d9f9d5b099d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faea4324b47386dcd932d0a7d7a5de6a21f8fdacd07869f7d00a4d9f9d5b099d->enter($__internal_faea4324b47386dcd932d0a7d7a5de6a21f8fdacd07869f7d00a4d9f9d5b099d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_faea4324b47386dcd932d0a7d7a5de6a21f8fdacd07869f7d00a4d9f9d5b099d->leave($__internal_faea4324b47386dcd932d0a7d7a5de6a21f8fdacd07869f7d00a4d9f9d5b099d_prof);

        
        $__internal_cc006f24399abdfe65b80880a40031c4c2730bdedbf9a8acc2ac368a3cdc1011->leave($__internal_cc006f24399abdfe65b80880a40031c4c2730bdedbf9a8acc2ac368a3cdc1011_prof);

    }

    // line 76
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b749f15d922844276d5a98d9d874d7caa59a9c4d7036f4a8487c632bbe795c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b749f15d922844276d5a98d9d874d7caa59a9c4d7036f4a8487c632bbe795c7->enter($__internal_6b749f15d922844276d5a98d9d874d7caa59a9c4d7036f4a8487c632bbe795c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6d65e0988eae4e709616e08f70233855ea48cb99d8ee09ef96c58a0fb58a268f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d65e0988eae4e709616e08f70233855ea48cb99d8ee09ef96c58a0fb58a268f->enter($__internal_6d65e0988eae4e709616e08f70233855ea48cb99d8ee09ef96c58a0fb58a268f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6d65e0988eae4e709616e08f70233855ea48cb99d8ee09ef96c58a0fb58a268f->leave($__internal_6d65e0988eae4e709616e08f70233855ea48cb99d8ee09ef96c58a0fb58a268f_prof);

        
        $__internal_6b749f15d922844276d5a98d9d874d7caa59a9c4d7036f4a8487c632bbe795c7->leave($__internal_6b749f15d922844276d5a98d9d874d7caa59a9c4d7036f4a8487c632bbe795c7_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_20ff720f5bd624e29ee6cafac98c346ca5496a6d06eacc58df9779ade5b5ac2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20ff720f5bd624e29ee6cafac98c346ca5496a6d06eacc58df9779ade5b5ac2f->enter($__internal_20ff720f5bd624e29ee6cafac98c346ca5496a6d06eacc58df9779ade5b5ac2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a2c657608e089fb7cf7c65e81df99eaf5cb3ef4a28064040cb5b1e949053a69d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c657608e089fb7cf7c65e81df99eaf5cb3ef4a28064040cb5b1e949053a69d->enter($__internal_a2c657608e089fb7cf7c65e81df99eaf5cb3ef4a28064040cb5b1e949053a69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a2c657608e089fb7cf7c65e81df99eaf5cb3ef4a28064040cb5b1e949053a69d->leave($__internal_a2c657608e089fb7cf7c65e81df99eaf5cb3ef4a28064040cb5b1e949053a69d_prof);

        
        $__internal_20ff720f5bd624e29ee6cafac98c346ca5496a6d06eacc58df9779ade5b5ac2f->leave($__internal_20ff720f5bd624e29ee6cafac98c346ca5496a6d06eacc58df9779ade5b5ac2f_prof);

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
        return array (  236 => 77,  219 => 76,  202 => 7,  185 => 5,  170 => 78,  167 => 77,  165 => 76,  156 => 70,  149 => 66,  142 => 62,  129 => 52,  122 => 48,  115 => 44,  100 => 34,  91 => 30,  82 => 26,  73 => 22,  64 => 18,  55 => 12,  51 => 11,  44 => 8,  42 => 7,  37 => 6,  35 => 5,  29 => 1,);
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
      {% block title %}{% endblock %}
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset(\"bundles/front/stylesheets/layout.css\") }}\"/>
      {% block stylesheets %}{% endblock %}
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
", "FrontBundle::layout.html.twig", "/home/kevin/Dropbox/PTS3/ProjetPtsCoiffeur/src/FrontBundle/Resources/views/layout.html.twig");
    }
}
