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

/* dice.html.twig */
class __TwigTemplate_44ada3759e608982daadfc1068d41b2076212dcf287cbcfd813c0d56ca63c73b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dice.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", "dice.html.twig", 1)->display($context);
        // line 2
        echo "        <h3>Let's play 21</h3>
        <h4>Remember, to be qualified to get on the highscore you need to play atleast 5 turns before pressing \"RESET SCORE TABLE\"</h4>
        <br>
        <h4>You are only eligible to get on the highscore if you play with one die</h4>
          <form action=\"21_1\" method=\"POST\">
            <input class=\"button\" type=\"submit\" value=\"One die\">
          </form>
          <form action=\"21_2\" method=\"POST\">
            <input class=\"button\" type=\"submit\" value=\"Two dice\">
          </form>
";
        // line 12
        $this->loadTemplate("footer.html.twig", "dice.html.twig", 12)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'header.html.twig' %}
        <h3>Let's play 21</h3>
        <h4>Remember, to be qualified to get on the highscore you need to play atleast 5 turns before pressing \"RESET SCORE TABLE\"</h4>
        <br>
        <h4>You are only eligible to get on the highscore if you play with one die</h4>
          <form action=\"21_1\" method=\"POST\">
            <input class=\"button\" type=\"submit\" value=\"One die\">
          </form>
          <form action=\"21_2\" method=\"POST\">
            <input class=\"button\" type=\"submit\" value=\"Two dice\">
          </form>
{% include 'footer.html.twig' %}
", "dice.html.twig", "C:\\Users\\Martin\\dbwebb-kurser\\mvc\\me\\ci\\templates\\dice.html.twig");
    }
}
