<?php

namespace Storekeeper\InventoryBundle\Entity\Inventory;

use Doctrine\ORM\Mapping as ORM;

/**
 * Checkin
 */
class Checkin
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $userId;


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
     * Set userId
     *
     * @param integer $userId
     * @return Checkin
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }
}
