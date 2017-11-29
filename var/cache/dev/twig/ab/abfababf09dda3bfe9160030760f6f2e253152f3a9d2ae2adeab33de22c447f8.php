<?php

/* StockBundle:Default:acceuilstock.html.twig */
class __TwigTemplate_bb97ddf33b83450fc8df6e7ca83a6eb05c43c2b6903f47ebb0b40caa83b191d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "StockBundle:Default:acceuilstock.html.twig", 1);
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
        $__internal_ae74e3ccc8e40693b0b1b6869c3b427553148a006dc750a358642f830c54838e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae74e3ccc8e40693b0b1b6869c3b427553148a006dc750a358642f830c54838e->enter($__internal_ae74e3ccc8e40693b0b1b6869c3b427553148a006dc750a358642f830c54838e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:acceuilstock.html.twig"));

        $__internal_60558c4cc831ba1d8a537b7193783b47e0f21a257bb3bd6981cf17a432d86748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60558c4cc831ba1d8a537b7193783b47e0f21a257bb3bd6981cf17a432d86748->enter($__internal_60558c4cc831ba1d8a537b7193783b47e0f21a257bb3bd6981cf17a432d86748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:acceuilstock.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae74e3ccc8e40693b0b1b6869c3b427553148a006dc750a358642f830c54838e->leave($__internal_ae74e3ccc8e40693b0b1b6869c3b427553148a006dc750a358642f830c54838e_prof);

        
        $__internal_60558c4cc831ba1d8a537b7193783b47e0f21a257bb3bd6981cf17a432d86748->leave($__internal_60558c4cc831ba1d8a537b7193783b47e0f21a257bb3bd6981cf17a432d86748_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b8470e80cca1e31a77c8215796028b15b5bd98b58e943ba21b00cb3996d7bd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b8470e80cca1e31a77c8215796028b15b5bd98b58e943ba21b00cb3996d7bd2->enter($__internal_4b8470e80cca1e31a77c8215796028b15b5bd98b58e943ba21b00cb3996d7bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3c058dcb0cdbc66a3f3b966b27b9168892ed5660caedb38a1c6331e305d5de32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c058dcb0cdbc66a3f3b966b27b9168892ed5660caedb38a1c6331e305d5de32->enter($__internal_3c058dcb0cdbc66a3f3b966b27b9168892ed5660caedb38a1c6331e305d5de32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil de la gestion des stocks";
        
        $__internal_3c058dcb0cdbc66a3f3b966b27b9168892ed5660caedb38a1c6331e305d5de32->leave($__internal_3c058dcb0cdbc66a3f3b966b27b9168892ed5660caedb38a1c6331e305d5de32_prof);

        
        $__internal_4b8470e80cca1e31a77c8215796028b15b5bd98b58e943ba21b00cb3996d7bd2->leave($__internal_4b8470e80cca1e31a77c8215796028b15b5bd98b58e943ba21b00cb3996d7bd2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c2a692f4391ae82fbabdf63e92a2e1bde1c96fea302e4ad1a7141193cb305358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2a692f4391ae82fbabdf63e92a2e1bde1c96fea302e4ad1a7141193cb305358->enter($__internal_c2a692f4391ae82fbabdf63e92a2e1bde1c96fea302e4ad1a7141193cb305358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_74a01c0b11661bb11b4293767b5c2d4c082d040ffecd7ce35037472fe855aecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74a01c0b11661bb11b4293767b5c2d4c082d040ffecd7ce35037472fe855aecb->enter($__internal_74a01c0b11661bb11b4293767b5c2d4c082d040ffecd7ce35037472fe855aecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
";
        
        $__internal_74a01c0b11661bb11b4293767b5c2d4c082d040ffecd7ce35037472fe855aecb->leave($__internal_74a01c0b11661bb11b4293767b5c2d4c082d040ffecd7ce35037472fe855aecb_prof);

        
        $__internal_c2a692f4391ae82fbabdf63e92a2e1bde1c96fea302e4ad1a7141193cb305358->leave($__internal_c2a692f4391ae82fbabdf63e92a2e1bde1c96fea302e4ad1a7141193cb305358_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_82a80cc9928b43e24451b7d7688f0e1c9907e633828229301900deb3ef1e88c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82a80cc9928b43e24451b7d7688f0e1c9907e633828229301900deb3ef1e88c2->enter($__internal_82a80cc9928b43e24451b7d7688f0e1c9907e633828229301900deb3ef1e88c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5ad5d463c20d496a51405b868674aa20b502727c0c28c089377bf026812d8511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ad5d463c20d496a51405b868674aa20b502727c0c28c089377bf026812d8511->enter($__internal_5ad5d463c20d496a51405b868674aa20b502727c0c28c089377bf026812d8511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <h1>Bienvenue sur l'accueil de la gestion des stocks</h1>
      <a href=";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutproduit");
        echo ">
        <button type=\"button\">Ajouter un produit</button>
      </a>
      <a href=";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listproduitmodif");
        echo ">
        <button type=\"button\">Modifier un produit</button>
      </a>
      <a href=";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeproduit");
        echo ">
        <button type=\"button\">Afficher la liste des produits</button>
      </a>
      <a href=";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutlivraison");
        echo ">
        <button type=\"button\">Ajouter une livraison</button>
      </a>
      <button type=\"button\">Afficher les couleurs</button>
";
        
        $__internal_5ad5d463c20d496a51405b868674aa20b502727c0c28c089377bf026812d8511->leave($__internal_5ad5d463c20d496a51405b868674aa20b502727c0c28c089377bf026812d8511_prof);

        
        $__internal_82a80cc9928b43e24451b7d7688f0e1c9907e633828229301900deb3ef1e88c2->leave($__internal_82a80cc9928b43e24451b7d7688f0e1c9907e633828229301900deb3ef1e88c2_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle:Default:acceuilstock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 19,  104 => 16,  98 => 13,  92 => 10,  89 => 9,  80 => 8,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
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

{% block title %}Accueil de la gestion des stocks{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
{% endblock %}

{% block body %}
    <h1>Bienvenue sur l'accueil de la gestion des stocks</h1>
      <a href={{ path('ajoutproduit') }}>
        <button type=\"button\">Ajouter un produit</button>
      </a>
      <a href={{ path('listproduitmodif') }}>
        <button type=\"button\">Modifier un produit</button>
      </a>
      <a href={{ path('listeproduit') }}>
        <button type=\"button\">Afficher la liste des produits</button>
      </a>
      <a href={{ path('ajoutlivraison') }}>
        <button type=\"button\">Ajouter une livraison</button>
      </a>
      <button type=\"button\">Afficher les couleurs</button>
{% endblock %}
", "StockBundle:Default:acceuilstock.html.twig", "/var/www/html/www/ProjetCoiffeur/ProjetPtsCoiffeur/src/StockBundle/Resources/views/Default/acceuilstock.html.twig");
    }
}
