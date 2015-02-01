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
            <tr>
                <th>Force : </th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["strengthModifier"]) ? $context["strengthModifier"] : $this->getContext($context, "strengthModifier")), "html", null, true);
        echo "</td>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["strength"]) ? $context["strength"] : $this->getContext($context, "strength")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dextérité : </th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["dexterityModifier"]) ? $context["dexterityModifier"] : $this->getContext($context, "dexterityModifier")), "html", null, true);
        echo "</td>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["dexterity"]) ? $context["dexterity"] : $this->getContext($context, "dexterity")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Constitution : </th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["constitutionModifier"]) ? $context["constitutionModifier"] : $this->getContext($context, "constitutionModifier")), "html", null, true);
        echo "</td>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["constitution"]) ? $context["constitution"] : $this->getContext($context, "constitution")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Intelligence : </th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["intelligenceModifier"]) ? $context["intelligenceModifier"] : $this->getContext($context, "intelligenceModifier")), "html", null, true);
        echo "</td>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["intelligence"]) ? $context["intelligence"] : $this->getContext($context, "intelligence")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sagesse : </th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["wisdomModifier"]) ? $context["wisdomModifier"] : $this->getContext($context, "wisdomModifier")), "html", null, true);
        echo "</td>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["wisdom"]) ? $context["wisdom"] : $this->getContext($context, "wisdom")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Charisme : </th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["charismaModifier"]) ? $context["charismaModifier"] : $this->getContext($context, "charismaModifier")), "html", null, true);
        echo "</td>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["charisma"]) ? $context["charisma"] : $this->getContext($context, "charisma")), "html", null, true);
        echo "</td>
            </tr>
        </table>
    </div>
        
    <div class=\"col-md-6\">
        BBA : 
        ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["babs"]) ? $context["babs"] : $this->getContext($context, "babs")));
        foreach ($context['_seq'] as $context["_key"] => $context["bab"]) {
            // line 49
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bab"], "value", array()), "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "<br />
        Mod. Lutte :
        ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["grappleModifiers"]) ? $context["grappleModifiers"] : $this->getContext($context, "grappleModifiers")));
        foreach ($context['_seq'] as $context["_key"] => $context["grappleModifier"]) {
            // line 53
            echo "            ";
            echo twig_escape_filter($this->env, $context["grappleModifier"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grappleModifier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "<br />
        CA : ";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["ac"]) ? $context["ac"] : $this->getContext($context, "ac")), "html", null, true);
        echo "<br />
        CA de Contact : ";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["touchAC"]) ? $context["touchAC"] : $this->getContext($context, "touchAC")), "html", null, true);
        echo "<br />
        CA de pris au dépourvu : ";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["fFAC"]) ? $context["fFAC"] : $this->getContext($context, "fFAC")), "html", null, true);
        echo "<br />
        Vitesse : ";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["speed"]) ? $context["speed"] : $this->getContext($context, "speed")), "html", null, true);
        echo "<br />
        Initiative : ";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["initiative"]) ? $context["initiative"] : $this->getContext($context, "initiative")), "html", null, true);
        echo "<br />
        <table class=\"table table-bordered\">
            <caption>Jets de Sauvegarde</caption>
            <tr>
                <td>Réflex</td>
                <td>";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["fortitude"]) ? $context["fortitude"] : $this->getContext($context, "fortitude")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Vigueur</td>
                <td>";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["reflex"]) ? $context["reflex"] : $this->getContext($context, "reflex")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Volonté</td>
                <td>";
        // line 72
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
        return array (  174 => 72,  167 => 68,  160 => 64,  152 => 59,  148 => 58,  144 => 57,  140 => 56,  136 => 55,  133 => 54,  124 => 53,  120 => 52,  116 => 50,  107 => 49,  103 => 48,  93 => 41,  89 => 40,  82 => 36,  78 => 35,  71 => 31,  67 => 30,  60 => 26,  56 => 25,  49 => 21,  45 => 20,  38 => 16,  34 => 15,  19 => 2,);
    }
}
