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

/* editor/formation/formation_liste.html.twig */
class __TwigTemplate_cdc3edab46b855b8d11a43cd13d5c3b0f38ce1246d1b4f81948a6942b0910320 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "editor/formation/formation_liste.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Gestion des Formations";
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
";
            // line 22
            if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 22)) {
                // line 23
                echo "
";
                // line 25
                echo "<div class=\"container-fluid \">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto my-5\">

            ";
                // line 30
                echo "
            
            ";
                // line 32
                $this->loadTemplate("editor/promotion/_nav_promotion.html.twig", "editor/formation/formation_liste.html.twig", 32)->display(twig_array_merge($context, ["p" => 2]));
                // line 33
                echo "            <div class=\"my-5\">

                ";
                // line 35
                $this->loadTemplate("template_parts/_flash_message.html.twig", "editor/formation/formation_liste.html.twig", 35)->display($context);
                // line 36
                echo "
                <h4 class=\"btn btn-info btn-sm\">Liste des Formations</h4>
                    ";
                // line 44
                echo "                    <table class=\"table table-hover\">
                        <thead>
                            <th scope=\"col\" style=\"width: 15%;\">Intitulé</th>
                            <th scope=\"col\" style=\"width: 7%;\">Durée</th>
                            <th scope=\"col\">Heures</th>
                            <th scope=\"col\">Diplôme</th>
                            <th scope=\"col\">Modalites</th>
                            <th scope=\"col\" style=\"width: 15%;\">Actions</th>
                        </thead>
                        <tbody>
                        ";
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["formations"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
                    // line 55
                    echo "                        <tr>
                            <td>";
                    // line 56
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "Intitule", [], "any", false, false, false, 56), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 57
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "Duree", [], "any", false, false, false, 57), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 58
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "NombreHeure", [], "any", false, false, false, 58), "html", null, true);
                    echo "h</td>
                            <td>";
                    // line 59
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "Diplome", [], "any", false, false, false, 59), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 60
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "Modalites", [], "any", false, false, false, 60), "html", null, true);
                    echo "</td>
                        
                            <td>
                                <a class=\"btn btn-danger btn-sm delete-record  my-1\" title=\"supprimer\" href=\"#\"><i
                                        class=\"fas fa-trash-alt delete-promotion\"></i></a>
                                <a class=\"btn btn-success btn-sm modif_promotion my-1\" title=\"modifier\"
                                    href=\"";
                    // line 66
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_edit_formation", ["id" => twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 66)]), "html", null, true);
                    echo "\"><i class=\"far fa-edit\"></i></a>
                                <div class=\"delete-confirm border bg-light  m-auto rounded p-3\" style=\"position: absolute;top:40%;left:30%\">
                                    <div>
                                        <h4>Vous êtes sûr de vouloir supprimer?</h4>
                                    </div>
                                    <div>
                                        <a class=\"btn btn-success non\" href=\"\">Non</a>
                                        <a class=\"btn btn-danger\" href=\"";
                    // line 73
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_delete_formation", ["id" => twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 73)]), "html", null, true);
                    echo "\">Oui</a>
                        
                                    </div>
                                </div>
                            </td>
                        </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "                            
                        </tbody>
                    </table>
                    <a class=\"btn btn-primary btn-sm\" title=\"ajouter\" 
                        href=\"";
                // line 84
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_formation_new");
                echo "\"><i class=\"fas fa-plus-square\"></i></a>

                    <!-- pagination -->
                    ";
                // line 87
                if (0 === twig_compare(($context["pages"] ?? null), 0)) {
                    // line 88
                    echo "                        ";
                    $context["pages"] = 1;
                    // line 89
                    echo "                    ";
                }
                // line 90
                echo "                    <nav class=\"\">
                        <ul class=\"pagination pagination-sm justify-content-center\">
                            <li class=\"page-item ";
                // line 92
                if (0 === twig_compare(($context["page"] ?? null), 1)) {
                    echo "disabled";
                }
                echo "\">
                                <a class=\"page-link\" href=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_formation", ["page" => (($context["page"] ?? null) - 1)]), "html", null, true);
                echo "\" tabindex=\"-1\">&laquo;</a>
                            </li>
                            ";
                // line 95
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($context["pages"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 96
                    echo "                            <li class=\"page-item ";
                    if (0 === twig_compare(($context["page"] ?? null), $context["i"])) {
                        echo "active";
                    }
                    echo "\">
                                <a class=\"page-link\" href=\"";
                    // line 97
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_formation", ["page" => $context["i"]]), "html", null, true);
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
                // line 101
                echo "                    
                            <li class=\"page-item ";
                // line 102
                if (0 === twig_compare(($context["page"] ?? null), ($context["pages"] ?? null))) {
                    echo "disabled";
                }
                echo "\">
                                <a class=\"page-link\" href=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_formation", ["page" => (($context["page"] ?? null) + 1)]), "html", null, true);
                echo "\">&raquo;</a>
                            </li>
                        </ul>
                    </nav>
            </div>

                
           
            ";
                // line 112
                echo "
        </div>
    </div>
</div>
";
            }
            // line 117
            echo "

";
        }
    }

    // line 122
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 123
        echo "

";
    }

    public function getTemplateName()
    {
        return "editor/formation/formation_liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 123,  264 => 122,  257 => 117,  250 => 112,  239 => 103,  233 => 102,  230 => 101,  218 => 97,  211 => 96,  207 => 95,  202 => 93,  196 => 92,  192 => 90,  189 => 89,  186 => 88,  184 => 87,  178 => 84,  172 => 80,  159 => 73,  149 => 66,  140 => 60,  136 => 59,  132 => 58,  128 => 57,  124 => 56,  121 => 55,  117 => 54,  105 => 44,  101 => 36,  99 => 35,  95 => 33,  93 => 32,  89 => 30,  83 => 25,  80 => 23,  78 => 22,  61 => 7,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "editor/formation/formation_liste.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/formation/formation_liste.html.twig");
    }
}
