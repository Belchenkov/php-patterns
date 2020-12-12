<?php


use TemplateMethod\Page;
use TemplateMethod\HomePage;

require "functions.php";

spl_autoload_register('project_autoload');

$home = new HomePage();
$home->output();