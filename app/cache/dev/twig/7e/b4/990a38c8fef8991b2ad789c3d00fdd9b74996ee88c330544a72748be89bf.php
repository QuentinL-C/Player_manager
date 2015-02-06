<?php

/* PMWelcomeBundle:Homepage:index.html.twig */
class __TwigTemplate_7eb4990a38c8fef8991b2ad789c3d00fdd9b74996ee88c330544a72748be89bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("PMWelcomeBundle::layoutPublic.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'h1' => array($this, 'block_h1'),
            'h1_extend' => array($this, 'block_h1_extend'),
            'PM_body' => array($this, 'block_PM_body'),
            'javascripts_block' => array($this, 'block_javascripts_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PMWelcomeBundle::layoutPublic.html.twig";
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
";
    }

    // line 13
    public function block_h1($context, array $blocks = array())
    {
        // line 14
        echo "    Bienvenue sur ";
        echo twig_escape_filter($this->env, (isset($context["project_name"]) ? $context["project_name"] : $this->getContext($context, "project_name")), "html", null, true);
        echo "
";
    }

    // line 17
    public function block_h1_extend($context, array $blocks = array())
    {
        // line 18
        echo "    <a class=\"btn btn-lg btn-primary\" href=\"";
        echo $this->env->getExtension('routing')->getPath("pm_help_public_homepage");
        echo "\" >Aide</a>
";
    }

    // line 21
    public function block_PM_body($context, array $blocks = array())
    {
        // line 22
        echo "<div class=\"row\">
    <div class=\"col-md-6\">
        <h2>Mes personnages</h2>
        
        <ul>
            <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("pm_characterused_public_homepage");
        echo "\">Accéder à mes personnages</a></li>
        </ul>
    </div>
    <div class=\"col-md-6\">
        <h2>Mes parties</h2>
        
        <ul>
            <li>A venir</li>
        </ul>
    </div>
</div>
";
    }

    // line 40
    public function block_javascripts_block($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "PMWelcomeBundle:Homepage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 40,  91 => 27,  84 => 22,  81 => 21,  74 => 18,  71 => 17,  64 => 14,  61 => 13,  54 => 10,  51 => 9,  44 => 6,  41 => 5,  11 => 3,);
    }
}
