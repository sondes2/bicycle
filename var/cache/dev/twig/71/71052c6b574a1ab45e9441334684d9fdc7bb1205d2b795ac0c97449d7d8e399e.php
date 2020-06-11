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

/* back.html.twig */
class __TwigTemplate_2bed02543cb75684fe8cc23e2fa1ff5fab12d9017425757ce9092db8a3f3bece extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Dashboard\">
    <meta name=\"keyword\" content=\"Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">
    <title>Dashio - Bootstrap Admin Template</title>

    <!-- Favicons -->
    <link href= \"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--external css-->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/zabuto_calendar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/gritter/css/jquery.gritter.css"), "html", null, true);
        echo "\" />
    <!-- Custom styles for this template -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/chart-master/Chart.js"), "html", null, true);
        echo "\"></script>

    <!-- =======================================================
      Template Name: Dashio
      Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
      Author: TemplateMag.com
      License: https://templatemag.com/license/
    ======================================================= -->
</head>

<body>



<section id=\"container\">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class=\"header black-bg\">
        <div class=\"sidebar-toggle-box\">
            <div class=\"fa fa-bars tooltips\" data-placement=\"right\" data-original-title=\"Toggle Navigation\"></div>
        </div>
        <!--logo start-->
        <a href=\"#\" class=\"logo\"><b>Go.<span>Bike</span></b></a>
        <!--logo end-->
        <div class=\"nav notify-row\" id=\"top_menu\">
            <!--  notification start -->
            <ul class=\"nav top-menu\">
                <!-- settings start -->
                <li class=\"dropdown\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"index.html#\">
                        <i class=\"fa fa-tasks\"></i>
                        <span class=\"badge bg-theme\">4</span>
                    </a>

                </li>
                <!-- settings end -->
                <!-- inbox dropdown start-->
                <li id=\"header_inbox_bar\" class=\"dropdown\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"index.html#\">
                        <i class=\"fa fa-envelope-o\"></i>
                        <span class=\"badge bg-theme\">5</span>
                    </a>
                </li>
                <!-- inbox dropdown end -->
                <!-- notification dropdown start-->
                <li id=\"header_notification_bar\" class=\"dropdown\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"index.html#\">
                        <i class=\"fa fa-bell-o\"></i>
                        <span class=\"badge bg-warning\">7</span>
                    </a>

                </li>
                <!-- notification dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <div class=\"top-menu\">
            <ul class=\"nav pull-right top-menu\">
                <li><a class=\"logout\" href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
        echo "\">Logout</a></li>
            </ul>
        </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id=\"sidebar\" class=\"nav-collapse \">
            <!-- sidebar menu start-->
            <ul class=\"sidebar-menu\" id=\"nav-accordion\">


                <li class=\"mt\">
                    <a href=\"#\">
                        <i class=\"fa fa-dashboard\"></i>
                        <span>Admin</span>
                    </a>
                </li>
                </li>
                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-desktop\"></i>
                        <span>Products</span>
                    </a>
                    <ul class=\"sub\">
                        <li><a href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_afficheProduits");
        echo "\">Add Product</a></li>

                    </ul>
                </li>
                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-cogs\"></i>
                        <span>Cart</span>
                    </a>
                    <ul class=\"sub\">
                        <li><a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_affiche_admin");
        echo "\">All Carts</a></li>

                    </ul>
                </li>
                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-book\"></i>
                        <span>Blogs</span>
                    </a>

                </li>
                <li class=\"sub-menu\">
                    <a href=\"#\">
                        <i class=\"fa fa-tasks\"></i>
                        <span>Participant</span>
                    </a>

                </li>
                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-tasks\"></i>
                        <span>Evenement</span>
                    </a>
                    <ul class=\"sub\">
                        <li><a href=\"";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eventadmin_add");
        echo "\">Ajouter Un Evenement</a></li>
                        <li><a href=\"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eventadmin_show");
        echo "\">Liste Des Evenements</a></li>

                    </ul>
                </li>

                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-th\"></i>
                        <span>Club</span>
                    </a>

                </li>





            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start--><section id=\"main-content\">
        <section class=\"wrapper\">
            <div class=\"row\">
                <div class=\"col-lg-9 main-chart\">
                    <!--CUSTOM CHART START -->
                    <div class=\"border-head\">


                        ";
        // line 181
        $this->displayBlock('main', $context, $blocks);
        // line 184
        echo "


                    </div>
                </div>
            </div>
        </section>
    </section>
</section>
<!--main content end-->
<!--footer start-->

<!--footer end-->
</section>
<!-- js placed at the end of the document so the pages load faster -->
<script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script class=\"include\" type=\"text/javascript\" src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/jquery.dcjqaccordion.2.7.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
<!--common script for all pages-->
<script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/common-scripts.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/gritter/js/jquery.gritter.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/gritter-conf.js"), "html", null, true);
        echo "\"></script>
<!--script for this page-->
<script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/sparkline-chart.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/zabuto_calendar.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function() {
        var unique_id = \$.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to VELO.TN',
            // (string | mandatory) the text inside the notification
            text: 'vous trouver tous',
            // (string | optional) the image to display on the left

            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: false,
            // (int | optional) the time you want it to be alive for before fading out
            time: 8000,
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
    });
</script>
<script type=\"application/javascript\">
    \$(document).ready(function() {
        \$(\"#date-popover\").popover({
            html: true,
            trigger: \"manual\"
        });
        \$(\"#date-popover\").hide();
        \$(\"#date-popover\").click(function(e) {
            \$(this).hide();
        });

        \$(\"#my-calendar\").zabuto_calendar({
            action: function() {
                return myDateFunction(this.id, false);
            },
            action_nav: function() {
                return myNavFunction(this.id);
            },
            ajax: {
                url: \"show_data.php?action=1\",
                modal: true
            },
            legend: [{
                type: \"text\",
                label: \"Special event\",
                badge: \"00\"
            },
                {
                    type: \"block\",
                    label: \"Regular event\",
                }
            ]
        });
    });

    function myNavFunction(id) {
        \$(\"#date-popover\").hide();
        var nav = \$(\"#\" + id).data(\"navigation\");
        var to = \$(\"#\" + id).data(\"to\");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
</script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 181
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 182
        echo "
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 182,  406 => 181,  330 => 212,  326 => 211,  321 => 209,  317 => 208,  313 => 207,  308 => 205,  304 => 204,  300 => 203,  296 => 202,  292 => 201,  287 => 199,  270 => 184,  268 => 181,  232 => 148,  228 => 147,  201 => 123,  188 => 113,  157 => 85,  94 => 25,  90 => 24,  86 => 23,  81 => 21,  77 => 20,  73 => 19,  68 => 17,  62 => 14,  58 => 13,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Dashboard\">
    <meta name=\"keyword\" content=\"Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">
    <title>Dashio - Bootstrap Admin Template</title>

    <!-- Favicons -->
    <link href= \"{{ asset('img/favicon.png') }}\" rel=\"icon\">
    <link href=\"{{ asset('img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">

    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('lib/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <!--external css-->
    <link href=\"{{ asset('lib/font-awesome/css/font-awesome.css') }}\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/zabuto_calendar.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('lib/gritter/css/jquery.gritter.css') }}\" />
    <!-- Custom styles for this template -->
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/style-responsive.css') }}\" rel=\"stylesheet\">
    <script src=\"{{ asset('lib/chart-master/Chart.js') }}\"></script>

    <!-- =======================================================
      Template Name: Dashio
      Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
      Author: TemplateMag.com
      License: https://templatemag.com/license/
    ======================================================= -->
</head>

<body>



<section id=\"container\">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class=\"header black-bg\">
        <div class=\"sidebar-toggle-box\">
            <div class=\"fa fa-bars tooltips\" data-placement=\"right\" data-original-title=\"Toggle Navigation\"></div>
        </div>
        <!--logo start-->
        <a href=\"#\" class=\"logo\"><b>Go.<span>Bike</span></b></a>
        <!--logo end-->
        <div class=\"nav notify-row\" id=\"top_menu\">
            <!--  notification start -->
            <ul class=\"nav top-menu\">
                <!-- settings start -->
                <li class=\"dropdown\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"index.html#\">
                        <i class=\"fa fa-tasks\"></i>
                        <span class=\"badge bg-theme\">4</span>
                    </a>

                </li>
                <!-- settings end -->
                <!-- inbox dropdown start-->
                <li id=\"header_inbox_bar\" class=\"dropdown\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"index.html#\">
                        <i class=\"fa fa-envelope-o\"></i>
                        <span class=\"badge bg-theme\">5</span>
                    </a>
                </li>
                <!-- inbox dropdown end -->
                <!-- notification dropdown start-->
                <li id=\"header_notification_bar\" class=\"dropdown\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"index.html#\">
                        <i class=\"fa fa-bell-o\"></i>
                        <span class=\"badge bg-warning\">7</span>
                    </a>

                </li>
                <!-- notification dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <div class=\"top-menu\">
            <ul class=\"nav pull-right top-menu\">
                <li><a class=\"logout\" href=\"{{path('fos_user_security_login')}}\">Logout</a></li>
            </ul>
        </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id=\"sidebar\" class=\"nav-collapse \">
            <!-- sidebar menu start-->
            <ul class=\"sidebar-menu\" id=\"nav-accordion\">


                <li class=\"mt\">
                    <a href=\"#\">
                        <i class=\"fa fa-dashboard\"></i>
                        <span>Admin</span>
                    </a>
                </li>
                </li>
                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-desktop\"></i>
                        <span>Products</span>
                    </a>
                    <ul class=\"sub\">
                        <li><a href=\"{{ path('produit_afficheProduits') }}\">Add Product</a></li>

                    </ul>
                </li>
                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-cogs\"></i>
                        <span>Cart</span>
                    </a>
                    <ul class=\"sub\">
                        <li><a href=\"{{path('commande_affiche_admin')}}\">All Carts</a></li>

                    </ul>
                </li>
                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-book\"></i>
                        <span>Blogs</span>
                    </a>

                </li>
                <li class=\"sub-menu\">
                    <a href=\"#\">
                        <i class=\"fa fa-tasks\"></i>
                        <span>Participant</span>
                    </a>

                </li>
                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-tasks\"></i>
                        <span>Evenement</span>
                    </a>
                    <ul class=\"sub\">
                        <li><a href=\"{{path('eventadmin_add')}}\">Ajouter Un Evenement</a></li>
                        <li><a href=\"{{path('eventadmin_show')}}\">Liste Des Evenements</a></li>

                    </ul>
                </li>

                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-th\"></i>
                        <span>Club</span>
                    </a>

                </li>





            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start--><section id=\"main-content\">
        <section class=\"wrapper\">
            <div class=\"row\">
                <div class=\"col-lg-9 main-chart\">
                    <!--CUSTOM CHART START -->
                    <div class=\"border-head\">


                        {% block main %}

                        {% endblock %}



                    </div>
                </div>
            </div>
        </section>
    </section>
</section>
<!--main content end-->
<!--footer start-->

<!--footer end-->
</section>
<!-- js placed at the end of the document so the pages load faster -->
<script src=\"{{ asset('lib/jquery/jquery.min.js') }}\"></script>

<script src=\"{{ asset('lib/bootstrap/js/bootstrap.min.js') }}\"></script>
<script class=\"include\" type=\"text/javascript\" src=\"{{ asset('lib/jquery.dcjqaccordion.2.7.js') }}\"></script>
<script src=\"{{ asset('lib/jquery.scrollTo.min.js') }}\"></script>
<script src=\"{{ asset('lib/jquery.nicescroll.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('lib/jquery.sparkline.js') }}\"></script>
<!--common script for all pages-->
<script src=\"{{ asset('lib/common-scripts.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('lib/gritter/js/jquery.gritter.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('lib/gritter-conf.js') }}\"></script>
<!--script for this page-->
<script src=\"{{ asset('lib/sparkline-chart.js') }}\"></script>
<script src=\"{{ asset('lib/zabuto_calendar.js') }}\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function() {
        var unique_id = \$.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to VELO.TN',
            // (string | mandatory) the text inside the notification
            text: 'vous trouver tous',
            // (string | optional) the image to display on the left

            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: false,
            // (int | optional) the time you want it to be alive for before fading out
            time: 8000,
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
    });
</script>
<script type=\"application/javascript\">
    \$(document).ready(function() {
        \$(\"#date-popover\").popover({
            html: true,
            trigger: \"manual\"
        });
        \$(\"#date-popover\").hide();
        \$(\"#date-popover\").click(function(e) {
            \$(this).hide();
        });

        \$(\"#my-calendar\").zabuto_calendar({
            action: function() {
                return myDateFunction(this.id, false);
            },
            action_nav: function() {
                return myNavFunction(this.id);
            },
            ajax: {
                url: \"show_data.php?action=1\",
                modal: true
            },
            legend: [{
                type: \"text\",
                label: \"Special event\",
                badge: \"00\"
            },
                {
                    type: \"block\",
                    label: \"Regular event\",
                }
            ]
        });
    });

    function myNavFunction(id) {
        \$(\"#date-popover\").hide();
        var nav = \$(\"#\" + id).data(\"navigation\");
        var to = \$(\"#\" + id).data(\"to\");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
</script>
</body>

</html>", "back.html.twig", "C:\\wamp64\\www\\bicycle\\app\\Resources\\views\\back.html.twig");
    }
}
