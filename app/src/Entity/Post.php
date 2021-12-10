<?php

namespace App\Entity;

class Post
{
    private int $id;
    private int $id_users;
    private int $id_comments;
    private string $title;
    private string $content;
    private \DateTime $created_at;
    private \DateTime $updated_at;

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
    public function getIdComments(): int
    {
        return $this->id_comments;
    }

    /**
     * @param int $id_comments
     */
    public function setIdComments(int $id_comments): void
    {
        $this->id_comments = $id_comments;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return new DateTime($this->created_at);
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