<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_aa1b4d369e3fdfae8c388b71c137909830d0868a3731abbf6686c7c639a37c16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_9e538d6603f8a4f34ed36be22741fa3026a33d2daa138ea221e83c8d3efd6fcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e538d6603f8a4f34ed36be22741fa3026a33d2daa138ea221e83c8d3efd6fcc->enter($__internal_9e538d6603f8a4f34ed36be22741fa3026a33d2daa138ea221e83c8d3efd6fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ac27ad8761cea8df9cc3c0261656a5cf5159d4116b2dbf6aecbf8be10ac45b46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac27ad8761cea8df9cc3c0261656a5cf5159d4116b2dbf6aecbf8be10ac45b46->enter($__internal_ac27ad8761cea8df9cc3c0261656a5cf5159d4116b2dbf6aecbf8be10ac45b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e538d6603f8a4f34ed36be22741fa3026a33d2daa138ea221e83c8d3efd6fcc->leave($__internal_9e538d6603f8a4f34ed36be22741fa3026a33d2daa138ea221e83c8d3efd6fcc_prof);

        
        $__internal_ac27ad8761cea8df9cc3c0261656a5cf5159d4116b2dbf6aecbf8be10ac45b46->leave($__internal_ac27ad8761cea8df9cc3c0261656a5cf5159d4116b2dbf6aecbf8be10ac45b46_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ded5904b6c1d08f08402af1f5f9c771259dc044849919f4d467449eedab8cf82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ded5904b6c1d08f08402af1f5f9c771259dc044849919f4d467449eedab8cf82->enter($__internal_ded5904b6c1d08f08402af1f5f9c771259dc044849919f4d467449eedab8cf82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_62b864acf524810aced3b9c81fffcb36942e70a9d332d83a9249c67692ee5dda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b864acf524810aced3b9c81fffcb36942e70a9d332d83a9249c67692ee5dda->enter($__internal_62b864acf524810aced3b9c81fffcb36942e70a9d332d83a9249c67692ee5dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_62b864acf524810aced3b9c81fffcb36942e70a9d332d83a9249c67692ee5dda->leave($__internal_62b864acf524810aced3b9c81fffcb36942e70a9d332d83a9249c67692ee5dda_prof);

        
        $__internal_ded5904b6c1d08f08402af1f5f9c771259dc044849919f4d467449eedab8cf82->leave($__internal_ded5904b6c1d08f08402af1f5f9c771259dc044849919f4d467449eedab8cf82_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1d885cc7f02bc246324064d3e205b9a7f91224cf99b446afc64caf7c26e6a91c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d885cc7f02bc246324064d3e205b9a7f91224cf99b446afc64caf7c26e6a91c->enter($__internal_1d885cc7f02bc246324064d3e205b9a7f91224cf99b446afc64caf7c26e6a91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_43ae4797bc4b289e02c28737ffbbfe1974c44a741a6cc296d788911cbdb2ac2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43ae4797bc4b289e02c28737ffbbfe1974c44a741a6cc296d788911cbdb2ac2e->enter($__internal_43ae4797bc4b289e02c28737ffbbfe1974c44a741a6cc296d788911cbdb2ac2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_43ae4797bc4b289e02c28737ffbbfe1974c44a741a6cc296d788911cbdb2ac2e->leave($__internal_43ae4797bc4b289e02c28737ffbbfe1974c44a741a6cc296d788911cbdb2ac2e_prof);

        
        $__internal_1d885cc7f02bc246324064d3e205b9a7f91224cf99b446afc64caf7c26e6a91c->leave($__internal_1d885cc7f02bc246324064d3e205b9a7f91224cf99b446afc64caf7c26e6a91c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_31c1fc998bbdefd64404780d1eac24060de37de2046b3eaa78c70074d9bc403d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31c1fc998bbdefd64404780d1eac24060de37de2046b3eaa78c70074d9bc403d->enter($__internal_31c1fc998bbdefd64404780d1eac24060de37de2046b3eaa78c70074d9bc403d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8beb05d978dc9344d6fad0e1c065769640e6a02abb7c5570446e78266653fc66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8beb05d978dc9344d6fad0e1c065769640e6a02abb7c5570446e78266653fc66->enter($__internal_8beb05d978dc9344d6fad0e1c065769640e6a02abb7c5570446e78266653fc66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8beb05d978dc9344d6fad0e1c065769640e6a02abb7c5570446e78266653fc66->leave($__internal_8beb05d978dc9344d6fad0e1c065769640e6a02abb7c5570446e78266653fc66_prof);

        
        $__internal_31c1fc998bbdefd64404780d1eac24060de37de2046b3eaa78c70074d9bc403d->leave($__internal_31c1fc998bbdefd64404780d1eac24060de37de2046b3eaa78c70074d9bc403d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/claire/www/projects/CRAZYDISCOTRAIL/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
