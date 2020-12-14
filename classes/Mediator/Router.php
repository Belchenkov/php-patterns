<?php


namespace Mediator;


class Router extends App
{
    public function request(): void
    {
        $this->pageHelper->getRequest();
    }

    public function output(string $content): void
    {
        echo $content;
    }
}