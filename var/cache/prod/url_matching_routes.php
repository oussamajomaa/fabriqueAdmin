<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/admin/utilisateur/(?'
                    .'|delete/([^/]++)(*:44)'
                    .'|modif/([^/]++)(*:65)'
                .')'
                .'|/editor/(?'
                    .'|retard(?'
                        .'|(?:(\\d+))?(*:103)'
                        .'|/(?'
                            .'|edit/([^/]++)(*:128)'
                            .'|delete/([^/]++)(*:151)'
                            .'|chercher(?:/(\\d+))?(*:178)'
                        .')'
                    .')'
                    .'|a(?'
                        .'|bsence(?'
                            .'|(?:(\\d+))?(*:211)'
                            .'|/(?'
                                .'|edit/([^/]++)(*:236)'
                                .'|delete/([^/]++)(*:259)'
                                .'|chercher(?:/(\\d+))?(*:286)'
                            .')'
                        .')'
                        .'|pprenant(?'
                            .'|(?:/(\\d+))?(*:318)'
                            .'|/(?'
                                .'|show/([^/]++)(*:343)'
                                .'|edit/([^/]++)(*:364)'
                                .'|delete/([^/]++)(*:387)'
                                .'|chercher(?:/(\\d+))?(*:414)'
                            .')'
                        .')'
                    .')'
                    .'|entreprise(?'
                        .'|(?:(\\d+))?(*:448)'
                        .'|/(?'
                            .'|edit/([^/]++)(*:473)'
                            .'|delete/([^/]++)(*:496)'
                        .')'
                    .')'
                    .'|offre(?'
                        .'|(?:(\\d+))?(*:524)'
                        .'|/(?'
                            .'|edit([^/]++)(*:548)'
                            .'|delete/([^/]++)(*:571)'
                        .')'
                    .')'
                    .'|contact(?'
                        .'|(?:(\\d+))?(*:601)'
                        .'|/(?'
                            .'|chercher(?:(\\d+))?(*:631)'
                            .'|delete/([^/]++)(*:654)'
                            .'|edit/([^/]++)(*:675)'
                        .')'
                    .')'
                    .'|pro(?'
                        .'|motion(?'
                            .'|(?:(\\d+))?(*:710)'
                            .'|/(?'
                                .'|edit/([^/]++)(*:735)'
                                .'|show/([^/]++)(*:756)'
                                .'|delete/([^/]++)(*:779)'
                                .'|retirer/([^/]++)(*:803)'
                            .')'
                        .')'
                        .'|_apprenant_show/([^/]++)(*:837)'
                    .')'
                    .'|formation(?'
                        .'|(?:(\\d+))?(*:868)'
                        .'|/(?'
                            .'|edit/([^/]++)(*:893)'
                            .'|delete/([^/]++)(*:916)'
                        .')'
                    .')'
                .')'
                .'|/reserve/(?'
                    .'|promotion(?'
                        .'|(?:(\\d+))?(*:961)'
                        .'|/show/([^/]++)(*:983)'
                    .')'
                    .'|apprenant_show/([^/]++)(*:1015)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        44 => [[['_route' => 'admin_delete_user', '_controller' => 'App\\Controller\\AdminController::delete_user'], ['id'], null, null, false, true, null]],
        65 => [[['_route' => 'admin_modif_user', '_controller' => 'App\\Controller\\AdminController::modif_user'], ['id'], null, null, false, true, null]],
        103 => [[['_route' => 'editor_retard', 'page' => '1', '_controller' => 'App\\Controller\\EditAbsenceController::retard'], ['page'], null, null, false, true, null]],
        128 => [[['_route' => 'editor_retard_edit', '_controller' => 'App\\Controller\\EditAbsenceController::retard_edit'], ['id'], null, null, false, true, null]],
        151 => [[['_route' => 'editor_retard_delete', '_controller' => 'App\\Controller\\EditAbsenceController::retard_delete'], ['id'], null, null, false, true, null]],
        178 => [[['_route' => 'editor_retard_chercher', 'page' => '1', '_controller' => 'App\\Controller\\EditAbsenceController::chercher_retard'], ['page'], null, null, false, true, null]],
        211 => [[['_route' => 'editor_absence', 'page' => '1', '_controller' => 'App\\Controller\\EditAbsenceController::absence'], ['page'], null, null, false, true, null]],
        236 => [[['_route' => 'editor_absence_edit', '_controller' => 'App\\Controller\\EditAbsenceController::absence_edit'], ['id'], null, null, false, true, null]],
        259 => [[['_route' => 'editor_absence_delete', '_controller' => 'App\\Controller\\EditAbsenceController::absence_delete'], ['id'], null, null, false, true, null]],
        286 => [[['_route' => 'editor_absence_chercher', 'page' => '1', '_controller' => 'App\\Controller\\EditAbsenceController::chercher_absence'], ['page'], null, null, false, true, null]],
        318 => [[['_route' => 'editor_apprenant_liste', 'page' => '1', '_controller' => 'App\\Controller\\EditApprenantController::apprenant_liste'], ['page'], null, null, false, true, null]],
        343 => [[['_route' => 'editor_apprenant_show', '_controller' => 'App\\Controller\\EditApprenantController::apprenant_show'], ['id'], null, null, false, true, null]],
        364 => [[['_route' => 'editor_edit_apprenant', '_controller' => 'App\\Controller\\EditApprenantController::edit_apprenant'], ['id'], null, null, false, true, null]],
        387 => [[['_route' => 'editor_apprenant_delete', '_controller' => 'App\\Controller\\EditApprenantController::delete_apprenant'], ['id'], null, null, false, true, null]],
        414 => [[['_route' => 'editor_apprenant_chercher', 'page' => '1', '_controller' => 'App\\Controller\\EditApprenantController::chercher'], ['page'], null, null, false, true, null]],
        448 => [[['_route' => 'editor_entreprise', 'page' => '1', '_controller' => 'App\\Controller\\EditEntrepriseController::entreprise_list'], ['page'], null, null, false, true, null]],
        473 => [[['_route' => 'editor_entreprise_edit', '_controller' => 'App\\Controller\\EditEntrepriseController::entreprise_edit'], ['id'], null, null, false, true, null]],
        496 => [[['_route' => 'editor_entreprise_delete', '_controller' => 'App\\Controller\\EditEntrepriseController::entreprise_delete'], ['id'], null, null, false, true, null]],
        524 => [[['_route' => 'editor_offre', 'page' => '1', '_controller' => 'App\\Controller\\EditEntrepriseController::offre_list'], ['page'], null, null, false, true, null]],
        548 => [[['_route' => 'editor_offre_edit', '_controller' => 'App\\Controller\\EditEntrepriseController::offre_edit'], ['id'], null, null, false, true, null]],
        571 => [[['_route' => 'editor_offre_delete', '_controller' => 'App\\Controller\\EditEntrepriseController::offre_delete'], ['id'], null, null, false, true, null]],
        601 => [[['_route' => 'editor_contact', 'page' => '1', '_controller' => 'App\\Controller\\EditEntrepriseController::contact_list'], ['page'], null, null, false, true, null]],
        631 => [[['_route' => 'editor_contact_chercher', 'page' => '1', '_controller' => 'App\\Controller\\EditEntrepriseController::contact_chercher'], ['page'], null, null, false, true, null]],
        654 => [[['_route' => 'editor_contact_delete', '_controller' => 'App\\Controller\\EditEntrepriseController::contact_delete'], ['id'], null, null, false, true, null]],
        675 => [[['_route' => 'editor_edit_contact', '_controller' => 'App\\Controller\\EditEntrepriseController::edit_contact'], ['id'], null, null, false, true, null]],
        710 => [[['_route' => 'editor_promo_liste', 'page' => '1', '_controller' => 'App\\Controller\\EditPromotionController::promo_list'], ['page'], null, null, false, true, null]],
        735 => [[['_route' => 'editor_edit_promotion', '_controller' => 'App\\Controller\\EditPromotionController::edit_promotion'], ['id'], null, null, false, true, null]],
        756 => [[['_route' => 'editor_show_promotion', '_controller' => 'App\\Controller\\EditPromotionController::show_promotion'], ['id'], null, null, false, true, null]],
        779 => [[['_route' => 'editor_delete_promotion', '_controller' => 'App\\Controller\\EditPromotionController::delete_promotion'], ['id'], null, null, false, true, null]],
        803 => [[['_route' => 'editor_retirer_apprenant', '_controller' => 'App\\Controller\\EditPromotionController::retirer_apprenant'], ['id'], null, null, false, true, null]],
        837 => [[['_route' => 'editor_pro_apprenant_show', '_controller' => 'App\\Controller\\EditPromotionController::pro_apprenant_show'], ['id'], null, null, false, true, null]],
        868 => [[['_route' => 'editor_formation', 'page' => '1', '_controller' => 'App\\Controller\\FormationController::formation'], ['page'], null, null, false, true, null]],
        893 => [[['_route' => 'editor_edit_formation', '_controller' => 'App\\Controller\\FormationController::edit_formation'], ['id'], null, null, false, true, null]],
        916 => [[['_route' => 'editor_delete_formation', '_controller' => 'App\\Controller\\FormationController::delete_formation'], ['id'], null, null, false, true, null]],
        961 => [[['_route' => 'reserve_promotion', 'page' => '1', '_controller' => 'App\\Controller\\ReserveController::promo_list'], ['page'], null, null, false, true, null]],
        983 => [[['_route' => 'reserve_show_promotion', '_controller' => 'App\\Controller\\ReserveController::show_promotion'], ['id'], null, null, false, true, null]],
        1015 => [
            [['_route' => 'reserve_apprenant_show', '_controller' => 'App\\Controller\\ReserveController::pro_apprenant_show'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
