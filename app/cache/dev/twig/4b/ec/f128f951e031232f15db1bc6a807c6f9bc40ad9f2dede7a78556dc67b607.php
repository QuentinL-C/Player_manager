<?php

/* PMCharacterBundle:CharacterUsedPublic:view_content_rp.html.twig */
class __TwigTemplate_4becf128f951e031232f15db1bc6a807c6f9bc40ad9f2dede7a78556dc67b607 extends Twig_Template
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
            <li>Langues parlées :</li>
            <ul>
                ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "languages", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["langue"]) {
            // line 16
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_language_public_view", array("slug" => $this->getAttribute($context["langue"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["langue"], "name", array()), "html", null, true);
            echo "</a></li>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 18
            echo "                    <li>Aucune langue parlée</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            </ul>
        </ul>
    </div>
    <div class=\"col-md-6\">
        <h2>Histoire</h2>
        ";
        // line 25
        if ( !twig_test_empty($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "story", array()))) {
            // line 26
            echo "            <div class=\"well\">
                ";
            // line 27
            echo $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "story", array());
            echo "
            </div>
        ";
        } else {
            // line 30
            echo "            <div class=\"alert alert-warning\" role=\"alert\">Aucune histoire fournie pour ce personnage. <small>(Et ce n'est pas bien ...)</small></div>
        ";
        }
        // line 32
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "PMCharacterBundle:CharacterUsedPublic:view_content_rp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 32,  112 => 30,  106 => 27,  103 => 26,  101 => 25,  94 => 20,  87 => 18,  77 => 16,  72 => 15,  66 => 12,  58 => 11,  50 => 10,  42 => 9,  34 => 8,  26 => 7,  19 => 2,);
    }
}
