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

/* editor/apprenant/_collectionReseaux.html.twig */
class __TwigTemplate_aeb18df3dc28076d1b6336457e3b2566d9bad09f0ef07708d5ba211429c18476 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '_apprenant_Reseaux_widget' => [$this, 'block__apprenant_Reseaux_widget'],
            '_apprenant_Reseaux_entry_row' => [$this, 'block__apprenant_Reseaux_entry_row'],
            '_apprenant_Reseaux_entry_widget' => [$this, 'block__apprenant_Reseaux_entry_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('_apprenant_Reseaux_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('_apprenant_Reseaux_entry_row', $context, $blocks);
        // line 18
        echo "



";
        // line 22
        $this->displayBlock('_apprenant_Reseaux_entry_widget', $context, $blocks);
    }

    // line 1
    public function block__apprenant_Reseaux_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

<input type=\"hidden\" id=\"widgets-counter\" value=\"0\">
<div class=\"form-group\">
    <button type=\"button\" class=\"btn btn-info\" id=\"add-reseau\">Ajouter un réseau</button>

</div>

";
    }

    // line 13
    public function block__apprenant_Reseaux_entry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "
";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

";
    }

    // line 22
    public function block__apprenant_Reseaux_entry_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "
<div class=\"form-group\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
    <div class=\"row\">
        <div class=\"col-10\">
            <div class=\"row\">

                <div class=\"col\">
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Nom", [], "any", false, false, false, 30), 'widget');
        echo "
                </div>
                <div class=\"col\">
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Lien", [], "any", false, false, false, 33), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"col-2\">
            <button type=\"button\" data-action=\"delete\" data-target=\"#";
        // line 38
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"btn btn-danger\" id=\"delete-reseau\">X</button>
        </div>
        
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "editor/apprenant/_collectionReseaux.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  121 => 38,  113 => 33,  107 => 30,  98 => 24,  95 => 23,  91 => 22,  84 => 15,  81 => 14,  77 => 13,  64 => 3,  61 => 2,  57 => 1,  53 => 22,  47 => 18,  45 => 13,  42 => 12,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "editor/apprenant/_collectionReseaux.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/apprenant/_collectionReseaux.html.twig");
    }
}
