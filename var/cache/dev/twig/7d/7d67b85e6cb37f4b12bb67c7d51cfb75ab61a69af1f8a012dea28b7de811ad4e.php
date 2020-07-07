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
class __TwigTemplate_d6bad287d8ea32de10f0203b29ec906b34b4c8b22b5c309359986c081febae31 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/dashbord.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/dashbord.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "editor/dashbord.html.twig", 1);
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

        echo "Dashbord";
        
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
            echo twig_escape_filter($this->env, (isset($context["countUser"]) || array_key_exists("countUser", $context) ? $context["countUser"] : (function () { throw new RuntimeError('Variable "countUser" does not exist.', 39, $this->source); })()), "html", null, true);
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
                            <div class=\" bar alert-danger\">
                                <i class=\"fas fa-certificate h1\"></i>
                                <h3>Promotions</h3>
                                <h3>";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["countPromotion"]) || array_key_exists("countPromotion", $context) ? $context["countPromotion"] : (function () { throw new RuntimeError('Variable "countPromotion" does not exist.', 49, $this->source); })()), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["countFormation"]) || array_key_exists("countFormation", $context) ? $context["countFormation"] : (function () { throw new RuntimeError('Variable "countFormation" does not exist.', 58, $this->source); })()), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["countApprenant"]) || array_key_exists("countApprenant", $context) ? $context["countApprenant"] : (function () { throw new RuntimeError('Variable "countApprenant" does not exist.', 67, $this->source); })()), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["countEntreprise"]) || array_key_exists("countEntreprise", $context) ? $context["countEntreprise"] : (function () { throw new RuntimeError('Variable "countEntreprise" does not exist.', 89, $this->source); })()), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["countOffres"]) || array_key_exists("countOffres", $context) ? $context["countOffres"] : (function () { throw new RuntimeError('Variable "countOffres" does not exist.', 98, $this->source); })()), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["countContact"]) || array_key_exists("countContact", $context) ? $context["countContact"] : (function () { throw new RuntimeError('Variable "countContact" does not exist.', 107, $this->source); })()), "html", null, true);
        echo "</h3>
                            </div>
                        </a>
                    </div>
                </div>
           
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  239 => 107,  232 => 103,  224 => 98,  217 => 94,  209 => 89,  202 => 85,  181 => 67,  174 => 63,  166 => 58,  159 => 54,  151 => 49,  144 => 45,  141 => 44,  133 => 39,  126 => 35,  123 => 34,  121 => 33,  116 => 30,  111 => 26,  107 => 23,  101 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig'  %}

{% block title %}Dashbord{% endblock %}

{% block body %}
<style>
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
{# structure de la page 10 colonnes de largeur et alignée à droite #}
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-5 mt-5\">
            
            {# page body #}

            <div class=\"container mt-4\">
                {# first line with title and icon #}
                <div class=\"row my-1\">
                    <i class=\"fas fa-home text-danger fa-lg mr-3\" style=\"font-size:32\"></i> <p class=\"badge badge-danger\">Tableau de bord</p>
                </div>
                {# second line, number of promotion, training, learner and partner #}
                
                
                <div class=\"row mt-5  text-light\"  >
                {% if is_granted('ROLE_ADMIN') %}
                    <div class=\"col p-1 text-center\">
                        <a class=\"text-light\" href=\"{{ path('admin_utilisateur') }}\">
                            <div class=\" bar alert-primary\">
                                <i class=\"fas fa-users h1\"></i>
                                <h2>Utilisateurs</h2>
                                <h3>{{ countUser }}</h3>
                            </div>
                        </a>
                    </div>
                {% endif %}
                    <div class=\"col p-1 text-center\">
                        <a class=\"text-light\" href=\"{{ path('editor_promo_liste') }}\">
                            <div class=\" bar alert-danger\">
                                <i class=\"fas fa-certificate h1\"></i>
                                <h3>Promotions</h3>
                                <h3>{{ countPromotion }}</h3>
                            </div>
                        </a>
                    </div>
                    <div class=\"col  p-1 text-center\">
                        <a class=\"text-light\" href=\"{{ path('editor_formation') }}\">
                            <div class=\"alert-light bar\">
                                <i class=\"fas fa-laptop-code h1\"></i>
                                <h2>Formations</h2>
                                <h3>{{ countFormation }}</h3>
                            </div>
                        </a>
                    </div>
                    <div class=\"col  p-1 text-center\">
                        <a class=\"text-light\" href=\"{{ path('editor_apprenant_liste') }}\">
                            <div class=\"alert-success bar\">
                                <i class=\"fas fa-user-graduate h1\"></i>
                                <h2>Apprenants</h2>
                                <h3>{{ countApprenant }}</h3>
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
                        <a class=\"text-light\" href=\"{{ path('editor_entreprise') }}\">
                            <div class=\"alert-dark bar\">
                                <i class=\"fas fa-chart-line h1\"></i>
                                <h2>Entreprises</h2>
                                <h3>{{ countEntreprise }}</h3>
                            </div>
                        </a>
                    </div>
                    <div class=\"col p-1 text-center\">
                        <a class=\"text-light\" href=\"{{ path('editor_offre') }}\">
                            <div class=\"alert-info bar\">
                                <i class=\"fas fa-toolbox h1\"></i>
                                <h2>Stages</h2>
                                <h3>{{ countOffres }}</h3>
                            </div>
                        </a>
                    </div>
                    <div class=\"col p-1 text-center\">
                        <a class=\"text-light\" href=\"{{ path('editor_contact') }}\">
                            <div class=\"alert-danger bar\">
                                <i class=\"fas fa-phone-alt h1\"></i>
                                <h2>Contacts</h2>
                                <h3>{{countContact}}</h3>
                            </div>
                        </a>
                    </div>
                </div>
           
        </div>
    </div>
</div>
{% endblock %}
", "editor/dashbord.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/dashbord.html.twig");
    }
}
