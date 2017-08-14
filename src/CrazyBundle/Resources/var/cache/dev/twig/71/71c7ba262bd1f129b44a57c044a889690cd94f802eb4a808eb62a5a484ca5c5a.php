<?php

/* CrazyBundle:Pagescourse:acces.html.twig */
class __TwigTemplate_27079a3645da1a8664d7ab7d6c57cec2dc829aa76d2504b16f68993a29807d9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("crazytemplate.html.twig", "CrazyBundle:Pagescourse:acces.html.twig", 1);
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
        $__internal_54fbc3f3485666020b40da3f93885641a21d4ed84e34417e45b8d99013deccc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54fbc3f3485666020b40da3f93885641a21d4ed84e34417e45b8d99013deccc2->enter($__internal_54fbc3f3485666020b40da3f93885641a21d4ed84e34417e45b8d99013deccc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CrazyBundle:Pagescourse:acces.html.twig"));

        $__internal_98f534fdd42ff549fe1359e51000e1ab36aa59d2307c7cd605fb97c05a561249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98f534fdd42ff549fe1359e51000e1ab36aa59d2307c7cd605fb97c05a561249->enter($__internal_98f534fdd42ff549fe1359e51000e1ab36aa59d2307c7cd605fb97c05a561249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CrazyBundle:Pagescourse:acces.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54fbc3f3485666020b40da3f93885641a21d4ed84e34417e45b8d99013deccc2->leave($__internal_54fbc3f3485666020b40da3f93885641a21d4ed84e34417e45b8d99013deccc2_prof);

        
        $__internal_98f534fdd42ff549fe1359e51000e1ab36aa59d2307c7cd605fb97c05a561249->leave($__internal_98f534fdd42ff549fe1359e51000e1ab36aa59d2307c7cd605fb97c05a561249_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fca0d5aa74f39cca2e0cf43391058c3f9d5f48bab68b5d45b3109a846d2127c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fca0d5aa74f39cca2e0cf43391058c3f9d5f48bab68b5d45b3109a846d2127c->enter($__internal_1fca0d5aa74f39cca2e0cf43391058c3f9d5f48bab68b5d45b3109a846d2127c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_110c30422f24a85549ea530c6e2c3494db037a9b3f0c228b4939233b379b21aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_110c30422f24a85549ea530c6e2c3494db037a9b3f0c228b4939233b379b21aa->enter($__internal_110c30422f24a85549ea530c6e2c3494db037a9b3f0c228b4939233b379b21aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "- Infos : Accès";
        
        $__internal_110c30422f24a85549ea530c6e2c3494db037a9b3f0c228b4939233b379b21aa->leave($__internal_110c30422f24a85549ea530c6e2c3494db037a9b3f0c228b4939233b379b21aa_prof);

        
        $__internal_1fca0d5aa74f39cca2e0cf43391058c3f9d5f48bab68b5d45b3109a846d2127c->leave($__internal_1fca0d5aa74f39cca2e0cf43391058c3f9d5f48bab68b5d45b3109a846d2127c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a68e943709b1a287102a98037d105020c654f532e97229c4fd66089f42a84cfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a68e943709b1a287102a98037d105020c654f532e97229c4fd66089f42a84cfc->enter($__internal_a68e943709b1a287102a98037d105020c654f532e97229c4fd66089f42a84cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6c3ff3e795ea239a908784c0aa1657468399638cea11970eaa19fef7651f19b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c3ff3e795ea239a908784c0aa1657468399638cea11970eaa19fef7651f19b8->enter($__internal_6c3ff3e795ea239a908784c0aa1657468399638cea11970eaa19fef7651f19b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<section class=\"bande-01\">
\t<div class=\"container\">
\t\t<h1>Accès</h1>

\t\t<p class=\"text-center\">Le Haras National de SAINT-LO<br />
\t\tAVENUE DU MARECHAL JUIN<br />
\t\t50000 SAINT-LO</p>

\t\t<img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/acces.png"), "html", null, true);
        echo "\" class=\"img-responsive center-block\" alt=\"\" title=\"\" />

\t\t

\t</div><!-- /.container -->
</section><!-- /.bande-01 -->





";
        
        $__internal_6c3ff3e795ea239a908784c0aa1657468399638cea11970eaa19fef7651f19b8->leave($__internal_6c3ff3e795ea239a908784c0aa1657468399638cea11970eaa19fef7651f19b8_prof);

        
        $__internal_a68e943709b1a287102a98037d105020c654f532e97229c4fd66089f42a84cfc->leave($__internal_a68e943709b1a287102a98037d105020c654f532e97229c4fd66089f42a84cfc_prof);

    }

    public function getTemplateName()
    {
        return "CrazyBundle:Pagescourse:acces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 14,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}- Infos : Accès{% endblock %}

{% block body %}
<section class=\"bande-01\">
\t<div class=\"container\">
\t\t<h1>Accès</h1>

\t\t<p class=\"text-center\">Le Haras National de SAINT-LO<br />
\t\tAVENUE DU MARECHAL JUIN<br />
\t\t50000 SAINT-LO</p>

\t\t<img src=\"{{ asset('img/acces.png') }}\" class=\"img-responsive center-block\" alt=\"\" title=\"\" />

\t\t

\t</div><!-- /.container -->
</section><!-- /.bande-01 -->





{% endblock %}
", "CrazyBundle:Pagescourse:acces.html.twig", "/home/claire/www/projects/CRAZYDISCOTRAIL/src/CrazyBundle/Resources/views/Pagescourse/acces.html.twig");
    }
}
