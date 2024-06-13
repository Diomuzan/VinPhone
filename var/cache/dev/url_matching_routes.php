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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/redirect' => [[['_route' => 'redirect', '_controller' => 'App\\Controller\\LoginController::redirectAction'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/admin/news' => [[['_route' => 'admin_news', '_controller' => 'App\\Controller\\NewsController::admin_news'], null, ['GET' => 0], null, false, false, null]],
        '/member/news' => [[['_route' => 'member_news', '_controller' => 'App\\Controller\\NewsController::member_news'], null, ['GET' => 0], null, false, false, null]],
        '/admin/news/new' => [[['_route' => 'news_new', '_controller' => 'App\\Controller\\NewsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\PhoneController::admin_dashboard'], null, null, null, false, false, null]],
        '/member/dashboard' => [[['_route' => 'member_dashboard', '_controller' => 'App\\Controller\\PhoneController::member_home'], null, null, null, false, false, null]],
        '/admin/add' => [[['_route' => 'add', '_controller' => 'App\\Controller\\PhoneController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/admin/user-manager' => [[['_route' => 'user_manager', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/new' => [[['_route' => 'user_manager_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\VinPhoneController::guest_home'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/news/detail/([^/]++)(*:223)'
                .'|/admin/(?'
                    .'|news/(?'
                        .'|edit/([^/]++)(*:262)'
                        .'|delete/([^/]++)(*:285)'
                    .')'
                    .'|de(?'
                        .'|tail/([^/]++)(*:312)'
                        .'|lete/([^/]++)(*:333)'
                    .')'
                    .'|edit/([^/]++)(*:355)'
                    .'|user\\-manager/(?'
                        .'|edit/([^/]++)(*:393)'
                        .'|delete/([^/]++)(*:416)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        223 => [[['_route' => 'news_detail', '_controller' => 'App\\Controller\\NewsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        262 => [[['_route' => 'news_edit', '_controller' => 'App\\Controller\\NewsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        285 => [[['_route' => 'news_delete', '_controller' => 'App\\Controller\\NewsController::delete'], ['id'], null, null, false, true, null]],
        312 => [[['_route' => 'phone_detail', '_controller' => 'App\\Controller\\PhoneController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        333 => [[['_route' => 'phone_delete', '_controller' => 'App\\Controller\\PhoneController::delete'], ['id'], null, null, false, true, null]],
        355 => [[['_route' => 'phone_edit', '_controller' => 'App\\Controller\\PhoneController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        393 => [[['_route' => 'user_manager_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        416 => [
            [['_route' => 'user_manager_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
