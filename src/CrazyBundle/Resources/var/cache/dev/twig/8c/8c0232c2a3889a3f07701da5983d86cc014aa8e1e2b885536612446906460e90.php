<?php

/* CrazyBundle:News:dashboard.html.twig */
class __TwigTemplate_41026c93ad5b08760fb817032d8cf95c72fff292df8c7120bdb2ceeedfbf3645 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "CrazyBundle:News:dashboard.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e9ca2985ae8e88fb9ee0159c88ff1557500b3f1f2e395a988f47f7d80390790 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e9ca2985ae8e88fb9ee0159c88ff1557500b3f1f2e395a988f47f7d80390790->enter($__internal_3e9ca2985ae8e88fb9ee0159c88ff1557500b3f1f2e395a988f47f7d80390790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CrazyBundle:News:dashboard.html.twig"));

        $__internal_5f6dddb3eff4d234ba6b37d40a95fb1a06273293a49c6e426b4f46eb08195570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f6dddb3eff4d234ba6b37d40a95fb1a06273293a49c6e426b4f46eb08195570->enter($__internal_5f6dddb3eff4d234ba6b37d40a95fb1a06273293a49c6e426b4f46eb08195570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CrazyBundle:News:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e9ca2985ae8e88fb9ee0159c88ff1557500b3f1f2e395a988f47f7d80390790->leave($__internal_3e9ca2985ae8e88fb9ee0159c88ff1557500b3f1f2e395a988f47f7d80390790_prof);

        
        $__internal_5f6dddb3eff4d234ba6b37d40a95fb1a06273293a49c6e426b4f46eb08195570->leave($__internal_5f6dddb3eff4d234ba6b37d40a95fb1a06273293a49c6e426b4f46eb08195570_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e14bf6346d2fc79fb21a9838598b8e06fbdcdaa380821735eb7469286caeaab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e14bf6346d2fc79fb21a9838598b8e06fbdcdaa380821735eb7469286caeaab->enter($__internal_5e14bf6346d2fc79fb21a9838598b8e06fbdcdaa380821735eb7469286caeaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_731d2ea6a1e7c6f44408e5d705947700c4fa3029a78d6ec895f6ce2e87c85e5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_731d2ea6a1e7c6f44408e5d705947700c4fa3029a78d6ec895f6ce2e87c85e5a->enter($__internal_731d2ea6a1e7c6f44408e5d705947700c4fa3029a78d6ec895f6ce2e87c85e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Tableau de bord Actualités";
        
        $__internal_731d2ea6a1e7c6f44408e5d705947700c4fa3029a78d6ec895f6ce2e87c85e5a->leave($__internal_731d2ea6a1e7c6f44408e5d705947700c4fa3029a78d6ec895f6ce2e87c85e5a_prof);

        
        $__internal_5e14bf6346d2fc79fb21a9838598b8e06fbdcdaa380821735eb7469286caeaab->leave($__internal_5e14bf6346d2fc79fb21a9838598b8e06fbdcdaa380821735eb7469286caeaab_prof);

    }

    // line 5
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_fd755885a2be5a983f257b78bbb301ced65695eace3f7d6a7a3d251397949fef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd755885a2be5a983f257b78bbb301ced65695eace3f7d6a7a3d251397949fef->enter($__internal_fd755885a2be5a983f257b78bbb301ced65695eace3f7d6a7a3d251397949fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_8d69a41520aa0cb41f02bccf1189670d45bb23bff46795cedacafb3617caa221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d69a41520aa0cb41f02bccf1189670d45bb23bff46795cedacafb3617caa221->enter($__internal_8d69a41520aa0cb41f02bccf1189670d45bb23bff46795cedacafb3617caa221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 6
        echo "
<h1>Actualités</h1>

\t<table class=\"table table-striped table-sm table-hover\">
\t  <thead class=\"thead-inverse\">
\t    <tr>
\t      <th>Référence</th>
\t      <th></th>
\t      <th></th>
\t    </tr>
\t  </thead>
\t  <tbody>
\t    
\t    \t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeNews"]) ? $context["listeNews"] : $this->getContext($context, "listeNews")));
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 20
            echo "\t    \t<tr>
\t    \t\t<td class=\"intitule\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "titre", array()), "html", null, true);
            echo "</td>
\t    \t\t<td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editer-actualite", array("id" => $this->getAttribute($context["news"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-secondary btn-sm\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a></td>
\t      \t\t<td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer-actualite", array("id" => $this->getAttribute($context["news"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-outline-danger btn-sm\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a></td>
\t    \t</tr>
\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t    
\t  </tbody>
\t</table>

";
        
        $__internal_8d69a41520aa0cb41f02bccf1189670d45bb23bff46795cedacafb3617caa221->leave($__internal_8d69a41520aa0cb41f02bccf1189670d45bb23bff46795cedacafb3617caa221_prof);

        
        $__internal_fd755885a2be5a983f257b78bbb301ced65695eace3f7d6a7a3d251397949fef->leave($__internal_fd755885a2be5a983f257b78bbb301ced65695eace3f7d6a7a3d251397949fef_prof);

    }

    public function getTemplateName()
    {
        return "CrazyBundle:News:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 26,  98 => 23,  94 => 22,  90 => 21,  87 => 20,  83 => 19,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.html.twig' %}

{% block title %}Tableau de bord Actualités{% endblock %}

{% block contenu %}

<h1>Actualités</h1>

\t<table class=\"table table-striped table-sm table-hover\">
\t  <thead class=\"thead-inverse\">
\t    <tr>
\t      <th>Référence</th>
\t      <th></th>
\t      <th></th>
\t    </tr>
\t  </thead>
\t  <tbody>
\t    
\t    \t{% for news in listeNews %}
\t    \t<tr>
\t    \t\t<td class=\"intitule\">{{ news.titre }}</td>
\t    \t\t<td><a href=\"{{ path('editer-actualite', {'id': news.id}) }}\" class=\"btn btn-secondary btn-sm\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a></td>
\t      \t\t<td><a href=\"{{ path('supprimer-actualite', {'id': news.id}) }}\" class=\"btn btn-outline-danger btn-sm\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a></td>
\t    \t</tr>
\t    {% endfor %}
\t    
\t  </tbody>
\t</table>

{% endblock %}


", "CrazyBundle:News:dashboard.html.twig", "/home/claire/www/projects/CRAZYDISCOTRAIL/src/CrazyBundle/Resources/views/News/dashboard.html.twig");
    }
}
