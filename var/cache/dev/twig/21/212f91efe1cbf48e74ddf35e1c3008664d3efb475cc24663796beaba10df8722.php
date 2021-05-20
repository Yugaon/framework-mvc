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

/* style.css */
class __TwigTemplate_9cdc6c9e16c966ba363534d1f75db14ccba98e2a2674c9c14ad5e486b354f849 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "style.css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "style.css"));

        // line 1
        echo "@import url('https://fonts.googleapis.com/css2?family=Bodoni+Moda:wght@500&family=Montserrat:wght@500&display=swap');

*{
    margin: 0;
    box-sizing: border-box;
}


html {
    background-color: #03506f;
    font-family: 'Bodoni Moda', serif;
}

p {
    font-family: 'Montserrat', sans-serif;
    color: #ffe3d8;
}

body {
    text-align: center;
    padding: 5px;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    color: #bbbbbb;
}

h1 {
    font-size: 200%;
}

a {
    color: #0a043c;
    text-decoration: none;
}

article {
    line-height: 150%;
    font-size: 110%;
    margin: 4em;
}

a:visited {
    color: #bbbbbb;
    text-decoration: none;
}

.site-header {
    background-color: #0a043c;
    text-align: center;
    word-spacing: 10px;
    padding: 15px;
}

.site-header a {
    color: #bbbbbb;
    text-decoration: none;
    font-size: 140%;
    word-spacing: 10px;
}

.site-header a:hover {
    color: #ffe3d8;
    text-decoration: none;
    font-size: 142%;
}

.site-footer {
    background-color: #0a043c;
    text-align: center;
    word-spacing: 1px;
    margin: 0;
    border: 0;
    padding: 15px;
    position: relative;
    bottom: auto;
}



table {
    margin-left: auto;
    margin-right: auto;
    border: 1px solid black;
    width: 20%;
}

th, td {
    border: 1px solid black;
}


.dice-sprite {
    display: inline-block;
    padding: 0;
    margin: 0 4px 0 0;
    width: 32px;
    height: 32px;
    background: url(dice-sprite.jpg) no-repeat;
}

.dice-sprite.dice-1 { background-position: -160px 0; }
.dice-sprite.dice-2 { background-position: -128px 0; }
.dice-sprite.dice-3 { background-position: -96px 0; }
.dice-sprite.dice-4 { background-position: -64px 0; }
.dice-sprite.dice-5 { background-position: -32px 0; }
.dice-sprite.dice-6 { background-position: 0 0; }

.button{
  display: inline-block;
  *display: inline;
  margin: 10px;
  cursor: pointer;
  overflow: visible;
  font: bold 13px arial, helvetica, sans-serif;
  text-decoration: none;
  white-space: nowrap;
  color: #555;
  background-color: #fff;
}

.button:hover {
    border: 0.5px #555 solid;
    box-shadow: 1px 1px 1px #555;
    color: #D3D3D3;
    background-color: #D3D3D3;
}


.gallery {
    display: grid;
    gap: 4em 4em;
    max-width: 70em;
    margin: 40px auto;
    padding: 5em;
    grid-template-columns: repeat(3, 1fr);
    position: relative;
    justify-content: center;
    position: relative;
    height: 100%;
    line-height: 140%;
    font-size: 110%;
}

.gallery-box {
    max-width: 100%;
    max-height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    height: auto;
    grid-column: span 2;
}

.gallery-box2 {
    max-width: 100%;
    max-height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    height: auto;
    grid-column: span 1;
}

.gallery-box3 {
    max-width: 100%;
    max-height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    height: auto;
    grid-column: span 3;
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "style.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@import url('https://fonts.googleapis.com/css2?family=Bodoni+Moda:wght@500&family=Montserrat:wght@500&display=swap');

*{
    margin: 0;
    box-sizing: border-box;
}


html {
    background-color: #03506f;
    font-family: 'Bodoni Moda', serif;
}

p {
    font-family: 'Montserrat', sans-serif;
    color: #ffe3d8;
}

body {
    text-align: center;
    padding: 5px;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    color: #bbbbbb;
}

h1 {
    font-size: 200%;
}

a {
    color: #0a043c;
    text-decoration: none;
}

article {
    line-height: 150%;
    font-size: 110%;
    margin: 4em;
}

a:visited {
    color: #bbbbbb;
    text-decoration: none;
}

.site-header {
    background-color: #0a043c;
    text-align: center;
    word-spacing: 10px;
    padding: 15px;
}

.site-header a {
    color: #bbbbbb;
    text-decoration: none;
    font-size: 140%;
    word-spacing: 10px;
}

.site-header a:hover {
    color: #ffe3d8;
    text-decoration: none;
    font-size: 142%;
}

.site-footer {
    background-color: #0a043c;
    text-align: center;
    word-spacing: 1px;
    margin: 0;
    border: 0;
    padding: 15px;
    position: relative;
    bottom: auto;
}



table {
    margin-left: auto;
    margin-right: auto;
    border: 1px solid black;
    width: 20%;
}

th, td {
    border: 1px solid black;
}


.dice-sprite {
    display: inline-block;
    padding: 0;
    margin: 0 4px 0 0;
    width: 32px;
    height: 32px;
    background: url(dice-sprite.jpg) no-repeat;
}

.dice-sprite.dice-1 { background-position: -160px 0; }
.dice-sprite.dice-2 { background-position: -128px 0; }
.dice-sprite.dice-3 { background-position: -96px 0; }
.dice-sprite.dice-4 { background-position: -64px 0; }
.dice-sprite.dice-5 { background-position: -32px 0; }
.dice-sprite.dice-6 { background-position: 0 0; }

.button{
  display: inline-block;
  *display: inline;
  margin: 10px;
  cursor: pointer;
  overflow: visible;
  font: bold 13px arial, helvetica, sans-serif;
  text-decoration: none;
  white-space: nowrap;
  color: #555;
  background-color: #fff;
}

.button:hover {
    border: 0.5px #555 solid;
    box-shadow: 1px 1px 1px #555;
    color: #D3D3D3;
    background-color: #D3D3D3;
}


.gallery {
    display: grid;
    gap: 4em 4em;
    max-width: 70em;
    margin: 40px auto;
    padding: 5em;
    grid-template-columns: repeat(3, 1fr);
    position: relative;
    justify-content: center;
    position: relative;
    height: 100%;
    line-height: 140%;
    font-size: 110%;
}

.gallery-box {
    max-width: 100%;
    max-height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    height: auto;
    grid-column: span 2;
}

.gallery-box2 {
    max-width: 100%;
    max-height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    height: auto;
    grid-column: span 1;
}

.gallery-box3 {
    max-width: 100%;
    max-height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    height: auto;
    grid-column: span 3;
}
", "style.css", "C:\\Users\\Martin\\dbwebb-kurser\\mvc\\me\\ci\\app\\templates\\style.css");
    }
}
