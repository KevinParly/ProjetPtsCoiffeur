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
        $__internal_f87966e608f7e933de7dcbe2b559762ef3f9851ba8459285cbc41d262860f2b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f87966e608f7e933de7dcbe2b559762ef3f9851ba8459285cbc41d262860f2b3->enter($__internal_f87966e608f7e933de7dcbe2b559762ef3f9851ba8459285cbc41d262860f2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        $__internal_c7224d476f6c4e3d2ddd5ab2e0c5196ba26ae535e45bac0b1bc7b0a426dd3224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7224d476f6c4e3d2ddd5ab2e0c5196ba26ae535e45bac0b1bc7b0a426dd3224->enter($__internal_c7224d476f6c4e3d2ddd5ab2e0c5196ba26ae535e45bac0b1bc7b0a426dd3224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

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
      </ol>
    </nav>
    ";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/scripts/secondaryMenu.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>
";
        
        $__internal_f87966e608f7e933de7dcbe2b559762ef3f9851ba8459285cbc41d262860f2b3->leave($__internal_f87966e608f7e933de7dcbe2b559762ef3f9851ba8459285cbc41d262860f2b3_prof);

        
        $__internal_c7224d476f6c4e3d2ddd5ab2e0c5196ba26ae535e45bac0b1bc7b0a426dd3224->leave($__internal_c7224d476f6c4e3d2ddd5ab2e0c5196ba26ae535e45bac0b1bc7b0a426dd3224_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_486e8dcc47a0b530ad129344062c6e7fc03ab46d7efb86c243f65cc32b2eff88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_486e8dcc47a0b530ad129344062c6e7fc03ab46d7efb86c243f65cc32b2eff88->enter($__internal_486e8dcc47a0b530ad129344062c6e7fc03ab46d7efb86c243f65cc32b2eff88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f193a2693ebb77f990bfa0b37373ec9b0f1db63039d80ad51fc4669c56e3dc98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f193a2693ebb77f990bfa0b37373ec9b0f1db63039d80ad51fc4669c56e3dc98->enter($__internal_f193a2693ebb77f990bfa0b37373ec9b0f1db63039d80ad51fc4669c56e3dc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f193a2693ebb77f990bfa0b37373ec9b0f1db63039d80ad51fc4669c56e3dc98->leave($__internal_f193a2693ebb77f990bfa0b37373ec9b0f1db63039d80ad51fc4669c56e3dc98_prof);

        
        $__internal_486e8dcc47a0b530ad129344062c6e7fc03ab46d7efb86c243f65cc32b2eff88->leave($__internal_486e8dcc47a0b530ad129344062c6e7fc03ab46d7efb86c243f65cc32b2eff88_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e50ee8457d646271bc9a0eb46720f83e6c44488f49c77f631d805b505ed3ee0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e50ee8457d646271bc9a0eb46720f83e6c44488f49c77f631d805b505ed3ee0f->enter($__internal_e50ee8457d646271bc9a0eb46720f83e6c44488f49c77f631d805b505ed3ee0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f32c0079345406fa60346d1dab85467c2b2b2b6970d38e71202a1445219719b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f32c0079345406fa60346d1dab85467c2b2b2b6970d38e71202a1445219719b9->enter($__internal_f32c0079345406fa60346d1dab85467c2b2b2b6970d38e71202a1445219719b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f32c0079345406fa60346d1dab85467c2b2b2b6970d38e71202a1445219719b9->leave($__internal_f32c0079345406fa60346d1dab85467c2b2b2b6970d38e71202a1445219719b9_prof);

        
        $__internal_e50ee8457d646271bc9a0eb46720f83e6c44488f49c77f631d805b505ed3ee0f->leave($__internal_e50ee8457d646271bc9a0eb46720f83e6c44488f49c77f631d805b505ed3ee0f_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_54b4bf698da5101834b79ceb12285e9dd9604a13d138a207d0cd6ca09abc95d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54b4bf698da5101834b79ceb12285e9dd9604a13d138a207d0cd6ca09abc95d4->enter($__internal_54b4bf698da5101834b79ceb12285e9dd9604a13d138a207d0cd6ca09abc95d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5edf5a149e9dddea9822179b35c950970c895020a53ce4f5107fa65c93606448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5edf5a149e9dddea9822179b35c950970c895020a53ce4f5107fa65c93606448->enter($__internal_5edf5a149e9dddea9822179b35c950970c895020a53ce4f5107fa65c93606448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5edf5a149e9dddea9822179b35c950970c895020a53ce4f5107fa65c93606448->leave($__internal_5edf5a149e9dddea9822179b35c950970c895020a53ce4f5107fa65c93606448_prof);

        
        $__internal_54b4bf698da5101834b79ceb12285e9dd9604a13d138a207d0cd6ca09abc95d4->leave($__internal_54b4bf698da5101834b79ceb12285e9dd9604a13d138a207d0cd6ca09abc95d4_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8280eb9d898959195e1dd5fff4153f229042951f9259c742b90ae64851c91499 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8280eb9d898959195e1dd5fff4153f229042951f9259c742b90ae64851c91499->enter($__internal_8280eb9d898959195e1dd5fff4153f229042951f9259c742b90ae64851c91499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9005eb2ba6b384e655e6c7c0a74c9c00945775d36051f19fa1d0e3448a1e0633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9005eb2ba6b384e655e6c7c0a74c9c00945775d36051f19fa1d0e3448a1e0633->enter($__internal_9005eb2ba6b384e655e6c7c0a74c9c00945775d36051f19fa1d0e3448a1e0633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9005eb2ba6b384e655e6c7c0a74c9c00945775d36051f19fa1d0e3448a1e0633->leave($__internal_9005eb2ba6b384e655e6c7c0a74c9c00945775d36051f19fa1d0e3448a1e0633_prof);

        
        $__internal_8280eb9d898959195e1dd5fff4153f229042951f9259c742b90ae64851c91499->leave($__internal_8280eb9d898959195e1dd5fff4153f229042951f9259c742b90ae64851c91499_prof);

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
        return array (  154 => 27,  137 => 26,  120 => 6,  102 => 5,  87 => 28,  84 => 27,  82 => 26,  75 => 22,  69 => 19,  63 => 16,  56 => 12,  52 => 11,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
