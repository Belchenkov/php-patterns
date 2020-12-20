<?php


use Bridge\MysqlDriver;
use Bridge\SaveSave;
use Bridge\SimpleSave;
use Bridge\SqliteDriver;

require "functions.php";

spl_autoload_register('project_autoload');

$mysqlDriver = new MysqlDriver('localhost', 'root', '', 'patterns');
$sqliteDriver = new SqliteDriver('bridge.db');

$simpleSave = new SimpleSave($mysqlDriver, 'Test');
$simpleSave->save();

$simpleSave = new SimpleSave($sqliteDriver, 'Test');
$simpleSave->save();


$saveSave = new SaveSave($mysqlDriver, 'Test', 'md5');
$saveSave->save();

$saveSave = new SaveSave($sqliteDriver, 'Test', 'md5');
$saveSave->save();



