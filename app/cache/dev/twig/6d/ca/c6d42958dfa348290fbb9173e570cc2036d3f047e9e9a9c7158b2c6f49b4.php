<?php

/* PMGameBundle:GamePublic:view.html.twig */
class __TwigTemplate_6dcac6d42958dfa348290fbb9173e570cc2036d3f047e9e9a9c7158b2c6f49b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("PMGameBundle:GamePublic:layoutPublic.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'h1' => array($this, 'block_h1'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'PM_body' => array($this, 'block_PM_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PMGameBundle:GamePublic:layoutPublic.html.twig";
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
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
    <li class=\"active\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "name", array()), "html", null, true);
        echo "</li>
    <li class=\"active\">Voir</li>
";
    }

    // line 19
    public function block_PM_body($context, array $blocks = array())
    {
        // line 20
        echo "<div class=\"row\">
    <section id=\"content\" class=\"col-lg-12\">
        ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 23
            echo "            <div class=\"alert alert-success\">
                ";
            // line 24
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        
        <div class=\"row\">
            <div class=\"col-md-6\">
                ";
        // line 30
        if ( !twig_test_empty($this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "synopsis", array()))) {
            // line 31
            echo "                    <div class=\"well\">
                        <h2>Synopsis</h2>
                        ";
            // line 33
            echo $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "synopsis", array());
            echo "
                    </div>
                ";
        } else {
            // line 36
            echo "                    <div class=\"alert alert-warning\" role=\"alert\">Aucun synopsis fourni pour cette partie.</div>
                ";
        }
        // line 38
        echo "            </div>
            <div class=\"col-md-6\">
                <h2>Informations :</h2>
                <ul>
                    <li>Partie active : ";
        // line 42
        if (($this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "active", array()) == true)) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</li>
                    <li>Import de personnage : ";
        // line 43
        if (($this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "importChara", array()) == true)) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</li>
                    <li>Niveau minimum : ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "lvlMin", array()), "html", null, true);
        echo "</li>
                    <li>Niveau maximum : ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "lvlMax", array()), "html", null, true);
        echo "</li>
                    <li>Facteur de richesse : ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "wealthFactor", array()), "html", null, true);
        echo "</li>
                    <li>Races :</li>
                    <ul>
                        ";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "openRaces", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["race"]) {
            // line 50
            echo "                            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_race_public_view", array("slug" => $this->getAttribute($context["race"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["race"], "name", array()), "html", null, true);
            echo "</a></li>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            echo "                            <li>Aucune race ouverte ...</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['race'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                    </ul>
                    <li>Classes :</li>
                    <ul>
                        ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "openClasses", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            // line 58
            echo "                            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_classdnd_public_view", array("slug" => $this->getAttribute($context["class"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["class"], "name", array()), "html", null, true);
            echo "</a></li>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 60
            echo "                            <li>Aucune classe ouverte ...</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                    </ul>
                    <li>Maitres du Jeu :</li>
                    <ul>
                        ";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "gameMasters", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 66
            echo "                            <li><a href=\"mailto:";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</a></li>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 68
            echo "                            <li>Aucun Maitre du Jeu connu ...</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                    </ul>
                </ul>
                <br />
                <h2>Liste des Personnages :</h2>
                <ul>
                    ";
        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "characters", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["character"]) {
            // line 76
            echo "                        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_characterused_public_view", array("slug" => $this->getAttribute($context["character"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["character"], "name", array()), "html", null, true);
            echo "</a></li>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 78
            echo "                        <li>Aucun personnage ne participe à la partie ...</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['character'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                </ul>
            </div>
        </div>
    </section>
</div>
";
    }

    public function getTemplateName()
    {
        return "PMGameBundle:GamePublic:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 80,  254 => 78,  244 => 76,  239 => 75,  232 => 70,  225 => 68,  215 => 66,  210 => 65,  205 => 62,  198 => 60,  188 => 58,  183 => 57,  178 => 54,  171 => 52,  161 => 50,  156 => 49,  150 => 46,  146 => 45,  142 => 44,  134 => 43,  126 => 42,  120 => 38,  116 => 36,  110 => 33,  106 => 31,  104 => 30,  99 => 27,  90 => 24,  87 => 23,  83 => 22,  79 => 20,  76 => 19,  69 => 15,  64 => 14,  61 => 13,  54 => 10,  51 => 9,  42 => 6,  39 => 5,  11 => 3,);
    }
}
