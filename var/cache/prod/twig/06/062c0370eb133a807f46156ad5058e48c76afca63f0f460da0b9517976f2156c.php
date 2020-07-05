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
class __TwigTemplate_b9e8030e8c73d246a36c2c4c24961c026bf542e150ef6218b519982af99e3d9d extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "editor/apprenant/apprenant_show.html.twig", 1);
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
            $context['_seq'] = twig_ensure_traversable(($context["all"] ?? null));
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
            $context['_seq'] = twig_ensure_traversable(($context["all"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                // line 59
                echo "                                    ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 60
                echo "                                   
                                    <tr>
                                        <td>";
                // line 62
                echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(($context["all"] ?? null));
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
                        $context["i"] = (($context["i"] ?? null) + 1);
                        // line 93
                        echo "                                    <tr>
                                        <td>";
                        // line 94
                        echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(($context["all"] ?? null));
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
                        $context["i"] = (($context["i"] ?? null) + 1);
                        // line 121
                        echo "                                <tr>
                                    <td>";
                        // line 122
                        echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(($context["all"] ?? null));
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
                        $context["i"] = (($context["i"] ?? null) + 1);
                        // line 151
                        echo "                                <tr>
                                    <td>";
                        // line 152
                        echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
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
    }

    // line 175
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 176
        echo "

";
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
        return array (  418 => 176,  414 => 175,  399 => 162,  393 => 161,  388 => 158,  379 => 155,  375 => 154,  371 => 153,  367 => 152,  364 => 151,  361 => 150,  356 => 149,  354 => 148,  343 => 139,  340 => 138,  335 => 137,  330 => 133,  324 => 132,  319 => 129,  309 => 125,  305 => 124,  301 => 123,  297 => 122,  294 => 121,  291 => 120,  286 => 119,  284 => 118,  273 => 109,  270 => 108,  265 => 107,  260 => 103,  254 => 102,  249 => 99,  240 => 96,  236 => 95,  232 => 94,  229 => 93,  226 => 92,  221 => 91,  219 => 90,  208 => 81,  206 => 80,  202 => 78,  197 => 77,  192 => 73,  188 => 70,  179 => 67,  175 => 66,  171 => 65,  167 => 64,  163 => 63,  159 => 62,  155 => 60,  152 => 59,  147 => 58,  145 => 57,  127 => 41,  115 => 35,  110 => 33,  105 => 31,  100 => 29,  91 => 23,  86 => 22,  80 => 18,  76 => 17,  70 => 13,  68 => 12,  61 => 7,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "editor/apprenant/apprenant_show.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/apprenant/apprenant_show.html.twig");
    }
}
