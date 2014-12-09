<?php
$dbuser="root";
$dbpass = "";
$dbhost = "localhost";
$db = "leave_app";
mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);

	$id = $_GET['Modify'];
	mysql_query("DELETE FROM staff WHERE StaffID= $id");
	echo "The Staff Has Been Deleted";
	Header("Location: delete.php");
?>
