<?php


namespace AbstractFactory;


class SqliteDatabaseConnect implements DatabaseConnect
{
    private \SQLite3 $sqlite;

    public function __construct($fileName)
    {
        $this->sqlite = new \SQLite3($fileName);
    }

    public function connection(): \SQLite3
    {
        return $this->sqlite;
    }
}