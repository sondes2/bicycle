<?php

namespace ProduitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexClientAction()
    {
        return $this->render('@Produit/Default/clientViews/index.html.twig');
    }

    public function indexAdminAction()
    {
        return $this->render('@Produit/Default/indexAdmin.html.twig');
    }
}
