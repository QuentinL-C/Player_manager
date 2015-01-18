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
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
    <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("pm_user_list");
        echo "\">Liste des Utilisateurs</a></li>    
    <li class=\"active\">Voir</li>
";
    }

    // line 19
    public function block_PMUser_body($context, array $blocks = array())
    {
        // line 20
        echo "<div class=\"row\">
    <!-- Nav tab -->
    <div class=\"col-lg-2\">
        <ul id=\"UserTab\" class=\"nav nav-stacked\">
            <li class=\"dropdown\">
                <a id=\"User_BlocUser\" hef=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" >Utilisateur <span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"User_BlocUser\" role=\"menu\">
                    <li><a href=\"#User_User\" data-toggle=\"tab\" tabindex=\"-1\" >Informations</a></li>
                    <li><a href=\"#User_Edit\" data-toggle=\"tab\" tabindex=\"-1\" >Editer</a></li>
                </ul>
            </li>
            <li><a href=\"#User_Settings\" data-toggle=\"tab\">Paramètres</a></li>
        </ul>
    </div>
    
    <div class=\"col-lg-10 well\">
        ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 37
            echo "            <div class=\"alert col-lg-10 alert-success\">
                ";
            // line 38
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    
        <!-- Tab panes -->
        <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"User_User\">
                ";
        // line 45
        $this->env->loadTemplate("PMUserBundle:User:view_user_user.html.twig")->display($context);
        // line 46
        echo "            </div>
            <div class=\"tab-pane\" id=\"User_Edit\">
                ";
        // line 48
        $this->env->loadTemplate("PMUserBundle:User:view_user_edit.html.twig")->display($context);
        // line 49
        echo "            </div>
            <div class=\"tab-pane\" id=\"User_Settings\">
                ";
        // line 51
        $this->env->loadTemplate("PMUserBundle:User:view_user_settings.html.twig")->display($context);
        // line 52
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
        return array (  133 => 52,  131 => 51,  127 => 49,  125 => 48,  121 => 46,  119 => 45,  113 => 41,  104 => 38,  101 => 37,  97 => 36,  79 => 20,  76 => 19,  69 => 15,  64 => 14,  61 => 13,  54 => 10,  51 => 9,  42 => 6,  39 => 5,  11 => 3,);
    }
}
