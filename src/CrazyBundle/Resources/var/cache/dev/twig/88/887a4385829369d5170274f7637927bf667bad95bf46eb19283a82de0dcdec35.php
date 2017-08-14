<?php

/* CrazyBundle:News:editer.html.twig */
class __TwigTemplate_5c14a11beb08e06d0a93c699575ef366ac13bf1e559c3c9d243de7ca65fda15f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "CrazyBundle:News:editer.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db084d3b0e48b75fdf6ec1404650d1a0f8f1466914c50d31843f2cf400b9dd38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db084d3b0e48b75fdf6ec1404650d1a0f8f1466914c50d31843f2cf400b9dd38->enter($__internal_db084d3b0e48b75fdf6ec1404650d1a0f8f1466914c50d31843f2cf400b9dd38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CrazyBundle:News:editer.html.twig"));

        $__internal_ef751a3f0aae4f67807a3f2da7dbd3d8860fa906d04f1161fdd928c43eececf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef751a3f0aae4f67807a3f2da7dbd3d8860fa906d04f1161fdd928c43eececf7->enter($__internal_ef751a3f0aae4f67807a3f2da7dbd3d8860fa906d04f1161fdd928c43eececf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CrazyBundle:News:editer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db084d3b0e48b75fdf6ec1404650d1a0f8f1466914c50d31843f2cf400b9dd38->leave($__internal_db084d3b0e48b75fdf6ec1404650d1a0f8f1466914c50d31843f2cf400b9dd38_prof);

        
        $__internal_ef751a3f0aae4f67807a3f2da7dbd3d8860fa906d04f1161fdd928c43eececf7->leave($__internal_ef751a3f0aae4f67807a3f2da7dbd3d8860fa906d04f1161fdd928c43eececf7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f1e97e9eec616c98dbeb493888462578325748a9fdc3203bdc637a1c90f8cf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f1e97e9eec616c98dbeb493888462578325748a9fdc3203bdc637a1c90f8cf6->enter($__internal_2f1e97e9eec616c98dbeb493888462578325748a9fdc3203bdc637a1c90f8cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aa311a1a18bfbbd76492420790d8f25c580b982d683c374add1121a3cdfc47ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa311a1a18bfbbd76492420790d8f25c580b982d683c374add1121a3cdfc47ce->enter($__internal_aa311a1a18bfbbd76492420790d8f25c580b982d683c374add1121a3cdfc47ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Editer une actualité";
        
        $__internal_aa311a1a18bfbbd76492420790d8f25c580b982d683c374add1121a3cdfc47ce->leave($__internal_aa311a1a18bfbbd76492420790d8f25c580b982d683c374add1121a3cdfc47ce_prof);

        
        $__internal_2f1e97e9eec616c98dbeb493888462578325748a9fdc3203bdc637a1c90f8cf6->leave($__internal_2f1e97e9eec616c98dbeb493888462578325748a9fdc3203bdc637a1c90f8cf6_prof);

    }

    // line 5
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_a2edb77c11765be41884f4ca97bcb4ee0ff8e34ef5dc2aea36b54bd46ff7adee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2edb77c11765be41884f4ca97bcb4ee0ff8e34ef5dc2aea36b54bd46ff7adee->enter($__internal_a2edb77c11765be41884f4ca97bcb4ee0ff8e34ef5dc2aea36b54bd46ff7adee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_161b14ce69fcbec4380ba99278ad24c3eee7d1f6f1700b30486f10dab09eaa94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161b14ce69fcbec4380ba99278ad24c3eee7d1f6f1700b30486f10dab09eaa94->enter($__internal_161b14ce69fcbec4380ba99278ad24c3eee7d1f6f1700b30486f10dab09eaa94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 6
        echo "
\t<h1>Editer une actualité</h1>

\t";
        // line 9
        echo twig_include($this->env, $context, "CrazyBundle:News:form.html.twig");
        echo "

\t
";
        
        $__internal_161b14ce69fcbec4380ba99278ad24c3eee7d1f6f1700b30486f10dab09eaa94->leave($__internal_161b14ce69fcbec4380ba99278ad24c3eee7d1f6f1700b30486f10dab09eaa94_prof);

        
        $__internal_a2edb77c11765be41884f4ca97bcb4ee0ff8e34ef5dc2aea36b54bd46ff7adee->leave($__internal_a2edb77c11765be41884f4ca97bcb4ee0ff8e34ef5dc2aea36b54bd46ff7adee_prof);

    }

    public function getTemplateName()
    {
        return "CrazyBundle:News:editer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 9,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.html.twig' %}

{% block title %}Editer une actualité{% endblock %}

{% block contenu %}

\t<h1>Editer une actualité</h1>

\t{{ include(\"CrazyBundle:News:form.html.twig\") }}

\t
{% endblock %}




", "CrazyBundle:News:editer.html.twig", "/home/claire/www/projects/CRAZYDISCOTRAIL/src/CrazyBundle/Resources/views/News/editer.html.twig");
    }
}
