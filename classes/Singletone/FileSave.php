<?php
namespace Singletone;

class FileSave
{
    private string $filePath;

    private static ?FileSave $_instance = null;

    private function __construct()
    {
        $this->filePath = md5(microtime()) . ".txt";
    }

    public static function getInstance() : FileSave
    {
        if (null === self::$_instance) {
            self::$_instance = new static();
        }

        return self::$_instance;
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