<?php

include_once "Db_config.php";

class Student extends Db_config
{
    function getall()
    {
        $sql = "SELECT * FROM `students`;";
        $stGetall = mysqli_prepare($this->con, $sql);
        mysqli_stmt_execute($stGetall);
        $res = mysqli_stmt_get_result($stGetall);

        $resArray = array();

        while ($row = mysqli_fetch_assoc($res)) {
            $resArray[] = $row;
        }
        return $resArray;
    }

    function getById($id)
    {
        $sql = "SELECT * FROM students WHERE id =?;";
        $stGetById = mysqli_prepare($this->con, $sql);
        mysqli_stmt_bind_param($stGetById, "i", $id);
        mysqli_stmt_execute($stGetById);
        $res = mysqli_stmt_get_result($stGetById);
        $resArray = mysqli_fetch_assoc($res);
        return $resArray;
    }

    function insert($inputs)
    {
        extract($inputs);
        $sql = "INSERT INTO students (id, name, enrollment_number, password, course, sem) VALUES (NULL, ?,?,?,?,?);";
        $stInsert = mysqli_prepare($this->con, $sql);
        mysqli_stmt_bind_param($stInsert, "ssssi", $name, $enrollment_number, $password, $course, $sem);
        mysqli_stmt_execute($stInsert);
        $resMsg = "Inserted Successfully";
        return $resMsg;
    }

    function update($inputs)
    {
        extract($inputs);
        $sql = "UPDATE students SET name = ?,  enrollment_number  = ?, password = ?, course = ?, sem = ? WHERE students.id = ?;";
        $stUpdate = mysqli_prepare($this->con, $sql);
        mysqli_stmt_bind_param($stUpdate, "ssssii", $name, $enrollment_number, $password, $course, $sem, $id);
        mysqli_stmt_execute($stUpdate);
        $resMsg = "Updated Successfully";
        return $resMsg;

    }

    function deleteById($id)
    {
        $sql = "DELETE FROM students WHERE students.id = ?;";
        $stDelete = mysqli_prepare($this->con, $sql);
        mysqli_stmt_bind_param($stDelete, "i", $id);
        mysqli_stmt_execute($stDelete);
        $resMsg = "Deleted Successfully";
        return $resMsg;
    }
}
