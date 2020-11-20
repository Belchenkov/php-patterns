<?php


use Observer\Blog;
use Observer\SendMailPlugin;
use Observer\ChangeTextPlugin;
use Observer\ChangeTitlePlugin;

require "functions.php";

spl_autoload_register('project_autoload');

$blog = new Blog();
$blog->title = "Observer";
$blog->text = "Testing Observer Pattern";

$blog->attach(new SendMailPlugin(), "");
$blog->attach(new ChangeTextPlugin(), "blog:create");
$blog->attach(new ChangeTitlePlugin(), "blog:create");

$blog->create();

echo $blog->title .= "<br>";
echo $blog->text .= "<br>";