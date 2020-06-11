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

/* @Event/Events/show_eventadmin.html.twig */
class __TwigTemplate_cc05ac6b162926ea94318998eaaf06a580793ebc515f45a99bf7cf3d00ab442f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Event/Events/show_eventadmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Event/Events/show_eventadmin.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "@Event/Events/show_eventadmin.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 5
        echo "    <h1> search by place</h1>
    <form method=\"POST\">
        <input type=\"text\" name=\"place\">
        <input type=\"submit\" value=\"search\">
    </form>
    <!-- Page Add Section Begin -->
    <section class=\"page-add Reservation-page-add\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"page-breadcrumb\">
                        <h2>Reservation<span>.</span></h2>
                        <a href=\"#\">Home</a>
                        <a class=\"active\" href=\"#\">Reservation</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Page Add Section End -->
    <!-- Cart Page Section Begin -->
    <div class=\"event-page\">
        <div class=\"container\">
            <div class=\"event-table\">
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th class=\"product-h\">idreservation</th>
                        <th>date</th>
                        <th class=\"quan\">place</th>
                        <th>bike</th>
                        <th></th>
                    </tr>
                    </thead>
                    ";
        // line 40
        $context["total"] = 0;
        // line 41
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["event"]);
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 42
            echo "
                        <tbody>
                        <tr>

                            <td class=\"idreservation-col\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "idreservation", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                            <td class=\"date-col\" style=\"font-style: inherit; font-weight: bold\">";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 47)), "html", null, true);
            echo " </td>
                            <td class=\"place-col\" >";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "place", [], "any", false, false, false, 48), "html", null, true);
            echo " </td>
                            <td class=\"bike-col\" >";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "bike", [], "any", false, false, false, 49), "html", null, true);
            echo " </td>
                            <td class=\"reservation-close\"><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eventadmin_delete", ["idreservation" => twig_get_attribute($this->env, $this->source, $context["event"], "idreservation", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\" style=\"color: #0b0b0b\"> <button type=\"button\" class=\"btn btn-danger \" style=\"margin: 10px 0; width:100%\" > supprimer </button></a></td>
                            <td class=\"reservation-update\"><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eventadmin_update", ["idreservation" => twig_get_attribute($this->env, $this->source, $context["event"], "idreservation", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\" style=\"color: #0b0b0b\"><button type=\"button\" class=\"btn btn-warning \" style=\"margin: 10px 0;width:100%\" > modifier </button></a></td>

                        </tr>
                        </tbody>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                </table>

                ";
        // line 60
        echo "                <div class=\"navigation\">
                    ";
        // line 61
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 61, $this->source); })()));
        echo "
                </div>
            </div>
        </div>

    </div>
    <!-- Cart Page Section End -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Event/Events/show_eventadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 61,  154 => 60,  150 => 57,  138 => 51,  134 => 50,  130 => 49,  126 => 48,  122 => 47,  118 => 46,  112 => 42,  107 => 41,  105 => 40,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}


{% block main %}
    <h1> search by place</h1>
    <form method=\"POST\">
        <input type=\"text\" name=\"place\">
        <input type=\"submit\" value=\"search\">
    </form>
    <!-- Page Add Section Begin -->
    <section class=\"page-add Reservation-page-add\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"page-breadcrumb\">
                        <h2>Reservation<span>.</span></h2>
                        <a href=\"#\">Home</a>
                        <a class=\"active\" href=\"#\">Reservation</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Page Add Section End -->
    <!-- Cart Page Section Begin -->
    <div class=\"event-page\">
        <div class=\"container\">
            <div class=\"event-table\">
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th class=\"product-h\">idreservation</th>
                        <th>date</th>
                        <th class=\"quan\">place</th>
                        <th>bike</th>
                        <th></th>
                    </tr>
                    </thead>
                    {% set total=0 %}
                    {% for event in event %}

                        <tbody>
                        <tr>

                            <td class=\"idreservation-col\">{{ event.idreservation }}</td>
                            <td class=\"date-col\" style=\"font-style: inherit; font-weight: bold\">{{  event.date|date() }} </td>
                            <td class=\"place-col\" >{{event.place}} </td>
                            <td class=\"bike-col\" >{{event.bike}} </td>
                            <td class=\"reservation-close\"><a href=\"{{ path('eventadmin_delete',{idreservation:event.idreservation}) }}\" style=\"color: #0b0b0b\"> <button type=\"button\" class=\"btn btn-danger \" style=\"margin: 10px 0; width:100%\" > supprimer </button></a></td>
                            <td class=\"reservation-update\"><a href=\"{{ path('eventadmin_update',{idreservation:event.idreservation}) }}\" style=\"color: #0b0b0b\"><button type=\"button\" class=\"btn btn-warning \" style=\"margin: 10px 0;width:100%\" > modifier </button></a></td>

                        </tr>
                        </tbody>

                    {% endfor %}
                </table>

                {# display navigation #}
                <div class=\"navigation\">
                    {{ knp_pagination_render(event) }}
                </div>
            </div>
        </div>

    </div>
    <!-- Cart Page Section End -->

{% endblock %}", "@Event/Events/show_eventadmin.html.twig", "C:\\wamp64\\www\\bicycle\\src\\EventBundle\\Resources\\views\\Events\\show_eventadmin.html.twig");
    }
}
