<?php


use Mediator\PageHelper;
use Mediator\Router;
use Mediator\Page;
use Mediator\Data;

require "functions.php";

spl_autoload_register('project_autoload');

$router = new Router();
new PageHelper(new Data(), $router, new Page());

$router->request();