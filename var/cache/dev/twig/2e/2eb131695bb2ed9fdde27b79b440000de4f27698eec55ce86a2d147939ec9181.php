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
class __TwigTemplate_fa15a1574fd2fc233eecc4dc723b0f6d6a07d9e3393bf6243d24a96dfda23973 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/utilisateur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/utilisateur.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/utilisateur.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion des utilisateurs";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26)) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 55, $this->source); })()));
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
                if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "email", [], "any", false, false, false, 66), twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 66))) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  231 => 101,  224 => 96,  217 => 91,  213 => 89,  199 => 81,  190 => 74,  183 => 69,  181 => 67,  179 => 66,  175 => 64,  166 => 62,  162 => 61,  156 => 58,  152 => 56,  148 => 55,  130 => 40,  125 => 37,  123 => 36,  117 => 32,  111 => 27,  109 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des utilisateurs{% endblock %}

{% block body %}


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
{# structure de la page 10 colonnes de largeur et alignée à droite #}
{% if app.user %}
<div class=\"container-fluid \">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto my-5\">

            {# page body #}

            
            <div class=\"my-5\">
                <!-- flash messages -->
                {% include \"template_parts/_flash_message.html.twig\" %}
                
                
                <h4 class=\"btn btn-info btn-sm\">Liste des utilisateurs</h4>
                <form action=\"{{ path('admin_chercher_user')}}\" class=\"  ml-auto w-50 bg-info\" style=\"position: relative;\">
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
                            
                    {% for user in users %}
                        <tr>
                                    
                            <td>{{ user.email }}</td>
                                    
                            <td>
                                {% for role in user.roles %}
                                    {{ role }}        
                                {% endfor %}
                            </td>
                            <td>
                                {% if app.user.email != user.email %}
                                    {# <a class=\"btn btn-success btn-sm modif_user\" title=\"modifier\" 
                                        href=\"{{ path('admin_modif_user',{'id':user.id}) }}\"><i class=\"far fa-edit\"></i></a> #}

                                    <a class=\"btn btn-danger btn-sm delete-record\" title=\"supprimer\" href=\"#\"><i
                                            class=\"fas fa-trash-alt \"></i></a>
                                
                                {% endif %}
                                <div class=\"delete-confirm border bg-light  m-auto rounded p-3\" style=\"position: absolute;top:40%;left:30%\">
                                            
                                    <div>
                                        <h4>Vous êtes sûr de vouloir supprimer?</h4>
                                    </div>
                                    <div>
                                        <a class=\"btn btn-success non\" href=\"\">Non</a>
                                        <a class=\"btn btn-danger\" href=\"{{ path('admin_delete_user',{'id':user.id}) }}\">Oui</a>
                                                
                                    </div>
                                </div>
                            </td>
                                   
                        </tr>
                    {% endfor %}
                </tbody>
                </table>
                    <a class=\"btn btn-primary btn-sm\" title=\"ajouter\" href=\"{{ path('app_register') }}\"><i class=\"fa fa-user-plus\"></i></a>
                   
            </div>
                
            {# end body #}

        </div>
    </div>
</div>
{% endif %}

<script>
    
</script>

{% endblock %}


", "admin/utilisateur.html.twig", "/var/www/html/FabriqueAdmin/templates/admin/utilisateur.html.twig");
    }
}
