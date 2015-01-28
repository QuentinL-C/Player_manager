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
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "level", array()), 'errors');
            echo "
        ";
            // line 11
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "story", array()), 'errors');
            echo "
        ";
            // line 12
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'errors');
            echo "
        ";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'errors');
            echo "
        ";
            // line 14
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "height", array()), 'errors');
            echo "
        ";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weight", array()), 'errors');
            echo "
        ";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alignment", array()), 'errors');
            echo "
        ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classDnD", array()), 'errors');
            echo "
        ";
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "race", array()), 'errors');
            echo "
        ";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "updateComment", array()), 'errors');
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
                    <div class=\"col-md-4 control-label\">
                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "level", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Niveau de départ :"));
        echo "
                    </div>
                    <div class=\"col-md-3\">
                        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "level", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                </div>
        </div>

        <div class=\"form-group\">
            <div class=\"col-md-3 control-label\">
                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classDnD", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Classe :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classDnD", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>

                    <div class=\"col-md-4 control-label\">
                        ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "race", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Race :"));
        echo "
                    </div>
                    <div class=\"col-md-4\">
                        ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "race", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
            </div>
        </div>
                   
        <div class=\"form-group\">
            <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"Sa vie, son oeuvre. D'où vient-il ? Quelles sont ses motivations ? C'est ici que ça se passe.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"Histoire\" ></span>
                ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "story", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Histoire :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "story", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "9")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"L'Age de votre personnage est le plus souvent facteur de son niveau de départ. Un personnage niveau 1 aura entre 15 et 20 ans quand un niveau 15, une cinquantaine d'année.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"Age\" ></span>
                ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Age :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>

                    <div class=\"col-md-4 control-label\">
                        ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Genre :"));
        echo "
                    </div>
                    <div class=\"col-md-4\">
                        ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"col-md-3 control-label\">
                ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "height", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Taille :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "height", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>

                    <div class=\"col-md-4 control-label\">
                        ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weight", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Poids :"));
        echo "
                    </div>
                    <div class=\"col-md-4\">
                        ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weight", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
            </div>
        </div>
            
        <div class=\"form-group\">
            ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alignment", array()), 'label', array("label_attr" => array("class" => "col-md-3 control-label"), "label" => "Alignement :"));
        echo "
            <div class=\"col-md-3\">
                ";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alignment", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
    </fieldset>
        <hr />
    <div class=\"form-group\">
        ";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "updateComment", array()), 'label', array("label_attr" => array("class" => "col-md-3 control-label"), "label" => "Commentaire :"));
        echo "
        <div class=\"col-md-9\">
            ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "updateComment", array()), 'widget', array("attr" => array("placeholder" => "A propos de l'édition", "class" => "form-control")));
        echo "
        </div>
    </div>
        <br />
    ";
        // line 143
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
        return array (  283 => 143,  276 => 139,  271 => 137,  262 => 131,  257 => 129,  247 => 122,  241 => 119,  234 => 115,  226 => 110,  215 => 102,  209 => 99,  202 => 95,  194 => 90,  184 => 83,  178 => 80,  166 => 71,  160 => 68,  153 => 64,  145 => 59,  134 => 51,  128 => 48,  122 => 45,  114 => 40,  101 => 30,  96 => 28,  89 => 23,  82 => 19,  78 => 18,  74 => 17,  70 => 16,  66 => 15,  62 => 14,  58 => 13,  54 => 12,  50 => 11,  46 => 10,  42 => 9,  38 => 8,  34 => 7,  30 => 5,  28 => 4,  22 => 3,  19 => 2,);
    }
}
