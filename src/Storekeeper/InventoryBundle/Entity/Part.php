<?php

namespace Storekeeper\InventoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Part
 */
class Part
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
    private $partId;

    /**
     * @var boolean
     */
    private $isChildIndivisible;

    /**
     * @var integer
     */
    private $warehouse_Id;

    /**
     * @var integer
     */
    private $categoryId;

    /**
     * @var string
     */
    private $barecode;

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
     * Set partId
     *
     * @param integer $partId
     * @return Part
     */
    public function setPartId($partId)
    {
        $this->partId = $partId;

        return $this;
    }

    /**
     * Get partId
     *
     * @return integer 
     */
    public function getPartId()
    {
        return $this->partId;
    }

    /**
     * Set isChildIndivisible
     *
     * @param boolean $isChildIndivisible
     * @return Part
     */
    public function setIsChildIndivisible($isChildIndivisible)
    {
        $this->isChildIndivisible = $isChildIndivisible;

        return $this;
    }

    /**
     * Get isChildIndivisible
     *
     * @return boolean 
     */
    public function getIsChildIndivisible()
    {
        return $this->isChildIndivisible;
    }

    /**
     * Set warehouse_Id
     *
     * @param integer $warehouseId
     * @return Part
     */
    public function setWarehouseId($warehouseId)
    {
        $this->warehouse_Id = $warehouseId;

        return $this;
    }

    /**
     * Get warehouse_Id
     *
     * @return integer 
     */
    public function getWarehouseId()
    {
        return $this->warehouse_Id;
    }

    /**
     * Set categoryId
     *
     * @param integer $categoryId
     * @return Part
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer 
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set barecode
     *
     * @param string $barecode
     * @return Part
     */
    public function setBarecode($barecode)
    {
        $this->barecode = $barecode;

        return $this;
    }

    /**
     * Get barecode
     *
     * @return string 
     */
    public function getBarecode()
    {
        return $this->barecode;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Part
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
     * @return Part
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
     * @return Part
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
}
