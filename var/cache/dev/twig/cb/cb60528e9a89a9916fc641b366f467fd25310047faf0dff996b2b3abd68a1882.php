<?php

/* StockBundle:Default:index.html.twig */
class __TwigTemplate_ef1d5e0ba40368082f65cb64988f722cbf055bd508ee491d1d02a265dc54d0bc extends Twig_Template
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
        $__internal_8f0e5073fab808c7784213130dc598d53fddce2d26c7bad22c07d20d845d373b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f0e5073fab808c7784213130dc598d53fddce2d26c7bad22c07d20d845d373b->enter($__internal_8f0e5073fab808c7784213130dc598d53fddce2d26c7bad22c07d20d845d373b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:index.html.twig"));

        $__internal_e7fd4411998a640cfac7049d08bd51a766d21d40823c2319df4cb9778de04c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7fd4411998a640cfac7049d08bd51a766d21d40823c2319df4cb9778de04c29->enter($__internal_e7fd4411998a640cfac7049d08bd51a766d21d40823c2319df4cb9778de04c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_8f0e5073fab808c7784213130dc598d53fddce2d26c7bad22c07d20d845d373b->leave($__internal_8f0e5073fab808c7784213130dc598d53fddce2d26c7bad22c07d20d845d373b_prof);

        
        $__internal_e7fd4411998a640cfac7049d08bd51a766d21d40823c2319df4cb9778de04c29->leave($__internal_e7fd4411998a640cfac7049d08bd51a766d21d40823c2319df4cb9778de04c29_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "StockBundle:Default:index.html.twig", "/home/kevin/Dropbox/PTS3/ProjetPtsCoiffeur/src/StockBundle/Resources/views/Default/index.html.twig");
    }
}
