<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5a34e7ceed40fccc5ea1a493e8cadb537375c0b5e329a48dc40d23ac0e3c5a5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e735e832f0e275bec9588a474101a26c7fe1f193bbb0d7ce1d11e99ae6f8da3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e735e832f0e275bec9588a474101a26c7fe1f193bbb0d7ce1d11e99ae6f8da3->enter($__internal_6e735e832f0e275bec9588a474101a26c7fe1f193bbb0d7ce1d11e99ae6f8da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_40c2f7a47eed8e91827926e2eed5e5c44864c8f8052873859263d4c454b4879e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40c2f7a47eed8e91827926e2eed5e5c44864c8f8052873859263d4c454b4879e->enter($__internal_40c2f7a47eed8e91827926e2eed5e5c44864c8f8052873859263d4c454b4879e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e735e832f0e275bec9588a474101a26c7fe1f193bbb0d7ce1d11e99ae6f8da3->leave($__internal_6e735e832f0e275bec9588a474101a26c7fe1f193bbb0d7ce1d11e99ae6f8da3_prof);

        
        $__internal_40c2f7a47eed8e91827926e2eed5e5c44864c8f8052873859263d4c454b4879e->leave($__internal_40c2f7a47eed8e91827926e2eed5e5c44864c8f8052873859263d4c454b4879e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c43ac688e6a09582786150aa497744b9fdfc16a15bfe15aa88742f9f426b32cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c43ac688e6a09582786150aa497744b9fdfc16a15bfe15aa88742f9f426b32cd->enter($__internal_c43ac688e6a09582786150aa497744b9fdfc16a15bfe15aa88742f9f426b32cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e6583087e1c790ee493361871efb1809b536ef81ea69d78b24a54b5c1a9b5221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6583087e1c790ee493361871efb1809b536ef81ea69d78b24a54b5c1a9b5221->enter($__internal_e6583087e1c790ee493361871efb1809b536ef81ea69d78b24a54b5c1a9b5221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e6583087e1c790ee493361871efb1809b536ef81ea69d78b24a54b5c1a9b5221->leave($__internal_e6583087e1c790ee493361871efb1809b536ef81ea69d78b24a54b5c1a9b5221_prof);

        
        $__internal_c43ac688e6a09582786150aa497744b9fdfc16a15bfe15aa88742f9f426b32cd->leave($__internal_c43ac688e6a09582786150aa497744b9fdfc16a15bfe15aa88742f9f426b32cd_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cea3ce65495ddd1c87ec277cffa0cc6e24245bfb1d29e6c44dfd3085f9cf7c59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cea3ce65495ddd1c87ec277cffa0cc6e24245bfb1d29e6c44dfd3085f9cf7c59->enter($__internal_cea3ce65495ddd1c87ec277cffa0cc6e24245bfb1d29e6c44dfd3085f9cf7c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_db4ee1028b37b1d7f61a0eccd74369fb5dbed7b9e5a23c227ae07942a9f4276c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db4ee1028b37b1d7f61a0eccd74369fb5dbed7b9e5a23c227ae07942a9f4276c->enter($__internal_db4ee1028b37b1d7f61a0eccd74369fb5dbed7b9e5a23c227ae07942a9f4276c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_db4ee1028b37b1d7f61a0eccd74369fb5dbed7b9e5a23c227ae07942a9f4276c->leave($__internal_db4ee1028b37b1d7f61a0eccd74369fb5dbed7b9e5a23c227ae07942a9f4276c_prof);

        
        $__internal_cea3ce65495ddd1c87ec277cffa0cc6e24245bfb1d29e6c44dfd3085f9cf7c59->leave($__internal_cea3ce65495ddd1c87ec277cffa0cc6e24245bfb1d29e6c44dfd3085f9cf7c59_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_03d2a13771a3c647b9a08c775b947f5837c58e0d41a2c6fbb0755072d0a46dcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03d2a13771a3c647b9a08c775b947f5837c58e0d41a2c6fbb0755072d0a46dcf->enter($__internal_03d2a13771a3c647b9a08c775b947f5837c58e0d41a2c6fbb0755072d0a46dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1da21f5ba2f1e0e048cd11ad28c90f5016ac95577982e4d0f5685e44092cb33a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1da21f5ba2f1e0e048cd11ad28c90f5016ac95577982e4d0f5685e44092cb33a->enter($__internal_1da21f5ba2f1e0e048cd11ad28c90f5016ac95577982e4d0f5685e44092cb33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_1da21f5ba2f1e0e048cd11ad28c90f5016ac95577982e4d0f5685e44092cb33a->leave($__internal_1da21f5ba2f1e0e048cd11ad28c90f5016ac95577982e4d0f5685e44092cb33a_prof);

        
        $__internal_03d2a13771a3c647b9a08c775b947f5837c58e0d41a2c6fbb0755072d0a46dcf->leave($__internal_03d2a13771a3c647b9a08c775b947f5837c58e0d41a2c6fbb0755072d0a46dcf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/claire/www/projects/CRAZYDISCOTRAIL/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
