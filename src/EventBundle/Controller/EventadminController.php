<?php

namespace EventBundle\Controller;

use Doctrine\DBAL\Types\DateType;
use EventBundle\Entity\Reservations;
use EventBundle\Form\ReservationAdmin;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EventBundle\Entity\Produit;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\UserInterface;


class EventadminController extends Controller
{
    public function homeAction()
    {
        return $this->render('@Event/Events/events_home.html.twig');
    }
    public function addEventAdminAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        //$prod = $em->getRepository("EventBundle:Produit")->find($libelle);
        $event = new Reservations();
        $form = $this->createForm(ReservationAdmin::class, $event);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            //$event->setIdUser($user);
            $event->setIduser(80);

           // $event->setIdUser($this->getUser());
            $event->setDate($form['date']->getData());
            $event->setPlace($form['place']->getData());
            $produit=$form['bike'] ->getData();
            $event->setBike($produit->getLibelle());
            $em->persist($event);
            $em->flush();
           return $this->redirectToRoute('eventadmin_show');
           // return $this->render('@Event/Events/add_eventadmin.html.twig', array("Form"=> $form->createView()));

        }
        return $this->render('@Event/Events/add_eventadmin.html.twig', array("Form"=> $form->createView()));

    }

    public function afficheEventadminAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository('EventBundle:Reservations')->findAll();
        if($request->isMethod("POST"))
        {$place =$request->get('place');
            $event = $em->getRepository('EventBundle:Reservations')->findBy(array('place'=>$place));

        }
        $paginator= $this->get('knp_paginator');
        $result=$paginator->paginate(
            $event,
            $request->query->getInt('page', 1), /*page number*/
            $request->query->getInt('limit',8) /*limit per page*/
        );
        return $this->render('@Event/Events/show_eventadmin.html.twig', array('event' => $result));

    }

   public function deleteeventadminAction(Request $request)
    {
        $idreservation = $request->get('idreservation');
        $em = $this->getDoctrine()->getManager();
        $Event = $em->getRepository('EventBundle:Reservations')->find($idreservation);
        $em->remove($Event);
        $em->flush();
        return $this->redirectToRoute('eventadmin_show');
    }
   public function updateeventadminAction(Request $request, $idreservation)
    {
        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository('EventBundle:Reservations')->find($idreservation);
        $form = $this->createForm(ReservationAdmin::class, $event);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $event->setIduser(80);

            //$event->setIduser($request->getUser());
            $event->setDate($form['date']->getData());
            $event->setPlace($form['place']->getData());
            $Produit=$form['bike']->getData();
            $event->setBike($Produit->getLibelle());
            $em->persist($event);
            $em->flush();
            return $this->redirectToRoute('eventadmin_show');
        }
        return $this->render('@Event/Events/update_eventadmin.html.twig', array("Form" => $form->createView()));
    }
   public function rechercheAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository('EventBundle:Reservations')->findAll();
        $paginator= $this->get('knp_paginator');
        $result=$paginator->paginate(
            $event,
            $request->query->getInt('page', 1), /*page number*/
            $request->query->getInt('limit',8) /*limit per page*/
        );
        return $this->render('@Event/Events/recherche.html.twig', array('event' => $result));

    }
}




