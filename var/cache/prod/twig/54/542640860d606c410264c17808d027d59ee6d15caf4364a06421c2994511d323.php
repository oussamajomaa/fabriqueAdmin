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

/* reserve/promotion.html.twig */
class __TwigTemplate_d567524576eb1004640692d2c49c1cedcf36d59fa3ed1e2490c6a70d140612ca extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "reserve/promotion.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Consulter des Promotions";
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

    .hid {
        display: none;
    }

    table {
        width: 100%;
    }
</style>


<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-5 mt-5\">

            ";
            // line 37
            echo "
            ";
            // line 39
            echo "            <div class=\"my-5\">


                ";
            // line 42
            $this->loadTemplate("template_parts/_flash_message.html.twig", "reserve/promotion.html.twig", 42)->display($context);
            // line 43
            echo "
                <h4 class=\"btn btn-info btn-sm\">Liste des Promotions</h4>

                ";
            // line 47
            echo "                <form action=\"\" class=\"  ml-auto w-50 bg-info\" style=\"position: relative;\">
                    <input class=\"float-right form-group mr-2 \" placeholder=\"chercher\" type=\"text\"
                        name=\"chercher_promotion\">
                    <button class=\" badge badge-primary mr-2\" style=\"position: absolute;right:0;cursor:pointer\"
                        id=\"chercher_user\" type=\"submit\"><i class=\"fa fa-search \"></i></button>
                </form>

                ";
            // line 55
            echo "                ";
            // line 56
            echo "                <table class=\"table rounded table-hover\">

                    <thead class=\"\">
                        <tr>
                            <th scope=\"col\" style=\"width: 10%;\">Année</th>
                            <th scope=\"col\" style=\"width: 10%;\">Début</th>
                            <th scope=\"col\" style=\"width: 10%;\">Fin</th>
                            <th scope=\"col\" style=\"width: 45%;\">Formation</th>
                            <th colspan=\"2\" scope=\"col\" style=\"width: 15%;\">Actions </th>

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


                        <tr class=\"\">
                            <td>";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "annee", [], "any", false, false, false, 75), "html", null, true);
                echo "</td>
                            <td>";
                // line 76
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "dateDebut", [], "any", false, false, false, 76), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 77
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "dateFin", [], "any", false, false, false, 77), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["promotion"], "formation", [], "any", false, false, false, 78), "intitule", [], "any", false, false, false, 78), "html", null, true);
                echo "</td>

                            <td>
                                ";
                // line 82
                echo "
                                <a class=\"btn btn-info btn-sm my-1\" title=\"visualiser\"
                                    href=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reserve_show_promotion", ["id" => twig_get_attribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 84)]), "html", null, true);
                echo "\"><i
                                        class=\"fa fa-eye\"></i></a>

                                



                                
                            </td>
                            ";
                // line 94
                echo "
                        </tr>



                    </tbody>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "
                </table>
               
                <!-- pagination -->
                ";
            // line 105
            if (0 === twig_compare(($context["pages"] ?? null), 0)) {
                // line 106
                echo "                ";
                $context["pages"] = 1;
                // line 107
                echo "                ";
            }
            // line 108
            echo "                <nav class=\"\">
                    <ul class=\"pagination pagination-sm justify-content-center\">
                        <li class=\"page-item ";
            // line 110
            if (0 === twig_compare(($context["page"] ?? null), 1)) {
                echo "disabled";
            }
            echo "\">
                            <a class=\"page-link\" href=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reserve_promotion", ["page" => (($context["page"] ?? null) - 1)]), "html", null, true);
            echo "\"
                                tabindex=\"-1\">&laquo;</a>
                        </li>
                        ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["pages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 115
                echo "                        <li class=\"page-item ";
                if (0 === twig_compare(($context["page"] ?? null), $context["i"])) {
                    echo "active";
                }
                echo "\">
                            <a class=\"page-link\" href=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reserve_promotion", ["page" => $context["i"]]), "html", null, true);
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
            // line 120
            echo "
                        <li class=\"page-item ";
            // line 121
            if (0 === twig_compare(($context["page"] ?? null), ($context["pages"] ?? null))) {
                echo "disabled";
            }
            echo "\">
                            <a class=\"page-link\" href=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reserve_promotion", ["page" => (($context["page"] ?? null) + 1)]), "html", null, true);
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

    // line 137
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        echo "




";
    }

    public function getTemplateName()
    {
        return "reserve/promotion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 138,  269 => 137,  252 => 122,  246 => 121,  243 => 120,  231 => 116,  224 => 115,  220 => 114,  214 => 111,  208 => 110,  204 => 108,  201 => 107,  198 => 106,  196 => 105,  190 => 101,  178 => 94,  166 => 84,  162 => 82,  156 => 78,  152 => 77,  148 => 76,  144 => 75,  136 => 69,  132 => 68,  118 => 56,  116 => 55,  107 => 47,  102 => 43,  100 => 42,  95 => 39,  92 => 37,  61 => 7,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "reserve/promotion.html.twig", "/var/www/html/FabriqueAdmin/templates/reserve/promotion.html.twig");
    }
}
