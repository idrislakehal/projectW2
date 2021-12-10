<?php

namespace App\Entity;

class User
{
    private int $int;
    private string $first_name;
    private string $last_name;
    private string $email;
    private string $password;
    private bool $is_admin;

    const ADMIN_USERS = "ADMIN_USERS";
    const SIMPLE_USERS = "SIMPLE_USERS";

    const USERS_ROLES = [
        self::SIMPLE_USERS => "Simple utilisateurs",
        self::ADMIN_USERS => "Admin utilisateurs",
    ];

    //Getters and Setters

    /**
     * @return int
     */
    public function getInt(): int
    {
        return $this->int;
    }

    /**
     * @param int $int
     */
    public function setInt(int $int): void
    {
        $this->int = $int;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->first_name;
    }

    /**
     * @param string $first_name
     */
    public function setFirstName(string $first_name): void
    {
        $this->first_name = $first_name;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->last_name;
    }

    /**
     * @param string $last_name
     */
    public function setLastName(string $last_name): void
    {
        $this->last_name = $last_name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return bool
     */
    public function isIsAdmin(): bool
    {
        return $this->is_admin;
    }

    /**
     * @param bool $is_admin
     */
    public function setIsAdmin(bool $is_admin): void
    {
        $this->is_admin = $is_admin;
    }

    ##TODO creations des mutators

    public function getFullNameAttribute()
    {
        if (!$this->first_name && !$this->last_name){
            return $this->email;
        }
        return $this->first_name . " " . $this->last_name;
    }

}