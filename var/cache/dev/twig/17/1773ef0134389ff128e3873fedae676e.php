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

/* cours/index.html.twig */
class __TwigTemplate_73f4253614e7ba976d68ea4f6f796852 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cours/index.html.twig", 1);
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

        echo "Cours index
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
\t<!-- Topbar Start -->
\t<div class=\"container-fluid bg-dark\">
\t\t<div class=\"row py-2 px-lg-5\">
\t\t\t<div class=\"col-lg-6 text-center text-lg-left mb-2 mb-lg-0\">
\t\t\t\t<div class=\"d-inline-flex align-items-center text-white\">
\t\t\t\t\t<small>
\t\t\t\t\t\t<i class=\"fa fa-phone-alt mr-2\"></i>+012 345 6789</small>
\t\t\t\t\t<small class=\"px-3\">|</small>
\t\t\t\t\t<small>
\t\t\t\t\t\t<i class=\"fa fa-envelope mr-2\"></i>info@example.com</small>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-6 text-center text-lg-right\">
\t\t\t\t<div class=\"d-inline-flex align-items-center\">
\t\t\t\t\t<a class=\"text-white px-2\" href=\"\">
\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"text-white px-2\" href=\"\">
\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"text-white px-2\" href=\"\">
\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"text-white px-2\" href=\"\">
\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"text-white pl-2\" href=\"\">
\t\t\t\t\t\t<i class=\"fab fa-youtube\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Topbar End -->


\t<!-- Navbar Start -->
\t<div class=\"container-fluid p-0\">
\t\t<nav class=\"navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5\">
\t\t\t<a href=\"index.html\" class=\"navbar-brand ml-lg-3\">
\t\t\t\t<h1 class=\"m-0 text-uppercase text-primary\">
\t\t\t\t\t<i class=\"fa fa-book-reader mr-3\"></i>Edukate</h1>
\t\t\t</a>
\t\t\t<button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse justify-content-between px-lg-3\" id=\"navbarCollapse\">
\t\t\t\t<div class=\"navbar-nav mx-auto py-0\">
\t\t\t\t\t<a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"nav-item nav-link\">Home</a>


\t\t\t\t\t<a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index");
        echo "\" class=\"nav-item nav-link active\">Courses</a>


\t\t\t\t\t<a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index");
        echo "\" class=\"nav-item nav-link\">Contact</a>

\t\t\t\t</div>
\t\t\t\t<a href=\"\" class=\"btn btn-primary py-2 px-4 d-none d-lg-block\">Join Us</a>
\t\t\t</div>
\t\t</nav>
\t</div>
\t<!-- Navbar End -->


\t<!-- Header Start -->
\t<div class=\"jumbotron jumbotron-fluid page-header position-relative overlay-bottom\" style=\"margin-bottom: 90px;\">
\t\t<div class=\"container text-center py-5\">
\t\t\t<h1 class=\"text-white display-1\">Courses</h1>
\t\t\t<div class=\"d-inline-flex text-white mb-5\">
\t\t\t\t<p class=\"m-0 text-uppercase\">
\t\t\t\t\t<a class=\"text-white\" href=\"\">Home</a>
\t\t\t\t</p>
\t\t\t\t<i class=\"fa fa-angle-double-right pt-1 px-3\"></i>
\t\t\t\t<p class=\"m-0 text-uppercase\">Courses</p>
\t\t\t</div>
\t\t\t<div class=\"mx-auto mb-5\" style=\"width: 100%; max-width: 600px;\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t<button class=\"btn btn-outline-light bg-white text-body px-4 dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Courses</button>
\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Courses 1</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Courses 2</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Courses 3</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"text\" class=\"form-control border-light\" style=\"padding: 30px 25px;\" placeholder=\"Keyword\">
\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t<button class=\"btn btn-secondary px-4 px-lg-5\">Search</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Header End -->


\t<!-- Courses Start -->
\t<div class=\"container-fluid py-5\">
\t\t<div class=\"container py-5\">
\t\t\t<div class=\"row mx-0 justify-content-center\">
\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t<div class=\"section-title text-center position-relative mb-5\">
\t\t\t\t\t\t<h6 class=\"d-inline-block position-relative text-secondary text-uppercase pb-2\">Our Courses</h6>
\t\t\t\t\t\t<h1 class=\"display-4\">Checkout New Releases Of Our Courses</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">


\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t<th>Fichier</th>
\t\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 128, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
            // line 129
            echo "\t\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t\t<td>";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cour"], "nom", [], "any", false, false, false, 131), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, $context["cour"], "fichier", [], "any", false, false, false, 133))), "html", null, true);
            echo "\">View File (PDF)</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_show", ["id" => twig_get_attribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 136)]), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t</tr>


\t\t\t\t\t\t</tbody>
\t\t\t\t\t</tbody>
\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 146
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "\t\t</tbody>
\t</table>


</div></div></div><!-- Courses End --><!-- Footer Start --><div class=\"container-fluid position-relative overlay-top bg-dark text-white-50 py-5\" style=\"margin-top: 90px;\"><div class=\"container mt-5 pt-5\">
<div class=\"row\">
\t<div class=\"col-md-6 mb-5\">
\t\t<a href=\"index.html\" class=\"navbar-brand\">
\t\t\t<h1 class=\"mt-n2 text-uppercase text-white\">
\t\t\t\t<i class=\"fa fa-book-reader mr-3\"></i>Edukate</h1>
\t\t</a>
\t\t<p class=\"m-0\">Accusam nonumy clita sed rebum kasd eirmod elitr. Ipsum ea lorem at et diam est, tempor rebum ipsum sit ea tempor stet et consetetur dolores. Justo stet diam ipsum lorem vero clita diam</p>
\t</div>
\t<div class=\"col-md-6 mb-5\">
\t\t<h3 class=\"text-white mb-4\">Newsletter</h3>
\t\t<div class=\"w-100\">
\t\t\t<div class=\"input-group\">
\t\t\t\t<input type=\"text\" class=\"form-control border-light\" style=\"padding: 30px;\" placeholder=\"Your Email Address\">
\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t<button class=\"btn btn-primary px-4\">Sign Up</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"row\">
\t<div class=\"col-md-4 mb-5\">
\t\t<h3 class=\"text-white mb-4\">Get In Touch</h3>
\t\t<p>
\t\t\t<i class=\"fa fa-map-marker-alt mr-2\"></i>123 Street, New York, USA</p>
\t\t<p>
\t\t\t<i class=\"fa fa-phone-alt mr-2\"></i>+012 345 67890</p>
\t\t<p>
\t\t\t<i class=\"fa fa-envelope mr-2\"></i>info@example.com</p>
\t\t<div class=\"d-flex justify-content-start mt-4\">
\t\t\t<a class=\"text-white mr-4\" href=\"#\">
\t\t\t\t<i class=\"fab fa-2x fa-twitter\"></i>
\t\t\t</a>
\t\t\t<a class=\"text-white mr-4\" href=\"#\">
\t\t\t\t<i class=\"fab fa-2x fa-facebook-f\"></i>
\t\t\t</a>
\t\t\t<a class=\"text-white mr-4\" href=\"#\">
\t\t\t\t<i class=\"fab fa-2x fa-linkedin-in\"></i>
\t\t\t</a>
\t\t\t<a class=\"text-white\" href=\"#\">
\t\t\t\t<i class=\"fab fa-2x fa-instagram\"></i>
\t\t\t</a>
\t\t</div>
\t</div>
\t<div class=\"col-md-4 mb-5\">
\t\t<h3 class=\"text-white mb-4\">Our Courses</h3>
\t\t<div class=\"d-flex flex-column justify-content-start\">
\t\t\t<a class=\"text-white-50 mb-2\" href=\"#\">
\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Web Design</a>
\t\t\t<a class=\"text-white-50 mb-2\" href=\"#\">
\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Apps Design</a>
\t\t\t<a class=\"text-white-50 mb-2\" href=\"#\">
\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Marketing</a>
\t\t\t<a class=\"text-white-50 mb-2\" href=\"#\">
\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Research</a>
\t\t\t<a class=\"text-white-50\" href=\"#\">
\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>SEO</a>
\t\t</div>
\t</div>
\t<div class=\"col-md-4 mb-5\">
\t\t<h3 class=\"text-white mb-4\">Quick Links</h3>
\t\t<div class=\"d-flex flex-column justify-content-start\">
\t\t\t<a class=\"text-white-50 mb-2\" href=\"#\">
\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Privacy Policy</a>
\t\t\t<a class=\"text-white-50 mb-2\" href=\"#\">
\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Terms & Condition</a>
\t\t\t<a class=\"text-white-50 mb-2\" href=\"#\">
\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Regular FAQs</a>
\t\t\t<a class=\"text-white-50 mb-2\" href=\"#\">
\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Help & Support</a>
\t\t\t<a class=\"text-white-50\" href=\"#\">
\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Contact</a>
\t\t</div>
\t</div>
</div></div></div><div class=\"container-fluid bg-dark text-white-50 border-top py-4\" style=\"border-color: rgba(256, 256, 256, .1) !important;\"><div class=\"container\">
<div class=\"row\">
\t<div class=\"col-md-6 text-center text-md-left mb-3 mb-md-0\">
\t\t<p class=\"m-0\">Copyright &copy;
\t\t\t<a class=\"text-white\" href=\"#\">Your Site Name</a>. All Rights Reserved.
\t\t</p>
\t</div>
\t<div class=\"col-md-6 text-center text-md-right\">
\t\t<p class=\"m-0\">Designed by
\t\t\t<a class=\"text-white\" href=\"https://htmlcodex.com\">HTML Codex</a>
\t\t</p>
\t</div>
</div></div></div><!-- Footer End -->";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "cours/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  265 => 150,  256 => 146,  241 => 136,  235 => 133,  230 => 131,  226 => 129,  221 => 128,  152 => 62,  146 => 59,  140 => 56,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Cours index
{% endblock %}

{% block body %}

\t<!-- Topbar Start -->
\t<div class=\"container-fluid bg-dark\">
\t\t<div class=\"row py-2 px-lg-5\">
\t\t\t<div class=\"col-lg-6 text-center text-lg-left mb-2 mb-lg-0\">
\t\t\t\t<div class=\"d-inline-flex align-items-center text-white\">
\t\t\t\t\t<small>
\t\t\t\t\t\t<i class=\"fa fa-phone-alt mr-2\"></i>+012 345 6789</small>
\t\t\t\t\t<small class=\"px-3\">|</small>
\t\t\t\t\t<small>
\t\t\t\t\t\t<i class=\"fa fa-envelope mr-2\"></i>info@example.com</small>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-6 text-center text-lg-right\">
\t\t\t\t<div class=\"d-inline-flex align-items-center\">
\t\t\t\t\t<a class=\"text-white px-2\" href=\"\">
\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"text-white px-2\" href=\"\">
\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"text-white px-2\" href=\"\">
\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"text-white px-2\" href=\"\">
\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"text-white pl-2\" href=\"\">
\t\t\t\t\t\t<i class=\"fab fa-youtube\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Topbar End -->


\t<!-- Navbar Start -->
\t<div class=\"container-fluid p-0\">
\t\t<nav class=\"navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5\">
\t\t\t<a href=\"index.html\" class=\"navbar-brand ml-lg-3\">
\t\t\t\t<h1 class=\"m-0 text-uppercase text-primary\">
\t\t\t\t\t<i class=\"fa fa-book-reader mr-3\"></i>Edukate</h1>
\t\t\t</a>
\t\t\t<button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse justify-content-between px-lg-3\" id=\"navbarCollapse\">
\t\t\t\t<div class=\"navbar-nav mx-auto py-0\">
\t\t\t\t\t<a href=\"{{ path('app_home') }}\" class=\"nav-item nav-link\">Home</a>


\t\t\t\t\t<a href=\"{{ path('app_cours_index') }}\" class=\"nav-item nav-link active\">Courses</a>


\t\t\t\t\t<a href=\"{{ path('app_cours_index') }}\" class=\"nav-item nav-link\">Contact</a>

\t\t\t\t</div>
\t\t\t\t<a href=\"\" class=\"btn btn-primary py-2 px-4 d-none d-lg-block\">Join Us</a>
\t\t\t</div>
\t\t</nav>
\t</div>
\t<!-- Navbar End -->


\t<!-- Header Start -->
\t<div class=\"jumbotron jumbotron-fluid page-header position-relative overlay-bottom\" style=\"margin-bottom: 90px;\">
\t\t<div class=\"container text-center py-5\">
\t\t\t<h1 class=\"text-white display-1\">Courses</h1>
\t\t\t<div class=\"d-inline-flex text-white mb-5\">
\t\t\t\t<p class=\"m-0 text-uppercase\">
\t\t\t\t\t<a class=\"text-white\" href=\"\">Home</a>
\t\t\t\t</p>
\t\t\t\t<i class=\"fa fa-angle-double-right pt-1 px-3\"></i>
\t\t\t\t<p class=\"m-0 text-uppercase\">Courses</p>
\t\t\t</div>
\t\t\t<div class=\"mx-auto mb-5\" style=\"width: 100%; max-width: 600px;\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t<button class=\"btn btn-outline-light bg-white text-body px-4 dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Courses</button>
\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Courses 1</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Courses 2</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Courses 3</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"text\" class=\"form-control border-light\" style=\"padding: 30px 25px;\" placeholder=\"Keyword\">
\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t<button class=\"btn btn-secondary px-4 px-lg-5\">Search</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Header End -->


\t<!-- Courses Start -->
\t<div class=\"container-fluid py-5\">
\t\t<div class=\"container py-5\">
\t\t\t<div class=\"row mx-0 justify-content-center\">
\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t<div class=\"section-title text-center position-relative mb-5\">
\t\t\t\t\t\t<h6 class=\"d-inline-block position-relative text-secondary text-uppercase pb-2\">Our Courses</h6>
\t\t\t\t\t\t<h1 class=\"display-4\">Checkout New Releases Of Our Courses</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">


\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t<th>Fichier</th>
\t\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for cour in cours %}
\t\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t\t<td>{{ cour.nom }}</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/brochures/' ~ cour.fichier) }}\">View File (PDF)</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_cours_show', {'id': cour.id}) }}\">show</a>
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t</tr>


\t\t\t\t\t\t</tbody>
\t\t\t\t\t</tbody>
\t\t\t\t</tr>
\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>


</div></div></div><!-- Courses End --><!-- Footer Start --><div class=\"container-fluid position-relative overlay-top bg-dark text-white-50 py-5\" style=\"margin-top: 90px;\"><div class=\"container mt-5 pt-5\">
<div class=\"row\">
\t<div class=\"col-md-6 mb-5\">
\t\t<a href=\"index.html\" class=\"navbar-brand\">
\t\t\t<h1 class=\"mt-n2 text-uppercase text-white\">
\t\t\t\t<i class=\"fa fa-book-reader mr-3\"></i>Edukate</h1>
\t\t</a>
\t\t<p class=\"m-0\">Accusam nonumy clita sed rebum kasd eirmod elitr. Ipsum ea lorem at et diam est, tempor rebum ipsum sit ea tempor stet et consetetur dolores. Justo stet diam ipsum lorem vero clita diam</p>
\t</div>
\t<div class=\"col-md-6 mb-5\">
\t\t<h3 class=\"text-white mb-4\">Newsletter</h3>
\t\t<div class=\"w-100\">
\t\t\t<div class=\"input-group\">
\t\t\t\t<input type=\"text\" class=\"form-control border-light\" style=\"padding: 30px;\" placeholder=\"Your Email Address\">
\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t<button class=\"btn btn-primary px-4\">Sign Up</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"row\">
\t<div class=\"col-md-4 mb-5\">
\t\t<h3 class=\"text-white mb-4\">Get In Touch</h3>
\t\t<p>
\t\t\t<i class=\"fa fa-map-marker-alt mr-2\"></i>123 Street, New York, USA</p>
\t\t<p>
\t\t\t<i class=\"fa fa-phone-alt mr-2\"></i>+012 345 67890</p>
\t\t<p>
\t\t\t<i class=\"fa fa-envelope mr-2\"></i>info@example.com</p>
\t\t<div class=\"d-flex justify-content-start mt-4\">
\t\t\t<a class=\"text-white mr-4\" href=\"#\">
\t\t\t\t<i class=\"fab fa-2x fa-twitter\"></i>
\t\t\t</a>
\t\t\t<a class=\"text-white mr-4\" href=\"#\">
\t\t\t\t<i class=\"fab fa-2x fa-facebook-f\"></i>
\t\t\t</a>
\t\t\t<a class=\"text-white mr-4\" href=\"#\">
\t\t\t\t<i class=\"fab fa-2x fa-linkedin-in\"></i>
\t\t\t</a>
\t\t\t<a class=\"text-white\" href=\"#\">
\t\t\t\t<i class=\"fab fa-2x fa-instagram\"></i>
\t\t\t</a>
\t\t</div>
\t</div>
\t<div class=\"col-md-4 mb-5\">
\t\t<h3 class=\"text-white mb-4\">Our Courses</h3>
\t\t<div class=\"d-flex flex-column justify-content-start\">
\t\t\t<a class=\"text-white-50 mb-2\" href=\"#\">
\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Web Design</a>
\t\t\t<a class=\"text-white-50 mb-2\" href=\"#\">
\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Apps Design</a>
\t\t\t<a class=\"text-white-50 mb-2\" href=\"#\">
\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Marketing</a>
\t\t\t<a class=\"text-white-50 mb-2\" href=\"#\">
\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Research</a>
\t\t\t<a class=\"text-white-50\" href=\"#\">
\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>SEO</a>
\t\t</div>
\t</div>
\t<div class=\"col-md-4 mb-5\">
\t\t<h3 class=\"text-white mb-4\">Quick Links</h3>
\t\t<div class=\"d-flex flex-column justify-content-start\">
\t\t\t<a class=\"text-white-50 mb-2\" href=\"#\">
\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Privacy Policy</a>
\t\t\t<a class=\"text-white-50 mb-2\" href=\"#\">
\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Terms & Condition</a>
\t\t\t<a class=\"text-white-50 mb-2\" href=\"#\">
\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Regular FAQs</a>
\t\t\t<a class=\"text-white-50 mb-2\" href=\"#\">
\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Help & Support</a>
\t\t\t<a class=\"text-white-50\" href=\"#\">
\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Contact</a>
\t\t</div>
\t</div>
</div></div></div><div class=\"container-fluid bg-dark text-white-50 border-top py-4\" style=\"border-color: rgba(256, 256, 256, .1) !important;\"><div class=\"container\">
<div class=\"row\">
\t<div class=\"col-md-6 text-center text-md-left mb-3 mb-md-0\">
\t\t<p class=\"m-0\">Copyright &copy;
\t\t\t<a class=\"text-white\" href=\"#\">Your Site Name</a>. All Rights Reserved.
\t\t</p>
\t</div>
\t<div class=\"col-md-6 text-center text-md-right\">
\t\t<p class=\"m-0\">Designed by
\t\t\t<a class=\"text-white\" href=\"https://htmlcodex.com\">HTML Codex</a>
\t\t</p>
\t</div>
</div></div></div><!-- Footer End -->{% endblock %}
", "cours/index.html.twig", "C:\\Users\\sayed\\Desktop\\Projet_Omar\\classrom_project\\templates\\cours\\index.html.twig");
    }
}
