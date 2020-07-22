<?php


class Tasks extends DB
{

    public static function createTask($taskname, $createdby, $taskdate, $taskstatus)
    {

        try {
            $add = parent::connect()->prepare("INSERT into Tasks Set task_content=?, created_by=?, created_time=?, deadline_time=?, end_time=?, task_status=?");
            $add->execute([$taskname, $createdby,  NULL, $taskdate, NULL, $taskstatus]);

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

    public static function deleteTask($id)
    {
        try {

            $del = self::connect()->prepare("Delete from Tasks where task_id=?");
            $del->execute([$id]);


            return $del->rowCount() > 0;
        } catch (PDOException $th) {
            die('Delete user error:' . $th->getMessage());
        }
    }

    public static function updateStatus($date = null, $taskstatus = null, $id = null, $taskname = null, $taskdate = null, $ids = null)
    {

        try {


            $update = SELF::connect()->prepare("Update Tasks Set end_time=?, task_status=? where task_id=?");
            $update->execute([$date, $taskstatus, $id]);
            // burda da etmemisem ama isleyir axi
            // a kisi ozunnen amerika kesf eleme :d
            // hecne return etmiyende null qayidir funksiyadan oda false kimi olur if icine girmez
        } catch (PDOException $e) {
            echo "Update error:" . $e->getmessage();
        }
    }


    public static function updateTask($taskname = null, $taskdate = null, $ids = null)
    {

        try {

            // bu SELF teze temadi?

            $update = parent::connect()->prepare("Update Tasks Set task_content=?, deadline_time=? where task_id=?");
            $update->execute([$taskname, $taskdate, $ids]);
            return $update->rowCount() > 0;
            // sen mene burdan returnm etdiyin deyeri goster?


        } catch (PDOException $e) {

            die("Update error:" . $e->getmessage());
        }
    }
}
