<?php
use StaticFabric\StaticFactory;

require "functions.php";

spl_autoload_register('project_autoload');

$obj = StaticFactory::create('\StaticFabric\FactoryClass');
$obj->save();