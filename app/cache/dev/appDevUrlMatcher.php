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

        // ca__RG__store_homepage
        if (rtrim($pathinfo, '/') === '/ca') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__store_homepage;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ca__RG__store_homepage');
            }

            return array (  '_controller' => 'Elcodi\\Store\\CoreBundle\\Controller\\HomeController::homeAction',  '_locale' => 'ca',  '_route' => 'ca__RG__store_homepage',);
        }
        not_ca__RG__store_homepage:

        // de__RG__store_homepage
        if (rtrim($pathinfo, '/') === '/de') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__store_homepage;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'de__RG__store_homepage');
            }

            return array (  '_controller' => 'Elcodi\\Store\\CoreBundle\\Controller\\HomeController::homeAction',  '_locale' => 'de',  '_route' => 'de__RG__store_homepage',);
        }
        not_de__RG__store_homepage:

        // en__RG__store_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__store_homepage;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'en__RG__store_homepage');
            }

            return array (  '_controller' => 'Elcodi\\Store\\CoreBundle\\Controller\\HomeController::homeAction',  '_locale' => 'en',  '_route' => 'en__RG__store_homepage',);
        }
        not_en__RG__store_homepage:

        // es__RG__store_homepage
        if (rtrim($pathinfo, '/') === '/es') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__store_homepage;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'es__RG__store_homepage');
            }

            return array (  '_controller' => 'Elcodi\\Store\\CoreBundle\\Controller\\HomeController::homeAction',  '_locale' => 'es',  '_route' => 'es__RG__store_homepage',);
        }
        not_es__RG__store_homepage:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_homepage
            if (rtrim($pathinfo, '/') === '/fi') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__store_homepage;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fi__RG__store_homepage');
                }

                return array (  '_controller' => 'Elcodi\\Store\\CoreBundle\\Controller\\HomeController::homeAction',  '_locale' => 'fi',  '_route' => 'fi__RG__store_homepage',);
            }
            not_fi__RG__store_homepage:

            // fr__RG__store_homepage
            if (rtrim($pathinfo, '/') === '/fr') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__store_homepage;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fr__RG__store_homepage');
                }

                return array (  '_controller' => 'Elcodi\\Store\\CoreBundle\\Controller\\HomeController::homeAction',  '_locale' => 'fr',  '_route' => 'fr__RG__store_homepage',);
            }
            not_fr__RG__store_homepage:

        }

        // gl__RG__store_homepage
        if (rtrim($pathinfo, '/') === '/gl') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__store_homepage;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'gl__RG__store_homepage');
            }

            return array (  '_controller' => 'Elcodi\\Store\\CoreBundle\\Controller\\HomeController::homeAction',  '_locale' => 'gl',  '_route' => 'gl__RG__store_homepage',);
        }
        not_gl__RG__store_homepage:

        // sr__RG__store_homepage
        if (rtrim($pathinfo, '/') === '/sr') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__store_homepage;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'sr__RG__store_homepage');
            }

            return array (  '_controller' => 'Elcodi\\Store\\CoreBundle\\Controller\\HomeController::homeAction',  '_locale' => 'sr',  '_route' => 'sr__RG__store_homepage',);
        }
        not_sr__RG__store_homepage:

        // ca__RG__store_categories_nav
        if ($pathinfo === '/ca/categories/nav') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__store_categories_nav;
            }

            return array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\CategoryController::navAction',  '_locale' => 'ca',  '_route' => 'ca__RG__store_categories_nav',);
        }
        not_ca__RG__store_categories_nav:

        // de__RG__store_categories_nav
        if ($pathinfo === '/de/kategorien/nav') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__store_categories_nav;
            }

            return array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\CategoryController::navAction',  '_locale' => 'de',  '_route' => 'de__RG__store_categories_nav',);
        }
        not_de__RG__store_categories_nav:

        // en__RG__store_categories_nav
        if ($pathinfo === '/categories/nav') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__store_categories_nav;
            }

            return array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\CategoryController::navAction',  '_locale' => 'en',  '_route' => 'en__RG__store_categories_nav',);
        }
        not_en__RG__store_categories_nav:

        // es__RG__store_categories_nav
        if ($pathinfo === '/es/categorias/nav') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__store_categories_nav;
            }

            return array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\CategoryController::navAction',  '_locale' => 'es',  '_route' => 'es__RG__store_categories_nav',);
        }
        not_es__RG__store_categories_nav:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_categories_nav
            if ($pathinfo === '/fi/categories/nav') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__store_categories_nav;
                }

                return array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\CategoryController::navAction',  '_locale' => 'fi',  '_route' => 'fi__RG__store_categories_nav',);
            }
            not_fi__RG__store_categories_nav:

            // fr__RG__store_categories_nav
            if ($pathinfo === '/fr/categories/nav') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__store_categories_nav;
                }

                return array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\CategoryController::navAction',  '_locale' => 'fr',  '_route' => 'fr__RG__store_categories_nav',);
            }
            not_fr__RG__store_categories_nav:

        }

        // gl__RG__store_categories_nav
        if ($pathinfo === '/gl/categorias/nav') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__store_categories_nav;
            }

            return array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\CategoryController::navAction',  '_locale' => 'gl',  '_route' => 'gl__RG__store_categories_nav',);
        }
        not_gl__RG__store_categories_nav:

        // sr__RG__store_categories_nav
        if ($pathinfo === '/sr/kategorije/nav') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__store_categories_nav;
            }

            return array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\CategoryController::navAction',  '_locale' => 'sr',  '_route' => 'sr__RG__store_categories_nav',);
        }
        not_sr__RG__store_categories_nav:

        // ca__RG__store_category_purchasables_list
        if (0 === strpos($pathinfo, '/ca/categoria') && preg_match('#^/ca/categoria/(?P<slug>[a-zA-Z0-9-]+)/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__store_category_purchasables_list;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ca__RG__store_category_purchasables_list')), array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\CategoryController::viewAction',  '_locale' => 'ca',));
        }
        not_ca__RG__store_category_purchasables_list:

        // de__RG__store_category_purchasables_list
        if (0 === strpos($pathinfo, '/de/kategorie') && preg_match('#^/de/kategorie/(?P<slug>[a-zA-Z0-9-]+)/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__store_category_purchasables_list;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__store_category_purchasables_list')), array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\CategoryController::viewAction',  '_locale' => 'de',));
        }
        not_de__RG__store_category_purchasables_list:

        // en__RG__store_category_purchasables_list
        if (0 === strpos($pathinfo, '/category') && preg_match('#^/category/(?P<slug>[a-zA-Z0-9-]+)/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__store_category_purchasables_list;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__store_category_purchasables_list')), array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\CategoryController::viewAction',  '_locale' => 'en',));
        }
        not_en__RG__store_category_purchasables_list:

        // es__RG__store_category_purchasables_list
        if (0 === strpos($pathinfo, '/es/categoria') && preg_match('#^/es/categoria/(?P<slug>[a-zA-Z0-9-]+)/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__store_category_purchasables_list;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'es__RG__store_category_purchasables_list')), array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\CategoryController::viewAction',  '_locale' => 'es',));
        }
        not_es__RG__store_category_purchasables_list:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_category_purchasables_list
            if (0 === strpos($pathinfo, '/fi/category') && preg_match('#^/fi/category/(?P<slug>[a-zA-Z0-9-]+)/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__store_category_purchasables_list;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fi__RG__store_category_purchasables_list')), array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\CategoryController::viewAction',  '_locale' => 'fi',));
            }
            not_fi__RG__store_category_purchasables_list:

            // fr__RG__store_category_purchasables_list
            if (0 === strpos($pathinfo, '/fr/category') && preg_match('#^/fr/category/(?P<slug>[a-zA-Z0-9-]+)/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__store_category_purchasables_list;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__store_category_purchasables_list')), array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\CategoryController::viewAction',  '_locale' => 'fr',));
            }
            not_fr__RG__store_category_purchasables_list:

        }

        // gl__RG__store_category_purchasables_list
        if (0 === strpos($pathinfo, '/gl/categoria') && preg_match('#^/gl/categoria/(?P<slug>[a-zA-Z0-9-]+)/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__store_category_purchasables_list;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gl__RG__store_category_purchasables_list')), array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\CategoryController::viewAction',  '_locale' => 'gl',));
        }
        not_gl__RG__store_category_purchasables_list:

        // sr__RG__store_category_purchasables_list
        if (0 === strpos($pathinfo, '/sr/kategorija') && preg_match('#^/sr/kategorija/(?P<slug>[a-zA-Z0-9-]+)/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__store_category_purchasables_list;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr__RG__store_category_purchasables_list')), array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\CategoryController::viewAction',  '_locale' => 'sr',));
        }
        not_sr__RG__store_category_purchasables_list:

        // ca__RG__store_purchasable_related
        if (0 === strpos($pathinfo, '/ca/purchasable') && preg_match('#^/ca/purchasable/(?P<id>\\d+)/related$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__store_purchasable_related;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ca__RG__store_purchasable_related')), array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\PurchasableController::relatedAction',  '_locale' => 'ca',));
        }
        not_ca__RG__store_purchasable_related:

        // de__RG__store_purchasable_related
        if (0 === strpos($pathinfo, '/de/purchasable') && preg_match('#^/de/purchasable/(?P<id>\\d+)/related$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__store_purchasable_related;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__store_purchasable_related')), array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\PurchasableController::relatedAction',  '_locale' => 'de',));
        }
        not_de__RG__store_purchasable_related:

        // en__RG__store_purchasable_related
        if (0 === strpos($pathinfo, '/purchasable') && preg_match('#^/purchasable/(?P<id>\\d+)/related$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__store_purchasable_related;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__store_purchasable_related')), array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\PurchasableController::relatedAction',  '_locale' => 'en',));
        }
        not_en__RG__store_purchasable_related:

        // es__RG__store_purchasable_related
        if (0 === strpos($pathinfo, '/es/purchasable') && preg_match('#^/es/purchasable/(?P<id>\\d+)/related$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__store_purchasable_related;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'es__RG__store_purchasable_related')), array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\PurchasableController::relatedAction',  '_locale' => 'es',));
        }
        not_es__RG__store_purchasable_related:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_purchasable_related
            if (0 === strpos($pathinfo, '/fi/purchasable') && preg_match('#^/fi/purchasable/(?P<id>\\d+)/related$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__store_purchasable_related;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fi__RG__store_purchasable_related')), array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\PurchasableController::relatedAction',  '_locale' => 'fi',));
            }
            not_fi__RG__store_purchasable_related:

            // fr__RG__store_purchasable_related
            if (0 === strpos($pathinfo, '/fr/purchasable') && preg_match('#^/fr/purchasable/(?P<id>\\d+)/related$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__store_purchasable_related;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__store_purchasable_related')), array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\PurchasableController::relatedAction',  '_locale' => 'fr',));
            }
            not_fr__RG__store_purchasable_related:

        }

        // gl__RG__store_purchasable_related
        if (0 === strpos($pathinfo, '/gl/purchasable') && preg_match('#^/gl/purchasable/(?P<id>\\d+)/related$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__store_purchasable_related;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gl__RG__store_purchasable_related')), array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\PurchasableController::relatedAction',  '_locale' => 'gl',));
        }
        not_gl__RG__store_purchasable_related:

        // sr__RG__store_purchasable_related
        if (0 === strpos($pathinfo, '/sr/purchasable') && preg_match('#^/sr/purchasable/(?P<id>\\d+)/related$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__store_purchasable_related;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr__RG__store_purchasable_related')), array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\PurchasableController::relatedAction',  '_locale' => 'sr',));
        }
        not_sr__RG__store_purchasable_related:

        // ca__RG__store_product_view
        if (0 === strpos($pathinfo, '/ca/producte') && preg_match('#^/ca/producte/(?P<slug>[\\w-]+)/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__store_product_view;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ca__RG__store_product_view')), array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\PurchasableController::viewAction',  '_locale' => 'ca',));
        }
        not_ca__RG__store_product_view:

        // de__RG__store_product_view
        if (0 === strpos($pathinfo, '/de/produkt') && preg_match('#^/de/produkt/(?P<slug>[\\w-]+)/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__store_product_view;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__store_product_view')), array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\PurchasableController::viewAction',  '_locale' => 'de',));
        }
        not_de__RG__store_product_view:

        // en__RG__store_product_view
        if (0 === strpos($pathinfo, '/product') && preg_match('#^/product/(?P<slug>[\\w-]+)/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__store_product_view;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__store_product_view')), array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\PurchasableController::viewAction',  '_locale' => 'en',));
        }
        not_en__RG__store_product_view:

        // es__RG__store_product_view
        if (0 === strpos($pathinfo, '/es/producto') && preg_match('#^/es/producto/(?P<slug>[\\w-]+)/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__store_product_view;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'es__RG__store_product_view')), array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\PurchasableController::viewAction',  '_locale' => 'es',));
        }
        not_es__RG__store_product_view:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_product_view
            if (0 === strpos($pathinfo, '/fi/product') && preg_match('#^/fi/product/(?P<slug>[\\w-]+)/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__store_product_view;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fi__RG__store_product_view')), array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\PurchasableController::viewAction',  '_locale' => 'fi',));
            }
            not_fi__RG__store_product_view:

            // fr__RG__store_product_view
            if (0 === strpos($pathinfo, '/fr/produit') && preg_match('#^/fr/produit/(?P<slug>[\\w-]+)/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__store_product_view;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__store_product_view')), array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\PurchasableController::viewAction',  '_locale' => 'fr',));
            }
            not_fr__RG__store_product_view:

        }

        // gl__RG__store_product_view
        if (0 === strpos($pathinfo, '/gl/produto') && preg_match('#^/gl/produto/(?P<slug>[\\w-]+)/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__store_product_view;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gl__RG__store_product_view')), array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\PurchasableController::viewAction',  '_locale' => 'gl',));
        }
        not_gl__RG__store_product_view:

        // sr__RG__store_product_view
        if (0 === strpos($pathinfo, '/sr/artikal') && preg_match('#^/sr/artikal/(?P<slug>[\\w-]+)/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__store_product_view;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr__RG__store_product_view')), array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\PurchasableController::viewAction',  '_locale' => 'sr',));
        }
        not_sr__RG__store_product_view:

        // ca__RG__store_purchasable_pack_view
        if (0 === strpos($pathinfo, '/ca/pack') && preg_match('#^/ca/pack/(?P<slug>[\\w-]+)/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__store_purchasable_pack_view;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ca__RG__store_purchasable_pack_view')), array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\PurchasableController::viewAction',  '_locale' => 'ca',));
        }
        not_ca__RG__store_purchasable_pack_view:

        // de__RG__store_purchasable_pack_view
        if (0 === strpos($pathinfo, '/de/pack') && preg_match('#^/de/pack/(?P<slug>[\\w-]+)/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__store_purchasable_pack_view;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__store_purchasable_pack_view')), array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\PurchasableController::viewAction',  '_locale' => 'de',));
        }
        not_de__RG__store_purchasable_pack_view:

        // en__RG__store_purchasable_pack_view
        if (0 === strpos($pathinfo, '/pack') && preg_match('#^/pack/(?P<slug>[\\w-]+)/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__store_purchasable_pack_view;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__store_purchasable_pack_view')), array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\PurchasableController::viewAction',  '_locale' => 'en',));
        }
        not_en__RG__store_purchasable_pack_view:

        // es__RG__store_purchasable_pack_view
        if (0 === strpos($pathinfo, '/es/pack') && preg_match('#^/es/pack/(?P<slug>[\\w-]+)/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__store_purchasable_pack_view;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'es__RG__store_purchasable_pack_view')), array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\PurchasableController::viewAction',  '_locale' => 'es',));
        }
        not_es__RG__store_purchasable_pack_view:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_purchasable_pack_view
            if (0 === strpos($pathinfo, '/fi/pack') && preg_match('#^/fi/pack/(?P<slug>[\\w-]+)/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__store_purchasable_pack_view;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fi__RG__store_purchasable_pack_view')), array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\PurchasableController::viewAction',  '_locale' => 'fi',));
            }
            not_fi__RG__store_purchasable_pack_view:

            // fr__RG__store_purchasable_pack_view
            if (0 === strpos($pathinfo, '/fr/pack') && preg_match('#^/fr/pack/(?P<slug>[\\w-]+)/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__store_purchasable_pack_view;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__store_purchasable_pack_view')), array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\PurchasableController::viewAction',  '_locale' => 'fr',));
            }
            not_fr__RG__store_purchasable_pack_view:

        }

        // gl__RG__store_purchasable_pack_view
        if (0 === strpos($pathinfo, '/gl/pack') && preg_match('#^/gl/pack/(?P<slug>[\\w-]+)/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__store_purchasable_pack_view;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gl__RG__store_purchasable_pack_view')), array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\PurchasableController::viewAction',  '_locale' => 'gl',));
        }
        not_gl__RG__store_purchasable_pack_view:

        // sr__RG__store_purchasable_pack_view
        if (0 === strpos($pathinfo, '/sr/pack') && preg_match('#^/sr/pack/(?P<slug>[\\w-]+)/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__store_purchasable_pack_view;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr__RG__store_purchasable_pack_view')), array (  '_controller' => 'Elcodi\\Store\\ProductBundle\\Controller\\PurchasableController::viewAction',  '_locale' => 'sr',));
        }
        not_sr__RG__store_purchasable_pack_view:

        // ca__RG__store_password_remember
        if ($pathinfo === '/ca/contrasenya/recordar') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_ca__RG__store_password_remember;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\PasswordController::rememberAction',  '_locale' => 'ca',  '_route' => 'ca__RG__store_password_remember',);
        }
        not_ca__RG__store_password_remember:

        // de__RG__store_password_remember
        if ($pathinfo === '/de/passwort/erinnern') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_de__RG__store_password_remember;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\PasswordController::rememberAction',  '_locale' => 'de',  '_route' => 'de__RG__store_password_remember',);
        }
        not_de__RG__store_password_remember:

        // en__RG__store_password_remember
        if ($pathinfo === '/password/remember') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__store_password_remember;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\PasswordController::rememberAction',  '_locale' => 'en',  '_route' => 'en__RG__store_password_remember',);
        }
        not_en__RG__store_password_remember:

        // es__RG__store_password_remember
        if ($pathinfo === '/es/contrasena/recordar') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_es__RG__store_password_remember;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\PasswordController::rememberAction',  '_locale' => 'es',  '_route' => 'es__RG__store_password_remember',);
        }
        not_es__RG__store_password_remember:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_password_remember
            if ($pathinfo === '/fi/password/remember') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fi__RG__store_password_remember;
                }

                return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\PasswordController::rememberAction',  '_locale' => 'fi',  '_route' => 'fi__RG__store_password_remember',);
            }
            not_fi__RG__store_password_remember:

            // fr__RG__store_password_remember
            if ($pathinfo === '/fr/mot-de-passe/rappeler') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fr__RG__store_password_remember;
                }

                return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\PasswordController::rememberAction',  '_locale' => 'fr',  '_route' => 'fr__RG__store_password_remember',);
            }
            not_fr__RG__store_password_remember:

        }

        // gl__RG__store_password_remember
        if ($pathinfo === '/gl/contrasinal/lembrar') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_gl__RG__store_password_remember;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\PasswordController::rememberAction',  '_locale' => 'gl',  '_route' => 'gl__RG__store_password_remember',);
        }
        not_gl__RG__store_password_remember:

        // sr__RG__store_password_remember
        if ($pathinfo === '/sr/lozinka/zapamti') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_sr__RG__store_password_remember;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\PasswordController::rememberAction',  '_locale' => 'sr',  '_route' => 'sr__RG__store_password_remember',);
        }
        not_sr__RG__store_password_remember:

        // ca__RG__store_password_recover_sent
        if ($pathinfo === '/ca/contrasenya/enviat') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__store_password_recover_sent;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\PasswordController::sentAction',  '_locale' => 'ca',  '_route' => 'ca__RG__store_password_recover_sent',);
        }
        not_ca__RG__store_password_recover_sent:

        // de__RG__store_password_recover_sent
        if ($pathinfo === '/de/passwort/gesendet') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__store_password_recover_sent;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\PasswordController::sentAction',  '_locale' => 'de',  '_route' => 'de__RG__store_password_recover_sent',);
        }
        not_de__RG__store_password_recover_sent:

        // en__RG__store_password_recover_sent
        if ($pathinfo === '/password/sent') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__store_password_recover_sent;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\PasswordController::sentAction',  '_locale' => 'en',  '_route' => 'en__RG__store_password_recover_sent',);
        }
        not_en__RG__store_password_recover_sent:

        // es__RG__store_password_recover_sent
        if ($pathinfo === '/es/contrasena/enviado') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__store_password_recover_sent;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\PasswordController::sentAction',  '_locale' => 'es',  '_route' => 'es__RG__store_password_recover_sent',);
        }
        not_es__RG__store_password_recover_sent:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_password_recover_sent
            if ($pathinfo === '/fi/password/sent') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__store_password_recover_sent;
                }

                return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\PasswordController::sentAction',  '_locale' => 'fi',  '_route' => 'fi__RG__store_password_recover_sent',);
            }
            not_fi__RG__store_password_recover_sent:

            // fr__RG__store_password_recover_sent
            if ($pathinfo === '/fr/mot-de-passe/envoye') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__store_password_recover_sent;
                }

                return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\PasswordController::sentAction',  '_locale' => 'fr',  '_route' => 'fr__RG__store_password_recover_sent',);
            }
            not_fr__RG__store_password_recover_sent:

        }

        // gl__RG__store_password_recover_sent
        if ($pathinfo === '/gl/contrasinal/enviado') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__store_password_recover_sent;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\PasswordController::sentAction',  '_locale' => 'gl',  '_route' => 'gl__RG__store_password_recover_sent',);
        }
        not_gl__RG__store_password_recover_sent:

        // sr__RG__store_password_recover_sent
        if ($pathinfo === '/sr/lozinka/poslata') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__store_password_recover_sent;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\PasswordController::sentAction',  '_locale' => 'sr',  '_route' => 'sr__RG__store_password_recover_sent',);
        }
        not_sr__RG__store_password_recover_sent:

        // ca__RG__store_password_recover
        if ($pathinfo === '/ca/contrasenya/recuperar') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_ca__RG__store_password_recover;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\PasswordController::recoverAction',  '_locale' => 'ca',  '_route' => 'ca__RG__store_password_recover',);
        }
        not_ca__RG__store_password_recover:

        // de__RG__store_password_recover
        if ($pathinfo === '/de/passwort/widerherstellen') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_de__RG__store_password_recover;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\PasswordController::recoverAction',  '_locale' => 'de',  '_route' => 'de__RG__store_password_recover',);
        }
        not_de__RG__store_password_recover:

        // en__RG__store_password_recover
        if ($pathinfo === '/password/recover') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__store_password_recover;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\PasswordController::recoverAction',  '_locale' => 'en',  '_route' => 'en__RG__store_password_recover',);
        }
        not_en__RG__store_password_recover:

        // es__RG__store_password_recover
        if ($pathinfo === '/es/contrasena/recuperar') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_es__RG__store_password_recover;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\PasswordController::recoverAction',  '_locale' => 'es',  '_route' => 'es__RG__store_password_recover',);
        }
        not_es__RG__store_password_recover:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_password_recover
            if ($pathinfo === '/fi/password/recover') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fi__RG__store_password_recover;
                }

                return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\PasswordController::recoverAction',  '_locale' => 'fi',  '_route' => 'fi__RG__store_password_recover',);
            }
            not_fi__RG__store_password_recover:

            // fr__RG__store_password_recover
            if ($pathinfo === '/fr/mot-de-passe/recuperer') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fr__RG__store_password_recover;
                }

                return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\PasswordController::recoverAction',  '_locale' => 'fr',  '_route' => 'fr__RG__store_password_recover',);
            }
            not_fr__RG__store_password_recover:

        }

        // gl__RG__store_password_recover
        if ($pathinfo === '/gl/contrasinal/recuperar') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_gl__RG__store_password_recover;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\PasswordController::recoverAction',  '_locale' => 'gl',  '_route' => 'gl__RG__store_password_recover',);
        }
        not_gl__RG__store_password_recover:

        // sr__RG__store_password_recover
        if ($pathinfo === '/sr/lozinka/povrati') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_sr__RG__store_password_recover;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\PasswordController::recoverAction',  '_locale' => 'sr',  '_route' => 'sr__RG__store_password_recover',);
        }
        not_sr__RG__store_password_recover:

        // ca__RG__store_login
        if ($pathinfo === '/ca/entrar') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__store_login;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'ca',  '_route' => 'ca__RG__store_login',);
        }
        not_ca__RG__store_login:

        // de__RG__store_login
        if ($pathinfo === '/de/login') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__store_login;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'de',  '_route' => 'de__RG__store_login',);
        }
        not_de__RG__store_login:

        // en__RG__store_login
        if ($pathinfo === '/login') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__store_login;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'en',  '_route' => 'en__RG__store_login',);
        }
        not_en__RG__store_login:

        // es__RG__store_login
        if ($pathinfo === '/es/entrar') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__store_login;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'es',  '_route' => 'es__RG__store_login',);
        }
        not_es__RG__store_login:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_login
            if ($pathinfo === '/fi/login') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__store_login;
                }

                return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'fi',  '_route' => 'fi__RG__store_login',);
            }
            not_fi__RG__store_login:

            // fr__RG__store_login
            if ($pathinfo === '/fr/login') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__store_login;
                }

                return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'fr',  '_route' => 'fr__RG__store_login',);
            }
            not_fr__RG__store_login:

        }

        // gl__RG__store_login
        if ($pathinfo === '/gl/acceso') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__store_login;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'gl',  '_route' => 'gl__RG__store_login',);
        }
        not_gl__RG__store_login:

        // sr__RG__store_login
        if ($pathinfo === '/sr/ulaz') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__store_login;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'sr',  '_route' => 'sr__RG__store_login',);
        }
        not_sr__RG__store_login:

        // ca__RG__store_register
        if ($pathinfo === '/ca/registrar-se') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_ca__RG__store_register;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\SecurityController::registerAction',  '_locale' => 'ca',  '_route' => 'ca__RG__store_register',);
        }
        not_ca__RG__store_register:

        // de__RG__store_register
        if ($pathinfo === '/de/registrieren') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_de__RG__store_register;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\SecurityController::registerAction',  '_locale' => 'de',  '_route' => 'de__RG__store_register',);
        }
        not_de__RG__store_register:

        // en__RG__store_register
        if ($pathinfo === '/register') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__store_register;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\SecurityController::registerAction',  '_locale' => 'en',  '_route' => 'en__RG__store_register',);
        }
        not_en__RG__store_register:

        // es__RG__store_register
        if ($pathinfo === '/es/registar-se') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_es__RG__store_register;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\SecurityController::registerAction',  '_locale' => 'es',  '_route' => 'es__RG__store_register',);
        }
        not_es__RG__store_register:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_register
            if ($pathinfo === '/fi/register') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fi__RG__store_register;
                }

                return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\SecurityController::registerAction',  '_locale' => 'fi',  '_route' => 'fi__RG__store_register',);
            }
            not_fi__RG__store_register:

            // fr__RG__store_register
            if ($pathinfo === '/fr/registre') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fr__RG__store_register;
                }

                return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\SecurityController::registerAction',  '_locale' => 'fr',  '_route' => 'fr__RG__store_register',);
            }
            not_fr__RG__store_register:

        }

        // gl__RG__store_register
        if ($pathinfo === '/gl/rexistro') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_gl__RG__store_register;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\SecurityController::registerAction',  '_locale' => 'gl',  '_route' => 'gl__RG__store_register',);
        }
        not_gl__RG__store_register:

        // sr__RG__store_register
        if ($pathinfo === '/sr/registracija') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_sr__RG__store_register;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\SecurityController::registerAction',  '_locale' => 'sr',  '_route' => 'sr__RG__store_register',);
        }
        not_sr__RG__store_register:

        // ca__RG__store_user_nav
        if ($pathinfo === '/ca/usuari/nav') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__store_user_nav;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\UserController::navAction',  '_locale' => 'ca',  '_route' => 'ca__RG__store_user_nav',);
        }
        not_ca__RG__store_user_nav:

        // de__RG__store_user_nav
        if ($pathinfo === '/de/benutzer/nav') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__store_user_nav;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\UserController::navAction',  '_locale' => 'de',  '_route' => 'de__RG__store_user_nav',);
        }
        not_de__RG__store_user_nav:

        // en__RG__store_user_nav
        if ($pathinfo === '/user/nav') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__store_user_nav;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\UserController::navAction',  '_locale' => 'en',  '_route' => 'en__RG__store_user_nav',);
        }
        not_en__RG__store_user_nav:

        // es__RG__store_user_nav
        if ($pathinfo === '/es/usuario/nav') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__store_user_nav;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\UserController::navAction',  '_locale' => 'es',  '_route' => 'es__RG__store_user_nav',);
        }
        not_es__RG__store_user_nav:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_user_nav
            if ($pathinfo === '/fi/user/nav') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__store_user_nav;
                }

                return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\UserController::navAction',  '_locale' => 'fi',  '_route' => 'fi__RG__store_user_nav',);
            }
            not_fi__RG__store_user_nav:

            // fr__RG__store_user_nav
            if ($pathinfo === '/fr/usager/nav') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__store_user_nav;
                }

                return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\UserController::navAction',  '_locale' => 'fr',  '_route' => 'fr__RG__store_user_nav',);
            }
            not_fr__RG__store_user_nav:

        }

        // gl__RG__store_user_nav
        if ($pathinfo === '/gl/usuario/nav') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__store_user_nav;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\UserController::navAction',  '_locale' => 'gl',  '_route' => 'gl__RG__store_user_nav',);
        }
        not_gl__RG__store_user_nav:

        // sr__RG__store_user_nav
        if ($pathinfo === '/sr/korisnik/nav') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__store_user_nav;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\UserController::navAction',  '_locale' => 'sr',  '_route' => 'sr__RG__store_user_nav',);
        }
        not_sr__RG__store_user_nav:

        // ca__RG__store_user
        if ($pathinfo === '/ca/usuari') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__store_user;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\UserController::homeAction',  '_locale' => 'ca',  '_route' => 'ca__RG__store_user',);
        }
        not_ca__RG__store_user:

        // de__RG__store_user
        if ($pathinfo === '/de/benutzer') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__store_user;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\UserController::homeAction',  '_locale' => 'de',  '_route' => 'de__RG__store_user',);
        }
        not_de__RG__store_user:

        // en__RG__store_user
        if ($pathinfo === '/user') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__store_user;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\UserController::homeAction',  '_locale' => 'en',  '_route' => 'en__RG__store_user',);
        }
        not_en__RG__store_user:

        // es__RG__store_user
        if ($pathinfo === '/es/usuario') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__store_user;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\UserController::homeAction',  '_locale' => 'es',  '_route' => 'es__RG__store_user',);
        }
        not_es__RG__store_user:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_user
            if ($pathinfo === '/fi/user') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__store_user;
                }

                return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\UserController::homeAction',  '_locale' => 'fi',  '_route' => 'fi__RG__store_user',);
            }
            not_fi__RG__store_user:

            // fr__RG__store_user
            if ($pathinfo === '/fr/usager') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__store_user;
                }

                return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\UserController::homeAction',  '_locale' => 'fr',  '_route' => 'fr__RG__store_user',);
            }
            not_fr__RG__store_user:

        }

        // gl__RG__store_user
        if ($pathinfo === '/gl/usuario') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__store_user;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\UserController::homeAction',  '_locale' => 'gl',  '_route' => 'gl__RG__store_user',);
        }
        not_gl__RG__store_user:

        // sr__RG__store_user
        if ($pathinfo === '/sr/korisnik') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__store_user;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\UserController::homeAction',  '_locale' => 'sr',  '_route' => 'sr__RG__store_user',);
        }
        not_sr__RG__store_user:

        // ca__RG__store_user_edit
        if ($pathinfo === '/ca/usuari/editar') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_ca__RG__store_user_edit;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\UserController::editAction',  '_locale' => 'ca',  '_route' => 'ca__RG__store_user_edit',);
        }
        not_ca__RG__store_user_edit:

        // de__RG__store_user_edit
        if ($pathinfo === '/de/benutzer/bearbeiten') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_de__RG__store_user_edit;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\UserController::editAction',  '_locale' => 'de',  '_route' => 'de__RG__store_user_edit',);
        }
        not_de__RG__store_user_edit:

        // en__RG__store_user_edit
        if ($pathinfo === '/user/edit') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__store_user_edit;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\UserController::editAction',  '_locale' => 'en',  '_route' => 'en__RG__store_user_edit',);
        }
        not_en__RG__store_user_edit:

        // es__RG__store_user_edit
        if ($pathinfo === '/es/usuario/editar') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_es__RG__store_user_edit;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\UserController::editAction',  '_locale' => 'es',  '_route' => 'es__RG__store_user_edit',);
        }
        not_es__RG__store_user_edit:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_user_edit
            if ($pathinfo === '/fi/user/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fi__RG__store_user_edit;
                }

                return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\UserController::editAction',  '_locale' => 'fi',  '_route' => 'fi__RG__store_user_edit',);
            }
            not_fi__RG__store_user_edit:

            // fr__RG__store_user_edit
            if ($pathinfo === '/fr/usager/modif') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fr__RG__store_user_edit;
                }

                return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\UserController::editAction',  '_locale' => 'fr',  '_route' => 'fr__RG__store_user_edit',);
            }
            not_fr__RG__store_user_edit:

        }

        // gl__RG__store_user_edit
        if ($pathinfo === '/gl/usuario/editar') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_gl__RG__store_user_edit;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\UserController::editAction',  '_locale' => 'gl',  '_route' => 'gl__RG__store_user_edit',);
        }
        not_gl__RG__store_user_edit:

        // sr__RG__store_user_edit
        if ($pathinfo === '/sr/korisnik/izmeni') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_sr__RG__store_user_edit;
            }

            return array (  '_controller' => 'Elcodi\\Store\\UserBundle\\Controller\\UserController::editAction',  '_locale' => 'sr',  '_route' => 'sr__RG__store_user_edit',);
        }
        not_sr__RG__store_user_edit:

        // ca__RG__store_cart_view
        if ($pathinfo === '/ca/cistella') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__store_cart_view;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::viewAction',  '_locale' => 'ca',  '_route' => 'ca__RG__store_cart_view',);
        }
        not_ca__RG__store_cart_view:

        // de__RG__store_cart_view
        if ($pathinfo === '/de/warenkorb') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__store_cart_view;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::viewAction',  '_locale' => 'de',  '_route' => 'de__RG__store_cart_view',);
        }
        not_de__RG__store_cart_view:

        // en__RG__store_cart_view
        if ($pathinfo === '/cart') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__store_cart_view;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::viewAction',  '_locale' => 'en',  '_route' => 'en__RG__store_cart_view',);
        }
        not_en__RG__store_cart_view:

        // es__RG__store_cart_view
        if ($pathinfo === '/es/mi-carrito') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__store_cart_view;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::viewAction',  '_locale' => 'es',  '_route' => 'es__RG__store_cart_view',);
        }
        not_es__RG__store_cart_view:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_cart_view
            if ($pathinfo === '/fi/cart') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__store_cart_view;
                }

                return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::viewAction',  '_locale' => 'fi',  '_route' => 'fi__RG__store_cart_view',);
            }
            not_fi__RG__store_cart_view:

            // fr__RG__store_cart_view
            if ($pathinfo === '/fr/panier') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__store_cart_view;
                }

                return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::viewAction',  '_locale' => 'fr',  '_route' => 'fr__RG__store_cart_view',);
            }
            not_fr__RG__store_cart_view:

        }

        // gl__RG__store_cart_view
        if ($pathinfo === '/gl/cesta') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__store_cart_view;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::viewAction',  '_locale' => 'gl',  '_route' => 'gl__RG__store_cart_view',);
        }
        not_gl__RG__store_cart_view:

        // sr__RG__store_cart_view
        if ($pathinfo === '/sr/korpa') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__store_cart_view;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::viewAction',  '_locale' => 'sr',  '_route' => 'sr__RG__store_cart_view',);
        }
        not_sr__RG__store_cart_view:

        // ca__RG__store_cart_add_purchasable
        if (0 === strpos($pathinfo, '/ca/cistella/producte') && preg_match('#^/ca/cistella/producte/(?P<id>\\d+)/afegir$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_ca__RG__store_cart_add_purchasable;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ca__RG__store_cart_add_purchasable')), array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::addPurchasableAction',  '_locale' => 'ca',));
        }
        not_ca__RG__store_cart_add_purchasable:

        // de__RG__store_cart_add_purchasable
        if (0 === strpos($pathinfo, '/de/warenkorb/produkt') && preg_match('#^/de/warenkorb/produkt/(?P<id>\\d+)/add$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_de__RG__store_cart_add_purchasable;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__store_cart_add_purchasable')), array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::addPurchasableAction',  '_locale' => 'de',));
        }
        not_de__RG__store_cart_add_purchasable:

        // en__RG__store_cart_add_purchasable
        if (0 === strpos($pathinfo, '/cart/purchasable') && preg_match('#^/cart/purchasable/(?P<id>\\d+)/add$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__store_cart_add_purchasable;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__store_cart_add_purchasable')), array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::addPurchasableAction',  '_locale' => 'en',));
        }
        not_en__RG__store_cart_add_purchasable:

        // es__RG__store_cart_add_purchasable
        if (0 === strpos($pathinfo, '/es/mi-carrito/producto') && preg_match('#^/es/mi\\-carrito/producto/(?P<id>\\d+)/añadir$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_es__RG__store_cart_add_purchasable;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'es__RG__store_cart_add_purchasable')), array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::addPurchasableAction',  '_locale' => 'es',));
        }
        not_es__RG__store_cart_add_purchasable:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_cart_add_purchasable
            if (0 === strpos($pathinfo, '/fi/cart/product') && preg_match('#^/fi/cart/product/(?P<id>\\d+)/add$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fi__RG__store_cart_add_purchasable;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fi__RG__store_cart_add_purchasable')), array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::addPurchasableAction',  '_locale' => 'fi',));
            }
            not_fi__RG__store_cart_add_purchasable:

            // fr__RG__store_cart_add_purchasable
            if (0 === strpos($pathinfo, '/fr/cart/purchasable') && preg_match('#^/fr/cart/purchasable/(?P<id>\\d+)/add$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fr__RG__store_cart_add_purchasable;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__store_cart_add_purchasable')), array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::addPurchasableAction',  '_locale' => 'fr',));
            }
            not_fr__RG__store_cart_add_purchasable:

        }

        // gl__RG__store_cart_add_purchasable
        if (0 === strpos($pathinfo, '/gl/cesta/produto') && preg_match('#^/gl/cesta/produto/(?P<id>\\d+)/engadir$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_gl__RG__store_cart_add_purchasable;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gl__RG__store_cart_add_purchasable')), array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::addPurchasableAction',  '_locale' => 'gl',));
        }
        not_gl__RG__store_cart_add_purchasable:

        // sr__RG__store_cart_add_purchasable
        if (0 === strpos($pathinfo, '/sr/korpa/artikal') && preg_match('#^/sr/korpa/artikal/(?P<id>\\d+)/add$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_sr__RG__store_cart_add_purchasable;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr__RG__store_cart_add_purchasable')), array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::addPurchasableAction',  '_locale' => 'sr',));
        }
        not_sr__RG__store_cart_add_purchasable:

        // ca__RG__store_cart_empty
        if ($pathinfo === '/ca/cistella/buidar') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__store_cart_empty;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::emptyCartAction',  '_locale' => 'ca',  '_route' => 'ca__RG__store_cart_empty',);
        }
        not_ca__RG__store_cart_empty:

        // de__RG__store_cart_empty
        if ($pathinfo === '/de/warenkorb/leeren') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__store_cart_empty;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::emptyCartAction',  '_locale' => 'de',  '_route' => 'de__RG__store_cart_empty',);
        }
        not_de__RG__store_cart_empty:

        // en__RG__store_cart_empty
        if ($pathinfo === '/cart/empty') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__store_cart_empty;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::emptyCartAction',  '_locale' => 'en',  '_route' => 'en__RG__store_cart_empty',);
        }
        not_en__RG__store_cart_empty:

        // es__RG__store_cart_empty
        if ($pathinfo === '/es/mi-carrito/vaciar') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__store_cart_empty;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::emptyCartAction',  '_locale' => 'es',  '_route' => 'es__RG__store_cart_empty',);
        }
        not_es__RG__store_cart_empty:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_cart_empty
            if ($pathinfo === '/fi/cart/empty') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__store_cart_empty;
                }

                return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::emptyCartAction',  '_locale' => 'fi',  '_route' => 'fi__RG__store_cart_empty',);
            }
            not_fi__RG__store_cart_empty:

            // fr__RG__store_cart_empty
            if ($pathinfo === '/fr/panier/vider') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__store_cart_empty;
                }

                return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::emptyCartAction',  '_locale' => 'fr',  '_route' => 'fr__RG__store_cart_empty',);
            }
            not_fr__RG__store_cart_empty:

        }

        // gl__RG__store_cart_empty
        if ($pathinfo === '/gl/cesta/baleira') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__store_cart_empty;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::emptyCartAction',  '_locale' => 'gl',  '_route' => 'gl__RG__store_cart_empty',);
        }
        not_gl__RG__store_cart_empty:

        // sr__RG__store_cart_empty
        if ($pathinfo === '/sr/korpa/isprazni') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__store_cart_empty;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::emptyCartAction',  '_locale' => 'sr',  '_route' => 'sr__RG__store_cart_empty',);
        }
        not_sr__RG__store_cart_empty:

        // ca__RG__store_cart_update
        if ($pathinfo === '/ca/cistella/actualitzar') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ca__RG__store_cart_update;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::updateCartAction',  '_locale' => 'ca',  '_route' => 'ca__RG__store_cart_update',);
        }
        not_ca__RG__store_cart_update:

        // de__RG__store_cart_update
        if ($pathinfo === '/de/warenkorb/erweitern') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_de__RG__store_cart_update;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::updateCartAction',  '_locale' => 'de',  '_route' => 'de__RG__store_cart_update',);
        }
        not_de__RG__store_cart_update:

        // en__RG__store_cart_update
        if ($pathinfo === '/cart/update') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__store_cart_update;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::updateCartAction',  '_locale' => 'en',  '_route' => 'en__RG__store_cart_update',);
        }
        not_en__RG__store_cart_update:

        // es__RG__store_cart_update
        if ($pathinfo === '/es/mi-carrito/actualizar') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_es__RG__store_cart_update;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::updateCartAction',  '_locale' => 'es',  '_route' => 'es__RG__store_cart_update',);
        }
        not_es__RG__store_cart_update:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_cart_update
            if ($pathinfo === '/fi/cart/update') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fi__RG__store_cart_update;
                }

                return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::updateCartAction',  '_locale' => 'fi',  '_route' => 'fi__RG__store_cart_update',);
            }
            not_fi__RG__store_cart_update:

            // fr__RG__store_cart_update
            if ($pathinfo === '/fr/panier/reactualiser') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fr__RG__store_cart_update;
                }

                return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::updateCartAction',  '_locale' => 'fr',  '_route' => 'fr__RG__store_cart_update',);
            }
            not_fr__RG__store_cart_update:

        }

        // gl__RG__store_cart_update
        if ($pathinfo === '/gl/cesta/actualizar') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_gl__RG__store_cart_update;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::updateCartAction',  '_locale' => 'gl',  '_route' => 'gl__RG__store_cart_update',);
        }
        not_gl__RG__store_cart_update:

        // sr__RG__store_cart_update
        if ($pathinfo === '/sr/korpa/izmeni') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_sr__RG__store_cart_update;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::updateCartAction',  '_locale' => 'sr',  '_route' => 'sr__RG__store_cart_update',);
        }
        not_sr__RG__store_cart_update:

        // ca__RG__store_cartline_remove
        if (0 === strpos($pathinfo, '/ca/cistella/linia') && preg_match('#^/ca/cistella/linia/(?P<id>[^/]++)/eliminar$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__store_cartline_remove;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ca__RG__store_cartline_remove')), array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::removeCartLineAction',  '_locale' => 'ca',));
        }
        not_ca__RG__store_cartline_remove:

        // de__RG__store_cartline_remove
        if (0 === strpos($pathinfo, '/de/warenkorb/artikel') && preg_match('#^/de/warenkorb/artikel/(?P<id>[^/]++)/löschen$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__store_cartline_remove;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__store_cartline_remove')), array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::removeCartLineAction',  '_locale' => 'de',));
        }
        not_de__RG__store_cartline_remove:

        // en__RG__store_cartline_remove
        if (0 === strpos($pathinfo, '/cart/line') && preg_match('#^/cart/line/(?P<id>[^/]++)/remove$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__store_cartline_remove;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__store_cartline_remove')), array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::removeCartLineAction',  '_locale' => 'en',));
        }
        not_en__RG__store_cartline_remove:

        // es__RG__store_cartline_remove
        if (0 === strpos($pathinfo, '/es/mi-carrito/linea') && preg_match('#^/es/mi\\-carrito/linea/(?P<id>[^/]++)/eliminar$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__store_cartline_remove;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'es__RG__store_cartline_remove')), array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::removeCartLineAction',  '_locale' => 'es',));
        }
        not_es__RG__store_cartline_remove:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_cartline_remove
            if (0 === strpos($pathinfo, '/fi/cart/line') && preg_match('#^/fi/cart/line/(?P<id>[^/]++)/remove$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__store_cartline_remove;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fi__RG__store_cartline_remove')), array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::removeCartLineAction',  '_locale' => 'fi',));
            }
            not_fi__RG__store_cartline_remove:

            // fr__RG__store_cartline_remove
            if (0 === strpos($pathinfo, '/fr/panier/ligne') && preg_match('#^/fr/panier/ligne/(?P<id>[^/]++)/retirer$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__store_cartline_remove;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__store_cartline_remove')), array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::removeCartLineAction',  '_locale' => 'fr',));
            }
            not_fr__RG__store_cartline_remove:

        }

        // gl__RG__store_cartline_remove
        if (0 === strpos($pathinfo, '/gl/cart/line') && preg_match('#^/gl/cart/line/(?P<id>[^/]++)/remove$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__store_cartline_remove;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gl__RG__store_cartline_remove')), array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::removeCartLineAction',  '_locale' => 'gl',));
        }
        not_gl__RG__store_cartline_remove:

        // sr__RG__store_cartline_remove
        if (0 === strpos($pathinfo, '/sr/korpa/linija') && preg_match('#^/sr/korpa/linija/(?P<id>[^/]++)/obrisi$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__store_cartline_remove;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr__RG__store_cartline_remove')), array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::removeCartLineAction',  '_locale' => 'sr',));
        }
        not_sr__RG__store_cartline_remove:

        // ca__RG__store_cart_nav
        if ($pathinfo === '/ca/cistella/nav') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__store_cart_nav;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::navAction',  '_locale' => 'ca',  '_route' => 'ca__RG__store_cart_nav',);
        }
        not_ca__RG__store_cart_nav:

        // de__RG__store_cart_nav
        if ($pathinfo === '/de/warenkorb/nav') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__store_cart_nav;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::navAction',  '_locale' => 'de',  '_route' => 'de__RG__store_cart_nav',);
        }
        not_de__RG__store_cart_nav:

        // en__RG__store_cart_nav
        if ($pathinfo === '/cart/nav') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__store_cart_nav;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::navAction',  '_locale' => 'en',  '_route' => 'en__RG__store_cart_nav',);
        }
        not_en__RG__store_cart_nav:

        // es__RG__store_cart_nav
        if ($pathinfo === '/es/mi-carrito/nav') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__store_cart_nav;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::navAction',  '_locale' => 'es',  '_route' => 'es__RG__store_cart_nav',);
        }
        not_es__RG__store_cart_nav:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_cart_nav
            if ($pathinfo === '/fi/cart/nav') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__store_cart_nav;
                }

                return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::navAction',  '_locale' => 'fi',  '_route' => 'fi__RG__store_cart_nav',);
            }
            not_fi__RG__store_cart_nav:

            // fr__RG__store_cart_nav
            if ($pathinfo === '/fr/panier/nav') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__store_cart_nav;
                }

                return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::navAction',  '_locale' => 'fr',  '_route' => 'fr__RG__store_cart_nav',);
            }
            not_fr__RG__store_cart_nav:

        }

        // gl__RG__store_cart_nav
        if ($pathinfo === '/gl/cesta/nav') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__store_cart_nav;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::navAction',  '_locale' => 'gl',  '_route' => 'gl__RG__store_cart_nav',);
        }
        not_gl__RG__store_cart_nav:

        // sr__RG__store_cart_nav
        if ($pathinfo === '/sr/korpa/nav') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__store_cart_nav;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::navAction',  '_locale' => 'sr',  '_route' => 'sr__RG__store_cart_nav',);
        }
        not_sr__RG__store_cart_nav:

        // ca__RG__store_cart_related
        if ($pathinfo === '/ca/cart/related') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__store_cart_related;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::relatedAction',  '_locale' => 'ca',  '_route' => 'ca__RG__store_cart_related',);
        }
        not_ca__RG__store_cart_related:

        // de__RG__store_cart_related
        if ($pathinfo === '/de/cart/related') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__store_cart_related;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::relatedAction',  '_locale' => 'de',  '_route' => 'de__RG__store_cart_related',);
        }
        not_de__RG__store_cart_related:

        // en__RG__store_cart_related
        if ($pathinfo === '/cart/related') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__store_cart_related;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::relatedAction',  '_locale' => 'en',  '_route' => 'en__RG__store_cart_related',);
        }
        not_en__RG__store_cart_related:

        // es__RG__store_cart_related
        if ($pathinfo === '/es/cart/related') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__store_cart_related;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::relatedAction',  '_locale' => 'es',  '_route' => 'es__RG__store_cart_related',);
        }
        not_es__RG__store_cart_related:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_cart_related
            if ($pathinfo === '/fi/cart/related') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__store_cart_related;
                }

                return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::relatedAction',  '_locale' => 'fi',  '_route' => 'fi__RG__store_cart_related',);
            }
            not_fi__RG__store_cart_related:

            // fr__RG__store_cart_related
            if ($pathinfo === '/fr/cart/related') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__store_cart_related;
                }

                return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::relatedAction',  '_locale' => 'fr',  '_route' => 'fr__RG__store_cart_related',);
            }
            not_fr__RG__store_cart_related:

        }

        // gl__RG__store_cart_related
        if ($pathinfo === '/gl/cart/related') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__store_cart_related;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::relatedAction',  '_locale' => 'gl',  '_route' => 'gl__RG__store_cart_related',);
        }
        not_gl__RG__store_cart_related:

        // sr__RG__store_cart_related
        if ($pathinfo === '/sr/cart/related') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__store_cart_related;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CartController::relatedAction',  '_locale' => 'sr',  '_route' => 'sr__RG__store_cart_related',);
        }
        not_sr__RG__store_cart_related:

        // ca__RG__store_checkout_address
        if ($pathinfo === '/ca/cistella/adreça') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_ca__RG__store_checkout_address;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::addressAction',  '_locale' => 'ca',  '_route' => 'ca__RG__store_checkout_address',);
        }
        not_ca__RG__store_checkout_address:

        // de__RG__store_checkout_address
        if ($pathinfo === '/de/warenkorb/adresse') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_de__RG__store_checkout_address;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::addressAction',  '_locale' => 'de',  '_route' => 'de__RG__store_checkout_address',);
        }
        not_de__RG__store_checkout_address:

        // en__RG__store_checkout_address
        if ($pathinfo === '/cart/address') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__store_checkout_address;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::addressAction',  '_locale' => 'en',  '_route' => 'en__RG__store_checkout_address',);
        }
        not_en__RG__store_checkout_address:

        // es__RG__store_checkout_address
        if ($pathinfo === '/es/mi-carrito/direccion') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_es__RG__store_checkout_address;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::addressAction',  '_locale' => 'es',  '_route' => 'es__RG__store_checkout_address',);
        }
        not_es__RG__store_checkout_address:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_checkout_address
            if ($pathinfo === '/fi/cart/address') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fi__RG__store_checkout_address;
                }

                return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::addressAction',  '_locale' => 'fi',  '_route' => 'fi__RG__store_checkout_address',);
            }
            not_fi__RG__store_checkout_address:

            // fr__RG__store_checkout_address
            if ($pathinfo === '/fr/panier/adresse') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fr__RG__store_checkout_address;
                }

                return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::addressAction',  '_locale' => 'fr',  '_route' => 'fr__RG__store_checkout_address',);
            }
            not_fr__RG__store_checkout_address:

        }

        // gl__RG__store_checkout_address
        if ($pathinfo === '/gl/cesta/enderezo') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_gl__RG__store_checkout_address;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::addressAction',  '_locale' => 'gl',  '_route' => 'gl__RG__store_checkout_address',);
        }
        not_gl__RG__store_checkout_address:

        // sr__RG__store_checkout_address
        if ($pathinfo === '/sr/korpa/adresa') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_sr__RG__store_checkout_address;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::addressAction',  '_locale' => 'sr',  '_route' => 'sr__RG__store_checkout_address',);
        }
        not_sr__RG__store_checkout_address:

        // ca__RG__store_checkout_address_save
        if ($pathinfo === '/ca/cistella/adreça/guardar') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ca__RG__store_checkout_address_save;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::saveAddressAction',  '_locale' => 'ca',  '_route' => 'ca__RG__store_checkout_address_save',);
        }
        not_ca__RG__store_checkout_address_save:

        // de__RG__store_checkout_address_save
        if ($pathinfo === '/de/warenkorb/adresse/save') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_de__RG__store_checkout_address_save;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::saveAddressAction',  '_locale' => 'de',  '_route' => 'de__RG__store_checkout_address_save',);
        }
        not_de__RG__store_checkout_address_save:

        // en__RG__store_checkout_address_save
        if ($pathinfo === '/cart/address/save') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__store_checkout_address_save;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::saveAddressAction',  '_locale' => 'en',  '_route' => 'en__RG__store_checkout_address_save',);
        }
        not_en__RG__store_checkout_address_save:

        // es__RG__store_checkout_address_save
        if ($pathinfo === '/es/mi-carrito/direccion/guardar') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_es__RG__store_checkout_address_save;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::saveAddressAction',  '_locale' => 'es',  '_route' => 'es__RG__store_checkout_address_save',);
        }
        not_es__RG__store_checkout_address_save:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_checkout_address_save
            if ($pathinfo === '/fi/cart/address/save') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fi__RG__store_checkout_address_save;
                }

                return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::saveAddressAction',  '_locale' => 'fi',  '_route' => 'fi__RG__store_checkout_address_save',);
            }
            not_fi__RG__store_checkout_address_save:

            // fr__RG__store_checkout_address_save
            if ($pathinfo === '/fr/panier/adresse/enregistrer') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fr__RG__store_checkout_address_save;
                }

                return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::saveAddressAction',  '_locale' => 'fr',  '_route' => 'fr__RG__store_checkout_address_save',);
            }
            not_fr__RG__store_checkout_address_save:

        }

        // gl__RG__store_checkout_address_save
        if ($pathinfo === '/gl/cesta/enderezo/gardar') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_gl__RG__store_checkout_address_save;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::saveAddressAction',  '_locale' => 'gl',  '_route' => 'gl__RG__store_checkout_address_save',);
        }
        not_gl__RG__store_checkout_address_save:

        // sr__RG__store_checkout_address_save
        if ($pathinfo === '/sr/korpa/adresa/sacuvaj') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_sr__RG__store_checkout_address_save;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::saveAddressAction',  '_locale' => 'sr',  '_route' => 'sr__RG__store_checkout_address_save',);
        }
        not_sr__RG__store_checkout_address_save:

        // ca__RG__store_checkout_payment
        if ($pathinfo === '/ca/cistella/pagament') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__store_checkout_payment;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::paymentAction',  '_locale' => 'ca',  '_route' => 'ca__RG__store_checkout_payment',);
        }
        not_ca__RG__store_checkout_payment:

        // de__RG__store_checkout_payment
        if ($pathinfo === '/de/warenkorb/bezahlung') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__store_checkout_payment;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::paymentAction',  '_locale' => 'de',  '_route' => 'de__RG__store_checkout_payment',);
        }
        not_de__RG__store_checkout_payment:

        // en__RG__store_checkout_payment
        if ($pathinfo === '/cart/payment') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__store_checkout_payment;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::paymentAction',  '_locale' => 'en',  '_route' => 'en__RG__store_checkout_payment',);
        }
        not_en__RG__store_checkout_payment:

        // es__RG__store_checkout_payment
        if ($pathinfo === '/es/mi-carrito/pago') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__store_checkout_payment;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::paymentAction',  '_locale' => 'es',  '_route' => 'es__RG__store_checkout_payment',);
        }
        not_es__RG__store_checkout_payment:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_checkout_payment
            if ($pathinfo === '/fi/cart/payment') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__store_checkout_payment;
                }

                return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::paymentAction',  '_locale' => 'fi',  '_route' => 'fi__RG__store_checkout_payment',);
            }
            not_fi__RG__store_checkout_payment:

            // fr__RG__store_checkout_payment
            if ($pathinfo === '/fr/panier/paiement') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__store_checkout_payment;
                }

                return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::paymentAction',  '_locale' => 'fr',  '_route' => 'fr__RG__store_checkout_payment',);
            }
            not_fr__RG__store_checkout_payment:

        }

        // gl__RG__store_checkout_payment
        if ($pathinfo === '/gl/cesta/pago') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__store_checkout_payment;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::paymentAction',  '_locale' => 'gl',  '_route' => 'gl__RG__store_checkout_payment',);
        }
        not_gl__RG__store_checkout_payment:

        // sr__RG__store_checkout_payment
        if ($pathinfo === '/sr/korpa/placanje') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__store_checkout_payment;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::paymentAction',  '_locale' => 'sr',  '_route' => 'sr__RG__store_checkout_payment',);
        }
        not_sr__RG__store_checkout_payment:

        // ca__RG__store_checkout_shipping_method_apply
        if (0 === strpos($pathinfo, '/ca/checkout/shipping/method/change') && preg_match('#^/ca/checkout/shipping/method/change/(?P<shippingMethod>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__store_checkout_shipping_method_apply;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ca__RG__store_checkout_shipping_method_apply')), array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::applyShippingMethodAction',  '_locale' => 'ca',));
        }
        not_ca__RG__store_checkout_shipping_method_apply:

        // de__RG__store_checkout_shipping_method_apply
        if (0 === strpos($pathinfo, '/de/checkout/shipping/method/change') && preg_match('#^/de/checkout/shipping/method/change/(?P<shippingMethod>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__store_checkout_shipping_method_apply;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__store_checkout_shipping_method_apply')), array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::applyShippingMethodAction',  '_locale' => 'de',));
        }
        not_de__RG__store_checkout_shipping_method_apply:

        // en__RG__store_checkout_shipping_method_apply
        if (0 === strpos($pathinfo, '/checkout/shipping/method/change') && preg_match('#^/checkout/shipping/method/change/(?P<shippingMethod>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__store_checkout_shipping_method_apply;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__store_checkout_shipping_method_apply')), array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::applyShippingMethodAction',  '_locale' => 'en',));
        }
        not_en__RG__store_checkout_shipping_method_apply:

        // es__RG__store_checkout_shipping_method_apply
        if (0 === strpos($pathinfo, '/es/checkout/shipping/method/change') && preg_match('#^/es/checkout/shipping/method/change/(?P<shippingMethod>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__store_checkout_shipping_method_apply;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'es__RG__store_checkout_shipping_method_apply')), array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::applyShippingMethodAction',  '_locale' => 'es',));
        }
        not_es__RG__store_checkout_shipping_method_apply:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_checkout_shipping_method_apply
            if (0 === strpos($pathinfo, '/fi/checkout/shipping/method/change') && preg_match('#^/fi/checkout/shipping/method/change/(?P<shippingMethod>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__store_checkout_shipping_method_apply;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fi__RG__store_checkout_shipping_method_apply')), array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::applyShippingMethodAction',  '_locale' => 'fi',));
            }
            not_fi__RG__store_checkout_shipping_method_apply:

            // fr__RG__store_checkout_shipping_method_apply
            if (0 === strpos($pathinfo, '/fr/checkout/shipping/method/change') && preg_match('#^/fr/checkout/shipping/method/change/(?P<shippingMethod>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__store_checkout_shipping_method_apply;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__store_checkout_shipping_method_apply')), array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::applyShippingMethodAction',  '_locale' => 'fr',));
            }
            not_fr__RG__store_checkout_shipping_method_apply:

        }

        // gl__RG__store_checkout_shipping_method_apply
        if (0 === strpos($pathinfo, '/gl/checkout/shipping/method/change') && preg_match('#^/gl/checkout/shipping/method/change/(?P<shippingMethod>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__store_checkout_shipping_method_apply;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gl__RG__store_checkout_shipping_method_apply')), array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::applyShippingMethodAction',  '_locale' => 'gl',));
        }
        not_gl__RG__store_checkout_shipping_method_apply:

        // sr__RG__store_checkout_shipping_method_apply
        if (0 === strpos($pathinfo, '/sr/checkout/shipping/method/change') && preg_match('#^/sr/checkout/shipping/method/change/(?P<shippingMethod>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__store_checkout_shipping_method_apply;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr__RG__store_checkout_shipping_method_apply')), array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::applyShippingMethodAction',  '_locale' => 'sr',));
        }
        not_sr__RG__store_checkout_shipping_method_apply:

        // ca__RG__store_checkout_payment_fail
        if (0 === strpos($pathinfo, '/ca/cistella/pagament/error') && preg_match('#^/ca/cistella/pagament/error/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__store_checkout_payment_fail;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ca__RG__store_checkout_payment_fail')), array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::paymentFailAction',  '_locale' => 'ca',));
        }
        not_ca__RG__store_checkout_payment_fail:

        // de__RG__store_checkout_payment_fail
        if (0 === strpos($pathinfo, '/de/warenkorb/bezahlung/fehler') && preg_match('#^/de/warenkorb/bezahlung/fehler/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__store_checkout_payment_fail;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__store_checkout_payment_fail')), array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::paymentFailAction',  '_locale' => 'de',));
        }
        not_de__RG__store_checkout_payment_fail:

        // en__RG__store_checkout_payment_fail
        if (0 === strpos($pathinfo, '/cart/payment/error') && preg_match('#^/cart/payment/error/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__store_checkout_payment_fail;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__store_checkout_payment_fail')), array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::paymentFailAction',  '_locale' => 'en',));
        }
        not_en__RG__store_checkout_payment_fail:

        // es__RG__store_checkout_payment_fail
        if (0 === strpos($pathinfo, '/es/mi-carrito/pago/error') && preg_match('#^/es/mi\\-carrito/pago/error/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__store_checkout_payment_fail;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'es__RG__store_checkout_payment_fail')), array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::paymentFailAction',  '_locale' => 'es',));
        }
        not_es__RG__store_checkout_payment_fail:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_checkout_payment_fail
            if (0 === strpos($pathinfo, '/fi/cart/payment/error') && preg_match('#^/fi/cart/payment/error/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__store_checkout_payment_fail;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fi__RG__store_checkout_payment_fail')), array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::paymentFailAction',  '_locale' => 'fi',));
            }
            not_fi__RG__store_checkout_payment_fail:

            // fr__RG__store_checkout_payment_fail
            if (0 === strpos($pathinfo, '/fr/panier/paiement/erreur') && preg_match('#^/fr/panier/paiement/erreur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__store_checkout_payment_fail;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__store_checkout_payment_fail')), array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::paymentFailAction',  '_locale' => 'fr',));
            }
            not_fr__RG__store_checkout_payment_fail:

        }

        // gl__RG__store_checkout_payment_fail
        if (0 === strpos($pathinfo, '/gl/cesta/pago/error') && preg_match('#^/gl/cesta/pago/error/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__store_checkout_payment_fail;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gl__RG__store_checkout_payment_fail')), array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::paymentFailAction',  '_locale' => 'gl',));
        }
        not_gl__RG__store_checkout_payment_fail:

        // sr__RG__store_checkout_payment_fail
        if (0 === strpos($pathinfo, '/sr/korpa/placanje/greska') && preg_match('#^/sr/korpa/placanje/greska/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__store_checkout_payment_fail;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr__RG__store_checkout_payment_fail')), array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\CheckoutController::paymentFailAction',  '_locale' => 'sr',));
        }
        not_sr__RG__store_checkout_payment_fail:

        // ca__RG__store_order_view
        if (0 === strpos($pathinfo, '/ca/comanda') && preg_match('#^/ca/comanda/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__store_order_view;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ca__RG__store_order_view')), array (  'thanks' => false,  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\OrderController::viewAction',  '_locale' => 'ca',));
        }
        not_ca__RG__store_order_view:

        // de__RG__store_order_view
        if (0 === strpos($pathinfo, '/de/bestellung') && preg_match('#^/de/bestellung/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__store_order_view;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__store_order_view')), array (  'thanks' => false,  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\OrderController::viewAction',  '_locale' => 'de',));
        }
        not_de__RG__store_order_view:

        // en__RG__store_order_view
        if (0 === strpos($pathinfo, '/order') && preg_match('#^/order/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__store_order_view;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__store_order_view')), array (  'thanks' => false,  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\OrderController::viewAction',  '_locale' => 'en',));
        }
        not_en__RG__store_order_view:

        // es__RG__store_order_view
        if (0 === strpos($pathinfo, '/es/pedido') && preg_match('#^/es/pedido/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__store_order_view;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'es__RG__store_order_view')), array (  'thanks' => false,  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\OrderController::viewAction',  '_locale' => 'es',));
        }
        not_es__RG__store_order_view:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_order_view
            if (0 === strpos($pathinfo, '/fi/order') && preg_match('#^/fi/order/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__store_order_view;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fi__RG__store_order_view')), array (  'thanks' => false,  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\OrderController::viewAction',  '_locale' => 'fi',));
            }
            not_fi__RG__store_order_view:

            // fr__RG__store_order_view
            if (0 === strpos($pathinfo, '/fr/commande') && preg_match('#^/fr/commande/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__store_order_view;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__store_order_view')), array (  'thanks' => false,  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\OrderController::viewAction',  '_locale' => 'fr',));
            }
            not_fr__RG__store_order_view:

        }

        // gl__RG__store_order_view
        if (0 === strpos($pathinfo, '/gl/pedido') && preg_match('#^/gl/pedido/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__store_order_view;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gl__RG__store_order_view')), array (  'thanks' => false,  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\OrderController::viewAction',  '_locale' => 'gl',));
        }
        not_gl__RG__store_order_view:

        // sr__RG__store_order_view
        if (0 === strpos($pathinfo, '/sr/narudzbina') && preg_match('#^/sr/narudzbina/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__store_order_view;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr__RG__store_order_view')), array (  'thanks' => false,  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\OrderController::viewAction',  '_locale' => 'sr',));
        }
        not_sr__RG__store_order_view:

        // ca__RG__store_order_thanks
        if (0 === strpos($pathinfo, '/ca/order') && preg_match('#^/ca/order/(?P<id>[^/]++)/thanks$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__store_order_thanks;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ca__RG__store_order_thanks')), array (  'thanks' => true,  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\OrderController::viewAction',  '_locale' => 'ca',));
        }
        not_ca__RG__store_order_thanks:

        // de__RG__store_order_thanks
        if (0 === strpos($pathinfo, '/de/order') && preg_match('#^/de/order/(?P<id>[^/]++)/thanks$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__store_order_thanks;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__store_order_thanks')), array (  'thanks' => true,  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\OrderController::viewAction',  '_locale' => 'de',));
        }
        not_de__RG__store_order_thanks:

        // en__RG__store_order_thanks
        if (0 === strpos($pathinfo, '/order') && preg_match('#^/order/(?P<id>[^/]++)/thanks$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__store_order_thanks;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__store_order_thanks')), array (  'thanks' => true,  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\OrderController::viewAction',  '_locale' => 'en',));
        }
        not_en__RG__store_order_thanks:

        // es__RG__store_order_thanks
        if (0 === strpos($pathinfo, '/es/order') && preg_match('#^/es/order/(?P<id>[^/]++)/thanks$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__store_order_thanks;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'es__RG__store_order_thanks')), array (  'thanks' => true,  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\OrderController::viewAction',  '_locale' => 'es',));
        }
        not_es__RG__store_order_thanks:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_order_thanks
            if (0 === strpos($pathinfo, '/fi/order') && preg_match('#^/fi/order/(?P<id>[^/]++)/thanks$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__store_order_thanks;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fi__RG__store_order_thanks')), array (  'thanks' => true,  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\OrderController::viewAction',  '_locale' => 'fi',));
            }
            not_fi__RG__store_order_thanks:

            // fr__RG__store_order_thanks
            if (0 === strpos($pathinfo, '/fr/order') && preg_match('#^/fr/order/(?P<id>[^/]++)/thanks$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__store_order_thanks;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__store_order_thanks')), array (  'thanks' => true,  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\OrderController::viewAction',  '_locale' => 'fr',));
            }
            not_fr__RG__store_order_thanks:

        }

        // gl__RG__store_order_thanks
        if (0 === strpos($pathinfo, '/gl/order') && preg_match('#^/gl/order/(?P<id>[^/]++)/thanks$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__store_order_thanks;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gl__RG__store_order_thanks')), array (  'thanks' => true,  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\OrderController::viewAction',  '_locale' => 'gl',));
        }
        not_gl__RG__store_order_thanks:

        // sr__RG__store_order_thanks
        if (0 === strpos($pathinfo, '/sr/order') && preg_match('#^/sr/order/(?P<id>[^/]++)/thanks$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__store_order_thanks;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr__RG__store_order_thanks')), array (  'thanks' => true,  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\OrderController::viewAction',  '_locale' => 'sr',));
        }
        not_sr__RG__store_order_thanks:

        // ca__RG__store_order_list
        if ($pathinfo === '/ca/les-meves-comandes') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__store_order_list;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\OrderController::listAction',  '_locale' => 'ca',  '_route' => 'ca__RG__store_order_list',);
        }
        not_ca__RG__store_order_list:

        // de__RG__store_order_list
        if ($pathinfo === '/de/meine-bestellungen') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__store_order_list;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\OrderController::listAction',  '_locale' => 'de',  '_route' => 'de__RG__store_order_list',);
        }
        not_de__RG__store_order_list:

        // en__RG__store_order_list
        if ($pathinfo === '/my-orders') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__store_order_list;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\OrderController::listAction',  '_locale' => 'en',  '_route' => 'en__RG__store_order_list',);
        }
        not_en__RG__store_order_list:

        // es__RG__store_order_list
        if ($pathinfo === '/es/mis-pedidos') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__store_order_list;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\OrderController::listAction',  '_locale' => 'es',  '_route' => 'es__RG__store_order_list',);
        }
        not_es__RG__store_order_list:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_order_list
            if ($pathinfo === '/fi/my-orders') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__store_order_list;
                }

                return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\OrderController::listAction',  '_locale' => 'fi',  '_route' => 'fi__RG__store_order_list',);
            }
            not_fi__RG__store_order_list:

            // fr__RG__store_order_list
            if ($pathinfo === '/fr/mes-commandes') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__store_order_list;
                }

                return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\OrderController::listAction',  '_locale' => 'fr',  '_route' => 'fr__RG__store_order_list',);
            }
            not_fr__RG__store_order_list:

        }

        // gl__RG__store_order_list
        if ($pathinfo === '/gl/os-meus-pedidos') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__store_order_list;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\OrderController::listAction',  '_locale' => 'gl',  '_route' => 'gl__RG__store_order_list',);
        }
        not_gl__RG__store_order_list:

        // sr__RG__store_order_list
        if ($pathinfo === '/sr/moje-narudzbine') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__store_order_list;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartBundle\\Controller\\OrderController::listAction',  '_locale' => 'sr',  '_route' => 'sr__RG__store_order_list',);
        }
        not_sr__RG__store_order_list:

        // ca__RG__store_coupon_view
        if ($pathinfo === '/ca/coupon/view') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__store_coupon_view;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartCouponBundle\\Controller\\CouponController::viewAction',  '_locale' => 'ca',  '_route' => 'ca__RG__store_coupon_view',);
        }
        not_ca__RG__store_coupon_view:

        // de__RG__store_coupon_view
        if ($pathinfo === '/de/coupon/view') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__store_coupon_view;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartCouponBundle\\Controller\\CouponController::viewAction',  '_locale' => 'de',  '_route' => 'de__RG__store_coupon_view',);
        }
        not_de__RG__store_coupon_view:

        // en__RG__store_coupon_view
        if ($pathinfo === '/coupon/view') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__store_coupon_view;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartCouponBundle\\Controller\\CouponController::viewAction',  '_locale' => 'en',  '_route' => 'en__RG__store_coupon_view',);
        }
        not_en__RG__store_coupon_view:

        // es__RG__store_coupon_view
        if ($pathinfo === '/es/coupon/view') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__store_coupon_view;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartCouponBundle\\Controller\\CouponController::viewAction',  '_locale' => 'es',  '_route' => 'es__RG__store_coupon_view',);
        }
        not_es__RG__store_coupon_view:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_coupon_view
            if ($pathinfo === '/fi/coupon/view') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__store_coupon_view;
                }

                return array (  '_controller' => 'Elcodi\\Store\\CartCouponBundle\\Controller\\CouponController::viewAction',  '_locale' => 'fi',  '_route' => 'fi__RG__store_coupon_view',);
            }
            not_fi__RG__store_coupon_view:

            // fr__RG__store_coupon_view
            if ($pathinfo === '/fr/coupon/view') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__store_coupon_view;
                }

                return array (  '_controller' => 'Elcodi\\Store\\CartCouponBundle\\Controller\\CouponController::viewAction',  '_locale' => 'fr',  '_route' => 'fr__RG__store_coupon_view',);
            }
            not_fr__RG__store_coupon_view:

        }

        // gl__RG__store_coupon_view
        if ($pathinfo === '/gl/coupon/view') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__store_coupon_view;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartCouponBundle\\Controller\\CouponController::viewAction',  '_locale' => 'gl',  '_route' => 'gl__RG__store_coupon_view',);
        }
        not_gl__RG__store_coupon_view:

        // sr__RG__store_coupon_view
        if ($pathinfo === '/sr/coupon/view') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__store_coupon_view;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartCouponBundle\\Controller\\CouponController::viewAction',  '_locale' => 'sr',  '_route' => 'sr__RG__store_coupon_view',);
        }
        not_sr__RG__store_coupon_view:

        // ca__RG__store_coupon_apply
        if ($pathinfo === '/ca/cistella/cupo/aplicar') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ca__RG__store_coupon_apply;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartCouponBundle\\Controller\\CouponController::applyAction',  '_locale' => 'ca',  '_route' => 'ca__RG__store_coupon_apply',);
        }
        not_ca__RG__store_coupon_apply:

        // de__RG__store_coupon_apply
        if ($pathinfo === '/de/warenkorb/gutschein/einloesen') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_de__RG__store_coupon_apply;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartCouponBundle\\Controller\\CouponController::applyAction',  '_locale' => 'de',  '_route' => 'de__RG__store_coupon_apply',);
        }
        not_de__RG__store_coupon_apply:

        // en__RG__store_coupon_apply
        if ($pathinfo === '/cart/coupon/apply') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__store_coupon_apply;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartCouponBundle\\Controller\\CouponController::applyAction',  '_locale' => 'en',  '_route' => 'en__RG__store_coupon_apply',);
        }
        not_en__RG__store_coupon_apply:

        // es__RG__store_coupon_apply
        if ($pathinfo === '/es/mi-carrito/cupon/aplicar') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_es__RG__store_coupon_apply;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartCouponBundle\\Controller\\CouponController::applyAction',  '_locale' => 'es',  '_route' => 'es__RG__store_coupon_apply',);
        }
        not_es__RG__store_coupon_apply:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_coupon_apply
            if ($pathinfo === '/fi/cart/coupon/apply') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fi__RG__store_coupon_apply;
                }

                return array (  '_controller' => 'Elcodi\\Store\\CartCouponBundle\\Controller\\CouponController::applyAction',  '_locale' => 'fi',  '_route' => 'fi__RG__store_coupon_apply',);
            }
            not_fi__RG__store_coupon_apply:

            // fr__RG__store_coupon_apply
            if ($pathinfo === '/fr/panier/reduction/appliquer') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fr__RG__store_coupon_apply;
                }

                return array (  '_controller' => 'Elcodi\\Store\\CartCouponBundle\\Controller\\CouponController::applyAction',  '_locale' => 'fr',  '_route' => 'fr__RG__store_coupon_apply',);
            }
            not_fr__RG__store_coupon_apply:

        }

        // gl__RG__store_coupon_apply
        if ($pathinfo === '/gl/cesta/cupon/aplicar') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_gl__RG__store_coupon_apply;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartCouponBundle\\Controller\\CouponController::applyAction',  '_locale' => 'gl',  '_route' => 'gl__RG__store_coupon_apply',);
        }
        not_gl__RG__store_coupon_apply:

        // sr__RG__store_coupon_apply
        if ($pathinfo === '/sr/korpa/kupon/primeni') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_sr__RG__store_coupon_apply;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CartCouponBundle\\Controller\\CouponController::applyAction',  '_locale' => 'sr',  '_route' => 'sr__RG__store_coupon_apply',);
        }
        not_sr__RG__store_coupon_apply:

        // ca__RG__store_coupon_remove
        if (0 === strpos($pathinfo, '/ca/cistella/cupo/eliminar') && preg_match('#^/ca/cistella/cupo/eliminar/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__store_coupon_remove;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ca__RG__store_coupon_remove')), array (  '_controller' => 'Elcodi\\Store\\CartCouponBundle\\Controller\\CouponController::removeAction',  '_locale' => 'ca',));
        }
        not_ca__RG__store_coupon_remove:

        // de__RG__store_coupon_remove
        if (0 === strpos($pathinfo, '/de/warenkorb/gutschein/entfernen') && preg_match('#^/de/warenkorb/gutschein/entfernen/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__store_coupon_remove;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__store_coupon_remove')), array (  '_controller' => 'Elcodi\\Store\\CartCouponBundle\\Controller\\CouponController::removeAction',  '_locale' => 'de',));
        }
        not_de__RG__store_coupon_remove:

        // en__RG__store_coupon_remove
        if (0 === strpos($pathinfo, '/cart/coupon/remove') && preg_match('#^/cart/coupon/remove/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__store_coupon_remove;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__store_coupon_remove')), array (  '_controller' => 'Elcodi\\Store\\CartCouponBundle\\Controller\\CouponController::removeAction',  '_locale' => 'en',));
        }
        not_en__RG__store_coupon_remove:

        // es__RG__store_coupon_remove
        if (0 === strpos($pathinfo, '/es/mi-carrito/cupon/eliminar') && preg_match('#^/es/mi\\-carrito/cupon/eliminar/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__store_coupon_remove;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'es__RG__store_coupon_remove')), array (  '_controller' => 'Elcodi\\Store\\CartCouponBundle\\Controller\\CouponController::removeAction',  '_locale' => 'es',));
        }
        not_es__RG__store_coupon_remove:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_coupon_remove
            if (0 === strpos($pathinfo, '/fi/cart/coupon/remove') && preg_match('#^/fi/cart/coupon/remove/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__store_coupon_remove;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fi__RG__store_coupon_remove')), array (  '_controller' => 'Elcodi\\Store\\CartCouponBundle\\Controller\\CouponController::removeAction',  '_locale' => 'fi',));
            }
            not_fi__RG__store_coupon_remove:

            // fr__RG__store_coupon_remove
            if (0 === strpos($pathinfo, '/fr/panier/reduction/retirer') && preg_match('#^/fr/panier/reduction/retirer/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__store_coupon_remove;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__store_coupon_remove')), array (  '_controller' => 'Elcodi\\Store\\CartCouponBundle\\Controller\\CouponController::removeAction',  '_locale' => 'fr',));
            }
            not_fr__RG__store_coupon_remove:

        }

        // gl__RG__store_coupon_remove
        if (0 === strpos($pathinfo, '/gl/cesta/cupon/eliminar') && preg_match('#^/gl/cesta/cupon/eliminar/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__store_coupon_remove;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gl__RG__store_coupon_remove')), array (  '_controller' => 'Elcodi\\Store\\CartCouponBundle\\Controller\\CouponController::removeAction',  '_locale' => 'gl',));
        }
        not_gl__RG__store_coupon_remove:

        // sr__RG__store_coupon_remove
        if (0 === strpos($pathinfo, '/sr/korpa/kupon/obrisi') && preg_match('#^/sr/korpa/kupon/obrisi/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__store_coupon_remove;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr__RG__store_coupon_remove')), array (  '_controller' => 'Elcodi\\Store\\CartCouponBundle\\Controller\\CouponController::removeAction',  '_locale' => 'sr',));
        }
        not_sr__RG__store_coupon_remove:

        // ca__RG__store_currency_nav
        if ($pathinfo === '/ca/divises/nav') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__store_currency_nav;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CurrencyBundle\\Controller\\CurrencyController::navAction',  '_locale' => 'ca',  '_route' => 'ca__RG__store_currency_nav',);
        }
        not_ca__RG__store_currency_nav:

        // de__RG__store_currency_nav
        if ($pathinfo === '/de/waehrungen/nav') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__store_currency_nav;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CurrencyBundle\\Controller\\CurrencyController::navAction',  '_locale' => 'de',  '_route' => 'de__RG__store_currency_nav',);
        }
        not_de__RG__store_currency_nav:

        // en__RG__store_currency_nav
        if ($pathinfo === '/currencies/nav') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__store_currency_nav;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CurrencyBundle\\Controller\\CurrencyController::navAction',  '_locale' => 'en',  '_route' => 'en__RG__store_currency_nav',);
        }
        not_en__RG__store_currency_nav:

        // es__RG__store_currency_nav
        if ($pathinfo === '/es/divisas/nav') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__store_currency_nav;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CurrencyBundle\\Controller\\CurrencyController::navAction',  '_locale' => 'es',  '_route' => 'es__RG__store_currency_nav',);
        }
        not_es__RG__store_currency_nav:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_currency_nav
            if ($pathinfo === '/fi/currencies/nav') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__store_currency_nav;
                }

                return array (  '_controller' => 'Elcodi\\Store\\CurrencyBundle\\Controller\\CurrencyController::navAction',  '_locale' => 'fi',  '_route' => 'fi__RG__store_currency_nav',);
            }
            not_fi__RG__store_currency_nav:

            // fr__RG__store_currency_nav
            if ($pathinfo === '/fr/devises/nav') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__store_currency_nav;
                }

                return array (  '_controller' => 'Elcodi\\Store\\CurrencyBundle\\Controller\\CurrencyController::navAction',  '_locale' => 'fr',  '_route' => 'fr__RG__store_currency_nav',);
            }
            not_fr__RG__store_currency_nav:

        }

        // gl__RG__store_currency_nav
        if ($pathinfo === '/gl/moedas/nav') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__store_currency_nav;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CurrencyBundle\\Controller\\CurrencyController::navAction',  '_locale' => 'gl',  '_route' => 'gl__RG__store_currency_nav',);
        }
        not_gl__RG__store_currency_nav:

        // sr__RG__store_currency_nav
        if ($pathinfo === '/sr/valute/nav') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__store_currency_nav;
            }

            return array (  '_controller' => 'Elcodi\\Store\\CurrencyBundle\\Controller\\CurrencyController::navAction',  '_locale' => 'sr',  '_route' => 'sr__RG__store_currency_nav',);
        }
        not_sr__RG__store_currency_nav:

        // ca__RG__store_currency_switch
        if (0 === strpos($pathinfo, '/ca/currency/switch') && preg_match('#^/ca/currency/switch/(?P<iso>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__store_currency_switch;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ca__RG__store_currency_switch')), array (  '_controller' => 'Elcodi\\Store\\CurrencyBundle\\Controller\\CurrencyController::switchAction',  '_locale' => 'ca',));
        }
        not_ca__RG__store_currency_switch:

        // de__RG__store_currency_switch
        if (0 === strpos($pathinfo, '/de/currency/switch') && preg_match('#^/de/currency/switch/(?P<iso>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__store_currency_switch;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__store_currency_switch')), array (  '_controller' => 'Elcodi\\Store\\CurrencyBundle\\Controller\\CurrencyController::switchAction',  '_locale' => 'de',));
        }
        not_de__RG__store_currency_switch:

        // en__RG__store_currency_switch
        if (0 === strpos($pathinfo, '/currency/switch') && preg_match('#^/currency/switch/(?P<iso>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__store_currency_switch;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__store_currency_switch')), array (  '_controller' => 'Elcodi\\Store\\CurrencyBundle\\Controller\\CurrencyController::switchAction',  '_locale' => 'en',));
        }
        not_en__RG__store_currency_switch:

        // es__RG__store_currency_switch
        if (0 === strpos($pathinfo, '/es/currency/switch') && preg_match('#^/es/currency/switch/(?P<iso>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__store_currency_switch;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'es__RG__store_currency_switch')), array (  '_controller' => 'Elcodi\\Store\\CurrencyBundle\\Controller\\CurrencyController::switchAction',  '_locale' => 'es',));
        }
        not_es__RG__store_currency_switch:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_currency_switch
            if (0 === strpos($pathinfo, '/fi/currency/switch') && preg_match('#^/fi/currency/switch/(?P<iso>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__store_currency_switch;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fi__RG__store_currency_switch')), array (  '_controller' => 'Elcodi\\Store\\CurrencyBundle\\Controller\\CurrencyController::switchAction',  '_locale' => 'fi',));
            }
            not_fi__RG__store_currency_switch:

            // fr__RG__store_currency_switch
            if (0 === strpos($pathinfo, '/fr/currency/switch') && preg_match('#^/fr/currency/switch/(?P<iso>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__store_currency_switch;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__store_currency_switch')), array (  '_controller' => 'Elcodi\\Store\\CurrencyBundle\\Controller\\CurrencyController::switchAction',  '_locale' => 'fr',));
            }
            not_fr__RG__store_currency_switch:

        }

        // gl__RG__store_currency_switch
        if (0 === strpos($pathinfo, '/gl/currency/switch') && preg_match('#^/gl/currency/switch/(?P<iso>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__store_currency_switch;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gl__RG__store_currency_switch')), array (  '_controller' => 'Elcodi\\Store\\CurrencyBundle\\Controller\\CurrencyController::switchAction',  '_locale' => 'gl',));
        }
        not_gl__RG__store_currency_switch:

        // sr__RG__store_currency_switch
        if (0 === strpos($pathinfo, '/sr/currency/switch') && preg_match('#^/sr/currency/switch/(?P<iso>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__store_currency_switch;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr__RG__store_currency_switch')), array (  '_controller' => 'Elcodi\\Store\\CurrencyBundle\\Controller\\CurrencyController::switchAction',  '_locale' => 'sr',));
        }
        not_sr__RG__store_currency_switch:

        // ca__RG__store_blog_view
        if (0 === strpos($pathinfo, '/ca/blog') && preg_match('#^/ca/blog(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__store_blog_view;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ca__RG__store_blog_view')), array (  'page' => 1,  '_controller' => 'Elcodi\\Store\\PageBundle\\Controller\\BlogController::listBlogPostsAction',  '_locale' => 'ca',));
        }
        not_ca__RG__store_blog_view:

        // de__RG__store_blog_view
        if (0 === strpos($pathinfo, '/de/blog') && preg_match('#^/de/blog(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__store_blog_view;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__store_blog_view')), array (  'page' => 1,  '_controller' => 'Elcodi\\Store\\PageBundle\\Controller\\BlogController::listBlogPostsAction',  '_locale' => 'de',));
        }
        not_de__RG__store_blog_view:

        // en__RG__store_blog_view
        if (0 === strpos($pathinfo, '/blog') && preg_match('#^/blog(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__store_blog_view;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__store_blog_view')), array (  'page' => 1,  '_controller' => 'Elcodi\\Store\\PageBundle\\Controller\\BlogController::listBlogPostsAction',  '_locale' => 'en',));
        }
        not_en__RG__store_blog_view:

        // es__RG__store_blog_view
        if (0 === strpos($pathinfo, '/es/blog') && preg_match('#^/es/blog(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__store_blog_view;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'es__RG__store_blog_view')), array (  'page' => 1,  '_controller' => 'Elcodi\\Store\\PageBundle\\Controller\\BlogController::listBlogPostsAction',  '_locale' => 'es',));
        }
        not_es__RG__store_blog_view:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_blog_view
            if (0 === strpos($pathinfo, '/fi/blog') && preg_match('#^/fi/blog(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__store_blog_view;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fi__RG__store_blog_view')), array (  'page' => 1,  '_controller' => 'Elcodi\\Store\\PageBundle\\Controller\\BlogController::listBlogPostsAction',  '_locale' => 'fi',));
            }
            not_fi__RG__store_blog_view:

            // fr__RG__store_blog_view
            if (0 === strpos($pathinfo, '/fr/blog') && preg_match('#^/fr/blog(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__store_blog_view;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__store_blog_view')), array (  'page' => 1,  '_controller' => 'Elcodi\\Store\\PageBundle\\Controller\\BlogController::listBlogPostsAction',  '_locale' => 'fr',));
            }
            not_fr__RG__store_blog_view:

        }

        // gl__RG__store_blog_view
        if (0 === strpos($pathinfo, '/gl/blog') && preg_match('#^/gl/blog(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__store_blog_view;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gl__RG__store_blog_view')), array (  'page' => 1,  '_controller' => 'Elcodi\\Store\\PageBundle\\Controller\\BlogController::listBlogPostsAction',  '_locale' => 'gl',));
        }
        not_gl__RG__store_blog_view:

        // sr__RG__store_blog_view
        if (0 === strpos($pathinfo, '/sr/blog') && preg_match('#^/sr/blog(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__store_blog_view;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr__RG__store_blog_view')), array (  'page' => 1,  '_controller' => 'Elcodi\\Store\\PageBundle\\Controller\\BlogController::listBlogPostsAction',  '_locale' => 'sr',));
        }
        not_sr__RG__store_blog_view:

        // ca__RG__store_blog_post_view
        if (0 === strpos($pathinfo, '/ca/blog') && preg_match('#^/ca/blog/(?P<id>[^/]++)/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__store_blog_post_view;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ca__RG__store_blog_post_view')), array (  '_controller' => 'Elcodi\\Store\\PageBundle\\Controller\\BlogController::viewBlogPostAction',  '_locale' => 'ca',));
        }
        not_ca__RG__store_blog_post_view:

        // de__RG__store_blog_post_view
        if (0 === strpos($pathinfo, '/de/blog') && preg_match('#^/de/blog/(?P<id>[^/]++)/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__store_blog_post_view;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__store_blog_post_view')), array (  '_controller' => 'Elcodi\\Store\\PageBundle\\Controller\\BlogController::viewBlogPostAction',  '_locale' => 'de',));
        }
        not_de__RG__store_blog_post_view:

        // en__RG__store_blog_post_view
        if (0 === strpos($pathinfo, '/blog') && preg_match('#^/blog/(?P<id>[^/]++)/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__store_blog_post_view;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__store_blog_post_view')), array (  '_controller' => 'Elcodi\\Store\\PageBundle\\Controller\\BlogController::viewBlogPostAction',  '_locale' => 'en',));
        }
        not_en__RG__store_blog_post_view:

        // es__RG__store_blog_post_view
        if (0 === strpos($pathinfo, '/es/blog') && preg_match('#^/es/blog/(?P<id>[^/]++)/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__store_blog_post_view;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'es__RG__store_blog_post_view')), array (  '_controller' => 'Elcodi\\Store\\PageBundle\\Controller\\BlogController::viewBlogPostAction',  '_locale' => 'es',));
        }
        not_es__RG__store_blog_post_view:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_blog_post_view
            if (0 === strpos($pathinfo, '/fi/blog') && preg_match('#^/fi/blog/(?P<id>[^/]++)/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__store_blog_post_view;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fi__RG__store_blog_post_view')), array (  '_controller' => 'Elcodi\\Store\\PageBundle\\Controller\\BlogController::viewBlogPostAction',  '_locale' => 'fi',));
            }
            not_fi__RG__store_blog_post_view:

            // fr__RG__store_blog_post_view
            if (0 === strpos($pathinfo, '/fr/blog') && preg_match('#^/fr/blog/(?P<id>[^/]++)/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__store_blog_post_view;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__store_blog_post_view')), array (  '_controller' => 'Elcodi\\Store\\PageBundle\\Controller\\BlogController::viewBlogPostAction',  '_locale' => 'fr',));
            }
            not_fr__RG__store_blog_post_view:

        }

        // gl__RG__store_blog_post_view
        if (0 === strpos($pathinfo, '/gl/blog') && preg_match('#^/gl/blog/(?P<id>[^/]++)/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__store_blog_post_view;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gl__RG__store_blog_post_view')), array (  '_controller' => 'Elcodi\\Store\\PageBundle\\Controller\\BlogController::viewBlogPostAction',  '_locale' => 'gl',));
        }
        not_gl__RG__store_blog_post_view:

        // sr__RG__store_blog_post_view
        if (0 === strpos($pathinfo, '/sr/blog') && preg_match('#^/sr/blog/(?P<id>[^/]++)/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__store_blog_post_view;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr__RG__store_blog_post_view')), array (  '_controller' => 'Elcodi\\Store\\PageBundle\\Controller\\BlogController::viewBlogPostAction',  '_locale' => 'sr',));
        }
        not_sr__RG__store_blog_post_view:

        // ca__RG__store_login_check
        if ($pathinfo === '/ca/login_check') {
            return array (  '_locale' => 'ca',  '_route' => 'ca__RG__store_login_check',);
        }

        // de__RG__store_login_check
        if ($pathinfo === '/de/login_check') {
            return array (  '_locale' => 'de',  '_route' => 'de__RG__store_login_check',);
        }

        // en__RG__store_login_check
        if ($pathinfo === '/login_check') {
            return array (  '_locale' => 'en',  '_route' => 'en__RG__store_login_check',);
        }

        // es__RG__store_login_check
        if ($pathinfo === '/es/login_check') {
            return array (  '_locale' => 'es',  '_route' => 'es__RG__store_login_check',);
        }

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_login_check
            if ($pathinfo === '/fi/login_check') {
                return array (  '_locale' => 'fi',  '_route' => 'fi__RG__store_login_check',);
            }

            // fr__RG__store_login_check
            if ($pathinfo === '/fr/login_check') {
                return array (  '_locale' => 'fr',  '_route' => 'fr__RG__store_login_check',);
            }

        }

        // gl__RG__store_login_check
        if ($pathinfo === '/gl/login_check') {
            return array (  '_locale' => 'gl',  '_route' => 'gl__RG__store_login_check',);
        }

        // sr__RG__store_login_check
        if ($pathinfo === '/sr/login_check') {
            return array (  '_locale' => 'sr',  '_route' => 'sr__RG__store_login_check',);
        }

        // ca__RG__store_logout
        if ($pathinfo === '/ca/logout') {
            return array (  '_locale' => 'ca',  '_route' => 'ca__RG__store_logout',);
        }

        // de__RG__store_logout
        if ($pathinfo === '/de/logout') {
            return array (  '_locale' => 'de',  '_route' => 'de__RG__store_logout',);
        }

        // en__RG__store_logout
        if ($pathinfo === '/logout') {
            return array (  '_locale' => 'en',  '_route' => 'en__RG__store_logout',);
        }

        // es__RG__store_logout
        if ($pathinfo === '/es/logout') {
            return array (  '_locale' => 'es',  '_route' => 'es__RG__store_logout',);
        }

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_logout
            if ($pathinfo === '/fi/logout') {
                return array (  '_locale' => 'fi',  '_route' => 'fi__RG__store_logout',);
            }

            // fr__RG__store_logout
            if ($pathinfo === '/fr/logout') {
                return array (  '_locale' => 'fr',  '_route' => 'fr__RG__store_logout',);
            }

        }

        // gl__RG__store_logout
        if ($pathinfo === '/gl/logout') {
            return array (  '_locale' => 'gl',  '_route' => 'gl__RG__store_logout',);
        }

        // sr__RG__store_logout
        if ($pathinfo === '/sr/logout') {
            return array (  '_locale' => 'sr',  '_route' => 'sr__RG__store_logout',);
        }

        // ca__RG__store_address_list
        if ($pathinfo === '/ca/les-meves-direccions') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__store_address_list;
            }

            return array (  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\AddressController::listAction',  '_locale' => 'ca',  '_route' => 'ca__RG__store_address_list',);
        }
        not_ca__RG__store_address_list:

        // de__RG__store_address_list
        if ($pathinfo === '/de/meine-adressen') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__store_address_list;
            }

            return array (  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\AddressController::listAction',  '_locale' => 'de',  '_route' => 'de__RG__store_address_list',);
        }
        not_de__RG__store_address_list:

        // en__RG__store_address_list
        if ($pathinfo === '/my-addresses') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__store_address_list;
            }

            return array (  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\AddressController::listAction',  '_locale' => 'en',  '_route' => 'en__RG__store_address_list',);
        }
        not_en__RG__store_address_list:

        // es__RG__store_address_list
        if ($pathinfo === '/es/mis-direcciones') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__store_address_list;
            }

            return array (  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\AddressController::listAction',  '_locale' => 'es',  '_route' => 'es__RG__store_address_list',);
        }
        not_es__RG__store_address_list:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_address_list
            if ($pathinfo === '/fi/my-addresses') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__store_address_list;
                }

                return array (  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\AddressController::listAction',  '_locale' => 'fi',  '_route' => 'fi__RG__store_address_list',);
            }
            not_fi__RG__store_address_list:

            // fr__RG__store_address_list
            if ($pathinfo === '/fr/mes-adresses') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__store_address_list;
                }

                return array (  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\AddressController::listAction',  '_locale' => 'fr',  '_route' => 'fr__RG__store_address_list',);
            }
            not_fr__RG__store_address_list:

        }

        // gl__RG__store_address_list
        if ($pathinfo === '/gl/os-meus-enderezos') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__store_address_list;
            }

            return array (  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\AddressController::listAction',  '_locale' => 'gl',  '_route' => 'gl__RG__store_address_list',);
        }
        not_gl__RG__store_address_list:

        // sr__RG__store_address_list
        if ($pathinfo === '/sr/moja-adresa') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__store_address_list;
            }

            return array (  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\AddressController::listAction',  '_locale' => 'sr',  '_route' => 'sr__RG__store_address_list',);
        }
        not_sr__RG__store_address_list:

        // ca__RG__store_address_edit
        if (0 === strpos($pathinfo, '/ca/les-meves-direccions') && preg_match('#^/ca/les\\-meves\\-direccions/(?P<id>[^/]++)/editar(?:/(?P<source>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_ca__RG__store_address_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ca__RG__store_address_edit')), array (  'source' => NULL,  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\AddressController::editAction',  '_locale' => 'ca',));
        }
        not_ca__RG__store_address_edit:

        // de__RG__store_address_edit
        if (0 === strpos($pathinfo, '/de/meine-adressen') && preg_match('#^/de/meine\\-adressen/(?P<id>[^/]++)/bearbeiten(?:/(?P<source>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_de__RG__store_address_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__store_address_edit')), array (  'source' => NULL,  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\AddressController::editAction',  '_locale' => 'de',));
        }
        not_de__RG__store_address_edit:

        // en__RG__store_address_edit
        if (0 === strpos($pathinfo, '/my-address') && preg_match('#^/my\\-address/(?P<id>[^/]++)/edit(?:/(?P<source>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__store_address_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__store_address_edit')), array (  'source' => NULL,  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\AddressController::editAction',  '_locale' => 'en',));
        }
        not_en__RG__store_address_edit:

        // es__RG__store_address_edit
        if (0 === strpos($pathinfo, '/es/mi-direccion') && preg_match('#^/es/mi\\-direccion/(?P<id>[^/]++)/editar(?:/(?P<source>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_es__RG__store_address_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'es__RG__store_address_edit')), array (  'source' => NULL,  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\AddressController::editAction',  '_locale' => 'es',));
        }
        not_es__RG__store_address_edit:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_address_edit
            if (0 === strpos($pathinfo, '/fi/my-address') && preg_match('#^/fi/my\\-address/(?P<id>[^/]++)/edit(?:/(?P<source>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fi__RG__store_address_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fi__RG__store_address_edit')), array (  'source' => NULL,  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\AddressController::editAction',  '_locale' => 'fi',));
            }
            not_fi__RG__store_address_edit:

            // fr__RG__store_address_edit
            if (0 === strpos($pathinfo, '/fr/mon-adresse') && preg_match('#^/fr/mon\\-adresse/(?P<id>[^/]++)/modif(?:/(?P<source>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fr__RG__store_address_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__store_address_edit')), array (  'source' => NULL,  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\AddressController::editAction',  '_locale' => 'fr',));
            }
            not_fr__RG__store_address_edit:

        }

        // gl__RG__store_address_edit
        if (0 === strpos($pathinfo, '/gl/o-meu-enderezo') && preg_match('#^/gl/o\\-meu\\-enderezo/(?P<id>[^/]++)/editar(?:/(?P<source>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_gl__RG__store_address_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gl__RG__store_address_edit')), array (  'source' => NULL,  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\AddressController::editAction',  '_locale' => 'gl',));
        }
        not_gl__RG__store_address_edit:

        // sr__RG__store_address_edit
        if (0 === strpos($pathinfo, '/sr/moja-adresa') && preg_match('#^/sr/moja\\-adresa/(?P<id>[^/]++)/edit(?:/(?P<source>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_sr__RG__store_address_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr__RG__store_address_edit')), array (  'source' => NULL,  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\AddressController::editAction',  '_locale' => 'sr',));
        }
        not_sr__RG__store_address_edit:

        // ca__RG__store_address_new
        if (0 === strpos($pathinfo, '/ca/les-meves-direccions/nova') && preg_match('#^/ca/les\\-meves\\-direccions/nova(?:/(?P<source>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_ca__RG__store_address_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ca__RG__store_address_new')), array (  'source' => NULL,  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\AddressController::newAction',  '_locale' => 'ca',));
        }
        not_ca__RG__store_address_new:

        // de__RG__store_address_new
        if (0 === strpos($pathinfo, '/de/meine-adressen/neu') && preg_match('#^/de/meine\\-adressen/neu(?:/(?P<source>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_de__RG__store_address_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__store_address_new')), array (  'source' => NULL,  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\AddressController::newAction',  '_locale' => 'de',));
        }
        not_de__RG__store_address_new:

        // en__RG__store_address_new
        if (0 === strpos($pathinfo, '/my-address/new') && preg_match('#^/my\\-address/new(?:/(?P<source>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__store_address_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__store_address_new')), array (  'source' => NULL,  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\AddressController::newAction',  '_locale' => 'en',));
        }
        not_en__RG__store_address_new:

        // es__RG__store_address_new
        if (0 === strpos($pathinfo, '/es/mi-direccion/nueva') && preg_match('#^/es/mi\\-direccion/nueva(?:/(?P<source>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_es__RG__store_address_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'es__RG__store_address_new')), array (  'source' => NULL,  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\AddressController::newAction',  '_locale' => 'es',));
        }
        not_es__RG__store_address_new:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_address_new
            if (0 === strpos($pathinfo, '/fi/my-address/new') && preg_match('#^/fi/my\\-address/new(?:/(?P<source>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fi__RG__store_address_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fi__RG__store_address_new')), array (  'source' => NULL,  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\AddressController::newAction',  '_locale' => 'fi',));
            }
            not_fi__RG__store_address_new:

            // fr__RG__store_address_new
            if (0 === strpos($pathinfo, '/fr/mes-adresses/neuf') && preg_match('#^/fr/mes\\-adresses/neuf(?:/(?P<source>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fr__RG__store_address_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__store_address_new')), array (  'source' => NULL,  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\AddressController::newAction',  '_locale' => 'fr',));
            }
            not_fr__RG__store_address_new:

        }

        // gl__RG__store_address_new
        if (0 === strpos($pathinfo, '/gl/o/meu/enderezo/novo') && preg_match('#^/gl/o/meu/enderezo/novo(?:/(?P<source>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_gl__RG__store_address_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gl__RG__store_address_new')), array (  'source' => NULL,  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\AddressController::newAction',  '_locale' => 'gl',));
        }
        not_gl__RG__store_address_new:

        // sr__RG__store_address_new
        if (0 === strpos($pathinfo, '/sr/moja-adresa/nova') && preg_match('#^/sr/moja\\-adresa/nova(?:/(?P<source>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_sr__RG__store_address_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr__RG__store_address_new')), array (  'source' => NULL,  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\AddressController::newAction',  '_locale' => 'sr',));
        }
        not_sr__RG__store_address_new:

        // ca__RG__store_address_delete
        if (0 === strpos($pathinfo, '/ca/les-meves-direccions') && preg_match('#^/ca/les\\-meves\\-direccions/(?P<id>[^/]++)/eliminar$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__store_address_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ca__RG__store_address_delete')), array (  'source' => NULL,  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\AddressController::deleteAction',  '_locale' => 'ca',));
        }
        not_ca__RG__store_address_delete:

        // de__RG__store_address_delete
        if (0 === strpos($pathinfo, '/de/meine-adressen') && preg_match('#^/de/meine\\-adressen/(?P<id>[^/]++)/loeschen$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__store_address_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__store_address_delete')), array (  'source' => NULL,  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\AddressController::deleteAction',  '_locale' => 'de',));
        }
        not_de__RG__store_address_delete:

        // en__RG__store_address_delete
        if (0 === strpos($pathinfo, '/my-address') && preg_match('#^/my\\-address/(?P<id>[^/]++)/remove$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__store_address_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__store_address_delete')), array (  'source' => NULL,  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\AddressController::deleteAction',  '_locale' => 'en',));
        }
        not_en__RG__store_address_delete:

        // es__RG__store_address_delete
        if (0 === strpos($pathinfo, '/es/mi-direccion') && preg_match('#^/es/mi\\-direccion/(?P<id>[^/]++)/eliminar$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__store_address_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'es__RG__store_address_delete')), array (  'source' => NULL,  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\AddressController::deleteAction',  '_locale' => 'es',));
        }
        not_es__RG__store_address_delete:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_address_delete
            if (0 === strpos($pathinfo, '/fi/my-address') && preg_match('#^/fi/my\\-address/(?P<id>[^/]++)/remove$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__store_address_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fi__RG__store_address_delete')), array (  'source' => NULL,  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\AddressController::deleteAction',  '_locale' => 'fi',));
            }
            not_fi__RG__store_address_delete:

            // fr__RG__store_address_delete
            if (0 === strpos($pathinfo, '/fr/mon-adresse') && preg_match('#^/fr/mon\\-adresse/(?P<id>[^/]++)/remove$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__store_address_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__store_address_delete')), array (  'source' => NULL,  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\AddressController::deleteAction',  '_locale' => 'fr',));
            }
            not_fr__RG__store_address_delete:

        }

        // gl__RG__store_address_delete
        if (0 === strpos($pathinfo, '/gl/o-meu-enderezo') && preg_match('#^/gl/o\\-meu\\-enderezo/(?P<id>[^/]++)/borrar$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__store_address_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gl__RG__store_address_delete')), array (  'source' => NULL,  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\AddressController::deleteAction',  '_locale' => 'gl',));
        }
        not_gl__RG__store_address_delete:

        // sr__RG__store_address_delete
        if (0 === strpos($pathinfo, '/sr/moja-adresa') && preg_match('#^/sr/moja\\-adresa/(?P<id>[^/]++)/obrisi$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__store_address_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr__RG__store_address_delete')), array (  'source' => NULL,  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\AddressController::deleteAction',  '_locale' => 'sr',));
        }
        not_sr__RG__store_address_delete:

        // ca__RG__location_selectors
        if (0 === strpos($pathinfo, '/ca/localitzacions/selectors') && preg_match('#^/ca/localitzacions/selectors(?:/(?P<locationId>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__location_selectors;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ca__RG__location_selectors')), array (  'locationId' => NULL,  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\LocationController::showCitySelectorAction',  '_locale' => 'ca',));
        }
        not_ca__RG__location_selectors:

        // de__RG__location_selectors
        if (0 === strpos($pathinfo, '/de/ort/waehler') && preg_match('#^/de/ort/waehler(?:/(?P<locationId>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__location_selectors;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__location_selectors')), array (  'locationId' => NULL,  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\LocationController::showCitySelectorAction',  '_locale' => 'de',));
        }
        not_de__RG__location_selectors:

        // en__RG__location_selectors
        if (0 === strpos($pathinfo, '/location/selectors') && preg_match('#^/location/selectors(?:/(?P<locationId>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__location_selectors;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__location_selectors')), array (  'locationId' => NULL,  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\LocationController::showCitySelectorAction',  '_locale' => 'en',));
        }
        not_en__RG__location_selectors:

        // es__RG__location_selectors
        if (0 === strpos($pathinfo, '/es/localizacion/selectores') && preg_match('#^/es/localizacion/selectores(?:/(?P<locationId>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__location_selectors;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'es__RG__location_selectors')), array (  'locationId' => NULL,  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\LocationController::showCitySelectorAction',  '_locale' => 'es',));
        }
        not_es__RG__location_selectors:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__location_selectors
            if (0 === strpos($pathinfo, '/fi/location/selectors') && preg_match('#^/fi/location/selectors(?:/(?P<locationId>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__location_selectors;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fi__RG__location_selectors')), array (  'locationId' => NULL,  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\LocationController::showCitySelectorAction',  '_locale' => 'fi',));
            }
            not_fi__RG__location_selectors:

            // fr__RG__location_selectors
            if (0 === strpos($pathinfo, '/fr/emplacement/selecteurs') && preg_match('#^/fr/emplacement/selecteurs(?:/(?P<locationId>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__location_selectors;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__location_selectors')), array (  'locationId' => NULL,  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\LocationController::showCitySelectorAction',  '_locale' => 'fr',));
            }
            not_fr__RG__location_selectors:

        }

        // gl__RG__location_selectors
        if (0 === strpos($pathinfo, '/gl/location/selectors') && preg_match('#^/gl/location/selectors(?:/(?P<locationId>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__location_selectors;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gl__RG__location_selectors')), array (  'locationId' => NULL,  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\LocationController::showCitySelectorAction',  '_locale' => 'gl',));
        }
        not_gl__RG__location_selectors:

        // sr__RG__location_selectors
        if (0 === strpos($pathinfo, '/sr/lokacija/selektor') && preg_match('#^/sr/lokacija/selektor(?:/(?P<locationId>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__location_selectors;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr__RG__location_selectors')), array (  'locationId' => NULL,  '_controller' => 'Elcodi\\Store\\GeoBundle\\Controller\\LocationController::showCitySelectorAction',  '_locale' => 'sr',));
        }
        not_sr__RG__location_selectors:

        // ca__RG__store_language_nav
        if ($pathinfo === '/ca/idiomes/nav') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__store_language_nav;
            }

            return array (  '_controller' => 'Elcodi\\Store\\LanguageBundle\\Controller\\LanguageController::navAction',  '_locale' => 'ca',  '_route' => 'ca__RG__store_language_nav',);
        }
        not_ca__RG__store_language_nav:

        // de__RG__store_language_nav
        if ($pathinfo === '/de/sprachen/nav') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__store_language_nav;
            }

            return array (  '_controller' => 'Elcodi\\Store\\LanguageBundle\\Controller\\LanguageController::navAction',  '_locale' => 'de',  '_route' => 'de__RG__store_language_nav',);
        }
        not_de__RG__store_language_nav:

        // en__RG__store_language_nav
        if ($pathinfo === '/languages/nav') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__store_language_nav;
            }

            return array (  '_controller' => 'Elcodi\\Store\\LanguageBundle\\Controller\\LanguageController::navAction',  '_locale' => 'en',  '_route' => 'en__RG__store_language_nav',);
        }
        not_en__RG__store_language_nav:

        // es__RG__store_language_nav
        if ($pathinfo === '/es/idiomas/nav') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__store_language_nav;
            }

            return array (  '_controller' => 'Elcodi\\Store\\LanguageBundle\\Controller\\LanguageController::navAction',  '_locale' => 'es',  '_route' => 'es__RG__store_language_nav',);
        }
        not_es__RG__store_language_nav:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_language_nav
            if ($pathinfo === '/fi/languages/nav') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__store_language_nav;
                }

                return array (  '_controller' => 'Elcodi\\Store\\LanguageBundle\\Controller\\LanguageController::navAction',  '_locale' => 'fi',  '_route' => 'fi__RG__store_language_nav',);
            }
            not_fi__RG__store_language_nav:

            // fr__RG__store_language_nav
            if ($pathinfo === '/fr/langues/nav') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__store_language_nav;
                }

                return array (  '_controller' => 'Elcodi\\Store\\LanguageBundle\\Controller\\LanguageController::navAction',  '_locale' => 'fr',  '_route' => 'fr__RG__store_language_nav',);
            }
            not_fr__RG__store_language_nav:

        }

        // gl__RG__store_language_nav
        if ($pathinfo === '/gl/linguas/nav') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__store_language_nav;
            }

            return array (  '_controller' => 'Elcodi\\Store\\LanguageBundle\\Controller\\LanguageController::navAction',  '_locale' => 'gl',  '_route' => 'gl__RG__store_language_nav',);
        }
        not_gl__RG__store_language_nav:

        // sr__RG__store_language_nav
        if ($pathinfo === '/sr/jezici/nav') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__store_language_nav;
            }

            return array (  '_controller' => 'Elcodi\\Store\\LanguageBundle\\Controller\\LanguageController::navAction',  '_locale' => 'sr',  '_route' => 'sr__RG__store_language_nav',);
        }
        not_sr__RG__store_language_nav:

        // ca__RG__hwi_oauth_service_redirect
        if (0 === strpos($pathinfo, '/ca/login') && preg_match('#^/ca/login/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ca__RG__hwi_oauth_service_redirect')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction',  '_locale' => 'ca',));
        }

        // de__RG__hwi_oauth_service_redirect
        if (0 === strpos($pathinfo, '/de/login') && preg_match('#^/de/login/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__hwi_oauth_service_redirect')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction',  '_locale' => 'de',));
        }

        // en__RG__hwi_oauth_service_redirect
        if (0 === strpos($pathinfo, '/login') && preg_match('#^/login/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__hwi_oauth_service_redirect')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction',  '_locale' => 'en',));
        }

        // es__RG__hwi_oauth_service_redirect
        if (0 === strpos($pathinfo, '/es/login') && preg_match('#^/es/login/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'es__RG__hwi_oauth_service_redirect')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction',  '_locale' => 'es',));
        }

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__hwi_oauth_service_redirect
            if (0 === strpos($pathinfo, '/fi/login') && preg_match('#^/fi/login/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fi__RG__hwi_oauth_service_redirect')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction',  '_locale' => 'fi',));
            }

            // fr__RG__hwi_oauth_service_redirect
            if (0 === strpos($pathinfo, '/fr/login') && preg_match('#^/fr/login/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__hwi_oauth_service_redirect')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction',  '_locale' => 'fr',));
            }

        }

        // gl__RG__hwi_oauth_service_redirect
        if (0 === strpos($pathinfo, '/gl/login') && preg_match('#^/gl/login/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gl__RG__hwi_oauth_service_redirect')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction',  '_locale' => 'gl',));
        }

        // sr__RG__hwi_oauth_service_redirect
        if (0 === strpos($pathinfo, '/sr/login') && preg_match('#^/sr/login/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr__RG__hwi_oauth_service_redirect')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction',  '_locale' => 'sr',));
        }

        // ca__RG__hwi_oauth_connect
        if (rtrim($pathinfo, '/') === '/ca/login') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ca__RG__hwi_oauth_connect');
            }

            return array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction',  '_locale' => 'ca',  '_route' => 'ca__RG__hwi_oauth_connect',);
        }

        // de__RG__hwi_oauth_connect
        if (rtrim($pathinfo, '/') === '/de/login') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'de__RG__hwi_oauth_connect');
            }

            return array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction',  '_locale' => 'de',  '_route' => 'de__RG__hwi_oauth_connect',);
        }

        // en__RG__hwi_oauth_connect
        if (rtrim($pathinfo, '/') === '/login') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'en__RG__hwi_oauth_connect');
            }

            return array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction',  '_locale' => 'en',  '_route' => 'en__RG__hwi_oauth_connect',);
        }

        // es__RG__hwi_oauth_connect
        if (rtrim($pathinfo, '/') === '/es/login') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'es__RG__hwi_oauth_connect');
            }

            return array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction',  '_locale' => 'es',  '_route' => 'es__RG__hwi_oauth_connect',);
        }

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__hwi_oauth_connect
            if (rtrim($pathinfo, '/') === '/fi/login') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fi__RG__hwi_oauth_connect');
                }

                return array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction',  '_locale' => 'fi',  '_route' => 'fi__RG__hwi_oauth_connect',);
            }

            // fr__RG__hwi_oauth_connect
            if (rtrim($pathinfo, '/') === '/fr/login') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fr__RG__hwi_oauth_connect');
                }

                return array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction',  '_locale' => 'fr',  '_route' => 'fr__RG__hwi_oauth_connect',);
            }

        }

        // gl__RG__hwi_oauth_connect
        if (rtrim($pathinfo, '/') === '/gl/login') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'gl__RG__hwi_oauth_connect');
            }

            return array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction',  '_locale' => 'gl',  '_route' => 'gl__RG__hwi_oauth_connect',);
        }

        // sr__RG__hwi_oauth_connect
        if (rtrim($pathinfo, '/') === '/sr/login') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'sr__RG__hwi_oauth_connect');
            }

            return array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction',  '_locale' => 'sr',  '_route' => 'sr__RG__hwi_oauth_connect',);
        }

        // ca__RG__store_github_login
        if ($pathinfo === '/ca/login/check-github') {
            return array (  '_locale' => 'ca',  '_route' => 'ca__RG__store_github_login',);
        }

        // de__RG__store_github_login
        if ($pathinfo === '/de/login/check-github') {
            return array (  '_locale' => 'de',  '_route' => 'de__RG__store_github_login',);
        }

        // en__RG__store_github_login
        if ($pathinfo === '/login/check-github') {
            return array (  '_locale' => 'en',  '_route' => 'en__RG__store_github_login',);
        }

        // es__RG__store_github_login
        if ($pathinfo === '/es/login/check-github') {
            return array (  '_locale' => 'es',  '_route' => 'es__RG__store_github_login',);
        }

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_github_login
            if ($pathinfo === '/fi/login/check-github') {
                return array (  '_locale' => 'fi',  '_route' => 'fi__RG__store_github_login',);
            }

            // fr__RG__store_github_login
            if ($pathinfo === '/fr/login/check-github') {
                return array (  '_locale' => 'fr',  '_route' => 'fr__RG__store_github_login',);
            }

        }

        // gl__RG__store_github_login
        if ($pathinfo === '/gl/login/check-github') {
            return array (  '_locale' => 'gl',  '_route' => 'gl__RG__store_github_login',);
        }

        // sr__RG__store_github_login
        if ($pathinfo === '/sr/login/check-github') {
            return array (  '_locale' => 'sr',  '_route' => 'sr__RG__store_github_login',);
        }

        // ca__RG__store_paypal_login
        if ($pathinfo === '/ca/login/check-paypal') {
            return array (  '_locale' => 'ca',  '_route' => 'ca__RG__store_paypal_login',);
        }

        // de__RG__store_paypal_login
        if ($pathinfo === '/de/login/check-paypal') {
            return array (  '_locale' => 'de',  '_route' => 'de__RG__store_paypal_login',);
        }

        // en__RG__store_paypal_login
        if ($pathinfo === '/login/check-paypal') {
            return array (  '_locale' => 'en',  '_route' => 'en__RG__store_paypal_login',);
        }

        // es__RG__store_paypal_login
        if ($pathinfo === '/es/login/check-paypal') {
            return array (  '_locale' => 'es',  '_route' => 'es__RG__store_paypal_login',);
        }

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__store_paypal_login
            if ($pathinfo === '/fi/login/check-paypal') {
                return array (  '_locale' => 'fi',  '_route' => 'fi__RG__store_paypal_login',);
            }

            // fr__RG__store_paypal_login
            if ($pathinfo === '/fr/login/check-paypal') {
                return array (  '_locale' => 'fr',  '_route' => 'fr__RG__store_paypal_login',);
            }

        }

        // gl__RG__store_paypal_login
        if ($pathinfo === '/gl/login/check-paypal') {
            return array (  '_locale' => 'gl',  '_route' => 'gl__RG__store_paypal_login',);
        }

        // sr__RG__store_paypal_login
        if ($pathinfo === '/sr/login/check-paypal') {
            return array (  '_locale' => 'sr',  '_route' => 'sr__RG__store_paypal_login',);
        }

        // ca__RG__elcodi.route.page_render
        if (0 === strpos($pathinfo, '/ca/page') && preg_match('#^/ca/page/(?P<id>[^/]++)(?:/(?P<path>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__elcodiroutepage_render;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ca__RG__elcodi.route.page_render')), array (  '_controller' => 'elcodi.controller.page:renderByIdAction',  'path' => '',  '_locale' => 'ca',));
        }
        not_ca__RG__elcodiroutepage_render:

        // de__RG__elcodi.route.page_render
        if (0 === strpos($pathinfo, '/de/page') && preg_match('#^/de/page/(?P<id>[^/]++)(?:/(?P<path>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__elcodiroutepage_render;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__elcodi.route.page_render')), array (  '_controller' => 'elcodi.controller.page:renderByIdAction',  'path' => '',  '_locale' => 'de',));
        }
        not_de__RG__elcodiroutepage_render:

        // en__RG__elcodi.route.page_render
        if (0 === strpos($pathinfo, '/page') && preg_match('#^/page/(?P<id>[^/]++)(?:/(?P<path>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__elcodiroutepage_render;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__elcodi.route.page_render')), array (  '_controller' => 'elcodi.controller.page:renderByIdAction',  'path' => '',  '_locale' => 'en',));
        }
        not_en__RG__elcodiroutepage_render:

        // es__RG__elcodi.route.page_render
        if (0 === strpos($pathinfo, '/es/page') && preg_match('#^/es/page/(?P<id>[^/]++)(?:/(?P<path>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__elcodiroutepage_render;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'es__RG__elcodi.route.page_render')), array (  '_controller' => 'elcodi.controller.page:renderByIdAction',  'path' => '',  '_locale' => 'es',));
        }
        not_es__RG__elcodiroutepage_render:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__elcodi.route.page_render
            if (0 === strpos($pathinfo, '/fi/page') && preg_match('#^/fi/page/(?P<id>[^/]++)(?:/(?P<path>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__elcodiroutepage_render;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fi__RG__elcodi.route.page_render')), array (  '_controller' => 'elcodi.controller.page:renderByIdAction',  'path' => '',  '_locale' => 'fi',));
            }
            not_fi__RG__elcodiroutepage_render:

            // fr__RG__elcodi.route.page_render
            if (0 === strpos($pathinfo, '/fr/page') && preg_match('#^/fr/page/(?P<id>[^/]++)(?:/(?P<path>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__elcodiroutepage_render;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__elcodi.route.page_render')), array (  '_controller' => 'elcodi.controller.page:renderByIdAction',  'path' => '',  '_locale' => 'fr',));
            }
            not_fr__RG__elcodiroutepage_render:

        }

        // gl__RG__elcodi.route.page_render
        if (0 === strpos($pathinfo, '/gl/page') && preg_match('#^/gl/page/(?P<id>[^/]++)(?:/(?P<path>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__elcodiroutepage_render;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gl__RG__elcodi.route.page_render')), array (  '_controller' => 'elcodi.controller.page:renderByIdAction',  'path' => '',  '_locale' => 'gl',));
        }
        not_gl__RG__elcodiroutepage_render:

        // sr__RG__elcodi.route.page_render
        if (0 === strpos($pathinfo, '/sr/page') && preg_match('#^/sr/page/(?P<id>[^/]++)(?:/(?P<path>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__elcodiroutepage_render;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr__RG__elcodi.route.page_render')), array (  '_controller' => 'elcodi.controller.page:renderByIdAction',  'path' => '',  '_locale' => 'sr',));
        }
        not_sr__RG__elcodiroutepage_render:

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin')) {
                // admin_homepage
                if (rtrim($pathinfo, '/') === '/admin') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_homepage');
                    }

                    return array (  '_controller' => 'Elcodi\\Admin\\CoreBundle\\Controller\\HomeController::indexAction',  '_route' => 'admin_homepage',);
                }

                // admin_menu_side
                if ($pathinfo === '/admin/components/menu/side') {
                    return array (  '_controller' => 'Elcodi\\Admin\\CoreBundle\\Controller\\MenuController::sideNavAction',  '_route' => 'admin_menu_side',);
                }

                if (0 === strpos($pathinfo, '/admin/user')) {
                    if (0 === strpos($pathinfo, '/admin/user/admin')) {
                        // admin_admin_user_list
                        if (0 === strpos($pathinfo, '/admin/user/admins') && preg_match('#^/admin/user/admins(?:/(?P<page>\\d*)(?:/(?P<limit>\\d*)(?:/(?P<orderByField>[^/]++)(?:/(?P<orderByDirection>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_admin_user_list;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_user_list')), array (  'page' => '1',  'limit' => '50',  'orderByField' => 'id',  'orderByDirection' => 'DESC',  '_controller' => 'Elcodi\\Admin\\UserBundle\\Controller\\AdminUserController::listAction',));
                        }
                        not_admin_admin_user_list:

                        // admin_admin_user_edit
                        if (preg_match('#^/admin/user/admin/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_admin_user_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_user_edit')), array (  '_controller' => 'Elcodi\\Admin\\UserBundle\\Controller\\AdminUserController::editAction',));
                        }
                        not_admin_admin_user_edit:

                        // admin_admin_user_update
                        if (preg_match('#^/admin/user/admin/(?P<id>\\d+)/update$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_admin_admin_user_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_user_update')), array (  '_controller' => 'Elcodi\\Admin\\UserBundle\\Controller\\AdminUserController::editAction',));
                        }
                        not_admin_admin_user_update:

                        if (0 === strpos($pathinfo, '/admin/user/admin/new')) {
                            // admin_admin_user_new
                            if ($pathinfo === '/admin/user/admin/new') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_admin_admin_user_new;
                                }

                                return array (  '_controller' => 'Elcodi\\Admin\\UserBundle\\Controller\\AdminUserController::editAction',  '_route' => 'admin_admin_user_new',);
                            }
                            not_admin_admin_user_new:

                            // admin_admin_user_save
                            if ($pathinfo === '/admin/user/admin/new/update') {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_admin_admin_user_save;
                                }

                                return array (  '_controller' => 'Elcodi\\Admin\\UserBundle\\Controller\\AdminUserController::editAction',  '_route' => 'admin_admin_user_save',);
                            }
                            not_admin_admin_user_save:

                        }

                        // admin_admin_user_enable
                        if (preg_match('#^/admin/user/admin/(?P<id>[^/]++)/enable$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_admin_admin_user_enable;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_user_enable')), array (  '_controller' => 'Elcodi\\Admin\\UserBundle\\Controller\\AdminUserController::enableAction',));
                        }
                        not_admin_admin_user_enable:

                        // admin_admin_user_disable
                        if (preg_match('#^/admin/user/admin/(?P<id>[^/]++)/disable$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_admin_admin_user_disable;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_user_disable')), array (  '_controller' => 'Elcodi\\Admin\\UserBundle\\Controller\\AdminUserController::disableAction',));
                        }
                        not_admin_admin_user_disable:

                        // admin_admin_user_delete
                        if (preg_match('#^/admin/user/admin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_admin_admin_user_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_user_delete')), array (  'redirectPath' => NULL,  '_controller' => 'Elcodi\\Admin\\UserBundle\\Controller\\AdminUserController::deleteAction',));
                        }
                        not_admin_admin_user_delete:

                        // admin_admin_user_list_component
                        if (0 === strpos($pathinfo, '/admin/user/admins/component') && preg_match('#^/admin/user/admins/component(?:/(?P<page>\\d*)(?:/(?P<limit>\\d*)(?:/(?P<orderByField>[^/]++)(?:/(?P<orderByDirection>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_admin_user_list_component;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_user_list_component')), array (  'page' => '1',  'limit' => '50',  'orderByField' => 'id',  'orderByDirection' => 'DESC',  '_controller' => 'Elcodi\\Admin\\UserBundle\\Controller\\Component\\AdminUserComponentController::listComponentAction',));
                        }
                        not_admin_admin_user_list_component:

                        // admin_admin_user_edit_component
                        if (preg_match('#^/admin/user/admin/(?P<id>\\d+)/component$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_admin_user_edit_component;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_user_edit_component')), array (  '_controller' => 'Elcodi\\Admin\\UserBundle\\Controller\\Component\\AdminUserComponentController::editComponentAction',));
                        }
                        not_admin_admin_user_edit_component:

                        // admin_admin_user_new_component
                        if ($pathinfo === '/admin/user/admin/new/component') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_admin_user_new_component;
                            }

                            return array (  '_controller' => 'Elcodi\\Admin\\UserBundle\\Controller\\Component\\AdminUserComponentController::editComponentAction',  '_route' => 'admin_admin_user_new_component',);
                        }
                        not_admin_admin_user_new_component:

                    }

                    if (0 === strpos($pathinfo, '/admin/user/customer')) {
                        // admin_customer_list_component
                        if (0 === strpos($pathinfo, '/admin/user/customers/component') && preg_match('#^/admin/user/customers/component(?:/(?P<page>\\d*)(?:/(?P<limit>\\d*)(?:/(?P<orderByField>[^/]++)(?:/(?P<orderByDirection>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_customer_list_component;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_customer_list_component')), array (  'page' => '1',  'limit' => '50',  'orderByField' => 'id',  'orderByDirection' => 'DESC',  '_controller' => 'Elcodi\\Admin\\UserBundle\\Controller\\Component\\CustomerComponentController::listComponentAction',));
                        }
                        not_admin_customer_list_component:

                        // admin_customer_edit_component
                        if (preg_match('#^/admin/user/customer/(?P<id>\\d+)/component$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_customer_edit_component;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_customer_edit_component')), array (  '_controller' => 'Elcodi\\Admin\\UserBundle\\Controller\\Component\\CustomerComponentController::editComponentAction',));
                        }
                        not_admin_customer_edit_component:

                        // admin_customer_new_component
                        if ($pathinfo === '/admin/user/customer/new/component') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_customer_new_component;
                            }

                            return array (  '_controller' => 'Elcodi\\Admin\\UserBundle\\Controller\\Component\\CustomerComponentController::editComponentAction',  '_route' => 'admin_customer_new_component',);
                        }
                        not_admin_customer_new_component:

                        // admin_customer_list
                        if (0 === strpos($pathinfo, '/admin/user/customers') && preg_match('#^/admin/user/customers(?:/(?P<page>\\d*)(?:/(?P<limit>\\d*)(?:/(?P<orderByField>[^/]++)(?:/(?P<orderByDirection>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_customer_list;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_customer_list')), array (  'page' => '1',  'limit' => '50',  'orderByField' => 'id',  'orderByDirection' => 'DESC',  '_controller' => 'Elcodi\\Admin\\UserBundle\\Controller\\CustomerController::listAction',));
                        }
                        not_admin_customer_list:

                        // admin_customer_view
                        if (preg_match('#^/admin/user/customer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_customer_view;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_customer_view')), array (  '_controller' => 'Elcodi\\Admin\\UserBundle\\Controller\\CustomerController::editAction',));
                        }
                        not_admin_customer_view:

                        // admin_customer_edit
                        if (preg_match('#^/admin/user/customer/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_customer_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_customer_edit')), array (  '_controller' => 'Elcodi\\Admin\\UserBundle\\Controller\\CustomerController::editAction',));
                        }
                        not_admin_customer_edit:

                        // admin_customer_update
                        if (preg_match('#^/admin/user/customer/(?P<id>\\d+)/update$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_admin_customer_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_customer_update')), array (  '_controller' => 'Elcodi\\Admin\\UserBundle\\Controller\\CustomerController::editAction',));
                        }
                        not_admin_customer_update:

                        if (0 === strpos($pathinfo, '/admin/user/customer/new')) {
                            // admin_customer_new
                            if ($pathinfo === '/admin/user/customer/new') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_admin_customer_new;
                                }

                                return array (  '_controller' => 'Elcodi\\Admin\\UserBundle\\Controller\\CustomerController::editAction',  '_route' => 'admin_customer_new',);
                            }
                            not_admin_customer_new:

                            // admin_customer_save
                            if ($pathinfo === '/admin/user/customer/new/update') {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_admin_customer_save;
                                }

                                return array (  '_controller' => 'Elcodi\\Admin\\UserBundle\\Controller\\CustomerController::editAction',  '_route' => 'admin_customer_save',);
                            }
                            not_admin_customer_save:

                        }

                        // admin_customer_enable
                        if (preg_match('#^/admin/user/customer/(?P<id>[^/]++)/enable$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_admin_customer_enable;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_customer_enable')), array (  '_controller' => 'Elcodi\\Admin\\UserBundle\\Controller\\CustomerController::enableAction',));
                        }
                        not_admin_customer_enable:

                        // admin_customer_disable
                        if (preg_match('#^/admin/user/customer/(?P<id>[^/]++)/disable$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_admin_customer_disable;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_customer_disable')), array (  '_controller' => 'Elcodi\\Admin\\UserBundle\\Controller\\CustomerController::disableAction',));
                        }
                        not_admin_customer_disable:

                        // admin_customer_delete
                        if (preg_match('#^/admin/user/customer/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_admin_customer_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_customer_delete')), array (  'redirectPath' => NULL,  '_controller' => 'Elcodi\\Admin\\UserBundle\\Controller\\CustomerController::deleteAction',));
                        }
                        not_admin_customer_delete:

                    }

                }

                if (0 === strpos($pathinfo, '/admin/p')) {
                    if (0 === strpos($pathinfo, '/admin/password')) {
                        // admin_password_remember
                        if ($pathinfo === '/admin/password/remember') {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_admin_password_remember;
                            }

                            return array (  '_controller' => 'Elcodi\\Admin\\UserBundle\\Controller\\PasswordController::rememberAction',  '_route' => 'admin_password_remember',);
                        }
                        not_admin_password_remember:

                        // admin_password_recover_sent
                        if ($pathinfo === '/admin/password/sent') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_password_recover_sent;
                            }

                            return array (  '_controller' => 'Elcodi\\Admin\\UserBundle\\Controller\\PasswordController::sentAction',  '_route' => 'admin_password_recover_sent',);
                        }
                        not_admin_password_recover_sent:

                        // admin_password_recover
                        if (0 === strpos($pathinfo, '/admin/password/recover') && preg_match('#^/admin/password/recover/(?P<hash>[\\dA-Fa-f]+)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_admin_password_recover;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_password_recover')), array (  '_controller' => 'Elcodi\\Admin\\UserBundle\\Controller\\PasswordController::recoverAction',));
                        }
                        not_admin_password_recover:

                    }

                    // admin_profile_view
                    if ($pathinfo === '/admin/profile') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_profile_view;
                        }

                        return array (  '_controller' => 'Elcodi\\Admin\\UserBundle\\Controller\\ProfileController::viewAction',  '_route' => 'admin_profile_view',);
                    }
                    not_admin_profile_view:

                }

                // admin_login
                if ($pathinfo === '/admin/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_login;
                    }

                    return array (  '_controller' => 'Elcodi\\Admin\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'admin_login',);
                }
                not_admin_login:

                if (0 === strpos($pathinfo, '/admin/customer-order')) {
                    // admin_customer_order_list_component
                    if (0 === strpos($pathinfo, '/admin/customer-orders/component') && preg_match('#^/admin/customer\\-orders/component/(?P<customerId>[^/]++)(?:/(?P<page>\\d*)(?:/(?P<limit>\\d*)(?:/(?P<orderByField>[^/]++)(?:/(?P<orderByDirection>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_customer_order_list_component;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_customer_order_list_component')), array (  'page' => '1',  'limit' => '50',  'orderByField' => 'id',  'orderByDirection' => 'DESC',  '_controller' => 'Elcodi\\Admin\\CartBundle\\Controller\\Component\\CustomerOrderComponentController::listComponentAction',));
                    }
                    not_admin_customer_order_list_component:

                    // admin_customer_order_edit_component
                    if (preg_match('#^/admin/customer\\-order/(?P<id>\\d+)/component$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_customer_order_edit_component;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_customer_order_edit_component')), array (  '_controller' => 'Elcodi\\Admin\\CartBundle\\Controller\\Component\\CustomerOrderComponentController::editComponentAction',));
                    }
                    not_admin_customer_order_edit_component:

                }

                if (0 === strpos($pathinfo, '/admin/order')) {
                    // admin_order_list_component
                    if (0 === strpos($pathinfo, '/admin/orders/component') && preg_match('#^/admin/orders/component(?:/(?P<page>\\d*)(?:/(?P<limit>\\d*)(?:/(?P<orderByField>[^/]++)(?:/(?P<orderByDirection>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_order_list_component;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_order_list_component')), array (  'page' => '1',  'limit' => '50',  'orderByField' => 'id',  'orderByDirection' => 'DESC',  '_controller' => 'Elcodi\\Admin\\CartBundle\\Controller\\Component\\OrderComponentController::listComponentAction',));
                    }
                    not_admin_order_list_component:

                    // admin_order_edit_component
                    if (preg_match('#^/admin/order/(?P<id>\\d+)/component$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_order_edit_component;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_order_edit_component')), array (  '_controller' => 'Elcodi\\Admin\\CartBundle\\Controller\\Component\\OrderComponentController::editComponentAction',));
                    }
                    not_admin_order_edit_component:

                }

                // admin_customer_order_list
                if (0 === strpos($pathinfo, '/admin/customer-orders') && preg_match('#^/admin/customer\\-orders/(?P<customerId>[^/]++)(?:/(?P<page>\\d*)(?:/(?P<limit>\\d*)(?:/(?P<orderByField>[^/]++)(?:/(?P<orderByDirection>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_customer_order_list;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_customer_order_list')), array (  'page' => '1',  'limit' => '50',  'orderByField' => 'id',  'orderByDirection' => 'DESC',  '_controller' => 'Elcodi\\Admin\\CartBundle\\Controller\\CustomerOrderController::listAction',));
                }
                not_admin_customer_order_list:

                if (0 === strpos($pathinfo, '/admin/order')) {
                    // admin_order_list
                    if (0 === strpos($pathinfo, '/admin/orders') && preg_match('#^/admin/orders(?:/(?P<page>\\d*)(?:/(?P<limit>\\d*)(?:/(?P<orderByField>[^/]++)(?:/(?P<orderByDirection>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_order_list;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_order_list')), array (  'page' => '1',  'limit' => '50',  'orderByField' => 'id',  'orderByDirection' => 'DESC',  '_controller' => 'Elcodi\\Admin\\CartBundle\\Controller\\OrderController::listAction',));
                    }
                    not_admin_order_list:

                    // admin_order_edit
                    if (preg_match('#^/admin/order/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_order_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_order_edit')), array (  '_controller' => 'Elcodi\\Admin\\CartBundle\\Controller\\OrderController::editAction',));
                    }
                    not_admin_order_edit:

                    // admin_order_change_payment_state
                    if (preg_match('#^/admin/order/(?P<id>\\d+)/payment/(?P<transition>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_order_change_payment_state;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_order_change_payment_state')), array (  '_controller' => 'Elcodi\\Admin\\CartBundle\\Controller\\OrderController::changePaymentStateAction',));
                    }
                    not_admin_order_change_payment_state:

                    // admin_order_change_shipping_state
                    if (preg_match('#^/admin/order/(?P<id>\\d+)/shipping/(?P<transition>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_order_change_shipping_state;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_order_change_shipping_state')), array (  '_controller' => 'Elcodi\\Admin\\CartBundle\\Controller\\OrderController::changeShippingStateAction',));
                    }
                    not_admin_order_change_shipping_state:

                }

                if (0 === strpos($pathinfo, '/admin/banner')) {
                    if (0 === strpos($pathinfo, '/admin/banners')) {
                        // admin_banner_nav
                        if ($pathinfo === '/admin/banners/nav') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_banner_nav;
                            }

                            return array (  '_controller' => 'Elcodi\\Admin\\BannerBundle\\Controller\\BannerController::navAction',  '_route' => 'admin_banner_nav',);
                        }
                        not_admin_banner_nav:

                        // admin_banner_list
                        if (preg_match('#^/admin/banners(?:/(?P<page>\\d*)(?:/(?P<limit>\\d*)(?:/(?P<orderByField>[^/]++)(?:/(?P<orderByDirection>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_banner_list;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_banner_list')), array (  'page' => '1',  'limit' => '50',  'orderByField' => 'id',  'orderByDirection' => 'DESC',  '_controller' => 'Elcodi\\Admin\\BannerBundle\\Controller\\BannerController::listAction',));
                        }
                        not_admin_banner_list:

                        // admin_banner_list_component
                        if (0 === strpos($pathinfo, '/admin/banners/component') && preg_match('#^/admin/banners/component(?:/(?P<page>\\d*)(?:/(?P<limit>\\d*)(?:/(?P<orderByField>[^/]++)(?:/(?P<orderByDirection>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_banner_list_component;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_banner_list_component')), array (  'page' => '1',  'limit' => '50',  'orderByField' => 'id',  'orderByDirection' => 'DESC',  '_controller' => 'Elcodi\\Admin\\BannerBundle\\Controller\\BannerController::listComponentAction',));
                        }
                        not_admin_banner_list_component:

                    }

                    // admin_banner_view
                    if (preg_match('#^/admin/banner/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_banner_view;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_banner_view')), array (  '_controller' => 'Elcodi\\Admin\\BannerBundle\\Controller\\BannerController::viewAction',));
                    }
                    not_admin_banner_view:

                    // admin_banner_view_component
                    if (0 === strpos($pathinfo, '/admin/banner/component') && preg_match('#^/admin/banner/component/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_banner_view_component;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_banner_view_component')), array (  '_controller' => 'Elcodi\\Admin\\BannerBundle\\Controller\\BannerController::viewComponentAction',));
                    }
                    not_admin_banner_view_component:

                    if (0 === strpos($pathinfo, '/admin/banner/new')) {
                        // admin_banner_new
                        if ($pathinfo === '/admin/banner/new') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_banner_new;
                            }

                            return array (  '_controller' => 'Elcodi\\Admin\\BannerBundle\\Controller\\BannerController::newAction',  '_route' => 'admin_banner_new',);
                        }
                        not_admin_banner_new:

                        // admin_banner_new_component
                        if ($pathinfo === '/admin/banner/new/component') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_banner_new_component;
                            }

                            return array (  '_controller' => 'Elcodi\\Admin\\BannerBundle\\Controller\\BannerController::newComponentAction',  '_route' => 'admin_banner_new_component',);
                        }
                        not_admin_banner_new_component:

                    }

                    // admin_banner_save
                    if ($pathinfo === '/admin/banner/save') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_banner_save;
                        }

                        return array (  '_controller' => 'Elcodi\\Admin\\BannerBundle\\Controller\\BannerController::saveAction',  '_route' => 'admin_banner_save',);
                    }
                    not_admin_banner_save:

                    // admin_banner_edit
                    if (preg_match('#^/admin/banner/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_banner_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_banner_edit')), array (  '_controller' => 'Elcodi\\Admin\\BannerBundle\\Controller\\BannerController::editAction',));
                    }
                    not_admin_banner_edit:

                    // admin_banner_edit_component
                    if (preg_match('#^/admin/banner/(?P<id>[^/]++)/edit/component$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_banner_edit_component;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_banner_edit_component')), array (  '_controller' => 'Elcodi\\Admin\\BannerBundle\\Controller\\BannerController::editComponentAction',));
                    }
                    not_admin_banner_edit_component:

                    // admin_banner_update
                    if (preg_match('#^/admin/banner/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_banner_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_banner_update')), array (  '_controller' => 'Elcodi\\Admin\\BannerBundle\\Controller\\BannerController::updateAction',));
                    }
                    not_admin_banner_update:

                    // admin_banner_enable
                    if (preg_match('#^/admin/banner/(?P<id>[^/]++)/enable$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_banner_enable;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_banner_enable')), array (  '_controller' => 'Elcodi\\Admin\\BannerBundle\\Controller\\BannerController::enableAction',));
                    }
                    not_admin_banner_enable:

                    // admin_banner_disable
                    if (preg_match('#^/admin/banner/(?P<id>[^/]++)/disable$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_banner_disable;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_banner_disable')), array (  '_controller' => 'Elcodi\\Admin\\BannerBundle\\Controller\\BannerController::disableAction',));
                    }
                    not_admin_banner_disable:

                    // admin_banner_delete
                    if (preg_match('#^/admin/banner/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_banner_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_banner_delete')), array (  'redirectPath' => NULL,  '_controller' => 'Elcodi\\Admin\\BannerBundle\\Controller\\BannerController::deleteAction',));
                    }
                    not_admin_banner_delete:

                    if (0 === strpos($pathinfo, '/admin/bannerzone')) {
                        if (0 === strpos($pathinfo, '/admin/bannerzones')) {
                            // admin_banner_zone_list
                            if (preg_match('#^/admin/bannerzones(?:/(?P<page>\\d*)(?:/(?P<limit>\\d*)(?:/(?P<orderByField>[^/]++)(?:/(?P<orderByDirection>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_admin_banner_zone_list;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_banner_zone_list')), array (  'page' => '1',  'limit' => '50',  'orderByField' => 'id',  'orderByDirection' => 'DESC',  '_controller' => 'Elcodi\\Admin\\BannerBundle\\Controller\\BannerZoneController::listAction',));
                            }
                            not_admin_banner_zone_list:

                            // admin_banner_zone_list_component
                            if (0 === strpos($pathinfo, '/admin/bannerzones/component') && preg_match('#^/admin/bannerzones/component(?:/(?P<page>\\d*)(?:/(?P<limit>\\d*)(?:/(?P<orderByField>[^/]++)(?:/(?P<orderByDirection>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_admin_banner_zone_list_component;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_banner_zone_list_component')), array (  'page' => '1',  'limit' => '50',  'orderByField' => 'id',  'orderByDirection' => 'DESC',  '_controller' => 'Elcodi\\Admin\\BannerBundle\\Controller\\BannerZoneController::listComponentAction',));
                            }
                            not_admin_banner_zone_list_component:

                        }

                        // admin_banner_zone_view
                        if (preg_match('#^/admin/bannerzone/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_banner_zone_view;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_banner_zone_view')), array (  '_controller' => 'Elcodi\\Admin\\BannerBundle\\Controller\\BannerZoneController::viewAction',));
                        }
                        not_admin_banner_zone_view:

                        // admin_banner_zone_view_component
                        if (0 === strpos($pathinfo, '/admin/bannerzone/component') && preg_match('#^/admin/bannerzone/component/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_banner_zone_view_component;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_banner_zone_view_component')), array (  '_controller' => 'Elcodi\\Admin\\BannerBundle\\Controller\\BannerZoneController::viewComponentAction',));
                        }
                        not_admin_banner_zone_view_component:

                        if (0 === strpos($pathinfo, '/admin/bannerzone/new')) {
                            // admin_banner_zone_new
                            if ($pathinfo === '/admin/bannerzone/new') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_admin_banner_zone_new;
                                }

                                return array (  '_controller' => 'Elcodi\\Admin\\BannerBundle\\Controller\\BannerZoneController::newAction',  '_route' => 'admin_banner_zone_new',);
                            }
                            not_admin_banner_zone_new:

                            // admin_banner_zone_new_component
                            if ($pathinfo === '/admin/bannerzone/new/component') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_admin_banner_zone_new_component;
                                }

                                return array (  '_controller' => 'Elcodi\\Admin\\BannerBundle\\Controller\\BannerZoneController::newComponentAction',  '_route' => 'admin_banner_zone_new_component',);
                            }
                            not_admin_banner_zone_new_component:

                        }

                        // admin_banner_zone_save
                        if ($pathinfo === '/admin/bannerzone/save') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_admin_banner_zone_save;
                            }

                            return array (  '_controller' => 'Elcodi\\Admin\\BannerBundle\\Controller\\BannerZoneController::saveAction',  '_route' => 'admin_banner_zone_save',);
                        }
                        not_admin_banner_zone_save:

                        // admin_banner_zone_edit
                        if (preg_match('#^/admin/bannerzone/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_banner_zone_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_banner_zone_edit')), array (  '_controller' => 'Elcodi\\Admin\\BannerBundle\\Controller\\BannerZoneController::editAction',));
                        }
                        not_admin_banner_zone_edit:

                        // admin_banner_zone_edit_component
                        if (preg_match('#^/admin/bannerzone/(?P<id>[^/]++)/edit/component$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_banner_zone_edit_component;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_banner_zone_edit_component')), array (  '_controller' => 'Elcodi\\Admin\\BannerBundle\\Controller\\BannerZoneController::editComponentAction',));
                        }
                        not_admin_banner_zone_edit_component:

                        // admin_banner_zone_update
                        if (preg_match('#^/admin/bannerzone/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_admin_banner_zone_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_banner_zone_update')), array (  '_controller' => 'Elcodi\\Admin\\BannerBundle\\Controller\\BannerZoneController::updateAction',));
                        }
                        not_admin_banner_zone_update:

                        // admin_banner_zone_enable
                        if (preg_match('#^/admin/bannerzone/(?P<id>[^/]++)/enable$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_admin_banner_zone_enable;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_banner_zone_enable')), array (  '_controller' => 'Elcodi\\Admin\\BannerBundle\\Controller\\BannerZoneController::enableAction',));
                        }
                        not_admin_banner_zone_enable:

                        // admin_banner_zone_disable
                        if (preg_match('#^/admin/bannerzone/(?P<id>[^/]++)/disable$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_admin_banner_zone_disable;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_banner_zone_disable')), array (  '_controller' => 'Elcodi\\Admin\\BannerBundle\\Controller\\BannerZoneController::disableAction',));
                        }
                        not_admin_banner_zone_disable:

                        // admin_banner_zone_delete
                        if (preg_match('#^/admin/bannerzone/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_admin_banner_zone_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_banner_zone_delete')), array (  'redirectPath' => NULL,  '_controller' => 'Elcodi\\Admin\\BannerBundle\\Controller\\BannerZoneController::deleteAction',));
                        }
                        not_admin_banner_zone_delete:

                    }

                }

                if (0 === strpos($pathinfo, '/admin/c')) {
                    if (0 === strpos($pathinfo, '/admin/coupon')) {
                        // admin_coupon_list_component
                        if (0 === strpos($pathinfo, '/admin/coupons/component') && preg_match('#^/admin/coupons/component(?:/(?P<page>\\d*)(?:/(?P<limit>\\d*)(?:/(?P<orderByField>[^/]++)(?:/(?P<orderByDirection>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_coupon_list_component;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coupon_list_component')), array (  'page' => '1',  'limit' => '50',  'orderByField' => 'id',  'orderByDirection' => 'DESC',  '_controller' => 'Elcodi\\Admin\\CouponBundle\\Controller\\Component\\CouponComponentController::listComponentAction',));
                        }
                        not_admin_coupon_list_component:

                        // admin_coupon_edit_component
                        if (preg_match('#^/admin/coupon/(?P<id>[^/]++)/edit/component$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_coupon_edit_component;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coupon_edit_component')), array (  '_controller' => 'Elcodi\\Admin\\CouponBundle\\Controller\\Component\\CouponComponentController::editComponentAction',));
                        }
                        not_admin_coupon_edit_component:

                        // admin_coupon_new_component
                        if ($pathinfo === '/admin/coupon/new/component') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_coupon_new_component;
                            }

                            return array (  '_controller' => 'Elcodi\\Admin\\CouponBundle\\Controller\\Component\\CouponComponentController::editComponentAction',  '_route' => 'admin_coupon_new_component',);
                        }
                        not_admin_coupon_new_component:

                        // admin_coupon_list
                        if (0 === strpos($pathinfo, '/admin/coupons') && preg_match('#^/admin/coupons(?:/(?P<page>\\d*)(?:/(?P<limit>\\d*)(?:/(?P<orderByField>[^/]++)(?:/(?P<orderByDirection>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_coupon_list;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coupon_list')), array (  'page' => '1',  'limit' => '50',  'orderByField' => 'id',  'orderByDirection' => 'DESC',  '_controller' => 'Elcodi\\Admin\\CouponBundle\\Controller\\CouponController::listAction',));
                        }
                        not_admin_coupon_list:

                        // admin_coupon_edit
                        if (preg_match('#^/admin/coupon/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_coupon_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coupon_edit')), array (  '_controller' => 'Elcodi\\Admin\\CouponBundle\\Controller\\CouponController::editAction',));
                        }
                        not_admin_coupon_edit:

                        // admin_coupon_update
                        if (preg_match('#^/admin/coupon/(?P<id>\\d+)/update$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_admin_coupon_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coupon_update')), array (  '_controller' => 'Elcodi\\Admin\\CouponBundle\\Controller\\CouponController::editAction',));
                        }
                        not_admin_coupon_update:

                        if (0 === strpos($pathinfo, '/admin/coupon/new')) {
                            // admin_coupon_new
                            if ($pathinfo === '/admin/coupon/new') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_admin_coupon_new;
                                }

                                return array (  '_controller' => 'Elcodi\\Admin\\CouponBundle\\Controller\\CouponController::editAction',  '_route' => 'admin_coupon_new',);
                            }
                            not_admin_coupon_new:

                            // admin_coupon_save
                            if ($pathinfo === '/admin/coupon/new/update') {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_admin_coupon_save;
                                }

                                return array (  '_controller' => 'Elcodi\\Admin\\CouponBundle\\Controller\\CouponController::editAction',  '_route' => 'admin_coupon_save',);
                            }
                            not_admin_coupon_save:

                        }

                        // admin_coupon_enable
                        if (preg_match('#^/admin/coupon/(?P<id>[^/]++)/enable$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_admin_coupon_enable;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coupon_enable')), array (  '_controller' => 'Elcodi\\Admin\\CouponBundle\\Controller\\CouponController::enableAction',));
                        }
                        not_admin_coupon_enable:

                        // admin_coupon_disable
                        if (preg_match('#^/admin/coupon/(?P<id>[^/]++)/disable$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_admin_coupon_disable;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coupon_disable')), array (  '_controller' => 'Elcodi\\Admin\\CouponBundle\\Controller\\CouponController::disableAction',));
                        }
                        not_admin_coupon_disable:

                        // admin_coupon_delete
                        if (preg_match('#^/admin/coupon/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_admin_coupon_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coupon_delete')), array (  'redirectPath' => NULL,  '_controller' => 'Elcodi\\Admin\\CouponBundle\\Controller\\CouponController::deleteAction',));
                        }
                        not_admin_coupon_delete:

                    }

                    if (0 === strpos($pathinfo, '/admin/currenc')) {
                        // admin_currency_list_component
                        if ($pathinfo === '/admin/currencies/component') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_currency_list_component;
                            }

                            return array (  '_controller' => 'Elcodi\\Admin\\CurrencyBundle\\Controller\\Components\\CurrencyComponentController::listComponentAction',  '_route' => 'admin_currency_list_component',);
                        }
                        not_admin_currency_list_component:

                        // admin_currency_nav
                        if ($pathinfo === '/admin/currency/nav') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_currency_nav;
                            }

                            return array (  '_controller' => 'Elcodi\\Admin\\CurrencyBundle\\Controller\\CurrencyController::navAction',  '_route' => 'admin_currency_nav',);
                        }
                        not_admin_currency_nav:

                        // admin_currency_list
                        if ($pathinfo === '/admin/currencies/list') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_currency_list;
                            }

                            return array (  '_controller' => 'Elcodi\\Admin\\CurrencyBundle\\Controller\\CurrencyController::listAction',  '_route' => 'admin_currency_list',);
                        }
                        not_admin_currency_list:

                        if (0 === strpos($pathinfo, '/admin/currency')) {
                            // admin_currency_enable
                            if (preg_match('#^/admin/currency/(?P<iso>[^/]++)/enable$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_admin_currency_enable;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_currency_enable')), array (  '_controller' => 'Elcodi\\Admin\\CurrencyBundle\\Controller\\CurrencyController::enableCurrencyAction',));
                            }
                            not_admin_currency_enable:

                            // admin_currency_disable
                            if (preg_match('#^/admin/currency/(?P<iso>[^/]++)/disable$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_admin_currency_disable;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_currency_disable')), array (  '_controller' => 'Elcodi\\Admin\\CurrencyBundle\\Controller\\CurrencyController::disableCurrencyAction',));
                            }
                            not_admin_currency_disable:

                        }

                    }

                }

                // admin_currency_master
                if (preg_match('#^/admin/(?P<iso>[^/]++)/master$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_currency_master;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_currency_master')), array (  '_controller' => 'Elcodi\\Admin\\CurrencyBundle\\Controller\\CurrencyController::masterCurrencyAction',));
                }
                not_admin_currency_master:

                if (0 === strpos($pathinfo, '/admin/attribute')) {
                    // admin_attribute_list
                    if (0 === strpos($pathinfo, '/admin/attributes') && preg_match('#^/admin/attributes(?:/(?P<page>\\d*)(?:/(?P<limit>\\d*)(?:/(?P<orderByField>[^/]++)(?:/(?P<orderByDirection>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_attribute_list;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_attribute_list')), array (  'page' => '1',  'limit' => '50',  'orderByField' => 'id',  'orderByDirection' => 'DESC',  '_controller' => 'Elcodi\\Admin\\AttributeBundle\\Controller\\AttributeController::listAction',));
                    }
                    not_admin_attribute_list:

                    // admin_attribute_edit
                    if (preg_match('#^/admin/attribute/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_attribute_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_attribute_edit')), array (  '_controller' => 'Elcodi\\Admin\\AttributeBundle\\Controller\\AttributeController::editAction',));
                    }
                    not_admin_attribute_edit:

                    // admin_attribute_update
                    if (preg_match('#^/admin/attribute/(?P<id>\\d+)/update$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_attribute_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_attribute_update')), array (  '_controller' => 'Elcodi\\Admin\\AttributeBundle\\Controller\\AttributeController::editAction',));
                    }
                    not_admin_attribute_update:

                    if (0 === strpos($pathinfo, '/admin/attribute/new')) {
                        // admin_attribute_new
                        if ($pathinfo === '/admin/attribute/new') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_attribute_new;
                            }

                            return array (  '_controller' => 'Elcodi\\Admin\\AttributeBundle\\Controller\\AttributeController::editAction',  '_route' => 'admin_attribute_new',);
                        }
                        not_admin_attribute_new:

                        // admin_attribute_save
                        if ($pathinfo === '/admin/attribute/new/update') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_admin_attribute_save;
                            }

                            return array (  '_controller' => 'Elcodi\\Admin\\AttributeBundle\\Controller\\AttributeController::editAction',  '_route' => 'admin_attribute_save',);
                        }
                        not_admin_attribute_save:

                    }

                    // admin_attribute_enable
                    if (preg_match('#^/admin/attribute/(?P<id>[^/]++)/enable$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_attribute_enable;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_attribute_enable')), array (  '_controller' => 'Elcodi\\Admin\\AttributeBundle\\Controller\\AttributeController::enableAction',));
                    }
                    not_admin_attribute_enable:

                    // admin_attribute_disable
                    if (preg_match('#^/admin/attribute/(?P<id>[^/]++)/disable$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_attribute_disable;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_attribute_disable')), array (  '_controller' => 'Elcodi\\Admin\\AttributeBundle\\Controller\\AttributeController::disableAction',));
                    }
                    not_admin_attribute_disable:

                    // admin_attribute_delete
                    if (preg_match('#^/admin/attribute/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_attribute_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_attribute_delete')), array (  'redirectPath' => NULL,  '_controller' => 'Elcodi\\Admin\\AttributeBundle\\Controller\\AttributeController::deleteAction',));
                    }
                    not_admin_attribute_delete:

                    // admin_attribute_list_component
                    if (0 === strpos($pathinfo, '/admin/attributes/component') && preg_match('#^/admin/attributes/component(?:/(?P<page>\\d*)(?:/(?P<limit>\\d*)(?:/(?P<orderByField>[^/]++)(?:/(?P<orderByDirection>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_attribute_list_component;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_attribute_list_component')), array (  'page' => '1',  'limit' => '50',  'orderByField' => 'id',  'orderByDirection' => 'DESC',  '_controller' => 'Elcodi\\Admin\\AttributeBundle\\Controller\\Component\\AttributeComponentController::listComponentAction',));
                    }
                    not_admin_attribute_list_component:

                    // admin_attribute_edit_component
                    if (preg_match('#^/admin/attribute/(?P<id>\\d+)/component$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_attribute_edit_component;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_attribute_edit_component')), array (  '_controller' => 'Elcodi\\Admin\\AttributeBundle\\Controller\\Component\\AttributeComponentController::editComponentAction',));
                    }
                    not_admin_attribute_edit_component:

                    // admin_attribute_new_component
                    if ($pathinfo === '/admin/attribute/new/component') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_attribute_new_component;
                        }

                        return array (  '_controller' => 'Elcodi\\Admin\\AttributeBundle\\Controller\\Component\\AttributeComponentController::editComponentAction',  '_route' => 'admin_attribute_new_component',);
                    }
                    not_admin_attribute_new_component:

                }

                if (0 === strpos($pathinfo, '/admin/categor')) {
                    // admin_category_list
                    if ($pathinfo === '/admin/categories') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_category_list;
                        }

                        return array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\CategoryController::listAction',  '_route' => 'admin_category_list',);
                    }
                    not_admin_category_list:

                    if (0 === strpos($pathinfo, '/admin/category')) {
                        // admin_category_edit
                        if (preg_match('#^/admin/category/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_category_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_edit')), array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\CategoryController::editAction',));
                        }
                        not_admin_category_edit:

                        // admin_category_update
                        if (preg_match('#^/admin/category/(?P<id>\\d+)/update$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_admin_category_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_update')), array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\CategoryController::editAction',));
                        }
                        not_admin_category_update:

                        if (0 === strpos($pathinfo, '/admin/category/new')) {
                            // admin_category_new
                            if ($pathinfo === '/admin/category/new') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_admin_category_new;
                                }

                                return array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\CategoryController::editAction',  '_route' => 'admin_category_new',);
                            }
                            not_admin_category_new:

                            // admin_category_save
                            if ($pathinfo === '/admin/category/new/update') {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_admin_category_save;
                                }

                                return array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\CategoryController::editAction',  '_route' => 'admin_category_save',);
                            }
                            not_admin_category_save:

                        }

                        // admin_category_enable
                        if (preg_match('#^/admin/category/(?P<id>[^/]++)/enable$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_admin_category_enable;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_enable')), array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\CategoryController::enableAction',));
                        }
                        not_admin_category_enable:

                        // admin_category_disable
                        if (preg_match('#^/admin/category/(?P<id>[^/]++)/disable$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_admin_category_disable;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_disable')), array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\CategoryController::disableAction',));
                        }
                        not_admin_category_disable:

                        // admin_category_delete
                        if (preg_match('#^/admin/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_admin_category_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_delete')), array (  'redirectPath' => NULL,  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\CategoryController::deleteAction',));
                        }
                        not_admin_category_delete:

                    }

                    // admin_category_list_component
                    if ($pathinfo === '/admin/categories/component') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_category_list_component;
                        }

                        return array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\Component\\CategoryComponentController::listComponentAction',  '_route' => 'admin_category_list_component',);
                    }
                    not_admin_category_list_component:

                    if (0 === strpos($pathinfo, '/admin/category')) {
                        // admin_category_edit_component
                        if (preg_match('#^/admin/category/(?P<id>\\d+)/component$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_category_edit_component;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_edit_component')), array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\Component\\CategoryComponentController::editComponentAction',));
                        }
                        not_admin_category_edit_component:

                        // admin_category_new_component
                        if ($pathinfo === '/admin/category/new/component') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_category_new_component;
                            }

                            return array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\Component\\CategoryComponentController::editComponentAction',  '_route' => 'admin_category_new_component',);
                        }
                        not_admin_category_new_component:

                        // admin_category_sort_component
                        if ($pathinfo === '/admin/category/sort/component') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_admin_category_sort_component;
                            }

                            return array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\Component\\CategoryComponentController::sortComponentAction',  '_route' => 'admin_category_sort_component',);
                        }
                        not_admin_category_sort_component:

                    }

                }

                if (0 === strpos($pathinfo, '/admin/manufacturer')) {
                    // admin_manufacturer_list_component
                    if (0 === strpos($pathinfo, '/admin/manufacturers/component') && preg_match('#^/admin/manufacturers/component(?:/(?P<page>\\d*)(?:/(?P<limit>\\d*)(?:/(?P<orderByField>[^/]++)(?:/(?P<orderByDirection>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_manufacturer_list_component;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_manufacturer_list_component')), array (  'page' => '1',  'limit' => '50',  'orderByField' => 'id',  'orderByDirection' => 'DESC',  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\Component\\ManufacturerComponentController::listComponentAction',));
                    }
                    not_admin_manufacturer_list_component:

                    // admin_manufacturer_edit_component
                    if (preg_match('#^/admin/manufacturer/(?P<id>\\d+)/component$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_manufacturer_edit_component;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_manufacturer_edit_component')), array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\Component\\ManufacturerComponentController::editComponentAction',));
                    }
                    not_admin_manufacturer_edit_component:

                    // admin_manufacturer_new_component
                    if ($pathinfo === '/admin/manufacturer/new/component') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_manufacturer_new_component;
                        }

                        return array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\Component\\ManufacturerComponentController::editComponentAction',  '_route' => 'admin_manufacturer_new_component',);
                    }
                    not_admin_manufacturer_new_component:

                }

                if (0 === strpos($pathinfo, '/admin/product')) {
                    if (0 === strpos($pathinfo, '/admin/product/pack')) {
                        // admin_purchasable_pack_list_component
                        if (0 === strpos($pathinfo, '/admin/product/packs/component') && preg_match('#^/admin/product/packs/component(?:/(?P<page>\\d*)(?:/(?P<limit>\\d*)(?:/(?P<orderByField>[^/]++)(?:/(?P<orderByDirection>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_purchasable_pack_list_component;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_purchasable_pack_list_component')), array (  'page' => '1',  'limit' => '50',  'orderByField' => 'id',  'orderByDirection' => 'DESC',  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\Component\\PackComponentController::listComponentAction',));
                        }
                        not_admin_purchasable_pack_list_component:

                        // admin_purchasable_pack_edit_component
                        if (preg_match('#^/admin/product/pack/(?P<id>\\d+)/component$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_purchasable_pack_edit_component;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_purchasable_pack_edit_component')), array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\Component\\PackComponentController::editComponentAction',));
                        }
                        not_admin_purchasable_pack_edit_component:

                        // admin_purchasable_pack_new_component
                        if ($pathinfo === '/admin/product/pack/new/component') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_purchasable_pack_new_component;
                            }

                            return array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\Component\\PackComponentController::editComponentAction',  '_route' => 'admin_purchasable_pack_new_component',);
                        }
                        not_admin_purchasable_pack_new_component:

                    }

                    // admin_product_list_component
                    if (0 === strpos($pathinfo, '/admin/products/component') && preg_match('#^/admin/products/component(?:/(?P<page>\\d*)(?:/(?P<limit>\\d*)(?:/(?P<orderByField>[^/]++)(?:/(?P<orderByDirection>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_product_list_component;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_list_component')), array (  'page' => '1',  'limit' => '50',  'orderByField' => 'id',  'orderByDirection' => 'DESC',  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\Component\\ProductComponentController::listComponentAction',));
                    }
                    not_admin_product_list_component:

                    // admin_product_edit_component
                    if (preg_match('#^/admin/product/(?P<id>\\d+)/component$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_product_edit_component;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_edit_component')), array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\Component\\ProductComponentController::editComponentAction',));
                    }
                    not_admin_product_edit_component:

                    // admin_product_new_component
                    if ($pathinfo === '/admin/product/new/component') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_product_new_component;
                        }

                        return array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\Component\\ProductComponentController::editComponentAction',  '_route' => 'admin_product_new_component',);
                    }
                    not_admin_product_new_component:

                    // admin_product_variant_list_component
                    if (preg_match('#^/admin/product/(?P<productId>\\d+)/variants/component$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_product_variant_list_component;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_variant_list_component')), array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\Component\\VariantComponentController::listComponentAction',));
                    }
                    not_admin_product_variant_list_component:

                    // admin_product_variant_edit_component
                    if (preg_match('#^/admin/product/(?P<productId>\\d+)/variant/(?P<id>\\d+)/component$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_product_variant_edit_component;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_variant_edit_component')), array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\Component\\VariantComponentController::editComponentAction',));
                    }
                    not_admin_product_variant_edit_component:

                    // admin_product_variant_new_component
                    if (preg_match('#^/admin/product/(?P<productId>\\d+)/variant/new/component$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_product_variant_new_component;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_variant_new_component')), array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\Component\\VariantComponentController::editComponentAction',));
                    }
                    not_admin_product_variant_new_component:

                }

                if (0 === strpos($pathinfo, '/admin/manufacturer')) {
                    // admin_manufacturer_list
                    if (0 === strpos($pathinfo, '/admin/manufacturers') && preg_match('#^/admin/manufacturers(?:/(?P<page>\\d*)(?:/(?P<limit>\\d*)(?:/(?P<orderByField>[^/]++)(?:/(?P<orderByDirection>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_manufacturer_list;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_manufacturer_list')), array (  'page' => '1',  'limit' => '50',  'orderByField' => 'id',  'orderByDirection' => 'DESC',  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\ManufacturerController::listAction',));
                    }
                    not_admin_manufacturer_list:

                    // admin_manufacturer_edit
                    if (preg_match('#^/admin/manufacturer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_manufacturer_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_manufacturer_edit')), array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\ManufacturerController::editAction',));
                    }
                    not_admin_manufacturer_edit:

                    // admin_manufacturer_update
                    if (preg_match('#^/admin/manufacturer/(?P<id>\\d+)/update$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_manufacturer_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_manufacturer_update')), array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\ManufacturerController::editAction',));
                    }
                    not_admin_manufacturer_update:

                    if (0 === strpos($pathinfo, '/admin/manufacturer/new')) {
                        // admin_manufacturer_new
                        if ($pathinfo === '/admin/manufacturer/new') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_manufacturer_new;
                            }

                            return array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\ManufacturerController::editAction',  '_route' => 'admin_manufacturer_new',);
                        }
                        not_admin_manufacturer_new:

                        // admin_manufacturer_save
                        if ($pathinfo === '/admin/manufacturer/new/update') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_admin_manufacturer_save;
                            }

                            return array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\ManufacturerController::editAction',  '_route' => 'admin_manufacturer_save',);
                        }
                        not_admin_manufacturer_save:

                    }

                    // admin_manufacturer_enable
                    if (preg_match('#^/admin/manufacturer/(?P<id>[^/]++)/enable$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_manufacturer_enable;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_manufacturer_enable')), array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\ManufacturerController::enableAction',));
                    }
                    not_admin_manufacturer_enable:

                    // admin_manufacturer_disable
                    if (preg_match('#^/admin/manufacturer/(?P<id>[^/]++)/disable$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_manufacturer_disable;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_manufacturer_disable')), array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\ManufacturerController::disableAction',));
                    }
                    not_admin_manufacturer_disable:

                    // admin_manufacturer_delete
                    if (preg_match('#^/admin/manufacturer/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_manufacturer_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_manufacturer_delete')), array (  'redirectPath' => NULL,  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\ManufacturerController::deleteAction',));
                    }
                    not_admin_manufacturer_delete:

                }

                if (0 === strpos($pathinfo, '/admin/product')) {
                    if (0 === strpos($pathinfo, '/admin/product/pack')) {
                        // admin_purchasable_pack_list
                        if (0 === strpos($pathinfo, '/admin/product/packs') && preg_match('#^/admin/product/packs(?:/(?P<page>\\d*)(?:/(?P<limit>\\d*)(?:/(?P<orderByField>[^/]++)(?:/(?P<orderByDirection>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_purchasable_pack_list;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_purchasable_pack_list')), array (  'page' => '1',  'limit' => '50',  'orderByField' => 'id',  'orderByDirection' => 'DESC',  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\PackController::listAction',));
                        }
                        not_admin_purchasable_pack_list:

                        // admin_purchasable_pack_view
                        if (preg_match('#^/admin/product/pack/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_purchasable_pack_view;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_purchasable_pack_view')), array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\PackController::editAction',));
                        }
                        not_admin_purchasable_pack_view:

                        // admin_purchasable_pack_edit
                        if (preg_match('#^/admin/product/pack/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_purchasable_pack_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_purchasable_pack_edit')), array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\PackController::editAction',));
                        }
                        not_admin_purchasable_pack_edit:

                        // admin_purchasable_pack_update
                        if (preg_match('#^/admin/product/pack/(?P<id>\\d+)/update$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_admin_purchasable_pack_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_purchasable_pack_update')), array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\PackController::editAction',));
                        }
                        not_admin_purchasable_pack_update:

                        if (0 === strpos($pathinfo, '/admin/product/pack/new')) {
                            // admin_purchasable_pack_new
                            if ($pathinfo === '/admin/product/pack/new') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_admin_purchasable_pack_new;
                                }

                                return array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\PackController::editAction',  '_route' => 'admin_purchasable_pack_new',);
                            }
                            not_admin_purchasable_pack_new:

                            // admin_purchasable_pack_save
                            if ($pathinfo === '/admin/product/pack/new/update') {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_admin_purchasable_pack_save;
                                }

                                return array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\PackController::editAction',  '_route' => 'admin_purchasable_pack_save',);
                            }
                            not_admin_purchasable_pack_save:

                        }

                        // admin_purchasable_pack_enable
                        if (preg_match('#^/admin/product/pack/(?P<id>[^/]++)/enable$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_admin_purchasable_pack_enable;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_purchasable_pack_enable')), array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\PackController::enableAction',));
                        }
                        not_admin_purchasable_pack_enable:

                        // admin_purchasable_pack_disable
                        if (preg_match('#^/admin/product/pack/(?P<id>[^/]++)/disable$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_admin_purchasable_pack_disable;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_purchasable_pack_disable')), array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\PackController::disableAction',));
                        }
                        not_admin_purchasable_pack_disable:

                        // admin_purchasable_pack_delete
                        if (preg_match('#^/admin/product/pack/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_admin_purchasable_pack_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_purchasable_pack_delete')), array (  'redirectPath' => NULL,  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\PackController::deleteAction',));
                        }
                        not_admin_purchasable_pack_delete:

                    }

                    // admin_product_list
                    if (0 === strpos($pathinfo, '/admin/products') && preg_match('#^/admin/products(?:/(?P<page>\\d*)(?:/(?P<limit>\\d*)(?:/(?P<orderByField>[^/]++)(?:/(?P<orderByDirection>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_product_list;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_list')), array (  'page' => '1',  'limit' => '50',  'orderByField' => 'id',  'orderByDirection' => 'DESC',  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\ProductController::listAction',));
                    }
                    not_admin_product_list:

                    // admin_product_view
                    if (preg_match('#^/admin/product/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_product_view;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_view')), array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\ProductController::editAction',));
                    }
                    not_admin_product_view:

                    // admin_product_edit
                    if (preg_match('#^/admin/product/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_product_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_edit')), array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\ProductController::editAction',));
                    }
                    not_admin_product_edit:

                    // admin_product_update
                    if (preg_match('#^/admin/product/(?P<id>\\d+)/update$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_product_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_update')), array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\ProductController::editAction',));
                    }
                    not_admin_product_update:

                    if (0 === strpos($pathinfo, '/admin/product/new')) {
                        // admin_product_new
                        if ($pathinfo === '/admin/product/new') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_product_new;
                            }

                            return array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\ProductController::editAction',  '_route' => 'admin_product_new',);
                        }
                        not_admin_product_new:

                        // admin_product_save
                        if ($pathinfo === '/admin/product/new/update') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_admin_product_save;
                            }

                            return array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\ProductController::editAction',  '_route' => 'admin_product_save',);
                        }
                        not_admin_product_save:

                    }

                    // admin_product_enable
                    if (preg_match('#^/admin/product/(?P<id>[^/]++)/enable$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_product_enable;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_enable')), array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\ProductController::enableAction',));
                    }
                    not_admin_product_enable:

                    // admin_product_disable
                    if (preg_match('#^/admin/product/(?P<id>[^/]++)/disable$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_product_disable;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_disable')), array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\ProductController::disableAction',));
                    }
                    not_admin_product_disable:

                    // admin_product_delete
                    if (preg_match('#^/admin/product/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_product_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_delete')), array (  'redirectPath' => NULL,  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\ProductController::deleteAction',));
                    }
                    not_admin_product_delete:

                    // admin_product_variant_edit
                    if (preg_match('#^/admin/product/(?P<productId>\\d+)/variant/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_product_variant_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_variant_edit')), array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\VariantController::editAction',));
                    }
                    not_admin_product_variant_edit:

                    // admin_product_variant_update
                    if (preg_match('#^/admin/product/(?P<productId>\\d+)/variant/(?P<id>\\d+)/update$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_product_variant_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_variant_update')), array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\VariantController::editAction',));
                    }
                    not_admin_product_variant_update:

                    // admin_product_variant_new
                    if (preg_match('#^/admin/product/(?P<productId>\\d+)/variant/new$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_product_variant_new;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_variant_new')), array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\VariantController::editAction',));
                    }
                    not_admin_product_variant_new:

                    // admin_product_variant_save
                    if (preg_match('#^/admin/product/(?P<productId>\\d+)/variant/new/update$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_product_variant_save;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_variant_save')), array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\VariantController::editAction',));
                    }
                    not_admin_product_variant_save:

                    // admin_product_variant_enable
                    if (preg_match('#^/admin/product/(?P<productId>\\d+)/variant/(?P<variantId>[^/]++)/enable$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_product_variant_enable;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_variant_enable')), array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\VariantController::enableAction',));
                    }
                    not_admin_product_variant_enable:

                    // admin_product_variant_disable
                    if (preg_match('#^/admin/product/(?P<productId>\\d+)/variant/(?P<variantId>[^/]++)/disable$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_product_variant_disable;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_variant_disable')), array (  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\VariantController::disableAction',));
                    }
                    not_admin_product_variant_disable:

                    // admin_product_variant_delete
                    if (preg_match('#^/admin/product/(?P<productId>\\d+)/variant/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_product_variant_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_variant_delete')), array (  'redirectPath' => NULL,  '_controller' => 'Elcodi\\Admin\\ProductBundle\\Controller\\VariantController::deleteAction',));
                    }
                    not_admin_product_variant_delete:

                }

                if (0 === strpos($pathinfo, '/admin/media/image')) {
                    if (0 === strpos($pathinfo, '/admin/media/images')) {
                        // admin_image_list_component
                        if ($pathinfo === '/admin/media/images/component') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_image_list_component;
                            }

                            return array (  '_controller' => 'Elcodi\\Admin\\MediaBundle\\Controller\\Component\\ImageComponentController::listComponentAction',  '_route' => 'admin_image_list_component',);
                        }
                        not_admin_image_list_component:

                        // admin_image_list
                        if (rtrim($pathinfo, '/') === '/admin/media/images') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_image_list;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'admin_image_list');
                            }

                            return array (  '_controller' => 'Elcodi\\Admin\\MediaBundle\\Controller\\ImageController::listAction',  '_route' => 'admin_image_list',);
                        }
                        not_admin_image_list:

                    }

                    // admin_image_enable
                    if (preg_match('#^/admin/media/image/(?P<id>[^/]++)/enable$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_image_enable;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_image_enable')), array (  '_controller' => 'Elcodi\\Admin\\MediaBundle\\Controller\\ImageController::enableAction',));
                    }
                    not_admin_image_enable:

                    // admin_image_disable
                    if (preg_match('#^/admin/media/image/(?P<id>[^/]++)/disable$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_image_disable;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_image_disable')), array (  '_controller' => 'Elcodi\\Admin\\MediaBundle\\Controller\\ImageController::disableAction',));
                    }
                    not_admin_image_disable:

                    // admin_image_delete
                    if (preg_match('#^/admin/media/image/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_image_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_image_delete')), array (  'redirectPath' => NULL,  '_controller' => 'Elcodi\\Admin\\MediaBundle\\Controller\\ImageController::deleteAction',));
                    }
                    not_admin_image_delete:

                    // admin_image_upload
                    if ($pathinfo === '/admin/media/image/upload') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_image_upload;
                        }

                        return array (  '_controller' => 'Elcodi\\Admin\\MediaBundle\\Controller\\ImageController::uploadAction',  '_route' => 'admin_image_upload',);
                    }
                    not_admin_image_upload:

                }

                if (0 === strpos($pathinfo, '/admin/newsletter/subscription')) {
                    // admin_newsletter_subscription_list_component
                    if (0 === strpos($pathinfo, '/admin/newsletter/subscriptions/component') && preg_match('#^/admin/newsletter/subscriptions/component(?:/(?P<page>\\d*)(?:/(?P<limit>\\d*)(?:/(?P<orderByField>[^/]++)(?:/(?P<orderByDirection>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_newsletter_subscription_list_component;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_newsletter_subscription_list_component')), array (  'page' => '1',  'limit' => '50',  'orderByField' => 'id',  'orderByDirection' => 'DESC',  '_controller' => 'Elcodi\\Admin\\NewsletterBundle\\Controller\\Component\\NewsletterSubscriptionComponentController::listComponentAction',));
                    }
                    not_admin_newsletter_subscription_list_component:

                    // admin_newsletter_subscription_view_component
                    if (0 === strpos($pathinfo, '/admin/newsletter/subscription/component') && preg_match('#^/admin/newsletter/subscription/component/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_newsletter_subscription_view_component;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_newsletter_subscription_view_component')), array (  '_controller' => 'Elcodi\\Admin\\NewsletterBundle\\Controller\\Component\\NewsletterSubscriptionComponentController::viewComponentAction',));
                    }
                    not_admin_newsletter_subscription_view_component:

                    // admin_newsletter_subscription_new_component
                    if ($pathinfo === '/admin/newsletter/subscription/new/component') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_newsletter_subscription_new_component;
                        }

                        return array (  '_controller' => 'Elcodi\\Admin\\NewsletterBundle\\Controller\\Component\\NewsletterSubscriptionComponentController::newComponentAction',  '_route' => 'admin_newsletter_subscription_new_component',);
                    }
                    not_admin_newsletter_subscription_new_component:

                    // admin_newsletter_subscription_edit_component
                    if (preg_match('#^/admin/newsletter/subscription/(?P<id>[^/]++)/edit/component$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_newsletter_subscription_edit_component;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_newsletter_subscription_edit_component')), array (  '_controller' => 'Elcodi\\Admin\\NewsletterBundle\\Controller\\Component\\NewsletterSubscriptionComponentController::editComponentAction',));
                    }
                    not_admin_newsletter_subscription_edit_component:

                    // admin_newsletter_subscription_list
                    if (0 === strpos($pathinfo, '/admin/newsletter/subscriptions') && preg_match('#^/admin/newsletter/subscriptions(?:/(?P<page>\\d*)(?:/(?P<limit>\\d*)(?:/(?P<orderByField>[^/]++)(?:/(?P<orderByDirection>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_newsletter_subscription_list;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_newsletter_subscription_list')), array (  'page' => '1',  'limit' => '50',  'orderByField' => 'id',  'orderByDirection' => 'DESC',  '_controller' => 'Elcodi\\Admin\\NewsletterBundle\\Controller\\NewsletterSubscriptionController::listAction',));
                    }
                    not_admin_newsletter_subscription_list:

                    // admin_newsletter_subscription_view
                    if (preg_match('#^/admin/newsletter/subscription/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_newsletter_subscription_view;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_newsletter_subscription_view')), array (  '_controller' => 'Elcodi\\Admin\\NewsletterBundle\\Controller\\NewsletterSubscriptionController::viewAction',));
                    }
                    not_admin_newsletter_subscription_view:

                    // admin_newsletter_subscription_new
                    if ($pathinfo === '/admin/newsletter/subscription/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_newsletter_subscription_new;
                        }

                        return array (  '_controller' => 'Elcodi\\Admin\\NewsletterBundle\\Controller\\NewsletterSubscriptionController::newAction',  '_route' => 'admin_newsletter_subscription_new',);
                    }
                    not_admin_newsletter_subscription_new:

                    // admin_newsletter_subscription_save
                    if ($pathinfo === '/admin/newsletter/subscription/save') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_newsletter_subscription_save;
                        }

                        return array (  '_controller' => 'Elcodi\\Admin\\NewsletterBundle\\Controller\\NewsletterSubscriptionController::saveAction',  '_route' => 'admin_newsletter_subscription_save',);
                    }
                    not_admin_newsletter_subscription_save:

                    // admin_newsletter_subscription_edit
                    if (preg_match('#^/admin/newsletter/subscription/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_newsletter_subscription_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_newsletter_subscription_edit')), array (  '_controller' => 'Elcodi\\Admin\\NewsletterBundle\\Controller\\NewsletterSubscriptionController::editAction',));
                    }
                    not_admin_newsletter_subscription_edit:

                    // admin_newsletter_subscription_update
                    if (preg_match('#^/admin/newsletter/subscription/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_newsletter_subscription_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_newsletter_subscription_update')), array (  '_controller' => 'Elcodi\\Admin\\NewsletterBundle\\Controller\\NewsletterSubscriptionController::updateAction',));
                    }
                    not_admin_newsletter_subscription_update:

                    // admin_newsletter_subscription_enable
                    if (preg_match('#^/admin/newsletter/subscription/(?P<id>[^/]++)/enable$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_newsletter_subscription_enable;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_newsletter_subscription_enable')), array (  '_controller' => 'Elcodi\\Admin\\NewsletterBundle\\Controller\\NewsletterSubscriptionController::enableAction',));
                    }
                    not_admin_newsletter_subscription_enable:

                    // admin_newsletter_subscription_disable
                    if (preg_match('#^/admin/newsletter/subscription/(?P<id>[^/]++)/disable$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_newsletter_subscription_disable;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_newsletter_subscription_disable')), array (  '_controller' => 'Elcodi\\Admin\\NewsletterBundle\\Controller\\NewsletterSubscriptionController::disableAction',));
                    }
                    not_admin_newsletter_subscription_disable:

                    // admin_newsletter_subscription_delete
                    if (preg_match('#^/admin/newsletter/subscription/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_newsletter_subscription_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_newsletter_subscription_delete')), array (  'redirectPath' => NULL,  '_controller' => 'Elcodi\\Admin\\NewsletterBundle\\Controller\\NewsletterSubscriptionController::deleteAction',));
                    }
                    not_admin_newsletter_subscription_delete:

                }

                if (0 === strpos($pathinfo, '/admin/blog/post')) {
                    // admin_blog_post_list
                    if (0 === strpos($pathinfo, '/admin/blog/posts') && preg_match('#^/admin/blog/posts(?:/(?P<page>\\d*)(?:/(?P<limit>\\d*)(?:/(?P<orderByField>[^/]++)(?:/(?P<orderByDirection>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_blog_post_list;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blog_post_list')), array (  'page' => '1',  'limit' => '50',  'orderByField' => 'id',  'orderByDirection' => 'DESC',  '_controller' => 'Elcodi\\Admin\\PageBundle\\Controller\\BlogPostController::listAction',));
                    }
                    not_admin_blog_post_list:

                    // admin_blog_post_edit
                    if (preg_match('#^/admin/blog/post/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_blog_post_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blog_post_edit')), array (  '_controller' => 'Elcodi\\Admin\\PageBundle\\Controller\\BlogPostController::editAction',));
                    }
                    not_admin_blog_post_edit:

                    // admin_blog_post_update
                    if (preg_match('#^/admin/blog/post/(?P<id>\\d+)/update$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_blog_post_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blog_post_update')), array (  '_controller' => 'Elcodi\\Admin\\PageBundle\\Controller\\BlogPostController::editAction',));
                    }
                    not_admin_blog_post_update:

                    // admin_blog_post_new
                    if ($pathinfo === '/admin/blog/post/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_blog_post_new;
                        }

                        return array (  '_controller' => 'Elcodi\\Admin\\PageBundle\\Controller\\BlogPostController::editAction',  '_route' => 'admin_blog_post_new',);
                    }
                    not_admin_blog_post_new:

                    // admin_blog_post_save
                    if ($pathinfo === '/admin/blog/post/save') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_blog_post_save;
                        }

                        return array (  '_controller' => 'Elcodi\\Admin\\PageBundle\\Controller\\BlogPostController::editAction',  '_route' => 'admin_blog_post_save',);
                    }
                    not_admin_blog_post_save:

                    // admin_blog_post_delete
                    if (preg_match('#^/admin/blog/post/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_blog_post_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blog_post_delete')), array (  'redirectPath' => NULL,  '_controller' => 'Elcodi\\Admin\\PageBundle\\Controller\\BlogPostController::deleteAction',));
                    }
                    not_admin_blog_post_delete:

                    // admin_blog_post_list_component
                    if (0 === strpos($pathinfo, '/admin/blog/posts/component') && preg_match('#^/admin/blog/posts/component(?:/(?P<page>\\d*)(?:/(?P<limit>\\d*)(?:/(?P<orderByField>[^/]++)(?:/(?P<orderByDirection>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_blog_post_list_component;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blog_post_list_component')), array (  'page' => '1',  'limit' => '50',  'orderByField' => 'id',  'orderByDirection' => 'DESC',  '_controller' => 'Elcodi\\Admin\\PageBundle\\Controller\\Component\\BlogPostComponentController::listComponentAction',));
                    }
                    not_admin_blog_post_list_component:

                    // admin_blog_post_edit_component
                    if (preg_match('#^/admin/blog/post/(?P<id>\\d+)/component$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_blog_post_edit_component;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blog_post_edit_component')), array (  '_controller' => 'Elcodi\\Admin\\PageBundle\\Controller\\Component\\BlogPostComponentController::editComponentAction',));
                    }
                    not_admin_blog_post_edit_component:

                    // admin_blog_post_new_component
                    if ($pathinfo === '/admin/blog/post/new/component') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_blog_post_new_component;
                        }

                        return array (  '_controller' => 'Elcodi\\Admin\\PageBundle\\Controller\\Component\\BlogPostComponentController::editComponentAction',  '_route' => 'admin_blog_post_new_component',);
                    }
                    not_admin_blog_post_new_component:

                }

                if (0 === strpos($pathinfo, '/admin/email')) {
                    // admin_email_list_component
                    if ($pathinfo === '/admin/emails') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_email_list_component;
                        }

                        return array (  '_controller' => 'Elcodi\\Admin\\PageBundle\\Controller\\Component\\EmailComponentController::listComponentAction',  '_route' => 'admin_email_list_component',);
                    }
                    not_admin_email_list_component:

                    // admin_email_edit_component
                    if (preg_match('#^/admin/email/(?P<id>\\d+)/component$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_email_edit_component;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_email_edit_component')), array (  '_controller' => 'Elcodi\\Admin\\PageBundle\\Controller\\Component\\EmailComponentController::editComponentAction',));
                    }
                    not_admin_email_edit_component:

                    // admin_email_new_component
                    if ($pathinfo === '/admin/email/new/component') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_email_new_component;
                        }

                        return array (  '_controller' => 'Elcodi\\Admin\\PageBundle\\Controller\\Component\\EmailComponentController::editComponentAction',  '_route' => 'admin_email_new_component',);
                    }
                    not_admin_email_new_component:

                }

                if (0 === strpos($pathinfo, '/admin/page')) {
                    // admin_page_list_component
                    if (0 === strpos($pathinfo, '/admin/pages/component') && preg_match('#^/admin/pages/component(?:/(?P<page>\\d*)(?:/(?P<limit>\\d*)(?:/(?P<orderByField>[^/]++)(?:/(?P<orderByDirection>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_page_list_component;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_page_list_component')), array (  'page' => '1',  'limit' => '50',  'orderByField' => 'id',  'orderByDirection' => 'DESC',  '_controller' => 'Elcodi\\Admin\\PageBundle\\Controller\\Component\\PageComponentController::listComponentAction',));
                    }
                    not_admin_page_list_component:

                    // admin_page_edit_component
                    if (preg_match('#^/admin/page/(?P<id>\\d+)/component$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_page_edit_component;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_page_edit_component')), array (  '_controller' => 'Elcodi\\Admin\\PageBundle\\Controller\\Component\\PageComponentController::editComponentAction',));
                    }
                    not_admin_page_edit_component:

                    // admin_page_new_component
                    if ($pathinfo === '/admin/page/new/component') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_page_new_component;
                        }

                        return array (  '_controller' => 'Elcodi\\Admin\\PageBundle\\Controller\\Component\\PageComponentController::editComponentAction',  '_route' => 'admin_page_new_component',);
                    }
                    not_admin_page_new_component:

                }

                if (0 === strpos($pathinfo, '/admin/email')) {
                    // admin_email_list
                    if (rtrim($pathinfo, '/') === '/admin/emails') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_email_list;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_email_list');
                        }

                        return array (  '_controller' => 'Elcodi\\Admin\\PageBundle\\Controller\\EmailController::listAction',  '_route' => 'admin_email_list',);
                    }
                    not_admin_email_list:

                    // admin_email_edit
                    if (preg_match('#^/admin/email/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_email_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_email_edit')), array (  '_controller' => 'Elcodi\\Admin\\PageBundle\\Controller\\EmailController::editAction',));
                    }
                    not_admin_email_edit:

                    // admin_email_update
                    if (preg_match('#^/admin/email/(?P<id>\\d+)/update$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_email_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_email_update')), array (  '_controller' => 'Elcodi\\Admin\\PageBundle\\Controller\\EmailController::editAction',));
                    }
                    not_admin_email_update:

                }

                if (0 === strpos($pathinfo, '/admin/page')) {
                    // admin_page_list
                    if (0 === strpos($pathinfo, '/admin/pages') && preg_match('#^/admin/pages(?:/(?P<page>\\d*)(?:/(?P<limit>\\d*)(?:/(?P<orderByField>[^/]++)(?:/(?P<orderByDirection>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_page_list;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_page_list')), array (  'page' => '1',  'limit' => '50',  'orderByField' => 'id',  'orderByDirection' => 'DESC',  '_controller' => 'Elcodi\\Admin\\PageBundle\\Controller\\PageController::listAction',));
                    }
                    not_admin_page_list:

                    // admin_page_edit
                    if (preg_match('#^/admin/page/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_page_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_page_edit')), array (  '_controller' => 'Elcodi\\Admin\\PageBundle\\Controller\\PageController::editAction',));
                    }
                    not_admin_page_edit:

                    // admin_page_update
                    if (preg_match('#^/admin/page/(?P<id>\\d+)/update$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_page_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_page_update')), array (  '_controller' => 'Elcodi\\Admin\\PageBundle\\Controller\\PageController::editAction',));
                    }
                    not_admin_page_update:

                    // admin_page_new
                    if ($pathinfo === '/admin/page/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_page_new;
                        }

                        return array (  '_controller' => 'Elcodi\\Admin\\PageBundle\\Controller\\PageController::editAction',  '_route' => 'admin_page_new',);
                    }
                    not_admin_page_new:

                    // admin_page_save
                    if ($pathinfo === '/admin/page/save') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_page_save;
                        }

                        return array (  '_controller' => 'Elcodi\\Admin\\PageBundle\\Controller\\PageController::editAction',  '_route' => 'admin_page_save',);
                    }
                    not_admin_page_save:

                    // admin_page_enable
                    if (preg_match('#^/admin/page/(?P<id>[^/]++)/enable$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_page_enable;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_page_enable')), array (  '_controller' => 'Elcodi\\Admin\\PageBundle\\Controller\\PageController::enableAction',));
                    }
                    not_admin_page_enable:

                    // admin_page_disable
                    if (preg_match('#^/admin/page/(?P<id>[^/]++)/disable$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_page_disable;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_page_disable')), array (  '_controller' => 'Elcodi\\Admin\\PageBundle\\Controller\\PageController::disableAction',));
                    }
                    not_admin_page_disable:

                    // admin_page_delete
                    if (preg_match('#^/admin/page/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_page_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_page_delete')), array (  'redirectPath' => NULL,  '_controller' => 'Elcodi\\Admin\\PageBundle\\Controller\\PageController::deleteAction',));
                    }
                    not_admin_page_delete:

                }

                if (0 === strpos($pathinfo, '/admin/template')) {
                    // admin_template_list
                    if ($pathinfo === '/admin/templates') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_template_list;
                        }

                        return array (  '_controller' => 'Elcodi\\Admin\\TemplateBundle\\Controller\\TemplateController::listAction',  '_route' => 'admin_template_list',);
                    }
                    not_admin_template_list:

                    // admin_template_assign
                    if (0 === strpos($pathinfo, '/admin/template/assign') && preg_match('#^/admin/template/assign/(?P<hash>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_template_assign;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_template_assign')), array (  '_controller' => 'Elcodi\\Admin\\TemplateBundle\\Controller\\TemplateController::assignAction',));
                    }
                    not_admin_template_assign:

                }

                if (0 === strpos($pathinfo, '/admin/p')) {
                    if (0 === strpos($pathinfo, '/admin/plugin')) {
                        if (0 === strpos($pathinfo, '/admin/plugins')) {
                            // admin_plugin_list
                            if ($pathinfo === '/admin/plugins') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_admin_plugin_list;
                                }

                                return array (  'category' => NULL,  '_controller' => 'Elcodi\\Admin\\PluginBundle\\Controller\\PluginController::listAction',  '_route' => 'admin_plugin_list',);
                            }
                            not_admin_plugin_list:

                            // admin_plugin_categorized_list
                            if (preg_match('#^/admin/plugins(?:/(?P<category>[^/]++))?$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_admin_plugin_categorized_list;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_plugin_categorized_list')), array (  'category' => NULL,  '_controller' => 'Elcodi\\Admin\\PluginBundle\\Controller\\PluginController::listAction',));
                            }
                            not_admin_plugin_categorized_list:

                        }

                        // admin_plugin_configure
                        if (preg_match('#^/admin/plugin/(?P<pluginHash>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_admin_plugin_configure;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_plugin_configure')), array (  '_controller' => 'Elcodi\\Admin\\PluginBundle\\Controller\\PluginController::configureAction',));
                        }
                        not_admin_plugin_configure:

                        // admin_plugin_enable
                        if (preg_match('#^/admin/plugin/(?P<pluginHash>[^/]++)/enable$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_admin_plugin_enable;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_plugin_enable')), array (  '_controller' => 'Elcodi\\Admin\\PluginBundle\\Controller\\PluginController::enablePluginAction',));
                        }
                        not_admin_plugin_enable:

                    }

                    if (0 === strpos($pathinfo, '/admin/panel')) {
                        // admin_metric_panel_today
                        if ($pathinfo === '/admin/panel/today') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_metric_panel_today;
                            }

                            return array (  '_controller' => 'Elcodi\\Admin\\MetricBundle\\Controller\\PanelController::metricPanelTodayAction',  '_route' => 'admin_metric_panel_today',);
                        }
                        not_admin_metric_panel_today:

                        // admin_metric_panel_yesterday
                        if ($pathinfo === '/admin/panel/yesterday') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_metric_panel_yesterday;
                            }

                            return array (  '_controller' => 'Elcodi\\Admin\\MetricBundle\\Controller\\PanelController::metricPanelYesterdayAction',  '_route' => 'admin_metric_panel_yesterday',);
                        }
                        not_admin_metric_panel_yesterday:

                        if (0 === strpos($pathinfo, '/admin/panel/last')) {
                            // admin_metric_panel_last_week
                            if ($pathinfo === '/admin/panel/last/week') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_admin_metric_panel_last_week;
                                }

                                return array (  '_controller' => 'Elcodi\\Admin\\MetricBundle\\Controller\\PanelController::metricPanelLastWeekAction',  '_route' => 'admin_metric_panel_last_week',);
                            }
                            not_admin_metric_panel_last_week:

                            // admin_metric_panel_last_month
                            if ($pathinfo === '/admin/panel/last/month') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_admin_metric_panel_last_month;
                                }

                                return array (  '_controller' => 'Elcodi\\Admin\\MetricBundle\\Controller\\PanelController::metricPanelLastMonthAction',  '_route' => 'admin_metric_panel_last_month',);
                            }
                            not_admin_metric_panel_last_month:

                            // admin_metric_panel_last_quarter
                            if ($pathinfo === '/admin/panel/last/quarter') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_admin_metric_panel_last_quarter;
                                }

                                return array (  '_controller' => 'Elcodi\\Admin\\MetricBundle\\Controller\\PanelController::metricPanelLastQuarterAction',  '_route' => 'admin_metric_panel_last_quarter',);
                            }
                            not_admin_metric_panel_last_quarter:

                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/reports')) {
                    // admin_reports_today
                    if ($pathinfo === '/admin/reports/today') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_reports_today;
                        }

                        return array (  'panel' => 'metricPanelToday',  '_controller' => 'Elcodi\\Admin\\MetricBundle\\Controller\\ReportsController::viewAction',  '_route' => 'admin_reports_today',);
                    }
                    not_admin_reports_today:

                    // admin_reports_yesterday
                    if ($pathinfo === '/admin/reports/yesterday') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_reports_yesterday;
                        }

                        return array (  'panel' => 'metricPanelYesterday',  '_controller' => 'Elcodi\\Admin\\MetricBundle\\Controller\\ReportsController::viewAction',  '_route' => 'admin_reports_yesterday',);
                    }
                    not_admin_reports_yesterday:

                    if (0 === strpos($pathinfo, '/admin/reports/last')) {
                        // admin_reports_last_week
                        if ($pathinfo === '/admin/reports/last/week') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_reports_last_week;
                            }

                            return array (  'panel' => 'metricPanelLastWeek',  '_controller' => 'Elcodi\\Admin\\MetricBundle\\Controller\\ReportsController::viewAction',  '_route' => 'admin_reports_last_week',);
                        }
                        not_admin_reports_last_week:

                        // admin_reports_last_month
                        if ($pathinfo === '/admin/reports/last/month') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_reports_last_month;
                            }

                            return array (  'panel' => 'metricPanelLastMonth',  '_controller' => 'Elcodi\\Admin\\MetricBundle\\Controller\\ReportsController::viewAction',  '_route' => 'admin_reports_last_month',);
                        }
                        not_admin_reports_last_month:

                        // admin_reports_last_quarter
                        if ($pathinfo === '/admin/reports/last/quarter') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_reports_last_quarter;
                            }

                            return array (  'panel' => 'metricPanelLastQuarter',  '_controller' => 'Elcodi\\Admin\\MetricBundle\\Controller\\ReportsController::viewAction',  '_route' => 'admin_reports_last_quarter',);
                        }
                        not_admin_reports_last_quarter:

                    }

                }

                if (0 === strpos($pathinfo, '/admin/l')) {
                    // admin_location_selectors
                    if (0 === strpos($pathinfo, '/admin/location/selectors') && preg_match('#^/admin/location/selectors(?:/(?P<locationId>[^/]++))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_location_selectors;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_location_selectors')), array (  'locationId' => NULL,  '_controller' => 'Elcodi\\Admin\\GeoBundle\\Controller\\LocationController::showCitySelectorAction',));
                    }
                    not_admin_location_selectors:

                    if (0 === strpos($pathinfo, '/admin/language')) {
                        if (0 === strpos($pathinfo, '/admin/languages')) {
                            // admin_language_list_component
                            if ($pathinfo === '/admin/languages/component') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_admin_language_list_component;
                                }

                                return array (  '_controller' => 'Elcodi\\Admin\\LanguageBundle\\Controller\\Components\\LanguageComponentController::listComponentAction',  '_route' => 'admin_language_list_component',);
                            }
                            not_admin_language_list_component:

                            // admin_language_list
                            if ($pathinfo === '/admin/languages/list') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_admin_language_list;
                                }

                                return array (  '_controller' => 'Elcodi\\Admin\\LanguageBundle\\Controller\\LanguageController::listAction',  '_route' => 'admin_language_list',);
                            }
                            not_admin_language_list:

                        }

                        // admin_language_enable
                        if (preg_match('#^/admin/language/(?P<iso>[^/]++)/enable$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_admin_language_enable;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_language_enable')), array (  '_controller' => 'Elcodi\\Admin\\LanguageBundle\\Controller\\LanguageController::enableLanguageAction',));
                        }
                        not_admin_language_enable:

                        // admin_language_disable
                        if (preg_match('#^/admin/language/(?P<iso>[^/]++)/disable$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_admin_language_disable;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_language_disable')), array (  '_controller' => 'Elcodi\\Admin\\LanguageBundle\\Controller\\LanguageController::disableLanguageAction',));
                        }
                        not_admin_language_disable:

                        // admin_language_master
                        if (preg_match('#^/admin/language/(?P<iso>[^/]++)/master$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_admin_language_master;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_language_master')), array (  '_controller' => 'Elcodi\\Admin\\LanguageBundle\\Controller\\LanguageController::masterLanguageAction',));
                        }
                        not_admin_language_master:

                    }

                }

                if (0 === strpos($pathinfo, '/admin/store')) {
                    // admin_store_settings
                    if ($pathinfo === '/admin/store/settings') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_store_settings;
                        }

                        return array (  '_controller' => 'Elcodi\\Admin\\StoreBundle\\Controller\\StoreController::settingsAction',  '_route' => 'admin_store_settings',);
                    }
                    not_admin_store_settings:

                    // admin_store_address
                    if ($pathinfo === '/admin/store/address') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_store_address;
                        }

                        return array (  '_controller' => 'Elcodi\\Admin\\StoreBundle\\Controller\\StoreController::addressAction',  '_route' => 'admin_store_address',);
                    }
                    not_admin_store_address:

                    // admin_store_corporate
                    if ($pathinfo === '/admin/store/profile') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_store_corporate;
                        }

                        return array (  '_controller' => 'Elcodi\\Admin\\StoreBundle\\Controller\\StoreController::corporateAction',  '_route' => 'admin_store_corporate',);
                    }
                    not_admin_store_corporate:

                }

                if (0 === strpos($pathinfo, '/admin/log')) {
                    // admin_login_check
                    if ($pathinfo === '/admin/login_check') {
                        return array('_route' => 'admin_login_check');
                    }

                    // admin_logout
                    if ($pathinfo === '/admin/logout') {
                        return array('_route' => 'admin_logout');
                    }

                }

            }

            if (0 === strpos($pathinfo, '/api')) {
                // elcodi.route.metric_input
                if (0 === strpos($pathinfo, '/api/_m') && preg_match('#^/api/_m/(?P<token>[^/]++)/(?P<event>[^/\\.]++)\\.png$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_elcodiroutemetric_input;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'elcodi.route.metric_input')), array (  '_controller' => 'elcodi.controller.metric_input:addEntryAction',));
                }
                not_elcodiroutemetric_input:

                if (0 === strpos($pathinfo, '/api/comments')) {
                    // elcodi_comments_list
                    if (preg_match('#^/api/comments/(?P<source>.+)/(?P<context>.+)/list$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_elcodi_comments_list;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'elcodi_comments_list')), array (  '_controller' => 'elcodi.controller.comment:listCommentsAction',));
                    }
                    not_elcodi_comments_list:

                    // elcodi_comments_add
                    if (preg_match('#^/api/comments/(?P<authorToken>.+)/(?P<source>.+)/(?P<context>.+)/add$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_elcodi_comments_add;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'elcodi_comments_add')), array (  '_controller' => 'elcodi.controller.comment:addCommentAction',));
                    }
                    not_elcodi_comments_add:

                    // elcodi_comments_edit
                    if (preg_match('#^/api/comments/(?P<authorToken>.+)/(?P<commentId>\\d+)/edit$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_elcodi_comments_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'elcodi_comments_edit')), array (  '_controller' => 'elcodi.controller.comment:editCommentAction',));
                    }
                    not_elcodi_comments_edit:

                    // elcodi_comments_delete
                    if (preg_match('#^/api/comments/(?P<authorToken>.+)/(?P<commentId>\\d+)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_elcodi_comments_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'elcodi_comments_delete')), array (  '_controller' => 'elcodi.controller.comment:deleteCommentAction',));
                    }
                    not_elcodi_comments_delete:

                }

                if (0 === strpos($pathinfo, '/api/locations')) {
                    // elcodi.route.location_api_root_locations
                    if ($pathinfo === '/api/locations/root') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_elcodiroutelocation_api_root_locations;
                        }

                        return array (  '_controller' => 'elcodi.controller.location_api:getRootLocationsAction',  '_route' => 'elcodi.route.location_api_root_locations',);
                    }
                    not_elcodiroutelocation_api_root_locations:

                    // elcodi.route.location_api_children
                    if ($pathinfo === '/api/locations/children') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_elcodiroutelocation_api_children;
                        }

                        return array (  '_controller' => 'elcodi.controller.location_api:getChildrenAction',  '_route' => 'elcodi.route.location_api_children',);
                    }
                    not_elcodiroutelocation_api_children:

                    // elcodi.route.location_api_parents
                    if ($pathinfo === '/api/locations/parents') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_elcodiroutelocation_api_parents;
                        }

                        return array (  '_controller' => 'elcodi.controller.location_api:getParentsAction',  '_route' => 'elcodi.route.location_api_parents',);
                    }
                    not_elcodiroutelocation_api_parents:

                    // elcodi.route.location_api_location
                    if ($pathinfo === '/api/locations/location') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_elcodiroutelocation_api_location;
                        }

                        return array (  '_controller' => 'elcodi.controller.location_api:getLocationAction',  '_route' => 'elcodi.route.location_api_location',);
                    }
                    not_elcodiroutelocation_api_location:

                    // elcodi.route.location_api_hierarchy
                    if ($pathinfo === '/api/locations/hierarchy') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_elcodiroutelocation_api_hierarchy;
                        }

                        return array (  '_controller' => 'elcodi.controller.location_api:getHierarchyAction',  '_route' => 'elcodi.route.location_api_hierarchy',);
                    }
                    not_elcodiroutelocation_api_hierarchy:

                    // elcodi.route.location_api_in
                    if ($pathinfo === '/api/locations/in') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_elcodiroutelocation_api_in;
                        }

                        return array (  '_controller' => 'elcodi.controller.location_api:inAction',  '_route' => 'elcodi.route.location_api_in',);
                    }
                    not_elcodiroutelocation_api_in:

                }

            }

        }

        if (0 === strpos($pathinfo, '/images')) {
            // elcodi.route.image_resize
            if (preg_match('#^/images/(?P<id>[^/]++)/resize/(?P<height>[^/]++)/(?P<width>[^/]++)/(?P<type>[^/\\.]++)\\.(?P<_format>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_elcodirouteimage_resize;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'elcodi.route.image_resize')), array (  '_controller' => 'elcodi.controller.image_resize:resizeAction',));
            }
            not_elcodirouteimage_resize:

            // elcodi.route.image_view
            if (preg_match('#^/images/(?P<id>[^/]++)/render\\.(?P<_format>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_elcodirouteimage_view;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'elcodi.route.image_view')), array (  '_controller' => 'elcodi.controller.image_resize:resizeAction',  'height' => 0,  'width' => 0,  'type' => 0,));
            }
            not_elcodirouteimage_view:

            // elcodi.route.image_upload
            if ($pathinfo === '/images/upload') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_elcodirouteimage_upload;
                }

                return array (  '_controller' => 'elcodi.controller.image_upload:uploadAction',  '_route' => 'elcodi.route.image_upload',);
            }
            not_elcodirouteimage_upload:

        }

        // ca__RG__paymentsuite_bankwire_execute
        if ($pathinfo === '/ca/payment/bankwire/execute') {
            return array (  '_controller' => 'paymentsuite.bankwire.payment_controller:executeAction',  '_locale' => 'ca',  '_route' => 'ca__RG__paymentsuite_bankwire_execute',);
        }

        // de__RG__paymentsuite_bankwire_execute
        if ($pathinfo === '/de/payment/bankwire/execute') {
            return array (  '_controller' => 'paymentsuite.bankwire.payment_controller:executeAction',  '_locale' => 'de',  '_route' => 'de__RG__paymentsuite_bankwire_execute',);
        }

        // en__RG__paymentsuite_bankwire_execute
        if ($pathinfo === '/payment/bankwire/execute') {
            return array (  '_controller' => 'paymentsuite.bankwire.payment_controller:executeAction',  '_locale' => 'en',  '_route' => 'en__RG__paymentsuite_bankwire_execute',);
        }

        // es__RG__paymentsuite_bankwire_execute
        if ($pathinfo === '/es/payment/bankwire/execute') {
            return array (  '_controller' => 'paymentsuite.bankwire.payment_controller:executeAction',  '_locale' => 'es',  '_route' => 'es__RG__paymentsuite_bankwire_execute',);
        }

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__paymentsuite_bankwire_execute
            if ($pathinfo === '/fi/payment/bankwire/execute') {
                return array (  '_controller' => 'paymentsuite.bankwire.payment_controller:executeAction',  '_locale' => 'fi',  '_route' => 'fi__RG__paymentsuite_bankwire_execute',);
            }

            // fr__RG__paymentsuite_bankwire_execute
            if ($pathinfo === '/fr/payment/bankwire/execute') {
                return array (  '_controller' => 'paymentsuite.bankwire.payment_controller:executeAction',  '_locale' => 'fr',  '_route' => 'fr__RG__paymentsuite_bankwire_execute',);
            }

        }

        // gl__RG__paymentsuite_bankwire_execute
        if ($pathinfo === '/gl/payment/bankwire/execute') {
            return array (  '_controller' => 'paymentsuite.bankwire.payment_controller:executeAction',  '_locale' => 'gl',  '_route' => 'gl__RG__paymentsuite_bankwire_execute',);
        }

        // sr__RG__paymentsuite_bankwire_execute
        if ($pathinfo === '/sr/payment/bankwire/execute') {
            return array (  '_controller' => 'paymentsuite.bankwire.payment_controller:executeAction',  '_locale' => 'sr',  '_route' => 'sr__RG__paymentsuite_bankwire_execute',);
        }

        // ca__RG__admin_carrier_list
        if ($pathinfo === '/ca/admin/carriers') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__admin_carrier_list;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::listAction',  '_locale' => 'ca',  '_route' => 'ca__RG__admin_carrier_list',);
        }
        not_ca__RG__admin_carrier_list:

        // de__RG__admin_carrier_list
        if ($pathinfo === '/de/admin/carriers') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__admin_carrier_list;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::listAction',  '_locale' => 'de',  '_route' => 'de__RG__admin_carrier_list',);
        }
        not_de__RG__admin_carrier_list:

        // en__RG__admin_carrier_list
        if ($pathinfo === '/admin/carriers') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__admin_carrier_list;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::listAction',  '_locale' => 'en',  '_route' => 'en__RG__admin_carrier_list',);
        }
        not_en__RG__admin_carrier_list:

        // es__RG__admin_carrier_list
        if ($pathinfo === '/es/admin/carriers') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__admin_carrier_list;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::listAction',  '_locale' => 'es',  '_route' => 'es__RG__admin_carrier_list',);
        }
        not_es__RG__admin_carrier_list:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__admin_carrier_list
            if ($pathinfo === '/fi/admin/carriers') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__admin_carrier_list;
                }

                return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::listAction',  '_locale' => 'fi',  '_route' => 'fi__RG__admin_carrier_list',);
            }
            not_fi__RG__admin_carrier_list:

            // fr__RG__admin_carrier_list
            if ($pathinfo === '/fr/admin/carriers') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__admin_carrier_list;
                }

                return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::listAction',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_carrier_list',);
            }
            not_fr__RG__admin_carrier_list:

        }

        // gl__RG__admin_carrier_list
        if ($pathinfo === '/gl/admin/carriers') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__admin_carrier_list;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::listAction',  '_locale' => 'gl',  '_route' => 'gl__RG__admin_carrier_list',);
        }
        not_gl__RG__admin_carrier_list:

        // sr__RG__admin_carrier_list
        if ($pathinfo === '/sr/admin/carriers') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__admin_carrier_list;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::listAction',  '_locale' => 'sr',  '_route' => 'sr__RG__admin_carrier_list',);
        }
        not_sr__RG__admin_carrier_list:

        // ca__RG__admin_carrier_edit
        if (0 === strpos($pathinfo, '/ca/admin/carrier') && preg_match('#^/ca/admin/carrier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__admin_carrier_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ca__RG__admin_carrier_edit')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::editAction',  '_locale' => 'ca',));
        }
        not_ca__RG__admin_carrier_edit:

        // de__RG__admin_carrier_edit
        if (0 === strpos($pathinfo, '/de/admin/carrier') && preg_match('#^/de/admin/carrier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__admin_carrier_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__admin_carrier_edit')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::editAction',  '_locale' => 'de',));
        }
        not_de__RG__admin_carrier_edit:

        // en__RG__admin_carrier_edit
        if (0 === strpos($pathinfo, '/admin/carrier') && preg_match('#^/admin/carrier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__admin_carrier_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_carrier_edit')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::editAction',  '_locale' => 'en',));
        }
        not_en__RG__admin_carrier_edit:

        // es__RG__admin_carrier_edit
        if (0 === strpos($pathinfo, '/es/admin/carrier') && preg_match('#^/es/admin/carrier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__admin_carrier_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'es__RG__admin_carrier_edit')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::editAction',  '_locale' => 'es',));
        }
        not_es__RG__admin_carrier_edit:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__admin_carrier_edit
            if (0 === strpos($pathinfo, '/fi/admin/carrier') && preg_match('#^/fi/admin/carrier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__admin_carrier_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fi__RG__admin_carrier_edit')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::editAction',  '_locale' => 'fi',));
            }
            not_fi__RG__admin_carrier_edit:

            // fr__RG__admin_carrier_edit
            if (0 === strpos($pathinfo, '/fr/admin/carrier') && preg_match('#^/fr/admin/carrier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__admin_carrier_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_carrier_edit')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::editAction',  '_locale' => 'fr',));
            }
            not_fr__RG__admin_carrier_edit:

        }

        // gl__RG__admin_carrier_edit
        if (0 === strpos($pathinfo, '/gl/admin/carrier') && preg_match('#^/gl/admin/carrier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__admin_carrier_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gl__RG__admin_carrier_edit')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::editAction',  '_locale' => 'gl',));
        }
        not_gl__RG__admin_carrier_edit:

        // sr__RG__admin_carrier_edit
        if (0 === strpos($pathinfo, '/sr/admin/carrier') && preg_match('#^/sr/admin/carrier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__admin_carrier_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr__RG__admin_carrier_edit')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::editAction',  '_locale' => 'sr',));
        }
        not_sr__RG__admin_carrier_edit:

        // ca__RG__admin_carrier_update
        if (0 === strpos($pathinfo, '/ca/admin/carrier') && preg_match('#^/ca/admin/carrier/(?P<id>\\d+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ca__RG__admin_carrier_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ca__RG__admin_carrier_update')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::editAction',  '_locale' => 'ca',));
        }
        not_ca__RG__admin_carrier_update:

        // de__RG__admin_carrier_update
        if (0 === strpos($pathinfo, '/de/admin/carrier') && preg_match('#^/de/admin/carrier/(?P<id>\\d+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_de__RG__admin_carrier_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__admin_carrier_update')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::editAction',  '_locale' => 'de',));
        }
        not_de__RG__admin_carrier_update:

        // en__RG__admin_carrier_update
        if (0 === strpos($pathinfo, '/admin/carrier') && preg_match('#^/admin/carrier/(?P<id>\\d+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__admin_carrier_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_carrier_update')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::editAction',  '_locale' => 'en',));
        }
        not_en__RG__admin_carrier_update:

        // es__RG__admin_carrier_update
        if (0 === strpos($pathinfo, '/es/admin/carrier') && preg_match('#^/es/admin/carrier/(?P<id>\\d+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_es__RG__admin_carrier_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'es__RG__admin_carrier_update')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::editAction',  '_locale' => 'es',));
        }
        not_es__RG__admin_carrier_update:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__admin_carrier_update
            if (0 === strpos($pathinfo, '/fi/admin/carrier') && preg_match('#^/fi/admin/carrier/(?P<id>\\d+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fi__RG__admin_carrier_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fi__RG__admin_carrier_update')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::editAction',  '_locale' => 'fi',));
            }
            not_fi__RG__admin_carrier_update:

            // fr__RG__admin_carrier_update
            if (0 === strpos($pathinfo, '/fr/admin/carrier') && preg_match('#^/fr/admin/carrier/(?P<id>\\d+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fr__RG__admin_carrier_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_carrier_update')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::editAction',  '_locale' => 'fr',));
            }
            not_fr__RG__admin_carrier_update:

        }

        // gl__RG__admin_carrier_update
        if (0 === strpos($pathinfo, '/gl/admin/carrier') && preg_match('#^/gl/admin/carrier/(?P<id>\\d+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_gl__RG__admin_carrier_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gl__RG__admin_carrier_update')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::editAction',  '_locale' => 'gl',));
        }
        not_gl__RG__admin_carrier_update:

        // sr__RG__admin_carrier_update
        if (0 === strpos($pathinfo, '/sr/admin/carrier') && preg_match('#^/sr/admin/carrier/(?P<id>\\d+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_sr__RG__admin_carrier_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr__RG__admin_carrier_update')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::editAction',  '_locale' => 'sr',));
        }
        not_sr__RG__admin_carrier_update:

        // ca__RG__admin_carrier_new
        if ($pathinfo === '/ca/admin/carrier/new') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__admin_carrier_new;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::editAction',  '_locale' => 'ca',  '_route' => 'ca__RG__admin_carrier_new',);
        }
        not_ca__RG__admin_carrier_new:

        // de__RG__admin_carrier_new
        if ($pathinfo === '/de/admin/carrier/new') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__admin_carrier_new;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::editAction',  '_locale' => 'de',  '_route' => 'de__RG__admin_carrier_new',);
        }
        not_de__RG__admin_carrier_new:

        // en__RG__admin_carrier_new
        if ($pathinfo === '/admin/carrier/new') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__admin_carrier_new;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::editAction',  '_locale' => 'en',  '_route' => 'en__RG__admin_carrier_new',);
        }
        not_en__RG__admin_carrier_new:

        // es__RG__admin_carrier_new
        if ($pathinfo === '/es/admin/carrier/new') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__admin_carrier_new;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::editAction',  '_locale' => 'es',  '_route' => 'es__RG__admin_carrier_new',);
        }
        not_es__RG__admin_carrier_new:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__admin_carrier_new
            if ($pathinfo === '/fi/admin/carrier/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__admin_carrier_new;
                }

                return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::editAction',  '_locale' => 'fi',  '_route' => 'fi__RG__admin_carrier_new',);
            }
            not_fi__RG__admin_carrier_new:

            // fr__RG__admin_carrier_new
            if ($pathinfo === '/fr/admin/carrier/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__admin_carrier_new;
                }

                return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::editAction',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_carrier_new',);
            }
            not_fr__RG__admin_carrier_new:

        }

        // gl__RG__admin_carrier_new
        if ($pathinfo === '/gl/admin/carrier/new') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__admin_carrier_new;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::editAction',  '_locale' => 'gl',  '_route' => 'gl__RG__admin_carrier_new',);
        }
        not_gl__RG__admin_carrier_new:

        // sr__RG__admin_carrier_new
        if ($pathinfo === '/sr/admin/carrier/new') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__admin_carrier_new;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::editAction',  '_locale' => 'sr',  '_route' => 'sr__RG__admin_carrier_new',);
        }
        not_sr__RG__admin_carrier_new:

        // ca__RG__admin_carrier_save
        if ($pathinfo === '/ca/admin/carrier/new/update') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ca__RG__admin_carrier_save;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::editAction',  '_locale' => 'ca',  '_route' => 'ca__RG__admin_carrier_save',);
        }
        not_ca__RG__admin_carrier_save:

        // de__RG__admin_carrier_save
        if ($pathinfo === '/de/admin/carrier/new/update') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_de__RG__admin_carrier_save;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::editAction',  '_locale' => 'de',  '_route' => 'de__RG__admin_carrier_save',);
        }
        not_de__RG__admin_carrier_save:

        // en__RG__admin_carrier_save
        if ($pathinfo === '/admin/carrier/new/update') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__admin_carrier_save;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::editAction',  '_locale' => 'en',  '_route' => 'en__RG__admin_carrier_save',);
        }
        not_en__RG__admin_carrier_save:

        // es__RG__admin_carrier_save
        if ($pathinfo === '/es/admin/carrier/new/update') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_es__RG__admin_carrier_save;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::editAction',  '_locale' => 'es',  '_route' => 'es__RG__admin_carrier_save',);
        }
        not_es__RG__admin_carrier_save:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__admin_carrier_save
            if ($pathinfo === '/fi/admin/carrier/new/update') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fi__RG__admin_carrier_save;
                }

                return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::editAction',  '_locale' => 'fi',  '_route' => 'fi__RG__admin_carrier_save',);
            }
            not_fi__RG__admin_carrier_save:

            // fr__RG__admin_carrier_save
            if ($pathinfo === '/fr/admin/carrier/new/update') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fr__RG__admin_carrier_save;
                }

                return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::editAction',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_carrier_save',);
            }
            not_fr__RG__admin_carrier_save:

        }

        // gl__RG__admin_carrier_save
        if ($pathinfo === '/gl/admin/carrier/new/update') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_gl__RG__admin_carrier_save;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::editAction',  '_locale' => 'gl',  '_route' => 'gl__RG__admin_carrier_save',);
        }
        not_gl__RG__admin_carrier_save:

        // sr__RG__admin_carrier_save
        if ($pathinfo === '/sr/admin/carrier/new/update') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_sr__RG__admin_carrier_save;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::editAction',  '_locale' => 'sr',  '_route' => 'sr__RG__admin_carrier_save',);
        }
        not_sr__RG__admin_carrier_save:

        // ca__RG__admin_carrier_delete
        if (0 === strpos($pathinfo, '/ca/admin/carrier') && preg_match('#^/ca/admin/carrier/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_ca__RG__admin_carrier_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ca__RG__admin_carrier_delete')), array (  'redirectPath' => NULL,  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::deleteAction',  '_locale' => 'ca',));
        }
        not_ca__RG__admin_carrier_delete:

        // de__RG__admin_carrier_delete
        if (0 === strpos($pathinfo, '/de/admin/carrier') && preg_match('#^/de/admin/carrier/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_de__RG__admin_carrier_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__admin_carrier_delete')), array (  'redirectPath' => NULL,  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::deleteAction',  '_locale' => 'de',));
        }
        not_de__RG__admin_carrier_delete:

        // en__RG__admin_carrier_delete
        if (0 === strpos($pathinfo, '/admin/carrier') && preg_match('#^/admin/carrier/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__admin_carrier_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_carrier_delete')), array (  'redirectPath' => NULL,  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::deleteAction',  '_locale' => 'en',));
        }
        not_en__RG__admin_carrier_delete:

        // es__RG__admin_carrier_delete
        if (0 === strpos($pathinfo, '/es/admin/carrier') && preg_match('#^/es/admin/carrier/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_es__RG__admin_carrier_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'es__RG__admin_carrier_delete')), array (  'redirectPath' => NULL,  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::deleteAction',  '_locale' => 'es',));
        }
        not_es__RG__admin_carrier_delete:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__admin_carrier_delete
            if (0 === strpos($pathinfo, '/fi/admin/carrier') && preg_match('#^/fi/admin/carrier/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fi__RG__admin_carrier_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fi__RG__admin_carrier_delete')), array (  'redirectPath' => NULL,  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::deleteAction',  '_locale' => 'fi',));
            }
            not_fi__RG__admin_carrier_delete:

            // fr__RG__admin_carrier_delete
            if (0 === strpos($pathinfo, '/fr/admin/carrier') && preg_match('#^/fr/admin/carrier/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fr__RG__admin_carrier_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_carrier_delete')), array (  'redirectPath' => NULL,  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::deleteAction',  '_locale' => 'fr',));
            }
            not_fr__RG__admin_carrier_delete:

        }

        // gl__RG__admin_carrier_delete
        if (0 === strpos($pathinfo, '/gl/admin/carrier') && preg_match('#^/gl/admin/carrier/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_gl__RG__admin_carrier_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gl__RG__admin_carrier_delete')), array (  'redirectPath' => NULL,  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::deleteAction',  '_locale' => 'gl',));
        }
        not_gl__RG__admin_carrier_delete:

        // sr__RG__admin_carrier_delete
        if (0 === strpos($pathinfo, '/sr/admin/carrier') && preg_match('#^/sr/admin/carrier/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_sr__RG__admin_carrier_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr__RG__admin_carrier_delete')), array (  'redirectPath' => NULL,  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\CarrierController::deleteAction',  '_locale' => 'sr',));
        }
        not_sr__RG__admin_carrier_delete:

        // ca__RG__admin_carrier_list_component
        if ($pathinfo === '/ca/admin/carriers/component') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__admin_carrier_list_component;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\CarrierComponentController::listComponentAction',  '_locale' => 'ca',  '_route' => 'ca__RG__admin_carrier_list_component',);
        }
        not_ca__RG__admin_carrier_list_component:

        // de__RG__admin_carrier_list_component
        if ($pathinfo === '/de/admin/carriers/component') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__admin_carrier_list_component;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\CarrierComponentController::listComponentAction',  '_locale' => 'de',  '_route' => 'de__RG__admin_carrier_list_component',);
        }
        not_de__RG__admin_carrier_list_component:

        // en__RG__admin_carrier_list_component
        if ($pathinfo === '/admin/carriers/component') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__admin_carrier_list_component;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\CarrierComponentController::listComponentAction',  '_locale' => 'en',  '_route' => 'en__RG__admin_carrier_list_component',);
        }
        not_en__RG__admin_carrier_list_component:

        // es__RG__admin_carrier_list_component
        if ($pathinfo === '/es/admin/carriers/component') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__admin_carrier_list_component;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\CarrierComponentController::listComponentAction',  '_locale' => 'es',  '_route' => 'es__RG__admin_carrier_list_component',);
        }
        not_es__RG__admin_carrier_list_component:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__admin_carrier_list_component
            if ($pathinfo === '/fi/admin/carriers/component') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__admin_carrier_list_component;
                }

                return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\CarrierComponentController::listComponentAction',  '_locale' => 'fi',  '_route' => 'fi__RG__admin_carrier_list_component',);
            }
            not_fi__RG__admin_carrier_list_component:

            // fr__RG__admin_carrier_list_component
            if ($pathinfo === '/fr/admin/carriers/component') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__admin_carrier_list_component;
                }

                return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\CarrierComponentController::listComponentAction',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_carrier_list_component',);
            }
            not_fr__RG__admin_carrier_list_component:

        }

        // gl__RG__admin_carrier_list_component
        if ($pathinfo === '/gl/admin/carriers/component') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__admin_carrier_list_component;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\CarrierComponentController::listComponentAction',  '_locale' => 'gl',  '_route' => 'gl__RG__admin_carrier_list_component',);
        }
        not_gl__RG__admin_carrier_list_component:

        // sr__RG__admin_carrier_list_component
        if ($pathinfo === '/sr/admin/carriers/component') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__admin_carrier_list_component;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\CarrierComponentController::listComponentAction',  '_locale' => 'sr',  '_route' => 'sr__RG__admin_carrier_list_component',);
        }
        not_sr__RG__admin_carrier_list_component:

        // ca__RG__admin_carrier_edit_component
        if (0 === strpos($pathinfo, '/ca/admin/carrier') && preg_match('#^/ca/admin/carrier/(?P<id>\\d+)/component$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__admin_carrier_edit_component;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ca__RG__admin_carrier_edit_component')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\CarrierComponentController::editComponentAction',  '_locale' => 'ca',));
        }
        not_ca__RG__admin_carrier_edit_component:

        // de__RG__admin_carrier_edit_component
        if (0 === strpos($pathinfo, '/de/admin/carrier') && preg_match('#^/de/admin/carrier/(?P<id>\\d+)/component$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__admin_carrier_edit_component;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__admin_carrier_edit_component')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\CarrierComponentController::editComponentAction',  '_locale' => 'de',));
        }
        not_de__RG__admin_carrier_edit_component:

        // en__RG__admin_carrier_edit_component
        if (0 === strpos($pathinfo, '/admin/carrier') && preg_match('#^/admin/carrier/(?P<id>\\d+)/component$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__admin_carrier_edit_component;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_carrier_edit_component')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\CarrierComponentController::editComponentAction',  '_locale' => 'en',));
        }
        not_en__RG__admin_carrier_edit_component:

        // es__RG__admin_carrier_edit_component
        if (0 === strpos($pathinfo, '/es/admin/carrier') && preg_match('#^/es/admin/carrier/(?P<id>\\d+)/component$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__admin_carrier_edit_component;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'es__RG__admin_carrier_edit_component')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\CarrierComponentController::editComponentAction',  '_locale' => 'es',));
        }
        not_es__RG__admin_carrier_edit_component:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__admin_carrier_edit_component
            if (0 === strpos($pathinfo, '/fi/admin/carrier') && preg_match('#^/fi/admin/carrier/(?P<id>\\d+)/component$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__admin_carrier_edit_component;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fi__RG__admin_carrier_edit_component')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\CarrierComponentController::editComponentAction',  '_locale' => 'fi',));
            }
            not_fi__RG__admin_carrier_edit_component:

            // fr__RG__admin_carrier_edit_component
            if (0 === strpos($pathinfo, '/fr/admin/carrier') && preg_match('#^/fr/admin/carrier/(?P<id>\\d+)/component$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__admin_carrier_edit_component;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_carrier_edit_component')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\CarrierComponentController::editComponentAction',  '_locale' => 'fr',));
            }
            not_fr__RG__admin_carrier_edit_component:

        }

        // gl__RG__admin_carrier_edit_component
        if (0 === strpos($pathinfo, '/gl/admin/carrier') && preg_match('#^/gl/admin/carrier/(?P<id>\\d+)/component$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__admin_carrier_edit_component;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gl__RG__admin_carrier_edit_component')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\CarrierComponentController::editComponentAction',  '_locale' => 'gl',));
        }
        not_gl__RG__admin_carrier_edit_component:

        // sr__RG__admin_carrier_edit_component
        if (0 === strpos($pathinfo, '/sr/admin/carrier') && preg_match('#^/sr/admin/carrier/(?P<id>\\d+)/component$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__admin_carrier_edit_component;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr__RG__admin_carrier_edit_component')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\CarrierComponentController::editComponentAction',  '_locale' => 'sr',));
        }
        not_sr__RG__admin_carrier_edit_component:

        // ca__RG__admin_carrier_new_component
        if ($pathinfo === '/ca/admin/carrier/new/component') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__admin_carrier_new_component;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\CarrierComponentController::editComponentAction',  '_locale' => 'ca',  '_route' => 'ca__RG__admin_carrier_new_component',);
        }
        not_ca__RG__admin_carrier_new_component:

        // de__RG__admin_carrier_new_component
        if ($pathinfo === '/de/admin/carrier/new/component') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__admin_carrier_new_component;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\CarrierComponentController::editComponentAction',  '_locale' => 'de',  '_route' => 'de__RG__admin_carrier_new_component',);
        }
        not_de__RG__admin_carrier_new_component:

        // en__RG__admin_carrier_new_component
        if ($pathinfo === '/admin/carrier/new/component') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__admin_carrier_new_component;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\CarrierComponentController::editComponentAction',  '_locale' => 'en',  '_route' => 'en__RG__admin_carrier_new_component',);
        }
        not_en__RG__admin_carrier_new_component:

        // es__RG__admin_carrier_new_component
        if ($pathinfo === '/es/admin/carrier/new/component') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__admin_carrier_new_component;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\CarrierComponentController::editComponentAction',  '_locale' => 'es',  '_route' => 'es__RG__admin_carrier_new_component',);
        }
        not_es__RG__admin_carrier_new_component:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__admin_carrier_new_component
            if ($pathinfo === '/fi/admin/carrier/new/component') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__admin_carrier_new_component;
                }

                return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\CarrierComponentController::editComponentAction',  '_locale' => 'fi',  '_route' => 'fi__RG__admin_carrier_new_component',);
            }
            not_fi__RG__admin_carrier_new_component:

            // fr__RG__admin_carrier_new_component
            if ($pathinfo === '/fr/admin/carrier/new/component') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__admin_carrier_new_component;
                }

                return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\CarrierComponentController::editComponentAction',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_carrier_new_component',);
            }
            not_fr__RG__admin_carrier_new_component:

        }

        // gl__RG__admin_carrier_new_component
        if ($pathinfo === '/gl/admin/carrier/new/component') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__admin_carrier_new_component;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\CarrierComponentController::editComponentAction',  '_locale' => 'gl',  '_route' => 'gl__RG__admin_carrier_new_component',);
        }
        not_gl__RG__admin_carrier_new_component:

        // sr__RG__admin_carrier_new_component
        if ($pathinfo === '/sr/admin/carrier/new/component') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__admin_carrier_new_component;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\CarrierComponentController::editComponentAction',  '_locale' => 'sr',  '_route' => 'sr__RG__admin_carrier_new_component',);
        }
        not_sr__RG__admin_carrier_new_component:

        // ca__RG__admin_shipping_range_list_component
        if (0 === strpos($pathinfo, '/ca/admin/carrier') && preg_match('#^/ca/admin/carrier/(?P<carrierId>[^/]++)/ranges$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__admin_shipping_range_list_component;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ca__RG__admin_shipping_range_list_component')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\ShippingRangeComponentController::listComponentAction',  '_locale' => 'ca',));
        }
        not_ca__RG__admin_shipping_range_list_component:

        // de__RG__admin_shipping_range_list_component
        if (0 === strpos($pathinfo, '/de/admin/carrier') && preg_match('#^/de/admin/carrier/(?P<carrierId>[^/]++)/ranges$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__admin_shipping_range_list_component;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__admin_shipping_range_list_component')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\ShippingRangeComponentController::listComponentAction',  '_locale' => 'de',));
        }
        not_de__RG__admin_shipping_range_list_component:

        // en__RG__admin_shipping_range_list_component
        if (0 === strpos($pathinfo, '/admin/carrier') && preg_match('#^/admin/carrier/(?P<carrierId>[^/]++)/ranges$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__admin_shipping_range_list_component;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_shipping_range_list_component')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\ShippingRangeComponentController::listComponentAction',  '_locale' => 'en',));
        }
        not_en__RG__admin_shipping_range_list_component:

        // es__RG__admin_shipping_range_list_component
        if (0 === strpos($pathinfo, '/es/admin/carrier') && preg_match('#^/es/admin/carrier/(?P<carrierId>[^/]++)/ranges$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__admin_shipping_range_list_component;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'es__RG__admin_shipping_range_list_component')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\ShippingRangeComponentController::listComponentAction',  '_locale' => 'es',));
        }
        not_es__RG__admin_shipping_range_list_component:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__admin_shipping_range_list_component
            if (0 === strpos($pathinfo, '/fi/admin/carrier') && preg_match('#^/fi/admin/carrier/(?P<carrierId>[^/]++)/ranges$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__admin_shipping_range_list_component;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fi__RG__admin_shipping_range_list_component')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\ShippingRangeComponentController::listComponentAction',  '_locale' => 'fi',));
            }
            not_fi__RG__admin_shipping_range_list_component:

            // fr__RG__admin_shipping_range_list_component
            if (0 === strpos($pathinfo, '/fr/admin/carrier') && preg_match('#^/fr/admin/carrier/(?P<carrierId>[^/]++)/ranges$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__admin_shipping_range_list_component;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_shipping_range_list_component')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\ShippingRangeComponentController::listComponentAction',  '_locale' => 'fr',));
            }
            not_fr__RG__admin_shipping_range_list_component:

        }

        // gl__RG__admin_shipping_range_list_component
        if (0 === strpos($pathinfo, '/gl/admin/carrier') && preg_match('#^/gl/admin/carrier/(?P<carrierId>[^/]++)/ranges$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__admin_shipping_range_list_component;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gl__RG__admin_shipping_range_list_component')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\ShippingRangeComponentController::listComponentAction',  '_locale' => 'gl',));
        }
        not_gl__RG__admin_shipping_range_list_component:

        // sr__RG__admin_shipping_range_list_component
        if (0 === strpos($pathinfo, '/sr/admin/carrier') && preg_match('#^/sr/admin/carrier/(?P<carrierId>[^/]++)/ranges$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__admin_shipping_range_list_component;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr__RG__admin_shipping_range_list_component')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\ShippingRangeComponentController::listComponentAction',  '_locale' => 'sr',));
        }
        not_sr__RG__admin_shipping_range_list_component:

        // ca__RG__admin_shipping_range_edit_component
        if (0 === strpos($pathinfo, '/ca/admin/carrier') && preg_match('#^/ca/admin/carrier/(?P<carrierId>[^/]++)/range/(?P<id>\\d+)/component$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__admin_shipping_range_edit_component;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ca__RG__admin_shipping_range_edit_component')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\ShippingRangeComponentController::editComponentAction',  '_locale' => 'ca',));
        }
        not_ca__RG__admin_shipping_range_edit_component:

        // de__RG__admin_shipping_range_edit_component
        if (0 === strpos($pathinfo, '/de/admin/carrier') && preg_match('#^/de/admin/carrier/(?P<carrierId>[^/]++)/range/(?P<id>\\d+)/component$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__admin_shipping_range_edit_component;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__admin_shipping_range_edit_component')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\ShippingRangeComponentController::editComponentAction',  '_locale' => 'de',));
        }
        not_de__RG__admin_shipping_range_edit_component:

        // en__RG__admin_shipping_range_edit_component
        if (0 === strpos($pathinfo, '/admin/carrier') && preg_match('#^/admin/carrier/(?P<carrierId>[^/]++)/range/(?P<id>\\d+)/component$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__admin_shipping_range_edit_component;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_shipping_range_edit_component')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\ShippingRangeComponentController::editComponentAction',  '_locale' => 'en',));
        }
        not_en__RG__admin_shipping_range_edit_component:

        // es__RG__admin_shipping_range_edit_component
        if (0 === strpos($pathinfo, '/es/admin/carrier') && preg_match('#^/es/admin/carrier/(?P<carrierId>[^/]++)/range/(?P<id>\\d+)/component$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__admin_shipping_range_edit_component;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'es__RG__admin_shipping_range_edit_component')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\ShippingRangeComponentController::editComponentAction',  '_locale' => 'es',));
        }
        not_es__RG__admin_shipping_range_edit_component:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__admin_shipping_range_edit_component
            if (0 === strpos($pathinfo, '/fi/admin/carrier') && preg_match('#^/fi/admin/carrier/(?P<carrierId>[^/]++)/range/(?P<id>\\d+)/component$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__admin_shipping_range_edit_component;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fi__RG__admin_shipping_range_edit_component')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\ShippingRangeComponentController::editComponentAction',  '_locale' => 'fi',));
            }
            not_fi__RG__admin_shipping_range_edit_component:

            // fr__RG__admin_shipping_range_edit_component
            if (0 === strpos($pathinfo, '/fr/admin/carrier') && preg_match('#^/fr/admin/carrier/(?P<carrierId>[^/]++)/range/(?P<id>\\d+)/component$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__admin_shipping_range_edit_component;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_shipping_range_edit_component')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\ShippingRangeComponentController::editComponentAction',  '_locale' => 'fr',));
            }
            not_fr__RG__admin_shipping_range_edit_component:

        }

        // gl__RG__admin_shipping_range_edit_component
        if (0 === strpos($pathinfo, '/gl/admin/carrier') && preg_match('#^/gl/admin/carrier/(?P<carrierId>[^/]++)/range/(?P<id>\\d+)/component$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__admin_shipping_range_edit_component;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gl__RG__admin_shipping_range_edit_component')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\ShippingRangeComponentController::editComponentAction',  '_locale' => 'gl',));
        }
        not_gl__RG__admin_shipping_range_edit_component:

        // sr__RG__admin_shipping_range_edit_component
        if (0 === strpos($pathinfo, '/sr/admin/carrier') && preg_match('#^/sr/admin/carrier/(?P<carrierId>[^/]++)/range/(?P<id>\\d+)/component$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__admin_shipping_range_edit_component;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr__RG__admin_shipping_range_edit_component')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\ShippingRangeComponentController::editComponentAction',  '_locale' => 'sr',));
        }
        not_sr__RG__admin_shipping_range_edit_component:

        // ca__RG__admin_shipping_range_new_component
        if (0 === strpos($pathinfo, '/ca/admin/carrier') && preg_match('#^/ca/admin/carrier/(?P<carrierId>[^/]++)/range/new/component$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__admin_shipping_range_new_component;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ca__RG__admin_shipping_range_new_component')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\ShippingRangeComponentController::editComponentAction',  '_locale' => 'ca',));
        }
        not_ca__RG__admin_shipping_range_new_component:

        // de__RG__admin_shipping_range_new_component
        if (0 === strpos($pathinfo, '/de/admin/carrier') && preg_match('#^/de/admin/carrier/(?P<carrierId>[^/]++)/range/new/component$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__admin_shipping_range_new_component;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__admin_shipping_range_new_component')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\ShippingRangeComponentController::editComponentAction',  '_locale' => 'de',));
        }
        not_de__RG__admin_shipping_range_new_component:

        // en__RG__admin_shipping_range_new_component
        if (0 === strpos($pathinfo, '/admin/carrier') && preg_match('#^/admin/carrier/(?P<carrierId>[^/]++)/range/new/component$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__admin_shipping_range_new_component;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_shipping_range_new_component')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\ShippingRangeComponentController::editComponentAction',  '_locale' => 'en',));
        }
        not_en__RG__admin_shipping_range_new_component:

        // es__RG__admin_shipping_range_new_component
        if (0 === strpos($pathinfo, '/es/admin/carrier') && preg_match('#^/es/admin/carrier/(?P<carrierId>[^/]++)/range/new/component$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__admin_shipping_range_new_component;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'es__RG__admin_shipping_range_new_component')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\ShippingRangeComponentController::editComponentAction',  '_locale' => 'es',));
        }
        not_es__RG__admin_shipping_range_new_component:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__admin_shipping_range_new_component
            if (0 === strpos($pathinfo, '/fi/admin/carrier') && preg_match('#^/fi/admin/carrier/(?P<carrierId>[^/]++)/range/new/component$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__admin_shipping_range_new_component;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fi__RG__admin_shipping_range_new_component')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\ShippingRangeComponentController::editComponentAction',  '_locale' => 'fi',));
            }
            not_fi__RG__admin_shipping_range_new_component:

            // fr__RG__admin_shipping_range_new_component
            if (0 === strpos($pathinfo, '/fr/admin/carrier') && preg_match('#^/fr/admin/carrier/(?P<carrierId>[^/]++)/range/new/component$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__admin_shipping_range_new_component;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_shipping_range_new_component')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\ShippingRangeComponentController::editComponentAction',  '_locale' => 'fr',));
            }
            not_fr__RG__admin_shipping_range_new_component:

        }

        // gl__RG__admin_shipping_range_new_component
        if (0 === strpos($pathinfo, '/gl/admin/carrier') && preg_match('#^/gl/admin/carrier/(?P<carrierId>[^/]++)/range/new/component$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__admin_shipping_range_new_component;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gl__RG__admin_shipping_range_new_component')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\ShippingRangeComponentController::editComponentAction',  '_locale' => 'gl',));
        }
        not_gl__RG__admin_shipping_range_new_component:

        // sr__RG__admin_shipping_range_new_component
        if (0 === strpos($pathinfo, '/sr/admin/carrier') && preg_match('#^/sr/admin/carrier/(?P<carrierId>[^/]++)/range/new/component$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__admin_shipping_range_new_component;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr__RG__admin_shipping_range_new_component')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\Component\\ShippingRangeComponentController::editComponentAction',  '_locale' => 'sr',));
        }
        not_sr__RG__admin_shipping_range_new_component:

        // ca__RG__admin_shipping_range_edit
        if (0 === strpos($pathinfo, '/ca/admin/carrier') && preg_match('#^/ca/admin/carrier/(?P<carrierId>[^/]++)/range/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__admin_shipping_range_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ca__RG__admin_shipping_range_edit')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::editAction',  '_locale' => 'ca',));
        }
        not_ca__RG__admin_shipping_range_edit:

        // de__RG__admin_shipping_range_edit
        if (0 === strpos($pathinfo, '/de/admin/carrier') && preg_match('#^/de/admin/carrier/(?P<carrierId>[^/]++)/range/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__admin_shipping_range_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__admin_shipping_range_edit')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::editAction',  '_locale' => 'de',));
        }
        not_de__RG__admin_shipping_range_edit:

        // en__RG__admin_shipping_range_edit
        if (0 === strpos($pathinfo, '/admin/carrier') && preg_match('#^/admin/carrier/(?P<carrierId>[^/]++)/range/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__admin_shipping_range_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_shipping_range_edit')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::editAction',  '_locale' => 'en',));
        }
        not_en__RG__admin_shipping_range_edit:

        // es__RG__admin_shipping_range_edit
        if (0 === strpos($pathinfo, '/es/admin/carrier') && preg_match('#^/es/admin/carrier/(?P<carrierId>[^/]++)/range/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__admin_shipping_range_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'es__RG__admin_shipping_range_edit')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::editAction',  '_locale' => 'es',));
        }
        not_es__RG__admin_shipping_range_edit:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__admin_shipping_range_edit
            if (0 === strpos($pathinfo, '/fi/admin/carrier') && preg_match('#^/fi/admin/carrier/(?P<carrierId>[^/]++)/range/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__admin_shipping_range_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fi__RG__admin_shipping_range_edit')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::editAction',  '_locale' => 'fi',));
            }
            not_fi__RG__admin_shipping_range_edit:

            // fr__RG__admin_shipping_range_edit
            if (0 === strpos($pathinfo, '/fr/admin/carrier') && preg_match('#^/fr/admin/carrier/(?P<carrierId>[^/]++)/range/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__admin_shipping_range_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_shipping_range_edit')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::editAction',  '_locale' => 'fr',));
            }
            not_fr__RG__admin_shipping_range_edit:

        }

        // gl__RG__admin_shipping_range_edit
        if (0 === strpos($pathinfo, '/gl/admin/carrier') && preg_match('#^/gl/admin/carrier/(?P<carrierId>[^/]++)/range/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__admin_shipping_range_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gl__RG__admin_shipping_range_edit')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::editAction',  '_locale' => 'gl',));
        }
        not_gl__RG__admin_shipping_range_edit:

        // sr__RG__admin_shipping_range_edit
        if (0 === strpos($pathinfo, '/sr/admin/carrier') && preg_match('#^/sr/admin/carrier/(?P<carrierId>[^/]++)/range/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__admin_shipping_range_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr__RG__admin_shipping_range_edit')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::editAction',  '_locale' => 'sr',));
        }
        not_sr__RG__admin_shipping_range_edit:

        // ca__RG__admin_shipping_range_update
        if (0 === strpos($pathinfo, '/ca/admin/carrier') && preg_match('#^/ca/admin/carrier/(?P<carrierId>[^/]++)/range/(?P<id>\\d+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ca__RG__admin_shipping_range_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ca__RG__admin_shipping_range_update')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::editAction',  '_locale' => 'ca',));
        }
        not_ca__RG__admin_shipping_range_update:

        // de__RG__admin_shipping_range_update
        if (0 === strpos($pathinfo, '/de/admin/carrier') && preg_match('#^/de/admin/carrier/(?P<carrierId>[^/]++)/range/(?P<id>\\d+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_de__RG__admin_shipping_range_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__admin_shipping_range_update')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::editAction',  '_locale' => 'de',));
        }
        not_de__RG__admin_shipping_range_update:

        // en__RG__admin_shipping_range_update
        if (0 === strpos($pathinfo, '/admin/carrier') && preg_match('#^/admin/carrier/(?P<carrierId>[^/]++)/range/(?P<id>\\d+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__admin_shipping_range_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_shipping_range_update')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::editAction',  '_locale' => 'en',));
        }
        not_en__RG__admin_shipping_range_update:

        // es__RG__admin_shipping_range_update
        if (0 === strpos($pathinfo, '/es/admin/carrier') && preg_match('#^/es/admin/carrier/(?P<carrierId>[^/]++)/range/(?P<id>\\d+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_es__RG__admin_shipping_range_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'es__RG__admin_shipping_range_update')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::editAction',  '_locale' => 'es',));
        }
        not_es__RG__admin_shipping_range_update:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__admin_shipping_range_update
            if (0 === strpos($pathinfo, '/fi/admin/carrier') && preg_match('#^/fi/admin/carrier/(?P<carrierId>[^/]++)/range/(?P<id>\\d+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fi__RG__admin_shipping_range_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fi__RG__admin_shipping_range_update')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::editAction',  '_locale' => 'fi',));
            }
            not_fi__RG__admin_shipping_range_update:

            // fr__RG__admin_shipping_range_update
            if (0 === strpos($pathinfo, '/fr/admin/carrier') && preg_match('#^/fr/admin/carrier/(?P<carrierId>[^/]++)/range/(?P<id>\\d+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fr__RG__admin_shipping_range_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_shipping_range_update')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::editAction',  '_locale' => 'fr',));
            }
            not_fr__RG__admin_shipping_range_update:

        }

        // gl__RG__admin_shipping_range_update
        if (0 === strpos($pathinfo, '/gl/admin/carrier') && preg_match('#^/gl/admin/carrier/(?P<carrierId>[^/]++)/range/(?P<id>\\d+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_gl__RG__admin_shipping_range_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gl__RG__admin_shipping_range_update')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::editAction',  '_locale' => 'gl',));
        }
        not_gl__RG__admin_shipping_range_update:

        // sr__RG__admin_shipping_range_update
        if (0 === strpos($pathinfo, '/sr/admin/carrier') && preg_match('#^/sr/admin/carrier/(?P<carrierId>[^/]++)/range/(?P<id>\\d+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_sr__RG__admin_shipping_range_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr__RG__admin_shipping_range_update')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::editAction',  '_locale' => 'sr',));
        }
        not_sr__RG__admin_shipping_range_update:

        // ca__RG__admin_shipping_range_new
        if (0 === strpos($pathinfo, '/ca/admin/carrier') && preg_match('#^/ca/admin/carrier/(?P<carrierId>[^/]++)/range/new$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__admin_shipping_range_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ca__RG__admin_shipping_range_new')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::editAction',  '_locale' => 'ca',));
        }
        not_ca__RG__admin_shipping_range_new:

        // de__RG__admin_shipping_range_new
        if (0 === strpos($pathinfo, '/de/admin/carrier') && preg_match('#^/de/admin/carrier/(?P<carrierId>[^/]++)/range/new$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__admin_shipping_range_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__admin_shipping_range_new')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::editAction',  '_locale' => 'de',));
        }
        not_de__RG__admin_shipping_range_new:

        // en__RG__admin_shipping_range_new
        if (0 === strpos($pathinfo, '/admin/carrier') && preg_match('#^/admin/carrier/(?P<carrierId>[^/]++)/range/new$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__admin_shipping_range_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_shipping_range_new')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::editAction',  '_locale' => 'en',));
        }
        not_en__RG__admin_shipping_range_new:

        // es__RG__admin_shipping_range_new
        if (0 === strpos($pathinfo, '/es/admin/carrier') && preg_match('#^/es/admin/carrier/(?P<carrierId>[^/]++)/range/new$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__admin_shipping_range_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'es__RG__admin_shipping_range_new')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::editAction',  '_locale' => 'es',));
        }
        not_es__RG__admin_shipping_range_new:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__admin_shipping_range_new
            if (0 === strpos($pathinfo, '/fi/admin/carrier') && preg_match('#^/fi/admin/carrier/(?P<carrierId>[^/]++)/range/new$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__admin_shipping_range_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fi__RG__admin_shipping_range_new')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::editAction',  '_locale' => 'fi',));
            }
            not_fi__RG__admin_shipping_range_new:

            // fr__RG__admin_shipping_range_new
            if (0 === strpos($pathinfo, '/fr/admin/carrier') && preg_match('#^/fr/admin/carrier/(?P<carrierId>[^/]++)/range/new$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__admin_shipping_range_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_shipping_range_new')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::editAction',  '_locale' => 'fr',));
            }
            not_fr__RG__admin_shipping_range_new:

        }

        // gl__RG__admin_shipping_range_new
        if (0 === strpos($pathinfo, '/gl/admin/carrier') && preg_match('#^/gl/admin/carrier/(?P<carrierId>[^/]++)/range/new$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__admin_shipping_range_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gl__RG__admin_shipping_range_new')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::editAction',  '_locale' => 'gl',));
        }
        not_gl__RG__admin_shipping_range_new:

        // sr__RG__admin_shipping_range_new
        if (0 === strpos($pathinfo, '/sr/admin/carrier') && preg_match('#^/sr/admin/carrier/(?P<carrierId>[^/]++)/range/new$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__admin_shipping_range_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr__RG__admin_shipping_range_new')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::editAction',  '_locale' => 'sr',));
        }
        not_sr__RG__admin_shipping_range_new:

        // ca__RG__admin_shipping_range_save
        if (0 === strpos($pathinfo, '/ca/admin/carrier') && preg_match('#^/ca/admin/carrier/(?P<carrierId>[^/]++)/range/new/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ca__RG__admin_shipping_range_save;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ca__RG__admin_shipping_range_save')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::editAction',  '_locale' => 'ca',));
        }
        not_ca__RG__admin_shipping_range_save:

        // de__RG__admin_shipping_range_save
        if (0 === strpos($pathinfo, '/de/admin/carrier') && preg_match('#^/de/admin/carrier/(?P<carrierId>[^/]++)/range/new/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_de__RG__admin_shipping_range_save;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__admin_shipping_range_save')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::editAction',  '_locale' => 'de',));
        }
        not_de__RG__admin_shipping_range_save:

        // en__RG__admin_shipping_range_save
        if (0 === strpos($pathinfo, '/admin/carrier') && preg_match('#^/admin/carrier/(?P<carrierId>[^/]++)/range/new/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__admin_shipping_range_save;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_shipping_range_save')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::editAction',  '_locale' => 'en',));
        }
        not_en__RG__admin_shipping_range_save:

        // es__RG__admin_shipping_range_save
        if (0 === strpos($pathinfo, '/es/admin/carrier') && preg_match('#^/es/admin/carrier/(?P<carrierId>[^/]++)/range/new/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_es__RG__admin_shipping_range_save;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'es__RG__admin_shipping_range_save')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::editAction',  '_locale' => 'es',));
        }
        not_es__RG__admin_shipping_range_save:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__admin_shipping_range_save
            if (0 === strpos($pathinfo, '/fi/admin/carrier') && preg_match('#^/fi/admin/carrier/(?P<carrierId>[^/]++)/range/new/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fi__RG__admin_shipping_range_save;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fi__RG__admin_shipping_range_save')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::editAction',  '_locale' => 'fi',));
            }
            not_fi__RG__admin_shipping_range_save:

            // fr__RG__admin_shipping_range_save
            if (0 === strpos($pathinfo, '/fr/admin/carrier') && preg_match('#^/fr/admin/carrier/(?P<carrierId>[^/]++)/range/new/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fr__RG__admin_shipping_range_save;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_shipping_range_save')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::editAction',  '_locale' => 'fr',));
            }
            not_fr__RG__admin_shipping_range_save:

        }

        // gl__RG__admin_shipping_range_save
        if (0 === strpos($pathinfo, '/gl/admin/carrier') && preg_match('#^/gl/admin/carrier/(?P<carrierId>[^/]++)/range/new/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_gl__RG__admin_shipping_range_save;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gl__RG__admin_shipping_range_save')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::editAction',  '_locale' => 'gl',));
        }
        not_gl__RG__admin_shipping_range_save:

        // sr__RG__admin_shipping_range_save
        if (0 === strpos($pathinfo, '/sr/admin/carrier') && preg_match('#^/sr/admin/carrier/(?P<carrierId>[^/]++)/range/new/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_sr__RG__admin_shipping_range_save;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr__RG__admin_shipping_range_save')), array (  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::editAction',  '_locale' => 'sr',));
        }
        not_sr__RG__admin_shipping_range_save:

        // ca__RG__admin_shipping_range_delete
        if (0 === strpos($pathinfo, '/ca/admin/carrier') && preg_match('#^/ca/admin/carrier/(?P<carrierId>[^/]++)/range/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_ca__RG__admin_shipping_range_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ca__RG__admin_shipping_range_delete')), array (  'redirectPath' => NULL,  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::deleteAction',  '_locale' => 'ca',));
        }
        not_ca__RG__admin_shipping_range_delete:

        // de__RG__admin_shipping_range_delete
        if (0 === strpos($pathinfo, '/de/admin/carrier') && preg_match('#^/de/admin/carrier/(?P<carrierId>[^/]++)/range/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_de__RG__admin_shipping_range_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__admin_shipping_range_delete')), array (  'redirectPath' => NULL,  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::deleteAction',  '_locale' => 'de',));
        }
        not_de__RG__admin_shipping_range_delete:

        // en__RG__admin_shipping_range_delete
        if (0 === strpos($pathinfo, '/admin/carrier') && preg_match('#^/admin/carrier/(?P<carrierId>[^/]++)/range/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__admin_shipping_range_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_shipping_range_delete')), array (  'redirectPath' => NULL,  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::deleteAction',  '_locale' => 'en',));
        }
        not_en__RG__admin_shipping_range_delete:

        // es__RG__admin_shipping_range_delete
        if (0 === strpos($pathinfo, '/es/admin/carrier') && preg_match('#^/es/admin/carrier/(?P<carrierId>[^/]++)/range/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_es__RG__admin_shipping_range_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'es__RG__admin_shipping_range_delete')), array (  'redirectPath' => NULL,  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::deleteAction',  '_locale' => 'es',));
        }
        not_es__RG__admin_shipping_range_delete:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__admin_shipping_range_delete
            if (0 === strpos($pathinfo, '/fi/admin/carrier') && preg_match('#^/fi/admin/carrier/(?P<carrierId>[^/]++)/range/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fi__RG__admin_shipping_range_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fi__RG__admin_shipping_range_delete')), array (  'redirectPath' => NULL,  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::deleteAction',  '_locale' => 'fi',));
            }
            not_fi__RG__admin_shipping_range_delete:

            // fr__RG__admin_shipping_range_delete
            if (0 === strpos($pathinfo, '/fr/admin/carrier') && preg_match('#^/fr/admin/carrier/(?P<carrierId>[^/]++)/range/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fr__RG__admin_shipping_range_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_shipping_range_delete')), array (  'redirectPath' => NULL,  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::deleteAction',  '_locale' => 'fr',));
            }
            not_fr__RG__admin_shipping_range_delete:

        }

        // gl__RG__admin_shipping_range_delete
        if (0 === strpos($pathinfo, '/gl/admin/carrier') && preg_match('#^/gl/admin/carrier/(?P<carrierId>[^/]++)/range/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_gl__RG__admin_shipping_range_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gl__RG__admin_shipping_range_delete')), array (  'redirectPath' => NULL,  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::deleteAction',  '_locale' => 'gl',));
        }
        not_gl__RG__admin_shipping_range_delete:

        // sr__RG__admin_shipping_range_delete
        if (0 === strpos($pathinfo, '/sr/admin/carrier') && preg_match('#^/sr/admin/carrier/(?P<carrierId>[^/]++)/range/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_sr__RG__admin_shipping_range_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr__RG__admin_shipping_range_delete')), array (  'redirectPath' => NULL,  '_controller' => 'Elcodi\\Plugin\\CustomShippingBundle\\Controller\\ShippingRangeController::deleteAction',  '_locale' => 'sr',));
        }
        not_sr__RG__admin_shipping_range_delete:

        // ca__RG__paymentsuite_freepayment_execute
        if ($pathinfo === '/ca/payment/freepayment/execute') {
            return array (  '_controller' => 'paymentsuite.freepayment.payment_controller:executeAction',  '_locale' => 'ca',  '_route' => 'ca__RG__paymentsuite_freepayment_execute',);
        }

        // de__RG__paymentsuite_freepayment_execute
        if ($pathinfo === '/de/payment/freepayment/execute') {
            return array (  '_controller' => 'paymentsuite.freepayment.payment_controller:executeAction',  '_locale' => 'de',  '_route' => 'de__RG__paymentsuite_freepayment_execute',);
        }

        // en__RG__paymentsuite_freepayment_execute
        if ($pathinfo === '/payment/freepayment/execute') {
            return array (  '_controller' => 'paymentsuite.freepayment.payment_controller:executeAction',  '_locale' => 'en',  '_route' => 'en__RG__paymentsuite_freepayment_execute',);
        }

        // es__RG__paymentsuite_freepayment_execute
        if ($pathinfo === '/es/payment/freepayment/execute') {
            return array (  '_controller' => 'paymentsuite.freepayment.payment_controller:executeAction',  '_locale' => 'es',  '_route' => 'es__RG__paymentsuite_freepayment_execute',);
        }

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__paymentsuite_freepayment_execute
            if ($pathinfo === '/fi/payment/freepayment/execute') {
                return array (  '_controller' => 'paymentsuite.freepayment.payment_controller:executeAction',  '_locale' => 'fi',  '_route' => 'fi__RG__paymentsuite_freepayment_execute',);
            }

            // fr__RG__paymentsuite_freepayment_execute
            if ($pathinfo === '/fr/payment/freepayment/execute') {
                return array (  '_controller' => 'paymentsuite.freepayment.payment_controller:executeAction',  '_locale' => 'fr',  '_route' => 'fr__RG__paymentsuite_freepayment_execute',);
            }

        }

        // gl__RG__paymentsuite_freepayment_execute
        if ($pathinfo === '/gl/payment/freepayment/execute') {
            return array (  '_controller' => 'paymentsuite.freepayment.payment_controller:executeAction',  '_locale' => 'gl',  '_route' => 'gl__RG__paymentsuite_freepayment_execute',);
        }

        // sr__RG__paymentsuite_freepayment_execute
        if ($pathinfo === '/sr/payment/freepayment/execute') {
            return array (  '_controller' => 'paymentsuite.freepayment.payment_controller:executeAction',  '_locale' => 'sr',  '_route' => 'sr__RG__paymentsuite_freepayment_execute',);
        }

        // ca__RG__paymentsuite_paypal_web_checkout_execute
        if ($pathinfo === '/ca/payment/paypal-web-checkout/execute') {
            return array (  '_controller' => 'paymentsuite.paypal_web_checkout.payment_controller:executeAction',  '_locale' => 'ca',  '_route' => 'ca__RG__paymentsuite_paypal_web_checkout_execute',);
        }

        // de__RG__paymentsuite_paypal_web_checkout_execute
        if ($pathinfo === '/de/payment/paypal-web-checkout/execute') {
            return array (  '_controller' => 'paymentsuite.paypal_web_checkout.payment_controller:executeAction',  '_locale' => 'de',  '_route' => 'de__RG__paymentsuite_paypal_web_checkout_execute',);
        }

        // en__RG__paymentsuite_paypal_web_checkout_execute
        if ($pathinfo === '/payment/paypal-web-checkout/execute') {
            return array (  '_controller' => 'paymentsuite.paypal_web_checkout.payment_controller:executeAction',  '_locale' => 'en',  '_route' => 'en__RG__paymentsuite_paypal_web_checkout_execute',);
        }

        // es__RG__paymentsuite_paypal_web_checkout_execute
        if ($pathinfo === '/es/payment/paypal-web-checkout/execute') {
            return array (  '_controller' => 'paymentsuite.paypal_web_checkout.payment_controller:executeAction',  '_locale' => 'es',  '_route' => 'es__RG__paymentsuite_paypal_web_checkout_execute',);
        }

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__paymentsuite_paypal_web_checkout_execute
            if ($pathinfo === '/fi/payment/paypal-web-checkout/execute') {
                return array (  '_controller' => 'paymentsuite.paypal_web_checkout.payment_controller:executeAction',  '_locale' => 'fi',  '_route' => 'fi__RG__paymentsuite_paypal_web_checkout_execute',);
            }

            // fr__RG__paymentsuite_paypal_web_checkout_execute
            if ($pathinfo === '/fr/payment/paypal-web-checkout/execute') {
                return array (  '_controller' => 'paymentsuite.paypal_web_checkout.payment_controller:executeAction',  '_locale' => 'fr',  '_route' => 'fr__RG__paymentsuite_paypal_web_checkout_execute',);
            }

        }

        // gl__RG__paymentsuite_paypal_web_checkout_execute
        if ($pathinfo === '/gl/payment/paypal-web-checkout/execute') {
            return array (  '_controller' => 'paymentsuite.paypal_web_checkout.payment_controller:executeAction',  '_locale' => 'gl',  '_route' => 'gl__RG__paymentsuite_paypal_web_checkout_execute',);
        }

        // sr__RG__paymentsuite_paypal_web_checkout_execute
        if ($pathinfo === '/sr/payment/paypal-web-checkout/execute') {
            return array (  '_controller' => 'paymentsuite.paypal_web_checkout.payment_controller:executeAction',  '_locale' => 'sr',  '_route' => 'sr__RG__paymentsuite_paypal_web_checkout_execute',);
        }

        // ca__RG__paymentsuite_paypal_web_checkout_process
        if ($pathinfo === '/ca/payment/paypal-web-checkout/process') {
            return array (  '_controller' => 'paymentsuite.paypal_web_checkout.process_controller:processAction',  '_locale' => 'ca',  '_route' => 'ca__RG__paymentsuite_paypal_web_checkout_process',);
        }

        // de__RG__paymentsuite_paypal_web_checkout_process
        if ($pathinfo === '/de/payment/paypal-web-checkout/process') {
            return array (  '_controller' => 'paymentsuite.paypal_web_checkout.process_controller:processAction',  '_locale' => 'de',  '_route' => 'de__RG__paymentsuite_paypal_web_checkout_process',);
        }

        // en__RG__paymentsuite_paypal_web_checkout_process
        if ($pathinfo === '/payment/paypal-web-checkout/process') {
            return array (  '_controller' => 'paymentsuite.paypal_web_checkout.process_controller:processAction',  '_locale' => 'en',  '_route' => 'en__RG__paymentsuite_paypal_web_checkout_process',);
        }

        // es__RG__paymentsuite_paypal_web_checkout_process
        if ($pathinfo === '/es/payment/paypal-web-checkout/process') {
            return array (  '_controller' => 'paymentsuite.paypal_web_checkout.process_controller:processAction',  '_locale' => 'es',  '_route' => 'es__RG__paymentsuite_paypal_web_checkout_process',);
        }

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__paymentsuite_paypal_web_checkout_process
            if ($pathinfo === '/fi/payment/paypal-web-checkout/process') {
                return array (  '_controller' => 'paymentsuite.paypal_web_checkout.process_controller:processAction',  '_locale' => 'fi',  '_route' => 'fi__RG__paymentsuite_paypal_web_checkout_process',);
            }

            // fr__RG__paymentsuite_paypal_web_checkout_process
            if ($pathinfo === '/fr/payment/paypal-web-checkout/process') {
                return array (  '_controller' => 'paymentsuite.paypal_web_checkout.process_controller:processAction',  '_locale' => 'fr',  '_route' => 'fr__RG__paymentsuite_paypal_web_checkout_process',);
            }

        }

        // gl__RG__paymentsuite_paypal_web_checkout_process
        if ($pathinfo === '/gl/payment/paypal-web-checkout/process') {
            return array (  '_controller' => 'paymentsuite.paypal_web_checkout.process_controller:processAction',  '_locale' => 'gl',  '_route' => 'gl__RG__paymentsuite_paypal_web_checkout_process',);
        }

        // sr__RG__paymentsuite_paypal_web_checkout_process
        if ($pathinfo === '/sr/payment/paypal-web-checkout/process') {
            return array (  '_controller' => 'paymentsuite.paypal_web_checkout.process_controller:processAction',  '_locale' => 'sr',  '_route' => 'sr__RG__paymentsuite_paypal_web_checkout_process',);
        }

        // ca__RG__elcodi_plugin_productcsv_export
        if ($pathinfo === '/ca/products/export') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__elcodi_plugin_productcsv_export;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\ProductCsvBundle\\Controller\\CsvController::exportAction',  '_locale' => 'ca',  '_route' => 'ca__RG__elcodi_plugin_productcsv_export',);
        }
        not_ca__RG__elcodi_plugin_productcsv_export:

        // de__RG__elcodi_plugin_productcsv_export
        if ($pathinfo === '/de/products/export') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__elcodi_plugin_productcsv_export;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\ProductCsvBundle\\Controller\\CsvController::exportAction',  '_locale' => 'de',  '_route' => 'de__RG__elcodi_plugin_productcsv_export',);
        }
        not_de__RG__elcodi_plugin_productcsv_export:

        // en__RG__elcodi_plugin_productcsv_export
        if ($pathinfo === '/products/export') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__elcodi_plugin_productcsv_export;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\ProductCsvBundle\\Controller\\CsvController::exportAction',  '_locale' => 'en',  '_route' => 'en__RG__elcodi_plugin_productcsv_export',);
        }
        not_en__RG__elcodi_plugin_productcsv_export:

        // es__RG__elcodi_plugin_productcsv_export
        if ($pathinfo === '/es/products/export') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__elcodi_plugin_productcsv_export;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\ProductCsvBundle\\Controller\\CsvController::exportAction',  '_locale' => 'es',  '_route' => 'es__RG__elcodi_plugin_productcsv_export',);
        }
        not_es__RG__elcodi_plugin_productcsv_export:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__elcodi_plugin_productcsv_export
            if ($pathinfo === '/fi/products/export') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__elcodi_plugin_productcsv_export;
                }

                return array (  '_controller' => 'Elcodi\\Plugin\\ProductCsvBundle\\Controller\\CsvController::exportAction',  '_locale' => 'fi',  '_route' => 'fi__RG__elcodi_plugin_productcsv_export',);
            }
            not_fi__RG__elcodi_plugin_productcsv_export:

            // fr__RG__elcodi_plugin_productcsv_export
            if ($pathinfo === '/fr/products/export') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__elcodi_plugin_productcsv_export;
                }

                return array (  '_controller' => 'Elcodi\\Plugin\\ProductCsvBundle\\Controller\\CsvController::exportAction',  '_locale' => 'fr',  '_route' => 'fr__RG__elcodi_plugin_productcsv_export',);
            }
            not_fr__RG__elcodi_plugin_productcsv_export:

        }

        // gl__RG__elcodi_plugin_productcsv_export
        if ($pathinfo === '/gl/products/export') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__elcodi_plugin_productcsv_export;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\ProductCsvBundle\\Controller\\CsvController::exportAction',  '_locale' => 'gl',  '_route' => 'gl__RG__elcodi_plugin_productcsv_export',);
        }
        not_gl__RG__elcodi_plugin_productcsv_export:

        // sr__RG__elcodi_plugin_productcsv_export
        if ($pathinfo === '/sr/products/export') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__elcodi_plugin_productcsv_export;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\ProductCsvBundle\\Controller\\CsvController::exportAction',  '_locale' => 'sr',  '_route' => 'sr__RG__elcodi_plugin_productcsv_export',);
        }
        not_sr__RG__elcodi_plugin_productcsv_export:

        // ca__RG__admin_store_setup_wizard
        if ($pathinfo === '/ca/admin/store-setup-wizard') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ca__RG__admin_store_setup_wizard;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\StoreSetupWizardBundle\\Controller\\WizardController::viewAction',  '_locale' => 'ca',  '_route' => 'ca__RG__admin_store_setup_wizard',);
        }
        not_ca__RG__admin_store_setup_wizard:

        // de__RG__admin_store_setup_wizard
        if ($pathinfo === '/de/admin/store-setup-wizard') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__admin_store_setup_wizard;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\StoreSetupWizardBundle\\Controller\\WizardController::viewAction',  '_locale' => 'de',  '_route' => 'de__RG__admin_store_setup_wizard',);
        }
        not_de__RG__admin_store_setup_wizard:

        // en__RG__admin_store_setup_wizard
        if ($pathinfo === '/admin/store-setup-wizard') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__admin_store_setup_wizard;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\StoreSetupWizardBundle\\Controller\\WizardController::viewAction',  '_locale' => 'en',  '_route' => 'en__RG__admin_store_setup_wizard',);
        }
        not_en__RG__admin_store_setup_wizard:

        // es__RG__admin_store_setup_wizard
        if ($pathinfo === '/es/admin/store-setup-wizard') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_es__RG__admin_store_setup_wizard;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\StoreSetupWizardBundle\\Controller\\WizardController::viewAction',  '_locale' => 'es',  '_route' => 'es__RG__admin_store_setup_wizard',);
        }
        not_es__RG__admin_store_setup_wizard:

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__admin_store_setup_wizard
            if ($pathinfo === '/fi/admin/store-setup-wizard') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fi__RG__admin_store_setup_wizard;
                }

                return array (  '_controller' => 'Elcodi\\Plugin\\StoreSetupWizardBundle\\Controller\\WizardController::viewAction',  '_locale' => 'fi',  '_route' => 'fi__RG__admin_store_setup_wizard',);
            }
            not_fi__RG__admin_store_setup_wizard:

            // fr__RG__admin_store_setup_wizard
            if ($pathinfo === '/fr/admin/store-setup-wizard') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fr__RG__admin_store_setup_wizard;
                }

                return array (  '_controller' => 'Elcodi\\Plugin\\StoreSetupWizardBundle\\Controller\\WizardController::viewAction',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_store_setup_wizard',);
            }
            not_fr__RG__admin_store_setup_wizard:

        }

        // gl__RG__admin_store_setup_wizard
        if ($pathinfo === '/gl/admin/store-setup-wizard') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_gl__RG__admin_store_setup_wizard;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\StoreSetupWizardBundle\\Controller\\WizardController::viewAction',  '_locale' => 'gl',  '_route' => 'gl__RG__admin_store_setup_wizard',);
        }
        not_gl__RG__admin_store_setup_wizard:

        // sr__RG__admin_store_setup_wizard
        if ($pathinfo === '/sr/admin/store-setup-wizard') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sr__RG__admin_store_setup_wizard;
            }

            return array (  '_controller' => 'Elcodi\\Plugin\\StoreSetupWizardBundle\\Controller\\WizardController::viewAction',  '_locale' => 'sr',  '_route' => 'sr__RG__admin_store_setup_wizard',);
        }
        not_sr__RG__admin_store_setup_wizard:

        // ca__RG__paymentsuite_stripe_execute
        if ($pathinfo === '/ca/payment/stripe/execute') {
            return array (  '_controller' => 'paymentsuite.stripe.payment_controller:executeAction',  '_locale' => 'ca',  '_route' => 'ca__RG__paymentsuite_stripe_execute',);
        }

        // de__RG__paymentsuite_stripe_execute
        if ($pathinfo === '/de/payment/stripe/execute') {
            return array (  '_controller' => 'paymentsuite.stripe.payment_controller:executeAction',  '_locale' => 'de',  '_route' => 'de__RG__paymentsuite_stripe_execute',);
        }

        // en__RG__paymentsuite_stripe_execute
        if ($pathinfo === '/payment/stripe/execute') {
            return array (  '_controller' => 'paymentsuite.stripe.payment_controller:executeAction',  '_locale' => 'en',  '_route' => 'en__RG__paymentsuite_stripe_execute',);
        }

        // es__RG__paymentsuite_stripe_execute
        if ($pathinfo === '/es/payment/stripe/execute') {
            return array (  '_controller' => 'paymentsuite.stripe.payment_controller:executeAction',  '_locale' => 'es',  '_route' => 'es__RG__paymentsuite_stripe_execute',);
        }

        if (0 === strpos($pathinfo, '/f')) {
            // fi__RG__paymentsuite_stripe_execute
            if ($pathinfo === '/fi/payment/stripe/execute') {
                return array (  '_controller' => 'paymentsuite.stripe.payment_controller:executeAction',  '_locale' => 'fi',  '_route' => 'fi__RG__paymentsuite_stripe_execute',);
            }

            // fr__RG__paymentsuite_stripe_execute
            if ($pathinfo === '/fr/payment/stripe/execute') {
                return array (  '_controller' => 'paymentsuite.stripe.payment_controller:executeAction',  '_locale' => 'fr',  '_route' => 'fr__RG__paymentsuite_stripe_execute',);
            }

        }

        // gl__RG__paymentsuite_stripe_execute
        if ($pathinfo === '/gl/payment/stripe/execute') {
            return array (  '_controller' => 'paymentsuite.stripe.payment_controller:executeAction',  '_locale' => 'gl',  '_route' => 'gl__RG__paymentsuite_stripe_execute',);
        }

        // sr__RG__paymentsuite_stripe_execute
        if ($pathinfo === '/sr/payment/stripe/execute') {
            return array (  '_controller' => 'paymentsuite.stripe.payment_controller:executeAction',  '_locale' => 'sr',  '_route' => 'sr__RG__paymentsuite_stripe_execute',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
