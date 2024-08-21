<?php

$name = $_REQUEST["ename"];
$email = $_REQUEST["email"];
$password = $_REQUEST["password"];
$mobile = $_REQUEST["mno"];

if (isset($_REQUEST["submit"])) {

echo "name=" . $name."<br>";  
echo "email=" . $email."<br>"; 
echo "password=".$password."<br>";
echo "mobile=" . $mobile."<br>";
}

?>