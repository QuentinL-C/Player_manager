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
    ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["skills"]) ? $context["skills"] : $this->getContext($context, "skills")));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 5
            echo "        ";
            if (($this->getAttribute($context["skill"], "type", array()) == 1)) {
                echo "<tr><th>Force</th><td>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ability"]) ? $context["ability"] : $this->getContext($context, "ability")), "value", array()), "html", null, true);
                echo "</td></tr>
        ";
            } elseif (($this->getAttribute(            // line 6
$context["skill"], "type", array()) == 2)) {
                echo "<tr><th>Dexterité</th><td>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ability"]) ? $context["ability"] : $this->getContext($context, "ability")), "value", array()), "html", null, true);
                echo "</td></tr>
        ";
            } elseif (($this->getAttribute(            // line 7
$context["skill"], "type", array()) == 3)) {
                echo "<tr><th>Constitution</th><td>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ability"]) ? $context["ability"] : $this->getContext($context, "ability")), "value", array()), "html", null, true);
                echo "</td></tr>
        ";
            } elseif (($this->getAttribute(            // line 8
$context["skill"], "type", array()) == 4)) {
                echo "<tr><th>Intelligence</th><td>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ability"]) ? $context["ability"] : $this->getContext($context, "ability")), "value", array()), "html", null, true);
                echo "</td></tr>
        ";
            } elseif (($this->getAttribute(            // line 9
$context["skill"], "type", array()) == 5)) {
                echo "<tr><th>Sagesse</th><td>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ability"]) ? $context["ability"] : $this->getContext($context, "ability")), "value", array()), "html", null, true);
                echo "</td></tr>
        ";
            } elseif (($this->getAttribute(            // line 10
$context["skill"], "type", array()) == 6)) {
                echo "<tr><th>Charisme</th><td>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ability"]) ? $context["ability"] : $this->getContext($context, "ability")), "value", array()), "html", null, true);
                echo "</td></tr>
        ";
            }
            // line 12
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
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
        return array (  71 => 13,  65 => 12,  58 => 10,  52 => 9,  46 => 8,  40 => 7,  34 => 6,  27 => 5,  23 => 4,  19 => 2,);
    }
}
