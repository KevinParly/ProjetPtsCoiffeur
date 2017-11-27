<?php

/* StockBundle:Default:acceuilstock.html.twig */
class __TwigTemplate_a5b87b82f363fe8e903e9fcbf3f1df62f36906f6a021e8d4f4ed499f684ea2f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e14768a32742289cd8919147c63bd85abfef7131f15a0d346e49fce4be5fc86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e14768a32742289cd8919147c63bd85abfef7131f15a0d346e49fce4be5fc86->enter($__internal_4e14768a32742289cd8919147c63bd85abfef7131f15a0d346e49fce4be5fc86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:acceuilstock.html.twig"));

        $__internal_d02c08a45253da5504e9962b389e42f663cd40f537b19bb631025ff86da5ba79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02c08a45253da5504e9962b389e42f663cd40f537b19bb631025ff86da5ba79->enter($__internal_d02c08a45253da5504e9962b389e42f663cd40f537b19bb631025ff86da5ba79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:acceuilstock.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>Acceuil de la gestion des stocks</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
</head>
<body>
    <h1>Bienvenue sur l'acceuil de gestion des stocks</h1>
    <a href=";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutproduit");
        echo ">
    <button type=\"button\">Ajouter un produit</button>
    </a>
    <button type=\"button\">Modifier un produit</button>
    <button type=\"button\">Afficher la liste des produits</button>
    <button type=\"button\">Ajouter une livraisons</button>
    <button type=\"button\">Afficher les couleurs</button>
</body>
</html>";
        
        $__internal_4e14768a32742289cd8919147c63bd85abfef7131f15a0d346e49fce4be5fc86->leave($__internal_4e14768a32742289cd8919147c63bd85abfef7131f15a0d346e49fce4be5fc86_prof);

        
        $__internal_d02c08a45253da5504e9962b389e42f663cd40f537b19bb631025ff86da5ba79->leave($__internal_d02c08a45253da5504e9962b389e42f663cd40f537b19bb631025ff86da5ba79_prof);

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
        return array (  36 => 10,  25 => 1,);
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
    <title>Acceuil de la gestion des stocks</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
</head>
<body>
    <h1>Bienvenue sur l'acceuil de gestion des stocks</h1>
    <a href={{ path('ajoutproduit') }}>
    <button type=\"button\">Ajouter un produit</button>
    </a>
    <button type=\"button\">Modifier un produit</button>
    <button type=\"button\">Afficher la liste des produits</button>
    <button type=\"button\">Ajouter une livraisons</button>
    <button type=\"button\">Afficher les couleurs</button>
</body>
</html>", "StockBundle:Default:acceuilstock.html.twig", "D:\\wamp\\www\\ProjetPtsCoiffeur\\src\\StockBundle/Resources/views/Default/acceuilstock.html.twig");
    }
}
