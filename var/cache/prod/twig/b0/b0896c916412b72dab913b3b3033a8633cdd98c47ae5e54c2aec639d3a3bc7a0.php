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

/* editor/promotion/promotion_edit.html.twig */
class __TwigTemplate_2a1799f9426cd15f040e0c0547250f0a237e1e653d4b1a68c58d11b2cc646b0d extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "editor/promotion/promotion_edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Modification d'une promotion";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 7)) {
            // line 8
            echo "
    ";
            // line 10
            echo "    <div class=\"container-fluid\" >
        <div class=\"row\">
            <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto my-5\">
                <!-- inserer le menu bar de promotion -->
                ";
            // line 14
            $this->loadTemplate("editor/promotion/_nav_promotion.html.twig", "editor/promotion/promotion_edit.html.twig", 14)->display(twig_array_merge($context, ["p" => 1]));
            // line 15
            echo "
                <div class=\"my-5\">
                        <!-- display promotion form to be edited -->
                        <h4  class=\"btn btn-info\">Modifier une promotion</h4>
                        ";
            // line 19
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
                        ";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
                        
                        <button class=\"btn btn-outline-danger d-block ml-auto\">Enregistrer</button>
                        ";
            // line 23
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "
                    
                </div>

            </div>
        </div>
    </div>
";
        }
    }

    // line 33
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/css/select2.min.css\">
";
    }

    // line 37
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/js/select2.min.js\"></script>
<script>

    \$('select').select2();
    
</script>

";
    }

    public function getTemplateName()
    {
        return "editor/promotion/promotion_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 38,  114 => 37,  109 => 34,  105 => 33,  92 => 23,  86 => 20,  82 => 19,  76 => 15,  74 => 14,  68 => 10,  65 => 8,  63 => 7,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "editor/promotion/promotion_edit.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/promotion/promotion_edit.html.twig");
    }
}
