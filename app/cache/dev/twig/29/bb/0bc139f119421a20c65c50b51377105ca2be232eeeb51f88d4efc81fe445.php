<?php

/* PMUserBundle:User:usersList.html.twig */
class __TwigTemplate_29bb0bc139f119421a20c65c50b51377105ca2be232eeeb51f88d4efc81fe445 extends Twig_Template
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
        echo "  Liste - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_PMUser_body($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"row\">
    <section id=\"content\" class=\"col-md-6\">
        <h1>Liste des utilisateurs :</h1>
        
        ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "            <div class=\"alert col-md-6 alert-success\">
                ";
            // line 16
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        \t
        <br />
        <table class=\"table table-striped\">
            <tr>
                <th style=\"max-width: 30px; text-align: left;\">#</th>
                <th style=\"text-align: left;\">Nom</th>
                <th style=\"text-align: left;\">Adresse mail</th>
            </tr>
            ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usersList"]) ? $context["usersList"] : $this->getContext($context, "usersList")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 28
            echo "                <tr>
                    <td style=\"text-align: left;\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                    <td style=\"text-align: left;\"><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_user_view", array("user_id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["user"], "name", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", array()), "html", null, true);
            echo "</a></td>
                    <td style=\"text-align: left;\"><a href=\"mailto:";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</a></td>
                </tr>
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            ";
        if (twig_test_empty((isset($context["usersList"]) ? $context["usersList"] : $this->getContext($context, "usersList")))) {
            // line 35
            echo "                <tr>
                    <td colspan=\"5\" style=\"text-align: center; font-weight: bold;\">Aucun utilisateur connu.</td>
                </tr>
            ";
        }
        // line 39
        echo "        </table>
    </section>
</div>
";
    }

    public function getTemplateName()
    {
        return "PMUserBundle:User:usersList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 39,  136 => 35,  133 => 34,  114 => 31,  106 => 30,  102 => 29,  99 => 28,  82 => 27,  72 => 19,  63 => 16,  60 => 15,  56 => 14,  50 => 10,  47 => 9,  40 => 6,  37 => 5,  11 => 3,);
    }
}
