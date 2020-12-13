<?php


namespace NullObject;


class UserRepository
{
    private IDatabaseAdapter $db;

    public function __construct(IDatabaseAdapter $db)
    {
        $this->db = $db;
    }

    public function fetchById(int $id): IUser
    {
        $sql = 'SELECT * FROM `users` WHERE `id`=' . $id;

        $row = $this->db->query($sql);

        if (!count($row)) {
            return new NullUser();
        }

        return $this->createUser($row);
    }

    private function createUser(array $row): IUser
    {
        return new User(
            $row['id'],
            $row['login'],
            $row['email']
        );
    }
}