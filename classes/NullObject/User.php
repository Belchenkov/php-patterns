<?php


namespace NullObject;


class User implements IUser
{

    private int $id;
    private string $login;
    private string $email;

    public function __construct(int $id, string $login, string $email)
    {
        $this->setId($id);
        $this->setLogin($login);
        $this->setEmail($email);
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setId(int $id): User
    {
        $this->id = $id;
        return $this;
    }

    public function setLogin(string $login): User
    {
        if (strlen($login) < 2) {
            throw new \Exception("Error");
        }

        $this->login = $login;
        return $this;
    }

    public function setEmail(string $email): User
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \Exception("Error");
        }

        $this->email = $email;
        return $this;
    }


}