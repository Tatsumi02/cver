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

/* cv/cv-form.html.twig */
class __TwigTemplate_0cc5d9e0aa0216e9bc001dc96dbfc39c66af31823fa0a0937267bc483b8911ba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cv/cv-form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cv/cv-form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cv/cv-form.html.twig", 1);
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

        echo " Remplissez votre cv en quelques etapes!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/cv-form.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"notifi\">
  Bon remplissage <b>";
        // line 9
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "nom", [], "any", false, false, false, 9)), "html", null, true);
        echo "</b>
</div>
    <section class=\"box feature \">
       <div class=\"container\">
              

             
       <form method=\"post\" action=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("save_cv");
        echo "\" enctype=\"multipart/form-data\" class=\"jumbotron col-md-12\" id=\"\">

                
                <div id=\"profiler col-md-12\"></div>
                <div id=\"sender\"></div>

                <div id=\"init\">

                <fieldset id=\"f2\">
                    <legend id=\"l2\" class=\"col-md-3\">informations personnelles</legend>
                  <input type=\"text\" name=\"nom\" class=\"form-control col-md-6\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "nom", [], "any", false, false, false, 26), "html", null, true);
        echo "\" id=\"in\" placeholder=\"nom\" />
                  <input type=\"text\" name=\"prenom\" class=\"form-control col-md-5 in\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "prenom", [], "any", false, false, false, 27), "html", null, true);
        echo "\" id=\"in\" placeholder=\"prenom\" />
                  <br /><br />
                  <input type=\"text\" name=\"titre_pro\" class=\"form-control col-md-6 in\" value=\"\" id=\"in\" placeholder=\"titre professionnel\" />

                  <input type=\"text\" name=\"adresse_post\" class=\"form-control col-md-5 in\" value=\"\" id=\"in\" placeholder=\"adresse postal\" />
                  <br /><br />

                  <input type=\"text\" name=\"code_post\" class=\"form-control col-md-6 in\" value=\"\" id=\"in\" placeholder=\"code postal\" />

                  <input type=\"text\" name=\"phone\" class=\"form-control col-md-5 in\" value=\"\" id=\"in\" placeholder=\"numero de telephone\" />
                  <br /><br />
                   <input type=\"email\" name=\"email\" class=\"form-control col-md-11 in\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "email", [], "any", false, false, false, 38), "html", null, true);
        echo "\" id=\"in\" placeholder=\"email\" />
                </fieldset>
    <br /><br />
    <fieldset id=\"f3\">
   <legend id=\"l3\" class=\"col-md-3\"> Parcours proffessionnelle</legend>

                <input type=\"text\" name=\"intitule\" class=\"form-control col-md-6 in\" value=\"\" id=\"in\" placeholder=\"intitule de post (ex: chef de projet)\" />

                <input type=\"text\" name=\"ville\" class=\"form-control col-md-5 in\" value=\"\" id=\"in\" placeholder=\"Ville (ex: Douala)\" />

                <br /><br />

                date de debut<br /><input type=\"date\" name=\"date_debut\" class=\"form-control col-md-6 in\" value=\"\" id=\"in\" placeholder=\"date de debut\" />

                 <input type=\"text\" name=\"employeur\" class=\"form-control col-md-5 in\" value=\"\" id=\"in\" placeholder=\"employeur(ex:Kiro game)\" />

                 <br /><br />

                 <input type=\"text\" name=\"departement\" class=\"form-control col-md-11 in\" value=\"\" id=\"in\" placeholder=\"departement (ex: Moungo)\" />

                 <br /><br />date de fin<br /><input type=\"date\" name=\"date_fine\" class=\"form-control col-md-11 in\" value=\"\" id=\"in\" placeholder=\"\" />

                 <br /><input type=\"checkbox\" name=\"travailActu\" id=\"travailActu\" /> <label for=\"travailActu\" style=\"display:inline;\">j'y travaille actuellement </label>
               
               <br /><br />
                    quel etait (ou sont) vos responsabilites <br /> decrivez les dans le champ ci-dessous <br /><br />

                      <textarea name=\"description_respon\" class=\"form-control col-md-11 in\" placeholder=\"decrivez par tirets ou numero\"></textarea><br /><br />
                      <hr />
                      <a href=\"#\" class=\"btn btn-warning \"> Ajouter un autre parcours</a>
        </fieldset>
        <br /><br />
                      
                      <fieldset id=\"f\">
                        <legend id=\"l\" class=\"col-md-3\"> <h3 style=\" display:inline; color:white;\">Formation</h3> </legend>
                       <input type=\"text\" class=\"form-control col-md-6 in\" placeholder=\"nom de l'etablisement \" name=\"etablisement\" id=\"in\" />

                       <input type=\"text\" class=\"form-control col-md-5 in\" id=\"in\" placeholder=\"diplome(ex:licence en art)\" name=\"diplome\" />
                       <br />

                       <br /><input type=\"text\" class=\"form-control col-md-6 in\" placeholder=\"Domaine d'etude(ex:economie)\" name=\"domaine_etude\" id=\"in\" />

                       <input type=\"text\" class=\"form-control col-md-5 in\" placeholder=\"zone geographique de l'etablisement(ex:Douala)\" id=\"in\" name=\"zone_geographique\" /><br /><br />

                       <input type=\"text\" class=\"form-control col-md-11 in\" placeholder=\"Annee d'obtention(Ex: 2015)\" id=\"in\" name=\"domaine_etude\" />
                        <hr />
                          <legend> <a href=\"#\" class=\"btn btn-warning \">ajouer une autre formation</a> </legend>
                      </fieldset>
    <br /><br />
    <fieldset id=\"f4\">
      <legend id=\"l4\" class=\"col-md-4\">Note professionnel</legend>
      Decrivez vos competences dans le champ ci-dessous
      <textarea name=\"competences\" class=\"col-md-11 form-control in\" placeholder=\"decrivez en tirets ou en points\"></textarea><br /><br />
                                   
                              
        Decrivez votre profile professionnel ci-dessous<br /><br />
      <textarea name=\"profilePro\" class=\"col-md-11 form-control in\" placeholder=\"decrivez en tirets ou en points\"></textarea><br />
      <br /> <!-- votre photo de profil<input type=\"file\" class=\"form-control col-md-11 in\" name=\"pdp\" /><br /> -->
     </fieldset>
      <br />'


      <br /><br />
 <button class=\"btn btn-primary col-md-5\" type=\"submit\" id=\"etapeur\">Voir un appercu de votre cv <span class=\"fa fa-plus\"></span></button>

                </div>
                   

              </form>

            </div>

       
       <br /><br />
    </section>
<style>
  #in{
  \tdisplay: inline;
    height: 70px;
  }
</style>

               
                                   
                   


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cv/cv-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 38,  140 => 27,  136 => 26,  123 => 16,  113 => 9,  110 => 8,  100 => 7,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Remplissez votre cv en quelques etapes!{% endblock %}
{% block stylesheets %}
  <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/cv-form.css\">
{% endblock %}
{% block body %}
<div id=\"notifi\">
  Bon remplissage <b>{{ app.user.nom |upper }}</b>
</div>
    <section class=\"box feature \">
       <div class=\"container\">
              

             
       <form method=\"post\" action=\"{{ path('save_cv') }}\" enctype=\"multipart/form-data\" class=\"jumbotron col-md-12\" id=\"\">

                
                <div id=\"profiler col-md-12\"></div>
                <div id=\"sender\"></div>

                <div id=\"init\">

                <fieldset id=\"f2\">
                    <legend id=\"l2\" class=\"col-md-3\">informations personnelles</legend>
                  <input type=\"text\" name=\"nom\" class=\"form-control col-md-6\" value=\"{{ app.user.nom }}\" id=\"in\" placeholder=\"nom\" />
                  <input type=\"text\" name=\"prenom\" class=\"form-control col-md-5 in\" value=\"{{ app.user.prenom }}\" id=\"in\" placeholder=\"prenom\" />
                  <br /><br />
                  <input type=\"text\" name=\"titre_pro\" class=\"form-control col-md-6 in\" value=\"\" id=\"in\" placeholder=\"titre professionnel\" />

                  <input type=\"text\" name=\"adresse_post\" class=\"form-control col-md-5 in\" value=\"\" id=\"in\" placeholder=\"adresse postal\" />
                  <br /><br />

                  <input type=\"text\" name=\"code_post\" class=\"form-control col-md-6 in\" value=\"\" id=\"in\" placeholder=\"code postal\" />

                  <input type=\"text\" name=\"phone\" class=\"form-control col-md-5 in\" value=\"\" id=\"in\" placeholder=\"numero de telephone\" />
                  <br /><br />
                   <input type=\"email\" name=\"email\" class=\"form-control col-md-11 in\" value=\"{{ app.user.email }}\" id=\"in\" placeholder=\"email\" />
                </fieldset>
    <br /><br />
    <fieldset id=\"f3\">
   <legend id=\"l3\" class=\"col-md-3\"> Parcours proffessionnelle</legend>

                <input type=\"text\" name=\"intitule\" class=\"form-control col-md-6 in\" value=\"\" id=\"in\" placeholder=\"intitule de post (ex: chef de projet)\" />

                <input type=\"text\" name=\"ville\" class=\"form-control col-md-5 in\" value=\"\" id=\"in\" placeholder=\"Ville (ex: Douala)\" />

                <br /><br />

                date de debut<br /><input type=\"date\" name=\"date_debut\" class=\"form-control col-md-6 in\" value=\"\" id=\"in\" placeholder=\"date de debut\" />

                 <input type=\"text\" name=\"employeur\" class=\"form-control col-md-5 in\" value=\"\" id=\"in\" placeholder=\"employeur(ex:Kiro game)\" />

                 <br /><br />

                 <input type=\"text\" name=\"departement\" class=\"form-control col-md-11 in\" value=\"\" id=\"in\" placeholder=\"departement (ex: Moungo)\" />

                 <br /><br />date de fin<br /><input type=\"date\" name=\"date_fine\" class=\"form-control col-md-11 in\" value=\"\" id=\"in\" placeholder=\"\" />

                 <br /><input type=\"checkbox\" name=\"travailActu\" id=\"travailActu\" /> <label for=\"travailActu\" style=\"display:inline;\">j'y travaille actuellement </label>
               
               <br /><br />
                    quel etait (ou sont) vos responsabilites <br /> decrivez les dans le champ ci-dessous <br /><br />

                      <textarea name=\"description_respon\" class=\"form-control col-md-11 in\" placeholder=\"decrivez par tirets ou numero\"></textarea><br /><br />
                      <hr />
                      <a href=\"#\" class=\"btn btn-warning \"> Ajouter un autre parcours</a>
        </fieldset>
        <br /><br />
                      
                      <fieldset id=\"f\">
                        <legend id=\"l\" class=\"col-md-3\"> <h3 style=\" display:inline; color:white;\">Formation</h3> </legend>
                       <input type=\"text\" class=\"form-control col-md-6 in\" placeholder=\"nom de l'etablisement \" name=\"etablisement\" id=\"in\" />

                       <input type=\"text\" class=\"form-control col-md-5 in\" id=\"in\" placeholder=\"diplome(ex:licence en art)\" name=\"diplome\" />
                       <br />

                       <br /><input type=\"text\" class=\"form-control col-md-6 in\" placeholder=\"Domaine d'etude(ex:economie)\" name=\"domaine_etude\" id=\"in\" />

                       <input type=\"text\" class=\"form-control col-md-5 in\" placeholder=\"zone geographique de l'etablisement(ex:Douala)\" id=\"in\" name=\"zone_geographique\" /><br /><br />

                       <input type=\"text\" class=\"form-control col-md-11 in\" placeholder=\"Annee d'obtention(Ex: 2015)\" id=\"in\" name=\"domaine_etude\" />
                        <hr />
                          <legend> <a href=\"#\" class=\"btn btn-warning \">ajouer une autre formation</a> </legend>
                      </fieldset>
    <br /><br />
    <fieldset id=\"f4\">
      <legend id=\"l4\" class=\"col-md-4\">Note professionnel</legend>
      Decrivez vos competences dans le champ ci-dessous
      <textarea name=\"competences\" class=\"col-md-11 form-control in\" placeholder=\"decrivez en tirets ou en points\"></textarea><br /><br />
                                   
                              
        Decrivez votre profile professionnel ci-dessous<br /><br />
      <textarea name=\"profilePro\" class=\"col-md-11 form-control in\" placeholder=\"decrivez en tirets ou en points\"></textarea><br />
      <br /> <!-- votre photo de profil<input type=\"file\" class=\"form-control col-md-11 in\" name=\"pdp\" /><br /> -->
     </fieldset>
      <br />'


      <br /><br />
 <button class=\"btn btn-primary col-md-5\" type=\"submit\" id=\"etapeur\">Voir un appercu de votre cv <span class=\"fa fa-plus\"></span></button>

                </div>
                   

              </form>

            </div>

       
       <br /><br />
    </section>
<style>
  #in{
  \tdisplay: inline;
    height: 70px;
  }
</style>

               
                                   
                   


{% endblock %}", "cv/cv-form.html.twig", "/var/www/html/symfony/cver/templates/cv/cv-form.html.twig");
    }
}
