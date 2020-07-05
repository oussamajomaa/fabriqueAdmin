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

/* editor/entreprise/_nav_entreprise.html.twig */
class __TwigTemplate_4b743d3dc6f22b39229410279eb6378745e9e187277f89517cf48c70e7f424c9 extends Template
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
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light mt-3\">
    <a class=\"navbar-brand text-danger\" href=\"#\"><i class=\"fas fa-chart-line text-danger fa-lg mr-3\"></i></a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\"
        aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item ";
        // line 9
        if (0 === twig_compare(($context["p"] ?? null), 1)) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_entreprise");
        echo "\">GESTION DES ENTREPRISES</a>
            </li>
            <li class=\"nav-item ";
        // line 12
        if (0 === twig_compare(($context["p"] ?? null), 2)) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_offre");
        echo "\">GESTION DES OFFRES</a>
            </li>
            <li class=\"nav-item ";
        // line 15
        if (0 === twig_compare(($context["p"] ?? null), 3)) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_contact");
        echo "\">CONTACTS</a>
            </li>


        </ul>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "editor/entreprise/_nav_entreprise.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 16,  69 => 15,  64 => 13,  58 => 12,  53 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "editor/entreprise/_nav_entreprise.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/entreprise/_nav_entreprise.html.twig");
    }
}
