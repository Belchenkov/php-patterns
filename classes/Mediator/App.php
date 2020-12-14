<?php


namespace Mediator;


abstract class App
{
    protected IHelper $pageHelper;

    public function setPageHelper(IHelper $pageHelper): void
    {
        $this->pageHelper = $pageHelper;
    }
}