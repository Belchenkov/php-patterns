<?php


namespace NullObject;


interface IDatabaseAdapter
{
    public function connect();
    public function getDb();
    public function query($query);
}