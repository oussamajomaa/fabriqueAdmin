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

/* template_parts/_nav_user.html.twig */
class __TwigTemplate_fec7b8467585af58218cc49fe41e9d5a3a4517c3730bd3b1ade215c5a1ee6a47 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template_parts/_nav_user.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template_parts/_nav_user.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-md navbar-light \">
    <button class=\"navbar-toggler ml-auto mb-2 bg-light\" type=\"button\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse \" id=\"myNavbar\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <!-- sidebar -->
                <div class=\"col-xl-2 col-lg-3 col-md-4 sidebar fixed-top  bg-danger\">
                    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/FA.png"), "html", null, true);
        echo "\" class=\"navbar-brand text-white d-block mx-auto text-center py-3 mb-4 w-25\" alt=\"\">
                    
                    <div class=\"dropdown-divider\"></div>

                    <!-- tester le rôle et l'afficher  -->

                    ";
        // line 16
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "roles", [], "any", false, false, false, 16), 0, [], "array", false, false, false, 16), "ROLE_ADMIN")) {
            // line 17
            echo "                        <h5 class=\"text-center text-light\">Rôle: Administrateur</h5>
                    ";
        }
        // line 19
        echo "
                    ";
        // line 20
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "roles", [], "any", false, false, false, 20), 0, [], "array", false, false, false, 20), "ROLE_EDITOR")) {
            // line 21
            echo "                        <h5 class=\"text-center text-light\">Rôle: Editeur</h5>
                    ";
        }
        // line 23
        echo "
                    ";
        // line 24
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "roles", [], "any", false, false, false, 24), 0, [], "array", false, false, false, 24), "ROLE_RESERVE")) {
            // line 25
            echo "                        <h5 class=\"text-center text-light\">Rôle: Accèss Réservé<h5>
                    ";
        }
        // line 27
        echo "
                    ";
        // line 28
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "roles", [], "any", false, false, false, 28), 0, [], "array", false, false, false, 28), "ROLE_USER")) {
            // line 29
            echo "                        <h5 class=\"text-center text-light\">Rôle: Apprenant</h5>
                    ";
        }
        // line 31
        echo "
                    <div class=\"dropdown-divider\"></div>

                    <!-- vertical menu with many buttons -->
                    <ul class=\"navbar-nav flex-column mt-4 \">
                    
                        <!-- seleon le rôle on affiche les boutons de menu -->
                        <!-- نقوم بتفحص دور المستخدم وبناءً عليه نقوم بعرض القائمة ذات العلاقة -->
                       
                       

                        ";
        // line 42
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EDITOR"))) {
            // line 43
            echo "                            <li class=\"nav-item\">
                                <a href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_dashbord");
            echo "\" class=\"nav-link text-white p-3 mb-2 sidebar-link\"><i
                                        class=\"fas fa-home text-light fa-lg mr-3\"></i> Tableau de bord</a>
                            </li>
                    
                            ";
            // line 48
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 49
                echo "                                <li class=\"nav-item\"><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateur");
                echo "\" class=\"nav-link text-white p-3 mb-2 sidebar-link\"><i
                                            class=\"fas fa-users text-light fa-lg mr-3\"></i> Utilisateurs</a></li>
                            ";
            }
            // line 52
            echo "                            
                                <li class=\"nav-item\">
                                    <a class=\"nav-link p-3 mb-2 sidebar-link text-white\" href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_promo_liste");
            echo "\"><i
                                            class=\"fas fa-certificate text-light fa-lg mr-3\"></i> Promotion</a>
                                </li>
                            
                                <li class=\"nav-item\">
                                    <a class=\"nav-link p-3 mb-2 sidebar-link text-white\" href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_apprenant_liste");
            echo "\"><i
                                            class=\"fas fa-user-graduate text-light fa-lg mr-3\"></i> Apprenants</a>
                                </li>
                            
                                <li class=\"nav-item\">
                                    <a class=\"nav-link p-3 mb-2 sidebar-link text-white\" href=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_entreprise");
            echo "\"\"><i
                                            class=\"fas fa-chart-line text-light fa-lg mr-3\"></i> Entreprises</a>
                                </li>
                            
                                ";
            // line 72
            echo "
                        ";
        }
        // line 74
        echo "                    
                        ";
        // line 75
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "roles", [], "any", false, false, false, 75), 0, [], "array", false, false, false, 75), "ROLE_RESERVE")) {
            // line 76
            echo "                    
                            <li class=\"nav-item\">
                                <a class=\"nav-link p-3 mb-2 sidebar-link text-white\" href=\"";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reserve_promotion");
            echo "\"><i
                                        class=\"fas fa-certificate text-light fa-lg mr-3\"></i> Promotions</a>
                            </li>
                        
                            <li class=\"nav-item\">
                                <a class=\"nav-link p-3 mb-2 sidebar-link text-white\" href=\"\"><i
                                        class=\"fas fa-user-graduate text-light fa-lg mr-3\"></i> Apprenants</a>
                            </li>
                        
                            <li class=\"nav-item\">
                                <a href=\"\" class=\"nav-link text-white p-3 mb-2 sidebar-link\"><i class=\"fas fa-table text-light fa-lg mr-3\"></i>
                                    Bilan
                                </a>
                            </li>
                        ";
        }
        // line 93
        echo "                    
                        ";
        // line 94
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94), "roles", [], "any", false, false, false, 94), 0, [], "array", false, false, false, 94), "ROLE_USER")) {
            // line 95
            echo "                    
                            <li class=\"nav-item\">
                                <a class=\"nav-link p-3 mb-2 sidebar-link text-white\" href=\"\"><i
                                        class=\"fas fa-user text-light fa-lg mr-3\"></i> Profil</a>
                            </li>
                        
                           
                            <li class=\"nav-item\">
                                <a href=\"\" class=\"nav-link text-white p-3 mb-2 sidebar-link\"><i
                                        class=\"fas fa-table text-light fa-lg mr-3\"></i> Bilan Individuel</a>
                            </li>
                        
                            <li class=\"nav-item\">
                                <a href=\"\" class=\"nav-link text-white p-3 mb-2 sidebar-link\"><i
                                        class=\"fa fa-cubes text-light fa-lg mr-3\"></i> Mes Compétences</a>
                            </li>
                    
                        ";
        }
        // line 113
        echo "                    
                    </ul>
                </div>
                <!-- end of sidebar -->

                <!-- top-nav -->
                <!-- this menu contain an application title, email and avatar user and finally a logout button -->
                <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar\">
                    <div class=\"row align-items-center \">
                        <div class=\"col-md-6\">
                            <h4 class=\"text-light mb-0\" >Fabrique Admin</h4>
                        </div>
                        
                        ";
        // line 132
        echo "                        <div class=\"col-md-6\">
                            <ul class=\"navbar-nav\">
                                <!-- logout button -->
                                ";
        // line 135
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 135, $this->source); })()), "user", [], "any", false, false, false, 135), "roles", [], "any", false, false, false, 135), 0, [], "array", false, false, false, 135), "ROLE_USER")) {
            // line 136
            echo "                                <li class=\"nav-item ml-auto\">
                                    <a class=\"nav-link dropdown-toggle text-light p-0 \" data-toggle=\"dropdown\" id=\"drop-logout\" href=\"#\">
                                        <img src=\"";
            // line 138
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/brochures/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 138, $this->source); })()), "user", [], "any", false, false, false, 138), "avatar", [], "any", false, false, false, 138), "html", null, true);
            echo "\" class=\"avatar-sd\" alt=\"\">
                                        ";
            // line 139
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 139, $this->source); })()), "user", [], "any", false, false, false, 139), "fullname", [], "any", false, false, false, 139)), "html", null, true);
            echo "
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"drop-logout\">
                                        <a href=\"#\" class=\"dropdown-item\">Mon profil</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a href=\"\" data-toggle=\"modal\" data-target=\"#sign-out\" class=\"dropdown-item\">Déconnexion</a>
                                         
                                    </div>
                                    ";
        } else {
            // line 148
            echo "                                    <li class=\"nav-item ml-auto my-3\">
                                        <span class=\"text-light\">";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 149, $this->source); })()), "user", [], "any", false, false, false, 149), "email", [], "any", false, false, false, 149), "html", null, true);
            echo "</span>
                                        <a href=\"\" class=\"m-2\" data-toggle=\"modal\" data-target=\"#sign-out\">
                                            <i class=\"fas fa-sign-out-alt text-light fa-lg\"></i>
                                        </a>
                                    </li>
                                    ";
        }
        // line 155
        echo "                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end of top-nav -->
            </div>
        </div>
    </div>
</nav>
<!-- end of navbar -->

<!-- modal -->
<!-- this modal is called when we want to logout to confirm -->
<div class=\"modal fade\" id=\"sign-out\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">Voulez-vous vous déconnecter?</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            </div>
            <div class=\"modal-body\">
                Appuyer sur <span class=\"badge badge-danger\">Déconnexion</span>  pour quitter
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Rester connécté</button>
                <a href=\"";
        // line 181
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"btn btn-danger\">Déconnexion</a>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "template_parts/_nav_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 181,  268 => 155,  259 => 149,  256 => 148,  244 => 139,  239 => 138,  235 => 136,  233 => 135,  228 => 132,  213 => 113,  193 => 95,  191 => 94,  188 => 93,  170 => 78,  166 => 76,  164 => 75,  161 => 74,  157 => 72,  150 => 64,  142 => 59,  134 => 54,  130 => 52,  123 => 49,  121 => 48,  114 => 44,  111 => 43,  109 => 42,  96 => 31,  92 => 29,  90 => 28,  87 => 27,  83 => 25,  81 => 24,  78 => 23,  74 => 21,  72 => 20,  69 => 19,  65 => 17,  63 => 16,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-md navbar-light \">
    <button class=\"navbar-toggler ml-auto mb-2 bg-light\" type=\"button\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse \" id=\"myNavbar\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <!-- sidebar -->
                <div class=\"col-xl-2 col-lg-3 col-md-4 sidebar fixed-top  bg-danger\">
                    <img src=\"{{ asset('assets/img/FA.png') }}\" class=\"navbar-brand text-white d-block mx-auto text-center py-3 mb-4 w-25\" alt=\"\">
                    
                    <div class=\"dropdown-divider\"></div>

                    <!-- tester le rôle et l'afficher  -->

                    {% if app.user.roles[0]=='ROLE_ADMIN' %}
                        <h5 class=\"text-center text-light\">Rôle: Administrateur</h5>
                    {% endif %}

                    {% if app.user.roles[0]=='ROLE_EDITOR' %}
                        <h5 class=\"text-center text-light\">Rôle: Editeur</h5>
                    {% endif %}

                    {% if app.user.roles[0]=='ROLE_RESERVE' %}
                        <h5 class=\"text-center text-light\">Rôle: Accèss Réservé<h5>
                    {% endif %}

                    {% if app.user.roles[0]=='ROLE_USER' %}
                        <h5 class=\"text-center text-light\">Rôle: Apprenant</h5>
                    {% endif %}

                    <div class=\"dropdown-divider\"></div>

                    <!-- vertical menu with many buttons -->
                    <ul class=\"navbar-nav flex-column mt-4 \">
                    
                        <!-- seleon le rôle on affiche les boutons de menu -->
                        <!-- نقوم بتفحص دور المستخدم وبناءً عليه نقوم بعرض القائمة ذات العلاقة -->
                       
                       

                        {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_EDITOR') %}
                            <li class=\"nav-item\">
                                <a href=\"{{ path('editor_dashbord') }}\" class=\"nav-link text-white p-3 mb-2 sidebar-link\"><i
                                        class=\"fas fa-home text-light fa-lg mr-3\"></i> Tableau de bord</a>
                            </li>
                    
                            {% if is_granted('ROLE_ADMIN') %}
                                <li class=\"nav-item\"><a href=\"{{ path('admin_utilisateur') }}\" class=\"nav-link text-white p-3 mb-2 sidebar-link\"><i
                                            class=\"fas fa-users text-light fa-lg mr-3\"></i> Utilisateurs</a></li>
                            {% endif %}
                            
                                <li class=\"nav-item\">
                                    <a class=\"nav-link p-3 mb-2 sidebar-link text-white\" href=\"{{ path('editor_promo_liste') }}\"><i
                                            class=\"fas fa-certificate text-light fa-lg mr-3\"></i> Promotion</a>
                                </li>
                            
                                <li class=\"nav-item\">
                                    <a class=\"nav-link p-3 mb-2 sidebar-link text-white\" href=\"{{ path('editor_apprenant_liste') }}\"><i
                                            class=\"fas fa-user-graduate text-light fa-lg mr-3\"></i> Apprenants</a>
                                </li>
                            
                                <li class=\"nav-item\">
                                    <a class=\"nav-link p-3 mb-2 sidebar-link text-white\" href=\"{{ path('editor_entreprise') }}\"\"><i
                                            class=\"fas fa-chart-line text-light fa-lg mr-3\"></i> Entreprises</a>
                                </li>
                            
                                {# <li class=\"nav-item \">
                                    <a class=\"nav-link p-3 mb-2 sidebar-link text-white\" href=\"\"><i
                                            class=\"far fa-address-card text-light fa-lg mr-3\"></i> Fiche profil</a>
                                </li> #}

                        {% endif %}
                    
                        {% if app.user.roles[0]=='ROLE_RESERVE' %}
                    
                            <li class=\"nav-item\">
                                <a class=\"nav-link p-3 mb-2 sidebar-link text-white\" href=\"{{ path('reserve_promotion') }}\"><i
                                        class=\"fas fa-certificate text-light fa-lg mr-3\"></i> Promotions</a>
                            </li>
                        
                            <li class=\"nav-item\">
                                <a class=\"nav-link p-3 mb-2 sidebar-link text-white\" href=\"\"><i
                                        class=\"fas fa-user-graduate text-light fa-lg mr-3\"></i> Apprenants</a>
                            </li>
                        
                            <li class=\"nav-item\">
                                <a href=\"\" class=\"nav-link text-white p-3 mb-2 sidebar-link\"><i class=\"fas fa-table text-light fa-lg mr-3\"></i>
                                    Bilan
                                </a>
                            </li>
                        {% endif %}
                    
                        {% if app.user.roles[0]=='ROLE_USER' %}
                    
                            <li class=\"nav-item\">
                                <a class=\"nav-link p-3 mb-2 sidebar-link text-white\" href=\"\"><i
                                        class=\"fas fa-user text-light fa-lg mr-3\"></i> Profil</a>
                            </li>
                        
                           
                            <li class=\"nav-item\">
                                <a href=\"\" class=\"nav-link text-white p-3 mb-2 sidebar-link\"><i
                                        class=\"fas fa-table text-light fa-lg mr-3\"></i> Bilan Individuel</a>
                            </li>
                        
                            <li class=\"nav-item\">
                                <a href=\"\" class=\"nav-link text-white p-3 mb-2 sidebar-link\"><i
                                        class=\"fa fa-cubes text-light fa-lg mr-3\"></i> Mes Compétences</a>
                            </li>
                    
                        {% endif %}
                    
                    </ul>
                </div>
                <!-- end of sidebar -->

                <!-- top-nav -->
                <!-- this menu contain an application title, email and avatar user and finally a logout button -->
                <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar\">
                    <div class=\"row align-items-center \">
                        <div class=\"col-md-6\">
                            <h4 class=\"text-light mb-0\" >Fabrique Admin</h4>
                        </div>
                        
                        {# <div class=\"col-md-4 d-flex align-items-center \">
                            {% if app.user.roles[0] == 'ROLE_USER' %}
                                <img src=\"{{ asset('uploads/brochures/') }}{{app.user.avatar}}\" class=\"rounded-circle\"  >
                            {% endif %}
                            <h5 class=\"text-white ml-2 \" >{{ app.user.email }}</h5>
                        </div> #}
                        <div class=\"col-md-6\">
                            <ul class=\"navbar-nav\">
                                <!-- logout button -->
                                {% if app.user.roles[0] == 'ROLE_USER' %}
                                <li class=\"nav-item ml-auto\">
                                    <a class=\"nav-link dropdown-toggle text-light p-0 \" data-toggle=\"dropdown\" id=\"drop-logout\" href=\"#\">
                                        <img src=\"{{ asset('uploads/brochures/') }}{{app.user.avatar}}\" class=\"avatar-sd\" alt=\"\">
                                        {{app.user.fullname|upper}}
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"drop-logout\">
                                        <a href=\"#\" class=\"dropdown-item\">Mon profil</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a href=\"\" data-toggle=\"modal\" data-target=\"#sign-out\" class=\"dropdown-item\">Déconnexion</a>
                                         
                                    </div>
                                    {% else %}
                                    <li class=\"nav-item ml-auto my-3\">
                                        <span class=\"text-light\">{{app.user.email}}</span>
                                        <a href=\"\" class=\"m-2\" data-toggle=\"modal\" data-target=\"#sign-out\">
                                            <i class=\"fas fa-sign-out-alt text-light fa-lg\"></i>
                                        </a>
                                    </li>
                                    {% endif %}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end of top-nav -->
            </div>
        </div>
    </div>
</nav>
<!-- end of navbar -->

<!-- modal -->
<!-- this modal is called when we want to logout to confirm -->
<div class=\"modal fade\" id=\"sign-out\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">Voulez-vous vous déconnecter?</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            </div>
            <div class=\"modal-body\">
                Appuyer sur <span class=\"badge badge-danger\">Déconnexion</span>  pour quitter
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Rester connécté</button>
                <a href=\"{{ path('app_logout') }}\" class=\"btn btn-danger\">Déconnexion</a>
            </div>
        </div>
    </div>
</div>", "template_parts/_nav_user.html.twig", "/var/www/html/FabriqueAdmin/templates/template_parts/_nav_user.html.twig");
    }
}
