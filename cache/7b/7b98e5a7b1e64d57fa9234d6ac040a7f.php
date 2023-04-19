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

/* index.twig */
class __TwigTemplate_1733e453818fff7324589985e607d9b8 extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "index.twig", 1);
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
    
    
  ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 29
            echo "      <div class=\"col-4 mb-5\">
        <div class=\"card\" style=\"width: 18rem;\">
          <img src=\"./images/";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 31), "html", null, true);
            echo "\" width=\"150px\" height=\"200px\" class=\"card-img-top\" alt=\"...\">
          <div class=\"card-body\">
            <center>
              <h5 class=\"card-title\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 34), "html", null, true);
            echo "</h5>
              <p class=\"card-text\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 35), "html", null, true);
            echo "</p>
              <p class=\"card-text\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "type", [], "any", false, false, false, 36), "html", null, true);
            echo "</p>
              <p class=\"card-text\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 37), "html", null, true);
            echo " Euro</p>
              <a href=\"update_produit.php?id=";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "\" class=\"btn btn-warning\">Modifier</a>
              <a href=\"delete_produit.php?id=";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "\" class=\"btn btn-danger\">Supprimer</a> 
            </center>
            
          </div>
        </div>
      </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "  </div>

</div>


";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 46,  114 => 39,  110 => 38,  106 => 37,  102 => 36,  98 => 35,  94 => 34,  88 => 31,  84 => 29,  80 => 28,  58 => 8,  54 => 7,  47 => 4,  36 => 1,);
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
    
    
  {% for produit in produits %}
      <div class=\"col-4 mb-5\">
        <div class=\"card\" style=\"width: 18rem;\">
          <img src=\"./images/{{ produit.image }}\" width=\"150px\" height=\"200px\" class=\"card-img-top\" alt=\"...\">
          <div class=\"card-body\">
            <center>
              <h5 class=\"card-title\">{{ produit.nom }}</h5>
              <p class=\"card-text\">{{ produit.description }}</p>
              <p class=\"card-text\">{{ produit.type }}</p>
              <p class=\"card-text\">{{ produit.prix }} Euro</p>
              <a href=\"update_produit.php?id={{ produit.id }}\" class=\"btn btn-warning\">Modifier</a>
              <a href=\"delete_produit.php?id={{ produit.id }}\" class=\"btn btn-danger\">Supprimer</a> 
            </center>
            
          </div>
        </div>
      </div>
  {% endfor %}
  </div>

</div>


{% endblock %}", "index.twig", "C:\\laragon\\www\\crud-php\\templates\\index.twig");
    }
}
