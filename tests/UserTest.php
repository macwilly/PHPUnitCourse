<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testReturnsFullName()
    {
        $user = new User;

        $user->first_name = "Teresa";
        $user->surname    = "Green";
        $this->assertEquals("Teresa Green", $user->getFullName());
    }

    public function testFullNameIsEmptyBYDefault()
    {
        $user = new User;

        $this->assertEquals("", $user->getFullName());
    }

    public function testUserHasFirstName()
    {
        $user = new User;

        $user->first_name = "Teresa";

        $this->assertEquals("Teresa", $user->first_name);
    }


}