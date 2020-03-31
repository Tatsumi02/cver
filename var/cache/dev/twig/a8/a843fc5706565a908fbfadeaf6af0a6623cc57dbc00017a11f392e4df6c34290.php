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

/* cv/inscription.html.twig */
class __TwigTemplate_f2934eded4c7e579c9f237710945717f0312d17e9d85a9e276ca03c909d39b37 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cv/inscription.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cv/inscription.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cv/inscription.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Inscrivez vous!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo " 
    <section class=\"box feature \">
       <div class=\"container\">
           <h2>Vous devez cree un compte avant de commencer </h2>
           <form class=\"jumbotron\" method=\"post\" action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("save_user");
        echo "\">

             
              <div class=\"col-md-5 pull-right\" id=\"pub2\">
                     <img src=\"../images/chap.jpg\" width=\"100%\" height=\"100%\" id=\"pub\">
              </div>

            <div class=\"col-md-12\">
             <input type=\"text\" name=\"nom\" placeholder=\"nom\" class=\"form-control col-md-3\" id=\"in\" required=\"true\" />
             <input type=\"text\" name=\"prenom\" placeholder=\"prenom\" class=\"form-control col-md-3\" id=\"in\" required=\"true\"  />
             <br /><br />
             <input type=\"email\" name=\"email\" placeholder=\"email\" class=\"form-control col-md-6\" id=\"in\" required=\"true\" />
             <br /><br />
             <input type=\"password\" name=\"password\" placeholder=\"mot de pass\" class=\"form-control col-md-3\" id=\"in\" required=\"true\"  />
             <input type=\"password\" name=\"password2\" placeholder=\"mot de pass (repetition)\" class=\"form-control col-md-3\" id=\"in\" required=\"true\" />
             <br /><br />
             <button type=\"submit\" class=\"btn btn-primary col-md-6\"> Inscription <span class=\"fa fa-user\"></span></button>
             <br /><br />
             <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dash");
        echo "\" class=\"btn btn-success col-md-6\"> connexion <span class=\"fa fa-log-in\"></span> </a>
            </div>
           </form>
       </div>
       <br /><br >
    </section>
 <style type=\"text/css\">
   #in{
   \tdisplay: inline;
   }
 </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "  <script type=\"text/javascript\" src=\"../js/cv-script.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cv/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 41,  138 => 40,  116 => 28,  95 => 10,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Inscrivez vous!{% endblock %}

{% block body %}
 
    <section class=\"box feature \">
       <div class=\"container\">
           <h2>Vous devez cree un compte avant de commencer </h2>
           <form class=\"jumbotron\" method=\"post\" action=\"{{ path('save_user') }}\">

             
              <div class=\"col-md-5 pull-right\" id=\"pub2\">
                     <img src=\"../images/chap.jpg\" width=\"100%\" height=\"100%\" id=\"pub\">
              </div>

            <div class=\"col-md-12\">
             <input type=\"text\" name=\"nom\" placeholder=\"nom\" class=\"form-control col-md-3\" id=\"in\" required=\"true\" />
             <input type=\"text\" name=\"prenom\" placeholder=\"prenom\" class=\"form-control col-md-3\" id=\"in\" required=\"true\"  />
             <br /><br />
             <input type=\"email\" name=\"email\" placeholder=\"email\" class=\"form-control col-md-6\" id=\"in\" required=\"true\" />
             <br /><br />
             <input type=\"password\" name=\"password\" placeholder=\"mot de pass\" class=\"form-control col-md-3\" id=\"in\" required=\"true\"  />
             <input type=\"password\" name=\"password2\" placeholder=\"mot de pass (repetition)\" class=\"form-control col-md-3\" id=\"in\" required=\"true\" />
             <br /><br />
             <button type=\"submit\" class=\"btn btn-primary col-md-6\"> Inscription <span class=\"fa fa-user\"></span></button>
             <br /><br />
             <a href=\"{{ path('dash') }}\" class=\"btn btn-success col-md-6\"> connexion <span class=\"fa fa-log-in\"></span> </a>
            </div>
           </form>
       </div>
       <br /><br >
    </section>
 <style type=\"text/css\">
   #in{
   \tdisplay: inline;
   }
 </style>
{% endblock %}
{% block javascripts %}
  <script type=\"text/javascript\" src=\"../js/cv-script.js\"></script>
{% endblock %}", "cv/inscription.html.twig", "/var/www/html/symfony/cver/templates/cv/inscription.html.twig");
    }
}
