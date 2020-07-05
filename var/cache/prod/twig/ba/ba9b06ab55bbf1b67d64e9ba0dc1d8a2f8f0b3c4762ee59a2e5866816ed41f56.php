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

/* editor/promotion/promo_liste.html.twig */
class __TwigTemplate_065dc823e06e971d27648e87bc8565d470dbf6d8a107b3ddc16a454b37cee1ff extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "editor/promotion/promo_liste.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Gestion des Promotions";
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

        .hid{
            display: none;
        }

        table{
            width: 100%;
        }
    </style>


    <div class=\"container-fluid\">
        <div class=\"row\" >
            <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-5 mt-5\">

                    ";
            // line 36
            $this->loadTemplate("editor/promotion/_nav_promotion.html.twig", "editor/promotion/promo_liste.html.twig", 36)->display(twig_array_merge($context, ["p" => 1]));
            // line 37
            echo "                
                ";
            // line 39
            echo "                <div class=\"my-5\">
                    

                    ";
            // line 42
            $this->loadTemplate("template_parts/_flash_message.html.twig", "editor/promotion/promo_liste.html.twig", 42)->display($context);
            // line 43
            echo "
                    <h4  class=\"btn btn-info btn-sm\">Liste des Promotions</h4>

                    ";
            // line 47
            echo "                    ";
            // line 52
            echo "                    
                    ";
            // line 54
            echo "                    ";
            // line 55
            echo "                    <table class=\"table rounded table-hover\">
                    
                        <thead class=\"\">
                            <tr >
                                <th scope=\"col\" style=\"width: 10%;\">Année</th>
                                <th scope=\"col\" style=\"width: 10%;\">Début</th>
                                <th scope=\"col\" style=\"width: 10%;\">Fin</th>
                                <th scope=\"col\" style=\"width: 45%;\">Formation</th>
                                <th colspan=\"2\" scope=\"col\" style=\"width: 15%;\" >Actions </th>
                                
                            </tr>
                        </thead>

                    ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["promotions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                // line 69
                echo "                    
                    <tbody>
                            <tr class=\"\" >
                                <td>";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "annee", [], "any", false, false, false, 72), "html", null, true);
                echo "</td>
                                <td>";
                // line 73
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "dateDebut", [], "any", false, false, false, 73), "d/m/Y"), "html", null, true);
                echo "</td>
                                <td>";
                // line 74
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "dateFin", [], "any", false, false, false, 74), "d/m/Y"), "html", null, true);
                echo "</td>
                                <td>";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["promotion"], "formation", [], "any", false, false, false, 75), "intitule", [], "any", false, false, false, 75), "html", null, true);
                echo "</td>

                                <td >
                                    ";
                // line 79
                echo "
                                    <a class=\"btn btn-info btn-sm my-1\" title=\"visualiser\"
                                        href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_show_promotion", ["id" => twig_get_attribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 81)]), "html", null, true);
                echo "\"><i class=\"fa fa-eye\"></i></a>
                                    
                                        ";
                // line 83
                if (1 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "dateFin", [], "any", false, false, false, 83), "Y/m/d"), twig_date_format_filter($this->env, "now", "Y/m/d"))) {
                    // line 84
                    echo "                                            <a class=\"btn btn-success btn-sm modif_promotion my-1\" title=\"modifier\"
                                                href=\"";
                    // line 85
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_edit_promotion", ["id" => twig_get_attribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 85)]), "html", null, true);
                    echo "\"><i class=\"far fa-edit\"></i></a>

                                            <a class=\"btn btn-danger btn-sm delete-record my-1\" title=\"supprimer\" href=\"#\"><i
                                                    class=\"fas fa-trash-alt delete-promotion\"></i></a>
                                        ";
                }
                // line 90
                echo "                                    

                                    ";
                // line 93
                echo "                                    <div class=\"delete-confirm border bg-light  m-auto rounded p-3\" style=\"position: absolute;top:40%;left:30%\">
                                        <div>
                                            <h4>Vous êtes sûr de vouloir supprimer?</h4>
                                        </div>
                                        <div>
                                            <a class=\"btn btn-success non\" href=\"\">Non</a>
                                            <a class=\"btn btn-danger \" href=\"";
                // line 99
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_delete_promotion", ["id" => twig_get_attribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 99)]), "html", null, true);
                echo "\">Oui</a>

                                        </div>
                                    </div>
                                    ";
                // line 104
                echo "                                </td>
                                ";
                // line 106
                echo "                                
                            </tr>
                        
                            
                        
                    </tbody>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "                    
                    </table>
                    <a class=\"btn btn-primary btn-sm\" title=\"ajouter\" href=\"";
            // line 115
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_promo_new");
            echo "\"><i class=\"fas fa-plus-square\"></i></a>
                    
                    <!-- pagination -->
                    ";
            // line 118
            if (0 === twig_compare(($context["pages"] ?? null), 0)) {
                // line 119
                echo "                        ";
                $context["pages"] = 1;
                // line 120
                echo "                    ";
            }
            // line 121
            echo "                    <nav class=\"\">
                        <ul class=\"pagination pagination-sm justify-content-center\">
                            <li class=\"page-item ";
            // line 123
            if (0 === twig_compare(($context["page"] ?? null), 1)) {
                echo "disabled";
            }
            echo "\">
                                <a class=\"page-link\" href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_promo_liste", ["page" => (($context["page"] ?? null) - 1)]), "html", null, true);
            echo "\" tabindex=\"-1\">&laquo;</a>
                            </li>
                            ";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["pages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 127
                echo "                            <li class=\"page-item ";
                if (0 === twig_compare(($context["page"] ?? null), $context["i"])) {
                    echo "active";
                }
                echo "\">
                                <a class=\"page-link\" href=\"";
                // line 128
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_promo_liste", ["page" => $context["i"]]), "html", null, true);
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
            // line 132
            echo "                    
                            <li class=\"page-item ";
            // line 133
            if (0 === twig_compare(($context["page"] ?? null), ($context["pages"] ?? null))) {
                echo "disabled";
            }
            echo "\">
                                <a class=\"page-link\" href=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_promo_liste", ["page" => (($context["page"] ?? null) + 1)]), "html", null, true);
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

    // line 149
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 150
        echo "




";
    }

    public function getTemplateName()
    {
        return "editor/promotion/promo_liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 150,  296 => 149,  279 => 134,  273 => 133,  270 => 132,  258 => 128,  251 => 127,  247 => 126,  242 => 124,  236 => 123,  232 => 121,  229 => 120,  226 => 119,  224 => 118,  218 => 115,  214 => 113,  202 => 106,  199 => 104,  192 => 99,  184 => 93,  180 => 90,  172 => 85,  169 => 84,  167 => 83,  162 => 81,  158 => 79,  152 => 75,  148 => 74,  144 => 73,  140 => 72,  135 => 69,  131 => 68,  116 => 55,  114 => 54,  111 => 52,  109 => 47,  104 => 43,  102 => 42,  97 => 39,  94 => 37,  92 => 36,  61 => 7,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "editor/promotion/promo_liste.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/promotion/promo_liste.html.twig");
    }
}
