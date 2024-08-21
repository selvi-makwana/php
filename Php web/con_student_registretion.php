<?php

    session_start();
    include_once "./classes/Student.php";

    $s = new Student();

    $_SESSION['msg'] = $s->insert($_POST);

    header("Location: listStudent.php");

    
?>