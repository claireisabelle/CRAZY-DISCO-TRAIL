<?php

/* CrazyBundle:News:form.html.twig */
class __TwigTemplate_67277e70bbdbd132a869ce4076701cf7b9624af82b7b0b9cffd67b7039e16417 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc7cbbf6a86f382c7fbe6957c156d5347ef9877cfde1683c7f13a7435736a451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc7cbbf6a86f382c7fbe6957c156d5347ef9877cfde1683c7f13a7435736a451->enter($__internal_fc7cbbf6a86f382c7fbe6957c156d5347ef9877cfde1683c7f13a7435736a451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CrazyBundle:News:form.html.twig"));

        $__internal_bc67ea987361a6bf863d912b0e4a19d16f110c15c929b65b62972bf591f60450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc67ea987361a6bf863d912b0e4a19d16f110c15c929b65b62972bf591f60450->enter($__internal_bc67ea987361a6bf863d912b0e4a19d16f110c15c929b65b62972bf591f60450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CrazyBundle:News:form.html.twig"));

        // line 1
        echo "\t";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "


\t\t";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 col-md-6\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Titre"));
        echo "
\t      \t\t\t";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div><!-- /.form-group -->

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Contenu"));
        echo "
\t      \t\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div><!-- /.form-group -->
\t\t\t\t

\t\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

\t\t\t</div><!-- /.col -->

\t\t</div><!-- /.row -->
\t\t

\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "


\t";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "




";
        
        $__internal_fc7cbbf6a86f382c7fbe6957c156d5347ef9877cfde1683c7f13a7435736a451->leave($__internal_fc7cbbf6a86f382c7fbe6957c156d5347ef9877cfde1683c7f13a7435736a451_prof);

        
        $__internal_bc67ea987361a6bf863d912b0e4a19d16f110c15c929b65b62972bf591f60450->leave($__internal_bc67ea987361a6bf863d912b0e4a19d16f110c15c929b65b62972bf591f60450_prof);

    }

    public function getTemplateName()
    {
        return "CrazyBundle:News:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 29,  72 => 26,  62 => 19,  55 => 15,  51 => 14,  44 => 10,  40 => 9,  32 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("\t{{ form_start(form) }}


\t\t{{ form_errors(form) }}

\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 col-md-6\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(form.titre, \"Titre\", {'label_attr': {'class': 'control-label'}}) }}
\t      \t\t\t{{ form_widget(form.titre, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t</div><!-- /.form-group -->

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(form.contenu, \"Contenu\", {'label_attr': {'class': 'control-label'}}) }}
\t      \t\t\t{{ form_widget(form.contenu, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t</div><!-- /.form-group -->
\t\t\t\t

\t\t\t\t{{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}

\t\t\t</div><!-- /.col -->

\t\t</div><!-- /.row -->
\t\t

\t\t{{ form_rest(form) }}


\t{{ form_end(form) }}




", "CrazyBundle:News:form.html.twig", "/home/claire/www/projects/CRAZYDISCOTRAIL/src/CrazyBundle/Resources/views/News/form.html.twig");
    }
}
