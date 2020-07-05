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

/* main/access_denied.html.twig */
class __TwigTemplate_99f8e0fe0077dd241c9ea9088e9e3bd57a7da62cdb1dbf9d9729d1a8e36daa6f extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "main/access_denied.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Access denied";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
";
        // line 8
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto my-5\">

            ";
        // line 13
        echo "
            <div class=\"mt-5 \" id=\"access\">
            <div class=\"col-12 col-md-6 m-auto  p-5  text-center rounded border\" >
                <h4 style=\"font-family: 'Amiri', serif;\" >Vous n'avez pas le droit d'aller sur cette url !!</h4>
                <button type=\"button\" class=\"fermer btn btn-outline-danger mt-5\">Fermer</button>
            </div>
            </div>

        </div>
    </div>
</div>


";
    }

    // line 28
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "
    <script>
        let fermer = document.querySelector('.fermer')
        let modal = document.querySelector('#access')
        fermer.addEventListener('click', () => {
            modal.style.display = 'none'
        })
    </script>

";
    }

    public function getTemplateName()
    {
        return "main/access_denied.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 29,  85 => 28,  68 => 13,  62 => 8,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/access_denied.html.twig", "/var/www/html/FabriqueAdmin/templates/main/access_denied.html.twig");
    }
}
