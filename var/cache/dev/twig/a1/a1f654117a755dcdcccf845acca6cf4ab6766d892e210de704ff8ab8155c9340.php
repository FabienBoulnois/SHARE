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

/* fichier/listeFichier.html.twig */
class __TwigTemplate_f982a6bf8dcf9e1228adfda45d9c54954c9600282f3647be8acca4c0930d01f0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fichier/listeFichier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fichier/listeFichier.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fichier/listeFichier.html.twig", 1);
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

        $this->displayParentBlock("title", $context, $blocks);
        echo "Liste fichiers";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        $this->displayParentBlock("content", $context, $blocks);
        echo "
<div class=\"container-fluid\">   
        <div class=\"row justify-content-center\">
            <h1 class=\"text-center text-primary p-4\">Liste des fichiers</h1>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-8 p-4 m-0 text-primary\">
            <div class=\"table-responsive\">
<table class=\"table table-hover\">
  <thead>
    <tr>
      <th scope=\"col\" class=\"font-weight-bold\">Nom</th> <th>Taille</th><th>Extension</th><th>Propriétaire</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fichiers"]) || array_key_exists("fichiers", $context) ? $context["fichiers"] : (function () { throw new RuntimeError('Variable "fichiers" does not exist.', 21, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["fichier"]) {
            // line 22
            echo "    <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle([0 => "table-primary", 1 => "table-secondary"], twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 22)), "html", null, true);
            echo "\">
     <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("telechargement_fichier", ["id" => twig_get_attribute($this->env, $this->source, $context["fichier"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fichier"], "vrainom", [], "any", false, false, false, 23), "html", null, true);
            echo "</a></td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fichier"], "taille", [], "any", false, false, false, 23), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fichier"], "extension", [], "any", false, false, false, 23), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fichier"], "utilisateur", [], "any", false, false, false, 23), "prenom", [], "any", false, false, false, 23), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fichier"], "utilisateur", [], "any", false, false, false, 23), "nom", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
    </tr>
               
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fichier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo " </tbody>
</table> 
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
        return "fichier/listeFichier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 27,  129 => 23,  124 => 22,  107 => 21,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{parent()}}Liste fichiers{% endblock %}

{% block content %}
{{parent()}}
<div class=\"container-fluid\">   
        <div class=\"row justify-content-center\">
            <h1 class=\"text-center text-primary p-4\">Liste des fichiers</h1>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-8 p-4 m-0 text-primary\">
            <div class=\"table-responsive\">
<table class=\"table table-hover\">
  <thead>
    <tr>
      <th scope=\"col\" class=\"font-weight-bold\">Nom</th> <th>Taille</th><th>Extension</th><th>Propriétaire</th>
    </tr>
  </thead>
  <tbody>
    {% for fichier in fichiers %}
    <tr class=\"{{ cycle(['table-primary', 'table-secondary'], loop.index0) }}\">
     <td><a href=\"{{path('telechargement_fichier',{'id':fichier.id})}}\">{{fichier.vrainom}}</a></td><td>{{fichier.taille}}</td><td>{{fichier.extension}}</td><td>{{fichier.utilisateur.prenom}} {{fichier.utilisateur.nom}}</td>
    </tr>
               
    {% endfor %}
 </tbody>
</table> 
</div>
            </div>
        </div>
</div>
{% endblock %}", "fichier/listeFichier.html.twig", "/var/www/html/symfony4-4153/public/share1/templates/fichier/listeFichier.html.twig");
    }
}
