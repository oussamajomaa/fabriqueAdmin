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
class __TwigTemplate_04ce8ae9044d99987db3e34fd81119f052d1e426f5f2f8227f2934dd7c0ee61f extends Template
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
        if (0 === twig_compare(($context["p"] ?? null), 1)) {
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
        if (0 === twig_compare(($context["p"] ?? null), 2)) {
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
        if (0 === twig_compare(($context["p"] ?? null), 3)) {
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
        if (0 === twig_compare(($context["p"] ?? null), 4)) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"\">PARTENAIRES</a>
            </li>
          

        </ul>
    </div>
</nav>";
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
        return array (  80 => 18,  75 => 16,  69 => 15,  64 => 13,  58 => 12,  53 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "editor/promotion/_nav_promotion.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/promotion/_nav_promotion.html.twig");
    }
}
