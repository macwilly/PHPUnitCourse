<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    protected static Queue $_queue;

    /**
     * Run before each test.
     * @return void
     */
    protected function setUp(): void
    {
        static::$_queue->clear();
    }

    /**
     * This is run only one time before the first test method
     * can be good for making connections to DBs or other resource
     * intensive operations
     * @return void
     */
    public static function setUpBeforeClass(): void
    {
        static::$_queue = new Queue;
    }

    /**
     * This is run only one time after the last test method has been run.
     * Use to clean up the setUpBeforeClass
     * @return void
     */
    public static function tearDownAfterClass(): void
    {
        static::$_queue = null;
    }


    /**
     * This is run after each test.  Unsetting the property object is not really
     * needed as it is not very memory intensive (but it is good practice.)
     * tearDown will be good when writing to a file or when a network socket is made.
     * @return void
     */
    protected function tearDown(): void
    {

    }

    /**
     * @return void
     */
    public function testNewQueueIsEmpty(): void
    {
        $this->assertEquals(0, static::$_queue->getCount());
    }


    public function testAnItemIsAddedToTheQueue(): void
    {
        static::$_queue->push('green');
        $this->assertEquals(1 , static::$_queue->getCount());
    }

    public function testAnItemIsRemovedFromTheQueue(): void
    {
        static::$_queue->push('green');
        $item = static::$_queue->pop();

        $this->assertEquals(0, static::$_queue->getCount());
        $this->assertEquals('green', $item);
    }

    public function testAnItemIsRemovedFromTheFrontOfTheQueue()
    {
        static::$_queue->push('first');
        static::$_queue->push('second');

        $this->assertEquals('first', static::$_queue->pop());
    }


}
