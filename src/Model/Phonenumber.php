<?php
/**
 * Created by PhpStorm.
 * User: pw
 * Date: 10.01.16
 * Time: 19:54
 */

namespace UserManager\Model;


class Phonenumber
{
    private $phonenumbers = [];


    public function add($number, $type)
    {
        return $this->phonenumbers[] = [ 'number' => $number, 'type' => $type ];
    }

    public function getPhoneNumbers()
    {
        return $this->phonenumbers;
    }

}