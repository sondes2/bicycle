<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NotificationController extends Controller
{
    public function  displayAction(){
        $user= $this->get('security.token_storage')->getToken()->getUser();
        $notifications = $this->getDoctrine()->getManager()->getRepository('AppBundle:Notification')->filterrr($user);
        return $this->render('@App/notifications.html.twig',array(
            'notifications'=>$notifications
        ));
    }
}
