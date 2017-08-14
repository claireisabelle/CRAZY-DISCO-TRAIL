<?php

/* @Twig/Exception/error404.html.twig */
class __TwigTemplate_32fd022da4eb21cd767f1c2a9f75bbcc992273eaf0d361533801a8355607fa10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("crazytemplate.html.twig", "@Twig/Exception/error404.html.twig", 1);
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
        echo "Oups... Erreur ";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "\t<section class=\"contact\">
\t\t<div class=\"row\">

\t\t\t
\t\t\t<div class=\"col-12 col-md-10\">
\t\t\t\t<h1>Petit problème</h1>
\t\t\t\t<p>Il semblerait que la page que vous cherchez n'existe pas... Ce n'est pas bien grave : vous pouvez retrouver votre chemin en utilisant le menu du site en haut ou en bas <i class=\"fa fa-smile-o\" aria-hidden=\"true\"></i>
\t\t\t\t</p>
\t\t\t\t<p>Erreur ";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo " -  \"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "\"</p>
\t\t\t</div>

\t\t\t
\t\t</div>

\t\t
\t</section>

";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 15,  39 => 7,  36 => 6,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/error404.html.twig", "/home/claire/www/projects/CRAZYDISCOTRAIL/app/Resources/TwigBundle/views/Exception/error404.html.twig");
    }
}
