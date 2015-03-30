<?php

namespace My\GraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use My\GraBundle\Entity\Players;
use Symfony\Component\HttpFoundation\Request;
use My\GraBundle\Form\Type\RegisterType;


    /**
     * @Route("/game")
     * 
     */
class GameController extends Controller 
{
    /**
     * @Route("/register",name="url_register")
     * 
     */
    public function registerAction(Request $request)
    {
        $Player= new Players();
        $form =$this->createForm(new RegisterType(),$Player);
        $form->handleRequest($request);
        if($form->isValid()){
            $dm=$this->getDoctrine()->getManager();
            $dm->persist($Player);
            $dm->flush();   
            return $this->redirect($this->generateUrl('url_register_success'));
            } //else {
            //return $this->redirect($this->generateUrl('url_register_failed'));
            //}
            
        return $this->render('Player.html.twig', array('form' => $form->createView()));
    }
    /**
     * @Route("/register/success",name="url_register_success")
     * 
     */
    public function registersuccessAction()
    {    
        return $this->render('Player_success.html.twig', array());
    }
    /**
     * @Route("/register/failed",name="url_register_failed")
     * 
     */
    public function registerfailedAction()
    {    
        return $this->render('Player_failed.html.twig', array());
    }
    /**
     * @Route("/login",name="url_login")
     * 
     */
    public function loginAction(Request $request)
    {    
        return $this->render('login.html.twig', array());
    }
    /**
     * @Route("/check",name="url_login_check")
     * 
     */
    public function logincheckAction(Request $request)
    {    
        
        $name=$request->request->get('name');
        $pass=$_POST['pass'];
        //$Player = $this->getDoctrine()->getRepository('MyGraBundle:Player')->findOneByName($name);
        $dm=$this->getDoctrine()->getManager();
        $Player=$dm->getRepository('MyGraBundle:Players')
                ->createQueryBuilder('a')
                ->where('a.name = :name')
                ->andWhere('a.pass = :pass')
                ->setParameter('name', $name)
                ->setParameter('pass', $pass)
                ->getQuery()
                ->getResult();//getOneOrNullResult
        if($Player != NULL){
        return $this->render('loginok.html.twig', array('name'=>$name));
    }else{
        return $this->render('loginerror.html.twig', array());
    }
    }
    
    
}
