<?php

   

    if (isset($_GET["submit"])) {

        $name = $_GET["ename"];
        $email = $_GET["email"];
        $password = $_GET["password"];
        $mobile = $_GET["mno"];

    echo "name=" . $name."<br>";  
    echo "email=" . $email."<br>"; 
    echo "password=".$password."<br>";
    echo "mobile=" . $mobile."<br>";
    }

?>