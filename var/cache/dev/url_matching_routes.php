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
        '/' => [
            [['_route' => 'app_base_index', '_controller' => 'App\\Controller\\BaseController::index'], null, null, null, false, false, null],
            [['_route' => 'index', '_controller' => 'App\\Controller\\BaseController::index'], null, null, null, false, false, null],
        ],
        '/books' => [[['_route' => 'books', '_controller' => 'App\\Controller\\BooksController::index'], null, null, null, false, false, null]],
        '/books/create' => [[['_route' => 'create_books', '_controller' => 'App\\Controller\\BooksController::createProduct'], null, null, null, false, false, null]],
        '/books/all' => [[['_route' => 'find_all_books', '_controller' => 'App\\Controller\\BooksController::findAllProduct'], null, null, null, false, false, null]],
        '/product' => [[['_route' => 'product', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/product/create' => [[['_route' => 'create_product', '_controller' => 'App\\Controller\\ProductController::createProduct'], null, null, null, false, false, null]],
        '/product/all' => [[['_route' => 'find_all_product', '_controller' => 'App\\Controller\\ProductController::findAllProduct'], null, null, null, false, false, null]],
        '/dice-game' => [[['_route' => 'dice-game', '_controller' => 'App\\Controller\\BaseController::DiceGames'], null, null, null, false, false, null]],
        '/dice-try' => [[['_route' => 'dice-try', '_controller' => 'App\\Controller\\BaseController::DiceTry'], null, null, null, false, false, null]],
        '/books-index' => [[['_route' => 'books-index', '_controller' => 'App\\Controller\\BaseController::Books'], null, null, null, false, false, null]],
        '/highscore' => [[['_route' => 'highscore', '_controller' => 'App\\Controller\\BaseController::highscore'], null, null, null, false, false, null]],
        '/21_1' => [[['_route' => '211', '_controller' => 'App\\Controller\\BaseController::DiceOneGame'], null, null, null, false, false, null]],
        '/21_2' => [[['_route' => '212', '_controller' => 'App\\Controller\\BaseController::DiceTwoGame'], null, null, null, false, false, null]],
        '/roll' => [[['_route' => 'roll', '_controller' => 'App\\Controller\\BaseController::RollDice'], null, null, null, false, false, null]],
        '/reset' => [[['_route' => 'reset', '_controller' => 'App\\Controller\\BaseController::Reset'], null, null, null, false, false, null]],
        '/stop' => [[['_route' => 'stop', '_controller' => 'App\\Controller\\BaseController::stop'], null, null, null, false, false, null]],
        '/resetscore' => [[['_route' => 'resetscore', '_controller' => 'App\\Controller\\BaseController::ResetScore'], null, null, null, false, false, null]],
        '/rollTwo' => [[['_route' => 'rollTwo', '_controller' => 'App\\Controller\\BaseController::RollTwoDice'], null, null, null, false, false, null]],
        '/resetTwo' => [[['_route' => 'resetTwo', '_controller' => 'App\\Controller\\BaseController::ResetTwo'], null, null, null, false, false, null]],
        '/stopTwo' => [[['_route' => 'stopTwo', '_controller' => 'App\\Controller\\BaseController::stopTwo'], null, null, null, false, false, null]],
        '/resetscoreTwo' => [[['_route' => 'resetscoreTwo', '_controller' => 'App\\Controller\\BaseController::ResetScoreTwo'], null, null, null, false, false, null]],
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
                .'|/product/([^/]++)(*:186)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        186 => [
            [['_route' => 'product_find_by_id', '_controller' => 'App\\Controller\\ProductController::findByIdProduct'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
