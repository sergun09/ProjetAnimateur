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

/* activite/show.html.twig */
class __TwigTemplate_ecec6dafd446e52fb77f349d95981510 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "activite/show.html.twig", 1);
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

        echo "Activite
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
        echo "\t<h1 class=\"my-5\">Activite ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 7, $this->source); })()), "Nom", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
\t<table class=\"table\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>Nom</th>
\t\t\t\t<td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 12, $this->source); })()), "Nom", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Description</th>
\t\t\t\t<td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 16, $this->source); })()), "Description", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>

\t<a class=\"btn btn-info\"href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activite_index");
        echo "\">Retour aux activites</a>

";
        // line 23
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23)) {
            // line 24
            echo "\t";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ANIMATEUR") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 25
                echo "    <a button type=\"button\" class=\"btn btn-warning\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activite_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
                echo "\">Edition</button></a>
\t";
            }
            // line 27
            echo "    <a button type=\"button\" class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activite_inscription", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\">Inscription</button></a>
";
        }
        // line 29
        echo "
<section class=\"mt-3\" id=\"inscription\">
\t<h4>";
        // line 31
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 31, $this->source); })()), "userInscrit", [], "any", false, false, false, 31)), "html", null, true);
        echo "
\t\tinscrits</h4>
\t<ul class=\"list-group\">
\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 34, $this->source); })()), "userInscrit", [], "any", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 35
            echo "\t\t\t<div class=\"inscription\">

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 39), "html", null, true);
            echo "
\t\t\t\t\t\test inscrit !
\t\t\t\t\t</li>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t</ul>
</section>

";
        // line 48
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ANIMATEUR") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 49
            echo twig_include($this->env, $context, "activite/_delete_form.html.twig");
            echo "
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "activite/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 49,  172 => 48,  167 => 45,  155 => 39,  149 => 35,  145 => 34,  139 => 31,  135 => 29,  129 => 27,  123 => 25,  120 => 24,  118 => 23,  113 => 21,  105 => 16,  98 => 12,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Activite
{% endblock %}

{% block body %}
\t<h1 class=\"my-5\">Activite {{activite.Nom}}</h1>
\t<table class=\"table\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>Nom</th>
\t\t\t\t<td>{{ activite.Nom }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Description</th>
\t\t\t\t<td>{{ activite.Description }}</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>

\t<a class=\"btn btn-info\"href=\"{{path('activite_index')}}\">Retour aux activites</a>

{% if app.user %}
\t{% if (is_granted('ROLE_ANIMATEUR')) or (is_granted('ROLE_ADMIN')) %}
    <a button type=\"button\" class=\"btn btn-warning\" href=\"{{ path('activite_edit', {'id': activite.id}) }}\">Edition</button></a>
\t{% endif %}
    <a button type=\"button\" class=\"btn btn-primary\" href=\"{{ path('activite_inscription', {'id': activite.id}) }}\">Inscription</button></a>
{% endif %}

<section class=\"mt-3\" id=\"inscription\">
\t<h4>{{ activite.userInscrit | length}}
\t\tinscrits</h4>
\t<ul class=\"list-group\">
\t\t{% for user in activite.userInscrit %}
\t\t\t<div class=\"inscription\">

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t{{user.username}}
\t\t\t\t\t\test inscrit !
\t\t\t\t\t</li>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endfor %}
\t</ul>
</section>

{% if (is_granted('ROLE_ANIMATEUR')) or (is_granted('ROLE_ADMIN'))%}
{{ include('activite/_delete_form.html.twig') }}
{% endif %}
{% endblock %}
", "activite/show.html.twig", "/var/www/html/test/cc33/templates/activite/show.html.twig");
    }
}
