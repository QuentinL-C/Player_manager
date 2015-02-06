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
        <th>Modificateur de Compétence</th>
        <th>Détail</th>
    </tr>
    ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "skills", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 10
            echo "        <tr>
            <th><a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_skill_administration_view", array("slug" => $this->getAttribute($this->getAttribute($context["skill"], "skill", array()), "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["skill"], "skill", array()), "name", array()), "html", null, true);
            echo "</a></th>
            <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pm_character_characterusedskill"]) ? $context["pm_character_characterusedskill"] : $this->getContext($context, "pm_character_characterusedskill")), "getCharacterSkillModifier", array(0 => $context["skill"]), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 13
            echo $this->getAttribute((isset($context["pm_character_characterusedskill"]) ? $context["pm_character_characterusedskill"] : $this->getContext($context, "pm_character_characterusedskill")), "getCharacterSkillModifier", array(0 => $context["skill"], 1 => true), "method");
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
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
        return array (  54 => 16,  45 => 13,  41 => 12,  35 => 11,  32 => 10,  28 => 9,  19 => 2,);
    }
}
