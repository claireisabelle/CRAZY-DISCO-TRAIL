<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_fa9a5f5e5a9ab2adbed978bfc9cd4409ce347afe9ac7c6735f1a2a4127a9cad7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_454a590ff129e54e5207dc146a72967c6dba61e4e4d282d0ca20aa9ed4cde9b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_454a590ff129e54e5207dc146a72967c6dba61e4e4d282d0ca20aa9ed4cde9b5->enter($__internal_454a590ff129e54e5207dc146a72967c6dba61e4e4d282d0ca20aa9ed4cde9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_758d65b682caff8dd954f2eeaa02bc39da0fdc6ad0c9549f9710a51348ee8f4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_758d65b682caff8dd954f2eeaa02bc39da0fdc6ad0c9549f9710a51348ee8f4b->enter($__internal_758d65b682caff8dd954f2eeaa02bc39da0fdc6ad0c9549f9710a51348ee8f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_454a590ff129e54e5207dc146a72967c6dba61e4e4d282d0ca20aa9ed4cde9b5->leave($__internal_454a590ff129e54e5207dc146a72967c6dba61e4e4d282d0ca20aa9ed4cde9b5_prof);

        
        $__internal_758d65b682caff8dd954f2eeaa02bc39da0fdc6ad0c9549f9710a51348ee8f4b->leave($__internal_758d65b682caff8dd954f2eeaa02bc39da0fdc6ad0c9549f9710a51348ee8f4b_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dac96ec6b601a17fa5e140eabb6058c43b2d7e3c30e12fe5fd45537898b6871e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dac96ec6b601a17fa5e140eabb6058c43b2d7e3c30e12fe5fd45537898b6871e->enter($__internal_dac96ec6b601a17fa5e140eabb6058c43b2d7e3c30e12fe5fd45537898b6871e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_492da7911c85aedb4804f066d59659b7d4bdd2eabce52e365a4650997b8c5b6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_492da7911c85aedb4804f066d59659b7d4bdd2eabce52e365a4650997b8c5b6a->enter($__internal_492da7911c85aedb4804f066d59659b7d4bdd2eabce52e365a4650997b8c5b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
<div class=\"container\">

\t<div class=\"row\">

\t\t<div class=\"col-xs-offset-4 col-xs-4\">
\t\t\t<br />
\t\t\t<div class=\"alert alert-success\"><p>Connexion <strong>Crazy Disco Trail</strong></p></div>

\t\t\t";
        // line 16
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 17
            echo "\t\t\t\t<div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 19
        echo "
\t\t\t<form action=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t\t\t    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

\t\t\t    <div class=\"form-group\">
\t\t\t\t    <label for=\"username\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t\t    <input placeholder=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"password\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t\t    <input placeholder=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
\t\t\t\t</div>

\t\t\t    <p><input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t\t    <label for=\"remember_me\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label></p>

\t\t\t    <p><input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" /></p>
\t\t\t</form>

\t\t</div>

\t</div>

</div>

";
        
        $__internal_492da7911c85aedb4804f066d59659b7d4bdd2eabce52e365a4650997b8c5b6a->leave($__internal_492da7911c85aedb4804f066d59659b7d4bdd2eabce52e365a4650997b8c5b6a_prof);

        
        $__internal_dac96ec6b601a17fa5e140eabb6058c43b2d7e3c30e12fe5fd45537898b6871e->leave($__internal_dac96ec6b601a17fa5e140eabb6058c43b2d7e3c30e12fe5fd45537898b6871e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 36,  105 => 34,  98 => 30,  94 => 29,  85 => 25,  81 => 24,  75 => 21,  71 => 20,  68 => 19,  62 => 17,  60 => 16,  49 => 7,  40 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}


{% block fos_user_content %}

<div class=\"container\">

\t<div class=\"row\">

\t\t<div class=\"col-xs-offset-4 col-xs-4\">
\t\t\t<br />
\t\t\t<div class=\"alert alert-success\"><p>Connexion <strong>Crazy Disco Trail</strong></p></div>

\t\t\t{% if error %}
\t\t\t\t<div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t{% endif %}

\t\t\t<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
\t\t\t    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />

\t\t\t    <div class=\"form-group\">
\t\t\t\t    <label for=\"username\">{{ 'security.login.username'|trans }}</label>
\t\t\t\t    <input placeholder=\"{{ 'security.login.username'|trans }}\" class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"password\">{{ 'security.login.password'|trans }}</label>
\t\t\t\t    <input placeholder=\"{{ 'security.login.password'|trans }}\" class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
\t\t\t\t</div>

\t\t\t    <p><input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t\t    <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label></p>

\t\t\t    <p><input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" /></p>
\t\t\t</form>

\t\t</div>

\t</div>

</div>

{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/claire/www/projects/CRAZYDISCOTRAIL/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
