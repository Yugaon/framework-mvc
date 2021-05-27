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

/* highscore.html.twig */
class __TwigTemplate_c50e1342e97871a98cf3ab013cdd7ba3b5e1f3e470d2ed1a6f3726a2d12ed695 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "highscore.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "highscore.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", "highscore.html.twig", 1)->display($context);
        // line 2
        echo "<h3>Highscore</h3>
<table>
<tr>
<th>Plats</th>
<th>Id</th>
<th>Rundor</th>
<th>Vunnit</th>
<th>Procent</th>
</tr>
<tr>
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scorelist"]) || array_key_exists("scorelist", $context) ? $context["scorelist"] : (function () { throw new RuntimeError('Variable "scorelist" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["variables"]) {
            // line 13
            echo "<th>";
            echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
            echo "</th>
<th>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variables"], "id", [], "any", false, false, false, 14), "html", null, true);
            echo "</th>
<th>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variables"], "rundor", [], "any", false, false, false, 15), "html", null, true);
            echo "</th>
<th>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variables"], "vunnit", [], "any", false, false, false, 16), "html", null, true);
            echo "</th>
<th>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variables"], "procent", [], "any", false, false, false, 17), "html", null, true);
            echo "</th>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['variables'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
</table>
";
        // line 22
        $this->loadTemplate("footer.html.twig", "highscore.html.twig", 22)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "highscore.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 22,  87 => 20,  78 => 17,  74 => 16,  70 => 15,  66 => 14,  61 => 13,  57 => 12,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'header.html.twig' %}
<h3>Highscore</h3>
<table>
<tr>
<th>Plats</th>
<th>Id</th>
<th>Rundor</th>
<th>Vunnit</th>
<th>Procent</th>
</tr>
<tr>
{% for key,variables in scorelist %}
<th>{{key + 1}}</th>
<th>{{ variables.id }}</th>
<th>{{ variables.rundor }}</th>
<th>{{ variables.vunnit }}</th>
<th>{{ variables.procent }}</th>
</tr>
{% endfor %}

</table>
{% include 'footer.html.twig' %}
", "highscore.html.twig", "C:\\Users\\Martin\\dbwebb-kurser\\mvc\\me\\ci\\templates\\highscore.html.twig");
    }
}
