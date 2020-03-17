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
              <h3> Remplissez votre cv en 6 etapes </h3>
              <kbd> etape <span class=\"badg\"> 1/6 </span></kbd>
              <form method=\"post\" action=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("save_cv");
        echo "\" enctype=\"multipart/form-data\" class=\"jumbotron col-md-12\" id=\"\">

                
                <div id=\"profiler\"></div>
                <div id=\"sender\"></div>

                <div id=\"init\">
                  <input type=\"text\" name=\"nom\" class=\"form-control col-md-5\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "nom", [], "any", false, false, false, 18), "html", null, true);
        echo "\" id=\"in\" placeholder=\"nom\" />
                  <input type=\"text\" name=\"prenom\" class=\"form-control col-md-5\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "prenom", [], "any", false, false, false, 19), "html", null, true);
        echo "\" id=\"in\" placeholder=\"prenom\" />
                  <br /><br />
                  <input type=\"text\" name=\"titre_pro\" class=\"form-control col-md-5\" value=\"\" id=\"in\" placeholder=\"titre professionnel\" />

                  <input type=\"text\" name=\"adresse_post\" class=\"form-control col-md-5\" value=\"\" id=\"in\" placeholder=\"adresse postal\" />
                  <br /><br />

                  <input type=\"text\" name=\"code_post\" class=\"form-control col-md-5\" value=\"\" id=\"in\" placeholder=\"code postal\" />

                  <input type=\"text\" name=\"phone\" class=\"form-control col-md-5\" value=\"\" id=\"in\" placeholder=\"numero de telephone\" />
                  <br /><br />
                   <input type=\"email\" name=\"email\" class=\"form-control col-md-10\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "email", [], "any", false, false, false, 30), "html", null, true);
        echo "\" id=\"in\" placeholder=\"email\" />
                      
                  

                 <br /><br />
                 <button class=\"btn btn-primary col-md-5\" type=\"button\" id=\"etapeur\">Etape suivante <span class=\"fa fa-plus\"></span></button>
                </div>
                   

              </form>

            </div>

       
       <br /><br />
    </section>
<style>
  #in{
  \tdisplay: inline;
  }
</style>
<script type=\"text/javascript\">
  \$(function(){
        \$('#etapeur').click(function(){
        \t\$('.badg').text('2/6');
        \t\$('#profiler').html(''+

                '<input type=\"text\" name=\"intitule\" class=\"form-control col-md-5 p\" value=\"\" id=\"in\" placeholder=\"intitule de post (ex: chef de projet)\" />'+

                '<input type=\"text\" name=\"ville\" class=\"form-control col-md-5\" value=\"\" id=\"in\" placeholder=\"Ville (ex: Douala)\" />'+

                '<br /><br />'+

                'date de debut<br /><input type=\"date\" name=\"date_debut\" class=\"form-control col-md-5\" value=\"\" id=\"in\" placeholder=\"date de debut\" />'+

                 '<input type=\"text\" name=\"employeur\" class=\"form-control col-md-5 poste\" value=\"\" id=\"in\" placeholder=\"employeur(ex:Kiro game)\" />'+

                 '<br /><br />'+

                 '<input type=\"text\" name=\"departement\" class=\"form-control col-md-5\" value=\"\" id=\"in\" placeholder=\"departement (ex: Moungo)\" />'+

                 '<br /><br />date de fin<br /><input type=\"date\" name=\"date_fin\" class=\"form-control col-md-5 ta\" value=\"null\" id=\"in\" placeholder=\"\" />'+

                 '<br /><input type=\"checkbox\" name=\"travailActu\" id=\"travailActu\" /> <label for=\"travailActu\" style=\"display:inline;\">j\\'y travaille actuellement </label>'+

                 '<br /><br /><button type=\"button\" class=\"btn btn-primary col-md-5 etapeSuiv\">Etape suivante <span class=\"fa fa-plus\"></span></button>'+

        \t\t'');

 // si l'utilisateur travaille encore actuellement a son derniser lieu de travaille, on execute lafonction suivante.
           \$('#travailActu').click(function(){
            //on recupere la zone ou on demande la date de fin
            var df = document.querySelector('.ta');
             // on desactive cette zone
             df.disabled = true; 
           });
// quand l'utilisateur aura cliquer sur Etape suivante
   
   \$('#init').css('display','none');

            \$('.etapeSuiv').click(function(){
               \$('.badg').text('3/6');
               var post = \$('.poste').val();
               var p = \$('.p').val();
  

               \$('#profiler').html(''+
                    'quel etait (ou sont) vos responsabilites  en tant que <b> '+ p + '</b> chez <b>'+ post + '</b><br /> decrivez les dans le champ ci-dessous <br /><br />'+

                      '<textarea name=\"description_responsabilite\" class=\"form-control col-md-5 dr2\" placeholder=\"decrivez par tirets ou numero\"></textarea><br /><br />'+

                      '<button type=\"button\" class=\"btn btn-primary col-md-5 etapeSuiv4\">Etape suivante <span class=\"fa fa-plus\"></span></button>'+
                '');

                \$('.etapeSuiv4').click(function(){
                 \$('.badg').text('4/6');

                 \$('#profiler').html(''+
                       '<h3>Votre formation</h3>'+
                       '<input type=\"text\" class=\"form-control col-md-5\" placeholder=\"nom de l\\'etablisement \" name=\"etablisement\" />' +

                       '<br /><input type=\"text\" class=\"form-control col-md-5\" placeholder=\"diplome(ex:licence en art)\" name=\"diplome\" />'+

                       '<br /><input type=\"text\" class=\"form-control col-md-5\" placeholder=\"Domaine d\\'etude(ex:economie)\" name=\"DomaineEtude\" />'+

                       '<br /><input type=\"text\" class=\"form-control col-md-5\" placeholder=\"zone geographique de l\\'etablisement(ex:Douala)\" name=\"zoneGeographique\" />'+

                       '<br /><input type=\"text\" class=\"form-control col-md-5\" placeholder=\"Annee d\\'obtention(Ex: 2015)\" name=\"DomaineEtude\" />' +

                       '<br /><button type=\"button\" class=\"btn btn-primary col-md-5 etapeSuiv5\">Etape suivante <span class=\"fa fa-plus\"></span></button>'
                    +'');


                    
                         \$('.etapeSuiv5').click(function(){
                               \$('.badg').text('5/6');

                               \$('#profiler').html(''+
                                     
                                   'Decrivez vos competences dans le champ ci-dessous<br /><br />'+
                                   '<textarea name=\"competences\" class=\"col-md-5 form-control\" placeholder=\"decrivez en tirets ou en points\"></textarea><br /><br />'+
                                   '<button type=\"button\" class=\"col-md-5 btn btn-primary etapeSuiv6\"> Etape 6 (dernier etape) <span class=\"fa fa-ok\">'

                                +'');

                               \$('.etapeSuiv6').click(function(){

                                   \$('.badg').text('6/6');

                                   \$('#profiler').html(''+
                                    
                                       'Decrivez votre profile professionnel ci-dessous<br /><br />'+
                                       '<textarea name=\"profilePro\" class=\"col-md-5 form-control\" placeholder=\"decrivez en tirets ou en points\"></textarea><br />'+
                                       '<br /> votre photo de profil<input type=\"file\" class=\"form-control col-md-5\" name=\"pdp\" /><br /><br />'

                                    +'');
                                    
                                    var dr = document.querySelector('.dr'), dr2 = document.querySelector('.dr2');

                                    dr.value = dr2.value;

                                    
                                     
                               });
                          });

                    });
                   

              });
                
            \$('#sender').html('<button type=\"submit\" class=\"col-md-5 btn-lg btn btn-success send\"> Envoyer maintenant  <span class=\"fa fa-send\">'
                                           );
      });


           
  });
</script>
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
        return array (  123 => 30,  109 => 19,  105 => 18,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Remplissez votre cv en quelques etapes!{% endblock %}

{% block body %}

    <section class=\"box feature \">
       <div class=\"container\">
              <h3> Remplissez votre cv en 6 etapes </h3>
              <kbd> etape <span class=\"badg\"> 1/6 </span></kbd>
              <form method=\"post\" action=\"{{ path('save_cv') }}\" enctype=\"multipart/form-data\" class=\"jumbotron col-md-12\" id=\"\">

                
                <div id=\"profiler\"></div>
                <div id=\"sender\"></div>

                <div id=\"init\">
                  <input type=\"text\" name=\"nom\" class=\"form-control col-md-5\" value=\"{{ app.user.nom }}\" id=\"in\" placeholder=\"nom\" />
                  <input type=\"text\" name=\"prenom\" class=\"form-control col-md-5\" value=\"{{ app.user.prenom }}\" id=\"in\" placeholder=\"prenom\" />
                  <br /><br />
                  <input type=\"text\" name=\"titre_pro\" class=\"form-control col-md-5\" value=\"\" id=\"in\" placeholder=\"titre professionnel\" />

                  <input type=\"text\" name=\"adresse_post\" class=\"form-control col-md-5\" value=\"\" id=\"in\" placeholder=\"adresse postal\" />
                  <br /><br />

                  <input type=\"text\" name=\"code_post\" class=\"form-control col-md-5\" value=\"\" id=\"in\" placeholder=\"code postal\" />

                  <input type=\"text\" name=\"phone\" class=\"form-control col-md-5\" value=\"\" id=\"in\" placeholder=\"numero de telephone\" />
                  <br /><br />
                   <input type=\"email\" name=\"email\" class=\"form-control col-md-10\" value=\"{{ app.user.email }}\" id=\"in\" placeholder=\"email\" />
                      
                  

                 <br /><br />
                 <button class=\"btn btn-primary col-md-5\" type=\"button\" id=\"etapeur\">Etape suivante <span class=\"fa fa-plus\"></span></button>
                </div>
                   

              </form>

            </div>

       
       <br /><br />
    </section>
<style>
  #in{
  \tdisplay: inline;
  }
</style>
<script type=\"text/javascript\">
  \$(function(){
        \$('#etapeur').click(function(){
        \t\$('.badg').text('2/6');
        \t\$('#profiler').html(''+

                '<input type=\"text\" name=\"intitule\" class=\"form-control col-md-5 p\" value=\"\" id=\"in\" placeholder=\"intitule de post (ex: chef de projet)\" />'+

                '<input type=\"text\" name=\"ville\" class=\"form-control col-md-5\" value=\"\" id=\"in\" placeholder=\"Ville (ex: Douala)\" />'+

                '<br /><br />'+

                'date de debut<br /><input type=\"date\" name=\"date_debut\" class=\"form-control col-md-5\" value=\"\" id=\"in\" placeholder=\"date de debut\" />'+

                 '<input type=\"text\" name=\"employeur\" class=\"form-control col-md-5 poste\" value=\"\" id=\"in\" placeholder=\"employeur(ex:Kiro game)\" />'+

                 '<br /><br />'+

                 '<input type=\"text\" name=\"departement\" class=\"form-control col-md-5\" value=\"\" id=\"in\" placeholder=\"departement (ex: Moungo)\" />'+

                 '<br /><br />date de fin<br /><input type=\"date\" name=\"date_fin\" class=\"form-control col-md-5 ta\" value=\"null\" id=\"in\" placeholder=\"\" />'+

                 '<br /><input type=\"checkbox\" name=\"travailActu\" id=\"travailActu\" /> <label for=\"travailActu\" style=\"display:inline;\">j\\'y travaille actuellement </label>'+

                 '<br /><br /><button type=\"button\" class=\"btn btn-primary col-md-5 etapeSuiv\">Etape suivante <span class=\"fa fa-plus\"></span></button>'+

        \t\t'');

 // si l'utilisateur travaille encore actuellement a son derniser lieu de travaille, on execute lafonction suivante.
           \$('#travailActu').click(function(){
            //on recupere la zone ou on demande la date de fin
            var df = document.querySelector('.ta');
             // on desactive cette zone
             df.disabled = true; 
           });
// quand l'utilisateur aura cliquer sur Etape suivante
   
   \$('#init').css('display','none');

            \$('.etapeSuiv').click(function(){
               \$('.badg').text('3/6');
               var post = \$('.poste').val();
               var p = \$('.p').val();
  

               \$('#profiler').html(''+
                    'quel etait (ou sont) vos responsabilites  en tant que <b> '+ p + '</b> chez <b>'+ post + '</b><br /> decrivez les dans le champ ci-dessous <br /><br />'+

                      '<textarea name=\"description_responsabilite\" class=\"form-control col-md-5 dr2\" placeholder=\"decrivez par tirets ou numero\"></textarea><br /><br />'+

                      '<button type=\"button\" class=\"btn btn-primary col-md-5 etapeSuiv4\">Etape suivante <span class=\"fa fa-plus\"></span></button>'+
                '');

                \$('.etapeSuiv4').click(function(){
                 \$('.badg').text('4/6');

                 \$('#profiler').html(''+
                       '<h3>Votre formation</h3>'+
                       '<input type=\"text\" class=\"form-control col-md-5\" placeholder=\"nom de l\\'etablisement \" name=\"etablisement\" />' +

                       '<br /><input type=\"text\" class=\"form-control col-md-5\" placeholder=\"diplome(ex:licence en art)\" name=\"diplome\" />'+

                       '<br /><input type=\"text\" class=\"form-control col-md-5\" placeholder=\"Domaine d\\'etude(ex:economie)\" name=\"DomaineEtude\" />'+

                       '<br /><input type=\"text\" class=\"form-control col-md-5\" placeholder=\"zone geographique de l\\'etablisement(ex:Douala)\" name=\"zoneGeographique\" />'+

                       '<br /><input type=\"text\" class=\"form-control col-md-5\" placeholder=\"Annee d\\'obtention(Ex: 2015)\" name=\"DomaineEtude\" />' +

                       '<br /><button type=\"button\" class=\"btn btn-primary col-md-5 etapeSuiv5\">Etape suivante <span class=\"fa fa-plus\"></span></button>'
                    +'');


                    
                         \$('.etapeSuiv5').click(function(){
                               \$('.badg').text('5/6');

                               \$('#profiler').html(''+
                                     
                                   'Decrivez vos competences dans le champ ci-dessous<br /><br />'+
                                   '<textarea name=\"competences\" class=\"col-md-5 form-control\" placeholder=\"decrivez en tirets ou en points\"></textarea><br /><br />'+
                                   '<button type=\"button\" class=\"col-md-5 btn btn-primary etapeSuiv6\"> Etape 6 (dernier etape) <span class=\"fa fa-ok\">'

                                +'');

                               \$('.etapeSuiv6').click(function(){

                                   \$('.badg').text('6/6');

                                   \$('#profiler').html(''+
                                    
                                       'Decrivez votre profile professionnel ci-dessous<br /><br />'+
                                       '<textarea name=\"profilePro\" class=\"col-md-5 form-control\" placeholder=\"decrivez en tirets ou en points\"></textarea><br />'+
                                       '<br /> votre photo de profil<input type=\"file\" class=\"form-control col-md-5\" name=\"pdp\" /><br /><br />'

                                    +'');
                                    
                                    var dr = document.querySelector('.dr'), dr2 = document.querySelector('.dr2');

                                    dr.value = dr2.value;

                                    
                                     
                               });
                          });

                    });
                   

              });
                
            \$('#sender').html('<button type=\"submit\" class=\"col-md-5 btn-lg btn btn-success send\"> Envoyer maintenant  <span class=\"fa fa-send\">'
                                           );
      });


           
  });
</script>
{% endblock %}", "cv/cv-form.html.twig", "/var/www/html/symfony/cver/templates/cv/cv-form.html.twig");
    }
}
