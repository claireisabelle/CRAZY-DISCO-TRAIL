<?php

/* CrazyBundle:Pagesinternes:inscription.html.twig */
class __TwigTemplate_c385ed4f40ec68826e848509a63075a4024d553b23ea556ba8b8690900887a1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("crazytemplate.html.twig", "CrazyBundle:Pagesinternes:inscription.html.twig", 1);
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
        $__internal_a11a68f96c8dee353273bbe7d7d0ee2a0ad7e865b6db18aae118350f2f495aa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a11a68f96c8dee353273bbe7d7d0ee2a0ad7e865b6db18aae118350f2f495aa1->enter($__internal_a11a68f96c8dee353273bbe7d7d0ee2a0ad7e865b6db18aae118350f2f495aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CrazyBundle:Pagesinternes:inscription.html.twig"));

        $__internal_1d9c1b5503e2de1280023722b9406458c76520376d787ba50f152ba73925a0cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d9c1b5503e2de1280023722b9406458c76520376d787ba50f152ba73925a0cb->enter($__internal_1d9c1b5503e2de1280023722b9406458c76520376d787ba50f152ba73925a0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CrazyBundle:Pagesinternes:inscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a11a68f96c8dee353273bbe7d7d0ee2a0ad7e865b6db18aae118350f2f495aa1->leave($__internal_a11a68f96c8dee353273bbe7d7d0ee2a0ad7e865b6db18aae118350f2f495aa1_prof);

        
        $__internal_1d9c1b5503e2de1280023722b9406458c76520376d787ba50f152ba73925a0cb->leave($__internal_1d9c1b5503e2de1280023722b9406458c76520376d787ba50f152ba73925a0cb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_64e74ca8719c4ee08cb6f3722e6c2356286956dd570a071e305c2fbbd42156c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64e74ca8719c4ee08cb6f3722e6c2356286956dd570a071e305c2fbbd42156c0->enter($__internal_64e74ca8719c4ee08cb6f3722e6c2356286956dd570a071e305c2fbbd42156c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3b15f04db72e799a70c5f44afa4c0db5916ce98126768a229aa330fd89af6731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b15f04db72e799a70c5f44afa4c0db5916ce98126768a229aa330fd89af6731->enter($__internal_3b15f04db72e799a70c5f44afa4c0db5916ce98126768a229aa330fd89af6731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " - Inscription ";
        
        $__internal_3b15f04db72e799a70c5f44afa4c0db5916ce98126768a229aa330fd89af6731->leave($__internal_3b15f04db72e799a70c5f44afa4c0db5916ce98126768a229aa330fd89af6731_prof);

        
        $__internal_64e74ca8719c4ee08cb6f3722e6c2356286956dd570a071e305c2fbbd42156c0->leave($__internal_64e74ca8719c4ee08cb6f3722e6c2356286956dd570a071e305c2fbbd42156c0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b549ffabc4449da0a6a72d1f0e91ae85924d03607ad48a7b797aa370306d3f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b549ffabc4449da0a6a72d1f0e91ae85924d03607ad48a7b797aa370306d3f5->enter($__internal_5b549ffabc4449da0a6a72d1f0e91ae85924d03607ad48a7b797aa370306d3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f2a9f0a86e66f2519739f1e54dc0688c7e43cc634e338e694d7f0037e8faf464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a9f0a86e66f2519739f1e54dc0688c7e43cc634e338e694d7f0037e8faf464->enter($__internal_f2a9f0a86e66f2519739f1e54dc0688c7e43cc634e338e694d7f0037e8faf464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<section class=\"bande-01\">
\t<div class=\"container\">
\t\t<h1>Inscription</h1>

\t\t<p class=\"text-center\">Le Crazy Disco Trail aura lieu le samedi 4 novembre 2017 à partir de 19h.</p>
\t\t<p class=\"text-center\">Les Départs se feront sous forme de vagues, bruyantes et fluorescentes, toutes les 30 minutes.</p>

\t\t<p class=\"text-center\"><a href=\"\" class=\"btn btn-success\">FORMULAIRE D'INSCRIPTION</a></p>\t
\t\t
\t\t
\t\t
\t</div><!-- /.container -->
</section><!-- /.bande-01 -->

<section class=\"bande-02\">
\t<div class=\"container\">
\t\t<h2>Tarifs d'inscription</h2>
\t\t<div class=\"row vertical-align\">
\t\t\t<div class=\"col-xs-12 col-md-6\">
\t\t\t\t
\t\t\t\t<table class=\"table table-bordered table-hover table-condensed text-center\">
\t\t\t\t\t<tr class=\"rose\">
\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t<td>A partir de 16 ans</td>
\t\t\t\t\t\t<td>De 12 à 15 ans</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"vert\">De 1 à 1000</td>
\t\t\t\t\t\t<td>26,00 €</td>
\t\t\t\t\t\t<td>16,00 €</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"vert\">De 1001 à 2000</td>
\t\t\t\t\t\t<td>29,00 €</td>
\t\t\t\t\t\t<td>-</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"vert\">De 2001 à 3000</td>
\t\t\t\t\t\t<td>32,00 €</td>
\t\t\t\t\t\t<td>-</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"vert\">De 3001 à 5000</td>
\t\t\t\t\t\t<td>35,00 €</td>
\t\t\t\t\t\t<td>-</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t<p>Vous pouvez souscrire à l'option \"Modification d'inscription\" qui vous permettra de changer d’horaire de départ, de  céder ou vendre votre dossard (+5€).</p>
\t\t\t</div><!-- /.col -->

\t\t\t<div class=\"col-xs-12 col-md-6\">
\t\t\t\t<img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/concert-crazy-disco.jpg"), "html", null, true);
        echo "\" class=\"img-responsive center-block border-gris\" alt=\"\" title=\"\" />
\t\t\t</div><!-- /.col -->

\t\t</div><!-- /.row -->
\t</div><!-- /.container -->
</section><!-- /.bande-02 -->



";
        
        $__internal_f2a9f0a86e66f2519739f1e54dc0688c7e43cc634e338e694d7f0037e8faf464->leave($__internal_f2a9f0a86e66f2519739f1e54dc0688c7e43cc634e338e694d7f0037e8faf464_prof);

        
        $__internal_5b549ffabc4449da0a6a72d1f0e91ae85924d03607ad48a7b797aa370306d3f5->leave($__internal_5b549ffabc4449da0a6a72d1f0e91ae85924d03607ad48a7b797aa370306d3f5_prof);

    }

    public function getTemplateName()
    {
        return "CrazyBundle:Pagesinternes:inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 57,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %} - Inscription {% endblock%}

{% block body %}
<section class=\"bande-01\">
\t<div class=\"container\">
\t\t<h1>Inscription</h1>

\t\t<p class=\"text-center\">Le Crazy Disco Trail aura lieu le samedi 4 novembre 2017 à partir de 19h.</p>
\t\t<p class=\"text-center\">Les Départs se feront sous forme de vagues, bruyantes et fluorescentes, toutes les 30 minutes.</p>

\t\t<p class=\"text-center\"><a href=\"\" class=\"btn btn-success\">FORMULAIRE D'INSCRIPTION</a></p>\t
\t\t
\t\t
\t\t
\t</div><!-- /.container -->
</section><!-- /.bande-01 -->

<section class=\"bande-02\">
\t<div class=\"container\">
\t\t<h2>Tarifs d'inscription</h2>
\t\t<div class=\"row vertical-align\">
\t\t\t<div class=\"col-xs-12 col-md-6\">
\t\t\t\t
\t\t\t\t<table class=\"table table-bordered table-hover table-condensed text-center\">
\t\t\t\t\t<tr class=\"rose\">
\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t<td>A partir de 16 ans</td>
\t\t\t\t\t\t<td>De 12 à 15 ans</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"vert\">De 1 à 1000</td>
\t\t\t\t\t\t<td>26,00 €</td>
\t\t\t\t\t\t<td>16,00 €</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"vert\">De 1001 à 2000</td>
\t\t\t\t\t\t<td>29,00 €</td>
\t\t\t\t\t\t<td>-</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"vert\">De 2001 à 3000</td>
\t\t\t\t\t\t<td>32,00 €</td>
\t\t\t\t\t\t<td>-</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"vert\">De 3001 à 5000</td>
\t\t\t\t\t\t<td>35,00 €</td>
\t\t\t\t\t\t<td>-</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t<p>Vous pouvez souscrire à l'option \"Modification d'inscription\" qui vous permettra de changer d’horaire de départ, de  céder ou vendre votre dossard (+5€).</p>
\t\t\t</div><!-- /.col -->

\t\t\t<div class=\"col-xs-12 col-md-6\">
\t\t\t\t<img src=\"{{ asset('img/concert-crazy-disco.jpg') }}\" class=\"img-responsive center-block border-gris\" alt=\"\" title=\"\" />
\t\t\t</div><!-- /.col -->

\t\t</div><!-- /.row -->
\t</div><!-- /.container -->
</section><!-- /.bande-02 -->



{% endblock %}
", "CrazyBundle:Pagesinternes:inscription.html.twig", "/home/claire/www/projects/CRAZYDISCOTRAIL/src/CrazyBundle/Resources/views/Pagesinternes/inscription.html.twig");
    }
}
