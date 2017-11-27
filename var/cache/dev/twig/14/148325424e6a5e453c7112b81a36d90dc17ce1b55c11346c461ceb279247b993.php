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
        $__internal_555775a19d79f807c52266b4475e51a7811a2b018a8679a37d339f11a11e1bb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_555775a19d79f807c52266b4475e51a7811a2b018a8679a37d339f11a11e1bb7->enter($__internal_555775a19d79f807c52266b4475e51a7811a2b018a8679a37d339f11a11e1bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        $__internal_d63fae33d0cc5b2ad7b992f3ef3eaf8356e29ac82067cc3c0a9e16c779da068e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d63fae33d0cc5b2ad7b992f3ef3eaf8356e29ac82067cc3c0a9e16c779da068e->enter($__internal_d63fae33d0cc5b2ad7b992f3ef3eaf8356e29ac82067cc3c0a9e16c779da068e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

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
        
        $__internal_555775a19d79f807c52266b4475e51a7811a2b018a8679a37d339f11a11e1bb7->leave($__internal_555775a19d79f807c52266b4475e51a7811a2b018a8679a37d339f11a11e1bb7_prof);

        
        $__internal_d63fae33d0cc5b2ad7b992f3ef3eaf8356e29ac82067cc3c0a9e16c779da068e->leave($__internal_d63fae33d0cc5b2ad7b992f3ef3eaf8356e29ac82067cc3c0a9e16c779da068e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc24db4d57dc731af189748fd0aa579ae56623ad01f5eb1ddf77a68d0c961705 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc24db4d57dc731af189748fd0aa579ae56623ad01f5eb1ddf77a68d0c961705->enter($__internal_cc24db4d57dc731af189748fd0aa579ae56623ad01f5eb1ddf77a68d0c961705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8a57d15355eb765199ad97bd5c07703ebd19041e33bb66a0afcee0bd8f2d1fd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a57d15355eb765199ad97bd5c07703ebd19041e33bb66a0afcee0bd8f2d1fd7->enter($__internal_8a57d15355eb765199ad97bd5c07703ebd19041e33bb66a0afcee0bd8f2d1fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8a57d15355eb765199ad97bd5c07703ebd19041e33bb66a0afcee0bd8f2d1fd7->leave($__internal_8a57d15355eb765199ad97bd5c07703ebd19041e33bb66a0afcee0bd8f2d1fd7_prof);

        
        $__internal_cc24db4d57dc731af189748fd0aa579ae56623ad01f5eb1ddf77a68d0c961705->leave($__internal_cc24db4d57dc731af189748fd0aa579ae56623ad01f5eb1ddf77a68d0c961705_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dc76e35822054e8ba47bcecec62039cd365d1486ddf7a1427666416f7ab9d6e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc76e35822054e8ba47bcecec62039cd365d1486ddf7a1427666416f7ab9d6e6->enter($__internal_dc76e35822054e8ba47bcecec62039cd365d1486ddf7a1427666416f7ab9d6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_90ad065f9fb9c7ca7a684738d3035f04c8764f895b432bdf01663b37c217b9cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90ad065f9fb9c7ca7a684738d3035f04c8764f895b432bdf01663b37c217b9cd->enter($__internal_90ad065f9fb9c7ca7a684738d3035f04c8764f895b432bdf01663b37c217b9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_90ad065f9fb9c7ca7a684738d3035f04c8764f895b432bdf01663b37c217b9cd->leave($__internal_90ad065f9fb9c7ca7a684738d3035f04c8764f895b432bdf01663b37c217b9cd_prof);

        
        $__internal_dc76e35822054e8ba47bcecec62039cd365d1486ddf7a1427666416f7ab9d6e6->leave($__internal_dc76e35822054e8ba47bcecec62039cd365d1486ddf7a1427666416f7ab9d6e6_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9a3c2eaf6819e10423196256158487bb5043b762279fd53991ae34499a4d309 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9a3c2eaf6819e10423196256158487bb5043b762279fd53991ae34499a4d309->enter($__internal_a9a3c2eaf6819e10423196256158487bb5043b762279fd53991ae34499a4d309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_46e254454e3ad6c3ac7b41c929b8cdcb92bb5d173b3b826346f91401659572c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e254454e3ad6c3ac7b41c929b8cdcb92bb5d173b3b826346f91401659572c2->enter($__internal_46e254454e3ad6c3ac7b41c929b8cdcb92bb5d173b3b826346f91401659572c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_46e254454e3ad6c3ac7b41c929b8cdcb92bb5d173b3b826346f91401659572c2->leave($__internal_46e254454e3ad6c3ac7b41c929b8cdcb92bb5d173b3b826346f91401659572c2_prof);

        
        $__internal_a9a3c2eaf6819e10423196256158487bb5043b762279fd53991ae34499a4d309->leave($__internal_a9a3c2eaf6819e10423196256158487bb5043b762279fd53991ae34499a4d309_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_707e1428bd75a9eb1f80ddf7c8f1095385ead40a895b861939f55ac23c9b7aca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_707e1428bd75a9eb1f80ddf7c8f1095385ead40a895b861939f55ac23c9b7aca->enter($__internal_707e1428bd75a9eb1f80ddf7c8f1095385ead40a895b861939f55ac23c9b7aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4749d0691562d682dce908688594d49df97c4ba8411222e0f4c4ab72b2b06b54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4749d0691562d682dce908688594d49df97c4ba8411222e0f4c4ab72b2b06b54->enter($__internal_4749d0691562d682dce908688594d49df97c4ba8411222e0f4c4ab72b2b06b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4749d0691562d682dce908688594d49df97c4ba8411222e0f4c4ab72b2b06b54->leave($__internal_4749d0691562d682dce908688594d49df97c4ba8411222e0f4c4ab72b2b06b54_prof);

        
        $__internal_707e1428bd75a9eb1f80ddf7c8f1095385ead40a895b861939f55ac23c9b7aca->leave($__internal_707e1428bd75a9eb1f80ddf7c8f1095385ead40a895b861939f55ac23c9b7aca_prof);

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
", "FrontBundle::layout.html.twig", "/home/kevin/Dropbox/PTS3/ProjetPtsCoiffeur/src/FrontBundle/Resources/views/layout.html.twig");
    }
}
