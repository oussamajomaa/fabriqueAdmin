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
        echo "                <div class=\"row mt-5  text-light\"  >
                    <div class=\"col p-1 text-center\">
                        <a class=\"text-light\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateur");
        echo "\">
                            <div class=\" bar alert-primary\">
                                <i class=\"fas fa-users h1\"></i>
                                <h2>Utilisateurs</h2>
                                <h3>";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["countUser"]) || array_key_exists("countUser", $context) ? $context["countUser"] : (function () { throw new RuntimeError('Variable "countUser" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "</h3>
                            </div>
                        </a>
                    </div>
                    <div class=\"col p-1 text-center\">
                        <a class=\"text-light\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_promo_liste");
        echo "\">
                            <div class=\" bar alert-secondary\">
                                <i class=\"fas fa-certificate h1\"></i>
                                <h3>Promotions</h3>
                                <h3>";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["countPromotion"]) || array_key_exists("countPromotion", $context) ? $context["countPromotion"] : (function () { throw new RuntimeError('Variable "countPromotion" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "</h3>
                            </div>
                        </a>
                    </div>
                    <div class=\"col  p-1 text-center\">
                        <a class=\"text-light\" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_formation");
        echo "\">
                            <div class=\"alert-light bar\">
                                <i class=\"fas fa-laptop-code h1\"></i>
                                <h2>Formations</h2>
                                <h3>";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["countFormation"]) || array_key_exists("countFormation", $context) ? $context["countFormation"] : (function () { throw new RuntimeError('Variable "countFormation" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "</h3>
                            </div>
                        </a>
                    </div>
                    <div class=\"col  p-1 text-center\">
                        <a class=\"text-light\" href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_apprenant_liste");
        echo "\">
                            <div class=\"alert-success bar\">
                                <i class=\"fas fa-user-graduate h1\"></i>
                                <h2>Apprenants</h2>
                                <h3>";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["countApprenant"]) || array_key_exists("countApprenant", $context) ? $context["countApprenant"] : (function () { throw new RuntimeError('Variable "countApprenant" does not exist.', 63, $this->source); })()), "html", null, true);
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
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_entreprise");
        echo "\">
                            <div class=\"alert-dark bar\">
                                <i class=\"fas fa-chart-line h1\"></i>
                                <h2>Entreprises</h2>
                                <h3>";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["countEntreprise"]) || array_key_exists("countEntreprise", $context) ? $context["countEntreprise"] : (function () { throw new RuntimeError('Variable "countEntreprise" does not exist.', 85, $this->source); })()), "html", null, true);
        echo "</h3>
                            </div>
                        </a>
                    </div>
                    <div class=\"col p-1 text-center\">
                        <a class=\"text-light\" href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_offre");
        echo "\">
                            <div class=\"alert-info bar\">
                                <i class=\"fas fa-toolbox h1\"></i>
                                <h2>Stages</h2>
                                <h3>";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["countOffres"]) || array_key_exists("countOffres", $context) ? $context["countOffres"] : (function () { throw new RuntimeError('Variable "countOffres" does not exist.', 94, $this->source); })()), "html", null, true);
        echo "</h3>
                            </div>
                        </a>
                    </div>
                    <div class=\"col p-1 text-center\">
                        <a class=\"text-light\" href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_contact");
        echo "\">
                            <div class=\"alert-danger bar\">
                                <i class=\"fas fa-phone-alt h1\"></i>
                                <h2>Contacts</h2>
                                <h3>";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["countContact"]) || array_key_exists("countContact", $context) ? $context["countContact"] : (function () { throw new RuntimeError('Variable "countContact" does not exist.', 103, $this->source); })()), "html", null, true);
        echo "</h3>
                            </div>
                        </a>
                    </div>
                </div>
                ";
        // line 109
        echo "                ";
        // line 188
        echo "
            


            

    




            ";
        // line 200
        echo "           
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
        return array (  253 => 200,  240 => 188,  238 => 109,  230 => 103,  223 => 99,  215 => 94,  208 => 90,  200 => 85,  193 => 81,  172 => 63,  165 => 59,  157 => 54,  150 => 50,  142 => 45,  135 => 41,  127 => 36,  120 => 32,  116 => 30,  111 => 26,  107 => 23,  101 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                    <div class=\"col p-1 text-center\">
                        <a class=\"text-light\" href=\"{{ path('admin_utilisateur') }}\">
                            <div class=\" bar alert-primary\">
                                <i class=\"fas fa-users h1\"></i>
                                <h2>Utilisateurs</h2>
                                <h3>{{ countUser }}</h3>
                            </div>
                        </a>
                    </div>
                    <div class=\"col p-1 text-center\">
                        <a class=\"text-light\" href=\"{{ path('editor_promo_liste') }}\">
                            <div class=\" bar alert-secondary\">
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
                {# third line: details of all #}
                {# <div class=\"row my-1 text-light\">
                    <div class=\"col p-1\">
                        <div class=\"bg-info p-2 rounded\">
                            <h2>Apprenants</h2>
                            <table class=\"table\">
                                <thead>
                                    <th scope=\"col\">Nom et Prénom</th>
                                    <th scope=\"col\">Date de naissance</th>
                                    <th scope=\"col\">Email</th>
                                    <th scope=\"col\">Tel</th>
                                </thead>
                                {% for apprenant in apprenants %}
                                <tr>
                                    <td><a class=\"text-light\"
                                            href=\"{{ path('editor_apprenant_show',{'id':apprenant.id}) }}\">{{apprenant.nom|upper}}
                                            {{apprenant.prenom|upper}}</a></td>
                                    <td><a class=\"text-light\"
                                            href=\"{{ path('editor_apprenant_show',{'id':apprenant.id}) }}\">{{ apprenant.dateNaissance|date('d/m/Y') }}
                                    </a></td>
                                    <td><a class=\"text-light\"
                                            href=\"{{ path('editor_apprenant_show',{'id':apprenant.id}) }}\">{{ apprenant.email }}</a></td>
                                    
                                    <td><a class=\"text-light\"
                                            href=\"{{ path('editor_apprenant_show',{'id':apprenant.id}) }}\"></a>{{ apprenant.tel }}</td>
                                </tr>
                                {% endfor %}
                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"row my-1 text-light\">
                    <div class=\"col p-1\">
                        <div class=\"bg-secondary p-2 rounded\" id=\"promotion\">
                            <h2>Promotions</h2>
                            <table class=\"table \">
                                <thead>
                                    <th scope=\"col\">Année</th>
                                    <th scope=\"col\">Début</th>
                                    <th scope=\"col\">Fin</th>
                                    <th scope=\"col\">Formation</th>
                                    <th scope=\"col\">N° Apprenants</th>
                                </thead>
                                    {% for promotion in promotions %}
                                    <tr>
                                            <td><a class=\"text-light\" href=\"{{ path('editor_promo_show',{'id':promotion.id}) }}\">{{promotion.annee}}</a></td>
                                            <td><a class=\"text-light\" href=\"{{ path('editor_promo_show',{'id':promotion.id}) }}\">{{promotion.dateDebut|date('d/m/Y')}}</a></td>
                                            <td><a class=\"text-light\" href=\"{{ path('editor_promo_show',{'id':promotion.id}) }}\">{{promotion.dateFin|date('d/m/Y')}}</a></td>
                                            <td><a class=\"text-light\" href=\"{{ path('editor_promo_show',{'id':promotion.id}) }}\">{{promotion.formation.intitule}}</a></td>
                                            <td><a class=\"text-light\" href=\"{{ path('editor_promo_show',{'id':promotion.id}) }}\">{{promotion.apprenants|length}}</a></td>
                                        </tr>
                                    {% endfor %}
                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"row my-1 text-light\">
                    <div class=\"col p-1\">
                        <div class=\"bg-success p-2 rounded\" id=\"formation\">
                            <h2>Formations</h2>
                            <table class=\"table\">
                                <thead>
                                    <th scope=\"col\">Intitulé</th>
                                    <th scope=\"col\">Diplôme</th>
                                    <th scope=\"col\">Durée</th>
                                    <th scope=\"col\">N° d'heures</th>
                                </thead>
                                    {% for formation in formations %}
                                        <tr>
                                            <td><a class=\"text-light\" href=\"{{ path('editor_formation',{'id':formation.id}) }}\">{{formation.intitule}}</a></td>
                                            <td><a class=\"text-light\" href=\"{{ path('editor_formation',{'id':formation.id}) }}\">{{formation.diplome}}</a></td>
                                            <td><a class=\"text-light\" href=\"{{ path('editor_formation',{'id':formation.id}) }}\">{{formation.duree}}</a></td>
                                            <td><a class=\"text-light\" href=\"{{ path('editor_formation',{'id':formation.id}) }}\">{{formation.nombreHeure}}</a></td>
                                        </tr>
                                    {% endfor %}
                            </table>
                        </div>
                    </div>
                </div>
            </div> #}

            


            

    




            {# end body #}
           
        </div>
    </div>
</div>
{% endblock %}
", "editor/dashbord.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/dashbord.html.twig");
    }
}
