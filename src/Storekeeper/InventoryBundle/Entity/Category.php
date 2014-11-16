<?php

namespace Storekeeper\InventoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 */
class Category
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
     * Set name
     *
     * @param string $name
     * @return Category
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
     * @return Category
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
     * @return Category
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
     * Set category
     *
     * @param \Storekeeper\InventoryBundle\Entity\Category $category
     * @return Category
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
}
