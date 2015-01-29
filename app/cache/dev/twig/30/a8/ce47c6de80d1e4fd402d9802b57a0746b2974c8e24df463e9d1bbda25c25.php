<?php

/* PMCharacterBundle:CharacterUsed:view.html.twig */
class __TwigTemplate_30a8ce47c6de80d1e4fd402d9802b57a0746b2974c8e24df463e9d1bbda25c25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("PMCharacterBundle:CharacterUsed:layoutAdmin.html.twig");
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
        return "PMCharacterBundle:CharacterUsed:layoutAdmin.html.twig";
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "name", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "name", array()), "html", null, true);
        echo " :
";
    }

    // line 13
    public function block_h1_extend($context, array $blocks = array())
    {
        // line 14
        echo "    <a class=\"btn btn-lg btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_characterused_administration_edit", array("slug" => $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "slug", array()))), "html", null, true);
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
    <li class=\"active\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "name", array()), "html", null, true);
        echo "</li>
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
        <div class=\"jumbotron\">
            <h2>Présentation</h2>
            <div class=\"row\">
                <div class=\"col-md-3\">
                    ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "name", array()), "html", null, true);
        echo "<br />
                    <small>(";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "user", array()), "username", array()), "html", null, true);
        echo ")</small>
                </div>
                <div class=\"col-md-3\">
                    Race : <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_race_administration_view", array("slug" => $this->getAttribute($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "race", array()), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "race", array()), "name", array()), "html", null, true);
        echo "</a><br />
                </div>
                <div class=\"col-md-3\">
                    ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "classDnDInstances", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["instance"]) {
            // line 44
            echo "                        Classe : <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_classdnd_administration_view", array("slug" => $this->getAttribute($this->getAttribute($context["instance"], "classDnD", array()), "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["instance"], "classDnD", array()), "name", array()), "html", null, true);
            echo "</a><br />
                        Niveau : ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "level", array()), "html", null, true);
            echo "<br />
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                    Exp. : 0XP
                </div>
                <div class=\"col-md-3\">
                    PV : ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "hpCurrent", array()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "hpMax", array()), "html", null, true);
        echo "
                </div>
            </div>
        </div>
        
        <div role=\"tabpanel\">
            <!-- Nav tabs -->
            <ul class=\"nav nav-tabs\" role=\"tablist\" id=\"UserTab\">
                <li role=\"presentation\" class=\"active\"><a href=\"#home\" aria-controls=\"home\" role=\"tab\" data-toggle=\"tab\">Présentation</a></li>
                <li role=\"presentation\"><a href=\"#rp\" aria-controls=\"rp\" role=\"tab\" data-toggle=\"tab\">Role Play</a></li>
                <li role=\"presentation\"><a href=\"#skills\" aria-controls=\"skills\" role=\"tab\" data-toggle=\"tab\">Compétences</a></li>
            </ul>

            <!-- Tab panes -->
            <div class=\"tab-content\">
                <div role=\"tabpanel\" class=\"tab-pane active\" id=\"home\">
                    ";
        // line 66
        $this->env->loadTemplate("PMCharacterBundle:CharacterUsed:view_home.html.twig")->display($context);
        // line 67
        echo "                </div>
                <div role=\"tabpanel\" class=\"tab-pane\" id=\"rp\">
                    ";
        // line 69
        $this->env->loadTemplate("PMCharacterBundle:CharacterUsed:view_rp.html.twig")->display($context);
        // line 70
        echo "                </div>
                <div role=\"tabpanel\" class=\"tab-pane\" id=\"skills\">
                    ";
        // line 72
        $this->env->loadTemplate("PMCharacterBundle:CharacterUsed:view_rp.html.twig")->display($context);
        // line 73
        echo "                </div>
            </div>
        </div>
    </section>
</div>
";
    }

    public function getTemplateName()
    {
        return "PMCharacterBundle:CharacterUsed:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 73,  192 => 72,  188 => 70,  186 => 69,  182 => 67,  180 => 66,  159 => 50,  154 => 47,  146 => 45,  139 => 44,  135 => 43,  127 => 40,  121 => 37,  117 => 36,  110 => 31,  101 => 28,  98 => 27,  94 => 26,  90 => 24,  87 => 23,  80 => 19,  75 => 18,  72 => 17,  65 => 14,  62 => 13,  55 => 10,  52 => 9,  43 => 6,  40 => 5,  11 => 3,);
    }
}
