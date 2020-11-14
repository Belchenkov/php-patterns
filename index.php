<?php

use AbstractFactory\DatabaseFactory;
use AbstractFactory\MySqlDatabaseFactory;
use AbstractFactory\SqliteDatabaseFactory;

require "functions.php";

spl_autoload_register('project_autoload');

function queryExecute(DatabaseFactory $factory) {
    $obj = $factory->query();
    $obj->execute("INSERT INTO `messages`(`text`) VALUES ('test')");
}

queryExecute(new MySqlDatabaseFactory('127.0.0.1', 'root', '', 'patterns'));
queryExecute(new SqliteDatabaseFactory('test.db'));