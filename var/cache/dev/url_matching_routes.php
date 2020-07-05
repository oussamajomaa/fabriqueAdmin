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
        '/editor/dashbord' => [[['_route' => 'editor_dashbord', '_controller' => 'App\\Controller\\AdminController::dashbord'], null, null, null, false, false, null]],
        '/admin/utilisateur' => [[['_route' => 'admin_utilisateur', '_controller' => 'App\\Controller\\AdminController::utilisateur'], null, null, null, false, false, null]],
        '/admin/utilisateur/chercher' => [[['_route' => 'admin_chercher_user', '_controller' => 'App\\Controller\\AdminController::chercher'], null, null, null, false, false, null]],
        '/apprenant/profil' => [[['_route' => 'apprenant_profil', '_controller' => 'App\\Controller\\ApprenantController::apprenant'], null, null, null, false, false, null]],
        '/editor/retard/new' => [[['_route' => 'editor_retard_new', '_controller' => 'App\\Controller\\EditAbsenceController::retard_new'], null, null, null, false, false, null]],
        '/editor/absence/new' => [[['_route' => 'editor_absence_new', '_controller' => 'App\\Controller\\EditAbsenceController::absence_new'], null, null, null, false, false, null]],
        '/editor/apprenant/new' => [[['_route' => 'editor_apprenant_new', '_controller' => 'App\\Controller\\EditApprenantController::apprenant_new'], null, null, null, false, false, null]],
        '/editor/competence' => [[['_route' => 'editor_competence', '_controller' => 'App\\Controller\\EditApprenantController::competence'], null, null, null, false, false, null]],
        '/edit/competence' => [[['_route' => 'edit_competence', '_controller' => 'App\\Controller\\EditCompetenceController::index'], null, null, null, false, false, null]],
        '/editor/entreprise/new' => [[['_route' => 'editor_entreprise_new', '_controller' => 'App\\Controller\\EditEntrepriseController::entreprise_new'], null, null, null, false, false, null]],
        '/editor/offre/new' => [[['_route' => 'editor_offre_new', '_controller' => 'App\\Controller\\EditEntrepriseController::offre_new'], null, null, null, false, false, null]],
        '/editor/contact/new' => [[['_route' => 'editor_new_contact', '_controller' => 'App\\Controller\\EditEntrepriseController::new_contact'], null, null, null, false, false, null]],
        '/editor/promotion/new' => [[['_route' => 'editor_promo_new', '_controller' => 'App\\Controller\\EditPromotionController::promo_new'], null, null, null, false, false, null]],
        '/editor/promotion/attr' => [[['_route' => 'editor_attr', '_controller' => 'App\\Controller\\EditPromotionController::editor_attr'], null, null, null, false, false, null]],
        '/editor/formation/new' => [[['_route' => 'editor_formation_new', '_controller' => 'App\\Controller\\FormationController::formation_new'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/check_role' => [[['_route' => 'check_role', '_controller' => 'App\\Controller\\MainController::check_role'], null, null, null, false, false, null]],
        '/access_denied' => [[['_route' => 'access_denied', '_controller' => 'App\\Controller\\MainController::access_denied'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
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
                .'|/admin/utilisateur/(?'
                    .'|delete/([^/]++)(*:206)'
                    .'|modif/([^/]++)(*:228)'
                .')'
                .'|/editor/(?'
                    .'|retard(?'
                        .'|(?:(\\d+))?(*:267)'
                        .'|/(?'
                            .'|edit/([^/]++)(*:292)'
                            .'|delete/([^/]++)(*:315)'
                            .'|chercher(?:/(\\d+))?(*:342)'
                        .')'
                    .')'
                    .'|a(?'
                        .'|bsence(?'
                            .'|(?:(\\d+))?(*:375)'
                            .'|/(?'
                                .'|edit/([^/]++)(*:400)'
                                .'|delete/([^/]++)(*:423)'
                                .'|chercher(?:/(\\d+))?(*:450)'
                            .')'
                        .')'
                        .'|pprenant(?'
                            .'|(?:/(\\d+))?(*:482)'
                            .'|/(?'
                                .'|show/([^/]++)(*:507)'
                                .'|edit/([^/]++)(*:528)'
                                .'|delete/([^/]++)(*:551)'
                                .'|chercher(?:/(\\d+))?(*:578)'
                            .')'
                        .')'
                    .')'
                    .'|entreprise(?'
                        .'|(?:(\\d+))?(*:612)'
                        .'|/(?'
                            .'|edit/([^/]++)(*:637)'
                            .'|delete/([^/]++)(*:660)'
                        .')'
                    .')'
                    .'|offre(?'
                        .'|(?:(\\d+))?(*:688)'
                        .'|/(?'
                            .'|edit([^/]++)(*:712)'
                            .'|delete/([^/]++)(*:735)'
                        .')'
                    .')'
                    .'|contact(?'
                        .'|(?:(\\d+))?(*:765)'
                        .'|/(?'
                            .'|chercher(?:(\\d+))?(*:795)'
                            .'|delete/([^/]++)(*:818)'
                            .'|edit/([^/]++)(*:839)'
                        .')'
                    .')'
                    .'|pro(?'
                        .'|motion(?'
                            .'|(?:(\\d+))?(*:874)'
                            .'|/(?'
                                .'|edit/([^/]++)(*:899)'
                                .'|show/([^/]++)(*:920)'
                                .'|delete/([^/]++)(*:943)'
                                .'|retirer/([^/]++)(*:967)'
                            .')'
                        .')'
                        .'|_apprenant_show/([^/]++)(*:1001)'
                    .')'
                    .'|formation(?'
                        .'|(?:(\\d+))?(*:1033)'
                        .'|/(?'
                            .'|edit/([^/]++)(*:1059)'
                            .'|delete/([^/]++)(*:1083)'
                        .')'
                    .')'
                .')'
                .'|/reserve/(?'
                    .'|promotion(?'
                        .'|(?:(\\d+))?(*:1129)'
                        .'|/show/([^/]++)(*:1152)'
                    .')'
                    .'|apprenant_show/([^/]++)(*:1185)'
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
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        206 => [[['_route' => 'admin_delete_user', '_controller' => 'App\\Controller\\AdminController::delete_user'], ['id'], null, null, false, true, null]],
        228 => [[['_route' => 'admin_modif_user', '_controller' => 'App\\Controller\\AdminController::modif_user'], ['id'], null, null, false, true, null]],
        267 => [[['_route' => 'editor_retard', 'page' => '1', '_controller' => 'App\\Controller\\EditAbsenceController::retard'], ['page'], null, null, false, true, null]],
        292 => [[['_route' => 'editor_retard_edit', '_controller' => 'App\\Controller\\EditAbsenceController::retard_edit'], ['id'], null, null, false, true, null]],
        315 => [[['_route' => 'editor_retard_delete', '_controller' => 'App\\Controller\\EditAbsenceController::retard_delete'], ['id'], null, null, false, true, null]],
        342 => [[['_route' => 'editor_retard_chercher', 'page' => '1', '_controller' => 'App\\Controller\\EditAbsenceController::chercher_retard'], ['page'], null, null, false, true, null]],
        375 => [[['_route' => 'editor_absence', 'page' => '1', '_controller' => 'App\\Controller\\EditAbsenceController::absence'], ['page'], null, null, false, true, null]],
        400 => [[['_route' => 'editor_absence_edit', '_controller' => 'App\\Controller\\EditAbsenceController::absence_edit'], ['id'], null, null, false, true, null]],
        423 => [[['_route' => 'editor_absence_delete', '_controller' => 'App\\Controller\\EditAbsenceController::absence_delete'], ['id'], null, null, false, true, null]],
        450 => [[['_route' => 'editor_absence_chercher', 'page' => '1', '_controller' => 'App\\Controller\\EditAbsenceController::chercher_absence'], ['page'], null, null, false, true, null]],
        482 => [[['_route' => 'editor_apprenant_liste', 'page' => '1', '_controller' => 'App\\Controller\\EditApprenantController::apprenant_liste'], ['page'], null, null, false, true, null]],
        507 => [[['_route' => 'editor_apprenant_show', '_controller' => 'App\\Controller\\EditApprenantController::apprenant_show'], ['id'], null, null, false, true, null]],
        528 => [[['_route' => 'editor_edit_apprenant', '_controller' => 'App\\Controller\\EditApprenantController::edit_apprenant'], ['id'], null, null, false, true, null]],
        551 => [[['_route' => 'editor_apprenant_delete', '_controller' => 'App\\Controller\\EditApprenantController::delete_apprenant'], ['id'], null, null, false, true, null]],
        578 => [[['_route' => 'editor_apprenant_chercher', 'page' => '1', '_controller' => 'App\\Controller\\EditApprenantController::chercher'], ['page'], null, null, false, true, null]],
        612 => [[['_route' => 'editor_entreprise', 'page' => '1', '_controller' => 'App\\Controller\\EditEntrepriseController::entreprise_list'], ['page'], null, null, false, true, null]],
        637 => [[['_route' => 'editor_entreprise_edit', '_controller' => 'App\\Controller\\EditEntrepriseController::entreprise_edit'], ['id'], null, null, false, true, null]],
        660 => [[['_route' => 'editor_entreprise_delete', '_controller' => 'App\\Controller\\EditEntrepriseController::entreprise_delete'], ['id'], null, null, false, true, null]],
        688 => [[['_route' => 'editor_offre', 'page' => '1', '_controller' => 'App\\Controller\\EditEntrepriseController::offre_list'], ['page'], null, null, false, true, null]],
        712 => [[['_route' => 'editor_offre_edit', '_controller' => 'App\\Controller\\EditEntrepriseController::offre_edit'], ['id'], null, null, false, true, null]],
        735 => [[['_route' => 'editor_offre_delete', '_controller' => 'App\\Controller\\EditEntrepriseController::offre_delete'], ['id'], null, null, false, true, null]],
        765 => [[['_route' => 'editor_contact', 'page' => '1', '_controller' => 'App\\Controller\\EditEntrepriseController::contact_list'], ['page'], null, null, false, true, null]],
        795 => [[['_route' => 'editor_contact_chercher', 'page' => '1', '_controller' => 'App\\Controller\\EditEntrepriseController::contact_chercher'], ['page'], null, null, false, true, null]],
        818 => [[['_route' => 'editor_contact_delete', '_controller' => 'App\\Controller\\EditEntrepriseController::contact_delete'], ['id'], null, null, false, true, null]],
        839 => [[['_route' => 'editor_edit_contact', '_controller' => 'App\\Controller\\EditEntrepriseController::edit_contact'], ['id'], null, null, false, true, null]],
        874 => [[['_route' => 'editor_promo_liste', 'page' => '1', '_controller' => 'App\\Controller\\EditPromotionController::promo_list'], ['page'], null, null, false, true, null]],
        899 => [[['_route' => 'editor_edit_promotion', '_controller' => 'App\\Controller\\EditPromotionController::edit_promotion'], ['id'], null, null, false, true, null]],
        920 => [[['_route' => 'editor_show_promotion', '_controller' => 'App\\Controller\\EditPromotionController::show_promotion'], ['id'], null, null, false, true, null]],
        943 => [[['_route' => 'editor_delete_promotion', '_controller' => 'App\\Controller\\EditPromotionController::delete_promotion'], ['id'], null, null, false, true, null]],
        967 => [[['_route' => 'editor_retirer_apprenant', '_controller' => 'App\\Controller\\EditPromotionController::retirer_apprenant'], ['id'], null, null, false, true, null]],
        1001 => [[['_route' => 'editor_pro_apprenant_show', '_controller' => 'App\\Controller\\EditPromotionController::pro_apprenant_show'], ['id'], null, null, false, true, null]],
        1033 => [[['_route' => 'editor_formation', 'page' => '1', '_controller' => 'App\\Controller\\FormationController::formation'], ['page'], null, null, false, true, null]],
        1059 => [[['_route' => 'editor_edit_formation', '_controller' => 'App\\Controller\\FormationController::edit_formation'], ['id'], null, null, false, true, null]],
        1083 => [[['_route' => 'editor_delete_formation', '_controller' => 'App\\Controller\\FormationController::delete_formation'], ['id'], null, null, false, true, null]],
        1129 => [[['_route' => 'reserve_promotion', 'page' => '1', '_controller' => 'App\\Controller\\ReserveController::promo_list'], ['page'], null, null, false, true, null]],
        1152 => [[['_route' => 'reserve_show_promotion', '_controller' => 'App\\Controller\\ReserveController::show_promotion'], ['id'], null, null, false, true, null]],
        1185 => [
            [['_route' => 'reserve_apprenant_show', '_controller' => 'App\\Controller\\ReserveController::pro_apprenant_show'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
