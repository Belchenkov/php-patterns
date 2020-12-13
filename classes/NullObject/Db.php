<?php


namespace NullObject;



class Db implements IDatabaseAdapter {

    private \mysqli | null $mysqli;
    private string $host;
    private string $user;
    private string $password;
    private string $db;

    public function __construct(string $host, string $user, string $password, string $db)
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->db = $db;
        $this->mysqli = null;

        $this->connect();
    }

    public function connect(): void
    {
        $this->mysqli = new \mysqli($this->host, $this->user, $this->password,  $this->db);

        if ($this->mysqli->connect_error) {
            die('Ошибка подключения (' . $this->mysqli->connect_errno . ') '
                . $this->mysqli->connect_error);
        }

    }

    public function getDb(): \mysqli {
        return $this->mysqli;
    }

    public function query($query) {
        $result = $this->mysqli->query($query);

        if ($result) {
            return $result->fetch_assoc();
        }
    }
}
