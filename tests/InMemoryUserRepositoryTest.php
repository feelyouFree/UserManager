<?php

/**
 * Created by PhpStorm.
 * User: pw
 * Date: 11.01.16
 * Time: 10:33
 */

class InMemoryUserRepositoryTest extends PHPUnit_Framework_TestCase
{
    private $userRepo;

    public function setUp()
    {
        $this->userRepo = new \UserManager\Repository\InMemoryUserRepository();
    }

    public function tearDown()
    {
       unset($this->userRepo);
    }

    /**
     * test
     */
    public function testDataArrayIsNotEmpty()
    {
        $this->assertNotEmpty( $this->userRepo->getData() );

    }

    /**
     * test
     */
    public function testDataArrayContainsUserAttributes()
    {
        $this->assertArrayHasKey('firstName', $this->userRepo->getData());
        $this->assertArrayHasKey('lastName', $this->userRepo->getData());
        $this->assertArrayHasKey('age', $this->userRepo->getData());

    }

    /**
     *
     * test
     *
     */

    public function testShowUserisInstanceofUser()
    {
        $this->assertInstanceOf('UserManager\Model\User', $this->userRepo->show());

    }



}
