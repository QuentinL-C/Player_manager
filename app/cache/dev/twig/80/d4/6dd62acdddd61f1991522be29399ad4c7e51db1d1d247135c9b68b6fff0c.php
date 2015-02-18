<?php

/* PMMonsterBundle:Monster:register_content.html.twig */
class __TwigTemplate_80d46dd62acdddd61f1991522be29399ad4c7e51db1d1d247135c9b68b6fff0c extends Twig_Template
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
        ";
            // line 10
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "socialOrganisation", array()), 'errors');
            echo "
        ";
            // line 11
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "powerfullFactor", array()), 'errors');
            echo "
        ";
            // line 12
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "initiative", array()), 'errors');
            echo "
        ";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hpAverage", array()), 'errors');
            echo "
        ";
            // line 14
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bab", array()), 'errors');
            echo "
        ";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ac", array()), 'errors');
            echo "
        ";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "touchAC", array()), 'errors');
            echo "
        ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ffAC", array()), 'errors');
            echo "
        ";
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grappleModifier", array()), 'errors');
            echo "
        ";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "speed", array()), 'errors');
            echo "
        ";
            // line 20
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "spaceOccupied", array()), 'errors');
            echo "
        ";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaLying", array()), 'errors');
            echo "
        ";
            // line 22
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alignment", array()), 'errors');
            echo "
    </div>
    <br />
    ";
        }
        // line 26
        echo "
    <fieldset>
        <legend>Monstre :</legend>

        <div class=\"form-group\">
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label', array("label_attr" => array("class" => "col-md-3 control-label"), "label" => "Nom :"));
        echo "
            <div class=\"col-md-9\">
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("placeholder" => "Nom de votre Monstre", "class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
           <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"La description de votre Monstre sera utilisée comme texte descriptif de ce dernier sur sa page publique, accessible à tous.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"Description\" ></span>
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Description :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "9")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
           <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"L'organisation sociale de votre monstre sera utilisée lors du RP.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"Organisation sociale\" ></span>
                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "socialOrganisation", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Organisation Sociale :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "socialOrganisation", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "9")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
           <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"L'initiative de votre Monstre sera utilisée lors des combats. Elle doit impérativement être spécifiée. Elle vaut par défaut 0.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"Initiative\" ></span>
                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "initiative", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Initiative :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "initiative", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
           <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"Le facteur de puissance de votre Monstre sera utilisée lors des combats. Il est utilisé pour déterminer la puissance d'un monstre face à un groupe de PJ.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"Facteur de Puissance\" ></span>
                ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "powerfullFactor", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Facteur de Puissance :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "powerfullFactor", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
           <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"Nombre de Points de Vie moyen d'un monstre\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"Moyenne de Points de Vie\" ></span>
                ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hpAverage", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Points de Vie Moyen :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hpAverage", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
           <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"Le Bonus de Base à l'Attaque de votre Monstre sera utilisé lors des combats. Il doit impérativement être spécifié. Il vaut par défaut 0.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"Bonus de Base à l'Attaque\" ></span>
                ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bab", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Bonus de Base à l'Attaque :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bab", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
           <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"Le Modificateur de Lutte sera utilisé lors des combats. Il doit impérativement être spécifié. Il vaut par défaut 0.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"Modificateur de Lutte\" ></span>
                ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grappleModifier", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Modificateur de Lutte :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grappleModifier", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
           <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"La Classe d'Armure de votre Monstre sera utilisée lors des combats. Elle doit impérativement être spécifiée. Elle vaut par défaut 0.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"Class d'Armure\" ></span>
                ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ac", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Classe d'Armure :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ac", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
           <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"La Classe d'Armure de Contact de votre Monstre sera utilisée lors des combats. Elle doit impérativement être spécifiée. Elle vaut par défaut 0.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"CA de Contact\" ></span>
                ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "touchAC", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Classe d'Armure de Contact :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "touchAC", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
           <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"La Classe d'Armure de prise au dépourvu de votre Monstre sera utilisée lors des combats. Elle doit impérativement être spécifiée. Elle vaut par défaut 0.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"CA de Prise au Dépourvu\" ></span>
                ";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ffAC", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "CA de Prise au Dépourvu :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ffAC", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
           <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"La Vitesse de Déplacement au Sol de votre Monstre sera utilisée lors des combats. Elle doit impérativement être spécifiée. Elle vaut par défaut 0.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"Vitesse de Déplacement au sol\" ></span>
                ";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "speed", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Vitesse de déplacement au sol :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "speed", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
           <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"L'espace occupé de votre Monstre sera utilisé lors des combats. Il doit impérativement être spécifié. Il vaut par défaut 0.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"CA de Prise au Dépourvu\" ></span>
                ";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "spaceOccupied", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Espace occupé :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 153
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "spaceOccupied", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
           <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"La Zone de Danger de votre Monstre sera utilisée lors des combats. Elle doit impérativement être spécifiée. Elle vaut par défaut 0.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"CA de Prise au Dépourvu\" ></span>
                ";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaLying", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Zone de danger :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 163
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaLying", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
           <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"L'Alignement de votre personnage aura des répercussions sur les cibles ou le RP de votre monstre.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"Alignement\" ></span>
                ";
        // line 170
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alignment", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Alignement :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 173
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alignment", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
    </fieldset>
    ";
        // line 177
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    <center><input type=\"submit\" class=\"btn btn-default\" /></center>
</form>";
    }

    public function getTemplateName()
    {
        return "PMMonsterBundle:Monster:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 177,  335 => 173,  329 => 170,  319 => 163,  313 => 160,  303 => 153,  297 => 150,  287 => 143,  281 => 140,  271 => 133,  265 => 130,  255 => 123,  249 => 120,  239 => 113,  233 => 110,  223 => 103,  217 => 100,  207 => 93,  201 => 90,  191 => 83,  185 => 80,  175 => 73,  169 => 70,  159 => 63,  153 => 60,  143 => 53,  137 => 50,  127 => 43,  121 => 40,  111 => 33,  106 => 31,  99 => 26,  92 => 22,  88 => 21,  84 => 20,  80 => 19,  76 => 18,  72 => 17,  68 => 16,  64 => 15,  60 => 14,  56 => 13,  52 => 12,  48 => 11,  44 => 10,  40 => 9,  36 => 8,  32 => 7,  28 => 5,  26 => 4,  22 => 3,  19 => 2,);
    }
}
