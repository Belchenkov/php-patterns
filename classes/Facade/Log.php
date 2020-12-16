<?php


namespace Facade;

/**
 * Class Log
 * @package Facade
 */
class Log
{
    private string $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function addLog($message): void
    {
        file_put_contents($this->filePath, $message . PHP_EOL, FILE_APPEND);
    }
}