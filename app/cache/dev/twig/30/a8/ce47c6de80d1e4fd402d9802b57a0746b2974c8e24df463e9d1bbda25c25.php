<?php

/* PMCharacterBundle:CharacterUsed:view.html.twig */
class __TwigTemplate_30a8ce47c6de80d1e4fd402d9802b57a0746b2974c8e24df463e9d1bbda25c25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("PMCharacterBundle:CharacterUsed:layoutAdmin.html.twig");
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
        return "PMCharacterBundle:CharacterUsed:layoutAdmin.html.twig";
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "name", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "name", array()), "html", null, true);
        echo " :
";
    }

    // line 13
    public function block_h1_extend($context, array $blocks = array())
    {
        // line 14
        echo "    <a class=\"btn btn-lg btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_characterused_administration_edit", array("slug" => $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "slug", array()))), "html", null, true);
        echo "\" >Modifier</a>
";
    }

    // line 17
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
    <li class=\"active\">Voir</li>
";
    }

    // line 22
    public function block_PM_body($context, array $blocks = array())
    {
        // line 23
        echo "<div class=\"row\">
    <section id=\"content\" class=\"col-lg-12\">
        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 26
            echo "            <div class=\"alert alert-success\">
                ";
            // line 27
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h2>Informations sur le Personnage</h2>
                
                <ul>
                    <li>Nom : ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "name", array()), "html", null, true);
        echo "</li>
                    <li>Age : ";
        // line 37
        if ( !twig_test_empty($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "age", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "age", array()), "html", null, true);
        } else {
            echo "Aucun âge";
        }
        echo "</li>
                    <li>Sexe : ";
        // line 38
        if ( !twig_test_empty($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "gender", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "gender", array()), "html", null, true);
        } else {
            echo "Aucun genre";
        }
        echo "</li>
                    <li>Taille : ";
        // line 39
        if ( !twig_test_empty($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "height", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "height", array()), "html", null, true);
        } else {
            echo "Aucune taille";
        }
        echo "</li>
                    <li>Poids : ";
        // line 40
        if ( !twig_test_empty($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "weight", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "weight", array()), "html", null, true);
        } else {
            echo "Aucun poids";
        }
        echo "</li>
                    <li>PV : ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "hpCurrent", array()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "hpMax", array()), "html", null, true);
        echo "</li>
                    <li>Level : ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "level", array()), "html", null, true);
        echo "</li>
                    <li>Alignement : ";
        // line 43
        if ( !twig_test_empty($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "alignment", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "alignment", array()), "name", array()), "html", null, true);
        } else {
            echo "Aucun alignement";
        }
        echo "</li>
                    <li>Classe : ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "classDnD", array()), "name", array()), "html", null, true);
        echo "</li>
                    <li>Race : ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "race", array()), "name", array()), "html", null, true);
        echo "</li>
                    <li>Richesse : ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "wealth", array()), "po", array()), "html", null, true);
        echo "</li>
                    <li>Proprio : ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "user", array()), "username", array()), "html", null, true);
        echo "</li>
                    <li>Charactéristiques :</li>
                    <ul>
                        ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abilities"]) ? $context["abilities"] : $this->getContext($context, "abilities")));
        foreach ($context['_seq'] as $context["_key"] => $context["ability"]) {
            // line 51
            echo "                            ";
            if (($this->getAttribute($context["ability"], "type", array()) == 1)) {
                echo "<li>Force : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ability"], "value", array()), "html", null, true);
                echo "</li>
                            ";
            } elseif (($this->getAttribute($context["ability"], "type", array()) == 2)) {
                // line 52
                echo "<li>Dexterité : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ability"], "value", array()), "html", null, true);
                echo "</li>
                            ";
            } elseif (($this->getAttribute($context["ability"], "type", array()) == 3)) {
                // line 53
                echo "<li>Constitution : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ability"], "value", array()), "html", null, true);
                echo "</li>
                            ";
            } elseif (($this->getAttribute($context["ability"], "type", array()) == 4)) {
                // line 54
                echo "<li>Intelligence : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ability"], "value", array()), "html", null, true);
                echo "</li>
                            ";
            } elseif (($this->getAttribute($context["ability"], "type", array()) == 5)) {
                // line 55
                echo "<li>Sagesse : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ability"], "value", array()), "html", null, true);
                echo "</li>
                            ";
            } elseif (($this->getAttribute($context["ability"], "type", array()) == 6)) {
                // line 56
                echo "<li>Charisme : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ability"], "value", array()), "html", null, true);
                echo "</li>
                            ";
            }
            // line 58
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ability'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                    </ul>
                    <li>Compétences :</li>
                </ul>
            </div>
            <div class=\"col-md-6\">
                <h2>Histoire</h2>
                ";
        // line 65
        if ( !twig_test_empty($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "story", array()))) {
            // line 66
            echo "                    <div class=\"well\">
                        ";
            // line 67
            echo $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "story", array());
            echo "
                    </div>
                ";
        } else {
            // line 70
            echo "                    <div class=\"alert alert-warning\" role=\"alert\">Aucune histoire fournie pour ce personnage.</div>
                ";
        }
        // line 72
        echo "                
            </div>
        </div>
    </section>
</div>
";
    }

    public function getTemplateName()
    {
        return "PMCharacterBundle:CharacterUsed:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 72,  253 => 70,  247 => 67,  244 => 66,  242 => 65,  234 => 59,  228 => 58,  222 => 56,  216 => 55,  210 => 54,  204 => 53,  198 => 52,  190 => 51,  186 => 50,  180 => 47,  176 => 46,  172 => 45,  168 => 44,  160 => 43,  156 => 42,  150 => 41,  142 => 40,  134 => 39,  126 => 38,  118 => 37,  114 => 36,  106 => 30,  97 => 27,  94 => 26,  90 => 25,  86 => 23,  83 => 22,  75 => 18,  72 => 17,  65 => 14,  62 => 13,  55 => 10,  52 => 9,  43 => 6,  40 => 5,  11 => 3,);
    }
}
