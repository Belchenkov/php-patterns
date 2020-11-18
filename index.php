<?php


use Prototype\User;
use Prototype\Post;

require "functions.php";

spl_autoload_register('project_autoload');

$user = new User('User');
$post = new Post($user, 'First Post', 'Text Post');
$post->addComment('First Comment');

$post2 = clone $post;

var_dump($post2);