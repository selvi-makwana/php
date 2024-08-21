<?php

    session_start();
    include_once "./classes/Student.php";

    $s = new Student();

    $_SESSION['msg'] = $s->deleteById($_GET['id']);

    header("Location: listStudent.php");

    
?>