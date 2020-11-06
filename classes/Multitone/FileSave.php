<?php
namespace Multitone;

class FileSave
{
    private string $filePath;

    private static array $_instance = [];

    private function __construct(string $str)
    {
        $this->filePath = $str . '-' . md5(microtime()) . ".txt";
    }

    public static function getInstance(string $str) : FileSave
    {
        if (!isset(self::$_instance[$str])) {
            self::$_instance[$str] = new static($str);
        }

        return self::$_instance[$str];
    }

    public function save($dir): void
    {
        $content = " text";
        $filePath = $dir . "/" . $this->filePath;

        if (file_exists($filePath)) {
            $content = file_get_contents($filePath) . $content;
        }

        file_put_contents($filePath, $content);
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }


    public function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
}