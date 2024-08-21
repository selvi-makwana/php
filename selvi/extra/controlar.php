<?php

if (isset($_POST['submit'])) 
{
    $arr=array();
    $valu = $_POST["name"];
    $arr = explode("," ,$valu);
    var_dump($arr);
    

}

?>