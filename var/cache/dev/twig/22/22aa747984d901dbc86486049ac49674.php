<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* premier_controlleur/page404.html.twig */
class __TwigTemplate_6da7f463d8e3e99dc8ef685d1380ae9b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "premier_controlleur/page404.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "premier_controlleur/page404.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "premier_controlleur/page404.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello PremierControlleurController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
        <div class=\"position-relative\" style=\"display:block; bottom:40px;right:0 ;top: 180px;left:0%\"> 

                <div class=\"text-center\" >
                <img src=";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/SNIGS.png"), "html", null, true);
        echo "  class=\"img-fluid\"  width=\"300px height=300px\">
                </div >
                
                      <div class=\"text-center\" style=\"display:block; bottom:40px;right:0 ;top: 180px;left:0%\" >
                              <h1 class=\"display-1 fw-bold text-justify\">404</h1>
                              <p class=\"fs-3\"> <span class=\"text-danger\">Opps!</span> Page not found.</p>
                              <p class=\"lead\">
                                      The page you’re looking for doesn’t exist.
                                  </p>
                              <a href=\"index.html\"  
                              class=\"btn btn-primary\" 
                             style=\" bottom:40px;right:auto ;top: 200px;left:45%\">Retour</a>
                              
                   
                         </div>
       </div>   
  </div>           
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "premier_controlleur/page404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello PremierControlleurController!{% endblock %}

{% block body %}
<div class=\"container\">
        <div class=\"position-relative\" style=\"display:block; bottom:40px;right:0 ;top: 180px;left:0%\"> 

                <div class=\"text-center\" >
                <img src={{ asset('media/SNIGS.png') }}  class=\"img-fluid\"  width=\"300px height=300px\">
                </div >
                
                      <div class=\"text-center\" style=\"display:block; bottom:40px;right:0 ;top: 180px;left:0%\" >
                              <h1 class=\"display-1 fw-bold text-justify\">404</h1>
                              <p class=\"fs-3\"> <span class=\"text-danger\">Opps!</span> Page not found.</p>
                              <p class=\"lead\">
                                      The page you’re looking for doesn’t exist.
                                  </p>
                              <a href=\"index.html\"  
                              class=\"btn btn-primary\" 
                             style=\" bottom:40px;right:auto ;top: 200px;left:45%\">Retour</a>
                              
                   
                         </div>
       </div>   
  </div>           
{% endblock %}

", "premier_controlleur/page404.html.twig", "/home/ticktickelvis/facebook/accueil/accuiel/templates/premier_controlleur/page404.html.twig");
    }
}
