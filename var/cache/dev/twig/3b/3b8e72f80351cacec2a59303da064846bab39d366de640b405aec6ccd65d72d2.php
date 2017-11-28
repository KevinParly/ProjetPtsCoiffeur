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
        $__internal_2f644c3c20ea560ba9b2a70e2bbfcb722623c34a8c675c3d8ef13c29edd450e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f644c3c20ea560ba9b2a70e2bbfcb722623c34a8c675c3d8ef13c29edd450e8->enter($__internal_2f644c3c20ea560ba9b2a70e2bbfcb722623c34a8c675c3d8ef13c29edd450e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        $__internal_7fdebe3734dd65dac8ae3d6a05dac818aacfed258699b500100f9fb23710ddb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fdebe3734dd65dac8ae3d6a05dac818aacfed258699b500100f9fb23710ddb0->enter($__internal_7fdebe3734dd65dac8ae3d6a05dac818aacfed258699b500100f9fb23710ddb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

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
      <ol class=\"quickMenu\">
        <li>
          <a href=\"\"><img src=\"";
        // line 16
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

      <ol class=\"quickMenu\">
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
        
        $__internal_2f644c3c20ea560ba9b2a70e2bbfcb722623c34a8c675c3d8ef13c29edd450e8->leave($__internal_2f644c3c20ea560ba9b2a70e2bbfcb722623c34a8c675c3d8ef13c29edd450e8_prof);

        
        $__internal_7fdebe3734dd65dac8ae3d6a05dac818aacfed258699b500100f9fb23710ddb0->leave($__internal_7fdebe3734dd65dac8ae3d6a05dac818aacfed258699b500100f9fb23710ddb0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2ee289a32263981d8bd5882d00e02a9ed752e3ea6978715579e4ce4e21e9129e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ee289a32263981d8bd5882d00e02a9ed752e3ea6978715579e4ce4e21e9129e->enter($__internal_2ee289a32263981d8bd5882d00e02a9ed752e3ea6978715579e4ce4e21e9129e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2c89cbed2d49c49cb5621fa06a96f140fdd967a2a0a35de3e3aee782b2576436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c89cbed2d49c49cb5621fa06a96f140fdd967a2a0a35de3e3aee782b2576436->enter($__internal_2c89cbed2d49c49cb5621fa06a96f140fdd967a2a0a35de3e3aee782b2576436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2c89cbed2d49c49cb5621fa06a96f140fdd967a2a0a35de3e3aee782b2576436->leave($__internal_2c89cbed2d49c49cb5621fa06a96f140fdd967a2a0a35de3e3aee782b2576436_prof);

        
        $__internal_2ee289a32263981d8bd5882d00e02a9ed752e3ea6978715579e4ce4e21e9129e->leave($__internal_2ee289a32263981d8bd5882d00e02a9ed752e3ea6978715579e4ce4e21e9129e_prof);

    }

    // line 67
    public function block_body($context, array $blocks = array())
    {
        $__internal_169066f9bdcc2e23a50725b15c1d068058185a667a6a22d6954e8585fc2a281c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_169066f9bdcc2e23a50725b15c1d068058185a667a6a22d6954e8585fc2a281c->enter($__internal_169066f9bdcc2e23a50725b15c1d068058185a667a6a22d6954e8585fc2a281c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fe6bf21afa92c9007c07b90777ea23f7c1cb20e6bc862ea43c48d134200280e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe6bf21afa92c9007c07b90777ea23f7c1cb20e6bc862ea43c48d134200280e9->enter($__internal_fe6bf21afa92c9007c07b90777ea23f7c1cb20e6bc862ea43c48d134200280e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fe6bf21afa92c9007c07b90777ea23f7c1cb20e6bc862ea43c48d134200280e9->leave($__internal_fe6bf21afa92c9007c07b90777ea23f7c1cb20e6bc862ea43c48d134200280e9_prof);

        
        $__internal_169066f9bdcc2e23a50725b15c1d068058185a667a6a22d6954e8585fc2a281c->leave($__internal_169066f9bdcc2e23a50725b15c1d068058185a667a6a22d6954e8585fc2a281c_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6c1eef3a0fb5f972f55acce4830f421b0a43818827900825562f45c1f2353a0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c1eef3a0fb5f972f55acce4830f421b0a43818827900825562f45c1f2353a0b->enter($__internal_6c1eef3a0fb5f972f55acce4830f421b0a43818827900825562f45c1f2353a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bbbf29b64eb2fb61467aedd1cb853323df85b00ba7d99a50e29d49f50fb6ecba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbbf29b64eb2fb61467aedd1cb853323df85b00ba7d99a50e29d49f50fb6ecba->enter($__internal_bbbf29b64eb2fb61467aedd1cb853323df85b00ba7d99a50e29d49f50fb6ecba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bbbf29b64eb2fb61467aedd1cb853323df85b00ba7d99a50e29d49f50fb6ecba->leave($__internal_bbbf29b64eb2fb61467aedd1cb853323df85b00ba7d99a50e29d49f50fb6ecba_prof);

        
        $__internal_6c1eef3a0fb5f972f55acce4830f421b0a43818827900825562f45c1f2353a0b->leave($__internal_6c1eef3a0fb5f972f55acce4830f421b0a43818827900825562f45c1f2353a0b_prof);

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
        return array (  197 => 68,  180 => 67,  163 => 6,  148 => 69,  145 => 68,  143 => 67,  135 => 62,  128 => 58,  121 => 54,  111 => 47,  104 => 43,  97 => 39,  87 => 32,  80 => 28,  73 => 24,  66 => 20,  59 => 16,  52 => 12,  48 => 11,  42 => 8,  37 => 7,  35 => 6,  28 => 1,);
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
      <ol class=\"quickMenu\">
        <li>
          <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/addProductQuickButton.png\") }}\"/></a>
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

      <ol class=\"quickMenu\">
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
