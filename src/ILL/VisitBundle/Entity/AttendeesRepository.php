<?php

namespace ILL\VisitBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * AttendeesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AttendeesRepository extends EntityRepository
{
	public function getAttendeesForVisitId($id)
	{
		$query = $this->createQueryBuilder('v')
    		 		  ->where('v.visit = :id')
    		 		  ->setParameter("id", $id)
    		 		  ->innerJoin('v.attendee', 'a')
    		 		  ->orderBy('a.last_name', 'ASC')
    		 		  ->getQuery();

		return $query->getResult();
	}

	public function findByVisitIdAndAttendeeId($visitId, $attendeeId)
	{
		$query = $this->createQueryBuilder('v')
    		 		  ->where('v.visit = :visit_id')
    		 		  ->andWhere("v.attendee = :attendee_id")
    		 		  ->setParameters(array("visit_id" => $visitId,
    		 		  						"attendee_id" => $attendeeId
    		 		  						)
    		 		  				 )
    		 		  ->getQuery();
		return $query->getSingleResult();
	}

}