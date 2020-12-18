<?php


use Decorator\BasicPage;
use Decorator\HomePage;

require "functions.php";

spl_autoload_register('project_autoload');

$page = new BasicPage('Title First');
/*
echo $page->getTitle()  . "</br>";
echo $page->render();*/

$home_page = new HomePage($page);
echo $home_page->getTitle() . "</br>";
echo $home_page->render() . "</br>";