<?php

/* CrazyBundle:Pagesinternes:inscription.html.twig */
class __TwigTemplate_80b1f1c8932275772f3fee4a90773ff1f74bb341413d91181d7cb3f5fecbf3d1 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " - Inscription ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
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
\t\t\t\t\t\t<td class=\"vert\">Les 500 premiers</td>
\t\t\t\t\t\t<td>25,00 €</td>
\t\t\t\t\t\t<td>16,00 €</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"vert\">Les 2000 suivants</td>
\t\t\t\t\t\t<td>30,00 €</td>
\t\t\t\t\t\t<td>16,00 €</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"vert\">A partir de 2501</td>
\t\t\t\t\t\t<td>35,00 €</td>
\t\t\t\t\t\t<td>16,00 €</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t<p>Vous pouvez souscrire à l'option \"Modification d'inscription\" qui vous permettra de changer d’horaire de départ, de  céder ou vendre votre dossard (+5€).</p>
\t\t\t</div><!-- /.col -->

\t\t\t<div class=\"col-xs-12 col-md-6\">
\t\t\t\t<img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/concert-crazy-disco.jpg"), "html", null, true);
        echo "\" class=\"img-responsive center-block border-gris\" alt=\"\" title=\"\" />
\t\t\t</div><!-- /.col -->

\t\t</div><!-- /.row -->
\t</div><!-- /.container -->
</section><!-- /.bande-02 -->



";
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
        return array (  86 => 52,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CrazyBundle:Pagesinternes:inscription.html.twig", "/home/claire/www/projects/CRAZYDISCOTRAIL/src/CrazyBundle/Resources/views/Pagesinternes/inscription.html.twig");
    }
}
