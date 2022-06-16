<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin_panel' => [[['_route' => 'app_admin_panel', '_controller' => 'App\\Controller\\AdminPanelController::index'], null, null, null, false, false, null]],
        '/boutique' => [[['_route' => 'app_boutique', '_controller' => 'App\\Controller\\BoutiqueController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/equipe' => [[['_route' => 'app_equipe', '_controller' => 'App\\Controller\\EquipeController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/partenariat' => [[['_route' => 'app_partenariat', '_controller' => 'App\\Controller\\PartenariatController::index'], null, null, null, false, false, null]],
        '/projet' => [[['_route' => 'app_projet', '_controller' => 'App\\Controller\\ProjetController::index'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/delete_(?'
                    .'|p(?'
                        .'|rojet/(\\d+)(*:33)'
                        .'|artenaire/(\\d+)(*:55)'
                    .')'
                    .'|article/(\\d+)(*:76)'
                .')'
                .'|/projet/([^/]++)(*:100)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:139)'
                    .'|wdt/([^/]++)(*:159)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:205)'
                            .'|router(*:219)'
                            .'|exception(?'
                                .'|(*:239)'
                                .'|\\.css(*:252)'
                            .')'
                        .')'
                        .'|(*:262)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        33 => [[['_route' => 'delete_route_projet', '_controller' => 'App\\Controller\\AdminPanelController::delete_projet'], ['id'], null, null, false, true, null]],
        55 => [[['_route' => 'delete_route_partenaire', '_controller' => 'App\\Controller\\AdminPanelController::delete_partenaire'], ['id'], null, null, false, true, null]],
        76 => [[['_route' => 'delete_route_article', '_controller' => 'App\\Controller\\AdminPanelController::delete_article'], ['id'], null, null, false, true, null]],
        100 => [[['_route' => 'projet_show', '_controller' => 'App\\Controller\\ProjetController::show'], ['id'], null, null, false, true, null]],
        139 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        159 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        205 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        219 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        239 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        252 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        262 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
