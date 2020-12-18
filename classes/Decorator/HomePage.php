<?php


namespace Decorator;


class HomePage extends PageDecorator
{

    public function getTitle(): string
    {
        return $this->page->getTitle() . " | Home Page";
    }

    public function render(): string
    {
        return $this->page->render() . " | Render Home Page";
    }
}