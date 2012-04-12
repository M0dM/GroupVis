<?php

namespace ILL\VisitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class UserController extends Controller
{
   	/**
     * @Route("/user/visits")
     * @Template("ILLVisitBundle:Visit:showUserVisits.html.twig")
     */   
   	    public function visitsAction(){
   	    $user = $this->container->get('security.context')->getToken()->getUser();
   	    $userId = $user->getId();
    	$repository = $this->getDoctrine()->getRepository('ILLVisitBundle:Visit');
    	$visits = $repository->getVisitsForUserId($userId);
    	return array("visits"=>$visits);
    }
}
