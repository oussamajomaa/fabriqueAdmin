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

/* reserve/promotion_show.html.twig */
class __TwigTemplate_bd13377549e7fa35e47aaed84fc7b1d183533ff27487e34d130968d1dac72365 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reserve/promotion_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reserve/promotion_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reserve/promotion_show.html.twig", 1);
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
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-5 mt-5\">

            ";
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
                        <dt class=\"col-md-2\">Date de début</dt>
                        <dd class=\"col-md-4\">";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 25, $this->source); })()), "dateDebut", [], "any", false, false, false, 25), "m/d/Y"), "html", null, true);
            echo "</dd>
                        <dt class=\"col-md-2\">Date de fin</dt>
                        <dd class=\"col-md-4\">";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 27, $this->source); })()), "dateFin", [], "any", false, false, false, 27), "m/d/Y"), "html", null, true);
            echo "</dd>
                        <dt class=\"col-md-2\">Formation</dt>
                        <dd class=\"col-md-4\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 29, $this->source); })()), "formation", [], "any", false, false, false, 29), "intitule", [], "any", false, false, false, 29), "html", null, true);
            echo "</dd>
                    </dl>
                </div>

                ";
            // line 34
            echo "                <table class=\"table \">

                    <thead>
                        <th style=\"width: 5%;\">N°</th>
                        <th scope=\"col\" style=\"width: 25%;\">Nom et Prénom</th>
                        <th scope=\"col\" style=\"width: 20%;\">Email</th>
                        <th scope=\"col\" style=\"width: 20%;\">Git compte</th>
                        <th scope=\"col\" style=\"width: 15%;\">Avatar</th>
                        <th scope=\"col\" style=\"width: 15%;\">Actions</th>
                    </thead>
                    <tbody>

                        ";
            // line 46
            $context["i"] = 0;
            // line 47
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["apprenants"]) || array_key_exists("apprenants", $context) ? $context["apprenants"] : (function () { throw new RuntimeError('Variable "apprenants" does not exist.', 47, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["apprenant"]) {
                // line 48
                echo "                        ";
                $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 48, $this->source); })()) + 1);
                // line 49
                echo "                        <tr>
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
                            <td><img class=\"avatar-sd\" src=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/brochures/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 54), "avatar", [], "any", false, false, false, 54), "html", null, true);
                echo "\" alt=\"\"></td>

                            <!-- un lien pour afficher un apprenant-->
                            <td><a class=\"btn btn-info btn-sm modif_promotion\" title=\"visualiser\"
                                    href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reserve_apprenant_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58)]), "html", null, true);
                echo "\"><i
                                        class=\"fa fa-eye\"></i></a>

                            </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['apprenant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                    </tbody>
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
        return "reserve/promotion_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 64,  182 => 58,  174 => 54,  170 => 53,  166 => 52,  162 => 51,  158 => 50,  155 => 49,  152 => 48,  147 => 47,  145 => 46,  131 => 34,  124 => 29,  119 => 27,  114 => 25,  109 => 23,  97 => 13,  90 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Afficher une promotion{% endblock %}

{% block body %}
{% if app.user %}

<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-5 mt-5\">

            {# {% include \"editor/promotion/_nav_promotion.html.twig\" with {'p':1} %} #}

            <div class=\"my-5\">

                <h4 class=\"btn btn-info \">Afficher une Promotion </h4>

                <!-- afficher une seule promotion -->

                <div class=\"col my-5\">
                    <dl class=\"row\">
                        <dt class=\"col-md-2\">Année</dt>
                        <dd class=\"col-md-4\">{{ promotion.annee }}</dd>
                        <dt class=\"col-md-2\">Date de début</dt>
                        <dd class=\"col-md-4\">{{ promotion.dateDebut|date(\"m/d/Y\") }}</dd>
                        <dt class=\"col-md-2\">Date de fin</dt>
                        <dd class=\"col-md-4\">{{ promotion.dateFin|date(\"m/d/Y\") }}</dd>
                        <dt class=\"col-md-2\">Formation</dt>
                        <dd class=\"col-md-4\">{{ promotion.formation.intitule }}</dd>
                    </dl>
                </div>

                {# liste des apprenants appartenant à une promotion #}
                <table class=\"table \">

                    <thead>
                        <th style=\"width: 5%;\">N°</th>
                        <th scope=\"col\" style=\"width: 25%;\">Nom et Prénom</th>
                        <th scope=\"col\" style=\"width: 20%;\">Email</th>
                        <th scope=\"col\" style=\"width: 20%;\">Git compte</th>
                        <th scope=\"col\" style=\"width: 15%;\">Avatar</th>
                        <th scope=\"col\" style=\"width: 15%;\">Actions</th>
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
                            <td><img class=\"avatar-sd\" src=\"{{ asset('uploads/brochures/') }}{{apprenant.apprenant.avatar}}\" alt=\"\"></td>

                            <!-- un lien pour afficher un apprenant-->
                            <td><a class=\"btn btn-info btn-sm modif_promotion\" title=\"visualiser\"
                                    href=\"{{ path('reserve_apprenant_show',{'id':apprenant.apprenant.id}) }}\"><i
                                        class=\"fa fa-eye\"></i></a>

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
{% endblock %}", "reserve/promotion_show.html.twig", "/var/www/html/FabriqueAdmin/templates/reserve/promotion_show.html.twig");
    }
}
