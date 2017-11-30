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
        $__internal_524e32f6ecd5750e65de227ef7cfd231973d4f861d95f47aaab1d003cf8a63da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_524e32f6ecd5750e65de227ef7cfd231973d4f861d95f47aaab1d003cf8a63da->enter($__internal_524e32f6ecd5750e65de227ef7cfd231973d4f861d95f47aaab1d003cf8a63da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        $__internal_b83a69b213dcec7dcd5ecf9cea46d7e5912e7521134941e9ca65c136c63861e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b83a69b213dcec7dcd5ecf9cea46d7e5912e7521134941e9ca65c136c63861e5->enter($__internal_b83a69b213dcec7dcd5ecf9cea46d7e5912e7521134941e9ca65c136c63861e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
      <meta charset=\"UTF-8\" />
      <title>TITRE</title>
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
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
        
        $__internal_524e32f6ecd5750e65de227ef7cfd231973d4f861d95f47aaab1d003cf8a63da->leave($__internal_524e32f6ecd5750e65de227ef7cfd231973d4f861d95f47aaab1d003cf8a63da_prof);

        
        $__internal_b83a69b213dcec7dcd5ecf9cea46d7e5912e7521134941e9ca65c136c63861e5->leave($__internal_b83a69b213dcec7dcd5ecf9cea46d7e5912e7521134941e9ca65c136c63861e5_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f92381ba65de5b691d561fd330b89cad1035be347aa50c1df00916d44caec5eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f92381ba65de5b691d561fd330b89cad1035be347aa50c1df00916d44caec5eb->enter($__internal_f92381ba65de5b691d561fd330b89cad1035be347aa50c1df00916d44caec5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5c5383f3f116b0872bd3cd3094c3919e16b53d4366d58f11f5e4171a31b1b696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c5383f3f116b0872bd3cd3094c3919e16b53d4366d58f11f5e4171a31b1b696->enter($__internal_5c5383f3f116b0872bd3cd3094c3919e16b53d4366d58f11f5e4171a31b1b696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5c5383f3f116b0872bd3cd3094c3919e16b53d4366d58f11f5e4171a31b1b696->leave($__internal_5c5383f3f116b0872bd3cd3094c3919e16b53d4366d58f11f5e4171a31b1b696_prof);

        
        $__internal_f92381ba65de5b691d561fd330b89cad1035be347aa50c1df00916d44caec5eb->leave($__internal_f92381ba65de5b691d561fd330b89cad1035be347aa50c1df00916d44caec5eb_prof);

    }

    // line 76
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fa52f59f3d9e64edcfd5d7a27c5f2d08392e7171e8def99ae11e68199f724c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa52f59f3d9e64edcfd5d7a27c5f2d08392e7171e8def99ae11e68199f724c7->enter($__internal_1fa52f59f3d9e64edcfd5d7a27c5f2d08392e7171e8def99ae11e68199f724c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ca7038d7f21f96eaf50985cd8a6387416ed44add2cfca5761ea0b272f31f3c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca7038d7f21f96eaf50985cd8a6387416ed44add2cfca5761ea0b272f31f3c92->enter($__internal_ca7038d7f21f96eaf50985cd8a6387416ed44add2cfca5761ea0b272f31f3c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ca7038d7f21f96eaf50985cd8a6387416ed44add2cfca5761ea0b272f31f3c92->leave($__internal_ca7038d7f21f96eaf50985cd8a6387416ed44add2cfca5761ea0b272f31f3c92_prof);

        
        $__internal_1fa52f59f3d9e64edcfd5d7a27c5f2d08392e7171e8def99ae11e68199f724c7->leave($__internal_1fa52f59f3d9e64edcfd5d7a27c5f2d08392e7171e8def99ae11e68199f724c7_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3558ee6f77c7c70f36b313a20987b0a0e5263545e76ac0142cfcada2a5610b0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3558ee6f77c7c70f36b313a20987b0a0e5263545e76ac0142cfcada2a5610b0e->enter($__internal_3558ee6f77c7c70f36b313a20987b0a0e5263545e76ac0142cfcada2a5610b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2778c702de7776545c27d6e8d3dd5eed3a6cd53010b8a41b1cb17f2af3e3d773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2778c702de7776545c27d6e8d3dd5eed3a6cd53010b8a41b1cb17f2af3e3d773->enter($__internal_2778c702de7776545c27d6e8d3dd5eed3a6cd53010b8a41b1cb17f2af3e3d773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2778c702de7776545c27d6e8d3dd5eed3a6cd53010b8a41b1cb17f2af3e3d773->leave($__internal_2778c702de7776545c27d6e8d3dd5eed3a6cd53010b8a41b1cb17f2af3e3d773_prof);

        
        $__internal_3558ee6f77c7c70f36b313a20987b0a0e5263545e76ac0142cfcada2a5610b0e->leave($__internal_3558ee6f77c7c70f36b313a20987b0a0e5263545e76ac0142cfcada2a5610b0e_prof);

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
        return array (  216 => 77,  199 => 76,  182 => 7,  167 => 78,  164 => 77,  162 => 76,  153 => 70,  146 => 66,  139 => 62,  126 => 52,  119 => 48,  112 => 44,  97 => 34,  88 => 30,  79 => 26,  70 => 22,  61 => 18,  52 => 12,  48 => 11,  41 => 8,  39 => 7,  35 => 6,  28 => 1,);
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
", "FrontBundle::layout.html.twig", "D:\\wamp\\www\\ProjetPtsCoiffeur\\src\\FrontBundle/Resources/views/layout.html.twig");
    }
}
