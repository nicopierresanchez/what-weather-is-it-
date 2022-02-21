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

/* weather/index.html.twig */
class __TwigTemplate_718516d9ab97de0a3aa2f779828aeee9722167e141c0c2897b6ae5bce0441e43 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "weather/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "weather/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "weather/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\tVotre météo
\t";
        // line 4
        if ((isset($context["data"]) || array_key_exists("data", $context))) {
            // line 5
            echo "\t\tÀ
\t\t";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 6, $this->source); })()), "country_name", [], "any", false, false, false, 6), "html", null, true);
            echo "
\t";
        }
        // line 7
        echo "!
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "\t<link rel=\"stylesheet\" href=\"/assets/css/home.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "\t<div class=\"container\">
\t\t<div class=\"title\">
\t\t\t<h2>Bienvenue sur la page Météo</h2>
\t\t</div>
\t\t<div class=\"city_form\">
\t\t\t";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start');
        echo "
\t\t\t<div>
\t\t\t\t<label for=\"cityNameInput\" class=\"form-label\">Ville</label>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "city_name", [], "any", false, false, false, 23), 'widget');
        echo "
\t\t\t</div>
\t\t\t<div>
\t\t\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "city_name", [], "any", false, false, false, 26), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div>
\t\t\t\t";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
\t\t";
        // line 32
        if ((isset($context["data"]) || array_key_exists("data", $context))) {
            // line 33
            echo "\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<h1>À
\t\t\t\t\t\t";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 36, $this->source); })()), "country_name", [], "any", false, false, false, 36), "html", null, true);
            echo "
\t\t\t\t\t</h1>
\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\tLe
\t\t\t\t\t\t";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 40, $this->source); })()), "day", [], "any", false, false, false, 40), "html", null, true);
            echo "
\t\t\t\t\t\t";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 41, $this->source); })()), "date", [], "any", false, false, false, 41), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<h2>
\t\t\t\t\t\t(lon. :
\t\t\t\t\t\t";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 45, $this->source); })()), "lon", [], "any", false, false, false, 45), "html", null, true);
            echo ", lat. :
\t\t\t\t\t\t";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 46, $this->source); })()), "lat", [], "any", false, false, false, 46), "html", null, true);
            echo ")</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"informations\">
\t\t\t\t\t<div class=\"weather\">

\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t<div class=\"icon_img \">
\t\t\t\t\t\t\t\t<h1>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 53, $this->source); })()), "description", [], "any", false, false, false, 53), "html", null, true);
            echo "</h1>
\t\t\t\t\t\t\t\t<img src=";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 54, $this->source); })()), "icon_img", [], "any", false, false, false, 54), "html", null, true);
            echo ">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"temperature\">
\t\t\t\t\t\t<div class=\"temperature_title\">
\t\t\t\t\t\t\tTempérature :
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"temperature_actually\">
\t\t\t\t\t\t\t";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 63, $this->source); })()), "temperature", [], "any", false, false, false, 63), "html", null, true);
            echo "
\t\t\t\t\t\t\t°C
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div =\"temperature_predict\">
\t\t\t\t\t\t\t(min. :
\t\t\t\t\t\t\t";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 68, $this->source); })()), "min", [], "any", false, false, false, 68), "html", null, true);
            echo ", max. :
\t\t\t\t\t\t\t";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 69, $this->source); })()), "max", [], "any", false, false, false, 69), "html", null, true);
            echo ")
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"atmosphere\">
\t\t\t\t\t\t<div class=\"pressure\">
\t\t\t\t\t\t\tPression :
\t\t\t\t\t\t\t";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 75, $this->source); })()), "pressure", [], "any", false, false, false, 75), "html", null, true);
            echo "
\t\t\t\t\t\t\thPa
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"humidity\">
\t\t\t\t\t\t\tHumidité :
\t\t\t\t\t\t\t";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 80, $this->source); })()), "humidity", [], "any", false, false, false, 80), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"wind\">
\t\t\t\t\t\t<div class=\"wind_infos\">
\t\t\t\t\t\t\tVent :
\t\t\t\t\t\t\t";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 86, $this->source); })()), "wind_speed", [], "any", false, false, false, 86), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"rose\">
\t\t\t\t\t\t\t<div class=\"direction\">N</div>
\t\t\t\t\t\t\t<div class=\"wind_direction\">
\t\t\t\t\t\t\t\tO
\t\t\t\t\t\t\t\t<img src=\"/assets/images/direction_vent.png\" style=\"transform: rotate(";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 92, $this->source); })()), "wind_deg", [], "any", false, false, false, 92), "html", null, true);
            echo "deg);\">
\t\t\t\t\t\t\t\tE
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"direction\">S</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sun\">
\t\t\t\t\t\t<div class=\"sunrise\">
\t\t\t\t\t\t\t<img src=\"/assets/images/lever_soleil.png\">
\t\t\t\t\t\t\t";
            // line 101
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 101, $this->source); })()), "sunrise", [], "any", false, false, false, 101), "H:s", "Europe/Paris"), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sunset\">
\t\t\t\t\t\t\t<img src=\"/assets/images/coucher_soleil.png\">
\t\t\t\t\t\t\t";
            // line 105
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 105, $this->source); })()), "sunset", [], "any", false, false, false, 105), "H:s", "Europe/Paris"), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        } else {
            // line 111
            echo "\t\t";
        }
        // line 112
        echo "\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "weather/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 112,  288 => 111,  279 => 105,  272 => 101,  260 => 92,  251 => 86,  242 => 80,  234 => 75,  225 => 69,  221 => 68,  213 => 63,  201 => 54,  197 => 53,  187 => 46,  183 => 45,  176 => 41,  172 => 40,  165 => 36,  160 => 33,  158 => 32,  152 => 29,  146 => 26,  140 => 23,  132 => 18,  125 => 13,  115 => 12,  104 => 10,  94 => 9,  83 => 7,  78 => 6,  75 => 5,  73 => 4,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
\tVotre météo
\t{% if data is defined %}
\t\tÀ
\t\t{{ data.country_name }}
\t{% endif %}!
{% endblock %}
{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"/assets/css/home.css\">
{% endblock %}
{% block content %}
\t<div class=\"container\">
\t\t<div class=\"title\">
\t\t\t<h2>Bienvenue sur la page Météo</h2>
\t\t</div>
\t\t<div class=\"city_form\">
\t\t\t{{ form_start(form) }}
\t\t\t<div>
\t\t\t\t<label for=\"cityNameInput\" class=\"form-label\">Ville</label>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t{{ form_widget(form.city_name) }}
\t\t\t</div>
\t\t\t<div>
\t\t\t\t{{ form_errors(form.city_name) }}
\t\t\t</div>
\t\t\t<div>
\t\t\t\t{{ form_end(form) }}
\t\t\t</div>
\t\t</div>
\t\t{% if data is defined %}
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<h1>À
\t\t\t\t\t\t{{ data.country_name }}
\t\t\t\t\t</h1>
\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\tLe
\t\t\t\t\t\t{{ data.day }}
\t\t\t\t\t\t{{ data.date }}
\t\t\t\t\t</div>
\t\t\t\t\t<h2>
\t\t\t\t\t\t(lon. :
\t\t\t\t\t\t{{ data.lon }}, lat. :
\t\t\t\t\t\t{{ data.lat }})</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"informations\">
\t\t\t\t\t<div class=\"weather\">

\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t<div class=\"icon_img \">
\t\t\t\t\t\t\t\t<h1>{{ data.description }}</h1>
\t\t\t\t\t\t\t\t<img src={{ data.icon_img }}>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"temperature\">
\t\t\t\t\t\t<div class=\"temperature_title\">
\t\t\t\t\t\t\tTempérature :
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"temperature_actually\">
\t\t\t\t\t\t\t{{ data.temperature }}
\t\t\t\t\t\t\t°C
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div =\"temperature_predict\">
\t\t\t\t\t\t\t(min. :
\t\t\t\t\t\t\t{{ data.min }}, max. :
\t\t\t\t\t\t\t{{ data.max }})
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"atmosphere\">
\t\t\t\t\t\t<div class=\"pressure\">
\t\t\t\t\t\t\tPression :
\t\t\t\t\t\t\t{{ data.pressure }}
\t\t\t\t\t\t\thPa
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"humidity\">
\t\t\t\t\t\t\tHumidité :
\t\t\t\t\t\t\t{{ data.humidity }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"wind\">
\t\t\t\t\t\t<div class=\"wind_infos\">
\t\t\t\t\t\t\tVent :
\t\t\t\t\t\t\t{{ data.wind_speed }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"rose\">
\t\t\t\t\t\t\t<div class=\"direction\">N</div>
\t\t\t\t\t\t\t<div class=\"wind_direction\">
\t\t\t\t\t\t\t\tO
\t\t\t\t\t\t\t\t<img src=\"/assets/images/direction_vent.png\" style=\"transform: rotate({{ data.wind_deg }}deg);\">
\t\t\t\t\t\t\t\tE
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"direction\">S</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sun\">
\t\t\t\t\t\t<div class=\"sunrise\">
\t\t\t\t\t\t\t<img src=\"/assets/images/lever_soleil.png\">
\t\t\t\t\t\t\t{{ data.sunrise | date('H:s', \"Europe/Paris\")}}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sunset\">
\t\t\t\t\t\t\t<img src=\"/assets/images/coucher_soleil.png\">
\t\t\t\t\t\t\t{{ data.sunset | date('H:s', \"Europe/Paris\")}}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% else %}
\t\t{% endif %}
\t{% endblock %}
", "weather/index.html.twig", "/home/sanchez/Bureau/test_Strategia/exo-sf-master/templates/weather/index.html.twig");
    }
}
