<?php

namespace Storekeeper\InventoryBundle\Entity\Inventory;

use Doctrine\ORM\Mapping as ORM;

/**
 * contact
 */
class Contact
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $company;

    /**
     * @var string
     */
    private $service;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $mobile;

    /**
     * @var string
     */
    private $standard;

    /**
     * @var string
     */
    private $fax;

    /**
     * @var string
     */
    private $mail;

    /**
     * @var string
     */
    private $address1;

    /**
     * @var string
     */
    private $address2;

    /**
     * @var string
     */
    private $postcode;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $state;


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
     * Set company
     *
     * @param string $company
     * @return contact
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string 
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set service
     *
     * @param string $service
     * @return contact
     */
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return string 
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return contact
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return contact
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return contact
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return contact
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return contact
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set standard
     *
     * @param string $standard
     * @return contact
     */
    public function setStandard($standard)
    {
        $this->standard = $standard;

        return $this;
    }

    /**
     * Get standard
     *
     * @return string 
     */
    public function getStandard()
    {
        return $this->standard;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return contact
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return contact
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set address1
     *
     * @param string $address1
     * @return contact
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * Get address1
     *
     * @return string 
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set address2
     *
     * @param string $address2
     * @return contact
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * Get address2
     *
     * @return string 
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set postcode
     *
     * @param string $postcode
     * @return contact
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return string 
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return contact
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return contact
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }
    /**
     * @var string
     */
    private $country;


    /**
     * Set country
     *
     * @param string $country
     * @return contact
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }
}
