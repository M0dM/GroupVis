<?php
namespace ILL\VisitBundle\Tests\Model;
 
use ILL\VisitBundle\Tests\Model;
use ILL\VisitBundle\Entity\Visit;
use ILL\VisitBundle\Entity\User;
use ILL\VisitBundle\Entity\Institute;

 
require_once dirname(__DIR__).'/Model/TestCase.php';
 
class VisitTest extends TestCase
{
	public function testGenerateVisit()
    {
    	$visit = new Visit();    	
        $visit->setName('Jamie s comming to visit ILL');
        $d1 = new \DateTime('02/31/2011');
        $visit->setStartDate($d1);
        $d2 = new \DateTime('06/31/2011');
        $visit->setEndDate($d2);
        $responsible = new User();
        $responsible->setFirstName("kjjzqdaz");
        $responsible->setLastName("hkjzqdqdzaz");
        $responsible->setUsername("jljqzdqzdkjjaz");
        $responsible->setUsernameCanonical("jqzdqzdjlaz");
        $responsible->setPassword("superjaqzdqzdmiaz");
        $responsible->setEmail("jhll@mqzdqzdail.faz");
        $this->entityManager->persist($responsible);
        $this->entityManager->flush();
        $visit->setResponsible($responsible);
        $institute= new Institute();
        $institute->setName("Plop");
        $institute->setPrintableName("Institut du plop");
        $this->entityManager->persist($institute);
        $this->entityManager->flush();
        $visit->setInstitute($institute);
        $visit->setDetails("tous les details");
 
        // Save the location 
        $this->entityManager->persist($visit);
        $this->entityManager->flush();
 
 		$stringBeforeCompare = "id : "
 						. $visit->getId() . "\n"
        				. "name : "
        				. "Jamie s comming to visit ILL" . "\n"
        				. "start date : " 
        				. $d1->format('Y-m-d H:i:s') . "\n"
        				. "end date : " 
        				. $d2->format('Y-m-d H:i:s') . "\n"
        				. "details : "
        				. $visit->getDetails() . "\n"
        				. "responsible Id : "
        				. $responsible->getId() . "\n"
        				. "institute Id : "
        				. $institute->getId();
        
        echo "\n";
        $this->assertEquals($stringBeforeCompare, $visit->getString());
        
        echo "\n########################\n";
        echo $visit->getString();
        echo "\n########################\n";
        
    }
}