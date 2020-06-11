<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/a')) {
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

            // all_authr
            if ('/author' === $pathinfo) {
                return array (  '_controller' => 'CommandeBundle\\Controller\\lignecomController::createAction',  '_route' => 'all_authr',);
            }

            // livreur_ajout
            if ('/ajoutLivreur' === $pathinfo) {
                return array (  '_controller' => 'bikeBundle\\Controller\\LivreurController::indexAction',  '_route' => 'livreur_ajout',);
            }

            // livreur_affich
            if ('/affichlivreur' === $pathinfo) {
                return array (  '_controller' => 'bikeBundle\\Controller\\LivreurController::affichlivreurAction',  '_route' => 'livreur_affich',);
            }

        }

        elseif (0 === strpos($pathinfo, '/new')) {
            // produit
            if ('/newproduit' === $pathinfo) {
                return array (  '_controller' => 'ProduitBundle\\Controller\\ProduitController::newAction',  '_route' => 'produit',);
            }

            // livraison_new
            if ('/new' === $pathinfo) {
                return array (  '_controller' => 'bikeBundle\\Controller\\LivraisonController::newAction',  '_route' => 'livraison_new',);
            }

        }

        // all
        if ('/produit/all' === $pathinfo) {
            return array (  '_controller' => 'ProduitBundle\\Controller\\ProduitController::allAction',  '_route' => 'all',);
        }

        // kol
        if ('/produit/kol' === $pathinfo) {
            return array (  '_controller' => 'ProduitBundle\\Controller\\ProduitController::kolAction',  '_route' => 'kol',);
        }

        if (0 === strpos($pathinfo, '/c')) {
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

            // all_cmd
            if ('/cmd/all' === $pathinfo) {
                return array (  '_controller' => 'CommandeBundle\\Controller\\gestioncmdController::allAction',  '_route' => 'all_cmd',);
            }

            // ajout_cmd
            if ('/cmd/ajout' === $pathinfo) {
                return array (  '_controller' => 'CommandeBundle\\Controller\\gestioncmdController::addAction',  '_route' => 'ajout_cmd',);
            }

        }

        // export
        if ('/export' === $pathinfo) {
            return array (  '_controller' => 'CommandeBundle\\Controller\\gestioncmdController::exportAction',  '_route' => 'export',);
        }

        // all_ligne
        if ('/lignecmd/all' === $pathinfo) {
            return array (  '_controller' => 'CommandeBundle\\Controller\\lignecomController::allAction',  '_route' => 'all_ligne',);
        }

        // allaff
        if (0 === strpos($pathinfo, '/lignecmd/affich') && preg_match('#^/lignecmd/affich/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'allaff']), array (  '_controller' => 'CommandeBundle\\Controller\\lignecomController::afficheJsonAction',));
        }

        // table_content
        if ('/tablecontent' === $pathinfo) {
            return array (  '_controller' => 'bikeBundle\\Controller\\LivraisonController::affichAction',  '_route' => 'table_content',);
        }

        // livreur_update
        if (0 === strpos($pathinfo, '/update') && preg_match('#^/update/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'livreur_update']), array (  '_controller' => 'bikeBundle\\Controller\\LivreurController::editAction',));
        }

        // livreur_delete
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'livreur_delete']), array (  '_controller' => 'bikeBundle\\Controller\\LivreurController::deleteAction',));
        }

        // livraison_index
        if ('/index' === $pathinfo) {
            return array (  '_controller' => 'bikeBundle\\Controller\\LivraisonController::indexAction',  '_route' => 'livraison_index',);
        }

        // livraison_show1
        if ('/show' === $pathinfo) {
            return array (  '_controller' => 'bikeBundle\\Controller\\LivraisonController::showAction',  '_route' => 'livraison_show1',);
        }

        // livraison_edit
        if (preg_match('#^/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'livraison_edit']), array (  '_controller' => 'bikeBundle\\Controller\\LivraisonController::editAction',));
        }

        if (0 === strpos($pathinfo, '/l')) {
            // livraison_show
            if ('/livraison' === $pathinfo) {
                return array (  '_controller' => 'bikeBundle\\Controller\\LivraisonController::indexxAction',  '_route' => 'livraison_show',);
            }

            if (0 === strpos($pathinfo, '/login')) {
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

        // livraison_delete
        if (0 === strpos($pathinfo, '/delete1') && preg_match('#^/delete1/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'livraison_delete']), array (  '_controller' => 'bikeBundle\\Controller\\LivraisonController::deleteAction',));
        }

        // livraison_supp
        if (0 === strpos($pathinfo, '/delete2') && preg_match('#^/delete2/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'livraison_supp']), array (  '_controller' => 'bikeBundle\\Controller\\LivraisonController::suppAction',));
        }

        // ajax_search
        if ('/search' === $pathinfo) {
            return array (  '_controller' => 'bikeBundle\\Controller\\LivraisonController::searchAction',  '_route' => 'ajax_search',);
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

        if (0 === strpos($pathinfo, '/profile')) {
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

        elseif (0 === strpos($pathinfo, '/register')) {
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
