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

/* editor/promotion/promo_show.html.twig */
class __TwigTemplate_7a9d45a6379bc3056856a21f61341ef09d968e7bfbd657d56b0a5a9c0e7ffea8 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "editor/promotion/promo_show.html.twig", 1);
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
    <div class=\"container-fluid\" >
        <div class=\"row\">
            <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-5 mt-5\">

                ";
            // line 12
            $this->loadTemplate("editor/promotion/_nav_promotion.html.twig", "editor/promotion/promo_show.html.twig", 12)->display(twig_array_merge($context, ["p" => 1]));
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
                            <dt class=\"col-md-2\">Formation</dt>
                            <dd class=\"col-md-4\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["promotion"] ?? null), "formation", [], "any", false, false, false, 25), "intitule", [], "any", false, false, false, 25), "html", null, true);
            echo "</dd>
                            <dt class=\"col-md-2\">Date de début</dt>
                            <dd class=\"col-md-4\">";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["promotion"] ?? null), "dateDebut", [], "any", false, false, false, 27), "d/m/Y"), "html", null, true);
            echo "</dd>
                            <dt class=\"col-md-2\">Date de fin</dt>
                            <dd class=\"col-md-4\">";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["promotion"] ?? null), "dateFin", [], "any", false, false, false, 29), "d/m/Y"), "html", null, true);
            echo "</dd>
                        </dl>
                    </div>

                    ";
            // line 34
            echo "                    <table class=\"table \">
                     
                        <thead>
                            <th scope=\"col\" style=\"width: 10%;\">N°</th>
                            <th scope=\"col\" style=\"width: 18%;\">Nom et Prénom</th>
                            <th scope=\"col\" style=\"width: 18%;\">Email</th>
                            <th scope=\"col\" style=\"width: 18%;\">Git compte</th>
                            <th scope=\"col\" style=\"width: 18%;\">Avatar</th>
                            <th scope=\"col\" style=\"width: 18%;\">Actions</th>
                        </thead>
                        <tbody>
                        
                            ";
            // line 46
            $context["i"] = 0;
            // line 47
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["apprenants"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["apprenant"]) {
                // line 48
                echo "                            ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 49
                echo "                            <tr>
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
                                <td><img src=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/brochures/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 54), "avatar", [], "any", false, false, false, 54), "html", null, true);
                echo "\" alt=\"\" class=\"avatar-sd\"></td>
                            
                                <!-- un lien pour afficher un apprenant-->
                                <td><a class=\"btn btn-info btn-sm modif_promotion\" title=\"visualiser\"
                                        href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_pro_apprenant_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58)]), "html", null, true);
                echo "\"><i class=\"fa fa-eye\"></i></a>

                                    ";
                // line 60
                if (1 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["promotion"] ?? null), "dateFin", [], "any", false, false, false, 60), "Y/m/d"), twig_date_format_filter($this->env, "now", "Y/m/d"))) {
                    // line 61
                    echo "                                    

                                    <a class=\"btn btn-danger btn-sm delete-record my-1\" title=\"retirer\" href=\"#\"><i
                                            class=\"fas fa-trash-alt delete-promotion\"></i></a>
                                    ";
                }
                // line 66
                echo "                                    ";
                // line 67
                echo "                                    <div class=\"delete-confirm border bg-light  m-auto rounded p-3\" style=\"position: absolute;top:40%;left:30%\">
                                        <div>
                                            <h4>Vous êtes sûr de vouloir supprimer?</h4>
                                        </div>
                                        <div>
                                            <a class=\"btn btn-success non\" href=\"\">Non</a>
                                            <a class=\"btn btn-danger \" href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_retirer_apprenant", ["id" => twig_get_attribute($this->env, $this->source, $context["apprenant"], "id", [], "any", false, false, false, 73)]), "html", null, true);
                echo "\">Oui</a>
                                    
                                        </div>
                                    </div>
                                    ";
                // line 78
                echo "                                </td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['apprenant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                        </tbody>   
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
        return "editor/promotion/promo_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 81,  185 => 78,  178 => 73,  170 => 67,  168 => 66,  161 => 61,  159 => 60,  154 => 58,  146 => 54,  142 => 53,  138 => 52,  134 => 51,  130 => 50,  127 => 49,  124 => 48,  119 => 47,  117 => 46,  103 => 34,  96 => 29,  91 => 27,  86 => 25,  81 => 23,  69 => 13,  67 => 12,  60 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "editor/promotion/promo_show.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/promotion/promo_show.html.twig");
    }
}
