<?php


namespace Iterator;


class Blog implements \Iterator
{
    private array $posts = [];
    private int $position = 0;

    public function addPost(Post $post): void
    {
        $this->posts[] = $post;
    }

    public function getPosts(): array
    {
        return $this->posts;
    }

    public function current(): Post
    {
        echo __METHOD__ . '<br />';
        return $this->posts[$this->position];
    }

    public function rewind(): void
    {
        echo __METHOD__ . '<br />';
        $this->position = 0;
    }

    public function key(): int
    {
        echo __METHOD__ . '<br />';
        return $this->position;
    }

    public function next(): void
    {
        echo __METHOD__ . '<br />';
        ++$this->position;
    }

    public function valid(): bool
    {
        echo __METHOD__ . '<br />';
        return isset($this->posts[$this->position]);
    }
}