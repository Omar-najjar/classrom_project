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

/* admin/index.html.twig */
class __TwigTemplate_b9bc3c1a35b714b21fa254746c9627fa extends Template
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
            'css' => [$this, 'block_css'],
            'header' => [$this, 'block_header'],
            'pagetop' => [$this, 'block_pagetop'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        // line 1
        echo "<!doctype html>
<html
\tlang=\"en\" dir=\"ltr\">

\t<!-- soccer/project/  07 Jan 2020 03:36:49 GMT -->
\t<head>

\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

\t\t<link rel=\"icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("AdminPanel/asset/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\"/>

\t\t<title>
\t\t\t";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        // line 18
        echo "\t\t</title>

\t\t<!-- Bootstrap Core and vandor -->
\t\t";
        // line 21
        $this->displayBlock('css', $context, $blocks);
        // line 31
        echo "

\t</head>

\t<body
\t\tclass=\"font-montserrat\">
\t\t<!-- Page Loader -->
\t\t<div class=\"page-loader-wrapper\">
\t\t\t<div class=\"loader\"></div>
\t\t</div>

\t\t<div id=\"main_content\">

\t\t\t";
        // line 44
        $this->displayBlock('header', $context, $blocks);
        // line 88
        echo "

\t\t\t<div id=\"rightsidebar\" class=\"right_sidebar\">
\t\t\t\t<a href=\"javascript:void(0)\" class=\"p-3 settingbar float-right\">
\t\t\t\t\t<i class=\"fa fa-close\"></i>
\t\t\t\t</a>
\t\t\t\t<div class=\"p-4\">
\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t<h6 class=\"font-14 font-weight-bold text-muted\">Font Style</h6>
\t\t\t\t\t\t<div class=\"custom-controls-stacked font_setting\">
\t\t\t\t\t\t\t<label class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"custom-control-input\" name=\"font\" value=\"font-opensans\">
\t\t\t\t\t\t\t\t<span class=\"custom-control-label\">Open Sans Font</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"custom-control-input\" name=\"font\" value=\"font-montserrat\" checked=\"\">
\t\t\t\t\t\t\t\t<span class=\"custom-control-label\">Montserrat Google Font</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"custom-control-input\" name=\"font\" value=\"font-roboto\">
\t\t\t\t\t\t\t\t<span class=\"custom-control-label\">Robot Google Font</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t<h6 class=\"font-14 font-weight-bold text-muted\">Dropdown Menu Icon</h6>
\t\t\t\t\t\t<div class=\"custom-controls-stacked arrow_option\">
\t\t\t\t\t\t\t<label class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"custom-control-input\" name=\"marrow\" value=\"arrow-a\">
\t\t\t\t\t\t\t\t<span class=\"custom-control-label\">A</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"custom-control-input\" name=\"marrow\" value=\"arrow-b\">
\t\t\t\t\t\t\t\t<span class=\"custom-control-label\">B</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"custom-control-input\" name=\"marrow\" value=\"arrow-c\" checked=\"\">
\t\t\t\t\t\t\t\t<span class=\"custom-control-label\">C</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h6 class=\"font-14 font-weight-bold mt-4 text-muted\">SubMenu List Icon</h6>
\t\t\t\t\t\t<div class=\"custom-controls-stacked list_option\">
\t\t\t\t\t\t\t<label class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"custom-control-input\" name=\"listicon\" value=\"list-a\" checked=\"\">
\t\t\t\t\t\t\t\t<span class=\"custom-control-label\">A</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"custom-control-input\" name=\"listicon\" value=\"list-b\">
\t\t\t\t\t\t\t\t<span class=\"custom-control-label\">B</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"custom-control-input\" name=\"listicon\" value=\"list-c\">
\t\t\t\t\t\t\t\t<span class=\"custom-control-label\">C</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div>
\t\t\t\t\t\t<h6 class=\"font-14 font-weight-bold mt-4 text-muted\">General Settings</h6>
\t\t\t\t\t\t<ul class=\"setting-list list-unstyled mt-1 setting_switch\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<label class=\"custom-switch\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-description\">Night Mode</span>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom-switch-checkbox\" class=\"custom-switch-input btn-darkmode\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-indicator\"></span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<label class=\"custom-switch\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-description\">Fix Navbar top</span>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom-switch-checkbox\" class=\"custom-switch-input btn-fixnavbar\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-indicator\"></span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<label class=\"custom-switch\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-description\">Header Dark</span>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom-switch-checkbox\" class=\"custom-switch-input btn-pageheader\" checked=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-indicator\"></span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<label class=\"custom-switch\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-description\">Min Sidebar Dark</span>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom-switch-checkbox\" class=\"custom-switch-input btn-min_sidebar\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-indicator\"></span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<label class=\"custom-switch\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-description\">Sidebar Dark</span>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom-switch-checkbox\" class=\"custom-switch-input btn-sidebar\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-indicator\"></span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<label class=\"custom-switch\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-description\">Icon Color</span>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom-switch-checkbox\" class=\"custom-switch-input btn-iconcolor\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-indicator\"></span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<label class=\"custom-switch\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-description\">Gradient Color</span>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom-switch-checkbox\" class=\"custom-switch-input btn-gradient\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-indicator\"></span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<label class=\"custom-switch\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-description\">Box Shadow</span>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom-switch-checkbox\" class=\"custom-switch-input btn-boxshadow\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-indicator\"></span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<label class=\"custom-switch\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-description\">RTL Support</span>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom-switch-checkbox\" class=\"custom-switch-input btn-rtl\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-indicator\"></span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<label class=\"custom-switch\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-description\">Box Layout</span>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom-switch-checkbox\" class=\"custom-switch-input btn-boxlayout\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-indicator\"></span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"d-block\">Storage
\t\t\t\t\t\t\t<span class=\"float-right\">77%</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"progress progress-sm\">
\t\t\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"77\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 77%;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-block mt-3\">Upgrade Storage</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"theme_div\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<ul class=\"list-group list-unstyled\">
\t\t\t\t\t\t\t<li class=\"list-group-item mb-2\">
\t\t\t\t\t\t\t\t<p>Default Theme</p>
\t\t\t\t\t\t\t\t<a href=\"index-2.html\"><img src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("AdminPanel/images/themes/default.png"), "html", null, true);
        echo "\" class=\"img-fluid\"/></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list-group-item mb-2\">
\t\t\t\t\t\t\t\t<p>Night Mode Theme</p>
\t\t\t\t\t\t\t\t<a href=\"project-dark/index.html\"><img src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("AdminPanel/images/themes/dark.png"), "html", null, true);
        echo "\" class=\"img-fluid\"/></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list-group-item mb-2\">
\t\t\t\t\t\t\t\t<p>RTL Version</p>
\t\t\t\t\t\t\t\t<a href=\"project-rtl/index.html\"><img src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("AdminPanel/images/themes/rtl.png"), "html", null, true);
        echo "\" class=\"img-fluid\"/></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"user_div\">
\t\t\t\t<h5 class=\"brand-name mb-4\">EDUKATE<a href=\"javascript:void(0)\" class=\"user_btn\">

\t\t\t\t\t\t<i class=\"icon-logout\"></i>
\t\t\t\t\t</a>
\t\t\t\t</h5>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<a href=\"\"><img class=\"card-profile-img\" src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("AdminPanel/asset/images/sm/avatar1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t<h6 class=\"mb-0\">Med Omar Najjar</h6>
\t\t\t\t\t<span>cdec</span>
\t\t\t\t\t<div class=\"d-flex align-items-baseline mt-3\">
\t\t\t\t\t\t<h3 class=\"mb-0 mr-2\">9.8</h3>
\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t<span class=\"text-success\">1.6%
\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-up\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"progress progress-xs\">
\t\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" style=\"width: 15%\" aria-valuenow=\"15\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t<div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 20%\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t<div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 30%\" aria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t<div class=\"progress-bar bg-orange\" role=\"progressbar\" style=\"width: 5%\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t<div class=\"progress-bar bg-indigo\" role=\"progressbar\" style=\"width: 13%\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<h6 class=\"text-uppercase font-10 mt-1\">Performance Score</h6>
\t\t\t\t\t<hr>
\t\t\t\t\t<p>Activity</p>
\t\t\t\t\t<ul class=\"new_timeline\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"bullet pink\"></div>
\t\t\t\t\t\t\t<div class=\"time\">11:00am</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<h3>Attendance</h3>
\t\t\t\t\t\t\t\t<h4>Computer Class</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"bullet pink\"></div>
\t\t\t\t\t\t\t<div class=\"time\">11:30am</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<h3>Added an interest</h3>
\t\t\t\t\t\t\t\t<h4>“Volunteer Activities”</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"bullet green\"></div>
\t\t\t\t\t\t\t<div class=\"time\">12:00pm</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<h3>Developer Team</h3>
\t\t\t\t\t\t\t\t<h4>Hangouts</h4>
\t\t\t\t\t\t\t\t<ul class=\"list-unstyled team-info margin-0 p-t-5\">
\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("AdminPanel/asset/images/xs/avatar1.jpg"), "html", null, true);
        echo "\" alt=\"Avatar\"></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"bullet green\"></div>
\t\t\t\t\t\t\t<div class=\"time\">2:00pm</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<h3>Responded to need</h3>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">“In-Kind Opportunity”</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"bullet orange\"></div>
\t\t\t\t\t\t\t<div class=\"time\">1:30pm</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<h3>Lunch Break</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"bullet green\"></div>
\t\t\t\t\t\t\t<div class=\"time\">2:38pm</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<h3>Finish</h3>
\t\t\t\t\t\t\t\t<h4>Go to Home</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div id=\"left-sidebar\" class=\"sidebar \">
\t\t\t\t<h5 class=\"brand-name\">EDUKATE

\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"menu_option float-right\">
\t\t\t\t\t\t<i class=\"icon-grid font-16\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Grid & List Toggle\"></i>
\t\t\t\t\t</a>
\t\t\t\t</h5>
\t\t\t\t<nav id=\"left-sidebar-nav\" class=\"sidebar-nav\">
\t\t\t\t\t<ul class=\"metismenu\">
\t\t\t\t\t\t<li class=\"g_heading\">Menu</li>
\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-dashboard\"></i>
\t\t\t\t\t\t\t\t<span>Dashboard</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>


\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"has-arrow arrow-c\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-lock\"></i>
\t\t\t\t\t\t\t\t<span>Cours</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\" ";
        // line 362
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_new");
        echo "\">Add Cours</a></li>


\t\t\t\t\t\t\t\t<li><a href=\" ";
        // line 365
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_admin");
        echo "\">List Cours</a></li>


\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>


\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"has-arrow arrow-c\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-lock\"></i>
\t\t\t\t\t\t\t\t<span>Users</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\" ";
        // line 378
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\">List Users</a></li>


\t\t\t\t\t\t\t\t<li><a href=\" ";
        // line 381
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        echo "\">Add User</a></li>


\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>


\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 389
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_index");
        echo "\">


\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar-check-o\"></i>
\t\t\t\t\t\t\t\t<span>Classe</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>


\t\t\t\t\t\t<li class=\"g_heading\">Support</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-support\"></i>
\t\t\t\t\t\t\t\t<span>Need Help?</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-tag\"></i>
\t\t\t\t\t\t\t\t<span>ContactUs</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t</div>

\t\t\t<div class=\"page\"> ";
        // line 415
        $this->displayBlock('pagetop', $context, $blocks);
        // line 416
        echo "\t\t\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 431
        echo "\t\t\t</div>
\t\t</div>


\t\t";
        // line 435
        $this->displayBlock('js', $context, $blocks);
        // line 450
        echo "
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 16
        echo "\t\t\t\tAdminPanel
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 21
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 22
        echo "\t\t\t<link
\t\t\trel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("AdminPanel/asset/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
\t\t\t<!-- Plugins css -->
\t\t\t<link
\t\t\trel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("AdminPanel/asset/plugins/charts-c3/c3.min.css"), "html", null, true);
        echo "\"/>
\t\t\t<!-- Core css -->
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("AdminPanel/asset/css/main.css"), "html", null, true);
        echo "\"/>
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("AdminPanel/asset/css/theme1.css"), "html", null, true);
        echo "\"/>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 44
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 45
        echo "\t\t\t\t<div id=\"header_top\" class=\"header_top\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"hleft\">
\t\t\t\t\t\t\t<a class=\"header-brand\" href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-soccer-ball-o brand-logo\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"nav-link user_btn\"><img class=\"avatar\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("AdminPanel/asset/images/user.png"), "html", null, true);
        echo "\" alt=\"\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"User Menu\"/></a>
\t\t\t\t\t\t\t\t<a href=\"\" class=\"nav-link icon xs-hide\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"\" class=\"nav-link icon app_inbox xs-hide\">
\t\t\t\t\t\t\t\t\t<i class=\"\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"\" class=\"nav-link icon xs-hide\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-id-card-o\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"\" class=\"nav-link icon xs-hide\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comments-o\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"\" class=\"nav-link icon app_file xs-hide\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-folder-o\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"nav-link icon theme_btn xs-hide\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-paint-brush\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Themes\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"hright\">
\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"nav-link icon settingbar\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-gear fa-spin\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Settings\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"nav-link icon menu_toggle\">
\t\t\t\t\t\t\t\t\t<i class=\"fa  fa-align-left\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 415
    public function block_pagetop($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagetop"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagetop"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 416
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 417
        echo "\t\t\t\t\t<!--    <div class=\"section-body mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                <div class=\"container-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <div class=\"row clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        <div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            <div class=\"mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <h4>Welcome Peter Richards!</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <small>Measure How Fast You’re Growing Monthly Recurring Revenue. <a href=\"#\">Learn More</a></small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            </div>-->

\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 435
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 436
        echo "
\t\t\t<script src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("AdminPanel/asset/bundles/lib.vendor.bundle.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("AdminPanel/asset/bundles/apexcharts.bundle.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("AdminPanel/asset/bundles/counterup.bundle.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("AdminPanel/asset/bundles/knobjs.bundle.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("AdminPanel/asset/bundles/c3.bundle.js"), "html", null, true);
        echo "\"></script>

\t\t\t<script src=\"";
        // line 443
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("AdminPanel/asset/js/core.js"), "html", null, true);
        echo "\"></script>

\t\t\t<script src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("AdminPanel/asset/js/page/project-index.js"), "html", null, true);
        echo "\"></script>


\t\t</body>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/index.html.twig";
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
        return array (  697 => 445,  692 => 443,  687 => 441,  683 => 440,  679 => 439,  675 => 438,  671 => 437,  668 => 436,  658 => 435,  635 => 417,  625 => 416,  607 => 415,  561 => 52,  554 => 48,  549 => 45,  539 => 44,  527 => 29,  523 => 28,  518 => 26,  512 => 23,  509 => 22,  499 => 21,  488 => 16,  478 => 15,  466 => 450,  464 => 435,  458 => 431,  455 => 416,  453 => 415,  424 => 389,  413 => 381,  407 => 378,  391 => 365,  385 => 362,  327 => 307,  279 => 262,  262 => 248,  255 => 244,  248 => 240,  94 => 88,  92 => 44,  77 => 31,  75 => 21,  70 => 18,  68 => 15,  62 => 12,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html
\tlang=\"en\" dir=\"ltr\">

\t<!-- soccer/project/  07 Jan 2020 03:36:49 GMT -->
\t<head>

\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

\t\t<link rel=\"icon\" href=\"{{ asset('AdminPanel/asset/favicon.ico')}}\" type=\"image/x-icon\"/>

\t\t<title>
\t\t\t{% block title %}
\t\t\t\tAdminPanel
\t\t\t{% endblock %}
\t\t</title>

\t\t<!-- Bootstrap Core and vandor -->
\t\t{% block css %}
\t\t\t<link
\t\t\trel=\"stylesheet\" href=\"{{ asset('AdminPanel/asset/plugins/bootstrap/css/bootstrap.min.css') }}\"/>
\t\t\t<!-- Plugins css -->
\t\t\t<link
\t\t\trel=\"stylesheet\" href=\"{{ asset('AdminPanel/asset/plugins/charts-c3/c3.min.css') }}\"/>
\t\t\t<!-- Core css -->
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('AdminPanel/asset/css/main.css')}}\"/>
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('AdminPanel/asset/css/theme1.css')}}\"/>
\t\t{% endblock %}


\t</head>

\t<body
\t\tclass=\"font-montserrat\">
\t\t<!-- Page Loader -->
\t\t<div class=\"page-loader-wrapper\">
\t\t\t<div class=\"loader\"></div>
\t\t</div>

\t\t<div id=\"main_content\">

\t\t\t{% block header %}
\t\t\t\t<div id=\"header_top\" class=\"header_top\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"hleft\">
\t\t\t\t\t\t\t<a class=\"header-brand\" href=\"{{ path('app_admin') }}\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-soccer-ball-o brand-logo\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"nav-link user_btn\"><img class=\"avatar\" src=\"{{ asset('AdminPanel/asset/images/user.png')}}\" alt=\"\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"User Menu\"/></a>
\t\t\t\t\t\t\t\t<a href=\"\" class=\"nav-link icon xs-hide\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"\" class=\"nav-link icon app_inbox xs-hide\">
\t\t\t\t\t\t\t\t\t<i class=\"\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"\" class=\"nav-link icon xs-hide\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-id-card-o\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"\" class=\"nav-link icon xs-hide\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comments-o\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"\" class=\"nav-link icon app_file xs-hide\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-folder-o\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"nav-link icon theme_btn xs-hide\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-paint-brush\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Themes\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"hright\">
\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"nav-link icon settingbar\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-gear fa-spin\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Settings\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"nav-link icon menu_toggle\">
\t\t\t\t\t\t\t\t\t<i class=\"fa  fa-align-left\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endblock %}


\t\t\t<div id=\"rightsidebar\" class=\"right_sidebar\">
\t\t\t\t<a href=\"javascript:void(0)\" class=\"p-3 settingbar float-right\">
\t\t\t\t\t<i class=\"fa fa-close\"></i>
\t\t\t\t</a>
\t\t\t\t<div class=\"p-4\">
\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t<h6 class=\"font-14 font-weight-bold text-muted\">Font Style</h6>
\t\t\t\t\t\t<div class=\"custom-controls-stacked font_setting\">
\t\t\t\t\t\t\t<label class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"custom-control-input\" name=\"font\" value=\"font-opensans\">
\t\t\t\t\t\t\t\t<span class=\"custom-control-label\">Open Sans Font</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"custom-control-input\" name=\"font\" value=\"font-montserrat\" checked=\"\">
\t\t\t\t\t\t\t\t<span class=\"custom-control-label\">Montserrat Google Font</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"custom-control-input\" name=\"font\" value=\"font-roboto\">
\t\t\t\t\t\t\t\t<span class=\"custom-control-label\">Robot Google Font</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t<h6 class=\"font-14 font-weight-bold text-muted\">Dropdown Menu Icon</h6>
\t\t\t\t\t\t<div class=\"custom-controls-stacked arrow_option\">
\t\t\t\t\t\t\t<label class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"custom-control-input\" name=\"marrow\" value=\"arrow-a\">
\t\t\t\t\t\t\t\t<span class=\"custom-control-label\">A</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"custom-control-input\" name=\"marrow\" value=\"arrow-b\">
\t\t\t\t\t\t\t\t<span class=\"custom-control-label\">B</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"custom-control-input\" name=\"marrow\" value=\"arrow-c\" checked=\"\">
\t\t\t\t\t\t\t\t<span class=\"custom-control-label\">C</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h6 class=\"font-14 font-weight-bold mt-4 text-muted\">SubMenu List Icon</h6>
\t\t\t\t\t\t<div class=\"custom-controls-stacked list_option\">
\t\t\t\t\t\t\t<label class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"custom-control-input\" name=\"listicon\" value=\"list-a\" checked=\"\">
\t\t\t\t\t\t\t\t<span class=\"custom-control-label\">A</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"custom-control-input\" name=\"listicon\" value=\"list-b\">
\t\t\t\t\t\t\t\t<span class=\"custom-control-label\">B</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"custom-control-input\" name=\"listicon\" value=\"list-c\">
\t\t\t\t\t\t\t\t<span class=\"custom-control-label\">C</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div>
\t\t\t\t\t\t<h6 class=\"font-14 font-weight-bold mt-4 text-muted\">General Settings</h6>
\t\t\t\t\t\t<ul class=\"setting-list list-unstyled mt-1 setting_switch\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<label class=\"custom-switch\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-description\">Night Mode</span>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom-switch-checkbox\" class=\"custom-switch-input btn-darkmode\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-indicator\"></span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<label class=\"custom-switch\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-description\">Fix Navbar top</span>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom-switch-checkbox\" class=\"custom-switch-input btn-fixnavbar\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-indicator\"></span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<label class=\"custom-switch\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-description\">Header Dark</span>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom-switch-checkbox\" class=\"custom-switch-input btn-pageheader\" checked=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-indicator\"></span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<label class=\"custom-switch\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-description\">Min Sidebar Dark</span>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom-switch-checkbox\" class=\"custom-switch-input btn-min_sidebar\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-indicator\"></span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<label class=\"custom-switch\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-description\">Sidebar Dark</span>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom-switch-checkbox\" class=\"custom-switch-input btn-sidebar\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-indicator\"></span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<label class=\"custom-switch\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-description\">Icon Color</span>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom-switch-checkbox\" class=\"custom-switch-input btn-iconcolor\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-indicator\"></span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<label class=\"custom-switch\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-description\">Gradient Color</span>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom-switch-checkbox\" class=\"custom-switch-input btn-gradient\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-indicator\"></span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<label class=\"custom-switch\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-description\">Box Shadow</span>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom-switch-checkbox\" class=\"custom-switch-input btn-boxshadow\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-indicator\"></span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<label class=\"custom-switch\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-description\">RTL Support</span>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom-switch-checkbox\" class=\"custom-switch-input btn-rtl\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-indicator\"></span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<label class=\"custom-switch\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-description\">Box Layout</span>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom-switch-checkbox\" class=\"custom-switch-input btn-boxlayout\">
\t\t\t\t\t\t\t\t\t<span class=\"custom-switch-indicator\"></span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"d-block\">Storage
\t\t\t\t\t\t\t<span class=\"float-right\">77%</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"progress progress-sm\">
\t\t\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"77\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 77%;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-block mt-3\">Upgrade Storage</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"theme_div\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<ul class=\"list-group list-unstyled\">
\t\t\t\t\t\t\t<li class=\"list-group-item mb-2\">
\t\t\t\t\t\t\t\t<p>Default Theme</p>
\t\t\t\t\t\t\t\t<a href=\"index-2.html\"><img src=\"{{ asset('AdminPanel/images/themes/default.png')}}\" class=\"img-fluid\"/></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list-group-item mb-2\">
\t\t\t\t\t\t\t\t<p>Night Mode Theme</p>
\t\t\t\t\t\t\t\t<a href=\"project-dark/index.html\"><img src=\"{{ asset('AdminPanel/images/themes/dark.png')}}\" class=\"img-fluid\"/></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list-group-item mb-2\">
\t\t\t\t\t\t\t\t<p>RTL Version</p>
\t\t\t\t\t\t\t\t<a href=\"project-rtl/index.html\"><img src=\"{{ asset('AdminPanel/images/themes/rtl.png')}}\" class=\"img-fluid\"/></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"user_div\">
\t\t\t\t<h5 class=\"brand-name mb-4\">EDUKATE<a href=\"javascript:void(0)\" class=\"user_btn\">

\t\t\t\t\t\t<i class=\"icon-logout\"></i>
\t\t\t\t\t</a>
\t\t\t\t</h5>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<a href=\"\"><img class=\"card-profile-img\" src=\"{{ asset('AdminPanel/asset/images/sm/avatar1.jpg')}}\" alt=\"\"></a>
\t\t\t\t\t<h6 class=\"mb-0\">Med Omar Najjar</h6>
\t\t\t\t\t<span>cdec</span>
\t\t\t\t\t<div class=\"d-flex align-items-baseline mt-3\">
\t\t\t\t\t\t<h3 class=\"mb-0 mr-2\">9.8</h3>
\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t<span class=\"text-success\">1.6%
\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-up\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"progress progress-xs\">
\t\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" style=\"width: 15%\" aria-valuenow=\"15\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t<div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 20%\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t<div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 30%\" aria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t<div class=\"progress-bar bg-orange\" role=\"progressbar\" style=\"width: 5%\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t<div class=\"progress-bar bg-indigo\" role=\"progressbar\" style=\"width: 13%\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<h6 class=\"text-uppercase font-10 mt-1\">Performance Score</h6>
\t\t\t\t\t<hr>
\t\t\t\t\t<p>Activity</p>
\t\t\t\t\t<ul class=\"new_timeline\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"bullet pink\"></div>
\t\t\t\t\t\t\t<div class=\"time\">11:00am</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<h3>Attendance</h3>
\t\t\t\t\t\t\t\t<h4>Computer Class</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"bullet pink\"></div>
\t\t\t\t\t\t\t<div class=\"time\">11:30am</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<h3>Added an interest</h3>
\t\t\t\t\t\t\t\t<h4>“Volunteer Activities”</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"bullet green\"></div>
\t\t\t\t\t\t\t<div class=\"time\">12:00pm</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<h3>Developer Team</h3>
\t\t\t\t\t\t\t\t<h4>Hangouts</h4>
\t\t\t\t\t\t\t\t<ul class=\"list-unstyled team-info margin-0 p-t-5\">
\t\t\t\t\t\t\t\t\t<li><img src=\"{{ asset('AdminPanel/asset/images/xs/avatar1.jpg')}}\" alt=\"Avatar\"></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"bullet green\"></div>
\t\t\t\t\t\t\t<div class=\"time\">2:00pm</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<h3>Responded to need</h3>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">“In-Kind Opportunity”</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"bullet orange\"></div>
\t\t\t\t\t\t\t<div class=\"time\">1:30pm</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<h3>Lunch Break</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"bullet green\"></div>
\t\t\t\t\t\t\t<div class=\"time\">2:38pm</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<h3>Finish</h3>
\t\t\t\t\t\t\t\t<h4>Go to Home</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div id=\"left-sidebar\" class=\"sidebar \">
\t\t\t\t<h5 class=\"brand-name\">EDUKATE

\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"menu_option float-right\">
\t\t\t\t\t\t<i class=\"icon-grid font-16\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Grid & List Toggle\"></i>
\t\t\t\t\t</a>
\t\t\t\t</h5>
\t\t\t\t<nav id=\"left-sidebar-nav\" class=\"sidebar-nav\">
\t\t\t\t\t<ul class=\"metismenu\">
\t\t\t\t\t\t<li class=\"g_heading\">Menu</li>
\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-dashboard\"></i>
\t\t\t\t\t\t\t\t<span>Dashboard</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>


\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"has-arrow arrow-c\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-lock\"></i>
\t\t\t\t\t\t\t\t<span>Cours</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\" {{ path('app_cours_new') }}\">Add Cours</a></li>


\t\t\t\t\t\t\t\t<li><a href=\" {{path('app_cours_admin') }}\">List Cours</a></li>


\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>


\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"has-arrow arrow-c\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-lock\"></i>
\t\t\t\t\t\t\t\t<span>Users</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\" {{path('app_user_index') }}\">List Users</a></li>


\t\t\t\t\t\t\t\t<li><a href=\" {{ path('app_user_new') }}\">Add User</a></li>


\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>


\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{ path('app_classe_index') }}\">


\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar-check-o\"></i>
\t\t\t\t\t\t\t\t<span>Classe</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>


\t\t\t\t\t\t<li class=\"g_heading\">Support</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-support\"></i>
\t\t\t\t\t\t\t\t<span>Need Help?</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-tag\"></i>
\t\t\t\t\t\t\t\t<span>ContactUs</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t</div>

\t\t\t<div class=\"page\"> {% block  pagetop %}{% endblock %}
\t\t\t\t{% block body %}
\t\t\t\t\t<!--    <div class=\"section-body mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                <div class=\"container-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <div class=\"row clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        <div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            <div class=\"mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <h4>Welcome Peter Richards!</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <small>Measure How Fast You’re Growing Monthly Recurring Revenue. <a href=\"#\">Learn More</a></small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            </div>-->

\t\t\t\t{% endblock %}
\t\t\t</div>
\t\t</div>


\t\t{% block js %}

\t\t\t<script src=\"{{ asset('AdminPanel/asset/bundles/lib.vendor.bundle.js')}}\"></script>
\t\t\t<script src=\"{{ asset('AdminPanel/asset/bundles/apexcharts.bundle.js')}}\"></script>
\t\t\t<script src=\"{{ asset('AdminPanel/asset/bundles/counterup.bundle.js')}}\"></script>
\t\t\t<script src=\"{{ asset('AdminPanel/asset/bundles/knobjs.bundle.js')}}\"></script>
\t\t\t<script src=\"{{ asset('AdminPanel/asset/bundles/c3.bundle.js')}}\"></script>

\t\t\t<script src=\"{{ asset('AdminPanel/asset/js/core.js')}}\"></script>

\t\t\t<script src=\"{{ asset('AdminPanel/asset/js/page/project-index.js')}}\"></script>


\t\t</body>
\t{% endblock %}

</html>
", "admin/index.html.twig", "C:\\Users\\sayed\\Desktop\\Projet_Omar\\classrom_project\\templates\\admin\\index.html.twig");
    }
}
