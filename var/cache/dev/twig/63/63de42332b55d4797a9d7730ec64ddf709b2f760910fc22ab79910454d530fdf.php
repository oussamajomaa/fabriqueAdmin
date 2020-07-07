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

/* editor/apprenant/apprenant_liste.html.twig */
class __TwigTemplate_136772441951d83038ac847aea8d58406ad7d9bcd5dfff4688e77a968c74d219 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/apprenant/apprenant_liste.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/apprenant/apprenant_liste.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "editor/apprenant/apprenant_liste.html.twig", 1);
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

        echo "Ajouter une Apprenants";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 22
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22)) {
            // line 23
            echo "
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-3 mt-5\">

                ";
            // line 28
            $this->loadTemplate("editor/apprenant/_nav_apprenant.html.twig", "editor/apprenant/apprenant_liste.html.twig", 28)->display(twig_array_merge($context, ["p" => 1]));
            // line 29
            echo "
                <div class=\"my-5\">
                    <!-- flash messages -->
                    ";
            // line 32
            $this->loadTemplate("template_parts/_flash_message.html.twig", "editor/apprenant/apprenant_liste.html.twig", 32)->display($context);
            // line 33
            echo "
                    <h4 class=\"btn btn-info btn-sm\">Liste des apprenants</h4>

                    <!-- formulaire de recherche -->
                    <form action=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_apprenant_chercher");
            echo "\" class=\"  ml-auto w-50 bg-info\" style=\"position: relative;\">
                        <input class=\"float-right form-group mr-2 \" placeholder=\"chercher\" type=\"text\" name=\"chercher_apprenant\">
                        <button class=\" badge badge-primary mr-2\" style=\"position: absolute;right:0;cursor:pointer\" type=\"submit\"><i
                                class=\"fa fa-search \"></i></button>
                    </form>

                    <!-- lister toutes les promotion dans un tableau -->
                    <table class=\"table table-hover\">
                    
                        <thead>
                            <th>Nom</th>
                            <th>Git compte</th>
                            <th>Email</th>
                            <th>Avatar</th>
                            <th style=\"width: 15%;\">Actions</th>
                        </thead>
                        <tbody>

                            ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["apprenants"]) || array_key_exists("apprenants", $context) ? $context["apprenants"] : (function () { throw new RuntimeError('Variable "apprenants" does not exist.', 55, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["apprenant"]) {
                // line 56
                echo "                            <tr>
                                <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 57), "Fullname", [], "any", false, false, false, 57), "html", null, true);
                echo "</td>
                                <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 58), "Git", [], "any", false, false, false, 58), "html", null, true);
                echo "</td>
                                <td>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 59), "Email", [], "any", false, false, false, 59), "html", null, true);
                echo "</td>
                                <td><img src=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/brochures/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 60), "Avatar", [], "any", false, false, false, 60), "html", null, true);
                echo "\" alt=\"\" class=\"avatar-sd\"></td>
                    
                                <!-- dans la dernère cellule, il trois liens: suuprimer, modifier et visualiser -->
                                <td>
                                    <!-- visualiser un apprenant -->
                                    <a class=\"btn btn-info btn-sm modif_promotion my-1\" title=\"visualiser\" 
                                        href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_apprenant_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66)]), "html", null, true);
                echo "\"><i class=\"fa fa-eye\"></i></a>
                                        
                                    <!-- modifier un apprenant -->
                                    <a class=\"btn btn-success btn-sm modif_promotion my-1\" title=\"modifier\"
                                        href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_edit_apprenant", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 70), "id", [], "any", false, false, false, 70)]), "html", null, true);
                echo "\"><i class=\"far fa-edit\"></i></a>
                                    

                                    <!-- supprimer un apprenant qui va afficher d'abord un message de confirmation -->
                                    <a class=\"btn btn-danger btn-sm delete-record my-1\" title=\"supprimer\" href=\"#\"><i
                                        class=\"fas fa-trash-alt delete-promotion\"></i></a>

                                     <!-- div qui contient le message de confirmation afin de supprimer un apprenant -->
                                    <div class=\"delete-confirm border bg-light  m-auto rounded p-3\"
                                        style=\"position: absolute;top:40%;left:30%\">
                                        <div>
                                            <h4>Vous êtes sûr de vouloir supprimer?</h4>
                                        </div>
                                        <div>
                                            <a class=\"btn btn-success non\" href=\"\">Non</a>
                                            <a class=\"btn btn-danger \" href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_apprenant_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 85), "id", [], "any", false, false, false, 85)]), "html", null, true);
                echo "\">Oui</a>
                    
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['apprenant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "
                        </tbody>
                    </table>

                    <a class=\"btn btn-primary btn-sm\" title=\"ajouter\" href=\"";
            // line 96
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_apprenant_new");
            echo "\"><i
                            class=\"fas fa-plus-square\"></i></a>
                            
                    <!-- pagination -->
                    ";
            // line 100
            if (0 === twig_compare((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 100, $this->source); })()), 0)) {
                // line 101
                echo "                        ";
                $context["pages"] = 1;
                // line 102
                echo "                    ";
            }
            // line 103
            echo "                    <nav class=\"\">
                        <ul class=\"pagination pagination-sm justify-content-center\">
                            <li class=\"page-item ";
            // line 105
            if (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 105, $this->source); })()), 1)) {
                echo "disabled";
            }
            echo "\">
                                <a class=\"page-link\" href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_apprenant_liste", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 106, $this->source); })()) - 1)]), "html", null, true);
            echo "\" tabindex=\"-1\">&laquo;</a>
                            </li>
                            ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 108, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "                               
                                <li class=\"page-item ";
                // line 109
                if (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 109, $this->source); })()), $context["i"])) {
                    echo "active";
                }
                echo "\">
                                    <a class=\"page-link\" href=\"";
                // line 110
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_apprenant_liste", ["page" => $context["i"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo " <span class=\"sr-only\">(current)</span></a>
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_apprenant_liste", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 115, $this->source); })()) + 1)]), "html", null, true);
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
        return "editor/apprenant/apprenant_liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 115,  296 => 114,  293 => 113,  282 => 110,  276 => 109,  270 => 108,  265 => 106,  259 => 105,  255 => 103,  252 => 102,  249 => 101,  247 => 100,  240 => 96,  234 => 92,  221 => 85,  203 => 70,  196 => 66,  186 => 60,  182 => 59,  178 => 58,  174 => 57,  171 => 56,  167 => 55,  146 => 37,  140 => 33,  138 => 32,  133 => 29,  131 => 28,  124 => 23,  122 => 22,  112 => 21,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter une Apprenants{% endblock %}

{% block stylesheets %}

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

{% endblock %}

{% block body %}
{% if app.user %}

    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-3 mt-5\">

                {% include \"editor/apprenant/_nav_apprenant.html.twig\" with {\"p\": 1} %}

                <div class=\"my-5\">
                    <!-- flash messages -->
                    {% include \"template_parts/_flash_message.html.twig\" %}

                    <h4 class=\"btn btn-info btn-sm\">Liste des apprenants</h4>

                    <!-- formulaire de recherche -->
                    <form action=\"{{ path('editor_apprenant_chercher')}}\" class=\"  ml-auto w-50 bg-info\" style=\"position: relative;\">
                        <input class=\"float-right form-group mr-2 \" placeholder=\"chercher\" type=\"text\" name=\"chercher_apprenant\">
                        <button class=\" badge badge-primary mr-2\" style=\"position: absolute;right:0;cursor:pointer\" type=\"submit\"><i
                                class=\"fa fa-search \"></i></button>
                    </form>

                    <!-- lister toutes les promotion dans un tableau -->
                    <table class=\"table table-hover\">
                    
                        <thead>
                            <th>Nom</th>
                            <th>Git compte</th>
                            <th>Email</th>
                            <th>Avatar</th>
                            <th style=\"width: 15%;\">Actions</th>
                        </thead>
                        <tbody>

                            {% for apprenant in apprenants %}
                            <tr>
                                <td>{{ apprenant.apprenant.Fullname }}</td>
                                <td>{{ apprenant.apprenant.Git }}</td>
                                <td>{{ apprenant.apprenant.Email }}</td>
                                <td><img src=\"{{ asset('uploads/brochures/') }}{{ apprenant.apprenant.Avatar }}\" alt=\"\" class=\"avatar-sd\"></td>
                    
                                <!-- dans la dernère cellule, il trois liens: suuprimer, modifier et visualiser -->
                                <td>
                                    <!-- visualiser un apprenant -->
                                    <a class=\"btn btn-info btn-sm modif_promotion my-1\" title=\"visualiser\" 
                                        href=\"{{ path('editor_apprenant_show',{'id':apprenant.apprenant.id}) }}\"><i class=\"fa fa-eye\"></i></a>
                                        
                                    <!-- modifier un apprenant -->
                                    <a class=\"btn btn-success btn-sm modif_promotion my-1\" title=\"modifier\"
                                        href=\"{{ path('editor_edit_apprenant',{'id':apprenant.apprenant.id}) }}\"><i class=\"far fa-edit\"></i></a>
                                    

                                    <!-- supprimer un apprenant qui va afficher d'abord un message de confirmation -->
                                    <a class=\"btn btn-danger btn-sm delete-record my-1\" title=\"supprimer\" href=\"#\"><i
                                        class=\"fas fa-trash-alt delete-promotion\"></i></a>

                                     <!-- div qui contient le message de confirmation afin de supprimer un apprenant -->
                                    <div class=\"delete-confirm border bg-light  m-auto rounded p-3\"
                                        style=\"position: absolute;top:40%;left:30%\">
                                        <div>
                                            <h4>Vous êtes sûr de vouloir supprimer?</h4>
                                        </div>
                                        <div>
                                            <a class=\"btn btn-success non\" href=\"\">Non</a>
                                            <a class=\"btn btn-danger \" href=\"{{ path('editor_apprenant_delete',{'id':apprenant.apprenant.id}) }}\">Oui</a>
                    
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            {% endfor %}

                        </tbody>
                    </table>

                    <a class=\"btn btn-primary btn-sm\" title=\"ajouter\" href=\"{{ path('editor_apprenant_new') }}\"><i
                            class=\"fas fa-plus-square\"></i></a>
                            
                    <!-- pagination -->
                    {% if pages == 0 %}
                        {% set pages = 1 %}
                    {% endif %}
                    <nav class=\"\">
                        <ul class=\"pagination pagination-sm justify-content-center\">
                            <li class=\"page-item {% if page == 1 %}disabled{%  endif %}\">
                                <a class=\"page-link\" href=\"{{ path('editor_apprenant_liste',{'page':page - 1}) }}\" tabindex=\"-1\">&laquo;</a>
                            </li>
                            {% for i in 1..pages %}                               
                                <li class=\"page-item {% if page == i %}active{% endif %}\">
                                    <a class=\"page-link\" href=\"{{ path('editor_apprenant_liste',{'page':i}) }}\">{{i}} <span class=\"sr-only\">(current)</span></a>
                                </li>
                            {% endfor %}

                            <li class=\"page-item {% if page == pages %}disabled{%  endif %}\">
                                <a class=\"page-link\" href=\"{{ path('editor_apprenant_liste',{'page':page + 1}) }}\">&raquo;</a>
                            </li>
                        </ul>
                    </nav>


                </div>

            </div>
        </div>
    </div>
{% endif %}
{% endblock %}", "editor/apprenant/apprenant_liste.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/apprenant/apprenant_liste.html.twig");
    }
}
