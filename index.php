<?php


use Builder\ISQLQueryBuilder;
use Builder\MySQLQueryBuilder;

require "functions.php";

spl_autoload_register('project_autoload');

function queryExecute(ISQLQueryBuilder $builder) {
    $query = $builder
        ->select(['id', 'text'])
        ->from('table')
        ->where('id', 1)
        ->getQuery();

    echo $query;
}

queryExecute(new MySQLQueryBuilder());
