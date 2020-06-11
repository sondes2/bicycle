<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'event_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EventBundle\\Controller\\EventController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Event/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'event_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EventBundle\\Controller\\EventController::addEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Event/addEvent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eventadmin_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EventBundle\\Controller\\EventadminController::addEventAdminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Event/addEventAdmin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'event_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EventBundle\\Controller\\EventController::afficheEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Event/showevent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eventadmin_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EventBundle\\Controller\\EventadminController::afficheEventadminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Event/showEventadmin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'event_delete' => array (  0 =>   array (    0 => 'idreservation',  ),  1 =>   array (    '_controller' => 'EventBundle\\Controller\\EventController::deleteeventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idreservation',    ),    1 =>     array (      0 => 'text',      1 => '/Event/deleteevent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'event_update' => array (  0 =>   array (    0 => 'idreservation',  ),  1 =>   array (    '_controller' => 'EventBundle\\Controller\\EventController::updateeventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idreservation',    ),    1 =>     array (      0 => 'text',      1 => '/Event/updateevent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eventadmin_update' => array (  0 =>   array (    0 => 'idreservation',  ),  1 =>   array (    '_controller' => 'EventBundle\\Controller\\EventadminController::updateeventadminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idreservation',    ),    1 =>     array (      0 => 'text',      1 => '/Event/UpdateEventadmin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eventadmin_delete' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EventBundle\\Controller\\EventadminController::deleteeventadminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Event/deleteeventadmin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pdf' => array (  0 =>   array (    0 => 'idreservation',  ),  1 =>   array (    '_controller' => 'EventBundle\\Controller\\EventController::pdfAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idreservation',    ),    1 =>     array (      0 => 'text',      1 => '/Event/pdf',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'recherche_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EventBundle\\Controller\\EventadminController::rechercheAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Event/showRecherche/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'allA' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EventBundle\\Controller\\EventController::allAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Event/allJSON',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'update_post' => array (  0 =>   array (    0 => 'idreservation',  ),  1 =>   array (    '_controller' => 'EventBundle\\Controller\\EventController::updatepostAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idreservation',    ),    1 =>     array (      0 => 'text',      1 => '/Event/postupdate',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_post' => array (  0 =>   array (    0 => 'idreservation',  ),  1 =>   array (    '_controller' => 'EventBundle\\Controller\\EventController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idreservation',    ),    1 =>     array (      0 => 'text',      1 => '/Event/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add_post' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EventBundle\\Controller\\EventController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Event/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
        'add' => array (  0 =>   array (    0 => 'libelle',    1 => 'prix',    2 => 'qte',    3 => 'categorie',    4 => 'image',  ),  1 =>   array (    '_controller' => 'ProduitBundle\\Controller\\ProduitController::addProductAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'image',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'categorie',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'qte',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'prix',    ),    4 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'libelle',    ),    5 =>     array (      0 => 'text',      1 => '/produit/addProduct',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'updat' => array (  0 =>   array (    0 => 'id',    1 => 'libelle',    2 => 'prix',    3 => 'qte',    4 => 'categorie',    5 => 'image',  ),  1 =>   array (    '_controller' => 'ProduitBundle\\Controller\\ProduitController::updateProductAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'image',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'categorie',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'qte',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'prix',    ),    4 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'libelle',    ),    5 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    6 =>     array (      0 => 'text',      1 => '/produit/updateProduct',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delet' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ProduitBundle\\Controller\\ProduitController::deleteProdAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/produit/deleteProduct',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie_all' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProduitBundle\\Controller\\ProduitController::allCategoryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/categorie/all',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
        'addd' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\lignecomController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/lignecmd/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'all_authr' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\lignecomController::afficheeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/author',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'allaff' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\lignecomController::AfficherLigneDeCommandeJsonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/lignecmd/affich',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'all_cmd' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\gestioncmdController::allAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cmd/all',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajout_cmd' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\gestioncmdController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cmd/ajout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajouter_commande_json' => array (  0 =>   array (    0 => 'id',    1 => 'idP',    2 => 'quantite',  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\lignecomController::AjoutLigneDeCommandeJsonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'quantite',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idP',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    3 =>     array (      0 => 'text',      1 => '/ajoutLigneCommandeJson',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dfjsfs' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\lignecomController::afficheJsonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/affJson',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sqqf' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\lignecomController::supprimerligneAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dgtsry' => array (  0 =>   array (    0 => 'id',    1 => 'adresse',    2 => 'prix',    3 => 'telephone',  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\gestioncmdController::ajoutWSAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'telephone',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'prix',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'adresse',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    4 =>     array (      0 => 'text',      1 => '/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'loginMobile' => array (  0 =>   array (    0 => 'username',    1 => 'password',  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\gestioncmdController::loginMobileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'password',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'username',    ),    2 =>     array (      0 => 'text',      1 => '/loginMobile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'loginMobilee' => array (  0 =>   array (    0 => 'username',    1 => 'password',  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\gestioncmdController::loginnnAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'password',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'username',    ),    2 =>     array (      0 => 'text',      1 => '/loginMobilee',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'curentuser' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\gestioncmdController::currentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/currentuser',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
