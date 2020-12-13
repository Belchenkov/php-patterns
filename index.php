<?php


use NullObject\Db;
use NullObject\UserRepository;

require "functions.php";

spl_autoload_register('project_autoload');

$db = new Db('localhost', 'root', '', 'test');

$userRepository = new UserRepository($db);
$user = $userRepository->fetchById(1);

print_r($user);