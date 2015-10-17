<?php

/* PMCharacterBundle:CharacterUsedPublic:view_content.html.twig */
class __TwigTemplate_8a1c90980bab2e13fb7dd8a90c4fa2b7072d12148e21539f555f0dc36b59ed50 extends Twig_Template
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
        echo " 
<div class=\"jumbotron\">
    <h2>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "name", array()), "html", null, true);
        echo "</h2>
    <div class=\"row\">
        <div class=\"col-md-4\">
            Race : <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_race_public_view", array("slug" => $this->getAttribute($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "race", array()), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "race", array()), "name", array()), "html", null, true);
        echo "</a><br />
        </div>
        <div class=\"col-md-4\">
            ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "classDnDInstances", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["instance"]) {
            // line 11
            echo "                Classe : <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_classdnd_public_view", array("slug" => $this->getAttribute($this->getAttribute($context["instance"], "classDnD", array()), "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["instance"], "classDnD", array()), "name", array()), "html", null, true);
            echo "</a><br />
                Niveau : ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["instance"], "level", array()), "level", array()), "html", null, true);
            echo "<br />
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            Exp. : 0/";
        echo twig_escape_filter($this->env, (isset($context["xpForLevelUp"]) ? $context["xpForLevelUp"] : $this->getContext($context, "xpForLevelUp")), "html", null, true);
        echo "XP
        </div>
        <div class=\"col-md-4\">
            PV : ";
        // line 17
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
        // line 34
        $this->env->loadTemplate("PMCharacterBundle:CharacterUsedPublic:view_content_home.html.twig")->display($context);
        // line 35
        echo "        </div>
        <div role=\"tabpanel\" class=\"tab-pane\" id=\"rp\">
            ";
        // line 37
        $this->env->loadTemplate("PMCharacterBundle:CharacterUsedPublic:view_content_rp.html.twig")->display($context);
        // line 38
        echo "        </div>
        <div role=\"tabpanel\" class=\"tab-pane\" id=\"skills\">
            ";
        // line 40
        $this->env->loadTemplate("PMCharacterBundle:CharacterUsedPublic:view_content_skills.html.twig")->display($context);
        // line 41
        echo "        </div>
        <div role=\"tabpanel\" class=\"tab-pane\" id=\"statistics\">
            ";
        // line 43
        $this->env->loadTemplate("PMCharacterBundle:CharacterUsedPublic:view_content_statistics.html.twig")->display($context);
        // line 44
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "PMCharacterBundle:CharacterUsedPublic:view_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 44,  103 => 43,  99 => 41,  97 => 40,  93 => 38,  91 => 37,  87 => 35,  85 => 34,  63 => 17,  56 => 14,  48 => 12,  41 => 11,  37 => 10,  29 => 7,  23 => 4,  19 => 2,);
    }
}
