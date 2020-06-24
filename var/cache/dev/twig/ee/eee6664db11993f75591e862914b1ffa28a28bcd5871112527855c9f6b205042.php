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

/* editor/apprenant/_nav_apprenant.html.twig */
class __TwigTemplate_17ec6952df60a54533a0d48ea4537c1d806ee83eac6b96a60ebd479787827112 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/apprenant/_nav_apprenant.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/apprenant/_nav_apprenant.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light mt-3\" >
    <a class=\"navbar-brand text-danger\" href=\"#\"><i class=\"fas fa-user-graduate fa-lg mr-3\"></i></a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\"
        aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item ";
        // line 9
        if (0 === twig_compare((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 9, $this->source); })()), 1)) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_apprenant_liste");
        echo "\">APPRENANTS</a>
            </li>
            <li class=\"nav-item ";
        // line 12
        if (0 === twig_compare((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 12, $this->source); })()), 2)) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link \" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_retard");
        echo "\">RETARDS</a>
            </li>
            <li class=\"nav-item ";
        // line 15
        if (0 === twig_compare((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 15, $this->source); })()), 3)) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link \" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_absence");
        echo "\">ABSENCES</a>
            </li>
            <li class=\"nav-item ";
        // line 18
        if (0 === twig_compare((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 18, $this->source); })()), 4)) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link \" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_competence");
        echo "\">COMPETENCES</a>
            </li>
            

        </ul>
    </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "editor/apprenant/_nav_apprenant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 19,  86 => 18,  81 => 16,  75 => 15,  70 => 13,  64 => 12,  59 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light mt-3\" >
    <a class=\"navbar-brand text-danger\" href=\"#\"><i class=\"fas fa-user-graduate fa-lg mr-3\"></i></a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\"
        aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item {% if p == 1 %}active{% endif %}\">
                <a class=\"nav-link\" href=\"{{ path('editor_apprenant_liste') }}\">APPRENANTS</a>
            </li>
            <li class=\"nav-item {% if p == 2 %}active{% endif %}\">
                <a class=\"nav-link \" href=\"{{ path('editor_retard') }}\">RETARDS</a>
            </li>
            <li class=\"nav-item {% if p == 3 %}active{% endif %}\">
                <a class=\"nav-link \" href=\"{{ path('editor_absence') }}\">ABSENCES</a>
            </li>
            <li class=\"nav-item {% if p == 4 %}active{% endif %}\">
                <a class=\"nav-link \" href=\"{{ path('editor_competence') }}\">COMPETENCES</a>
            </li>
            

        </ul>
    </div>
</nav>", "editor/apprenant/_nav_apprenant.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/apprenant/_nav_apprenant.html.twig");
    }
}
