<?php


namespace NullObject;


interface IUser
{
    public function getId();
    public function getLogin();
    public function getEmail();

    public function setId(int $id);
    public function setLogin(string $login);
    public function setEmail(string $email);
}