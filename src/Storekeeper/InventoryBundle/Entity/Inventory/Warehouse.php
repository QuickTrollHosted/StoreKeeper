<?php

namespace Storekeeper\InventoryBundle\Entity\Inventory;

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
     * @var integer
     */
    private $contact_Id;


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
}
