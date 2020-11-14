<?php


namespace AbstractFactory;


class MySqlDatabaseConnect implements DatabaseConnect
{

    private \mysqli $mysqli;

    public function __construct($host, $user, $password, $db)
    {
        $this->mysqli = new \mysqli($host, $user, $password, $db);

        if ($this->mysqli->connect_error) {
            die('Ошибка подключения (' . $this->mysqli->connect_errno . ') '
                . $this->mysqli->connect_error);
        }
    }

    /**
     * @return \mysqli
     */
    public function connection(): \mysqli
    {
        return $this->mysqli;
    }
}