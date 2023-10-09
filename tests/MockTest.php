<?php
use PHPUnit\Framework\TestCase;

class MockTest extends TestCase
{
    public function testMock()
    {
        $mailer = new Mailer;

        $result = $mailer->sendMessage('$david@example.com', 'Hello');

        var_dump($result);
    }
}