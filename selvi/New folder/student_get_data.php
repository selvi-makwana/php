<?php

    $name = $_GET["ename"];
    $email = $_GET["email"];
    $password = $_GET["password"];
    $rollno = $_GET["rnu"];
    $mobile = $_GET["mno"];

    if (isset($_GET["submit"])) {

    echo "name=" . $name."<br>";  
    echo "email=" . $email."<br>"; 
    echo "password=".$password."<br>";
    echo "rollno=" . $rollno."<br>";
    echo "mobile=" . $mobile."<br>";
    }

?>