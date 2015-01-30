<?php

/* PMCharacterBundle:CharacterUsed:register_skills.html.twig */
class __TwigTemplate_a9c43ff2f70e4640b2e92298338144cb740a177051f5f43be47714be91c59598 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("PMCharacterBundle:CharacterUsed:layoutAdmin.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'h1' => array($this, 'block_h1'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'PM_body' => array($this, 'block_PM_body'),
            'javascripts_block' => array($this, 'block_javascripts_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PMCharacterBundle:CharacterUsed:layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "    Insertion - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_h1($context, array $blocks = array())
    {
        // line 10
        echo "    Gestion des Compétences :
";
    }

    // line 13
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
    <li class=\"active\">Insertion des Compétences</li>
";
    }

    // line 18
    public function block_PM_body($context, array $blocks = array())
    {
        // line 19
        echo "<div class=\"row\">
    <section id=\"content\" class=\"col-lg-8\">
        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 22
            echo "            <div class=\"alert alert-success\">
                ";
            // line 23
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        
        <div class=\"well\">
            ";
        // line 28
        $this->env->loadTemplate("PMCharacterBundle:CharacterUsed:register_skills_content.html.twig")->display($context);
        // line 29
        echo "        </div>
    </section>
    <aside class=\"col-lg-4\">
        Ici, contrôle live des infos ?
    </aside>
</div>
";
    }

    // line 37
    public function block_javascripts_block($context, array $blocks = array())
    {
        // line 38
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9897cd7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9897cd7_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9897cd7_characterUsedAddSkill_1.js");
            // line 39
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "9897cd7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9897cd7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9897cd7.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "PMCharacterBundle:CharacterUsed:register_skills.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 39,  111 => 38,  108 => 37,  98 => 29,  96 => 28,  92 => 26,  83 => 23,  80 => 22,  76 => 21,  72 => 19,  69 => 18,  61 => 14,  58 => 13,  53 => 10,  50 => 9,  43 => 6,  40 => 5,  11 => 3,);
    }
}
