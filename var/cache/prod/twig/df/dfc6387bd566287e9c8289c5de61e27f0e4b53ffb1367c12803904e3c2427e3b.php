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
class __TwigTemplate_30b236c173fd6b1a6f653365a0e73e4a6ee08ac198c5d58c247192a285faa42a extends Template
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
        if (0 === twig_compare((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 16), "roles", [], "any", false, false, false, 16)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "ROLE_ADMIN")) {
            // line 17
            echo "                        <h5 class=\"text-center text-light\">Rôle: Administrateur</h5>
                    ";
        }
        // line 19
        echo "
                    ";
        // line 20
        if (0 === twig_compare((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 20), "roles", [], "any", false, false, false, 20)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "ROLE_EDITOR")) {
            // line 21
            echo "                        <h5 class=\"text-center text-light\">Rôle: Editeur</h5>
                    ";
        }
        // line 23
        echo "
                    ";
        // line 24
        if (0 === twig_compare((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 24), "roles", [], "any", false, false, false, 24)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "ROLE_RESERVE")) {
            // line 25
            echo "                        <h5 class=\"text-center text-light\">Rôle: Accèss Réservé<h5>
                    ";
        }
        // line 27
        echo "
                    ";
        // line 28
        if (0 === twig_compare((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 28), "roles", [], "any", false, false, false, 28)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[0] ?? null) : null), "ROLE_USER")) {
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
        if (0 === twig_compare((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 75), "roles", [], "any", false, false, false, 75)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[0] ?? null) : null), "ROLE_RESERVE")) {
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
        if (0 === twig_compare((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 94), "roles", [], "any", false, false, false, 94)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[0] ?? null) : null), "ROLE_USER")) {
            // line 95
            echo "                    
                            <li class=\"nav-item\">
                                <a class=\"nav-link p-3 mb-2 sidebar-link text-white\" href=\"";
            // line 97
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("apprenant_profil");
            echo "\"><i
                                        class=\"fas fa-user text-light fa-lg mr-3\"></i> Profil</a>
                            </li>
                        
                           
                            <li class=\"nav-item\">
                                <a href=\"";
            // line 103
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("apprenant_profil");
            echo "\" class=\"nav-link text-white p-3 mb-2 sidebar-link\"><i
                                        class=\"fas fa-table text-light fa-lg mr-3\"></i> Bilan Individuel</a>
                            </li>
                        
                            <li class=\"nav-item\">
                                <a href=\"";
            // line 108
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("apprenant_profil");
            echo "\" class=\"nav-link text-white p-3 mb-2 sidebar-link\"><i
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
        if (0 === twig_compare((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 135), "roles", [], "any", false, false, false, 135)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[0] ?? null) : null), "ROLE_USER")) {
            // line 136
            echo "                                <li class=\"nav-item ml-auto\">
                                    <a class=\"nav-link dropdown-toggle text-light p-0 \" data-toggle=\"dropdown\" id=\"drop-logout\" href=\"#\">
                                        <img src=\"";
            // line 138
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/brochures/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 138), "avatar", [], "any", false, false, false, 138), "html", null, true);
            echo "\" class=\"avatar-sd\" alt=\"\">
                                        ";
            // line 139
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 139), "fullname", [], "any", false, false, false, 139)), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 149), "email", [], "any", false, false, false, 149), "html", null, true);
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
        return array (  299 => 181,  271 => 155,  262 => 149,  259 => 148,  247 => 139,  242 => 138,  238 => 136,  236 => 135,  231 => 132,  216 => 113,  208 => 108,  200 => 103,  191 => 97,  187 => 95,  185 => 94,  182 => 93,  164 => 78,  160 => 76,  158 => 75,  155 => 74,  151 => 72,  144 => 64,  136 => 59,  128 => 54,  124 => 52,  117 => 49,  115 => 48,  108 => 44,  105 => 43,  103 => 42,  90 => 31,  86 => 29,  84 => 28,  81 => 27,  77 => 25,  75 => 24,  72 => 23,  68 => 21,  66 => 20,  63 => 19,  59 => 17,  57 => 16,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "template_parts/_nav_user.html.twig", "/var/www/html/FabriqueAdmin/templates/template_parts/_nav_user.html.twig");
    }
}
