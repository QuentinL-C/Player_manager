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

            // _assetic_c9d1fb9
            if ($pathinfo === '/js/c9d1fb9.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'c9d1fb9',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_c9d1fb9',);
            }

            if (0 === strpos($pathinfo, '/js/1')) {
                if (0 === strpos($pathinfo, '/js/138d01c')) {
                    // _assetic_138d01c
                    if ($pathinfo === '/js/138d01c.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '138d01c',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_138d01c',);
                    }

                    // _assetic_138d01c_0
                    if ($pathinfo === '/js/138d01c_main_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '138d01c',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_138d01c_0',);
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

            // _assetic_e4176c0
            if ($pathinfo === '/js/e4176c0.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'e4176c0',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_e4176c0',);
            }

            // _assetic_15c11b6
            if ($pathinfo === '/js/15c11b6.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '15c11b6',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_15c11b6',);
            }

            // _assetic_4c14cca
            if ($pathinfo === '/js/4c14cca.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '4c14cca',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_4c14cca',);
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

        if (0 === strpos($pathinfo, '/administration')) {
            if (0 === strpos($pathinfo, '/administration/dons')) {
                // pm_gift_administration_homepage
                if ($pathinfo === '/administration/dons') {
                    return array (  '_controller' => 'PM\\GiftBundle\\Controller\\GiftController::indexAction',  '_route' => 'pm_gift_administration_homepage',);
                }

                // pm_gift_administration_insert
                if ($pathinfo === '/administration/dons/insertion') {
                    return array (  '_controller' => 'PM\\GiftBundle\\Controller\\GiftController::registerAction',  '_route' => 'pm_gift_administration_insert',);
                }

                // pm_gift_administration_list
                if ($pathinfo === '/administration/dons/liste') {
                    return array (  '_controller' => 'PM\\GiftBundle\\Controller\\GiftController::listAction',  '_route' => 'pm_gift_administration_list',);
                }

                // pm_gift_administration_view
                if (0 === strpos($pathinfo, '/administration/dons/vue') && preg_match('#^/administration/dons/vue/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_gift_administration_view')), array (  '_controller' => 'PM\\GiftBundle\\Controller\\GiftController::viewAction',));
                }

                // pm_gift_administration_edit
                if (0 === strpos($pathinfo, '/administration/dons/editer') && preg_match('#^/administration/dons/editer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_gift_administration_edit')), array (  '_controller' => 'PM\\GiftBundle\\Controller\\GiftController::editAction',));
                }

                // pm_gift_administration_delete
                if (0 === strpos($pathinfo, '/administration/dons/supprimer') && preg_match('#^/administration/dons/supprimer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_gift_administration_delete')), array (  '_controller' => 'PM\\GiftBundle\\Controller\\GiftController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/administration/armes')) {
                if (0 === strpos($pathinfo, '/administration/armes/types')) {
                    // pm_weapontype_administration_homepage
                    if ($pathinfo === '/administration/armes/types') {
                        return array (  '_controller' => 'PM\\WeaponBundle\\Controller\\WeaponTypeController::indexAction',  '_route' => 'pm_weapontype_administration_homepage',);
                    }

                    // pm_weapontype_administration_insert
                    if ($pathinfo === '/administration/armes/types/insertion') {
                        return array (  '_controller' => 'PM\\WeaponBundle\\Controller\\WeaponTypeController::registerAction',  '_route' => 'pm_weapontype_administration_insert',);
                    }

                    // pm_weapontype_administration_list
                    if ($pathinfo === '/administration/armes/types/liste') {
                        return array (  '_controller' => 'PM\\WeaponBundle\\Controller\\WeaponTypeController::listAction',  '_route' => 'pm_weapontype_administration_list',);
                    }

                    // pm_weapontype_administration_view
                    if (0 === strpos($pathinfo, '/administration/armes/types/vue') && preg_match('#^/administration/armes/types/vue/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_weapontype_administration_view')), array (  '_controller' => 'PM\\WeaponBundle\\Controller\\WeaponTypeController::viewAction',));
                    }

                    // pm_weapontype_administration_edit
                    if (0 === strpos($pathinfo, '/administration/armes/types/editer') && preg_match('#^/administration/armes/types/editer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_weapontype_administration_edit')), array (  '_controller' => 'PM\\WeaponBundle\\Controller\\WeaponTypeController::editAction',));
                    }

                    // pm_weapontype_administration_delete
                    if (0 === strpos($pathinfo, '/administration/armes/types/supprimer') && preg_match('#^/administration/armes/types/supprimer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_weapontype_administration_delete')), array (  '_controller' => 'PM\\WeaponBundle\\Controller\\WeaponTypeController::deleteAction',));
                    }

                }

                // pm_weapon_administration_homepage
                if ($pathinfo === '/administration/armes') {
                    return array (  '_controller' => 'PM\\WeaponBundle\\Controller\\WeaponController::indexAction',  '_route' => 'pm_weapon_administration_homepage',);
                }

                // pm_weapon_administration_insert
                if ($pathinfo === '/administration/armes/insertion') {
                    return array (  '_controller' => 'PM\\WeaponBundle\\Controller\\WeaponController::registerAction',  '_route' => 'pm_weapon_administration_insert',);
                }

                // pm_weapon_administration_list
                if ($pathinfo === '/administration/armes/liste') {
                    return array (  '_controller' => 'PM\\WeaponBundle\\Controller\\WeaponController::listAction',  '_route' => 'pm_weapon_administration_list',);
                }

                // pm_weapon_administration_view
                if (0 === strpos($pathinfo, '/administration/armes/vue') && preg_match('#^/administration/armes/vue/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_weapon_administration_view')), array (  '_controller' => 'PM\\WeaponBundle\\Controller\\WeaponController::viewAction',));
                }

                // pm_weapon_administration_edit
                if (0 === strpos($pathinfo, '/administration/armes/editer') && preg_match('#^/administration/armes/editer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_weapon_administration_edit')), array (  '_controller' => 'PM\\WeaponBundle\\Controller\\WeaponController::editAction',));
                }

                // pm_weapon_administration_delete
                if (0 === strpos($pathinfo, '/administration/armes/supprimer') && preg_match('#^/administration/armes/supprimer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_weapon_administration_delete')), array (  '_controller' => 'PM\\WeaponBundle\\Controller\\WeaponController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/administration/monstres')) {
                // pm_monster_administration_homepage
                if ($pathinfo === '/administration/monstres') {
                    return array (  '_controller' => 'PM\\MonsterBundle\\Controller\\MonsterController::indexAction',  '_route' => 'pm_monster_administration_homepage',);
                }

                // pm_monster_administration_insert
                if ($pathinfo === '/administration/monstres/insertion') {
                    return array (  '_controller' => 'PM\\MonsterBundle\\Controller\\MonsterController::registerAction',  '_route' => 'pm_monster_administration_insert',);
                }

                // pm_monster_administration_list
                if ($pathinfo === '/administration/monstres/liste') {
                    return array (  '_controller' => 'PM\\MonsterBundle\\Controller\\MonsterController::listAction',  '_route' => 'pm_monster_administration_list',);
                }

                // pm_monster_administration_view
                if (0 === strpos($pathinfo, '/administration/monstres/vue') && preg_match('#^/administration/monstres/vue/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_monster_administration_view')), array (  '_controller' => 'PM\\MonsterBundle\\Controller\\MonsterController::viewAction',));
                }

                // pm_monster_administration_edit
                if (0 === strpos($pathinfo, '/administration/monstres/editer') && preg_match('#^/administration/monstres/editer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_monster_administration_edit')), array (  '_controller' => 'PM\\MonsterBundle\\Controller\\MonsterController::editAction',));
                }

                // pm_monster_administration_delete
                if (0 === strpos($pathinfo, '/administration/monstres/supprimer') && preg_match('#^/administration/monstres/supprimer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_monster_administration_delete')), array (  '_controller' => 'PM\\MonsterBundle\\Controller\\MonsterController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/administration/environnements')) {
                // pm_environment_administration_homepage
                if ($pathinfo === '/administration/environnements') {
                    return array (  '_controller' => 'PM\\MonsterBundle\\Controller\\EnvironmentController::indexAction',  '_route' => 'pm_environment_administration_homepage',);
                }

                // pm_environment_administration_insert
                if ($pathinfo === '/administration/environnements/insertion') {
                    return array (  '_controller' => 'PM\\MonsterBundle\\Controller\\EnvironmentController::registerAction',  '_route' => 'pm_environment_administration_insert',);
                }

                // pm_environment_administration_list
                if ($pathinfo === '/administration/environnements/liste') {
                    return array (  '_controller' => 'PM\\MonsterBundle\\Controller\\EnvironmentController::listAction',  '_route' => 'pm_environment_administration_list',);
                }

                // pm_environment_administration_view
                if (0 === strpos($pathinfo, '/administration/environnements/vue') && preg_match('#^/administration/environnements/vue/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_environment_administration_view')), array (  '_controller' => 'PM\\MonsterBundle\\Controller\\EnvironmentController::viewAction',));
                }

                // pm_environment_administration_edit
                if (0 === strpos($pathinfo, '/administration/environnements/editer') && preg_match('#^/administration/environnements/editer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_environment_administration_edit')), array (  '_controller' => 'PM\\MonsterBundle\\Controller\\EnvironmentController::editAction',));
                }

                // pm_environment_administration_delete
                if (0 === strpos($pathinfo, '/administration/environnements/supprimer') && preg_match('#^/administration/environnements/supprimer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_environment_administration_delete')), array (  '_controller' => 'PM\\MonsterBundle\\Controller\\EnvironmentController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/administration/monstre-')) {
                if (0 === strpos($pathinfo, '/administration/monstre-types')) {
                    // pm_monstertype_administration_homepage
                    if ($pathinfo === '/administration/monstre-types') {
                        return array (  '_controller' => 'PM\\MonsterBundle\\Controller\\MonsterTypeController::indexAction',  '_route' => 'pm_monstertype_administration_homepage',);
                    }

                    // pm_monstertype_administration_insert
                    if ($pathinfo === '/administration/monstre-types/insertion') {
                        return array (  '_controller' => 'PM\\MonsterBundle\\Controller\\MonsterTypeController::registerAction',  '_route' => 'pm_monstertype_administration_insert',);
                    }

                    // pm_monstertype_administration_list
                    if ($pathinfo === '/administration/monstre-types/liste') {
                        return array (  '_controller' => 'PM\\MonsterBundle\\Controller\\MonsterTypeController::listAction',  '_route' => 'pm_monstertype_administration_list',);
                    }

                    // pm_monstertype_administration_view
                    if (0 === strpos($pathinfo, '/administration/monstre-types/vue') && preg_match('#^/administration/monstre\\-types/vue/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_monstertype_administration_view')), array (  '_controller' => 'PM\\MonsterBundle\\Controller\\MonsterTypeController::viewAction',));
                    }

                    // pm_monstertype_administration_edit
                    if (0 === strpos($pathinfo, '/administration/monstre-types/editer') && preg_match('#^/administration/monstre\\-types/editer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_monstertype_administration_edit')), array (  '_controller' => 'PM\\MonsterBundle\\Controller\\MonsterTypeController::editAction',));
                    }

                    // pm_monstertype_administration_delete
                    if (0 === strpos($pathinfo, '/administration/monstre-types/supprimer') && preg_match('#^/administration/monstre\\-types/supprimer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_monstertype_administration_delete')), array (  '_controller' => 'PM\\MonsterBundle\\Controller\\MonsterTypeController::deleteAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/administration/monstre-sous-types')) {
                    // pm_monstersubtype_administration_homepage
                    if ($pathinfo === '/administration/monstre-sous-types') {
                        return array (  '_controller' => 'PM\\MonsterBundle\\Controller\\MonsterSubTypeController::indexAction',  '_route' => 'pm_monstersubtype_administration_homepage',);
                    }

                    // pm_monstersubtype_administration_insert
                    if ($pathinfo === '/administration/monstre-sous-types/insertion') {
                        return array (  '_controller' => 'PM\\MonsterBundle\\Controller\\MonsterSubTypeController::registerAction',  '_route' => 'pm_monstersubtype_administration_insert',);
                    }

                    // pm_monstersubtype_administration_list
                    if ($pathinfo === '/administration/monstre-sous-types/liste') {
                        return array (  '_controller' => 'PM\\MonsterBundle\\Controller\\MonsterSubTypeController::listAction',  '_route' => 'pm_monstersubtype_administration_list',);
                    }

                    // pm_monstersubtype_administration_view
                    if (0 === strpos($pathinfo, '/administration/monstre-sous-types/vue') && preg_match('#^/administration/monstre\\-sous\\-types/vue/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_monstersubtype_administration_view')), array (  '_controller' => 'PM\\MonsterBundle\\Controller\\MonsterSubTypeController::viewAction',));
                    }

                    // pm_monstersubtype_administration_edit
                    if (0 === strpos($pathinfo, '/administration/monstre-sous-types/editer') && preg_match('#^/administration/monstre\\-sous\\-types/editer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_monstersubtype_administration_edit')), array (  '_controller' => 'PM\\MonsterBundle\\Controller\\MonsterSubTypeController::editAction',));
                    }

                    // pm_monstersubtype_administration_delete
                    if (0 === strpos($pathinfo, '/administration/monstre-sous-types/supprimer') && preg_match('#^/administration/monstre\\-sous\\-types/supprimer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_monstersubtype_administration_delete')), array (  '_controller' => 'PM\\MonsterBundle\\Controller\\MonsterSubTypeController::deleteAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/administration/deplacements')) {
                // pm_speedspecial_administration_homepage
                if ($pathinfo === '/administration/deplacements') {
                    return array (  '_controller' => 'PM\\MonsterBundle\\Controller\\SpeedSpecialController::indexAction',  '_route' => 'pm_speedspecial_administration_homepage',);
                }

                // pm_speedspecial_administration_insert
                if ($pathinfo === '/administration/deplacements/insertion') {
                    return array (  '_controller' => 'PM\\MonsterBundle\\Controller\\SpeedSpecialController::registerAction',  '_route' => 'pm_speedspecial_administration_insert',);
                }

                // pm_speedspecial_administration_list
                if ($pathinfo === '/administration/deplacements/liste') {
                    return array (  '_controller' => 'PM\\MonsterBundle\\Controller\\SpeedSpecialController::listAction',  '_route' => 'pm_speedspecial_administration_list',);
                }

                // pm_speedspecial_administration_view
                if (0 === strpos($pathinfo, '/administration/deplacements/vue') && preg_match('#^/administration/deplacements/vue/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_speedspecial_administration_view')), array (  '_controller' => 'PM\\MonsterBundle\\Controller\\SpeedSpecialController::viewAction',));
                }

                // pm_speedspecial_administration_edit
                if (0 === strpos($pathinfo, '/administration/deplacements/editer') && preg_match('#^/administration/deplacements/editer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_speedspecial_administration_edit')), array (  '_controller' => 'PM\\MonsterBundle\\Controller\\SpeedSpecialController::editAction',));
                }

                // pm_speedspecial_administration_delete
                if (0 === strpos($pathinfo, '/administration/deplacements/supprimer') && preg_match('#^/administration/deplacements/supprimer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_speedspecial_administration_delete')), array (  '_controller' => 'PM\\MonsterBundle\\Controller\\SpeedSpecialController::deleteAction',));
                }

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

            if (0 === strpos($pathinfo, '/administration')) {
                // pm_administration_homepage
                if ($pathinfo === '/administration') {
                    return array (  '_controller' => 'PM\\WelcomeBundle\\Controller\\AdministrationController::indexAction',  '_route' => 'pm_administration_homepage',);
                }

                if (0 === strpos($pathinfo, '/administration/alignements')) {
                    // pm_alignment_administration_homepage
                    if ($pathinfo === '/administration/alignements') {
                        return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\AlignmentController::indexAction',  '_route' => 'pm_alignment_administration_homepage',);
                    }

                    // pm_alignment_administration_insert
                    if ($pathinfo === '/administration/alignements/insertion') {
                        return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\AlignmentController::registerAction',  '_route' => 'pm_alignment_administration_insert',);
                    }

                    // pm_alignment_administration_list
                    if ($pathinfo === '/administration/alignements/liste') {
                        return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\AlignmentController::listAction',  '_route' => 'pm_alignment_administration_list',);
                    }

                    // pm_alignment_administration_view
                    if (0 === strpos($pathinfo, '/administration/alignements/vue') && preg_match('#^/administration/alignements/vue/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_alignment_administration_view')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\AlignmentController::viewAction',));
                    }

                    // pm_alignment_administration_edit
                    if (0 === strpos($pathinfo, '/administration/alignements/editer') && preg_match('#^/administration/alignements/editer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_alignment_administration_edit')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\AlignmentController::editAction',));
                    }

                    // pm_alignment_administration_delete
                    if (0 === strpos($pathinfo, '/administration/alignements/supprimer') && preg_match('#^/administration/alignements/supprimer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_alignment_administration_delete')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\AlignmentController::deleteAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/administration/classes')) {
                    // pm_classdnd_administration_homepage
                    if ($pathinfo === '/administration/classes') {
                        return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\ClassDnDController::indexAction',  '_route' => 'pm_classdnd_administration_homepage',);
                    }

                    // pm_classdnd_administration_insert
                    if ($pathinfo === '/administration/classes/insertion') {
                        return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\ClassDnDController::registerAction',  '_route' => 'pm_classdnd_administration_insert',);
                    }

                    // pm_classdnd_administration_list
                    if ($pathinfo === '/administration/classes/liste') {
                        return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\ClassDnDController::listAction',  '_route' => 'pm_classdnd_administration_list',);
                    }

                    // pm_classdnd_administration_view
                    if (0 === strpos($pathinfo, '/administration/classes/vue') && preg_match('#^/administration/classes/vue/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_classdnd_administration_view')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\ClassDnDController::viewAction',));
                    }

                    if (0 === strpos($pathinfo, '/administration/classes/editer')) {
                        // pm_classdnd_administration_edit_bab
                        if (0 === strpos($pathinfo, '/administration/classes/editer/bab') && preg_match('#^/administration/classes/editer/bab/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_classdnd_administration_edit_bab')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\ClassDnDController::editBABAction',));
                        }

                        // pm_classdnd_administration_edit_st
                        if (0 === strpos($pathinfo, '/administration/classes/editer/st') && preg_match('#^/administration/classes/editer/st/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_classdnd_administration_edit_st')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\ClassDnDController::editSTAction',));
                        }

                        // pm_classdnd_administration_edit
                        if (preg_match('#^/administration/classes/editer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_classdnd_administration_edit')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\ClassDnDController::editAction',));
                        }

                    }

                    // pm_classdnd_administration_delete
                    if (0 === strpos($pathinfo, '/administration/classes/supprimer') && preg_match('#^/administration/classes/supprimer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_classdnd_administration_delete')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\ClassDnDController::deleteAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/administration/races')) {
                    // pm_race_administration_homepage
                    if ($pathinfo === '/administration/races') {
                        return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\RaceController::indexAction',  '_route' => 'pm_race_administration_homepage',);
                    }

                    // pm_race_administration_insert
                    if ($pathinfo === '/administration/races/insertion') {
                        return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\RaceController::registerAction',  '_route' => 'pm_race_administration_insert',);
                    }

                    // pm_race_administration_list
                    if ($pathinfo === '/administration/races/liste') {
                        return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\RaceController::listAction',  '_route' => 'pm_race_administration_list',);
                    }

                    // pm_race_administration_view
                    if (0 === strpos($pathinfo, '/administration/races/vue') && preg_match('#^/administration/races/vue/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_race_administration_view')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\RaceController::viewAction',));
                    }

                    // pm_race_administration_edit
                    if (0 === strpos($pathinfo, '/administration/races/editer') && preg_match('#^/administration/races/editer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_race_administration_edit')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\RaceController::editAction',));
                    }

                    // pm_race_administration_delete
                    if (0 === strpos($pathinfo, '/administration/races/supprimer') && preg_match('#^/administration/races/supprimer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_race_administration_delete')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\RaceController::deleteAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/administration/langues')) {
                    // pm_language_administration_homepage
                    if ($pathinfo === '/administration/langues') {
                        return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\LanguageController::indexAction',  '_route' => 'pm_language_administration_homepage',);
                    }

                    // pm_language_administration_insert
                    if ($pathinfo === '/administration/langues/insertion') {
                        return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\LanguageController::registerAction',  '_route' => 'pm_language_administration_insert',);
                    }

                    // pm_language_administration_list
                    if ($pathinfo === '/administration/langues/liste') {
                        return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\LanguageController::listAction',  '_route' => 'pm_language_administration_list',);
                    }

                    // pm_language_administration_view
                    if (0 === strpos($pathinfo, '/administration/langues/vue') && preg_match('#^/administration/langues/vue/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_language_administration_view')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\LanguageController::viewAction',));
                    }

                    // pm_language_administration_edit
                    if (0 === strpos($pathinfo, '/administration/langues/editer') && preg_match('#^/administration/langues/editer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_language_administration_edit')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\LanguageController::editAction',));
                    }

                    // pm_language_administration_delete
                    if (0 === strpos($pathinfo, '/administration/langues/supprimer') && preg_match('#^/administration/langues/supprimer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_language_administration_delete')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\LanguageController::deleteAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/administration/personnages')) {
                    // pm_characterused_administration_homepage
                    if ($pathinfo === '/administration/personnages') {
                        return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\CharacterUsedController::indexAction',  '_route' => 'pm_characterused_administration_homepage',);
                    }

                    if (0 === strpos($pathinfo, '/administration/personnages/insertion')) {
                        // pm_characterused_administration_insert
                        if ($pathinfo === '/administration/personnages/insertion') {
                            return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\CharacterUsedController::registerAction',  '_route' => 'pm_characterused_administration_insert',);
                        }

                        if (0 === strpos($pathinfo, '/administration/personnages/insertion/c')) {
                            // pm_characterused_administration_insert_abilities
                            if (0 === strpos($pathinfo, '/administration/personnages/insertion/caracteristiques') && preg_match('#^/administration/personnages/insertion/caracteristiques/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_characterused_administration_insert_abilities')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\CharacterUsedController::registerAbilitiesAction',));
                            }

                            // pm_characterused_administration_insert_skills
                            if (0 === strpos($pathinfo, '/administration/personnages/insertion/competences') && preg_match('#^/administration/personnages/insertion/competences/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_characterused_administration_insert_skills')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\CharacterUsedController::registerSkillsAction',));
                            }

                        }

                    }

                    // pm_characterused_administration_list
                    if ($pathinfo === '/administration/personnages/liste') {
                        return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\CharacterUsedController::listAction',  '_route' => 'pm_characterused_administration_list',);
                    }

                    // pm_characterused_administration_view
                    if (0 === strpos($pathinfo, '/administration/personnages/vue') && preg_match('#^/administration/personnages/vue/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_characterused_administration_view')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\CharacterUsedController::viewAction',));
                    }

                    // pm_characterused_administration_edit
                    if (0 === strpos($pathinfo, '/administration/personnages/editer') && preg_match('#^/administration/personnages/editer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_characterused_administration_edit')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\CharacterUsedController::editAction',));
                    }

                    // pm_characterused_administration_delete
                    if (0 === strpos($pathinfo, '/administration/personnages/supprimer') && preg_match('#^/administration/personnages/supprimer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_characterused_administration_delete')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\CharacterUsedController::deleteAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/administration/competences')) {
                    // pm_skill_administration_homepage
                    if ($pathinfo === '/administration/competences') {
                        return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\SkillController::indexAction',  '_route' => 'pm_skill_administration_homepage',);
                    }

                    // pm_skill_administration_insert
                    if ($pathinfo === '/administration/competences/insertion') {
                        return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\SkillController::registerAction',  '_route' => 'pm_skill_administration_insert',);
                    }

                    // pm_skill_administration_list
                    if ($pathinfo === '/administration/competences/liste') {
                        return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\SkillController::listAction',  '_route' => 'pm_skill_administration_list',);
                    }

                    // pm_skill_administration_view
                    if (0 === strpos($pathinfo, '/administration/competences/vue') && preg_match('#^/administration/competences/vue/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_skill_administration_view')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\SkillController::viewAction',));
                    }

                    // pm_skill_administration_edit
                    if (0 === strpos($pathinfo, '/administration/competences/editer') && preg_match('#^/administration/competences/editer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_skill_administration_edit')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\SkillController::editAction',));
                    }

                    // pm_skill_administration_delete
                    if (0 === strpos($pathinfo, '/administration/competences/supprimer') && preg_match('#^/administration/competences/supprimer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_skill_administration_delete')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\SkillController::deleteAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/administration/tailles')) {
                    // pm_size_administration_homepage
                    if ($pathinfo === '/administration/tailles') {
                        return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\SizeController::indexAction',  '_route' => 'pm_size_administration_homepage',);
                    }

                    // pm_size_administration_insert
                    if ($pathinfo === '/administration/tailles/insertion') {
                        return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\SizeController::registerAction',  '_route' => 'pm_size_administration_insert',);
                    }

                    // pm_size_administration_list
                    if ($pathinfo === '/administration/tailles/liste') {
                        return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\SizeController::listAction',  '_route' => 'pm_size_administration_list',);
                    }

                    // pm_size_administration_view
                    if (0 === strpos($pathinfo, '/administration/tailles/vue') && preg_match('#^/administration/tailles/vue/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_size_administration_view')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\SizeController::viewAction',));
                    }

                    // pm_size_administration_edit
                    if (0 === strpos($pathinfo, '/administration/tailles/editer') && preg_match('#^/administration/tailles/editer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_size_administration_edit')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\SizeController::editAction',));
                    }

                    // pm_size_administration_delete
                    if (0 === strpos($pathinfo, '/administration/tailles/supprimer') && preg_match('#^/administration/tailles/supprimer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_size_administration_delete')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\SizeController::deleteAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/administration/niveaux')) {
                    // pm_level_administration_homepage
                    if ($pathinfo === '/administration/niveaux') {
                        return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\LevelController::indexAction',  '_route' => 'pm_level_administration_homepage',);
                    }

                    // pm_level_administration_insert
                    if ($pathinfo === '/administration/niveaux/insertion') {
                        return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\LevelController::registerAction',  '_route' => 'pm_level_administration_insert',);
                    }

                    // pm_level_administration_list
                    if ($pathinfo === '/administration/niveaux/liste') {
                        return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\LevelController::listAction',  '_route' => 'pm_level_administration_list',);
                    }

                    // pm_level_administration_view
                    if (0 === strpos($pathinfo, '/administration/niveaux/vue') && preg_match('#^/administration/niveaux/vue/(?P<level>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_level_administration_view')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\LevelController::viewAction',));
                    }

                    // pm_level_administration_edit
                    if (0 === strpos($pathinfo, '/administration/niveaux/editer') && preg_match('#^/administration/niveaux/editer/(?P<level>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_level_administration_edit')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\LevelController::editAction',));
                    }

                    // pm_level_administration_delete
                    if (0 === strpos($pathinfo, '/administration/niveaux/supprimer') && preg_match('#^/administration/niveaux/supprimer/(?P<level>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_level_administration_delete')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\LevelController::deleteAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/administration/caractéristiques')) {
                    // pm_ability_administration_homepage
                    if ($pathinfo === '/administration/caractéristiques') {
                        return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\AbilityController::indexAction',  '_route' => 'pm_ability_administration_homepage',);
                    }

                    // pm_ability_administration_insert
                    if ($pathinfo === '/administration/caractéristiques/insertion') {
                        return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\AbilityController::registerAction',  '_route' => 'pm_ability_administration_insert',);
                    }

                    // pm_ability_administration_list
                    if ($pathinfo === '/administration/caractéristiques/liste') {
                        return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\AbilityController::listAction',  '_route' => 'pm_ability_administration_list',);
                    }

                    // pm_ability_administration_view
                    if (0 === strpos($pathinfo, '/administration/caractéristiques/vue') && preg_match('#^/administration/caractéristiques/vue/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_ability_administration_view')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\AbilityController::viewAction',));
                    }

                    // pm_ability_administration_edit
                    if (0 === strpos($pathinfo, '/administration/caractéristiques/editer') && preg_match('#^/administration/caractéristiques/editer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_ability_administration_edit')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\AbilityController::editAction',));
                    }

                    // pm_ability_administration_delete
                    if (0 === strpos($pathinfo, '/administration/caractéristiques/supprimer') && preg_match('#^/administration/caractéristiques/supprimer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_ability_administration_delete')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\AbilityController::deleteAction',));
                    }

                }

            }

        }

        // pm_help_public_homepage
        if ($pathinfo === '/donjons-et-dragons/accueil') {
            return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\HelpPublicController::indexAction',  '_route' => 'pm_help_public_homepage',);
        }

        if (0 === strpos($pathinfo, '/mes-personnages')) {
            // pm_characterused_public_homepage
            if ($pathinfo === '/mes-personnages') {
                return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\CharacterUsedPublicController::indexAction',  '_route' => 'pm_characterused_public_homepage',);
            }

            // pm_characterused_public_insert
            if ($pathinfo === '/mes-personnages/insertion') {
                return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\CharacterUsedPublicController::registerAction',  '_route' => 'pm_characterused_public_insert',);
            }

            // pm_characterused_public_list
            if ($pathinfo === '/mes-personnages/liste') {
                return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\CharacterUsedPublicController::listAction',  '_route' => 'pm_characterused_public_list',);
            }

            // pm_characterused_public_view
            if (0 === strpos($pathinfo, '/mes-personnages/vue') && preg_match('#^/mes\\-personnages/vue/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_characterused_public_view')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\CharacterUsedPublicController::viewAction',));
            }

            if (0 === strpos($pathinfo, '/mes-personnages/personnages')) {
                // pm_characterused_public_edit
                if (0 === strpos($pathinfo, '/mes-personnages/personnages/editer') && preg_match('#^/mes\\-personnages/personnages/editer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_characterused_public_edit')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\CharacterUsedPublicController::editAction',));
                }

                // pm_characterused_public_delete
                if (0 === strpos($pathinfo, '/mes-personnages/personnages/supprimer') && preg_match('#^/mes\\-personnages/personnages/supprimer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_characterused_public_delete')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\CharacterUsedPublicController::deleteAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/donjons-et-dragons')) {
            if (0 === strpos($pathinfo, '/donjons-et-dragons/caractéristiques')) {
                // pm_ability_public_homepage
                if ($pathinfo === '/donjons-et-dragons/caractéristiques') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\AbilityPublicController::indexAction',  '_route' => 'pm_ability_public_homepage',);
                }

                // pm_ability_public_list
                if ($pathinfo === '/donjons-et-dragons/caractéristiques/liste') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\AbilityPublicController::listAction',  '_route' => 'pm_ability_public_list',);
                }

                // pm_ability_public_view
                if (0 === strpos($pathinfo, '/donjons-et-dragons/caractéristiques/vue') && preg_match('#^/donjons\\-et\\-dragons/caractéristiques/vue/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_ability_public_view')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\AbilityPublicController::viewAction',));
                }

            }

            if (0 === strpos($pathinfo, '/donjons-et-dragons/alignements')) {
                // pm_alignment_public_homepage
                if ($pathinfo === '/donjons-et-dragons/alignements') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\AlignmentPublicController::indexAction',  '_route' => 'pm_alignment_public_homepage',);
                }

                // pm_alignment_public_list
                if ($pathinfo === '/donjons-et-dragons/alignements/liste') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\AlignmentPublicController::listAction',  '_route' => 'pm_alignment_public_list',);
                }

                // pm_alignment_public_view
                if (0 === strpos($pathinfo, '/donjons-et-dragons/alignements/vue') && preg_match('#^/donjons\\-et\\-dragons/alignements/vue/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_alignment_public_view')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\AlignmentPublicController::viewAction',));
                }

            }

            if (0 === strpos($pathinfo, '/donjons-et-dragons/classes')) {
                // pm_classdnd_public_homepage
                if ($pathinfo === '/donjons-et-dragons/classes') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\ClassDnDPublicController::indexAction',  '_route' => 'pm_classdnd_public_homepage',);
                }

                // pm_classdnd_public_list
                if ($pathinfo === '/donjons-et-dragons/classes/liste') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\ClassDnDPublicController::listAction',  '_route' => 'pm_classdnd_public_list',);
                }

                // pm_classdnd_public_view
                if (0 === strpos($pathinfo, '/donjons-et-dragons/classes/vue') && preg_match('#^/donjons\\-et\\-dragons/classes/vue/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_classdnd_public_view')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\ClassDnDPublicController::viewAction',));
                }

            }

            if (0 === strpos($pathinfo, '/donjons-et-dragons/races')) {
                // pm_race_public_homepage
                if ($pathinfo === '/donjons-et-dragons/races') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\RacePublicController::indexAction',  '_route' => 'pm_race_public_homepage',);
                }

                // pm_race_public_list
                if ($pathinfo === '/donjons-et-dragons/races/liste') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\RacePublicController::listAction',  '_route' => 'pm_race_public_list',);
                }

                // pm_race_public_view
                if (0 === strpos($pathinfo, '/donjons-et-dragons/races/vue') && preg_match('#^/donjons\\-et\\-dragons/races/vue/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_race_public_view')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\RacePublicController::viewAction',));
                }

            }

            if (0 === strpos($pathinfo, '/donjons-et-dragons/langues')) {
                // pm_language_public_homepage
                if ($pathinfo === '/donjons-et-dragons/langues') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\LanguagePublicController::indexAction',  '_route' => 'pm_language_public_homepage',);
                }

                // pm_language_public_list
                if ($pathinfo === '/donjons-et-dragons/langues/liste') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\LanguagePublicController::listAction',  '_route' => 'pm_language_public_list',);
                }

                // pm_language_public_view
                if (0 === strpos($pathinfo, '/donjons-et-dragons/langues/vue') && preg_match('#^/donjons\\-et\\-dragons/langues/vue/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_language_public_view')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\LanguagePublicController::viewAction',));
                }

            }

            if (0 === strpos($pathinfo, '/donjons-et-dragons/competences')) {
                // pm_skill_public_homepage
                if ($pathinfo === '/donjons-et-dragons/competences') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\SkillPublicController::indexAction',  '_route' => 'pm_skill_public_homepage',);
                }

                // pm_skill_public_list
                if ($pathinfo === '/donjons-et-dragons/competences/liste') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\SkillPublicController::listAction',  '_route' => 'pm_skill_public_list',);
                }

                // pm_skill_public_view
                if (0 === strpos($pathinfo, '/donjons-et-dragons/competences/vue') && preg_match('#^/donjons\\-et\\-dragons/competences/vue/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_skill_public_view')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\SkillPublicController::viewAction',));
                }

            }

            if (0 === strpos($pathinfo, '/donjons-et-dragons/tailles')) {
                // pm_size_public_homepage
                if ($pathinfo === '/donjons-et-dragons/tailles') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\SizePublicController::indexAction',  '_route' => 'pm_size_public_homepage',);
                }

                // pm_size_public_list
                if ($pathinfo === '/donjons-et-dragons/tailles/liste') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\SizePublicController::listAction',  '_route' => 'pm_size_public_list',);
                }

                // pm_size_public_view
                if (0 === strpos($pathinfo, '/donjons-et-dragons/tailles/vue') && preg_match('#^/donjons\\-et\\-dragons/tailles/vue/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_size_public_view')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\SizePublicController::viewAction',));
                }

            }

            if (0 === strpos($pathinfo, '/donjons-et-dragons/niveaux')) {
                // pm_level_public_homepage
                if ($pathinfo === '/donjons-et-dragons/niveaux') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\LevelPublicController::indexAction',  '_route' => 'pm_level_public_homepage',);
                }

                // pm_level_public_list
                if ($pathinfo === '/donjons-et-dragons/niveaux/liste') {
                    return array (  '_controller' => 'PM\\CharacterBundle\\Controller\\LevelPublicController::listAction',  '_route' => 'pm_level_public_list',);
                }

                // pm_level_public_view
                if (0 === strpos($pathinfo, '/donjons-et-dragons/niveaux/vue') && preg_match('#^/donjons\\-et\\-dragons/niveaux/vue/(?P<level>\\S{0,255})$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_level_public_view')), array (  '_controller' => 'PM\\CharacterBundle\\Controller\\LevelPublicController::viewAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/administration/parties')) {
            // pm_game_administration_homepage
            if ($pathinfo === '/administration/parties') {
                return array (  '_controller' => 'PM\\GameBundle\\Controller\\GameController::indexAction',  '_route' => 'pm_game_administration_homepage',);
            }

            // pm_game_administration_insert
            if ($pathinfo === '/administration/parties/insertion') {
                return array (  '_controller' => 'PM\\GameBundle\\Controller\\GameController::registerAction',  '_route' => 'pm_game_administration_insert',);
            }

            // pm_game_administration_list
            if ($pathinfo === '/administration/parties/liste') {
                return array (  '_controller' => 'PM\\GameBundle\\Controller\\GameController::listAction',  '_route' => 'pm_game_administration_list',);
            }

            // pm_game_administration_view
            if (0 === strpos($pathinfo, '/administration/parties/vue') && preg_match('#^/administration/parties/vue/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_game_administration_view')), array (  '_controller' => 'PM\\GameBundle\\Controller\\GameController::viewAction',));
            }

            // pm_game_administration_edit
            if (0 === strpos($pathinfo, '/administration/parties/editer') && preg_match('#^/administration/parties/editer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_game_administration_edit')), array (  '_controller' => 'PM\\GameBundle\\Controller\\GameController::editAction',));
            }

            // pm_game_administration_delete
            if (0 === strpos($pathinfo, '/administration/parties/supprimer') && preg_match('#^/administration/parties/supprimer/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_game_administration_delete')), array (  '_controller' => 'PM\\GameBundle\\Controller\\GameController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/mes-parties')) {
            // pm_game_public_homepage
            if ($pathinfo === '/mes-parties') {
                return array (  '_controller' => 'PM\\GameBundle\\Controller\\GamePublicController::indexAction',  '_route' => 'pm_game_public_homepage',);
            }

            // pm_game_public_view
            if (0 === strpos($pathinfo, '/mes-parties/vue') && preg_match('#^/mes\\-parties/vue/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_game_public_view')), array (  '_controller' => 'PM\\GameBundle\\Controller\\GamePublicController::viewAction',));
            }

        }

        // pm_player_public_homepage
        if (0 === strpos($pathinfo, '/jeu') && preg_match('#^/jeu/(?P<slug>\\S{0,255})$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_player_public_homepage')), array (  '_controller' => 'PM\\GameBundle\\Controller\\PlayerController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/administration/utilisateurs')) {
                // pm_user_administration_homepage
                if (rtrim($pathinfo, '/') === '/administration/utilisateurs') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'pm_user_administration_homepage');
                    }

                    return array (  '_controller' => 'PM\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'pm_user_administration_homepage',);
                }

                // pm_user_administration_list
                if ($pathinfo === '/administration/utilisateurs/liste') {
                    return array (  '_controller' => 'PM\\UserBundle\\Controller\\UserController::UsersListAction',  '_route' => 'pm_user_administration_list',);
                }

                // pm_user_administration_view
                if (preg_match('#^/administration/utilisateurs/(?P<user_id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_user_administration_view')), array (  '_controller' => 'PM\\UserBundle\\Controller\\UserController::ViewAction',));
                }

                // pm_user_administration_edit
                if (preg_match('#^/administration/utilisateurs/(?P<user_id>\\d+)/edition$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm_user_administration_edit')), array (  '_controller' => 'PM\\UserBundle\\Controller\\UserController::editAction',));
                }

                // pm_user_ajax_password
                if ($pathinfo === '/administration/utilisateurs/1234-password') {
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

        if (0 === strpos($pathinfo, '/administration/utilisateur/nouveau')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/administration/utilisateur/nouveau') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'PM\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            if (0 === strpos($pathinfo, '/administration/utilisateur/nouveau/c')) {
                // fos_user_registration_check_email
                if ($pathinfo === '/administration/utilisateur/nouveau/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'PM\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/administration/utilisateur/nouveau/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/administration/utilisateur/nouveau/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'PM\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ($pathinfo === '/administration/utilisateur/nouveau/confirmed') {
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

        if (0 === strpos($pathinfo, '/utilisateur')) {
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
