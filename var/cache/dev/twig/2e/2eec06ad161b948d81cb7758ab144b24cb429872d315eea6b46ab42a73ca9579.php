<?php

/* StockBundle:Default:listeCouleur.html.twig */
class __TwigTemplate_c060cf715f7f9b30bb58a0011b9025dbc9b20e9151be1b206e5e2849c968684a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "StockBundle:Default:listeCouleur.html.twig", 1);
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
        $__internal_d525a5ebc1b10bc830ddb634292e64ed89fd73bc043e308731f933b2611f3870 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d525a5ebc1b10bc830ddb634292e64ed89fd73bc043e308731f933b2611f3870->enter($__internal_d525a5ebc1b10bc830ddb634292e64ed89fd73bc043e308731f933b2611f3870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:listeCouleur.html.twig"));

        $__internal_566fbebf567a8b26907581c9a4368d1ee4456cfa335f6a9644c6f04e8e414b4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_566fbebf567a8b26907581c9a4368d1ee4456cfa335f6a9644c6f04e8e414b4a->enter($__internal_566fbebf567a8b26907581c9a4368d1ee4456cfa335f6a9644c6f04e8e414b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:listeCouleur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d525a5ebc1b10bc830ddb634292e64ed89fd73bc043e308731f933b2611f3870->leave($__internal_d525a5ebc1b10bc830ddb634292e64ed89fd73bc043e308731f933b2611f3870_prof);

        
        $__internal_566fbebf567a8b26907581c9a4368d1ee4456cfa335f6a9644c6f04e8e414b4a->leave($__internal_566fbebf567a8b26907581c9a4368d1ee4456cfa335f6a9644c6f04e8e414b4a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c662cb447041ccc2e101212c01ffff78e06872f3d332ec2fac8cf15a7fa46c0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c662cb447041ccc2e101212c01ffff78e06872f3d332ec2fac8cf15a7fa46c0b->enter($__internal_c662cb447041ccc2e101212c01ffff78e06872f3d332ec2fac8cf15a7fa46c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8e1fed1970ca632011b4710a992597909fd5baafb04f69571219355fb73072ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e1fed1970ca632011b4710a992597909fd5baafb04f69571219355fb73072ac->enter($__internal_8e1fed1970ca632011b4710a992597909fd5baafb04f69571219355fb73072ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajouter une livraison";
        
        $__internal_8e1fed1970ca632011b4710a992597909fd5baafb04f69571219355fb73072ac->leave($__internal_8e1fed1970ca632011b4710a992597909fd5baafb04f69571219355fb73072ac_prof);

        
        $__internal_c662cb447041ccc2e101212c01ffff78e06872f3d332ec2fac8cf15a7fa46c0b->leave($__internal_c662cb447041ccc2e101212c01ffff78e06872f3d332ec2fac8cf15a7fa46c0b_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9d5303dfb1fa9d1a80289c5c9d8fdff4b3473999fe6d5ba598d8591392bd0548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d5303dfb1fa9d1a80289c5c9d8fdff4b3473999fe6d5ba598d8591392bd0548->enter($__internal_9d5303dfb1fa9d1a80289c5c9d8fdff4b3473999fe6d5ba598d8591392bd0548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5473437319ee6b4febc678be6352d251a1e15cbec2a1741c190650c20ca48f6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5473437319ee6b4febc678be6352d251a1e15cbec2a1741c190650c20ca48f6b->enter($__internal_5473437319ee6b4febc678be6352d251a1e15cbec2a1741c190650c20ca48f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
";
        
        $__internal_5473437319ee6b4febc678be6352d251a1e15cbec2a1741c190650c20ca48f6b->leave($__internal_5473437319ee6b4febc678be6352d251a1e15cbec2a1741c190650c20ca48f6b_prof);

        
        $__internal_9d5303dfb1fa9d1a80289c5c9d8fdff4b3473999fe6d5ba598d8591392bd0548->leave($__internal_9d5303dfb1fa9d1a80289c5c9d8fdff4b3473999fe6d5ba598d8591392bd0548_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b7bb8ae8af80563e53b146471ec117a82c2d09f50c0c611b2cc120ff5c41378 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b7bb8ae8af80563e53b146471ec117a82c2d09f50c0c611b2cc120ff5c41378->enter($__internal_8b7bb8ae8af80563e53b146471ec117a82c2d09f50c0c611b2cc120ff5c41378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a649dc0403b552783ba343cc1d74e95bc728bc81f7e437283bdac8047a0967d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a649dc0403b552783ba343cc1d74e95bc728bc81f7e437283bdac8047a0967d->enter($__internal_1a649dc0403b552783ba343cc1d74e95bc728bc81f7e437283bdac8047a0967d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<h1>Liste des couleurs disponibles</h1>
<table>
  <tr>
    <td>Libelé</td>
    <td>Type</td>
    <td>Catégorie</td>
    <td>Prix unitaire</td>
  </tr>
  <tr>
    <td>Noir</td>
    <td>Prestation</td>
    <td>Couleur Cheveux</td>
    <td>15.00€</td>
  </tr>
  <tr>
    <td>Blond</td>
    <td>Prestation</td>
    <td>Couleur</td>
    <td>12.99€</td>
  </tr>
</table>
    <a href=";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueilstock");
        echo "><button type=\"button\">Retour</button></a>
";
        
        $__internal_1a649dc0403b552783ba343cc1d74e95bc728bc81f7e437283bdac8047a0967d->leave($__internal_1a649dc0403b552783ba343cc1d74e95bc728bc81f7e437283bdac8047a0967d_prof);

        
        $__internal_8b7bb8ae8af80563e53b146471ec117a82c2d09f50c0c611b2cc120ff5c41378->leave($__internal_8b7bb8ae8af80563e53b146471ec117a82c2d09f50c0c611b2cc120ff5c41378_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle:Default:listeCouleur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 30,  89 => 9,  80 => 8,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
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

{% block title %}Ajouter une livraison{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
{% endblock %}

{% block body %}
<h1>Liste des couleurs disponibles</h1>
<table>
  <tr>
    <td>Libelé</td>
    <td>Type</td>
    <td>Catégorie</td>
    <td>Prix unitaire</td>
  </tr>
  <tr>
    <td>Noir</td>
    <td>Prestation</td>
    <td>Couleur Cheveux</td>
    <td>15.00€</td>
  </tr>
  <tr>
    <td>Blond</td>
    <td>Prestation</td>
    <td>Couleur</td>
    <td>12.99€</td>
  </tr>
</table>
    <a href={{ path('accueilstock') }}><button type=\"button\">Retour</button></a>
{% endblock %}
", "StockBundle:Default:listeCouleur.html.twig", "D:\\wamp\\www\\ProjetPtsCoiffeur\\src\\StockBundle/Resources/views/Default/listeCouleur.html.twig");
    }
}
