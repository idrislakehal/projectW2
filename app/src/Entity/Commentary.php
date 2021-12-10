<?php

namespace App\Entity;

class Commentary
{
    private int $id;
    private int $id_users;
    private int $id_posts;
    private string $description;
    private DateTime $created_at;
    private DateTime $updated_at;

    //Getters and Setters

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getIdUsers(): int
    {
        return $this->id_users;
    }

    /**
     * @param int $id_users
     */
    public function setIdUsers(int $id_users): void
    {
        $this->id_users = $id_users;
    }

    /**
     * @return int
     */
    public function getIdPosts(): int
    {
        return $this->id_posts;
    }

    /**
     * @param int $id_posts
     */
    public function setIdPosts(int $id_posts): void
    {
        $this->id_posts = $id_posts;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->created_at;
    }

    /**
     * @param DateTime $created_at
     */
    public function setCreatedAt(DateTime $created_at): void
    {
        $this->created_at = $created_at;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt(): DateTime
    {
        return $this->updated_at;
    }

    /**
     * @param DateTime $updated_at
     */
    public function setUpdatedAt(DateTime $updated_at): void
    {
        $this->updated_at = $updated_at;
    }



}