<?php

namespace My\GraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use My\GraBundle\Entity\Players;
use My\GraBundle\Entity\Heroes;
use My\GraBundle\Entity\Items;
use Symfony\Component\HttpFoundation\Request;
use My\GraBundle\Form\Type\RegisterType;


    /**
     * @Route("/game/play/{nick}")
     * 
     */
class PlayController extends Controller {
    
    /**
     * @Route("/new",name="url_new")
     * 
     */
    public function newAction($nick)
    {   
        $item=$this->getDoctrine()->getRepository('MyGraBundle:Items')->findOneById('3'); 
        $Player = $this->getDoctrine()->getRepository('MyGraBundle:Players')->findOneByName($nick);
        if($Player === NULL){
            //nie ma takiego gracza
            return $this->render('loginerror.html.twig', array());
        }
        $Heroes = $this->getDoctrine()->getRepository('MyGraBundle:Heroes')->findOneByName($nick);
        if($Heroes != NULL){
        $Heroes->setExp('0');
        $Heroes->setHp('100');
        $Heroes->setStamina('100');
        $Heroes->setStr('0');
        $Heroes->setWeight('0');
        $Heroes->setItem1(NULL);
        $Heroes->setItem2($item);
        $Heroes->setItem3('0');
        $dm = $this->getDoctrine()->getManager();
        //$dm->persist($Heroes);
        $dm->flush();
    }else{
        $Heroes=new Heroes();
        $Heroes->setName($nick);
        $Heroes->setExp('0');
        $Heroes->setHp('100');
        $Heroes->setStamina('100');
        $Heroes->setStr('0');
        $Heroes->setWeight('0');
        $Heroes->setItem1(NULL);
        $Heroes->setItem2($item);
        $Heroes->setItem3('0');
        $dm = $this->getDoctrine()->getManager();
        $dm->persist($Heroes);
        $dm->flush();
    }
        return $this->render('new.html.twig', array());
    }
    /**
     * @Route("/statistic",name="url_statistic")
     * 
     */
    public function statisticAction($nick)
    {    
        $Heroes = $this->getDoctrine()->getRepository('MyGraBundle:Heroes')->findOneByName($nick);
        $dm=  $this->getDoctrine()->getManager();
        $dm->flush();
        if($Heroes === NULL){
            //nie ma takiego gracza
            return $this->render('loginerror.html.twig', array());
        }
        $exp=$Heroes->getExp();
        $hp=$Heroes->getHp();   
        $stam=$Heroes->getStamina();
        $str=$Heroes->getStr();
        $weight=$Heroes->getWeight();
        $item1=$Heroes->getItem1();
        $item2=$Heroes->getItem2();
        $item3=$Heroes->getItem3();
        
        return $this->render('statistic.html.twig', array('nick'=>$nick, 'exp'=>$exp,
            'hp'=>$hp, 'stam'=>$stam, 'str'=>$str, 'weight'=>$weight, 'item1'=>$item1,
             'item2'=>$item2, 'item3'=>$item3,));
    }
}
