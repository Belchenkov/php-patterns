<?php


namespace AbstractFactory;


class MySqlDatabaseQuery implements DatabaseQuery
{

    private DatabaseConnect $connector;

    public function __construct(DatabaseConnect $connector)
    {
        $this->connector = $connector;
    }
    
    public function execute(string $query)
    {
        $this->connector->connection()->query($query);
    }
}