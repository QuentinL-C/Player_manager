<?php

/* PMWelcomeBundle::layoutPublic.html.twig */
class __TwigTemplate_51ed887f7477f47f22565b276f36f7d38a1e03bcfc8f4d577e885873e73fae25 extends Twig_Template
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
            'follow' => array($this, 'block_follow'),
            'body' => array($this, 'block_body'),
            'PM_body' => array($this, 'block_PM_body'),
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
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_follow($context, array $blocks = array())
    {
        // line 10
        echo "    <meta name=\"robots\" content=\"index,follow\" />
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayBlock('PM_body', $context, $blocks);
    }

    public function block_PM_body($context, array $blocks = array())
    {
        // line 15
        echo "    ";
    }

    public function getTemplateName()
    {
        return "PMWelcomeBundle::layoutPublic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 15,  60 => 14,  57 => 13,  52 => 10,  49 => 9,  42 => 6,  39 => 5,  11 => 3,);
    }
}
