<?php


namespace Bridge;


class MysqlDriver implements IDriver
{
    private \mysqli $mysqli;

    public function __construct($host, $user, $pass, $db)
    {
        $this->mysqli = new \mysqli($host, $user, $pass,  $db);

        if ($this->mysqli->connect_error) {
            die('Ошибка подключения (' . $this->mysqli->connect_errno . ') '
                . $this->mysqli->connect_error);
        }
    }

    public function execute(string $query): void
    {
        $this->mysqli->query($query);
    }
}