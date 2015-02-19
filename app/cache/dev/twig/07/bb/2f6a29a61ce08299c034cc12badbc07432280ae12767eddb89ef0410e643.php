<?php

/* PMCharacterBundle:CharacterUsed:edit_content.html.twig */
class __TwigTemplate_07bb2f6a29a61ce08299c034cc12badbc07432280ae12767eddb89ef0410e643 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_characterused_administration_edit", array("slug" => $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "slug", array()))), "html", null, true);
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
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "updateComment", array()), 'errors');
            echo "
        ";
            // line 20
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classDnDInstances", array()), 'errors');
            echo "
    </div>
    <br />
    ";
        }
        // line 24
        echo "
    <fieldset>
        <legend>Utilisateur :</legend>

        <div class=\"form-group\">
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'label', array("label_attr" => array("class" => "col-md-3 control-label"), "label" => "Propriétaire :"));
        echo "
            <div class=\"col-md-9\">
                ";
        // line 31
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
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nom :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                <div class=\"row\">
                    <div class=\"col-md-5\">
                        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("placeholder" => "Nom de votre personnage", "class" => "form-control")));
        echo "
                    </div>
                    <div class=\"col-md-3 control-label\">
                        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "race", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Race :"));
        echo "
                    </div>
                    <div class=\"col-md-4\">
                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "race", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
            </div>
         </div>

        <div class=\"form-group\">
            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classDnDInstances", array()), 'row');
        echo "
        </div>
                   
        <div class=\"form-group\">
            <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"Sa vie, son oeuvre. D'où vient-il ? Quelles sont ses motivations ? C'est ici que ça se passe.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"Histoire\" ></span>
                ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "story", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Histoire :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "story", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "9")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"L'Age de votre personnage est le plus souvent facteur de son niveau de départ. Un personnage niveau 1 aura entre 15 et 20 ans quand un niveau 15, une cinquantaine d'année.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"Age\" ></span>
                ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Age :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>

                    <div class=\"col-md-4 control-label\">
                        ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Genre :"));
        echo "
                    </div>
                    <div class=\"col-md-4\">
                        ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"col-md-3 control-label\">
                ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "height", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Taille :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "height", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>

                    <div class=\"col-md-4 control-label\">
                        ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weight", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Poids :"));
        echo "
                    </div>
                    <div class=\"col-md-4\">
                        ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weight", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"form-group\">
            <div class=\"col-md-3 control-label\">
                ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alignment", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Alignement :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alignment", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>

                    <div class=\"col-md-4 control-label\">
                        ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "languages", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Langues :"));
        echo "
                    </div>
                    <div class=\"col-md-4\">
                        ";
        // line 127
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
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gifts", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Dons :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                <div class=\"row\">
                    <div class=\"col-md-8\">
                        ";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gifts", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
        <hr />
    <div class=\"form-group\">
        ";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "updateComment", array()), 'label', array("label_attr" => array("class" => "col-md-3 control-label"), "label" => "Commentaire :"));
        echo "
        <div class=\"col-md-9\">
            ";
        // line 153
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "updateComment", array()), 'widget', array("attr" => array("placeholder" => "A propos de l'édition", "class" => "form-control")));
        echo "
        </div>
    </div>
        <br />
    ";
        // line 157
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    <center><input type=\"submit\" class=\"btn btn-default\" /></center>
</form>";
    }

    public function getTemplateName()
    {
        return "PMCharacterBundle:CharacterUsed:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 157,  296 => 153,  291 => 151,  280 => 143,  272 => 138,  258 => 127,  252 => 124,  245 => 120,  237 => 115,  226 => 107,  220 => 104,  213 => 100,  205 => 95,  194 => 87,  188 => 84,  181 => 80,  173 => 75,  163 => 68,  157 => 65,  148 => 59,  138 => 52,  132 => 49,  126 => 46,  118 => 41,  105 => 31,  100 => 29,  93 => 24,  86 => 20,  82 => 19,  78 => 18,  74 => 17,  70 => 16,  66 => 15,  62 => 14,  58 => 13,  54 => 12,  50 => 11,  46 => 10,  42 => 9,  38 => 8,  34 => 7,  30 => 5,  28 => 4,  22 => 3,  19 => 2,);
    }
}
