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

/* admin_panel/index.html.twig */
class __TwigTemplate_9a95f40e6ec1eecb9ce86aafdc48a311286b92777ad731ec61cdf6a3d7fc57d6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_panel/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_panel/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin_panel/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
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
        echo "<div class=\"example-wrapper\">
    <h1>Hello ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "! ✅</h1>
    <hr>
    <h2>Creer un nouveau projet</h2>
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
    <div class=\"form\">
        <div class=\"form-group\">
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 13, $this->source); })()), "Titre", [], "any", false, false, false, 13), 'row', ["attr" => ["placeholder" => "Titre du projet"]]);
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 17, $this->source); })()), "Photo", [], "any", false, false, false, 17), 'row', ["attr" => ["placeholder" => "Photo de couverture du projet"]]);
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 21, $this->source); })()), "Date", [], "any", false, false, false, 21), 'row', ["attr" => ["class" => "form-group"]]);
        echo "
        </div>



        <div class=\"form-group\">
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 27, $this->source); })()), "Description", [], "any", false, false, false, 27), 'row', ["attr" => ["placeholder" => " Description du projet"]]);
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 31, $this->source); })()), "Texte", [], "any", false, false, false, 31), 'row', ["attr" => ["placeholder" => "Texte du projet"]]);
        echo "
        </div>
            
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 34, $this->source); })()), "Submit", [], "any", false, false, false, 34), 'row', ["label" => "Enregistrer"]);
        echo "

        ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 36, $this->source); })()), 'form_end');
        echo "
    </div>
    
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin_panel/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 36,  143 => 34,  137 => 31,  130 => 27,  121 => 21,  114 => 17,  107 => 13,  101 => 10,  95 => 7,  92 => 6,  82 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
    <link href=\"{{ asset('style/admin.css') }}\" rel=\"stylesheet\">
{% endblock %}
{% block body %}
<div class=\"example-wrapper\">
    <h1>Hello {{ user }}! ✅</h1>
    <hr>
    <h2>Creer un nouveau projet</h2>
    {{ form_start(formProjet) }}
    <div class=\"form\">
        <div class=\"form-group\">
            {{ form_row(formProjet.Titre, { 'attr': {'placeholder': 'Titre du projet'}})}}
        </div>

        <div class=\"form-group\">
            {{ form_row(formProjet.Photo, { 'attr': {'placeholder': 'Photo de couverture du projet'}})}}
        </div>

        <div class=\"form-group\">
            {{ form_row(formProjet.Date, { 'attr': {'class': 'form-group'} }) }}
        </div>



        <div class=\"form-group\">
            {{ form_row(formProjet.Description, { 'attr': {'placeholder':' Description du projet'}})}}
        </div>

        <div class=\"form-group\">
            {{ form_row(formProjet.Texte, { 'attr': {'placeholder': 'Texte du projet'}})}}
        </div>
            
        {{ form_row(formProjet.Submit, { 'label': 'Enregistrer'})}}

        {{ form_end(formProjet) }}
    </div>
    
</div>
{% endblock %}
", "admin_panel/index.html.twig", "/amuhome/m20014866/webdev/BDE/templates/admin_panel/index.html.twig");
    }
}
