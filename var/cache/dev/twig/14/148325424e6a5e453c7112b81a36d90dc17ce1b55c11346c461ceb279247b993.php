<?php

/* FrontBundle::layout.html.twig */
class __TwigTemplate_a96fb1c48616a2f41cc7ca57b33655e38936e011e6c55623797a023cc313c45d extends Twig_Template
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
        $__internal_2e8c728125e1b84698ec4fdaefecc98c45f07c85bfd3d8c5f931b18f3ee5bf24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e8c728125e1b84698ec4fdaefecc98c45f07c85bfd3d8c5f931b18f3ee5bf24->enter($__internal_2e8c728125e1b84698ec4fdaefecc98c45f07c85bfd3d8c5f931b18f3ee5bf24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        $__internal_162afead477d23387abd48442cd3e84a0c32dcfbf315575d36aa676cdc32f6af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_162afead477d23387abd48442cd3e84a0c32dcfbf315575d36aa676cdc32f6af->enter($__internal_162afead477d23387abd48442cd3e84a0c32dcfbf315575d36aa676cdc32f6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

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
        
        $__internal_2e8c728125e1b84698ec4fdaefecc98c45f07c85bfd3d8c5f931b18f3ee5bf24->leave($__internal_2e8c728125e1b84698ec4fdaefecc98c45f07c85bfd3d8c5f931b18f3ee5bf24_prof);

        
        $__internal_162afead477d23387abd48442cd3e84a0c32dcfbf315575d36aa676cdc32f6af->leave($__internal_162afead477d23387abd48442cd3e84a0c32dcfbf315575d36aa676cdc32f6af_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a677b71dc8205e9148fc612a52f57894dfb23e1844c9ec4b75c97c5050375b4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a677b71dc8205e9148fc612a52f57894dfb23e1844c9ec4b75c97c5050375b4d->enter($__internal_a677b71dc8205e9148fc612a52f57894dfb23e1844c9ec4b75c97c5050375b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a9ac74836f4d5832978799ecce41cc8d66a9c7e015a87177a5fd59bf8a758712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ac74836f4d5832978799ecce41cc8d66a9c7e015a87177a5fd59bf8a758712->enter($__internal_a9ac74836f4d5832978799ecce41cc8d66a9c7e015a87177a5fd59bf8a758712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a9ac74836f4d5832978799ecce41cc8d66a9c7e015a87177a5fd59bf8a758712->leave($__internal_a9ac74836f4d5832978799ecce41cc8d66a9c7e015a87177a5fd59bf8a758712_prof);

        
        $__internal_a677b71dc8205e9148fc612a52f57894dfb23e1844c9ec4b75c97c5050375b4d->leave($__internal_a677b71dc8205e9148fc612a52f57894dfb23e1844c9ec4b75c97c5050375b4d_prof);

    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        $__internal_12461b574aa487a3010c47a14e4c551fb818fbeb9fd97f5646b2653d737c0793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12461b574aa487a3010c47a14e4c551fb818fbeb9fd97f5646b2653d737c0793->enter($__internal_12461b574aa487a3010c47a14e4c551fb818fbeb9fd97f5646b2653d737c0793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e54d164665cebcdf8181f741659a3fd6c975a594f6ddb87f3653dfd71c6c36dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e54d164665cebcdf8181f741659a3fd6c975a594f6ddb87f3653dfd71c6c36dd->enter($__internal_e54d164665cebcdf8181f741659a3fd6c975a594f6ddb87f3653dfd71c6c36dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e54d164665cebcdf8181f741659a3fd6c975a594f6ddb87f3653dfd71c6c36dd->leave($__internal_e54d164665cebcdf8181f741659a3fd6c975a594f6ddb87f3653dfd71c6c36dd_prof);

        
        $__internal_12461b574aa487a3010c47a14e4c551fb818fbeb9fd97f5646b2653d737c0793->leave($__internal_12461b574aa487a3010c47a14e4c551fb818fbeb9fd97f5646b2653d737c0793_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d0b3eaef64510d2c977e2be99cea879429dcc8f114a03c661a1d1e9841d33147 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0b3eaef64510d2c977e2be99cea879429dcc8f114a03c661a1d1e9841d33147->enter($__internal_d0b3eaef64510d2c977e2be99cea879429dcc8f114a03c661a1d1e9841d33147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d425803d74e0bf63209adc1c27bfff1d6800df4d6eff4340852edb3a09712379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d425803d74e0bf63209adc1c27bfff1d6800df4d6eff4340852edb3a09712379->enter($__internal_d425803d74e0bf63209adc1c27bfff1d6800df4d6eff4340852edb3a09712379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d425803d74e0bf63209adc1c27bfff1d6800df4d6eff4340852edb3a09712379->leave($__internal_d425803d74e0bf63209adc1c27bfff1d6800df4d6eff4340852edb3a09712379_prof);

        
        $__internal_d0b3eaef64510d2c977e2be99cea879429dcc8f114a03c661a1d1e9841d33147->leave($__internal_d0b3eaef64510d2c977e2be99cea879429dcc8f114a03c661a1d1e9841d33147_prof);

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
", "FrontBundle::layout.html.twig", "/home/kevin/Dropbox/ProjetPtsCoiffeur/src/FrontBundle/Resources/views/layout.html.twig");
    }
}
