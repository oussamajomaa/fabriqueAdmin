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

/* editor/promotion/_collectionAppr.html.twig */
class __TwigTemplate_cb1600248da5cba985594b5bc9f5bbd7c8b5eaf32683549602182f0586a40cde extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '_promotion_apprenants_widget' => [$this, 'block__promotion_apprenants_widget'],
            '_promotion_apprenants_entry_row' => [$this, 'block__promotion_apprenants_entry_row'],
            '_promotion_apprenants_entry_widget' => [$this, 'block__promotion_apprenants_entry_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('_promotion_apprenants_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('_promotion_apprenants_entry_row', $context, $blocks);
        // line 18
        echo "



";
        // line 22
        $this->displayBlock('_promotion_apprenants_entry_widget', $context, $blocks);
    }

    // line 1
    public function block__promotion_apprenants_widget($context, array $blocks = [])
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
    <button type=\"button\" class=\"btn btn-info\" id=\"add-apprenant\">Ajouter un apprenant</button>

</div>

";
    }

    // line 13
    public function block__promotion_apprenants_entry_row($context, array $blocks = [])
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
    public function block__promotion_apprenants_entry_widget($context, array $blocks = [])
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Fullname", [], "any", false, false, false, 30), 'widget');
        echo "
                </div>
                ";
        // line 35
        echo "            </div>
        </div>
        <div class=\"col-2\">
            <button type=\"button\" data-action=\"delete\" data-target=\"#";
        // line 38
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"btn btn-danger\">X</button>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "editor/promotion/_collectionAppr.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  117 => 38,  112 => 35,  107 => 30,  98 => 24,  95 => 23,  91 => 22,  84 => 15,  81 => 14,  77 => 13,  64 => 3,  61 => 2,  57 => 1,  53 => 22,  47 => 18,  45 => 13,  42 => 12,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "editor/promotion/_collectionAppr.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/promotion/_collectionAppr.html.twig");
    }
}
