<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
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
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        if (0 === strpos($pathinfo, '/api/v1')) {
            // api_index
            if (0 === strpos($pathinfo, '/api/v1/visits') && preg_match('#^/api/v1/visits(?:\\.(?P<_format>[^/]+?))?$#xs', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_index;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ILL\\VisitAPIBundle\\Controller\\VisitController::indexAction',  '_format' => NULL,)), array('_route' => 'api_index'));
            }
            not_api_index:

            // api_create
            if (0 === strpos($pathinfo, '/api/v1/visits') && preg_match('#^/api/v1/visits(?:\\.(?P<_format>[^/]+?))?$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_api_create;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ILL\\VisitAPIBundle\\Controller\\VisitController::createAction',  '_format' => NULL,)), array('_route' => 'api_create'));
            }
            not_api_create:

        }

        // ill_visit_user_visits
        if ($pathinfo === '/user/visits') {
            return array (  '_controller' => 'ILL\\VisitBundle\\Controller\\UserController::visitsAction',  '_route' => 'ill_visit_user_visits',);
        }

        // ill_visit_visit_create
        if ($pathinfo === '/visit/create') {
            return array (  '_controller' => 'ILL\\VisitBundle\\Controller\\VisitController::createAction',  '_route' => 'ill_visit_visit_create',);
        }

        // ill_visit_visit_edit
        if (0 === strpos($pathinfo, '/visit/edit') && preg_match('#^/visit/edit/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ILL\\VisitBundle\\Controller\\VisitController::editAction',)), array('_route' => 'ill_visit_visit_edit'));
        }

        // ill_visit_visit_delete
        if (0 === strpos($pathinfo, '/visit/delete') && preg_match('#^/visit/delete/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ILL\\VisitBundle\\Controller\\VisitController::deleteAction',)), array('_route' => 'ill_visit_visit_delete'));
        }

        // ill_visit_visit_view
        if (0 === strpos($pathinfo, '/visit') && preg_match('#^/visit/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'ILL\\VisitBundle\\Controller\\VisitController::viewAction',)), array('_route' => 'ill_visit_visit_view'));
        }

        // ill_visit_visit_searchattendee
        if (0 === strpos($pathinfo, '/visit') && preg_match('#^/visit/(?P<id>[^/]+?)/attendee/search\\.json$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_format' => 'json',  '_controller' => 'ILL\\VisitBundle\\Controller\\VisitController::searchAttendeeAction',)), array('_route' => 'ill_visit_visit_searchattendee'));
        }

        // ill_visit_visit_addattendee
        if (0 === strpos($pathinfo, '/visit') && preg_match('#^/visit/(?P<id>[^/]+?)/attendee/add/(?P<attendeeId>[^/\\.]+?)\\.json$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_format' => 'json',  '_controller' => 'ILL\\VisitBundle\\Controller\\VisitController::addAttendeeAction',)), array('_route' => 'ill_visit_visit_addattendee'));
        }

        // ill_visit_visit_removeattendee
        if (0 === strpos($pathinfo, '/visit') && preg_match('#^/visit/(?P<id>[^/]+?)/attendee/remove/(?P<attendeeId>[^/\\.]+?)\\.json$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_format' => 'json',  '_controller' => 'ILL\\VisitBundle\\Controller\\VisitController::removeAttendeeAction',)), array('_route' => 'ill_visit_visit_removeattendee'));
        }

        // ill_visit_visit_viewuservisits
        if ($pathinfo === '/user/visits') {
            return array (  '_controller' => 'ILL\\VisitBundle\\Controller\\VisitController::viewUserVisitsAction',  '_route' => 'ill_visit_visit_viewuservisits',);
        }

        // ill_visit_visit_all
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ill_visit_visit_all');
            }
            return array (  '_controller' => 'ILL\\VisitBundle\\Controller\\VisitController::allAction',  '_route' => 'ill_visit_visit_all',);
        }

        // ill_visit_admin_index
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'ILL\\VisitBundle\\Controller\\AdminController::indexAction',  '_route' => 'ill_visit_admin_index',);
        }

        // ill_visit_admin_create
        if ($pathinfo === '/admin/institute/create') {
            return array (  '_controller' => 'ILL\\VisitBundle\\Controller\\AdminController::createAction',  '_route' => 'ill_visit_admin_create',);
        }

        // ill_visit_admin_showinstitutes
        if ($pathinfo === '/admin/institute/show') {
            return array (  '_controller' => 'ILL\\VisitBundle\\Controller\\AdminController::showInstitutesAction',  '_route' => 'ill_visit_admin_showinstitutes',);
        }

        // ill_visit_admin_addinstitute
        if (0 === strpos($pathinfo, '/admin/institute/add') && preg_match('#^/admin/institute/add/(?P<id>[^/\\.]+?)\\.json$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_format' => 'json',  '_controller' => 'ILL\\VisitBundle\\Controller\\AdminController::addInstituteAction',)), array('_route' => 'ill_visit_admin_addinstitute'));
        }

        // fos_user_security_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
        }

        // fos_user_security_check
        if ($pathinfo === '/login_check') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
        }

        // fos_user_security_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
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
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
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

        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            // fos_user_registration_check_email
            if ($pathinfo === '/register/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_check_email;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            // fos_user_registration_confirm
            if (0 === strpos($pathinfo, '/register/confirm') && preg_match('#^/register/confirm/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirm;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',)), array('_route' => 'fos_user_registration_confirm'));
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
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',)), array('_route' => 'fos_user_resetting_reset'));
            }
            not_fos_user_resetting_reset:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
