<?php

/* FMElfinderBundle:Form:elfinder_widget.html.twig */
class __TwigTemplate_7cf71650c51720bcd720d4d28bd620a593767054e564a4a347a3b581011786fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'elfinder_widget' => array($this, 'block_elfinder_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e534c715ff1864e799e1948c97a2c92b5f40c0daa14eba39dd4b8fe6e2afaa32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e534c715ff1864e799e1948c97a2c92b5f40c0daa14eba39dd4b8fe6e2afaa32->enter($__internal_e534c715ff1864e799e1948c97a2c92b5f40c0daa14eba39dd4b8fe6e2afaa32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMElfinderBundle:Form:elfinder_widget.html.twig"));

        $__internal_4990483db6178a8ca9c989c546e98fe2d9f1f915489d81e1e64f9fbcb338af50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4990483db6178a8ca9c989c546e98fe2d9f1f915489d81e1e64f9fbcb338af50->enter($__internal_4990483db6178a8ca9c989c546e98fe2d9f1f915489d81e1e64f9fbcb338af50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMElfinderBundle:Form:elfinder_widget.html.twig"));

        // line 1
        $this->displayBlock('elfinder_widget', $context, $blocks);
        
        $__internal_e534c715ff1864e799e1948c97a2c92b5f40c0daa14eba39dd4b8fe6e2afaa32->leave($__internal_e534c715ff1864e799e1948c97a2c92b5f40c0daa14eba39dd4b8fe6e2afaa32_prof);

        
        $__internal_4990483db6178a8ca9c989c546e98fe2d9f1f915489d81e1e64f9fbcb338af50->leave($__internal_4990483db6178a8ca9c989c546e98fe2d9f1f915489d81e1e64f9fbcb338af50_prof);

    }

    public function block_elfinder_widget($context, array $blocks = array())
    {
        $__internal_665a81c5e7819c8bb54c37e6d443a6b5e4ae77cfd4fca6897033516c0bb79632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_665a81c5e7819c8bb54c37e6d443a6b5e4ae77cfd4fca6897033516c0bb79632->enter($__internal_665a81c5e7819c8bb54c37e6d443a6b5e4ae77cfd4fca6897033516c0bb79632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "elfinder_widget"));

        $__internal_10a441e225284f3d58c208cf2d0452a91b6fec5b17fe6b89e4603d4fe5bce8ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10a441e225284f3d58c208cf2d0452a91b6fec5b17fe6b89e4603d4fe5bce8ae->enter($__internal_10a441e225284f3d58c208cf2d0452a91b6fec5b17fe6b89e4603d4fe5bce8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "elfinder_widget"));

        // line 2
        echo "    <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo " data-type=\"elfinder-input-field\" />
    ";
        // line 3
        if (((isset($context["enable"]) ? $context["enable"] : $this->getContext($context, "enable")) && array_key_exists("instance", $context))) {
            // line 4
            echo "        <script type=\"text/javascript\" charset=\"utf-8\">
            document.addEventListener(\"DOMContentLoaded\", function(event) {
                \$('[data-type=\"elfinder-input-field\"][id=\"";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"]').on(\"click\",function() {
                    var childWin = window.open(\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("elfinder", array("instance" => (isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "homeFolder" => (isset($context["homeFolder"]) ? $context["homeFolder"] : $this->getContext($context, "homeFolder")))), "html", null, true);
            echo "?id=";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\", \"popupWindow\", \"height=450, width=900\");
                });
            });
            
            function setValue(value, element_id) {
                \$('[data-type=\"elfinder-input-field\"]' + (element_id ? '[id=\"'+ element_id +'\"]': '')).val(value).change();
            }
        </script>
    ";
        }
        
        $__internal_10a441e225284f3d58c208cf2d0452a91b6fec5b17fe6b89e4603d4fe5bce8ae->leave($__internal_10a441e225284f3d58c208cf2d0452a91b6fec5b17fe6b89e4603d4fe5bce8ae_prof);

        
        $__internal_665a81c5e7819c8bb54c37e6d443a6b5e4ae77cfd4fca6897033516c0bb79632->leave($__internal_665a81c5e7819c8bb54c37e6d443a6b5e4ae77cfd4fca6897033516c0bb79632_prof);

    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Form:elfinder_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  65 => 7,  61 => 6,  57 => 4,  55 => 3,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block elfinder_widget %}
    <input type=\"text\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %} data-type=\"elfinder-input-field\" />
    {% if enable and instance is defined %}
        <script type=\"text/javascript\" charset=\"utf-8\">
            document.addEventListener(\"DOMContentLoaded\", function(event) {
                \$('[data-type=\"elfinder-input-field\"][id=\"{{ id }}\"]').on(\"click\",function() {
                    var childWin = window.open(\"{{path('elfinder', {'instance': instance, 'homeFolder': homeFolder })}}?id={{ id }}\", \"popupWindow\", \"height=450, width=900\");
                });
            });
            
            function setValue(value, element_id) {
                \$('[data-type=\"elfinder-input-field\"]' + (element_id ? '[id=\"'+ element_id +'\"]': '')).val(value).change();
            }
        </script>
    {% endif %}
{% endblock %}
", "FMElfinderBundle:Form:elfinder_widget.html.twig", "/home/claire/www/projects/CRAZYDISCOTRAIL/vendor/helios-ag/fm-elfinder-bundle/Resources/views/Form/elfinder_widget.html.twig");
    }
}
