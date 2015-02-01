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
    <a class=\"btn btn-lg btn-danger main-JS-delete\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_classdnd_administration_delete", array("slug" => $this->getAttribute((isset($context["classDnD"]) ? $context["classDnD"] : $this->getContext($context, "classDnD")), "slug", array()))), "html", null, true);
        echo "\" >Supprimer</a>
";
    }

    // line 20
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
    <li class=\"active\">Voir</li>
";
    }

    // line 25
    public function block_PM_body($context, array $blocks = array())
    {
        // line 26
        echo "<div class=\"row\">
    <section id=\"content\" class=\"col-lg-12\">
        ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 29
            echo "            <div class=\"alert alert-success\">
                ";
            // line 30
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        
        <div class=\"row\">
            <div class=\"col-md-6\">
                ";
        // line 36
        if ( !twig_test_empty($this->getAttribute((isset($context["classDnD"]) ? $context["classDnD"] : $this->getContext($context, "classDnD")), "description", array()))) {
            // line 37
            echo "                    <div class=\"well\">
                        <h2>Description :</h2>
                        ";
            // line 39
            echo $this->getAttribute((isset($context["classDnD"]) ? $context["classDnD"] : $this->getContext($context, "classDnD")), "description", array());
            echo "
                    </div>
                ";
        } else {
            // line 42
            echo "                    <div class=\"alert alert-warning\" role=\"alert\">Aucune description fournie pour cette classe.</div>
                ";
        }
        // line 44
        echo "            </div>
        
            <div class=\"col-md-6\">
                <h2>Compétences de Classe :</h2>
                <ul>
                ";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["classDnD"]) ? $context["classDnD"] : $this->getContext($context, "classDnD")), "skills", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 50
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_skill_administration_view", array("slug" => $this->getAttribute($context["skill"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["skill"], "name", array()), "html", null, true);
            echo "</a></li>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            echo "                    <li>Aucune compétence connue</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
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
        // line 69
        $context["MaxBabs"] = 0;
        // line 70
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
            // line 71
            echo "                ";
            if ($this->getAttribute($context["loop"], "last", array())) {
                // line 72
                echo "                    ";
                $context["MaxBabs"] = $this->getAttribute($context["bab"], "lvl", array());
                // line 73
                echo "                ";
            }
            // line 74
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
        // line 75
        echo "            ";
        $context["MaxSts"] = twig_length_filter($this->env, (isset($context["sts"]) ? $context["sts"] : $this->getContext($context, "sts")));
        // line 76
        echo "            ";
        if (((isset($context["MaxBabs"]) ? $context["MaxBabs"] : $this->getContext($context, "MaxBabs")) >= (isset($context["MaxSts"]) ? $context["MaxSts"] : $this->getContext($context, "MaxSts")))) {
            // line 77
            echo "                ";
            $context["MaxLoop"] = (isset($context["MaxBabs"]) ? $context["MaxBabs"] : $this->getContext($context, "MaxBabs"));
            // line 78
            echo "            ";
        } elseif (((isset($context["MaxSts"]) ? $context["MaxSts"] : $this->getContext($context, "MaxSts")) > (isset($context["MaxBabs"]) ? $context["MaxBabs"] : $this->getContext($context, "MaxBabs")))) {
            // line 79
            echo "                ";
            $context["MaxLoop"] = (isset($context["MaxSts"]) ? $context["MaxSts"] : $this->getContext($context, "MaxSts"));
            // line 80
            echo "            ";
        }
        // line 81
        echo "            
            ";
        // line 82
        if (((isset($context["MaxLoop"]) ? $context["MaxLoop"] : $this->getContext($context, "MaxLoop")) != 0)) {
            // line 83
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["MaxLoop"]) ? $context["MaxLoop"] : $this->getContext($context, "MaxLoop"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 84
                echo "                    <tr>
                        <td>";
                // line 85
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</td>
                        <td>
                            ";
                // line 87
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
                        // line 88
                        echo "                                ";
                        if ( !$this->getAttribute($context["loop"], "first", array())) {
                            // line 89
                            echo "                                    /
                                ";
                        }
                        // line 91
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
                    // line 93
                    echo "                                -
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bab'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                echo "                        </td>
                        ";
                // line 96
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["sts"]) ? $context["sts"] : $this->getContext($context, "sts")));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["st"]) {
                    if (($this->getAttribute($context["st"], "lvl", array()) == $context["i"])) {
                        // line 97
                        echo "                            <td>";
                        if (($this->getAttribute($context["st"], "fortitude", array()) >= 0)) {
                            echo "+";
                        }
                        echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "fortitude", array()), "html", null, true);
                        echo "</td>
                            <td>";
                        // line 98
                        if (($this->getAttribute($context["st"], "reflex", array()) >= 0)) {
                            echo "+";
                        }
                        echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "reflex", array()), "html", null, true);
                        echo "</td>
                            <td>";
                        // line 99
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
                    // line 101
                    echo "                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['st'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "            ";
        } else {
            // line 108
            echo "                <tr>
                    <td colspan=\"5\"><em>Aucune information connue.</em></td>
                </tr>
            ";
        }
        // line 112
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
        return array (  365 => 112,  359 => 108,  356 => 107,  349 => 105,  340 => 101,  329 => 99,  322 => 98,  314 => 97,  308 => 96,  305 => 95,  298 => 93,  283 => 91,  279 => 89,  276 => 88,  264 => 87,  259 => 85,  256 => 84,  251 => 83,  249 => 82,  246 => 81,  243 => 80,  240 => 79,  237 => 78,  234 => 77,  231 => 76,  228 => 75,  214 => 74,  211 => 73,  208 => 72,  205 => 71,  187 => 70,  185 => 69,  168 => 54,  161 => 52,  151 => 50,  146 => 49,  139 => 44,  135 => 42,  129 => 39,  125 => 37,  123 => 36,  118 => 33,  109 => 30,  106 => 29,  102 => 28,  98 => 26,  95 => 25,  87 => 21,  84 => 20,  78 => 17,  74 => 16,  70 => 15,  65 => 14,  62 => 13,  55 => 10,  52 => 9,  43 => 6,  40 => 5,  11 => 3,);
    }
}
