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

/* editor/entreprise/contact_list.html.twig */
class __TwigTemplate_a1ecdad566ae873bc7ebb020b29914291dfda33d9e7855abab4f86102556cdb0 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "editor/entreprise/contact_list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Gestion des Contacts";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
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

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 20)) {
            // line 21
            echo "
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-5 mt-5\">

            ";
            // line 26
            $this->loadTemplate("editor/entreprise/_nav_entreprise.html.twig", "editor/entreprise/contact_list.html.twig", 26)->display(twig_array_merge($context, ["p" => 3]));
            // line 27
            echo "
            ";
            // line 29
            echo "            <div class=\"my-5\">

                <!-- flash messages -->
                ";
            // line 32
            $this->loadTemplate("template_parts/_flash_message.html.twig", "editor/entreprise/contact_list.html.twig", 32)->display($context);
            // line 33
            echo "
                <h4 class=\"btn btn-info btn-sm\">Liste des contacts</h4>

                <form action=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_contact_chercher");
            echo "\" class=\"  ml-auto w-50 bg-info\" style=\"position: relative;\">
                    <input class=\"float-right form-group mr-2 \" placeholder=\"chercher par entreprise\" type=\"text\"
                            name=\"chercher_contact\">
                    <button class=\" badge badge-primary mr-2\" style=\"position: absolute;right:0;cursor:pointer\"
                            id=\"chercher_user\" type=\"submit\"><i class=\"fa fa-search \"></i>
                    </button>
                </form>
                <table class=\"table table-hover\">
                    <thead>
                        <th scope=\"col\" style=\"width: 20%;\">Entreprise</th>
                        <th scope=\"col\" style=\"width: 20%;\">Nom</th>
                        <th scope=\"col\" style=\"width: 15%;\">TEL</th>
                        <th scope=\"col\" style=\"width: 15%;\">MOBILE</th>
                        <th scope=\"col\" style=\"width: 15%;\">EMAIL</th>
                        <th scope=\"col\" style=\"width: 15%;\">Actions</th>

                    </thead>
                    <tbody>

                        ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["contacts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                // line 56
                echo "                        <tr>
                            <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contact"], "Entreprise", [], "any", false, false, false, 57), "Nom", [], "any", false, false, false, 57), "html", null, true);
                echo "</td>
                            <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "fullName", [], "any", false, false, false, 58), "html", null, true);
                echo "</td>
                            <td>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "tel", [], "any", false, false, false, 59), "html", null, true);
                echo "</td>
                            <td>";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "mobile", [], "any", false, false, false, 60), "html", null, true);
                echo "</td>
                            <td>";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "email", [], "any", false, false, false, 61), "html", null, true);
                echo "</td>


                            <td>
                                <a class=\"btn btn-success btn-sm modif_promotion\" title=\"modifier\"
                                    href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_edit_contact", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 66)]), "html", null, true);
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
                                        <a class=\"btn btn-danger\"
                                            href=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_contact_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 80)]), "html", null, true);
                echo "\">Oui</a>

                                    </div>
                                </div>
                            </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "
                    </tbody>
                </table>
                

                <!-- pagination -->
                ";
            // line 93
            if (0 === twig_compare(($context["pages"] ?? null), 0)) {
                // line 94
                echo "                ";
                $context["pages"] = 1;
                // line 95
                echo "                ";
            }
            // line 96
            echo "                <nav class=\"\">
                    <ul class=\"pagination pagination-sm justify-content-center\">
                        <li class=\"page-item ";
            // line 98
            if (0 === twig_compare(($context["page"] ?? null), 1)) {
                echo "disabled";
            }
            echo "\">
                            <a class=\"page-link\" href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_contact", ["page" => (($context["page"] ?? null) - 1)]), "html", null, true);
            echo "\"
                                tabindex=\"-1\">&laquo;</a>
                        </li>
                        ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["pages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 103
                echo "                        <li class=\"page-item ";
                if (0 === twig_compare(($context["page"] ?? null), $context["i"])) {
                    echo "active";
                }
                echo "\">
                            <a class=\"page-link\" href=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_contact", ["page" => $context["i"]]), "html", null, true);
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
            // line 108
            echo "
                        <li class=\"page-item ";
            // line 109
            if (0 === twig_compare(($context["page"] ?? null), ($context["pages"] ?? null))) {
                echo "disabled";
            }
            echo "\">
                            <a class=\"page-link\" href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_contact", ["page" => (($context["page"] ?? null) + 1)]), "html", null, true);
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
        return "editor/entreprise/contact_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 110,  247 => 109,  244 => 108,  232 => 104,  225 => 103,  221 => 102,  215 => 99,  209 => 98,  205 => 96,  202 => 95,  199 => 94,  197 => 93,  189 => 87,  176 => 80,  159 => 66,  151 => 61,  147 => 60,  143 => 59,  139 => 58,  135 => 57,  132 => 56,  128 => 55,  106 => 36,  101 => 33,  99 => 32,  94 => 29,  91 => 27,  89 => 26,  82 => 21,  80 => 20,  76 => 19,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "editor/entreprise/contact_list.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/entreprise/contact_list.html.twig");
    }
}
