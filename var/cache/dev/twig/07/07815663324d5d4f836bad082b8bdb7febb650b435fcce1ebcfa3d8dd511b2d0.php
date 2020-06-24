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

/* editor/formation/formation_liste.html.twig */
class __TwigTemplate_a4168597e3abbf03507922316e73171cf8a1b2cdc98a91205771242633c9d071 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/formation/formation_liste.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/formation/formation_liste.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "editor/formation/formation_liste.html.twig", 1);
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

        echo "Gestion des Formations";
        
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
";
            // line 22
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22)) {
                // line 23
                echo "
";
                // line 25
                echo "<div class=\"container-fluid \">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto my-5\">

            ";
                // line 30
                echo "
            
            ";
                // line 32
                $this->loadTemplate("editor/promotion/_nav_promotion.html.twig", "editor/formation/formation_liste.html.twig", 32)->display(twig_array_merge($context, ["p" => 2]));
                // line 33
                echo "            <div class=\"my-5\">

                ";
                // line 35
                $this->loadTemplate("template_parts/_flash_message.html.twig", "editor/formation/formation_liste.html.twig", 35)->display($context);
                // line 36
                echo "
                <h4 class=\"btn btn-info btn-sm\">Liste des Formations</h4>
                    <form action=\"\" class=\"  ml-auto w-50 bg-info\" style=\"position: relative;\">
                        <input class=\"float-right form-group mr-2 \" placeholder=\"chercher\" type=\"text\"
                            name=\"chercher_formation\">
                        <button class=\" badge badge-primary mr-2\" style=\"position: absolute;right:0;cursor:pointer\"
                            id=\"chercher_user\" type=\"submit\"><i class=\"fa fa-search \"></i></button>
                    </form>
                    <table class=\"table table-hover\">
                        <thead>
                            <th scope=\"col\" style=\"width: 15%;\">Intitulé</th>
                            <th scope=\"col\" style=\"width: 7%;\">Durée</th>
                            <th scope=\"col\">Heures</th>
                            <th scope=\"col\">Diplôme</th>
                            <th scope=\"col\">Modalites</th>
                            <th scope=\"col\" style=\"width: 15%;\">Actions</th>
                        </thead>
                        <tbody>
                        ";
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 54, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
                    // line 55
                    echo "                        <tr>
                            <td>";
                    // line 56
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "Intitule", [], "any", false, false, false, 56), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 57
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "Duree", [], "any", false, false, false, 57), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 58
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "NombreHeure", [], "any", false, false, false, 58), "html", null, true);
                    echo "h</td>
                            <td>";
                    // line 59
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "Diplome", [], "any", false, false, false, 59), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 60
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "Modalites", [], "any", false, false, false, 60), "html", null, true);
                    echo "</td>
                        
                            <td>
                                <a class=\"btn btn-danger btn-sm delete-record  my-1\" title=\"supprimer\" href=\"#\"><i
                                        class=\"fas fa-trash-alt delete-promotion\"></i></a>
                                <a class=\"btn btn-success btn-sm modif_promotion my-1\" title=\"modifier\"
                                    href=\"";
                    // line 66
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_edit_formation", ["id" => twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 66)]), "html", null, true);
                    echo "\"><i class=\"far fa-edit\"></i></a>
                                <div class=\"delete-confirm border bg-light  m-auto rounded p-3\" style=\"position: absolute;top:40%;left:30%\">
                                    <div>
                                        <h4>Vous êtes sûr de vouloir supprimer?</h4>
                                    </div>
                                    <div>
                                        <a class=\"btn btn-success non\" href=\"\">Non</a>
                                        <a class=\"btn btn-danger\" href=\"";
                    // line 73
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_delete_formation", ["id" => twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 73)]), "html", null, true);
                    echo "\">Oui</a>
                        
                                    </div>
                                </div>
                            </td>
                        </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "                            
                        </tbody>
                    </table>
                    <a class=\"btn btn-primary btn-sm\" title=\"ajouter\" 
                        href=\"";
                // line 84
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_formation_new");
                echo "\"><i class=\"fas fa-plus-square\"></i></a>

                    <!-- pagination -->
                    ";
                // line 87
                if (0 === twig_compare((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 87, $this->source); })()), 0)) {
                    // line 88
                    echo "                        ";
                    $context["pages"] = 1;
                    // line 89
                    echo "                    ";
                }
                // line 90
                echo "                    <nav class=\"\">
                        <ul class=\"pagination pagination-sm justify-content-center\">
                            <li class=\"page-item ";
                // line 92
                if (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 92, $this->source); })()), 1)) {
                    echo "disabled";
                }
                echo "\">
                                <a class=\"page-link\" href=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_formation", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 93, $this->source); })()) - 1)]), "html", null, true);
                echo "\" tabindex=\"-1\">&laquo;</a>
                            </li>
                            ";
                // line 95
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 95, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 96
                    echo "                            <li class=\"page-item ";
                    if (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 96, $this->source); })()), $context["i"])) {
                        echo "active";
                    }
                    echo "\">
                                <a class=\"page-link\" href=\"";
                    // line 97
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_formation", ["page" => $context["i"]]), "html", null, true);
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
                // line 101
                echo "                    
                            <li class=\"page-item ";
                // line 102
                if (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 102, $this->source); })()), (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 102, $this->source); })()))) {
                    echo "disabled";
                }
                echo "\">
                                <a class=\"page-link\" href=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_formation", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 103, $this->source); })()) + 1)]), "html", null, true);
                echo "\">&raquo;</a>
                            </li>
                        </ul>
                    </nav>
            </div>

                
           
            ";
                // line 112
                echo "
        </div>
    </div>
</div>
";
            }
            // line 117
            echo "

";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 122
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 123
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "editor/formation/formation_liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 123,  304 => 122,  291 => 117,  284 => 112,  273 => 103,  267 => 102,  264 => 101,  252 => 97,  245 => 96,  241 => 95,  236 => 93,  230 => 92,  226 => 90,  223 => 89,  220 => 88,  218 => 87,  212 => 84,  206 => 80,  193 => 73,  183 => 66,  174 => 60,  170 => 59,  166 => 58,  162 => 57,  158 => 56,  155 => 55,  151 => 54,  131 => 36,  129 => 35,  125 => 33,  123 => 32,  119 => 30,  113 => 25,  110 => 23,  108 => 22,  91 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Formations{% endblock %}

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
{% if app.user %}

{# structure de la page 10 colonnes de largeur et alignée à droite #}
<div class=\"container-fluid \">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto my-5\">

            {# page body #}

            
            {% include \"editor/promotion/_nav_promotion.html.twig\" with {'p':2} %}
            <div class=\"my-5\">

                {% include \"template_parts/_flash_message.html.twig\" %}

                <h4 class=\"btn btn-info btn-sm\">Liste des Formations</h4>
                    <form action=\"\" class=\"  ml-auto w-50 bg-info\" style=\"position: relative;\">
                        <input class=\"float-right form-group mr-2 \" placeholder=\"chercher\" type=\"text\"
                            name=\"chercher_formation\">
                        <button class=\" badge badge-primary mr-2\" style=\"position: absolute;right:0;cursor:pointer\"
                            id=\"chercher_user\" type=\"submit\"><i class=\"fa fa-search \"></i></button>
                    </form>
                    <table class=\"table table-hover\">
                        <thead>
                            <th scope=\"col\" style=\"width: 15%;\">Intitulé</th>
                            <th scope=\"col\" style=\"width: 7%;\">Durée</th>
                            <th scope=\"col\">Heures</th>
                            <th scope=\"col\">Diplôme</th>
                            <th scope=\"col\">Modalites</th>
                            <th scope=\"col\" style=\"width: 15%;\">Actions</th>
                        </thead>
                        <tbody>
                        {% for formation in formations %}
                        <tr>
                            <td>{{ formation.Intitule }}</td>
                            <td>{{ formation.Duree }}</td>
                            <td>{{ formation.NombreHeure }}h</td>
                            <td>{{ formation.Diplome }}</td>
                            <td>{{ formation.Modalites }}</td>
                        
                            <td>
                                <a class=\"btn btn-danger btn-sm delete-record  my-1\" title=\"supprimer\" href=\"#\"><i
                                        class=\"fas fa-trash-alt delete-promotion\"></i></a>
                                <a class=\"btn btn-success btn-sm modif_promotion my-1\" title=\"modifier\"
                                    href=\"{{ path('editor_edit_formation',{'id':formation.id}) }}\"><i class=\"far fa-edit\"></i></a>
                                <div class=\"delete-confirm border bg-light  m-auto rounded p-3\" style=\"position: absolute;top:40%;left:30%\">
                                    <div>
                                        <h4>Vous êtes sûr de vouloir supprimer?</h4>
                                    </div>
                                    <div>
                                        <a class=\"btn btn-success non\" href=\"\">Non</a>
                                        <a class=\"btn btn-danger\" href=\"{{ path('editor_delete_formation',{'id':formation.id}) }}\">Oui</a>
                        
                                    </div>
                                </div>
                            </td>
                        </tr>
                        {% endfor %}
                            
                        </tbody>
                    </table>
                    <a class=\"btn btn-primary btn-sm\" title=\"ajouter\" 
                        href=\"{{ path('editor_formation_new') }}\"><i class=\"fas fa-plus-square\"></i></a>

                    <!-- pagination -->
                    {% if pages == 0 %}
                        {% set pages = 1 %}
                    {% endif %}
                    <nav class=\"\">
                        <ul class=\"pagination pagination-sm justify-content-center\">
                            <li class=\"page-item {% if page == 1 %}disabled{%  endif %}\">
                                <a class=\"page-link\" href=\"{{ path('editor_formation',{'page':page - 1}) }}\" tabindex=\"-1\">&laquo;</a>
                            </li>
                            {% for i in 1..pages %}
                            <li class=\"page-item {% if page == i %}active{% endif %}\">
                                <a class=\"page-link\" href=\"{{ path('editor_formation',{'page':i}) }}\">{{i}} <span
                                        class=\"sr-only\">(current)</span></a>
                            </li>
                            {% endfor %}
                    
                            <li class=\"page-item {% if page == pages %}disabled{%  endif %}\">
                                <a class=\"page-link\" href=\"{{ path('editor_formation',{'page':page + 1}) }}\">&raquo;</a>
                            </li>
                        </ul>
                    </nav>
            </div>

                
           
            {# end body #}

        </div>
    </div>
</div>
{% endif %}


{% endif %}
{% endblock %}

{% block javascripts %}


{% endblock %}", "editor/formation/formation_liste.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/formation/formation_liste.html.twig");
    }
}
