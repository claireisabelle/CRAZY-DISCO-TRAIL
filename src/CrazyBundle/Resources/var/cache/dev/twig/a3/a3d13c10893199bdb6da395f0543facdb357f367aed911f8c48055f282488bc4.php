<?php

/* CoreSphereConsoleBundle:Toolbar:toolbar.html.twig */
class __TwigTemplate_de2c58460b4cbfada9ed5e9f57e4a9bf1f76fe5533c61232106b3a7b5f0fa3bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d94f34c98a0bf99d905d386b16869bf9ce7a4e4d45edfbfc69bb1d4103d7a23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d94f34c98a0bf99d905d386b16869bf9ce7a4e4d45edfbfc69bb1d4103d7a23->enter($__internal_8d94f34c98a0bf99d905d386b16869bf9ce7a4e4d45edfbfc69bb1d4103d7a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig"));

        $__internal_ab367fdb66479f7a5bb6df192062f15de2577206435398cb45f012027ae8a778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab367fdb66479f7a5bb6df192062f15de2577206435398cb45f012027ae8a778->enter($__internal_ab367fdb66479f7a5bb6df192062f15de2577206435398cb45f012027ae8a778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d94f34c98a0bf99d905d386b16869bf9ce7a4e4d45edfbfc69bb1d4103d7a23->leave($__internal_8d94f34c98a0bf99d905d386b16869bf9ce7a4e4d45edfbfc69bb1d4103d7a23_prof);

        
        $__internal_ab367fdb66479f7a5bb6df192062f15de2577206435398cb45f012027ae8a778->leave($__internal_ab367fdb66479f7a5bb6df192062f15de2577206435398cb45f012027ae8a778_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e1515a1284844c0a37afe2564d0599543d39baa7ab5a03fdf3f91ae326695403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1515a1284844c0a37afe2564d0599543d39baa7ab5a03fdf3f91ae326695403->enter($__internal_e1515a1284844c0a37afe2564d0599543d39baa7ab5a03fdf3f91ae326695403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f22d450da1b55f5faef5d95bb25f0ff05cbd56da8847d3044783f7ae8da9de8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f22d450da1b55f5faef5d95bb25f0ff05cbd56da8847d3044783f7ae8da9de8f->enter($__internal_f22d450da1b55f5faef5d95bb25f0ff05cbd56da8847d3044783f7ae8da9de8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("console");
        echo "\" class=\"coresphere_console_popover\">
            <img width=\"13\" height=\"28\" alt=\"Console\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
bWFnZVJlYWR5ccllPAAAAG5JREFUeNpi/P//PwM1ARMDlcGogZQDlhMnTlAtmi0sLBip70IkNiOF
rsMwkKGiouL/CE42Bw4cAGOqGejg4AA3mGouRDaYnGSD1YXoFhCyhIVYm4l16UguvmB5keLCAVTk
UNOFjKO13ggwECDAAAMNHZ7ErsJjAAAAAElFTkSuQmCC\"/>
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 12
        echo "    ";
        $context["text"] = ('' === $tmp = "Console") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 13
        echo "
    ";
        // line 14
        $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig", 14)->display(array_merge($context, array("link" => false)));
        
        $__internal_f22d450da1b55f5faef5d95bb25f0ff05cbd56da8847d3044783f7ae8da9de8f->leave($__internal_f22d450da1b55f5faef5d95bb25f0ff05cbd56da8847d3044783f7ae8da9de8f_prof);

        
        $__internal_e1515a1284844c0a37afe2564d0599543d39baa7ab5a03fdf3f91ae326695403->leave($__internal_e1515a1284844c0a37afe2564d0599543d39baa7ab5a03fdf3f91ae326695403_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  66 => 13,  63 => 12,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        <a href=\"{{ path('console') }}\" class=\"coresphere_console_popover\">
            <img width=\"13\" height=\"28\" alt=\"Console\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
bWFnZVJlYWR5ccllPAAAAG5JREFUeNpi/P//PwM1ARMDlcGogZQDlhMnTlAtmi0sLBip70IkNiOF
rsMwkKGiouL/CE42Bw4cAGOqGejg4AA3mGouRDaYnGSD1YXoFhCyhIVYm4l16UguvmB5keLCAVTk
UNOFjKO13ggwECDAAAMNHZ7ErsJjAAAAAElFTkSuQmCC\"/>
        </a>
    {% endset %}
    {% set text %}Console{% endset %}

    {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { 'link': false } %}
{% endblock %}
", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig", "/home/claire/www/projects/CRAZYDISCOTRAIL/vendor/coresphere/console-bundle/Resources/views/Toolbar/toolbar.html.twig");
    }
}
