<?php

/* PMUserBundle::layout.html.twig */
class __TwigTemplate_7fac1d9595902631123641c74b672faec402a74f0281a7a3ed78371cb2f43793 extends Twig_Template
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
    <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("pm_administration_homepage");
        echo "\">Administration</a></li>
    <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("pm_user_administration_homepage");
        echo "\">Utilisateurs</a></li>
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $this->displayBlock('follow', $context, $blocks);
        // line 19
        echo "        
    ";
        // line 20
        $this->displayBlock('PMUser_body', $context, $blocks);
    }

    // line 16
    public function block_follow($context, array $blocks = array())
    {
        // line 17
        echo "        <meta name=\"robots\" content=\"noindex,nofollow\" />
    ";
    }

    // line 20
    public function block_PMUser_body($context, array $blocks = array())
    {
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "PMUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 20,  85 => 17,  82 => 16,  78 => 20,  75 => 19,  72 => 16,  69 => 15,  63 => 12,  59 => 11,  54 => 10,  51 => 9,  44 => 6,  41 => 5,  11 => 3,);
    }
}
