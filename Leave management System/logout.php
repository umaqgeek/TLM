<?php
session_start();
include("config.php");

session_destroy();
Header("Location:login.php");
?>
