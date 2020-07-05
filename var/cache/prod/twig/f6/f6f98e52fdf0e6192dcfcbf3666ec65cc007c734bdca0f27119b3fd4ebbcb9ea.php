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

/* editor/entreprise/entreprise_edit.html.twig */
class __TwigTemplate_b16ae23f478b197f5655dc5ebfc295bd397c28b0a6878b6e3427cbb9b66cd3a2 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "editor/entreprise/entreprise_edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Modifier une entreprise";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 6)) {
            // line 7
            echo "

";
            // line 10
            echo "<div class=\"container-fluid \">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto my-5\">

            ";
            // line 15
            echo "
            ";
            // line 16
            $this->loadTemplate("editor/entreprise/_nav_entreprise.html.twig", "editor/entreprise/entreprise_edit.html.twig", 16)->display(twig_array_merge($context, ["p" => 1]));
            // line 17
            echo "
            <div class=\"my-5\">
                <h4 class=\"btn btn-info btn-sm\">Modifier une entreprise</h4>
                ";
            // line 20
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
                <div class=\"row\">
                    <div class=\"col\">
                        ";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Nom", [], "any", false, false, false, 23), 'row');
            echo "
                    </div>
                    <div class=\"col\">
                        ";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Email", [], "any", false, false, false, 26), 'row');
            echo "
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        ";
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Adresse", [], "any", false, false, false, 31), 'row');
            echo "
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        ";
            // line 36
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Ville", [], "any", false, false, false, 36), 'row');
            echo "
                    </div>
                    <div class=\"col\">
                        ";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "CodePostal", [], "any", false, false, false, 39), 'row');
            echo "
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        ";
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Tel", [], "any", false, false, false, 44), 'row');
            echo "
                    </div>
                    <div class=\"col\">
                        ";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Mobile", [], "any", false, false, false, 47), 'row');
            echo "
                    </div>
                </div>


                ";
            // line 52
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "editor/entreprise/_collectionContact.html.twig"], true);
            // line 53
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Contact", [], "any", false, false, false, 53), 'row');
            echo "
                ";
            // line 56
            echo "                ";
            // line 57
            echo "                <button class=\"btn btn-outline-danger d-block ml-auto\">Enregistrer</button>
                ";
            // line 58
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "
            </div>
            ";
            // line 61
            echo "        </div>
    </div>
</div>
";
        }
        // line 65
        echo "

";
    }

    // line 69
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/collectionContact.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/collectionOffre.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "editor/entreprise/entreprise_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 71,  170 => 70,  166 => 69,  160 => 65,  154 => 61,  149 => 58,  146 => 57,  144 => 56,  139 => 53,  137 => 52,  129 => 47,  123 => 44,  115 => 39,  109 => 36,  101 => 31,  93 => 26,  87 => 23,  81 => 20,  76 => 17,  74 => 16,  71 => 15,  65 => 10,  61 => 7,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "editor/entreprise/entreprise_edit.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/entreprise/entreprise_edit.html.twig");
    }
}
