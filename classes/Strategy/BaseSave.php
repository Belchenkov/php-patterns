<?php


namespace Strategy;


abstract class BaseSave implements IFileSave
{
    protected string $file_path;

    public function __construct(string $file_path)
    {
        $this->file_path = $file_path;
    }

    public function save():void {}
}