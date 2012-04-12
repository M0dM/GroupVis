<?php

namespace ILL\VisitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ILL\VisitBundle\Entity\Institute
 *
 * @ORM\Table(name="institute")
 * @ORM\Entity(repositoryClass="ILL\VisitBundle\Entity\InstituteRepository")
 */
class Institute
{
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
     * @ORM\Column(name="name", type="string", length=150)
     */
    private $name;

    /**
     * @var string $printable_name
     *
     * @ORM\Column(name="printable_name", type="string", length=255)
     */
    private $printable_name;


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
     * Set printable_name
     *
     * @param string $printableName
     */
    public function setPrintableName($printableName)
    {
        $this->printable_name = $printableName;
    }

    /**
     * Get printable_name
     *
     * @return string 
     */
    public function getPrintableName()
    {
        return $this->printable_name;
    }
    
    public function __toString()
    {
    	return $this->name;
    }
}