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

/* utilisateur/user_profile.html.twig */
class __TwigTemplate_214d068b783d81344594527236eb46ca00bb8ce026a541e48a86aff661726191 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/user_profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/user_profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/user_profile.html.twig", 1);
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
        echo "Profil utilisateur";
        
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
            <h1 class=\"text-center text-primary p-4\">Profil utilisateur</h1>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-8 bg-white p-4 m-0 text-primary\">
             <div class=\"card mb-3\">
              <div class=\"row no-gutters\">
               <div class=\"col-md-4\">
                
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["base64"]) || array_key_exists("base64", $context) ? $context["base64"] : (function () { throw new RuntimeError('Variable "base64" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\"class=\"card-img\"alt=\"...\">
               <span class=\"material-icons text-white\">
                  cancel
               </span>
               </div>
               <div class=\"col-md-8\">
                 <div class=\"card-body text-white\">
                   <h5 class=\"card-title\">";
        // line 24
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 24, $this->source); })()), "prenom", [], "any", false, false, false, 24)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 24, $this->source); })()), "nom", [], "any", false, false, false, 24)), "html", null, true);
        echo "</h5>
                   <p class=\"card-text\">Date de naissance ";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 25, $this->source); })()), "datenaissance", [], "any", false, false, false, 25), "d-m-Y"), "html", null, true);
        echo "</p>
                   <p class=\"card-text\">Date d'inscription ";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 26, $this->source); })()), "dateinscription", [], "any", false, false, false, 26), "d-m-Y"), "html", null, true);
        echo "</p>
                   ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form');
        echo "
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
        return "utilisateur/user_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 27,  123 => 26,  119 => 25,  113 => 24,  103 => 17,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig'%}

{% block title %}{{parent()}}Profil utilisateur{% endblock %}

{% block content %}
{{parent()}}
<div class=\"container-fluid\">  
        <div class=\"row justify-content-center\">
            <h1 class=\"text-center text-primary p-4\">Profil utilisateur</h1>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-8 bg-white p-4 m-0 text-primary\">
             <div class=\"card mb-3\">
              <div class=\"row no-gutters\">
               <div class=\"col-md-4\">
                
                <img src=\"{{base64}}\"class=\"card-img\"alt=\"...\">
               <span class=\"material-icons text-white\">
                  cancel
               </span>
               </div>
               <div class=\"col-md-8\">
                 <div class=\"card-body text-white\">
                   <h5 class=\"card-title\">{{utilisateur.prenom | capitalize }} {{utilisateur.nom | upper}}</h5>
                   <p class=\"card-text\">Date de naissance {{ utilisateur.datenaissance | date(\"d-m-Y\")}}</p>
                   <p class=\"card-text\">Date d'inscription {{ utilisateur.dateinscription | date(\"d-m-Y\")}}</p>
                   {{form(form)}}
                 </div>
              </div>
           </div>
        </div>
      </div>
   </div>
</div>
{% endblock %}        ", "utilisateur/user_profile.html.twig", "/var/www/html/symfony4-4153/public/share1/templates/utilisateur/user_profile.html.twig");
    }
}
