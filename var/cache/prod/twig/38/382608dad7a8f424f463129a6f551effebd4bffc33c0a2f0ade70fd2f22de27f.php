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
class __TwigTemplate_b475ce1281273643d72489353560c224739aaf97cc2c5bf65b1f15ae336418da extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "editor/promotion/apprenant_show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Ajouter une Promotion";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 6)) {
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
            $context['_seq'] = twig_ensure_traversable(($context["all"] ?? null));
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
            $context['_seq'] = twig_ensure_traversable(($context["all"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                // line 60
                echo "                            ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 61
                echo "            
                            <tr>
                                <td>";
                // line 63
                echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(($context["all"] ?? null));
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
                        $context["i"] = (($context["i"] ?? null) + 1);
                        // line 94
                        echo "                            <tr>
                                <td>";
                        // line 95
                        echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(($context["all"] ?? null));
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
                        $context["i"] = (($context["i"] ?? null) + 1);
                        // line 122
                        echo "                            <tr>
                                <td>";
                        // line 123
                        echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(($context["all"] ?? null));
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
                        $context["i"] = (($context["i"] ?? null) + 1);
                        // line 152
                        echo "                            <tr>
                                <td>";
                        // line 153
                        echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
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
    }

    // line 176
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 177
        echo "
";
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
        return array (  419 => 177,  415 => 176,  400 => 163,  394 => 162,  389 => 159,  380 => 156,  376 => 155,  372 => 154,  368 => 153,  365 => 152,  362 => 151,  357 => 150,  355 => 149,  344 => 140,  341 => 139,  336 => 138,  331 => 134,  325 => 133,  320 => 130,  310 => 126,  306 => 125,  302 => 124,  298 => 123,  295 => 122,  292 => 121,  287 => 120,  285 => 119,  274 => 110,  271 => 109,  266 => 108,  261 => 104,  255 => 103,  250 => 100,  241 => 97,  237 => 96,  233 => 95,  230 => 94,  227 => 93,  222 => 92,  220 => 91,  209 => 82,  207 => 81,  203 => 79,  198 => 78,  193 => 74,  189 => 71,  180 => 68,  176 => 67,  172 => 66,  168 => 65,  164 => 64,  160 => 63,  156 => 61,  153 => 60,  148 => 59,  146 => 58,  128 => 42,  116 => 36,  111 => 34,  106 => 32,  101 => 30,  92 => 24,  87 => 23,  80 => 18,  76 => 17,  70 => 13,  68 => 12,  61 => 7,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "editor/promotion/apprenant_show.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/promotion/apprenant_show.html.twig");
    }
}
