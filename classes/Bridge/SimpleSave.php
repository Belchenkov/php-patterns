<?php


namespace Bridge;


class SimpleSave extends Save
{
    protected string $data;

    public function __construct(IDriver $driver, string $data)
    {
        parent::__construct($driver);

        $this->data = $data;
    }

    public function save(): void
    {
        $query = "INSERT INTO `messages`(`text`) VALUES ('" . $this->data . "')";

        $this->driver->execute($query);
    }
}