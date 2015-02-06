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
        <h2>Valeurs de Caractéristique :</h2>
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
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abilities"]) ? $context["abilities"] : $this->getContext($context, "abilities")));
        foreach ($context['_seq'] as $context["abilityName"] => $context["abilityValue"]) {
            // line 15
            echo "                ";
            $context["abilityModifier"] = $this->getAttribute((isset($context["pm_character_characterusedability"]) ? $context["pm_character_characterusedability"] : $this->getContext($context, "pm_character_characterusedability")), "getAbilityModifier", array(0 => $context["abilityValue"]), "method");
            // line 16
            echo "                <tr>
                    ";
            // line 17
            if (($context["abilityName"] == "strength")) {
                echo "<th>Force</th>
                    ";
            } elseif ((            // line 18
$context["abilityName"] == "dexterity")) {
                echo "<th>Dextérité</th>
                    ";
            } elseif ((            // line 19
$context["abilityName"] == "constitution")) {
                echo "<th>Constitution</th>
                    ";
            } elseif ((            // line 20
$context["abilityName"] == "intelligence")) {
                echo "<th>Intelligence</th>
                    ";
            } elseif ((            // line 21
$context["abilityName"] == "wisdom")) {
                echo "<th>Sagesse</th>
                    ";
            } elseif ((            // line 22
$context["abilityName"] == "charisma")) {
                echo "<th>Charisme</th>
                    ";
            }
            // line 23
            echo "    
                    <td>";
            // line 24
            if (((isset($context["abilityModifier"]) ? $context["abilityModifier"] : $this->getContext($context, "abilityModifier")) >= 0)) {
                echo "+";
            }
            echo twig_escape_filter($this->env, (isset($context["abilityModifier"]) ? $context["abilityModifier"] : $this->getContext($context, "abilityModifier")), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            if (($context["abilityValue"] >= 0)) {
                echo "+";
            }
            echo twig_escape_filter($this->env, $context["abilityValue"], "html", null, true);
            echo " = </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['abilityName'], $context['abilityValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </table>
    </div>
        
    <div class=\"col-md-6\">
        <h2>Options de Combat :</h2>
        <dl class=\"dl-horizontal\">
            <dt>Bonus de Base à l'Attaque :</dt>
            <dd>
                ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["babs"]) ? $context["babs"] : $this->getContext($context, "babs")));
        foreach ($context['_seq'] as $context["_key"] => $context["bab"]) {
            // line 37
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bab"], "value", array()), "html", null, true);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </dd>
            <dt>Mod. Lutte :</dt>
            <dd>
                ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["grappleModifiers"]) ? $context["grappleModifiers"] : $this->getContext($context, "grappleModifiers")));
        foreach ($context['_seq'] as $context["_key"] => $context["grappleModifier"]) {
            // line 43
            echo "                    ";
            echo twig_escape_filter($this->env, $context["grappleModifier"], "html", null, true);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grappleModifier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </dd>
            <dt>Classe d'Armure :</dt>
            <dd>";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["ac"]) ? $context["ac"] : $this->getContext($context, "ac")), "html", null, true);
        echo "</dd>
            <dt>CA de Contact :</dt>
            <dd>";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["touchAC"]) ? $context["touchAC"] : $this->getContext($context, "touchAC")), "html", null, true);
        echo "</dd>
            <dt>CA de Pris au dépourvu :</dt>
            <dd>";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["fFAC"]) ? $context["fFAC"] : $this->getContext($context, "fFAC")), "html", null, true);
        echo "</dd>
            <dt>Vitesse :</dt>
            <dd>";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["speed"]) ? $context["speed"] : $this->getContext($context, "speed")), "html", null, true);
        echo "</dd>
            <dt>Initiative :</dt>
            <dd>";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["initiative"]) ? $context["initiative"] : $this->getContext($context, "initiative")), "html", null, true);
        echo "</dd>
        </dl>
    </div>
</div>
            
<div class=\"row\">
    <div class=\"col-md-6\">
        <h2>Jets de Sauvegarde :</h2>
        <table class=\"table table-bordered\">
            <caption>Jets de Sauvegarde :</caption>
            <tr>
                <td>Réflex</td>
                <td>";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["fortitude"]) ? $context["fortitude"] : $this->getContext($context, "fortitude")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Vigueur</td>
                <td>";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["reflex"]) ? $context["reflex"] : $this->getContext($context, "reflex")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Volonté</td>
                <td>";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["will"]) ? $context["will"] : $this->getContext($context, "will")), "html", null, true);
        echo "</td>
            </tr>
        </table>    
    </div>
    <div class=\"col-md-6\">
        
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
        return array (  184 => 75,  177 => 71,  170 => 67,  155 => 55,  150 => 53,  145 => 51,  140 => 49,  135 => 47,  131 => 45,  122 => 43,  118 => 42,  113 => 39,  104 => 37,  100 => 36,  90 => 28,  78 => 25,  71 => 24,  68 => 23,  63 => 22,  59 => 21,  55 => 20,  51 => 19,  47 => 18,  43 => 17,  40 => 16,  37 => 15,  33 => 14,  19 => 2,);
    }
}
