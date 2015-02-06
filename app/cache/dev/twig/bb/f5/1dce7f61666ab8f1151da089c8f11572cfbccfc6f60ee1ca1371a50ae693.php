<?php

/* PMCharacterBundle:ClassDnDPublic:view.html.twig */
class __TwigTemplate_bbf51dce7f61666ab8f1151da089c8f11572cfbccfc6f60ee1ca1371a50ae693 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("PMCharacterBundle:ClassDnDPublic:layoutPublic.html.twig");
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
        return "PMCharacterBundle:ClassDnDPublic:layoutPublic.html.twig";
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
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
    <li class=\"active\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classDnD"]) ? $context["classDnD"] : $this->getContext($context, "classDnD")), "name", array()), "html", null, true);
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
        if ( !twig_test_empty($this->getAttribute((isset($context["classDnD"]) ? $context["classDnD"] : $this->getContext($context, "classDnD")), "description", array()))) {
            // line 31
            echo "                    <div class=\"well\">
                        <h2>Description :</h2>
                        ";
            // line 33
            echo $this->getAttribute((isset($context["classDnD"]) ? $context["classDnD"] : $this->getContext($context, "classDnD")), "description", array());
            echo "
                    </div>
                ";
        } else {
            // line 36
            echo "                    <div class=\"alert alert-warning\" role=\"alert\">Aucune description fournie pour cette classe.</div>
                ";
        }
        // line 38
        echo "            </div>
        
            <div class=\"col-md-6\">
                <h2>Compétences de Classe :</h2>
                <ul>
                ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["classDnD"]) ? $context["classDnD"] : $this->getContext($context, "classDnD")), "skills", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 44
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_skill_public_view", array("slug" => $this->getAttribute($context["skill"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["skill"], "name", array()), "html", null, true);
            echo "</a></li>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            echo "                    <li>Aucune compétence connue</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
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
        // line 63
        $context["MaxBabs"] = 0;
        // line 64
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
            // line 65
            echo "                ";
            if ($this->getAttribute($context["loop"], "last", array())) {
                // line 66
                echo "                    ";
                $context["MaxBabs"] = $this->getAttribute($context["bab"], "lvl", array());
                // line 67
                echo "                ";
            }
            // line 68
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
        // line 69
        echo "            ";
        $context["MaxSts"] = twig_length_filter($this->env, (isset($context["sts"]) ? $context["sts"] : $this->getContext($context, "sts")));
        // line 70
        echo "            ";
        if (((isset($context["MaxBabs"]) ? $context["MaxBabs"] : $this->getContext($context, "MaxBabs")) >= (isset($context["MaxSts"]) ? $context["MaxSts"] : $this->getContext($context, "MaxSts")))) {
            // line 71
            echo "                ";
            $context["MaxLoop"] = (isset($context["MaxBabs"]) ? $context["MaxBabs"] : $this->getContext($context, "MaxBabs"));
            // line 72
            echo "            ";
        } elseif (((isset($context["MaxSts"]) ? $context["MaxSts"] : $this->getContext($context, "MaxSts")) > (isset($context["MaxBabs"]) ? $context["MaxBabs"] : $this->getContext($context, "MaxBabs")))) {
            // line 73
            echo "                ";
            $context["MaxLoop"] = (isset($context["MaxSts"]) ? $context["MaxSts"] : $this->getContext($context, "MaxSts"));
            // line 74
            echo "            ";
        }
        // line 75
        echo "            
            ";
        // line 76
        if (((isset($context["MaxLoop"]) ? $context["MaxLoop"] : $this->getContext($context, "MaxLoop")) != 0)) {
            // line 77
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["MaxLoop"]) ? $context["MaxLoop"] : $this->getContext($context, "MaxLoop"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 78
                echo "                    <tr>
                        <td>";
                // line 79
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</td>
                        <td>
                            ";
                // line 81
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
                        // line 82
                        echo "                                ";
                        if ( !$this->getAttribute($context["loop"], "first", array())) {
                            // line 83
                            echo "                                    /
                                ";
                        }
                        // line 85
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
                    // line 87
                    echo "                                -
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bab'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "                        </td>
                        ";
                // line 90
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["sts"]) ? $context["sts"] : $this->getContext($context, "sts")));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["st"]) {
                    if (($this->getAttribute($context["st"], "lvl", array()) == $context["i"])) {
                        // line 91
                        echo "                            <td>";
                        if (($this->getAttribute($context["st"], "fortitude", array()) >= 0)) {
                            echo "+";
                        }
                        echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "fortitude", array()), "html", null, true);
                        echo "</td>
                            <td>";
                        // line 92
                        if (($this->getAttribute($context["st"], "reflex", array()) >= 0)) {
                            echo "+";
                        }
                        echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "reflex", array()), "html", null, true);
                        echo "</td>
                            <td>";
                        // line 93
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
                    // line 95
                    echo "                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['st'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 99
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "            ";
        } else {
            // line 102
            echo "                <tr>
                    <td colspan=\"5\"><em>Aucune information connue.</em></td>
                </tr>
            ";
        }
        // line 106
        echo "        </table>
    </section>
</div>
";
    }

    public function getTemplateName()
    {
        return "PMCharacterBundle:ClassDnDPublic:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 106,  340 => 102,  337 => 101,  330 => 99,  321 => 95,  310 => 93,  303 => 92,  295 => 91,  289 => 90,  286 => 89,  279 => 87,  264 => 85,  260 => 83,  257 => 82,  245 => 81,  240 => 79,  237 => 78,  232 => 77,  230 => 76,  227 => 75,  224 => 74,  221 => 73,  218 => 72,  215 => 71,  212 => 70,  209 => 69,  195 => 68,  192 => 67,  189 => 66,  186 => 65,  168 => 64,  166 => 63,  149 => 48,  142 => 46,  132 => 44,  127 => 43,  120 => 38,  116 => 36,  110 => 33,  106 => 31,  104 => 30,  99 => 27,  90 => 24,  87 => 23,  83 => 22,  79 => 20,  76 => 19,  69 => 15,  64 => 14,  61 => 13,  54 => 10,  51 => 9,  42 => 6,  39 => 5,  11 => 3,);
    }
}
