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

/* editor/retard_absence/absence.html.twig */
class __TwigTemplate_15e09060e6aad9ece2cc920c61bc8607edab73d85e25322fbc5c9d44b749b9db extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "editor/retard_absence/absence.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Liste des absences";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 6)) {
            // line 7
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
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-3 mt-5\">

            ";
            // line 26
            $this->loadTemplate("editor/apprenant/_nav_apprenant.html.twig", "editor/retard_absence/absence.html.twig", 26)->display(twig_array_merge($context, ["p" => 3]));
            // line 27
            echo "
            <div class=\"my-5\">
                <!-- flash messages -->
                ";
            // line 30
            $this->loadTemplate("template_parts/_flash_message.html.twig", "editor/retard_absence/absence.html.twig", 30)->display($context);
            // line 31
            echo "
                <h4 class=\"btn btn-info btn-sm\">Liste des absences</h4>
                <!-- formulaire de recherche -->
                <form action=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_absence_chercher");
            echo "\" class=\"  ml-auto w-50 bg-info\" style=\"position: relative;\">
                    <input class=\"float-right form-group mr-2 \" placeholder=\"chercher\" type=\"text\"
                        name=\"chercher_absence\">
                    <button class=\" badge badge-primary mr-2\" style=\"position: absolute;right:0;cursor:pointer\"
                        type=\"submit\"><i class=\"fa fa-search \"></i></button>
                </form>

                <table class=\"table table-hover\">

                    <thead>

                        <th scope=\"col\">Date de début</th>
                        <th scope=\"col\">date de fin</th>
                        <th scope=\"col\">Justifié</th>
                        <th scope=\"col\">Apprenant</th>
                        <th scope=\"col\">Promotion</th>

                        <th style=\"width: 15%;\">Actions</th>
                    </thead>
                    <tbody>
                        ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["absences"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["absence"]) {
                // line 55
                echo "                        <tr>
                            <td>";
                // line 56
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "dateDebut", [], "any", false, false, false, 56), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "datefin", [], "any", false, false, false, 57), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "justifie", [], "any", false, false, false, 58), "html", null, true);
                echo "</td>
                            <td>";
                // line 59
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["absence"], "promoappre", [], "any", false, false, false, 59), "apprenant", [], "any", false, false, false, 59), "fullname", [], "any", false, false, false, 59)), "html", null, true);
                echo "</td>
                            <td>";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["absence"], "promoappre", [], "any", false, false, false, 60), "promotion", [], "any", false, false, false, 60), "annee", [], "any", false, false, false, 60), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["absence"], "promoappre", [], "any", false, false, false, 60), "promotion", [], "any", false, false, false, 60), "formation", [], "any", false, false, false, 60), "intitule", [], "any", false, false, false, 60), "html", null, true);
                echo "</td>
                        
                        
                        
                        
                            <!-- dans la dernère cellule, il y a trois liens: supprimer, modifier et visualiser -->
                            <td>
                                <!-- modifier un apprenant -->
                                <a class=\"btn btn-success btn-sm modif_promotion\" title=\"modifier\"
                                    href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_absence_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["absence"], "id", [], "any", false, false, false, 69)]), "html", null, true);
                echo "\"><i class=\"far fa-edit\"></i></a>
                                    
                                <!-- supprimer un apprenant qui va afficher d'abord un message de confirmation -->
                                <a class=\"btn btn-danger btn-sm delete-record\" title=\"supprimer\" href=\"#\"><i
                                        class=\"fas fa-trash-alt delete-promotion\"></i></a>
                        
                        
                        
                        
                                <!-- div qui contient le message de confirmation afin de supprimer un apprenant -->
                                <div class=\"delete-confirm border bg-light  m-auto rounded p-3\" style=\"position: absolute;top:40%;left:30%\">
                                    <div>
                                        <h4>Vous êtes sûr de vouloir supprimer?</h4>
                                    </div>
                                    <div>
                                        <a class=\"btn btn-success non\" href=\"\">Non</a>
                                        <a class=\"btn btn-danger \" href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_absence_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["absence"], "id", [], "any", false, false, false, 85)]), "html", null, true);
                echo "\">Oui</a>
                        
                                    </div>
                                </div>
                            </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['absence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "
                    </tbody>
                </table>
                <a class=\"btn btn-primary btn-sm\" title=\"ajouter\" href=\"";
            // line 95
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_absence_new");
            echo "\"><i
                        class=\"fas fa-plus-square\"></i></a>

                <!-- pagination -->
                ";
            // line 99
            if (0 === twig_compare(($context["pages"] ?? null), 0)) {
                // line 100
                echo "                ";
                $context["pages"] = 1;
                // line 101
                echo "                ";
            }
            // line 102
            echo "                <nav class=\"\">
                    <ul class=\"pagination pagination-sm justify-content-center\">
                        <li class=\"page-item ";
            // line 104
            if (0 === twig_compare(($context["page"] ?? null), 1)) {
                echo "disabled";
            }
            echo "\">
                            <a class=\"page-link\" href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_absence", ["page" => (($context["page"] ?? null) - 1)]), "html", null, true);
            echo "\" tabindex=\"-1\">&laquo;</a>
                        </li>
                        ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["pages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 108
                echo "                        <li class=\"page-item ";
                if (0 === twig_compare(($context["page"] ?? null), $context["i"])) {
                    echo "active";
                }
                echo "\">
                            <a class=\"page-link\" href=\"";
                // line 109
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_absence", ["page" => $context["i"]]), "html", null, true);
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
            // line 113
            echo "                
                        <li class=\"page-item ";
            // line 114
            if (0 === twig_compare(($context["page"] ?? null), ($context["pages"] ?? null))) {
                echo "disabled";
            }
            echo "\">
                            <a class=\"page-link\" href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_absence", ["page" => (($context["page"] ?? null) + 1)]), "html", null, true);
            echo "\">&raquo;</a>
                        </li>
                    </ul>
                </nav>

            </div>
            ";
            // line 122
            echo "
        </div>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "editor/retard_absence/absence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 122,  254 => 115,  248 => 114,  245 => 113,  233 => 109,  226 => 108,  222 => 107,  217 => 105,  211 => 104,  207 => 102,  204 => 101,  201 => 100,  199 => 99,  192 => 95,  187 => 92,  174 => 85,  155 => 69,  141 => 60,  137 => 59,  133 => 58,  129 => 57,  125 => 56,  122 => 55,  118 => 54,  95 => 34,  90 => 31,  88 => 30,  83 => 27,  81 => 26,  60 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "editor/retard_absence/absence.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/retard_absence/absence.html.twig");
    }
}
