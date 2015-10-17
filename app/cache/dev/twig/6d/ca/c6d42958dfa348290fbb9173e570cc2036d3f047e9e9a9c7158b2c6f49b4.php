<?php

/* PMGameBundle:GamePublic:view.html.twig */
class __TwigTemplate_6dcac6d42958dfa348290fbb9173e570cc2036d3f047e9e9a9c7158b2c6f49b4 extends Twig_Template
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
            'h1_extend' => array($this, 'block_h1_extend'),
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
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "name", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "name", array()), "html", null, true);
        echo " :
";
    }

    // line 13
    public function block_h1_extend($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        if (((isset($context["isMJ"]) ? $context["isMJ"] : $this->getContext($context, "isMJ")) == true)) {
            // line 15
            echo "        <a class=\"btn btn-lg btn-warning\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_player_public_homepage", array("slug" => $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "slug", array()))), "html", null, true);
            echo "\" >Lancer</a>
        <a class=\"btn btn-lg btn-primary\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_game_administration_edit", array("slug" => $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "slug", array()))), "html", null, true);
            echo "\" >Modifier</a>
        <a class=\"btn btn-lg btn-danger main-JS-delete\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_game_administration_delete", array("slug" => $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "slug", array()))), "html", null, true);
            echo "\" >Supprimer</a>
    ";
        } elseif ((        // line 18
(isset($context["isCharacter"]) ? $context["isCharacter"] : $this->getContext($context, "isCharacter")) == true)) {
            echo "<strong>Joueur</strong>
    ";
        }
    }

    // line 22
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
    <li class=\"active\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "name", array()), "html", null, true);
        echo "</li>
    <li class=\"active\">Voir</li>
";
    }

    // line 28
    public function block_PM_body($context, array $blocks = array())
    {
        // line 29
        echo "<div class=\"row\">
    <section id=\"content\" class=\"col-lg-12\">
        ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 32
            echo "            <div class=\"alert alert-success\">
                ";
            // line 33
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        
        
        ";
        // line 38
        if (((isset($context["isMJ"]) ? $context["isMJ"] : $this->getContext($context, "isMJ")) == true)) {
            $this->env->loadTemplate("PMGameBundle:GamePublic:viewMJ.html.twig")->display($context);
            // line 39
            echo "        ";
        } elseif (((isset($context["isCharacter"]) ? $context["isCharacter"] : $this->getContext($context, "isCharacter")) == true)) {
            $this->env->loadTemplate("PMGameBundle:GamePublic:viewPlayer.html.twig")->display($context);
            // line 40
            echo "        ";
        } else {
            $this->env->loadTemplate("PMGameBundle:GamePublic:viewPublic.html.twig")->display($context);
            // line 41
            echo "        ";
        }
        // line 42
        echo "    </section>
</div>
";
    }

    public function getTemplateName()
    {
        return "PMGameBundle:GamePublic:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 42,  141 => 41,  137 => 40,  133 => 39,  130 => 38,  126 => 36,  117 => 33,  114 => 32,  110 => 31,  106 => 29,  103 => 28,  96 => 24,  91 => 23,  88 => 22,  81 => 18,  77 => 17,  73 => 16,  68 => 15,  65 => 14,  62 => 13,  55 => 10,  52 => 9,  43 => 6,  40 => 5,  11 => 3,);
    }
}
