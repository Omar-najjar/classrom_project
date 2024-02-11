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

/* home/index.html.twig */
class __TwigTemplate_a234be26373ba87da5cf6ff234f9831c extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>
\t\t<link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
\t\t";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "

\t</head>
\t<body>


\t\t";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 734
        echo "
\t\t";
        // line 735
        $this->displayBlock('javascripts', $context, $blocks);
        // line 754
        echo "
\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "\t\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
\t\t\t<link
\t\t\thref=\"https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap\" rel=\"stylesheet\">

\t\t\t<!-- Font Awesome -->
\t\t\t<link
\t\t\thref=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">

\t\t\t<!-- Libraries Stylesheet -->
\t\t\t<link
\t\t\thref=\"lib/owlcarousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">

\t\t\t<!-- Customized Bootstrap Stylesheet -->
\t\t\t<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/styles/app.css"), "html", null, true);
        echo "\">

\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 36
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "
\t\t\t<!-- Topbar Start -->
\t\t\t<div class=\"container-fluid bg-dark\">
\t\t\t\t<div class=\"row py-2 px-lg-5\">
\t\t\t\t\t<div class=\"col-lg-6 text-center text-lg-left mb-2 mb-lg-0\">
\t\t\t\t\t\t<div class=\"d-inline-flex align-items-center text-white\">
\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t<i class=\"fa fa-phone-alt mr-2\"></i>+012 345 6789</small>
\t\t\t\t\t\t\t<small class=\"px-3\">|</small>
\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope mr-2\"></i>info@example.com</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6 text-center text-lg-right\">
\t\t\t\t\t\t<div class=\"d-inline-flex align-items-center\">
\t\t\t\t\t\t\t<a class=\"text-white px-2\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"text-white px-2\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"text-white px-2\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"text-white px-2\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"text-white pl-2\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-youtube\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Topbar End -->


\t\t\t<!-- Navbar Start -->
\t\t\t<div class=\"container-fluid p-0\">
\t\t\t\t<nav class=\"navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5\">
\t\t\t\t\t<a href=\"index.html\" class=\"navbar-brand ml-lg-3\">
\t\t\t\t\t\t<h1 class=\"m-0 text-uppercase text-primary\">
\t\t\t\t\t\t\t<i class=\"fa fa-book-reader mr-3\"></i>Edukate</h1>
\t\t\t\t\t</a>
\t\t\t\t\t<button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"collapse navbar-collapse justify-content-between px-lg-3\" id=\"navbarCollapse\">
\t\t\t\t\t\t<div class=\"navbar-nav mx-auto py-0\">
\t\t\t\t\t\t\t<a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"nav-item nav-link\">Home</a>


\t\t\t\t\t\t\t<a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index");
        echo "\" class=\"nav-item nav-link active\">Courses</a>


\t\t\t\t\t\t\t<a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index");
        echo "\" class=\"nav-item nav-link\">Contact</a>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary py-2 px-4 d-none d-lg-block\">Join Us</a>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</div>

\t\t\t<!-- Navbar End -->


\t\t\t<!-- Header Start -->
\t\t\t<div class=\"jumbotron jumbotron-fluid position-relative overlay-bottom\" style=\"margin-bottom: 90px;\">
\t\t\t\t<div class=\"container text-center my-5 py-5\">
\t\t\t\t\t<h1 class=\"text-white mt-4 mb-4\">Learn From Home</h1>
\t\t\t\t\t<h1 class=\"text-white display-1 mb-5\">Education Courses</h1>
\t\t\t\t\t<div class=\"mx-auto mb-5\" style=\"width: 100%; max-width: 600px;\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-outline-light bg-white text-body px-4 dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Courses</button>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Courses 1</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Courses 2</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Courses 3</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control border-light\" style=\"padding: 30px 25px;\" placeholder=\"Keyword\">
\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-secondary px-4 px-lg-5\">Search</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Header End -->


\t\t\t<!-- About Start -->
\t\t\t<div class=\"container-fluid py-5\">
\t\t\t\t<div class=\"container py-5\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-5 mb-5 mb-lg-0\" style=\"min-height: 500px;\">
\t\t\t\t\t\t\t<div class=\"position-relative h-100\">
\t\t\t\t\t\t\t\t<img class=\"position-absolute w-100 h-100\" src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/about.jpg"), "html", null, true);
        echo "\" style=\"object-fit: cover;\">


\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t\t\t<div class=\"section-title position-relative mb-4\">
\t\t\t\t\t\t\t\t<h6 class=\"d-inline-block position-relative text-secondary text-uppercase pb-2\">About Us</h6>
\t\t\t\t\t\t\t\t<h1 class=\"display-4\">First Choice For Online Education Anywhere</h1>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor consetetur takimata eirmod, dolores takimata consetetur invidunt magna dolores aliquyam dolores dolore. Amet erat amet et magna</p>
\t\t\t\t\t\t\t<div class=\"row pt-3 mx-0\">
\t\t\t\t\t\t\t\t<div class=\"col-3 px-0\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-success text-center p-4\">
\t\t\t\t\t\t\t\t\t\t<h1 class=\"text-white\" data-toggle=\"counter-up\">123</h1>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-uppercase text-white\">Available<span class=\"d-block\">Subjects</span>
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-3 px-0\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-primary text-center p-4\">
\t\t\t\t\t\t\t\t\t\t<h1 class=\"text-white\" data-toggle=\"counter-up\">1234</h1>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-uppercase text-white\">Online<span class=\"d-block\">Courses</span>
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-3 px-0\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-secondary text-center p-4\">
\t\t\t\t\t\t\t\t\t\t<h1 class=\"text-white\" data-toggle=\"counter-up\">123</h1>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-uppercase text-white\">Skilled<span class=\"d-block\">Instructors</span>
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-3 px-0\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-warning text-center p-4\">
\t\t\t\t\t\t\t\t\t\t<h1 class=\"text-white\" data-toggle=\"counter-up\">1234</h1>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-uppercase text-white\">Happy<span class=\"d-block\">Students</span>
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- About End -->


\t\t\t<!-- Feature Start -->
\t\t\t<div class=\"container-fluid bg-image\" style=\"margin: 90px 0;\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-7 my-5 pt-5 pb-lg-5\">
\t\t\t\t\t\t\t<div class=\"section-title position-relative mb-4\">
\t\t\t\t\t\t\t\t<h6 class=\"d-inline-block position-relative text-secondary text-uppercase pb-2\">Why Choose Us?</h6>
\t\t\t\t\t\t\t\t<h1 class=\"display-4\">Why You Should Start Learning with Us?</h1>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"mb-4 pb-2\">Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est. Diam sanctus gubergren sit rebum clita amet.</p>
\t\t\t\t\t\t\t<div class=\"d-flex mb-3\">
\t\t\t\t\t\t\t\t<div class=\"btn-icon bg-primary mr-4\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-2x fa-graduation-cap text-white\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mt-n1\">
\t\t\t\t\t\t\t\t\t<h4>Skilled Instructors</h4>
\t\t\t\t\t\t\t\t\t<p>Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-flex mb-3\">
\t\t\t\t\t\t\t\t<div class=\"btn-icon bg-secondary mr-4\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-2x fa-certificate text-white\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mt-n1\">
\t\t\t\t\t\t\t\t\t<h4>International Certificate</h4>
\t\t\t\t\t\t\t\t\t<p>Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t<div class=\"btn-icon bg-warning mr-4\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-2x fa-book-reader text-white\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mt-n1\">
\t\t\t\t\t\t\t\t\t<h4>Online Classes</h4>
\t\t\t\t\t\t\t\t\t<p class=\"m-0\">Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-5\" style=\"min-height: 500px;\">
\t\t\t\t\t\t\t<div class=\"position-relative h-100\">
\t\t\t\t\t\t\t\t<img class=\"position-absolute w-100 h-100\" src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/feature.jpg"), "html", null, true);
        echo "\" style=\"object-fit: cover;\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Feature Start -->


\t\t\t<!-- Courses Start -->
\t\t\t<div class=\"container-fluid px-0 py-5\">
\t\t\t\t<div class=\"row mx-0 justify-content-center pt-5\">
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"section-title text-center position-relative mb-4\">
\t\t\t\t\t\t\t<h6 class=\"d-inline-block position-relative text-secondary text-uppercase pb-2\">Our Courses</h6>
\t\t\t\t\t\t\t<h1 class=\"display-4\">Checkout New Releases Of Our Courses</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"owl-carousel courses-carousel\">
\t\t\t\t\t<div class=\"courses-item position-relative\">
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/courses-1.jpg\" alt=\"\">
\t\t\t\t\t\t<div class=\"courses-text\">
\t\t\t\t\t\t\t<h4 class=\"text-center text-white px-3\">Web design & development courses for beginners</h4>
\t\t\t\t\t\t\t<div class=\"border-top w-100 mt-3\">
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between p-4\">
\t\t\t\t\t\t\t\t\t<span class=\"text-white\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user mr-2\"></i>Jhon Doe</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-white\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star mr-2\"></i>4.5
\t\t\t\t\t\t\t\t\t\t<small>(250)</small>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 bg-white text-center p-4\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"detail.html\">Course Detail</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"courses-item position-relative\">
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/courses-2.jpg"), "html", null, true);
        echo "\" alt=\"\">

\t\t\t\t\t\t<div class=\"courses-text\">
\t\t\t\t\t\t\t<h4 class=\"text-center text-white px-3\">Web design & development courses for beginners</h4>
\t\t\t\t\t\t\t<div class=\"border-top w-100 mt-3\">
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between p-4\">
\t\t\t\t\t\t\t\t\t<span class=\"text-white\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user mr-2\"></i>Jhon Doe</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-white\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star mr-2\"></i>4.5
\t\t\t\t\t\t\t\t\t\t<small>(250)</small>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 bg-white text-center p-4\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"\">Course Detail</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"courses-item position-relative\">
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/courses-3.jpg\" alt=\"\">
\t\t\t\t\t\t<div class=\"courses-text\">
\t\t\t\t\t\t\t<h4 class=\"text-center text-white px-3\">Web design & development courses for beginners</h4>
\t\t\t\t\t\t\t<div class=\"border-top w-100 mt-3\">
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between p-4\">
\t\t\t\t\t\t\t\t\t<span class=\"text-white\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user mr-2\"></i>Jhon Doe</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-white\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star mr-2\"></i>4.5
\t\t\t\t\t\t\t\t\t\t<small>(250)</small>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 bg-white text-center p-4\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"\">Course Detail</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"courses-item position-relative\">
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/courses-4.jpg\" alt=\"\">
\t\t\t\t\t\t<div class=\"courses-text\">
\t\t\t\t\t\t\t<h4 class=\"text-center text-white px-3\">Web design & development courses for beginners</h4>
\t\t\t\t\t\t\t<div class=\"border-top w-100 mt-3\">
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between p-4\">
\t\t\t\t\t\t\t\t\t<span class=\"text-white\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user mr-2\"></i>Jhon Doe</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-white\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star mr-2\"></i>4.5
\t\t\t\t\t\t\t\t\t\t<small>(250)</small>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 bg-white text-center p-4\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"\">Course Detail</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"courses-item position-relative\">
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/courses-5.jpg"), "html", null, true);
        echo "\" alt=\"\">


\t\t\t\t\t\t<div class=\"courses-text\">
\t\t\t\t\t\t\t<h4 class=\"text-center text-white px-3\">Web design & development courses for beginners</h4>
\t\t\t\t\t\t\t<div class=\"border-top w-100 mt-3\">
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between p-4\">
\t\t\t\t\t\t\t\t\t<span class=\"text-white\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user mr-2\"></i>Jhon Doe</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-white\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star mr-2\"></i>4.5
\t\t\t\t\t\t\t\t\t\t<small>(250)</small>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 bg-white text-center p-4\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"\">Course Detail</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"courses-item position-relative\">
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/courses-6.jpg"), "html", null, true);
        echo "\" alt=\"\">

\t\t\t\t\t\t<div class=\"courses-text\">
\t\t\t\t\t\t\t<h4 class=\"text-center text-white px-3\">Web design & development courses for beginners</h4>
\t\t\t\t\t\t\t<div class=\"border-top w-100 mt-3\">
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between p-4\">
\t\t\t\t\t\t\t\t\t<span class=\"text-white\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user mr-2\"></i>Jhon Doe</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-white\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star mr-2\"></i>4.5
\t\t\t\t\t\t\t\t\t\t<small>(250)</small>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 bg-white text-center p-4\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"\">Course Detail</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row justify-content-center bg-image mx-0 mb-5\">
\t\t\t\t\t<div class=\"col-lg-6 py-5\">
\t\t\t\t\t\t<div class=\"bg-white p-5 my-5\">
\t\t\t\t\t\t\t<h1 class=\"text-center mb-4\">30% Off For New Students</h1>
\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bg-light border-0\" placeholder=\"Your Name\" style=\"padding: 30px 20px;\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control bg-light border-0\" placeholder=\"Your Email\" style=\"padding: 30px 20px;\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<select class=\"custom-select bg-light border-0 px-3\" style=\"height: 60px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<option selected>Select A courses</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">courses 1</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">courses 1</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">courses 1</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-block\" type=\"submit\" style=\"height: 60px;\">Sign Up Now</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Courses End -->


\t\t\t<!-- Team Start -->
\t\t\t<div class=\"container-fluid py-5\">
\t\t\t\t<div class=\"container py-5\">
\t\t\t\t\t<div class=\"section-title text-center position-relative mb-5\">
\t\t\t\t\t\t<h6 class=\"d-inline-block position-relative text-secondary text-uppercase pb-2\">Instructors</h6>
\t\t\t\t\t\t<h1 class=\"display-4\">Meet Our Instructors</h1>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"owl-carousel team-carousel position-relative\" style=\"padding: 0 30px;\">
\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t<img class=\"img-fluid w-100\" src=\"img/team-1.jpg\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"bg-light text-center p-4\">
\t\t\t\t\t\t\t\t<h5 class=\"mb-3\">Instructor Name</h5>
\t\t\t\t\t\t\t\t<p class=\"mb-2\">Web Design & Development</p>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-youtube\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t<img class=\"img-fluid w-100\" src=\"img/team-2.jpg\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"bg-light text-center p-4\">
\t\t\t\t\t\t\t\t<h5 class=\"mb-3\">Instructor Name</h5>
\t\t\t\t\t\t\t\t<p class=\"mb-2\">Web Design & Development</p>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-youtube\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t<img class=\"img-fluid w-100\" src=\"";
        // line 460
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/team-3.jpg"), "html", null, true);
        echo "\" alt=\"\">


\t\t\t\t\t\t\t<div class=\"bg-light text-center p-4\">
\t\t\t\t\t\t\t\t<h5 class=\"mb-3\">Instructor Name</h5>
\t\t\t\t\t\t\t\t<p class=\"mb-2\">Web Design & Development</p>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-youtube\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t<img class=\"img-fluid w-100\" src=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/team-4.jpg"), "html", null, true);
        echo "\" alt=\"\">


\t\t\t\t\t\t\t<div class=\"bg-light text-center p-4\">
\t\t\t\t\t\t\t\t<h5 class=\"mb-3\">Instructor Name</h5>
\t\t\t\t\t\t\t\t<p class=\"mb-2\">Web Design & Development</p>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-youtube\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Team End -->


\t\t\t<!-- Testimonial Start -->
\t\t\t<div class=\"container-fluid bg-image py-5\" style=\"margin: 90px 0;\">
\t\t\t\t<div class=\"container py-5\">
\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t<div class=\"col-lg-5 mb-5 mb-lg-0\">
\t\t\t\t\t\t\t<div class=\"section-title position-relative mb-4\">
\t\t\t\t\t\t\t\t<h6 class=\"d-inline-block position-relative text-secondary text-uppercase pb-2\">Testimonial</h6>
\t\t\t\t\t\t\t\t<h1 class=\"display-4\">What Say Our Students</h1>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"m-0\">Dolor est dolores et nonumy sit labore dolores est sed rebum amet, justo duo ipsum sanctus dolore magna rebum sit et. Diam lorem ea sea at. Nonumy et at at sed justo est nonumy tempor. Vero sea ea eirmod, elitr ea amet diam ipsum at amet. Erat sed stet eos ipsum diam</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t\t\t<div class=\"owl-carousel testimonial-carousel\">
\t\t\t\t\t\t\t\t<div class=\"bg-white p-5\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-3x fa-quote-left text-primary mb-4\"></i>
\t\t\t\t\t\t\t\t\t<p>Sed et elitr ipsum labore dolor diam, ipsum duo vero sed sit est est ipsum eos clita est ipsum. Est nonumy tempor at kasd. Sed at dolor duo ut dolor, et justo erat dolor magna sed stet amet elitr duo lorem</p>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-shrink-0 align-items-center mt-4\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid mr-4\" src=\"img/testimonial-2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<h5>Student Name</h5>
\t\t\t\t\t\t\t\t\t\t\t<span>Web Design</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"bg-white p-5\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-3x fa-quote-left text-primary mb-4\"></i>
\t\t\t\t\t\t\t\t\t<p>Sed et elitr ipsum labore dolor diam, ipsum duo vero sed sit est est ipsum eos clita est ipsum. Est nonumy tempor at kasd. Sed at dolor duo ut dolor, et justo erat dolor magna sed stet amet elitr duo lorem</p>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-shrink-0 align-items-center mt-4\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid mr-4\" src=\"img/testimonial-1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<h5>Student Name</h5>
\t\t\t\t\t\t\t\t\t\t\t<span>Web Design</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Testimonial Start -->


\t\t\t<!-- Contact Start -->
\t\t\t<div class=\"container-fluid py-5\">
\t\t\t\t<div class=\"container py-5\">
\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t<div class=\"col-lg-5 mb-5 mb-lg-0\">
\t\t\t\t\t\t\t<div class=\"bg-light d-flex flex-column justify-content-center px-5\" style=\"height: 450px;\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-5\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-icon bg-primary mr-4\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-2x fa-map-marker-alt text-white\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mt-n1\">
\t\t\t\t\t\t\t\t\t\t<h4>Our Location</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">123 Street, New York, USA</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-5\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-icon bg-secondary mr-4\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-2x fa-phone-alt text-white\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mt-n1\">
\t\t\t\t\t\t\t\t\t\t<h4>Call Us</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">+012 345 6789</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-icon bg-warning mr-4\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-2x fa-envelope text-white\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mt-n1\">
\t\t\t\t\t\t\t\t\t\t<h4>Email Us</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">info@example.com</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t\t\t<div class=\"section-title position-relative mb-4\">
\t\t\t\t\t\t\t\t<h6 class=\"d-inline-block position-relative text-secondary text-uppercase pb-2\">Need Help?</h6>
\t\t\t\t\t\t\t\t<h1 class=\"display-4\">Send Us A Message</h1>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"contact-form\">
\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 form-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control border-top-0 border-right-0 border-left-0 p-0\" placeholder=\"Your Name\" required=\"required\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 form-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control border-top-0 border-right-0 border-left-0 p-0\" placeholder=\"Your Email\" required=\"required\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control border-top-0 border-right-0 border-left-0 p-0\" placeholder=\"Subject\" required=\"required\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control border-top-0 border-right-0 border-left-0 p-0\" rows=\"5\" placeholder=\"Message\" required=\"required\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary py-3 px-5\" type=\"submit\">Send Message</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Contact End -->


\t\t\t<!-- Footer Start -->
\t\t\t<div class=\"container-fluid position-relative overlay-top bg-dark text-white-50 py-5\" style=\"margin-top: 90px;\">
\t\t\t\t<div class=\"container mt-5 pt-5\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6 mb-5\">
\t\t\t\t\t\t\t<a href=\"index.html\" class=\"navbar-brand\">
\t\t\t\t\t\t\t\t<h1 class=\"mt-n2 text-uppercase text-white\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-book-reader mr-3\"></i>Edukate</h1>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<p class=\"m-0\">Accusam nonumy clita sed rebum kasd eirmod elitr. Ipsum ea lorem at et diam est, tempor rebum ipsum sit ea tempor stet et consetetur dolores. Justo stet diam ipsum lorem vero clita diam</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 mb-5\">
\t\t\t\t\t\t\t<h3 class=\"text-white mb-4\">Newsletter</h3>
\t\t\t\t\t\t\t<div class=\"w-100\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control border-light\" style=\"padding: 30px;\" placeholder=\"Your Email Address\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary px-4\">Sign Up</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-4 mb-5\">
\t\t\t\t\t\t\t<h3 class=\"text-white mb-4\">Get In Touch</h3>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker-alt mr-2\"></i>123 Street, New York, USA</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<i class=\"fa fa-phone-alt mr-2\"></i>+012 345 67890</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope mr-2\"></i>info@example.com</p>
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-start mt-4\">
\t\t\t\t\t\t\t\t<a class=\"text-white mr-4\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-2x fa-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"text-white mr-4\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-2x fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"text-white mr-4\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-2x fa-linkedin-in\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-2x fa-instagram\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 mb-5\">
\t\t\t\t\t\t\t<h3 class=\"text-white mb-4\">Our Courses</h3>
\t\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-start\">
\t\t\t\t\t\t\t\t<a class=\"text-white-50 mb-2\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Web Design</a>
\t\t\t\t\t\t\t\t<a class=\"text-white-50 mb-2\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Apps Design</a>
\t\t\t\t\t\t\t\t<a class=\"text-white-50 mb-2\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Marketing</a>
\t\t\t\t\t\t\t\t<a class=\"text-white-50 mb-2\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Research</a>
\t\t\t\t\t\t\t\t<a class=\"text-white-50\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>SEO</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 mb-5\">
\t\t\t\t\t\t\t<h3 class=\"text-white mb-4\">Quick Links</h3>
\t\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-start\">
\t\t\t\t\t\t\t\t<a class=\"text-white-50 mb-2\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Privacy Policy</a>
\t\t\t\t\t\t\t\t<a class=\"text-white-50 mb-2\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Terms & Condition</a>
\t\t\t\t\t\t\t\t<a class=\"text-white-50 mb-2\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Regular FAQs</a>
\t\t\t\t\t\t\t\t<a class=\"text-white-50 mb-2\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Help & Support</a>
\t\t\t\t\t\t\t\t<a class=\"text-white-50\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Contact</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"container-fluid bg-dark text-white-50 border-top py-4\" style=\"border-color: rgba(256, 256, 256, .1) !important;\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6 text-center text-md-left mb-3 mb-md-0\">
\t\t\t\t\t\t\t<p class=\"m-0\">Copyright &copy;
\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"#\">Your Site Name</a>. All Rights Reserved.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 text-center text-md-right\">
\t\t\t\t\t\t\t<p class=\"m-0\">Designed by
\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"https://htmlcodex.com\">HTML Codex</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Footer End -->


\t\t\t<!-- Back to Top -->
\t\t\t<a href=\"#\" class=\"btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top\">
\t\t\t\t<i class=\"fa fa-angle-double-up\"></i>
\t\t\t</a>


\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 735
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 736
        echo "
\t\t\t<!-- JavaScript Libraries -->
\t\t\t<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
\t\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js\"></script>
\t\t\t<script src=\" ";
        // line 740
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/easing/easing.min.js "), "html", null, true);
        echo "\"></script>

\t\t\t<script src=\"";
        // line 742
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/waypoints/waypoints.min.js"), "html", null, true);
        echo "\"></script>

\t\t\t<script src=\"";
        // line 744
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/counterup/counterup.min.js"), "html", null, true);
        echo "\"></script>

\t\t\t<script src=\"";
        // line 746
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>


\t\t\t<!-- Template Javascript -->
\t\t\t<script src=\"";
        // line 750
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>


\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  938 => 750,  931 => 746,  926 => 744,  921 => 742,  916 => 740,  910 => 736,  900 => 735,  642 => 486,  613 => 460,  493 => 343,  469 => 322,  408 => 264,  364 => 223,  273 => 135,  227 => 92,  221 => 89,  215 => 86,  164 => 37,  154 => 36,  141 => 27,  135 => 24,  120 => 11,  110 => 10,  90 => 6,  77 => 754,  75 => 735,  72 => 734,  70 => 36,  62 => 30,  60 => 10,  56 => 8,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t{% block title %}Welcome!
\t\t\t{% endblock %}
\t\t</title>
\t\t<link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
\t\t{% block stylesheets %}
\t\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
\t\t\t<link
\t\t\thref=\"https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap\" rel=\"stylesheet\">

\t\t\t<!-- Font Awesome -->
\t\t\t<link
\t\t\thref=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">

\t\t\t<!-- Libraries Stylesheet -->
\t\t\t<link
\t\t\thref=\"lib/owlcarousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">

\t\t\t<!-- Customized Bootstrap Stylesheet -->
\t\t\t<link href=\"{{asset('assets/css/style.css')}}\" rel=\"stylesheet\">


\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/styles/app.css') }}\">

\t\t{% endblock %}


\t</head>
\t<body>


\t\t{% block body %}

\t\t\t<!-- Topbar Start -->
\t\t\t<div class=\"container-fluid bg-dark\">
\t\t\t\t<div class=\"row py-2 px-lg-5\">
\t\t\t\t\t<div class=\"col-lg-6 text-center text-lg-left mb-2 mb-lg-0\">
\t\t\t\t\t\t<div class=\"d-inline-flex align-items-center text-white\">
\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t<i class=\"fa fa-phone-alt mr-2\"></i>+012 345 6789</small>
\t\t\t\t\t\t\t<small class=\"px-3\">|</small>
\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope mr-2\"></i>info@example.com</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6 text-center text-lg-right\">
\t\t\t\t\t\t<div class=\"d-inline-flex align-items-center\">
\t\t\t\t\t\t\t<a class=\"text-white px-2\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"text-white px-2\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"text-white px-2\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"text-white px-2\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"text-white pl-2\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-youtube\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Topbar End -->


\t\t\t<!-- Navbar Start -->
\t\t\t<div class=\"container-fluid p-0\">
\t\t\t\t<nav class=\"navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5\">
\t\t\t\t\t<a href=\"index.html\" class=\"navbar-brand ml-lg-3\">
\t\t\t\t\t\t<h1 class=\"m-0 text-uppercase text-primary\">
\t\t\t\t\t\t\t<i class=\"fa fa-book-reader mr-3\"></i>Edukate</h1>
\t\t\t\t\t</a>
\t\t\t\t\t<button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"collapse navbar-collapse justify-content-between px-lg-3\" id=\"navbarCollapse\">
\t\t\t\t\t\t<div class=\"navbar-nav mx-auto py-0\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_home') }}\" class=\"nav-item nav-link\">Home</a>


\t\t\t\t\t\t\t<a href=\"{{ path('app_cours_index') }}\" class=\"nav-item nav-link active\">Courses</a>


\t\t\t\t\t\t\t<a href=\"{{ path('app_cours_index') }}\" class=\"nav-item nav-link\">Contact</a>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary py-2 px-4 d-none d-lg-block\">Join Us</a>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</div>

\t\t\t<!-- Navbar End -->


\t\t\t<!-- Header Start -->
\t\t\t<div class=\"jumbotron jumbotron-fluid position-relative overlay-bottom\" style=\"margin-bottom: 90px;\">
\t\t\t\t<div class=\"container text-center my-5 py-5\">
\t\t\t\t\t<h1 class=\"text-white mt-4 mb-4\">Learn From Home</h1>
\t\t\t\t\t<h1 class=\"text-white display-1 mb-5\">Education Courses</h1>
\t\t\t\t\t<div class=\"mx-auto mb-5\" style=\"width: 100%; max-width: 600px;\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-outline-light bg-white text-body px-4 dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Courses</button>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Courses 1</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Courses 2</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Courses 3</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control border-light\" style=\"padding: 30px 25px;\" placeholder=\"Keyword\">
\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-secondary px-4 px-lg-5\">Search</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Header End -->


\t\t\t<!-- About Start -->
\t\t\t<div class=\"container-fluid py-5\">
\t\t\t\t<div class=\"container py-5\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-5 mb-5 mb-lg-0\" style=\"min-height: 500px;\">
\t\t\t\t\t\t\t<div class=\"position-relative h-100\">
\t\t\t\t\t\t\t\t<img class=\"position-absolute w-100 h-100\" src=\"{{asset('assets/img/about.jpg')}}\" style=\"object-fit: cover;\">


\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t\t\t<div class=\"section-title position-relative mb-4\">
\t\t\t\t\t\t\t\t<h6 class=\"d-inline-block position-relative text-secondary text-uppercase pb-2\">About Us</h6>
\t\t\t\t\t\t\t\t<h1 class=\"display-4\">First Choice For Online Education Anywhere</h1>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor consetetur takimata eirmod, dolores takimata consetetur invidunt magna dolores aliquyam dolores dolore. Amet erat amet et magna</p>
\t\t\t\t\t\t\t<div class=\"row pt-3 mx-0\">
\t\t\t\t\t\t\t\t<div class=\"col-3 px-0\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-success text-center p-4\">
\t\t\t\t\t\t\t\t\t\t<h1 class=\"text-white\" data-toggle=\"counter-up\">123</h1>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-uppercase text-white\">Available<span class=\"d-block\">Subjects</span>
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-3 px-0\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-primary text-center p-4\">
\t\t\t\t\t\t\t\t\t\t<h1 class=\"text-white\" data-toggle=\"counter-up\">1234</h1>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-uppercase text-white\">Online<span class=\"d-block\">Courses</span>
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-3 px-0\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-secondary text-center p-4\">
\t\t\t\t\t\t\t\t\t\t<h1 class=\"text-white\" data-toggle=\"counter-up\">123</h1>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-uppercase text-white\">Skilled<span class=\"d-block\">Instructors</span>
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-3 px-0\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-warning text-center p-4\">
\t\t\t\t\t\t\t\t\t\t<h1 class=\"text-white\" data-toggle=\"counter-up\">1234</h1>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-uppercase text-white\">Happy<span class=\"d-block\">Students</span>
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- About End -->


\t\t\t<!-- Feature Start -->
\t\t\t<div class=\"container-fluid bg-image\" style=\"margin: 90px 0;\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-7 my-5 pt-5 pb-lg-5\">
\t\t\t\t\t\t\t<div class=\"section-title position-relative mb-4\">
\t\t\t\t\t\t\t\t<h6 class=\"d-inline-block position-relative text-secondary text-uppercase pb-2\">Why Choose Us?</h6>
\t\t\t\t\t\t\t\t<h1 class=\"display-4\">Why You Should Start Learning with Us?</h1>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"mb-4 pb-2\">Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est. Diam sanctus gubergren sit rebum clita amet.</p>
\t\t\t\t\t\t\t<div class=\"d-flex mb-3\">
\t\t\t\t\t\t\t\t<div class=\"btn-icon bg-primary mr-4\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-2x fa-graduation-cap text-white\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mt-n1\">
\t\t\t\t\t\t\t\t\t<h4>Skilled Instructors</h4>
\t\t\t\t\t\t\t\t\t<p>Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-flex mb-3\">
\t\t\t\t\t\t\t\t<div class=\"btn-icon bg-secondary mr-4\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-2x fa-certificate text-white\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mt-n1\">
\t\t\t\t\t\t\t\t\t<h4>International Certificate</h4>
\t\t\t\t\t\t\t\t\t<p>Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t<div class=\"btn-icon bg-warning mr-4\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-2x fa-book-reader text-white\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mt-n1\">
\t\t\t\t\t\t\t\t\t<h4>Online Classes</h4>
\t\t\t\t\t\t\t\t\t<p class=\"m-0\">Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-5\" style=\"min-height: 500px;\">
\t\t\t\t\t\t\t<div class=\"position-relative h-100\">
\t\t\t\t\t\t\t\t<img class=\"position-absolute w-100 h-100\" src=\"{{asset('assets/img/feature.jpg')}}\" style=\"object-fit: cover;\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Feature Start -->


\t\t\t<!-- Courses Start -->
\t\t\t<div class=\"container-fluid px-0 py-5\">
\t\t\t\t<div class=\"row mx-0 justify-content-center pt-5\">
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"section-title text-center position-relative mb-4\">
\t\t\t\t\t\t\t<h6 class=\"d-inline-block position-relative text-secondary text-uppercase pb-2\">Our Courses</h6>
\t\t\t\t\t\t\t<h1 class=\"display-4\">Checkout New Releases Of Our Courses</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"owl-carousel courses-carousel\">
\t\t\t\t\t<div class=\"courses-item position-relative\">
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/courses-1.jpg\" alt=\"\">
\t\t\t\t\t\t<div class=\"courses-text\">
\t\t\t\t\t\t\t<h4 class=\"text-center text-white px-3\">Web design & development courses for beginners</h4>
\t\t\t\t\t\t\t<div class=\"border-top w-100 mt-3\">
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between p-4\">
\t\t\t\t\t\t\t\t\t<span class=\"text-white\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user mr-2\"></i>Jhon Doe</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-white\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star mr-2\"></i>4.5
\t\t\t\t\t\t\t\t\t\t<small>(250)</small>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 bg-white text-center p-4\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"detail.html\">Course Detail</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"courses-item position-relative\">
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{asset('assets/img/courses-2.jpg')}}\" alt=\"\">

\t\t\t\t\t\t<div class=\"courses-text\">
\t\t\t\t\t\t\t<h4 class=\"text-center text-white px-3\">Web design & development courses for beginners</h4>
\t\t\t\t\t\t\t<div class=\"border-top w-100 mt-3\">
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between p-4\">
\t\t\t\t\t\t\t\t\t<span class=\"text-white\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user mr-2\"></i>Jhon Doe</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-white\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star mr-2\"></i>4.5
\t\t\t\t\t\t\t\t\t\t<small>(250)</small>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 bg-white text-center p-4\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"\">Course Detail</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"courses-item position-relative\">
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/courses-3.jpg\" alt=\"\">
\t\t\t\t\t\t<div class=\"courses-text\">
\t\t\t\t\t\t\t<h4 class=\"text-center text-white px-3\">Web design & development courses for beginners</h4>
\t\t\t\t\t\t\t<div class=\"border-top w-100 mt-3\">
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between p-4\">
\t\t\t\t\t\t\t\t\t<span class=\"text-white\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user mr-2\"></i>Jhon Doe</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-white\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star mr-2\"></i>4.5
\t\t\t\t\t\t\t\t\t\t<small>(250)</small>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 bg-white text-center p-4\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"\">Course Detail</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"courses-item position-relative\">
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/courses-4.jpg\" alt=\"\">
\t\t\t\t\t\t<div class=\"courses-text\">
\t\t\t\t\t\t\t<h4 class=\"text-center text-white px-3\">Web design & development courses for beginners</h4>
\t\t\t\t\t\t\t<div class=\"border-top w-100 mt-3\">
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between p-4\">
\t\t\t\t\t\t\t\t\t<span class=\"text-white\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user mr-2\"></i>Jhon Doe</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-white\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star mr-2\"></i>4.5
\t\t\t\t\t\t\t\t\t\t<small>(250)</small>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 bg-white text-center p-4\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"\">Course Detail</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"courses-item position-relative\">
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{asset('assets/img/courses-5.jpg')}}\" alt=\"\">


\t\t\t\t\t\t<div class=\"courses-text\">
\t\t\t\t\t\t\t<h4 class=\"text-center text-white px-3\">Web design & development courses for beginners</h4>
\t\t\t\t\t\t\t<div class=\"border-top w-100 mt-3\">
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between p-4\">
\t\t\t\t\t\t\t\t\t<span class=\"text-white\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user mr-2\"></i>Jhon Doe</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-white\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star mr-2\"></i>4.5
\t\t\t\t\t\t\t\t\t\t<small>(250)</small>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 bg-white text-center p-4\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"\">Course Detail</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"courses-item position-relative\">
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{asset('assets/img/courses-6.jpg')}}\" alt=\"\">

\t\t\t\t\t\t<div class=\"courses-text\">
\t\t\t\t\t\t\t<h4 class=\"text-center text-white px-3\">Web design & development courses for beginners</h4>
\t\t\t\t\t\t\t<div class=\"border-top w-100 mt-3\">
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between p-4\">
\t\t\t\t\t\t\t\t\t<span class=\"text-white\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user mr-2\"></i>Jhon Doe</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-white\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star mr-2\"></i>4.5
\t\t\t\t\t\t\t\t\t\t<small>(250)</small>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-100 bg-white text-center p-4\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"\">Course Detail</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row justify-content-center bg-image mx-0 mb-5\">
\t\t\t\t\t<div class=\"col-lg-6 py-5\">
\t\t\t\t\t\t<div class=\"bg-white p-5 my-5\">
\t\t\t\t\t\t\t<h1 class=\"text-center mb-4\">30% Off For New Students</h1>
\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bg-light border-0\" placeholder=\"Your Name\" style=\"padding: 30px 20px;\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control bg-light border-0\" placeholder=\"Your Email\" style=\"padding: 30px 20px;\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<select class=\"custom-select bg-light border-0 px-3\" style=\"height: 60px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<option selected>Select A courses</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">courses 1</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">courses 1</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">courses 1</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-block\" type=\"submit\" style=\"height: 60px;\">Sign Up Now</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Courses End -->


\t\t\t<!-- Team Start -->
\t\t\t<div class=\"container-fluid py-5\">
\t\t\t\t<div class=\"container py-5\">
\t\t\t\t\t<div class=\"section-title text-center position-relative mb-5\">
\t\t\t\t\t\t<h6 class=\"d-inline-block position-relative text-secondary text-uppercase pb-2\">Instructors</h6>
\t\t\t\t\t\t<h1 class=\"display-4\">Meet Our Instructors</h1>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"owl-carousel team-carousel position-relative\" style=\"padding: 0 30px;\">
\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t<img class=\"img-fluid w-100\" src=\"img/team-1.jpg\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"bg-light text-center p-4\">
\t\t\t\t\t\t\t\t<h5 class=\"mb-3\">Instructor Name</h5>
\t\t\t\t\t\t\t\t<p class=\"mb-2\">Web Design & Development</p>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-youtube\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t<img class=\"img-fluid w-100\" src=\"img/team-2.jpg\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"bg-light text-center p-4\">
\t\t\t\t\t\t\t\t<h5 class=\"mb-3\">Instructor Name</h5>
\t\t\t\t\t\t\t\t<p class=\"mb-2\">Web Design & Development</p>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-youtube\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t<img class=\"img-fluid w-100\" src=\"{{asset('assets/img/team-3.jpg')}}\" alt=\"\">


\t\t\t\t\t\t\t<div class=\"bg-light text-center p-4\">
\t\t\t\t\t\t\t\t<h5 class=\"mb-3\">Instructor Name</h5>
\t\t\t\t\t\t\t\t<p class=\"mb-2\">Web Design & Development</p>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-youtube\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t<img class=\"img-fluid w-100\" src=\"{{asset('assets/img/team-4.jpg')}}\" alt=\"\">


\t\t\t\t\t\t\t<div class=\"bg-light text-center p-4\">
\t\t\t\t\t\t\t\t<h5 class=\"mb-3\">Instructor Name</h5>
\t\t\t\t\t\t\t\t<p class=\"mb-2\">Web Design & Development</p>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"mx-1 p-1\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-youtube\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Team End -->


\t\t\t<!-- Testimonial Start -->
\t\t\t<div class=\"container-fluid bg-image py-5\" style=\"margin: 90px 0;\">
\t\t\t\t<div class=\"container py-5\">
\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t<div class=\"col-lg-5 mb-5 mb-lg-0\">
\t\t\t\t\t\t\t<div class=\"section-title position-relative mb-4\">
\t\t\t\t\t\t\t\t<h6 class=\"d-inline-block position-relative text-secondary text-uppercase pb-2\">Testimonial</h6>
\t\t\t\t\t\t\t\t<h1 class=\"display-4\">What Say Our Students</h1>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"m-0\">Dolor est dolores et nonumy sit labore dolores est sed rebum amet, justo duo ipsum sanctus dolore magna rebum sit et. Diam lorem ea sea at. Nonumy et at at sed justo est nonumy tempor. Vero sea ea eirmod, elitr ea amet diam ipsum at amet. Erat sed stet eos ipsum diam</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t\t\t<div class=\"owl-carousel testimonial-carousel\">
\t\t\t\t\t\t\t\t<div class=\"bg-white p-5\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-3x fa-quote-left text-primary mb-4\"></i>
\t\t\t\t\t\t\t\t\t<p>Sed et elitr ipsum labore dolor diam, ipsum duo vero sed sit est est ipsum eos clita est ipsum. Est nonumy tempor at kasd. Sed at dolor duo ut dolor, et justo erat dolor magna sed stet amet elitr duo lorem</p>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-shrink-0 align-items-center mt-4\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid mr-4\" src=\"img/testimonial-2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<h5>Student Name</h5>
\t\t\t\t\t\t\t\t\t\t\t<span>Web Design</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"bg-white p-5\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-3x fa-quote-left text-primary mb-4\"></i>
\t\t\t\t\t\t\t\t\t<p>Sed et elitr ipsum labore dolor diam, ipsum duo vero sed sit est est ipsum eos clita est ipsum. Est nonumy tempor at kasd. Sed at dolor duo ut dolor, et justo erat dolor magna sed stet amet elitr duo lorem</p>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-shrink-0 align-items-center mt-4\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid mr-4\" src=\"img/testimonial-1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<h5>Student Name</h5>
\t\t\t\t\t\t\t\t\t\t\t<span>Web Design</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Testimonial Start -->


\t\t\t<!-- Contact Start -->
\t\t\t<div class=\"container-fluid py-5\">
\t\t\t\t<div class=\"container py-5\">
\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t<div class=\"col-lg-5 mb-5 mb-lg-0\">
\t\t\t\t\t\t\t<div class=\"bg-light d-flex flex-column justify-content-center px-5\" style=\"height: 450px;\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-5\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-icon bg-primary mr-4\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-2x fa-map-marker-alt text-white\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mt-n1\">
\t\t\t\t\t\t\t\t\t\t<h4>Our Location</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">123 Street, New York, USA</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-5\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-icon bg-secondary mr-4\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-2x fa-phone-alt text-white\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mt-n1\">
\t\t\t\t\t\t\t\t\t\t<h4>Call Us</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">+012 345 6789</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-icon bg-warning mr-4\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-2x fa-envelope text-white\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mt-n1\">
\t\t\t\t\t\t\t\t\t\t<h4>Email Us</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">info@example.com</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t\t\t<div class=\"section-title position-relative mb-4\">
\t\t\t\t\t\t\t\t<h6 class=\"d-inline-block position-relative text-secondary text-uppercase pb-2\">Need Help?</h6>
\t\t\t\t\t\t\t\t<h1 class=\"display-4\">Send Us A Message</h1>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"contact-form\">
\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 form-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control border-top-0 border-right-0 border-left-0 p-0\" placeholder=\"Your Name\" required=\"required\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 form-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control border-top-0 border-right-0 border-left-0 p-0\" placeholder=\"Your Email\" required=\"required\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control border-top-0 border-right-0 border-left-0 p-0\" placeholder=\"Subject\" required=\"required\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control border-top-0 border-right-0 border-left-0 p-0\" rows=\"5\" placeholder=\"Message\" required=\"required\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary py-3 px-5\" type=\"submit\">Send Message</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Contact End -->


\t\t\t<!-- Footer Start -->
\t\t\t<div class=\"container-fluid position-relative overlay-top bg-dark text-white-50 py-5\" style=\"margin-top: 90px;\">
\t\t\t\t<div class=\"container mt-5 pt-5\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6 mb-5\">
\t\t\t\t\t\t\t<a href=\"index.html\" class=\"navbar-brand\">
\t\t\t\t\t\t\t\t<h1 class=\"mt-n2 text-uppercase text-white\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-book-reader mr-3\"></i>Edukate</h1>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<p class=\"m-0\">Accusam nonumy clita sed rebum kasd eirmod elitr. Ipsum ea lorem at et diam est, tempor rebum ipsum sit ea tempor stet et consetetur dolores. Justo stet diam ipsum lorem vero clita diam</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 mb-5\">
\t\t\t\t\t\t\t<h3 class=\"text-white mb-4\">Newsletter</h3>
\t\t\t\t\t\t\t<div class=\"w-100\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control border-light\" style=\"padding: 30px;\" placeholder=\"Your Email Address\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary px-4\">Sign Up</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-4 mb-5\">
\t\t\t\t\t\t\t<h3 class=\"text-white mb-4\">Get In Touch</h3>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker-alt mr-2\"></i>123 Street, New York, USA</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<i class=\"fa fa-phone-alt mr-2\"></i>+012 345 67890</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope mr-2\"></i>info@example.com</p>
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-start mt-4\">
\t\t\t\t\t\t\t\t<a class=\"text-white mr-4\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-2x fa-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"text-white mr-4\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-2x fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"text-white mr-4\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-2x fa-linkedin-in\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-2x fa-instagram\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 mb-5\">
\t\t\t\t\t\t\t<h3 class=\"text-white mb-4\">Our Courses</h3>
\t\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-start\">
\t\t\t\t\t\t\t\t<a class=\"text-white-50 mb-2\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Web Design</a>
\t\t\t\t\t\t\t\t<a class=\"text-white-50 mb-2\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Apps Design</a>
\t\t\t\t\t\t\t\t<a class=\"text-white-50 mb-2\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Marketing</a>
\t\t\t\t\t\t\t\t<a class=\"text-white-50 mb-2\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Research</a>
\t\t\t\t\t\t\t\t<a class=\"text-white-50\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>SEO</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 mb-5\">
\t\t\t\t\t\t\t<h3 class=\"text-white mb-4\">Quick Links</h3>
\t\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-start\">
\t\t\t\t\t\t\t\t<a class=\"text-white-50 mb-2\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Privacy Policy</a>
\t\t\t\t\t\t\t\t<a class=\"text-white-50 mb-2\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Terms & Condition</a>
\t\t\t\t\t\t\t\t<a class=\"text-white-50 mb-2\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Regular FAQs</a>
\t\t\t\t\t\t\t\t<a class=\"text-white-50 mb-2\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Help & Support</a>
\t\t\t\t\t\t\t\t<a class=\"text-white-50\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Contact</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"container-fluid bg-dark text-white-50 border-top py-4\" style=\"border-color: rgba(256, 256, 256, .1) !important;\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6 text-center text-md-left mb-3 mb-md-0\">
\t\t\t\t\t\t\t<p class=\"m-0\">Copyright &copy;
\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"#\">Your Site Name</a>. All Rights Reserved.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 text-center text-md-right\">
\t\t\t\t\t\t\t<p class=\"m-0\">Designed by
\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"https://htmlcodex.com\">HTML Codex</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Footer End -->


\t\t\t<!-- Back to Top -->
\t\t\t<a href=\"#\" class=\"btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top\">
\t\t\t\t<i class=\"fa fa-angle-double-up\"></i>
\t\t\t</a>


\t\t{% endblock %}

\t\t{% block javascripts %}

\t\t\t<!-- JavaScript Libraries -->
\t\t\t<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
\t\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js\"></script>
\t\t\t<script src=\" {{asset('assets/lib/easing/easing.min.js ')}}\"></script>

\t\t\t<script src=\"{{asset('assets/lib/waypoints/waypoints.min.js')}}\"></script>

\t\t\t<script src=\"{{asset('assets/lib/counterup/counterup.min.js')}}\"></script>

\t\t\t<script src=\"{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}\"></script>


\t\t\t<!-- Template Javascript -->
\t\t\t<script src=\"{{asset('assets/js/main.js')}}\"></script>


\t\t{% endblock %}

\t</body>
</html>
", "home/index.html.twig", "C:\\Users\\sayed\\Desktop\\Projet_Omar\\classrom_project\\templates\\home\\index.html.twig");
    }
}
