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

/* cv/chargeur.html.twig */
class __TwigTemplate_88c8556eb99301209c288472dd4403907e9c17b612b4d4a6d708437cbee8773f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cv/chargeur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cv/chargeur.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>veillez patientez....</title>
</head>
<body>
   <center>
        <img src=\"../images/Infinity-1s-200px.gif\" />
        <br />
         veillez patientez...

        <script type=\"text/javascript\">
           var temps = 20;
           var lieu = document.getElementById('c');
           var compteur = setInterval(function(){ 
                  
                  temps--;
                  //lieu.innerHTML= temps;
                  if (temps == 0 ) {
                  \twindow.location.href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("les_modeles");
        echo "\";
                  }

            },1000);
        </script>
   </center>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "cv/chargeur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
\t<title>veillez patientez....</title>
</head>
<body>
   <center>
        <img src=\"../images/Infinity-1s-200px.gif\" />
        <br />
         veillez patientez...

        <script type=\"text/javascript\">
           var temps = 20;
           var lieu = document.getElementById('c');
           var compteur = setInterval(function(){ 
                  
                  temps--;
                  //lieu.innerHTML= temps;
                  if (temps == 0 ) {
                  \twindow.location.href=\"{{ path('les_modeles') }}\";
                  }

            },1000);
        </script>
   </center>
</body>
</html>", "cv/chargeur.html.twig", "/var/www/html/symfony/cver/templates/cv/chargeur.html.twig");
    }
}
