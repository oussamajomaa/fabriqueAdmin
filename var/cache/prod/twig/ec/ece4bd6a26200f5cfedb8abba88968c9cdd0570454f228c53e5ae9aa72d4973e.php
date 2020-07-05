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

/* admin/utilisateur.html.twig */
class __TwigTemplate_275e4300fd2ed10e3f6595900ac04aa80759993120c05a62ca30073c4f706e74 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/utilisateur.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Gestion des utilisateurs";
    }

    // line 5
    public function block_body($context, array $blocks = [])
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

    .active {
        background-color: black;
        color: white;
    }
</style>
";
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 26)) {
            // line 27
            echo "<div class=\"container-fluid \">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto my-5\">

            ";
            // line 32
            echo "
            
            <div class=\"my-5\">
                <!-- flash messages -->
                ";
            // line 36
            $this->loadTemplate("template_parts/_flash_message.html.twig", "admin/utilisateur.html.twig", 36)->display($context);
            // line 37
            echo "                
                
                <h4 class=\"btn btn-info btn-sm\">Liste des utilisateurs</h4>
                <form action=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_chercher_user");
            echo "\" class=\"  ml-auto w-50 bg-info\" style=\"position: relative;\">
                    <input class=\"float-right form-group mr-2 \" placeholder=\"chercher\" type=\"text\" name=\"chercher\">
                    <button class=\" badge badge-primary mr-2\" style=\"position: absolute;right:0;cursor:pointer\" id=\"chercher_user\" type=\"submit\"><i
                            class=\"fa fa-search \"></i></button>
                </form>
                    

                <table class=\"table table-hover\">
                    <thead>
                        <th>Email</th>
                        <th>Rôle</th>
                        <th>Actions</th>
                    </thead>
                <tbody>
                            
                    ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 56
                echo "                        <tr>
                                    
                            <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 58), "html", null, true);
                echo "</td>
                                    
                            <td>
                                ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 61));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 62
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                    echo "        
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "                            </td>
                            <td>
                                ";
                // line 66
                if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 66), "email", [], "any", false, false, false, 66), twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 66))) {
                    // line 67
                    echo "                                    ";
                    // line 69
                    echo "
                                    <a class=\"btn btn-danger btn-sm delete-record\" title=\"supprimer\" href=\"#\"><i
                                            class=\"fas fa-trash-alt \"></i></a>
                                
                                ";
                }
                // line 74
                echo "                                <div class=\"delete-confirm border bg-light  m-auto rounded p-3\" style=\"position: absolute;top:40%;left:30%\">
                                            
                                    <div>
                                        <h4>Vous êtes sûr de vouloir supprimer?</h4>
                                    </div>
                                    <div>
                                        <a class=\"btn btn-success non\" href=\"\">Non</a>
                                        <a class=\"btn btn-danger\" href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 81)]), "html", null, true);
                echo "\">Oui</a>
                                                
                                    </div>
                                </div>
                            </td>
                                   
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "                </tbody>
                </table>
                    <a class=\"btn btn-primary btn-sm\" title=\"ajouter\" href=\"";
            // line 91
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\"><i class=\"fa fa-user-plus\"></i></a>
                   
            </div>
                
            ";
            // line 96
            echo "
        </div>
    </div>
</div>
";
        }
        // line 101
        echo "
<script>
    
</script>

";
    }

    public function getTemplateName()
    {
        return "admin/utilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 101,  194 => 96,  187 => 91,  183 => 89,  169 => 81,  160 => 74,  153 => 69,  151 => 67,  149 => 66,  145 => 64,  136 => 62,  132 => 61,  126 => 58,  122 => 56,  118 => 55,  100 => 40,  95 => 37,  93 => 36,  87 => 32,  81 => 27,  79 => 26,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/utilisateur.html.twig", "/var/www/html/FabriqueAdmin/templates/admin/utilisateur.html.twig");
    }
}
