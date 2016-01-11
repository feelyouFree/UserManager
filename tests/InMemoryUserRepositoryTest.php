<?php

/**
 * Created by PhpStorm.
 * User: pw
 * Date: 11.01.16
 * Time: 10:33
 */

class InMemoryUserRepositoryTest extends PHPUnit_Framework_TestCase
{

    /**
     * test
     */
    public function testDataArrayIsNotEmpty()
    {
        $userRepo = new \UserManager\Repository\InMemoryUserRepository();
        $this->assertNotEmpty( $userRepo->getData() );

    }

    public function testDataArrayContainsUserAttributes()
    {
        $userRepo = new \UserManager\Repository\InMemoryUserRepository();
        $this->assertArrayHasKey('firstName', $userRepo->getData());
        $this->assertArrayHasKey('lastName', $userRepo->getData());
        $this->assertArrayHasKey('age', $userRepo->getData());

    }
}
