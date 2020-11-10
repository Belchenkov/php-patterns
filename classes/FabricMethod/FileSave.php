<?php


namespace FabricMethod;


class FileSave implements ISave
{
    private string $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function save(string $message)
    {
        file_put_contents($this->filePath, $message);
    }

}