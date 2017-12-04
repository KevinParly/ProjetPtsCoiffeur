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
        $__internal_a4711863e94554a61bca6dd728d981ae17555417866130a304cd73ff76baac78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4711863e94554a61bca6dd728d981ae17555417866130a304cd73ff76baac78->enter($__internal_a4711863e94554a61bca6dd728d981ae17555417866130a304cd73ff76baac78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        $__internal_d7384ba25ede646615debb5d6b39f6b20230f6ee78483057a4f0f726c7bbdf69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7384ba25ede646615debb5d6b39f6b20230f6ee78483057a4f0f726c7bbdf69->enter($__internal_d7384ba25ede646615debb5d6b39f6b20230f6ee78483057a4f0f726c7bbdf69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

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
        
        $__internal_a4711863e94554a61bca6dd728d981ae17555417866130a304cd73ff76baac78->leave($__internal_a4711863e94554a61bca6dd728d981ae17555417866130a304cd73ff76baac78_prof);

        
        $__internal_d7384ba25ede646615debb5d6b39f6b20230f6ee78483057a4f0f726c7bbdf69->leave($__internal_d7384ba25ede646615debb5d6b39f6b20230f6ee78483057a4f0f726c7bbdf69_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_afcc3957dc39fad197501bb6fa6cc4acbe9b0f481f7325f6fae9e1ba13f6e272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afcc3957dc39fad197501bb6fa6cc4acbe9b0f481f7325f6fae9e1ba13f6e272->enter($__internal_afcc3957dc39fad197501bb6fa6cc4acbe9b0f481f7325f6fae9e1ba13f6e272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ea3cea84609f9597ef0f53817690d863d3c4c1593373a752701536c14e621bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea3cea84609f9597ef0f53817690d863d3c4c1593373a752701536c14e621bd6->enter($__internal_ea3cea84609f9597ef0f53817690d863d3c4c1593373a752701536c14e621bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ea3cea84609f9597ef0f53817690d863d3c4c1593373a752701536c14e621bd6->leave($__internal_ea3cea84609f9597ef0f53817690d863d3c4c1593373a752701536c14e621bd6_prof);

        
        $__internal_afcc3957dc39fad197501bb6fa6cc4acbe9b0f481f7325f6fae9e1ba13f6e272->leave($__internal_afcc3957dc39fad197501bb6fa6cc4acbe9b0f481f7325f6fae9e1ba13f6e272_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_23ed9abc00b5cda28666bc85e1178b635f5c73dce5f4b63c49b4cdfa50f00879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23ed9abc00b5cda28666bc85e1178b635f5c73dce5f4b63c49b4cdfa50f00879->enter($__internal_23ed9abc00b5cda28666bc85e1178b635f5c73dce5f4b63c49b4cdfa50f00879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_950683f35da962220551ee319f1df055534d06fce9efdd4ab9b9fa67e660ac87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_950683f35da962220551ee319f1df055534d06fce9efdd4ab9b9fa67e660ac87->enter($__internal_950683f35da962220551ee319f1df055534d06fce9efdd4ab9b9fa67e660ac87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_950683f35da962220551ee319f1df055534d06fce9efdd4ab9b9fa67e660ac87->leave($__internal_950683f35da962220551ee319f1df055534d06fce9efdd4ab9b9fa67e660ac87_prof);

        
        $__internal_23ed9abc00b5cda28666bc85e1178b635f5c73dce5f4b63c49b4cdfa50f00879->leave($__internal_23ed9abc00b5cda28666bc85e1178b635f5c73dce5f4b63c49b4cdfa50f00879_prof);

    }

    // line 76
    public function block_body($context, array $blocks = array())
    {
        $__internal_a96a80dc39a85bd031964f8cef59f7cea91b6f2f593acd14d7ecd92328402847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a96a80dc39a85bd031964f8cef59f7cea91b6f2f593acd14d7ecd92328402847->enter($__internal_a96a80dc39a85bd031964f8cef59f7cea91b6f2f593acd14d7ecd92328402847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ff708de85744ccd1d4a8a20b53f254997118c8a72201660cb7ae45768244490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff708de85744ccd1d4a8a20b53f254997118c8a72201660cb7ae45768244490->enter($__internal_1ff708de85744ccd1d4a8a20b53f254997118c8a72201660cb7ae45768244490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1ff708de85744ccd1d4a8a20b53f254997118c8a72201660cb7ae45768244490->leave($__internal_1ff708de85744ccd1d4a8a20b53f254997118c8a72201660cb7ae45768244490_prof);

        
        $__internal_a96a80dc39a85bd031964f8cef59f7cea91b6f2f593acd14d7ecd92328402847->leave($__internal_a96a80dc39a85bd031964f8cef59f7cea91b6f2f593acd14d7ecd92328402847_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e2e5da6ce63fb43fa9a49a035bc510e2a494d32d55491982f86fc4f52f9a0d81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2e5da6ce63fb43fa9a49a035bc510e2a494d32d55491982f86fc4f52f9a0d81->enter($__internal_e2e5da6ce63fb43fa9a49a035bc510e2a494d32d55491982f86fc4f52f9a0d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9ec9eb6bc8b7640c307bb01f089368d58f4867164376632939c2d28ace278724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ec9eb6bc8b7640c307bb01f089368d58f4867164376632939c2d28ace278724->enter($__internal_9ec9eb6bc8b7640c307bb01f089368d58f4867164376632939c2d28ace278724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9ec9eb6bc8b7640c307bb01f089368d58f4867164376632939c2d28ace278724->leave($__internal_9ec9eb6bc8b7640c307bb01f089368d58f4867164376632939c2d28ace278724_prof);

        
        $__internal_e2e5da6ce63fb43fa9a49a035bc510e2a494d32d55491982f86fc4f52f9a0d81->leave($__internal_e2e5da6ce63fb43fa9a49a035bc510e2a494d32d55491982f86fc4f52f9a0d81_prof);

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
