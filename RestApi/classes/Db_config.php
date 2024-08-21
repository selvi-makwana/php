<?php
    class Db_config
    {
        private $host = "localhost";
        private $userName = "root";
        private $password = "";
        private $dbname = "mca24-25";
        public $con;
        function __construct()
        {
            try {
                $this->con = mysqli_connect($this->host,$this->userName,$this->password,$this->dbname) or 
                die("Some errors occurs during connection, Message:".mysqli_connect_error());
            } catch (Exception $e) {
                echo("Exception Occurs, Message:".$e);
            }
        }
    }

?>