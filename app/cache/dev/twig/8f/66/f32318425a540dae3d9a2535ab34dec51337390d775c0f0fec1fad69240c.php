<?php

/* PMCharacterBundle:LevelPublic:view.html.twig */
class __TwigTemplate_8f66f32318425a540dae3d9a2535ab34dec51337390d775c0f0fec1fad69240c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("PMCharacterBundle:LevelPublic:layoutPublic.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'h1' => array($this, 'block_h1'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'PM_body' => array($this, 'block_PM_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PMCharacterBundle:LevelPublic:layoutPublic.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "    Niveau ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")), "level", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_h1($context, array $blocks = array())
    {
        // line 10
        echo "    Niveau ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")), "level", array()), "html", null, true);
        echo " :
";
    }

    // line 13
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
    <li class=\"active\">Niveau ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")), "level", array()), "html", null, true);
        echo "</li>
    <li class=\"active\">Voir</li>
";
    }

    // line 19
    public function block_PM_body($context, array $blocks = array())
    {
        // line 20
        echo "<div class=\"row\">
    <section id=\"content\" class=\"col-lg-12\">
        ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 23
            echo "            <div class=\"alert alert-success\">
                ";
            // line 24
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        
        <div class=\"row\">
            <ul>
                <li>Points d'Expériences nécessaires : ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")), "xpPoints", array()), "html", null, true);
        echo "</li>
                <li>Points de Compétences maximum par compétence de classe : ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")), "classSkillModifier", array()), "html", null, true);
        echo "</li>
                <li>Points de Compétences maximum par compétence hors classe : ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")), "ofClassSkillModifier", array()), "html", null, true);
        echo "</li>
                <li>Aquisition d'un don : ";
        // line 33
        if (($this->getAttribute((isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")), "gift", array()) == true)) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</li>
                <li>Aquisition d'un point de caractéristique : ";
        // line 34
        if (($this->getAttribute((isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")), "abilityUp", array()) == true)) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</li>
            </ul>
        </div>
    </section>
</div>
";
    }

    public function getTemplateName()
    {
        return "PMCharacterBundle:LevelPublic:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 34,  116 => 33,  112 => 32,  108 => 31,  104 => 30,  99 => 27,  90 => 24,  87 => 23,  83 => 22,  79 => 20,  76 => 19,  69 => 15,  64 => 14,  61 => 13,  54 => 10,  51 => 9,  42 => 6,  39 => 5,  11 => 3,);
    }
}
