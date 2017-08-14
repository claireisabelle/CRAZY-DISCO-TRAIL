<?php

/* crazytemplate.html.twig */
class __TwigTemplate_3fdee0ba095030a436fe04478ec7401a4df102e239e6b5ef2e62f4a53070914a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94e209acd69b404ceff3e24977d5271c0a30109003ca85cf103e634cccb9a771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94e209acd69b404ceff3e24977d5271c0a30109003ca85cf103e634cccb9a771->enter($__internal_94e209acd69b404ceff3e24977d5271c0a30109003ca85cf103e634cccb9a771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "crazytemplate.html.twig"));

        $__internal_ea5e35316d9c102f5e871e6fcdd17e5537f2a0d79501ce7989dde0c576f1520c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea5e35316d9c102f5e871e6fcdd17e5537f2a0d79501ce7989dde0c576f1520c->enter($__internal_ea5e35316d9c102f5e871e6fcdd17e5537f2a0d79501ce7989dde0c576f1520c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "crazytemplate.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        
        <title>Crazy Disco Trail ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <!-- CSS -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
        

        <!-- FONTS -->
        <link href=\"https://fonts.googleapis.com/css?family=Roboto+Condensed\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Josefin+Sans\" rel=\"stylesheet\">

        <script src=\"https://use.fontawesome.com/4eafcb46c5.js\"></script>

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-28978998-2', 'auto');
    ga('send', 'pageview');

    </script>

        <div class=\"container-fluid\">

            <head>
                <div class=\"logo vertical-align-logo\">
                        <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo-2017-txt-saint-lo.png"), "html", null, true);
        echo "\" class=\"img-responsive center-block\" alt=\"\" title=\"\" />
                </div><!-- /.logo -->

            </head>

            <div class=\"content\">
                
                <nav class=\"navbar navbar-default\">
                    <div class=\"container-fluid\">
                
                        <div class=\"navbar-header\">
                          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                          </button>
                        </div>

                        <div class=\"container\">
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                              <ul class=\"nav navbar-nav\">
                                <li class=\"";
        // line 61
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "home")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">ACCUEIL</a></li>
                                <li class=\"";
        // line 62
        if ((is_string($__internal_04ba73d6054b03c7dafbf0fe21edbeca17bd42be0c9b3f147a4749907a642fa4 = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_4fa8d64e58e451e4f077d4d5dc504d7d1eebdca401a540711717f6a2632c1d0f = "actualites") && ('' === $__internal_4fa8d64e58e451e4f077d4d5dc504d7d1eebdca401a540711717f6a2632c1d0f || 0 === strpos($__internal_04ba73d6054b03c7dafbf0fe21edbeca17bd42be0c9b3f147a4749907a642fa4, $__internal_4fa8d64e58e451e4f077d4d5dc504d7d1eebdca401a540711717f6a2632c1d0f)))) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actualites");
        echo "\">ACTUALITES</a></li>
                                <li class=\"";
        // line 63
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "inscription")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscription");
        echo "\">INSCRIPTION</a></li>
                                <li class=\"";
        // line 64
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "inscrits")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscrits");
        echo "\">INSCRITS</a></li>
                                <li class=\"dropdown ";
        // line 65
        if ((is_string($__internal_4492bc61c207aeef512f912d9283b5eecbe91398a9ec9d33339ce969a116ea32 = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_63006711752cb4f5a0ebad87a91fda5d74bec5263742f70008e49781e0842c83 = "infos") && ('' === $__internal_63006711752cb4f5a0ebad87a91fda5d74bec5263742f70008e49781e0842c83 || 0 === strpos($__internal_4492bc61c207aeef512f912d9283b5eecbe91398a9ec9d33339ce969a116ea32, $__internal_63006711752cb4f5a0ebad87a91fda5d74bec5263742f70008e49781e0842c83)))) {
            echo " active ";
        }
        echo "\">
                                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">INFOS <span class=\"caret\"></span></a>
                                  <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infos_jourj");
        echo "\">Le Jour J</a></li>
                                    <!--<li><a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infos_dossards");
        echo "\">Retrait des dossards</a></li>-->
                                    <li><a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infos_acces");
        echo "\">Accès</a></li>
                                    <li><a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infos_reglement");
        echo "\">Réglement</a></li>
                                    <!--<li><a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infos_savoir");
        echo "\">Bon à savoir</a></li>-->
                                    <li><a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infos_questions");
        echo "\">Questions fréquentes</a></li>
                                  </ul>
                                </li>
                                <li class=\"";
        // line 76
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "galeries")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("galeries");
        echo "\">GALERIES</a></li>
                                <li class=\"";
        // line 77
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "benevoles")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("benevoles");
        echo "\">BENEVOLES</a></li>
                                <li class=\"";
        // line 78
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "contact")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\">CONTACT</a></li>
                              </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container -->
                    </div><!-- /.container-fluid -->
                </nav>

                <div class=\"bandes\">

                    ";
        // line 87
        $this->displayBlock('body', $context, $blocks);
        // line 90
        echo "
                </div><!-- /.bandes -->

            </div><!-- /.content -->

            <footer class=\"footer\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xs-6 col-md-4\">
                            <ul>
                                <li><a href=\"";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Accueil</a></li>
                                <li><a href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actualites");
        echo "\">Actualités</a></li>
                                <li><a href=\"";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscription");
        echo "\">Inscription</a></li>
                                <li><a href=\"";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscrits");
        echo "\">Inscrits</a></li>
                                <li><a href=\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infos");
        echo "\">Infos</a></li>
                                <li><a href=\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("galeries");
        echo "\">Galerie</a></li>
                                <li><a href=\"";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\">Contact</a></li>
                                <li><a href=\"";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("benevoles");
        echo "\">Bénévoles</a></li>
                                <li><a href=\"";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mentions");
        echo "\">Mentions légales</a></li>
                                <li><a href=\"https://www.facebook.com/Crazy-Disco-Trail-342815289467873/\"><i class=\"fa fa-facebook-official fa-2x\" aria-hidden=\"true\"></i>
                            </a></li>
                            </ul>
                        </div><!-- /.col -->

                        <div class=\"col-xs-6 col-md-4\">
                            <p><strong><span class=\"bleu\">CRAZY DISCO TRAIL !</span></strong></p>
                            <p>Un événement organisé par MATT event</p>

                            <p>Nos autres événéments : </p>
                            <p><a href=\"http://www.herouvilledanslacourse.com\" target=\"_blank\"><i class=\"fa fa-bolt\" aria-hidden=\"true\"></i>
                             L'Audacieuse...</a><br />
                             <a href=\"http://www.traldelangoisse.fr\" target=\"_blank\"><i class=\"fa fa-heartbeat\" aria-hidden=\"true\"></i>
                             Le Trail de l'Angoisse...</a></p>

                             <p><br /><em><a href=\"https://www.arroweb.net\">Développement : Arroweb</a></em></p>

                        </div><!-- /.col -->

                        <div class=\"col-xs-12 col-md-4\">
                            <p class=\"text-center\"><img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo-2017.png"), "html", null, true);
        echo "\" alt=\"\" title=\"\" width=\"300px\" /></p>

                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.container -->
            </footer>

        </div><!-- /.container-fluid -
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
    </body>
</html>
";
        
        $__internal_94e209acd69b404ceff3e24977d5271c0a30109003ca85cf103e634cccb9a771->leave($__internal_94e209acd69b404ceff3e24977d5271c0a30109003ca85cf103e634cccb9a771_prof);

        
        $__internal_ea5e35316d9c102f5e871e6fcdd17e5537f2a0d79501ce7989dde0c576f1520c->leave($__internal_ea5e35316d9c102f5e871e6fcdd17e5537f2a0d79501ce7989dde0c576f1520c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e515d53a9a8216541990d20d8d52a7d86585c4b048eb6baaf38b006b50135ded = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e515d53a9a8216541990d20d8d52a7d86585c4b048eb6baaf38b006b50135ded->enter($__internal_e515d53a9a8216541990d20d8d52a7d86585c4b048eb6baaf38b006b50135ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4589b7dd3036a130fe0ead34d3b2e1c859e61ed0bacec1cc0803be1a29b50304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4589b7dd3036a130fe0ead34d3b2e1c859e61ed0bacec1cc0803be1a29b50304->enter($__internal_4589b7dd3036a130fe0ead34d3b2e1c859e61ed0bacec1cc0803be1a29b50304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_4589b7dd3036a130fe0ead34d3b2e1c859e61ed0bacec1cc0803be1a29b50304->leave($__internal_4589b7dd3036a130fe0ead34d3b2e1c859e61ed0bacec1cc0803be1a29b50304_prof);

        
        $__internal_e515d53a9a8216541990d20d8d52a7d86585c4b048eb6baaf38b006b50135ded->leave($__internal_e515d53a9a8216541990d20d8d52a7d86585c4b048eb6baaf38b006b50135ded_prof);

    }

    // line 87
    public function block_body($context, array $blocks = array())
    {
        $__internal_38566077d627407788da11f75a16bc8a522420ec2d5dff2ffdd0f19bb6ac3bc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38566077d627407788da11f75a16bc8a522420ec2d5dff2ffdd0f19bb6ac3bc6->enter($__internal_38566077d627407788da11f75a16bc8a522420ec2d5dff2ffdd0f19bb6ac3bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0598c2bfb3551c27312efafd332904de86a92e87ff782a9e46eda12e3f8c9405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0598c2bfb3551c27312efafd332904de86a92e87ff782a9e46eda12e3f8c9405->enter($__internal_0598c2bfb3551c27312efafd332904de86a92e87ff782a9e46eda12e3f8c9405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 88
        echo "
                    ";
        
        $__internal_0598c2bfb3551c27312efafd332904de86a92e87ff782a9e46eda12e3f8c9405->leave($__internal_0598c2bfb3551c27312efafd332904de86a92e87ff782a9e46eda12e3f8c9405_prof);

        
        $__internal_38566077d627407788da11f75a16bc8a522420ec2d5dff2ffdd0f19bb6ac3bc6->leave($__internal_38566077d627407788da11f75a16bc8a522420ec2d5dff2ffdd0f19bb6ac3bc6_prof);

    }

    public function getTemplateName()
    {
        return "crazytemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 88,  317 => 87,  299 => 7,  272 => 129,  248 => 108,  244 => 107,  240 => 106,  236 => 105,  232 => 104,  228 => 103,  224 => 102,  220 => 101,  216 => 100,  204 => 90,  202 => 87,  186 => 78,  178 => 77,  170 => 76,  164 => 73,  160 => 72,  156 => 71,  152 => 70,  148 => 69,  144 => 68,  136 => 65,  128 => 64,  120 => 63,  112 => 62,  104 => 61,  78 => 38,  57 => 20,  45 => 11,  41 => 10,  35 => 7,  27 => 1,);
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
<html>
    <head>
        <meta charset='UTF-8'>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        
        <title>Crazy Disco Trail {% block title %} {% endblock %}</title>

        <!-- CSS -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/bootstrap.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/styles.css') }}\">
        

        <!-- FONTS -->
        <link href=\"https://fonts.googleapis.com/css?family=Roboto+Condensed\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Josefin+Sans\" rel=\"stylesheet\">

        <script src=\"https://use.fontawesome.com/4eafcb46c5.js\"></script>

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-28978998-2', 'auto');
    ga('send', 'pageview');

    </script>

        <div class=\"container-fluid\">

            <head>
                <div class=\"logo vertical-align-logo\">
                        <img src=\"{{ asset('img/logo-2017-txt-saint-lo.png') }}\" class=\"img-responsive center-block\" alt=\"\" title=\"\" />
                </div><!-- /.logo -->

            </head>

            <div class=\"content\">
                
                <nav class=\"navbar navbar-default\">
                    <div class=\"container-fluid\">
                
                        <div class=\"navbar-header\">
                          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                          </button>
                        </div>

                        <div class=\"container\">
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                              <ul class=\"nav navbar-nav\">
                                <li class=\"{% if app.request.get('_route') == 'home' %} active {% endif %}\"><a href=\"{{ path('home') }}\">ACCUEIL</a></li>
                                <li class=\"{% if app.request.get('_route') starts with 'actualites' %} active {% endif %}\"><a href=\"{{ path('actualites')}}\">ACTUALITES</a></li>
                                <li class=\"{% if app.request.get('_route') == 'inscription' %} active {% endif %}\"><a href=\"{{ path('inscription') }}\">INSCRIPTION</a></li>
                                <li class=\"{% if app.request.get('_route') == 'inscrits' %} active {% endif %}\"><a href=\"{{ path('inscrits') }}\">INSCRITS</a></li>
                                <li class=\"dropdown {% if app.request.get('_route') starts with 'infos' %} active {% endif %}\">
                                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">INFOS <span class=\"caret\"></span></a>
                                  <ul class=\"dropdown-menu\">
                                    <li><a href=\"{{ path('infos_jourj') }}\">Le Jour J</a></li>
                                    <!--<li><a href=\"{{ path('infos_dossards')}}\">Retrait des dossards</a></li>-->
                                    <li><a href=\"{{ path('infos_acces') }}\">Accès</a></li>
                                    <li><a href=\"{{ path('infos_reglement') }}\">Réglement</a></li>
                                    <!--<li><a href=\"{{ path('infos_savoir') }}\">Bon à savoir</a></li>-->
                                    <li><a href=\"{{ path('infos_questions')}}\">Questions fréquentes</a></li>
                                  </ul>
                                </li>
                                <li class=\"{% if app.request.get('_route') == 'galeries' %} active {% endif %}\"><a href=\"{{ path('galeries') }}\">GALERIES</a></li>
                                <li class=\"{% if app.request.get('_route') == 'benevoles' %} active {% endif %}\"><a href=\"{{ path('benevoles') }}\">BENEVOLES</a></li>
                                <li class=\"{% if app.request.get('_route') == 'contact' %} active {% endif %}\"><a href=\"{{ path('contact') }}\">CONTACT</a></li>
                              </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container -->
                    </div><!-- /.container-fluid -->
                </nav>

                <div class=\"bandes\">

                    {% block body %}

                    {% endblock %}

                </div><!-- /.bandes -->

            </div><!-- /.content -->

            <footer class=\"footer\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xs-6 col-md-4\">
                            <ul>
                                <li><a href=\"{{ path('home') }}\">Accueil</a></li>
                                <li><a href=\"{{ path('actualites') }}\">Actualités</a></li>
                                <li><a href=\"{{ path('inscription') }}\">Inscription</a></li>
                                <li><a href=\"{{ path('inscrits') }}\">Inscrits</a></li>
                                <li><a href=\"{{ path('infos') }}\">Infos</a></li>
                                <li><a href=\"{{ path('galeries') }}\">Galerie</a></li>
                                <li><a href=\"{{ path('contact') }}\">Contact</a></li>
                                <li><a href=\"{{ path('benevoles') }}\">Bénévoles</a></li>
                                <li><a href=\"{{ path('mentions')}}\">Mentions légales</a></li>
                                <li><a href=\"https://www.facebook.com/Crazy-Disco-Trail-342815289467873/\"><i class=\"fa fa-facebook-official fa-2x\" aria-hidden=\"true\"></i>
                            </a></li>
                            </ul>
                        </div><!-- /.col -->

                        <div class=\"col-xs-6 col-md-4\">
                            <p><strong><span class=\"bleu\">CRAZY DISCO TRAIL !</span></strong></p>
                            <p>Un événement organisé par MATT event</p>

                            <p>Nos autres événéments : </p>
                            <p><a href=\"http://www.herouvilledanslacourse.com\" target=\"_blank\"><i class=\"fa fa-bolt\" aria-hidden=\"true\"></i>
                             L'Audacieuse...</a><br />
                             <a href=\"http://www.traldelangoisse.fr\" target=\"_blank\"><i class=\"fa fa-heartbeat\" aria-hidden=\"true\"></i>
                             Le Trail de l'Angoisse...</a></p>

                             <p><br /><em><a href=\"https://www.arroweb.net\">Développement : Arroweb</a></em></p>

                        </div><!-- /.col -->

                        <div class=\"col-xs-12 col-md-4\">
                            <p class=\"text-center\"><img src=\"{{ asset('img/logo-2017.png') }}\" alt=\"\" title=\"\" width=\"300px\" /></p>

                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.container -->
            </footer>

        </div><!-- /.container-fluid -
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
    </body>
</html>
", "crazytemplate.html.twig", "/home/claire/www/projects/CRAZYDISCOTRAIL/app/Resources/views/crazytemplate.html.twig");
    }
}
