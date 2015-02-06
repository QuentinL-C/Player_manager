<?php

/* PMCharacterBundle:AlignmentPublic:view.html.twig */
class __TwigTemplate_8143be87c7a4ee6c59b89972bdbf2d57dd83dcf96cbdec16877d9343d4a292fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("PMCharacterBundle:AlignmentPublic:layoutPublic.html.twig");
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
        return "PMCharacterBundle:AlignmentPublic:layoutPublic.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alignment"]) ? $context["alignment"] : $this->getContext($context, "alignment")), "name", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_h1($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alignment"]) ? $context["alignment"] : $this->getContext($context, "alignment")), "name", array()), "html", null, true);
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
    <li class=\"active\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alignment"]) ? $context["alignment"] : $this->getContext($context, "alignment")), "name", array()), "html", null, true);
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
        ";
        // line 28
        if ( !twig_test_empty($this->getAttribute((isset($context["alignment"]) ? $context["alignment"] : $this->getContext($context, "alignment")), "description", array()))) {
            // line 29
            echo "            <div class=\"well\">
                ";
            // line 30
            echo $this->getAttribute((isset($context["alignment"]) ? $context["alignment"] : $this->getContext($context, "alignment")), "description", array());
            echo "
            </div>
        ";
        } else {
            // line 33
            echo "            <div class=\"alert alert-warning\" role=\"alert\">Aucune description fournie pour cet alignement.</div>
        ";
        }
        // line 35
        echo "    </section>
</div>
";
    }

    public function getTemplateName()
    {
        return "PMCharacterBundle:AlignmentPublic:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 35,  113 => 33,  107 => 30,  104 => 29,  102 => 28,  99 => 27,  90 => 24,  87 => 23,  83 => 22,  79 => 20,  76 => 19,  69 => 15,  64 => 14,  61 => 13,  54 => 10,  51 => 9,  42 => 6,  39 => 5,  11 => 3,);
    }
}
