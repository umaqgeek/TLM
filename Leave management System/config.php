<?php
$user="root";
$pass = "";
$host = "localhost";
$db = "leave_app";
        
mysql_connect($host,$user,$pass);
mysql_select_db($db);
session_start()
?>