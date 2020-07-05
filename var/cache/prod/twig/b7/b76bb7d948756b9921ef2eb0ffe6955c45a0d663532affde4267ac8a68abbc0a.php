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

/* editor/apprenant/apprenant_liste.html.twig */
class __TwigTemplate_6ac03ffd99bfaa90b7a084d26aa9e42bdfdf1dd5f57c0b673c02fe566a300430 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "editor/apprenant/apprenant_liste.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Ajouter une Apprenants";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
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
    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 22)) {
            // line 23
            echo "
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-3 mt-5\">

                ";
            // line 28
            $this->loadTemplate("editor/apprenant/_nav_apprenant.html.twig", "editor/apprenant/apprenant_liste.html.twig", 28)->display(twig_array_merge($context, ["p" => 1]));
            // line 29
            echo "
                <div class=\"my-5\">
                    <!-- flash messages -->
                    ";
            // line 32
            $this->loadTemplate("template_parts/_flash_message.html.twig", "editor/apprenant/apprenant_liste.html.twig", 32)->display($context);
            // line 33
            echo "
                    <h4 class=\"btn btn-info btn-sm\">Liste des apprenants</h4>

                    <!-- formulaire de recherche -->
                    <form action=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_apprenant_chercher");
            echo "\" class=\"  ml-auto w-50 bg-info\" style=\"position: relative;\">
                        <input class=\"float-right form-group mr-2 \" placeholder=\"chercher\" type=\"text\" name=\"chercher_apprenant\">
                        <button class=\" badge badge-primary mr-2\" style=\"position: absolute;right:0;cursor:pointer\" type=\"submit\"><i
                                class=\"fa fa-search \"></i></button>
                    </form>

                    <!-- lister toutes les promotion dans un tableau -->
                    <table class=\"table table-hover\">
                    
                        <thead>
                            <th>Nom</th>
                            <th>Git compte</th>
                            <th>Email</th>
                            <th>Avatar</th>
                            <th style=\"width: 15%;\">Actions</th>
                        </thead>
                        <tbody>

                            ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["apprenants"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["apprenant"]) {
                // line 56
                echo "                            <tr>
                                <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 57), "Fullname", [], "any", false, false, false, 57), "html", null, true);
                echo "</td>
                                <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 58), "Git", [], "any", false, false, false, 58), "html", null, true);
                echo "</td>
                                <td>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 59), "Email", [], "any", false, false, false, 59), "html", null, true);
                echo "</td>
                                <td><img src=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/brochures/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 60), "Avatar", [], "any", false, false, false, 60), "html", null, true);
                echo "\" alt=\"\" class=\"avatar-sd\"></td>
                    
                                <!-- dans la dernère cellule, il trois liens: suuprimer, modifier et visualiser -->
                                <td>
                                    <!-- visualiser un apprenant -->
                                    <a class=\"btn btn-info btn-sm modif_promotion my-1\" title=\"visualiser\" 
                                        href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_apprenant_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66)]), "html", null, true);
                echo "\"><i class=\"fa fa-eye\"></i></a>
                                        
                                    <!-- modifier un apprenant -->
                                    <a class=\"btn btn-success btn-sm modif_promotion my-1\" title=\"modifier\"
                                        href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_edit_apprenant", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 70), "id", [], "any", false, false, false, 70)]), "html", null, true);
                echo "\"><i class=\"far fa-edit\"></i></a>
                                    

                                    <!-- supprimer un apprenant qui va afficher d'abord un message de confirmation -->
                                    <a class=\"btn btn-danger btn-sm delete-record my-1\" title=\"supprimer\" href=\"#\"><i
                                        class=\"fas fa-trash-alt delete-promotion\"></i></a>

                                     <!-- div qui contient le message de confirmation afin de supprimer un apprenant -->
                                    <div class=\"delete-confirm border bg-light  m-auto rounded p-3\"
                                        style=\"position: absolute;top:40%;left:30%\">
                                        <div>
                                            <h4>Vous êtes sûr de vouloir supprimer?</h4>
                                        </div>
                                        <div>
                                            <a class=\"btn btn-success non\" href=\"\">Non</a>
                                            <a class=\"btn btn-danger \" href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_apprenant_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["apprenant"], "id", [], "any", false, false, false, 85)]), "html", null, true);
                echo "\">Oui</a>
                    
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['apprenant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "
                        </tbody>
                    </table>

                    <a class=\"btn btn-primary btn-sm\" title=\"ajouter\" href=\"";
            // line 96
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_apprenant_new");
            echo "\"><i
                            class=\"fas fa-plus-square\"></i></a>
                            
                    <!-- pagination -->
                    ";
            // line 100
            if (0 === twig_compare(($context["pages"] ?? null), 0)) {
                // line 101
                echo "                        ";
                $context["pages"] = 1;
                // line 102
                echo "                    ";
            }
            // line 103
            echo "                    <nav class=\"\">
                        <ul class=\"pagination pagination-sm justify-content-center\">
                            <li class=\"page-item ";
            // line 105
            if (0 === twig_compare(($context["page"] ?? null), 1)) {
                echo "disabled";
            }
            echo "\">
                                <a class=\"page-link\" href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_apprenant_liste", ["page" => (($context["page"] ?? null) - 1)]), "html", null, true);
            echo "\" tabindex=\"-1\">&laquo;</a>
                            </li>
                            ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["pages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "                               
                                <li class=\"page-item ";
                // line 109
                if (0 === twig_compare(($context["page"] ?? null), $context["i"])) {
                    echo "active";
                }
                echo "\">
                                    <a class=\"page-link\" href=\"";
                // line 110
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_apprenant_liste", ["page" => $context["i"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo " <span class=\"sr-only\">(current)</span></a>
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_apprenant_liste", ["page" => (($context["page"] ?? null) + 1)]), "html", null, true);
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
        return "editor/apprenant/apprenant_liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 115,  254 => 114,  251 => 113,  240 => 110,  234 => 109,  228 => 108,  223 => 106,  217 => 105,  213 => 103,  210 => 102,  207 => 101,  205 => 100,  198 => 96,  192 => 92,  179 => 85,  161 => 70,  154 => 66,  144 => 60,  140 => 59,  136 => 58,  132 => 57,  129 => 56,  125 => 55,  104 => 37,  98 => 33,  96 => 32,  91 => 29,  89 => 28,  82 => 23,  80 => 22,  76 => 21,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "editor/apprenant/apprenant_liste.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/apprenant/apprenant_liste.html.twig");
    }
}
