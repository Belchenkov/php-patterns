<?php


use Iterator\Blog;
use Iterator\Post;
use Strategy\IFileSave;

require "functions.php";

spl_autoload_register('project_autoload');

function saveStrategy(array $strategyCollection): Bool
{
    foreach ($strategyCollection as $item) {
        if ($item instanceof IFileSave) {
            $item->save();
        }
    }

    return true;
}

$blog = new Blog();

$blog->addPost(new Post('title1', 'text1', 'author1'));
$blog->addPost(new Post('title2', 'text2', 'author2'));
$blog->addPost(new Post('title3', 'text3', 'author3'));
$blog->addPost(new Post('title4', 'text4', 'author4'));
$blog->addPost(new Post('title4', 'text5', 'author5'));

foreach ($blog as $post) {
    var_dump($post);
}