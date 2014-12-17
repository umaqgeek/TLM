<?php
$dbuser="root";
$dbpass = "";
$dbhost = "localhost";
$db = "leave_app";
mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);

	$id = $_GET['Delete'];
	mysql_query("DELETE FROM leave1 WHERE LeaveID= $id");
	echo "Your Application has been Removed";
	Header("Location: Leave application admin.php");
?>
