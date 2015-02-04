<?php

/* PMCharacterBundle:Level:view.html.twig */
class __TwigTemplate_c7c99c86a45481a106999eeba83492ed20fa99172f2ff0e870cccf8544f11ca5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("PMCharacterBundle:Level:layoutAdmin.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'h1' => array($this, 'block_h1'),
            'h1_extend' => array($this, 'block_h1_extend'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'PM_body' => array($this, 'block_PM_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PMCharacterBundle:Level:layoutAdmin.html.twig";
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
    public function block_h1_extend($context, array $blocks = array())
    {
        // line 14
        echo "    <a class=\"btn btn-lg btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_level_administration_edit", array("level" => $this->getAttribute((isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")), "level", array()))), "html", null, true);
        echo "\" >Modifier</a>
    <a class=\"btn btn-lg btn-danger main-JS-delete\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_level_administration_delete", array("level" => $this->getAttribute((isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")), "level", array()))), "html", null, true);
        echo "\" >Supprimer</a>
";
    }

    // line 18
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
    <li class=\"active\">Niveau ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")), "level", array()), "html", null, true);
        echo "</li>
    <li class=\"active\">Voir</li>
";
    }

    // line 24
    public function block_PM_body($context, array $blocks = array())
    {
        // line 25
        echo "<div class=\"row\">
    <section id=\"content\" class=\"col-lg-12\">
        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 28
            echo "            <div class=\"alert alert-success\">
                ";
            // line 29
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        
        <div class=\"row\">
            <ul>
                <li>Points d'Expériences nécessaires : ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")), "xpPoints", array()), "html", null, true);
        echo "</li>
                <li>Points de Compétences maximum par compétence de classe : ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")), "classSkillModifier", array()), "html", null, true);
        echo "</li>
                <li>Points de Compétences maximum par compétence hors classe : ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")), "ofClassSkillModifier", array()), "html", null, true);
        echo "</li>
                <li>Aquisition d'un don : ";
        // line 38
        if (($this->getAttribute((isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")), "gift", array()) == true)) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</li>
                <li>Aquisition d'un point de caractéristique : ";
        // line 39
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
        return "PMCharacterBundle:Level:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 39,  131 => 38,  127 => 37,  123 => 36,  119 => 35,  114 => 32,  105 => 29,  102 => 28,  98 => 27,  94 => 25,  91 => 24,  84 => 20,  79 => 19,  76 => 18,  70 => 15,  65 => 14,  62 => 13,  55 => 10,  52 => 9,  43 => 6,  40 => 5,  11 => 3,);
    }
}
