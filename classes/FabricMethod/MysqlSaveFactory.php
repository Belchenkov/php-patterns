<?php


namespace FabricMethod;


class MysqlSaveFactory implements ISaveFactory
{

    private string $host;
    private string $user;
    private string $pass;
    private string $db;

    public function __construct(string $host, string $user, string $pass, string $db)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->db = $db;
    }

    public function createSaver(): ISave
    {
        return new MysqlSave($this->host, $this->user, $this->pass, $this->db);
    }
}