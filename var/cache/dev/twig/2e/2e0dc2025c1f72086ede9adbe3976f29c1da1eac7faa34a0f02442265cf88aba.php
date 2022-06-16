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
    <div id=\"projet\">
        <h2>Creer un nouveau projet</h2>
        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
        <div class=\"form\">
            <div class=\"form-group\">
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 14, $this->source); })()), "Titre", [], "any", false, false, false, 14), 'row', ["attr" => ["placeholder" => "Titre du projet"]]);
        echo "
            </div>

            <div class=\"form-group\">
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 18, $this->source); })()), "Photo", [], "any", false, false, false, 18), 'row', ["attr" => ["placeholder" => "Photo de couverture du projet"]]);
        echo "
            </div>

            <div class=\"form-group\">
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 22, $this->source); })()), "Date", [], "any", false, false, false, 22), 'row', ["attr" => ["class" => "form-group"]]);
        echo "
            </div>



            <div class=\"form-group\">
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 28, $this->source); })()), "Description", [], "any", false, false, false, 28), 'row', ["attr" => ["placeholder" => " Description du projet"]]);
        echo "
            </div>

            <div class=\"form-group\">
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 32, $this->source); })()), "Texte", [], "any", false, false, false, 32), 'row', ["attr" => ["placeholder" => "Texte du projet"]]);
        echo "
            </div>
                
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 35, $this->source); })()), "Submit", [], "any", false, false, false, 35), 'row', ["label" => "Enregistrer"]);
        echo "

            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 37, $this->source); })()), 'form_end');
        echo "
        </div>

        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) || array_key_exists("projets", $context) ? $context["projets"] : (function () { throw new RuntimeError('Variable "projets" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 41
            echo "        <article>
            <p>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "titre", [], "any", false, false, false, 42), "html", null, true);
            echo " - Ecrit le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "date", [], "any", false, false, false, 42), "d/m/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "date", [], "any", false, false, false, 42), "H:i"), "html", null, true);
            echo "</p>
            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_show", ["id" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">Visualiser</a>
            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_route_projet", ["id" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">Supprimer</a>
        </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    </div>
    <hr>
    <div id=\"boutique\">
        <h2>Creer un nouvel article</h2>
        ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBoutique"]) || array_key_exists("formBoutique", $context) ? $context["formBoutique"] : (function () { throw new RuntimeError('Variable "formBoutique" does not exist.', 51, $this->source); })()), 'form_start');
        echo "
        <div class=\"form\">
            <div class=\"form-group\">
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formBoutique"]) || array_key_exists("formBoutique", $context) ? $context["formBoutique"] : (function () { throw new RuntimeError('Variable "formBoutique" does not exist.', 54, $this->source); })()), "nomArticle", [], "any", false, false, false, 54), 'row', ["attr" => ["placeholder" => "Nom de l'article"]]);
        echo "
            </div>

            <div class=\"form-group\">
                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formBoutique"]) || array_key_exists("formBoutique", $context) ? $context["formBoutique"] : (function () { throw new RuntimeError('Variable "formBoutique" does not exist.', 58, $this->source); })()), "photoArticle", [], "any", false, false, false, 58), 'row', ["attr" => ["placeholder" => "Photo d'illustration de l'article"]]);
        echo "
            </div>

            <div class=\"form-group\">
                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formBoutique"]) || array_key_exists("formBoutique", $context) ? $context["formBoutique"] : (function () { throw new RuntimeError('Variable "formBoutique" does not exist.', 62, $this->source); })()), "descArticle", [], "any", false, false, false, 62), 'row', ["attr" => ["placeholder" => " Description de l'article"]]);
        echo "
            </div>

            <div class=\"form-group\">
                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formBoutique"]) || array_key_exists("formBoutique", $context) ? $context["formBoutique"] : (function () { throw new RuntimeError('Variable "formBoutique" does not exist.', 66, $this->source); })()), "prixArticle", [], "any", false, false, false, 66), 'row', ["attr" => ["placeholder" => "Prix"]]);
        echo "
            </div>
                
            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formBoutique"]) || array_key_exists("formBoutique", $context) ? $context["formBoutique"] : (function () { throw new RuntimeError('Variable "formBoutique" does not exist.', 69, $this->source); })()), "Submit", [], "any", false, false, false, 69), 'row', ["label" => "Enregistrer"]);
        echo "

            ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBoutique"]) || array_key_exists("formBoutique", $context) ? $context["formBoutique"] : (function () { throw new RuntimeError('Variable "formBoutique" does not exist.', 71, $this->source); })()), 'form_end');
        echo "
        </div>

        ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["boutique"]) || array_key_exists("boutique", $context) ? $context["boutique"] : (function () { throw new RuntimeError('Variable "boutique" does not exist.', 74, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 75
            echo "        <article>
            <p>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 76), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nomArticle", [], "any", false, false, false, 76), "html", null, true);
            echo "</p>
            <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_route_article", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 77)]), "html", null, true);
            echo "\">Supprimer</a>
        </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "    </div>
    <hr>
    <div id=\"partenariat\">
        <h2>Creer un nouvel article</h2>
        ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPartenariat"]) || array_key_exists("formPartenariat", $context) ? $context["formPartenariat"] : (function () { throw new RuntimeError('Variable "formPartenariat" does not exist.', 84, $this->source); })()), 'form_start');
        echo "
        <div class=\"form\">
            <div class=\"form-group\">
                ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPartenariat"]) || array_key_exists("formPartenariat", $context) ? $context["formPartenariat"] : (function () { throw new RuntimeError('Variable "formPartenariat" does not exist.', 87, $this->source); })()), "Titre", [], "any", false, false, false, 87), 'row', ["attr" => ["placeholder" => "Nom du partenaire"]]);
        echo "
            </div>

            <div class=\"form-group\">
                ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPartenariat"]) || array_key_exists("formPartenariat", $context) ? $context["formPartenariat"] : (function () { throw new RuntimeError('Variable "formPartenariat" does not exist.', 91, $this->source); })()), "Logo", [], "any", false, false, false, 91), 'row', ["attr" => ["placeholder" => "logo d'illustration du partenaire"]]);
        echo "
            </div>

            <div class=\"form-group\">
                ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPartenariat"]) || array_key_exists("formPartenariat", $context) ? $context["formPartenariat"] : (function () { throw new RuntimeError('Variable "formPartenariat" does not exist.', 95, $this->source); })()), "Description", [], "any", false, false, false, 95), 'row', ["attr" => ["placeholder" => " Description du partenariat"]]);
        echo "
            </div>

            <div class=\"form-group\">
                ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPartenariat"]) || array_key_exists("formPartenariat", $context) ? $context["formPartenariat"] : (function () { throw new RuntimeError('Variable "formPartenariat" does not exist.', 99, $this->source); })()), "URL", [], "any", false, false, false, 99), 'row', ["attr" => ["placeholder" => "URL du partenaire"]]);
        echo "
            </div>
                
            ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPartenariat"]) || array_key_exists("formPartenariat", $context) ? $context["formPartenariat"] : (function () { throw new RuntimeError('Variable "formPartenariat" does not exist.', 102, $this->source); })()), "Submit", [], "any", false, false, false, 102), 'row', ["label" => "Enregistrer"]);
        echo "

            ";
        // line 104
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPartenariat"]) || array_key_exists("formPartenariat", $context) ? $context["formPartenariat"] : (function () { throw new RuntimeError('Variable "formPartenariat" does not exist.', 104, $this->source); })()), 'form_end');
        echo "
        </div>

        ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partenariat"]) || array_key_exists("partenariat", $context) ? $context["partenariat"] : (function () { throw new RuntimeError('Variable "partenariat" does not exist.', 107, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["partenaire"]) {
            // line 108
            echo "        <article>
            <p>";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "id", [], "any", false, false, false, 109), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "Titre", [], "any", false, false, false, 109), "html", null, true);
            echo "</p>
            <a href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_route_partenaire", ["id" => twig_get_attribute($this->env, $this->source, $context["partenaire"], "id", [], "any", false, false, false, 110)]), "html", null, true);
            echo "\">Supprimer</a>
        </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partenaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "    </div>

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
        return array (  329 => 113,  320 => 110,  314 => 109,  311 => 108,  307 => 107,  301 => 104,  296 => 102,  290 => 99,  283 => 95,  276 => 91,  269 => 87,  263 => 84,  257 => 80,  248 => 77,  242 => 76,  239 => 75,  235 => 74,  229 => 71,  224 => 69,  218 => 66,  211 => 62,  204 => 58,  197 => 54,  191 => 51,  185 => 47,  176 => 44,  172 => 43,  162 => 42,  159 => 41,  155 => 40,  149 => 37,  144 => 35,  138 => 32,  131 => 28,  122 => 22,  115 => 18,  108 => 14,  102 => 11,  95 => 7,  92 => 6,  82 => 5,  69 => 3,  59 => 2,  36 => 1,);
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
    <div id=\"projet\">
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

        {% for projet in projets %}
        <article>
            <p>{{ projet.id }} : {{ projet.titre }} - Ecrit le {{ projet.date | date('d/m/Y') }} à {{ projet.date | date('H:i') }}</p>
            <a href=\"{{ path('projet_show', {'id': projet.id }) }}\">Visualiser</a>
            <a href=\"{{ path('delete_route_projet', {'id': projet.id }) }}\">Supprimer</a>
        </article>
        {% endfor %}
    </div>
    <hr>
    <div id=\"boutique\">
        <h2>Creer un nouvel article</h2>
        {{ form_start(formBoutique) }}
        <div class=\"form\">
            <div class=\"form-group\">
                {{ form_row(formBoutique.nomArticle, { 'attr': {'placeholder': 'Nom de l\\'article'}})}}
            </div>

            <div class=\"form-group\">
                {{ form_row(formBoutique.photoArticle, { 'attr': {'placeholder': 'Photo d\\'illustration de l\\'article'}})}}
            </div>

            <div class=\"form-group\">
                {{ form_row(formBoutique.descArticle, { 'attr': {'placeholder':' Description de l\\'article'}})}}
            </div>

            <div class=\"form-group\">
                {{ form_row(formBoutique.prixArticle, { 'attr': {'placeholder': 'Prix'}})}}
            </div>
                
            {{ form_row(formBoutique.Submit, { 'label': 'Enregistrer'})}}

            {{ form_end(formBoutique) }}
        </div>

        {% for article in boutique %}
        <article>
            <p>{{ article.id }} : {{ article.nomArticle }}</p>
            <a href=\"{{ path('delete_route_article', {'id': article.id }) }}\">Supprimer</a>
        </article>
        {% endfor %}
    </div>
    <hr>
    <div id=\"partenariat\">
        <h2>Creer un nouvel article</h2>
        {{ form_start(formPartenariat) }}
        <div class=\"form\">
            <div class=\"form-group\">
                {{ form_row(formPartenariat.Titre, { 'attr': {'placeholder': 'Nom du partenaire'}})}}
            </div>

            <div class=\"form-group\">
                {{ form_row(formPartenariat.Logo, { 'attr': {'placeholder': 'logo d\\'illustration du partenaire'}})}}
            </div>

            <div class=\"form-group\">
                {{ form_row(formPartenariat.Description, { 'attr': {'placeholder':' Description du partenariat'}})}}
            </div>

            <div class=\"form-group\">
                {{ form_row(formPartenariat.URL, { 'attr': {'placeholder': 'URL du partenaire'}})}}
            </div>
                
            {{ form_row(formPartenariat.Submit, { 'label': 'Enregistrer'})}}

            {{ form_end(formPartenariat) }}
        </div>

        {% for partenaire in partenariat %}
        <article>
            <p>{{ partenaire.id }} : {{ partenaire.Titre }}</p>
            <a href=\"{{ path('delete_route_partenaire', {'id': partenaire.id }) }}\">Supprimer</a>
        </article>
        {% endfor %}
    </div>

</div>
{% endblock %}
", "admin_panel/index.html.twig", "/amuhome/m20014866/webdev/BDE/templates/admin_panel/index.html.twig");
    }
}
