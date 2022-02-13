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

/* activite/index.html.twig */
class __TwigTemplate_a6a0b4e48889b442d702c2c8f3a92613 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "activite/index.html.twig", 1);
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

        echo "Liste des Activités
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
        echo "\t<h1 class=\"my-5\">Liste des activités</h1>
\t";
        // line 8
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ANIMATEUR"))) {
            // line 9
            echo "\t<a class=\"btn btn-success my-2\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activite_new");
            echo "\">Crée une nouvelle activité</a>
\t";
        }
        // line 11
        echo "\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Animateur</th>
\t\t\t\t<th>Nom</th>
\t\t\t\t<th>Description</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activites"]) || array_key_exists("activites", $context) ? $context["activites"] : (function () { throw new RuntimeError('Variable "activites" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
            // line 22
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activite"], "user", [], "any", false, false, false, 23), "username", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "Nom", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 25
            echo twig_get_attribute($this->env, $this->source, $context["activite"], "Description", [], "any", false, false, false, 25);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"btn btn-primary mb-2 w-100\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activite_show", ["id" => twig_get_attribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\">Voir</a>
\t\t\t\t\t\t<a class=\"btn btn-primary mb-2 w-100\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activite_inscription", ["id" => twig_get_attribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">Inscription à l'activité</a>
\t\t\t\t\t\t";
            // line 29
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29)) {
                // line 30
                echo "\t\t\t\t\t\t\t";
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ANIMATEUR"))) {
                    // line 31
                    echo "\t\t\t\t\t\t\t<a class=\"btn btn-warning w-100\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activite_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                    echo "\">Editer</a>
\t\t\t\t\t\t\t";
                    // line 32
                    echo twig_include($this->env, $context, "activite/_delete_form.html.twig");
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 34
                echo "\t\t\t\t\t\t";
            }
            // line 35
            echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 38
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t</tbody>
\t</table>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "activite/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 42,  187 => 38,  172 => 35,  169 => 34,  164 => 32,  159 => 31,  156 => 30,  154 => 29,  150 => 28,  146 => 27,  141 => 25,  137 => 24,  133 => 23,  130 => 22,  112 => 21,  100 => 11,  94 => 9,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Activités
{% endblock %}

{% block body %}
\t<h1 class=\"my-5\">Liste des activités</h1>
\t{% if (is_granted('ROLE_ADMIN')) or (is_granted('ROLE_ANIMATEUR')) %}
\t<a class=\"btn btn-success my-2\" href=\"{{ path('activite_new') }}\">Crée une nouvelle activité</a>
\t{% endif %}
\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Animateur</th>
\t\t\t\t<th>Nom</th>
\t\t\t\t<th>Description</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for activite in activites %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ activite.user.username}}</td>
\t\t\t\t\t<td>{{ activite.Nom }}</td>
\t\t\t\t\t<td>{{ activite.Description | raw }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"btn btn-primary mb-2 w-100\" href=\"{{ path('activite_show', {'id': activite.id}) }}\">Voir</a>
\t\t\t\t\t\t<a class=\"btn btn-primary mb-2 w-100\" href=\"{{ path('activite_inscription', {'id': activite.id}) }}\">Inscription à l'activité</a>
\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t{% if (is_granted('ROLE_ADMIN')) or (is_granted('ROLE_ANIMATEUR')) %}
\t\t\t\t\t\t\t<a class=\"btn btn-warning w-100\" href=\"{{ path('activite_edit', {'id': activite.id}) }}\">Editer</a>
\t\t\t\t\t\t\t{{ include('activite/_delete_form.html.twig') }}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>

{% endblock %}
", "activite/index.html.twig", "/var/www/html/test/cc33/templates/activite/index.html.twig");
    }
}
