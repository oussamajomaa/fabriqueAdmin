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
class __TwigTemplate_a8cd7142c3dfe233d44472765d9faafc503d42b36a171adc74cdea8b5ddfe3f7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/entreprise/_collectionOffre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/entreprise/_collectionOffre.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block__entreprise_Offres_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_entreprise_Offres_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_entreprise_Offres_widget"));

        // line 2
        echo "
";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'widget');
        echo "

<input type=\"hidden\" id=\"widgets-counter\" value=\"0\">
<div class=\"form-group\">
    <button type=\"button\" class=\"btn btn-info\" id=\"add-offre\">Ajouter un offre</button>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block__entreprise_Offres_entry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_entreprise_Offres_entry_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_entreprise_Offres_entry_row"));

        // line 13
        echo "
";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'widget');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block__entreprise_Offres_entry_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_entreprise_Offres_entry_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_entreprise_Offres_entry_widget"));

        // line 22
        echo "
<div class=\"form-group\" id=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "\">
    <div class=\"row ml-2\">
        <div class=\"col-10 border bg-light rounded collection\">
            <div class=\"row m-1\">
                <div class=\"col-12 col-md-6 mb-1\">
                    Type d'offre ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "Intitule", [], "any", false, false, false, 28), 'widget');
        echo "
                </div>
                <div class=\"col-12 col-md-6 mb-1\">
                    Télévérser le fichier";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "brochure", [], "any", false, false, false, 31), 'widget');
        echo "
                </div>
            </div>
            <div class=\"row m-1\">
                <div class=\"col-12 col-md-6 mb-1\">
                    Date de début ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "DateDebut", [], "any", false, false, false, 36), 'widget');
        echo "
                </div>
                <div class=\"col-12 col-md-6 mb-1\">
                    Date de fin ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "DateFin", [], "any", false, false, false, 39), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"col-2\">
            <button type=\"button\" data-action=\"delete\" data-target=\"#";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "\" class=\"btn-md btn-outline-danger rounded\">X</button>
        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "editor/entreprise/_collectionOffre.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  175 => 44,  167 => 39,  161 => 36,  153 => 31,  147 => 28,  139 => 23,  136 => 22,  126 => 21,  113 => 14,  110 => 13,  100 => 12,  82 => 3,  79 => 2,  69 => 1,  59 => 21,  53 => 17,  51 => 12,  48 => 11,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block _entreprise_Offres_widget %}

{{ form_widget(form) }}

<input type=\"hidden\" id=\"widgets-counter\" value=\"0\">
<div class=\"form-group\">
    <button type=\"button\" class=\"btn btn-info\" id=\"add-offre\">Ajouter un offre</button>
</div>

{% endblock %}

{% block _entreprise_Offres_entry_row %}

{{ form_widget(form) }}

{% endblock %}




{% block _entreprise_Offres_entry_widget %}

<div class=\"form-group\" id=\"{{id}}\">
    <div class=\"row ml-2\">
        <div class=\"col-10 border bg-light rounded collection\">
            <div class=\"row m-1\">
                <div class=\"col-12 col-md-6 mb-1\">
                    Type d'offre {{ form_widget(form.Intitule) }}
                </div>
                <div class=\"col-12 col-md-6 mb-1\">
                    Télévérser le fichier{{ form_widget(form.brochure) }}
                </div>
            </div>
            <div class=\"row m-1\">
                <div class=\"col-12 col-md-6 mb-1\">
                    Date de début {{ form_widget(form.DateDebut) }}
                </div>
                <div class=\"col-12 col-md-6 mb-1\">
                    Date de fin {{ form_widget(form.DateFin) }}
                </div>
            </div>
        </div>
        <div class=\"col-2\">
            <button type=\"button\" data-action=\"delete\" data-target=\"#{{id}}\" class=\"btn-md btn-outline-danger rounded\">X</button>
        </div>
    </div>
</div>

{% endblock %}", "editor/entreprise/_collectionOffre.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/entreprise/_collectionOffre.html.twig");
    }
}
