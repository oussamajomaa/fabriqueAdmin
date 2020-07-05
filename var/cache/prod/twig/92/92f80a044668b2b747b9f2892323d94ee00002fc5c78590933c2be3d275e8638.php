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
class __TwigTemplate_f00744fae908f0c6c63df579f74b4ca9562969d973b831f80c2d017df87f171c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Création d'un utilisateur";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_start');
        echo "      
                                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["registrationForm"] ?? null), 'widget');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_end');
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
        return array (  107 => 47,  80 => 23,  76 => 22,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "registration/register.html.twig", "/var/www/html/FabriqueAdmin/templates/registration/register.html.twig");
    }
}
