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

/* 21_2.html.twig */
class __TwigTemplate_89b30df0e38542c71cd7e7b1f05215d4a6d93c3110fc5aa13d7972838b9c8eb7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "21_2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "21_2.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->loadTemplate("header.html.twig", "21_2.html.twig", 2)->display($context);
        // line 3
        echo "
<form action=\"rollTwo\" method=\"post\">
    <input class=\"button\" type=\"submit\" name=\"test1\" id=\"test1\" value=\"ROLL\" /><br/>
</form>

<form action=\"resetTwo\" method=\"post\">
    <input class=\"button\" type=\"submit\" name=\"reset\" id=\"reset\" value=\"RESET\" /><br/>
</form>

<form action=\"stopTwo\" method=\"post\">
    <input class=\"button\" type=\"submit\" name=\"stop\" id=\"stop\" value=\"STOP\" /><br/>
</form>

<form action=\"resetscoreTwo\" method=\"post\">
    <input class=\"button\" type=\"submit\" name=\"score\" id=\"score\" value=\"RESET SCORE TABLE\" /><br/>
</form>

<table>
<tr>
<th>Roll 1</th>
<th>Roll 2</th>
<th>Total</th>
</tr>
<tr>
  <th>";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "</th>
  <th>";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["message2"]) || array_key_exists("message2", $context) ? $context["message2"] : (function () { throw new RuntimeError('Variable "message2" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "</th>
  <th>";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["totale"]) || array_key_exists("totale", $context) ? $context["totale"] : (function () { throw new RuntimeError('Variable "totale" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "</th>
</tr>

</table>
<h3> ";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["realmessage"]) || array_key_exists("realmessage", $context) ? $context["realmessage"] : (function () { throw new RuntimeError('Variable "realmessage" does not exist.', 33, $this->source); })()), "html", null, true);
        echo " </h3>
<table>
";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["historik"]) || array_key_exists("historik", $context) ? $context["historik"] : (function () { throw new RuntimeError('Variable "historik" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 36
            echo "
    <tr>
    <th>Vinnare</th>
    <th>Runda</th>
    </tr>
    <tr>
      <th>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["historik"]) || array_key_exists("historik", $context) ? $context["historik"] : (function () { throw new RuntimeError('Variable "historik" does not exist.', 42, $this->source); })()), $context["key"], [], "array", false, false, false, 42), "vinnare", [], "array", false, false, false, 42), "html", null, true);
            echo " </th>
      <th>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["historik"]) || array_key_exists("historik", $context) ? $context["historik"] : (function () { throw new RuntimeError('Variable "historik" does not exist.', 43, $this->source); })()), $context["key"], [], "array", false, false, false, 43), "runda", [], "array", false, false, false, 43), "html", null, true);
            echo "</th>
    </tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    </table>
<?php

";
        // line 50
        $this->loadTemplate("footer.html.twig", "21_2.html.twig", 50)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "21_2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 50,  120 => 47,  110 => 43,  106 => 42,  98 => 36,  94 => 35,  89 => 33,  82 => 29,  78 => 28,  74 => 27,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% include 'header.html.twig' %}

<form action=\"rollTwo\" method=\"post\">
    <input class=\"button\" type=\"submit\" name=\"test1\" id=\"test1\" value=\"ROLL\" /><br/>
</form>

<form action=\"resetTwo\" method=\"post\">
    <input class=\"button\" type=\"submit\" name=\"reset\" id=\"reset\" value=\"RESET\" /><br/>
</form>

<form action=\"stopTwo\" method=\"post\">
    <input class=\"button\" type=\"submit\" name=\"stop\" id=\"stop\" value=\"STOP\" /><br/>
</form>

<form action=\"resetscoreTwo\" method=\"post\">
    <input class=\"button\" type=\"submit\" name=\"score\" id=\"score\" value=\"RESET SCORE TABLE\" /><br/>
</form>

<table>
<tr>
<th>Roll 1</th>
<th>Roll 2</th>
<th>Total</th>
</tr>
<tr>
  <th>{{ message }}</th>
  <th>{{ message2 }}</th>
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
<?php

{% include 'footer.html.twig' %}
", "21_2.html.twig", "C:\\Users\\Martin\\dbwebb-kurser\\mvc\\me\\ci\\templates\\21_2.html.twig");
    }
}
