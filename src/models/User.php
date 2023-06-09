<?php

class User
{
    private $name;
    private $surname;
    private $mobile;
    private $role;
    private $email;
    private $password;

    public function __construct(
        string $name,
        string $surname,
        string $mobile,
        string $role,
        string $email,
        string $password
    ) {
        $this->name = $name;
        $this->surname = $surname;
        $this->mobile = $mobile;
        $this->role = $role;
        $this->email = $email;
        $this->password = $password;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    public function getMobile(): string
    {
        return $this->mobile;
    }

    public function setMobile($mobile): void
    {
        $this->mobile = $mobile;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole($role): void
    {
        $this->role = $role;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
    public function setPassword($password): void
    {
        $this->password = $password;
    }
}