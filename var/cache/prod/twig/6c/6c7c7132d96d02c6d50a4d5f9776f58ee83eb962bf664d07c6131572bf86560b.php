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

/* editor/promotion/promo_new.html.twig */
class __TwigTemplate_8a12d6a95be95941c42080606c360e966a8c9b861fd96a5317b538e2aec124cf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "editor/promotion/promo_new.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Ajouter une Promotion";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/css/select2.min.css\">


";
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 13)) {
            // line 14
            echo "

    <div class=\"container-fluid\" >
        <div class=\"row\">
            <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-5 mt-5\">

                ";
            // line 20
            $this->loadTemplate("editor/promotion/_nav_promotion.html.twig", "editor/promotion/promo_new.html.twig", 20)->display(twig_array_merge($context, ["p" => 1]));
            // line 21
            echo "
                <div class=\"my-5\">

                    <!-- afficher le formulaire d'ajout d'une promotion -->
                    <h4  class=\"btn btn-info btn-sm\">Créer une Promotion</h4>
                    ";
            // line 26
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
                    ";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
                    <button class=\"btn btn-outline-danger d-block ml-auto\">Enregistrer</button>
                    ";
            // line 29
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "

                </div>

            </div>
        </div>
    </div>
";
        }
    }

    // line 41
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/js/select2.min.js\"></script>
<script>
    \$('select').select2();
</script>
";
    }

    public function getTemplateName()
    {
        return "editor/promotion/promo_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 42,  112 => 41,  99 => 29,  94 => 27,  90 => 26,  83 => 21,  81 => 20,  73 => 14,  71 => 13,  67 => 12,  60 => 7,  56 => 6,  49 => 4,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "editor/promotion/promo_new.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/promotion/promo_new.html.twig");
    }
}
