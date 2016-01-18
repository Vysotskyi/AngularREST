<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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

        // index_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index_homepage');
            }

            return array (  '_controller' => 'indexBundle\\Controller\\IndexController::indexAction',  '_route' => 'index_homepage',);
        }

        if (0 === strpos($pathinfo, '/api')) {
            if (0 === strpos($pathinfo, '/api/project')) {
                // api_get_project
                if (preg_match('#^/api/project(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_get_project;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_project')), array (  '_controller' => 'restBundle\\Controller\\ProjectController::getProjectAction',  '_format' => NULL,));
                }
                not_api_get_project:

                // api_put_project
                if (preg_match('#^/api/project(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_api_put_project;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_put_project')), array (  '_controller' => 'restBundle\\Controller\\ProjectController::putProjectAction',  '_format' => NULL,));
                }
                not_api_put_project:

                if (0 === strpos($pathinfo, '/api/projects')) {
                    // api_post_project
                    if (preg_match('#^/api/projects(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_api_post_project;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_post_project')), array (  '_controller' => 'restBundle\\Controller\\ProjectController::postProjectAction',  '_format' => NULL,));
                    }
                    not_api_post_project:

                    // api_delete_project
                    if (preg_match('#^/api/projects/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_api_delete_project;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_delete_project')), array (  '_controller' => 'restBundle\\Controller\\ProjectController::deleteProjectAction',  '_format' => NULL,));
                    }
                    not_api_delete_project:

                }

            }

            if (0 === strpos($pathinfo, '/api/task')) {
                // api_get_task
                if (0 === strpos($pathinfo, '/api/tasks') && preg_match('#^/api/tasks/(?P<project>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_get_task;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_task')), array (  '_controller' => 'restBundle\\Controller\\TaskController::getTaskAction',  '_format' => NULL,));
                }
                not_api_get_task:

                // api_put_task
                if (preg_match('#^/api/task(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_api_put_task;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_put_task')), array (  '_controller' => 'restBundle\\Controller\\TaskController::putTaskAction',  '_format' => NULL,));
                }
                not_api_put_task:

                if (0 === strpos($pathinfo, '/api/tasks')) {
                    // api_post_task
                    if (preg_match('#^/api/tasks(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_api_post_task;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_post_task')), array (  '_controller' => 'restBundle\\Controller\\TaskController::postTaskAction',  '_format' => NULL,));
                    }
                    not_api_post_task:

                    // api_delete_task
                    if (preg_match('#^/api/tasks/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_api_delete_task;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_delete_task')), array (  '_controller' => 'restBundle\\Controller\\TaskController::deleteTaskAction',  '_format' => NULL,));
                    }
                    not_api_delete_task:

                }

            }

            // api_post_position
            if (0 === strpos($pathinfo, '/api/positions') && preg_match('#^/api/positions/(?P<type>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_api_post_position;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_post_position')), array (  '_controller' => 'restBundle\\Controller\\PositionController::postPositionAction',  '_format' => NULL,));
            }
            not_api_post_position:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
