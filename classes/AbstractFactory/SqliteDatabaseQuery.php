<?php


namespace AbstractFactory;


class SqliteDatabaseQuery implements DatabaseQuery
{
    private DatabaseConnect $connector;

    public function __construct(DatabaseConnect $connector)
    {
        $this->connector = $connector;
    }

    public function execute(string $query)
    {
        $this->connector->connection()->query("CREATE TABLE `messages`(`id`, `text`);");
        $this->connector->connection()->query($query);
    }
}