<?php

namespace Storekeeper\InventoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classification
 */
class Classification
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
     * @var integer
     */
    private $classId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var boolean
     */
    private $hasPicture;

    /**
     * @var string
     */
    private $type;


    /**
     * Set classId
     *
     * @param integer $classId
     * @return Classification
     */
    public function setClassId($classId)
    {
        $this->classId = $classId;

        return $this;
    }

    /**
     * Get classId
     *
     * @return integer 
     */
    public function getClassId()
    {
        return $this->classId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Classification
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
     * @return Classification
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
     * Set hasPicture
     *
     * @param boolean $hasPicture
     * @return Classification
     */
    public function setHasPicture($hasPicture)
    {
        $this->hasPicture = $hasPicture;

        return $this;
    }

    /**
     * Get hasPicture
     *
     * @return boolean 
     */
    public function getHasPicture()
    {
        return $this->hasPicture;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Classification
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }
}
