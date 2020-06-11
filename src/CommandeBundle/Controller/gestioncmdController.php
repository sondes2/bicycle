<?php

namespace CommandeBundle\Controller;
use CommandeBundle\Entity\lignecmd;
use CommandeBundle\Entity\cmd;
use EvenementBundle\JsonEntities\EventJson;
use ProduitBundle\Entity\Produit;

use CommandeBundle\Form\cmdType;
use CommandeBundle\Form\lignecmdType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use UserBundle\Entity\User;


class gestioncmdController extends Controller
{
    public function ajoutCmdClientAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $cmd = new cmd();
        $form = $this->createForm(cmdType::class, $cmd);
        $form->handleRequest($request);

        $user = $this->container->get('security.token_storage')->getToken()->getuser();

        $ligne = $user->getLignecmds();
        $prix = 0;
        foreach ($ligne as $l) {
            if ($l->getEtat() == 0) {
                $prix = ($l->getProduit()->getPrix() * $l->getQuantite()) + $prix;
                $l->setEtat(1);
                $l->getProduit()->setQte($l->getProduit()->getQte() - $l->getQuantite());

            }
        }

        if ($form->isSubmitted()) {
            $user = $this->container->get('security.token_storage')->getToken()->getuser();
            $user->getId();

            $cmd->setPrix($prix);
            $cmd->setUserid($user);
            $em->persist($cmd);
            $em->flush();


            //Envoi d'un mail:
            // Create the Transport
            $transport = (new \Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))
                ->setUsername('asma.noury@gmail.com')
                ->setPassword('iphonerahali');

            /*
            You could alternatively use a different transport such as Sendmail:

            // Sendmail
            $transport = new Swift_SendmailTransport('/usr/sbin/sendmail -bs');
            */

            // Create the Mailer using your created Transport
            $mailer = new \Swift_Mailer($transport);

            // Create a message
            $message = (new \Swift_Message('Commande Validée'))
                ->setFrom('omarb1414a@gmail.com')
                ->setTo($user->getEmail())
                ->setBody(
                    '<html>' .
                    ' <body>' .
                    '<h4> Cher ' . $user->getUsername() . 'Nous vous informons que votre commande N° ' . $cmd->getId() . ' a été prise en compte, vous avez au maximum 5 heures pour annuler votre commande - merci pour votre achat
            Cordialement l\'equipe Go Bike </h4> ' .


                    '</html>' .
                    ' </body>', 'text/html'
                );

            // Send the message
            $mailer->send($message);
            ///////////////////


            return $this->redirectToRoute('commande_affiche_Client', array('id' => $cmd->getId()));
        }

        return $this->render("@Commande/Commande/ajoutC.html.twig", array("form" => $form->createView(), "prix" => $prix));
    }

    public function afficheCmdAdminAction(Request $request
    )
    {
        $em = $this->getDoctrine()->getManager();
        $cmd = $em->getRepository("CommandeBundle:cmd")->findAll();

        /**
         * @var $paginator \knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $cmd,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 4)
        );
        return $this->render("@Commande/Commande/afficheC.html.twig", array("cmd" => $result));

    }

    public function afficheCmdClientAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $cmd = $em->getRepository('CommandeBundle:cmd')->find($id);

        return $this->render('@Commande/Commande/afficheCmdC.html.twig', array('cmd' => $cmd));

    }

    public function supprimerCmdAdminAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $cmd = $em->getRepository(cmd::class)->find($id);
        $em->remove($cmd);
        $em->flush();
        return $this->redirectToRoute('commande_affiche_admin');
    }


    public function exportAction()
    {
        $em = $this->getDoctrine()->getManager();
        $cmds = $em->getRepository(cmd::class)->findAll();
        $writer = $this->container->get('egyg33k.csv.writer');
        $csv = $writer::createFromFileObject(new \SplTempFileObject());
        $csv->insertOne(['id', 'nom']);

        foreach ($cmds as $cmds) {
            $csv->insertOne([$cmds->getTelephone(), $cmds->getAdresse()]);
        }
        $csv->output('all-carts.csv');

        die('export');
    }


    public function allLAction()
    {
        $lignecmd = $this->getDoctrine()->getManager()
            ->getRepository('CommandeBundle:cmd')->findAll();
        $data = $this->get('jms_serializer')->serialize($lignecmd, 'json');
        // $data = $this->get('jms_serializer')->serialize($lignecmd, 'json',SerializationContext::create()->setGroups(array('list')));
        //console.log($data);
        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');
        //  $normalizer = new ObjectNormalizer();
        //$normalizer->setCircularReferenceLimit(2);
        //$normalizer->setCircularReferenceHandler(function ($object) {
        //return $object->getId();
        //});
        //$serializer =new Serializer(array(new Serializer(),$normalizer));
        //$formatted =$serializer->normalize($lignecmd);
        return $response;

    }


    public function allAction(Request $request)
    {
        //$user = $this->container->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $event = $this->getDoctrine()->getManager()->getRepository('CommandeBundle:cmd')->findAll();
        $lstEv = array();
        foreach ($event as $ev) {
            $user = $em->getRepository("UserBundle:User")->find($ev->getUserid());
            $ev->setUserid($user->getId());
            $ev->setAdresse($ev->getAdresse());
            $lstEv[] = $ev;
        }

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($lstEv);
        return new JsonResponse($formatted);
    }


    public function ajoutWSAction(Request $request, $id, $adresse, $prix, $telephone)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = new cmd();
        $u = $em->getRepository("UserBundle:User");
        $user = $em->getRepository("UserBundle:User")->find($id);
        //    $cmd = $em->getRepository("CommandeBundle:lignecmd")->find('id'=> );
        $pr = $em->getRepository("ProduitBundle:Produit")->find($prix);
        $produit->setUserid($user);
        $produit->setPrix($prix);
        $produit->setAdresse($request->get('adresse'));
        $produit->setTelephone($request->get('telephone'));

        $em->persist($produit);
        $em->flush();

        $transport = (new \Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))
            ->setUsername('asma.noury@gmail.com')
            ->setPassword('iphonerahali');




        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository("CommandeBundle:cmd", $user)->findOneBy(array('userid' => $user->getId()), array('id' => 'DESC'));
        $headers = "\r\n" . "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        $headers .= "Message-ID: <" . time() . " TheSystem@" . $_SERVER['SERVER_NAME'] . ">\r\n";
        $headers .= "X-Mailer: PHP v" . phpversion() . "\r\n";
        $mailer = new \Swift_Mailer($transport);
        $message = \Swift_Message::newInstance()
            ->setSubject('Commande Validée')
            ->setFrom('asma.noury@gmail.com')
            ->setTo($user->getEmail())
            ->setBody(' Cher(e) '. $user->getUsername() .' Nous vous informons que votre commande N° ' . $commande->getId() . ' a été prise en compte, vous avez au maximum 5 heures pour annuler votre commande - merci pour votre achat
            Cordialement l\'equipe Go Bike ');

        $mailer->send($message);
        $serializer=new Serializer([new ObjectNormalizer()]);
        $formatted=$serializer->normalize($commande);
        return new JsonResponse("cmd ajouté");
    }


    public function loginMobileAction($username, $password)
    {
        $user_manager = $this->get('fos_user.user_manager');
        $factory = $this->get('security.encoder_factory');


        $data = [
            'type' => 'validation error',
            'title' => 'There was a validation error',
            'errors' => 'username or password invalide'
        ];
        $response = new JsonResponse($data, 400);
        $user = $user_manager->findUserByUsername($username);
        if (!$user)
            return $response;
        $encoder = $factory->getEncoder($user);
        $bool = ($encoder->isPasswordValid($user->getPassword(), $password, $user->getSalt())) ? "true" : "false";
        if ($bool == "true") {
            $role = $user->getRoles();
            $ss = $role[0];

            $role = $user->getRoles();
            $data = array('type' => 'Login succeed',
                'id' => $user->getId(),
                'username' => $user->getUsername(),
                //'lastname'=>$user->getLastname(),
                'email' => $user->getEmail(),
                // 'image'=>$user->getImage(),
                // 'birthDay'=>$user->getBirthDay()->format('d-m-Y'),
                'role' => $ss);
            // 'gender'=>$user->getGender());
            $response = new JsonResponse($data, 200);
            return $response;
        } else {
            return $response;
        }
        // return array('name' => $bool);
    }



    public function loginnnAction($username,$password)
    {
        // This data is most likely to be retrieven from the Request object (from Form)
        // But to make it easy to understand ...
        $_username = $username;
        $_password = $password;

        // Retrieve the security encoder of symfony
        $factory = $this->get('security.encoder_factory');

        /// Start retrieve user
        // Let's retrieve the user by its username:
        // If you are using FOSUserBundle:
        $user_manager = $this->get('fos_user.user_manager');
        // $user = $user_manager->findUserByUsername($_username);
        // Or by yourself
        //$user = $this->getDoctrine()->getManager()->getRepository("MettingBundle:User")
        //  ->findOneBy(array('username' => $_username));

        $user = $user_manager->findUserByUsername($_username);
        // if(!$user)
        //   return $response;

        /// End Retrieve user

        // Check if the user exists !
        if(!$user){
            return new Response(
                'Username doesnt exists',
                Response::HTTP_UNAUTHORIZED,
                array('Content-type' => 'application/json')
            );
        }

        /// Start verification
        $encoder = $factory->getEncoder($user);
        $salt = $user->getSalt();

        if(!$encoder->isPasswordValid($user->getPassword(), $_password, $salt)) {
            return new Response(
                'Username or Password not valid.',
                Response::HTTP_UNAUTHORIZED,
                array('Content-type' => 'application/json')
            );
        }
        /// End Verification

        // The password matches ! then proceed to set the user in session

        //Handle getting or creating the user entity likely with a posted form
        // The third parameter "main" can change according to the name of your firewall in security.yml
        $token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
        $this->get('security.token_storage')->setToken($token);

        // If the firewall name is not main, then the set value would be instead:
        // $this->get('session')->set('_security_XXXFIREWALLNAMEXXX', serialize($token));
        $this->get('session')->set('_security_main', serialize($token));

        // Fire the login event manually
        // $event = new InteractiveLoginEvent($request, $token);
        // $this->get("event_dispatcher")->dispatch("security.interactive_login", $event);

        /*
         * Now the user is authenticated !!!!
         * Do what you need to do now, like render a view, redirect to route etc.
         */




        $user = $this->get('security.token_storage')->getToken()->getUser();
        $id=$user->getId();

        $role= $user->getRoles();
        $ss=$role[0];


        $data=array('type'=>'Login succeed',
            'id'=>$user->getId(),
            'username'=>$user->getUsername(),
            'email'=>$user->getEmail(),
            //  'email'=>$user->getEmail(),
            //'image'=>$user->getImage(),
            //'birthDay'=>$user->getBirthDay()->format('d-m-Y'),
            'role'=>$ss,
            // 'role'=>$user->getRoles(),
            //'gender'=>$user->getGender()
        );
        $response = new JsonResponse($data, 200);
        return $response;




    }

    public function currentAction(){
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $id=$user->getId();

        $role= $user->getRoles();
        $ss=$role[0];


        $data=array('type'=>'Login succeed',
            'id'=>$user->getId(),
            'username'=>$user->getUsername(),
            'email'=>$user->getEmail(),
            //  'email'=>$user->getEmail(),
            //'image'=>$user->getImage(),
            //'birthDay'=>$user->getBirthDay()->format('d-m-Y'),
            'role'=>$ss,
            // 'role'=>$user->getRoles(),
            //'gender'=>$user->getGender()
        );
        $response = new JsonResponse($data, 200);
        return $response;

    }












}
