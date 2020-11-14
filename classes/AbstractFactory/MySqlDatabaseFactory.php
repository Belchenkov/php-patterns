<?php


namespace AbstractFactory;


class MySqlDatabaseFactory implements DatabaseFactory
{
    private string $host;
    private string $user;
    private string $pass;
    private string $db;

    /**
     * MySqlDatabaseFactory constructor.
     * @param string $host
     * @param string $user
     * @param string $pass
     * @param string $db
     */
    public function __construct(
        string $host,
        string $user,
        string $pass,
        string $db
    )
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->db = $db;
    }

    public function connect(): DatabaseConnect
    {
        return new MySqlDatabaseConnect(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );
    }

    public function query(): DatabaseQuery
    {
        return new MySqlDatabaseQuery($this->connect());
    }
}