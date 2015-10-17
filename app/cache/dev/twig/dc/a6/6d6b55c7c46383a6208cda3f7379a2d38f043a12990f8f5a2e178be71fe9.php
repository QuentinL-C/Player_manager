<?php

/* PMWelcomeBundle:Administration:index.html.twig */
class __TwigTemplate_dca66d6b55c7c46383a6208cda3f7379a2d38f043a12990f8f5a2e178be71fe9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("PMWelcomeBundle::layoutAdmin.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'h1' => array($this, 'block_h1'),
            'PM_body' => array($this, 'block_PM_body'),
            'javascripts_block' => array($this, 'block_javascripts_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PMWelcomeBundle::layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
    <li class=\"active\">Accueil</li>
";
    }

    // line 14
    public function block_h1($context, array $blocks = array())
    {
        // line 15
        echo "    Administration
";
    }

    // line 18
    public function block_PM_body($context, array $blocks = array())
    {
        // line 19
        echo "    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"well\">
                <h2>Utilisateurs :</h2>

                <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("pm_user_administration_homepage");
        echo "\">Gestion Utilisateurs</a>
            </div>
            <div class=\"well\">
                <h2>Parties :</h2>
                
                <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("pm_game_administration_homepage");
        echo "\">Gestion des Parties</a><br />
                <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("pm_characterused_administration_homepage");
        echo "\">Gestion des Personnages</a><br />
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"well\">
                <h2>Règles :</h2>
                
                <h3>Personnages :</h3>
                <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("pm_ability_administration_homepage");
        echo "\">Gestion des Caractéristiques</a><br />
                <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("pm_alignment_administration_homepage");
        echo "\">Gestion des Alignements</a><br />
                <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("pm_classdnd_administration_homepage");
        echo "\">Gestion des Classes</a><br />
                <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("pm_race_administration_homepage");
        echo "\">Gestion des Races</a><br />
                <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("pm_language_administration_homepage");
        echo "\">Gestion des Langues</a><br />
                <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("pm_skill_administration_homepage");
        echo "\">Gestion des Compétences</a><br />
                <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("pm_size_administration_homepage");
        echo "\">Gestion des Tailles</a><br />
                <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("pm_level_administration_homepage");
        echo "\">Gestion des Niveaux</a>
               
                <h3>Monstres :</h3>
                <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("pm_monster_administration_homepage");
        echo "\">Gestion des Monstres</a><br />
                <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("pm_environment_administration_homepage");
        echo "\">Gestion des Environnements</a><br />
                <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("pm_monstertype_administration_homepage");
        echo "\">Gestion des Types de monstre</a><br />
                <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("pm_monstersubtype_administration_homepage");
        echo "\">Gestion des Sous-Types de monstre</a><br />
                <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("pm_speedspecial_administration_homepage");
        echo "\">Gestion des Modes de déplacement</a><br />
                
                <h3>Dons :</h3>
                <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("pm_gift_administration_homepage");
        echo "\">Gestion des Dons</a><br />
            
                <h3>Armes :</h3>               
                <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("pm_weapon_administration_homepage");
        echo "\">Gestion des Armes</a><br />
                <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("pm_weapontype_administration_homepage");
        echo "\">Gestion des Types d'Arme</a><br />
            </div>
        </div>
    </div>
";
    }

    // line 65
    public function block_javascripts_block($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "PMWelcomeBundle:Administration:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 65,  168 => 59,  164 => 58,  158 => 55,  152 => 52,  148 => 51,  144 => 50,  140 => 49,  136 => 48,  130 => 45,  126 => 44,  122 => 43,  118 => 42,  114 => 41,  110 => 40,  106 => 39,  102 => 38,  91 => 30,  87 => 29,  79 => 24,  72 => 19,  69 => 18,  64 => 15,  61 => 14,  53 => 10,  50 => 9,  43 => 6,  40 => 5,  11 => 3,);
    }
}
