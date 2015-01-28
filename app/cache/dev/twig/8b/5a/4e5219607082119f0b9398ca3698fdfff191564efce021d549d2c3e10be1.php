<?php

/* PMUserBundle:User:view_user_user.html.twig */
class __TwigTemplate_8b5a4e5219607082119f0b9398ca3698fdfff191564efce021d549d2c3e10be1 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
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
        return "PMUserBundle:User:view_user_user.html.twig";
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
