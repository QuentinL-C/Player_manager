<?php

/* ::layout.html.twig */
class __TwigTemplate_5390081b7f44ced3510729e4d7c3c94b4b8569628e10e32fc6a15311a181bcd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'follow' => array($this, 'block_follow'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav_extends' => array($this, 'block_nav_extends'),
            'h1_extend' => array($this, 'block_h1_extend'),
            'h1' => array($this, 'block_h1'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'body' => array($this, 'block_body'),
            'javascripts_block' => array($this, 'block_javascripts_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo " 
<!DOCTYPE html>
<html ";
        // line 4
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "pm_player_public_homepage")) {
            echo "style=\"height: 100%;\"";
        }
        echo ">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
 
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 9
        $this->displayBlock('follow', $context, $blocks);
        // line 10
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        
        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "    </head>
 
    <body ";
        // line 26
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "pm_player_public_homepage")) {
            echo "style=\"height: 90%;\"";
        }
        echo ">
        ";
        // line 27
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") != "pm_player_public_homepage")) {
            // line 28
            echo "        <header class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <nav class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("pm_welcome_homepage");
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["project_name"]) ? $context["project_name"] : $this->getContext($context, "project_name")), "html", null, true);
            echo "</a>
                </div>
                <div class=\"collapse navbar-collapse\">
                    ";
            // line 40
            if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 41
                echo "                        <ul class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"";
                // line 42
                echo $this->env->getExtension('routing')->getPath("pm_administration_homepage");
                echo "\">Administration</a></li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Bienvenue ";
                // line 44
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array())), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
                // line 46
                echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
                echo "\">Profil</a></li>
                                    <li><a href=\"";
                // line 47
                echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
                echo "\">Déconnexion</a></li>
                                </ul>
                            </li>
                        </ul>
                    ";
            }
            // line 52
            echo "                </div>
            </nav>
        </header>
        ";
        } else {
            // line 56
            echo "            ";
            $this->displayBlock('nav_extends', $context, $blocks);
            // line 57
            echo "        ";
        }
        // line 58
        echo "            
        <div class=\"container\" style=\"margin-top: 50px; ";
        // line 59
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "pm_player_public_homepage")) {
            echo "height: 100%;";
        }
        echo "\">
            ";
        // line 60
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") != "pm_player_public_homepage")) {
            // line 61
            echo "                <div class=\"page-header\">
                    <div class=\"pull-right\">";
            // line 62
            $this->displayBlock('h1_extend', $context, $blocks);
            echo "</div>
                    <h1>";
            // line 63
            $this->displayBlock('h1', $context, $blocks);
            echo "</h1>
                </div>

                <ol class=\"breadcrumb\">
                    ";
            // line 67
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 70
            echo "                </ol>
            ";
        }
        // line 72
        echo "            
            ";
        // line 73
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo "        </div>
        ";
        // line 75
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") != "pm_player_public_homepage")) {
            // line 76
            echo "            <br />
            <hr />
            <footer class=\"footer\">
                <div class=\"container\">
                    <p class=\"pull-right\"><a href=\"#\">Top</a></p>
                </div>
            </footer>
        ";
        }
        // line 84
        echo "            
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
        
        <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
        
        <script type=\"text/javascript\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        
        ";
        // line 93
        $this->displayBlock('javascripts_block', $context, $blocks);
        // line 94
        echo "    </body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["project_name"]) ? $context["project_name"] : $this->getContext($context, "project_name")), "html", null, true);
    }

    // line 9
    public function block_follow($context, array $blocks = array())
    {
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <!-- Le fav and touch icons -->
            <link rel=\"shortcut icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\">
            <!-- <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"../assets/ico/apple-touch-icon-114-precomposed.png\">
            <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"../assets/ico/apple-touch-icon-72-precomposed.png\">
            <link rel=\"apple-touch-icon-precomposed\" href=\"../assets/ico/apple-touch-icon-57-precomposed.png\">
            -->
        ";
    }

    // line 56
    public function block_nav_extends($context, array $blocks = array())
    {
    }

    // line 62
    public function block_h1_extend($context, array $blocks = array())
    {
    }

    // line 63
    public function block_h1($context, array $blocks = array())
    {
    }

    // line 67
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 68
        echo "                        <li>";
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") != "pm_welcome_homepage") && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") != "pm_welcome_index"))) {
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("pm_welcome_homepage");
            echo "\">Accueil</a>";
        } else {
            echo "Accueil";
        }
        echo "</li>
                    ";
    }

    // line 73
    public function block_body($context, array $blocks = array())
    {
    }

    // line 93
    public function block_javascripts_block($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 93,  271 => 73,  258 => 68,  255 => 67,  250 => 63,  245 => 62,  240 => 56,  230 => 18,  225 => 16,  220 => 15,  217 => 14,  212 => 9,  206 => 8,  201 => 94,  199 => 93,  194 => 91,  190 => 90,  185 => 88,  181 => 87,  176 => 84,  166 => 76,  164 => 75,  161 => 74,  159 => 73,  156 => 72,  152 => 70,  150 => 67,  143 => 63,  139 => 62,  136 => 61,  134 => 60,  128 => 59,  125 => 58,  122 => 57,  119 => 56,  113 => 52,  105 => 47,  101 => 46,  96 => 44,  91 => 42,  88 => 41,  86 => 40,  78 => 37,  67 => 28,  65 => 27,  59 => 26,  55 => 24,  53 => 14,  47 => 10,  45 => 9,  41 => 8,  32 => 4,  28 => 2,);
    }
}
