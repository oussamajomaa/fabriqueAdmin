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

/* editor/promotion/promo_show.html.twig */
class __TwigTemplate_7df31318133c6e35c1c17b0fff12c6122b2b26b9c5ff4b9d8e5a13dee7ddb5e5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/promotion/promo_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/promotion/promo_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "editor/promotion/promo_show.html.twig", 1);
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

        echo "Afficher une promotion";
        
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
    <div class=\"container-fluid\" >
        <div class=\"row\">
            <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-5 mt-5\">

                ";
            // line 12
            $this->loadTemplate("editor/promotion/_nav_promotion.html.twig", "editor/promotion/promo_show.html.twig", 12)->display(twig_array_merge($context, ["p" => 1]));
            // line 13
            echo "
                <div class=\"my-5\">
                   
                    <h4 class=\"btn btn-info \">Afficher une Promotion </h4>

                    <!-- afficher une seule promotion -->

                    <div class=\"col my-5\">
                        <dl class=\"row\">
                            <dt class=\"col-md-2\">Année</dt>
                            <dd class=\"col-md-4\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 23, $this->source); })()), "annee", [], "any", false, false, false, 23), "html", null, true);
            echo "</dd>
                            <dt class=\"col-md-2\">Formation</dt>
                            <dd class=\"col-md-4\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 25, $this->source); })()), "formation", [], "any", false, false, false, 25), "intitule", [], "any", false, false, false, 25), "html", null, true);
            echo "</dd>
                            <dt class=\"col-md-2\">Date de début</dt>
                            <dd class=\"col-md-4\">";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 27, $this->source); })()), "dateDebut", [], "any", false, false, false, 27), "d/m/Y"), "html", null, true);
            echo "</dd>
                            <dt class=\"col-md-2\">Date de fin</dt>
                            <dd class=\"col-md-4\">";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 29, $this->source); })()), "dateFin", [], "any", false, false, false, 29), "d/m/Y"), "html", null, true);
            echo "</dd>
                        </dl>
                    </div>

                    ";
            // line 34
            echo "                    <table class=\"table \">
                     
                        <thead>
                            <th scope=\"col\" style=\"width: 10%;\">N°</th>
                            <th scope=\"col\" style=\"width: 18%;\">Nom et Prénom</th>
                            <th scope=\"col\" style=\"width: 18%;\">Email</th>
                            <th scope=\"col\" style=\"width: 18%;\">Git compte</th>
                            <th scope=\"col\" style=\"width: 18%;\">Avatar</th>
                            <th scope=\"col\" style=\"width: 18%;\">Actions</th>
                        </thead>
                        <tbody>
                        
                            ";
            // line 46
            $context["i"] = 0;
            // line 47
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["apprenants"]) || array_key_exists("apprenants", $context) ? $context["apprenants"] : (function () { throw new RuntimeError('Variable "apprenants" does not exist.', 47, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["apprenant"]) {
                // line 48
                echo "                            ";
                $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 48, $this->source); })()) + 1);
                // line 49
                echo "                            <tr>
                                <td>";
                // line 50
                echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 50, $this->source); })()), "html", null, true);
                echo "</td>
                                <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 51), "FullName", [], "any", false, false, false, 51), "html", null, true);
                echo "</td>
                                <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 52), "email", [], "any", false, false, false, 52), "html", null, true);
                echo "</td>
                                <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 53), "git", [], "any", false, false, false, 53), "html", null, true);
                echo "</td>
                                <td><img src=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/brochures/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 54), "avatar", [], "any", false, false, false, 54), "html", null, true);
                echo "\" alt=\"\" class=\"avatar-sd\"></td>
                            
                                <!-- un lien pour afficher un apprenant-->
                                <td><a class=\"btn btn-info btn-sm modif_promotion\" title=\"visualiser\"
                                        href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_pro_apprenant_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58)]), "html", null, true);
                echo "\"><i class=\"fa fa-eye\"></i></a>

                                    ";
                // line 60
                if (1 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 60, $this->source); })()), "dateFin", [], "any", false, false, false, 60), "Y/m/d"), twig_date_format_filter($this->env, "now", "Y/m/d"))) {
                    // line 61
                    echo "                                    

                                    <a class=\"btn btn-danger btn-sm delete-record my-1\" title=\"retirer\" href=\"#\"><i
                                            class=\"fas fa-trash-alt delete-promotion\"></i></a>
                                    ";
                }
                // line 66
                echo "                                    ";
                // line 67
                echo "                                    <div class=\"delete-confirm border bg-light  m-auto rounded p-3\" style=\"position: absolute;top:40%;left:30%\">
                                        <div>
                                            <h4>Vous êtes sûr de vouloir supprimer?</h4>
                                        </div>
                                        <div>
                                            <a class=\"btn btn-success non\" href=\"\">Non</a>
                                            <a class=\"btn btn-danger \" href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_retirer_apprenant", ["id" => twig_get_attribute($this->env, $this->source, $context["apprenant"], "id", [], "any", false, false, false, 73)]), "html", null, true);
                echo "\">Oui</a>
                                    
                                        </div>
                                    </div>
                                    ";
                // line 78
                echo "                                </td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['apprenant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                        </tbody>   
                    </table>
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
        return "editor/promotion/promo_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 81,  215 => 78,  208 => 73,  200 => 67,  198 => 66,  191 => 61,  189 => 60,  184 => 58,  176 => 54,  172 => 53,  168 => 52,  164 => 51,  160 => 50,  157 => 49,  154 => 48,  149 => 47,  147 => 46,  133 => 34,  126 => 29,  121 => 27,  116 => 25,  111 => 23,  99 => 13,  97 => 12,  90 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Afficher une promotion{% endblock %}

{% block body %}
{% if app.user %}

    <div class=\"container-fluid\" >
        <div class=\"row\">
            <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-5 mt-5\">

                {% include \"editor/promotion/_nav_promotion.html.twig\" with {'p':1} %}

                <div class=\"my-5\">
                   
                    <h4 class=\"btn btn-info \">Afficher une Promotion </h4>

                    <!-- afficher une seule promotion -->

                    <div class=\"col my-5\">
                        <dl class=\"row\">
                            <dt class=\"col-md-2\">Année</dt>
                            <dd class=\"col-md-4\">{{ promotion.annee }}</dd>
                            <dt class=\"col-md-2\">Formation</dt>
                            <dd class=\"col-md-4\">{{ promotion.formation.intitule }}</dd>
                            <dt class=\"col-md-2\">Date de début</dt>
                            <dd class=\"col-md-4\">{{ promotion.dateDebut|date(\"d/m/Y\") }}</dd>
                            <dt class=\"col-md-2\">Date de fin</dt>
                            <dd class=\"col-md-4\">{{ promotion.dateFin|date(\"d/m/Y\") }}</dd>
                        </dl>
                    </div>

                    {# liste des apprenants appartenant à une promotion #}
                    <table class=\"table \">
                     
                        <thead>
                            <th scope=\"col\" style=\"width: 10%;\">N°</th>
                            <th scope=\"col\" style=\"width: 18%;\">Nom et Prénom</th>
                            <th scope=\"col\" style=\"width: 18%;\">Email</th>
                            <th scope=\"col\" style=\"width: 18%;\">Git compte</th>
                            <th scope=\"col\" style=\"width: 18%;\">Avatar</th>
                            <th scope=\"col\" style=\"width: 18%;\">Actions</th>
                        </thead>
                        <tbody>
                        
                            {% set i = 0 %}
                            {% for apprenant in apprenants %}
                            {% set i = i + 1 %}
                            <tr>
                                <td>{{i}}</td>
                                <td>{{ apprenant.apprenant.FullName }}</td>
                                <td>{{ apprenant.apprenant.email }}</td>
                                <td>{{ apprenant.apprenant.git }}</td>
                                <td><img src=\"{{ asset('uploads/brochures/') }}{{ apprenant.apprenant.avatar }}\" alt=\"\" class=\"avatar-sd\"></td>
                            
                                <!-- un lien pour afficher un apprenant-->
                                <td><a class=\"btn btn-info btn-sm modif_promotion\" title=\"visualiser\"
                                        href=\"{{ path('editor_pro_apprenant_show',{'id':apprenant.apprenant.id}) }}\"><i class=\"fa fa-eye\"></i></a>

                                    {% if promotion.dateFin|date(\"Y/m/d\")>'now'|date(\"Y/m/d\") %}
                                    

                                    <a class=\"btn btn-danger btn-sm delete-record my-1\" title=\"retirer\" href=\"#\"><i
                                            class=\"fas fa-trash-alt delete-promotion\"></i></a>
                                    {% endif %}
                                    {# delete confirmation #}
                                    <div class=\"delete-confirm border bg-light  m-auto rounded p-3\" style=\"position: absolute;top:40%;left:30%\">
                                        <div>
                                            <h4>Vous êtes sûr de vouloir supprimer?</h4>
                                        </div>
                                        <div>
                                            <a class=\"btn btn-success non\" href=\"\">Non</a>
                                            <a class=\"btn btn-danger \" href=\"{{ path('editor_retirer_apprenant',{'id':apprenant.id}) }}\">Oui</a>
                                    
                                        </div>
                                    </div>
                                    {# end delete confirmation #}
                                </td>
                            </tr>
                            {% endfor %}
                        </tbody>   
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endif %}
{% endblock %}

", "editor/promotion/promo_show.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/promotion/promo_show.html.twig");
    }
}
