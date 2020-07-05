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
class __TwigTemplate_33755c44870cd9fd2966705e6d271a84035dbe20352a53f946681740c004990b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "reserve/apprenant_show.html.twig", 1);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["apprenant"] ?? null), "avatar", [], "any", false, false, false, 21), "html", null, true);
            echo "\" alt=\"\"></dt>
                            <dd class=\"col-md-8 pl-5\">";
            // line 22
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["apprenant"] ?? null), "fullname", [], "any", false, false, false, 22)), "html", null, true);
            echo "</dd>
                        </dl>
                    </div>
                    <div class=\"col-md-8 \">
                        <dl class=\"row\">
                            <dt class=\"col-md-4\">Git compte</dt>
                            <dd class=\"col-md-8\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["apprenant"] ?? null), "git", [], "any", false, false, false, 28), "html", null, true);
            echo "</dd>
                            <dt class=\"col-md-4\">Email</dt>
                            <dd class=\"col-md-8\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["apprenant"] ?? null), "email", [], "any", false, false, false, 30), "html", null, true);
            echo "</dd>
                            <dt class=\"col-md-4\">Adresse</dt>
                            <dd class=\"col-md-8\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["apprenant"] ?? null), "adresse", [], "any", false, false, false, 32), "html", null, true);
            echo "</dd>
                            <dt class=\"col-md-4\">Ville</dt>
                            <dd class=\"col-md-8\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["apprenant"] ?? null), "ville", [], "any", false, false, false, 34), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(($context["promotions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                // line 57
                echo "                            ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 58
                echo "                            <tr>
                                <td>";
                // line 59
                echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
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
            if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["apprenant"] ?? null), "Reseaux", [], "any", false, false, false, 74)), 0)) {
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
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["apprenant"] ?? null), "Reseaux", [], "any", false, false, false, 85));
                foreach ($context['_seq'] as $context["_key"] => $context["reseau"]) {
                    // line 86
                    echo "                            ";
                    $context["i"] = (($context["i"] ?? null) + 1);
                    // line 87
                    echo "                            <tr>
                                <td>";
                    // line 88
                    echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
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
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["promotions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                // line 101
                echo "
                    ";
                // line 102
                if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "retards", [], "any", false, false, false, 102)), 0)) {
                    // line 103
                    echo "                    <h6 class=\"show-liste btn-dark p-2\">Retards</h6>
                    <table class=\"table table-hover\">
                        <thead>
                            <th scope=\"col\">N°</th>
                            <th scope=\"col\">Date</th>
                            <th scope=\"col\">N° d'heures</th>
                        </thead>
                        <tbody>
                            ";
                    // line 111
                    $context["i"] = 0;
                    // line 112
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["promotion"], "retards", [], "any", false, false, false, 112));
                    foreach ($context['_seq'] as $context["_key"] => $context["retard"]) {
                        // line 113
                        echo "                            ";
                        $context["i"] = (($context["i"] ?? null) + 1);
                        // line 114
                        echo "                            <tr>
                                <td>";
                        // line 115
                        echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 116
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["retard"], "date", [], "any", false, false, false, 116), "d/m/y"), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 117
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["retard"], "nombreheure", [], "any", false, false, false, 117), "html", null, true);
                        echo "</td>
                            </tr>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['retard'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 120
                    echo "                        </tbody>
                    </table>
                    ";
                }
                // line 123
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "                </div>

                <div>
                    ";
            // line 128
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["promotions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                // line 129
                echo "                    ";
                if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "absences", [], "any", false, false, false, 129)), 0)) {
                    // line 130
                    echo "                    <h6 class=\"show-liste btn-dark p-2\">Absences</h6>
                    <table class=\"table table-hover\">
                        <thead>
                            <th scope=\"col\">N°</th>
                            <th scope=\"col\">Date de début</th>
                            <th scope=\"col\">Date de fin</th>
                        </thead>
                        <tbody>
                            ";
                    // line 138
                    $context["i"] = 0;
                    // line 139
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["promotion"], "absences", [], "any", false, false, false, 139));
                    foreach ($context['_seq'] as $context["_key"] => $context["absence"]) {
                        // line 140
                        echo "                            ";
                        $context["i"] = (($context["i"] ?? null) + 1);
                        // line 141
                        echo "                            <tr>
                                <td>";
                        // line 142
                        echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 143
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "dateDebut", [], "any", false, false, false, 143), "d/m/y"), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 144
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "datefin", [], "any", false, false, false, 144), "d/m/y"), "html", null, true);
                        echo "</td>
                            </tr>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['absence'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 147
                    echo "                        </tbody>
                    </table>
                    ";
                }
                // line 150
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "                </div>

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

    // line 163
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 164
        echo "
";
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
        return array (  379 => 164,  375 => 163,  361 => 151,  355 => 150,  350 => 147,  341 => 144,  337 => 143,  333 => 142,  330 => 141,  327 => 140,  322 => 139,  320 => 138,  310 => 130,  307 => 129,  302 => 128,  297 => 124,  291 => 123,  286 => 120,  277 => 117,  273 => 116,  269 => 115,  266 => 114,  263 => 113,  258 => 112,  256 => 111,  246 => 103,  244 => 102,  241 => 101,  236 => 100,  231 => 96,  226 => 93,  217 => 90,  213 => 89,  209 => 88,  206 => 87,  203 => 86,  198 => 85,  196 => 84,  185 => 75,  182 => 74,  177 => 70,  173 => 67,  164 => 64,  160 => 63,  156 => 62,  152 => 61,  148 => 60,  144 => 59,  141 => 58,  138 => 57,  133 => 56,  131 => 55,  107 => 34,  102 => 32,  97 => 30,  92 => 28,  83 => 22,  78 => 21,  68 => 13,  61 => 7,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "reserve/apprenant_show.html.twig", "/var/www/html/FabriqueAdmin/templates/reserve/apprenant_show.html.twig");
    }
}
