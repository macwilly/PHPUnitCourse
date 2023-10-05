<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    protected Queue $_queue;

    /**
     * Run before each test.
     * @return void
     */
    protected function setUp(): void
    {
        $this->_queue = new Queue;
    }

    /**
     * This is run after each test.  Unsetting the property object is not really
     * needed as it is not very memory intensive (but it is good practice.)
     * tearDown will be good when writing to a file or when a network socket is made.
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->_queue);
    }

    /**
     * @return void
     */
    public function testNewQueueIsEmpty(): void
    {
        $this->assertEquals(0, $this->_queue->getCount());
    }


    public function testAnItemIsAddedToTheQueue(): void
    {
        $this->_queue->push('green');
        $this->assertEquals(1 , $this->_queue->getCount());
    }

    public function testAnItemIsRemovedFromTheQueue(): void
    {
        $this->_queue->push('green');
        $item = $this->_queue->pop();

        $this->assertEquals(0, $this->_queue->getCount());
        $this->assertEquals('green', $item);
    }

    public function testAnItemIsRemovedFromTheFrontOfTheQueue()
    {
        $this->_queue->push('first');
        $this->_queue->push('second');

        $this->assertEquals('first', $this->_queue->pop());
    }


}
