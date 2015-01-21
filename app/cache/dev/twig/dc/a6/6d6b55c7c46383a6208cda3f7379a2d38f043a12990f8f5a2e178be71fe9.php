<?php

/* PMWelcomeBundle:Administration:index.html.twig */
class __TwigTemplate_dca66d6b55c7c46383a6208cda3f7379a2d38f043a12990f8f5a2e178be71fe9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("PMWelcomeBundle::layoutAdmin.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'h1' => array($this, 'block_h1'),
            'PM_body' => array($this, 'block_PM_body'),
            'javascripts_block' => array($this, 'block_javascripts_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PMWelcomeBundle::layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
    <li class=\"active\">Accueil</li>
";
    }

    // line 14
    public function block_h1($context, array $blocks = array())
    {
        // line 15
        echo "    Administration
";
    }

    // line 18
    public function block_PM_body($context, array $blocks = array())
    {
        // line 19
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("pm_user_homepage");
        echo "\">Gestion Utilisateurs</a><br />
    <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("pm_alignment_homepage");
        echo "\">Gestion des Alignements</a><br />
    <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("pm_classDnD_homepage");
        echo "\">Gestion des Classes</a><br />
    <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("pm_race_homepage");
        echo "\">Gestion des Races</a>
";
    }

    // line 25
    public function block_javascripts_block($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "PMWelcomeBundle:Administration:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  85 => 22,  81 => 21,  77 => 20,  72 => 19,  69 => 18,  64 => 15,  61 => 14,  53 => 10,  50 => 9,  43 => 6,  40 => 5,  11 => 3,);
    }
}
