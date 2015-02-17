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
        echo "    Liste - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_h1($context, array $blocks = array())
    {
        // line 10
        echo "    Liste des Utilisateurs :
";
    }

    // line 13
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
    <li class=\"active\">Liste</li>
";
    }

    // line 18
    public function block_PMUser_body($context, array $blocks = array())
    {
        // line 19
        echo "<div class=\"row\">
    <section id=\"content\" class=\"col-md-6\">
        <h1>Liste des utilisateurs :</h1>
        
        ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 24
            echo "            <div class=\"alert col-md-6 alert-success\">
                ";
            // line 25
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        \t
        <br />
        <table class=\"table table-striped\">
            <tr>
                <th style=\"max-width: 30px; text-align: left;\">#</th>
                <th style=\"text-align: left;\">Nom</th>
                <th style=\"text-align: left;\">Adresse mail</th>
            </tr>
            ";
        // line 36
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
            // line 37
            echo "                <tr>
                    <td style=\"text-align: left;\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                    <td style=\"text-align: left;\"><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_user_administration_view", array("user_id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["user"], "name", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", array()), "html", null, true);
            echo "</a></td>
                    <td style=\"text-align: left;\"><a href=\"mailto:";
            // line 40
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
        // line 43
        echo "            ";
        if (twig_test_empty((isset($context["usersList"]) ? $context["usersList"] : $this->getContext($context, "usersList")))) {
            // line 44
            echo "                <tr>
                    <td colspan=\"5\" style=\"text-align: center; font-weight: bold;\">Aucun utilisateur connu.</td>
                </tr>
            ";
        }
        // line 48
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
        return array (  163 => 48,  157 => 44,  154 => 43,  135 => 40,  127 => 39,  123 => 38,  120 => 37,  103 => 36,  93 => 28,  84 => 25,  81 => 24,  77 => 23,  71 => 19,  68 => 18,  60 => 14,  57 => 13,  52 => 10,  49 => 9,  42 => 6,  39 => 5,  11 => 3,);
    }
}
