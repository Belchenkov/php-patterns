<?php


namespace Facade;

/**
 * Class Document
 * @package Facade
 */
class Document
{
    private Db $db;
    private Log $log;
    private Mail $mail;

    public function __construct(Db $db, Log $log, Mail $mail)
    {
        $this->db = $db;
        $this->log = $log;
        $this->mail = $mail;
    }

    public function save(string $message): void
    {
        $this->db->connect();
        $this->db->saveDocument($message);
        $this->log->addLog($message);
        $this->mail->sendMessage($message);
    }
}