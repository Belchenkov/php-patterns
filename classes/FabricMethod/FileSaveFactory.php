<?php


namespace FabricMethod;


class FileSaveFactory implements ISaveFactory
{
    private string $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function createSaver(): ISave
    {
        return new FileSave($this->filePath);
    }
}