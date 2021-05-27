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

/* books.html.twig */
class __TwigTemplate_33b9860419be2c326a2bfa75e7a059eeb26a7c8a946cbd0b889d08b5a41c71ec extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "books.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "books.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", "books.html.twig", 1)->display($context);
        // line 2
        echo "        <h1>Books</h1>

        <table>
        <tr>
        <th>Id</th>
        <th>Titel</th>
        <th>Code</th>
        <th>Author</th>
        <th>Picture</th>
        </tr>
        <tr>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["book1"]) || array_key_exists("book1", $context) ? $context["book1"] : (function () { throw new RuntimeError('Variable "book1" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["variables"]) {
            // line 14
            echo "        <th>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variables"], "id", [], "any", false, false, false, 14), "html", null, true);
            echo "</th>
        <th>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variables"], "titel", [], "any", false, false, false, 15), "html", null, true);
            echo "</th>
        <th>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variables"], "code", [], "any", false, false, false, 16), "html", null, true);
            echo "</th>
        <th>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variables"], "author", [], "any", false, false, false, 17), "html", null, true);
            echo "</th>
        <th><img src=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variables"], "LinkPciture", [], "any", false, false, false, 18), "html", null, true);
            echo "\" width=\"200\" height=\"300\"></th>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variables'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </tr
        <tr>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["book2"]) || array_key_exists("book2", $context) ? $context["book2"] : (function () { throw new RuntimeError('Variable "book2" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["variables"]) {
            // line 23
            echo "        <th>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variables"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</th>
        <th>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variables"], "titel", [], "any", false, false, false, 24), "html", null, true);
            echo "</th>
        <th>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variables"], "code", [], "any", false, false, false, 25), "html", null, true);
            echo "</th>
        <th>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variables"], "author", [], "any", false, false, false, 26), "html", null, true);
            echo "</th>
        <th><img src=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variables"], "LinkPciture", [], "any", false, false, false, 27), "html", null, true);
            echo "\" width=\"200\" height=\"300\"></th>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variables'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tr>
        <tr>
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["book3"]) || array_key_exists("book3", $context) ? $context["book3"] : (function () { throw new RuntimeError('Variable "book3" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["variables"]) {
            // line 32
            echo "        <th>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variables"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "</th>
        <th>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variables"], "titel", [], "any", false, false, false, 33), "html", null, true);
            echo "</th>
        <th>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variables"], "code", [], "any", false, false, false, 34), "html", null, true);
            echo "</th>
        <th>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variables"], "author", [], "any", false, false, false, 35), "html", null, true);
            echo "</th>
        <th><img src=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variables"], "LinkPciture", [], "any", false, false, false, 36), "html", null, true);
            echo "\" width=\"200\" height=\"300\"></th>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variables'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tr>
        </table>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "books.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 38,  145 => 36,  141 => 35,  137 => 34,  133 => 33,  128 => 32,  124 => 31,  120 => 29,  112 => 27,  108 => 26,  104 => 25,  100 => 24,  95 => 23,  91 => 22,  87 => 20,  79 => 18,  75 => 17,  71 => 16,  67 => 15,  62 => 14,  58 => 13,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'header.html.twig' %}
        <h1>Books</h1>

        <table>
        <tr>
        <th>Id</th>
        <th>Titel</th>
        <th>Code</th>
        <th>Author</th>
        <th>Picture</th>
        </tr>
        <tr>
        {% for variables in book1 %}
        <th>{{ variables.id }}</th>
        <th>{{ variables.titel }}</th>
        <th>{{ variables.code }}</th>
        <th>{{ variables.author }}</th>
        <th><img src=\"{{ variables.LinkPciture }}\" width=\"200\" height=\"300\"></th>
        {% endfor %}
        </tr
        <tr>
        {% for variables in book2 %}
        <th>{{ variables.id }}</th>
        <th>{{ variables.titel }}</th>
        <th>{{ variables.code }}</th>
        <th>{{ variables.author }}</th>
        <th><img src=\"{{ variables.LinkPciture }}\" width=\"200\" height=\"300\"></th>
        {% endfor %}
        </tr>
        <tr>
        {% for variables in book3 %}
        <th>{{ variables.id }}</th>
        <th>{{ variables.titel }}</th>
        <th>{{ variables.code }}</th>
        <th>{{ variables.author }}</th>
        <th><img src=\"{{ variables.LinkPciture }}\" width=\"200\" height=\"300\"></th>
        {% endfor %}
        </tr>
        </table>
", "books.html.twig", "C:\\Users\\Martin\\dbwebb-kurser\\mvc\\me\\ci\\templates\\books.html.twig");
    }
}
