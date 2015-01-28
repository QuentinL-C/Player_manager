<?php

/* PMCharacterBundle:CharacterUsed:view_home.html.twig */
class __TwigTemplate_88d568e65509f3ff70edd77641af820bc360af698c53f7dd6b624ec9a21cae7f extends Twig_Template
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
    <caption>Caractéristiques :</caption>
    ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abilities"]) ? $context["abilities"] : $this->getContext($context, "abilities")));
        foreach ($context['_seq'] as $context["_key"] => $context["ability"]) {
            // line 5
            echo "        ";
            if (($this->getAttribute($context["ability"], "type", array()) == 1)) {
                echo "<tr><th>Force</th><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ability"], "value", array()), "html", null, true);
                echo "</td></tr>
        ";
            } elseif (($this->getAttribute(            // line 6
$context["ability"], "type", array()) == 2)) {
                echo "<tr><th>Dexterité</th><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ability"], "value", array()), "html", null, true);
                echo "</td></tr>
        ";
            } elseif (($this->getAttribute(            // line 7
$context["ability"], "type", array()) == 3)) {
                echo "<tr><th>Constitution</th><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ability"], "value", array()), "html", null, true);
                echo "</td></tr>
        ";
            } elseif (($this->getAttribute(            // line 8
$context["ability"], "type", array()) == 4)) {
                echo "<tr><th>Intelligence</th><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ability"], "value", array()), "html", null, true);
                echo "</td></tr>
        ";
            } elseif (($this->getAttribute(            // line 9
$context["ability"], "type", array()) == 5)) {
                echo "<tr><th>Sagesse</th><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ability"], "value", array()), "html", null, true);
                echo "</td></tr>
        ";
            } elseif (($this->getAttribute(            // line 10
$context["ability"], "type", array()) == 6)) {
                echo "<tr><th>Charisme</th><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ability"], "value", array()), "html", null, true);
                echo "</td></tr>
        ";
            }
            // line 12
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ability'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "PMCharacterBundle:CharacterUsed:view_home.html.twig";
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
