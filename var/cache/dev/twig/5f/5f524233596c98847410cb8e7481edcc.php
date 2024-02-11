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

/* registration/register.html.twig */
class __TwigTemplate_ef8b1a3040efc6572a80a2d457cb711c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>Register</title>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("AccountUser/AuthStyle.css"), "html", null, true);
        echo "\">
\t</head>
\t<body>
\t\t<div class=\"container\">
\t\t\t<div class=\"title\">Inscription</div>
\t\t\t<div class=\"content\">


\t\t\t\t<div class=\"user-details\">

\t\t\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 17, $this->source); })()), 'errors');
        echo "

\t\t\t\t\t";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 19, $this->source); })()), 'form_start');
        echo "


\t\t\t\t\t<div class=\"input-box\">
\t\t\t\t\t\t<span class=\"details\">Nom</span>
\t\t\t\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 24, $this->source); })()), "nom", [], "any", false, false, false, 24), 'row', ["attr" => ["class" => "form-style", "placeholder" => "Entrez votre Nom"]]);
        echo "


\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-box\">
\t\t\t\t\t\t<span class=\"details\">Prenom</span>
\t\t\t\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 30, $this->source); })()), "prenom", [], "any", false, false, false, 30), 'row', ["attr" => ["class" => "form-style", "placeholder" => "Entrez votre Prenom"]]);
        echo "


\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-box\">
\t\t\t\t\t\t<span class=\"details\">Email</span>
\t\t\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36), 'row', ["attr" => ["class" => "form-style", "placeholder" => "Entrez votre Email"]]);
        echo "


\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"input-box\">
\t\t\t\t\t\t<span class=\"details\">Password</span>

\t\t\t\t\t\t";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), "plainPassword", [], "any", false, false, false, 44), 'row', ["attr" => ["class" => "form-style", "placeholder" => "Entrez votre Password"]]);
        echo "


\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"input-box\">
\t\t\t\t\t\t<span class=\"details\">Numéro de Téléphone</span>
\t\t\t\t\t\t";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "tel", [], "any", false, false, false, 51), 'row', ["attr" => ["class" => "form-style", "placeholder" => "Entrez votre Téléphone"]]);
        echo "


\t\t\t\t\t</div>


\t\t\t\t\t";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), "agreeTerms", [], "any", false, false, false, 57), 'row');
        echo "

\t\t\t\t\t<button type=\"submit\" class=\"button\">Register</button>


\t\t\t\t\t";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 62, $this->source); })()), 'form_end');
        echo "</div>
\t\t\t</div>

\t\t\t<p>Vous utilisez déjà EDUKATE</p>

\t\t\t?
\t\t\t<a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Connexion</a>
\t\t</p>
\t\t<p>
\t\t\t<a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Retour à la page d'Accueil</a>
\t\t</p>
\t</body>
</html></div></body></html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "registration/register.html.twig";
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
        return array (  148 => 71,  142 => 68,  133 => 62,  125 => 57,  116 => 51,  106 => 44,  95 => 36,  86 => 30,  77 => 24,  69 => 19,  64 => 17,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>Register</title>
\t\t<link rel=\"stylesheet\" href=\"{{ asset('AccountUser/AuthStyle.css') }}\">
\t</head>
\t<body>
\t\t<div class=\"container\">
\t\t\t<div class=\"title\">Inscription</div>
\t\t\t<div class=\"content\">


\t\t\t\t<div class=\"user-details\">

\t\t\t\t\t{{ form_errors(registrationForm) }}

\t\t\t\t\t{{ form_start(registrationForm) }}


\t\t\t\t\t<div class=\"input-box\">
\t\t\t\t\t\t<span class=\"details\">Nom</span>
\t\t\t\t\t\t{{ form_row(registrationForm.nom, {'attr': {'class': 'form-style','placeholder':'Entrez votre Nom'}}) }}


\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-box\">
\t\t\t\t\t\t<span class=\"details\">Prenom</span>
\t\t\t\t\t\t{{ form_row(registrationForm.prenom, {'attr': {'class': 'form-style','placeholder':'Entrez votre Prenom'}}) }}


\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-box\">
\t\t\t\t\t\t<span class=\"details\">Email</span>
\t\t\t\t\t\t{{ form_row(registrationForm.email, {'attr': {'class': 'form-style','placeholder':'Entrez votre Email'}}) }}


\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"input-box\">
\t\t\t\t\t\t<span class=\"details\">Password</span>

\t\t\t\t\t\t{{ form_row(registrationForm.plainPassword, {'attr': {'class': 'form-style','placeholder':'Entrez votre Password'}}) }}


\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"input-box\">
\t\t\t\t\t\t<span class=\"details\">Numéro de Téléphone</span>
\t\t\t\t\t\t{{ form_row(registrationForm.tel, {'attr': {'class': 'form-style','placeholder':'Entrez votre Téléphone'}}) }}


\t\t\t\t\t</div>


\t\t\t\t\t{{ form_row(registrationForm.agreeTerms) }}

\t\t\t\t\t<button type=\"submit\" class=\"button\">Register</button>


\t\t\t\t\t{{ form_end(registrationForm) }}</div>
\t\t\t</div>

\t\t\t<p>Vous utilisez déjà EDUKATE</p>

\t\t\t?
\t\t\t<a href=\"{{ path('app_login') }}\">Connexion</a>
\t\t</p>
\t\t<p>
\t\t\t<a href=\"{{ path('app_home') }}\">Retour à la page d'Accueil</a>
\t\t</p>
\t</body>
</html></div></body></html>
", "registration/register.html.twig", "C:\\Users\\sayed\\Desktop\\Projet_Omar\\classrom_project\\templates\\registration\\register.html.twig");
    }
}
