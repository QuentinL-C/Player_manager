<?php

/* PMUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_c085ed2f4fe4bc1804dde1c889dc04b6ebcedc1e0dd431f8d08ab2d517677992 extends Twig_Template
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
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"form-horizontal fos_user_profile_edit\" role=\"form\">
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
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'errors');
            echo "
        ";
            // line 10
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
            echo "
        ";
            // line 11
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'errors');
            echo "
        ";
            // line 12
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'errors');
            echo "
        ";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
            echo "
    </div>
    <br />
    ";
        }
        // line 17
        echo "
    <fieldset>
        <legend>Utilisateur :</legend>

        <div class=\"form-group\">
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label', array("label_attr" => array("class" => "col-md-3 control-label"), "label" => "Nom, Prénom :"));
        echo "
            <div class=\"col-md-3\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("placeholder" => "Nom de l'utilisateur", "class" => "form-control")));
        echo "
            </div>
            <div class=\"col-md-3\">
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'widget', array("attr" => array("placeholder" => "Prénom", "class" => "form-control")));
        echo "
            </div>
        </div>
        
        <div class=\"form-group\">
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-md-3 control-label"), "label" => "Adresse mail :"));
        echo "
            <div class=\"col-md-6\">
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("placeholder" => "mail@exemple.com", "class" => "form-control")));
        echo "
            </div>
        </div>
        
        <div class=\"form-group main-hide-div\">
            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label_attr" => array("class" => "col-md-3 control-label"), "label" => "Nom d'utilisateur :"));
        echo "
            <div class=\"col-md-6\">
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("placeholder" => "Votre email : mail@exemple.com", "class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group main-hide-div\">
            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'label', array("label_attr" => array("class" => "col-md-3 control-label"), "label" => "Mot de passe :"));
        echo "
            <div class=\"col-md-6\">
                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'widget', array("attr" => array("placeholder" => "Mot de Passe", "class" => "form-control")));
        echo "
            </div>
        </div>
    </fieldset>

    <fieldset>
        <legend>Droits :</legend>
        
        <div class=\"form-group\">
            ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Droits :"));
        echo "
            <div class=\"col-sm-6\">
                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
    </fieldset>

    <center><input type=\"submit\" class=\"btn btn-default\" /></center>
    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>";
    }

    public function getTemplateName()
    {
        return "PMUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 65,  139 => 59,  134 => 57,  122 => 48,  117 => 46,  109 => 41,  104 => 39,  96 => 34,  91 => 32,  83 => 27,  77 => 24,  72 => 22,  65 => 17,  58 => 13,  54 => 12,  50 => 11,  46 => 10,  42 => 9,  38 => 8,  34 => 7,  30 => 5,  28 => 4,  22 => 3,  19 => 2,);
    }
}
