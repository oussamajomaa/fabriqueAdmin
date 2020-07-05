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

/* editor/apprenant/apprenant_show.html.twig */
class __TwigTemplate_cf8469253c31647b132e58d0bb098c881874465af0ec4fabfa8ddb8fcf67ce16 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/apprenant/apprenant_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/apprenant/apprenant_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "editor/apprenant/apprenant_show.html.twig", 1);
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
    <div class=\"container-fluid\" >
        <div class=\"row\">
            <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-5 mt-5\">
                <!-- insert apprenant nav -->
                ";
            // line 12
            $this->loadTemplate("editor/apprenant/_nav_apprenant.html.twig", "editor/apprenant/apprenant_show.html.twig", 12)->display(twig_array_merge($context, ["p" => 1]));
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
                echo "                    <div class=\"row\">
                        <div class=\"col-md-4\">
                                
                            <dl class=\"row\">
                                <dt class=\"col-md-4\"><img class=\"avatar\" src=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/brochures/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 22), "avatar", [], "any", false, false, false, 22), "html", null, true);
                echo "\" alt=\"\" ></dt>
                                <dd class=\"col-md-8 pl-5\">";
                // line 23
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 23), "fullname", [], "any", false, false, false, 23)), "html", null, true);
                echo "</dd>
                            </dl>
                        </div>
                        <div class=\"col-md-8 \">
                            <dl class=\"row\">
                                <dt class=\"col-md-4\">Git compte</dt>
                                <dd class=\"col-md-8\">";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 29), "git", [], "any", false, false, false, 29), "html", null, true);
                echo "</dd>
                                <dt class=\"col-md-4\">Email</dt>
                                <dd class=\"col-md-8\">";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 31), "email", [], "any", false, false, false, 31), "html", null, true);
                echo "</dd>
                                <dt class=\"col-md-4\">Adresse</dt>
                                <dd class=\"col-md-8\">";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 33), "adresse", [], "any", false, false, false, 33), "html", null, true);
                echo "</dd>
                                <dt class=\"col-md-4\">Ville</dt>
                                <dd class=\"col-md-8\">";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 35), "ville", [], "any", false, false, false, 35), "html", null, true);
                echo "</dd>
                            </dl>
                        </div>
                    </div>
                    
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['apprenant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                    <div>

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
                            <tbody >
                                ";
            // line 57
            $context["i"] = 0;
            // line 58
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["all"]) || array_key_exists("all", $context) ? $context["all"] : (function () { throw new RuntimeError('Variable "all" does not exist.', 58, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                // line 59
                echo "                                    ";
                $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 59, $this->source); })()) + 1);
                // line 60
                echo "                                   
                                    <tr>
                                        <td>";
                // line 62
                echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 62, $this->source); })()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["promotion"], "promotion", [], "any", false, false, false, 63), "annee", [], "any", false, false, false, 63), "html", null, true);
                echo "</td>
                                        <td>";
                // line 64
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["promotion"], "promotion", [], "any", false, false, false, 64), "dateDebut", [], "any", false, false, false, 64), "d/m/Y"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 65
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["promotion"], "promotion", [], "any", false, false, false, 65), "dateFin", [], "any", false, false, false, 65), "d/m/Y"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["promotion"], "promotion", [], "any", false, false, false, 66), "formation", [], "any", false, false, false, 66), "nombreHeure", [], "any", false, false, false, 66), "html", null, true);
                echo "</td>
                                        <td>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["promotion"], "promotion", [], "any", false, false, false, 67), "formation", [], "any", false, false, false, 67), "intitule", [], "any", false, false, false, 67), "html", null, true);
                echo "</td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                            </tbody>
                        </table>
                        ";
            // line 73
            echo "                    </div>
                   
                    <div>
                        ";
            // line 77
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["all"]) || array_key_exists("all", $context) ? $context["all"] : (function () { throw new RuntimeError('Variable "all" does not exist.', 77, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reseau"]) {
                // line 78
                echo "                            
                        
                        ";
                // line 80
                if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reseau"], "apprenant", [], "any", false, false, false, 80), "Reseaux", [], "any", false, false, false, 80)), 0)) {
                    // line 81
                    echo "                        <h6 class=\"show-liste btn-dark p-2\">Réseaux Sociaux</h6>
                        <table class=\"table table-hover\">
                        
                            <thead>                       
                                <th scope=\"col\">N°</th>
                                <th scope=\"col\">Intitulé</th>
                                <th scope=\"col\">Lien</th>
                            </thead>
                            <tbody>
                                ";
                    // line 90
                    $context["i"] = 0;
                    // line 91
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reseau"], "apprenant", [], "any", false, false, false, 91), "Reseaux", [], "any", false, false, false, 91));
                    foreach ($context['_seq'] as $context["_key"] => $context["reseau"]) {
                        // line 92
                        echo "                                    ";
                        $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 92, $this->source); })()) + 1);
                        // line 93
                        echo "                                    <tr>
                                        <td>";
                        // line 94
                        echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 94, $this->source); })()), "html", null, true);
                        echo "</td>
                                        <td>";
                        // line 95
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reseau"], "nom", [], "any", false, false, false, 95), "html", null, true);
                        echo "</td>
                                        <td>";
                        // line 96
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reseau"], "lien", [], "any", false, false, false, 96), "html", null, true);
                        echo "</td>
                                    </tr>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reseau'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 99
                    echo "                            </tbody>
                        </table>
                        ";
                }
                // line 102
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reseau'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "                    </div>

                    <div>
                        ";
            // line 107
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["all"]) || array_key_exists("all", $context) ? $context["all"] : (function () { throw new RuntimeError('Variable "all" does not exist.', 107, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["retard"]) {
                // line 108
                echo "                        ";
                if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["retard"], "retards", [], "any", false, false, false, 108)), 0)) {
                    // line 109
                    echo "                        <h6 class=\"show-liste btn-dark p-2\">Retards</h6>
                        <table class=\"table table-hover\">
                            <thead>              
                                <th scope=\"col\" style=\"width: 25%;\">N°</th>
                                <th scope=\"col\" style=\"width: 25%;\">Date</th>
                                <th scope=\"col\" style=\"width: 25%;\">N° d'heures</th>  
                                <th scope=\"col\" style=\"width: 25%;\">Justifié</th>
                            </thead>
                            <tbody>
                                ";
                    // line 118
                    $context["i"] = 0;
                    // line 119
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["retard"], "retards", [], "any", false, false, false, 119));
                    foreach ($context['_seq'] as $context["_key"] => $context["retard"]) {
                        // line 120
                        echo "                                ";
                        $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 120, $this->source); })()) + 1);
                        // line 121
                        echo "                                <tr>
                                    <td>";
                        // line 122
                        echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 122, $this->source); })()), "html", null, true);
                        echo "</td>
                                    <td>";
                        // line 123
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["retard"], "date", [], "any", false, false, false, 123), "d/m/y"), "html", null, true);
                        echo "</td>
                                    <td>";
                        // line 124
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["retard"], "nombreheure", [], "any", false, false, false, 124), "html", null, true);
                        echo "</td>
                                    <td>";
                        // line 125
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["retard"], "justifie", [], "any", false, false, false, 125), "html", null, true);
                        echo "</td>
                                    
                                </tr>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['retard'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 129
                    echo "                            </tbody>
                        </table>
                        ";
                }
                // line 132
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['retard'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "                    </div>

                    <div> 
                        ";
            // line 137
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["all"]) || array_key_exists("all", $context) ? $context["all"] : (function () { throw new RuntimeError('Variable "all" does not exist.', 137, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["absence"]) {
                // line 138
                echo "                        ";
                if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "absences", [], "any", false, false, false, 138)), 0)) {
                    // line 139
                    echo "                        <h6 class=\"show-liste btn-dark p-2\">Absences</h6>
                        <table class=\"table table-hover\">
                            <thead>
                                <th scope=\"col\"style=\"width: 25%;\">N°</th>
                                <th scope=\"col\"style=\"width: 25%;\">Date de début</th>
                                <th scope=\"col\" style=\"width: 25%;\">Date de fin</th>
                                <th scope=\"col\" style=\"width: 25%;\">Justifié</th>
                            </thead>
                            <tbody>
                                ";
                    // line 148
                    $context["i"] = 0;
                    // line 149
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["absence"], "absences", [], "any", false, false, false, 149));
                    foreach ($context['_seq'] as $context["_key"] => $context["absence"]) {
                        // line 150
                        echo "                                ";
                        $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 150, $this->source); })()) + 1);
                        // line 151
                        echo "                                <tr>
                                    <td>";
                        // line 152
                        echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 152, $this->source); })()), "html", null, true);
                        echo "</td>
                                    <td>";
                        // line 153
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "dateDebut", [], "any", false, false, false, 153), "d/m/y"), "html", null, true);
                        echo "</td>
                                    <td>";
                        // line 154
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "datefin", [], "any", false, false, false, 154), "d/m/y"), "html", null, true);
                        echo "</td>
                                    <td>";
                        // line 155
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "justifie", [], "any", false, false, false, 155), "html", null, true);
                        echo "</td>
                                </tr>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['absence'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 158
                    echo "                            </tbody>
                        </table>
                        ";
                }
                // line 161
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['absence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
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

    // line 175
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 176
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "editor/apprenant/apprenant_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  460 => 176,  450 => 175,  429 => 162,  423 => 161,  418 => 158,  409 => 155,  405 => 154,  401 => 153,  397 => 152,  394 => 151,  391 => 150,  386 => 149,  384 => 148,  373 => 139,  370 => 138,  365 => 137,  360 => 133,  354 => 132,  349 => 129,  339 => 125,  335 => 124,  331 => 123,  327 => 122,  324 => 121,  321 => 120,  316 => 119,  314 => 118,  303 => 109,  300 => 108,  295 => 107,  290 => 103,  284 => 102,  279 => 99,  270 => 96,  266 => 95,  262 => 94,  259 => 93,  256 => 92,  251 => 91,  249 => 90,  238 => 81,  236 => 80,  232 => 78,  227 => 77,  222 => 73,  218 => 70,  209 => 67,  205 => 66,  201 => 65,  197 => 64,  193 => 63,  189 => 62,  185 => 60,  182 => 59,  177 => 58,  175 => 57,  157 => 41,  145 => 35,  140 => 33,  135 => 31,  130 => 29,  121 => 23,  116 => 22,  110 => 18,  106 => 17,  100 => 13,  98 => 12,  91 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter une Promotion{% endblock %}

{% block body %}
{% if app.user %}

    <div class=\"container-fluid\" >
        <div class=\"row\">
            <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-5 mt-5\">
                <!-- insert apprenant nav -->
                {% include \"editor/apprenant/_nav_apprenant.html.twig\" with {'p':1} %}

                <div class=\"my-5\">
                    <!-- un tableau d'un seul apprenant -->
                    <h4 class=\"btn btn-info btn-sm\">Fiche apprenant</h4>
                    {% for apprenant in all %}
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                                
                            <dl class=\"row\">
                                <dt class=\"col-md-4\"><img class=\"avatar\" src=\"{{ asset('uploads/brochures/') }}{{apprenant.apprenant.avatar}}\" alt=\"\" ></dt>
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
                            <tbody >
                                {% set i = 0 %}
                                {% for promotion in all %}
                                    {% set i = i + 1 %}
                                   
                                    <tr>
                                        <td>{{i}}</td>
                                        <td>{{ promotion.promotion.annee }}</td>
                                        <td>{{ promotion.promotion.dateDebut|date(\"d/m/Y\") }}</td>
                                        <td>{{ promotion.promotion.dateFin|date(\"d/m/Y\") }}</td>
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
                                <th scope=\"col\"style=\"width: 25%;\">N°</th>
                                <th scope=\"col\"style=\"width: 25%;\">Date de début</th>
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


{% endblock %}", "editor/apprenant/apprenant_show.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/apprenant/apprenant_show.html.twig");
    }
}
