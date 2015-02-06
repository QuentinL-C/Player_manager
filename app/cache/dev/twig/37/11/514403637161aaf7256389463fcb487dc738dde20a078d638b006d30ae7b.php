<?php

/* PMCharacterBundle:RacePublic:view.html.twig */
class __TwigTemplate_3711514403637161aaf7256389463fcb487dc738dde20a078d638b006d30ae7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("PMCharacterBundle:RacePublic:layoutPublic.html.twig");
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
        return "PMCharacterBundle:RacePublic:layoutPublic.html.twig";
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "name", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "name", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "name", array()), "html", null, true);
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
                <h2>Informations sur la Race</h2>
                
                <ul>
                    <li>Taille : <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_size_public_view", array("slug" => $this->getAttribute($this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "size", array()), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "size", array()), "name", array()), "html", null, true);
        echo "</a></li>
                    <li>Vitesse : ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "speed", array()), "html", null, true);
        echo "</li>
                    <li>Classe de Prédilection : ";
        // line 35
        if ( !(null === $this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "predilectionClass", array()))) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_classdnd_public_view", array("slug" => $this->getAttribute($this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "predilectionClass", array()), "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "predilectionClass", array()), "name", array()), "html", null, true);
            echo "</a>";
        } else {
            echo "Pas de classe de prédilection renseignée.";
        }
        echo "</li>
                    <li>Modificateur de Points de Compétences : ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "skillModifier", array()), "html", null, true);
        echo "</li>
                    <li>Modificateur de Points de Vie : ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "hpModifier", array()), "html", null, true);
        echo "</li>
                    <li>Langues :</li>
                    <ul>
                        ";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "languages", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 41
            echo "                            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_language_public_view", array("slug" => $this->getAttribute($context["language"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "name", array()), "html", null, true);
            echo "</a></li>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 43
            echo "                            <li>Aucune langue parlée</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                    </ul>
                </ul>
            </div>
            <div class=\"col-md-6\">
                <h2>Texte descriptif</h2>
                ";
        // line 50
        if ( !twig_test_empty($this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "description", array()))) {
            // line 51
            echo "                    <div class=\"well\">
                        ";
            // line 52
            echo $this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "description", array());
            echo "
                    </div>
                ";
        } else {
            // line 55
            echo "                    <div class=\"alert alert-warning\" role=\"alert\">Aucune description fournie pour cette race.</div>
                ";
        }
        // line 57
        echo "            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h2>Modificateurs de Caractéristiques :</h2>
                <table class=\"table table-bordered table-hover\">
                    <caption>Modificateurs de Caractéristiques :</caption>
                    <thead>
                        <tr>
                            <th>Caractéristique</th>
                            <th>Modificateur</th>
                        </tr>
                    </thead>
                    ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "abilities", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["raceAbility"]) {
            // line 71
            echo "                        <tr><th>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["raceAbility"], "ability", array()), "name", array()), "html", null, true);
            echo "</th><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["raceAbility"], "value", array()), "html", null, true);
            echo "</td></tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['raceAbility'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                </table>
            </div>
        </div>
    </section>
</div>
";
    }

    public function getTemplateName()
    {
        return "PMCharacterBundle:RacePublic:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 73,  202 => 71,  198 => 70,  183 => 57,  179 => 55,  173 => 52,  170 => 51,  168 => 50,  161 => 45,  154 => 43,  144 => 41,  139 => 40,  133 => 37,  129 => 36,  117 => 35,  113 => 34,  107 => 33,  99 => 27,  90 => 24,  87 => 23,  83 => 22,  79 => 20,  76 => 19,  69 => 15,  64 => 14,  61 => 13,  54 => 10,  51 => 9,  42 => 6,  39 => 5,  11 => 3,);
    }
}
