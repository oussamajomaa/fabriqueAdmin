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

/* editor/formation/formation_edit.html.twig */
class __TwigTemplate_40999614c7eb211acf27e774059c941bd8d2ff75df58e66535827304b873dacc extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "editor/formation/formation_edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Modification d'une formation";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "

";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 8)) {
            // line 9
            echo "
    ";
            // line 11
            echo "    <div class=\"container-fluid \">
        <div class=\"row\">
            <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto my-5\">
            ";
            // line 14
            $this->loadTemplate("editor/promotion/_nav_promotion.html.twig", "editor/formation/formation_edit.html.twig", 14)->display(twig_array_merge($context, ["p" => 2]));
            // line 15
            echo "
            <div class=\"my-5\">
                <!-- display formation form to edit -->
                
                    <h4 class=\"btn btn-info\">Modifier une formation</h4>
                    ";
            // line 20
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
                    ";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
                

                    <button class=\"btn btn-outline-danger d-block ml-auto\">Enregistrer</button>
                    ";
            // line 25
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "
            </div>
            </div>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "editor/formation/formation_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 25,  85 => 21,  81 => 20,  74 => 15,  72 => 14,  67 => 11,  64 => 9,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "editor/formation/formation_edit.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/formation/formation_edit.html.twig");
    }
}
