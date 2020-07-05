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

/* editor/entreprise/entreprise_list.html.twig */
class __TwigTemplate_c01f9a86debe5f57f01f596b4ed4c25a32609253f746cf31b51242011995d863 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "editor/entreprise/entreprise_list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Gestion des Entreprises";
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
            $this->loadTemplate("editor/entreprise/_nav_entreprise.html.twig", "editor/entreprise/entreprise_list.html.twig", 12)->display(twig_array_merge($context, ["p" => 1]));
            // line 13
            echo "
            ";
            // line 15
            echo "            <div class=\"my-5\">
            ";
            // line 16
            $this->loadTemplate("template_parts/_flash_message.html.twig", "editor/entreprise/entreprise_list.html.twig", 16)->display($context);
            // line 17
            echo "                

                <h4 class=\"btn btn-info btn-sm\">Liste des entreprises</h4>
                <table class=\"table table-hover\">
                    <thead>
                        <th scope=\"col\">Nom</th>
                        <th scope=\"col\">Adresse</th>
                        ";
            // line 25
            echo "                        <th scope=\"col\">Ville</th>
                        <th scope=\"col\">Tel</th>
                        <th scope=\"col\">Mobile</th>
                        <th scope=\"col\">Email</th>
                        <th scope=\"col\" style=\"width: 15%;\">Actions</th>
                    </thead>
                    <tbody>
                        
                        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["entreprises"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entreprise"]) {
                // line 34
                echo "                         <tr>
                            <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprise"], "Nom", [], "any", false, false, false, 35), "html", null, true);
                echo "</td>
                            <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprise"], "Adresse", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
                            ";
                // line 38
                echo "                            <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprise"], "Ville", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
                            <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprise"], "Tel", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
                            <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprise"], "Mobile", [], "any", false, false, false, 40), "html", null, true);
                echo "</td>
                            <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprise"], "Email", [], "any", false, false, false, 41), "html", null, true);
                echo "</td>
                
                            <td>
                                <a class=\"btn btn-success btn-sm modif_promotion\" title=\"modifier\"
                                href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_entreprise_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["entreprise"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                echo "\"><i class=\"far fa-edit\"></i></a>

                                <a class=\"btn btn-danger btn-sm delete-record\" title=\"supprimer\" href=\"#\"><i
                                        class=\"fas fa-trash-alt delete-promotion\"></i></a>

                                <div class=\"delete-confirm border bg-light  m-auto rounded p-3\"
                                    style=\"position: absolute;top:40%;left:30%\">
                                    <div>
                                        <h4>Vous êtes sûr de vouloir supprimer?</h4>
                                    </div>
                                    <div>
                                        <a class=\"btn btn-success non\" href=\"\">Non</a>
                                        <a class=\"btn btn-danger\"
                                            href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_entreprise_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["entreprise"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                echo "\">Oui</a>
                
                                    </div>
                                </div>
                            </td>
                        </tr> 
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entreprise'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                
                    </tbody>
                </table>
                 <a class=\"btn btn-primary btn-sm\" title=\"ajouter\" href=\"";
            // line 68
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_entreprise_new");
            echo "\"><i
                        class=\"fas fa-plus-square\"></i></a> 
                
                <!-- pagination -->
                ";
            // line 72
            if (0 === twig_compare(($context["pages"] ?? null), 0)) {
                // line 73
                echo "                ";
                $context["pages"] = 1;
                // line 74
                echo "                ";
            }
            // line 75
            echo "                <nav class=\"\">
                    <ul class=\"pagination pagination-sm justify-content-center\">
                        <li class=\"page-item ";
            // line 77
            if (0 === twig_compare(($context["page"] ?? null), 1)) {
                echo "disabled";
            }
            echo "\">
                            <a class=\"page-link\" href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_entreprise", ["page" => (($context["page"] ?? null) - 1)]), "html", null, true);
            echo "\" tabindex=\"-1\">&laquo;</a>
                        </li>
                        ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["pages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 81
                echo "                        <li class=\"page-item ";
                if (0 === twig_compare(($context["page"] ?? null), $context["i"])) {
                    echo "active";
                }
                echo "\">
                            <a class=\"page-link\" href=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_entreprise", ["page" => $context["i"]]), "html", null, true);
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
            // line 86
            echo "                
                        <li class=\"page-item ";
            // line 87
            if (0 === twig_compare(($context["page"] ?? null), ($context["pages"] ?? null))) {
                echo "disabled";
            }
            echo "\">
                            <a class=\"page-link\" href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_entreprise", ["page" => (($context["page"] ?? null) + 1)]), "html", null, true);
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
        return "editor/entreprise/entreprise_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 88,  221 => 87,  218 => 86,  206 => 82,  199 => 81,  195 => 80,  190 => 78,  184 => 77,  180 => 75,  177 => 74,  174 => 73,  172 => 72,  165 => 68,  160 => 65,  147 => 58,  131 => 45,  124 => 41,  120 => 40,  116 => 39,  111 => 38,  107 => 36,  103 => 35,  100 => 34,  96 => 33,  86 => 25,  77 => 17,  75 => 16,  72 => 15,  69 => 13,  67 => 12,  60 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "editor/entreprise/entreprise_list.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/entreprise/entreprise_list.html.twig");
    }
}
