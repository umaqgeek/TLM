<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="Layout.css" rel="stylesheet" type="text/css" />
<link href="Menu.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body m background="blur.jpg">
<div id="Container">
<div id="Head"></div>
<div id="Navbar"></div>
<nav>
<ul>
    <li><img src="tuffah1.jpg" width="180" height="60" /></li>
	<li><b><a href="profile admin.php">Profile</a></b></li>
    <li><b><a href="leave application admin.php">Leave application</a></b></li>
    <li><b><a href="leave History.php">Leave history</a></b></li>
    <li><b><a href="account admin.php">Account</a></b></li>

</ul>
</nav>
<div id="Content"></div>
<div id="Footer">
</div>
</div>
<center>
<?php
$dbuser="root";
$dbpass = "";
$dbhost = "localhost";
$conn = mysql_connect($dbhost,$dbuser,$dbpass);

if(! $conn)
{
	die('could not connect: '. mysql_error());
}
$LeaveFromDt = $_POST['LeaveFromDt'];
$LeaveToDt = $_POST['LeaveToDt'];
$StaffName = $_POST['StaffName'];
$Note = $_POST['Note'];


$sql = "INSERT INTO leave ( LeaveFromDt, LeaveToDt, StaffName, Note) VALUES('$LeaveFromDt','$LeaveToDt','$StaffName','$Note')";

mysql_select_db('leave_app');
$retval = mysql_query($sql, $conn);
if($retval)
{
	echo "<b>SUCCESS!</b>";
	
}
else{
	die('could not get data: '. mysql_error());;
}
?>
<br /><br />
<a href="account admin.php"><input type="submit" value="Back"/></a>

</center>