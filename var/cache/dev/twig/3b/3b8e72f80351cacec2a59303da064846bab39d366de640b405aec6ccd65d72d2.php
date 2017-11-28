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
        $__internal_9df164927cba42971eba045d3c2c97e79eadf35054832f535ec5814ec5ff8d94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9df164927cba42971eba045d3c2c97e79eadf35054832f535ec5814ec5ff8d94->enter($__internal_9df164927cba42971eba045d3c2c97e79eadf35054832f535ec5814ec5ff8d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        $__internal_c1f4c23e648befa185952646dfc37fb6ebdb164ff2c23ab654c9f5abe418a96a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f4c23e648befa185952646dfc37fb6ebdb164ff2c23ab654c9f5abe418a96a->enter($__internal_c1f4c23e648befa185952646dfc37fb6ebdb164ff2c23ab654c9f5abe418a96a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

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
          <p>Ajouter un produit</p>
        </li>
        <li>
          <a href=\"\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/changeProductQuickButton.png"), "html", null, true);
        echo "\"/></a>
          <p>Modifier un produit</p>
        </li>
        <li>
          <a href=\"\"><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/displayProductListQuickButton.png"), "html", null, true);
        echo "\"/></a>
          <p>Lister les stocks</p>
        </li>
        <li>
          <a href=\"\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/addDeliveryQuickButton.png"), "html", null, true);
        echo "\"/></a>
          <p>Ajouter une livraison</p>
        </li>
        <li>
          <a href=\"\"><img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/displayColorListQuickButton.png"), "html", null, true);
        echo "\"/></a>
          <p>Lister les couleurs / permanentes</p>
        </li>
      </ol>

      <ol class=\"quickMenu\">
        <li>
          <a href=\"\"><img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/addClientQuickButton.png"), "html", null, true);
        echo "\"/></a>
          <p>Ajouter un client</p>
        </li>
        <li>
          <a href=\"\"><img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/changeClientQuickButton.png"), "html", null, true);
        echo "\"/></a>
          <p>Modifier un client</p>
        </li>
        <li>
          <a href=\"\"><img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/displayClientListQuickButton.png"), "html", null, true);
        echo "\"/></a>
          <p>Lister les clients</p>
        </li>
      </ol>

      <ol class=\"quickMenu lastQuickMenu\">
        <li>
          <a href=\"\"><img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/addBillQuickButton.png"), "html", null, true);
        echo "\"/></a>
          <p>Créer une facture</p>
        </li>
        <li>
          <a href=\"\"><img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/displayBillListQuickButton.png"), "html", null, true);
        echo "\"/></a>
          <p>Lister les factures</p>
        </li>
        <li>
          <a href=\"\"><img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/printBillQuickButton.png"), "html", null, true);
        echo "\"/></a>
          <p>Imprimer une facture</p>
        </li>
      </ol>
    </nav>
    ";
        // line 67
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/scripts/secondaryMenu.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>
";
        
        $__internal_9df164927cba42971eba045d3c2c97e79eadf35054832f535ec5814ec5ff8d94->leave($__internal_9df164927cba42971eba045d3c2c97e79eadf35054832f535ec5814ec5ff8d94_prof);

        
        $__internal_c1f4c23e648befa185952646dfc37fb6ebdb164ff2c23ab654c9f5abe418a96a->leave($__internal_c1f4c23e648befa185952646dfc37fb6ebdb164ff2c23ab654c9f5abe418a96a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aa3794a309af125f3deee3f2fa56c93f8fe76b57506b1c2978dd5539ae4482b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa3794a309af125f3deee3f2fa56c93f8fe76b57506b1c2978dd5539ae4482b5->enter($__internal_aa3794a309af125f3deee3f2fa56c93f8fe76b57506b1c2978dd5539ae4482b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_889ac0e8741778f5a77dd45a9d0c0279d4aefbc6f7a05ac0e0ef997114dbb0d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_889ac0e8741778f5a77dd45a9d0c0279d4aefbc6f7a05ac0e0ef997114dbb0d0->enter($__internal_889ac0e8741778f5a77dd45a9d0c0279d4aefbc6f7a05ac0e0ef997114dbb0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_889ac0e8741778f5a77dd45a9d0c0279d4aefbc6f7a05ac0e0ef997114dbb0d0->leave($__internal_889ac0e8741778f5a77dd45a9d0c0279d4aefbc6f7a05ac0e0ef997114dbb0d0_prof);

        
        $__internal_aa3794a309af125f3deee3f2fa56c93f8fe76b57506b1c2978dd5539ae4482b5->leave($__internal_aa3794a309af125f3deee3f2fa56c93f8fe76b57506b1c2978dd5539ae4482b5_prof);

    }

    // line 67
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b0e6de230301ee0c49c7ce861c42c151c3067f35e2555179ba414f4611863b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b0e6de230301ee0c49c7ce861c42c151c3067f35e2555179ba414f4611863b6->enter($__internal_2b0e6de230301ee0c49c7ce861c42c151c3067f35e2555179ba414f4611863b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db9cd1d36cc3408ba79d38432d2d17b0518e09d0c3864a0316d571851ef1730c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db9cd1d36cc3408ba79d38432d2d17b0518e09d0c3864a0316d571851ef1730c->enter($__internal_db9cd1d36cc3408ba79d38432d2d17b0518e09d0c3864a0316d571851ef1730c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_db9cd1d36cc3408ba79d38432d2d17b0518e09d0c3864a0316d571851ef1730c->leave($__internal_db9cd1d36cc3408ba79d38432d2d17b0518e09d0c3864a0316d571851ef1730c_prof);

        
        $__internal_2b0e6de230301ee0c49c7ce861c42c151c3067f35e2555179ba414f4611863b6->leave($__internal_2b0e6de230301ee0c49c7ce861c42c151c3067f35e2555179ba414f4611863b6_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_87d72f3a89c1fa0a9d24e4d81217dba1be5e50463ddfd395137f1affc8f1dc20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87d72f3a89c1fa0a9d24e4d81217dba1be5e50463ddfd395137f1affc8f1dc20->enter($__internal_87d72f3a89c1fa0a9d24e4d81217dba1be5e50463ddfd395137f1affc8f1dc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b20fa307a4a54e509e1e8f623324fc987795cee15b84c68ef3265a4601ac5f81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b20fa307a4a54e509e1e8f623324fc987795cee15b84c68ef3265a4601ac5f81->enter($__internal_b20fa307a4a54e509e1e8f623324fc987795cee15b84c68ef3265a4601ac5f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b20fa307a4a54e509e1e8f623324fc987795cee15b84c68ef3265a4601ac5f81->leave($__internal_b20fa307a4a54e509e1e8f623324fc987795cee15b84c68ef3265a4601ac5f81_prof);

        
        $__internal_87d72f3a89c1fa0a9d24e4d81217dba1be5e50463ddfd395137f1affc8f1dc20->leave($__internal_87d72f3a89c1fa0a9d24e4d81217dba1be5e50463ddfd395137f1affc8f1dc20_prof);

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
        return array (  199 => 68,  182 => 67,  165 => 6,  150 => 69,  147 => 68,  145 => 67,  137 => 62,  130 => 58,  123 => 54,  113 => 47,  106 => 43,  99 => 39,  89 => 32,  82 => 28,  75 => 24,  68 => 20,  59 => 16,  52 => 12,  48 => 11,  42 => 8,  37 => 7,  35 => 6,  28 => 1,);
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
          <p>Ajouter un produit</p>
        </li>
        <li>
          <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/changeProductQuickButton.png\") }}\"/></a>
          <p>Modifier un produit</p>
        </li>
        <li>
          <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/displayProductListQuickButton.png\") }}\"/></a>
          <p>Lister les stocks</p>
        </li>
        <li>
          <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/addDeliveryQuickButton.png\") }}\"/></a>
          <p>Ajouter une livraison</p>
        </li>
        <li>
          <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/displayColorListQuickButton.png\") }}\"/></a>
          <p>Lister les couleurs / permanentes</p>
        </li>
      </ol>

      <ol class=\"quickMenu\">
        <li>
          <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/addClientQuickButton.png\") }}\"/></a>
          <p>Ajouter un client</p>
        </li>
        <li>
          <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/changeClientQuickButton.png\") }}\"/></a>
          <p>Modifier un client</p>
        </li>
        <li>
          <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/displayClientListQuickButton.png\") }}\"/></a>
          <p>Lister les clients</p>
        </li>
      </ol>

      <ol class=\"quickMenu lastQuickMenu\">
        <li>
          <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/addBillQuickButton.png\") }}\"/></a>
          <p>Créer une facture</p>
        </li>
        <li>
          <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/displayBillListQuickButton.png\") }}\"/></a>
          <p>Lister les factures</p>
        </li>
        <li>
          <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/printBillQuickButton.png\") }}\"/></a>
          <p>Imprimer une facture</p>
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
