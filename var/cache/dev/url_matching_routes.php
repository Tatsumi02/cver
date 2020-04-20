<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\CvController::index'], null, null, null, false, false, null]],
        '/admin/init' => [[['_route' => 'app_cv_initroot', '_controller' => 'App\\Controller\\CvController::initRoot'], null, null, null, false, false, null]],
        '/add-admin' => [[['_route' => 'add_admin', '_controller' => 'App\\Controller\\CvController::root'], null, null, null, false, false, null]],
        '/del-admin' => [[['_route' => 'del_admin', '_controller' => 'App\\Controller\\CvController::delAdmin'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'dash', '_controller' => 'App\\Controller\\CvController::dash'], null, null, null, false, false, null]],
        '/modele' => [[['_route' => 'modele', '_controller' => 'App\\Controller\\CvController::modele'], null, null, null, false, false, null]],
        '/choix-modele' => [[['_route' => 'choix_model', '_controller' => 'App\\Controller\\CvController::choixModele'], null, null, null, false, false, null]],
        '/choix-modeles' => [[['_route' => 'les_modeles', '_controller' => 'App\\Controller\\CvController::modeles'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\CvController::inscription'], null, null, null, false, false, null]],
        '/save-user' => [[['_route' => 'save_user', '_controller' => 'App\\Controller\\CvController::saveUser'], null, null, null, false, false, null]],
        '/cv-start' => [[['_route' => 'cv_start', '_controller' => 'App\\Controller\\CvController::cvStart'], null, null, null, false, false, null]],
        '/critique' => [[['_route' => 'critique', '_controller' => 'App\\Controller\\CvController::critique'], null, null, null, false, false, null]],
        '/save-cv' => [[['_route' => 'save_cv', '_controller' => 'App\\Controller\\CvController::cvSave'], null, null, null, false, false, null]],
        '/apercu' => [[['_route' => 'visualisation', '_controller' => 'App\\Controller\\CvController::apercu'], null, null, null, false, false, null]],
        '/cv-user' => [[['_route' => 'son_cv', '_controller' => 'App\\Controller\\CvController::cvUser'], null, null, null, false, false, null]],
        '/pdp' => [[['_route' => 'app_pdp', '_controller' => 'App\\Controller\\CvController::new'], null, null, null, false, false, null]],
        '/admin-save' => [[['_route' => 'admin_save', '_controller' => 'App\\Controller\\CvController::saveAdmin'], null, null, null, false, false, null]],
        '/dashroot' => [[['_route' => 'dashroot', '_controller' => 'App\\Controller\\CvController::dashroot'], null, null, null, false, false, null]],
        '/build-model' => [[['_route' => 'build_model', '_controller' => 'App\\Controller\\CvController::buildModel'], null, null, null, false, false, null]],
        '/build-model-form' => [[['_route' => 'build_model_form', '_controller' => 'App\\Controller\\CvController::buildModelForm'], null, null, null, false, false, null]],
        '/build-model-tempo' => [[['_route' => 'build_model_tempo', '_controller' => 'App\\Controller\\CvController::teckFormTempo'], null, null, null, false, false, null]],
        '/build-model-img' => [[['_route' => 'build_model_img', '_controller' => 'App\\Controller\\CvController::buildModelImg'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
