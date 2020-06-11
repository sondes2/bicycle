<?php

namespace ProduitBundle\Controller;


use CommandeBundle\Entity\Commande;
use CommandeBundle\Entity\lignecmd;
use CommandeBundle\Form\lignecmdType;
use ProduitBundle\Entity\Rating;
use Symfony\Component\HttpFoundation\Response;
use ProduitBundle\Entity\Produit;
use ProduitBundle\Form\ProduitType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


class ProduitClientController extends Controller
{
    public function afficheProduitsClientAction(Request $request)
    {
        $produits=$this->getDoctrine()->getManager()->getRepository('ProduitBundle:Produit')->findAll();


        $paginator= $this->get('knp_paginator');
        $result=$paginator->paginate(
            $produits,
            $request->query->getInt('page', 1), /*page number*/
            $request->query->getInt('limit',8) /*limit per page*/
        );

        return $this->render('@Produit/Default/clientViews/afficheProduitsClient.html.twig',array('produits'=>$result));
    }

    public function detailsProduitClientAction(Request $request , $id)
    {
        $authCheker=$this->container->get('security.authorization_checker');
        $em=$this->getDoctrine()->getManager();
        $produit=$em->getRepository('ProduitBundle:Produit')->find($id);
        $existe=0;
        $rat=1;
        $i=1;

        if ($authCheker->isgranted ('ROLE_USER')){
            $userid=$this->get('security.token_storage')->getToken()->getUser()->getId();
            $ratings=$em->getRepository('ProduitBundle:Rating')->findRatings();
            foreach ($ratings as $rating) {
                if ( (($rating->getProduit())->getId() == $id) && (($rating->getUser())->getId() == $userid)  ) {
                    $existe=1;
                    $rat=$rating->getRat();
                }
            }
        }
        if ($existe==0) {
            $ratings = $em->getRepository('ProduitBundle:Rating')->findAll();

            foreach ($ratings as $rating) {
                if($rating->getProduit()->getId()==$id){
                        $rat=$rat+$rating->getRat();
                        $i=$i+1;
                }
            }
            $rat=$rat / $i;
            if($rat>1 && $rat<=2){
                $rat=2;
            }
            else if($rat>2 && $rat <= 3){
                $rat=3;
            }elseif ($rat>3 && $rat <= 4){
                $rat=4;
            }elseif ($rat==1)
                {
                    $rat=1;
                }
                else{
                $rat=5;
            }
        }

        //----------------------------------partie commune entre Commandes et Produits--------------------------------------------
        $lignecmd = new lignecmd();
        $form = $this->createForm(lignecmdType::class,$lignecmd);
        $form->handleRequest($request);

        if ($form->isSubmitted())
        {
            $task = $form->getData();

            if ($task->getQuantite() > $produit->getQte()) {

                return $this->render('@Commande/Ligne/Quantite.html.twig');
            }
            else {
                $lignecmd->setEtat(0);
                $lignecmd->setProduit($produit);
                $user = $this->container->get('security.token_storage')->getToken()->getUser();
                $user->getId();
                $lignecmd->setUserid($user);
                $em->persist($lignecmd);
                $em->flush();
            }
        }

        return $this->render('@Produit/Default/clientViews/detailsProduitClient.html.twig',array('produit'=>$produit,'rat'=>$rat,'form' => $form->createView()));
    }



    //-------------------------------Ajax----------------------------------
    public function searchAjaxAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

       $nameBike =$request->get('q');

        $velos =  $em->getRepository('ProduitBundle:Produit')->findBikeByName($nameBike);
        if(!$velos) {
            $result['velos']['error'] = "Bike Doesn't Exist";
        } else {
            $result['velos'] = $this->getRealEntities($velos);
        }

        return new Response(json_encode($result));
    }

    public function getRealEntities($velos){
        $i =0;
        foreach ($velos as $velos){
            $realEntities[$i] = [$velos->getId(),$velos->getImage(),$velos->getLibelle(),$velos->getPrix(),$velos->getQte()];
         $i++;
        }
        return $realEntities;
    }







}