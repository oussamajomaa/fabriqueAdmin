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

/* reserve/promotion_show.html.twig */
class __TwigTemplate_a4714185f89ddfc7927c96130034a8ffd0bf4c7291f3b9e58a861b67ee87b65f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "reserve/promotion_show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Afficher une promotion";
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
            // line 13
            echo "
            <div class=\"my-5\">

                <h4 class=\"btn btn-info \">Afficher une Promotion </h4>

                <!-- afficher une seule promotion -->

                <div class=\"col my-5\">
                    <dl class=\"row\">
                        <dt class=\"col-md-2\">Année</dt>
                        <dd class=\"col-md-4\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["promotion"] ?? null), "annee", [], "any", false, false, false, 23), "html", null, true);
            echo "</dd>
                        <dt class=\"col-md-2\">Date de début</dt>
                        <dd class=\"col-md-4\">";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["promotion"] ?? null), "dateDebut", [], "any", false, false, false, 25), "m/d/Y"), "html", null, true);
            echo "</dd>
                        <dt class=\"col-md-2\">Date de fin</dt>
                        <dd class=\"col-md-4\">";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["promotion"] ?? null), "dateFin", [], "any", false, false, false, 27), "m/d/Y"), "html", null, true);
            echo "</dd>
                        <dt class=\"col-md-2\">Formation</dt>
                        <dd class=\"col-md-4\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["promotion"] ?? null), "formation", [], "any", false, false, false, 29), "intitule", [], "any", false, false, false, 29), "html", null, true);
            echo "</dd>
                    </dl>
                </div>

                ";
            // line 34
            echo "                <table class=\"table \">

                    <thead>
                        <th style=\"width: 5%;\">N°</th>
                        <th scope=\"col\" style=\"width: 25%;\">Nom et Prénom</th>
                        <th scope=\"col\" style=\"width: 20%;\">Email</th>
                        <th scope=\"col\" style=\"width: 20%;\">Git compte</th>
                        <th scope=\"col\" style=\"width: 15%;\">Avatar</th>
                        <th scope=\"col\" style=\"width: 15%;\">Actions</th>
                    </thead>
                    <tbody>

                        ";
            // line 46
            $context["i"] = 0;
            // line 47
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["apprenants"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["apprenant"]) {
                // line 48
                echo "                        ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 49
                echo "                        <tr>
                            <td>";
                // line 50
                echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
                echo "</td>
                            <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 51), "FullName", [], "any", false, false, false, 51), "html", null, true);
                echo "</td>
                            <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 52), "email", [], "any", false, false, false, 52), "html", null, true);
                echo "</td>
                            <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 53), "git", [], "any", false, false, false, 53), "html", null, true);
                echo "</td>
                            <td><img class=\"avatar-sd\" src=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/brochures/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 54), "avatar", [], "any", false, false, false, 54), "html", null, true);
                echo "\" alt=\"\"></td>

                            <!-- un lien pour afficher un apprenant-->
                            <td><a class=\"btn btn-info btn-sm modif_promotion\" title=\"visualiser\"
                                    href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reserve_apprenant_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58)]), "html", null, true);
                echo "\"><i
                                        class=\"fa fa-eye\"></i></a>

                            </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['apprenant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "reserve/promotion_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 64,  152 => 58,  144 => 54,  140 => 53,  136 => 52,  132 => 51,  128 => 50,  125 => 49,  122 => 48,  117 => 47,  115 => 46,  101 => 34,  94 => 29,  89 => 27,  84 => 25,  79 => 23,  67 => 13,  60 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "reserve/promotion_show.html.twig", "/var/www/html/FabriqueAdmin/templates/reserve/promotion_show.html.twig");
    }
}
