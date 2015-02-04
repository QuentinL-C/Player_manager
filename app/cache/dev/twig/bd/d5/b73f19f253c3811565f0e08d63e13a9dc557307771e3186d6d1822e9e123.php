<?php

/* PMCharacterBundle:Level:edit_content.html.twig */
class __TwigTemplate_bdd5b73f19f253c3811565f0e08d63e13a9dc557307771e3186d6d1822e9e123 extends Twig_Template
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
<form class=\"form-horizontal\" method=\"post\" action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_level_administration_edit", array("level" => $this->getAttribute((isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")), "level", array()))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " role=\"form\">
    ";
        // line 4
        if ( !$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 5
            echo "    <div class=\"alert alert-error\">
        <strong>Votre formulaire contient les erreurs suivantes :</strong>
        ";
            // line 7
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
        ";
            // line 8
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "level", array()), 'errors');
            echo "
        ";
            // line 9
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "xpPoints", array()), 'errors');
            echo "
        ";
            // line 10
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classSkillModifier", array()), 'errors');
            echo "
        ";
            // line 11
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ofClassSkillModifier", array()), 'errors');
            echo "
        ";
            // line 12
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gift", array()), 'errors');
            echo "
        ";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "abilityUp", array()), 'errors');
            echo "
        ";
            // line 14
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "updateComment", array()), 'errors');
            echo "
    </div>
    <br />
    ";
        }
        // line 18
        echo "
    <fieldset>
        <legend>Niveau :</legend>

        <div class=\"form-group\">
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "level", array()), 'label', array("label_attr" => array("class" => "col-md-3 control-label"), "label" => "Niveau :"));
        echo "
            <div class=\"col-md-9\">
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "level", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "xpPoints", array()), 'label', array("label_attr" => array("class" => "col-md-3 control-label"), "label" => "Points d'XP nécessaires :"));
        echo "
            <div class=\"col-md-9\">
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "xpPoints", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classSkillModifier", array()), 'label', array("label_attr" => array("class" => "col-md-3 control-label"), "label" => "Limite des Compét. de Classe :"));
        echo "
            <div class=\"col-md-9\">
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classSkillModifier", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ofClassSkillModifier", array()), 'label', array("label_attr" => array("class" => "col-md-3 control-label"), "label" => "Limite des Compét. hors Classe :"));
        echo "
            <div class=\"col-md-9\">
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ofClassSkillModifier", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gift", array()), 'label', array("label_attr" => array("class" => "col-md-3 control-label"), "label" => "Gain de don ?"));
        echo "
            <div class=\"col-md-9\">
                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gift", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "abilityUp", array()), 'label', array("label_attr" => array("class" => "col-md-3 control-label"), "label" => "Gain de caractéristique ?"));
        echo "
            <div class=\"col-md-9\">
                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "abilityUp", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
    </fieldset>
    </fieldset>
        <hr />
    <div class=\"form-group\">
        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "updateComment", array()), 'label', array("label_attr" => array("class" => "col-md-3 control-label"), "label" => "Commentaire :"));
        echo "
        <div class=\"col-md-9\">
            ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "updateComment", array()), 'widget', array("attr" => array("placeholder" => "A propos de l'édition", "class" => "form-control")));
        echo "
        </div>
    </div>
        <br />
    ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    <center><input type=\"submit\" class=\"btn btn-default\" /></center>
</form>";
    }

    public function getTemplateName()
    {
        return "PMCharacterBundle:Level:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 73,  161 => 69,  156 => 67,  146 => 60,  141 => 58,  133 => 53,  128 => 51,  120 => 46,  115 => 44,  107 => 39,  102 => 37,  94 => 32,  89 => 30,  81 => 25,  76 => 23,  69 => 18,  62 => 14,  58 => 13,  54 => 12,  50 => 11,  46 => 10,  42 => 9,  38 => 8,  34 => 7,  30 => 5,  28 => 4,  22 => 3,  19 => 2,);
    }
}
