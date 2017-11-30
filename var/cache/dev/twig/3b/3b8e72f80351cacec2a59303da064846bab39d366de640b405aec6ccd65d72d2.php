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
        $__internal_02241bd9a2f977f20523fc0d01e33168e06d638abac7e03e65282ac8c47f7eec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02241bd9a2f977f20523fc0d01e33168e06d638abac7e03e65282ac8c47f7eec->enter($__internal_02241bd9a2f977f20523fc0d01e33168e06d638abac7e03e65282ac8c47f7eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        $__internal_3b4c5c798975b6b2dc8d34fe369aa0824fd8de86962849aa2b49d5e9455a1067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b4c5c798975b6b2dc8d34fe369aa0824fd8de86962849aa2b49d5e9455a1067->enter($__internal_3b4c5c798975b6b2dc8d34fe369aa0824fd8de86962849aa2b49d5e9455a1067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
      <meta charset=\"UTF-8\" />
      ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/stylesheets/layout.css"), "html", null, true);
        echo "\"/>
      ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "      <link rel=\"icon\" type=\"image/x-icon\" href=\"";
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
          </li>
          <li>
            <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listproduitmodif");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/changeProductQuickButton.png"), "html", null, true);
        echo "\"/></a>
            <p class=\"quickButtonTitle\">Modifier un produit</p>
          </li>
          <li>
            <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeproduit");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/displayProductListQuickButton.png"), "html", null, true);
        echo "\"/></a>
            <p class=\"quickButtonTitle\">Lister les stocks</p>
          </li>
          <li>
            <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutlivraison");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/addDeliveryQuickButton.png"), "html", null, true);
        echo "\"/></a>
            <p class=\"quickButtonTitle\">Ajouter une livraison</p>
          </li>
          <li>
            <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listecouleur");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/displayColorListQuickButton.png"), "html", null, true);
        echo "\"/></a>
            <p class=\"quickButtonTitle\">Lister les couleurs / permanentes</p>
          </li>
        </div>
      </ol>

      <ol class=\"quickMenu\">
        <h3>CLIENTS</h3>
        <div>
          <li>
            <a href=\"\"><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/addClientQuickButton.png"), "html", null, true);
        echo "\"/></a>
            <p class=\"quickButtonTitle\">Ajouter un client</p>
          </li>
          <li>
            <a href=\"\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/changeClientQuickButton.png"), "html", null, true);
        echo "\"/></a>
            <p class=\"quickButtonTitle\">Modifier un client</p>
          </li>
          <li>
            <a href=\"\"><img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/displayClientListQuickButton.png"), "html", null, true);
        echo "\"/></a>
            <p class=\"quickButtonTitle\">Lister les clients</p>
          </li>
        </div>
      </ol>

      <ol class=\"quickMenu lastQuickMenu\">
        <h3>FACTURES</h3>
        <div>
          <li>
            <a href=\"\"><img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/addBillQuickButton.png"), "html", null, true);
        echo "\"/></a>
            <p class=\"quickButtonTitle\">Créer une facture</p>
          </li>
          <li>
            <a href=\"\"><img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/displayBillListQuickButton.png"), "html", null, true);
        echo "\"/></a>
            <p class=\"quickButtonTitle\">Lister les factures</p>
          </li>
          <li>
            <a href=\"\"><img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/printBillQuickButton.png"), "html", null, true);
        echo "\"/></a>
            <p class=\"quickButtonTitle\">Imprimer une facture</p>
          </li>
        </div>
      </ol>
    </nav>
    ";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 78
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/scripts/secondaryMenu.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>
";
        
        $__internal_02241bd9a2f977f20523fc0d01e33168e06d638abac7e03e65282ac8c47f7eec->leave($__internal_02241bd9a2f977f20523fc0d01e33168e06d638abac7e03e65282ac8c47f7eec_prof);

        
        $__internal_3b4c5c798975b6b2dc8d34fe369aa0824fd8de86962849aa2b49d5e9455a1067->leave($__internal_3b4c5c798975b6b2dc8d34fe369aa0824fd8de86962849aa2b49d5e9455a1067_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd92e4a852c26096027559a4d0c5f8e02c17e380d5b40c9781194b7bd28f4593 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd92e4a852c26096027559a4d0c5f8e02c17e380d5b40c9781194b7bd28f4593->enter($__internal_cd92e4a852c26096027559a4d0c5f8e02c17e380d5b40c9781194b7bd28f4593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_16298609a758aff619fb5823cd5c7a4e79c7b4877436e6a7c01a4e2578083434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16298609a758aff619fb5823cd5c7a4e79c7b4877436e6a7c01a4e2578083434->enter($__internal_16298609a758aff619fb5823cd5c7a4e79c7b4877436e6a7c01a4e2578083434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_16298609a758aff619fb5823cd5c7a4e79c7b4877436e6a7c01a4e2578083434->leave($__internal_16298609a758aff619fb5823cd5c7a4e79c7b4877436e6a7c01a4e2578083434_prof);

        
        $__internal_cd92e4a852c26096027559a4d0c5f8e02c17e380d5b40c9781194b7bd28f4593->leave($__internal_cd92e4a852c26096027559a4d0c5f8e02c17e380d5b40c9781194b7bd28f4593_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_00afc50b2bf0e07f0bd8d8f1b91fb7037df53e93eabb133a808fedd752ca6e70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00afc50b2bf0e07f0bd8d8f1b91fb7037df53e93eabb133a808fedd752ca6e70->enter($__internal_00afc50b2bf0e07f0bd8d8f1b91fb7037df53e93eabb133a808fedd752ca6e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d6f5008d24dc08b9367260f2804a9812fb636a956203c6452739ba99d7e476d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6f5008d24dc08b9367260f2804a9812fb636a956203c6452739ba99d7e476d0->enter($__internal_d6f5008d24dc08b9367260f2804a9812fb636a956203c6452739ba99d7e476d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d6f5008d24dc08b9367260f2804a9812fb636a956203c6452739ba99d7e476d0->leave($__internal_d6f5008d24dc08b9367260f2804a9812fb636a956203c6452739ba99d7e476d0_prof);

        
        $__internal_00afc50b2bf0e07f0bd8d8f1b91fb7037df53e93eabb133a808fedd752ca6e70->leave($__internal_00afc50b2bf0e07f0bd8d8f1b91fb7037df53e93eabb133a808fedd752ca6e70_prof);

    }

    // line 76
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bf0923758dfcfb816269587203ee315152fb3e0204093355dbd2c3f4d656336 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bf0923758dfcfb816269587203ee315152fb3e0204093355dbd2c3f4d656336->enter($__internal_1bf0923758dfcfb816269587203ee315152fb3e0204093355dbd2c3f4d656336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e8d8d8be2ba46dff730eba295488c27b28e54bf6024a7e77c5c489c4e9f04158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8d8d8be2ba46dff730eba295488c27b28e54bf6024a7e77c5c489c4e9f04158->enter($__internal_e8d8d8be2ba46dff730eba295488c27b28e54bf6024a7e77c5c489c4e9f04158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e8d8d8be2ba46dff730eba295488c27b28e54bf6024a7e77c5c489c4e9f04158->leave($__internal_e8d8d8be2ba46dff730eba295488c27b28e54bf6024a7e77c5c489c4e9f04158_prof);

        
        $__internal_1bf0923758dfcfb816269587203ee315152fb3e0204093355dbd2c3f4d656336->leave($__internal_1bf0923758dfcfb816269587203ee315152fb3e0204093355dbd2c3f4d656336_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e57d25908d7f96667a55410ef9863073f3c3dd931e0047af7eb4f1573f71f50f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e57d25908d7f96667a55410ef9863073f3c3dd931e0047af7eb4f1573f71f50f->enter($__internal_e57d25908d7f96667a55410ef9863073f3c3dd931e0047af7eb4f1573f71f50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f53b4372a3758080672f87c07a6c7ed0fd0492cc084cb67b306469acf7f90b3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f53b4372a3758080672f87c07a6c7ed0fd0492cc084cb67b306469acf7f90b3a->enter($__internal_f53b4372a3758080672f87c07a6c7ed0fd0492cc084cb67b306469acf7f90b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f53b4372a3758080672f87c07a6c7ed0fd0492cc084cb67b306469acf7f90b3a->leave($__internal_f53b4372a3758080672f87c07a6c7ed0fd0492cc084cb67b306469acf7f90b3a_prof);

        
        $__internal_e57d25908d7f96667a55410ef9863073f3c3dd931e0047af7eb4f1573f71f50f->leave($__internal_e57d25908d7f96667a55410ef9863073f3c3dd931e0047af7eb4f1573f71f50f_prof);

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
        return array (  236 => 77,  219 => 76,  202 => 7,  185 => 5,  170 => 78,  167 => 77,  165 => 76,  156 => 70,  149 => 66,  142 => 62,  129 => 52,  122 => 48,  115 => 44,  100 => 34,  91 => 30,  82 => 26,  73 => 22,  64 => 18,  55 => 12,  51 => 11,  44 => 8,  42 => 7,  37 => 6,  35 => 5,  29 => 1,);
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
      {% block title %}{% endblock %}
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset(\"bundles/front/stylesheets/layout.css\") }}\"/>
      {% block stylesheets %}{% endblock %}
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
          </li>
          <li>
            <a href=\"{{ path('listproduitmodif') }}\"><img src=\"{{ asset(\"bundles/front/images/changeProductQuickButton.png\") }}\"/></a>
            <p class=\"quickButtonTitle\">Modifier un produit</p>
          </li>
          <li>
            <a href=\"{{ path('listeproduit') }}\"><img src=\"{{ asset(\"bundles/front/images/displayProductListQuickButton.png\") }}\"/></a>
            <p class=\"quickButtonTitle\">Lister les stocks</p>
          </li>
          <li>
            <a href=\"{{ path('ajoutlivraison') }}\"><img src=\"{{ asset(\"bundles/front/images/addDeliveryQuickButton.png\") }}\"/></a>
            <p class=\"quickButtonTitle\">Ajouter une livraison</p>
          </li>
          <li>
            <a href=\"{{ path('listecouleur') }}\"><img src=\"{{ asset(\"bundles/front/images/displayColorListQuickButton.png\") }}\"/></a>
            <p class=\"quickButtonTitle\">Lister les couleurs / permanentes</p>
          </li>
        </div>
      </ol>

      <ol class=\"quickMenu\">
        <h3>CLIENTS</h3>
        <div>
          <li>
            <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/addClientQuickButton.png\") }}\"/></a>
            <p class=\"quickButtonTitle\">Ajouter un client</p>
          </li>
          <li>
            <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/changeClientQuickButton.png\") }}\"/></a>
            <p class=\"quickButtonTitle\">Modifier un client</p>
          </li>
          <li>
            <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/displayClientListQuickButton.png\") }}\"/></a>
            <p class=\"quickButtonTitle\">Lister les clients</p>
          </li>
        </div>
      </ol>

      <ol class=\"quickMenu lastQuickMenu\">
        <h3>FACTURES</h3>
        <div>
          <li>
            <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/addBillQuickButton.png\") }}\"/></a>
            <p class=\"quickButtonTitle\">Créer une facture</p>
          </li>
          <li>
            <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/displayBillListQuickButton.png\") }}\"/></a>
            <p class=\"quickButtonTitle\">Lister les factures</p>
          </li>
          <li>
            <a href=\"\"><img src=\"{{ asset(\"bundles/front/images/printBillQuickButton.png\") }}\"/></a>
            <p class=\"quickButtonTitle\">Imprimer une facture</p>
          </li>
        </div>
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
