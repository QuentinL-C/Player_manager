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
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["ability"]) {
            // line 14
            echo "                ";
            if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                echo "<tr><th>Force</th><td>";
                if (($context["ability"] >= 0)) {
                    echo "+";
                }
                echo twig_escape_filter($this->env, $context["ability"], "html", null, true);
                echo "</td></tr>
                ";
            } elseif (($this->getAttribute(            // line 15
$context["loop"], "index", array()) == 2)) {
                echo "<tr><th>Dextérité</th><td>";
                if (($context["ability"] >= 0)) {
                    echo "+";
                }
                echo twig_escape_filter($this->env, $context["ability"], "html", null, true);
                echo "</td></tr>
                ";
            } elseif (($this->getAttribute(            // line 16
$context["loop"], "index", array()) == 3)) {
                echo "<tr><th>Constitution</th><td>";
                if (($context["ability"] >= 0)) {
                    echo "+";
                }
                echo twig_escape_filter($this->env, $context["ability"], "html", null, true);
                echo "</td></tr>
                ";
            } elseif (($this->getAttribute(            // line 17
$context["loop"], "index", array()) == 4)) {
                echo "<tr><th>Intelligence</th><td>";
                if (($context["ability"] >= 0)) {
                    echo "+";
                }
                echo twig_escape_filter($this->env, $context["ability"], "html", null, true);
                echo "</td></tr>
                ";
            } elseif (($this->getAttribute(            // line 18
$context["loop"], "index", array()) == 5)) {
                echo "<tr><th>Sagesse</th><td>";
                if (($context["ability"] >= 0)) {
                    echo "+";
                }
                echo twig_escape_filter($this->env, $context["ability"], "html", null, true);
                echo "</td></tr>
                ";
            } elseif (($this->getAttribute(            // line 19
$context["loop"], "index", array()) == 6)) {
                echo "<tr><th>Charisme</th><td>";
                if (($context["ability"] >= 0)) {
                    echo "+";
                }
                echo twig_escape_filter($this->env, $context["ability"], "html", null, true);
                echo "</td></tr>
                ";
            }
            // line 21
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ability'], $context['_parent'], $context['loop']);
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
        return array (  197 => 51,  190 => 47,  183 => 43,  175 => 38,  171 => 37,  167 => 36,  163 => 35,  159 => 34,  156 => 33,  147 => 32,  143 => 31,  139 => 29,  130 => 28,  126 => 27,  119 => 22,  105 => 21,  95 => 19,  86 => 18,  77 => 17,  68 => 16,  59 => 15,  49 => 14,  32 => 13,  19 => 2,);
    }
}
