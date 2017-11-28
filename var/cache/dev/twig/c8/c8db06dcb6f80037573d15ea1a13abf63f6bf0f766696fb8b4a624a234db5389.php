<?php

/* StockBundle:Default:ajoutLivraison.html.twig */
class __TwigTemplate_addd2c0893c175414285bd309814ee981110a6c5e077390bc4b5b00a16037e50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "StockBundle:Default:ajoutLivraison.html.twig", 1);
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
        $__internal_8403d255dbdc09e8f8d1cd37ad0063f9cdbd7958d1f25af7624db270b46df239 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8403d255dbdc09e8f8d1cd37ad0063f9cdbd7958d1f25af7624db270b46df239->enter($__internal_8403d255dbdc09e8f8d1cd37ad0063f9cdbd7958d1f25af7624db270b46df239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:ajoutLivraison.html.twig"));

        $__internal_85ea0549b748e1f3144ae79bf4744679c78009d75f58ff2256769e8004d5448d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ea0549b748e1f3144ae79bf4744679c78009d75f58ff2256769e8004d5448d->enter($__internal_85ea0549b748e1f3144ae79bf4744679c78009d75f58ff2256769e8004d5448d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle:Default:ajoutLivraison.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8403d255dbdc09e8f8d1cd37ad0063f9cdbd7958d1f25af7624db270b46df239->leave($__internal_8403d255dbdc09e8f8d1cd37ad0063f9cdbd7958d1f25af7624db270b46df239_prof);

        
        $__internal_85ea0549b748e1f3144ae79bf4744679c78009d75f58ff2256769e8004d5448d->leave($__internal_85ea0549b748e1f3144ae79bf4744679c78009d75f58ff2256769e8004d5448d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3190e10babd62b8932eb4180835fefda7283df915ab7a8cd94cdf5081604717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3190e10babd62b8932eb4180835fefda7283df915ab7a8cd94cdf5081604717->enter($__internal_e3190e10babd62b8932eb4180835fefda7283df915ab7a8cd94cdf5081604717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f0dc18144e5facff1dacc72bab729fb97ea7e10dda76f6f2df05c78c0772401e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0dc18144e5facff1dacc72bab729fb97ea7e10dda76f6f2df05c78c0772401e->enter($__internal_f0dc18144e5facff1dacc72bab729fb97ea7e10dda76f6f2df05c78c0772401e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajouter une livraison";
        
        $__internal_f0dc18144e5facff1dacc72bab729fb97ea7e10dda76f6f2df05c78c0772401e->leave($__internal_f0dc18144e5facff1dacc72bab729fb97ea7e10dda76f6f2df05c78c0772401e_prof);

        
        $__internal_e3190e10babd62b8932eb4180835fefda7283df915ab7a8cd94cdf5081604717->leave($__internal_e3190e10babd62b8932eb4180835fefda7283df915ab7a8cd94cdf5081604717_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_74596fb3c3d4737d5e7a59f17f1f327274ec497aae06acde8b95a9a9d44769b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74596fb3c3d4737d5e7a59f17f1f327274ec497aae06acde8b95a9a9d44769b6->enter($__internal_74596fb3c3d4737d5e7a59f17f1f327274ec497aae06acde8b95a9a9d44769b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ac7985c38388e7b405726e4f1b9e36ac44ccbda1ccc93ec14cf63e5cbc0fc056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac7985c38388e7b405726e4f1b9e36ac44ccbda1ccc93ec14cf63e5cbc0fc056->enter($__internal_ac7985c38388e7b405726e4f1b9e36ac44ccbda1ccc93ec14cf63e5cbc0fc056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
";
        
        $__internal_ac7985c38388e7b405726e4f1b9e36ac44ccbda1ccc93ec14cf63e5cbc0fc056->leave($__internal_ac7985c38388e7b405726e4f1b9e36ac44ccbda1ccc93ec14cf63e5cbc0fc056_prof);

        
        $__internal_74596fb3c3d4737d5e7a59f17f1f327274ec497aae06acde8b95a9a9d44769b6->leave($__internal_74596fb3c3d4737d5e7a59f17f1f327274ec497aae06acde8b95a9a9d44769b6_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_0cbfd2d09d3b1418c93125117e5302aa4b7989ef9ad7e574d6ca7898da67284f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cbfd2d09d3b1418c93125117e5302aa4b7989ef9ad7e574d6ca7898da67284f->enter($__internal_0cbfd2d09d3b1418c93125117e5302aa4b7989ef9ad7e574d6ca7898da67284f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf12107425c60a66ae8245d9bf358a5aa8a5067cce73795ae750a45bdf91e975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf12107425c60a66ae8245d9bf358a5aa8a5067cce73795ae750a45bdf91e975->enter($__internal_cf12107425c60a66ae8245d9bf358a5aa8a5067cce73795ae750a45bdf91e975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "  <h1>Remplir les champs textuels pour ajouter une livraison</h1>
";
        
        $__internal_cf12107425c60a66ae8245d9bf358a5aa8a5067cce73795ae750a45bdf91e975->leave($__internal_cf12107425c60a66ae8245d9bf358a5aa8a5067cce73795ae750a45bdf91e975_prof);

        
        $__internal_0cbfd2d09d3b1418c93125117e5302aa4b7989ef9ad7e574d6ca7898da67284f->leave($__internal_0cbfd2d09d3b1418c93125117e5302aa4b7989ef9ad7e574d6ca7898da67284f_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle:Default:ajoutLivraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 9,  80 => 8,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
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
  <h1>Remplir les champs textuels pour ajouter une livraison</h1>
{% endblock %}
", "StockBundle:Default:ajoutLivraison.html.twig", "/home/kevin/Dropbox/ProjetPtsCoiffeur/src/StockBundle/Resources/views/Default/ajoutLivraison.html.twig");
    }
}
