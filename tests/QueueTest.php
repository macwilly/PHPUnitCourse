<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    /**
     * @return Queue
     */
    public function testNewQueueIsEmpty():Queue
    {
        $queue = new Queue;
        $this->assertEquals(0, $queue->getCount());

        return $queue;
    }

    /**
     * @depends testNewQueueIsEmpty
     * @param Queue $queue
     * @return Queue
     */
    public function testAnItemIsAddedToTheQueue(Queue $queue):Queue
    {
        $queue->push('green');
        $this->assertEquals(1 , $queue->getCount());
        return $queue;
    }

    /**
     * @depends testAnItemIsAddedToTheQueue
     * @param Queue $queue
     * @return void
     */
    public function testAnItemIsRemovedFromTheQueue(Queue $queue): void
    {
        $item = $queue->pop();

        $this->assertEquals(0, $queue->getCount());
        $this->assertEquals('green', $item);
    }
}
