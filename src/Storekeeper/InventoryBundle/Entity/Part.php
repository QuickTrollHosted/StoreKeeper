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

    public function __toString(){
        return $this->id;
    }
    
    /**
     * @var boolean
     */
    private $isChildIndivisible;

    /**
     * @var integer
     */
    private $warehouse_Id;

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
 
    /**
     * @var \Storekeeper\InventoryBundle\Entity\Category
     */
    private $category;


    /**
     * @var \Storekeeper\InventoryBundle\Entity\Warehouse
     */
    private $warehouse;


    /**
     * Set category
     *
     * @param \Storekeeper\InventoryBundle\Entity\Category $category
     * @return Part
     */
    public function setCategory(\Storekeeper\InventoryBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Storekeeper\InventoryBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set warehouse
     *
     * @param \Storekeeper\InventoryBundle\Entity\Warehouse $warehouse
     * @return Part
     */
    public function setWarehouse(\Storekeeper\InventoryBundle\Entity\Warehouse $warehouse = null)
    {
        $this->warehouse = $warehouse;

        return $this;
    }

    /**
     * Get warehouse
     *
     * @return \Storekeeper\InventoryBundle\Entity\Warehouse 
     */
    public function getWarehouse()
    {
        return $this->warehouse;
    }
    /**
     * @var string
     */
    private $barcode;


    /**
     * Set barcode
     *
     * @param string $barcode
     * @return Part
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;

        return $this;
    }

    /**
     * Get barcode
     *
     * @return string 
     */
    public function getBarcode()
    {
        return $this->barcode;
    }
}
