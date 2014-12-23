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

	
	$sql = mysql_query("SELECT * FROM leave1");
	$res = mysql_fetch_array($sql);
	$sd = $res['LeaveFromDt']; //leave start date
	$ed = $res['LeaveToDt']; //leave end date
	$lb = $res['Leavebal']; //leave balance
	$lds = new DateTime($sd);
	$lde = new DateTime($ed);
	$ld = $lde-$lds ;  //calculating different
	$newlb = $lb-$ld ; //current leave balance
	
	$submitBal = mysql_query("UPDATE `leave_app`.`staff`
SET `LeaveBal` = '$newlb'
WHERE LeaveID = $id");
	
		echo "Your Application has been Approved";
	Header("Location: Leave application admin.php");
?>
