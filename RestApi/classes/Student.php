<?php

include_once "Db_config.php";

class Student extends Db_config
{
    function getall(){
        $sql = "SELECT * FROM `student`;";
        $res = mysqli_query($this->con,$sql);
        
        $resArray = array();

        while($row = mysqli_fetch_assoc($res)){
            $resArray[] = $row;
        }
        return $resArray;
    }

    function getById($id){
        $sql = "SELECT * FROM student WHERE id =$id;";
        $res = mysqli_query($this->con,$sql);
        $resArray = mysqli_fetch_assoc($res); 
        return $resArray;
    }

    function insert($inputs){
        extract($inputs);
        $sql = "INSERT INTO student (id, name, enrollment_number, password, course, sem) VALUES (NULL, '$name', '$enrollment_number', '$password', '$course', $sem);";
        mysqli_query($this->con,$sql);
        $resMsg="Inserted Successfully";
        return $resMsg; 
    }

    function update($inputs){
        extract($inputs);
        $sql = "UPDATE student SET name = '$name',  enrollment_number  = '$enrollment_number', password = '$password', course = '$course', sem = '$sem' WHERE student.id = $id;";
        mysqli_query($this->con,$sql);
        $resMsg="Updated Successfully";
        return $resMsg; 
    }

    function deleteById($id){
        $sql = "DELETE FROM student WHERE student.id = $id;";
        mysqli_query($this->con,$sql);
        $resMsg = "Deleted Successfully"; 
        return $resMsg;
    }
}

?>