<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/Event')) {
            // event_homepage
            if ('/Event' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'EventBundle\\Controller\\EventController::homeAction',  '_route' => 'event_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_event_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'event_homepage'));
                }

                return $ret;
            }
            not_event_homepage:

            if (0 === strpos($pathinfo, '/Event/a')) {
                if (0 === strpos($pathinfo, '/Event/addEvent')) {
                    // event_add
                    if ('/Event/addEvent' === $pathinfo) {
                        return array (  '_controller' => 'EventBundle\\Controller\\EventController::addEventAction',  '_route' => 'event_add',);
                    }

                    // eventadmin_add
                    if ('/Event/addEventAdmin' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'EventBundle\\Controller\\EventadminController::addEventAdminAction',  '_route' => 'eventadmin_add',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_eventadmin_add;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'eventadmin_add'));
                        }

                        return $ret;
                    }
                    not_eventadmin_add:

                }

                // add_post
                if (0 === strpos($pathinfo, '/Event/add') && preg_match('#^/Event/add/(?P<date>[^/]++)/(?P<place>[^/]++)/(?P<bike>[^/]++)/(?P<iduser>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'add_post']), array (  '_controller' => 'EventBundle\\Controller\\EventController::addAction',));
                }

                // allA
                if ('/Event/allJSON' === $pathinfo) {
                    return array (  '_controller' => 'EventBundle\\Controller\\EventController::allAction',  '_route' => 'allA',);
                }

            }

            elseif (0 === strpos($pathinfo, '/Event/show')) {
                // event_show
                if ('/Event/showevent' === $pathinfo) {
                    return array (  '_controller' => 'EventBundle\\Controller\\EventController::afficheEventAction',  '_route' => 'event_show',);
                }

                // eventadmin_show
                if ('/Event/showEventadmin' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'EventBundle\\Controller\\EventadminController::afficheEventadminAction',  '_route' => 'eventadmin_show',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_eventadmin_show;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'eventadmin_show'));
                    }

                    return $ret;
                }
                not_eventadmin_show:

                // recherche_show
                if ('/Event/showRecherche' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'EventBundle\\Controller\\EventadminController::rechercheAction',  '_route' => 'recherche_show',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_recherche_show;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'recherche_show'));
                    }

                    return $ret;
                }
                not_recherche_show:

            }

            elseif (0 === strpos($pathinfo, '/Event/deleteevent')) {
                // event_delete
                if (preg_match('#^/Event/deleteevent/(?P<idreservation>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'event_delete']), array (  '_controller' => 'EventBundle\\Controller\\EventController::deleteeventAction',));
                }

                // eventadmin_delete
                if ('/Event/deleteeventadmin' === $pathinfo) {
                    return array (  '_controller' => 'EventBundle\\Controller\\EventadminController::deleteeventadminAction',  '_route' => 'eventadmin_delete',);
                }

            }

            // delete_post
            if (0 === strpos($pathinfo, '/Event/delete') && preg_match('#^/Event/delete/(?P<idreservation>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete_post']), array (  '_controller' => 'EventBundle\\Controller\\EventController::deleteAction',));
            }

            // event_update
            if (0 === strpos($pathinfo, '/Event/updateevent') && preg_match('#^/Event/updateevent/(?P<idreservation>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'event_update']), array (  '_controller' => 'EventBundle\\Controller\\EventController::updateeventAction',));
            }

            // eventadmin_update
            if (0 === strpos($pathinfo, '/Event/UpdateEventadmin') && preg_match('#^/Event/UpdateEventadmin/(?P<idreservation>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'eventadmin_update']), array (  '_controller' => 'EventBundle\\Controller\\EventadminController::updateeventadminAction',));
            }

            // pdf
            if (0 === strpos($pathinfo, '/Event/pdf') && preg_match('#^/Event/pdf/(?P<idreservation>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'pdf']), array (  '_controller' => 'EventBundle\\Controller\\EventController::pdfAction',));
            }

            // update_post
            if (0 === strpos($pathinfo, '/Event/postupdate') && preg_match('#^/Event/postupdate/(?P<idreservation>[^/]++)/(?P<date>[^/]++)/(?P<place>[^/]++)/(?P<bike>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'update_post']), array (  '_controller' => 'EventBundle\\Controller\\EventController::updatepostAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/a')) {
            // esprit_api_homepage
            if ('/api' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'EspritApiBundle\\Controller\\DefaultController::indexAction',  '_route' => 'esprit_api_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_esprit_api_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'esprit_api_homepage'));
                }

                return $ret;
            }
            not_esprit_api_homepage:

            if (0 === strpos($pathinfo, '/admin')) {
                // produit_homepage
                if ('/admin' === $pathinfo) {
                    return array (  '_controller' => 'ProduitBundle\\Controller\\DefaultController::indexAdminAction',  '_route' => 'produit_homepage',);
                }

                if (0 === strpos($pathinfo, '/admin/affiche')) {
                    // produit_afficheProduits
                    if ('/admin/afficheproduits' === $pathinfo) {
                        return array (  '_controller' => 'ProduitBundle\\Controller\\ProduitController::afficheProduitsAction',  '_route' => 'produit_afficheProduits',);
                    }

                    // commande_affiche_admin
                    if ('/admin/afficheCmdAdmin' === $pathinfo) {
                        return array (  '_controller' => 'CommandeBundle\\Controller\\gestioncmdController::afficheCmdAdminAction',  '_route' => 'commande_affiche_admin',);
                    }

                    // lignecommande_affiche_admin
                    if ('/admin/afficheLigneAdmin' === $pathinfo) {
                        return array (  '_controller' => 'CommandeBundle\\Controller\\lignecomController::afficheLigneAdminAction',  '_route' => 'lignecommande_affiche_admin',);
                    }

                }

                // produit_ajouterProduits
                if ('/admin/ajouterProduit' === $pathinfo) {
                    return array (  '_controller' => 'ProduitBundle\\Controller\\ProduitController::ajouterProduitAction',  '_route' => 'produit_ajouterProduits',);
                }

                // produit_modifierProduits
                if (0 === strpos($pathinfo, '/admin/modifierProduit') && preg_match('#^/admin/modifierProduit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'produit_modifierProduits']), array (  '_controller' => 'ProduitBundle\\Controller\\ProduitController::modifierProduitAction',));
                }

                // produit_supprimerProduits
                if (0 === strpos($pathinfo, '/admin/supprimerProduit') && preg_match('#^/admin/supprimerProduit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'produit_supprimerProduits']), array (  '_controller' => 'ProduitBundle\\Controller\\ProduitController::supprimerProduitAction',));
                }

                // produit_produitsHorsStock
                if ('/admin/produitsHorsStock' === $pathinfo) {
                    return array (  '_controller' => 'ProduitBundle\\Controller\\ProduitController::produitsHorsStockAction',  '_route' => 'produit_produitsHorsStock',);
                }

                // produit_produitsEnReptureDeStock
                if ('/admin/produitsEnReptureDeStock' === $pathinfo) {
                    return array (  '_controller' => 'ProduitBundle\\Controller\\ProduitController::produitsEnReptureDeStockAction',  '_route' => 'produit_produitsEnReptureDeStock',);
                }

            }

            // dgtsry
            if (0 === strpos($pathinfo, '/add') && preg_match('#^/add/(?P<id>[^/]++)/(?P<adresse>[^/]++)/(?P<prix>[^/]++)/(?P<telephone>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'dgtsry']), array (  '_controller' => 'CommandeBundle\\Controller\\gestioncmdController::ajoutWSAction',));
            }

            // all_authr
            if ('/author' === $pathinfo) {
                return array (  '_controller' => 'CommandeBundle\\Controller\\lignecomController::afficheeAction',  '_route' => 'all_authr',);
            }

            // ajouter_commande_json
            if (0 === strpos($pathinfo, '/ajoutLigneCommandeJson') && preg_match('#^/ajoutLigneCommandeJson/(?P<id>[^/]++)/(?P<idP>[^/]++)/(?P<quantite>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'ajouter_commande_json']), array (  '_controller' => 'CommandeBundle\\Controller\\lignecomController::AjoutLigneDeCommandeJsonAction',));
            }

            // dfjsfs
            if (0 === strpos($pathinfo, '/affJson') && preg_match('#^/affJson/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'dfjsfs']), array (  '_controller' => 'CommandeBundle\\Controller\\lignecomController::afficheJsonAction',));
            }

        }

        // produit
        if ('/newproduit' === $pathinfo) {
            return array (  '_controller' => 'ProduitBundle\\Controller\\ProduitController::newAction',  '_route' => 'produit',);
        }

        if (0 === strpos($pathinfo, '/produit')) {
            // all
            if ('/produit/kol' === $pathinfo) {
                return array (  '_controller' => 'ProduitBundle\\Controller\\ProduitController::allAction',  '_route' => 'all',);
            }

            // kol
            if ('/produit/all' === $pathinfo) {
                return array (  '_controller' => 'ProduitBundle\\Controller\\ProduitController::affichePAction',  '_route' => 'kol',);
            }

            // add
            if (0 === strpos($pathinfo, '/produit/addProduct') && preg_match('#^/produit/addProduct/(?P<libelle>[^/]++)/(?P<prix>[^/]++)/(?P<qte>[^/]++)/(?P<categorie>[^/]++)/(?P<image>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'add']), array (  '_controller' => 'ProduitBundle\\Controller\\ProduitController::addProductAction',));
            }

            // updat
            if (0 === strpos($pathinfo, '/produit/updateProduct') && preg_match('#^/produit/updateProduct/(?P<id>[^/]++)/(?P<libelle>[^/]++)/(?P<prix>[^/]++)/(?P<qte>[^/]++)/(?P<categorie>[^/]++)/(?P<image>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'updat']), array (  '_controller' => 'ProduitBundle\\Controller\\ProduitController::updateProductAction',));
            }

            // delet
            if (0 === strpos($pathinfo, '/produit/deleteProduct') && preg_match('#^/produit/deleteProduct/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'delet']), array (  '_controller' => 'ProduitBundle\\Controller\\ProduitController::deleteProdAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_profile_show;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_profile_show;
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_profile_edit;
                }

                return $ret;
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_change_password;
                }

                return $ret;
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/client')) {
                // produit_homepageclient
                if ('/client' === $pathinfo) {
                    return array (  '_controller' => 'ProduitBundle\\Controller\\DefaultController::indexClientAction',  '_route' => 'produit_homepageclient',);
                }

                if (0 === strpos($pathinfo, '/client/a')) {
                    if (0 === strpos($pathinfo, '/client/affiche')) {
                        // produit_afficheProduitsClient
                        if ('/client/afficheproduits' === $pathinfo) {
                            return array (  '_controller' => 'ProduitBundle\\Controller\\ProduitClientController::afficheProduitsClientAction',  '_route' => 'produit_afficheProduitsClient',);
                        }

                        // commande_affiche_Client
                        if (0 === strpos($pathinfo, '/client/afficheCmdClient') && preg_match('#^/client/afficheCmdClient/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'commande_affiche_Client']), array (  '_controller' => 'CommandeBundle\\Controller\\gestioncmdController::afficheCmdClientAction',));
                        }

                        // lignecommande_affiche_client
                        if ('/client/afficherLigneClient' === $pathinfo) {
                            return array (  '_controller' => 'CommandeBundle\\Controller\\lignecomController::afficherLigneClientAction',  '_route' => 'lignecommande_affiche_client',);
                        }

                    }

                    // commande_ajout_client
                    if ('/client/ajoutCmdClient' === $pathinfo) {
                        return array (  '_controller' => 'CommandeBundle\\Controller\\gestioncmdController::ajoutCmdClientAction',  '_route' => 'commande_ajout_client',);
                    }

                    // lignecommande_ajout_client
                    if ('/client/ajoutLigneClient' === $pathinfo) {
                        return array (  '_controller' => 'CommandeBundle\\Controller\\lignecomController::ajoutLigneClientAction',  '_route' => 'lignecommande_ajout_client',);
                    }

                }

                // produit_detailsProduitClient
                if (0 === strpos($pathinfo, '/client/detailsProduit') && preg_match('#^/client/detailsProduit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'produit_detailsProduitClient']), array (  '_controller' => 'ProduitBundle\\Controller\\ProduitClientController::detailsProduitClientAction',));
                }

                if (0 === strpos($pathinfo, '/client/s')) {
                    // produit_searchAjax
                    if ('/client/searchAjax' === $pathinfo) {
                        return array (  '_controller' => 'ProduitBundle\\Controller\\ProduitClientController::searchAjaxAction',  '_route' => 'produit_searchAjax',);
                    }

                    // commande_supprimer_admin
                    if (0 === strpos($pathinfo, '/client/supprimerCmdAdmin') && preg_match('#^/client/supprimerCmdAdmin/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'commande_supprimer_admin']), array (  '_controller' => 'CommandeBundle\\Controller\\gestioncmdController::supprimerCmdAdminAction',));
                    }

                    // lignecommande_supprimer_client
                    if (0 === strpos($pathinfo, '/client/supprimerLigneClient') && preg_match('#^/client/supprimerLigneClient/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'lignecommande_supprimer_client']), array (  '_controller' => 'CommandeBundle\\Controller\\lignecomController::supprimerLigneClientAction',));
                    }

                }

                // produit_rating
                if ('/client/rating' === $pathinfo) {
                    return array (  '_controller' => 'ProduitBundle\\Controller\\RatingController::ratingAction',  '_route' => 'produit_rating',);
                }

                // commande_pdf
                if (0 === strpos($pathinfo, '/client/convert') && preg_match('#^/client/convert/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'commande_pdf']), array (  '_controller' => 'CommandeBundle\\Controller\\DefaultController::convertAction',));
                }

                // lignecommande_calcule_prix
                if ('/client/calculprix' === $pathinfo) {
                    return array (  '_controller' => 'CommandeBundle\\Controller\\gestioncmdController::calculprixAction',  '_route' => 'lignecommande_calcule_prix',);
                }

            }

            // categorie_all
            if ('/categorie/all' === $pathinfo) {
                return array (  '_controller' => 'ProduitBundle\\Controller\\ProduitController::allCategoryAction',  '_route' => 'categorie_all',);
            }

            // all_cmd
            if ('/cmd/all' === $pathinfo) {
                return array (  '_controller' => 'CommandeBundle\\Controller\\gestioncmdController::allAction',  '_route' => 'all_cmd',);
            }

            // ajout_cmd
            if ('/cmd/ajout' === $pathinfo) {
                return array (  '_controller' => 'CommandeBundle\\Controller\\gestioncmdController::addAction',  '_route' => 'ajout_cmd',);
            }

            // curentuser
            if ('/currentuser' === $pathinfo) {
                return array (  '_controller' => 'CommandeBundle\\Controller\\gestioncmdController::currentAction',  '_route' => 'curentuser',);
            }

        }

        // export
        if ('/export' === $pathinfo) {
            return array (  '_controller' => 'CommandeBundle\\Controller\\gestioncmdController::exportAction',  '_route' => 'export',);
        }

        if (0 === strpos($pathinfo, '/l')) {
            if (0 === strpos($pathinfo, '/lignecmd/a')) {
                // all_ligne
                if ('/lignecmd/all' === $pathinfo) {
                    return array (  '_controller' => 'CommandeBundle\\Controller\\lignecomController::allAction',  '_route' => 'all_ligne',);
                }

                // addd
                if ('/lignecmd/add' === $pathinfo) {
                    return array (  '_controller' => 'CommandeBundle\\Controller\\lignecomController::addAction',  '_route' => 'addd',);
                }

                // allaff
                if (0 === strpos($pathinfo, '/lignecmd/affich') && preg_match('#^/lignecmd/affich/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'allaff']), array (  '_controller' => 'CommandeBundle\\Controller\\lignecomController::AfficherLigneDeCommandeJsonAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/login')) {
                if (0 === strpos($pathinfo, '/loginMobile')) {
                    // loginMobile
                    if (preg_match('#^/loginMobile/(?P<username>[^/]++)/(?P<password>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'loginMobile']), array (  '_controller' => 'CommandeBundle\\Controller\\gestioncmdController::loginMobileAction',));
                    }

                    // loginMobilee
                    if (0 === strpos($pathinfo, '/loginMobilee') && preg_match('#^/loginMobilee/(?P<username>[^/]++)/(?P<password>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'loginMobilee']), array (  '_controller' => 'CommandeBundle\\Controller\\gestioncmdController::loginnnAction',));
                    }

                }

                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_security_login;
                    }

                    return $ret;
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_fos_user_security_check;
                    }

                    return $ret;
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_logout;
                }

                return $ret;
            }
            not_fos_user_security_logout:

        }

        // sqqf
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'sqqf']), array (  '_controller' => 'CommandeBundle\\Controller\\lignecomController::supprimerligneAction',));
        }

        // user_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'user_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_user_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'user_homepage'));
            }

            return $ret;
        }
        not_user_homepage:

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_registration_register;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_registration_register;
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_registration_check_email;
                }

                return $ret;
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirm;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirmed;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_request;
                }

                return $ret;
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_resetting_reset;
                }

                return $ret;
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_resetting_send_email;
                }

                return $ret;
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_check_email;
                }

                return $ret;
            }
            not_fos_user_resetting_check_email:

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
