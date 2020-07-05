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

/* template_parts/_footer.html.twig */
class __TwigTemplate_c22b22bb8d330bb62681a9de9ba84be4612364710d0d49b42c8ad84af92bec7a extends Template
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
        echo "<div class=\"container-fluid mb-5\">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto \">
            <div class=\"row\">
                <div class=\"col-12 col-md-6 col-lg-3 text-center\">
                    <a class=\"nav-link badge badge-dark\" href=\"\">home</a>
                    
                </div>
                <div class=\"col-12 col-md-6 col-lg-3 text-center\">
                    <a class=\"nav-link badge badge-dark\" href=\"\">home</a>
                
                </div>
                <div class=\"col-12 col-md-6 col-lg-3 text-center\">
                    <a class=\"nav-link badge badge-dark\" href=\"\">home</a>
                
                </div>
                <div class=\"col-12 col-md-6 col-lg-3 text-center\">
                    <a class=\"nav-link badge badge-dark\" href=\"\">home</a>
                
                </div>
              
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "template_parts/_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "template_parts/_footer.html.twig", "/var/www/html/FabriqueAdmin/templates/template_parts/_footer.html.twig");
    }
}
