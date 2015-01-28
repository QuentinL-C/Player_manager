<?php

/* PMCharacterBundle:Form:fieldsClassBAB.html.twig */
class __TwigTemplate_403c85e2bad85f1a017111f28bf04639b7ce10e79e0f46e8d3f86c92d7871a56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_pm_characterbundle_classBAB_Edit_babs_row' => array($this, 'block__pm_characterbundle_classBAB_Edit_babs_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('_pm_characterbundle_classBAB_Edit_babs_row', $context, $blocks);
    }

    public function block__pm_characterbundle_classBAB_Edit_babs_row($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        ob_start();
        // line 4
        echo "        <table class=\"table table-condensed\" ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["babs"]) {
            // line 6
            echo "            <tr>
                <td>";
            // line 7
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["babs"], "lvl", array()), 'widget');
            echo "</td>
                <td>";
            // line 8
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["babs"], "attackNb", array()), 'widget');
            echo "</td>
                <td>";
            // line 9
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["babs"], "value", array()), 'widget');
            echo "</td>
                <td>";
            // line 10
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["babs"], "classDnD", array()), 'widget');
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['babs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </table>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "PMCharacterBundle:Form:fieldsClassBAB.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  53 => 10,  49 => 9,  45 => 8,  41 => 7,  38 => 6,  34 => 5,  29 => 4,  26 => 3,  20 => 2,);
    }
}
