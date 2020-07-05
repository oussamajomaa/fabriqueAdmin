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

/* editor/entreprise/offre_new.html.twig */
class __TwigTemplate_5caa3bc61a03ec0de10b036d53d7adba9a2deec374ebd71ab48e10b9d77aef42 extends Template
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
        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "editor/apprenant/_collectionReseaux.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "editor/entreprise/offre_new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Ajouter un offre";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 8)) {
            // line 9
            echo "
<style>
    .custom-file-input {
        opacity: .4;
    }
</style>

<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-5 mt-5\">

            ";
            // line 20
            $this->loadTemplate("editor/entreprise/_nav_entreprise.html.twig", "editor/entreprise/offre_new.html.twig", 20)->display(twig_array_merge($context, ["p" => 2]));
            // line 21
            echo "
            <div class=\"my-5\">

                <!-- afficher le formulaire d'ajout d'un apprenant -->

                <h4 class=\"btn btn-info btn-sm\">Créer un offre</h4>
                ";
            // line 27
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
                ";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "

                <button class=\"btn btn-outline-danger d-block ml-auto\">Enregistrer</button>
                ";
            // line 31
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
        return "editor/entreprise/offre_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 31,  90 => 28,  86 => 27,  78 => 21,  76 => 20,  63 => 9,  61 => 8,  57 => 7,  50 => 3,  45 => 1,  43 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "editor/entreprise/offre_new.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/entreprise/offre_new.html.twig");
    }
}
