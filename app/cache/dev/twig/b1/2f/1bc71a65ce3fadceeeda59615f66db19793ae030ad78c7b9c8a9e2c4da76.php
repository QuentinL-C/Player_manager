<?php

/* PMCharacterBundle:Race:view.html.twig */
class __TwigTemplate_b12f1bc71a65ce3fadceeeda59615f66db19793ae030ad78c7b9c8a9e2c4da76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("PMCharacterBundle:Race:layoutAdmin.html.twig");
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
        return "PMCharacterBundle:Race:layoutAdmin.html.twig";
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "name", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "name", array()), "html", null, true);
        echo " :
";
    }

    // line 13
    public function block_h1_extend($context, array $blocks = array())
    {
        // line 14
        echo "    <a class=\"btn btn-lg btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_race_edit", array("slug" => $this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "slug", array()))), "html", null, true);
        echo "\" >Modifier</a>
";
    }

    // line 17
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
    <li class=\"active\">Voir</li>
";
    }

    // line 22
    public function block_PM_body($context, array $blocks = array())
    {
        // line 23
        echo "<div class=\"row\">
    <section id=\"content\" class=\"col-lg-12\">
        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 26
            echo "            <div class=\"alert alert-success\">
                ";
            // line 27
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h2>Informations sur la Race</h2>
                
                <ul>
                    <li>Taille : ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "size", array()), "html", null, true);
        echo "</li>
                </ul>
            </div>
            <div class=\"col-md-6\">
                <h2>Texte descriptif</h2>
                ";
        // line 41
        if ( !twig_test_empty($this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "description", array()))) {
            // line 42
            echo "                    <div class=\"well\">
                        ";
            // line 43
            echo $this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "description", array());
            echo "
                    </div>
                ";
        } else {
            // line 46
            echo "                    <div class=\"alert alert-warning\" role=\"alert\">Aucune description fournie pour cette race.</div>
                ";
        }
        // line 48
        echo "                
            </div>
        </div>
    </section>
</div>
";
    }

    public function getTemplateName()
    {
        return "PMCharacterBundle:Race:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 48,  133 => 46,  127 => 43,  124 => 42,  122 => 41,  114 => 36,  106 => 30,  97 => 27,  94 => 26,  90 => 25,  86 => 23,  83 => 22,  75 => 18,  72 => 17,  65 => 14,  62 => 13,  55 => 10,  52 => 9,  43 => 6,  40 => 5,  11 => 3,);
    }
}
