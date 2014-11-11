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
        $userAdmin->setFirstname('administrateur');
        $userAdmin->setLastname('');
        $userAdmin->setMail('admin@localhost');
        $manager->persist($userAdmin);
        
        //Creating default category
        $categroy1 = new Category();
        $categroy1->setName('Default');
        $categroy1->setCategoryId(null);
        $categroy1->setDescription('Default category');
        $categroy1->setHasPicture(false);     
        $manager->persist($categroy1);
        
        //Creation contact default
        $contact1 = new Contact();
        $contact1->setAddress1('');
        $contact1->setAddress2('');
        $contact1->setCity('');
        $contact1->setCompany('Default company');
        $contact1->setCountry('France');
        $contact1->setFax('');
        $contact1->setFirstname('');
        $contact1->setLastname('Administrator');
        $contact1->setMail('admin@localhost');
        $contact1->setMobile('');
        $contact1->setPhone('');
        $contact1->setPostcode('');
        $contact1->setService('');
        $contact1->setStandard('');
        $contact1->setState('');
        $contact1->setTitle('');
        $manager->persist($contact1);
        
        
        $manager->flush();
    }
}