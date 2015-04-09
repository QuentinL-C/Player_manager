<?php

/* PMGameBundle:Game:view.html.twig */
class __TwigTemplate_c5d4d73ec8c3addc8c8f67700802d14716492b4f04b76b9fa803464c5b72e905 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("PMGameBundle:Game:layoutAdmin.html.twig");
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
        return "PMGameBundle:Game:layoutAdmin.html.twig";
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "name", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "name", array()), "html", null, true);
        echo " :
";
    }

    // line 13
    public function block_h1_extend($context, array $blocks = array())
    {
        // line 14
        echo "    <a class=\"btn btn-lg btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_game_administration_edit", array("slug" => $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "slug", array()))), "html", null, true);
        echo "\" >Modifier</a>
    <a class=\"btn btn-lg btn-danger main-JS-delete\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_game_administration_delete", array("slug" => $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "slug", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "name", array()), "html", null, true);
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
        <div class=\"row\">
            <div class=\"col-md-6\">
                ";
        // line 35
        if ( !twig_test_empty($this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "synopsis", array()))) {
            // line 36
            echo "                    <div class=\"well\">
                        <h2>Synopsis</h2>
                        ";
            // line 38
            echo $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "synopsis", array());
            echo "
                    </div>
                ";
        } else {
            // line 41
            echo "                    <div class=\"alert alert-warning\" role=\"alert\">Aucun synopsis fourni pour cette partie.</div>
                ";
        }
        // line 43
        echo "            </div>
            <div class=\"col-md-6\">
                <h2>Informations :</h2>
                <ul>
                    <li>Partie active : ";
        // line 47
        if (($this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "active", array()) == true)) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</li>
                    <li>Import de personnage : ";
        // line 48
        if (($this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "importChara", array()) == true)) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</li>
                    <li>Niveau minimum : ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "lvlMin", array()), "html", null, true);
        echo "</li>
                    <li>Niveau maximum : ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "lvlMax", array()), "html", null, true);
        echo "</li>
                    <li>Facteur de richesse : ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "wealthFactor", array()), "html", null, true);
        echo "</li>
                    <li>Races :</li>
                    <ul>
                        ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "openRaces", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["race"]) {
            // line 55
            echo "                            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_race_administration_view", array("slug" => $this->getAttribute($context["race"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["race"], "name", array()), "html", null, true);
            echo "</a></li>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 57
            echo "                            <li>Aucune race ouverte ...</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['race'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                    </ul>
                    <li>Classes :</li>
                    <ul>
                        ";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "openClasses", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            // line 63
            echo "                            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_classdnd_administration_view", array("slug" => $this->getAttribute($context["class"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["class"], "name", array()), "html", null, true);
            echo "</a></li>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 65
            echo "                            <li>Aucune classe ouverte ...</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                    </ul>
                    <li>Maitres du Jeu :</li>
                    <ul>
                        ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "gameMasters", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 71
            echo "                            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_user_administration_view", array("user_id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</a></li>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 73
            echo "                            <li>Aucun Maitre du Jeu connu ...</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                    </ul>
                </ul>
                <br />
                <h2>Liste des Personnages :</h2>
                <ul>
                    ";
        // line 80
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "characters", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["character"]) {
            // line 81
            echo "                        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_characterused_administration_view", array("slug" => $this->getAttribute($context["character"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["character"], "name", array()), "html", null, true);
            echo "</a></li>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 83
            echo "                        <li>Aucun personnage ne participe à la partie ...</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['character'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                </ul>
            </div>
        </div>
    </section>
</div>
";
    }

    public function getTemplateName()
    {
        return "PMGameBundle:Game:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 85,  269 => 83,  259 => 81,  254 => 80,  247 => 75,  240 => 73,  230 => 71,  225 => 70,  220 => 67,  213 => 65,  203 => 63,  198 => 62,  193 => 59,  186 => 57,  176 => 55,  171 => 54,  165 => 51,  161 => 50,  157 => 49,  149 => 48,  141 => 47,  135 => 43,  131 => 41,  125 => 38,  121 => 36,  119 => 35,  114 => 32,  105 => 29,  102 => 28,  98 => 27,  94 => 25,  91 => 24,  84 => 20,  79 => 19,  76 => 18,  70 => 15,  65 => 14,  62 => 13,  55 => 10,  52 => 9,  43 => 6,  40 => 5,  11 => 3,);
    }
}
