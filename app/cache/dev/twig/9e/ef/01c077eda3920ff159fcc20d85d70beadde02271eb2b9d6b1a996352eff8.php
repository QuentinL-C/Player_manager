<?php

/* PMCharacterBundle:ClassDnD:view.html.twig */
class __TwigTemplate_9eef01c077eda3920ff159fcc20d85d70beadde02271eb2b9d6b1a996352eff8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("PMCharacterBundle:ClassDnD:layoutAdmin.html.twig");
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
        return "PMCharacterBundle:ClassDnD:layoutAdmin.html.twig";
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classDnD"]) ? $context["classDnD"] : $this->getContext($context, "classDnD")), "name", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classDnD"]) ? $context["classDnD"] : $this->getContext($context, "classDnD")), "name", array()), "html", null, true);
        echo " :
";
    }

    // line 13
    public function block_h1_extend($context, array $blocks = array())
    {
        // line 14
        echo "    <a class=\"btn btn-lg btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_classdnd_administration_edit_st", array("slug" => $this->getAttribute((isset($context["classDnD"]) ? $context["classDnD"] : $this->getContext($context, "classDnD")), "slug", array()))), "html", null, true);
        echo "\" >ST</a> 
    <a class=\"btn btn-lg btn-primary\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_classdnd_administration_edit_bab", array("slug" => $this->getAttribute((isset($context["classDnD"]) ? $context["classDnD"] : $this->getContext($context, "classDnD")), "slug", array()))), "html", null, true);
        echo "\" >BAB</a> 
    <a class=\"btn btn-lg btn-primary\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_classdnd_administration_edit", array("slug" => $this->getAttribute((isset($context["classDnD"]) ? $context["classDnD"] : $this->getContext($context, "classDnD")), "slug", array()))), "html", null, true);
        echo "\" >Modifier</a>
";
    }

    // line 19
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
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
        if ( !twig_test_empty($this->getAttribute((isset($context["classDnD"]) ? $context["classDnD"] : $this->getContext($context, "classDnD")), "description", array()))) {
            // line 36
            echo "                    <div class=\"well\">
                        <h2>Description :</h2>
                        ";
            // line 38
            echo $this->getAttribute((isset($context["classDnD"]) ? $context["classDnD"] : $this->getContext($context, "classDnD")), "description", array());
            echo "
                    </div>
                ";
        } else {
            // line 41
            echo "                    <div class=\"alert alert-warning\" role=\"alert\">Aucune description fournie pour cette classe.</div>
                ";
        }
        // line 43
        echo "            </div>
        
            <div class=\"col-md-6\">
                <h2>Compétences de Classe :</h2>
                <ul>
                ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["classDnD"]) ? $context["classDnD"] : $this->getContext($context, "classDnD")), "skills", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 49
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_skill_administration_view", array("slug" => $this->getAttribute($context["skill"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["skill"], "name", array()), "html", null, true);
            echo "</a></li>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            echo "                    <li>Aucune compétence connue</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                </ul>
            </div>
        </div>
        
        <h2>Tableau des valeurs :</h2>
        <table class=\"table table-bordered table-condensed table-striped\">
            <caption>Valeurs de base</caption>
            <tr>
                <th>#</th>
                <th>BBA</th>
                <th>Reflex</th>
                <th>Vigueur</th>
                <th>Volonté</th>
            </tr>
            
            ";
        // line 68
        $context["MaxBabs"] = 0;
        // line 69
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["babs"]) ? $context["babs"] : $this->getContext($context, "babs")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["bab"]) {
            // line 70
            echo "                ";
            if ($this->getAttribute($context["loop"], "last", array())) {
                // line 71
                echo "                    ";
                $context["MaxBabs"] = $this->getAttribute($context["bab"], "lvl", array());
                // line 72
                echo "                ";
            }
            // line 73
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "            ";
        $context["MaxSts"] = twig_length_filter($this->env, (isset($context["sts"]) ? $context["sts"] : $this->getContext($context, "sts")));
        // line 75
        echo "            ";
        if (((isset($context["MaxBabs"]) ? $context["MaxBabs"] : $this->getContext($context, "MaxBabs")) >= (isset($context["MaxSts"]) ? $context["MaxSts"] : $this->getContext($context, "MaxSts")))) {
            // line 76
            echo "                ";
            $context["MaxLoop"] = (isset($context["MaxBabs"]) ? $context["MaxBabs"] : $this->getContext($context, "MaxBabs"));
            // line 77
            echo "            ";
        } elseif (((isset($context["MaxSts"]) ? $context["MaxSts"] : $this->getContext($context, "MaxSts")) > (isset($context["MaxBabs"]) ? $context["MaxBabs"] : $this->getContext($context, "MaxBabs")))) {
            // line 78
            echo "                ";
            $context["MaxLoop"] = (isset($context["MaxSts"]) ? $context["MaxSts"] : $this->getContext($context, "MaxSts"));
            // line 79
            echo "            ";
        }
        // line 80
        echo "            
            ";
        // line 81
        if (((isset($context["MaxLoop"]) ? $context["MaxLoop"] : $this->getContext($context, "MaxLoop")) != 0)) {
            // line 82
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["MaxLoop"]) ? $context["MaxLoop"] : $this->getContext($context, "MaxLoop"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 83
                echo "                    <tr>
                        <td>";
                // line 84
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</td>
                        <td>
                            ";
                // line 86
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["babs"]) ? $context["babs"] : $this->getContext($context, "babs")));
                $context['_iterated'] = false;
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                foreach ($context['_seq'] as $context["_key"] => $context["bab"]) {
                    if (($this->getAttribute($context["bab"], "lvl", array()) == $context["i"])) {
                        // line 87
                        echo "                                ";
                        if ( !$this->getAttribute($context["loop"], "first", array())) {
                            // line 88
                            echo "                                    /
                                ";
                        }
                        // line 90
                        echo "                                    ";
                        if (($this->getAttribute($context["bab"], "value", array()) >= 0)) {
                            echo "+";
                        }
                        echo twig_escape_filter($this->env, $this->getAttribute($context["bab"], "value", array()), "html", null, true);
                        echo "
                            ";
                        $context['_iterated'] = true;
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                    }
                }
                if (!$context['_iterated']) {
                    // line 92
                    echo "                                -
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bab'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "                        </td>
                        ";
                // line 95
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["sts"]) ? $context["sts"] : $this->getContext($context, "sts")));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["st"]) {
                    if (($this->getAttribute($context["st"], "lvl", array()) == $context["i"])) {
                        // line 96
                        echo "                            <td>";
                        if (($this->getAttribute($context["st"], "fortitude", array()) >= 0)) {
                            echo "+";
                        }
                        echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "fortitude", array()), "html", null, true);
                        echo "</td>
                            <td>";
                        // line 97
                        if (($this->getAttribute($context["st"], "reflex", array()) >= 0)) {
                            echo "+";
                        }
                        echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "reflex", array()), "html", null, true);
                        echo "</td>
                            <td>";
                        // line 98
                        if (($this->getAttribute($context["st"], "will", array()) >= 0)) {
                            echo "+";
                        }
                        echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "will", array()), "html", null, true);
                        echo "</td>
                        ";
                        $context['_iterated'] = true;
                    }
                }
                if (!$context['_iterated']) {
                    // line 100
                    echo "                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['st'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 104
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "            ";
        } else {
            // line 107
            echo "                <tr>
                    <td colspan=\"5\"><em>Aucune information connue.</em></td>
                </tr>
            ";
        }
        // line 111
        echo "        </table>
    </section>
</div>
";
    }

    public function getTemplateName()
    {
        return "PMCharacterBundle:ClassDnD:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 111,  355 => 107,  352 => 106,  345 => 104,  336 => 100,  325 => 98,  318 => 97,  310 => 96,  304 => 95,  301 => 94,  294 => 92,  279 => 90,  275 => 88,  272 => 87,  260 => 86,  255 => 84,  252 => 83,  247 => 82,  245 => 81,  242 => 80,  239 => 79,  236 => 78,  233 => 77,  230 => 76,  227 => 75,  224 => 74,  210 => 73,  207 => 72,  204 => 71,  201 => 70,  183 => 69,  181 => 68,  164 => 53,  157 => 51,  147 => 49,  142 => 48,  135 => 43,  131 => 41,  125 => 38,  121 => 36,  119 => 35,  114 => 32,  105 => 29,  102 => 28,  98 => 27,  94 => 25,  91 => 24,  83 => 20,  80 => 19,  74 => 16,  70 => 15,  65 => 14,  62 => 13,  55 => 10,  52 => 9,  43 => 6,  40 => 5,  11 => 3,);
    }
}
