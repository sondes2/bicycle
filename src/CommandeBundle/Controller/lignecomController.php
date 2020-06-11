<?php

namespace CommandeBundle\Controller;

use CommandeBundle\Entity\cmd;
use CommandeBundle\Entity\lignecmd;

use CommandeBundle\Entity\LigneDeCommande;
use CommandeBundle\Form\lignecmdType;
use EvenementBundle\JsonEntities\EventJson;
use ProduitBundle\Entity\Produit;
use StockBundle\Entity\LigneWishlist;
use StockBundle\Entity\Wishlist;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use UserBundle\Entity\User;

class lignecomController extends Controller
{

    public function afficherLigneClientAction()
    {
        $usr=$this->get('security.token_storage')->getToken()->getUser();
        $lignecmd=$this->getDoctrine()->getRepository(lignecmd::class)->findBy(array('userid'=>$usr));
        //$em=$this->getDoctrine()->getManager();
        //$lignecmd = $em->getRepository(lignecmd::class)->findAll();

        return $this->render("@Commande/ligne/afficheL.html.twig",array("lignecmd"=>$lignecmd));
    }

    public function supprimerLigneClientAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $lignecmd = $em->getRepository(lignecmd::class)->find($id);
        $em->remove($lignecmd);
        $em->flush();
        return $this->redirectToRoute('lignecommande_affiche_client');
    }

    public function afficheLigneAdminAction()
    {
        $em=$this->getDoctrine()->getManager();
        $ligne=$em->getRepository("CommandeBundle:lignecmd")->findAll();
        return $this->render("@Commande/Ligne/afficheLigneAdmin.html.twig",array("ligne"=>$ligne));
    }



    public function allAction()
    { $lp[] = array();
        $listId[] = array();
        $em=$this->getDoctrine()->getManager();
        $lignecmd=$em->getRepository('CommandeBundle:lignecmd')->findAll();
        foreach ($lignecmd as $p) {
            $user = $em->getRepository("ProduitBundle:Produit")->findAll();

            $lp[] = array(
            'y' => $p->getProduit()

            );
        }

        for($i=0;$i<count($lp);$i++){
            $listId[] = array(
                'id' => $lp[$i]->id

            );
        }
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($lp);
        return new JsonResponse($formatted);

    }






    public function addAction(Request $request)
    {


        $em = $this->getDoctrine()->getManager();
        $lignecmd = new lignecmd();
        $lignecmd->setProduit($request->get('produit'));
        $lignecmd->setQuantite($request->get('qte'));
        $lignecmd->setEtat($request->get('etat'));
        $lignecmd->setUserid($request->get('userid'));
        $em->persist($lignecmd);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($lignecmd);
        return new JsonResponse($formatted);

    }



    public function AfficherLigneDeCommandeJsonAction($id)
    {

        $em = $this->getDoctrine()->getManager();

        //$user = $em->getRepository("SUserBundle:User")->find($idU);

        $lcommande = $em->getRepository("CommandeBundle:lignecmd")->findby(array('produit' => $id));


       // $datesys = new DateTime();
        foreach ($lcommande as $l) {
            $produit = $em->getRepository("ProduitBundle:Produit")->findby(array('id' => $l->getProduit()));
            foreach ($produit as $p) {
                $lc[] = array(
                    'id' => $p->getId(),
                    'produit'=>$p->getId(),
                    'libelle' => $p->getLibelle(),

                    //'image' => $l->getImage(),
                    'qte'=>$l->getQuantite(),

                    'etat' => $l->getEtat(0),

                    );
            }

        }

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formated = $serializer->normalize($lc);
        return new JsonResponse($formated);

    }



    public function afficheJsonAction(Request $request, $id)
    {
        //$user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("UserBundle:User")->find($id);
      //  $wishlist = $em->getRepository('CommandeBundle:lignecmd')->findOneBy(array('userid' => $user));
        $lwishlist = $em->getRepository('CommandeBundle:lignecmd')->findBy(array('userid' => $user));
        foreach ($lwishlist as $l) {
            //   $produit = $em->getRepository('StockBundle:Produit')->findBy(array('id' => $l->getIdProduit()));
            //  foreach ($produit as $p) {
            $user = $em->getRepository("UserBundle:User")->find($l->getUserid());
            $lw[] = array(
                'iduser' =>$user->getId(),
                'id' =>$l->getId(),
                'produit' => $l->getProduit()->getId(),
                'qte' => $l->getQuantite(),
                'etat' => $l->getEtat(),
            );
        }
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formated = $serializer->normalize($lw);
        return new JsonResponse($formated);
    }





    public function AjoutLigneDeCommandeJsonAction(Request $request,$id,$idP,$quantite)
    {
        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository("UserBundle:User")->find($id);
      //  $dateLivraison = new \DateTime('+2 day');

        $commande = $em->getRepository("CommandeBundle:lignecmd", $user)->findOneBy(array('userid' => $user->getId()), array('id' => 'DESC'));
        $prod = $em->getRepository("ProduitBundle:Produit")->findBy(array('id'=>$idP));
        $i = 0;


        //ksort($panier);

        foreach ($prod as $p) {
            $lcommande = new lignecmd();

        //    $lcommande->setDateLivraison($dateLivraison);

            $lcommande->setProduit($p);
            $lcommande->setUserid($user);

            $lcommande->setQuantite($request->get('quantite'));

            $lcommande->setEtat(0);

            $em->persist($lcommande);
            $em->flush();
            $i++;
            $em = $this->getDoctrine()->getManager();
         //   $commande = $em->getRepository("CommandeBundle:lignecmd", $user)->findOneBy(array('userid   ' => $user->getId()), array('id' => 'DESC'));

            $normalizer = new ObjectNormalizer();
            $normalizer->setCircularReferenceLimit(2);
// Add Circular reference handler
            $normalizer->setCircularReferenceHandler(function ($object) {
                return $object->getId();
            });
            $normalizers = array($normalizer);
            $serializer=new Serializer($normalizers);
            $formatted=$serializer->normalize($commande);
            return new JsonResponse("Done");

        }
    }



    public function supprimerligneAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();
        $lwishlist = $em->getRepository(lignecmd::class)->find($id);
        $em->remove($lwishlist);
        $em->flush();
        //return new Response('Produit supprimé');

        return new JsonResponse("deleted");
    }



}