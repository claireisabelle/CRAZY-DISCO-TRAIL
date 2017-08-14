<?php

/* CrazyBundle:News:actualites.html.twig */
class __TwigTemplate_62035d04149bdf3659e0acc26b8c51045457a1853fe304e1ad41c8c28510c2a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("crazytemplate.html.twig", "CrazyBundle:News:actualites.html.twig", 1);
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
        $__internal_04ae7b1cb60617a84adf6dc88d3233452f735adca106a639530ee37138d44ebd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04ae7b1cb60617a84adf6dc88d3233452f735adca106a639530ee37138d44ebd->enter($__internal_04ae7b1cb60617a84adf6dc88d3233452f735adca106a639530ee37138d44ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CrazyBundle:News:actualites.html.twig"));

        $__internal_12b37d5638f79682c2c57fd2d192a5b951f59ae649ed23b2e1ba96064d0b9ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b37d5638f79682c2c57fd2d192a5b951f59ae649ed23b2e1ba96064d0b9ae1->enter($__internal_12b37d5638f79682c2c57fd2d192a5b951f59ae649ed23b2e1ba96064d0b9ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CrazyBundle:News:actualites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04ae7b1cb60617a84adf6dc88d3233452f735adca106a639530ee37138d44ebd->leave($__internal_04ae7b1cb60617a84adf6dc88d3233452f735adca106a639530ee37138d44ebd_prof);

        
        $__internal_12b37d5638f79682c2c57fd2d192a5b951f59ae649ed23b2e1ba96064d0b9ae1->leave($__internal_12b37d5638f79682c2c57fd2d192a5b951f59ae649ed23b2e1ba96064d0b9ae1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d25e19d0ea8eae2bdb3fcbb27ed7020275522f3614af27d02ba9c106ca32d98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d25e19d0ea8eae2bdb3fcbb27ed7020275522f3614af27d02ba9c106ca32d98->enter($__internal_1d25e19d0ea8eae2bdb3fcbb27ed7020275522f3614af27d02ba9c106ca32d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_004d4da09dcb16cacaeb53d3f78279b82b230a3c697c5f8708378e3d260a6abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_004d4da09dcb16cacaeb53d3f78279b82b230a3c697c5f8708378e3d260a6abc->enter($__internal_004d4da09dcb16cacaeb53d3f78279b82b230a3c697c5f8708378e3d260a6abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "- Actualités";
        
        $__internal_004d4da09dcb16cacaeb53d3f78279b82b230a3c697c5f8708378e3d260a6abc->leave($__internal_004d4da09dcb16cacaeb53d3f78279b82b230a3c697c5f8708378e3d260a6abc_prof);

        
        $__internal_1d25e19d0ea8eae2bdb3fcbb27ed7020275522f3614af27d02ba9c106ca32d98->leave($__internal_1d25e19d0ea8eae2bdb3fcbb27ed7020275522f3614af27d02ba9c106ca32d98_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd5bfbd49ee909bd20e905531779644c66db181f25d717047e8902da13ab8946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd5bfbd49ee909bd20e905531779644c66db181f25d717047e8902da13ab8946->enter($__internal_dd5bfbd49ee909bd20e905531779644c66db181f25d717047e8902da13ab8946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_87b3613d94444e558032e2bf89732d913592080d1542745ab124fa97463e8757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87b3613d94444e558032e2bf89732d913592080d1542745ab124fa97463e8757->enter($__internal_87b3613d94444e558032e2bf89732d913592080d1542745ab124fa97463e8757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<section class=\"bande-01\">
\t<div class=\"container\">
\t\t<h1>Actualités</h1>
\t\t
\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeNews"]) ? $context["listeNews"] : $this->getContext($context, "listeNews")));
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 11
            echo "\t\t\t<p><strong class=\"rose\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["news"], "publication", array()), "d/m/Y"), "html", null, true);
            echo "</strong> - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "titre", array()), "html", null, true);
            echo "
\t\t\t<a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actualites_post", array("id" => $this->getAttribute($context["news"], "id", array()))), "html", null, true);
            echo "\" class=\"rose\">Lire</a></p>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
\t\t<ul class=\"pagination\">
\t\t\t";
        // line 17
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 18
            echo "\t\t\t\t<li";
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
\t\t\t\t\t<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actualites", array("page" => $context["p"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
\t\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t</ul>

\t\t
\t</div><!-- /.container -->
</section><!-- /.bande-01 -->







";
        
        $__internal_87b3613d94444e558032e2bf89732d913592080d1542745ab124fa97463e8757->leave($__internal_87b3613d94444e558032e2bf89732d913592080d1542745ab124fa97463e8757_prof);

        
        $__internal_dd5bfbd49ee909bd20e905531779644c66db181f25d717047e8902da13ab8946->leave($__internal_dd5bfbd49ee909bd20e905531779644c66db181f25d717047e8902da13ab8946_prof);

    }

    public function getTemplateName()
    {
        return "CrazyBundle:News:actualites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 22,  109 => 19,  102 => 18,  97 => 17,  93 => 14,  85 => 12,  78 => 11,  74 => 10,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
<section class=\"bande-01\">
\t<div class=\"container\">
\t\t<h1>Actualités</h1>
\t\t
\t\t{% for news in listeNews %}
\t\t\t<p><strong class=\"rose\">{{ news.publication|date(\"d/m/Y\") }}</strong> - {{ news.titre }}
\t\t\t<a href=\"{{ path('actualites_post', {'id': news.id}) }}\" class=\"rose\">Lire</a></p>
\t\t{% endfor %}

\t\t<ul class=\"pagination\">
\t\t\t{# Fonction range(a, b) qui crée un tableau de valeurs entre a et b #}
\t\t\t{% for p in range(1, nbPages) %}
\t\t\t\t<li{% if p == page %} class=\"active\"{% endif %}>
\t\t\t\t\t<a href=\"{{ path('actualites', {'page': p}) }}\">{{ p }}</a>
\t\t\t\t</li>
\t\t\t{% endfor %}
\t\t</ul>

\t\t
\t</div><!-- /.container -->
</section><!-- /.bande-01 -->







{% endblock %}
", "CrazyBundle:News:actualites.html.twig", "/home/claire/www/projects/CRAZYDISCOTRAIL/src/CrazyBundle/Resources/views/News/actualites.html.twig");
    }
}
