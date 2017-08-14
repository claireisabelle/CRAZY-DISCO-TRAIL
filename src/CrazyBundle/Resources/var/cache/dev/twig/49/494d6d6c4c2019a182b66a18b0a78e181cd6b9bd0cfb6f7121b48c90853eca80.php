<?php

/* admin.html.twig */
class __TwigTemplate_103e66f6412da48bdfadbf89a0b211aac3e8f6c6108b8eb01cade2ba947a3f9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenu' => array($this, 'block_contenu'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9752d04d33b66ead4b1cd36e9f9e1a74862a465d7a998620a05d7c44d5185e20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9752d04d33b66ead4b1cd36e9f9e1a74862a465d7a998620a05d7c44d5185e20->enter($__internal_9752d04d33b66ead4b1cd36e9f9e1a74862a465d7a998620a05d7c44d5185e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin.html.twig"));

        $__internal_edd67ad1747f25295d093f3ffe2e0e1eb8f2b034f71258e055bde895b3333c2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edd67ad1747f25295d093f3ffe2e0e1eb8f2b034f71258e055bde895b3333c2f->enter($__internal_edd67ad1747f25295d093f3ffe2e0e1eb8f2b034f71258e055bde895b3333c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>

        <!-- Block Title -->
        <title>Admin Crazy Disco Trail - ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        <!-- Required meta tags -->
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />

        <!-- Bootstrap CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\" />

        <!-- CSS Customisé -->
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/admin.css"), "html", null, true);
        echo "\" />

        <!-- Fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Roboto+Condensed\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Kalam\" rel=\"stylesheet\">

        <!-- Favicon -->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" />

        <!-- Font Awesome -->
        <script src=\"https://use.fontawesome.com/4eafcb46c5.js\"></script>

       
    </head>
    <body>
        <nav class=\"navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse\">
            <a class=\"navbar-brand\" href=\"#\">Administration Crazy Disco Trail</a>
        </nav>

    <div class=\"container-fluid\">
      <div class=\"row\">
        <nav class=\"col-2 col-sm-3 col-md-2  sidebar\">
            <ul class=\"nav nav-pills flex-column\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
        echo "\"><i class=\"fa fa-tachometer\" aria-hidden=\"true\"></i> <span class=\"micro\">Dashboard</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter-actualite");
        echo "\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> <span class=\"micro\">Ajouter</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i> <span class=\"micro\">Voir le site</span></a>
                </li>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> <span class=\"micro\">Deconnexion</span></a>
                </li>
            </ul>
        </nav>

        <main class=\"col-10 offset-2 col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3\">
            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 57
            echo "                <div class=\"alert alert-success\" role=\"alert\"><strong><i class=\"fa fa-check-square-o\" aria-hidden=\"true\"></i> ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo " </strong></div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "            
            ";
        // line 60
        $this->displayBlock('contenu', $context, $blocks);
        // line 61
        echo "        </main>
      
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->

        


       
        ";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        echo "
        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>
        
    </body>
</html>";
        
        $__internal_9752d04d33b66ead4b1cd36e9f9e1a74862a465d7a998620a05d7c44d5185e20->leave($__internal_9752d04d33b66ead4b1cd36e9f9e1a74862a465d7a998620a05d7c44d5185e20_prof);

        
        $__internal_edd67ad1747f25295d093f3ffe2e0e1eb8f2b034f71258e055bde895b3333c2f->leave($__internal_edd67ad1747f25295d093f3ffe2e0e1eb8f2b034f71258e055bde895b3333c2f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b96917af83279ddf678839df8a7fc5fb3df7eecf1e15714588b16f2ad7edb03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b96917af83279ddf678839df8a7fc5fb3df7eecf1e15714588b16f2ad7edb03->enter($__internal_6b96917af83279ddf678839df8a7fc5fb3df7eecf1e15714588b16f2ad7edb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1c729690c03a32fe03fd803217042157a0c1c34c937206f65963ecf05979f7bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c729690c03a32fe03fd803217042157a0c1c34c937206f65963ecf05979f7bb->enter($__internal_1c729690c03a32fe03fd803217042157a0c1c34c937206f65963ecf05979f7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1c729690c03a32fe03fd803217042157a0c1c34c937206f65963ecf05979f7bb->leave($__internal_1c729690c03a32fe03fd803217042157a0c1c34c937206f65963ecf05979f7bb_prof);

        
        $__internal_6b96917af83279ddf678839df8a7fc5fb3df7eecf1e15714588b16f2ad7edb03->leave($__internal_6b96917af83279ddf678839df8a7fc5fb3df7eecf1e15714588b16f2ad7edb03_prof);

    }

    // line 60
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_348018c3914a81a4b9a817abf2ca2b568cb37a8bf7d9c10a358487a99d79cf56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_348018c3914a81a4b9a817abf2ca2b568cb37a8bf7d9c10a358487a99d79cf56->enter($__internal_348018c3914a81a4b9a817abf2ca2b568cb37a8bf7d9c10a358487a99d79cf56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_0168e01d9302de673cef9b5c2a83a1fe516554f2c59abdff86568a3f929caec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0168e01d9302de673cef9b5c2a83a1fe516554f2c59abdff86568a3f929caec0->enter($__internal_0168e01d9302de673cef9b5c2a83a1fe516554f2c59abdff86568a3f929caec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        
        $__internal_0168e01d9302de673cef9b5c2a83a1fe516554f2c59abdff86568a3f929caec0->leave($__internal_0168e01d9302de673cef9b5c2a83a1fe516554f2c59abdff86568a3f929caec0_prof);

        
        $__internal_348018c3914a81a4b9a817abf2ca2b568cb37a8bf7d9c10a358487a99d79cf56->leave($__internal_348018c3914a81a4b9a817abf2ca2b568cb37a8bf7d9c10a358487a99d79cf56_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0eade87f89be6509420a99c289bdc6876b1586ecb9411034e4a1be281acf284c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eade87f89be6509420a99c289bdc6876b1586ecb9411034e4a1be281acf284c->enter($__internal_0eade87f89be6509420a99c289bdc6876b1586ecb9411034e4a1be281acf284c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dc23129ee16f451ada89213d0e667deac3d8d39072dd014746cbd29c405ce276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc23129ee16f451ada89213d0e667deac3d8d39072dd014746cbd29c405ce276->enter($__internal_dc23129ee16f451ada89213d0e667deac3d8d39072dd014746cbd29c405ce276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dc23129ee16f451ada89213d0e667deac3d8d39072dd014746cbd29c405ce276->leave($__internal_dc23129ee16f451ada89213d0e667deac3d8d39072dd014746cbd29c405ce276_prof);

        
        $__internal_0eade87f89be6509420a99c289bdc6876b1586ecb9411034e4a1be281acf284c->leave($__internal_0eade87f89be6509420a99c289bdc6876b1586ecb9411034e4a1be281acf284c_prof);

    }

    public function getTemplateName()
    {
        return "admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 70,  171 => 60,  154 => 6,  137 => 71,  135 => 70,  124 => 61,  122 => 60,  119 => 59,  110 => 57,  106 => 56,  97 => 50,  90 => 46,  84 => 43,  78 => 40,  58 => 23,  48 => 16,  35 => 6,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>

        <!-- Block Title -->
        <title>Admin Crazy Disco Trail - {% block title %}{% endblock %}</title>
        
        <!-- Required meta tags -->
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />

        <!-- Bootstrap CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\" />

        <!-- CSS Customisé -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/admin.css') }}\" />

        <!-- Fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Roboto+Condensed\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Kalam\" rel=\"stylesheet\">

        <!-- Favicon -->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('img/favicon.ico') }}\" />

        <!-- Font Awesome -->
        <script src=\"https://use.fontawesome.com/4eafcb46c5.js\"></script>

       
    </head>
    <body>
        <nav class=\"navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse\">
            <a class=\"navbar-brand\" href=\"#\">Administration Crazy Disco Trail</a>
        </nav>

    <div class=\"container-fluid\">
      <div class=\"row\">
        <nav class=\"col-2 col-sm-3 col-md-2  sidebar\">
            <ul class=\"nav nav-pills flex-column\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('dashboard') }}\"><i class=\"fa fa-tachometer\" aria-hidden=\"true\"></i> <span class=\"micro\">Dashboard</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('ajouter-actualite') }}\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> <span class=\"micro\">Ajouter</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('home') }}\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i> <span class=\"micro\">Voir le site</span></a>
                </li>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('fos_user_security_logout') }}\"><i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> <span class=\"micro\">Deconnexion</span></a>
                </li>
            </ul>
        </nav>

        <main class=\"col-10 offset-2 col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3\">
            {% for message in app.session.flashbag.get('success') %}
                <div class=\"alert alert-success\" role=\"alert\"><strong><i class=\"fa fa-check-square-o\" aria-hidden=\"true\"></i> {{ message }} </strong></div>
            {% endfor %}
            
            {% block contenu %}{% endblock %}
        </main>
      
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->

        


       
        {% block javascripts %}{% endblock %}

        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>
        
    </body>
</html>", "admin.html.twig", "/home/claire/www/projects/CRAZYDISCOTRAIL/app/Resources/views/admin.html.twig");
    }
}
