<?php
/**
 * Created by PhpStorm.
 * User: pw
 * Date: 10.01.16
 * Time: 19:39
 */

namespace UserManager\Model;

class User {

    private $firstname;
    private $lastname;
    private $age;
    private $adress;
    private $phonenumber;


    public function __construct( $firstname,  $lastname, $age, Adress $adress, Phonenumber $phonenumber )
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->adress = $adress;
        $this->phonenumber = $phonenumber;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function getAdress()
    {
        return $this->adress;
    }

    public function getAge()
    {
        return $this->age;
    }


    public function getLastname()
    {
        return $this->lastname;
    }

    public function getPhonenumber()
    {
        return $this->phonenumber;
    }


}