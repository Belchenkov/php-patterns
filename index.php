<?php


use Command\ChatInterface;
use Command\User;
use Command\GoOnline;

require "functions.php";

spl_autoload_register('project_autoload');

$chat = new ChatInterface();
$user = new User();

$chat->setCommand(new GoOnline($user));
$chat->run();
$chat->undo();