<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $authCheker=$this->container->get('security.authorization_checker');
        if($authCheker->isgranted ('ROLE_ADMIN'))
        {
            return $this->redirectToRoute('produit_homepage');
        }
        elseif ($authCheker->isgranted ('ROLE_USER'))
        {
            return $this->redirectToRoute('produit_homepageclient');
        }
        else
            return $this->redirectToRoute('fos_user_security_login');
    }



}
