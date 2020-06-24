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

/* reserve/promotion.html.twig */
class __TwigTemplate_21699f55e1dfbef2ebecca1ca326b463cbe7e5a207ce0221a088c9711883c011 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reserve/promotion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reserve/promotion.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reserve/promotion.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Consulter des Promotions";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6)) {
            // line 7
            echo "

<style>
    input {
        outline: none;
        border: none;
        border-bottom: 1px solid #777;
    }

    form input:focus {
        border-color: blue;


    }

    .hid {
        display: none;
    }

    table {
        width: 100%;
    }
</style>


<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-5 mt-5\">

            ";
            // line 37
            echo "
            ";
            // line 39
            echo "            <div class=\"my-5\">


                ";
            // line 42
            $this->loadTemplate("template_parts/_flash_message.html.twig", "reserve/promotion.html.twig", 42)->display($context);
            // line 43
            echo "
                <h4 class=\"btn btn-info btn-sm\">Liste des Promotions</h4>

                ";
            // line 47
            echo "                <form action=\"\" class=\"  ml-auto w-50 bg-info\" style=\"position: relative;\">
                    <input class=\"float-right form-group mr-2 \" placeholder=\"chercher\" type=\"text\"
                        name=\"chercher_promotion\">
                    <button class=\" badge badge-primary mr-2\" style=\"position: absolute;right:0;cursor:pointer\"
                        id=\"chercher_user\" type=\"submit\"><i class=\"fa fa-search \"></i></button>
                </form>

                ";
            // line 55
            echo "                ";
            // line 56
            echo "                <table class=\"table rounded table-hover\">

                    <thead class=\"\">
                        <tr>
                            <th scope=\"col\" style=\"width: 10%;\">Année</th>
                            <th scope=\"col\" style=\"width: 10%;\">Début</th>
                            <th scope=\"col\" style=\"width: 10%;\">Fin</th>
                            <th scope=\"col\" style=\"width: 45%;\">Formation</th>
                            <th colspan=\"2\" scope=\"col\" style=\"width: 15%;\">Actions </th>

                        </tr>
                    </thead>
                    ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 68, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                // line 69
                echo "

                    <tbody>


                        <tr class=\"\">
                            <td>";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "annee", [], "any", false, false, false, 75), "html", null, true);
                echo "</td>
                            <td>";
                // line 76
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "dateDebut", [], "any", false, false, false, 76), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 77
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "dateFin", [], "any", false, false, false, 77), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["promotion"], "formation", [], "any", false, false, false, 78), "intitule", [], "any", false, false, false, 78), "html", null, true);
                echo "</td>

                            <td>
                                ";
                // line 82
                echo "
                                <a class=\"btn btn-info btn-sm my-1\" title=\"visualiser\"
                                    href=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reserve_show_promotion", ["id" => twig_get_attribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 84)]), "html", null, true);
                echo "\"><i
                                        class=\"fa fa-eye\"></i></a>

                                



                                
                            </td>
                            ";
                // line 94
                echo "
                        </tr>



                    </tbody>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "
                </table>
               
                <!-- pagination -->
                ";
            // line 105
            if (0 === twig_compare((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 105, $this->source); })()), 0)) {
                // line 106
                echo "                ";
                $context["pages"] = 1;
                // line 107
                echo "                ";
            }
            // line 108
            echo "                <nav class=\"\">
                    <ul class=\"pagination pagination-sm justify-content-center\">
                        <li class=\"page-item ";
            // line 110
            if (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 110, $this->source); })()), 1)) {
                echo "disabled";
            }
            echo "\">
                            <a class=\"page-link\" href=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reserve_promotion", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 111, $this->source); })()) - 1)]), "html", null, true);
            echo "\"
                                tabindex=\"-1\">&laquo;</a>
                        </li>
                        ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 114, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 115
                echo "                        <li class=\"page-item ";
                if (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 115, $this->source); })()), $context["i"])) {
                    echo "active";
                }
                echo "\">
                            <a class=\"page-link\" href=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reserve_promotion", ["page" => $context["i"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo " <span
                                    class=\"sr-only\">(current)</span></a>
                        </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "
                        <li class=\"page-item ";
            // line 121
            if (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 121, $this->source); })()), (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 121, $this->source); })()))) {
                echo "disabled";
            }
            echo "\">
                            <a class=\"page-link\" href=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reserve_promotion", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 122, $this->source); })()) + 1)]), "html", null, true);
            echo "\">&raquo;</a>
                        </li>
                    </ul>
                </nav>


            </div>

        </div>
    </div>
</div>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 137
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 138
        echo "




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reserve/promotion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 138,  305 => 137,  282 => 122,  276 => 121,  273 => 120,  261 => 116,  254 => 115,  250 => 114,  244 => 111,  238 => 110,  234 => 108,  231 => 107,  228 => 106,  226 => 105,  220 => 101,  208 => 94,  196 => 84,  192 => 82,  186 => 78,  182 => 77,  178 => 76,  174 => 75,  166 => 69,  162 => 68,  148 => 56,  146 => 55,  137 => 47,  132 => 43,  130 => 42,  125 => 39,  122 => 37,  91 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Consulter des Promotions{% endblock %}

{% block body %}
{% if app.user %}


<style>
    input {
        outline: none;
        border: none;
        border-bottom: 1px solid #777;
    }

    form input:focus {
        border-color: blue;


    }

    .hid {
        display: none;
    }

    table {
        width: 100%;
    }
</style>


<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-5 mt-5\">

            {# {% include \"editor/promotion/_nav_promotion.html.twig\" with {'p':1} %} #}

            {# pour afficher le flash message #}
            <div class=\"my-5\">


                {% include \"template_parts/_flash_message.html.twig\" %}

                <h4 class=\"btn btn-info btn-sm\">Liste des Promotions</h4>

                {# formulaire de recherche #}
                <form action=\"\" class=\"  ml-auto w-50 bg-info\" style=\"position: relative;\">
                    <input class=\"float-right form-group mr-2 \" placeholder=\"chercher\" type=\"text\"
                        name=\"chercher_promotion\">
                    <button class=\" badge badge-primary mr-2\" style=\"position: absolute;right:0;cursor:pointer\"
                        id=\"chercher_user\" type=\"submit\"><i class=\"fa fa-search \"></i></button>
                </form>

                {# parcourir la table des promotions #}
                {# استعراض كامل جدول البروموسييون #}
                <table class=\"table rounded table-hover\">

                    <thead class=\"\">
                        <tr>
                            <th scope=\"col\" style=\"width: 10%;\">Année</th>
                            <th scope=\"col\" style=\"width: 10%;\">Début</th>
                            <th scope=\"col\" style=\"width: 10%;\">Fin</th>
                            <th scope=\"col\" style=\"width: 45%;\">Formation</th>
                            <th colspan=\"2\" scope=\"col\" style=\"width: 15%;\">Actions </th>

                        </tr>
                    </thead>
                    {% for promotion in promotions %}


                    <tbody>


                        <tr class=\"\">
                            <td>{{ promotion.annee }}</td>
                            <td>{{ promotion.dateDebut|date(\"d/m/Y\") }}</td>
                            <td>{{ promotion.dateFin|date(\"d/m/Y\") }}</td>
                            <td>{{ promotion.formation.intitule }}</td>

                            <td>
                                {# 3link to delete or edit or show #}

                                <a class=\"btn btn-info btn-sm my-1\" title=\"visualiser\"
                                    href=\"{{ path('reserve_show_promotion',{'id':promotion.id}) }}\"><i
                                        class=\"fa fa-eye\"></i></a>

                                



                                
                            </td>
                            {# <td class=\"show-liste\" style=\"cursor: pointer;\" title=\"afficher les apprenants\"><i class=\"fa fa-chevron-down icon\"></i></td> #}

                        </tr>



                    </tbody>
                    {% endfor %}

                </table>
               
                <!-- pagination -->
                {% if pages == 0 %}
                {% set pages = 1 %}
                {% endif %}
                <nav class=\"\">
                    <ul class=\"pagination pagination-sm justify-content-center\">
                        <li class=\"page-item {% if page == 1 %}disabled{%  endif %}\">
                            <a class=\"page-link\" href=\"{{ path('reserve_promotion',{'page':page - 1}) }}\"
                                tabindex=\"-1\">&laquo;</a>
                        </li>
                        {% for i in 1..pages %}
                        <li class=\"page-item {% if page == i %}active{% endif %}\">
                            <a class=\"page-link\" href=\"{{ path('reserve_promotion',{'page':i}) }}\">{{i}} <span
                                    class=\"sr-only\">(current)</span></a>
                        </li>
                        {% endfor %}

                        <li class=\"page-item {% if page == pages %}disabled{%  endif %}\">
                            <a class=\"page-link\" href=\"{{ path('reserve_promotion',{'page':page + 1}) }}\">&raquo;</a>
                        </li>
                    </ul>
                </nav>


            </div>

        </div>
    </div>
</div>
{% endif %}
{% endblock %}


{% block javascripts %}





{% endblock %}", "reserve/promotion.html.twig", "/var/www/html/FabriqueAdmin/templates/reserve/promotion.html.twig");
    }
}
