<?php

/* PMCharacterBundle:CharacterUsed:register_content.html.twig */
class __TwigTemplate_7054c1221d4ad57fd79678de5cf75e0afa42550720be6970bf4a287ddc01b173 extends Twig_Template
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
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'errors');
            echo "
        ";
            // line 9
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
            echo "
        ";
            // line 10
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "story", array()), 'errors');
            echo "
        ";
            // line 11
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'errors');
            echo "
        ";
            // line 12
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'errors');
            echo "
        ";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "height", array()), 'errors');
            echo "
        ";
            // line 14
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weight", array()), 'errors');
            echo "
        ";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alignment", array()), 'errors');
            echo "
        ";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "languages", array()), 'errors');
            echo "
        ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gifts", array()), 'errors');
            echo "
        ";
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "race", array()), 'errors');
            echo "
        ";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classDnDInstances", array()), 'errors');
            echo "
    </div>
    <br />
    ";
        }
        // line 23
        echo "
    <fieldset>
        <legend>Utilisateur :</legend>

        <div class=\"form-group\">
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'label', array("label_attr" => array("class" => "col-md-3 control-label"), "label" => "Propriétaire :"));
        echo "
            <div class=\"col-md-9\">
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
    </fieldset>
            
    <fieldset>
        <legend>Personnage :</legend>

        <div class=\"form-group\">
            <div class=\"col-md-3 control-label\">
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nom :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                <div class=\"row\">
                    <div class=\"col-md-5\">
                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("placeholder" => "Nom de votre personnage", "class" => "form-control")));
        echo "
                    </div>
                    <div class=\"col-md-3 control-label\">
                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "race", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Race :"));
        echo "
                    </div>
                    <div class=\"col-md-4\">
                        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "race", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
            </div>
         </div>

        <div class=\"form-group\">
            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classDnDInstances", array()), 'row');
        echo "
        </div>
                   
        <div class=\"form-group\">
            <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"Sa vie, son oeuvre. D'où vient-il ? Quelles sont ses motivations ? C'est ici que ça se passe.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"Histoire\" ></span>
                ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "story", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Histoire :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "story", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "9")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"L'Age de votre personnage est le plus souvent facteur de son niveau de départ. Un personnage niveau 1 aura entre 15 et 20 ans quand un niveau 15, une cinquantaine d'année.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"Age\" ></span>
                ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Age :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>

                    <div class=\"col-md-4 control-label\">
                        ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Genre :"));
        echo "
                    </div>
                    <div class=\"col-md-4\">
                        ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"col-md-3 control-label\">
                ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "height", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Taille :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "height", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>

                    <div class=\"col-md-4 control-label\">
                        ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weight", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Poids :"));
        echo "
                    </div>
                    <div class=\"col-md-4\">
                        ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weight", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
            </div>
        </div>
            
        <div class=\"form-group\">
            <div class=\"col-md-3 control-label\">
                ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alignment", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Alignement :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alignment", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>

                    <div class=\"col-md-4 control-label\">
                        ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "languages", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Langues :"));
        echo "
                    </div>
                    <div class=\"col-md-4\">
                        ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "languages", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
            
    <fieldset>
        <legend>Dons :</legend>        
        <div class=\"form-group\">
            <div class=\"col-md-3 control-label\">
                ";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gifts", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Dons :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                <div class=\"row\">
                    <div class=\"col-md-8\">
                        ";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gifts", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
    ";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    <center><input type=\"submit\" class=\"btn btn-default\" /></center>
</form>";
    }

    public function getTemplateName()
    {
        return "PMCharacterBundle:CharacterUsed:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 148,  274 => 142,  266 => 137,  252 => 126,  246 => 123,  239 => 119,  231 => 114,  220 => 106,  214 => 103,  207 => 99,  199 => 94,  188 => 86,  182 => 83,  175 => 79,  167 => 74,  157 => 67,  151 => 64,  142 => 58,  132 => 51,  126 => 48,  120 => 45,  112 => 40,  99 => 30,  94 => 28,  87 => 23,  80 => 19,  76 => 18,  72 => 17,  68 => 16,  64 => 15,  60 => 14,  56 => 13,  52 => 12,  48 => 11,  44 => 10,  40 => 9,  36 => 8,  32 => 7,  28 => 5,  26 => 4,  22 => 3,  19 => 2,);
    }
}
