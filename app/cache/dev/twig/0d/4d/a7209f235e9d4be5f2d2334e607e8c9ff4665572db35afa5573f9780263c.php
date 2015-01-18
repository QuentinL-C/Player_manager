<?php

/* PMUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_0d4da7209f235e9d4be5f2d2334e607e8c9ff4665572db35afa5573f9780263c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<div class=\"row\">
    <fieldset class=\"col-md-6\">
        <legend>Utilisateur :</legend>

        <dl class=\"dl-horizontal\">
            <dt>Nom :</dt>
            <dd>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "CompleteName", array()), "html", null, true);
        echo "</dd>
        </dl>
        <dl class=\"dl-horizontal\">
            <dt>Adresse mail :</dt>
            <dd>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</dd>
        </dl>
    </fieldset>
</div>";
    }

    public function getTemplateName()
    {
        return "PMUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 13,  28 => 9,  19 => 2,);
    }
}
