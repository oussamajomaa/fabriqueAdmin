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

/* editor/entreprise/entreprise_list.html.twig */
class __TwigTemplate_3eb223a65b3d562ae99fac7effa251f74af042b9c865373d5d16d21fe4df2188 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/entreprise/entreprise_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/entreprise/entreprise_list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "editor/entreprise/entreprise_list.html.twig", 1);
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

        echo "Gestion des Entreprises";
        
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
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-5 mt-5\">

            ";
            // line 12
            $this->loadTemplate("editor/entreprise/_nav_entreprise.html.twig", "editor/entreprise/entreprise_list.html.twig", 12)->display(twig_array_merge($context, ["p" => 1]));
            // line 13
            echo "
            ";
            // line 15
            echo "            <div class=\"my-5\">
            ";
            // line 16
            $this->loadTemplate("template_parts/_flash_message.html.twig", "editor/entreprise/entreprise_list.html.twig", 16)->display($context);
            // line 17
            echo "                

                <h4 class=\"btn btn-info btn-sm\">Liste des entreprises</h4>
                <table class=\"table table-hover\">
                    <thead>
                        <th scope=\"col\">Nom</th>
                        <th scope=\"col\">Adresse</th>
                        ";
            // line 25
            echo "                        <th scope=\"col\">Ville</th>
                        <th scope=\"col\">Tel</th>
                        <th scope=\"col\">Mobile</th>
                        <th scope=\"col\">Email</th>
                        <th scope=\"col\" style=\"width: 15%;\">Actions</th>
                    </thead>
                    <tbody>
                        
                        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entreprises"]) || array_key_exists("entreprises", $context) ? $context["entreprises"] : (function () { throw new RuntimeError('Variable "entreprises" does not exist.', 33, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["entreprise"]) {
                // line 34
                echo "                         <tr>
                            <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprise"], "Nom", [], "any", false, false, false, 35), "html", null, true);
                echo "</td>
                            <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprise"], "Adresse", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
                            ";
                // line 38
                echo "                            <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprise"], "Ville", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
                            <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprise"], "Tel", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
                            <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprise"], "Mobile", [], "any", false, false, false, 40), "html", null, true);
                echo "</td>
                            <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprise"], "Email", [], "any", false, false, false, 41), "html", null, true);
                echo "</td>
                
                            <td>
                                <a class=\"btn btn-success btn-sm modif_promotion\" title=\"modifier\"
                                href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_entreprise_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["entreprise"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                echo "\"><i class=\"far fa-edit\"></i></a>

                                <a class=\"btn btn-danger btn-sm delete-record\" title=\"supprimer\" href=\"#\"><i
                                        class=\"fas fa-trash-alt delete-promotion\"></i></a>

                                <div class=\"delete-confirm border bg-light  m-auto rounded p-3\"
                                    style=\"position: absolute;top:40%;left:30%\">
                                    <div>
                                        <h4>Vous êtes sûr de vouloir supprimer?</h4>
                                    </div>
                                    <div>
                                        <a class=\"btn btn-success non\" href=\"\">Non</a>
                                        <a class=\"btn btn-danger\"
                                            href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_entreprise_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["entreprise"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                echo "\">Oui</a>
                
                                    </div>
                                </div>
                            </td>
                        </tr> 
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entreprise'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                
                    </tbody>
                </table>
                 <a class=\"btn btn-primary btn-sm\" title=\"ajouter\" href=\"";
            // line 68
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_entreprise_new");
            echo "\"><i
                        class=\"fas fa-plus-square\"></i></a> 
                
                <!-- pagination -->
                ";
            // line 72
            if (0 === twig_compare((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 72, $this->source); })()), 0)) {
                // line 73
                echo "                ";
                $context["pages"] = 1;
                // line 74
                echo "                ";
            }
            // line 75
            echo "                <nav class=\"\">
                    <ul class=\"pagination pagination-sm justify-content-center\">
                        <li class=\"page-item ";
            // line 77
            if (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 77, $this->source); })()), 1)) {
                echo "disabled";
            }
            echo "\">
                            <a class=\"page-link\" href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_entreprise", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 78, $this->source); })()) - 1)]), "html", null, true);
            echo "\" tabindex=\"-1\">&laquo;</a>
                        </li>
                        ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 80, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 81
                echo "                        <li class=\"page-item ";
                if (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 81, $this->source); })()), $context["i"])) {
                    echo "active";
                }
                echo "\">
                            <a class=\"page-link\" href=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_entreprise", ["page" => $context["i"]]), "html", null, true);
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
            // line 86
            echo "                
                        <li class=\"page-item ";
            // line 87
            if (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 87, $this->source); })()), (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 87, $this->source); })()))) {
                echo "disabled";
            }
            echo "\">
                            <a class=\"page-link\" href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_entreprise", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 88, $this->source); })()) + 1)]), "html", null, true);
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

    public function getTemplateName()
    {
        return "editor/entreprise/entreprise_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 88,  251 => 87,  248 => 86,  236 => 82,  229 => 81,  225 => 80,  220 => 78,  214 => 77,  210 => 75,  207 => 74,  204 => 73,  202 => 72,  195 => 68,  190 => 65,  177 => 58,  161 => 45,  154 => 41,  150 => 40,  146 => 39,  141 => 38,  137 => 36,  133 => 35,  130 => 34,  126 => 33,  116 => 25,  107 => 17,  105 => 16,  102 => 15,  99 => 13,  97 => 12,  90 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Entreprises{% endblock %}

{% block body %}
{% if app.user %}

<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-5 mt-5\">

            {% include \"editor/entreprise/_nav_entreprise.html.twig\" with {'p':1} %}

            {# pour afficher le flash message #}
            <div class=\"my-5\">
            {% include \"template_parts/_flash_message.html.twig\" %}
                

                <h4 class=\"btn btn-info btn-sm\">Liste des entreprises</h4>
                <table class=\"table table-hover\">
                    <thead>
                        <th scope=\"col\">Nom</th>
                        <th scope=\"col\">Adresse</th>
                        {# <th scope=\"col\">Code postal</th> #}
                        <th scope=\"col\">Ville</th>
                        <th scope=\"col\">Tel</th>
                        <th scope=\"col\">Mobile</th>
                        <th scope=\"col\">Email</th>
                        <th scope=\"col\" style=\"width: 15%;\">Actions</th>
                    </thead>
                    <tbody>
                        
                        {% for entreprise in entreprises %}
                         <tr>
                            <td>{{ entreprise.Nom }}</td>
                            <td>{{ entreprise.Adresse }}</td>
                            {# <td>{{ entreprise.CodePostal }}</td> #}
                            <td>{{ entreprise.Ville }}</td>
                            <td>{{ entreprise.Tel }}</td>
                            <td>{{ entreprise.Mobile }}</td>
                            <td>{{ entreprise.Email }}</td>
                
                            <td>
                                <a class=\"btn btn-success btn-sm modif_promotion\" title=\"modifier\"
                                href=\"{{ path('editor_entreprise_edit',{'id':entreprise.id}) }}\"><i class=\"far fa-edit\"></i></a>

                                <a class=\"btn btn-danger btn-sm delete-record\" title=\"supprimer\" href=\"#\"><i
                                        class=\"fas fa-trash-alt delete-promotion\"></i></a>

                                <div class=\"delete-confirm border bg-light  m-auto rounded p-3\"
                                    style=\"position: absolute;top:40%;left:30%\">
                                    <div>
                                        <h4>Vous êtes sûr de vouloir supprimer?</h4>
                                    </div>
                                    <div>
                                        <a class=\"btn btn-success non\" href=\"\">Non</a>
                                        <a class=\"btn btn-danger\"
                                            href=\"{{ path('editor_entreprise_delete',{'id':entreprise.id}) }}\">Oui</a>
                
                                    </div>
                                </div>
                            </td>
                        </tr> 
                        {% endfor %}
                
                    </tbody>
                </table>
                 <a class=\"btn btn-primary btn-sm\" title=\"ajouter\" href=\"{{ path('editor_entreprise_new') }}\"><i
                        class=\"fas fa-plus-square\"></i></a> 
                
                <!-- pagination -->
                {% if pages == 0 %}
                {% set pages = 1 %}
                {% endif %}
                <nav class=\"\">
                    <ul class=\"pagination pagination-sm justify-content-center\">
                        <li class=\"page-item {% if page == 1 %}disabled{%  endif %}\">
                            <a class=\"page-link\" href=\"{{ path('editor_entreprise',{'page':page - 1}) }}\" tabindex=\"-1\">&laquo;</a>
                        </li>
                        {% for i in 1..pages %}
                        <li class=\"page-item {% if page == i %}active{% endif %}\">
                            <a class=\"page-link\" href=\"{{ path('editor_entreprise',{'page':i}) }}\">{{i}} <span
                                    class=\"sr-only\">(current)</span></a>
                        </li>
                        {% endfor %}
                
                        <li class=\"page-item {% if page == pages %}disabled{%  endif %}\">
                            <a class=\"page-link\" href=\"{{ path('editor_entreprise',{'page':page + 1}) }}\">&raquo;</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
{% endif %}
{% endblock %}", "editor/entreprise/entreprise_list.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/entreprise/entreprise_list.html.twig");
    }
}
