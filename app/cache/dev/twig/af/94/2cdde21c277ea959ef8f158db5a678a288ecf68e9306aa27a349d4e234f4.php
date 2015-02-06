<?php

/* PMCharacterBundle:HelpPublic:index.html.twig */
class __TwigTemplate_af942cdde21c277ea959ef8f158db5a678a288ecf68e9306aa27a349d4e234f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("PMCharacterBundle:HelpPublic:layoutPublic.html.twig");
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
        return "PMCharacterBundle:HelpPublic:layoutPublic.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_h1($context, array $blocks = array())
    {
        // line 10
        echo "    Aide de Donjons & Dragons :
";
    }

    // line 13
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
    <li class=\"active\">Accueil</li>
";
    }

    // line 18
    public function block_PM_body($context, array $blocks = array())
    {
        // line 19
        echo "<div class=\"row\">
    <section class=\"col-lg-12\">
        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 22
            echo "            <div class=\"alert col-lg-7 alert-success\">
                ";
            // line 23
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        
        <div class=\"well\">
            <h2>Sections</h2>
            <ul>
                <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("pm_ability_public_homepage");
        echo "\">Les Caractéristiques</a></li>
                <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("pm_alignment_public_homepage");
        echo "\">Les Alignements</a></li>
                <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("pm_classdnd_public_homepage");
        echo "\">Les Classes</a></li>
                <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("pm_language_public_homepage");
        echo "\">Les Langues</a></li>
                <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("pm_level_public_homepage");
        echo "\">Les Niveaux</a></li>
                <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("pm_race_public_homepage");
        echo "\">Les Races</a></li>
                <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("pm_size_public_homepage");
        echo "\">Les Tailles</a></li>
                <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("pm_skill_public_homepage");
        echo "\">Les Compétences</a></li>
            </ul>
        </div>
    </section>
</div>
";
    }

    public function getTemplateName()
    {
        return "PMCharacterBundle:HelpPublic:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 37,  121 => 36,  117 => 35,  113 => 34,  109 => 33,  105 => 32,  101 => 31,  97 => 30,  91 => 26,  82 => 23,  79 => 22,  75 => 21,  71 => 19,  68 => 18,  60 => 14,  57 => 13,  52 => 10,  49 => 9,  42 => 6,  39 => 5,  11 => 3,);
    }
}
