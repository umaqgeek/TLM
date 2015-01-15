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
	
	$sah = "SELECT * FROM `leave_app`.`leave1` WHERE LeaveID = $id ";
	$nama = mysql_query($sah);
	$seq = mysql_fetch_array($nama);
	$Sid = $seq['StaffID'];
	$leaveday = $seq['LeaveDay'];

	$sequel = "SELECT * FROM `leave_app`.`staff` WHERE StaffID = $Sid ";
	$sa = mysql_query($sequel);
	$query = mysql_fetch_array($sa);
	$leavebal = $query['LeaveBal'];


	$newlb = $leavebal - $leaveday ; //current leave balance
	
	$tambah = ("UPDATE `leave_app`.`staff`
SET `LeaveBal` = '$newlb'
WHERE StaffID = $Sid");
    mysql_query($tambah);
	echo "Your Application has been Approved";
	Header("Location: leaveadd.php");
?>
