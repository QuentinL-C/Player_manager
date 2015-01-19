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
<html>
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
 
    <body>
        <header class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <nav class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("pm_welcome_homepage");
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["project_name"]) ? $context["project_name"] : $this->getContext($context, "project_name")), "html", null, true);
        echo "</a>
                </div>
                <div class=\"collapse navbar-collapse\">
                    ";
        // line 39
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 40
            echo "                        <ul class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("pm_administration_homepage");
            echo "\">Administration</a></li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Bienvenue ";
            // line 43
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array())), "html", null, true);
            echo " <b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Profil</a></li>
                                    <li><a href=\"";
            // line 46
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
                                </ul>
                            </li>
                        </ul>
                    ";
        }
        // line 51
        echo "                </div>
            </nav>
        </header>
            
        <div class=\"container\">
            <br /><br />
            <div class=\"page-header\">
                <div class=\"pull-right\">";
        // line 58
        $this->displayBlock('h1_extend', $context, $blocks);
        echo "</div>
                <h1>";
        // line 59
        $this->displayBlock('h1', $context, $blocks);
        echo "</h1>
            </div>

            <ol class=\"breadcrumb\">
            ";
        // line 63
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 66
        echo "            </ol>
        
            ";
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 70
        echo "        </div>
        <br />
        <hr />
        <footer class=\"footer\">
            <div class=\"container\">
                <p class=\"pull-right\"><a href=\"#\">Top</a></p>
            </div>
        </footer>
            
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
        
        <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
        
        <script type=\"text/javascript\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        
        ";
        // line 87
        $this->displayBlock('javascripts_block', $context, $blocks);
        // line 88
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

    // line 58
    public function block_h1_extend($context, array $blocks = array())
    {
    }

    // line 59
    public function block_h1($context, array $blocks = array())
    {
    }

    // line 63
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 64
        echo "                <li>";
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

    // line 68
    public function block_body($context, array $blocks = array())
    {
        // line 69
        echo "            ";
    }

    // line 87
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
        return array (  231 => 87,  227 => 69,  224 => 68,  211 => 64,  208 => 63,  203 => 59,  198 => 58,  188 => 18,  183 => 16,  178 => 15,  175 => 14,  170 => 9,  164 => 8,  159 => 88,  157 => 87,  152 => 85,  148 => 84,  143 => 82,  139 => 81,  126 => 70,  124 => 68,  120 => 66,  118 => 63,  111 => 59,  107 => 58,  98 => 51,  90 => 46,  86 => 45,  81 => 43,  76 => 41,  73 => 40,  71 => 39,  63 => 36,  49 => 24,  47 => 14,  41 => 10,  39 => 9,  35 => 8,  27 => 2,);
    }
}
