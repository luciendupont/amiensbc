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
        '/' => [[['_route' => 'app_accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/adresse' => [[['_route' => 'app_adresse_index', '_controller' => 'App\\Controller\\AdresseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/adresse/new' => [[['_route' => 'app_adresse_new', '_controller' => 'App\\Controller\\AdresseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/adresse/new/fact' => [[['_route' => 'app_adresse_new_fact', '_controller' => 'App\\Controller\\AdresseController::fact'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/aeroboxe' => [[['_route' => 'app_aeroboxe', '_controller' => 'App\\Controller\\AeroboxeController::index'], null, null, null, false, false, null]],
        '/ba' => [[['_route' => 'app_ba', '_controller' => 'App\\Controller\\BaController::index'], null, null, null, false, false, null]],
        '/bea' => [[['_route' => 'app_bea', '_controller' => 'App\\Controller\\BeaController::index'], null, null, null, false, false, null]],
        '/bp' => [[['_route' => 'app_bp', '_controller' => 'App\\Controller\\BpController::index'], null, null, null, false, false, null]],
        '/mon-panier' => [[['_route' => 'app_cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/mon-panier/removeAll' => [[['_route' => 'cart_removeAll', '_controller' => 'App\\Controller\\CartController::removeAll'], null, null, null, false, false, null]],
        '/club' => [[['_route' => 'app_club', '_controller' => 'App\\Controller\\ClubController::index'], null, null, null, false, false, null]],
        '/order/create' => [[['_route' => 'order_create', '_controller' => 'App\\Controller\\CommandeController::index'], null, null, null, false, false, null]],
        '/order/verify' => [[['_route' => 'order_prepare', '_controller' => 'App\\Controller\\CommandeController::prepareOrder'], null, ['POST' => 0], null, false, false, null]],
        '/formedeboxe' => [[['_route' => 'app_formedeboxe', '_controller' => 'App\\Controller\\FormedeboxeController::index'], null, null, null, false, false, null]],
        '/horaire' => [[['_route' => 'app_horaire', '_controller' => 'App\\Controller\\HoraireController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_inscription', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_connexion', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|pi(?'
                        .'|/\\.well\\-known/genid/([^/]++)(*:46)'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:81)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:111)'
                            .'|c(?'
                                .'|o(?'
                                    .'|ntexts/([^.]+)(?:\\.(jsonld))?(*:156)'
                                    .'|mmandes(?'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(*:200)'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:226)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:264)'
                                        .')'
                                    .')'
                                .')'
                                .'|lubs(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:308)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:334)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:372)'
                                    .')'
                                .')'
                            .')'
                            .'|errors/([^/]++)(?'
                                .'|(*:401)'
                            .')'
                            .'|validation_errors/([^/]++)(?'
                                .'|(*:439)'
                            .')'
                            .'|adresses(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:485)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:511)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:549)'
                                .')'
                            .')'
                            .'|boxe(?'
                                .'|s(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:596)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:622)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:660)'
                                    .')'
                                .')'
                                .'|urs(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:702)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:728)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:766)'
                                    .')'
                                .')'
                            .')'
                            .'|formedeboxes(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:818)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:844)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:882)'
                                .')'
                            .')'
                            .'|licences(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:929)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:955)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:993)'
                                .')'
                            .')'
                            .'|paniers(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1039)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1066)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1105)'
                                .')'
                            .')'
                            .'|userss(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1151)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1178)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1217)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|dresse/([^/]++)(?'
                        .'|(*:1248)'
                        .'|/edit(*:1262)'
                        .'|(*:1271)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1313)'
                    .'|wdt/([^/]++)(*:1334)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:1377)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:1415)'
                                .'|router(*:1430)'
                                .'|exception(?'
                                    .'|(*:1451)'
                                    .'|\\.css(*:1465)'
                                .')'
                            .')'
                            .'|(*:1476)'
                        .')'
                    .')'
                .')'
                .'|/mon\\-panier/(?'
                    .'|add/(\\d+)(*:1513)'
                    .'|remove/([^/]++)(*:1537)'
                .')'
                .'|/order/(?'
                    .'|create\\-session\\-stripe/([^/]++)(*:1589)'
                    .'|success/([^/]++)(*:1614)'
                    .'|error/([^/]++)(*:1637)'
                .')'
                .'|/stripe/(?'
                    .'|create\\-charge/([^/]++)(*:1681)'
                    .'|([^/]++)(*:1698)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        46 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        81 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        111 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        156 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        200 => [[['_route' => '_api_/commandes/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commande', '_api_operation_name' => '_api_/commandes/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        226 => [
            [['_route' => '_api_/commandes{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commande', '_api_operation_name' => '_api_/commandes{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/commandes{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commande', '_api_operation_name' => '_api_/commandes{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        264 => [
            [['_route' => '_api_/commandes/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commande', '_api_operation_name' => '_api_/commandes/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/commandes/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commande', '_api_operation_name' => '_api_/commandes/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/commandes/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commande', '_api_operation_name' => '_api_/commandes/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        308 => [[['_route' => '_api_/clubs/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Club', '_api_operation_name' => '_api_/clubs/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        334 => [
            [['_route' => '_api_/clubs{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Club', '_api_operation_name' => '_api_/clubs{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/clubs{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Club', '_api_operation_name' => '_api_/clubs{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        372 => [
            [['_route' => '_api_/clubs/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Club', '_api_operation_name' => '_api_/clubs/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/clubs/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Club', '_api_operation_name' => '_api_/clubs/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/clubs/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Club', '_api_operation_name' => '_api_/clubs/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        401 => [
            [['_route' => '_api_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_problem'], ['status'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_hydra'], ['status'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_jsonapi'], ['status'], ['GET' => 0], null, false, true, null],
        ],
        439 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        485 => [[['_route' => '_api_/adresses/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Adresse', '_api_operation_name' => '_api_/adresses/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        511 => [
            [['_route' => '_api_/adresses{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Adresse', '_api_operation_name' => '_api_/adresses{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/adresses{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Adresse', '_api_operation_name' => '_api_/adresses{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        549 => [
            [['_route' => '_api_/adresses/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Adresse', '_api_operation_name' => '_api_/adresses/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/adresses/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Adresse', '_api_operation_name' => '_api_/adresses/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/adresses/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Adresse', '_api_operation_name' => '_api_/adresses/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        596 => [[['_route' => '_api_/boxes/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Boxe', '_api_operation_name' => '_api_/boxes/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        622 => [
            [['_route' => '_api_/boxes{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Boxe', '_api_operation_name' => '_api_/boxes{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/boxes{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Boxe', '_api_operation_name' => '_api_/boxes{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        660 => [
            [['_route' => '_api_/boxes/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Boxe', '_api_operation_name' => '_api_/boxes/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/boxes/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Boxe', '_api_operation_name' => '_api_/boxes/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/boxes/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Boxe', '_api_operation_name' => '_api_/boxes/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        702 => [[['_route' => '_api_/boxeurs/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Boxeur', '_api_operation_name' => '_api_/boxeurs/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        728 => [
            [['_route' => '_api_/boxeurs{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Boxeur', '_api_operation_name' => '_api_/boxeurs{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/boxeurs{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Boxeur', '_api_operation_name' => '_api_/boxeurs{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        766 => [
            [['_route' => '_api_/boxeurs/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Boxeur', '_api_operation_name' => '_api_/boxeurs/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/boxeurs/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Boxeur', '_api_operation_name' => '_api_/boxeurs/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/boxeurs/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Boxeur', '_api_operation_name' => '_api_/boxeurs/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        818 => [[['_route' => '_api_/formedeboxes/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Formedeboxe', '_api_operation_name' => '_api_/formedeboxes/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        844 => [
            [['_route' => '_api_/formedeboxes{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Formedeboxe', '_api_operation_name' => '_api_/formedeboxes{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/formedeboxes{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Formedeboxe', '_api_operation_name' => '_api_/formedeboxes{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        882 => [
            [['_route' => '_api_/formedeboxes/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Formedeboxe', '_api_operation_name' => '_api_/formedeboxes/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/formedeboxes/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Formedeboxe', '_api_operation_name' => '_api_/formedeboxes/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/formedeboxes/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Formedeboxe', '_api_operation_name' => '_api_/formedeboxes/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        929 => [[['_route' => '_api_/licences/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Licence', '_api_operation_name' => '_api_/licences/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        955 => [
            [['_route' => '_api_/licences{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Licence', '_api_operation_name' => '_api_/licences{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/licences{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Licence', '_api_operation_name' => '_api_/licences{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        993 => [
            [['_route' => '_api_/licences/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Licence', '_api_operation_name' => '_api_/licences/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/licences/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Licence', '_api_operation_name' => '_api_/licences/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/licences/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Licence', '_api_operation_name' => '_api_/licences/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1039 => [[['_route' => '_api_/paniers/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Panier', '_api_operation_name' => '_api_/paniers/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1066 => [
            [['_route' => '_api_/paniers{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Panier', '_api_operation_name' => '_api_/paniers{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/paniers{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Panier', '_api_operation_name' => '_api_/paniers{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1105 => [
            [['_route' => '_api_/paniers/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Panier', '_api_operation_name' => '_api_/paniers/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/paniers/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Panier', '_api_operation_name' => '_api_/paniers/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/paniers/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Panier', '_api_operation_name' => '_api_/paniers/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1151 => [[['_route' => '_api_/userss/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Users', '_api_operation_name' => '_api_/userss/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1178 => [
            [['_route' => '_api_/userss{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Users', '_api_operation_name' => '_api_/userss{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/userss{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Users', '_api_operation_name' => '_api_/userss{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1217 => [
            [['_route' => '_api_/userss/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Users', '_api_operation_name' => '_api_/userss/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/userss/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Users', '_api_operation_name' => '_api_/userss/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/userss/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Users', '_api_operation_name' => '_api_/userss/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1248 => [[['_route' => 'app_adresse_show', '_controller' => 'App\\Controller\\AdresseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1262 => [[['_route' => 'app_adresse_edit', '_controller' => 'App\\Controller\\AdresseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1271 => [[['_route' => 'app_adresse_delete', '_controller' => 'App\\Controller\\AdresseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1313 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1334 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1377 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        1415 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1430 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1451 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1465 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1476 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        1513 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::addToRoute'], ['id'], null, null, false, true, null]],
        1537 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::removeToCart'], ['id'], null, null, false, true, null]],
        1589 => [[['_route' => 'payment_stripe', '_controller' => 'App\\Controller\\PaymentController::stripeCheckout'], ['reference'], null, null, false, true, null]],
        1614 => [[['_route' => 'payment_success', '_controller' => 'App\\Controller\\PaymentController::StripeSuccess'], ['reference'], null, null, false, true, null]],
        1637 => [[['_route' => 'payment_error', '_controller' => 'App\\Controller\\PaymentController::StripeError'], ['reference'], null, null, false, true, null]],
        1681 => [[['_route' => 'app_stripe_charge', '_controller' => 'App\\Controller\\StripeController::createCharge'], ['reference'], ['POST' => 0], null, false, true, null]],
        1698 => [
            [['_route' => 'app_stripe', '_controller' => 'App\\Controller\\StripeController::index'], ['reference'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
