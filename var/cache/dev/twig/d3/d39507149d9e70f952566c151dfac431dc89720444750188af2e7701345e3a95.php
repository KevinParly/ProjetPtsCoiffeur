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
        $__internal_1901adb56897589cc9ce514a5e94bb232b6fbdc3e63316fc4652e6d1b42a1dc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1901adb56897589cc9ce514a5e94bb232b6fbdc3e63316fc4652e6d1b42a1dc6->enter($__internal_1901adb56897589cc9ce514a5e94bb232b6fbdc3e63316fc4652e6d1b42a1dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        $__internal_2290f644a699eabaa43c2a42e4ccda3ef17360b7fdf518be79df39b29b7e1304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2290f644a699eabaa43c2a42e4ccda3ef17360b7fdf518be79df39b29b7e1304->enter($__internal_2290f644a699eabaa43c2a42e4ccda3ef17360b7fdf518be79df39b29b7e1304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

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
            <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listproduitmodif");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/changeProductQuickButton.png"), "html", null, true);
        echo "\"/></a>
            <p class=\"quickButtonTitle\">Modifier un produit</p>
            <p class=\"buttonSummary\">Modifiez un produit parmis ceux présents dans liste</p>
          </li>
          <li>
            <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeproduit");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/displayProductListQuickButton.png"), "html", null, true);
        echo "\"/></a>
            <p class=\"quickButtonTitle\">Lister les stocks</p>
            <p class=\"buttonSummary\">Affichez la liste des produits dans les stocks</p>
          </li>
          <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutlivraison");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/addDeliveryQuickButton.png"), "html", null, true);
        echo "\"/></a>
            <p class=\"quickButtonTitle\">Ajouter une livraison</p>
            <p class=\"buttonSummary\">Ajoutez une nouvelle livraison</p>
          </li>
          <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listecouleur");
        echo "\"><img src=\"";
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
        
        $__internal_1901adb56897589cc9ce514a5e94bb232b6fbdc3e63316fc4652e6d1b42a1dc6->leave($__internal_1901adb56897589cc9ce514a5e94bb232b6fbdc3e63316fc4652e6d1b42a1dc6_prof);

        
        $__internal_2290f644a699eabaa43c2a42e4ccda3ef17360b7fdf518be79df39b29b7e1304->leave($__internal_2290f644a699eabaa43c2a42e4ccda3ef17360b7fdf518be79df39b29b7e1304_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eec2b8ab915d98faf3436aaddb0a113c85c8a550de2600a1944a7001df98967c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eec2b8ab915d98faf3436aaddb0a113c85c8a550de2600a1944a7001df98967c->enter($__internal_eec2b8ab915d98faf3436aaddb0a113c85c8a550de2600a1944a7001df98967c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_58c88aa96a5d982ef6457d4b026f0fabbed85db73f674b0ce295aaacf5f6caeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c88aa96a5d982ef6457d4b026f0fabbed85db73f674b0ce295aaacf5f6caeb->enter($__internal_58c88aa96a5d982ef6457d4b026f0fabbed85db73f674b0ce295aaacf5f6caeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_58c88aa96a5d982ef6457d4b026f0fabbed85db73f674b0ce295aaacf5f6caeb->leave($__internal_58c88aa96a5d982ef6457d4b026f0fabbed85db73f674b0ce295aaacf5f6caeb_prof);

        
        $__internal_eec2b8ab915d98faf3436aaddb0a113c85c8a550de2600a1944a7001df98967c->leave($__internal_eec2b8ab915d98faf3436aaddb0a113c85c8a550de2600a1944a7001df98967c_prof);

    }

    // line 87
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5509a74c3f7379fddfa7c001ed08dc17ea7bb87783b26ec34048916b68fb2cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5509a74c3f7379fddfa7c001ed08dc17ea7bb87783b26ec34048916b68fb2cd->enter($__internal_b5509a74c3f7379fddfa7c001ed08dc17ea7bb87783b26ec34048916b68fb2cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9449228149017bd3b8103eab0fd6e1e0730eac1342c26f6f4ece662e2d480a7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9449228149017bd3b8103eab0fd6e1e0730eac1342c26f6f4ece662e2d480a7b->enter($__internal_9449228149017bd3b8103eab0fd6e1e0730eac1342c26f6f4ece662e2d480a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9449228149017bd3b8103eab0fd6e1e0730eac1342c26f6f4ece662e2d480a7b->leave($__internal_9449228149017bd3b8103eab0fd6e1e0730eac1342c26f6f4ece662e2d480a7b_prof);

        
        $__internal_b5509a74c3f7379fddfa7c001ed08dc17ea7bb87783b26ec34048916b68fb2cd->leave($__internal_b5509a74c3f7379fddfa7c001ed08dc17ea7bb87783b26ec34048916b68fb2cd_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5f02631a6eb3a4ed6ba301903863a85cedf7d62f1d5d0df1fee648cbdd724a49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f02631a6eb3a4ed6ba301903863a85cedf7d62f1d5d0df1fee648cbdd724a49->enter($__internal_5f02631a6eb3a4ed6ba301903863a85cedf7d62f1d5d0df1fee648cbdd724a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e14d8a446145f6909db76f95e994eee7aa0227bd67e11e60115d2ba8297c8899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e14d8a446145f6909db76f95e994eee7aa0227bd67e11e60115d2ba8297c8899->enter($__internal_e14d8a446145f6909db76f95e994eee7aa0227bd67e11e60115d2ba8297c8899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e14d8a446145f6909db76f95e994eee7aa0227bd67e11e60115d2ba8297c8899->leave($__internal_e14d8a446145f6909db76f95e994eee7aa0227bd67e11e60115d2ba8297c8899_prof);

        
        $__internal_5f02631a6eb3a4ed6ba301903863a85cedf7d62f1d5d0df1fee648cbdd724a49->leave($__internal_5f02631a6eb3a4ed6ba301903863a85cedf7d62f1d5d0df1fee648cbdd724a49_prof);

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
        return array (  227 => 88,  210 => 87,  193 => 6,  178 => 89,  175 => 88,  173 => 87,  163 => 80,  155 => 75,  147 => 70,  133 => 59,  125 => 54,  117 => 49,  101 => 38,  91 => 33,  81 => 28,  71 => 23,  61 => 18,  52 => 12,  48 => 11,  42 => 8,  37 => 7,  35 => 6,  28 => 1,);
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
            <a href=\"{{ path('listproduitmodif') }}\"><img src=\"{{ asset(\"bundles/front/images/changeProductQuickButton.png\") }}\"/></a>
            <p class=\"quickButtonTitle\">Modifier un produit</p>
            <p class=\"buttonSummary\">Modifiez un produit parmis ceux présents dans liste</p>
          </li>
          <li>
            <a href=\"{{ path('listeproduit') }}\"><img src=\"{{ asset(\"bundles/front/images/displayProductListQuickButton.png\") }}\"/></a>
            <p class=\"quickButtonTitle\">Lister les stocks</p>
            <p class=\"buttonSummary\">Affichez la liste des produits dans les stocks</p>
          </li>
          <li>
            <a href=\"{{ path('ajoutlivraison') }}\"><img src=\"{{ asset(\"bundles/front/images/addDeliveryQuickButton.png\") }}\"/></a>
            <p class=\"quickButtonTitle\">Ajouter une livraison</p>
            <p class=\"buttonSummary\">Ajoutez une nouvelle livraison</p>
          </li>
          <li>
            <a href=\"{{ path('listecouleur') }}\"><img src=\"{{ asset(\"bundles/front/images/displayColorListQuickButton.png\") }}\"/></a>
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
