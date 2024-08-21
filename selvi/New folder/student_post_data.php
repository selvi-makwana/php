<?php

    $name = $_POST["ename"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $rollno = $_POST["rnu"];
    $mobile = $_POST["mno"];

    if (isset($_POST["submit"])) {

    echo "name=" . $name."<br>";  
    echo "email=" . $email."<br>"; 
    echo "password=".$password."<br>";
    echo "rollno=" . $rollno."<br>";
    echo "mobile=" . $mobile."<br>";
    }

?>