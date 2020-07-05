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

/* editor/entreprise/_collectionOffre.html.twig */
class __TwigTemplate_6f6934d184598763206052f6d7a98f3ed99eb875f313cb58de39565f841d6f69 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '_entreprise_Offres_widget' => [$this, 'block__entreprise_Offres_widget'],
            '_entreprise_Offres_entry_row' => [$this, 'block__entreprise_Offres_entry_row'],
            '_entreprise_Offres_entry_widget' => [$this, 'block__entreprise_Offres_entry_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('_entreprise_Offres_widget', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('_entreprise_Offres_entry_row', $context, $blocks);
        // line 17
        echo "



";
        // line 21
        $this->displayBlock('_entreprise_Offres_entry_widget', $context, $blocks);
    }

    // line 1
    public function block__entreprise_Offres_widget($context, array $blocks = [])
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
    <button type=\"button\" class=\"btn btn-info\" id=\"add-offre\">Ajouter un offre</button>
</div>

";
    }

    // line 12
    public function block__entreprise_Offres_entry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

";
    }

    // line 21
    public function block__entreprise_Offres_entry_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "
<div class=\"form-group\" id=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
    <div class=\"row ml-2\">
        <div class=\"col-10 border bg-light rounded collection\">
            <div class=\"row m-1\">
                <div class=\"col-12 col-md-6 mb-1\">
                    Type d'offre ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Intitule", [], "any", false, false, false, 28), 'widget');
        echo "
                </div>
                <div class=\"col-12 col-md-6 mb-1\">
                    Télévérser le fichier";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "brochure", [], "any", false, false, false, 31), 'widget');
        echo "
                </div>
            </div>
            <div class=\"row m-1\">
                <div class=\"col-12 col-md-6 mb-1\">
                    Date de début ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "DateDebut", [], "any", false, false, false, 36), 'widget');
        echo "
                </div>
                <div class=\"col-12 col-md-6 mb-1\">
                    Date de fin ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "DateFin", [], "any", false, false, false, 39), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"col-2\">
            <button type=\"button\" data-action=\"delete\" data-target=\"#";
        // line 44
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"btn-md btn-outline-danger rounded\">X</button>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "editor/entreprise/_collectionOffre.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  133 => 44,  125 => 39,  119 => 36,  111 => 31,  105 => 28,  97 => 23,  94 => 22,  90 => 21,  83 => 14,  80 => 13,  76 => 12,  64 => 3,  61 => 2,  57 => 1,  53 => 21,  47 => 17,  45 => 12,  42 => 11,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "editor/entreprise/_collectionOffre.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/entreprise/_collectionOffre.html.twig");
    }
}
