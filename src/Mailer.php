<?php

class Mailer
{

    /**
     * Send a message
     *
     * @param string $email The email address
     * @param string $message The message
     * @return boolean True id sent, false otherwise
     */
    public function sendMessage(string $email, string $message): bool
    {
        sleep(3);
        echo "send '$message' to '$email'";
        return true;
    }
}