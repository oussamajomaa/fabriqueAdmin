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

/* editor/apprenant/apprenant_edit.html.twig */
class __TwigTemplate_d5531f2c0c759be2b5ece9b826874dd6ca0bdbc207d96f64276883297d86f800 extends Template
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
        // line 6
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "editor/apprenant/_collectionReseaux.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "editor/apprenant/apprenant_edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Modification d'un apprenant";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 10)) {
            // line 11
            echo "<style>

    .custom-file-input {
        opacity: .4;
    }
</style>
    
    <div class=\"container-fluid \">
        <div class=\"row\">
            <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto my-5\">
                <!-- insert apprenant menu -->
                ";
            // line 22
            $this->loadTemplate("editor/apprenant/_nav_apprenant.html.twig", "editor/apprenant/apprenant_edit.html.twig", 22)->display(twig_array_merge($context, ["p" => 1]));
            // line 23
            echo "
                <!-- display flash message -->
                <div class=\"my-5\">
                    <h4 class=\"btn btn-info btn-sm\">Modifier les infos de <strong>";
            // line 26
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["apprenant"] ?? null), "fullname", [], "any", false, false, false, 26)), "html", null, true);
            echo "</strong></h4>
                    <div>
                        <img width=\"64\" class=\"ml-auto rounded\" src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/brochures/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["apprenant"] ?? null), "avatar", [], "any", false, false, false, 28), "html", null, true);
            echo "\" alt=\"\">
                    </div>
                    ";
            // line 30
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
                    ";
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
                    <button class=\"btn btn-outline-danger d-block ml-auto\">Enregistrer</button>
                    ";
            // line 33
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "
                </div>
            </div>
        </div>
    </div>
";
        }
    }

    // line 43
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "
<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/collection.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "editor/apprenant/apprenant_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 45,  122 => 44,  118 => 43,  107 => 33,  102 => 31,  98 => 30,  92 => 28,  87 => 26,  82 => 23,  80 => 22,  67 => 11,  65 => 10,  62 => 9,  58 => 8,  51 => 3,  46 => 1,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "editor/apprenant/apprenant_edit.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/apprenant/apprenant_edit.html.twig");
    }
}
