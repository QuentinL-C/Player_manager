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
";
    }

    // line 17
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
    <li class=\"active\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "name", array()), "html", null, true);
        echo "</li>
    <li class=\"active\">Voir</li>
";
    }

    // line 23
    public function block_PM_body($context, array $blocks = array())
    {
        // line 24
        echo "<div class=\"row\">
    <section id=\"content\" class=\"col-lg-12\">
        ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 27
            echo "            <div class=\"alert alert-success\">
                ";
            // line 28
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h2>Informations sur la Race</h2>
                
                <ul>
                    <li>Taille : <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_size_administration_view", array("slug" => $this->getAttribute($this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "size", array()), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "size", array()), "name", array()), "html", null, true);
        echo "</a></li>
                    <li>Vitesse : ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "speed", array()), "html", null, true);
        echo "</li>
                    <li>Classe de Prédilection : ";
        // line 39
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
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "skillModifier", array()), "html", null, true);
        echo "</li>
                    <li>Modificateur de Points de Vie : ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "hpModifier", array()), "html", null, true);
        echo "</li>
                    <li>Langues :</li>
                    <ul>
                        ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "languages", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 45
            echo "                            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_language_administration_view", array("slug" => $this->getAttribute($context["language"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "name", array()), "html", null, true);
            echo "</a></li>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "                            <li>Aucune langue parlée</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                    </ul>
                </ul>
            </div>
            <div class=\"col-md-6\">
                <h2>Texte descriptif</h2>
                ";
        // line 54
        if ( !twig_test_empty($this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "description", array()))) {
            // line 55
            echo "                    <div class=\"well\">
                        ";
            // line 56
            echo $this->getAttribute((isset($context["race"]) ? $context["race"] : $this->getContext($context, "race")), "description", array());
            echo "
                    </div>
                ";
        } else {
            // line 59
            echo "                    <div class=\"alert alert-warning\" role=\"alert\">Aucune description fournie pour cette race.</div>
                ";
        }
        // line 61
        echo "                
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
        return array (  194 => 61,  190 => 59,  184 => 56,  181 => 55,  179 => 54,  172 => 49,  165 => 47,  155 => 45,  150 => 44,  144 => 41,  140 => 40,  128 => 39,  124 => 38,  118 => 37,  110 => 31,  101 => 28,  98 => 27,  94 => 26,  90 => 24,  87 => 23,  80 => 19,  75 => 18,  72 => 17,  65 => 14,  62 => 13,  55 => 10,  52 => 9,  43 => 6,  40 => 5,  11 => 3,);
    }
}
