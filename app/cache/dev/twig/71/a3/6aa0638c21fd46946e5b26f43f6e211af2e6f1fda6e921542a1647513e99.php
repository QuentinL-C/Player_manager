<?php

/* PMCharacterBundle:CharacterUsed:view_rp.html.twig */
class __TwigTemplate_71a36aa0638c21fd46946e5b26f43f6e211af2e6f1fda6e921542a1647513e99 extends Twig_Template
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
        <h2>Informations sur le Personnage</h2>

        <ul>
            <li>Age : ";
        // line 7
        if ( !twig_test_empty($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "age", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "age", array()), "html", null, true);
        } else {
            echo "Aucun âge";
        }
        echo "</li>
            <li>Sexe : ";
        // line 8
        if ( !twig_test_empty($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "gender", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "gender", array()), "html", null, true);
        } else {
            echo "Aucun genre";
        }
        echo "</li>
            <li>Taille : ";
        // line 9
        if ( !twig_test_empty($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "height", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "height", array()), "html", null, true);
        } else {
            echo "Aucune taille";
        }
        echo "</li>
            <li>Poids : ";
        // line 10
        if ( !twig_test_empty($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "weight", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "weight", array()), "html", null, true);
        } else {
            echo "Aucun poids";
        }
        echo "</li>
            <li>Alignement : ";
        // line 11
        if ( !twig_test_empty($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "alignment", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "alignment", array()), "name", array()), "html", null, true);
        } else {
            echo "Aucun alignement";
        }
        echo "</li>
            <li>Richesse : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "wealth", array()), "po", array()), "html", null, true);
        echo "</li>
        </ul>
    </div>
    <div class=\"col-md-6\">
        <h2>Histoire</h2>
        ";
        // line 17
        if ( !twig_test_empty($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "story", array()))) {
            // line 18
            echo "            <div class=\"well\">
                ";
            // line 19
            echo $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "story", array());
            echo "
            </div>
        ";
        } else {
            // line 22
            echo "            <div class=\"alert alert-warning\" role=\"alert\">Aucune histoire fournie pour ce personnage.</div>
        ";
        }
        // line 24
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "PMCharacterBundle:CharacterUsed:view_rp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 24,  85 => 22,  79 => 19,  76 => 18,  74 => 17,  66 => 12,  58 => 11,  50 => 10,  42 => 9,  34 => 8,  26 => 7,  19 => 2,);
    }
}
