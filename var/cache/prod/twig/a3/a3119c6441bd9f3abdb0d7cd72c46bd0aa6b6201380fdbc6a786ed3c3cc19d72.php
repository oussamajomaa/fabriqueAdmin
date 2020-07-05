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

/* base.html.twig */
class __TwigTemplate_eecafb955bedbd3c32ec7cfb2ce9e56c52571941df556708e455a0ae445c7b5f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, user-scalable=no\">
        ";
        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">

        ";
        // line 16
        echo "        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\"
            integrity=\"sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB\" 
            crossorigin=\"anonymous\">
        
        ";
        // line 21
        echo "        <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
        
        ";
        // line 24
        echo "        ";
        // line 27
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
        ";
        // line 29
        echo "

        <title>Fabrique Admin</title>
        



    </head>
    <body>

        ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 39)) {
            // line 40
            echo "
            ";
            // line 41
            $this->loadTemplate("template_parts/_nav_user.html.twig", "base.html.twig", 41)->display($context);
            // line 42
            echo "
        ";
        } else {
            // line 44
            echo "
            ";
            // line 45
            $this->loadTemplate("template_parts/_nav.html.twig", "base.html.twig", 45)->display($context);
            // line 46
            echo "            
        ";
        }
        // line 48
        echo "        

        ";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "
        ";
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" 
        integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
        
        
        ";
        // line 63
        echo "        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js\"></script>
        <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 66
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/script.js"), "html", null, true);
        echo "\"></script>



<script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName(\"dropdown-btn\");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener(\"click\", function () {
            this.classList.toggle(\"active\");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === \"block\") {
                dropdownContent.style.display = \"none\";
            } else {
                dropdownContent.style.display = \"block\";
            }
        });
    }

    \$('.dropdown-toggle').dropdown()
</script>
        
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "FABRIQUE ADMIN";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "        
        ";
    }

    // line 50
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "        
        ";
    }

    // line 54
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "        
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 55,  193 => 54,  188 => 51,  184 => 50,  179 => 7,  175 => 6,  168 => 5,  136 => 66,  132 => 64,  129 => 63,  122 => 57,  120 => 54,  117 => 53,  115 => 50,  111 => 48,  107 => 46,  105 => 45,  102 => 44,  98 => 42,  96 => 41,  93 => 40,  91 => 39,  79 => 29,  76 => 27,  74 => 24,  70 => 21,  64 => 16,  58 => 13,  53 => 9,  51 => 6,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/var/www/html/FabriqueAdmin/templates/base.html.twig");
    }
}
