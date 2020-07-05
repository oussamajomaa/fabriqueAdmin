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

/* editor/entreprise/offre_list.html.twig */
class __TwigTemplate_1ae30c41ab0fd43f2cb5018a9bad91c1836947c89a62520f73da30840f37b986 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "editor/entreprise/offre_list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Gestion des Offres";
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

            ";
            // line 12
            $this->loadTemplate("editor/entreprise/_nav_entreprise.html.twig", "editor/entreprise/offre_list.html.twig", 12)->display(twig_array_merge($context, ["p" => 2]));
            // line 13
            echo "
            ";
            // line 15
            echo "            <div class=\"my-5\">

                <!-- flash messages -->
                ";
            // line 18
            $this->loadTemplate("template_parts/_flash_message.html.twig", "editor/entreprise/offre_list.html.twig", 18)->display($context);
            // line 19
            echo "
                <h4 class=\"btn btn-info btn-sm\">Liste des offres</h4>
                <table class=\"table table-hover\">
                    <thead>
                        <th scope=\"col\" style=\"width: 15%;\">Entreprise</th>
                        <th scope=\"col\" style=\"width: 15%;\">Type d'offre</th>
                        <th scope=\"col\" style=\"width: 12%;\">Date de début</th>
                        <th scope=\"col\" style=\"width: 12%;\">Date de fin</th>
                        <th scope=\"col\">Cahier des charges</th>
                        <th scope=\"col\" style=\"width: 15%;\">Actions</th>
                        
                    </thead>
                    <tbody>

                        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["offres"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
                // line 34
                echo "                        <tr>
                            <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["offre"], "Entreprise", [], "any", false, false, false, 35), "Nom", [], "any", false, false, false, 35), "html", null, true);
                echo "</td>
                            <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "Intitule", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
                            <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "DateDebut", [], "any", false, false, false, 37), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "DateFin", [], "any", false, false, false, 38), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "CahierDesCharges", [], "any", false, false, false, 39), "html", null, true);
                echo "\"</td>
                            

                            <td>
                                <a class=\"btn btn-success btn-sm modif_promotion\" title=\"modifier\"
                                href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_offre_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\"><i
                                class=\"far fa-edit\"></i></a>

                                <a class=\"btn btn-danger btn-sm delete-record\" title=\"supprimer\" href=\"#\"><i
                                        class=\"fas fa-trash-alt delete-promotion\"></i></a>
                                        
                                <div class=\"delete-confirm border bg-light  m-auto rounded p-3\"
                                    style=\"position: absolute;top:40%;left:30%\">
                                    <div>
                                        <h4>Vous êtes sûr de vouloir supprimer?</h4>
                                    </div>
                                    <div>
                                        <a class=\"btn btn-success non\" href=\"\">Non</a>
                                        <a class=\"btn btn-danger\" href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_offre_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                echo "\">Oui</a>

                                    </div>
                                </div>
                            </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "
                    </tbody>
                </table>
                <a class=\"btn btn-primary btn-sm\" title=\"ajouter\" href=\"";
            // line 67
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_offre_new");
            echo "\"><i
                        class=\"fas fa-plus-square\"></i></a>

                <!-- pagination -->
                ";
            // line 71
            if (0 === twig_compare(($context["pages"] ?? null), 0)) {
                // line 72
                echo "                ";
                $context["pages"] = 1;
                // line 73
                echo "                ";
            }
            // line 74
            echo "                <nav class=\"\">
                    <ul class=\"pagination pagination-sm justify-content-center\">
                        <li class=\"page-item ";
            // line 76
            if (0 === twig_compare(($context["page"] ?? null), 1)) {
                echo "disabled";
            }
            echo "\">
                            <a class=\"page-link\" href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_offre", ["page" => (($context["page"] ?? null) - 1)]), "html", null, true);
            echo "\" tabindex=\"-1\">&laquo;</a>
                        </li>
                        ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["pages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 80
                echo "                        <li class=\"page-item ";
                if (0 === twig_compare(($context["page"] ?? null), $context["i"])) {
                    echo "active";
                }
                echo "\">
                            <a class=\"page-link\" href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_offre", ["page" => $context["i"]]), "html", null, true);
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
            // line 85
            echo "                
                        <li class=\"page-item ";
            // line 86
            if (0 === twig_compare(($context["page"] ?? null), ($context["pages"] ?? null))) {
                echo "disabled";
            }
            echo "\">
                            <a class=\"page-link\" href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_offre", ["page" => (($context["page"] ?? null) + 1)]), "html", null, true);
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
    }

    public function getTemplateName()
    {
        return "editor/entreprise/offre_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 87,  216 => 86,  213 => 85,  201 => 81,  194 => 80,  190 => 79,  185 => 77,  179 => 76,  175 => 74,  172 => 73,  169 => 72,  167 => 71,  160 => 67,  155 => 64,  142 => 57,  126 => 44,  118 => 39,  114 => 38,  110 => 37,  106 => 36,  102 => 35,  99 => 34,  95 => 33,  79 => 19,  77 => 18,  72 => 15,  69 => 13,  67 => 12,  60 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "editor/entreprise/offre_list.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/entreprise/offre_list.html.twig");
    }
}
