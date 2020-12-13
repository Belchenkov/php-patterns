<?php


namespace NullObject;


class NullUser implements IUser
{
    public function __construct()
    {
    }

    public function getId(): string
    {
        return "ID is empty";
    }

    public function getLogin(): string
    {
        return "Login is empty";
    }

    public function getEmail(): string
    {
        return "Email is empty";
    }

    public function setId(int $id): IUser
    {
    }

    public function setLogin(string $login): IUser
    {
    }

    public function setEmail(string $email): IUser
    {
    }


}