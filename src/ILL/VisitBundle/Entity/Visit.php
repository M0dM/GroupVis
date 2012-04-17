<?php

namespace ILL\VisitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use ILL\VisitBundle\Validator\Constraint as MyAssert;

/**
 * ILL\VisitBundle\Entity\Visit
 *
 * @ORM\Table(name="visit")
 * @ORM\Entity(repositoryClass="ILL\VisitBundle\Entity\VisitRepository")
 */
class Visit
{
	 /**
     * @ORM\OneToMany(targetEntity="Attendees", mappedBy="visit")     
     */
	private $attendees;
	
	
	public function __construct()
    {
        $this->attendees = new ArrayCollection();
    }
    
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Type("String")
     */
    private $name;

    /**
     * @var datetime $start_date
     *
     * @ORM\Column(name="start_date", type="datetime")
     * @Assert\NotBlank()
     * @Assert\Type("DateTime")
     */
    private $start_date;

	/**
     * @var datetime $end_date
     * @ORM\Column(name="end_date", type="datetime")
     * @MyAssert\DiffDate(field="start_date", message = "The start date of the visit is later than the end date or equivalent")
     * @Assert\NotBlank()
     * @Assert\Type("DateTime")
     */
    private $end_date;
    
    /**
     * @var text $details
     * 
     * @ORM\Column(name="details", type="text")
     * @Assert\NotBlank()
     */
    private $details;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="visits")
     * @ORM\JoinColumn(name="responsible_id", referencedColumnName="id")
     */
    private $responsible;

    
    /**
     * @ORM\ManyToOne(targetEntity="Institute", inversedBy="institutes")
     * @ORM\JoinColumn(name="institute_id", referencedColumnName="id")
     */
    private $institute;


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
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set start_date
     *
     * @param datetime $startDate
     */
    public function setStartDate($startDate)
    {
        $this->start_date = $startDate;
    }

    /**
     * Get start_date
     *
     * @return datetime 
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Set end_date
     *
     * @param datetime $endDate
     */
    public function setEndDate($endDate)
    {
        $this->end_date = $endDate;
    }

    /**
     * Get end_date
     *
     * @return datetime 
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * Set details
     *
     * @param text $details
     */
    public function setDetails($details)
    {
        $this->details = $details;
    }

    /**
     * Get details
     *
     * @return text 
     */
    public function getDetails()
    {
        return $this->details;
    }


    /**
     * Set responsible
     */
    public function setResponsible(User $responsible)
    {
        $this->responsible = $responsible;
    }

    /**
     * Get responsible
     */
    public function getResponsible()
    {
        return $this->responsible;
    }
    
	/**
     * Set institute 
     */
    public function setInstitute(Institute $institute)
    {
        $this->institute = $institute;
    }

    /**
     * Get responsible
     */
    public function getInstitute()
    {
        return $this->institute;
    }
    

    /**
     * Add attendees
     *
     * @param ILL\VisitBundle\Entity\Attendees $attendees
     */
    public function addAttendees(Attendees $attendees)
    {
        $this->attendees[] = $attendees;
    }

    /**
     * Get attendees
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getAttendees()
    {
        return $this->attendees;
    }
    
    public function getString()
    {
    	$stringVisit = "id : " 
    				 . $this->getId() . "\n"
    				 . "name : " 
    				 . $this->getName() . "\n"
    				 . "start date : "
    				 . $this->getStartDate()->format('Y-m-d H:i:s') . "\n"
    				 . "end date : "
    				 . $this->getEndDate()->format('Y-m-d H:i:s') . "\n"
    				 . "details : "
    				 . $this->getDetails() . "\n" 
    				 . "responsible Id : "
    				 . $this->getResponsible()->getId() . "\n"
    				 . "institute Id : "
    				 . $this->getInstitute()->getId();
    
    	return $stringVisit;
    }
}