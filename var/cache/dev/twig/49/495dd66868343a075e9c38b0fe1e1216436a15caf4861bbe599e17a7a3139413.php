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

/* editor/retard_absence/absence.html.twig */
class __TwigTemplate_e53e4e7dd2b941ca988fbdbe6d35684f9789b4b290b64e3b1cc5659f0984acaf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/retard_absence/absence.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/retard_absence/absence.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "editor/retard_absence/absence.html.twig", 1);
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

        echo "Liste des absences";
        
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
</style>
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-3 mt-5\">

            ";
            // line 26
            $this->loadTemplate("editor/apprenant/_nav_apprenant.html.twig", "editor/retard_absence/absence.html.twig", 26)->display(twig_array_merge($context, ["p" => 3]));
            // line 27
            echo "
            <div class=\"my-5\">
                <!-- flash messages -->
                ";
            // line 30
            $this->loadTemplate("template_parts/_flash_message.html.twig", "editor/retard_absence/absence.html.twig", 30)->display($context);
            // line 31
            echo "
                <h4 class=\"btn btn-info btn-sm\">Liste des absences</h4>
                <!-- formulaire de recherche -->
                <form action=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_absence_chercher");
            echo "\" class=\"  ml-auto w-50 bg-info\" style=\"position: relative;\">
                    <input class=\"float-right form-group mr-2 \" placeholder=\"chercher\" type=\"text\"
                        name=\"chercher_absence\">
                    <button class=\" badge badge-primary mr-2\" style=\"position: absolute;right:0;cursor:pointer\"
                        type=\"submit\"><i class=\"fa fa-search \"></i></button>
                </form>

                <table class=\"table table-hover\">

                    <thead>

                        <th scope=\"col\">Date de début</th>
                        <th scope=\"col\">date de fin</th>
                        <th scope=\"col\">Justifié</th>
                        <th scope=\"col\">Apprenant</th>
                        <th scope=\"col\">Promotion</th>

                        <th style=\"width: 15%;\">Actions</th>
                    </thead>
                    <tbody>
                        ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["absences"]) || array_key_exists("absences", $context) ? $context["absences"] : (function () { throw new RuntimeError('Variable "absences" does not exist.', 54, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["absence"]) {
                // line 55
                echo "                        <tr>
                            <td>";
                // line 56
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "dateDebut", [], "any", false, false, false, 56), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "datefin", [], "any", false, false, false, 57), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "justifie", [], "any", false, false, false, 58), "html", null, true);
                echo "</td>
                            <td>";
                // line 59
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["absence"], "promoappre", [], "any", false, false, false, 59), "apprenant", [], "any", false, false, false, 59), "fullname", [], "any", false, false, false, 59)), "html", null, true);
                echo "</td>
                            <td>";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["absence"], "promoappre", [], "any", false, false, false, 60), "promotion", [], "any", false, false, false, 60), "annee", [], "any", false, false, false, 60), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["absence"], "promoappre", [], "any", false, false, false, 60), "promotion", [], "any", false, false, false, 60), "formation", [], "any", false, false, false, 60), "intitule", [], "any", false, false, false, 60), "html", null, true);
                echo "</td>
                        
                        
                        
                        
                            <!-- dans la dernère cellule, il y a trois liens: supprimer, modifier et visualiser -->
                            <td>
                                <!-- modifier un apprenant -->
                                <a class=\"btn btn-success btn-sm modif_promotion\" title=\"modifier\"
                                    href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_absence_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["absence"], "id", [], "any", false, false, false, 69)]), "html", null, true);
                echo "\"><i class=\"far fa-edit\"></i></a>
                                    
                                <!-- supprimer un apprenant qui va afficher d'abord un message de confirmation -->
                                <a class=\"btn btn-danger btn-sm delete-record\" title=\"supprimer\" href=\"#\"><i
                                        class=\"fas fa-trash-alt delete-promotion\"></i></a>
                        
                        
                        
                        
                                <!-- div qui contient le message de confirmation afin de supprimer un apprenant -->
                                <div class=\"delete-confirm border bg-light  m-auto rounded p-3\" style=\"position: absolute;top:40%;left:30%\">
                                    <div>
                                        <h4>Vous êtes sûr de vouloir supprimer?</h4>
                                    </div>
                                    <div>
                                        <a class=\"btn btn-success non\" href=\"\">Non</a>
                                        <a class=\"btn btn-danger \" href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_absence_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["absence"], "id", [], "any", false, false, false, 85)]), "html", null, true);
                echo "\">Oui</a>
                        
                                    </div>
                                </div>
                            </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['absence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "
                    </tbody>
                </table>
                <a class=\"btn btn-primary btn-sm\" title=\"ajouter\" href=\"";
            // line 95
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_absence_new");
            echo "\"><i
                        class=\"fas fa-plus-square\"></i></a>

                <!-- pagination -->
                ";
            // line 99
            if (0 === twig_compare((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 99, $this->source); })()), 0)) {
                // line 100
                echo "                ";
                $context["pages"] = 1;
                // line 101
                echo "                ";
            }
            // line 102
            echo "                <nav class=\"\">
                    <ul class=\"pagination pagination-sm justify-content-center\">
                        <li class=\"page-item ";
            // line 104
            if (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 104, $this->source); })()), 1)) {
                echo "disabled";
            }
            echo "\">
                            <a class=\"page-link\" href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_absence", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 105, $this->source); })()) - 1)]), "html", null, true);
            echo "\" tabindex=\"-1\">&laquo;</a>
                        </li>
                        ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 107, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 108
                echo "                        <li class=\"page-item ";
                if (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 108, $this->source); })()), $context["i"])) {
                    echo "active";
                }
                echo "\">
                            <a class=\"page-link\" href=\"";
                // line 109
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_absence", ["page" => $context["i"]]), "html", null, true);
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
            // line 113
            echo "                
                        <li class=\"page-item ";
            // line 114
            if (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 114, $this->source); })()), (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 114, $this->source); })()))) {
                echo "disabled";
            }
            echo "\">
                            <a class=\"page-link\" href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_absence", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 115, $this->source); })()) + 1)]), "html", null, true);
            echo "\">&raquo;</a>
                        </li>
                    </ul>
                </nav>

            </div>
            ";
            // line 122
            echo "
        </div>
    </div>
</div>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "editor/retard_absence/absence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 122,  284 => 115,  278 => 114,  275 => 113,  263 => 109,  256 => 108,  252 => 107,  247 => 105,  241 => 104,  237 => 102,  234 => 101,  231 => 100,  229 => 99,  222 => 95,  217 => 92,  204 => 85,  185 => 69,  171 => 60,  167 => 59,  163 => 58,  159 => 57,  155 => 56,  152 => 55,  148 => 54,  125 => 34,  120 => 31,  118 => 30,  113 => 27,  111 => 26,  90 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des absences{% endblock %}

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
</style>
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-3 mt-5\">

            {% include \"editor/apprenant/_nav_apprenant.html.twig\" with {\"p\": 3} %}

            <div class=\"my-5\">
                <!-- flash messages -->
                {% include \"template_parts/_flash_message.html.twig\" %}

                <h4 class=\"btn btn-info btn-sm\">Liste des absences</h4>
                <!-- formulaire de recherche -->
                <form action=\"{{ path('editor_absence_chercher') }}\" class=\"  ml-auto w-50 bg-info\" style=\"position: relative;\">
                    <input class=\"float-right form-group mr-2 \" placeholder=\"chercher\" type=\"text\"
                        name=\"chercher_absence\">
                    <button class=\" badge badge-primary mr-2\" style=\"position: absolute;right:0;cursor:pointer\"
                        type=\"submit\"><i class=\"fa fa-search \"></i></button>
                </form>

                <table class=\"table table-hover\">

                    <thead>

                        <th scope=\"col\">Date de début</th>
                        <th scope=\"col\">date de fin</th>
                        <th scope=\"col\">Justifié</th>
                        <th scope=\"col\">Apprenant</th>
                        <th scope=\"col\">Promotion</th>

                        <th style=\"width: 15%;\">Actions</th>
                    </thead>
                    <tbody>
                        {% for absence in absences %}
                        <tr>
                            <td>{{ absence.dateDebut|date(\"d/m/Y\") }}</td>
                            <td>{{ absence.datefin|date(\"d/m/Y\") }}</td>
                            <td>{{ absence.justifie }}</td>
                            <td>{{ absence.promoappre.apprenant.fullname|upper }}</td>
                            <td>{{ absence.promoappre.promotion.annee }}-{{ absence.promoappre.promotion.formation.intitule }}</td>
                        
                        
                        
                        
                            <!-- dans la dernère cellule, il y a trois liens: supprimer, modifier et visualiser -->
                            <td>
                                <!-- modifier un apprenant -->
                                <a class=\"btn btn-success btn-sm modif_promotion\" title=\"modifier\"
                                    href=\"{{ path('editor_absence_edit',{'id':absence.id}) }}\"><i class=\"far fa-edit\"></i></a>
                                    
                                <!-- supprimer un apprenant qui va afficher d'abord un message de confirmation -->
                                <a class=\"btn btn-danger btn-sm delete-record\" title=\"supprimer\" href=\"#\"><i
                                        class=\"fas fa-trash-alt delete-promotion\"></i></a>
                        
                        
                        
                        
                                <!-- div qui contient le message de confirmation afin de supprimer un apprenant -->
                                <div class=\"delete-confirm border bg-light  m-auto rounded p-3\" style=\"position: absolute;top:40%;left:30%\">
                                    <div>
                                        <h4>Vous êtes sûr de vouloir supprimer?</h4>
                                    </div>
                                    <div>
                                        <a class=\"btn btn-success non\" href=\"\">Non</a>
                                        <a class=\"btn btn-danger \" href=\"{{ path('editor_absence_delete',{'id':absence.id}) }}\">Oui</a>
                        
                                    </div>
                                </div>
                            </td>
                        </tr>
                        {% endfor %}

                    </tbody>
                </table>
                <a class=\"btn btn-primary btn-sm\" title=\"ajouter\" href=\"{{ path('editor_absence_new') }}\"><i
                        class=\"fas fa-plus-square\"></i></a>

                <!-- pagination -->
                {% if pages == 0 %}
                {% set pages = 1 %}
                {% endif %}
                <nav class=\"\">
                    <ul class=\"pagination pagination-sm justify-content-center\">
                        <li class=\"page-item {% if page == 1 %}disabled{%  endif %}\">
                            <a class=\"page-link\" href=\"{{ path('editor_absence',{'page':page - 1}) }}\" tabindex=\"-1\">&laquo;</a>
                        </li>
                        {% for i in 1..pages %}
                        <li class=\"page-item {% if page == i %}active{% endif %}\">
                            <a class=\"page-link\" href=\"{{ path('editor_absence',{'page':i}) }}\">{{i}} <span
                                    class=\"sr-only\">(current)</span></a>
                        </li>
                        {% endfor %}
                
                        <li class=\"page-item {% if page == pages %}disabled{%  endif %}\">
                            <a class=\"page-link\" href=\"{{ path('editor_absence',{'page':page + 1}) }}\">&raquo;</a>
                        </li>
                    </ul>
                </nav>

            </div>
            {# end body #}

        </div>
    </div>
</div>
{% endif %}
{% endblock %}

", "editor/retard_absence/absence.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/retard_absence/absence.html.twig");
    }
}
