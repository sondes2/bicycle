<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        'esprit_api_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EspritApiBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProduitBundle\\Controller\\DefaultController::indexAdminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_afficheProduits' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProduitBundle\\Controller\\ProduitController::afficheProduitsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/afficheproduits',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_ajouterProduits' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProduitBundle\\Controller\\ProduitController::ajouterProduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/ajouterProduit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_modifierProduits' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ProduitBundle\\Controller\\ProduitController::modifierProduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/modifierProduit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_supprimerProduits' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ProduitBundle\\Controller\\ProduitController::supprimerProduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/supprimerProduit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_produitsHorsStock' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProduitBundle\\Controller\\ProduitController::produitsHorsStockAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/produitsHorsStock',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_produitsEnReptureDeStock' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProduitBundle\\Controller\\ProduitController::produitsEnReptureDeStockAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/produitsEnReptureDeStock',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProduitBundle\\Controller\\ProduitController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/newproduit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'all' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProduitBundle\\Controller\\ProduitController::allAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/produit/kol',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'kol' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProduitBundle\\Controller\\ProduitController::affichePAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/produit/all',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_homepageclient' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProduitBundle\\Controller\\DefaultController::indexClientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_afficheProduitsClient' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProduitBundle\\Controller\\ProduitClientController::afficheProduitsClientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client/afficheproduits',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_detailsProduitClient' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ProduitBundle\\Controller\\ProduitClientController::detailsProduitClientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/client/detailsProduit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_searchAjax' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProduitBundle\\Controller\\ProduitClientController::searchAjaxAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client/searchAjax',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_rating' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProduitBundle\\Controller\\RatingController::ratingAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client/rating',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commande_pdf' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\DefaultController::convertAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/client/convert',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commande_ajout_client' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\gestioncmdController::ajoutCmdClientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client/ajoutCmdClient',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commande_affiche_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\gestioncmdController::afficheCmdAdminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/afficheCmdAdmin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'export' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\gestioncmdController::exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/export',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commande_supprimer_admin' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\gestioncmdController::supprimerCmdAdminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/client/supprimerCmdAdmin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commande_affiche_Client' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\gestioncmdController::afficheCmdClientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/client/afficheCmdClient',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lignecommande_ajout_client' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\lignecomController::ajoutLigneClientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client/ajoutLigneClient',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lignecommande_affiche_client' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\lignecomController::afficherLigneClientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client/afficherLigneClient',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lignecommande_supprimer_client' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\lignecomController::supprimerLigneClientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/client/supprimerLigneClient',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lignecommande_calcule_prix' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\gestioncmdController::calculprixAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client/calculprix',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lignecommande_affiche_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\lignecomController::afficheLigneAdminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/afficheLigneAdmin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'all_ligne' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\lignecomController::allAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/lignecmd/all',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'all_authr' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\lignecomController::afficheeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/author',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'allaff' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\lignecomController::afficheJsonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/lignecmd/affich',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'all_cmd' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\gestioncmdController::allAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cmd/all',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajout_cmd' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\gestioncmdController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cmd/ajout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'table_content' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'bikeBundle\\Controller\\LivraisonController::affichAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tablecontent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'livreur_ajout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'bikeBundle\\Controller\\LivreurController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajoutLivreur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'livreur_affich' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'bikeBundle\\Controller\\LivreurController::affichlivreurAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/affichlivreur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'livreur_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'bikeBundle\\Controller\\LivreurController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'livreur_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'bikeBundle\\Controller\\LivreurController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'livraison_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'bikeBundle\\Controller\\LivraisonController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'livraison_show1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'bikeBundle\\Controller\\LivraisonController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'livraison_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'bikeBundle\\Controller\\LivraisonController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'livraison_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'bikeBundle\\Controller\\LivraisonController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'livraison_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'bikeBundle\\Controller\\LivraisonController::indexxAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/livraison',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'livraison_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'bikeBundle\\Controller\\LivraisonController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/delete1',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'livraison_supp' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'bikeBundle\\Controller\\LivraisonController::suppAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/delete2',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajax_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'bikeBundle\\Controller\\LivraisonController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.security.controller:loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.security.controller:checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.security.controller:logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.profile.controller:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.profile.controller:editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:confirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:confirmedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:requestAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:sendEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:resetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.change_password.controller:changePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}