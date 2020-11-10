<?php

use FabricMethod\FileSaveFactory;
use FabricMethod\MysqlSaveFactory;

require "functions.php";

spl_autoload_register('project_autoload');

/*$factory = new FileSaveFactory('testFile.txt');
$factory->createSaver()->save('hello world');*/

$factory = new MysqlSaveFactory('127.0.0.1', 'root', '', 'db');
$factory->createSaver()->save('hello world');