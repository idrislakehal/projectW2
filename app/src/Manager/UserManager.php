<?php
namespace App\Manager;

use App\Entity\User;

class UserManager extends BaseManager
{
        /**
         * @return User[]
         */
        public function getAllUsers(): array
        {
            $sql="SELECT * FROM users ASC";

            $stmt = $this->db->prepare($sql);
            $stmt->execute()->fetchAll();

            return $stmt;
        }

        /**
         * @param string $email
         * @return bool
         */
        public function findUserByEmail(string $email): bool
        {
            $sql = "SELECT * FROM users WHERE email=:email";

            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':email',$email);

            if($stmt->rowCount() === 1) {
                return true;
            }else {
                return false;
            }
        }

        /**
         * @param string $is_admin
         * @return bool
         */
        public function isAdminUser(string $is_admin,): bool
        {
            $sql = "SELECT * FROM users WHERE is_admin=:is_admin";
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':is_admin',$is_admin);

            if(!$this->is_admin || $this->is_admin === User::SIMPLE_USERS ) {
                return false;
            }

            if($this->is_admin === User::ADMIN_USERS)
            {
                return true;
            }

            return false;
        }

        /**
         * @param User $user
         * @return User|bool
         */
        public function updateUser(User $user): User|bool
        {
            $sql = "UPDATE users SET first_name=:first_name,last_name =:last_name,password=:password,is_admin=:is_admin 
                    WHERE id=:id";
            $stmt= $sql->prepare($sql);

            $stmt->bindValue(':id',$user['id']);
            $stmt->bindValue(':first_name',$user['first_name']);
            $stmt->bindValue(':last_name',$user['last_name']);
            $stmt->bindValue(':password',$user['password']);
            $stmt->bindValue(':is_admin',$user['is_admin']);

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
         * @param User $user
         * @return bool
         */
        public function deleteUser(int $id, User $user): bool
        {
            $sql="DELETE FROM posts WHERE id=:id";

            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':id',$user['id']);

            if($stmt->execute())
            {
                return true;
            }
            else {
                return false;
            }
        }

}