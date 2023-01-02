<?php
use PHPUnit\Framework\TestCase;
class FunctionTest extends TestCase
{
    public function testAddReturnsTheCorrectSum()
    {
        //bringing the function into the test
        require_once 'functions.php';

        $this->assertEquals(4, add(2,2));
        $this->assertEquals(8, add(3,5));
    }

    public function testAddDoesNotReturnTheIncorrectSum()
    {
        $this->assertNotEquals(5, add(2,2));
    }
}