<?php

namespace ILL\VisitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use ILL\VisitBundle\Form\VisitType;
use ILL\VisitBundle\Entity\Visit;
use ILL\VisitBundle\Form\AttendeeType;
use ILL\VisitBundle\Entity\Attendee;
use ILL\VisitBundle\Entity\Attendees;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use ILL\VisitBundle\Validator\Constraint\DiffDate;
use ILL\VisitBundle\Validator\Constraint\DiffDateValidator;

class VisitController extends Controller
{
    /**
     * @Route("/visit/create")
     * @Template()
     */
    public function createAction(Request $request)
    {
    	$visit = new Visit();
   		$form = $this->createForm(new VisitType(), $visit);
        if ($request->getMethod() == 'POST') 
        {
           $form->bindRequest($request);
           if ($form->isValid())
           {
   				$em = $this->getDoctrine()->getEntityManager();
   				$em->persist($visit);
    			$em->flush();
			   	return $this->redirect($this->generateUrl('ill_visit_visit_all'));
           }
        }
   		return $this->render('ILLVisitBundle:Visit:create.html.twig', array("form"=>$form->createView())); 
    }
    
    /**
     * @Route("/visit/edit/{id}")
     * @Template("ILLVisitBundle:Visit:edit.html.twig")
     */
    public function editAction(Request $request, $id)
    {
        $visit = $this->getDoctrine()->getRepository('ILLVisitBundle:Visit')->find($id);        
        $form = $this->createForm(new VisitType(), $visit);
    	if (!$visit)
    	{
        	throw $this->createNotFoundException('No visit found for id '.$id);
    	}
   		if($request->getMethod() == 'POST')
   		{
			$form->bindRequest($request);
   			if ($form->isValid())
   			{
    			$em = $this->getDoctrine()->getEntityManager();
    			$em->persist($visit);
    			$em->flush();
			   	return $this->redirect($this->generateUrl('ill_visit_visit_all'));
   			}
    	}
   		return array("form"=>$form->createView(), "id"=>$id); 
    }
    
    /**
     * @Route("/visit/delete/{id}")
     * @Template()
     */
    public function deleteAction(Request $request, $id)
    {
        $visit = $this->getDoctrine()->getRepository('ILLVisitBundle:Visit')->find($id);
    	if (!$visit)
    	{
        	throw $this->createNotFoundException('No visit found for id '.$id);
    	}
		$em = $this->getDoctrine()->getEntityManager();
		$em->remove($visit);
		$em->flush();
	   	return $this->redirect($this->generateUrl('ill_visit_visit_all'));

    }
    
    /**
     * @Route("/visit/{id}")
     * @Template("ILLVisitBundle:Visit:view.html.twig")
     */
    public function viewAction(Request $request, $id)
    {
        $visit = $this->getDoctrine()->getRepository('ILLVisitBundle:Visit')->find($id);        
    	if (!$visit)
    	{
        	throw $this->createNotFoundException('No visit found for id '.$id);
    	}
		$attendees = $this->getDoctrine()->getRepository('ILLVisitBundle:Attendees')->getAttendeesForVisitId($visit->getId());
    	
    	// attendee form
    	$attendee = new Attendee();
   		$form = $this->createForm(new AttendeeType(), $attendee);
   		if($request->getMethod() == 'POST')
   		{
			$form->bindRequest($request);
   			if ($form->isValid())
   			{
    			$attendees = new Attendees();
    			$attendees->setAttendee($attendee);
    			$attendees->setVisit($visit);
				$em = $this->getDoctrine()->getEntityManager(); 
				$em->persist($attendee);		
    			$em->persist($attendees);
    			$em->flush();
    			$this->get('session')->setFlash('attendee_success', 'The attendee was added to the visit!');
   				return $this->redirect($this->generateUrl('ill_visit_visit_view', array("id"=>$visit->getId())));
   			}
    	}
   		return array("visit"=>$visit, "attendees"=>$attendees, "form"=>$form->createView());	
    }
    
    /**
     * @Route("/visit/{id}/attendee/search.json", defaults={"_format" = "json"})
     * @Template()
     */    
    public function searchAttendeeAction(Request $request, $id)
    {
    	$attendees = $this->getDoctrine()->getRepository('ILLVisitBundle:Attendee')
    								     ->searchByLastName($request->query->get('q'));
    	return array("attendees"=>$attendees, "visitId"=>$id);	    
    }
    
    /**
     * @Route("/visit/{id}/attendee/add/{attendeeId}.json", defaults={"_format" = "json"})
     * @Template("ILLVisitBundle:Visit:addAttendee.json.twig")
     */
    public function addAttendeeAction($id, $attendeeId)
    {
    	$visit = $this->getDoctrine()->getRepository('ILLVisitBundle:Visit')->findOneById($id);
        $attendee = $this->getDoctrine()->getRepository('ILLVisitBundle:Attendee')->findOneById($attendeeId);
        
        $attendees = new Attendees();
        $attendees->setVisit($visit);
        $attendees->setAttendee($attendee);
		$em = $this->getDoctrine()->getEntityManager();   		
    	$em->persist($attendees);
    	$em->flush();        
    	return array("attendee"=>$attendee, "visitId"=>$id);	    
   	}
   	
    /**
     * @Route("/visit/{id}/attendee/remove/{attendeeId}.json", defaults={"_format" = "json"})
     * @Template("ILLVisitBundle:Visit:removeAttendee.json.twig")
     */
    public function removeAttendeeAction	($id, $attendeeId)
    {
    	$attendee = $this->getDoctrine()->getRepository('ILLVisitBundle:Attendees')->findByVisitIdAndAttendeeId($id, $attendeeId);
		$em = $this->getDoctrine()->getEntityManager();   		
    	$em->remove($attendee);
    	$em->flush();        
   	}
   	
   	/**
     * @Route("/user/visits")
     * @Template("ILLVisitBundle:Visit:showUserVisits.html.twig")
     */   
   	    public function viewUserVisitsAction(){
   	    $user = $this->container->get('security.context')->getToken()->getUser();
   	    $userId = $user->getId();
    	$repository = $this->getDoctrine()->getRepository('ILLVisitBundle:Visit');
    	$visits = $repository->getVisitsForUserId($userId);
    	return array("visits"=>$visits);
    }
   	
     /**
     * @Route("/")
     * @Template("ILLVisitBundle:Visit:all.html.twig")
     */   
    public function allAction()
    {
    	$repository = $this->getDoctrine()->getRepository('ILLVisitBundle:Visit');
    	$visits = $repository->findAll();
    	return array("visits"=>$visits);
    	
    }
}
