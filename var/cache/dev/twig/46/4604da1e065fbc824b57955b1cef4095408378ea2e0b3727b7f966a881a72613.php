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

/* security/login.html.twig */
class __TwigTemplate_5bbd2c3a6500dd6e493b3557c1ca81145da539fc19ff3923d17875e0c2bb87c1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "Formulaire de connexion";
        
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
        echo "<form method=\"post\">
    ";
        // line 7
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 8, $this->source); })()), "messageKey", [], "any", false, false, false, 8), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 8, $this->source); })()), "messageData", [], "any", false, false, false, 8), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 10
        echo "
    ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11)) {
            // line 12
            echo "        <div class=\"mb-3\">
            Vous êtes connecté en tant que ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "username", [], "any", false, false, false, 13), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
        </div>
    ";
        }
        // line 16
        echo "

<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-xl-12 col-lg-12 col-md-12 ml-auto mb-5 mt-5\">


<style>
.user-input-wrp {
\tposition: relative;
\t
}
.user-input-wrp .inputText{
\twidth: 100%;
\toutline: none;
\tborder:none;
\tborder-bottom: 1px solid #777;
 \tbox-shadow: none !important;
}
.user-input-wrp .inputText:focus{
\tborder-color: blue;
\tborder-width: medium medium 2px;
}
.user-input-wrp .floating-label {
\tposition: absolute;
\tpointer-events: none;
\ttop: 22px;
\tleft: 10px;
    transition: 0.2s ease all;
    opacity: .5;
}
.user-input-wrp .floating-label1 {
\tposition: absolute;
\tpointer-events: none;
\ttop: 98px;
\tleft: 10px;
    transition: 0.2s ease all;
    opacity: .5;
}
.user-input-wrp .in1:focus ~ .floating-label,
.user-input-wrp .in1:not(:focus):valid ~ .floating-label{
\ttop: 0px;
\tleft: 10px;
\tfont-size: 13px;
\topacity: 1;
}
.user-input-wrp .in2:focus ~ .floating-label1,
.user-input-wrp .in2:not(:focus):valid ~ .floating-label1{
\ttop: 70px;
\tleft: 10px;
\tfont-size: 13px;
\topacity: 1;
}

</style>


            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-5\">
                        <div class=\"card shadow-lg border-0 rounded-lg mt-5\">
                            <div class=\"card-header\">
                                <h3 class=\"text-center font-weight-light my-4\">Connexion</h3>
                            </div>
                            <div class=\"card-body\">

                                <div class=\"user-input-wrp mb-5\">
                                    <br />
                                    <input type=\"text\" class=\"inputText in1\" name=\"email\" required autofocus/>
                                    <span class=\"floating-label\">Votre email</span>
                                    <br /><br /><br>
                                    <input type=\"password\" class=\"inputText in2 \" name=\"password\" required />
                                    <span class=\"floating-label1 \">Votre mot de passe</span>
                                </div>
                                
                                ";
        // line 100
        echo "                                <div class=\"form-group\">
                                    <div class=\"custom-control custom-checkbox\"><input class=\"custom-control-input\"
                                            id=\"rememberPasswordCheck\" type=\"checkbox\" /><label
                                            class=\"custom-control-label\" for=\"rememberPasswordCheck\">Se souvenir du
                                            mot de passe</label>
                                    </div>
                                </div>

                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

                                <div class=\"form-group d-flex align-items-center justify-content-between mt-4 mb-0\">
                                    <a class=\"small\" href=\"index.php?page=password\">Mot de passe oublié?</a>
                                    <button type=\"submit\" name=\"submitConnect\"
                                        class=\"btn btn-outline-danger col-sm-6\" id=\"submitConnect\">SE CONNECTER</button>
                                </div>
                                
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



   
</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 108,  192 => 100,  115 => 16,  107 => 13,  104 => 12,  102 => 11,  99 => 10,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Formulaire de connexion{% endblock %}

{% block body %}
<form method=\"post\">
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {% if app.user %}
        <div class=\"mb-3\">
            Vous êtes connecté en tant que {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
    {% endif %}


<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-xl-12 col-lg-12 col-md-12 ml-auto mb-5 mt-5\">


<style>
.user-input-wrp {
\tposition: relative;
\t
}
.user-input-wrp .inputText{
\twidth: 100%;
\toutline: none;
\tborder:none;
\tborder-bottom: 1px solid #777;
 \tbox-shadow: none !important;
}
.user-input-wrp .inputText:focus{
\tborder-color: blue;
\tborder-width: medium medium 2px;
}
.user-input-wrp .floating-label {
\tposition: absolute;
\tpointer-events: none;
\ttop: 22px;
\tleft: 10px;
    transition: 0.2s ease all;
    opacity: .5;
}
.user-input-wrp .floating-label1 {
\tposition: absolute;
\tpointer-events: none;
\ttop: 98px;
\tleft: 10px;
    transition: 0.2s ease all;
    opacity: .5;
}
.user-input-wrp .in1:focus ~ .floating-label,
.user-input-wrp .in1:not(:focus):valid ~ .floating-label{
\ttop: 0px;
\tleft: 10px;
\tfont-size: 13px;
\topacity: 1;
}
.user-input-wrp .in2:focus ~ .floating-label1,
.user-input-wrp .in2:not(:focus):valid ~ .floating-label1{
\ttop: 70px;
\tleft: 10px;
\tfont-size: 13px;
\topacity: 1;
}

</style>


            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-5\">
                        <div class=\"card shadow-lg border-0 rounded-lg mt-5\">
                            <div class=\"card-header\">
                                <h3 class=\"text-center font-weight-light my-4\">Connexion</h3>
                            </div>
                            <div class=\"card-body\">

                                <div class=\"user-input-wrp mb-5\">
                                    <br />
                                    <input type=\"text\" class=\"inputText in1\" name=\"email\" required autofocus/>
                                    <span class=\"floating-label\">Votre email</span>
                                    <br /><br /><br>
                                    <input type=\"password\" class=\"inputText in2 \" name=\"password\" required />
                                    <span class=\"floating-label1 \">Votre mot de passe</span>
                                </div>
                                
                                {# <div class=\"form-group\">
                                    <label class=\"small mb-1\" for=\"inputEmailAddress\">Email</label>
                                    <input class=\"form-control py-4\" type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" placeholder=\"Saisissez votre email\" required autofocus>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"small mb-1\" for=\"inputPassword\">Mot de Passe</label>
                                    <input class=\"form-control py-4\" id=\"inputPassword\" type=\"password\"
                                        placeholder=\"Saisissez votre mot de passe\" name=\"password\" required>
                                </div> #}
                                <div class=\"form-group\">
                                    <div class=\"custom-control custom-checkbox\"><input class=\"custom-control-input\"
                                            id=\"rememberPasswordCheck\" type=\"checkbox\" /><label
                                            class=\"custom-control-label\" for=\"rememberPasswordCheck\">Se souvenir du
                                            mot de passe</label>
                                    </div>
                                </div>

                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                                <div class=\"form-group d-flex align-items-center justify-content-between mt-4 mb-0\">
                                    <a class=\"small\" href=\"index.php?page=password\">Mot de passe oublié?</a>
                                    <button type=\"submit\" name=\"submitConnect\"
                                        class=\"btn btn-outline-danger col-sm-6\" id=\"submitConnect\">SE CONNECTER</button>
                                </div>
                                
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



   
</form>
{% endblock %}
", "security/login.html.twig", "/var/www/html/FabriqueAdmin/templates/security/login.html.twig");
    }
}
