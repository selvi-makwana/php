<?php
 session_start();
    $una=$_POST['uname'];
    $pas=$_POST['pass'];

   
    if (empty($una&&$pas)) {
        echo"plc enter username and password"; 
    }
    elseif($una=="piyu" && $pas=="1001") {
        header("Location:welcome.php");
    }
    else {
        echo"wrong username or password";

    }
?>