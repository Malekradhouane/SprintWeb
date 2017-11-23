<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/auto')) {
                // auto_ecole_homepage
                if (rtrim($pathinfo, '/') === '/auto') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'auto_ecole_homepage');
                    }

                    return array (  '_controller' => 'AutoEcoleBundle\\Controller\\DefaultController::indexAction',  '_route' => 'auto_ecole_homepage',);
                }

                if (0 === strpos($pathinfo, '/auto/a')) {
                    // autoecole_layout
                    if ($pathinfo === '/auto/autoecole') {
                        return array (  '_controller' => 'AutoEcoleBundle\\Controller\\DefaultController::layoutAction',  '_route' => 'autoecole_layout',);
                    }

                    if (0 === strpos($pathinfo, '/auto/ajout')) {
                        // autoecole_ajout
                        if ($pathinfo === '/auto/ajoutcours') {
                            return array (  '_controller' => 'AutoEcoleBundle\\Controller\\ModelController::ajoutcoursAction',  '_route' => 'autoecole_ajout',);
                        }

                        // autoecole_ajouttest
                        if ($pathinfo === '/auto/ajouttest') {
                            return array (  '_controller' => 'AutoEcoleBundle\\Controller\\TestController::ajouttestAction',  '_route' => 'autoecole_ajouttest',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/auto/cours')) {
                    // autoecole_affichercoursspeed
                    if ($pathinfo === '/auto/coursspeed') {
                        return array (  '_controller' => 'AutoEcoleBundle\\Controller\\ModelController::affichercoursspeedAction',  '_route' => 'autoecole_affichercoursspeed',);
                    }

                    // autoecole_affichercourstrafic
                    if ($pathinfo === '/auto/courstrafic') {
                        return array (  '_controller' => 'AutoEcoleBundle\\Controller\\ModelController::affichercourstraficAction',  '_route' => 'autoecole_affichercourstrafic',);
                    }

                    // autoecole_affichercours
                    if ($pathinfo === '/auto/coursroad') {
                        return array (  '_controller' => 'AutoEcoleBundle\\Controller\\ModelController::affichercoursroadAction',  '_route' => 'autoecole_affichercours',);
                    }

                    // autoecole_affichercoursall
                    if ($pathinfo === '/auto/coursall') {
                        return array (  '_controller' => 'AutoEcoleBundle\\Controller\\ModelController::affichercoursallAction',  '_route' => 'autoecole_affichercoursall',);
                    }

                }

                // delete_cours
                if (0 === strpos($pathinfo, '/auto/Deletecours') && preg_match('#^/auto/Deletecours/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_cours')), array (  '_controller' => 'AutoEcoleBundle\\Controller\\ModelController::deletecoursAction',));
                }

                // update_cours
                if (0 === strpos($pathinfo, '/auto/Update') && preg_match('#^/auto/Update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_cours')), array (  '_controller' => 'AutoEcoleBundle\\Controller\\ModelController::updatecoursAction',));
                }

                // autoecole_affichertest
                if ($pathinfo === '/auto/test') {
                    return array (  '_controller' => 'AutoEcoleBundle\\Controller\\TestController::affichertestAction',  '_route' => 'autoecole_affichertest',);
                }

                // delete_test
                if (0 === strpos($pathinfo, '/auto/Deletetest') && preg_match('#^/auto/Deletetest/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_test')), array (  '_controller' => 'AutoEcoleBundle\\Controller\\TestController::deletetestAction',));
                }

                // update_test
                if (0 === strpos($pathinfo, '/auto/Updatetest') && preg_match('#^/auto/Updatetest/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_test')), array (  '_controller' => 'AutoEcoleBundle\\Controller\\TestController::updatetestAction',));
                }

                // note_test
                if ($pathinfo === '/auto/note') {
                    return array (  '_controller' => 'AutoEcoleBundle\\Controller\\DefaultController::noteAction',  '_route' => 'note_test',);
                }

                // pdf
                if ($pathinfo === '/auto/pdf') {
                    return array (  '_controller' => 'AutoEcoleBundle\\Controller\\ModelController::pdfAction',  '_route' => 'pdf',);
                }

                // autoecole_affichertestsall
                if ($pathinfo === '/auto/testadmin') {
                    return array (  '_controller' => 'AutoEcoleBundle\\Controller\\TestController::affichertestallAction',  '_route' => 'autoecole_affichertestsall',);
                }

            }

            if (0 === strpos($pathinfo, '/annonce')) {
                // annonce_homepage
                if (rtrim($pathinfo, '/') === '/annonce') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'annonce_homepage');
                    }

                    return array (  '_controller' => 'AnnonceBundle\\Controller\\DefaultController::indexAction',  '_route' => 'annonce_homepage',);
                }

                // ajout_annonce
                if ($pathinfo === '/annonce/ajoutannonce') {
                    return array (  '_controller' => 'AnnonceBundle\\Controller\\ModeleController::ajoutannonceAction',  '_route' => 'ajout_annonce',);
                }

                // gerer_annonce
                if ($pathinfo === '/annonce/manageannonce') {
                    return array (  '_controller' => 'AnnonceBundle\\Controller\\ModeleController::interfaceAnnonceAction',  '_route' => 'gerer_annonce',);
                }

                if (0 === strpos($pathinfo, '/annonce/a')) {
                    // ajout_annonceneuve
                    if ($pathinfo === '/annonce/ajoutannonceneuve') {
                        return array (  '_controller' => 'AnnonceBundle\\Controller\\ModeleController::ajoutannonceneuveAction',  '_route' => 'ajout_annonceneuve',);
                    }

                    // afficher_annonces
                    if ($pathinfo === '/annonce/afficherannonce') {
                        return array (  '_controller' => 'AnnonceBundle\\Controller\\ModeleController::listAction',  '_route' => 'afficher_annonces',);
                    }

                }

                // message
                if ($pathinfo === '/annonce/message') {
                    return array (  '_controller' => 'AnnonceBundle\\Controller\\DefaultController::messageAction',  '_route' => 'message',);
                }

                // consulter_annonce
                if ($pathinfo === '/annonce/consultAnn') {
                    return array (  '_controller' => 'AnnonceBundle\\Controller\\ModeleController::consulterAction',  '_route' => 'consulter_annonce',);
                }

                // annonce_admin
                if ($pathinfo === '/annonce/annadmin') {
                    return array (  '_controller' => 'AnnonceBundle\\Controller\\ModeleController::annAdminAction',  '_route' => 'annonce_admin',);
                }

                // count_notification
                if ($pathinfo === '/annonce/count') {
                    return array (  '_controller' => 'AnnonceBundle\\Controller\\ModeleController::queryAction',  '_route' => 'count_notification',);
                }

                // accept_annonce
                if (0 === strpos($pathinfo, '/annonce/accAnn') && preg_match('#^/annonce/accAnn/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'accept_annonce')), array (  '_controller' => 'AnnonceBundle\\Controller\\ModeleController::AcceptAction',));
                }

                // delete_annonce
                if (0 === strpos($pathinfo, '/annonce/delAnn') && preg_match('#^/annonce/delAnn/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_annonce')), array (  '_controller' => 'AnnonceBundle\\Controller\\ModeleController::deleteAction',));
                }

                // refuse_annonce
                if (0 === strpos($pathinfo, '/annonce/refAnn') && preg_match('#^/annonce/refAnn/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'refuse_annonce')), array (  '_controller' => 'AnnonceBundle\\Controller\\ModeleController::refuseAction',));
                }

                // modifier_annonce
                if (0 === strpos($pathinfo, '/annonce/modifAnn') && preg_match('#^/annonce/modifAnn/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_annonce')), array (  '_controller' => 'AnnonceBundle\\Controller\\ModeleController::modifierAction',));
                }

            }

            // actualite_homepage
            if (rtrim($pathinfo, '/') === '/act') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'actualite_homepage');
                }

                return array (  '_controller' => 'ActualiteBundle\\Controller\\DefaultController::indexAction',  '_route' => 'actualite_homepage',);
            }

        }

        if (0 === strpos($pathinfo, '/reclam')) {
            // reclamation_homepage
            if (rtrim($pathinfo, '/') === '/reclam') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'reclamation_homepage');
                }

                return array (  '_controller' => 'ReclamationBundle\\Controller\\DefaultController::indexAction',  '_route' => 'reclamation_homepage',);
            }

            if (0 === strpos($pathinfo, '/reclam/rec')) {
                // reclamation_contactus
                if ($pathinfo === '/reclam/recfront') {
                    return array (  '_controller' => 'ReclamationBundle\\Controller\\RecController::ajoutRecAction',  '_route' => 'reclamation_contactus',);
                }

                // reclamation_back
                if ($pathinfo === '/reclam/recback') {
                    return array (  '_controller' => 'ReclamationBundle\\Controller\\RecController::AffichageRecAction',  '_route' => 'reclamation_back',);
                }

                // reclamation_affback
                if (0 === strpos($pathinfo, '/reclam/recAffback') && preg_match('#^/reclam/recAffback/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reclamation_affback')), array (  '_controller' => 'ReclamationBundle\\Controller\\RecController::AffRecAction',));
                }

            }

            // reclamation_Suppback
            if (0 === strpos($pathinfo, '/reclam/supback') && preg_match('#^/reclam/supback/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reclamation_Suppback')), array (  '_controller' => 'ReclamationBundle\\Controller\\RecController::SupprimerRecAction',));
            }

        }

        // voiture_homepage
        if (rtrim($pathinfo, '/') === '/carManager') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'voiture_homepage');
            }

            return array (  '_controller' => 'VoitureBundle\\Controller\\DefaultController::indexAction',  '_route' => 'voiture_homepage',);
        }

        // karhabty_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'karhabty_homepage');
            }

            return array (  '_controller' => 'KarhabtyBundle\\Controller\\DefaultController::indexAction',  '_route' => 'karhabty_homepage',);
        }

        // template_homepage
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'TemplateBundle\\Controller\\DefaultController::indexAction',  '_route' => 'template_homepage',);
        }

        // template_layout
        if ($pathinfo === '/layout') {
            return array (  '_controller' => 'TemplateBundle\\Controller\\DefaultController::layoutAction',  '_route' => 'template_layout',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // template_AbouUs
            if ($pathinfo === '/about') {
                return array (  '_controller' => 'TemplateBundle\\Controller\\DefaultController::AboutUsAction',  '_route' => 'template_AbouUs',);
            }

            // template_Admin
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'TemplateBundle\\Controller\\DefaultController::adminAction',  '_route' => 'template_Admin',);
            }

        }

        // recherche_annonce
        if ($pathinfo === '/recAnn') {
            return array (  '_controller' => 'TemplateBundle\\Controller\\DefaultController::amanAction',  '_route' => 'recherche_annonce',);
        }

        // template_client
        if ($pathinfo === '/client') {
            return array (  '_controller' => 'TemplateBundle\\Controller\\DefaultController::clientAction',  '_route' => 'template_client',);
        }

        // afficher_new
        if ($pathinfo === '/new') {
            return array (  '_controller' => 'AnnonceBundle\\Controller\\DefaultController::affichenewAction',  '_route' => 'afficher_new',);
        }

        if (0 === strpos($pathinfo, '/old')) {
            // afficher_old
            if ($pathinfo === '/old') {
                return array (  '_controller' => 'AnnonceBundle\\Controller\\DefaultController::afficheoldAction',  '_route' => 'afficher_old',);
            }

            // afficher_oldC
            if ($pathinfo === '/oldcl') {
                return array (  '_controller' => 'AnnonceBundle\\Controller\\DefaultController::afficheoldCLAction',  '_route' => 'afficher_oldC',);
            }

        }

        // afficher_newC
        if ($pathinfo === '/newcl') {
            return array (  '_controller' => 'AnnonceBundle\\Controller\\DefaultController::affichenewCLAction',  '_route' => 'afficher_newC',);
        }

        // tout_annonceC
        if ($pathinfo === '/affichetoutC') {
            return array (  '_controller' => 'AnnonceBundle\\Controller\\DefaultController::afficheClAction',  '_route' => 'tout_annonceC',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
