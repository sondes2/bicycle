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

/* @Produit/Default/clientViews/index.html.twig */
class __TwigTemplate_745232d09f79f1d21d3e6df223468d5e0bde72bcbe856fa98737148644972619 extends \Twig\Template
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
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Produit/Default/clientViews/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Produit/Default/clientViews/index.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "@Produit/Default/clientViews/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "    <!-- Hero Slider Begin -->
    <section class=\"hero-slider\">
        <div class=\"hero-items owl-carousel\">
            <div class=\"single-slider-item set-bg\" data-setbg=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/slider-1.jpg"), "html", null, true);
        echo "\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <h1>2020</h1>
                            <h2>Lookbook.</h2>
                            <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_afficheProduitsClient");
        echo "\" class=\"primary-btn\">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"single-slider-item set-bg\" data-setbg=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/slider-2.jpg"), "html", null, true);
        echo "\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <h1>2019</h1>
                            <h2>Lookbook.</h2>
                            <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_afficheProduitsClient");
        echo "\" class=\"primary-btn\">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"single-slider-item set-bg\" data-setbg=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/slider-3.jpg"), "html", null, true);
        echo "\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <h1>2019</h1>
                            <h2>Lookbook.</h2>
                            <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_afficheProduitsClient");
        echo "\" class=\"primary-btn\">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Slider End -->

    <!-- Features Section Begin -->
    <section class=\"features-section spad\">
        <div class=\"features-ads\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <div class=\"single-features-ads first\">
                            <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/icons/f-delivery.png"), "html", null, true);
        echo "\" alt=\"\">
                            <h4>Free shipping</h4>
                            <p>Fusce urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal
                                esuada aliquet libero viverra cursus. </p>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"single-features-ads second\">
                            <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/icons/coin.png"), "html", null, true);
        echo "\" alt=\"\">
                            <h4>100% Money back </h4>
                            <p>Urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal esuada
                                aliquet libero viverra cursus. </p>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"single-features-ads\">
                            <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/icons/chat.png"), "html", null, true);
        echo "\" alt=\"\">
                            <h4>Online support 24/7</h4>
                            <p>Urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal esuada
                                aliquet libero viverra cursus. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features Box -->
        <div class=\"features-box\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"single-box-item first-box\">
                                    <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/f-box-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    <div class=\"box-text\">
                                        <span class=\"trend-year\">2019 Party</span>
                                        <h2>Jewelry</h2>
                                        <span class=\"trend-alert\">Trend Allert</span>
                                        <a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_afficheProduitsClient");
        echo "\" class=\"primary-btn\">See More</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"single-box-item second-box\">
                                    <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/f-box-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    <div class=\"box-text\">
                                        <span class=\"trend-year\">2019 Trend</span>
                                        <h2>Footwear</h2>
                                        <span class=\"trend-alert\">Bold & Black</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"single-box-item large-box\">
                            <img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/img/f-box-3.png"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"box-text\">
                                <!-- <span class=\"trend-year\">2019 Party</span>
                                     <h2>Collection</h2>
                                     <div class=\"trend-alert\">Trend Allert</div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Section End -->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Produit/Default/clientViews/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 106,  194 => 94,  185 => 88,  177 => 83,  157 => 66,  146 => 58,  135 => 50,  116 => 34,  107 => 28,  99 => 23,  90 => 17,  82 => 12,  73 => 6,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}
{% block main %}
    <!-- Hero Slider Begin -->
    <section class=\"hero-slider\">
        <div class=\"hero-items owl-carousel\">
            <div class=\"single-slider-item set-bg\" data-setbg=\"{{ asset('client/img/slider-1.jpg') }}\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <h1>2020</h1>
                            <h2>Lookbook.</h2>
                            <a href=\"{{ path('produit_afficheProduitsClient') }}\" class=\"primary-btn\">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"single-slider-item set-bg\" data-setbg=\"{{ asset('client/img/slider-2.jpg') }}\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <h1>2019</h1>
                            <h2>Lookbook.</h2>
                            <a href=\"{{ path('produit_afficheProduitsClient') }}\" class=\"primary-btn\">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"single-slider-item set-bg\" data-setbg=\"{{ asset('client/img/slider-3.jpg') }}\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <h1>2019</h1>
                            <h2>Lookbook.</h2>
                            <a href=\"{{ path('produit_afficheProduitsClient') }}\" class=\"primary-btn\">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Slider End -->

    <!-- Features Section Begin -->
    <section class=\"features-section spad\">
        <div class=\"features-ads\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <div class=\"single-features-ads first\">
                            <img src=\"{{ asset('client/img/icons/f-delivery.png') }}\" alt=\"\">
                            <h4>Free shipping</h4>
                            <p>Fusce urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal
                                esuada aliquet libero viverra cursus. </p>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"single-features-ads second\">
                            <img src=\"{{ asset('client/img/icons/coin.png') }}\" alt=\"\">
                            <h4>100% Money back </h4>
                            <p>Urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal esuada
                                aliquet libero viverra cursus. </p>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"single-features-ads\">
                            <img src=\"{{ asset('client/img/icons/chat.png') }}\" alt=\"\">
                            <h4>Online support 24/7</h4>
                            <p>Urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal esuada
                                aliquet libero viverra cursus. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features Box -->
        <div class=\"features-box\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"single-box-item first-box\">
                                    <img src=\"{{ asset('client/img/f-box-1.jpg') }}\" alt=\"\">
                                    <div class=\"box-text\">
                                        <span class=\"trend-year\">2019 Party</span>
                                        <h2>Jewelry</h2>
                                        <span class=\"trend-alert\">Trend Allert</span>
                                        <a href=\"{{ path('produit_afficheProduitsClient') }}\" class=\"primary-btn\">See More</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"single-box-item second-box\">
                                    <img src=\"{{ asset('client/img/f-box-2.jpg') }}\" alt=\"\">
                                    <div class=\"box-text\">
                                        <span class=\"trend-year\">2019 Trend</span>
                                        <h2>Footwear</h2>
                                        <span class=\"trend-alert\">Bold & Black</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"single-box-item large-box\">
                            <img src=\"{{ asset('client/img/f-box-3.png') }}\" alt=\"\">
                            <div class=\"box-text\">
                                <!-- <span class=\"trend-year\">2019 Party</span>
                                     <h2>Collection</h2>
                                     <div class=\"trend-alert\">Trend Allert</div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Section End -->


{% endblock %}", "@Produit/Default/clientViews/index.html.twig", "C:\\wamp64\\www\\bicycle\\src\\ProduitBundle\\Resources\\views\\Default\\clientViews\\index.html.twig");
    }
}
