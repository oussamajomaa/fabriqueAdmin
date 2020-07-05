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

/* editor/apprenant/appreant_new.html.twig */
class __TwigTemplate_47da6124a4f1d817a87f8f9bb53419f71869e4115628071ba8c55191ee144cda extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "editor/apprenant/appreant_new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Ajouter une Promotion";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 9)) {
            // line 10
            echo "
    <style>
        .custom-file-input{
            opacity: .4;
        }
    </style>

    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-5 mt-5\">

                ";
            // line 21
            $this->loadTemplate("editor/apprenant/_nav_apprenant.html.twig", "editor/apprenant/appreant_new.html.twig", 21)->display(twig_array_merge($context, ["p" => 1]));
            // line 22
            echo "                
                <div class=\"my-5\">

                    <!-- afficher le formulaire d'ajout d'un apprenant -->
                    
                        <h4 class=\"btn btn-info btn-sm\">Créer un apprenant</h4>
                        ";
            // line 28
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
                        ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
                        
                        <button class=\"btn btn-outline-danger d-block ml-auto\">Enregistrer</button>
                        ";
            // line 32
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
    ";
        // line 46
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/collection.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "editor/apprenant/appreant_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 46,  113 => 44,  109 => 43,  97 => 32,  91 => 29,  87 => 28,  79 => 22,  77 => 21,  64 => 10,  62 => 9,  58 => 8,  51 => 3,  46 => 1,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "editor/apprenant/appreant_new.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/apprenant/appreant_new.html.twig");
    }
}
