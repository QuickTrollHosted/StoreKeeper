<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Storekeeper/InventoryBundle/DataFixtures/ORM/LoadUserData.php

namespace Storekeeper\InventoryBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Storekeeper\InventoryBundle\Entity\User;

class LoadUserData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $userAdmin = new User();
        $userAdmin->setLogin('admin');
        $userAdmin->setPassword('test');
        $userAdmin->setAuth('local');
        $userAdmin->setFirstname('administrateur');
        $userAdmin->setLastname('');
        $userAdmin->setMail('admin@localhost');

        $manager->persist($userAdmin);
        $manager->flush();
    }
}