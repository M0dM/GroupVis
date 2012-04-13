<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class ILLVisitBundleEntityAttendeeProxy extends \ILL\VisitBundle\Entity\Attendee implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function getVisits()
    {
        $this->__load();
        return parent::getVisits();
    }

    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setFirstName($firstName)
    {
        $this->__load();
        return parent::setFirstName($firstName);
    }

    public function getFirstName()
    {
        $this->__load();
        return parent::getFirstName();
    }

    public function setLastName($lastName)
    {
        $this->__load();
        return parent::setLastName($lastName);
    }

    public function getLastName()
    {
        $this->__load();
        return parent::getLastName();
    }

    public function setBirthDate($birthDate)
    {
        $this->__load();
        return parent::setBirthDate($birthDate);
    }

    public function getBirthDate()
    {
        $this->__load();
        return parent::getBirthDate();
    }

    public function setNationality($nationality)
    {
        $this->__load();
        return parent::setNationality($nationality);
    }

    public function getNationality()
    {
        $this->__load();
        return parent::getNationality();
    }

    public function setSex($sex)
    {
        $this->__load();
        return parent::setSex($sex);
    }

    public function getSex()
    {
        $this->__load();
        return parent::getSex();
    }

    public function setPlaceOfBirth($placeOfBirth)
    {
        $this->__load();
        return parent::setPlaceOfBirth($placeOfBirth);
    }

    public function getPlaceOfBirth()
    {
        $this->__load();
        return parent::getPlaceOfBirth();
    }

    public function getFullName()
    {
        $this->__load();
        return parent::getFullName();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'first_name', 'last_name', 'birth_date', 'nationality', 'sex', 'place_of_birth');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}