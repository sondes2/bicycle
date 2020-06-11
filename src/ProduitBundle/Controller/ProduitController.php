<?php

namespace ProduitBundle\Controller;


use ProduitBundle\Entity\Categorie;
use ProduitBundle\Entity\Produit;
use ProduitBundle\Form\ProduitType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


class ProduitController extends Controller
{
    public function afficheProduitsAction(Request $request)
    {   $em=$this->getDoctrine()->getManager();
        $produits=$em->getRepository('ProduitBundle:Produit')->findAll();

        $paginator= $this->get('knp_paginator');
        $result=$paginator->paginate(
            $produits,
            $request->query->getInt('page', 1), /*page number*/
            $request->query->getInt('limit',5) /*limit per page*/
        );


        return $this->render('@Produit/Default/afficheproduits.html.twig',array('produits'=>$result));
    }
    public function ajouterProduitAction(Request $request)
    {

        $produit=new Produit();
        $form=$this->createForm(ProduitType::class,$produit);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->get('qte')->getData() > 0 && $form->get('prix')->getData() > 0)
        {
            /** @var UploadedFile $file */
            $file = $produit->getImage();
            $filename = md5(uniqid()).'.'.$file->guessExtension();
            $file->move(
                $this->getParameter('image_directory'),$filename
            );
            $produit->setImage($filename);
            $em=$this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();
            return $this->redirectToRoute('produit_afficheProduits');
        }
        else{
            $message="Qte ou prix negative";
            $this-> addFlash('success',$message);
            return $this->render('@Produit\Default\ajouterProduit.html.twig',array("form"=>$form->createView()));

        }
        return $this->render('@Produit\Default\ajouterProduit.html.twig',array("form"=>$form->createView()));
    }


    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = new Produit();
        $produit->setCategorie($request->get('categorie'));
        $produit->setLibelle($request->get('libelle'));
        $produit->setQte($request->get('qte'));
        $produit->setPrix($request->get('prix'));
        $produit->setImage($request->get('image'));
        $em->persist($produit);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($produit);
        return new JsonResponse($formatted);
    }


    public function allAction()
{
    $tasks = $this->getDoctrine()->getManager()
        ->getRepository('ProduitBundle:Produit')
        ->findAll();
    $serializer = new Serializer([new ObjectNormalizer()]);
    $formatted = $serializer->normalize($tasks);
    return new JsonResponse($formatted);
}



    public function modifierProduitAction(Request $request,$id)
    {

        $em=$this->getDoctrine()->getManager();
        $produit=$em->getRepository('ProduitBundle:Produit')->find($id);

        $form=$this->createForm(ProduitType::class,$produit);
        $form->handleRequest($request);

        if( $form->isSubmitted() ){
            /** @var UploadedFile $file */
            $file = $produit->getImage();
            $filename = md5(uniqid()).'.'.$file->guessExtension();
            $file->move(
                $this->getParameter('image_directory'),$filename
            );
            $produit->setImage($filename);
            $em=$this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();
            return $this->redirectToRoute('produit_afficheProduits');
        }

        return $this->render('@Produit\Default\modifierProduitPage.html.twig',array('form'=>$form->createView()));
    }

    public function supprimerProduitAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $produit=$em->getRepository('ProduitBundle:Produit')->find($id);
        $em->remove($produit);
        $em->flush();

        return $this->redirectToRoute('produit_afficheProduits');
    }

    public function produitsHorsStockAction(Request $request){
        $em=$this->getDoctrine()->getManager();

        $produits=$em->getRepository('ProduitBundle:Produit')->findProduitsHorsStock();
        $paginator= $this->get('knp_paginator');
        $result=$paginator->paginate(
            $produits,
            $request->query->getInt('page', 1), /*page number*/
            $request->query->getInt('limit',5) /*limit per page*/
        );
        return $this->render('@Produit/Default/produitsHorsStock.html.twig',array('produits'=>$result));
    }


    public function produitsEnReptureDeStockAction(Request $request){
        $em=$this->getDoctrine()->getManager();

        $produits=$em->getRepository('ProduitBundle:Produit')->findProduitsEnReptureDeStock();
        $paginator= $this->get('knp_paginator');
        $result=$paginator->paginate(
            $produits,
            $request->query->getInt('page', 1), /*page number*/
            $request->query->getInt('limit',5) /*limit per page*/
        );
        return $this->render('@Produit/Default/produitsEnReptureDeStock.html.twig',array('produits'=>$result));
    }





    public function kolAction()
    {
        $produit =$this->getDoctrine()->getManager()
            ->getRepository('ProduitBundle:Produit')->findAll();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(2);

        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });
        $serializer =new Serializer(array(new Serializer(),$normalizer));
        $formatted =$serializer->normalize($produit);
        return new JsonResponse($formatted);

    }


    public function affichePAction()
    {
        $em=$this->getDoctrine()->getManager();
       // $cat = $em ->getRepository('ProduitBundle:Categorie');
        $produits=$em->getRepository('ProduitBundle:Produit')->findAll();
        foreach ($produits as $p) {
            $lp[] = array(
                'libelle' => $p->getLibelle(),

                'prix' => $p->getPrix(),

                'qte' => $p->getQte(),
               'categorie' => $p->getCategorie(),
                'image' => $p->getImage(),
                'id' => $p->getId(),

            );

        }
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($lp);
        return new JsonResponse($formatted);

    }

#------------------------------------------------------------------json-----------------------------------------------------------#


    public function addAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $post= new Post();
        $em = $this->getDoctrine()->getManager();
        $post->setCreator($this->getUser());
        $post->setDescription($request->get('description'));
        // $post->setAdresse($request->get('adresse'));
        $post->setTitle($request->get('title'));
        $post->setPhoto($request->get('photo'));
        $post->setPostdate(new \DateTime('now'));

        $em->persist($post);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($post);
        return new JsonResponse($formatted);


    }


    /*******************************JSON************************************/

    public function addProductAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $produit= new Produit();
        $em = $this->getDoctrine()->getManager();
        //$produit->setCreator($this->getUser());
        $produit->setLibelle($request->get('libelle'));
        $produit->setQte($request->get('qte'));
        $produit->setPrix($request->get('prix'));
        $cat=$this->getDoctrine()->getManager()->getRepository(Categorie::class)->findOneBy(['libelle'=>$request->get('categorie')]);
        $produit->setCategorie($cat);
        $produit->setImage($request->get('image'));

        $em->persist($produit);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($produit);
        return new JsonResponse($formatted);

    }

    public function updateProductAction(Request $request, $id, $libelle, $prix, $qte, $categorie, $image)

    {
        $em=$this->getDoctrine()->getManager();
        // $pub=$em->getRepository("AppBundle:Post")->find($id);
        $prod=$em->getRepository("ProduitBundle:Produit")->find($id);

        $prod->setLibelle($libelle);
        $prod->setQte($qte);
        $prod->setPrix($prix);
        $cat=$this->getDoctrine()->getManager()->getRepository(Categorie::class)->findOneBy(['libelle'=>$categorie]);
        $prod->setCategorie($cat);
        $prod->setImage($image);
        $em->persist($prod);
        $em->flush();
        return new JsonResponse("success");

    }

    public function deleteProdAction(Request $request,$id)
    {
        //$produit=new Produit();
        $em=$this->getDoctrine()->getManager();
        //$post=$em->getRepository(Post::class)->find($id);
        $produit=$em->getRepository(Produit::class)->find($id);
        $em->remove($produit);
        $em->flush();
        // Déclaration Entity Manager
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(2);

        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });



        $this->addFlash('success','Product deleted ');
        $serializer=new Serializer([new ObjectNormalizer()]);
        $formatted=$serializer->normalize($produit);
        return new JsonResponse($formatted);

    }


    public function allCategoryAction(){
        $em=$this->getDoctrine()->getManager();
        $categories=$em->getRepository(Categorie::class)->findAll();
        $serializer=new Serializer([new ObjectNormalizer()]);
        $formatted=$serializer->normalize($categories);
        return new JsonResponse($formatted);

    }

}