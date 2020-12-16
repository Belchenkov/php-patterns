<?php


namespace Facade;


class Db
{
    private \mysqli | null $mysqli;
    private string $host;
    private string $user;
    private string $pass;
    private string $db;

    public function __construct(string $host, string $user, string $pass, string $db)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->db = $db;
        $this->mysqli = null;
    }

    public function connect(): void
    {
        $this->mysqli = new \mysqli($this->host, $this->user, $this->pass,  $this->db);

        if ($this->mysqli->connect_error) {
            die('Ошибка подключения (' . $this->mysqli->connect_errno . ') '
                . $this->mysqli->connect_error);
        }
    }

    public function saveDocument($message)
    {
        $this->mysqli->query("INSERT INTO `messages`(text) VALUES ('".$message."')");
    }
}