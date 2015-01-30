<?php

/* PMCharacterBundle:CharacterUsed:register_skills_content.html.twig */
class __TwigTemplate_476c011bf211e8d5082c40e39d937555a5bde2e6209daae3051821a31f3b9084 extends Twig_Template
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
<form class=\"form-horizontal\" method=\"post\" ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " role=\"form\">
    ";
        // line 4
        if ( !$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 5
            echo "    <div class=\"alert alert-error\">
        <strong>Votre formulaire contient les erreurs suivantes :</strong>
        ";
            // line 7
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "skills", array()), 'errors');
            echo "
        ";
            // line 8
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "skills", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["skillFields"]) {
                // line 9
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["skillFields"], 'errors');
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skillFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "  
    </div>
    <br />
    ";
        }
        // line 14
        echo "
    <fieldset>
        <legend>Compétences de ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "name", array()), "html", null, true);
        echo " :</legend>

        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "skills", array()), 'row');
        echo " 
    </fieldset>
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    <center><input type=\"submit\" class=\"btn btn-default\" /></center>
</form>";
    }

    public function getTemplateName()
    {
        return "PMCharacterBundle:CharacterUsed:register_skills_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 20,  64 => 18,  59 => 16,  55 => 14,  49 => 10,  40 => 9,  36 => 8,  32 => 7,  28 => 5,  26 => 4,  22 => 3,  19 => 2,);
    }
}
