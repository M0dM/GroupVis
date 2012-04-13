<?php

namespace ILL\VisitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use ILL\VisitBundle\Form\InstituteType;
use ILL\VisitBundle\Entity\Institute;

class AdminController extends Controller
{
    /**
     * @Route("/admin")
     * @Template()
     */
    public function indexAction()
    {
        return $this->render("ILLVisitBundle:Admin:index.html.twig");
    }
    
     /**
     * @Route("/admin/institute/create")
     * @Template()
     */
    public function createAction(Request $request)
    {
    	$repository = $this->getDoctrine()->getRepository('ILLVisitBundle:Institute');
    	$institutes = $repository->findAll();    	
    	$institute = new Institute();
    	$form = $this->createForm(new InstituteType(),$institute);
        return $this->render("ILLVisitBundle:Admin:createInstitute.html.twig", array("form"=>$form->createView(), "institutes"=>$institutes));
    }
    
     /**
     * @Route("/admin/institute/show")
     * @Template()
     */
    public function showInstitutesAction(Request $request)
    {
    	$repository = $this->getDoctrine()->getRepository('ILLVisitBundle:Institute');
    	$institutes = $repository->findAll();
    	return $this->render("ILLVisitBundle:Admin:showInstitutes.html.twig", array("institutes"=>$institutes));
    }
    
     /**
     * @Route("/admin/institute/add.json", defaults={"_format" = "json"})
     * @Template("ILLVisitBundle:Admin:addInstitute.json.twig")
     */
    public function addInstituteAction(Request $request)
    {
    	$institute = new Institute();
    	$form = $this->createForm(new InstituteType(),$institute);
    	if ($request->getMethod() == 'POST') 
        {
           $form->bindRequest($request);
           if ($form->isValid())
           {
   				$em = $this->getDoctrine()->getEntityManager();
   				$em->persist($institute);
    			$em->flush();
    			$this->get('session')->setFlash('institute_success', 'The institute was added to the repository !');
           }
        }
        
        $repository = $this->getDoctrine()->getRepository('ILLVisitBundle:Institute');
    	return array("institute"=>$institute);	    
   	}
}
