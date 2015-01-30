<?php

/* PMCharacterBundle:CharacterUsed:view_skills.html.twig */
class __TwigTemplate_50f308d01fe795cb45fb0d0d2ff0c67317dbe129fae76169ab3874c38afdc9e6 extends Twig_Template
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
        echo "<table class=\"table table-bordered\">
    <caption>Compétences :</caption>
    <tr>
        <th>Compétence</th>
        <th>Degré de Maitrise</th>
    </tr>
    ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "skills", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 9
            echo "        <tr><th><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_skill_administration_view", array("slug" => $this->getAttribute($this->getAttribute($context["skill"], "skill", array()), "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["skill"], "skill", array()), "name", array()), "html", null, true);
            echo "</a></th><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["skill"], "ranks", array()), "html", null, true);
            echo "</td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "PMCharacterBundle:CharacterUsed:view_skills.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 11,  31 => 9,  27 => 8,  19 => 2,);
    }
}
