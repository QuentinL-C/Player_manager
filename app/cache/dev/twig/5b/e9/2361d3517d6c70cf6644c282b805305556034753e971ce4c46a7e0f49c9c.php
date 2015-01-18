<?php

/* PMUserBundle::layoutPublic.html.twig */
class __TwigTemplate_5be92361d3517d6c70cf6644c282b805305556034753e971ce4c46a7e0f49c9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'body' => array($this, 'block_body'),
            'follow' => array($this, 'block_follow'),
            'PMUser_body' => array($this, 'block_PMUser_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "    Utilisateur - ";
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
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayBlock('follow', $context, $blocks);
        // line 17
        echo "        
    ";
        // line 18
        $this->displayBlock('PMUser_body', $context, $blocks);
    }

    // line 14
    public function block_follow($context, array $blocks = array())
    {
        // line 15
        echo "        <meta name=\"robots\" content=\"index,follow\" />
    ";
    }

    // line 18
    public function block_PMUser_body($context, array $blocks = array())
    {
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "PMUserBundle::layoutPublic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 18,  77 => 15,  74 => 14,  70 => 18,  67 => 17,  64 => 14,  61 => 13,  54 => 10,  51 => 9,  44 => 6,  41 => 5,  11 => 3,);
    }
}
