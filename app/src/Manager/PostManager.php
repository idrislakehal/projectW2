<?php
namespace App\Manager;

use App\Entity\Post;

class PostManager extends BaseManager
{
        /**
         * @return Post[]
         */
        public function getAllPosts(): array
        {
            $sql="SELECT * FROM posts ASC";

           $stmt = $this->db->prepare($sql);
           $stmt->execute()->fetchAll();

           return $stmt;
        }

        /**
         * @param int $id
         * @return Post
         */
        public function getPostById(int $id): Post
        {
            $sql = "SELECT * FROM posts WHERE id = :id";
            $sql->bindValue(':id', $id);

            $stmt = $this->db->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll();
        }

        /**
         * @param Post $post
         * @return Post|bool
         */
        public function createPost(Post $post): Post|bool
        {
            $sql = "INSERT INTO posts (user_id,title,content,created_at,updated_at) 
                    VALUES (:user_id,:title,:content,:created_at,:updated_at)";
            $stmt = $this->db->prepare($sql);

            $stmt->bindValue(':user_id',$post['user_id']);
            $stmt->bindValue(':title',$post['title']);
            $stmt->bindValue(':content',$post['content']);
            $stmt->bindValue(':created_at',$post['created_at']);
            $stmt->bindValue(':updated_at',$post['updated_at']);

            if($stmt->execute())
            {
                return true;
            }
            else {
                return false;
            }
        }

        /**
         * @param Post $post
         * @return Post|bool
         */
        public function updatePost(Post $post): Post|bool
        {
            $id = $this->getPostById($post->getId());

            $sql = "UPDATE post SET title=:title,content =:content, updated_at = NOW() WHERE id=:id";
            $stmt= $sql->prepare($sql);

            $stmt->bindValue(':id',$post['id']);
            $stmt->bindValue(':title',$post['title']);
            $stmt->bindValue(':content',$post['content']);
            $stmt->bindValue(':updated_at',$post['updated_at']);

            if($stmt->execute())
            {
                return true;
            }
            else {
                return false;
            }
        }

        /**
         * @param int $id
         * @param Post $post
         * @return bool
         */
        public function deletePostById(int $id,Post $post): bool
        {
            $id = $this->getPostById($post->getId());

            $sql="DELETE FROM posts WHERE id=:id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':id',$post['id']);

            if($stmt->execute())
            {
                return true;
            }
            else {
                return false;
            }
        }
}