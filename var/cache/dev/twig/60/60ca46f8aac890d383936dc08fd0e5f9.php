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

/* premier_controlleur/index.html.twig */
class __TwigTemplate_62c4fae7582a8dd22ba4dc667786b61f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "premier_controlleur/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "premier_controlleur/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "premier_controlleur/index.html.twig", 1);
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
        echo "
 <div style=\"margin-bottom:15px; \">
      <div class=\"container-fluide\"  class=\"container-sm\">
        <div class=\"collapse navbar-collapse\" id=\"navbarText\"  style=\"display:inline\">
              <nav class=\"navbar  navbar-expand-lg navbar-dark bg-dark\">
                <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                  <li class=\"nav-item\">
                    <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Accueil</a>
                    <li class=\"nav-item\">
                      <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">A propos</a>
                
                </ul>

            
              /nav>
        </div>
      </div>

      <div class=\"row1\" class=\"container-sm\"  style=\"text-align:center ;\">

          
        <img src=";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/raw.jpeg"), "html", null, true);
        echo "  class=\"img-fluid\" >
      </div>
            
        <div style=\"text-align:center\">
          <p> 
          <br>Bonjour et bienvenu</div>   
        </div> 

      <div  style=\"text-align:center\"  class=\"footer\" class=\"container-sm\" >
        <button class=\"btn btn-primary\">ACCUIEL</button>
      </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "premier_controlleur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 27,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello PremierControlleurController!{% endblock %}

{% block body %}

 <div style=\"margin-bottom:15px; \">
      <div class=\"container-fluide\"  class=\"container-sm\">
        <div class=\"collapse navbar-collapse\" id=\"navbarText\"  style=\"display:inline\">
              <nav class=\"navbar  navbar-expand-lg navbar-dark bg-dark\">
                <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                  <li class=\"nav-item\">
                    <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Accueil</a>
                    <li class=\"nav-item\">
                      <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">A propos</a>
                
                </ul>

            
              /nav>
        </div>
      </div>

      <div class=\"row1\" class=\"container-sm\"  style=\"text-align:center ;\">

          
        <img src={{ asset('media/raw.jpeg') }}  class=\"img-fluid\" >
      </div>
            
        <div style=\"text-align:center\">
          <p> 
          <br>Bonjour et bienvenu</div>   
        </div> 

      <div  style=\"text-align:center\"  class=\"footer\" class=\"container-sm\" >
        <button class=\"btn btn-primary\">ACCUIEL</button>
      </div>
  </div>
{% endblock %}
", "premier_controlleur/index.html.twig", "/home/ticktickelvis/facebook/accueil/accuiel/templates/premier_controlleur/index.html.twig");
    }
}
