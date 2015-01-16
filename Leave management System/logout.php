<?php
session_start();
include("config.php");

session_destroy();
Header("Location:index.php");
?>
