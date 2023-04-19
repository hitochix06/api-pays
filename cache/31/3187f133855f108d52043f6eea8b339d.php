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

/* index.twig.html */
class __TwigTemplate_af7124a29d02bc0ef4787698e4aabfdc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.twig", "index.twig.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Home";
    }

    // line 7
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<div class=\"content\">
\t<h2>Toto</h2>

  <!-- Conteneur principal -->
  <div id=\"mainContainer\">
    <div class=\"form\">
      <!-- Contenu principal -->
      <main class=\"main-content\">
        <!-- En-tête -->
        <div class=\"heading\">
          Affichage produit
        </div>
  
\t<div class=\"content read\">
\t    <a href=\"create_produit\" class=\"create-contact\" >Ajouter un produit</a>
      <div class=\"container\">
  <br>
  <div class=\"row\">
    <?php foreach (\$produits as \$categorie) : ?>
      <div class=\"col-4 mb-5\">
        <div class=\"card\" style=\"width: 18rem;\">
          <img src=\"./images/<?= \$categorie['image'] ?>\" width=\"150px\" height=\"200px\" class=\"card-img-top\" alt=\"...\">
          <div class=\"card-body\">
            <center>
              <h5 class=\"card-title\"><?= \$categorie['nom'] ?></h5>
              <p class=\"card-text\"><?= \$categorie['description'] ?></p>
              <p class=\"card-text\"><?= \$categorie['type'] ?></p>
              <p class=\"card-text\"><?= \$categorie['prix'] ?> Euro</p>
              <?php 
                    \$id = \$categorie['id'];
                    echo <<<EOT
                      <a href=\"update_produit.php?id=\$id\" class=\"btn btn-warning\">Modifier</a>
                      <a href=\"delete_produit.php?id=\$id\" class=\"btn btn-danger\">Supprimer</a> 
                    EOT;;

              ?>
            </center>
            
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

</div>


";
    }

    public function getTemplateName()
    {
        return "index.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 8,  54 => 7,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.twig\" %}


{% block title %}Home{% endblock %}


{% block main %}
<div class=\"content\">
\t<h2>Toto</h2>

  <!-- Conteneur principal -->
  <div id=\"mainContainer\">
    <div class=\"form\">
      <!-- Contenu principal -->
      <main class=\"main-content\">
        <!-- En-tête -->
        <div class=\"heading\">
          Affichage produit
        </div>
  
\t<div class=\"content read\">
\t    <a href=\"create_produit\" class=\"create-contact\" >Ajouter un produit</a>
      <div class=\"container\">
  <br>
  <div class=\"row\">
    <?php foreach (\$produits as \$categorie) : ?>
      <div class=\"col-4 mb-5\">
        <div class=\"card\" style=\"width: 18rem;\">
          <img src=\"./images/<?= \$categorie['image'] ?>\" width=\"150px\" height=\"200px\" class=\"card-img-top\" alt=\"...\">
          <div class=\"card-body\">
            <center>
              <h5 class=\"card-title\"><?= \$categorie['nom'] ?></h5>
              <p class=\"card-text\"><?= \$categorie['description'] ?></p>
              <p class=\"card-text\"><?= \$categorie['type'] ?></p>
              <p class=\"card-text\"><?= \$categorie['prix'] ?> Euro</p>
              <?php 
                    \$id = \$categorie['id'];
                    echo <<<EOT
                      <a href=\"update_produit.php?id=\$id\" class=\"btn btn-warning\">Modifier</a>
                      <a href=\"delete_produit.php?id=\$id\" class=\"btn btn-danger\">Supprimer</a> 
                    EOT;;

              ?>
            </center>
            
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

</div>


{% endblock %}", "index.twig.html", "C:\\laragon\\www\\crud-php\\templates\\index.twig.html");
    }
}
