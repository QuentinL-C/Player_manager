<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/72a19d5')) {
                // _assetic_72a19d5
                if ($pathinfo === '/js/72a19d5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '72a19d5',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_72a19d5',);
                }

                // _assetic_72a19d5_0
                if ($pathinfo === '/js/72a19d5_edit_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '72a19d5',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_72a19d5_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/0649fc5')) {
                // _assetic_0649fc5
                if ($pathinfo === '/js/0649fc5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0649fc5',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_0649fc5',);
                }

                // _assetic_0649fc5_0
                if ($pathinfo === '/js/0649fc5_register_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0649fc5',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_0649fc5_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/1f60180')) {
                // _assetic_1f60180
                if ($pathinfo === '/js/1f60180.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1f60180',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_1f60180',);
                }

                if (0 === strpos($pathinfo, '/js/1f60180_part_1_')) {
                    // _assetic_1f60180_0
                    if ($pathinfo === '/js/1f60180_part_1_characterUsedAddSkill_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1f60180',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_1f60180_0',);
                    }

                    if (0 === strpos($pathinfo, '/js/1f60180_part_1_edit')) {
                        // _assetic_1f60180_1
                        if ($pathinfo === '/js/1f60180_part_1_editBAB_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1f60180',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_1f60180_1',);
                        }

                        // _assetic_1f60180_2
                        if ($pathinfo === '/js/1f60180_part_1_editCharacterUsed_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1f60180',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_1f60180_2',);
                        }

                        // _assetic_1f60180_3
                        if ($pathinfo === '/js/1f60180_part_1_editST_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1f60180',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_1f60180_3',);
                        }

                    }

                    // _assetic_1f60180_4
                    if ($pathinfo === '/js/1f60180_part_1_registerCharacterUsed_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1f60180',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_1f60180_4',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/5f30504')) {
                // _assetic_5f30504
                if ($pathinfo === '/js/5f30504.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5f30504',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_5f30504',);
                }

                // _assetic_5f30504_0
                if ($pathinfo === '/js/5f30504_editCharacterUsed_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5f30504',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_5f30504_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/4a1cdb1')) {
                // _assetic_4a1cdb1
                if ($pathinfo === '/js/4a1cdb1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4a1cdb1',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_4a1cdb1',);
                }

                // _assetic_4a1cdb1_0
                if ($pathinfo === '/js/4a1cdb1_registerCharacterUsed_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4a1cdb1',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_4a1cdb1_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/9897cd7')) {
                // _assetic_9897cd7
                if ($pathinfo === '/js/9897cd7.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9897cd7',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_9897cd7',);
                }

                // _assetic_9897cd7_0
                if ($pathinfo === '/js/9897cd7_characterUsedAddSkill_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9897cd7',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_9897cd7_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/29a071e')) {
                // _assetic_29a071e
                if ($pathinfo === '/js/29a071e.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '29a071e',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_29a071e',);
                }

                // _assetic_29a071e_0
                if ($pathinfo === '/js/29a071e_editBAB_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '29a071e',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_29a071e_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/068af72')) {
                // _assetic_068af72
                if ($pathinfo === '/js/068af72.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '068af72',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_068af72',);
                }

                // _assetic_068af72_0
                if ($pathinfo === '/js/068af72_editST_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '068af72',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_068af72_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // pm_welcome_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pm_welcome_index');
            }

            return array (  '_controller' => 'PM\\WelcomeBundle\\Controller\\HomepageController::indexAction',  '_route' => 'pm_welcome_index',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // pm_welcome_homepage
            if ($pathinfo === '/accueil') {
                return array (  '_controller' => 'PM\\WelcomeBundle\\Controller\\HomepageController::indexAction',  '_route' => 'pm_welcome_homepage',);
            }

            // pm_administration_homepage
            if ($pathinfo === '/administration') {
                return array (  '_controller' => 'PM\\WelcomeBundle\\Controller\\AdministrationController::indexAction',  '_route' => 'pm_administration_homepage',);
            }

        }

        if (0 === strpos($pathinfo, '/character')) {
            if (0 === strpos($pathinfo, '/character/alignement')) {
                // pm_alignment_administration_homepage
                if ($pathinfo === '/character/alignement') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\AlignmentController::indexAction',  '_route' => 'pm_alignment_administration_homepage',);
                }

                // pm_alignment_administration_insert
                if ($pathinfo === '/character/alignement/insertion') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\AlignmentController::registerAction',  '_route' => 'pm_alignment_administration_insert',);
                }

                // pm_alignment_administration_list
                if ($pathinfo === '/character/alignement/liste') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\AlignmentController::listAction',  '_route' => 'pm_alignment_administration_list',);
                }

                // pm_alignment_administration_view
                if (0 === strpos($pathinfo, '/character/alignement/vue') && preg_match('#^/character/alignement/vue/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_alignment_administration_view')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\AlignmentController::viewAction',));
                }

                // pm_alignment_administration_edit
                if (0 === strpos($pathinfo, '/character/alignement/editer') && preg_match('#^/character/alignement/editer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_alignment_administration_edit')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\AlignmentController::editAction',));
                }

            }

            if (0 === strpos($pathinfo, '/character/classe')) {
                // pm_classdnd_administration_homepage
                if ($pathinfo === '/character/classe') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\ClassDnDController::indexAction',  '_route' => 'pm_classdnd_administration_homepage',);
                }

                // pm_classdnd_administration_insert
                if ($pathinfo === '/character/classe/insertion') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\ClassDnDController::registerAction',  '_route' => 'pm_classdnd_administration_insert',);
                }

                // pm_classdnd_administration_list
                if ($pathinfo === '/character/classe/liste') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\ClassDnDController::listAction',  '_route' => 'pm_classdnd_administration_list',);
                }

                // pm_classdnd_administration_view
                if (0 === strpos($pathinfo, '/character/classe/vue') && preg_match('#^/character/classe/vue/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_classdnd_administration_view')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\ClassDnDController::viewAction',));
                }

                if (0 === strpos($pathinfo, '/character/classe/editer')) {
                    // pm_classdnd_administration_edit_bab
                    if (0 === strpos($pathinfo, '/character/classe/editer/bab') && preg_match('#^/character/classe/editer/bab/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_classdnd_administration_edit_bab')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\ClassDnDController::editBABAction',));
                    }

                    // pm_classdnd_administration_edit_st
                    if (0 === strpos($pathinfo, '/character/classe/editer/st') && preg_match('#^/character/classe/editer/st/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_classdnd_administration_edit_st')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\ClassDnDController::editSTAction',));
                    }

                    // pm_classdnd_administration_edit
                    if (preg_match('#^/character/classe/editer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_classdnd_administration_edit')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\ClassDnDController::editAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/character/race')) {
                // pm_race_administration_homepage
                if ($pathinfo === '/character/race') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\RaceController::indexAction',  '_route' => 'pm_race_administration_homepage',);
                }

                // pm_race_administration_insert
                if ($pathinfo === '/character/race/insertion') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\RaceController::registerAction',  '_route' => 'pm_race_administration_insert',);
                }

                // pm_race_administration_list
                if ($pathinfo === '/character/race/liste') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\RaceController::listAction',  '_route' => 'pm_race_administration_list',);
                }

                // pm_race_administration_view
                if (0 === strpos($pathinfo, '/character/race/vue') && preg_match('#^/character/race/vue/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_race_administration_view')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\RaceController::viewAction',));
                }

                // pm_race_administration_edit
                if (0 === strpos($pathinfo, '/character/race/editer') && preg_match('#^/character/race/editer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_race_administration_edit')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\RaceController::editAction',));
                }

            }

            if (0 === strpos($pathinfo, '/character/langue')) {
                // pm_language_administration_homepage
                if ($pathinfo === '/character/langue') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\LanguageController::indexAction',  '_route' => 'pm_language_administration_homepage',);
                }

                // pm_language_administration_insert
                if ($pathinfo === '/character/langue/insertion') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\LanguageController::registerAction',  '_route' => 'pm_language_administration_insert',);
                }

                // pm_language_administration_list
                if ($pathinfo === '/character/langue/liste') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\LanguageController::listAction',  '_route' => 'pm_language_administration_list',);
                }

                // pm_language_administration_view
                if (0 === strpos($pathinfo, '/character/langue/vue') && preg_match('#^/character/langue/vue/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_language_administration_view')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\LanguageController::viewAction',));
                }

                // pm_language_administration_edit
                if (0 === strpos($pathinfo, '/character/langue/editer') && preg_match('#^/character/langue/editer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_language_administration_edit')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\LanguageController::editAction',));
                }

            }

            if (0 === strpos($pathinfo, '/character/personnage')) {
                // pm_characterused_administration_homepage
                if ($pathinfo === '/character/personnage') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\CharacterUsedController::indexAction',  '_route' => 'pm_characterused_administration_homepage',);
                }

                if (0 === strpos($pathinfo, '/character/personnage/insertion')) {
                    // pm_characterused_administration_insert
                    if ($pathinfo === '/character/personnage/insertion') {
                        return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\CharacterUsedController::registerAction',  '_route' => 'pm_characterused_administration_insert',);
                    }

                    if (0 === strpos($pathinfo, '/character/personnage/insertion/c')) {
                        // pm_characterused_administration_insert_abilities
                        if (0 === strpos($pathinfo, '/character/personnage/insertion/caracteristiques') && preg_match('#^/character/personnage/insertion/caracteristiques/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_characterused_administration_insert_abilities')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\CharacterUsedController::registerAbilitiesAction',));
                        }

                        // pm_characterused_administration_insert_skills
                        if (0 === strpos($pathinfo, '/character/personnage/insertion/competences') && preg_match('#^/character/personnage/insertion/competences/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_characterused_administration_insert_skills')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\CharacterUsedController::registerSkillsAction',));
                        }

                    }

                }

                // pm_characterused_administration_list
                if ($pathinfo === '/character/personnage/liste') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\CharacterUsedController::listAction',  '_route' => 'pm_characterused_administration_list',);
                }

                // pm_characterused_administration_view
                if (0 === strpos($pathinfo, '/character/personnage/vue') && preg_match('#^/character/personnage/vue/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_characterused_administration_view')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\CharacterUsedController::viewAction',));
                }

                // pm_characterused_administration_edit
                if (0 === strpos($pathinfo, '/character/personnage/editer') && preg_match('#^/character/personnage/editer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_characterused_administration_edit')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\CharacterUsedController::editAction',));
                }

            }

            if (0 === strpos($pathinfo, '/character/competence')) {
                // pm_skill_administration_homepage
                if ($pathinfo === '/character/competence') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\SkillController::indexAction',  '_route' => 'pm_skill_administration_homepage',);
                }

                // pm_skill_administration_insert
                if ($pathinfo === '/character/competence/insertion') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\SkillController::registerAction',  '_route' => 'pm_skill_administration_insert',);
                }

                // pm_skill_administration_list
                if ($pathinfo === '/character/competence/liste') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\SkillController::listAction',  '_route' => 'pm_skill_administration_list',);
                }

                // pm_skill_administration_view
                if (0 === strpos($pathinfo, '/character/competence/vue') && preg_match('#^/character/competence/vue/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_skill_administration_view')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\SkillController::viewAction',));
                }

                // pm_skill_administration_edit
                if (0 === strpos($pathinfo, '/character/competence/editer') && preg_match('#^/character/competence/editer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_skill_administration_edit')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\SkillController::editAction',));
                }

            }

            if (0 === strpos($pathinfo, '/character/taille')) {
                // pm_size_administration_homepage
                if ($pathinfo === '/character/taille') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\SizeController::indexAction',  '_route' => 'pm_size_administration_homepage',);
                }

                // pm_size_administration_insert
                if ($pathinfo === '/character/taille/insertion') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\SizeController::registerAction',  '_route' => 'pm_size_administration_insert',);
                }

                // pm_size_administration_list
                if ($pathinfo === '/character/taille/liste') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\SizeController::listAction',  '_route' => 'pm_size_administration_list',);
                }

                // pm_size_administration_view
                if (0 === strpos($pathinfo, '/character/taille/vue') && preg_match('#^/character/taille/vue/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_size_administration_view')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\SizeController::viewAction',));
                }

                // pm_size_administration_edit
                if (0 === strpos($pathinfo, '/character/taille/editer') && preg_match('#^/character/taille/editer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_size_administration_edit')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\SizeController::editAction',));
                }

            }

        }

        // pm_game_homepage
        if (0 === strpos($pathinfo, '/game/hello') && preg_match('#^/game/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_game_homepage')), array (  '_controller' => 'PM\\GameBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/utilisateur')) {
            // pm_user_homepage
            if (rtrim($pathinfo, '/') === '/utilisateur') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'pm_user_homepage');
                }

                return array (  '_controller' => 'PM\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'pm_user_homepage',);
            }

            // pm_user_list
            if ($pathinfo === '/utilisateur/liste') {
                return array (  '_controller' => 'PM\\UserBundle\\Controller\\UserController::UsersListAction',  '_route' => 'pm_user_list',);
            }

            // pm_user_view
            if (0 === strpos($pathinfo, '/utilisateur/user') && preg_match('#^/utilisateur/user/(?P<user_id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_user_view')), array (  '_controller' => 'PM\\UserBundle\\Controller\\UserController::ViewAction',));
            }

            // pm_user_ajax_password
            if ($pathinfo === '/utilisateur/1234-password') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pm_user_ajax_password;
                }

                return array (  '_controller' => 'PM\\UserBundle\\Controller\\RegistrationController::AjaxPasswordAction',  '_route' => 'pm_user_ajax_password',);
            }
            not_pm_user_ajax_password:

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // fos_user_security_login
        if ($pathinfo === '/connexion') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
        }

        // fos_user_security_check
        if ($pathinfo === '/login_check') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fos_user_security_check;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
        }
        not_fos_user_security_check:

        // fos_user_security_logout
        if ($pathinfo === '/deconnexion') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }

        if (0 === strpos($pathinfo, '/utilisateur')) {
            if (0 === strpos($pathinfo, '/utilisateur/profile')) {
                // fos_user_profile_show
                if (rtrim($pathinfo, '/') === '/utilisateur/profile') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_profile_show;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                    }

                    return array (  '_controller' => 'PM\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
                }
                not_fos_user_profile_show:

                // fos_user_profile_edit
                if ($pathinfo === '/utilisateur/profile/modifier') {
                    return array (  '_controller' => 'PM\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
                }

            }

            if (0 === strpos($pathinfo, '/utilisateur/nouveau')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/utilisateur/nouveau') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'PM\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/utilisateur/nouveau/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/utilisateur/nouveau/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'PM\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/utilisateur/nouveau/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/utilisateur/nouveau/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'PM\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/utilisateur/nouveau/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'PM\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/utilisateur/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/utilisateur/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/utilisateur/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/utilisateur/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/utilisateur/resetting/reset') && preg_match('#^/utilisateur/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

            // fos_user_change_password
            if ($pathinfo === '/utilisateur/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
