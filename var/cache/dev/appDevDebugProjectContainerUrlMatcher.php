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

        if (0 === strpos($pathinfo, '/cms/user')) {
            // cms_user_index
            if (rtrim($pathinfo, '/') === '/cms/user') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_cms_user_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'cms_user_index');
                }

                return array (  '_controller' => 'Custom\\CMSBundle\\Controller\\UserController::indexAction',  '_route' => 'cms_user_index',);
            }
            not_cms_user_index:

            // cms_user_show
            if (preg_match('#^/cms/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_cms_user_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cms_user_show')), array (  '_controller' => 'Custom\\CMSBundle\\Controller\\UserController::showAction',));
            }
            not_cms_user_show:

            // cms_user_new
            if ($pathinfo === '/cms/user/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_cms_user_new;
                }

                return array (  '_controller' => 'Custom\\CMSBundle\\Controller\\UserController::newAction',  '_route' => 'cms_user_new',);
            }
            not_cms_user_new:

            // cms_user_edit
            if (preg_match('#^/cms/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_cms_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cms_user_edit')), array (  '_controller' => 'Custom\\CMSBundle\\Controller\\UserController::editAction',));
            }
            not_cms_user_edit:

            // cms_user_delete
            if (preg_match('#^/cms/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_cms_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cms_user_delete')), array (  '_controller' => 'Custom\\CMSBundle\\Controller\\UserController::deleteAction',));
            }
            not_cms_user_delete:

        }

        // custom_cms_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'custom_cms_homepage');
            }

            return array (  '_controller' => 'Custom\\CMSBundle\\Controller\\DefaultController::indexAction',  '_route' => 'custom_cms_homepage',);
        }

        // custom_cms_page_display
        if (0 === strpos($pathinfo, '/page') && preg_match('#^/page/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'custom_cms_page_display')), array (  '_controller' => 'Custom\\CMSBundle\\Controller\\DefaultController::displayAction',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Custom\\CMSBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        if (0 === strpos($pathinfo, '/cms')) {
            if (0 === strpos($pathinfo, '/cms/category')) {
                // cms_category_index
                if (rtrim($pathinfo, '/') === '/cms/category') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_cms_category_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'cms_category_index');
                    }

                    return array (  '_controller' => 'Custom\\CMSBundle\\Controller\\CategoryController::indexAction',  '_route' => 'cms_category_index',);
                }
                not_cms_category_index:

                // cms_category_show
                if (preg_match('#^/cms/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_cms_category_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cms_category_show')), array (  '_controller' => 'Custom\\CMSBundle\\Controller\\CategoryController::showAction',));
                }
                not_cms_category_show:

                // cms_category_new
                if ($pathinfo === '/cms/category/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_cms_category_new;
                    }

                    return array (  '_controller' => 'Custom\\CMSBundle\\Controller\\CategoryController::newAction',  '_route' => 'cms_category_new',);
                }
                not_cms_category_new:

                // cms_category_edit
                if (preg_match('#^/cms/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_cms_category_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cms_category_edit')), array (  '_controller' => 'Custom\\CMSBundle\\Controller\\CategoryController::editAction',));
                }
                not_cms_category_edit:

                // cms_category_delete
                if (preg_match('#^/cms/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_cms_category_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cms_category_delete')), array (  '_controller' => 'Custom\\CMSBundle\\Controller\\CategoryController::deleteAction',));
                }
                not_cms_category_delete:

            }

            if (0 === strpos($pathinfo, '/cms/page')) {
                // cms_page_index
                if (rtrim($pathinfo, '/') === '/cms/page') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_cms_page_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'cms_page_index');
                    }

                    return array (  '_controller' => 'Custom\\CMSBundle\\Controller\\PageController::indexAction',  '_route' => 'cms_page_index',);
                }
                not_cms_page_index:

                // cms_page_show
                if (preg_match('#^/cms/page/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_cms_page_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cms_page_show')), array (  '_controller' => 'Custom\\CMSBundle\\Controller\\PageController::showAction',));
                }
                not_cms_page_show:

                // cms_page_new
                if ($pathinfo === '/cms/page/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_cms_page_new;
                    }

                    return array (  '_controller' => 'Custom\\CMSBundle\\Controller\\PageController::newAction',  '_route' => 'cms_page_new',);
                }
                not_cms_page_new:

                // cms_page_edit
                if (preg_match('#^/cms/page/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_cms_page_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cms_page_edit')), array (  '_controller' => 'Custom\\CMSBundle\\Controller\\PageController::editAction',));
                }
                not_cms_page_edit:

                // cms_page_delete
                if (preg_match('#^/cms/page/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_cms_page_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cms_page_delete')), array (  '_controller' => 'Custom\\CMSBundle\\Controller\\PageController::deleteAction',));
                }
                not_cms_page_delete:

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
