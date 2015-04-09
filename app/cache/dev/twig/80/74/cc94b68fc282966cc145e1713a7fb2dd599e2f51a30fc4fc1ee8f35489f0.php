<?php

/* PMGameBundle:Player:index.html.twig */
class __TwigTemplate_8074cc94b68fc282966cc145e1713a7fb2dd599e2f51a30fc4fc1ee8f35489f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("PMGameBundle:Player:layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'nav_extends' => array($this, 'block_nav_extends'),
            'PM_body' => array($this, 'block_PM_body'),
            'javascripts_block' => array($this, 'block_javascripts_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PMGameBundle:Player:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "name", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_nav_extends($context, array $blocks = array())
    {
        // line 10
        echo "    <header class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <nav  class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a href=\"#\" class=\"navbar-brand\" id=\"player_gm_navbar_gamename\"></a>
            </div>
            <div class=\"collapse navbar-collapse\">
                    <div class=\"navbar-right\">
                        <p class=\"navbar-text\" id=\"player_gm_navbar_gmname\"></p> 
                        <button type=\"button\" class=\"btn btn-danger navbar-btn\" id=\"player_gm_navbar_quit\">X</button>
                </div>
            </div>
        </nav>
    </header>
";
    }

    // line 31
    public function block_PM_body($context, array $blocks = array())
    {
        // line 32
        echo "    <div style=\"height: 100%;\">
<div class=\"row\" style=\"height: 50%\">
    <section class=\"col-md-6\" id=\"player_gm_section_characters\"></section>
    <section class=\"col-md-6\" id=\"player_gm_section_historical\"></section>
</div>
<div class=\"row\" style=\"height: 50%\" id=\"player_gm_section_monsters\">
    <section class=\"col-md-6\"></section>
    <section class=\"col-md-6\" id=\"player_gm_section_chat\"></section>
</div>
    </div>
";
    }

    // line 44
    public function block_javascripts_block($context, array $blocks = array())
    {
        // line 45
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "138d01c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_138d01c_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/138d01c_main_1.js");
            // line 46
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "138d01c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_138d01c") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/138d01c.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "PMGameBundle:Player:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 46,  97 => 45,  94 => 44,  80 => 32,  77 => 31,  54 => 10,  51 => 9,  42 => 6,  39 => 5,  11 => 3,);
    }
}
