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

/* registration/register.html.twig */
class __TwigTemplate_98a6724f5bbc74fe6c25356e577f9315bfe56ddee9fbe57b9212bbe038f1e92c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Création d'un utilisateur";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
<!--  if app.user 
if app.user.roles[0] == 'ROLE_ADMIN' %} -->

<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-5 mt-5\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-5\">
                        <div class=\"card shadow-lg border-0 rounded-lg mt-5\">
                            <div class=\"card-header\">
                                <h3 class=\"text-center font-weight-light my-3\">Créer un compte</h3>
                            </div>
                            <div class=\"card-body\">
                                
                                ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 22, $this->source); })()), 'form_start');
        echo "      
                                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), 'widget');
        echo "

                                <label for=\"\">Choisissez le rôle</label>
                                <div class=\"\">
                                    <label for=\"admin\">
                                    <input type=\"radio\" name=\"role\" value=\"ROLE_ADMIN\" class=\"ml-3\" id=\"admin\">
                                    Administrateur</label>

                                </div>
                                <div class=\"\">
                                    <label for=\"editor\">
                                    <input type=\"radio\" name=\"role\" value=\"ROLE_EDITOR\" class=\"ml-3\" id=\"editor\">
                                    Editeur</label>

                                </div>
                                <div class=\"form-group\">

                                    <label for=\"reserve\">
                                    <input type=\"radio\" name=\"role\" value=\"ROLE_RESERVE\" class=\"ml-3\" id=\"reserve\">
                                    Accèss Réservé</label>
                                </div>

                                
                                <button class=\"btn btn-outline-danger d-block ml-auto\">Enregistrer</button>
                                ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), 'form_end');
        echo "

                            </div>
                            <div class=\"card-footer text-center\">
                                <div class=\"small\"><a href=\"\">Besoin d'aide? Cliquez ici!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 47,  110 => 23,  106 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Création d'un utilisateur{% endblock %}

{% block body %}
    
<!--  if app.user 
if app.user.roles[0] == 'ROLE_ADMIN' %} -->

<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-5 mt-5\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-5\">
                        <div class=\"card shadow-lg border-0 rounded-lg mt-5\">
                            <div class=\"card-header\">
                                <h3 class=\"text-center font-weight-light my-3\">Créer un compte</h3>
                            </div>
                            <div class=\"card-body\">
                                
                                {{ form_start(registrationForm) }}      
                                {{ form_widget(registrationForm) }}

                                <label for=\"\">Choisissez le rôle</label>
                                <div class=\"\">
                                    <label for=\"admin\">
                                    <input type=\"radio\" name=\"role\" value=\"ROLE_ADMIN\" class=\"ml-3\" id=\"admin\">
                                    Administrateur</label>

                                </div>
                                <div class=\"\">
                                    <label for=\"editor\">
                                    <input type=\"radio\" name=\"role\" value=\"ROLE_EDITOR\" class=\"ml-3\" id=\"editor\">
                                    Editeur</label>

                                </div>
                                <div class=\"form-group\">

                                    <label for=\"reserve\">
                                    <input type=\"radio\" name=\"role\" value=\"ROLE_RESERVE\" class=\"ml-3\" id=\"reserve\">
                                    Accèss Réservé</label>
                                </div>

                                
                                <button class=\"btn btn-outline-danger d-block ml-auto\">Enregistrer</button>
                                {{ form_end(registrationForm) }}

                            </div>
                            <div class=\"card-footer text-center\">
                                <div class=\"small\"><a href=\"\">Besoin d'aide? Cliquez ici!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}", "registration/register.html.twig", "/var/www/html/FabriqueAdmin/templates/registration/register.html.twig");
    }
}
