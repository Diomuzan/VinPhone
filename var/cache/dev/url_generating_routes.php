<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\LoginController::login'], [], [['text', '/login']], [], [], []],
    'redirect' => [[], ['_controller' => 'App\\Controller\\LoginController::redirectAction'], [], [['text', '/redirect']], [], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\LoginController::logout'], [], [['text', '/logout']], [], [], []],
    'admin_news' => [[], ['_controller' => 'App\\Controller\\NewsController::admin_news'], [], [['text', '/admin/news']], [], [], []],
    'member_news' => [[], ['_controller' => 'App\\Controller\\NewsController::member_news'], [], [['text', '/member/news']], [], [], []],
    'news_new' => [[], ['_controller' => 'App\\Controller\\NewsController::new'], [], [['text', '/admin/news/new']], [], [], []],
    'news_detail' => [['id'], ['_controller' => 'App\\Controller\\NewsController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/news/detail']], [], [], []],
    'news_edit' => [['id'], ['_controller' => 'App\\Controller\\NewsController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/news/edit']], [], [], []],
    'news_delete' => [['id'], ['_controller' => 'App\\Controller\\NewsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/news/delete']], [], [], []],
    'admin_dashboard' => [[], ['_controller' => 'App\\Controller\\PhoneController::admin_dashboard'], [], [['text', '/admin/dashboard']], [], [], []],
    'member_dashboard' => [[], ['_controller' => 'App\\Controller\\PhoneController::member_home'], [], [['text', '/member/dashboard']], [], [], []],
    'add' => [[], ['_controller' => 'App\\Controller\\PhoneController::new'], [], [['text', '/admin/add']], [], [], []],
    'phone_detail' => [['id'], ['_controller' => 'App\\Controller\\PhoneController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/detail']], [], [], []],
    'phone_edit' => [['id'], ['_controller' => 'App\\Controller\\PhoneController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/edit']], [], [], []],
    'phone_delete' => [['id'], ['_controller' => 'App\\Controller\\PhoneController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/delete']], [], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'user_manager' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/admin/user-manager']], [], [], []],
    'user_manager_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/admin/user-manager/new']], [], [], []],
    'user_manager_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user-manager/edit']], [], [], []],
    'user_manager_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user-manager/delete']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\VinPhoneController::guest_home'], [], [['text', '/home']], [], [], []],
    'App\Controller\LoginController::login' => [[], ['_controller' => 'App\\Controller\\LoginController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\LoginController::redirectAction' => [[], ['_controller' => 'App\\Controller\\LoginController::redirectAction'], [], [['text', '/redirect']], [], [], []],
    'App\Controller\LoginController::logout' => [[], ['_controller' => 'App\\Controller\\LoginController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\NewsController::admin_news' => [[], ['_controller' => 'App\\Controller\\NewsController::admin_news'], [], [['text', '/admin/news']], [], [], []],
    'App\Controller\NewsController::member_news' => [[], ['_controller' => 'App\\Controller\\NewsController::member_news'], [], [['text', '/member/news']], [], [], []],
    'App\Controller\NewsController::new' => [[], ['_controller' => 'App\\Controller\\NewsController::new'], [], [['text', '/admin/news/new']], [], [], []],
    'App\Controller\NewsController::show' => [['id'], ['_controller' => 'App\\Controller\\NewsController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/news/detail']], [], [], []],
    'App\Controller\NewsController::edit' => [['id'], ['_controller' => 'App\\Controller\\NewsController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/news/edit']], [], [], []],
    'App\Controller\NewsController::delete' => [['id'], ['_controller' => 'App\\Controller\\NewsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/news/delete']], [], [], []],
    'App\Controller\PhoneController::admin_dashboard' => [[], ['_controller' => 'App\\Controller\\PhoneController::admin_dashboard'], [], [['text', '/admin/dashboard']], [], [], []],
    'App\Controller\PhoneController::member_home' => [[], ['_controller' => 'App\\Controller\\PhoneController::member_home'], [], [['text', '/member/dashboard']], [], [], []],
    'App\Controller\PhoneController::new' => [[], ['_controller' => 'App\\Controller\\PhoneController::new'], [], [['text', '/admin/add']], [], [], []],
    'App\Controller\PhoneController::show' => [['id'], ['_controller' => 'App\\Controller\\PhoneController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/detail']], [], [], []],
    'App\Controller\PhoneController::edit' => [['id'], ['_controller' => 'App\\Controller\\PhoneController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/edit']], [], [], []],
    'App\Controller\PhoneController::delete' => [['id'], ['_controller' => 'App\\Controller\\PhoneController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/delete']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'App\Controller\UserController::index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/admin/user-manager']], [], [], []],
    'App\Controller\UserController::new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/admin/user-manager/new']], [], [], []],
    'App\Controller\UserController::edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user-manager/edit']], [], [], []],
    'App\Controller\UserController::delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user-manager/delete']], [], [], []],
    'App\Controller\VinPhoneController::guest_home' => [[], ['_controller' => 'App\\Controller\\VinPhoneController::guest_home'], [], [['text', '/home']], [], [], []],
];
