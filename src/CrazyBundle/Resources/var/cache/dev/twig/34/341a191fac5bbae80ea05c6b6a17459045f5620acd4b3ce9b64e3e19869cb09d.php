<?php

/* CrazyBundle:News:article.html.twig */
class __TwigTemplate_3cd2a693ad954cf5458a61ce34676eaca3974bc90454eb64cfba642a3f82fa36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("crazytemplate.html.twig", "CrazyBundle:News:article.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "crazytemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f009cc4e5ad7a59a2a4da9ebbf9448c259bf016e487c65e3b1f422f754e4764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f009cc4e5ad7a59a2a4da9ebbf9448c259bf016e487c65e3b1f422f754e4764->enter($__internal_9f009cc4e5ad7a59a2a4da9ebbf9448c259bf016e487c65e3b1f422f754e4764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CrazyBundle:News:article.html.twig"));

        $__internal_6a25f5c9dbbda856c8193d3a7541b69d8c0d172fc522cd943c9f7bd23dbd29b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a25f5c9dbbda856c8193d3a7541b69d8c0d172fc522cd943c9f7bd23dbd29b6->enter($__internal_6a25f5c9dbbda856c8193d3a7541b69d8c0d172fc522cd943c9f7bd23dbd29b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CrazyBundle:News:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f009cc4e5ad7a59a2a4da9ebbf9448c259bf016e487c65e3b1f422f754e4764->leave($__internal_9f009cc4e5ad7a59a2a4da9ebbf9448c259bf016e487c65e3b1f422f754e4764_prof);

        
        $__internal_6a25f5c9dbbda856c8193d3a7541b69d8c0d172fc522cd943c9f7bd23dbd29b6->leave($__internal_6a25f5c9dbbda856c8193d3a7541b69d8c0d172fc522cd943c9f7bd23dbd29b6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5db0b629553fe5d1f30ff927d4882f8322ff8841f22af994680c26fb7cf9854f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5db0b629553fe5d1f30ff927d4882f8322ff8841f22af994680c26fb7cf9854f->enter($__internal_5db0b629553fe5d1f30ff927d4882f8322ff8841f22af994680c26fb7cf9854f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3d59ca8bd0270ae9e3d25622c2ba40b8ae2e0584d3900a6636ee3cdfed0df91e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d59ca8bd0270ae9e3d25622c2ba40b8ae2e0584d3900a6636ee3cdfed0df91e->enter($__internal_3d59ca8bd0270ae9e3d25622c2ba40b8ae2e0584d3900a6636ee3cdfed0df91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "- Actualités";
        
        $__internal_3d59ca8bd0270ae9e3d25622c2ba40b8ae2e0584d3900a6636ee3cdfed0df91e->leave($__internal_3d59ca8bd0270ae9e3d25622c2ba40b8ae2e0584d3900a6636ee3cdfed0df91e_prof);

        
        $__internal_5db0b629553fe5d1f30ff927d4882f8322ff8841f22af994680c26fb7cf9854f->leave($__internal_5db0b629553fe5d1f30ff927d4882f8322ff8841f22af994680c26fb7cf9854f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_de72a99c48482d6450284760f531ebf8515d3a2360249d28d826b3b94b1ef71b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de72a99c48482d6450284760f531ebf8515d3a2360249d28d826b3b94b1ef71b->enter($__internal_de72a99c48482d6450284760f531ebf8515d3a2360249d28d826b3b94b1ef71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d60a4c66da9f7b4afec1c3a4dc046cfa1e813d20e894cf5613ab1c23912ce7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d60a4c66da9f7b4afec1c3a4dc046cfa1e813d20e894cf5613ab1c23912ce7e->enter($__internal_4d60a4c66da9f7b4afec1c3a4dc046cfa1e813d20e894cf5613ab1c23912ce7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<section class=\"bande-02\">
\t<div class=\"container\">
\t\t<h3 class=\"bleu\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "titre", array()), "html", null, true);
        echo "</h3>
\t\t<p><em>Publié le ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "publication", array()), "d/m/Y"), "html", null, true);
        echo " </em></p>

\t\t<p>";
        // line 11
        echo $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "contenu", array());
        echo "</p>

\t</div><!-- /.container -->
</section><!-- /.bande-02 -->

<section class=\"bande-01\">
\t<div class=\"container\">
\t\t<h1>Actualités</h1>
\t\t<p class=\"text-center\">Retrouvez toutes les actualités : <br />
\t\t<a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actualites");
        echo "\" class=\"btn btn-success\">Toutes les news</a></p>

\t\t
\t</div><!-- /.container -->
</section><!-- /.bande-01 -->





";
        
        $__internal_4d60a4c66da9f7b4afec1c3a4dc046cfa1e813d20e894cf5613ab1c23912ce7e->leave($__internal_4d60a4c66da9f7b4afec1c3a4dc046cfa1e813d20e894cf5613ab1c23912ce7e_prof);

        
        $__internal_de72a99c48482d6450284760f531ebf8515d3a2360249d28d826b3b94b1ef71b->leave($__internal_de72a99c48482d6450284760f531ebf8515d3a2360249d28d826b3b94b1ef71b_prof);

    }

    public function getTemplateName()
    {
        return "CrazyBundle:News:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 20,  81 => 11,  76 => 9,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'crazytemplate.html.twig' %}

{% block title %}- Actualités{% endblock %}

{% block body %}
<section class=\"bande-02\">
\t<div class=\"container\">
\t\t<h3 class=\"bleu\">{{ news.titre }}</h3>
\t\t<p><em>Publié le {{ news.publication|date(\"d/m/Y\") }} </em></p>

\t\t<p>{{ news.contenu|raw }}</p>

\t</div><!-- /.container -->
</section><!-- /.bande-02 -->

<section class=\"bande-01\">
\t<div class=\"container\">
\t\t<h1>Actualités</h1>
\t\t<p class=\"text-center\">Retrouvez toutes les actualités : <br />
\t\t<a href=\"{{ path('actualites') }}\" class=\"btn btn-success\">Toutes les news</a></p>

\t\t
\t</div><!-- /.container -->
</section><!-- /.bande-01 -->





{% endblock %}
", "CrazyBundle:News:article.html.twig", "/home/claire/www/projects/CRAZYDISCOTRAIL/src/CrazyBundle/Resources/views/News/article.html.twig");
    }
}
