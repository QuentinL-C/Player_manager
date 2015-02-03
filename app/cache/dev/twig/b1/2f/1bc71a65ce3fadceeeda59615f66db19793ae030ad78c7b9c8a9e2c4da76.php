<?php

/* PMCharacterBundle:Race:view.html.twig */
class __TwigTemplate_b12f1bc71a65ce3fadceeeda59615f66db19793ae030ad78c7b9c8a9e2c4da76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("PMCharacterBundle:Race:layoutAdmin.html.twig");
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
        return "PMCharacterBundle:Race:layoutAdmin.html.twig";
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
    public function block_h1_extend($context, array $blocks = array())
    {
        // line 14
        echo "    <a class=\"btn btn-lg btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_race_administration_edit", array("slug" => $this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "slug", array()))), "html", null, true);
        echo "\" >Modifier</a>
    <a class=\"btn btn-lg btn-danger main-JS-delete\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_race_administration_delete", array("slug" => $this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "slug", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "name", array()), "html", null, true);
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
                <h2>Informations sur la Race</h2>
                
                <ul>
                    <li>Taille : <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_size_administration_view", array("slug" => $this->getAttribute($this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "size", array()), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "size", array()), "name", array()), "html", null, true);
        echo "</a></li>
                    <li>Vitesse : ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "speed", array()), "html", null, true);
        echo "</li>
                    <li>Classe de Prédilection : ";
        // line 40
        if ( !(null === $this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "predilectionClass", array()))) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_classdnd_administration_view", array("slug" => $this->getAttribute($this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "predilectionClass", array()), "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "predilectionClass", array()), "name", array()), "html", null, true);
            echo "</a>";
        } else {
            echo "Pas de classe de prédilection renseignée.";
        }
        echo "</li>
                    <li>Modificateur de Points de Compétences : ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "skillModifier", array()), "html", null, true);
        echo "</li>
                    <li>Modificateur de Points de Vie : ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "hpModifier", array()), "html", null, true);
        echo "</li>
                    <li>Langues :</li>
                    <ul>
                        ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "languages", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 46
            echo "                            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_language_administration_view", array("slug" => $this->getAttribute($context["language"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "name", array()), "html", null, true);
            echo "</a></li>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 48
            echo "                            <li>Aucune langue parlée</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                    </ul>
                </ul>
            </div>
            <div class=\"col-md-6\">
                <h2>Texte descriptif</h2>
                ";
        // line 55
        if ( !twig_test_empty($this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "description", array()))) {
            // line 56
            echo "                    <div class=\"well\">
                        ";
            // line 57
            echo $this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "description", array());
            echo "
                    </div>
                ";
        } else {
            // line 60
            echo "                    <div class=\"alert alert-warning\" role=\"alert\">Aucune description fournie pour cette race.</div>
                ";
        }
        // line 62
        echo "                
            </div>
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
        // line 76
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "abilities", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ability"]) {
            // line 77
            echo "                        ";
            if (($this->getAttribute($context["ability"], "type", array()) == 1)) {
                echo "<tr><th>Force</th><td>";
                if (($this->getAttribute($context["ability"], "value", array()) >= 0)) {
                    echo "+";
                }
                echo twig_escape_filter($this->env, $this->getAttribute($context["ability"], "value", array()), "html", null, true);
                echo "</td></tr>
                        ";
            } elseif (($this->getAttribute(            // line 78
$context["ability"], "type", array()) == 2)) {
                echo "<tr><th>Dextérité</th><td>";
                if (($this->getAttribute($context["ability"], "value", array()) >= 0)) {
                    echo "+";
                }
                echo twig_escape_filter($this->env, $this->getAttribute($context["ability"], "value", array()), "html", null, true);
                echo "</td></tr>
                        ";
            } elseif (($this->getAttribute(            // line 79
$context["ability"], "type", array()) == 3)) {
                echo "<tr><th>Constitution</th><td>";
                if (($this->getAttribute($context["ability"], "value", array()) >= 0)) {
                    echo "+";
                }
                echo twig_escape_filter($this->env, $this->getAttribute($context["ability"], "value", array()), "html", null, true);
                echo "</td></tr>
                        ";
            } elseif (($this->getAttribute(            // line 80
$context["ability"], "type", array()) == 4)) {
                echo "<tr><th>Intelligence</th><td>";
                if (($this->getAttribute($context["ability"], "value", array()) >= 0)) {
                    echo "+";
                }
                echo twig_escape_filter($this->env, $this->getAttribute($context["ability"], "value", array()), "html", null, true);
                echo "</td></tr>
                        ";
            } elseif (($this->getAttribute(            // line 81
$context["ability"], "type", array()) == 5)) {
                echo "<tr><th>Sagesse</th><td>";
                if (($this->getAttribute($context["ability"], "value", array()) >= 0)) {
                    echo "+";
                }
                echo twig_escape_filter($this->env, $this->getAttribute($context["ability"], "value", array()), "html", null, true);
                echo "</td></tr>
                        ";
            } elseif (($this->getAttribute(            // line 82
$context["ability"], "type", array()) == 6)) {
                echo "<tr><th>Charisme</th><td>";
                if (($this->getAttribute($context["ability"], "value", array()) >= 0)) {
                    echo "+";
                }
                echo twig_escape_filter($this->env, $this->getAttribute($context["ability"], "value", array()), "html", null, true);
                echo "</td></tr>
                        ";
            }
            // line 84
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ability'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                </table>
            </div>
        </div>
    </section>
</div>
";
    }

    public function getTemplateName()
    {
        return "PMCharacterBundle:Race:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 85,  274 => 84,  264 => 82,  255 => 81,  246 => 80,  237 => 79,  228 => 78,  218 => 77,  214 => 76,  198 => 62,  194 => 60,  188 => 57,  185 => 56,  183 => 55,  176 => 50,  169 => 48,  159 => 46,  154 => 45,  148 => 42,  144 => 41,  132 => 40,  128 => 39,  122 => 38,  114 => 32,  105 => 29,  102 => 28,  98 => 27,  94 => 25,  91 => 24,  84 => 20,  79 => 19,  76 => 18,  70 => 15,  65 => 14,  62 => 13,  55 => 10,  52 => 9,  43 => 6,  40 => 5,  11 => 3,);
    }
}
