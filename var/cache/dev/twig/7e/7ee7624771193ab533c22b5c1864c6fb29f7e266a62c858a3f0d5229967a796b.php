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

/* editor/promotion/apprenant_show.html.twig */
class __TwigTemplate_93475ce79a46cdbfc12384108998dfb8326417fece716839f1cccf09fd20e625 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/promotion/apprenant_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/promotion/apprenant_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "editor/promotion/apprenant_show.html.twig", 1);
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

        echo "Ajouter une Promotion";
        
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
            <!-- insert promotion navbar -->
            ";
            // line 12
            $this->loadTemplate("editor/promotion/_nav_promotion.html.twig", "editor/promotion/apprenant_show.html.twig", 12)->display(twig_array_merge($context, ["p" => 1]));
            // line 13
            echo "
            <div class=\"my-5\">
                <!-- un tableau d'un seul apprenant -->
                <h4 class=\"btn btn-info btn-sm\">Fiche apprenant</h4>
                ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["all"]) || array_key_exists("all", $context) ? $context["all"] : (function () { throw new RuntimeError('Variable "all" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["apprenant"]) {
                // line 18
                echo "                <div class=\"row\">
                    <div class=\"col-md-4\">
            
                        <dl class=\"row\">
                            <dt class=\"col-md-4\"><img class=\"avatar\"
                                    src=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/brochures/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 23), "avatar", [], "any", false, false, false, 23), "html", null, true);
                echo "\" alt=\"\"></dt>
                            <dd class=\"col-md-8 pl-5\">";
                // line 24
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 24), "fullname", [], "any", false, false, false, 24)), "html", null, true);
                echo "</dd>
                        </dl>
                    </div>
                    <div class=\"col-md-8 \">
                        <dl class=\"row\">
                            <dt class=\"col-md-4\">Git compte</dt>
                            <dd class=\"col-md-8\">";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 30), "git", [], "any", false, false, false, 30), "html", null, true);
                echo "</dd>
                            <dt class=\"col-md-4\">Email</dt>
                            <dd class=\"col-md-8\">";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 32), "email", [], "any", false, false, false, 32), "html", null, true);
                echo "</dd>
                            <dt class=\"col-md-4\">Adresse</dt>
                            <dd class=\"col-md-8\">";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 34), "adresse", [], "any", false, false, false, 34), "html", null, true);
                echo "</dd>
                            <dt class=\"col-md-4\">Ville</dt>
                            <dd class=\"col-md-8\">";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 36), "ville", [], "any", false, false, false, 36), "html", null, true);
                echo "</dd>
                        </dl>
                    </div>
                </div>
            
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['apprenant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                <div>
            
                    <h6 class=\"show-liste btn-dark p-2\">Formations</h6>
                    <table class=\"table table-hover\">
            
                        <thead>
                            <th scope=\"col\">N°</th>
                            <th scope=\"col\">Annee</th>
                            <th scope=\"col\">Début</th>
                            <th scope=\"col\">Fin</th>
                            <th scope=\"col\">N° d'heures</th>
                            <th scope=\"col\">Intitulé</th>
            
            
                        </thead>
                        <tbody>
                            ";
            // line 58
            $context["i"] = 0;
            // line 59
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["all"]) || array_key_exists("all", $context) ? $context["all"] : (function () { throw new RuntimeError('Variable "all" does not exist.', 59, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                // line 60
                echo "                            ";
                $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 60, $this->source); })()) + 1);
                // line 61
                echo "            
                            <tr>
                                <td>";
                // line 63
                echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 63, $this->source); })()), "html", null, true);
                echo "</td>
                                <td>";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["promotion"], "promotion", [], "any", false, false, false, 64), "annee", [], "any", false, false, false, 64), "html", null, true);
                echo "</td>
                                <td>";
                // line 65
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["promotion"], "promotion", [], "any", false, false, false, 65), "dateDebut", [], "any", false, false, false, 65), "m/d/Y"), "html", null, true);
                echo "</td>
                                <td>";
                // line 66
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["promotion"], "promotion", [], "any", false, false, false, 66), "dateFin", [], "any", false, false, false, 66), "m/d/Y"), "html", null, true);
                echo "</td>
                                <td>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["promotion"], "promotion", [], "any", false, false, false, 67), "formation", [], "any", false, false, false, 67), "nombreHeure", [], "any", false, false, false, 67), "html", null, true);
                echo "</td>
                                <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["promotion"], "promotion", [], "any", false, false, false, 68), "formation", [], "any", false, false, false, 68), "intitule", [], "any", false, false, false, 68), "html", null, true);
                echo "</td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                        </tbody>
                    </table>
                    ";
            // line 74
            echo "                </div>
            
                <div>
                    ";
            // line 78
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["all"]) || array_key_exists("all", $context) ? $context["all"] : (function () { throw new RuntimeError('Variable "all" does not exist.', 78, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reseau"]) {
                // line 79
                echo "            
            
                    ";
                // line 81
                if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reseau"], "apprenant", [], "any", false, false, false, 81), "Reseaux", [], "any", false, false, false, 81)), 0)) {
                    // line 82
                    echo "                    <h6 class=\"show-liste btn-dark p-2\">Réseaux Sociaux</h6>
                    <table class=\"table table-hover\">
            
                        <thead>
                            <th scope=\"col\">N°</th>
                            <th scope=\"col\">Intitulé</th>
                            <th scope=\"col\">Lien</th>
                        </thead>
                        <tbody>
                            ";
                    // line 91
                    $context["i"] = 0;
                    // line 92
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reseau"], "apprenant", [], "any", false, false, false, 92), "Reseaux", [], "any", false, false, false, 92));
                    foreach ($context['_seq'] as $context["_key"] => $context["reseau"]) {
                        // line 93
                        echo "                            ";
                        $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 93, $this->source); })()) + 1);
                        // line 94
                        echo "                            <tr>
                                <td>";
                        // line 95
                        echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 95, $this->source); })()), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 96
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reseau"], "nom", [], "any", false, false, false, 96), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 97
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reseau"], "lien", [], "any", false, false, false, 97), "html", null, true);
                        echo "</td>
                            </tr>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reseau'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 100
                    echo "                        </tbody>
                    </table>
                    ";
                }
                // line 103
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reseau'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "                </div>
            
                <div>
                    ";
            // line 108
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["all"]) || array_key_exists("all", $context) ? $context["all"] : (function () { throw new RuntimeError('Variable "all" does not exist.', 108, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["retard"]) {
                // line 109
                echo "                    ";
                if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["retard"], "retards", [], "any", false, false, false, 109)), 0)) {
                    // line 110
                    echo "                    <h6 class=\"show-liste btn-dark p-2\">Retards</h6>
                    <table class=\"table table-hover\">
                        <thead>
                            <th scope=\"col\" style=\"width: 25%;\">N°</th>
                            <th scope=\"col\" style=\"width: 25%;\">Date</th>
                            <th scope=\"col\" style=\"width: 25%;\">N° d'heures</th>
                            <th scope=\"col\" style=\"width: 25%;\">Justifié</th>
                        </thead>
                        <tbody>
                            ";
                    // line 119
                    $context["i"] = 0;
                    // line 120
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["retard"], "retards", [], "any", false, false, false, 120));
                    foreach ($context['_seq'] as $context["_key"] => $context["retard"]) {
                        // line 121
                        echo "                            ";
                        $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 121, $this->source); })()) + 1);
                        // line 122
                        echo "                            <tr>
                                <td>";
                        // line 123
                        echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 123, $this->source); })()), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 124
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["retard"], "date", [], "any", false, false, false, 124), "d/m/y"), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 125
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["retard"], "nombreheure", [], "any", false, false, false, 125), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 126
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["retard"], "justifie", [], "any", false, false, false, 126), "html", null, true);
                        echo "</td>
            
                            </tr>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['retard'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 130
                    echo "                        </tbody>
                    </table>
                    ";
                }
                // line 133
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['retard'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "                </div>
            
                <div>
                    ";
            // line 138
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["all"]) || array_key_exists("all", $context) ? $context["all"] : (function () { throw new RuntimeError('Variable "all" does not exist.', 138, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["absence"]) {
                // line 139
                echo "                    ";
                if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "absences", [], "any", false, false, false, 139)), 0)) {
                    // line 140
                    echo "                    <h6 class=\"show-liste btn-dark p-2\">Absences</h6>
                    <table class=\"table table-hover\">
                        <thead>
                            <th scope=\"col\" style=\"width: 25%;\">N°</th>
                            <th scope=\"col\" style=\"width: 25%;\">Date de début</th>
                            <th scope=\"col\" style=\"width: 25%;\">Date de fin</th>
                            <th scope=\"col\" style=\"width: 25%;\">Justifié</th>
                        </thead>
                        <tbody>
                            ";
                    // line 149
                    $context["i"] = 0;
                    // line 150
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["absence"], "absences", [], "any", false, false, false, 150));
                    foreach ($context['_seq'] as $context["_key"] => $context["absence"]) {
                        // line 151
                        echo "                            ";
                        $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 151, $this->source); })()) + 1);
                        // line 152
                        echo "                            <tr>
                                <td>";
                        // line 153
                        echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 153, $this->source); })()), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 154
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "dateDebut", [], "any", false, false, false, 154), "d/m/y"), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 155
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "datefin", [], "any", false, false, false, 155), "d/m/y"), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 156
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "justifie", [], "any", false, false, false, 156), "html", null, true);
                        echo "</td>
                            </tr>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['absence'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 159
                    echo "                        </tbody>
                    </table>
                    ";
                }
                // line 162
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['absence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "            
                </div>
            
                <div>
                    <h6 class=\"show-liste btn-dark p-2\">Fiche Profil</h6>
                </div>
            </div>
        </div>
    </div>
</div>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 176
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 177
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "editor/promotion/apprenant_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  461 => 177,  451 => 176,  430 => 163,  424 => 162,  419 => 159,  410 => 156,  406 => 155,  402 => 154,  398 => 153,  395 => 152,  392 => 151,  387 => 150,  385 => 149,  374 => 140,  371 => 139,  366 => 138,  361 => 134,  355 => 133,  350 => 130,  340 => 126,  336 => 125,  332 => 124,  328 => 123,  325 => 122,  322 => 121,  317 => 120,  315 => 119,  304 => 110,  301 => 109,  296 => 108,  291 => 104,  285 => 103,  280 => 100,  271 => 97,  267 => 96,  263 => 95,  260 => 94,  257 => 93,  252 => 92,  250 => 91,  239 => 82,  237 => 81,  233 => 79,  228 => 78,  223 => 74,  219 => 71,  210 => 68,  206 => 67,  202 => 66,  198 => 65,  194 => 64,  190 => 63,  186 => 61,  183 => 60,  178 => 59,  176 => 58,  158 => 42,  146 => 36,  141 => 34,  136 => 32,  131 => 30,  122 => 24,  117 => 23,  110 => 18,  106 => 17,  100 => 13,  98 => 12,  91 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter une Promotion{% endblock %}

{% block body %}
{% if app.user %}

<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-5 mt-5\">
            <!-- insert promotion navbar -->
            {% include \"editor/promotion/_nav_promotion.html.twig\" with {'p':1} %}

            <div class=\"my-5\">
                <!-- un tableau d'un seul apprenant -->
                <h4 class=\"btn btn-info btn-sm\">Fiche apprenant</h4>
                {% for apprenant in all %}
                <div class=\"row\">
                    <div class=\"col-md-4\">
            
                        <dl class=\"row\">
                            <dt class=\"col-md-4\"><img class=\"avatar\"
                                    src=\"{{ asset('uploads/brochures/') }}{{apprenant.apprenant.avatar}}\" alt=\"\"></dt>
                            <dd class=\"col-md-8 pl-5\">{{apprenant.apprenant.fullname|upper}}</dd>
                        </dl>
                    </div>
                    <div class=\"col-md-8 \">
                        <dl class=\"row\">
                            <dt class=\"col-md-4\">Git compte</dt>
                            <dd class=\"col-md-8\">{{ apprenant.apprenant.git }}</dd>
                            <dt class=\"col-md-4\">Email</dt>
                            <dd class=\"col-md-8\">{{ apprenant.apprenant.email }}</dd>
                            <dt class=\"col-md-4\">Adresse</dt>
                            <dd class=\"col-md-8\">{{ apprenant.apprenant.adresse }}</dd>
                            <dt class=\"col-md-4\">Ville</dt>
                            <dd class=\"col-md-8\">{{ apprenant.apprenant.ville }}</dd>
                        </dl>
                    </div>
                </div>
            
                {% endfor %}
                <div>
            
                    <h6 class=\"show-liste btn-dark p-2\">Formations</h6>
                    <table class=\"table table-hover\">
            
                        <thead>
                            <th scope=\"col\">N°</th>
                            <th scope=\"col\">Annee</th>
                            <th scope=\"col\">Début</th>
                            <th scope=\"col\">Fin</th>
                            <th scope=\"col\">N° d'heures</th>
                            <th scope=\"col\">Intitulé</th>
            
            
                        </thead>
                        <tbody>
                            {% set i = 0 %}
                            {% for promotion in all %}
                            {% set i = i + 1 %}
            
                            <tr>
                                <td>{{i}}</td>
                                <td>{{ promotion.promotion.annee }}</td>
                                <td>{{ promotion.promotion.dateDebut|date(\"m/d/Y\") }}</td>
                                <td>{{ promotion.promotion.dateFin|date(\"m/d/Y\") }}</td>
                                <td>{{ promotion.promotion.formation.nombreHeure }}</td>
                                <td>{{ promotion.promotion.formation.intitule }}</td>
                            </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                    {# {% endif %} #}
                </div>
            
                <div>
                    {# si l'apprenant a des réseux sociaux #}
                    {% for reseau in all %}
            
            
                    {% if reseau.apprenant.Reseaux|length > 0 %}
                    <h6 class=\"show-liste btn-dark p-2\">Réseaux Sociaux</h6>
                    <table class=\"table table-hover\">
            
                        <thead>
                            <th scope=\"col\">N°</th>
                            <th scope=\"col\">Intitulé</th>
                            <th scope=\"col\">Lien</th>
                        </thead>
                        <tbody>
                            {% set i = 0 %}
                            {% for reseau in reseau.apprenant.Reseaux %}
                            {% set i = i + 1 %}
                            <tr>
                                <td>{{i}}</td>
                                <td>{{reseau.nom}}</td>
                                <td>{{reseau.lien}}</td>
                            </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                    {% endif %}
                    {% endfor %}
                </div>
            
                <div>
                    {# si l'apprenant a des retards #}
                    {% for retard in all %}
                    {% if retard.retards|length > 0 %}
                    <h6 class=\"show-liste btn-dark p-2\">Retards</h6>
                    <table class=\"table table-hover\">
                        <thead>
                            <th scope=\"col\" style=\"width: 25%;\">N°</th>
                            <th scope=\"col\" style=\"width: 25%;\">Date</th>
                            <th scope=\"col\" style=\"width: 25%;\">N° d'heures</th>
                            <th scope=\"col\" style=\"width: 25%;\">Justifié</th>
                        </thead>
                        <tbody>
                            {% set i = 0 %}
                            {% for retard in retard.retards %}
                            {% set i = i + 1 %}
                            <tr>
                                <td>{{i}}</td>
                                <td>{{retard.date|date('d/m/y')}}</td>
                                <td>{{retard.nombreheure}}</td>
                                <td>{{retard.justifie}}</td>
            
                            </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                    {% endif %}
                    {% endfor %}
                </div>
            
                <div>
                    {# si l'apprenant a des absences #}
                    {% for absence in all %}
                    {% if absence.absences|length > 0 %}
                    <h6 class=\"show-liste btn-dark p-2\">Absences</h6>
                    <table class=\"table table-hover\">
                        <thead>
                            <th scope=\"col\" style=\"width: 25%;\">N°</th>
                            <th scope=\"col\" style=\"width: 25%;\">Date de début</th>
                            <th scope=\"col\" style=\"width: 25%;\">Date de fin</th>
                            <th scope=\"col\" style=\"width: 25%;\">Justifié</th>
                        </thead>
                        <tbody>
                            {% set i = 0 %}
                            {% for absence in absence.absences %}
                            {% set i = i + 1 %}
                            <tr>
                                <td>{{i}}</td>
                                <td>{{absence.dateDebut|date('d/m/y')}}</td>
                                <td>{{absence.datefin|date('d/m/y')}}</td>
                                <td>{{absence.justifie}}</td>
                            </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                    {% endif %}
                    {% endfor %}
            
                </div>
            
                <div>
                    <h6 class=\"show-liste btn-dark p-2\">Fiche Profil</h6>
                </div>
            </div>
        </div>
    </div>
</div>
{% endif %}
{% endblock %}

{% block javascripts %}

{% endblock %}", "editor/promotion/apprenant_show.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/promotion/apprenant_show.html.twig");
    }
}
