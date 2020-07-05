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

/* apprenant/profil.html.twig */
class __TwigTemplate_dd8bbda19d67372df9b918c07261fd539affe9981a7a3449d254ec4f1c09f986 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "apprenant/profil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mon profil";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 6)) {
            // line 7
            echo "<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-3 mt-5\">
            <div class=\"my-5\">
                ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["apprenant"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                // line 12
                echo "                    
                    <h4 class=\"btn btn-info btn-sm\">Profil de ";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["app"], "apprenant", [], "any", false, false, false, 13), "html", null, true);
                echo "</h4>
                    <table>
                        ";
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["app"], "apprenant", [], "any", false, false, false, 15));
                foreach ($context['_seq'] as $context["_key"] => $context["reseau"]) {
                    // line 16
                    echo "                        <tr>
                            <td>";
                    // line 17
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reseau"], "nom", [], "any", false, false, false, 17), "html", null, true);
                    echo "</td>
                        </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reseau'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "                    </table>
                    <table>
                        ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["apprenant"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                    // line 23
                    echo "                        <tr>
                            <td>";
                    // line 24
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["promotion"], "promotion", [], "any", false, false, false, 24), "formation", [], "any", false, false, false, 24), "intitule", [], "any", false, false, false, 24), "html", null, true);
                    echo "</td>
                        </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "                    </table>
                    <table>
                        ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["app"], "retards", [], "any", false, false, false, 29));
                foreach ($context['_seq'] as $context["_key"] => $context["retard"]) {
                    // line 30
                    echo "                            <tr>
                                <td>";
                    // line 31
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["retard"], "date", [], "any", false, false, false, 31), "d/m/Y"), "html", null, true);
                    echo "</td>
                            </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['retard'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "                    </table>
                    <table>
                        ";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["app"], "absences", [], "any", false, false, false, 36));
                foreach ($context['_seq'] as $context["_key"] => $context["absence"]) {
                    // line 37
                    echo "                        <tr>
                            <td>";
                    // line 38
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "dateFin", [], "any", false, false, false, 38), "d/m/Y"), "html", null, true);
                    echo "</td>
                        </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['absence'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "                    </table>

                   
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "               
            </div>
        </div>
    </div>
</div>

";
        }
    }

    public function getTemplateName()
    {
        return "apprenant/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 45,  154 => 41,  145 => 38,  142 => 37,  138 => 36,  134 => 34,  125 => 31,  122 => 30,  118 => 29,  114 => 27,  105 => 24,  102 => 23,  98 => 22,  94 => 20,  85 => 17,  82 => 16,  78 => 15,  73 => 13,  70 => 12,  66 => 11,  60 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "apprenant/profil.html.twig", "/var/www/html/FabriqueAdmin/templates/apprenant/profil.html.twig");
    }
}
