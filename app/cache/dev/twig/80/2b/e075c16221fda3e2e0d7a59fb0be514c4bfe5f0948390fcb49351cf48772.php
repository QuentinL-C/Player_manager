<?php

/* PMCharacterBundle:CharacterUsedPublic:view_content_statistics.html.twig */
class __TwigTemplate_802be075c16221fda3e2e0d7a59fb0be514c4bfe5f0948390fcb49351cf48772 extends Twig_Template
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
        echo "<h2>Statistiques :</h2>
<ul>
    <li>Création :</li>
    <ul>
        <li>Par <a href=\"mailto:";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "createUser", array()), "email", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "createUser", array()), "username", array()), "html", null, true);
        echo "</a></li>
        <li>le ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "createDate", array()), "d M Y"), "html", null, true);
        echo "</li>
    </ul>
    ";
        // line 9
        if ( !(null === $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "updateUser", array()))) {
            // line 10
            echo "    <li>Dernière modification :</li>
    <ul>
        <li>Par <a href=\"mailto:";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "createUser", array()), "email", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "updateUser", array()), "username", array()), "html", null, true);
            echo "</a></li>
        <li>le ";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "updateDate", array()), "d M Y"), "html", null, true);
            echo "</li>
    </ul>
    ";
        }
        // line 16
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "PMCharacterBundle:CharacterUsedPublic:view_content_statistics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  48 => 13,  42 => 12,  38 => 10,  36 => 9,  31 => 7,  25 => 6,  19 => 2,);
    }
}
