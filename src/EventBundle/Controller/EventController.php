<?php

namespace EventBundle\Controller;

use Doctrine\DBAL\Types\DateType;
use EventBundle\Entity\Reservations;
use EventBundle\Form\ReservationsType;
use ProduitBundle\Entity\Categorie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EventBundle\Entity\Produit;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\Response;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;

class EventController extends Controller
{
    public function homeAction()
    {
        return $this->render('@Event/Events/events_home.html.twig');
    }
      public function addEventAction(Request $request ,UserInterface $user)
      {

          $em = $this->getDoctrine()->getManager();
          //$prod = $em->getRepository("EventBundle:Produit")->find($libelle);
          $event = new Reservations();
          $form = $this->createForm(ReservationsType::class, $event);
          $form->handleRequest($request);
          if ($form->isSubmitted() && $form->isValid()) {
              $em = $this->getDoctrine()->getManager();
             // $event->setIdUser(2);
              $event->setIduser(89);
             $event->setDate($form['date']->getData());
              $event->setPlace($form['place']->getData());
              $produit=$form['bike']->getData();
             $event->setBike($produit->getLibelle());
              $em->persist($event);
              $em->flush();
             return $this->redirectToRoute('event_show');
            // return $this->render('@Event/Events/add_event.html.twig', array("Form"=> $form->createView()));




          }
          return $this->render('@Event/Events/add_event.html.twig', array("Form"=> $form->createView()));

      }

    public function afficheEventAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository('EventBundle:Reservations')->findAll();
        $paginator= $this->get('knp_paginator');
        $result=$paginator->paginate(
            $event,
            $request->query->getInt('page', 1), /*page number*/
            $request->query->getInt('limit',8) /*limit per page*/
        );
        return $this->render('@Event/Events/show_event.html.twig', array('event' => $result));

    }

    public function deleteeventAction(Request $request)
    {
        $idreservation = $request->get('idreservation');
        $em = $this->getDoctrine()->getManager();
        $Event = $em->getRepository('EventBundle:Reservations')->find($idreservation);
        $em->remove($Event);
        $em->flush();
        return $this->redirectToRoute('event_show');
    }
    public function updateeventAction(Request $request, $idreservation)
    {  // $user = $this->container->get('security.token_storage')->getToken()->getIduser();
       // $user->getIduser();

        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository('EventBundle:Reservations')->find($idreservation);
        $form = $this->createForm(ReservationsType::class, $event);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {

            $event->setIduser(89);
            $event->setDate($form['date']->getData());
            $event->setPlace($form['place']->getData());
            $Produit=$form['bike']->getData();
            $event->setBike($Produit->getLibelle());
            $em->persist($event);
            $em->flush();
            return $this->redirectToRoute('event_show');
        }
        return $this->render('@Event/Events/update_event.html.twig', array(
            "Form" => $form->createView()
        ));
    }

    ///pdf///
    public function pdfAction(Request $request,$idreservation)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();

        $idreservation = $request->get('idreservation');

        $em = $this->getDoctrine()->getManager();
        $rec = $em->getRepository('EventBundle:Reservations')->find($idreservation);
        //$rec=$em->getRepository('EventBundle:Reservations')->find($idreservation);




        $html = $this->renderView('EventBundle:Pdf:pdf.html.twig',array('event'=>$rec));


        $filename = 'myFirstSnappyPDF';
       // $filename = sprintf('Transport-%s.pdf', date('Y-m-d'));
        $snappy = $this->get('knp_snappy.pdf');
        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
            )
        );
        return $this->redirectToRoute('event_show');


    }
    public function allAction()
    {
       /* $event =$this->getDoctrine()->getManager()
            ->getRepository('EventBundle:Reservations')->findAll();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(2);

        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });
        $serializer =new Serializer(array(new Serializer(),$normalizer));
        $formatted =$serializer->normalize($event);
        return new JsonResponse($formatted);*/

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT c.idreservation,c.date,c.place,c.bike,c.iduser	
        FROM EventBundle:Reservations c  '
        );
        $event = $query->getArrayResult();
        $response = new Response(json_encode($event));
        $response->headers->set('Content-Type', 'application/json');
        return $response;

    }
    public function addAction(Request $request,$place,$bike,$iduser)
    {
        $em = $this->getDoctrine()->getManager();
        //$prod = $em->getRepository("EventBundle:Produit")->find($libelle);

        $event = new Reservations();
        $form = $this->createForm(ReservationsType::class, $event);


        $em = $this->getDoctrine()->getManager();

            $event->setIduser(89);
        //$post->setDescription($request->get('description'));
        $date = new \DateTime($request->get("date"));
           $event->setDate($date);

            $event->setPlace($request->get("place"));
        $event->setBike($request->get("bike"));
        //$produit=$this->getDoctrine()->getManager()->getRepository(Produit::class)->findOneBy(['libelle'=>$bike]);

        //$event->setBike($produit);
            $em->persist($event);
            $em->flush();



        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($event);
        return new JsonResponse($formatted);


     }
    public function deleteAction(Request $request,$idreservation)
    {
      //  $idreservation = $request->get('idreservation');
        $em = $this->getDoctrine()->getManager();
        $Event = $em->getRepository('EventBundle:Reservations')->find($idreservation);
        $em->remove($Event);
        $em->flush();
        // Déclaration Entity Manager
        return new JsonResponse("deleted");

    }



    public function updatepostAction(Request $request, $idreservation)

    {
        $em=$this->getDoctrine()->getManager();
        $event = $em->getRepository('EventBundle:Reservations')->find($idreservation);
        $date = new \DateTime($request->get("date"));
        $event->setDate($date);
        $event->setplace($request->get('place'));
        $event->setbike($request->get('bike'));
        $em->persist($event);
        $em->flush();
        return new JsonResponse("success");

    }

    public function JsonAction(Request $request, $id)
    {
        //$user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $p = $em->getRepository('AppBundle:Post')->find($id);
        //$user = $em->getRepository("AppBundle:User")->find($id);
        //  $wishlist = $em->getRepository('CommandeBundle:lignecmd')->findOneBy(array('userid' => $user));
        $lwishlist = $em->getRepository('AppBundle:Postcomment')->findBy(array('post' => $p));
        foreach ($lwishlist as $l) {
//            //  foreach ($produit as $p) {
            //$user = $em->getRepository("AppBundle:User")->find($l->getUser());
            $lw[] = array(
                //  'user' =>$user->getId(),
                'id' =>$l->getId(),
                //'posted_at'=>$l->getPostedAt(),
                // 'post' => $l->getPost()->getId(),
                'content' => $l->getContent(),

            );
        }

        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(2);
// Add Circular reference handler
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });
        $normalizers = array($normalizer);
        $serializer=new Serializer($normalizers);
        //  $serializer = new Serializer([new ObjectNormalizer()]);
        $formated = $serializer->normalize($lw);
        return new JsonResponse($formated);
    }
    public function allbikeAction()
    {
        $event =$this->getDoctrine()->getManager()
            ->getRepository('EventBundle:Produit')->findAll();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(2);

        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getLibelle();
        });
        $serializer =new Serializer(array(new Serializer(),$normalizer));
        $formatted =$serializer->normalize($event);
        return new JsonResponse($formatted);

    }

}





       /*    $event = new Reservations();
           $form= $this->createForm(BlogPostType::class, $post);
           $form->handleRequest($request);

           if($form->isSubmitted() && $form->isValid())
           {
           }
               $em = $this->getDoctrine()->getManager();

               $file = $post->getImg();
               $filename= md5(uniqid()) . '.' . $file->guessExtension();
               $file->move($this->getParameter('photos_directory'), $filename);*/

