<?php
/**
 * Created by PhpStorm.
 * User: pw
 * Date: 10.01.16
 * Time: 19:51
 */

namespace UserManager\Model;


class Adress
{

    private $streetAddress;
    private $city;
    private $state;
    private $postalCode;

    public function __construct($streetAddress, $city, $state, $postalCode )
    {
        $this->streetAddress = $streetAddress;
        $this->city = $city;
        $this->state = $state;
        $this->postalCode = $postalCode;
    }


    public function getState()
    {
        return $this->state;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getPostalCode()
    {
        return $this->postalCode;
    }

    public function getStreetAddress()
    {
        return $this->streetAddress;
    }


}