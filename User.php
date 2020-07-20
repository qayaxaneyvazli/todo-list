<?php
require 'system/init.php';

class User extends DB
{

    public static function create($name, $lastname, $password, $email)
    {
        try {
            $add = parent::connect()->prepare("INSERT into  users Set name=?, lastname=?,email=?,password=?");
            $add->execute([$name, $lastname, $email, $password]);

            return $add->rowCount() > 0;
        } catch (PDOException $e) {
            die("Xeta: " . $e->getmessage());
        }
    }



    public static function read($password, $email)
    {
        try {

            $read = parent::connect()->prepare("SELECT * FROM users WHERE password=? AND email=?");
            $read->execute([$password, $email]);


            if ($read->rowCount() > 0) {
                return $read->fetch();
            }

            return false;
        } catch (PDOException $e) {

            echo "Xeta" . $e->getmessage();
        }
    }

    public function delete($id)
    {
        try {

            $del = self::connect()->prepare("Delete from users where id=?");
            $del->execute([$id]);


            return $del->rowCount() > 0;
        } catch (PDOException $th) {
            die('Delete user error:' . $th->getMessage());
        }
    }

    public function update($name, $lastname, $password, $email, $id)
    {
        try {

            $update = SELF::connect()->prepare("Update users Set name=?, lastname=?, password=?, email=?, id=?");
            $update->execute([$name, $lastname, $password, $email, $id]);
        } catch (PDOException $e) {
            echo "Update error:" . $e->getmessage();
        }
    }

    public function getAllUsers()
    {

        $get = $this->Connect()->query("SELECT * FROM users");


        return $get->fetchAll();
    }
}

 