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
        $__internal_917165627224c760f80e5e34e4307e0742033b1d959ac519d8c52980d794a711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_917165627224c760f80e5e34e4307e0742033b1d959ac519d8c52980d794a711->enter($__internal_917165627224c760f80e5e34e4307e0742033b1d959ac519d8c52980d794a711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        $__internal_20d7faaded3d370719276576e5b88f9c301a443ccca055ef34bf4bb0d448840a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20d7faaded3d370719276576e5b88f9c301a443ccca055ef34bf4bb0d448840a->enter($__internal_20d7faaded3d370719276576e5b88f9c301a443ccca055ef34bf4bb0d448840a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/addBillQuickButton.png"), "html", null, true);
        echo "\"/></a>
        </li>
        <li>
          <a href=\"\"><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/displayBillListQuickButton.png"), "html", null, true);
        echo "\"/></a>
        </li>
        <li>
          <a href=\"\"><img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/printBillQuickButton.png"), "html", null, true);
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
        
        $__internal_917165627224c760f80e5e34e4307e0742033b1d959ac519d8c52980d794a711->leave($__internal_917165627224c760f80e5e34e4307e0742033b1d959ac519d8c52980d794a711_prof);

        
        $__internal_20d7faaded3d370719276576e5b88f9c301a443ccca055ef34bf4bb0d448840a->leave($__internal_20d7faaded3d370719276576e5b88f9c301a443ccca055ef34bf4bb0d448840a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1afb09ab2a8ad4b282c6b55fcd9ce6ecc445e013acb693b6e8ca11f9bf2fe611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1afb09ab2a8ad4b282c6b55fcd9ce6ecc445e013acb693b6e8ca11f9bf2fe611->enter($__internal_1afb09ab2a8ad4b282c6b55fcd9ce6ecc445e013acb693b6e8ca11f9bf2fe611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_efdb6b127070bd2ae2cb92f05e5e61bef6960da9c74dd923edb08ecf244a4a0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efdb6b127070bd2ae2cb92f05e5e61bef6960da9c74dd923edb08ecf244a4a0c->enter($__internal_efdb6b127070bd2ae2cb92f05e5e61bef6960da9c74dd923edb08ecf244a4a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_efdb6b127070bd2ae2cb92f05e5e61bef6960da9c74dd923edb08ecf244a4a0c->leave($__internal_efdb6b127070bd2ae2cb92f05e5e61bef6960da9c74dd923edb08ecf244a4a0c_prof);

        
        $__internal_1afb09ab2a8ad4b282c6b55fcd9ce6ecc445e013acb693b6e8ca11f9bf2fe611->leave($__internal_1afb09ab2a8ad4b282c6b55fcd9ce6ecc445e013acb693b6e8ca11f9bf2fe611_prof);

    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b198dde4f8d705132b5cc5e5de072567185d2417b9a4a751c81911b35538e1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b198dde4f8d705132b5cc5e5de072567185d2417b9a4a751c81911b35538e1a->enter($__internal_9b198dde4f8d705132b5cc5e5de072567185d2417b9a4a751c81911b35538e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9bd06a65e12d0b4cce986f15d48b7e07194aa7df55535c4360c19510589c2429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bd06a65e12d0b4cce986f15d48b7e07194aa7df55535c4360c19510589c2429->enter($__internal_9bd06a65e12d0b4cce986f15d48b7e07194aa7df55535c4360c19510589c2429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9bd06a65e12d0b4cce986f15d48b7e07194aa7df55535c4360c19510589c2429->leave($__internal_9bd06a65e12d0b4cce986f15d48b7e07194aa7df55535c4360c19510589c2429_prof);

        
        $__internal_9b198dde4f8d705132b5cc5e5de072567185d2417b9a4a751c81911b35538e1a->leave($__internal_9b198dde4f8d705132b5cc5e5de072567185d2417b9a4a751c81911b35538e1a_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_592834a317990f4abe114b50a34c28512d1b067d7e2eec9a8101d55ddfc9a696 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_592834a317990f4abe114b50a34c28512d1b067d7e2eec9a8101d55ddfc9a696->enter($__internal_592834a317990f4abe114b50a34c28512d1b067d7e2eec9a8101d55ddfc9a696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_73782d7a4847f91ec9664476ba97264e5bfdf1d67181befd90e6e26e27f4ca48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73782d7a4847f91ec9664476ba97264e5bfdf1d67181befd90e6e26e27f4ca48->enter($__internal_73782d7a4847f91ec9664476ba97264e5bfdf1d67181befd90e6e26e27f4ca48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_73782d7a4847f91ec9664476ba97264e5bfdf1d67181befd90e6e26e27f4ca48->leave($__internal_73782d7a4847f91ec9664476ba97264e5bfdf1d67181befd90e6e26e27f4ca48_prof);

        
        $__internal_592834a317990f4abe114b50a34c28512d1b067d7e2eec9a8101d55ddfc9a696->leave($__internal_592834a317990f4abe114b50a34c28512d1b067d7e2eec9a8101d55ddfc9a696_prof);

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
          <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/addBillQuickButton.png\") }}\"/></a>
        </li>
        <li>
          <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/displayBillListQuickButton.png\") }}\"/></a>
        </li>
        <li>
          <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/printBillQuickButton.png\") }}\"/></a>
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
