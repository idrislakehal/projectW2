<?php
namespace App\Manager;

use App\Entity\User;

class LoginManager extends BaseManager
{
        /**
         * @param User $user
         * @return bool
         */
        public function registerUser(User $user): bool
        {
            $sql="INSERT INTO users (id, first_name, last_name, email, password ,is_admin)
                VALUES (:id,:first_name,:last_name,:email,:password,:is_admin)";
            $stmt = $this->db->prepare($sql);

            $stmt->bindValue(':id',$user['id']);
            $stmt->bindValue(':first_name',$user['first_name']);
            $stmt->bindValue(':last_name',$user['last_name']);
            $stmt->bindValue(':email',$user['email']);
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
         * @param string $email
         * @param string $password
         * @param User $user
         * @return bool
         */
    public function isValidLogin(string $email, string $password, User $user): bool
    {
        $sql = "SELECT * FROM users WHERE email=:email";

        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':email',$user['email']);
        $stmt->execute();

        if($stmt->rowCount() === 1)
        {
            $user = $stmt->fetch();

            if($user['email'] === $email)
            {
                return password_verify($password, $user['password']);
            }
            }else {
                return false;
            }

        return false;
    }

}