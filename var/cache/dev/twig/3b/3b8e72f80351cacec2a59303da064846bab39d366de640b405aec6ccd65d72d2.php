<?php

/* FrontBundle::layout.html.twig */
class __TwigTemplate_5c5174aa9b340b611946e4d94963af72527860762369d9e19bbbc20ce03889ab extends Twig_Template
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
        $__internal_397a0c861d38e7fed15b62b97a26b74cfaf4aeec857aeabf3ae7ae05ba183947 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_397a0c861d38e7fed15b62b97a26b74cfaf4aeec857aeabf3ae7ae05ba183947->enter($__internal_397a0c861d38e7fed15b62b97a26b74cfaf4aeec857aeabf3ae7ae05ba183947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        $__internal_8f8c3c9296e86a077068db7c7b7356fa6bed82438d0e16fe954b4791d4d2d0db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f8c3c9296e86a077068db7c7b7356fa6bed82438d0e16fe954b4791d4d2d0db->enter($__internal_8f8c3c9296e86a077068db7c7b7356fa6bed82438d0e16fe954b4791d4d2d0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
      <meta charset=\"UTF-8\" />
      <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/addDeliveryListQuickButton.png"), "html", null, true);
        echo "\"/></a>
        </li>
        <li>
          <a href=\"\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/displayColorQuickButton.png"), "html", null, true);
        echo "\"/></a>
        </li>
      </ol>

    </nav>
    ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/scripts/secondaryMenu.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>
";
        
        $__internal_397a0c861d38e7fed15b62b97a26b74cfaf4aeec857aeabf3ae7ae05ba183947->leave($__internal_397a0c861d38e7fed15b62b97a26b74cfaf4aeec857aeabf3ae7ae05ba183947_prof);

        
        $__internal_8f8c3c9296e86a077068db7c7b7356fa6bed82438d0e16fe954b4791d4d2d0db->leave($__internal_8f8c3c9296e86a077068db7c7b7356fa6bed82438d0e16fe954b4791d4d2d0db_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_67fcdd869d945b16c66c167a0170725d0c81733dc1cc30cead0e7bdaa9f787f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67fcdd869d945b16c66c167a0170725d0c81733dc1cc30cead0e7bdaa9f787f4->enter($__internal_67fcdd869d945b16c66c167a0170725d0c81733dc1cc30cead0e7bdaa9f787f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1035b08961965de66fe5e0e5dc4a1ef4656c5f2702ab6cd854bf779c1e388d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1035b08961965de66fe5e0e5dc4a1ef4656c5f2702ab6cd854bf779c1e388d8f->enter($__internal_1035b08961965de66fe5e0e5dc4a1ef4656c5f2702ab6cd854bf779c1e388d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1035b08961965de66fe5e0e5dc4a1ef4656c5f2702ab6cd854bf779c1e388d8f->leave($__internal_1035b08961965de66fe5e0e5dc4a1ef4656c5f2702ab6cd854bf779c1e388d8f_prof);

        
        $__internal_67fcdd869d945b16c66c167a0170725d0c81733dc1cc30cead0e7bdaa9f787f4->leave($__internal_67fcdd869d945b16c66c167a0170725d0c81733dc1cc30cead0e7bdaa9f787f4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1282b51929b4ea3a6c86f27de8af46c0eae458fed96c959fa2826cfb38ae66d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1282b51929b4ea3a6c86f27de8af46c0eae458fed96c959fa2826cfb38ae66d0->enter($__internal_1282b51929b4ea3a6c86f27de8af46c0eae458fed96c959fa2826cfb38ae66d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_28c01c9783aaeddd8e71f39eb199bb019665636f670c2bd6c6c1bd314a21ae13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c01c9783aaeddd8e71f39eb199bb019665636f670c2bd6c6c1bd314a21ae13->enter($__internal_28c01c9783aaeddd8e71f39eb199bb019665636f670c2bd6c6c1bd314a21ae13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_28c01c9783aaeddd8e71f39eb199bb019665636f670c2bd6c6c1bd314a21ae13->leave($__internal_28c01c9783aaeddd8e71f39eb199bb019665636f670c2bd6c6c1bd314a21ae13_prof);

        
        $__internal_1282b51929b4ea3a6c86f27de8af46c0eae458fed96c959fa2826cfb38ae66d0->leave($__internal_1282b51929b4ea3a6c86f27de8af46c0eae458fed96c959fa2826cfb38ae66d0_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b139b146b2bdc2200c69c274c466c1913f7a289148657514e21948fb9d1ff7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b139b146b2bdc2200c69c274c466c1913f7a289148657514e21948fb9d1ff7d->enter($__internal_3b139b146b2bdc2200c69c274c466c1913f7a289148657514e21948fb9d1ff7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4694b93fc2506cda6e413441797499a593e43a59c349407fd7f16b79098cf0fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4694b93fc2506cda6e413441797499a593e43a59c349407fd7f16b79098cf0fe->enter($__internal_4694b93fc2506cda6e413441797499a593e43a59c349407fd7f16b79098cf0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4694b93fc2506cda6e413441797499a593e43a59c349407fd7f16b79098cf0fe->leave($__internal_4694b93fc2506cda6e413441797499a593e43a59c349407fd7f16b79098cf0fe_prof);

        
        $__internal_3b139b146b2bdc2200c69c274c466c1913f7a289148657514e21948fb9d1ff7d->leave($__internal_3b139b146b2bdc2200c69c274c466c1913f7a289148657514e21948fb9d1ff7d_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f8a613e82a39c9da2e0f1d9d1e80e1c108102ce73b5866e3b89028bf4b5b4b72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8a613e82a39c9da2e0f1d9d1e80e1c108102ce73b5866e3b89028bf4b5b4b72->enter($__internal_f8a613e82a39c9da2e0f1d9d1e80e1c108102ce73b5866e3b89028bf4b5b4b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3c2d037f7782a0f80ff82dcbd7b71c1c58f89c7b3c22cc7100dce5b3df9bffd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c2d037f7782a0f80ff82dcbd7b71c1c58f89c7b3c22cc7100dce5b3df9bffd2->enter($__internal_3c2d037f7782a0f80ff82dcbd7b71c1c58f89c7b3c22cc7100dce5b3df9bffd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3c2d037f7782a0f80ff82dcbd7b71c1c58f89c7b3c22cc7100dce5b3df9bffd2->leave($__internal_3c2d037f7782a0f80ff82dcbd7b71c1c58f89c7b3c22cc7100dce5b3df9bffd2_prof);

        
        $__internal_f8a613e82a39c9da2e0f1d9d1e80e1c108102ce73b5866e3b89028bf4b5b4b72->leave($__internal_f8a613e82a39c9da2e0f1d9d1e80e1c108102ce73b5866e3b89028bf4b5b4b72_prof);

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
        return array (  167 => 34,  150 => 33,  133 => 6,  115 => 5,  100 => 35,  97 => 34,  95 => 33,  87 => 28,  81 => 25,  75 => 22,  69 => 19,  63 => 16,  56 => 12,  52 => 11,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
      <title>{% block title %}Welcome!{% endblock %}</title>
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
          <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/addDeliveryListQuickButton.png\") }}\"/></a>
        </li>
        <li>
          <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/displayColorQuickButton.png\") }}\"/></a>
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
