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

/* template_parts/_nav.html.twig */
class __TwigTemplate_e3bb8d6d0ae1e9a9aea59245a0e68de99cb7d60415de8fe124f03dad72d39d7b extends Template
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
        echo "
<!-- a simple menu with connexion button -->
<div class=\"container-fluid p-0 pb-3\">
    <div class=\"row m-0\">
        <div class=\"col p-0\">
            <nav class=\"navbar navbar-expand-md bg-danger navbar-dark fixed-top mb-5\">
                <div class=\"ml-2 mr-2\">
                    <img style=\"width: 5vw\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/FA.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapsibleNavbar\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse \" id=\"collapsibleNavbar\">
                    <ul class=\"navbar-nav ml-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link text-light\"  href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">CONNEXION</a>
                        </li>
                    </ul>
                </div>

            </nav>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "template_parts/_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 16,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "template_parts/_nav.html.twig", "/var/www/html/FabriqueAdmin/templates/template_parts/_nav.html.twig");
    }
}
