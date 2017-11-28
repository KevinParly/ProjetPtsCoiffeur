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
        $__internal_9c06b253e63ac6015d529145b9b517917f86ca55566390d8996304dbe7630118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c06b253e63ac6015d529145b9b517917f86ca55566390d8996304dbe7630118->enter($__internal_9c06b253e63ac6015d529145b9b517917f86ca55566390d8996304dbe7630118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        $__internal_39eed7231987552e43a3288c8dc963abe904f23c3c8b88dcfc7776a0d2bf62a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39eed7231987552e43a3288c8dc963abe904f23c3c8b88dcfc7776a0d2bf62a9->enter($__internal_39eed7231987552e43a3288c8dc963abe904f23c3c8b88dcfc7776a0d2bf62a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

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
        </li>
        <li>
          <a href=\"\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/changeProductQuickButton.png"), "html", null, true);
        echo "\"/></a>
        </li>
        <li>
          <a href=\"\"><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/displayProductListQuickButton.png"), "html", null, true);
        echo "\"/></a>
        </li>
        <li>
          <a href=\"\"><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/addDeliveryQuickButton.png"), "html", null, true);
        echo "\"/></a>
        </li>
        <li>
          <a href=\"\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/displayColorListQuickButton.png"), "html", null, true);
        echo "\"/></a>
        </li>
      </ol>

      <ol class=\"quickMenu\">
        <li>
          <a href=\"\"><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/addClientQuickButton.png"), "html", null, true);
        echo "\"/></a>
        </li>
        <li>
          <a href=\"\"><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/changeClientQuickButton.png"), "html", null, true);
        echo "\"/></a>
        </li>
        <li>
          <a href=\"\"><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/displayClientListQuickButton.png"), "html", null, true);
        echo "\"/></a>
        </li>
      </ol>

      <ol class=\"quickMenu\">
        <li>
          <a href=\"\"><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/addClientQuickButton.png"), "html", null, true);
        echo "\"/></a>
        </li>
        <li>
          <a href=\"\"><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/changeClientQuickButton.png"), "html", null, true);
        echo "\"/></a>
        </li>
        <li>
          <a href=\"\"><img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/displayClientListQuickButton.png"), "html", null, true);
        echo "\"/></a>
        </li>
      </ol>
    </nav>
    ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/scripts/secondaryMenu.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>
";
        
        $__internal_9c06b253e63ac6015d529145b9b517917f86ca55566390d8996304dbe7630118->leave($__internal_9c06b253e63ac6015d529145b9b517917f86ca55566390d8996304dbe7630118_prof);

        
        $__internal_39eed7231987552e43a3288c8dc963abe904f23c3c8b88dcfc7776a0d2bf62a9->leave($__internal_39eed7231987552e43a3288c8dc963abe904f23c3c8b88dcfc7776a0d2bf62a9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_11669ca2888ef79b4d84216b935c43171275cec59a97ed748c63261b94edf0e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11669ca2888ef79b4d84216b935c43171275cec59a97ed748c63261b94edf0e6->enter($__internal_11669ca2888ef79b4d84216b935c43171275cec59a97ed748c63261b94edf0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_80a0510a7c756d559a51b1e9cc3295b64e0a4fbcaa31309b46ef36837b31e080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80a0510a7c756d559a51b1e9cc3295b64e0a4fbcaa31309b46ef36837b31e080->enter($__internal_80a0510a7c756d559a51b1e9cc3295b64e0a4fbcaa31309b46ef36837b31e080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_80a0510a7c756d559a51b1e9cc3295b64e0a4fbcaa31309b46ef36837b31e080->leave($__internal_80a0510a7c756d559a51b1e9cc3295b64e0a4fbcaa31309b46ef36837b31e080_prof);

        
        $__internal_11669ca2888ef79b4d84216b935c43171275cec59a97ed748c63261b94edf0e6->leave($__internal_11669ca2888ef79b4d84216b935c43171275cec59a97ed748c63261b94edf0e6_prof);

    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        $__internal_c637a6e06eb280d3e44420c0a21193ee40b6e45c06473468abf4bb9e813ab82d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c637a6e06eb280d3e44420c0a21193ee40b6e45c06473468abf4bb9e813ab82d->enter($__internal_c637a6e06eb280d3e44420c0a21193ee40b6e45c06473468abf4bb9e813ab82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_67b2ab25ecc2bbcd141d4d8cc282189e831fcd9e21658d45ff0c5f4c8b8875b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67b2ab25ecc2bbcd141d4d8cc282189e831fcd9e21658d45ff0c5f4c8b8875b4->enter($__internal_67b2ab25ecc2bbcd141d4d8cc282189e831fcd9e21658d45ff0c5f4c8b8875b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_67b2ab25ecc2bbcd141d4d8cc282189e831fcd9e21658d45ff0c5f4c8b8875b4->leave($__internal_67b2ab25ecc2bbcd141d4d8cc282189e831fcd9e21658d45ff0c5f4c8b8875b4_prof);

        
        $__internal_c637a6e06eb280d3e44420c0a21193ee40b6e45c06473468abf4bb9e813ab82d->leave($__internal_c637a6e06eb280d3e44420c0a21193ee40b6e45c06473468abf4bb9e813ab82d_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ee791c96b36fb6baddf4f7fd6362536a2b54cda2530a275a0fbf95289ecb9d9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee791c96b36fb6baddf4f7fd6362536a2b54cda2530a275a0fbf95289ecb9d9a->enter($__internal_ee791c96b36fb6baddf4f7fd6362536a2b54cda2530a275a0fbf95289ecb9d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6aab1001cfad76ceeeb7cad952054780a361c7d5c0433ea7453aa0ba21a1d656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aab1001cfad76ceeeb7cad952054780a361c7d5c0433ea7453aa0ba21a1d656->enter($__internal_6aab1001cfad76ceeeb7cad952054780a361c7d5c0433ea7453aa0ba21a1d656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6aab1001cfad76ceeeb7cad952054780a361c7d5c0433ea7453aa0ba21a1d656->leave($__internal_6aab1001cfad76ceeeb7cad952054780a361c7d5c0433ea7453aa0ba21a1d656_prof);

        
        $__internal_ee791c96b36fb6baddf4f7fd6362536a2b54cda2530a275a0fbf95289ecb9d9a->leave($__internal_ee791c96b36fb6baddf4f7fd6362536a2b54cda2530a275a0fbf95289ecb9d9a_prof);

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
        return array (  186 => 57,  169 => 56,  152 => 6,  137 => 58,  134 => 57,  132 => 56,  125 => 52,  119 => 49,  113 => 46,  104 => 40,  98 => 37,  92 => 34,  83 => 28,  77 => 25,  71 => 22,  65 => 19,  59 => 16,  52 => 12,  48 => 11,  42 => 8,  37 => 7,  35 => 6,  28 => 1,);
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
        </li>
        <li>
          <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/changeProductQuickButton.png\") }}\"/></a>
        </li>
        <li>
          <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/displayProductListQuickButton.png\") }}\"/></a>
        </li>
        <li>
          <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/addDeliveryQuickButton.png\") }}\"/></a>
        </li>
        <li>
          <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/displayColorListQuickButton.png\") }}\"/></a>
        </li>
      </ol>

      <ol class=\"quickMenu\">
        <li>
          <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/addClientQuickButton.png\") }}\"/></a>
        </li>
        <li>
          <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/changeClientQuickButton.png\") }}\"/></a>
        </li>
        <li>
          <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/displayClientListQuickButton.png\") }}\"/></a>
        </li>
      </ol>

      <ol class=\"quickMenu\">
        <li>
          <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/addClientQuickButton.png\") }}\"/></a>
        </li>
        <li>
          <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/changeClientQuickButton.png\") }}\"/></a>
        </li>
        <li>
          <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/displayClientListQuickButton.png\") }}\"/></a>
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
