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

/* reserve/apprenant_show.html.twig */
class __TwigTemplate_76bcafaebdab07e1c1ae7ef10be5b8ddfaef93447bd3e76a4d3f45402786ef64 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reserve/apprenant_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reserve/apprenant_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reserve/apprenant_show.html.twig", 1);
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
            // line 13
            echo "
            <div class=\"my-5\">
                <!-- un tableau d'un seul apprenant -->
                <h4 class=\"btn btn-info btn-sm\">Fiche apprenant</h4>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <dl class=\"row\">
                            <dt class=\"col-md-4\"><img class=\"avatar\"
                                    src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/brochures/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["apprenant"]) || array_key_exists("apprenant", $context) ? $context["apprenant"] : (function () { throw new RuntimeError('Variable "apprenant" does not exist.', 21, $this->source); })()), "avatar", [], "any", false, false, false, 21), "html", null, true);
            echo "\" alt=\"\"></dt>
                            <dd class=\"col-md-8 pl-5\">";
            // line 22
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["apprenant"]) || array_key_exists("apprenant", $context) ? $context["apprenant"] : (function () { throw new RuntimeError('Variable "apprenant" does not exist.', 22, $this->source); })()), "fullname", [], "any", false, false, false, 22)), "html", null, true);
            echo "</dd>
                        </dl>
                    </div>
                    <div class=\"col-md-8 \">
                        <dl class=\"row\">
                            <dt class=\"col-md-4\">Git compte</dt>
                            <dd class=\"col-md-8\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["apprenant"]) || array_key_exists("apprenant", $context) ? $context["apprenant"] : (function () { throw new RuntimeError('Variable "apprenant" does not exist.', 28, $this->source); })()), "git", [], "any", false, false, false, 28), "html", null, true);
            echo "</dd>
                            <dt class=\"col-md-4\">Email</dt>
                            <dd class=\"col-md-8\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["apprenant"]) || array_key_exists("apprenant", $context) ? $context["apprenant"] : (function () { throw new RuntimeError('Variable "apprenant" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), "html", null, true);
            echo "</dd>
                            <dt class=\"col-md-4\">Adresse</dt>
                            <dd class=\"col-md-8\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["apprenant"]) || array_key_exists("apprenant", $context) ? $context["apprenant"] : (function () { throw new RuntimeError('Variable "apprenant" does not exist.', 32, $this->source); })()), "adresse", [], "any", false, false, false, 32), "html", null, true);
            echo "</dd>
                            <dt class=\"col-md-4\">Ville</dt>
                            <dd class=\"col-md-8\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["apprenant"]) || array_key_exists("apprenant", $context) ? $context["apprenant"] : (function () { throw new RuntimeError('Variable "apprenant" does not exist.', 34, $this->source); })()), "ville", [], "any", false, false, false, 34), "html", null, true);
            echo "</dd>
                        </dl>
                    </div>
                </div>

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
                            ";
            // line 55
            $context["i"] = 0;
            // line 56
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 56, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                // line 57
                echo "                            ";
                $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 57, $this->source); })()) + 1);
                // line 58
                echo "                            <tr>
                                <td>";
                // line 59
                echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 59, $this->source); })()), "html", null, true);
                echo "</td>
                                <td>";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["promotion"], "promotion", [], "any", false, false, false, 60), "annee", [], "any", false, false, false, 60), "html", null, true);
                echo "</td>
                                <td>";
                // line 61
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["promotion"], "promotion", [], "any", false, false, false, 61), "dateDebut", [], "any", false, false, false, 61), "m/d/Y"), "html", null, true);
                echo "</td>
                                <td>";
                // line 62
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["promotion"], "promotion", [], "any", false, false, false, 62), "dateFin", [], "any", false, false, false, 62), "m/d/Y"), "html", null, true);
                echo "</td>
                                <td>";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["promotion"], "promotion", [], "any", false, false, false, 63), "formation", [], "any", false, false, false, 63), "nombreHeure", [], "any", false, false, false, 63), "html", null, true);
                echo "</td>
                                <td>";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["promotion"], "promotion", [], "any", false, false, false, 64), "formation", [], "any", false, false, false, 64), "intitule", [], "any", false, false, false, 64), "html", null, true);
                echo "</td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                        </tbody>
                    </table>
                    ";
            // line 70
            echo "                </div>

                <div>
                    ";
            // line 74
            echo "                    ";
            if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["apprenant"]) || array_key_exists("apprenant", $context) ? $context["apprenant"] : (function () { throw new RuntimeError('Variable "apprenant" does not exist.', 74, $this->source); })()), "Reseaux", [], "any", false, false, false, 74)), 0)) {
                // line 75
                echo "                    <h6 class=\"show-liste btn-dark p-2\">Réseaux Sociaux</h6>
                    <table class=\"table table-hover\">

                        <thead>
                            <th scope=\"col\">N°</th>
                            <th scope=\"col\">Intitulé</th>
                            <th scope=\"col\">Lien</th>
                        </thead>
                        <tbody>
                            ";
                // line 84
                $context["i"] = 0;
                // line 85
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["apprenant"]) || array_key_exists("apprenant", $context) ? $context["apprenant"] : (function () { throw new RuntimeError('Variable "apprenant" does not exist.', 85, $this->source); })()), "Reseaux", [], "any", false, false, false, 85));
                foreach ($context['_seq'] as $context["_key"] => $context["reseau"]) {
                    // line 86
                    echo "                            ";
                    $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 86, $this->source); })()) + 1);
                    // line 87
                    echo "                            <tr>
                                <td>";
                    // line 88
                    echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 88, $this->source); })()), "html", null, true);
                    echo "</td>
                                <td>";
                    // line 89
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reseau"], "nom", [], "any", false, false, false, 89), "html", null, true);
                    echo "</td>
                                <td>";
                    // line 90
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reseau"], "lien", [], "any", false, false, false, 90), "html", null, true);
                    echo "</td>
                            </tr>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reseau'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "                        </tbody>
                    </table>
                    ";
            }
            // line 96
            echo "                </div>

                <div>
                    ";
            // line 100
            echo "                    ";
            if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["apprenant"]) || array_key_exists("apprenant", $context) ? $context["apprenant"] : (function () { throw new RuntimeError('Variable "apprenant" does not exist.', 100, $this->source); })()), "retards", [], "any", false, false, false, 100)), 0)) {
                // line 101
                echo "                    <h6 class=\"show-liste btn-dark p-2\">Retards</h6>
                    <table class=\"table table-hover\">
                        <thead>
                            <th scope=\"col\">N°</th>
                            <th scope=\"col\">Date</th>
                            <th scope=\"col\">N° d'heures</th>
                        </thead>
                        <tbody>
                            ";
                // line 109
                $context["i"] = 0;
                // line 110
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["apprenant"]) || array_key_exists("apprenant", $context) ? $context["apprenant"] : (function () { throw new RuntimeError('Variable "apprenant" does not exist.', 110, $this->source); })()), "retards", [], "any", false, false, false, 110));
                foreach ($context['_seq'] as $context["_key"] => $context["retard"]) {
                    // line 111
                    echo "                            ";
                    $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 111, $this->source); })()) + 1);
                    // line 112
                    echo "                            <tr>
                                <td>";
                    // line 113
                    echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 113, $this->source); })()), "html", null, true);
                    echo "</td>
                                <td>";
                    // line 114
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["retard"], "date", [], "any", false, false, false, 114), "d/m/y"), "html", null, true);
                    echo "</td>
                                <td>";
                    // line 115
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["retard"], "nombreheure", [], "any", false, false, false, 115), "html", null, true);
                    echo "</td>
                            </tr>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['retard'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 118
                echo "                        </tbody>
                    </table>
                    ";
            }
            // line 121
            echo "                </div>

                <div>
                    ";
            // line 125
            echo "                    ";
            if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["apprenant"]) || array_key_exists("apprenant", $context) ? $context["apprenant"] : (function () { throw new RuntimeError('Variable "apprenant" does not exist.', 125, $this->source); })()), "absences", [], "any", false, false, false, 125)), 0)) {
                // line 126
                echo "                    <h6 class=\"show-liste btn-dark p-2\">Absences</h6>
                    <table class=\"table table-hover\">
                        <thead>
                            <th scope=\"col\">N°</th>
                            <th scope=\"col\">Date de début</th>
                            <th scope=\"col\">Date de fin</th>
                        </thead>
                        <tbody>
                            ";
                // line 134
                $context["i"] = 0;
                // line 135
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["apprenant"]) || array_key_exists("apprenant", $context) ? $context["apprenant"] : (function () { throw new RuntimeError('Variable "apprenant" does not exist.', 135, $this->source); })()), "absences", [], "any", false, false, false, 135));
                foreach ($context['_seq'] as $context["_key"] => $context["absence"]) {
                    // line 136
                    echo "                            ";
                    $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 136, $this->source); })()) + 1);
                    // line 137
                    echo "                            <tr>
                                <td>";
                    // line 138
                    echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 138, $this->source); })()), "html", null, true);
                    echo "</td>
                                <td>";
                    // line 139
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "dateDebut", [], "any", false, false, false, 139), "d/m/y"), "html", null, true);
                    echo "</td>
                                <td>";
                    // line 140
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "datefin", [], "any", false, false, false, 140), "d/m/y"), "html", null, true);
                    echo "</td>
                            </tr>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['absence'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 143
                echo "                        </tbody>
                    </table>
                    ";
            }
            // line 146
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

    // line 159
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 160
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reserve/apprenant_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 160,  388 => 159,  367 => 146,  362 => 143,  353 => 140,  349 => 139,  345 => 138,  342 => 137,  339 => 136,  334 => 135,  332 => 134,  322 => 126,  319 => 125,  314 => 121,  309 => 118,  300 => 115,  296 => 114,  292 => 113,  289 => 112,  286 => 111,  281 => 110,  279 => 109,  269 => 101,  266 => 100,  261 => 96,  256 => 93,  247 => 90,  243 => 89,  239 => 88,  236 => 87,  233 => 86,  228 => 85,  226 => 84,  215 => 75,  212 => 74,  207 => 70,  203 => 67,  194 => 64,  190 => 63,  186 => 62,  182 => 61,  178 => 60,  174 => 59,  171 => 58,  168 => 57,  163 => 56,  161 => 55,  137 => 34,  132 => 32,  127 => 30,  122 => 28,  113 => 22,  108 => 21,  98 => 13,  91 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
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
            {# {% include \"editor/promotion/_nav_promotion.html.twig\" with {'p':1} %} #}

            <div class=\"my-5\">
                <!-- un tableau d'un seul apprenant -->
                <h4 class=\"btn btn-info btn-sm\">Fiche apprenant</h4>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <dl class=\"row\">
                            <dt class=\"col-md-4\"><img class=\"avatar\"
                                    src=\"{{ asset('uploads/brochures/') }}{{apprenant.avatar}}\" alt=\"\"></dt>
                            <dd class=\"col-md-8 pl-5\">{{apprenant.fullname|upper}}</dd>
                        </dl>
                    </div>
                    <div class=\"col-md-8 \">
                        <dl class=\"row\">
                            <dt class=\"col-md-4\">Git compte</dt>
                            <dd class=\"col-md-8\">{{ apprenant.git }}</dd>
                            <dt class=\"col-md-4\">Email</dt>
                            <dd class=\"col-md-8\">{{ apprenant.email }}</dd>
                            <dt class=\"col-md-4\">Adresse</dt>
                            <dd class=\"col-md-8\">{{ apprenant.adresse }}</dd>
                            <dt class=\"col-md-4\">Ville</dt>
                            <dd class=\"col-md-8\">{{ apprenant.ville }}</dd>
                        </dl>
                    </div>
                </div>

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
                            {% for promotion in promotions %}
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
                    {% if apprenant.Reseaux|length > 0 %}
                    <h6 class=\"show-liste btn-dark p-2\">Réseaux Sociaux</h6>
                    <table class=\"table table-hover\">

                        <thead>
                            <th scope=\"col\">N°</th>
                            <th scope=\"col\">Intitulé</th>
                            <th scope=\"col\">Lien</th>
                        </thead>
                        <tbody>
                            {% set i = 0 %}
                            {% for reseau in apprenant.Reseaux %}
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
                </div>

                <div>
                    {# si l'apprenant a des retards #}
                    {% if apprenant.retards|length > 0 %}
                    <h6 class=\"show-liste btn-dark p-2\">Retards</h6>
                    <table class=\"table table-hover\">
                        <thead>
                            <th scope=\"col\">N°</th>
                            <th scope=\"col\">Date</th>
                            <th scope=\"col\">N° d'heures</th>
                        </thead>
                        <tbody>
                            {% set i = 0 %}
                            {% for retard in apprenant.retards %}
                            {% set i = i + 1 %}
                            <tr>
                                <td>{{i}}</td>
                                <td>{{retard.date|date('d/m/y')}}</td>
                                <td>{{retard.nombreheure}}</td>
                            </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                    {% endif %}
                </div>

                <div>
                    {# si l'apprenant a des absences #}
                    {% if apprenant.absences|length > 0 %}
                    <h6 class=\"show-liste btn-dark p-2\">Absences</h6>
                    <table class=\"table table-hover\">
                        <thead>
                            <th scope=\"col\">N°</th>
                            <th scope=\"col\">Date de début</th>
                            <th scope=\"col\">Date de fin</th>
                        </thead>
                        <tbody>
                            {% set i = 0 %}
                            {% for absence in apprenant.absences %}
                            {% set i = i + 1 %}
                            <tr>
                                <td>{{i}}</td>
                                <td>{{absence.dateDebut|date('d/m/y')}}</td>
                                <td>{{absence.datefin|date('d/m/y')}}</td>
                            </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                    {% endif %}

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

{% endblock %}", "reserve/apprenant_show.html.twig", "/var/www/html/FabriqueAdmin/templates/reserve/apprenant_show.html.twig");
    }
}
