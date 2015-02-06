<?php

/* PMCharacterBundle:CharacterUsedPublic:layoutPublic.html.twig */
class __TwigTemplate_63ddc0fc4c190225f244a8ae0ce941113ce0bf591b649740469402f2e60c380e extends Twig_Template
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
            'follow' => array($this, 'block_follow'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'body' => array($this, 'block_body'),
            'PM_body' => array($this, 'block_PM_body'),
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
        echo "    Mes Personnages - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_follow($context, array $blocks = array())
    {
        // line 10
        echo "    <meta name=\"robots\" content=\"noindex,nofollow\" />
";
    }

    // line 13
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
    <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("pm_characterused_public_homepage");
        echo "\">Mes Personnages</a></li>
";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $this->displayBlock('PM_body', $context, $blocks);
    }

    public function block_PM_body($context, array $blocks = array())
    {
        // line 20
        echo "    ";
    }

    public function getTemplateName()
    {
        return "PMCharacterBundle:CharacterUsedPublic:layoutPublic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 20,  75 => 19,  72 => 18,  66 => 15,  61 => 14,  58 => 13,  53 => 10,  50 => 9,  43 => 6,  40 => 5,  11 => 3,);
    }
}
