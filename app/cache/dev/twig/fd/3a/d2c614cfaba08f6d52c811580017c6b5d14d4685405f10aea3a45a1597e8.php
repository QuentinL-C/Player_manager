<?php

/* PMMonsterBundle:SpeedSpecial:register_content.html.twig */
class __TwigTemplate_fd3ad2c614cfaba08f6d52c811580017c6b5d14d4685405f10aea3a45a1597e8 extends Twig_Template
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
<form class=\"form-horizontal\" method=\"post\" ";
        // line 3
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
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
            echo "
        ";
            // line 9
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
            echo "
    </div>
    <br />
    ";
        }
        // line 13
        echo "
    <fieldset>
        <legend>Environnement :</legend>

        <div class=\"form-group\">
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label', array("label_attr" => array("class" => "col-md-3 control-label"), "label" => "Nom :"));
        echo "
            <div class=\"col-md-9\">
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("placeholder" => "Nom de votre Mode de Déplacement", "class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
           <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"La description de votre Mode de Déplacement sera utilisée comme texte descriptif de ce dernier sur sa page publique, accessible à tous.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"Description\" ></span>
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Description :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "9")));
        echo "
            </div>
        </div>
    </fieldset>
    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    <center><input type=\"submit\" class=\"btn btn-default\" /></center>
</form>";
    }

    public function getTemplateName()
    {
        return "PMMonsterBundle:SpeedSpecial:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 34,  75 => 30,  69 => 27,  59 => 20,  54 => 18,  47 => 13,  40 => 9,  36 => 8,  32 => 7,  28 => 5,  26 => 4,  22 => 3,  19 => 2,);
    }
}
