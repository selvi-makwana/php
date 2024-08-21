<?php

    

    if (isset($_GET["submit"])) {

        $name = $_GET["fname"];
        $email = $_GET["email"];
        $radio = $_GET["fav_language"];
        $checkbox = $_GET["vehicle1"];
        $color = $_GET["favcolor"];
        $name = $_GET["fname"];
        $email = $_GET["email"];
        $name = $_GET["fname"];
        $email = $_GET["email"];
        $name = $_GET["fname"];
        $email = $_GET["email"];
        $name = $_GET["fname"];
        $email = $_GET["email"];
        $name = $_GET["fname"];
        $email = $_GET["email"];
        $name = $_GET["fname"];
        $email = $_GET["email"];

        

    
    echo "chack=".implode(",",$_GET['vehicle1'] ?? [])."<br>";
    
    }

?>