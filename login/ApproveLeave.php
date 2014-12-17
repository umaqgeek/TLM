<?php
$dbuser="root";
$dbpass = "";
$dbhost = "localhost";
$db = "leave_app";
mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);

	$id = $_GET['status'];
	mysql_query("UPDATE `leave_app`.`leave1`
SET `LeaveStatus` = 'Approved'
WHERE LeaveID = $id");
	echo "Your Application has been Approved";
	Header("Location: Leave application admin.php");
?>
