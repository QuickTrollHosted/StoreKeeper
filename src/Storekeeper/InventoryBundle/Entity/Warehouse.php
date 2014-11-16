<?php

namespace Storekeeper\InventoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Warehouse
 */
class Warehouse
{
    /**
     * @var integer
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
     * Convert name object to string
     * 
     * @return string
     */
    public function __toString(){
        return (string)$this->id;
    }
    
    /**
     * @var integer
     */
    private $contact_Id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $gps;


    /**
     * Set contact_Id
     *
     * @param integer $contactId
     * @return Warehouse
     */
    public function setContactId($contactId)
    {
        $this->contact_Id = $contactId;

        return $this;
    }

    /**
     * Get contact_Id
     *
     * @return integer 
     */
    public function getContactId()
    {
        return $this->contact_Id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Warehouse
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     * Set description
     *
     * @param string $description
     * @return Warehouse
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set gps
     *
     * @param string $gps
     * @return Warehouse
     */
    public function setGps($gps)
    {
        $this->gps = $gps;

        return $this;
    }

    /**
     * Get gps
     *
     * @return string 
     */
    public function getGps()
    {
        return $this->gps;
    }
    /**
     * @var \Storekeeper\InventoryBundle\Entity\Contact
     */
    private $contact;


    /**
     * Set contact
     *
     * @param \Storekeeper\InventoryBundle\Entity\Contact $contact
     * @return Warehouse
     */
    public function setContact(\Storekeeper\InventoryBundle\Entity\Contact $contact = null)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return \Storekeeper\InventoryBundle\Entity\Contact 
     */
    public function getContact()
    {
        return $this->contact;
    }
}
