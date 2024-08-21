<?php

    session_start();
    include_once "./classes/Student.php";

    $s = new Student();

    $_SESSION['msg'] = $s->update($_POST);

    header("Location: listStudent.php");

    
?>