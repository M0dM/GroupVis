<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'api_create' => true,
       'api_index' => true,
       'ill_visit_user_visits' => true,
       'ill_visit_visit_create' => true,
       'ill_visit_visit_edit' => true,
       'ill_visit_visit_delete' => true,
       'ill_visit_visit_view' => true,
       'ill_visit_visit_searchattendee' => true,
       'ill_visit_visit_addattendee' => true,
       'ill_visit_visit_removeattendee' => true,
       'ill_visit_visit_viewuservisits' => true,
       'ill_visit_visit_all' => true,
       'ill_visit_admin_index' => true,
       'ill_visit_admin_create' => true,
       'ill_visit_admin_showinstitutes' => true,
       'ill_visit_admin_addinstitute' => true,
       'fos_user_security_login' => true,
       'fos_user_security_check' => true,
       'fos_user_security_logout' => true,
       'fos_user_profile_show' => true,
       'fos_user_profile_edit' => true,
       'fos_user_registration_register' => true,
       'fos_user_registration_check_email' => true,
       'fos_user_registration_confirm' => true,
       'fos_user_registration_confirmed' => true,
       'fos_user_resetting_request' => true,
       'fos_user_resetting_send_email' => true,
       'fos_user_resetting_check_email' => true,
       'fos_user_resetting_reset' => true,
       'fos_user_change_password' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getapi_createRouteInfo()
    {
        return array(array (  0 => '_format',), array (  '_controller' => 'ILL\\VisitAPIBundle\\Controller\\VisitController::createAction',  '_format' => NULL,), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => '[^/]+?',    3 => '_format',  ),  1 =>   array (    0 => 'text',    1 => '/api/v1/visits',  ),));
    }

    private function getapi_indexRouteInfo()
    {
        return array(array (  0 => '_format',), array (  '_controller' => 'ILL\\VisitAPIBundle\\Controller\\VisitController::indexAction',  '_format' => NULL,), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => '[^/]+?',    3 => '_format',  ),  1 =>   array (    0 => 'text',    1 => '/api/v1/visits',  ),));
    }

    private function getill_visit_user_visitsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'ILL\\VisitBundle\\Controller\\UserController::visitsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/user/visits',  ),));
    }

    private function getill_visit_visit_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'ILL\\VisitBundle\\Controller\\VisitController::createAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/visit/create',  ),));
    }

    private function getill_visit_visit_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'ILL\\VisitBundle\\Controller\\VisitController::editAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/visit/edit',  ),));
    }

    private function getill_visit_visit_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'ILL\\VisitBundle\\Controller\\VisitController::deleteAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/visit/delete',  ),));
    }

    private function getill_visit_visit_viewRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'ILL\\VisitBundle\\Controller\\VisitController::viewAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/visit',  ),));
    }

    private function getill_visit_visit_searchattendeeRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_format' => 'json',  '_controller' => 'ILL\\VisitBundle\\Controller\\VisitController::searchAttendeeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/attendee/search.json',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/visit',  ),));
    }

    private function getill_visit_visit_addattendeeRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'attendeeId',), array (  '_format' => 'json',  '_controller' => 'ILL\\VisitBundle\\Controller\\VisitController::addAttendeeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.json',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'attendeeId',  ),  2 =>   array (    0 => 'text',    1 => '/attendee/add',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  4 =>   array (    0 => 'text',    1 => '/visit',  ),));
    }

    private function getill_visit_visit_removeattendeeRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'attendeeId',), array (  '_format' => 'json',  '_controller' => 'ILL\\VisitBundle\\Controller\\VisitController::removeAttendeeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.json',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'attendeeId',  ),  2 =>   array (    0 => 'text',    1 => '/attendee/remove',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  4 =>   array (    0 => 'text',    1 => '/visit',  ),));
    }

    private function getill_visit_visit_viewuservisitsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'ILL\\VisitBundle\\Controller\\VisitController::viewUserVisitsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/user/visits',  ),));
    }

    private function getill_visit_visit_allRouteInfo()
    {
        return array(array (), array (  '_controller' => 'ILL\\VisitBundle\\Controller\\VisitController::allAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getill_visit_admin_indexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'ILL\\VisitBundle\\Controller\\AdminController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin',  ),));
    }

    private function getill_visit_admin_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'ILL\\VisitBundle\\Controller\\AdminController::createAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/institute/create',  ),));
    }

    private function getill_visit_admin_showinstitutesRouteInfo()
    {
        return array(array (), array (  '_controller' => 'ILL\\VisitBundle\\Controller\\AdminController::showInstitutesAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/institute/show',  ),));
    }

    private function getill_visit_admin_addinstituteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_format' => 'json',  '_controller' => 'ILL\\VisitBundle\\Controller\\AdminController::addInstituteAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.json',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/institute/add',  ),));
    }

    private function getfos_user_security_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login',  ),));
    }

    private function getfos_user_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login_check',  ),));
    }

    private function getfos_user_security_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }

    private function getfos_user_profile_showRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/profile/',  ),));
    }

    private function getfos_user_profile_editRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/profile/edit',  ),));
    }

    private function getfos_user_registration_registerRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/register/',  ),));
    }

    private function getfos_user_registration_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/register/check-email',  ),));
    }

    private function getfos_user_registration_confirmRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/register/confirm',  ),));
    }

    private function getfos_user_registration_confirmedRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/register/confirmed',  ),));
    }

    private function getfos_user_resetting_requestRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/request',  ),));
    }

    private function getfos_user_resetting_send_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/send-email',  ),));
    }

    private function getfos_user_resetting_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/check-email',  ),));
    }

    private function getfos_user_resetting_resetRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/resetting/reset',  ),));
    }

    private function getfos_user_change_passwordRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'text',    1 => '/profile/change-password',  ),));
    }
}
