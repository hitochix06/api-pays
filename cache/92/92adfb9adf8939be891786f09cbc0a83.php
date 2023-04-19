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

/* base.twig */
class __TwigTemplate_cccf218bb289ec18b13ca12717bba496 extends Template
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
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
\t<meta charset=\"utf-8\">
\t<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "  </title>
\t\t<link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\">
\t\t<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" />
\t\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.1/css/all.css\">
\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
\t\t\tintegrity=\"sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65\" crossorigin=\"anonymous\">
</head>

<body>
\t<nav class=\"navtop\">
\t\t<div>
\t\t\t<h1>Qr_Boulanger</h1>
\t\t\t<a href=\"index.php\">Produit</a>
\t\t\t<a href=\"read_categorie.php\"></span>Catégories</a>
\t\t</div>
\t</nav>
\t<main></main>
\t";
        // line 23
        $this->displayBlock('main', $context, $blocks);
        // line 24
        echo "</body>

</html>";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 23
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function getDebugInfo()
    {
        return array (  80 => 23,  74 => 6,  68 => 24,  66 => 23,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
\t<meta charset=\"utf-8\">
\t<title>{% block title %}{% endblock %}  </title>
\t\t<link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\">
\t\t<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" />
\t\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.1/css/all.css\">
\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
\t\t\tintegrity=\"sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65\" crossorigin=\"anonymous\">
</head>

<body>
\t<nav class=\"navtop\">
\t\t<div>
\t\t\t<h1>Qr_Boulanger</h1>
\t\t\t<a href=\"index.php\">Produit</a>
\t\t\t<a href=\"read_categorie.php\"></span>Catégories</a>
\t\t</div>
\t</nav>
\t<main></main>
\t{% block main %}{% endblock %}
</body>

</html>", "base.twig", "C:\\laragon\\www\\crud-php\\templates\\base.twig");
    }
}
