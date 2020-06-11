<?php

namespace ProduitBundle\Controller;

use ProduitBundle\Entity\Rating;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RatingController extends Controller
{

    public function ratingAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();

        $rat =$request->get('rat');
        $idproduit =$request->get('id');
        $iduser=$this->get('security.token_storage')->getToken()->getUser()->getId();
        $produit=$em->getRepository('ProduitBundle:Produit')->find($idproduit);
        $ratings=$em->getRepository('ProduitBundle:Rating')->findRatings();
        $existe=0;
        foreach ($ratings as $rating) {
            if ( (($rating->getProduit())->getId() == $idproduit) && (($rating->getUser())->getId() == $iduser)  ) {
                    $rating->setRat($rat);
                    $em->persist($rating);
                    $em->flush();
                    $existe=1;
            }
        }
        if ($existe==0){
            $rating=new Rating();
            $rating->setRat($rat);
            $rating->setUser($this->get('security.token_storage')->getToken()->getUser());
            $rating->setProduit($produit);
            $em->persist($rating);
            $em->flush();
        }
        return $this->redirectToRoute('produit_afficheProduitsClient');
       // return $this->render('@Produit/Default/clientViews/index.html.twig', array('existe' => $existe));




    }

}


