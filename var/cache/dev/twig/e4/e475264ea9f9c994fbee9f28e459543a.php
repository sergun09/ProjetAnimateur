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
class __TwigTemplate_e532b458b4f7b962fb303a9941a3c769 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t\t<title>
\t\t\t";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "\t\t</title>
\t\t<link
\t\trel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
\t\t";
        // line 14
        echo "\t\t";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
\t\t";
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "\t</head>
\t<body>

\t\t<nav class=\"navbar navbar-expand-lg navbar-primary bg-primary\">
\t\t\t<a class=\"navbar-brand text-light mx-4\" href=\"#\">CC33</a>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t<a class=\"nav-link text-light\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activite_index");
        echo "\">Activites</a>
\t\t\t\t\t</li>

\t\t\t\t\t";
        // line 33
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33)) {
            // line 34
            echo "\t\t\t\t\t\t<li class=\"nav-item\t\">
\t\t\t\t\t\t\t<a class=\"nav-link text-light\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activite_mesactivites", ["id" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 35), "id", [], "any", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 35), "id", [], "any", false, false, false, 35), "0")) : ("0"))]), "html", null, true);
            echo "\">Mes Inscriptions</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t";
            // line 38
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ANIMATEUR"))) {
                // line 39
                echo "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-light\" href=\"";
                // line 40
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activite_new");
                echo "\">Créer une activité</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 43
            echo "
\t\t\t\t\t\t";
            // line 44
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 45
                echo "\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link text-light\" href=\"";
                // line 46
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
                echo "\">Gérer les Utilisateurs</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 49
            echo "
\t\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t</ul>
\t\t\t</div>

\t\t\t";
        // line 54
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54)) {
            // line 55
            echo "\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t<a class=\"nav-link text-light\" href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Se connecter</a>
\t\t\t\t\t<a class=\"nav-link text-light\" href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a>
\t\t\t\t</div>
\t\t\t";
        } else {
            // line 60
            echo "\t\t\t\t<a class=\"nav-link text-light mx-4\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Deconnexion</a>
\t\t\t";
        }
        // line 62
        echo "

\t\t</nav>

\t\t<div class=\"container\"> ";
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 67
        echo "\t\t\t</div>
\t\t</body>
\t</html>
</body></html></body></html></body></html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
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

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "\t\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "\t\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 66
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  242 => 66,  229 => 19,  219 => 18,  206 => 15,  196 => 14,  176 => 8,  162 => 67,  160 => 66,  154 => 62,  148 => 60,  142 => 57,  138 => 56,  135 => 55,  133 => 54,  128 => 51,  124 => 49,  118 => 46,  115 => 45,  113 => 44,  110 => 43,  104 => 40,  101 => 39,  99 => 38,  93 => 35,  90 => 34,  88 => 33,  82 => 30,  71 => 21,  69 => 18,  66 => 17,  63 => 14,  58 => 10,  56 => 8,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t\t<title>
\t\t\t{% block title %}Welcome!
\t\t\t{% endblock %}
\t\t</title>
\t\t<link
\t\trel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
\t\t{# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
\t\t{% block stylesheets %}
\t\t\t{{ encore_entry_link_tags('app') }}
\t\t{% endblock %}

\t\t{% block javascripts %}
\t\t\t{{ encore_entry_script_tags('app') }}
\t\t{% endblock %}
\t</head>
\t<body>

\t\t<nav class=\"navbar navbar-expand-lg navbar-primary bg-primary\">
\t\t\t<a class=\"navbar-brand text-light mx-4\" href=\"#\">CC33</a>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t<a class=\"nav-link text-light\" href=\"{{path(\"activite_index\")}}\">Activites</a>
\t\t\t\t\t</li>

\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t<li class=\"nav-item\t\">
\t\t\t\t\t\t\t<a class=\"nav-link text-light\" href=\"{{path('activite_mesactivites', {'id': app.user.id | default('0') })}}\">Mes Inscriptions</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t{% if (is_granted('ROLE_ADMIN')) or (is_granted('ROLE_ANIMATEUR')) %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-light\" href=\"{{path(\"activite_new\")}}\">Créer une activité</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% if (is_granted('ROLE_ADMIN'))%}
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link text-light\" href=\"{{path(\"user_index\")}}\">Gérer les Utilisateurs</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t{% endif %}
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t{% if not app.user %}
\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t<a class=\"nav-link text-light\" href=\"{{path(\"app_login\")}}\">Se connecter</a>
\t\t\t\t\t<a class=\"nav-link text-light\" href=\"{{path(\"app_register\")}}\">Inscription</a>
\t\t\t\t</div>
\t\t\t{% else %}
\t\t\t\t<a class=\"nav-link text-light mx-4\" href=\"{{path(\"app_logout\")}}\">Deconnexion</a>
\t\t\t{% endif %}


\t\t</nav>

\t\t<div class=\"container\"> {% block body %}{% endblock %}
\t\t\t</div>
\t\t</body>
\t</html>
</body></html></body></html></body></html>
", "base.html.twig", "/var/www/html/test/cc33/templates/base.html.twig");
    }
}
