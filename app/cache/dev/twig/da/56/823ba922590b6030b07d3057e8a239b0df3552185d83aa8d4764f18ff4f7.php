<?php

/* PMCharacterBundle:Alignment:view.html.twig */
class __TwigTemplate_da56823ba922590b6030b07d3057e8a239b0df3552185d83aa8d4764f18ff4f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("PMCharacterBundle:Alignment:layoutAdmin.html.twig");
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
        return "PMCharacterBundle:Alignment:layoutAdmin.html.twig";
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
    public function block_h1_extend($context, array $blocks = array())
    {
        // line 14
        echo "    <a class=\"btn btn-lg btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_alignment_administration_edit", array("slug" => $this->getAttribute((isset($context["alignment"]) ? $context["alignment"] : $this->getContext($context, "alignment")), "slug", array()))), "html", null, true);
        echo "\" >Modifier</a>
    <a class=\"btn btn-lg btn-danger main-JS-delete\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_alignment_administration_delete", array("slug" => $this->getAttribute((isset($context["alignment"]) ? $context["alignment"] : $this->getContext($context, "alignment")), "slug", array()))), "html", null, true);
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
    <li class=\"active\">Voir</li>
";
    }

    // line 23
    public function block_PM_body($context, array $blocks = array())
    {
        // line 24
        echo "<div class=\"row\">
    <section id=\"content\" class=\"col-lg-12\">
        ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 27
            echo "            <div class=\"alert alert-success\">
                ";
            // line 28
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        
        ";
        // line 32
        if ( !twig_test_empty($this->getAttribute((isset($context["alignment"]) ? $context["alignment"] : $this->getContext($context, "alignment")), "description", array()))) {
            // line 33
            echo "            <div class=\"well\">
                ";
            // line 34
            echo $this->getAttribute((isset($context["alignment"]) ? $context["alignment"] : $this->getContext($context, "alignment")), "description", array());
            echo "
            </div>
        ";
        } else {
            // line 37
            echo "            <div class=\"alert alert-warning\" role=\"alert\">Aucune description fournie pour cet alignement.</div>
        ";
        }
        // line 39
        echo "    </section>
</div>
";
    }

    public function getTemplateName()
    {
        return "PMCharacterBundle:Alignment:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 39,  124 => 37,  118 => 34,  115 => 33,  113 => 32,  110 => 31,  101 => 28,  98 => 27,  94 => 26,  90 => 24,  87 => 23,  79 => 19,  76 => 18,  70 => 15,  65 => 14,  62 => 13,  55 => 10,  52 => 9,  43 => 6,  40 => 5,  11 => 3,);
    }
}
