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

/* front.html.twig */
class __TwigTemplate_74bf44d0b08fa0c4dc8a1d5c5069fc96960ba75a675a70a2789567ffee2c93ca extends \Twig\Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <meta charset=\"utf-8\">
    <title>GoBike</title>

    <!-- mobile responsive meta -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/bootstrap/bootstrap.min.css"), "html", null, true);
        echo ">
    <!-- slick slider -->
    <link rel=\"stylesheet\" href=";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/slick/slick.css"), "html", null, true);
        echo ">
    <!-- themefy-icon -->
    <link rel=\"stylesheet\" href=";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/themify-icons/themify-icons.css"), "html", null, true);
        echo ">
    <!-- animation css -->
    <link rel=\"stylesheet\" href=";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/animate/animate.css"), "html", null, true);
        echo ">
    <!-- aos -->
    <link rel=\"stylesheet\" href=";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/aos/aos.css"), "html", null, true);
        echo ">
    <!-- venobox popup -->
    <link rel=\"stylesheet\" href=";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/venobox/venobox.css"), "html", null, true);
        echo ">

    <!-- Main Stylesheet -->
    <link href=";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/style.css"), "html", null, true);
        echo " rel=\"stylesheet\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/starrating/css/rating.css"), "html", null, true);
        echo "\" />

    <script src=";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/jQuery/jquery.min.js"), "html", null, true);
        echo "></script>
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/starrating/js/rating.js"), "html", null, true);
        echo "\"></script>


    <!--Favicon-->
    <link rel=\"shortcut icon\" href=";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/favicon.png"), "html", null, true);
        echo " type=\"image/x-icon\">
    <link rel=\"icon\" href=";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/favicon.png"), "html", null, true);
        echo " type=\"image/x-icon\">

    <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
</head>

<body>
<!-- preloader start -->
<div class=\"preloader\">
    <img src=";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/preloader.gif"), "html", null, true);
        echo " alt=\"preloader\">
</div>
<!-- preloader end -->

<!-- header -->
<header class=\"fixed-top header\">
    <!-- top header -->
    <div class=\"top-header py-2 bg-white\">
        <div class=\"container\">
            <div class=\"row no-gutters\">
                <div class=\"col-lg-4 text-center text-lg-left\">
                    <a class=\"text-color mr-3\" href=\"callto:+443003030266\"><strong>CALL</strong> +44 300 303 0266</a>
                    <ul class=\"list-inline d-inline\">
                        <li class=\"list-inline-item mx-0\"><a class=\"d-inline-block p-2 text-color\" href=\"#\"><i class=\"ti-facebook\"></i></a></li>
                        <li class=\"list-inline-item mx-0\"><a class=\"d-inline-block p-2 text-color\" href=\"#\"><i class=\"ti-twitter-alt\"></i></a></li>
                        <li class=\"list-inline-item mx-0\"><a class=\"d-inline-block p-2 text-color\" href=\"#\"><i class=\"ti-linkedin\"></i></a></li>
                        <li class=\"list-inline-item mx-0\"><a class=\"d-inline-block p-2 text-color\" href=\"#\"><i class=\"ti-instagram\"></i></a></li>
                    </ul>
                </div>
                <div class=\"col-lg-8 text-center text-lg-right\">
                    <ul class=\"list-inline\">
                        <li class=\"list-inline-item\"><a class=\"text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block\" href=\"research.html\">research</a></li>
                        <li class=\"list-inline-item\"><a class=\"text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block\" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
        echo "\" >logout</a></li>
                        <li class=\"list-inline-item\"><a class=\"text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block\" href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_check_email");
        echo "\" data-toggle=\"modal\" data-target=\"#signupModal\">register</a></li>
                    </ul>
                </div>
            </div>
            composer require symfony/maker-bundle     </div>
    </div>
    <!-- navbar -->
    <div class=\"navigation w-100\">
        <div class=\"container\">
            <nav class=\"navbar navbar-expand-lg navbar-light p-0\">
                <li class=\"list-inline-item\"><a class=\"h2 text-primary font-secondary\" >GoBike</a></li>
                <button class=\"navbar-toggler rounded-0\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\"
                        aria-controls=\"navigation\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse\" id=\"navigation\">
                    <ul class=\"navbar-nav ml-auto text-center\">
                        <li class=\"nav-item @@home\">
                            <a class=\"nav-link\" href=\"index.html\">Home</a>
                        </li>
                        <li class=\"nav-item @@about\">
                            <a class=\"nav-link\" href=\"about.html\">About</a>
                        </li>
                        <li class=\"nav-item dropdown view\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\"
                               aria-haspopup=\"true\" aria-expanded=\"false\">
                                Reservation
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <a class=\"dropdown-item\" href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_show");
        echo "\">reservation</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_add");
        echo "\">add reservation</a>


                            </div>
                        </li>
                        <li class=\"nav-item @@events\">
                            <a class=\"nav-link\" href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_afficheProduitsClient");
        echo "\">Shop</a>
                        </li>
                        <li class=\"nav-item @@blog\">
                            <a class=\"nav-link\" href=\"blog.html\">BLOG</a>
                        </li>
                        <li class=\"nav-item dropdown view\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\"
                               aria-haspopup=\"true\" aria-expanded=\"false\">
                                COMMAND
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">

                                <a class=\"dropdown-item\" href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lignecommande_affiche_client");
        echo "\">Cart</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_ajout_client");
        echo "\">check OUT</a>

                            </div>
                        </li>
                        <li class=\"nav-item @@contact\">
                            <a class=\"nav-link\" href=\"contact.html\">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- /header -->
<!-- Modal -->

<!-- Modal -->


<!-- page title -->
<!-- cover -->
<link rel=\"stylesheet\" href=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.w3schools.com/w3css/4/w3.css"), "html", null, true);
        echo "\">
<style>
    .mySlides {display:none;}
</style>
</head>

<body>



<div class=\"w3-content w3-section\" style=\"max-width:1600px\">
    <img class=\"mySlides\" src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bike2.jpg"), "html", null, true);
        echo "\" style=\"width:100%\">
    <img class=\"mySlides\" src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/29001.jpg"), "html", null, true);
        echo "\" style=\"width:100%\">
    <img class=\"mySlides\" src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bike31.jpg"), "html", null, true);
        echo "\" style=\"width:100%\">
    <img class=\"mySlides\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bike31.jpg"), "html", null, true);
        echo "\" style=\"width:100%\">
    <img class=\"mySlides\" src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/veloo.jpg"), "html", null, true);
        echo "\" style=\"width:100%\">
    <img class=\"mySlides\" src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/velooo.jfif"), "html", null, true);
        echo "\" style=\"width:100%\">


</div>

<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName(\"mySlides\");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = \"none\";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = \"block\";
        setTimeout(carousel, 4000); // Change image every 4 seconds
    }
</script>

<!-- /page title -->

<!-- courses -->
";
        // line 180
        $this->displayBlock('main', $context, $blocks);
        // line 182
        echo "<!-- /courses -->
</body>
<!-- footer -->
<footer>
    <!-- newsletter -->
    <div class=\"newsletter\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-9 ml-auto bg-primary py-5 newsletter-block\">
                    <h3 class=\"text-white\">Subscribe Now</h3>
                    <form action=\"#\">
                        <div class=\"input-wrapper\">
                            <input type=\"email\" class=\"form-control border-0\" id=\"newsletter\" name=\"newsletter\" placeholder=\"Enter Your Email...\">
                            <button type=\"submit\" value=\"send\" class=\"btn btn-primary\">Join</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- footer content -->
    <div class=\"footer bg-footer section border-bottom\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-sm-8 mb-5 mb-lg-0\">
                    <!-- logo -->
                    <a class=\"logo-footer\" href=\"index.html\"><img class=\"img-fluid mb-4\" src=\"images/logo.png\" alt=\"logo\"></a>
                    <ul class=\"list-unstyled\">
                        <li class=\"mb-2\">23621 15 Mile Rd #C104, Clinton MI, 48035, New York, USA</li>
                        <li class=\"mb-2\">+1 (2) 345 6789</li>
                        <li class=\"mb-2\">+1 (2) 345 6789</li>
                        <li class=\"mb-2\">contact@yourdomain.com</li>
                    </ul>
                </div>
                <!-- company -->
                <div class=\"col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0\">
                    <h4 class=\"text-white mb-5\">COMPANY</h4>
                    <ul class=\"list-unstyled\">
                        <li class=\"mb-3\"><a class=\"text-color\" href=\"about.html\">About Us</a></li>
                        <li class=\"mb-3\"><a class=\"text-color\" href=\"teacher.html\">Our Teacher</a></li>
                        <li class=\"mb-3\"><a class=\"text-color\" href=\"contact.html\">Contact</a></li>
                        <li class=\"mb-3\"><a class=\"text-color\" href=\"blog.html\">Blog</a></li>
                    </ul>
                </div>
                <!-- links -->
                <div class=\"col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0\">
                    <h4 class=\"text-white mb-5\">LINKS</h4>
                    <ul class=\"list-unstyled\">
                        <li class=\"mb-3\"><a class=\"text-color\" href=\"courses.html\">Courses</a></li>
                        <li class=\"mb-3\"><a class=\"text-color\" href=\"event.html\">Events</a></li>
                        <li class=\"mb-3\"><a class=\"text-color\" href=\"gallary.html\">Gallary</a></li>
                        <li class=\"mb-3\"><a class=\"text-color\" href=\"faqs.html\">FAQs</a></li>
                    </ul>
                </div>
                <!-- support -->
                <div class=\"col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0\">
                    <h4 class=\"text-white mb-5\">SUPPORT</h4>
                    <ul class=\"list-unstyled\">
                        <li class=\"mb-3\"><a class=\"text-color\" href=\"#\">Forums</a></li>
                        <li class=\"mb-3\"><a class=\"text-color\" href=\"#\">Documentation</a></li>
                        <li class=\"mb-3\"><a class=\"text-color\" href=\"#\">Language</a></li>
                        <li class=\"mb-3\"><a class=\"text-color\" href=\"#\">Release Status</a></li>
                    </ul>
                </div>
                <!-- support -->
                <div class=\"col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0\">
                    <h4 class=\"text-white mb-5\">RECOMMEND</h4>
                    <ul class=\"list-unstyled\">
                        <li class=\"mb-3\"><a class=\"text-color\" href=\"#\">WordPress</a></li>
                        <li class=\"mb-3\"><a class=\"text-color\" href=\"#\">LearnPress</a></li>
                        <li class=\"mb-3\"><a class=\"text-color\" href=\"#\">WooCommerce</a></li>
                        <li class=\"mb-3\"><a class=\"text-color\" href=\"#\">bbPress</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright -->
    <div class=\"copyright py-4 bg-footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-7 text-sm-left text-center\">
                    <p class=\"mb-0\">Copyright
                        <script>
                            var CurrentYear = new Date().getFullYear()
                            document.write(CurrentYear)
                        </script>
                        © themefisher</p>
                </div>
                <div class=\"col-sm-5 text-sm-right text-center\">
                    <ul class=\"list-inline\">
                        <li class=\"list-inline-item\"><a class=\"d-inline-block p-2\" href=\"#\"><i class=\"ti-facebook text-primary\"></i></a></li>
                        <li class=\"list-inline-item\"><a class=\"d-inline-block p-2\" href=\"#\"><i class=\"ti-twitter-alt text-primary\"></i></a></li>
                        <li class=\"list-inline-item\"><a class=\"d-inline-block p-2\" href=\"#\"><i class=\"ti-linkedin text-primary\"></i></a></li>
                        <li class=\"list-inline-item\"><a class=\"d-inline-block p-2\" href=\"#\"><i class=\"ti-instagram text-primary\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /footer -->
";
        // line 284
        $this->displayBlock('javascripts', $context, $blocks);
        // line 287
        echo "<!-- jQuery -->
<script src=";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/jQuery/jquery.min.js"), "html", null, true);
        echo "></script>
<!-- Bootstrap JS -->
<script src=";
        // line 290
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "></script>
<!-- slick slider -->
<script src=";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/slick/slick.min.js"), "html", null, true);
        echo "></script>
<!-- aos -->
<script src=";
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/aos/aos.js"), "html", null, true);
        echo "></script>
<!-- venobox popup -->
<script src=";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/venobox/venobox.min.js"), "html", null, true);
        echo "></script>
<!-- filter -->
<script src=";
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/filterizr/jquery.filterizr.min.js"), "html", null, true);
        echo "></script>
<!-- google map -->
<script src=";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"), "html", null, true);
        echo "></script>
<script src=";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/google-map/gmap.js"), "html", null, true);
        echo "></script>

<!-- Main Script -->
<script src=";
        // line 304
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/script.js"), "html", null, true);
        echo "
        .8></script>
";
        // line 306
        $this->displayBlock('js', $context, $blocks);
        // line 308
        echo "</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 180
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 284
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 285
        echo "    <script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/jquery-3.3.1.min.js"), "html", null, true);
        echo "></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 306
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  520 => 306,  507 => 285,  497 => 284,  479 => 180,  469 => 308,  467 => 306,  462 => 304,  456 => 301,  452 => 300,  447 => 298,  442 => 296,  437 => 294,  432 => 292,  427 => 290,  422 => 288,  419 => 287,  417 => 284,  313 => 182,  311 => 180,  283 => 155,  279 => 154,  275 => 153,  271 => 152,  267 => 151,  263 => 150,  249 => 139,  225 => 118,  221 => 117,  206 => 105,  197 => 99,  193 => 98,  160 => 68,  156 => 67,  131 => 45,  122 => 39,  117 => 37,  113 => 36,  106 => 32,  102 => 31,  97 => 29,  92 => 27,  86 => 24,  81 => 22,  76 => 20,  71 => 18,  66 => 16,  61 => 14,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <meta charset=\"utf-8\">
    <title>GoBike</title>

    <!-- mobile responsive meta -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href={{ asset(\"front/plugins/bootstrap/bootstrap.min.css\") }}>
    <!-- slick slider -->
    <link rel=\"stylesheet\" href={{ asset(\"front/plugins/slick/slick.css\") }}>
    <!-- themefy-icon -->
    <link rel=\"stylesheet\" href={{ asset(\"front/plugins/themify-icons/themify-icons.css\") }}>
    <!-- animation css -->
    <link rel=\"stylesheet\" href={{ asset(\"front/plugins/animate/animate.css\") }}>
    <!-- aos -->
    <link rel=\"stylesheet\" href={{ asset(\"front/plugins/aos/aos.css\") }}>
    <!-- venobox popup -->
    <link rel=\"stylesheet\" href={{ asset(\"front/plugins/venobox/venobox.css\") }}>

    <!-- Main Stylesheet -->
    <link href={{ asset(\"front/css/style.css\") }} rel=\"stylesheet\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/starrating/css/rating.css') }}\" />

    <script src={{ asset(\"front/plugins/jQuery/jquery.min.js\") }}></script>
    <script src=\"{{ asset('bundles/starrating/js/rating.js') }}\"></script>


    <!--Favicon-->
    <link rel=\"shortcut icon\" href={{ asset(\"front/images/favicon.png\") }} type=\"image/x-icon\">
    <link rel=\"icon\" href={{ asset(\"front/images/favicon.png\") }} type=\"image/x-icon\">

    <link rel=\"stylesheet\" href=\"{{ asset('client/css/style.css') }}\" type=\"text/css\">
</head>

<body>
<!-- preloader start -->
<div class=\"preloader\">
    <img src={{ asset(\"front/images/preloader.gif\") }} alt=\"preloader\">
</div>
<!-- preloader end -->

<!-- header -->
<header class=\"fixed-top header\">
    <!-- top header -->
    <div class=\"top-header py-2 bg-white\">
        <div class=\"container\">
            <div class=\"row no-gutters\">
                <div class=\"col-lg-4 text-center text-lg-left\">
                    <a class=\"text-color mr-3\" href=\"callto:+443003030266\"><strong>CALL</strong> +44 300 303 0266</a>
                    <ul class=\"list-inline d-inline\">
                        <li class=\"list-inline-item mx-0\"><a class=\"d-inline-block p-2 text-color\" href=\"#\"><i class=\"ti-facebook\"></i></a></li>
                        <li class=\"list-inline-item mx-0\"><a class=\"d-inline-block p-2 text-color\" href=\"#\"><i class=\"ti-twitter-alt\"></i></a></li>
                        <li class=\"list-inline-item mx-0\"><a class=\"d-inline-block p-2 text-color\" href=\"#\"><i class=\"ti-linkedin\"></i></a></li>
                        <li class=\"list-inline-item mx-0\"><a class=\"d-inline-block p-2 text-color\" href=\"#\"><i class=\"ti-instagram\"></i></a></li>
                    </ul>
                </div>
                <div class=\"col-lg-8 text-center text-lg-right\">
                    <ul class=\"list-inline\">
                        <li class=\"list-inline-item\"><a class=\"text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block\" href=\"research.html\">research</a></li>
                        <li class=\"list-inline-item\"><a class=\"text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block\" href=\"{{path('fos_user_security_login')}}\" >logout</a></li>
                        <li class=\"list-inline-item\"><a class=\"text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block\" href=\"{{ path('fos_user_registration_check_email') }}\" data-toggle=\"modal\" data-target=\"#signupModal\">register</a></li>
                    </ul>
                </div>
            </div>
            composer require symfony/maker-bundle     </div>
    </div>
    <!-- navbar -->
    <div class=\"navigation w-100\">
        <div class=\"container\">
            <nav class=\"navbar navbar-expand-lg navbar-light p-0\">
                <li class=\"list-inline-item\"><a class=\"h2 text-primary font-secondary\" >GoBike</a></li>
                <button class=\"navbar-toggler rounded-0\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\"
                        aria-controls=\"navigation\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse\" id=\"navigation\">
                    <ul class=\"navbar-nav ml-auto text-center\">
                        <li class=\"nav-item @@home\">
                            <a class=\"nav-link\" href=\"index.html\">Home</a>
                        </li>
                        <li class=\"nav-item @@about\">
                            <a class=\"nav-link\" href=\"about.html\">About</a>
                        </li>
                        <li class=\"nav-item dropdown view\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\"
                               aria-haspopup=\"true\" aria-expanded=\"false\">
                                Reservation
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <a class=\"dropdown-item\" href=\"{{ path('event_show') }}\">reservation</a>
                                <a class=\"dropdown-item\" href=\"{{ path('event_add') }}\">add reservation</a>


                            </div>
                        </li>
                        <li class=\"nav-item @@events\">
                            <a class=\"nav-link\" href=\"{{ path('produit_afficheProduitsClient') }}\">Shop</a>
                        </li>
                        <li class=\"nav-item @@blog\">
                            <a class=\"nav-link\" href=\"blog.html\">BLOG</a>
                        </li>
                        <li class=\"nav-item dropdown view\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\"
                               aria-haspopup=\"true\" aria-expanded=\"false\">
                                COMMAND
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">

                                <a class=\"dropdown-item\" href=\"{{ path('lignecommande_affiche_client') }}\">Cart</a>
                                <a class=\"dropdown-item\" href=\"{{ path('commande_ajout_client') }}\">check OUT</a>

                            </div>
                        </li>
                        <li class=\"nav-item @@contact\">
                            <a class=\"nav-link\" href=\"contact.html\">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- /header -->
<!-- Modal -->

<!-- Modal -->


<!-- page title -->
<!-- cover -->
<link rel=\"stylesheet\" href=\"{{ asset('https://www.w3schools.com/w3css/4/w3.css')}}\">
<style>
    .mySlides {display:none;}
</style>
</head>

<body>



<div class=\"w3-content w3-section\" style=\"max-width:1600px\">
    <img class=\"mySlides\" src=\"{{ asset('images/bike2.jpg')}}\" style=\"width:100%\">
    <img class=\"mySlides\" src=\"{{ asset('images/29001.jpg')}}\" style=\"width:100%\">
    <img class=\"mySlides\" src=\"{{ asset('images/bike31.jpg')}}\" style=\"width:100%\">
    <img class=\"mySlides\" src=\"{{ asset('images/bike31.jpg')}}\" style=\"width:100%\">
    <img class=\"mySlides\" src=\"{{ asset('images/veloo.jpg')}}\" style=\"width:100%\">
    <img class=\"mySlides\" src=\"{{ asset('images/velooo.jfif')}}\" style=\"width:100%\">


</div>

<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName(\"mySlides\");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = \"none\";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = \"block\";
        setTimeout(carousel, 4000); // Change image every 4 seconds
    }
</script>

<!-- /page title -->

<!-- courses -->
{% block main %}
{% endblock %}
<!-- /courses -->
</body>
<!-- footer -->
<footer>
    <!-- newsletter -->
    <div class=\"newsletter\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-9 ml-auto bg-primary py-5 newsletter-block\">
                    <h3 class=\"text-white\">Subscribe Now</h3>
                    <form action=\"#\">
                        <div class=\"input-wrapper\">
                            <input type=\"email\" class=\"form-control border-0\" id=\"newsletter\" name=\"newsletter\" placeholder=\"Enter Your Email...\">
                            <button type=\"submit\" value=\"send\" class=\"btn btn-primary\">Join</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- footer content -->
    <div class=\"footer bg-footer section border-bottom\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-sm-8 mb-5 mb-lg-0\">
                    <!-- logo -->
                    <a class=\"logo-footer\" href=\"index.html\"><img class=\"img-fluid mb-4\" src=\"images/logo.png\" alt=\"logo\"></a>
                    <ul class=\"list-unstyled\">
                        <li class=\"mb-2\">23621 15 Mile Rd #C104, Clinton MI, 48035, New York, USA</li>
                        <li class=\"mb-2\">+1 (2) 345 6789</li>
                        <li class=\"mb-2\">+1 (2) 345 6789</li>
                        <li class=\"mb-2\">contact@yourdomain.com</li>
                    </ul>
                </div>
                <!-- company -->
                <div class=\"col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0\">
                    <h4 class=\"text-white mb-5\">COMPANY</h4>
                    <ul class=\"list-unstyled\">
                        <li class=\"mb-3\"><a class=\"text-color\" href=\"about.html\">About Us</a></li>
                        <li class=\"mb-3\"><a class=\"text-color\" href=\"teacher.html\">Our Teacher</a></li>
                        <li class=\"mb-3\"><a class=\"text-color\" href=\"contact.html\">Contact</a></li>
                        <li class=\"mb-3\"><a class=\"text-color\" href=\"blog.html\">Blog</a></li>
                    </ul>
                </div>
                <!-- links -->
                <div class=\"col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0\">
                    <h4 class=\"text-white mb-5\">LINKS</h4>
                    <ul class=\"list-unstyled\">
                        <li class=\"mb-3\"><a class=\"text-color\" href=\"courses.html\">Courses</a></li>
                        <li class=\"mb-3\"><a class=\"text-color\" href=\"event.html\">Events</a></li>
                        <li class=\"mb-3\"><a class=\"text-color\" href=\"gallary.html\">Gallary</a></li>
                        <li class=\"mb-3\"><a class=\"text-color\" href=\"faqs.html\">FAQs</a></li>
                    </ul>
                </div>
                <!-- support -->
                <div class=\"col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0\">
                    <h4 class=\"text-white mb-5\">SUPPORT</h4>
                    <ul class=\"list-unstyled\">
                        <li class=\"mb-3\"><a class=\"text-color\" href=\"#\">Forums</a></li>
                        <li class=\"mb-3\"><a class=\"text-color\" href=\"#\">Documentation</a></li>
                        <li class=\"mb-3\"><a class=\"text-color\" href=\"#\">Language</a></li>
                        <li class=\"mb-3\"><a class=\"text-color\" href=\"#\">Release Status</a></li>
                    </ul>
                </div>
                <!-- support -->
                <div class=\"col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0\">
                    <h4 class=\"text-white mb-5\">RECOMMEND</h4>
                    <ul class=\"list-unstyled\">
                        <li class=\"mb-3\"><a class=\"text-color\" href=\"#\">WordPress</a></li>
                        <li class=\"mb-3\"><a class=\"text-color\" href=\"#\">LearnPress</a></li>
                        <li class=\"mb-3\"><a class=\"text-color\" href=\"#\">WooCommerce</a></li>
                        <li class=\"mb-3\"><a class=\"text-color\" href=\"#\">bbPress</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright -->
    <div class=\"copyright py-4 bg-footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-7 text-sm-left text-center\">
                    <p class=\"mb-0\">Copyright
                        <script>
                            var CurrentYear = new Date().getFullYear()
                            document.write(CurrentYear)
                        </script>
                        © themefisher</p>
                </div>
                <div class=\"col-sm-5 text-sm-right text-center\">
                    <ul class=\"list-inline\">
                        <li class=\"list-inline-item\"><a class=\"d-inline-block p-2\" href=\"#\"><i class=\"ti-facebook text-primary\"></i></a></li>
                        <li class=\"list-inline-item\"><a class=\"d-inline-block p-2\" href=\"#\"><i class=\"ti-twitter-alt text-primary\"></i></a></li>
                        <li class=\"list-inline-item\"><a class=\"d-inline-block p-2\" href=\"#\"><i class=\"ti-linkedin text-primary\"></i></a></li>
                        <li class=\"list-inline-item\"><a class=\"d-inline-block p-2\" href=\"#\"><i class=\"ti-instagram text-primary\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /footer -->
{% block javascripts %}
    <script src={{ asset(\"client/js/jquery-3.3.1.min.js\") }}></script>
    {% endblock %}
<!-- jQuery -->
<script src={{ asset(\"front/plugins/jQuery/jquery.min.js\") }}></script>
<!-- Bootstrap JS -->
<script src={{ asset(\"front/plugins/bootstrap/bootstrap.min.js\") }}></script>
<!-- slick slider -->
<script src={{ asset(\"front/plugins/slick/slick.min.js\") }}></script>
<!-- aos -->
<script src={{ asset(\"front/plugins/aos/aos.js\") }}></script>
<!-- venobox popup -->
<script src={{ asset(\"front/plugins/venobox/venobox.min.js\") }}></script>
<!-- filter -->
<script src={{ asset(\"front/plugins/filterizr/jquery.filterizr.min.js\") }}></script>
<!-- google map -->
<script src={{ asset(\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ\") }}></script>
<script src={{ asset(\"front/plugins/google-map/gmap.js\") }}></script>

<!-- Main Script -->
<script src={{ asset(\"front/js/script.js\") }}
        .8></script>
{% block js %}
{% endblock %}
</html>", "front.html.twig", "C:\\wamp64\\www\\bicycle\\app\\Resources\\views\\front.html.twig");
    }
}
