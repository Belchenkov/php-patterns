<?php


namespace Facade;

/**
 * Class Mail
 * @package Facade
 */
class Mail
{
    private string $to;
    private string $subject;
    private string $message;
    private object | null $headers;

    public function __construct($to, $subject, $message, $headers)
    {
        $this->to = $to;
        $this->subject = $subject;
        $this->message = $message;
        $this->headers = $headers;
    }

    public function sendMessage($message): void
    {
        mail($this->to, $this->subject, $this->message, $this->headers);
    }
}