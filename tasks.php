<?php

require 'config.php';

class Tasks extends DB{

    
    public static function createTask($task, $createdby, $deadlinetime,$taskstatus)
    {
        
        try {
            $add = parent::connect()->prepare("INSERT into Tasks Set taskcontent=?, createdby=?, created_time=?, deadlinetime=?, end_time=?");
            $add->execute([$task, $createdby,'CURRENT_TIMESTAMP', $deadlinetime, 'CURRENT_TIMESTAMP']);

            return $add->rowCount() > 0;
        } catch (PDOException $e) {
            die("Xeta: " . $e->getmessage());
        }
    }
    public static function readTask()
    {
        try {

            $read = parent::connect()->query("SELECT * FROM tasks");
            $read->execute();


           return $read->fetchAll();

        } catch (PDOException $e) {

            echo "Xeta" . $e->getmessage();
        }
    }

    public function deleteTask($id)
    {
        try {

            $del = self::connect()->prepare("Delete from Tasks where task_id=?");
            $del->execute([$id]);


            return $del->rowCount() > 0;
        } catch (PDOException $th) {
            die('Delete user error:' . $th->getMessage());
        }
    }

    public function update($task, $updatedby, $deadlinetime, $taskstatus,$id)
    {
        try {

            $update = SELF::connect()->prepare("Update Tasks Set  taskcontent=?, createdby=?, deadlinetime=? where id=?");
            $update->execute([$task, $updatedby,'CURRENT_TIMESTAMP', $deadlinetime, 'CURRENT_TIMESTAMP', $taskstatus, $id]);
        } catch (PDOException $e) {
            echo "Update error:" . $e->getmessage();
        }
    }
}

    



?>