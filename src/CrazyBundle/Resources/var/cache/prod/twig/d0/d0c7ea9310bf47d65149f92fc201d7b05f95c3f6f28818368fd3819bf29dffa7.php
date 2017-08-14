<?php

/* CrazyBundle:News:article.html.twig */
class __TwigTemplate_5f0a6304c6080179c7c1178bcaf59081754b638dd04b0c8b95b51249dc42972e extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "- Actualités";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<section class=\"bande-02\">
\t<div class=\"container\">
\t\t<h3 class=\"bleu\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "titre", array()), "html", null, true);
        echo "</h3>
\t\t<p><em>Publié le ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "publication", array()), "d/m/Y"), "html", null, true);
        echo " </em></p>

\t\t<p>";
        // line 11
        echo $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "contenu", array());
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
        return array (  63 => 20,  51 => 11,  46 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CrazyBundle:News:article.html.twig", "/home/claire/www/projects/CRAZYDISCOTRAIL/src/CrazyBundle/Resources/views/News/article.html.twig");
    }
}
