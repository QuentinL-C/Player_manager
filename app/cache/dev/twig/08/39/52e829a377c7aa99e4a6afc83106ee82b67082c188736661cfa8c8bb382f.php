<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_083952e829a377c7aa99e4a6afc83106ee82b67082c188736661cfa8c8bb382f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("PMUserBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'h1' => array($this, 'block_h1'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PMUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    Connexion - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block_h1($context, array $blocks = array())
    {
        // line 12
        echo "    Me connecter :
";
    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 16
        echo "    <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("pm_welcome_homepage");
        echo "\">Accueil</a></li>
    <li class=\"active\">Connexion</li>
";
    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        echo "        
<div class=\"row\">
    <section class=\"col-md-offset-2 col-lg-8\">
        ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 24
            echo "            <div class=\"alert col-lg-7 alert-success\">
                ";
            // line 25
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            
        <div class=\"well\">
            ";
        // line 30
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 62
        echo "        </div>
    </section>
</div>
";
    }

    // line 30
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 31
        echo "                ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 32
            echo "                    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
                ";
        }
        // line 34
        echo "
                <form class=\"form-horizontal\" role=\"form\" action=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                    <div class=\"form-group\">
                        <label for=\"username\" class=\"col-sm-4 control-label\" >Adresse mail</label>
                        <div class=\"col-sm-5\">
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\" required=\"required\" />
                        </div>
                    </div>
                        
                    <div class=\"form-group\">
                        <label for=\"password\" class=\"col-sm-4 control-label\" >Mot de passe</label>
                        <div class=\"col-sm-5\">
                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" required=\"required\" />
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-md-offset-4 col-sm-5\">
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                        <label for=\"remember_me\">Se souvenir de moi</label>
                        </div>
                    </div>

                    <center><input type=\"submit\" class=\"btn btn-default\" id=\"_submit\" name=\"_submit\" value=\"Connexion\" /></center>
                </form>
            ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 41,  124 => 36,  120 => 35,  117 => 34,  111 => 32,  108 => 31,  105 => 30,  98 => 62,  96 => 30,  92 => 28,  83 => 25,  80 => 24,  76 => 23,  69 => 20,  61 => 16,  58 => 15,  53 => 12,  50 => 11,  43 => 8,  40 => 7,  11 => 3,);
    }
}
