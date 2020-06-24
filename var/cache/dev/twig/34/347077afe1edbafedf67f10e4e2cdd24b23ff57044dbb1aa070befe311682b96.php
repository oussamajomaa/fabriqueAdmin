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

/* editor/promotion/_nav_promotion.html.twig */
class __TwigTemplate_f4619150e018d2894c2b0a1d74bcb52dafb44741cab83d241d89faec2aaa9c9e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/promotion/_nav_promotion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/promotion/_nav_promotion.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light mt-3\" >
    <a class=\"navbar-brand text-danger\" href=\"#\"><i class=\"fas fa-certificate fa-lg mr-3\"></i></a>
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_promo_liste");
        echo "\">PROMOTIONS</a>
            </li>
            <li class=\"nav-item ";
        // line 12
        if (0 === twig_compare((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 12, $this->source); })()), 2)) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_formation");
        echo "\">FORMATIONS</a>
            </li>
            <li class=\"nav-item ";
        // line 15
        if (0 === twig_compare((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 15, $this->source); })()), 3)) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_attr");
        echo "\">ATTRIBUER UN APPRENANT</a>
            </li>
            <li class=\"nav-item ";
        // line 18
        if (0 === twig_compare((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 18, $this->source); })()), 4)) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"\">PARTENAIRES</a>
            </li>
          

        </ul>
    </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "editor/promotion/_nav_promotion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 18,  81 => 16,  75 => 15,  70 => 13,  64 => 12,  59 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light mt-3\" >
    <a class=\"navbar-brand text-danger\" href=\"#\"><i class=\"fas fa-certificate fa-lg mr-3\"></i></a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\"
        aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item {% if p == 1 %}active{% endif %}\">
                <a class=\"nav-link\" href=\"{{ path('editor_promo_liste') }}\">PROMOTIONS</a>
            </li>
            <li class=\"nav-item {% if p == 2 %}active{% endif %}\">
                <a class=\"nav-link\" href=\"{{ path('editor_formation') }}\">FORMATIONS</a>
            </li>
            <li class=\"nav-item {% if p == 3 %}active{% endif %}\">
                <a class=\"nav-link\" href=\"{{ path('editor_attr') }}\">ATTRIBUER UN APPRENANT</a>
            </li>
            <li class=\"nav-item {% if p == 4 %}active{% endif %}\">
                <a class=\"nav-link\" href=\"\">PARTENAIRES</a>
            </li>
          

        </ul>
    </div>
</nav>", "editor/promotion/_nav_promotion.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/promotion/_nav_promotion.html.twig");
    }
}
