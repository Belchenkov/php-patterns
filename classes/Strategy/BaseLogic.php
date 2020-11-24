<?php


namespace Strategy;


class BaseLogic
{
    private IFileSave $saver;

    public function __construct(IFileSave $saver)
    {
        $this->saver = $saver;
    }

    public function execute(): Bool
    {
        $this->saver->save();

        return true;
    }
}