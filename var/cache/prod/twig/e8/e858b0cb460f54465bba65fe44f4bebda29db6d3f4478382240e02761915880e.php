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

/* editor/dashbord.html.twig */
class __TwigTemplate_17ba1a6ce707bf5d5af87e4f8fb2c8bfbf44d22f945e477af3b1b823110ef020 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "editor/dashbord.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Dashbord";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<style>
    .bar{
        height: 150px;
        box-shadow: 5px 7px 25px #999;
        border-radius: 5px;
        padding: 10px;
    }
    .col a{
        text-decoration: none;
    }
</style>
";
        // line 18
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-5 mt-5\">
            
            ";
        // line 23
        echo "
            <div class=\"container mt-4\">
                ";
        // line 26
        echo "                <div class=\"row my-1\">
                    <i class=\"fas fa-home text-danger fa-lg mr-3\" style=\"font-size:32\"></i> <p class=\"badge badge-danger\">Tableau de bord</p>
                </div>
                ";
        // line 30
        echo "                
                
                <div class=\"row mt-5  text-light\"  >
                ";
        // line 33
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 34
            echo "                    <div class=\"col p-1 text-center\">
                        <a class=\"text-light\" href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateur");
            echo "\">
                            <div class=\" bar alert-primary\">
                                <i class=\"fas fa-users h1\"></i>
                                <h2>Utilisateurs</h2>
                                <h3>";
            // line 39
            echo twig_escape_filter($this->env, ($context["countUser"] ?? null), "html", null, true);
            echo "</h3>
                            </div>
                        </a>
                    </div>
                ";
        }
        // line 44
        echo "                    <div class=\"col p-1 text-center\">
                        <a class=\"text-light\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_promo_liste");
        echo "\">
                            <div class=\" bar alert-secondary\">
                                <i class=\"fas fa-certificate h1\"></i>
                                <h3>Promotions</h3>
                                <h3>";
        // line 49
        echo twig_escape_filter($this->env, ($context["countPromotion"] ?? null), "html", null, true);
        echo "</h3>
                            </div>
                        </a>
                    </div>
                    <div class=\"col  p-1 text-center\">
                        <a class=\"text-light\" href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_formation");
        echo "\">
                            <div class=\"alert-light bar\">
                                <i class=\"fas fa-laptop-code h1\"></i>
                                <h2>Formations</h2>
                                <h3>";
        // line 58
        echo twig_escape_filter($this->env, ($context["countFormation"] ?? null), "html", null, true);
        echo "</h3>
                            </div>
                        </a>
                    </div>
                    <div class=\"col  p-1 text-center\">
                        <a class=\"text-light\" href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_apprenant_liste");
        echo "\">
                            <div class=\"alert-success bar\">
                                <i class=\"fas fa-user-graduate h1\"></i>
                                <h2>Apprenants</h2>
                                <h3>";
        // line 67
        echo twig_escape_filter($this->env, ($context["countApprenant"] ?? null), "html", null, true);
        echo "</h3>
                            </div>
                        </a>
                    </div>
                   
                </div>

                <div class=\"row my-1 text-light\">
                    <div class=\"col p-1 text-center\">
                        <a class=\"text-light\" href=\"\"></a>
                            <div class=\"alert-warning bar\">
                                <i class=\"far fa-handshake h1\"></i>
                                <h2>Partenaires</h2>
                                <h3>N°</h3>
                            </div>
                        </div>
                    
                    <div class=\"col p-1 text-center\">
                        <a class=\"text-light\" href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_entreprise");
        echo "\">
                            <div class=\"alert-dark bar\">
                                <i class=\"fas fa-chart-line h1\"></i>
                                <h2>Entreprises</h2>
                                <h3>";
        // line 89
        echo twig_escape_filter($this->env, ($context["countEntreprise"] ?? null), "html", null, true);
        echo "</h3>
                            </div>
                        </a>
                    </div>
                    <div class=\"col p-1 text-center\">
                        <a class=\"text-light\" href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_offre");
        echo "\">
                            <div class=\"alert-info bar\">
                                <i class=\"fas fa-toolbox h1\"></i>
                                <h2>Stages</h2>
                                <h3>";
        // line 98
        echo twig_escape_filter($this->env, ($context["countOffres"] ?? null), "html", null, true);
        echo "</h3>
                            </div>
                        </a>
                    </div>
                    <div class=\"col p-1 text-center\">
                        <a class=\"text-light\" href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_contact");
        echo "\">
                            <div class=\"alert-danger bar\">
                                <i class=\"fas fa-phone-alt h1\"></i>
                                <h2>Contacts</h2>
                                <h3>";
        // line 107
        echo twig_escape_filter($this->env, ($context["countContact"] ?? null), "html", null, true);
        echo "</h3>
                            </div>
                        </a>
                    </div>
                </div>
           
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "editor/dashbord.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 107,  202 => 103,  194 => 98,  187 => 94,  179 => 89,  172 => 85,  151 => 67,  144 => 63,  136 => 58,  129 => 54,  121 => 49,  114 => 45,  111 => 44,  103 => 39,  96 => 35,  93 => 34,  91 => 33,  86 => 30,  81 => 26,  77 => 23,  71 => 18,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "editor/dashbord.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/dashbord.html.twig");
    }
}
