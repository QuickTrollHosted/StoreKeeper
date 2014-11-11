<?php

namespace Storekeeper\InventoryBundle\Entity\Inventory;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class
 */
class Classification
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $classificationId;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set classId
     *
     * @param integer $classId
     * @return Class
     */
    public function setClassificationId($classificationId)
    {
        $this->classificationId = $classificationId;

        return $this;
    }

    /**
     * Get classId
     *
     * @return integer 
     */
    public function getClassificationId()
    {
        return $this->classificationId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Class
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
     * @return Class
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
     * @return Class
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
     * @return Class
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
    /**
     * @var integer
     */
    private $classId;


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
}
