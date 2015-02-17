<?php

/* PMUserBundle:User:view.html.twig */
class __TwigTemplate_aa86328d824be556cc63102235f65fc1038c6b905505372b070686e5eb514c8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("PMUserBundle::layout.html.twig");
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
            'PMUser_body' => array($this, 'block_PMUser_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PMUserBundle::layout.html.twig";
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
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname", array()) . " ") . twig_title_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname", array()) . " ") . twig_title_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()))), "html", null, true);
        echo "
";
    }

    // line 13
    public function block_h1_extend($context, array $blocks = array())
    {
        // line 14
        echo "    <a class=\"btn btn-lg btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_user_administration_edit", array("user_id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
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
    <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("pm_user_administration_list");
        echo "\">Liste des Utilisateurs</a></li>    
    <li class=\"active\">Voir</li>
";
    }

    // line 23
    public function block_PMUser_body($context, array $blocks = array())
    {
        // line 24
        echo "<div class=\"row\">
    <!-- Nav tab -->
    <div class=\"col-lg-2\">
        <ul id=\"UserTab\" class=\"nav nav-stacked\">
            <li><a href=\"#User_User\" data-toggle=\"tab\" tabindex=\"-1\" >Informations</a></li>
            <li><a href=\"#User_Settings\" data-toggle=\"tab\">Paramètres</a></li>
        </ul>
    </div>
    
    <div class=\"col-lg-10 well\">
        ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 35
            echo "            <div class=\"alert col-lg-10 alert-success\">
                ";
            // line 36
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    
        <!-- Tab panes -->
        <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"User_User\">
                ";
        // line 43
        $this->env->loadTemplate("PMUserBundle:User:view_user_user.html.twig")->display($context);
        // line 44
        echo "            </div>
            <div class=\"tab-pane\" id=\"User_Settings\">
                ";
        // line 46
        $this->env->loadTemplate("PMUserBundle:User:view_user_settings.html.twig")->display($context);
        // line 47
        echo "            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PMUserBundle:User:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 47,  130 => 46,  126 => 44,  124 => 43,  118 => 39,  109 => 36,  106 => 35,  102 => 34,  90 => 24,  87 => 23,  80 => 19,  75 => 18,  72 => 17,  65 => 14,  62 => 13,  55 => 10,  52 => 9,  43 => 6,  40 => 5,  11 => 3,);
    }
}
