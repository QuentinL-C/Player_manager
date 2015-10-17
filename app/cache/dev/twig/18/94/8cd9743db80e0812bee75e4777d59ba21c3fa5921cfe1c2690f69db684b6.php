<?php

/* PMGameBundle:GamePublic:index.html.twig */
class __TwigTemplate_18948cd9743db80e0812bee75e4777d59ba21c3fa5921cfe1c2690f69db684b6 extends Twig_Template
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
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_h1($context, array $blocks = array())
    {
        // line 10
        echo "    Mes Parties :
";
    }

    // line 13
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
    <li class=\"active\">Accueil</li>
";
    }

    // line 18
    public function block_PM_body($context, array $blocks = array())
    {
        // line 19
        echo "<div class=\"row\">
    <section class=\"col-lg-12\">
        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 22
            echo "            <div class=\"alert col-lg-7 alert-success\">
                ";
            // line 23
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        
        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listGames"]) ? $context["listGames"] : $this->getContext($context, "listGames")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 28
            echo "            ";
            if (($this->getAttribute($context["loop"], "first", array()) == true)) {
                // line 29
                echo "                <div class=\"row\">";
            }
            // line 30
            echo "                ";
            $context["character"] = $this->getAttribute((isset($context["pm_game_gameaction"]) ? $context["pm_game_gameaction"] : $this->getContext($context, "pm_game_gameaction")), "setCharacter", array(0 => $context["game"], 1 => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())), "method");
            // line 31
            echo "                <div class=\"col-md-3 well\">
                    <h2 class=\"text-right\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "name", array()), "html", null, true);
            echo "</h2>
                    <div class=\"text-right\"><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_game_public_view", array("slug" => $this->getAttribute($context["game"], "slug", array()))), "html", null, true);
            echo "\">Fiche descriptive</a></div>
                    <br />
                    
                    <!-- Ici, nécessite de prendre en compte : En ligne / Hors ligne / Rejoindre / Inactive -->
                    ";
            // line 37
            if (($this->getAttribute($context["game"], "active", array()) == false)) {
                // line 38
                echo "                        <div class=\"alert alert-danger\" role=\"alert\">Partie inactive.</div>
                    ";
            }
            // line 40
            echo "                    <div class=\"text-center\"><strong>M.J.</strong></div>
                    <br />
                    <div class=\"text-center\"><a role=\"button\" class=\"btn btn-danger btn-lg\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_player_public_homepage", array("slug" => $this->getAttribute($context["game"], "slug", array()))), "html", null, true);
            echo "\">Lancer</a></div>
                </div>
            ";
            // line 44
            if ((0 == $this->getAttribute($context["loop"], "index", array()) % 4)) {
                // line 45
                echo "                </div>
                ";
                // line 46
                if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                    echo "<div class=\"row\">";
                }
                // line 47
                echo "            ";
            } elseif (($this->getAttribute($context["loop"], "last", array()) == true)) {
                echo "</div><hr />
            ";
            }
            // line 49
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        
        ";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listGames"]) ? $context["listGames"] : $this->getContext($context, "listGames")));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 52
            echo "            ";
            if (($this->getAttribute($context["loop"], "first", array()) == true)) {
                echo "<div class=\"row\">";
            }
            // line 53
            echo "                ";
            $context["character"] = $this->getAttribute((isset($context["pm_game_gameaction"]) ? $context["pm_game_gameaction"] : $this->getContext($context, "pm_game_gameaction")), "setCharacter", array(0 => $context["game"], 1 => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())), "method");
            // line 54
            echo "                <div class=\"col-md-3 well\">
                    <h2 class=\"text-right\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "name", array()), "html", null, true);
            echo "</h2>
                    <div class=\"text-right\"><a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_game_public_view", array("slug" => $this->getAttribute($context["game"], "slug", array()))), "html", null, true);
            echo "\">Fiche descriptive</a></div>
                    <br />
                    <dl class=\"dl-horizontal\">
                        <dt>Mon <abbr title=\"Personnage Joueur\" >P.J.</abbr> :</dt>
                        <dd><a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_characterused_public_view", array("slug" => $this->getAttribute((isset($context["character"]) ? $context["character"] : $this->getContext($context, "character")), "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["character"]) ? $context["character"] : $this->getContext($context, "character")), "name", array()), "html", null, true);
            echo "</a></dd>
                        <dt>Niveau :</dt>
                        <dd>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pm_character_characteruseddnd"]) ? $context["pm_character_characteruseddnd"] : $this->getContext($context, "pm_character_characteruseddnd")), "getGlobalLevel", array(0 => (isset($context["character"]) ? $context["character"] : $this->getContext($context, "character"))), "method"), "html", null, true);
            echo "</dd>
                    </dl>
                    
                    <!-- Ici, nécessite de prendre en compte : En ligne / Hors ligne / Rejoindre / Inactive -->
                    ";
            // line 66
            if (($this->getAttribute($context["game"], "active", array()) == false)) {
                // line 67
                echo "                        <div class=\"alert alert-danger\" role=\"alert\">Partie inactive.</div>
                    ";
            } else {
                // line 69
                echo "                        <div class=\"text-center\"><a role=\"button\" class=\"btn btn-success btn-lg\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_player_public_homepage", array("slug" => $this->getAttribute($context["game"], "slug", array()))), "html", null, true);
                echo "\">Rejoindre</a></div>
                    ";
            }
            // line 71
            echo "                </div>
            ";
            // line 72
            if ((0 == $this->getAttribute($context["loop"], "index", array()) % 4)) {
                // line 73
                echo "                </div>
                ";
                // line 74
                if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                    echo "<div class=\"row\">";
                }
                // line 75
                echo "            ";
            } elseif (($this->getAttribute($context["loop"], "last", array()) == true)) {
                echo "</div>
            ";
            }
            // line 77
            echo "        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 78
            echo "            <div class=\"alert alert-warning\" role=\"alert\">Oups ... Vous ne semblez participer à aucune partie.</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "    </section>
</div>
";
    }

    public function getTemplateName()
    {
        return "PMGameBundle:GamePublic:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 80,  278 => 78,  265 => 77,  259 => 75,  255 => 74,  252 => 73,  250 => 72,  247 => 71,  241 => 69,  237 => 67,  235 => 66,  228 => 62,  221 => 60,  214 => 56,  210 => 55,  207 => 54,  204 => 53,  199 => 52,  181 => 51,  178 => 50,  164 => 49,  158 => 47,  154 => 46,  151 => 45,  149 => 44,  144 => 42,  140 => 40,  136 => 38,  134 => 37,  127 => 33,  123 => 32,  120 => 31,  117 => 30,  114 => 29,  111 => 28,  94 => 27,  91 => 26,  82 => 23,  79 => 22,  75 => 21,  71 => 19,  68 => 18,  60 => 14,  57 => 13,  52 => 10,  49 => 9,  42 => 6,  39 => 5,  11 => 3,);
    }
}
