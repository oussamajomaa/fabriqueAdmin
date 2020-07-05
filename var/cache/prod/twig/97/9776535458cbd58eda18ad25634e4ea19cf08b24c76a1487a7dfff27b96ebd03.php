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

/* editor/entreprise/_collectionContact.html.twig */
class __TwigTemplate_6ae1c3bb81a1f81dbb4756fa1e6379d3bc3013bda409ac7b18f0e142d18acf90 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '_entreprise_Contact_widget' => [$this, 'block__entreprise_Contact_widget'],
            '_entreprise_Contact_entry_row' => [$this, 'block__entreprise_Contact_entry_row'],
            '_entreprise_Contact_entry_widget' => [$this, 'block__entreprise_Contact_entry_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('_entreprise_Contact_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('_entreprise_Contact_entry_row', $context, $blocks);
        // line 18
        echo "



";
        // line 22
        $this->displayBlock('_entreprise_Contact_entry_widget', $context, $blocks);
    }

    // line 1
    public function block__entreprise_Contact_widget($context, array $blocks = [])
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
    <button type=\"button\" class=\"btn btn-info\" id=\"add-contact\">Ajouter un contact</button>

</div>

";
    }

    // line 13
    public function block__entreprise_Contact_entry_row($context, array $blocks = [])
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
    public function block__entreprise_Contact_entry_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "
<div class=\"form-group\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
    <div class=\"row  ml-2\">
        <div class=\"col-10  border bg-light rounded collection\">
            <div class=\"row m-1\">
                <div class=\"col-12 col-md-6 mb-1\">
                    Nom ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Nom", [], "any", false, false, false, 29), 'widget');
        echo "
                </div>
                <div class=\"col-12 col-md-6 \">
                    Prenom ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Prenom", [], "any", false, false, false, 32), 'widget');
        echo "
                </div>
            </div>
            <div class=\"row m-1\">
                <div class=\"col-12 col-lg-4 mb-1\">
                    Email ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Email", [], "any", false, false, false, 37), 'widget');
        echo "
                </div>
                <div class=\"col-12 col-lg-4 mb-1\">
                    Téléphone ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Tel", [], "any", false, false, false, 40), 'widget');
        echo "
                </div>
                <div class=\"col-12 col-lg-4 mb-1\">
                    Mobile ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Mobile", [], "any", false, false, false, 43), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"col-2\">
            <button type=\"button\" data-action=\"delete\" data-target=\"#";
        // line 48
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"btn-md btn-outline-danger rounded\">X</button>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "editor/entreprise/_collectionContact.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  140 => 48,  132 => 43,  126 => 40,  120 => 37,  112 => 32,  106 => 29,  98 => 24,  95 => 23,  91 => 22,  84 => 15,  81 => 14,  77 => 13,  64 => 3,  61 => 2,  57 => 1,  53 => 22,  47 => 18,  45 => 13,  42 => 12,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "editor/entreprise/_collectionContact.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/entreprise/_collectionContact.html.twig");
    }
}
