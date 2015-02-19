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
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hpForm", array()), 'errors');
            echo "
        ";
            // line 14
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hpAverage", array()), 'errors');
            echo "
        ";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bab", array()), 'errors');
            echo "
        ";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ac", array()), 'errors');
            echo "
        ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "touchAC", array()), 'errors');
            echo "
        ";
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ffAC", array()), 'errors');
            echo "
        ";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grappleModifier", array()), 'errors');
            echo "
        ";
            // line 20
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "speed", array()), 'errors');
            echo "
        ";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "spaceOccupied", array()), 'errors');
            echo "
        ";
            // line 22
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaLying", array()), 'errors');
            echo "
        ";
            // line 23
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alignment", array()), 'errors');
            echo "
        ";
            // line 24
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "languages", array()), 'errors');
            echo "
        ";
            // line 25
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gifts", array()), 'errors');
            echo "
        ";
            // line 26
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "environment", array()), 'errors');
            echo "
    </div>
    <br />
    ";
        }
        // line 30
        echo "
    <fieldset>
        <legend>Monstre :</legend>

        <div class=\"form-group\">
            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label', array("label_attr" => array("class" => "col-md-3 control-label"), "label" => "Nom :"));
        echo "
            <div class=\"col-md-9\">
                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("placeholder" => "Nom de votre Monstre", "class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
           <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"La description de votre Monstre sera utilisée comme texte descriptif de ce dernier sur sa page publique, accessible à tous.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"Description\" ></span>
                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Description :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "9")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
           <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"L'organisation sociale de votre monstre sera utilisée lors du RP.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"Organisation sociale\" ></span>
                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "socialOrganisation", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Organisation Sociale :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "socialOrganisation", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "9")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
           <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"L'initiative de votre Monstre sera utilisée lors des combats. Elle doit impérativement être spécifiée. Elle vaut par défaut 0.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"Initiative\" ></span>
                ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "initiative", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Initiative :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "initiative", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
           <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"Le facteur de puissance de votre Monstre sera utilisée lors des combats. Il est utilisé pour déterminer la puissance d'un monstre face à un groupe de PJ.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"Facteur de Puissance\" ></span>
                ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "powerfullFactor", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Facteur de Puissance :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "powerfullFactor", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
           <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"Cette formule sera utilisée durant les parties pour générer les points de vie des monstres.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"Formule de Points de Vie\" ></span>
                ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hpForm", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Formule de PV :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hpForm", array()), 'widget');
        echo "
            </div>
        </div>

        <div class=\"form-group\">
           <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"Nombre de Points de Vie moyen d'un monstre\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"Moyenne de Points de Vie\" ></span>
                ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hpAverage", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Points de Vie Moyen :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hpAverage", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
           <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"Le Bonus de Base à l'Attaque de votre Monstre sera utilisé lors des combats. Il doit impérativement être spécifié. Il vaut par défaut 0.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"Bonus de Base à l'Attaque\" ></span>
                ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bab", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Bonus de Base à l'Attaque :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bab", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
           <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"Le Modificateur de Lutte sera utilisé lors des combats. Il doit impérativement être spécifié. Il vaut par défaut 0.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"Modificateur de Lutte\" ></span>
                ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grappleModifier", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Modificateur de Lutte :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grappleModifier", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
           <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"La Classe d'Armure de votre Monstre sera utilisée lors des combats. Elle doit impérativement être spécifiée. Elle vaut par défaut 0.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"Class d'Armure\" ></span>
                ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ac", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Classe d'Armure :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ac", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
           <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"La Classe d'Armure de Contact de votre Monstre sera utilisée lors des combats. Elle doit impérativement être spécifiée. Elle vaut par défaut 0.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"CA de Contact\" ></span>
                ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "touchAC", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Classe d'Armure de Contact :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "touchAC", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
           <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"La Classe d'Armure de prise au dépourvu de votre Monstre sera utilisée lors des combats. Elle doit impérativement être spécifiée. Elle vaut par défaut 0.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"CA de Prise au Dépourvu\" ></span>
                ";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ffAC", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "CA de Prise au Dépourvu :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ffAC", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
           <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"La Vitesse de Déplacement au Sol de votre Monstre sera utilisée lors des combats. Elle doit impérativement être spécifiée. Elle vaut par défaut 0.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"Vitesse de Déplacement au sol\" ></span>
                ";
        // line 154
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "speed", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Vitesse de déplacement au sol :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 157
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "speed", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
           <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"L'espace occupé de votre Monstre sera utilisé lors des combats. Il doit impérativement être spécifié. Il vaut par défaut 0.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"CA de Prise au Dépourvu\" ></span>
                ";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "spaceOccupied", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Espace occupé :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "spaceOccupied", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
           <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"La Zone de Danger de votre Monstre sera utilisée lors des combats. Elle doit impérativement être spécifiée. Elle vaut par défaut 0.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"CA de Prise au Dépourvu\" ></span>
                ";
        // line 174
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaLying", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Zone de danger :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 177
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaLying", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
           <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"L'Alignement de votre personnage aura des répercussions sur les cibles ou le RP de votre monstre.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"Alignement\" ></span>
                ";
        // line 184
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alignment", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Alignement :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 187
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alignment", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
           <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"Les langues connues par votre monstre seront utilisées lors du RP.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"Langues\" ></span>
                ";
        // line 194
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "languages", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Langues parlées :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 197
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "languages", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
           <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"Liste des dons maitrisés par votre monstre.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"Dons\" ></span>
                ";
        // line 204
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gifts", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Dons :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 207
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gifts", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
           <div class=\"col-md-3 control-label\">
                <span class=\"glyphicon glyphicon-question-sign\" style=\"cursor: pointer;\" data-content=\"L'environnement de votre monstre sera utilisé lors du RP.\" data-toggle=\"popover\" data-container=\"body\" data-original-title=\"Environnement\" ></span>
                ";
        // line 214
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "environment", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Environnement :"));
        echo "
            </div>
            <div class=\"col-md-9\">
                ";
        // line 217
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "environment", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
    </fieldset>
    ";
        // line 221
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
        return array (  422 => 221,  415 => 217,  409 => 214,  399 => 207,  393 => 204,  383 => 197,  377 => 194,  367 => 187,  361 => 184,  351 => 177,  345 => 174,  335 => 167,  329 => 164,  319 => 157,  313 => 154,  303 => 147,  297 => 144,  287 => 137,  281 => 134,  271 => 127,  265 => 124,  255 => 117,  249 => 114,  239 => 107,  233 => 104,  223 => 97,  217 => 94,  207 => 87,  201 => 84,  191 => 77,  185 => 74,  175 => 67,  169 => 64,  159 => 57,  153 => 54,  143 => 47,  137 => 44,  127 => 37,  122 => 35,  115 => 30,  108 => 26,  104 => 25,  100 => 24,  96 => 23,  92 => 22,  88 => 21,  84 => 20,  80 => 19,  76 => 18,  72 => 17,  68 => 16,  64 => 15,  60 => 14,  56 => 13,  52 => 12,  48 => 11,  44 => 10,  40 => 9,  36 => 8,  32 => 7,  28 => 5,  26 => 4,  22 => 3,  19 => 2,);
    }
}
