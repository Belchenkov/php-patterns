<?php


namespace Bridge;


class SaveSave extends Save
{
    protected string $data;
    protected string $crypt;

    public function __construct(IDriver $driver, string $data, string $crypt)
    {
        parent::__construct($driver);

        $this->data = $data;
        $this->crypt = $crypt;
    }

    public function save(): void
    {
        $data = $this->data;

        if ($this->crypt === 'md5') {
            $data = md5($data);
        }

        $query = "INSERT INTO `messages`(`text`) VALUES ('" . $data . "')";

        $this->driver->execute($query);
    }
}