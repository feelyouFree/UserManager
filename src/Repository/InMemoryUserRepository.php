<?php
/**
 * Created by PhpStorm.
 * User: pw
 * Date: 10.01.16
 * Time: 19:59
 */

namespace UserManager\Repository;

use UserManager\Model\Adress;
use UserManager\Model\User;
use UserManager\Model\IUserRepository;
use UserManager\Model\Phonenumber;

class InMemoryUserRepository implements IUserRepository
{
    private $data;
    private $file = '/UserManager/test.json';

    public function __construct()
    {
        if(!file_exists($this->file)) {
            throw new \Exception('No File found!');
        }
        $this->data = json_decode(file_get_contents($this->file), true);
    }

    public function getData()
    {
        return $this->data;
    }

    public function show()
    {
         if (is_array($this->data) ) {
             $phonenumbers = new Phonenumber();
             foreach ($this->data['phoneNumber'] AS $key => $value ) {
                 $phonenumbers->add( $this->data['phoneNumber'][$key]['number'],
                     $this->data['phoneNumber'][$key]['type']);
             }

             $address = new Adress($this->data['address']['streetAddress'],
                                  $this->data['address']['city'],
                                  $this->data['address']['state'],
                                  $this->data['address']['postalCode']);

             $user = new User($this->data['firstName'],
                 $this->data['lastName'],
                 $this->data['age'],
                 $address,
                 $phonenumbers );

             return $user;


         }

    }





}