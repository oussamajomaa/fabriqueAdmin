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
class __TwigTemplate_93f24c6f16d9a05e8a662654d13cb3f05e5445f400e562fb95542ceafcda114b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Formulaire de connexion";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<form method=\"post\">
    ";
        // line 7
        if (($context["error"] ?? null)) {
            // line 8
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 8), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 8), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 10
        echo "
    ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 11)) {
            // line 12
            echo "        <div class=\"mb-3\">
            Vous êtes connecté en tant que ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 13), "username", [], "any", false, false, false, 13), "html", null, true);
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
                                    <input type=\"text\" class=\"inputText in1\" name=\"email\" required />
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
        return array (  172 => 108,  162 => 100,  85 => 16,  77 => 13,  74 => 12,  72 => 11,  69 => 10,  63 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/var/www/html/FabriqueAdmin/templates/security/login.html.twig");
    }
}
