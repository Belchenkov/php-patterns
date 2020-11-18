<?php


namespace Prototype;


class User
{
    private string $first_name;
    private array $posts = [];

    /**
     * User constructor.
     * @param string $first_name
     */
    public function __construct(string $first_name)
    {
        $this->first_name = $first_name;
    }

    public function addPost(Post $post): void
    {
        $this->posts[] = $post;
    }
}