<?php


namespace Bridge;


abstract class Save
{
    protected IDriver $driver;

    public function __construct(IDriver $driver)
    {
        $this->driver = $driver;
    }

    public function changeDriver(IDriver $driver): void
    {
        $this->driver = $driver;
    }

    abstract public function save();
}