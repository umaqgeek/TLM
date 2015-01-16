<?php
$dbuser="root";
$dbpass = "";
$dbhost = "localhost";
$db = "leave_app";
mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);

	$id = $_GET['status'];
	$query = mysql_query("SELECT * FROM leave1 WHERE LeaveID = $id");
	$res = mysql_fetch_array($query);
	
	$leavereq = $res['LeaveDay']; //leave requested
	$staffid = $res['StaffID']; // staff ID
	$status = $res['LeaveStatus']; // status leave
	
	$wer = mysql_query("SELECT * FROM staff WHERE StaffID = $staffid");
	$set = mysql_fetch_array($wer);
	
	$leavebal = $set['LeaveBal']; // Leave balance
	
	if($status == "Approved"){
		$newbal = $leavereq + $leavebal ; // new balance (leave requested + Leave balance)
		
		$add = "UPDATE staff SET `LeaveBal` = $newbal WHERE StaffID = $staffid";
		$reject = "UPDATE `leave_app`.`leave1`
			SET `LeaveStatus` = 'Rejected'
			WHERE LeaveID = $id";
		
			mysql_query($add);
			mysql_query($reject);
			
				Header("Location: leaveadd.php");
		
	}
	else{	
	mysql_query("UPDATE `leave_app`.`leave1`
SET `LeaveStatus` = 'Rejected'
WHERE LeaveID = $id");

	Header("Location: leaveadd.php");
	}
?>
