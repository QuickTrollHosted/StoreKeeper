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
use Storekeeper\InventoryBundle\Entity\Contact;
use Storekeeper\InventoryBundle\Entity\Warehouse;
use Storekeeper\InventoryBundle\Entity\Category;
use Storekeeper\InventoryBundle\Entity\Classification;
use Storekeeper\InventoryBundle\Entity\Part;

class LoadData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        // Creating default user administrateur
        $userAdmin = new User();
        $userAdmin->setLogin('admin');
        $userAdmin->setPassword('test');
        $userAdmin->setAuth('local');
        $userAdmin->setLastname('administrateur');
        $userAdmin->setMail('admin@localhost');
        $manager->persist($userAdmin);
        
        //Creating root category
        $categroyRoot = new Category();
        $categroyRoot->setName('ROOT');
        $categroyRoot->setDescription('This is the ROOT category');
        $categroyRoot->setHasPicture(false);     
        $manager->persist($categroyRoot);
        
        //Creation contact default
        $contactDefault = new Contact();
        $contactDefault->setCompany('Default company');
        $contactDefault->setCountry('France');
        $contactDefault->setLastname('Administrator');
        $contactDefault->setMail('admin@localhost');
        $manager->persist($contactDefault);
        
        $warehouseDefault = new Warehouse();
        $warehouseDefault->setContact($contactDefault);
        $warehouseDefault->setDescription('This is the default warehouse');
        $warehouseDefault->setName('Default warehouse');
        $manager->persist($warehouseDefault);
        
        $manager->flush();
    }
}