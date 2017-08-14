<?php

/* crazytemplate.html.twig */
class __TwigTemplate_57d11278c53f3241cb4b72b2b2ff65f3e8b3bb4426c5c000bcca05f5dc239415 extends Twig_Template
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

        <div class=\"container-fluid\">

            <head>
                <div class=\"logo vertical-align-logo\">
                        <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo-2017-txt.png"), "html", null, true);
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
        // line 51
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method") == "home")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">ACCUEIL</a></li>
                                <li class=\"";
        // line 52
        if ((is_string($__internal_b0dadc7c5098ecbd365a9c5f7d1e3beb6f5cd1fc21e34934b1ff415c4fbd6941 = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_46e13feccdd653b00e5e9ac8a1710ee81fc5acc953ce71d1370bbc6a9cd480a7 = "actualites") && ('' === $__internal_46e13feccdd653b00e5e9ac8a1710ee81fc5acc953ce71d1370bbc6a9cd480a7 || 0 === strpos($__internal_b0dadc7c5098ecbd365a9c5f7d1e3beb6f5cd1fc21e34934b1ff415c4fbd6941, $__internal_46e13feccdd653b00e5e9ac8a1710ee81fc5acc953ce71d1370bbc6a9cd480a7)))) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actualites");
        echo "\">ACTUALITES</a></li>
                                <li class=\"";
        // line 53
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method") == "inscription")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscription");
        echo "\">INSCRIPTION</a></li>
                                <li class=\"";
        // line 54
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method") == "inscrits")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscrits");
        echo "\">INSCRITS</a></li>
                                <li class=\"dropdown ";
        // line 55
        if ((is_string($__internal_5c84352666d861e6bbc6bda5154d349ad4fb9989c25943a471bc5720fc75edc6 = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_b93c51642ed7f4c39ae90855090612fafa914347313eb4d5ac04d94005eceb36 = "infos") && ('' === $__internal_b93c51642ed7f4c39ae90855090612fafa914347313eb4d5ac04d94005eceb36 || 0 === strpos($__internal_5c84352666d861e6bbc6bda5154d349ad4fb9989c25943a471bc5720fc75edc6, $__internal_b93c51642ed7f4c39ae90855090612fafa914347313eb4d5ac04d94005eceb36)))) {
            echo " active ";
        }
        echo "\">
                                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">INFOS <span class=\"caret\"></span></a>
                                  <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infos_jourj");
        echo "\">Le Jour J</a></li>
                                    <li><a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infos_dossards");
        echo "\">Retrait des dossards</a></li>
                                    <li><a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infos_acces");
        echo "\">Accès</a></li>
                                    <li><a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infos_reglement");
        echo "\">Réglement</a></li>
                                    <li><a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infos_savoir");
        echo "\">Bon à savoir</a></li>
                                    <li><a href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infos_questions");
        echo "\">Questions fréquentes</a></li>
                                  </ul>
                                </li>
                                <li class=\"";
        // line 66
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method") == "galeries")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("galeries");
        echo "\">GALERIES</a></li>
                                <li class=\"";
        // line 67
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method") == "benevoles")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("benevoles");
        echo "\">BENEVOLES</a></li>
                                <li class=\"";
        // line 68
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method") == "contact")) {
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
        // line 77
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "
                </div><!-- /.bandes -->

            </div><!-- /.content -->

            <footer class=\"footer\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xs-6 col-md-4\">
                            <ul>
                                <li><a href=\"";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Accueil</a></li>
                                <li><a href=\"";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actualites");
        echo "\">Actualités</a></li>
                                <li><a href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscription");
        echo "\">Inscription</a></li>
                                <li><a href=\"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscrits");
        echo "\">Inscrits</a></li>
                                <li><a href=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infos");
        echo "\">Infos</a></li>
                                <li><a href=\"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("galeries");
        echo "\">Galerie</a></li>
                                <li><a href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\">Contact</a></li>
                                <li><a href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("benevoles");
        echo "\">Bénévoles</a></li>
                                <li><a href=\"";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mentions");
        echo "\">Mentions légales</a></li>
                                <li><a href=\"\"><i class=\"fa fa-facebook-official fa-2x\" aria-hidden=\"true\"></i>
                            </a></li>
                            </ul>
                        </div><!-- /.col -->

                        <div class=\"col-xs-6 col-md-4\">
                            <p><strong><span class=\"bleu\">CRAZY DISCO TRAIL !</span></strong></p>
                            <p>Un événement organisé par ...</p>

                            <p>Nos autres événéments : </p>
                            <p><a href=\"http://www.herouvilledanslacourse.com\" target=\"_blank\"><i class=\"fa fa-bolt\" aria-hidden=\"true\"></i>
                             L'Audacieuse...</a><br />
                             <a href=\"http://www.traldelangoisse.fr\" target=\"_blank\"><i class=\"fa fa-heartbeat\" aria-hidden=\"true\"></i>
                             Le Trail de l'Angoisse...</a></p>

                             <p><br /><em><a href=\"https://www.arroweb.net\">Développement : Arroweb</a></em></p>

                        </div><!-- /.col -->

                        <div class=\"col-xs-12 col-md-4\">
                            <p class=\"text-center\"><img src=\"";
        // line 119
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
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo " ";
    }

    // line 77
    public function block_body($context, array $blocks = array())
    {
        // line 78
        echo "
                    ";
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
        return array (  286 => 78,  283 => 77,  277 => 7,  256 => 119,  232 => 98,  228 => 97,  224 => 96,  220 => 95,  216 => 94,  212 => 93,  208 => 92,  204 => 91,  200 => 90,  188 => 80,  186 => 77,  170 => 68,  162 => 67,  154 => 66,  148 => 63,  144 => 62,  140 => 61,  136 => 60,  132 => 59,  128 => 58,  120 => 55,  112 => 54,  104 => 53,  96 => 52,  88 => 51,  62 => 28,  51 => 20,  39 => 11,  35 => 10,  29 => 7,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "crazytemplate.html.twig", "/home/claire/www/projects/CRAZYDISCOTRAIL/app/Resources/views/crazytemplate.html.twig");
    }
}
