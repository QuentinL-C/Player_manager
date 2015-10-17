<?php

/* PMCharacterBundle:CharacterUsedPublic:listCharactersUsed_content.html.twig */
class __TwigTemplate_1c9e5da8f8cbe7ded9fa77c134976bafe6aa4b48cae4c8d77217a1ec1368e911 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo " 
<table class=\"table table-striped\" style=\"width: 100%\">
    <caption>Liste de mes Personnages</caption>
    <tr>
        <th style=\"max-width: 30px;\">#</th>
        <th style=\"text-align: left;\">Nom</th>
    </tr>
    ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCharactersUsed"]) ? $context["listCharactersUsed"] : $this->getContext($context, "listCharactersUsed")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["characterused"]) {
            // line 10
            echo "        <tr>
            <td style=\"text-align: left;\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
            <td style=\"text-align: left;\"><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_characterused_public_view", array("slug" => $this->getAttribute($context["characterused"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["characterused"], "name", array()), "html", null, true);
            echo "</a></td>
        </tr>
    ";
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
            // line 15
            echo "        <tr>
            <td colspan=\"5\" style=\"text-align: center; font-weight: bold;\">Oups ... Aucun personnage connu.</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['characterused'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "PMCharacterBundle:CharacterUsedPublic:listCharactersUsed_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 19,  71 => 15,  53 => 12,  49 => 11,  46 => 10,  28 => 9,  19 => 2,);
    }
}
