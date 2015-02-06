<?php

/* PMCharacterBundle:CharacterUsedPublic:view.html.twig */
class __TwigTemplate_4c147d3b86c490a9295cd3147da79b36847f323ac93787469b59f30d5be48289 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("PMCharacterBundle:CharacterUsedPublic:layoutPublic.html.twig");
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
        return "PMCharacterBundle:CharacterUsedPublic:layoutPublic.html.twig";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_characterused_public_edit", array("slug" => $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "slug", array()))), "html", null, true);
        echo "\" >Modifier</a>
    <a class=\"btn btn-lg btn-danger main-JS-delete\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_characterused_public_delete", array("slug" => $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "slug", array()))), "html", null, true);
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
    <li class=\"active\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "name", array()), "html", null, true);
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
        <div class=\"jumbotron\">
            <h2>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "name", array()), "html", null, true);
        echo "</h2>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    Race : <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_race_public_view", array("slug" => $this->getAttribute($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "race", array()), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "race", array()), "name", array()), "html", null, true);
        echo "</a><br />
                </div>
                <div class=\"col-md-4\">
                    ";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "classDnDInstances", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["instance"]) {
            // line 41
            echo "                        Classe : <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_classdnd_public_view", array("slug" => $this->getAttribute($this->getAttribute($context["instance"], "classDnD", array()), "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["instance"], "classDnD", array()), "name", array()), "html", null, true);
            echo "</a><br />
                        Niveau : ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["instance"], "level", array()), "level", array()), "html", null, true);
            echo "<br />
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                    Exp. : 0/";
        echo twig_escape_filter($this->env, (isset($context["xpForLevelUp"]) ? $context["xpForLevelUp"] : $this->getContext($context, "xpForLevelUp")), "html", null, true);
        echo "XP
                </div>
                <div class=\"col-md-4\">
                    PV : ";
        // line 47
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
                <li role=\"presentation\"><a href=\"#statistics\" aria-controls=\"statistics\" role=\"tab\" data-toggle=\"tab\">Statistiques</a></li>
            </ul>

            <!-- Tab panes -->
            <div class=\"tab-content\">
                <div role=\"tabpanel\" class=\"tab-pane active\" id=\"home\">
                    ";
        // line 64
        $this->env->loadTemplate("PMCharacterBundle:CharacterUsedPublic:view_home.html.twig")->display($context);
        // line 65
        echo "                </div>
                <div role=\"tabpanel\" class=\"tab-pane\" id=\"rp\">
                    ";
        // line 67
        $this->env->loadTemplate("PMCharacterBundle:CharacterUsedPublic:view_rp.html.twig")->display($context);
        // line 68
        echo "                </div>
                <div role=\"tabpanel\" class=\"tab-pane\" id=\"skills\">
                    ";
        // line 70
        $this->env->loadTemplate("PMCharacterBundle:CharacterUsedPublic:view_skills.html.twig")->display($context);
        // line 71
        echo "                </div>
                <div role=\"tabpanel\" class=\"tab-pane\" id=\"statistics\">
                    ";
        // line 73
        $this->env->loadTemplate("PMCharacterBundle:CharacterUsedPublic:view_statistics.html.twig")->display($context);
        // line 74
        echo "                </div>
            </div>
        </div>
    </section>
</div>
";
    }

    public function getTemplateName()
    {
        return "PMCharacterBundle:CharacterUsedPublic:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 74,  198 => 73,  194 => 71,  192 => 70,  188 => 68,  186 => 67,  182 => 65,  180 => 64,  158 => 47,  151 => 44,  143 => 42,  136 => 41,  132 => 40,  124 => 37,  118 => 34,  114 => 32,  105 => 29,  102 => 28,  98 => 27,  94 => 25,  91 => 24,  84 => 20,  79 => 19,  76 => 18,  70 => 15,  65 => 14,  62 => 13,  55 => 10,  52 => 9,  43 => 6,  40 => 5,  11 => 3,);
    }
}