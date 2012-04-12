<?php
namespace ILL\VisitBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ILL\VisitBundle\Entity\Attendees
 * 
 * @ORM\Table(name="attendees")
 * @ORM\Entity(repositoryClass="ILL\VisitBundle\Entity\AttendeesRepository")
 */
class Attendees
{
	
	 /**
     * @var integer $id
     * @Assert\NotBlank()
     * @Assert\Type("\Integer")
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
	
    /**
     * @ORM\ManyToOne(targetEntity="Visit", inversedBy="attendees")
     * @ORM\JoinColumn(name="visit_id", referencedColumnName="id")
     * @Assert\NotBlank()
     * @Assert\Type("\Integer")
     */
    private $visit;

    /**
     * Get visit
     *
     * @return visit 
     */
    public function getVisit()
    {
        return $this->visit;
    }
       
    public function setVisit(Visit $visit)
    {
        $this->visit = $visit;
    }

    /**
     * @ORM\ManyToOne(targetEntity="Attendee", inversedBy="visits")
     * @ORM\JoinColumn(name="attendee_id", referencedColumnName="id")
     */
    private $attendee;
    
    /**
     * Get visit
     *
     * @return integer 
     */
    public function getAttendee()
    {
        return $this->attendee;
    }
       
    public function setAttendee(Attendee $attendee)
    {
        $this->attendee = $attendee;
    }
    
}