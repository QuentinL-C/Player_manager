<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_16d34bbd5b5a46299fdb7a7ad1085d403fca3cd3069c752890309a1f27e4bdf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("PMUserBundle::layoutPublic.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'h1' => array($this, 'block_h1'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'PMUser_body' => array($this, 'block_PMUser_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts_block' => array($this, 'block_javascripts_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PMUserBundle::layoutPublic.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    &Eacute;dition Profil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_h1($context, array $blocks = array())
    {
        // line 8
        echo "    &Eacute;dition Profil Utilisateur :
";
    }

    // line 11
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
    <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Profil</a></li>
    <li class=\"active\">&Eacute;dition</li>
";
    }

    // line 17
    public function block_PMUser_body($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 19
        echo "        <div class=\"row\">
            <section class=\"col-lg-12\">
                ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 22
            echo "                    <div class=\"alert col-lg-7 alert-success\">
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
                ";
        // line 27
        $this->env->loadTemplate("PMUserBundle:Profile:edit_content.html.twig")->display($context);
        // line 28
        echo "            </section>
        </div>
    ";
    }

    // line 33
    public function block_javascripts_block($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "72a19d5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_72a19d5_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/72a19d5_edit_1.js");
            // line 35
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "72a19d5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_72a19d5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/72a19d5.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 35,  118 => 34,  115 => 33,  109 => 28,  107 => 27,  104 => 26,  95 => 23,  92 => 22,  88 => 21,  84 => 19,  77 => 18,  74 => 17,  67 => 13,  62 => 12,  59 => 11,  54 => 8,  51 => 7,  44 => 4,  41 => 3,  11 => 1,);
    }
}
