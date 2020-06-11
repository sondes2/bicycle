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

/* @Produit/Default/clientViews/afficheProduitsClient.html.twig */
class __TwigTemplate_7f06bbf7517d27535bd5af0832c9a6e8131445b76c8b60e6e81d37836832fe50 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Produit/Default/clientViews/afficheProduitsClient.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Produit/Default/clientViews/afficheProduitsClient.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "@Produit/Default/clientViews/afficheProduitsClient.html.twig", 1);
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
        echo "  <div class=\"container\">
      <div class=\"input-group custom-search-form \" style=\"width: 50% ;margin: 20px 20%;\">
          <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search Bike\" style=\"border: 3px solid black\" >
      </div>
     <div class=\"row\" id=\"ListVelo\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 9
            echo "        <div class=\"col-lg-3 col-sm-6 \" id=\"divglobale\">
            <div class=\"single-product-item\">
                <figure>
                    <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_detailsProduitClient", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 12)]), "html", null, true);
            echo "\" ><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("produit/uploads/images/" . twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 12))), "html", null, true);
            echo "\" alt=\"\"></a>
                    <div class=\"p-status\">new</div>
                </figure>
                <div class=\"product-text\">
                    <h6>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "libelle", [], "any", false, false, false, 16), "html", null, true);
            echo "</h6>
                    <p>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 17), "html", null, true);
            echo " TND</p>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "     </div>
      ";
        // line 24
        echo "      <div class=\"navigation\">
          ";
        // line 25
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 25, $this->source); })()));
        echo "
      </div>
  </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 31
        echo "    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            var searchRequest = null;
            \$(\"#search\").keyup(function() {
                var minlength = 0;
                var that = this;
                var value = \$(this).val();
                var entitySelector = \$(\"#ListVelo\").html('');
                if (value.length >= minlength ) {
                    if (searchRequest != null)
                        searchRequest.abort();
                    searchRequest = \$.ajax({
                        type: \"GET\",
                        url: \"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_searchAjax");
        echo "\",
                        data: {
                            'q' : value
                        },
                        dataType: \"text\",
                        success: function(msg){
                            //we need to check if the value is the same
                            if (value===\$(that).val()) {
                                var result = JSON.parse(msg);
                                \$.each(result, function(key, arr) {
                                    \$.each(arr, function(id, value) {
                                        if (key === 'velos') {
                                            if (id !== 'error') {
                                                entitySelector.append('' +
                                                    ' <div class=\"col-lg-3 col-sm-6 \" id=\"divglobale\"> ' +
                                                    '<div class=\"single-product-item\">' +
                                                    '<figure>' +
                                                    '<a href=\"/esprit/bicycle/web/app_dev.php/client/detailsProduit/'+value[0]+'\" >' +
                                                    '<img src=\"/esprit/bicycle/web/produit/uploads/images/'+value[1]+'\" alt=\"\">' +
                                                    '</a>' +
                                                    '<div class=\"p-status\">new</div>' +
                                                    '</figure>' +
                                                    '<div class=\"product-text\">' +
                                                    '<h6>'+value[2]+'</h6>' +
                                                    '<p>'+value[3]+' TND</p>' +
                                                    '</div>' +
                                                    '</div>' +
                                                    '</div>');
                                            } else {
                                                \$(\".navigation\").html('');
                                                entitySelector.append('<h1>'+value+'</h1>');
                                            }
                                        }
                                    });
                                });
                            }
                        }
                    });
                }

            });
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Produit/Default/clientViews/afficheProduitsClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 45,  140 => 31,  130 => 30,  115 => 25,  112 => 24,  109 => 22,  98 => 17,  94 => 16,  85 => 12,  80 => 9,  76 => 8,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}
{% block main %}
  <div class=\"container\">
      <div class=\"input-group custom-search-form \" style=\"width: 50% ;margin: 20px 20%;\">
          <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search Bike\" style=\"border: 3px solid black\" >
      </div>
     <div class=\"row\" id=\"ListVelo\">
        {% for produit in produits %}
        <div class=\"col-lg-3 col-sm-6 \" id=\"divglobale\">
            <div class=\"single-product-item\">
                <figure>
                    <a href=\"{{ path('produit_detailsProduitClient',{'id':produit.id}) }}\" ><img src=\"{{ asset('produit/uploads/images/' ~ produit.image ) }}\" alt=\"\"></a>
                    <div class=\"p-status\">new</div>
                </figure>
                <div class=\"product-text\">
                    <h6>{{produit.libelle}}</h6>
                    <p>{{produit.prix}} TND</p>
                </div>
            </div>
        </div>
        {% endfor %}
     </div>
      {# display navigation #}
      <div class=\"navigation\">
          {{ knp_pagination_render(produits) }}
      </div>
  </div>

{% endblock %}
{% block javascripts %}
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            var searchRequest = null;
            \$(\"#search\").keyup(function() {
                var minlength = 0;
                var that = this;
                var value = \$(this).val();
                var entitySelector = \$(\"#ListVelo\").html('');
                if (value.length >= minlength ) {
                    if (searchRequest != null)
                        searchRequest.abort();
                    searchRequest = \$.ajax({
                        type: \"GET\",
                        url: \"{{ path('produit_searchAjax') }}\",
                        data: {
                            'q' : value
                        },
                        dataType: \"text\",
                        success: function(msg){
                            //we need to check if the value is the same
                            if (value===\$(that).val()) {
                                var result = JSON.parse(msg);
                                \$.each(result, function(key, arr) {
                                    \$.each(arr, function(id, value) {
                                        if (key === 'velos') {
                                            if (id !== 'error') {
                                                entitySelector.append('' +
                                                    ' <div class=\"col-lg-3 col-sm-6 \" id=\"divglobale\"> ' +
                                                    '<div class=\"single-product-item\">' +
                                                    '<figure>' +
                                                    '<a href=\"/esprit/bicycle/web/app_dev.php/client/detailsProduit/'+value[0]+'\" >' +
                                                    '<img src=\"/esprit/bicycle/web/produit/uploads/images/'+value[1]+'\" alt=\"\">' +
                                                    '</a>' +
                                                    '<div class=\"p-status\">new</div>' +
                                                    '</figure>' +
                                                    '<div class=\"product-text\">' +
                                                    '<h6>'+value[2]+'</h6>' +
                                                    '<p>'+value[3]+' TND</p>' +
                                                    '</div>' +
                                                    '</div>' +
                                                    '</div>');
                                            } else {
                                                \$(\".navigation\").html('');
                                                entitySelector.append('<h1>'+value+'</h1>');
                                            }
                                        }
                                    });
                                });
                            }
                        }
                    });
                }

            });
        });
    </script>

{% endblock %}
{#
var obj = jQuery.parseJSON(msg);
console.log(obj.velos);

if (obj.velos == \"0\") {
\$(\"#ListVelo\").html(\"non trouve\");
}
else {

\$.each(obj, function (key,value) {
for (i=0;i<key.length;i++){
\$(\"#ListVelo\").append(
'        <div class=\"col-lg-3 col-sm-6 \" id=\"divglobale\">\\n' +
    '            <div class=\"single-product-item\">\\n' +
        '                <figure>'+
            '<a href=\"/detailsProduit/\"'+value[i][0]+' >' +
            ' <img src=\"/esprit/gestiondesproduits/web/produit/uploads/images/'
                                            +value[i][1]+'\" alt=\"\">' +
            '</a>'+
            ' <div class=\"p-status\">new</div>\\n' +
            '                </figure>'+
        ' <div class=\"product-text\">\\n' +
            '                    <h6>'+value[i][2]+'</h6>\\n' +
            '                    <p>'+value[i][3]+' TND</p>\\n' +
            '                </div>'+
        '            </div>\\n' +
    '        </div>'
)
//              alert(value[i][1]);
#}", "@Produit/Default/clientViews/afficheProduitsClient.html.twig", "C:\\wamp64\\www\\bicycle\\src\\ProduitBundle\\Resources\\views\\Default\\clientViews\\afficheProduitsClient.html.twig");
    }
}
