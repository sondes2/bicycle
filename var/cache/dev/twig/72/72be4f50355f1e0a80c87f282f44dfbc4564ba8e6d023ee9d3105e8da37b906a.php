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

/* EventBundle:Pdf:pdf.html.twig */
class __TwigTemplate_68f1cef1b8efbc97cb4ad2c9facbf8ceaa99e4e90d18787cfbcfe42a3a1689a7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EventBundle:Pdf:pdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EventBundle:Pdf:pdf.html.twig"));

        // line 1
        echo "
<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\">
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\">
</head>


<div class=\"col-lg-3 col-md-3 col-sm-12 title-area\">



</div>




<br>
<br>
<br>

<center><h1><u>Reservation</u></h1></center>
<br>
<br>
<br>


<body>
<centre>
<img height=\"200\" src=\"http://ourcodeworld.com/resources/img/ocw-empty.png\"/>
</centre>
<div>
    <!-- Do not forget to give width and height to your svg
        use PLAIN SVG directly (<svg>content</svg>)
        Tiger SVG EXAMPLE : https://upload.wikimedia.org/wikipedia/commons/f/fd/Ghostscript_Tiger.svg
    -->
</div>

<center>


    <b>idreservation :</b> ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 42, $this->source); })()), "idreservation", [], "any", false, false, false, 42), "html", null, true);
        echo "<br><br>
    <b>date  :</b> ";
        // line 43
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 43, $this->source); })()), "date", [], "any", false, false, false, 43)), "html", null, true);
        echo " <br><br>
    <b>place  :</b> ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 44, $this->source); })()), "place", [], "any", false, false, false, 44), "html", null, true);
        echo "<br><br>
    <b>bike :</b> ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 45, $this->source); })()), "bike", [], "any", false, false, false, 45), "html", null, true);
        echo "<br><br>
    <br><br>

</center>




</body>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>




<hr>
<b>.WoRLd-FrIeNdShIp.</b>


</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "EventBundle:Pdf:pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 45,  94 => 44,  90 => 43,  86 => 42,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\">
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\">
</head>


<div class=\"col-lg-3 col-md-3 col-sm-12 title-area\">



</div>




<br>
<br>
<br>

<center><h1><u>Reservation</u></h1></center>
<br>
<br>
<br>


<body>
<centre>
<img height=\"200\" src=\"http://ourcodeworld.com/resources/img/ocw-empty.png\"/>
</centre>
<div>
    <!-- Do not forget to give width and height to your svg
        use PLAIN SVG directly (<svg>content</svg>)
        Tiger SVG EXAMPLE : https://upload.wikimedia.org/wikipedia/commons/f/fd/Ghostscript_Tiger.svg
    -->
</div>

<center>


    <b>idreservation :</b> {{ event.idreservation }}<br><br>
    <b>date  :</b> {{ event.date|date() }} <br><br>
    <b>place  :</b> {{ event.place }}<br><br>
    <b>bike :</b> {{ event.bike }}<br><br>
    <br><br>

</center>




</body>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>




<hr>
<b>.WoRLd-FrIeNdShIp.</b>


</html>", "EventBundle:Pdf:pdf.html.twig", "C:\\wamp64\\www\\bicycle\\src\\EventBundle/Resources/views/Pdf/pdf.html.twig");
    }
}
