<?php

namespace ILL\VisitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * ILL\VisitBundle\Entity\Attendee
 *
 * @ORM\Table(name="attendee")
 * @ORM\Entity(repositoryClass="ILL\VisitBundle\Entity\AttendeeRepository")
 */
class Attendee
{
	private $visits;
     
	public function __construct()
    {
        $this->visits = new ArrayCollection();
    }
    
    public function getVisits()
    {
    	return $this->visits;
    }
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
     * @var string $first_name
     * @Assert\NotBlank()
     * @Assert\Type("String")
     * @ORM\Column(name="first_name", type="string", length=150)
     */
    private $first_name;

    /**
     * @var string $last_name
     * @Assert\NotBlank()
     * @Assert\Type("String")
     * @ORM\Column(name="last_name", type="string", length=150)
     */
    private $last_name;

    /**
     * @var datetime $birth_date
     * @Assert\NotBlank()
     * @Assert\Type("\DateTime")
     * @ORM\Column(name="birth_date", type="datetime")
     */
    private $birth_date;

    /**
     * @var string $nationality
     * @Assert\NotBlank()
     * @Assert\Type("String")
     * @ORM\Column(name="nationality", type="string", length=150)
     */
    private $nationality;

    /**
     * @var enum $sex
     * @Assert\NotBlank()
     * @Assert\Type("String")
     * @ORM\Column(name="sex", type="string", columnDefinition="ENUM('Male', 'Female')")
     */
    private $sex;

    /**
     * @var string $place_of_birth
     * @Assert\NotBlank()
     * @Assert\Type("String")
     * @ORM\Column(name="place_of_birth", type="string", length=255)
     */
    private $place_of_birth;


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
     * Set first_name
     *
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;
    }

    /**
     * Get first_name
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set last_name
     *
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;
    }

    /**
     * Get last_name
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set birth_date
     *
     * @param datetime $birthDate
     */
    public function setBirthDate($birthDate)
    {
        $this->birth_date = $birthDate;
    }

    /**
     * Get birth_date
     *
     * @return datetime 
     */
    public function getBirthDate()
    {
        return $this->birth_date;
    }

    /**
     * Set nationality
     *
     * @param string $nationality
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    }

    /**
     * Get nationality
     *
     * @return string 
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set sex
     *
     * @param string $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    /**
     * Get sex
     *
     * @return string 
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set place_of_birth
     *
     * @param string $placeOfBirth
     */
    public function setPlaceOfBirth($placeOfBirth)
    {
        $this->place_of_birth = $placeOfBirth;
    }

    /**
     * Get place_of_birth
     *
     * @return string 
     */
    public function getPlaceOfBirth()
    {
        return $this->place_of_birth;
    }
    
    /**
     * @return string 
     */
    public function getFullName()
    {
        return sprintf("%s %s",strtoupper($this->last_name), ucfirst(strtolower($this->first_name)));
    }
    
}