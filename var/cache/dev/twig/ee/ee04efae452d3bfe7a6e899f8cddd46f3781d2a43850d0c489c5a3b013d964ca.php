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

/* base.html.twig */
class __TwigTemplate_673ac66f51df2a800dec9a5360f8c80dc15587b1ffc1305bfdd3fa7914ef85ba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>

<html>
\t<head>
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
\t\t<link rel=\"icon\" type=\"image/png\" href=\"../../public/images/18-1586947107353.png\" />
\t\t<meta name=\"description\" content=\"\" />
\t\t<meta name=\"keywords\" content=\"\" />
\t\t<!--[if lte IE 8]><script src=\"css/ie/html5shiv.js\"></script><![endif]-->
\t\t";
        // line 11
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "\t\t<script src=\"../js/jquery.min.js\"></script>
\t\t<script src=\"../js/jquery.dropotron.min.js\"></script>
\t\t<script src=\"../js/skel.min.js\"></script>
\t\t<script src=\"../js/skel-layers.min.js\"></script>
\t\t<script src=\"../js/init.js\"></script>
\t\t<script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">

\t\t\t   <link rel=\"stylesheet\" href=\"../css/skel.css\" />
\t\t\t   <link rel=\"stylesheet\" href=\"../css/style.css\" />
\t\t\t   <link rel=\"stylesheet\" href=\"../css/style-desktop.css\" />
\t\t\t   <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">

\t\t\t\t <style type=\"text/css\">
             a:hover{
                 \ttext-decoration:none;
                 \tcolor: white;
             }
             .nn{
             \tbox-shadow: 0px 0px 9px black;
             }
\t       </style>
\t";
        // line 36
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "
\t\t<!--[if lte IE 8]><link rel=\"stylesheet\" href=\"css/ie/v8.css\" /><![endif]-->
\t</head>
\t<body class=\"homepage\" style=\"font-size:1em;\">
\t\t<!-- Header -->
\t\t\t<div id=\"header-wrapper\" style=\"margin-top:0%;\">
\t\t\t\t<header id=\"header\" class=\"container\">

<script>
  \$(function(){
\t\tvar zchaine = document.querySelector('.zchaine');

    var chaine = '";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["text1"]) || array_key_exists("text1", $context) ? $context["text1"] : (function () { throw new RuntimeError('Variable "text1" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "';
\t\tvar chaine2 = '";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["text2"]) || array_key_exists("text2", $context) ? $context["text2"] : (function () { throw new RuntimeError('Variable "text2" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "';

\t\tvar nb = chaine.length +1;
\t\tvar nb2 = chaine2.length +1;
\t\tvar i = -1;
\t\tvar i2 = -1;
\t\tvar currentTime = 5
\t\tvar comp =setInterval(function(){
       --nb;
\t\t\t ++i;
\t\t\t\t\tif (nb > 0) {
\t\t\t\t\t\tzchaine.innerHTML += chaine[i];
\t\t\t\t\t}
\t\t\t\t\tif (nb == 0) {
\t\t\t\t\t\tzchaine.innerHTML = '';
\t\t\t\t\t}
\t\t\t\t\tif (nb<0) {
\t\t\t\t\t\t--nb2
\t\t\t\t\t\t ++ i2;

\t\t\t\t\t\t\tif (nb2 > 0) {

\t\t\t\t\t\t\t\tzchaine.innerHTML +=  chaine2[i2];
\t\t\t\t\t\t\t}


\t\t\t\t\t}
\t\t},100);

\t})
</script>
\t\t\t\t\t<!-- Logo
\t\t\t\t\t\t<div id=\"logo\" class=\"col-md-4\" style=\"margin:2%; border-bottom:3px solid rgb(55,155,255);\">
\t\t\t\t\t\t\t<h1></h1>
\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t<a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"> <img src=\"../../public/images/18-1586947107353.png\" alt=\"\" height=\"200px\" width=\"200px\"> </a>
            <br />
\t\t\t\t\t\t>_ <div class=\"zchaine\" style=\"display:inline;\"></div>|
\t\t\t\t\t<!-- Nav -->
\t\t\t\t\t\t<nav id=\"nav\" class=\"nav\" style=\"background:rgb(0,3,2); margin:2%; padding:2px; border-radius:10px; border-bottom:3px solid rgb(55,155,255); border-right: 3px solid rgb(35,203,30); border-left:3px solid rgb(053,235,203); border-top:3px solid pink;\" class=\"col-md-8\">
\t\t\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visualisation");
        echo "\" class=\"\">votre cv</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"\" style=\"background:rgb(0,7,0);\">
\t\t\t\t\t\t\t\t\t<a href=\"\">CV</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Exemples de CV</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Comment faire un cv?</a></li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">CV en ligne</a>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Consultez un cv</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">CV builder</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Modele de CV</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Consulter un cv</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>

\t\t\t\t</header>
\t\t\t</div>

\t\t";
        // line 118
        $this->displayBlock('body', $context, $blocks);
        // line 271
        echo "\t\t<!-- Footer -->
\t\t\t<div id=\"footer-wrapper\">
\t\t\t\t<footer id=\"footer\" class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"3u\">

\t\t\t\t\t\t\t<!-- Links -->
\t\t\t\t\t\t\t\t<section class=\"widget links\">
\t\t\t\t\t\t\t\t\t<h3>  </h3>
\t\t\t\t\t\t\t\t\t<ul class=\"style2\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">  </a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">  </a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">  </a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">  </a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">  </a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"3u\">

\t\t\t\t\t\t\t<!-- Links -->
\t\t\t\t\t\t\t\t<section class=\"widget links\">
\t\t\t\t\t\t\t\t\t<h3> </h3>
\t\t\t\t\t\t\t\t\t<ul class=\"style2\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">  </a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">  </a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">  </a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">  </a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">  </a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"3u\">

\t\t\t\t\t\t\t<!-- Links -->
\t\t\t\t\t\t\t\t<section class=\"widget links\">
\t\t\t\t\t\t\t\t\t<h3>  </h3>
\t\t\t\t\t\t\t\t\t<ul class=\"style2\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">  </a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">  </a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">  </a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">  </a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">  </a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"3u\">

\t\t\t\t\t\t\t<!-- Contact -->
\t\t\t\t\t\t\t\t<section class=\"widget contact last\">
\t\t\t\t\t\t\t\t\t<h3>Contactez-nous</h3>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"icon fa-twitter\"><span class=\"label\">Twitter</span></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"icon fa-facebook\"><span class=\"label\">Facebook</span></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"icon fa-instagram\"><span class=\"label\">Instagram</span></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"icon fa-dribbble\"><span class=\"label\">Dribbble</span></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"icon fa-pinterest\"><span class=\"label\">Pinterest</span></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tDouala, Cameroun<br />
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"12u\">
\t\t\t\t\t\t\t<div id=\"copyright\">
\t\t\t\t\t\t\t\t<ul class=\"menu\">
\t\t\t\t\t\t\t\t\t<li>&copy; Untitled. All rights reserved</li><li>By: <a href=\"http://www.nolimitnewtech.com\">No Limit New Technologie</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</footer>
\t\t\t</div>


\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "CV-builder";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 118
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 119
        echo "\t\t<!-- Banner -->
\t\t\t<div id=\"banner-wrapper\" style=\"margin:0%;\">
\t\t\t\t<div id=\"banner\" class=\"box\"  style=\"background:url('../images/vendeuse-afro-americaine.jpg'); background-attachment: fixed; background-size: cover; margin:0%;\">
\t\t\t\t<div style=\"color: gray;\" class=\"\">
                 <span style=\"text-align: center;\">
\t\t\t\t\t<h2 style=\"padding:9px; margin:9px; border-radius:9px;\" id=\"logo\"><b style=\"color:blue; \">Créateur de CV en ligne </b></h2>
                    <h3> Une utilisation simple et des modèles professionnels </h3>

                 <br /><br />
                 <div class=\"7u pull-center\" style=\"margin-left:20%;\">
                  <a href=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("choix_model");
        echo "\" class=\"button big icon fa-arrow-circle-right nn\" style=\"cursor:pointer;\"  data-toggle=\"modal\" data-target=\"#oMessagerie\"> Crée mon cv </a>
                 </div>
                 <div class=\"7u pull-center\" style=\"margin-left:20%;\">
                 <a href=\"#\" style=\"cursor:pointer;\" class=\"button btn-success btn-sm icon fa-arrow-circle-right nn\"> metre votre cv a jour </a>
                 </div>
                  </span>

\t\t\t\t\t<div class=\"row col-md-9\">
\t\t\t\t\t\t<div class=\"7u\" class=\"\">

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


<!-- boite de dialogue  -->
<div class=\"modal fade\" id=\"oMessagerie\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"oMessagerieLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h3 class=\"modal-title\" id=\"oMessagerieLabel\"><b style=\"color:pink;\">Cver</b></h3>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Fermer\">
              <span aria-hidden=\"true\">×</span>
            </button>
          </div>
          <div class=\"modal-body\">
            <h3><b>C'est bien d'avoir choisir Cver</b> </h3>
            <p>
                 Vous voulez cree votre CV, c'est normale. Cver est fait pour vous simplifier la tache. Vous n'aurez qu'a remplir un ensemble de formulaire et <b>Cver</b> genere un cv en fonction de votre modele.
            </p>
          </div>
          <div class=\"modal-footer\">
            <a href=\"";
        // line 163
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("choix_model");
        echo "\" class=\"btn btn-secondary\" >Compris <span class=\"fa fa-ok\"></span></a>
          </div>
        </div>
      </div>
    </div>
<!-- fin boitte  -->

          <div class=\"container\" style=\"text-align:center; margin:2%;\">
                 <h2><b>Sélectionnez un modèle <span class=\"fa fa-file\"></span></b></h2>
                 <p>Choisissez parmi nos modèles professionnels et attractifs</p>
          </div>

\t\t<!-- Features -->
\t\t\t<div id=\"features-wrapper\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"4u\">

\t\t\t\t\t\t\t<!-- Box -->
\t\t\t\t\t\t\t\t<section class=\"box feature\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 183
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("choix_model");
        echo "\" class=\"image featured\"><img src=\"../images/chap.jpg\" alt=\"\" height=\"500px\" width=\"20px\" /></a>
\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t\t<h2>  <a href=\"";
        // line 186
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("choix_model");
        echo "\" class=\"btn btn-primary btn-lg col-md-9\"> choisir ce modele </a> </h2>
\t\t\t\t\t\t\t\t\t\t\t<p>  </p>
\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t<p>  </p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"4u\">
\t\t\t\t\t\t\t<!-- Box -->
\t\t\t\t\t\t\t\t<section class=\"box feature\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 198
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("choix_model");
        echo "\" class=\"image featured\"><img src=\"../images/kerge.jpg\" alt=\" \" height=\"500px\" /></a>
\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t\t<h2> <a href=\"";
        // line 201
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("choix_model");
        echo "\" class=\"btn btn-primary btn-lg col-md-9\"> choisir ce modele </a> </h2>
\t\t\t\t\t\t\t\t\t\t\t<p> </p>
\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t<p> </p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"4u\">

\t\t\t\t\t\t\t<!-- Box -->
\t\t\t\t\t\t\t\t<section class=\"box feature last\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 213
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("choix_model");
        echo "\" class=\"image featured\"><img src=\"../images/cv.jpg\" alt=\"\" height=\"500px\" /></a>
\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t\t<h2> <a href=\"";
        // line 216
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("choix_model");
        echo "\" class=\"btn btn-primary btn-lg col-md-9\"> choisir ce modele </a> </h2>
\t\t\t\t\t\t\t\t\t\t\t<p> </p>
\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t<p> </p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t<!-- Main -->
\t\t\t<div id=\"main-wrapper\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"4u\">

\t\t\t\t\t\t\t<!-- Sidebar -->
\t\t\t\t\t\t\t\t<div id=\"sidebar\">
\t\t\t\t\t\t\t\t\t<section class=\"widget thumbnails\">
\t\t\t\t\t\t\t\t\t\t<h3>Les utilisateurs actifs</h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"grid\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row no-collapse 50%\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"6u\"><a href=\"#\" class=\"image fit\"><img src=\"../images/t-4.jpg\" alt=\"\" /></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"6u\"><a href=\"#\" class=\"image fit\"><img src=\"../images/t-5.jpg\" alt=\"\" /></a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row no-collapse 50%\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"6u\"><a href=\"#\" class=\"image fit\"><img src=\"../images/t-3.jpg\" alt=\"\" /></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"6u\"><a href=\"#\" class=\"image fit\"><img src=\"../images/t-1.jpg\" alt=\"\" /></a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"button icon fa-file-text-o\">Voire les avis</a>
\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"8u important(collapse)\">

\t\t\t\t\t\t\t<!-- Content -->
\t\t\t\t\t\t\t\t<div id=\"content\">
\t\t\t\t\t\t\t\t\t<section class=\"last\">
\t\t\t\t\t\t\t\t\t\t<h2>Découvrez notre outil d'aide au contenu</h2>
\t\t\t\t\t\t\t\t\t\t<p>This is <strong>Verti</strong>, a free and fully responsive HTML5 site template by <a href=\"http://html5up.net\">HTML5 UP</a>.
\t\t\t\t\t\t\t\t\t\tVerti is released under the <a href=\"http://html5up.net/license\">Creative Commons Attribution license</a>, so feel free to use it for any personal or commercial project you might have going on (just don't forget to credit us for the design!)</p>
\t\t\t\t\t\t\t\t\t\t<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus. Praesent semper bibendum ipsum, et tristique augue fringilla eu. Vivamus id risus vel dolor auctor euismod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat. Aliquam luctus mattis lectus sit amet phasellus quam turpis.</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"button icon fa-arrow-circle-right\">Continue Reading</a>
\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  470 => 216,  464 => 213,  449 => 201,  443 => 198,  428 => 186,  422 => 183,  399 => 163,  362 => 129,  350 => 119,  340 => 118,  322 => 36,  303 => 11,  284 => 5,  189 => 271,  187 => 118,  158 => 92,  148 => 85,  110 => 50,  106 => 49,  92 => 37,  90 => 36,  64 => 12,  62 => 11,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML>

<html>
\t<head>
\t\t<title>{% block title %}CV-builder{% endblock %}</title>
\t\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
\t\t<link rel=\"icon\" type=\"image/png\" href=\"../../public/images/18-1586947107353.png\" />
\t\t<meta name=\"description\" content=\"\" />
\t\t<meta name=\"keywords\" content=\"\" />
\t\t<!--[if lte IE 8]><script src=\"css/ie/html5shiv.js\"></script><![endif]-->
\t\t{% block javascripts %} {% endblock %}
\t\t<script src=\"../js/jquery.min.js\"></script>
\t\t<script src=\"../js/jquery.dropotron.min.js\"></script>
\t\t<script src=\"../js/skel.min.js\"></script>
\t\t<script src=\"../js/skel-layers.min.js\"></script>
\t\t<script src=\"../js/init.js\"></script>
\t\t<script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">

\t\t\t   <link rel=\"stylesheet\" href=\"../css/skel.css\" />
\t\t\t   <link rel=\"stylesheet\" href=\"../css/style.css\" />
\t\t\t   <link rel=\"stylesheet\" href=\"../css/style-desktop.css\" />
\t\t\t   <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">

\t\t\t\t <style type=\"text/css\">
             a:hover{
                 \ttext-decoration:none;
                 \tcolor: white;
             }
             .nn{
             \tbox-shadow: 0px 0px 9px black;
             }
\t       </style>
\t{% block stylesheets %}{% endblock %}

\t\t<!--[if lte IE 8]><link rel=\"stylesheet\" href=\"css/ie/v8.css\" /><![endif]-->
\t</head>
\t<body class=\"homepage\" style=\"font-size:1em;\">
\t\t<!-- Header -->
\t\t\t<div id=\"header-wrapper\" style=\"margin-top:0%;\">
\t\t\t\t<header id=\"header\" class=\"container\">

<script>
  \$(function(){
\t\tvar zchaine = document.querySelector('.zchaine');

    var chaine = '{{ text1 }}';
\t\tvar chaine2 = '{{ text2 }}';

\t\tvar nb = chaine.length +1;
\t\tvar nb2 = chaine2.length +1;
\t\tvar i = -1;
\t\tvar i2 = -1;
\t\tvar currentTime = 5
\t\tvar comp =setInterval(function(){
       --nb;
\t\t\t ++i;
\t\t\t\t\tif (nb > 0) {
\t\t\t\t\t\tzchaine.innerHTML += chaine[i];
\t\t\t\t\t}
\t\t\t\t\tif (nb == 0) {
\t\t\t\t\t\tzchaine.innerHTML = '';
\t\t\t\t\t}
\t\t\t\t\tif (nb<0) {
\t\t\t\t\t\t--nb2
\t\t\t\t\t\t ++ i2;

\t\t\t\t\t\t\tif (nb2 > 0) {

\t\t\t\t\t\t\t\tzchaine.innerHTML +=  chaine2[i2];
\t\t\t\t\t\t\t}


\t\t\t\t\t}
\t\t},100);

\t})
</script>
\t\t\t\t\t<!-- Logo
\t\t\t\t\t\t<div id=\"logo\" class=\"col-md-4\" style=\"margin:2%; border-bottom:3px solid rgb(55,155,255);\">
\t\t\t\t\t\t\t<h1></h1>
\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t<a href=\"{{ path('home') }}\"> <img src=\"../../public/images/18-1586947107353.png\" alt=\"\" height=\"200px\" width=\"200px\"> </a>
            <br />
\t\t\t\t\t\t>_ <div class=\"zchaine\" style=\"display:inline;\"></div>|
\t\t\t\t\t<!-- Nav -->
\t\t\t\t\t\t<nav id=\"nav\" class=\"nav\" style=\"background:rgb(0,3,2); margin:2%; padding:2px; border-radius:10px; border-bottom:3px solid rgb(55,155,255); border-right: 3px solid rgb(35,203,30); border-left:3px solid rgb(053,235,203); border-top:3px solid pink;\" class=\"col-md-8\">
\t\t\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('visualisation') }}\" class=\"\">votre cv</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"\" style=\"background:rgb(0,7,0);\">
\t\t\t\t\t\t\t\t\t<a href=\"\">CV</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Exemples de CV</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Comment faire un cv?</a></li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">CV en ligne</a>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Consultez un cv</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">CV builder</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Modele de CV</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Consulter un cv</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>

\t\t\t\t</header>
\t\t\t</div>

\t\t{% block body %}
\t\t<!-- Banner -->
\t\t\t<div id=\"banner-wrapper\" style=\"margin:0%;\">
\t\t\t\t<div id=\"banner\" class=\"box\"  style=\"background:url('../images/vendeuse-afro-americaine.jpg'); background-attachment: fixed; background-size: cover; margin:0%;\">
\t\t\t\t<div style=\"color: gray;\" class=\"\">
                 <span style=\"text-align: center;\">
\t\t\t\t\t<h2 style=\"padding:9px; margin:9px; border-radius:9px;\" id=\"logo\"><b style=\"color:blue; \">Créateur de CV en ligne </b></h2>
                    <h3> Une utilisation simple et des modèles professionnels </h3>

                 <br /><br />
                 <div class=\"7u pull-center\" style=\"margin-left:20%;\">
                  <a href=\"{{ path('choix_model') }}\" class=\"button big icon fa-arrow-circle-right nn\" style=\"cursor:pointer;\"  data-toggle=\"modal\" data-target=\"#oMessagerie\"> Crée mon cv </a>
                 </div>
                 <div class=\"7u pull-center\" style=\"margin-left:20%;\">
                 <a href=\"#\" style=\"cursor:pointer;\" class=\"button btn-success btn-sm icon fa-arrow-circle-right nn\"> metre votre cv a jour </a>
                 </div>
                  </span>

\t\t\t\t\t<div class=\"row col-md-9\">
\t\t\t\t\t\t<div class=\"7u\" class=\"\">

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


<!-- boite de dialogue  -->
<div class=\"modal fade\" id=\"oMessagerie\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"oMessagerieLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h3 class=\"modal-title\" id=\"oMessagerieLabel\"><b style=\"color:pink;\">Cver</b></h3>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Fermer\">
              <span aria-hidden=\"true\">×</span>
            </button>
          </div>
          <div class=\"modal-body\">
            <h3><b>C'est bien d'avoir choisir Cver</b> </h3>
            <p>
                 Vous voulez cree votre CV, c'est normale. Cver est fait pour vous simplifier la tache. Vous n'aurez qu'a remplir un ensemble de formulaire et <b>Cver</b> genere un cv en fonction de votre modele.
            </p>
          </div>
          <div class=\"modal-footer\">
            <a href=\"{{ path('choix_model') }}\" class=\"btn btn-secondary\" >Compris <span class=\"fa fa-ok\"></span></a>
          </div>
        </div>
      </div>
    </div>
<!-- fin boitte  -->

          <div class=\"container\" style=\"text-align:center; margin:2%;\">
                 <h2><b>Sélectionnez un modèle <span class=\"fa fa-file\"></span></b></h2>
                 <p>Choisissez parmi nos modèles professionnels et attractifs</p>
          </div>

\t\t<!-- Features -->
\t\t\t<div id=\"features-wrapper\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"4u\">

\t\t\t\t\t\t\t<!-- Box -->
\t\t\t\t\t\t\t\t<section class=\"box feature\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('choix_model') }}\" class=\"image featured\"><img src=\"../images/chap.jpg\" alt=\"\" height=\"500px\" width=\"20px\" /></a>
\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t\t<h2>  <a href=\"{{ path('choix_model') }}\" class=\"btn btn-primary btn-lg col-md-9\"> choisir ce modele </a> </h2>
\t\t\t\t\t\t\t\t\t\t\t<p>  </p>
\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t<p>  </p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"4u\">
\t\t\t\t\t\t\t<!-- Box -->
\t\t\t\t\t\t\t\t<section class=\"box feature\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('choix_model') }}\" class=\"image featured\"><img src=\"../images/kerge.jpg\" alt=\" \" height=\"500px\" /></a>
\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t\t<h2> <a href=\"{{ path('choix_model') }}\" class=\"btn btn-primary btn-lg col-md-9\"> choisir ce modele </a> </h2>
\t\t\t\t\t\t\t\t\t\t\t<p> </p>
\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t<p> </p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"4u\">

\t\t\t\t\t\t\t<!-- Box -->
\t\t\t\t\t\t\t\t<section class=\"box feature last\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('choix_model') }}\" class=\"image featured\"><img src=\"../images/cv.jpg\" alt=\"\" height=\"500px\" /></a>
\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t\t<h2> <a href=\"{{ path('choix_model') }}\" class=\"btn btn-primary btn-lg col-md-9\"> choisir ce modele </a> </h2>
\t\t\t\t\t\t\t\t\t\t\t<p> </p>
\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t<p> </p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t<!-- Main -->
\t\t\t<div id=\"main-wrapper\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"4u\">

\t\t\t\t\t\t\t<!-- Sidebar -->
\t\t\t\t\t\t\t\t<div id=\"sidebar\">
\t\t\t\t\t\t\t\t\t<section class=\"widget thumbnails\">
\t\t\t\t\t\t\t\t\t\t<h3>Les utilisateurs actifs</h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"grid\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row no-collapse 50%\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"6u\"><a href=\"#\" class=\"image fit\"><img src=\"../images/t-4.jpg\" alt=\"\" /></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"6u\"><a href=\"#\" class=\"image fit\"><img src=\"../images/t-5.jpg\" alt=\"\" /></a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row no-collapse 50%\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"6u\"><a href=\"#\" class=\"image fit\"><img src=\"../images/t-3.jpg\" alt=\"\" /></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"6u\"><a href=\"#\" class=\"image fit\"><img src=\"../images/t-1.jpg\" alt=\"\" /></a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"button icon fa-file-text-o\">Voire les avis</a>
\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"8u important(collapse)\">

\t\t\t\t\t\t\t<!-- Content -->
\t\t\t\t\t\t\t\t<div id=\"content\">
\t\t\t\t\t\t\t\t\t<section class=\"last\">
\t\t\t\t\t\t\t\t\t\t<h2>Découvrez notre outil d'aide au contenu</h2>
\t\t\t\t\t\t\t\t\t\t<p>This is <strong>Verti</strong>, a free and fully responsive HTML5 site template by <a href=\"http://html5up.net\">HTML5 UP</a>.
\t\t\t\t\t\t\t\t\t\tVerti is released under the <a href=\"http://html5up.net/license\">Creative Commons Attribution license</a>, so feel free to use it for any personal or commercial project you might have going on (just don't forget to credit us for the design!)</p>
\t\t\t\t\t\t\t\t\t\t<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus. Praesent semper bibendum ipsum, et tristique augue fringilla eu. Vivamus id risus vel dolor auctor euismod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat. Aliquam luctus mattis lectus sit amet phasellus quam turpis.</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"button icon fa-arrow-circle-right\">Continue Reading</a>
\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
 {% endblock %}
\t\t<!-- Footer -->
\t\t\t<div id=\"footer-wrapper\">
\t\t\t\t<footer id=\"footer\" class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"3u\">

\t\t\t\t\t\t\t<!-- Links -->
\t\t\t\t\t\t\t\t<section class=\"widget links\">
\t\t\t\t\t\t\t\t\t<h3>  </h3>
\t\t\t\t\t\t\t\t\t<ul class=\"style2\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">  </a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">  </a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">  </a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">  </a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">  </a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"3u\">

\t\t\t\t\t\t\t<!-- Links -->
\t\t\t\t\t\t\t\t<section class=\"widget links\">
\t\t\t\t\t\t\t\t\t<h3> </h3>
\t\t\t\t\t\t\t\t\t<ul class=\"style2\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">  </a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">  </a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">  </a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">  </a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">  </a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"3u\">

\t\t\t\t\t\t\t<!-- Links -->
\t\t\t\t\t\t\t\t<section class=\"widget links\">
\t\t\t\t\t\t\t\t\t<h3>  </h3>
\t\t\t\t\t\t\t\t\t<ul class=\"style2\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">  </a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">  </a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">  </a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">  </a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">  </a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"3u\">

\t\t\t\t\t\t\t<!-- Contact -->
\t\t\t\t\t\t\t\t<section class=\"widget contact last\">
\t\t\t\t\t\t\t\t\t<h3>Contactez-nous</h3>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"icon fa-twitter\"><span class=\"label\">Twitter</span></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"icon fa-facebook\"><span class=\"label\">Facebook</span></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"icon fa-instagram\"><span class=\"label\">Instagram</span></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"icon fa-dribbble\"><span class=\"label\">Dribbble</span></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"icon fa-pinterest\"><span class=\"label\">Pinterest</span></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tDouala, Cameroun<br />
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"12u\">
\t\t\t\t\t\t\t<div id=\"copyright\">
\t\t\t\t\t\t\t\t<ul class=\"menu\">
\t\t\t\t\t\t\t\t\t<li>&copy; Untitled. All rights reserved</li><li>By: <a href=\"http://www.nolimitnewtech.com\">No Limit New Technologie</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</footer>
\t\t\t</div>


\t</body>
</html>
", "base.html.twig", "/var/www/html/symfony/cver/templates/base.html.twig");
    }
}
