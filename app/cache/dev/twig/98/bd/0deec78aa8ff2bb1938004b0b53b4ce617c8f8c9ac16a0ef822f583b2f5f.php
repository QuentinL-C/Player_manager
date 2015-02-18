<?php

/* PMMonsterBundle:Monster:view.html.twig */
class __TwigTemplate_98bd0deec78aa8ff2bb1938004b0b53b4ce617c8f8c9ac16a0ef822f583b2f5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("PMMonsterBundle:Monster:layoutAdmin.html.twig");
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
        return "PMMonsterBundle:Monster:layoutAdmin.html.twig";
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monster"]) ? $context["monster"] : $this->getContext($context, "monster")), "name", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monster"]) ? $context["monster"] : $this->getContext($context, "monster")), "name", array()), "html", null, true);
        echo " :
";
    }

    // line 13
    public function block_h1_extend($context, array $blocks = array())
    {
        // line 14
        echo "    <a class=\"btn btn-lg btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_monster_administration_edit", array("slug" => $this->getAttribute((isset($context["monster"]) ? $context["monster"] : $this->getContext($context, "monster")), "slug", array()))), "html", null, true);
        echo "\" >Modifier</a>
    <a class=\"btn btn-lg btn-danger main-JS-delete\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_monster_administration_delete", array("slug" => $this->getAttribute((isset($context["monster"]) ? $context["monster"] : $this->getContext($context, "monster")), "slug", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monster"]) ? $context["monster"] : $this->getContext($context, "monster")), "name", array()), "html", null, true);
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
        if ( !twig_test_empty($this->getAttribute((isset($context["monster"]) ? $context["monster"] : $this->getContext($context, "monster")), "description", array()))) {
            // line 36
            echo "                    <div class=\"well\">
                        <h2>Description :</h2>
                        ";
            // line 38
            echo $this->getAttribute((isset($context["monster"]) ? $context["monster"] : $this->getContext($context, "monster")), "description", array());
            echo "
                    </div>
                ";
        } else {
            // line 41
            echo "                    <div class=\"alert alert-warning\" role=\"alert\">Aucune description fournie pour ce monstre.</div>
                ";
        }
        // line 43
        echo "                ";
        if ( !twig_test_empty($this->getAttribute((isset($context["monster"]) ? $context["monster"] : $this->getContext($context, "monster")), "socialOrganisation", array()))) {
            // line 44
            echo "                    <div class=\"well\">
                        <h2>Organisation sociale :</h2>
                        ";
            // line 46
            echo $this->getAttribute((isset($context["monster"]) ? $context["monster"] : $this->getContext($context, "monster")), "socialOrganisation", array());
            echo "
                    </div>
                ";
        } else {
            // line 49
            echo "                    <div class=\"alert alert-warning\" role=\"alert\">Aucune organisation sociale fournie pour ce monstre.</div>
                ";
        }
        // line 51
        echo "            </div>
            <div class=\"col-md-6\">
                <h2>Informations :</h2>
                <ul>
                    <li>Initiative : ";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monster"]) ? $context["monster"] : $this->getContext($context, "monster")), "initiative", array()), "html", null, true);
        echo "</li>
                    <li>Points de vie moyens : ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monster"]) ? $context["monster"] : $this->getContext($context, "monster")), "hpAverage", array()), "html", null, true);
        echo "</li>
                    <li>Bonus de Base à l'Attaque : ";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monster"]) ? $context["monster"] : $this->getContext($context, "monster")), "bab", array()), "html", null, true);
        echo "</li>
                    <li>Modificateur de Lutte : ";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monster"]) ? $context["monster"] : $this->getContext($context, "monster")), "grappleModifier", array()), "html", null, true);
        echo "</li>
                    <li>CA : ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monster"]) ? $context["monster"] : $this->getContext($context, "monster")), "ac", array()), "html", null, true);
        echo "</li>
                    <li>CA de Contact : ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monster"]) ? $context["monster"] : $this->getContext($context, "monster")), "touchAC", array()), "html", null, true);
        echo "</li>
                    <li>CA de Prise au dépourvu : ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monster"]) ? $context["monster"] : $this->getContext($context, "monster")), "ffAC", array()), "html", null, true);
        echo "</li>
                    <li>Vitesse de déplacement au sol : ";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monster"]) ? $context["monster"] : $this->getContext($context, "monster")), "speed", array()), "html", null, true);
        echo "</li>
                    <li>Espace au sol : ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monster"]) ? $context["monster"] : $this->getContext($context, "monster")), "spaceOccupied", array()), "html", null, true);
        echo "</li>
                    <li>Zone de danger : ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monster"]) ? $context["monster"] : $this->getContext($context, "monster")), "areaLying", array()), "html", null, true);
        echo "</li>
                    <li>Initiative : ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monster"]) ? $context["monster"] : $this->getContext($context, "monster")), "initiative", array()), "html", null, true);
        echo "</li>
                    <li>Facteur de Puissance : ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monster"]) ? $context["monster"] : $this->getContext($context, "monster")), "powerfullFactor", array()), "html", null, true);
        echo "</li>
                    <li>Langues parlées :</li>
                    <ul>
                        ";
        // line 69
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["monster"]) ? $context["monster"] : $this->getContext($context, "monster")), "languages", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 70
            echo "                            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_language_administration_view", array("slug" => $this->getAttribute($context["language"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "name", array()), "html", null, true);
            echo "</a></li>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 72
            echo "                            <li>Aucune langue connue pour ce monstre</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "   
                    </ul>
                    <li>Alignement : <a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_alignment_administration_view", array("slug" => $this->getAttribute($this->getAttribute((isset($context["monster"]) ? $context["monster"] : $this->getContext($context, "monster")), "alignment", array()), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["monster"]) ? $context["monster"] : $this->getContext($context, "monster")), "alignment", array()), "name", array()), "html", null, true);
        echo "</a></li>
                    <li>Environnement : <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_environment_administration_view", array("slug" => $this->getAttribute($this->getAttribute((isset($context["monster"]) ? $context["monster"] : $this->getContext($context, "monster")), "environment", array()), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["monster"]) ? $context["monster"] : $this->getContext($context, "monster")), "environment", array()), "name", array()), "html", null, true);
        echo "</a></li>
                    <li>Créé par <a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_user_administration_view", array("user_id" => $this->getAttribute($this->getAttribute((isset($context["monster"]) ? $context["monster"] : $this->getContext($context, "monster")), "createUser", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["monster"]) ? $context["monster"] : $this->getContext($context, "monster")), "createUser", array()), "username", array()), "html", null, true);
        echo "</a> le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["monster"]) ? $context["monster"] : $this->getContext($context, "monster")), "createDate", array()), "d/m/Y"), "html", null, true);
        echo "</li>
                    ";
        // line 78
        if ( !twig_test_empty($this->getAttribute((isset($context["monster"]) ? $context["monster"] : $this->getContext($context, "monster")), "updateUser", array()))) {
            // line 79
            echo "                    <li>Edité par <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_user_administration_view", array("user_id" => $this->getAttribute($this->getAttribute((isset($context["monster"]) ? $context["monster"] : $this->getContext($context, "monster")), "updateUser", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["monster"]) ? $context["monster"] : $this->getContext($context, "monster")), "updateUser", array()), "username", array()), "html", null, true);
            echo "</a> le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["monster"]) ? $context["monster"] : $this->getContext($context, "monster")), "updateDate", array()), "d/m/Y"), "html", null, true);
            echo "</li>
                    ";
        }
        // line 81
        echo "                </ul>
            </div>
        </div>
    </section>
</div>
";
    }

    public function getTemplateName()
    {
        return "PMMonsterBundle:Monster:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 81,  256 => 79,  254 => 78,  246 => 77,  240 => 76,  234 => 75,  230 => 73,  223 => 72,  213 => 70,  208 => 69,  202 => 66,  198 => 65,  194 => 64,  190 => 63,  186 => 62,  182 => 61,  178 => 60,  174 => 59,  170 => 58,  166 => 57,  162 => 56,  158 => 55,  152 => 51,  148 => 49,  142 => 46,  138 => 44,  135 => 43,  131 => 41,  125 => 38,  121 => 36,  119 => 35,  114 => 32,  105 => 29,  102 => 28,  98 => 27,  94 => 25,  91 => 24,  84 => 20,  79 => 19,  76 => 18,  70 => 15,  65 => 14,  62 => 13,  55 => 10,  52 => 9,  43 => 6,  40 => 5,  11 => 3,);
    }
}
