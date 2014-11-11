<?php

namespace Storekeeper\InventoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pack
 */
class Pack
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
     * Set barecode
     *
     * @param string $barecode
     * @return Pack
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
     * @return Pack
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
     * @return Pack
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
     * @return Pack
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
