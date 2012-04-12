<?php
namespace ILL\VisitAPIBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\Route,
    FOS\RestBundle\Controller\Annotations\NoRoute,
    FOS\RestBundle\Controller\Annotations\Get,
    FOS\RestBundle\Controller\Annotations\Post;

class VisitController extends Controller
{
    /**
     * @Get("/visits", defaults={"_format" = "json"})
     */
    public function indexAction()
    {
        $data =   $this->getDoctrine()
                       ->getRepository('ILLVisitBundle:Visit')
                       ->findAll();
        return array("data"=>$data);
    }
    
    /**
     * @Post("/visits", defaults={"_format" = "json"})
     */
    public function createAction()
    {
			
    }
}
