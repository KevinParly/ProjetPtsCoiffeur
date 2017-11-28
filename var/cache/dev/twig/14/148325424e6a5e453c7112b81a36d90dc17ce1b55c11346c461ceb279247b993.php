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
        $__internal_25971f4e04c1a76424e784f1cdf325899a48ef4a5318f4530cfc122751b7cb30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25971f4e04c1a76424e784f1cdf325899a48ef4a5318f4530cfc122751b7cb30->enter($__internal_25971f4e04c1a76424e784f1cdf325899a48ef4a5318f4530cfc122751b7cb30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        $__internal_bcafdf6db53cbb8805d72703899f380578e3d3f91c6eb996078a89aa903b129f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcafdf6db53cbb8805d72703899f380578e3d3f91c6eb996078a89aa903b129f->enter($__internal_bcafdf6db53cbb8805d72703899f380578e3d3f91c6eb996078a89aa903b129f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

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
        
        $__internal_25971f4e04c1a76424e784f1cdf325899a48ef4a5318f4530cfc122751b7cb30->leave($__internal_25971f4e04c1a76424e784f1cdf325899a48ef4a5318f4530cfc122751b7cb30_prof);

        
        $__internal_bcafdf6db53cbb8805d72703899f380578e3d3f91c6eb996078a89aa903b129f->leave($__internal_bcafdf6db53cbb8805d72703899f380578e3d3f91c6eb996078a89aa903b129f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d698acdfc8f46b04b1394a4ddba977bdb1ffe46c1aee625bb82f6d6a7e006d1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d698acdfc8f46b04b1394a4ddba977bdb1ffe46c1aee625bb82f6d6a7e006d1d->enter($__internal_d698acdfc8f46b04b1394a4ddba977bdb1ffe46c1aee625bb82f6d6a7e006d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_98bd34d95de225e48af2b05731806928125f8dceeb5bd07444c45410d33e306e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98bd34d95de225e48af2b05731806928125f8dceeb5bd07444c45410d33e306e->enter($__internal_98bd34d95de225e48af2b05731806928125f8dceeb5bd07444c45410d33e306e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_98bd34d95de225e48af2b05731806928125f8dceeb5bd07444c45410d33e306e->leave($__internal_98bd34d95de225e48af2b05731806928125f8dceeb5bd07444c45410d33e306e_prof);

        
        $__internal_d698acdfc8f46b04b1394a4ddba977bdb1ffe46c1aee625bb82f6d6a7e006d1d->leave($__internal_d698acdfc8f46b04b1394a4ddba977bdb1ffe46c1aee625bb82f6d6a7e006d1d_prof);

    }

    // line 67
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c659f574cc9c098e2de9c984e1c9a4771ce48cb64a6fb3ca5ab2f3a4d7162a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c659f574cc9c098e2de9c984e1c9a4771ce48cb64a6fb3ca5ab2f3a4d7162a1->enter($__internal_4c659f574cc9c098e2de9c984e1c9a4771ce48cb64a6fb3ca5ab2f3a4d7162a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a2e27b862018ebadeb1f8183ac08486b04e0f32757e7cff86c46791abfe213b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2e27b862018ebadeb1f8183ac08486b04e0f32757e7cff86c46791abfe213b6->enter($__internal_a2e27b862018ebadeb1f8183ac08486b04e0f32757e7cff86c46791abfe213b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a2e27b862018ebadeb1f8183ac08486b04e0f32757e7cff86c46791abfe213b6->leave($__internal_a2e27b862018ebadeb1f8183ac08486b04e0f32757e7cff86c46791abfe213b6_prof);

        
        $__internal_4c659f574cc9c098e2de9c984e1c9a4771ce48cb64a6fb3ca5ab2f3a4d7162a1->leave($__internal_4c659f574cc9c098e2de9c984e1c9a4771ce48cb64a6fb3ca5ab2f3a4d7162a1_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bb423ae221fc527d48c0af5b53a07a272b0540399935844db1b9f5bf85daad14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb423ae221fc527d48c0af5b53a07a272b0540399935844db1b9f5bf85daad14->enter($__internal_bb423ae221fc527d48c0af5b53a07a272b0540399935844db1b9f5bf85daad14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e50ec070903bdc8c25a9fb4ff359a9164b00d18ffa0aa88f6ed74a4976a8b416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e50ec070903bdc8c25a9fb4ff359a9164b00d18ffa0aa88f6ed74a4976a8b416->enter($__internal_e50ec070903bdc8c25a9fb4ff359a9164b00d18ffa0aa88f6ed74a4976a8b416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e50ec070903bdc8c25a9fb4ff359a9164b00d18ffa0aa88f6ed74a4976a8b416->leave($__internal_e50ec070903bdc8c25a9fb4ff359a9164b00d18ffa0aa88f6ed74a4976a8b416_prof);

        
        $__internal_bb423ae221fc527d48c0af5b53a07a272b0540399935844db1b9f5bf85daad14->leave($__internal_bb423ae221fc527d48c0af5b53a07a272b0540399935844db1b9f5bf85daad14_prof);

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
", "FrontBundle::layout.html.twig", "/home/kevin/Dropbox/ProjetPtsCoiffeur/src/FrontBundle/Resources/views/layout.html.twig");
    }
}
