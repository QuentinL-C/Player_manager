<?php

/* PMGameBundle:GamePublic:viewMJ.html.twig */
class __TwigTemplate_0e94f690fe3bd696b95c5064b3c1cacabe9328aa990103dd33aba27a500a8f5a extends Twig_Template
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
<div class=\"row\">
    <div class=\"col-md-6\">
        ";
        // line 5
        if ( !twig_test_empty($this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "synopsis", array()))) {
            // line 6
            echo "            <div class=\"well\">
                <h2>Synopsis</h2>
                ";
            // line 8
            echo $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "synopsis", array());
            echo "
            </div>
        ";
        } else {
            // line 11
            echo "            <div class=\"alert alert-warning\" role=\"alert\">Aucun synopsis fourni pour cette partie.</div>
        ";
        }
        // line 13
        echo "        <br />
        <h2>Avancé de la partie :</h2>
        <p>A définir</p>
    </div>
    <div class=\"col-md-6\">
        <h2>Paramètres :</h2>
        <ul>
            <li>Partie active : ";
        // line 20
        if (($this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "active", array()) == true)) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</li>
            <li>Import de personnage : ";
        // line 21
        if (($this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "importChara", array()) == true)) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</li>
            <li>Niveau minimum : ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "lvlMin", array()), "html", null, true);
        echo "</li>
            <li>Niveau maximum : ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "lvlMax", array()), "html", null, true);
        echo "</li>
            <li>Facteur de richesse : ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "wealthFactor", array()), "html", null, true);
        echo "</li>
            <li>Races :</li>
            <ul>
                ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "openRaces", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["race"]) {
            // line 28
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_race_public_view", array("slug" => $this->getAttribute($context["race"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["race"], "name", array()), "html", null, true);
            echo "</a></li>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "                    <li>Aucune race ouverte ...</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['race'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </ul>
            <li>Classes :</li>
            <ul>
                ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "openClasses", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            // line 36
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_classdnd_public_view", array("slug" => $this->getAttribute($context["class"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["class"], "name", array()), "html", null, true);
            echo "</a></li>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "                    <li>Aucune classe ouverte ...</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </ul>
            <li>Maitres du Jeu :</li>
            <ul>
                ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "gameMasters", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 44
            echo "                    <li><a href=\"mailto:";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</a></li>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            echo "                    <li>Aucun Maitre du Jeu connu ...</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            </ul>
        </ul>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-lg-12\">
        <h2>Personnages :</h2>
        
        <div role=\"tabpanel\">
            <!-- Nav tabs -->
            <ul class=\"nav nav-tabs\" role=\"tablist\" id=\"UserTab\">
                ";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "characters", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["character"]) {
            // line 60
            echo "                    <li role=\"presentation\" class=\"active\"><a href=\"#";
            echo twig_escape_filter($this->env, $this->getAttribute($context["character"], "slug", array()), "html", null, true);
            echo "\" aria-controls=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["character"], "slug", array()), "html", null, true);
            echo "\" role=\"tab\" data-toggle=\"tab\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["character"], "name", array()), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['character'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            </ul>

            <!-- Tab panes -->
            <div class=\"tab-content\">
                ";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "characters", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["character"]) {
            // line 67
            echo "                    <div role=\"tabpanel\" class=\"tab-pane active\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["character"], "slug", array()), "html", null, true);
            echo "\">
                        <br />
                        ";
            // line 69
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PMCharacterBundle:CharacterUsedPublic:viewContent", array("slug" => $this->getAttribute($context["character"], "slug", array()))));
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['character'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "PMGameBundle:GamePublic:viewMJ.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 72,  201 => 69,  195 => 67,  191 => 66,  185 => 62,  172 => 60,  168 => 59,  155 => 48,  148 => 46,  138 => 44,  133 => 43,  128 => 40,  121 => 38,  111 => 36,  106 => 35,  101 => 32,  94 => 30,  84 => 28,  79 => 27,  73 => 24,  69 => 23,  65 => 22,  57 => 21,  49 => 20,  40 => 13,  36 => 11,  30 => 8,  26 => 6,  24 => 5,  19 => 2,);
    }
}
