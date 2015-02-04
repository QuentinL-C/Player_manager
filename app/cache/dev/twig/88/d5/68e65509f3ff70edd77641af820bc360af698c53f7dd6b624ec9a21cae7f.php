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
        echo "<div class=\"row\">
    <div class=\"col-md-6\">
        <table class=\"table table-bordered table-hover\">
            <caption>Caractéristiques :</caption>
            <thead>
                <tr>
                    <th>Caractéristiques</th>
                    <th>Mod.</th>
                    <th>Détail</th>
                </tr>
            </thead>
            ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abilities"]) ? $context["abilities"] : $this->getContext($context, "abilities")));
        foreach ($context['_seq'] as $context["abilityName"] => $context["abilityValue"]) {
            // line 14
            echo "                ";
            if (($context["abilityName"] == "strength")) {
                echo "<tr><th>Force</th><td>";
                if (($context["abilityValue"] >= 0)) {
                    echo "+";
                }
                echo twig_escape_filter($this->env, $context["abilityValue"], "html", null, true);
                echo "</td></tr>
                ";
            } elseif ((            // line 15
$context["abilityName"] == "dexterity")) {
                echo "<tr><th>Dextérité</th><td>";
                if (($context["abilityValue"] >= 0)) {
                    echo "+";
                }
                echo twig_escape_filter($this->env, $context["abilityValue"], "html", null, true);
                echo "</td></tr>
                ";
            } elseif ((            // line 16
$context["abilityName"] == "constitution")) {
                echo "<tr><th>Constitution</th><td>";
                if (($context["abilityValue"] >= 0)) {
                    echo "+";
                }
                echo twig_escape_filter($this->env, $context["abilityValue"], "html", null, true);
                echo "</td></tr>
                ";
            } elseif ((            // line 17
$context["abilityName"] == "intelligence")) {
                echo "<tr><th>Intelligence</th><td>";
                if (($context["abilityValue"] >= 0)) {
                    echo "+";
                }
                echo twig_escape_filter($this->env, $context["abilityValue"], "html", null, true);
                echo "</td></tr>
                ";
            } elseif ((            // line 18
$context["abilityName"] == "wisdom")) {
                echo "<tr><th>Sagesse</th><td>";
                if (($context["abilityValue"] >= 0)) {
                    echo "+";
                }
                echo twig_escape_filter($this->env, $context["abilityValue"], "html", null, true);
                echo "</td></tr>
                ";
            } elseif ((            // line 19
$context["abilityName"] == "charisma")) {
                echo "<tr><th>Charisme</th><td>";
                if (($context["abilityValue"] >= 0)) {
                    echo "+";
                }
                echo twig_escape_filter($this->env, $context["abilityValue"], "html", null, true);
                echo "</td></tr>
                ";
            }
            // line 21
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['abilityName'], $context['abilityValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </table>
    </div>
        
    <div class=\"col-md-6\">
        BBA : 
        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["babs"]) ? $context["babs"] : $this->getContext($context, "babs")));
        foreach ($context['_seq'] as $context["_key"] => $context["bab"]) {
            // line 28
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bab"], "value", array()), "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "<br />
        Mod. Lutte :
        ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["grappleModifiers"]) ? $context["grappleModifiers"] : $this->getContext($context, "grappleModifiers")));
        foreach ($context['_seq'] as $context["_key"] => $context["grappleModifier"]) {
            // line 32
            echo "            ";
            echo twig_escape_filter($this->env, $context["grappleModifier"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grappleModifier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "<br />
        CA : ";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["ac"]) ? $context["ac"] : $this->getContext($context, "ac")), "html", null, true);
        echo "<br />
        CA de Contact : ";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["touchAC"]) ? $context["touchAC"] : $this->getContext($context, "touchAC")), "html", null, true);
        echo "<br />
        CA de pris au dépourvu : ";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["fFAC"]) ? $context["fFAC"] : $this->getContext($context, "fFAC")), "html", null, true);
        echo "<br />
        Vitesse : ";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["speed"]) ? $context["speed"] : $this->getContext($context, "speed")), "html", null, true);
        echo "<br />
        Initiative : ";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["initiative"]) ? $context["initiative"] : $this->getContext($context, "initiative")), "html", null, true);
        echo "<br />
        <table class=\"table table-bordered\">
            <caption>Jets de Sauvegarde</caption>
            <tr>
                <td>Réflex</td>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["fortitude"]) ? $context["fortitude"] : $this->getContext($context, "fortitude")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Vigueur</td>
                <td>";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["reflex"]) ? $context["reflex"] : $this->getContext($context, "reflex")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Volonté</td>
                <td>";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["will"]) ? $context["will"] : $this->getContext($context, "will")), "html", null, true);
        echo "</td>
            </tr>
        </table>
    </div>
</div>";
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
        return array (  176 => 51,  169 => 47,  162 => 43,  154 => 38,  150 => 37,  146 => 36,  142 => 35,  138 => 34,  135 => 33,  126 => 32,  122 => 31,  118 => 29,  109 => 28,  105 => 27,  98 => 22,  92 => 21,  82 => 19,  73 => 18,  64 => 17,  55 => 16,  46 => 15,  36 => 14,  32 => 13,  19 => 2,);
    }
}
