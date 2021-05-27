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

/* 21_1.html.twig */
class __TwigTemplate_607c5c1add927a6430b0adec81dc75c14939c973945f8b289159bf6e0eb8dc1c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "21_1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "21_1.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->loadTemplate("header.html.twig", "21_1.html.twig", 2)->display($context);
        // line 3
        echo "
<form action=\"roll\" method=\"post\">
    <input class=\"button\" type=\"submit\" name=\"test1\" id=\"test1\" value=\"ROLL\" /><br/>
</form>

<form action=\"reset\" method=\"post\">
    <input class=\"button\" type=\"submit\" name=\"reset\" id=\"reset\" value=\"RESET\" /><br/>
</form>

<form action=\"stop\" method=\"post\">
    <input class=\"button\" type=\"submit\" name=\"stop\" id=\"stop\" value=\"STOP\" /><br/>
</form>

<form action=\"resetscore\" method=\"post\">
    <input class=\"button\" type=\"submit\" name=\"score\" id=\"score\" value=\"RESET SCORE TABLE\" /><br/>
</form>

<table>
<tr>
<th>Roll</th>
<th>Total</th>
</tr>
<tr>
  <th>";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "</th>
  <th>";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["totale"]) || array_key_exists("totale", $context) ? $context["totale"] : (function () { throw new RuntimeError('Variable "totale" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "</th>
</tr>

</table>
<h3> ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["realmessage"]) || array_key_exists("realmessage", $context) ? $context["realmessage"] : (function () { throw new RuntimeError('Variable "realmessage" does not exist.', 31, $this->source); })()), "html", null, true);
        echo " </h3>
<table>
";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["historik"]) || array_key_exists("historik", $context) ? $context["historik"] : (function () { throw new RuntimeError('Variable "historik" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 34
            echo "
    <tr>
    <th>Vinnare</th>
    <th>Runda</th>
    </tr>
    <tr>
      <th>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["historik"]) || array_key_exists("historik", $context) ? $context["historik"] : (function () { throw new RuntimeError('Variable "historik" does not exist.', 40, $this->source); })()), $context["key"], [], "array", false, false, false, 40), "vinnare", [], "array", false, false, false, 40), "html", null, true);
            echo " </th>
      <th>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["historik"]) || array_key_exists("historik", $context) ? $context["historik"] : (function () { throw new RuntimeError('Variable "historik" does not exist.', 41, $this->source); })()), $context["key"], [], "array", false, false, false, 41), "runda", [], "array", false, false, false, 41), "html", null, true);
            echo "</th>
    </tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    </table>

";
        // line 47
        $this->loadTemplate("footer.html.twig", "21_1.html.twig", 47)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "21_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 47,  115 => 45,  105 => 41,  101 => 40,  93 => 34,  89 => 33,  84 => 31,  77 => 27,  73 => 26,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% include 'header.html.twig' %}

<form action=\"roll\" method=\"post\">
    <input class=\"button\" type=\"submit\" name=\"test1\" id=\"test1\" value=\"ROLL\" /><br/>
</form>

<form action=\"reset\" method=\"post\">
    <input class=\"button\" type=\"submit\" name=\"reset\" id=\"reset\" value=\"RESET\" /><br/>
</form>

<form action=\"stop\" method=\"post\">
    <input class=\"button\" type=\"submit\" name=\"stop\" id=\"stop\" value=\"STOP\" /><br/>
</form>

<form action=\"resetscore\" method=\"post\">
    <input class=\"button\" type=\"submit\" name=\"score\" id=\"score\" value=\"RESET SCORE TABLE\" /><br/>
</form>

<table>
<tr>
<th>Roll</th>
<th>Total</th>
</tr>
<tr>
  <th>{{ message }}</th>
  <th>{{ totale }}</th>
</tr>

</table>
<h3> {{ realmessage }} </h3>
<table>
{% for key,value in historik %}

    <tr>
    <th>Vinnare</th>
    <th>Runda</th>
    </tr>
    <tr>
      <th>{{ historik[key]['vinnare'] }} </th>
      <th>{{ historik[key]['runda'] }}</th>
    </tr>

{% endfor %}
    </table>

{% include 'footer.html.twig' %}
", "21_1.html.twig", "C:\\Users\\Martin\\dbwebb-kurser\\mvc\\me\\ci\\templates\\21_1.html.twig");
    }
}
