<?php

/* StockBundle:Default:listProduitModif.html.twig */
class __TwigTemplate_ff9234c14f9993c78f5901107b1a898cf2609360e648566261d7ade9121e50f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "StockBundle:Default:listProduitModif.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68cd4fbbdea8df7032bffeb95b93010fa022adbf2b9587c405604eb454fe472d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68cd4fbbdea8df7032bffeb95b93010fa022adbf2b9587c405604eb454fe472d->enter($__internal_68cd4fbbdea8df7032bffeb95b93010fa022adbf2b9587c405604eb454fe472d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:listProduitModif.html.twig"));

        $__internal_8d9ddf657464fd4d48229fe8b86b63a0a404535faea0ee3fa33b139f5b98c26f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d9ddf657464fd4d48229fe8b86b63a0a404535faea0ee3fa33b139f5b98c26f->enter($__internal_8d9ddf657464fd4d48229fe8b86b63a0a404535faea0ee3fa33b139f5b98c26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:listProduitModif.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68cd4fbbdea8df7032bffeb95b93010fa022adbf2b9587c405604eb454fe472d->leave($__internal_68cd4fbbdea8df7032bffeb95b93010fa022adbf2b9587c405604eb454fe472d_prof);

        
        $__internal_8d9ddf657464fd4d48229fe8b86b63a0a404535faea0ee3fa33b139f5b98c26f->leave($__internal_8d9ddf657464fd4d48229fe8b86b63a0a404535faea0ee3fa33b139f5b98c26f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4af054e29f6d4336aca69935091b08010811fe9abdebc72a499474e40050e53a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4af054e29f6d4336aca69935091b08010811fe9abdebc72a499474e40050e53a->enter($__internal_4af054e29f6d4336aca69935091b08010811fe9abdebc72a499474e40050e53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_074ce9236cdcf5d012e0f6b0ea891777706c1cd57124c4c7baafaa19daedb7d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_074ce9236cdcf5d012e0f6b0ea891777706c1cd57124c4c7baafaa19daedb7d1->enter($__internal_074ce9236cdcf5d012e0f6b0ea891777706c1cd57124c4c7baafaa19daedb7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des produits";
        
        $__internal_074ce9236cdcf5d012e0f6b0ea891777706c1cd57124c4c7baafaa19daedb7d1->leave($__internal_074ce9236cdcf5d012e0f6b0ea891777706c1cd57124c4c7baafaa19daedb7d1_prof);

        
        $__internal_4af054e29f6d4336aca69935091b08010811fe9abdebc72a499474e40050e53a->leave($__internal_4af054e29f6d4336aca69935091b08010811fe9abdebc72a499474e40050e53a_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bb4cdcac98695e2aa5480ca07a9f2d7f8c0d8fe86636f1423ad77e8228d63cd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb4cdcac98695e2aa5480ca07a9f2d7f8c0d8fe86636f1423ad77e8228d63cd2->enter($__internal_bb4cdcac98695e2aa5480ca07a9f2d7f8c0d8fe86636f1423ad77e8228d63cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_23230a580b0e9e8d9ee6409603361335d42cbf86a6cdc3186918bb5e1e3b3759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23230a580b0e9e8d9ee6409603361335d42cbf86a6cdc3186918bb5e1e3b3759->enter($__internal_23230a580b0e9e8d9ee6409603361335d42cbf86a6cdc3186918bb5e1e3b3759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
";
        
        $__internal_23230a580b0e9e8d9ee6409603361335d42cbf86a6cdc3186918bb5e1e3b3759->leave($__internal_23230a580b0e9e8d9ee6409603361335d42cbf86a6cdc3186918bb5e1e3b3759_prof);

        
        $__internal_bb4cdcac98695e2aa5480ca07a9f2d7f8c0d8fe86636f1423ad77e8228d63cd2->leave($__internal_bb4cdcac98695e2aa5480ca07a9f2d7f8c0d8fe86636f1423ad77e8228d63cd2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_925de77c25fab2317db670752b51d151ce50a55ead1f00d457ab5a494b70bcb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_925de77c25fab2317db670752b51d151ce50a55ead1f00d457ab5a494b70bcb4->enter($__internal_925de77c25fab2317db670752b51d151ce50a55ead1f00d457ab5a494b70bcb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_649a046d1cc340d1bb6c84287ebc17115f3d3a5ae3fcd19cb0f2028f6e757195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_649a046d1cc340d1bb6c84287ebc17115f3d3a5ae3fcd19cb0f2028f6e757195->enter($__internal_649a046d1cc340d1bb6c84287ebc17115f3d3a5ae3fcd19cb0f2028f6e757195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<h1>La liste des produits deja disponiblent</h1>
<table>
  <tr>
    <td>Libelé</td>
    <td>Type</td>
    <td>Catégorie</td>
    <td>Prix unitaire</td>
    <td><button>Modifier</button></td>
  </tr>
  <tr>
    <td>Shampoing</td>
    <td>Vente</td>
    <td>Soins cheveux</td>
    <td>5.00€</td>
    <td><button>Modifier</button></td>
  </tr>
  <tr>
    <td>Coupe Mulet</td>
    <td>Prestation</td>
    <td>Coupe homme</td>
    <td>12.99€</td>
    <td><button>Modifier</button></td>
  </tr>
</table>
<a href=";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("acceuilstock");
        echo "><button type=\"button\">Retour</button></a>
";
        
        $__internal_649a046d1cc340d1bb6c84287ebc17115f3d3a5ae3fcd19cb0f2028f6e757195->leave($__internal_649a046d1cc340d1bb6c84287ebc17115f3d3a5ae3fcd19cb0f2028f6e757195_prof);

        
        $__internal_925de77c25fab2317db670752b51d151ce50a55ead1f00d457ab5a494b70bcb4->leave($__internal_925de77c25fab2317db670752b51d151ce50a55ead1f00d457ab5a494b70bcb4_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle:Default:listProduitModif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 32,  89 => 8,  80 => 7,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FrontBundle::layout.html.twig\" %}

{% block title %}Liste des produits{% endblock %}
{% block stylesheets %}
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
{% endblock %}
{% block body %}
<h1>La liste des produits deja disponiblent</h1>
<table>
  <tr>
    <td>Libelé</td>
    <td>Type</td>
    <td>Catégorie</td>
    <td>Prix unitaire</td>
    <td><button>Modifier</button></td>
  </tr>
  <tr>
    <td>Shampoing</td>
    <td>Vente</td>
    <td>Soins cheveux</td>
    <td>5.00€</td>
    <td><button>Modifier</button></td>
  </tr>
  <tr>
    <td>Coupe Mulet</td>
    <td>Prestation</td>
    <td>Coupe homme</td>
    <td>12.99€</td>
    <td><button>Modifier</button></td>
  </tr>
</table>
<a href={{ path('acceuilstock') }}><button type=\"button\">Retour</button></a>
{% endblock %}
", "StockBundle:Default:listProduitModif.html.twig", "/home/kevin/Dropbox/PTS3/ProjetPtsCoiffeur/src/StockBundle/Resources/views/Default/listProduitModif.html.twig");
    }
}
