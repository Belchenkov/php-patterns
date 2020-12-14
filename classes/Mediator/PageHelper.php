<?php


namespace Mediator;


class PageHelper implements IHelper
{

    public $data;
    public $page;
    public $router;

    public function __construct($data, $router, $page)
    {
        $this->data = $data;
        $this->router = $router;
        $this->page = $page;

        $this->data->setPageHelper($this);
        $this->router->setPageHelper($this);
        $this->page->setPageHelper($this);
    }
    
    public function sendResponse($content): void
    {
        $this->router->output($content);
    }

    public function getRequest(): void
    {
        $this->page->render();
    }

    public function getData()
    {
        return $this->data->getData();
    }
}