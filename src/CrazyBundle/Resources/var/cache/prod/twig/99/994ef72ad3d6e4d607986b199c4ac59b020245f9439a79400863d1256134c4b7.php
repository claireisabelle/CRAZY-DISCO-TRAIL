<?php

/* CrazyBundle:Pagesinternes:index.html.twig */
class __TwigTemplate_7f443cfa36fb02c70a6d9a5ad7b5d0f736993a70c9e704f3cb0679fdcfa55bd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("crazytemplate.html.twig", "CrazyBundle:Pagesinternes:index.html.twig", 1);
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
        echo " 1ère édition ! ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<section class=\"bande-01\">
\t<div class=\"container\">
\t\t<h1>Crazy Disco <span class=\"rose\">Trail</span></h1>

\t\t<div class=\"row vertical-align\">
\t\t\t<div class=\"col-xs-12 col-md-6\">
\t\t\t\t<p>Le <span class=\"vert\">Crazy Disco Trail</span> sera tout simplement le 7 km le plus lumineux et le plus musical de l'année. Une course nocturne dans la plus <span class=\"bleu\">grande boîte de nuit extérieure</span> avec des DJ et des décors phosphorescents placés chaque kilomètre.</p>

\t\t\t\t<p><span class=\"rose\">Un spectacle</span> sonore déjanté où chaque participant portera ses accessoires « fluo » les plus fun.</p>

\t\t\t\t<p>Marche, cours, danse, éclate- toi !!!  dans <span class=\"orange\">ce voyage</span> lumineux, sans chrono, entre amis ou en famille.</p>   
\t\t\t\t
\t\t\t\t<p>TU AS « KIFFE » l’AUDACIEUSE &amp; LE TRAIL DE L’ANGOISSE ?</p>
\t\t\t\t<p>TU <strong>ADORERAS</strong> la première édition du  <strong><span class=\"vert\">CRAZY</span> <span class=\"rose\">DISCO</span> <span class=\"bleu\">TRAIL !</span></strong></p>

\t\t\t</div><!-- /.col -->

\t\t\t<div class=\"col-xs-12 col-md-6\">
\t\t\t\t<img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/affiche2017.jpg"), "html", null, true);
        echo "\" class=\"img-responsive center-block\" alt=\"\" title=\"\" />
\t\t\t</div><!-- /.col -->
\t\t</div><!-- /.row -->
\t</div><!-- /.container -->
</section><!-- /.bande-01 -->

<section class=\"bande-02\">
\t<div class=\"container\">
\t\t<h2>Inscription</h2>

\t\t<p class=\"text-center\">Le Crazy Disco Trail aura lieu le samedi 4 novembre 2017 à partir de 19h.</p>
\t\t<p class=\"text-center\">Les Départs se feront sous forme de vagues, bruyantes et fluorescentes, toutes les 30 minutes.</p>
\t\t<p class=\"text-center\"><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscription");
        echo "\" class=\"btn btn-warning\">EN SAVOIR +</a></p>
\t\t
\t\t
\t</div><!-- /.container -->
</section><!-- /.bande-02 -->

<section class=\"bande-01\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-md-6\">
\t\t\t\t<h2>Facebook</h2>
\t\t\t\t<p class=\"text-center\">Retrouve nous sur Facebook !</p>
\t\t\t\t<p class=\"text-center\"><a href=\"\" class=\"btn btn-primary\">FACEBOOK CRAZY DISCO TRAIL</a></p>
\t\t\t\t<p class=\"text-center\"><iframe src=\"https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftraildelangoisse%2F%3Ffref%3Dts&tabs=timeline&width=280&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId\" width=\"280\" height=\"500\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\"></iframe></p>
\t\t\t</div><!-- /.col -->

\t\t\t<div class=\"col-xs-12 col-md-6\">
\t\t\t\t<h2>Actualités</h2>
\t\t\t\t<p class=\"text-center\">Toute les news de la Crazy Disco Trail !</p>
\t\t\t\t<p class=\"text-center\"><a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actualites");
        echo "\" class=\"btn btn-success\">ACTUALITES</a></p>
\t\t\t\t
\t\t\t\t";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeNews"]) ? $context["listeNews"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 58
            echo "\t\t\t\t\t<p><strong class=\"rose\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["news"], "publication", array()), "d/m/Y"), "html", null, true);
            echo " - </strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "titre", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actualites_post", array("id" => $this->getAttribute($context["news"], "id", array()))), "html", null, true);
            echo "\" class=\"rose\">Lire la suite</a></p>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t\t\t

\t\t\t\t<p><img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/illus1.jpg"), "html", null, true);
        echo "\" alt=\"\" title=\"\" class=\"img-responsive border-gris\" /></p>
\t\t\t</div><!-- /.col -->

\t\t</div><!-- /.row -->
\t
\t\t
\t</div><!-- /.container -->
</section><!-- /.bande-01 -->

";
    }

    public function getTemplateName()
    {
        return "CrazyBundle:Pagesinternes:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 62,  117 => 60,  104 => 58,  100 => 57,  95 => 55,  73 => 36,  58 => 24,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CrazyBundle:Pagesinternes:index.html.twig", "/home/claire/www/projects/CRAZYDISCOTRAIL/src/CrazyBundle/Resources/views/Pagesinternes/index.html.twig");
    }
}
